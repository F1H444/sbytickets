<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; background-color: #f3f4f6; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; padding: 30px; }
        .header { text-align: center; border-bottom: 2px solid #f3f4f6; padding-bottom: 20px; margin-bottom: 20px; }
        .footer { text-align: center; margin-top: 30px; font-size: 12px; color: #9ca3af; }
        .ticket-box { background: #f9fafb; border: 1px dashed #d1d5db; padding: 15px; border-radius: 8px; margin-bottom: 15px; }
        .btn { display: inline-block; padding: 12px 24px; background-color: #7e22ce; color: white; text-decoration: none; border-radius: 6px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 style="margin:0; color:#111827;">SBYTickets</h2>
            <p style="margin:5px 0 0; color:#6b7280;">Tiket Perjalanan Anda Siap!</p>
        </div>

        <p>Halo <strong>{{ $order->user->full_name }}</strong>,</p>
        <p>Terima kasih telah memesan tiket di SBYTickets. Berikut adalah detail pesanan Anda:</p>

        <p><strong>No. Invoice:</strong> {{ $order->invoice_number }}<br>
        <strong>Total Bayar:</strong> Rp {{ number_format($order->total_amount, 0, ',', '.') }}</p>

        <h3>Tiket Anda:</h3>
        @foreach($order->tickets as $ticket)
            <div class="ticket-box">
                <div style="margin-bottom: 10px;">
                    <strong style="font-size: 18px; color: #111827;">{{ $ticket->wisata->name }}</strong>
                </div>
                <p style="margin: 5px 0;">Kode: <strong style="font-family: monospace;">{{ $ticket->ticket_code }}</strong></p>
                <p style="margin: 5px 0;">Tanggal: {{ \Carbon\Carbon::parse($ticket->visit_date)->format('d M Y') }}</p>
                <br>
                <div style="text-align: center;">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ route('ticket.verify', $ticket->ticket_code) }}" 
                         alt="QR Code" width="100">
                    <p style="font-size: 10px; color: #6b7280; margin-top: 5px;">Scan untuk verifikasi</p>
                </div>
            </div>
        @endforeach

        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ route('user.dashboard') }}" class="btn">Lihat di Dashboard</a>
        </div>

        <div class="footer">
            &copy; {{ date('Y') }} SBYTickets. Hak cipta dilindungi.
        </div>
    </div>
</body>
</html>
