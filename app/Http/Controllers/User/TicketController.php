<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = \App\Models\Ticket::whereHas('order', function ($query) {
            $query->where('user_id', auth()->id());
        })
            ->with('wisata')
            ->latest()
            ->paginate(9);

        return view('user.tickets.index', compact('tickets'));
    }
}
