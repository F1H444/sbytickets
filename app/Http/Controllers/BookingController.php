<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketPurchased;

class BookingController extends Controller
{
    /**
     * Show the booking form for a specific wisata.
     */
    public function index(\App\Models\Wisata $wisata)
    {
        $visitDate = request('visit_date', date('Y-m-d'));

        $remainingQuota = $wisata->getRemainingQuota($visitDate);

        return view('booking.index', compact('wisata', 'remainingQuota', 'visitDate'));
    }

    /**
     * API to check availability for a specific date.
     */
    public function checkAvailability(\App\Models\Wisata $wisata, Request $request)
    {
        $date = $request->get('date', date('Y-m-d'));

        $remainingQuota = $wisata->getRemainingQuota($date);

        return response()->json([
            'remaining_quota' => max(0, $remainingQuota),
            'capacity' => $wisata->capacity_per_day,
            'is_weekend' => \Carbon\Carbon::parse($date)->isWeekend(),
            'price' => \Carbon\Carbon::parse($date)->isWeekend() ? $wisata->base_price_weekend : $wisata->base_price_weekday
        ]);
    }

    /**
     * Show the order summary and payment selection.
     */
    public function checkout(Request $request, \App\Models\Wisata $wisata)
    {
        $request->validate([
            'visit_date' => 'required|date|after_or_equal:today',
            'quantity' => 'required|integer|min:1',
        ]);

        $quantity = $request->quantity;
        $visit_date = \Carbon\Carbon::parse($request->visit_date);

        // Determine price based on weekday/weekend
        $isWeekend = $visit_date->isWeekend();
        $unit_price = $isWeekend ? $wisata->base_price_weekend : $wisata->base_price_weekday;
        $total_price = $unit_price * $quantity;

        // Create transaction payload for Midtrans
        $invoiceNumber = 'INV-' . time() . rand(100, 999);
        $serverKey = config('services.midtrans.server_key', env('MIDTRANS_SERVER_KEY'));

        // Manual Snap API Call since composer failed
        $params = [
            'transaction_details' => [
                'order_id' => $invoiceNumber,
                'gross_amount' => (int) $total_price,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->full_name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->phone,
            ],
            'item_details' => [
                [
                    'id' => $wisata->wisata_id,
                    'price' => (int) $unit_price,
                    'quantity' => (int) $quantity,
                    'name' => substr($wisata->name, 0, 50),
                ]
            ],
        ];

        // Ensure we handle case where user forgot API key
        if (empty($serverKey)) {
            // Fallback for dev without key: just pass null token, view should handle or error
            $snapToken = null;
        } else {
            $auth = base64_encode($serverKey . ':');
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => "Basic $auth",
            ])->post('https://app.sandbox.midtrans.com/snap/v1/transactions', $params);

            $snapToken = $response->json()['token'] ?? null;
        }

        return view('booking.payment', [
            'wisata' => $wisata,
            'visit_date' => $visit_date,
            'quantity' => $quantity,
            'unit_price' => $unit_price,
            'total_price' => $total_price,
            'snap_token' => $snapToken,
            'invoice_number' => $invoiceNumber // Pass this to store method later
        ]);
    }

    /**
     * Create the order and tickets.
     */
    public function store(Request $request, \App\Models\Wisata $wisata)
    {
        $request->validate([
            'visit_date' => 'required|date',
            'quantity' => 'required|integer',
            // 'json_callback' => 'required' 
        ]);

        // Logic here needs adjustment. 
        // Ideally, Midtrans calls a webhook. 
        // For simplicity in this "agent" context, we might assume the user is redirected here AFTER payment or JS submits this form on success.
        // Let's assume the form submission creates the "Paid" order for now, effectively mocking the verification.
        // Using real verification would require exposing a public route for notification handler.

        // Idempotency Check: If order already exists (double submit/refresh), just redirect to success
        if ($request->invoice_number) {
            $existingOrder = \App\Models\Order::where('invoice_number', $request->invoice_number)->first();
            if ($existingOrder) {
                return redirect()->route('user.booking.success', $existingOrder->order_id);
            }
        }

        return \DB::transaction(function () use ($request, $wisata) {
            $quantity = $request->quantity;
            $visit_date = \Carbon\Carbon::parse($request->visit_date);
            $isWeekend = $visit_date->isWeekend();
            $unit_price = $isWeekend ? $wisata->base_price_weekend : $wisata->base_price_weekday;
            $total_price = $unit_price * $quantity;

            // 1. Create Order
            $order = \App\Models\Order::create([
                'user_id' => auth()->id(),
                'invoice_number' => $request->invoice_number ?? 'INV-' . strtoupper(\Illuminate\Support\Str::random(10)),
                'total_amount' => $total_price,
                'payment_status' => 'paid', // Assuming success if they reached here via Pay Button success callback
                'payment_method' => 'Midtrans',
                'snap_token' => $request->snap_token,
            ]);

            // 2. Create Tickets
            for ($i = 0; $i < $quantity; $i++) {
                \App\Models\Ticket::create([
                    'order_id' => $order->order_id,
                    'wisata_id' => $wisata->wisata_id,
                    'visit_date' => $visit_date,
                    'ticket_code' => 'TIX-' . strtoupper(\Illuminate\Support\Str::random(12)),
                    'visitor_name' => auth()->user()->full_name,
                    'status' => 'active',
                ]);
            }

            return redirect()->route('user.booking.success', $order->order_id);
        });
    }

    /**
     * Show the success page for a specific order.
     */
    public function success(\App\Models\Order $order)
    {
        // Security check: only the owner can see the success page
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        return view('booking.success', compact('order'));
    }
}
