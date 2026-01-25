@extends('layouts.app')

@section('content')
    <!-- Midtrans Snap -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.client_key') }}"></script>

    <div class="bg-gray-50 min-h-screen pt-28 pb-20 lg:pt-40 lg:pb-32 selection:bg-purple-500/30">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-12">
                <!-- Header -->
                <div class="text-center space-y-4">
                    <div
                        class="inline-flex items-center space-x-2 text-purple-700 font-bold uppercase tracking-widest text-[10px]">
                        <span class="w-8 h-[2px] bg-purple-700"></span>
                        <span>Ringkasan & Pembayaran</span>
                        <span class="w-8 h-[2px] bg-purple-700"></span>
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-black text-gray-900 tracking-tighter leading-none">
                        Tinjau <span class="text-purple-700">Pesanan.</span>
                    </h1>
                </div>

                <!-- Order Card -->
                <div class="bg-white rounded-[3rem] shadow-2xl overflow-hidden border border-gray-100">
                    <div class="p-8 lg:p-12 space-y-8">
                        <!-- Details -->
                        <div class="flex flex-col md:flex-row justify-between gap-8 pb-8 border-b border-gray-100">
                            <div class="space-y-4">
                                <h3 class="text-2xl font-bold text-gray-900">{{ $wisata->name }}</h3>
                                <div class="space-y-2">
                                    <div class="flex items-center text-sm text-gray-500 font-medium">
                                        <svg class="w-5 h-5 mr-3 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        {{ $visit_date->format('d F Y') }}
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500 font-medium">
                                        <svg class="w-5 h-5 mr-3 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        {{ $quantity }} Tiket
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-xs font-black text-gray-400 uppercase tracking-widest mb-1">Total Biaya
                                </div>
                                <div class="text-4xl font-black text-purple-700">Rp
                                    {{ number_format($total_price, 0, ',', '.') }}</div>
                            </div>
                        </div>

                        <!-- Price Breakdown -->
                        <div class="space-y-4">
                            <h4 class="text-[10px] font-black text-gray-900 uppercase tracking-widest">Rincian Harga</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between text-sm font-medium">
                                    <span class="text-gray-500">{{ $quantity }}x Tiket (@ Rp
                                        {{ number_format($unit_price, 0, ',', '.') }})</span>
                                    <span class="text-gray-900 font-bold">Rp
                                        {{ number_format($total_price, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex justify-between text-sm font-medium">
                                    <span class="text-gray-500">Biaya Layanan</span>
                                    <span
                                        class="text-green-600 font-bold uppercase tracking-widest text-[10px]">Gratis</span>
                                </div>
                                <div class="h-[1px] bg-gray-100 my-4"></div>
                                <div
                                    class="flex justify-between items-center bg-purple-50 -mx-8 px-8 py-4 lg:-mx-12 lg:px-12">
                                    <span class="font-black text-gray-900 uppercase tracking-widest text-xs">Total
                                        Pembayaran</span>
                                    <span class="text-2xl font-black text-purple-700">Rp
                                        {{ number_format($total_price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Action -->
                        <form action="{{ route('user.booking.store', $wisata->slug) }}" method="POST" class="pt-8">
                            @csrf
                            <input type="hidden" name="visit_date" value="{{ $visit_date->toDateString() }}">
                            <input type="hidden" name="quantity" value="{{ $quantity }}">
                            <input type="hidden" name="invoice_number" value="{{ $invoice_number }}">
                            <input type="hidden" name="snap_token" value="{{ $snap_token }}">

                            <div class="space-y-6">
                                <div
                                    class="flex items-center space-x-3 p-4 bg-yellow-50 rounded-2xl border border-yellow-100 text-yellow-800 text-xs font-medium">
                                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Dengan menekan tombol di bawah, Anda menyetujui syarat & ketentuan reservasi
                                        kami.</span>
                                </div>

                                <button type="button" id="pay-button"
                                    class="w-full bg-gray-900 text-white py-6 lg:py-8 px-12 rounded-full font-black uppercase tracking-[0.4em] text-xs lg:text-sm hover:bg-purple-700 transition-all transform hover:scale-105 active:scale-95 shadow-2xl flex items-center justify-center space-x-6">
                                    <span>Konfirmasi & Bayar</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>

                                <div class="flex items-center justify-center space-x-6 text-gray-400 pt-4">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Visa_logo.png"
                                        class="h-3 opacity-30">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1280px-Mastercard-logo.svg.png"
                                        class="h-5 opacity-30">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Gojek_logo_2019.svg/2560px-Gojek_logo_2019.svg.png"
                                        class="h-3 opacity-30">
                                </div>
                            </div>
                        </form>

                        <script type="text/javascript">
                            var payButton = document.getElementById('pay-button');
                            payButton.addEventListener('click', function() {
                                var snapToken = "{{ $snap_token }}";
                                if (snapToken) {
                                    window.snap.pay(snapToken, {
                                        onSuccess: function(result) {
                                            /* You may add your own implementation here */
                                            // alert("payment success!"); 
                                            // Submit form
                                            document.querySelector('form').submit();
                                        },
                                        onPending: function(result) {
                                            /* You may add your own implementation here */
                                            alert("wating your payment!");
                                            console.log(result);
                                        },
                                        onError: function(result) {
                                            /* You may add your own implementation here */
                                            alert("payment failed!");
                                            console.log(result);
                                        },
                                        onClose: function() {
                                            /* You may add your own implementation here */
                                            alert('you closed the popup without finishing the payment');
                                        }
                                    });
                                } else {
                                    // Fallback for dev/no token
                                    document.querySelector('form').submit();
                                }
                            });
                        </script>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('user.booking.index', $wisata->slug) }}"
                        class="text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-purple-700 transition-colors">
                        &larr; Kembali ke Pemilihan
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
