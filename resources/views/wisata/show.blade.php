@extends('layouts.app')

@section('content')
    <div class="bg-black min-h-screen text-white selection:bg-purple-500/30">
        <!-- Full-Bleed Cinematic Hero -->
        <section class="relative h-screen flex items-end pb-12 lg:pb-24 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset($wisata->image_url) }}" alt="{{ $wisata->name }}"
                    class="w-full h-full object-cover opacity-60 scale-105 animate-slow-zoom">
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
                <div class="space-y-6 lg:space-y-8" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
                    <div
                        class="flex items-center space-x-3 px-4 py-2 rounded-full border-2 border-white/30 backdrop-blur-md bg-white/10 uppercase tracking-[0.4em] text-[10px] font-black">
                        <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span>
                        <span>Destinasi Ikonik</span>
                    </div>

                    <h1 x-show="loaded" x-transition:enter="transition ease-out duration-1000 delay-300"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        class="text-5xl md:text-7xl lg:text-[140px] font-black tracking-tighter leading-[0.9] lg:leading-[0.85]">
                        {{ $wisata->name }}
                    </h1>

                    <div x-show="loaded" x-transition:enter="transition ease-out duration-1000 delay-500"
                        x-transition:enter-start="opacity-0 translate-y-8"
                        class="flex flex-wrap items-center gap-6 lg:gap-8 pt-4 lg:pt-8">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Harga Dasar</span>
                            <span class="text-2xl lg:text-3xl font-black text-purple-400">Rp
                                {{ number_format($wisata->base_price_weekday, 0, ',', '.') }}</span>
                        </div>
                        <div class="hidden sm:block w-[1px] h-12 bg-white/10"></div>
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Pengalaman</span>
                            <span class="text-2xl lg:text-3xl font-black">Istimewa</span>
                        </div>
                        <div class="hidden sm:block w-[1px] h-12 bg-white/10"></div>
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Rating</span>
                            <span class="text-2xl lg:text-3xl font-black">4.9 / 5.0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Navigation Indicator -->
            <div class="absolute right-8 lg:right-12 bottom-24 hidden lg:flex flex-col items-center space-y-6">
                <div class="h-24 w-[1px] bg-gradient-to-t from-purple-500 to-transparent"></div>
                <span
                    class="text-[10px] font-bold rotate-90 origin-right uppercase tracking-[0.5em] text-gray-500">Jelajahi</span>
            </div>
        </section>

        <!-- Narrative Section -->
        <section
            class="py-20 lg:py-40 bg-white text-gray-900 border-none relative z-10 rounded-t-[3rem] lg:rounded-t-[5rem] -mt-10 lg:-mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 items-start">
                    <!-- Left: Narrative Text -->
                    <div class="lg:col-span-12 space-y-12 lg:space-y-20">
                        <div class="max-w-4xl mx-auto text-center space-y-6 lg:space-y-8">
                            <h2 class="text-xs font-black uppercase tracking-[0.5em] text-purple-700">Filosofi Destinasi
                            </h2>
                            <p class="text-3xl lg:text-5xl font-medium leading-[1.3] italic font-outfit tracking-tight">
                                "{{ $wisata->description }}"
                            </p>
                        </div>

                        <!-- Interstitial Image -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                            <div
                                class="aspect-[4/3] rounded-[2rem] lg:rounded-[4rem] overflow-hidden grayscale hover:grayscale-0 transition-all duration-1000 shadow-2xl skew-y-1">
                                <img src="{{ asset($wisata->image_url) }}" class="w-full h-full object-cover">
                            </div>
                            <div class="space-y-8 lg:space-y-12 lg:pl-12">
                                <div class="space-y-4 lg:space-y-6">
                                    <h3 class="text-2xl lg:text-3xl font-bold tracking-tight">Eksplorasi Tanpa Batas</h3>
                                    <p class="text-gray-500 text-base lg:text-lg leading-relaxed font-medium">
                                        Surabaya menyimpan kemegahan di balik setiap sudutnya. Di sini, sejarah yang agung
                                        berpadu selaras dengan visi masa depan, menciptakan atmosfer yang memikat bagi
                                        setiap penjelajah yang mencari makna di balik keindahan.
                                    </p>
                                </div>
                                <div class="grid grid-cols-2 gap-6 lg:gap-8">
                                    <div class="space-y-2">
                                        <div class="text-2xl lg:text-3xl font-black text-purple-700">08:00+</div>
                                        <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Jam
                                            Operasional</div>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="text-2xl lg:text-3xl font-black text-purple-700">{{ $remainingQuota }}
                                        </div>
                                        <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                                            Sisa Tiket Hari Ini</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ticket Section (Floating Glassmorphism) -->
        <section class="py-20 lg:py-40 bg-gray-50 text-gray-900 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gray-900 rounded-[3rem] lg:rounded-[5rem] overflow-hidden relative group">
                    <!-- Decor -->
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-900/40 to-transparent"></div>
                    <div
                        class="absolute -top-32 -right-32 w-96 h-96 bg-purple-600 rounded-full blur-[150px] opacity-20 group-hover:opacity-40 transition-opacity duration-1000">
                    </div>

                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-0">
                        <!-- Left: Info -->
                        <div class="p-8 lg:p-24 space-y-8 lg:space-y-12">
                            <div class="space-y-4">
                                <h3 class="text-xs font-black uppercase tracking-[0.5em] text-purple-400">Reservasi</h3>
                                <h4 class="text-4xl lg:text-7xl font-bold text-white tracking-tighter leading-none">Amankan
                                    <br> Tiket Anda.
                                </h4>
                            </div>

                            <div class="grid grid-cols-1 gap-6">
                                <div class="flex justify-between items-center py-6 border-b-2 border-white/20">
                                    <div class="space-y-1">
                                        <div class="text-white font-bold text-lg lg:text-xl">Hari Kerja</div>
                                        <div class="text-gray-400 text-xs uppercase tracking-widest font-black">Sen - Jum
                                        </div>
                                    </div>
                                    <div class="text-xl lg:text-2xl font-black text-white">Rp
                                        {{ number_format($wisata->base_price_weekday, 0, ',', '.') }}</div>
                                </div>
                                <div class="flex justify-between items-center py-6 border-b-2 border-white/20">
                                    <div class="space-y-1">
                                        <div class="text-white font-bold text-lg lg:text-xl">Akhir Pekan</div>
                                        <div class="text-gray-400 text-xs uppercase tracking-widest font-black">Sab - Min
                                        </div>
                                    </div>
                                    <div class="text-xl lg:text-2xl font-black text-purple-400">Rp
                                        {{ number_format($wisata->base_price_weekend, 0, ',', '.') }}</div>
                                </div>
                            </div>

                            <div
                                class="flex items-start lg:items-center space-x-4 pt-4 text-gray-500 text-sm italic font-medium">
                                <svg class="w-6 h-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>*Tiket dikirim instan melalui WhatsApp & Email setelah pembayaran
                                    terverifikasi.</span>
                            </div>
                        </div>

                        <!-- Right: Action Area -->
                        <div
                            class="bg-white/5 backdrop-blur-3xl p-8 lg:p-24 flex flex-col items-center justify-center text-center space-y-8 lg:space-y-12 border-t lg:border-t-0 lg:border-l border-white/10">
                            <div class="space-y-4">
                                <div class="text-5xl font-black text-white">{{ $wisata->capacity_per_day }}</div>
                                <div class="text-xs font-bold text-gray-400 uppercase tracking-[0.3em]">Kapasitas Harian
                                </div>
                            </div>

                            <a href="{{ route('user.booking.index', $wisata->slug) }}"
                                class="w-full bg-white text-gray-900 py-6 lg:py-8 px-8 lg:px-12 rounded-full font-black uppercase tracking-[0.3em] text-xs lg:text-sm hover:bg-purple-700 hover:text-white transition-all transform hover:scale-105 active:scale-95 shadow-2xl inline-flex items-center justify-center">
                                Konfirmasi & Bayar
                            </a>

                            <div class="flex items-center justify-center space-x-6 text-gray-400">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Visa_logo.png"
                                    class="h-4 grayscale hover:grayscale-0 transition-all opacity-40">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1280px-Mastercard-logo.svg.png"
                                    class="h-6 grayscale hover:grayscale-0 transition-all opacity-40">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Gojek_logo_2019.svg/2560px-Gojek_logo_2019.svg.png"
                                    class="h-4 grayscale hover:grayscale-0 transition-all opacity-40">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Style for Zoom Animation -->
        <style>
            @keyframes slow-zoom {
                0% {
                    transform: scale(1);
                }

                100% {
                    transform: scale(1.15);
                }
            }

            .animate-slow-zoom {
                animation: slow-zoom 20s ease-in-out infinite alternate;
            }
        </style>
    </div>
@endsection
