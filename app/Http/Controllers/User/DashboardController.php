<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $activeTickets = \App\Models\Ticket::whereHas('order', function ($query) use ($user) {
            $query->where('user_id', $user->user_id);
        })->where('status', 'active')
            ->with('wisata') // Eager load query
            ->latest()
            ->paginate(4);

        $totalOrders = \App\Models\Order::where('user_id', $user->user_id)->count();
        $completedOrders = \App\Models\Order::where('user_id', $user->user_id)->where('payment_status', 'paid')->count();

        // Recent orders
        $recentOrders = \App\Models\Order::where('user_id', $user->user_id)
            ->latest()
            ->take(5)
            ->get();

        return view('user.dashboard', compact('activeTickets', 'totalOrders', 'completedOrders', 'recentOrders'));
    }
}
