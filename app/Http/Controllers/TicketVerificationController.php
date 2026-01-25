<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketVerificationController extends Controller
{
    public function verify($ticket_code)
    {
        $ticket = Ticket::where('ticket_code', $ticket_code)
            ->with('wisata', 'order.user')
            ->firstOrFail();

        return view('tickets.verify', compact('ticket'));
    }
}
