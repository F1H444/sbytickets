@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 min-h-screen flex items-center justify-center p-4 lg:p-8 selection:bg-purple-500/30">
        <div
            class="max-w-5xl mx-auto w-full bg-white rounded-[2.5rem] shadow-2xl overflow-hidden flex flex-col lg:flex-row shadow-purple-900/10">

            <!-- Left: Message & Actions -->
            <div
                class="lg:w-1/2 p-8 lg:p-12 flex flex-col justify-center text-center lg:text-left space-y-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-purple-500 to-pink-500"></div>
                <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-purple-50 rounded-full blur-3xl -z-10"></div>

                <div class="space-y-4">
                    <div
                        class="inline-flex items-center space-x-2 text-green-600 font-bold uppercase tracking-widest text-[10px] bg-green-50 px-3 py-1 rounded-full w-fit mx-auto lg:mx-0">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Pembayaran Berhasil</span>
                    </div>
                    <h1 class="text-4xl md:text-6xl lg:text-[100px] font-bold text-gray-900 tracking-tighter leading-[0.9]">
                        Layanan <br> <span class="text-purple-700">Eksklusif.</span>
                    </h1>
                    <p
                        class="text-gray-500 text-sm lg:text-base font-medium italic max-w-xl mx-auto border-t border-purple-100 pt-6 lg:pt-8 leading-relaxed">
                        "Kami dedikasikan seluruh sumber daya kami untuk memastikan setiap jengkal pengalaman Anda bersama
                        SBYTickets berjalan dalam balutan kenyamanan dan kepastian."
                    </p>
                    <p class="text-gray-500 leading-relaxed text-sm max-w-md mx-auto lg:mx-0">
                        Terima kasih, <strong>{{ $order->user->full_name }}</strong>. Salinan tiket dan bukti pembayaran
                        juga telah kami kirimkan ke <strong>{{ $order->user->email }}</strong>.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-4 pt-4">
                    <a href="{{ route('user.tickets.index') }}"
                        class="w-full sm:w-auto bg-gray-900 text-white px-8 py-4 rounded-xl font-bold transition-transform hover:scale-105 active:scale-95 shadow-lg flex items-center justify-center space-x-2 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                            </path>
                        </svg>
                        <span>Lihat Tiket Saya</span>
                    </a>
                    <a href="{{ route('home') }}"
                        class="w-full sm:w-auto px-8 py-4 rounded-xl font-bold text-gray-500 hover:bg-gray-50 transition-colors text-sm">
                        Kembali
                    </a>
                </div>
            </div>

            <!-- Right: Receipt Summary -->
            <div class="lg:w-1/2 bg-gray-50/50 p-8 lg:p-12 border-l-2 border-gray-100 flex flex-col justify-center">
                <div class="bg-white rounded-2xl border-2 border-gray-200 shadow-sm p-6 space-y-6 relative">
                    <!-- Invoice Header -->
                    <div class="flex justify-between items-start border-b-2 border-gray-100 pb-4">
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-gray-400 font-bold">No. Invoice</p>
                            <p class="text-lg font-mono font-bold text-gray-900 mt-1">{{ $order->invoice_number }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-[10px] uppercase tracking-widest text-gray-400 font-bold">Total</p>
                            <p class="text-lg font-bold text-purple-700 mt-1">Rp
                                {{ number_format($order->total_amount, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <!-- Compact Ticket List (Scrollable if many) -->
                    <div class="space-y-3 max-h-[200px] overflow-y-auto pr-2 custom-scrollbar">
                        @foreach ($order->tickets as $ticket)
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl border border-gray-100">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="w-10 h-10 bg-white rounded-lg flex items-center justify-center border border-gray-100 shadow-sm">
                                        <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-gray-900">{{ $ticket->ticket_code }}</p>
                                        <p class="text-[10px] text-gray-500">{{ $ticket->wisata->name }}</p>
                                    </div>
                                </div>
                                <div class="bg-white p-1 rounded-lg border border-gray-100">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data={{ route('ticket.verify', $ticket->ticket_code) }}"
                                        alt="QR" class="w-8 h-8">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="text-center pt-2">
                        <p class="text-[10px] text-gray-400 italic">Scan QR pada tiket untuk verifikasi masuk.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EmailJS Integration -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("{{ config('services.emailjs.public_key') }}");
        })();

        document.addEventListener('DOMContentLoaded', function() {
            const orderId = "{{ $order->order_id }}";
            // Use a more robust check for development
            console.log('Attempting to send email for Order:', orderId);

            const templateParams = {
                to_name: "{{ $order->user->full_name }}",
                to_email: "{{ $order->user->email }}",
                invoice_number: "{{ $order->invoice_number }}",
                total_amount: "Rp {{ number_format($order->total_amount, 0, ',', '.') }}",
                order_date: "{{ \Carbon\Carbon::parse($order->tickets->first()->visit_date)->format('d M Y') }}",
                ticket_count: "{{ $order->tickets->count() }}",
                ticket_link: "{{ route('user.tickets.index') }}",
                message: "Selamat! Pesanan tiket Anda di SBYTickets telah terverifikasi. Silakan akses tiket digital Anda melalui tautan di bawah ini."
            };

            emailjs.send(
                "{{ config('services.emailjs.service_id') }}",
                "{{ config('services.emailjs.template_id') }}",
                templateParams
            ).then(function(response) {
                console.log('EMAIL SENT SUCCESS!', response.status, response.text);
            }, function(error) {
                console.error('EMAIL SEND FAILED...', error);
                alert('Gagal mengirim email: ' + JSON.stringify(error));
            });
        });
    </script>
@endsection
