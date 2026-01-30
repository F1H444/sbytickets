<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Ticket;
use App\Models\Wisata;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRevenue = Order::where('payment_status', 'paid')->sum('total_amount');
        $activeTicketsCount = Ticket::where('status', 'active')->count();
        $totalVisitors = Ticket::count(); // Assuming all sold tickets are potential visitors
        $latestOrders = Order::with(['user', 'tickets.wisata'])->latest()->take(5)->get();
        $wisataCount = Wisata::count();

        // Simple growth calculation for display
        $lastMonthRevenue = Order::where('payment_status', 'paid')
            ->whereMonth('created_at', now()->subMonth()->month)
            ->sum('total_amount');
        $revenueGrowth = $lastMonthRevenue > 0
            ? (($totalRevenue - $lastMonthRevenue) / $lastMonthRevenue) * 100
            : 0;

        return view('admin.dashboard', compact(
            'totalRevenue',
            'activeTicketsCount',
            'totalVisitors',
            'latestOrders',
            'wisataCount',
            'revenueGrowth'
        ));
    }
}
