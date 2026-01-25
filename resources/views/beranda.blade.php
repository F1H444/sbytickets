@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <!-- Bespoke Hero Section -->
        <section class="relative min-h-[90vh] flex items-center pt-32 pb-20 lg:pt-20 lg:pb-0 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-12 items-center">
                    <!-- Text Content -->
                    <div class="lg:col-span-7 space-y-6 lg:space-y-8 relative z-10 text-center lg:text-left"
                        x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
                        <div x-show="loaded" x-transition:enter="transition ease-out duration-700"
                            x-transition:enter-start="opacity-0 -translate-y-4"
                            class="flex items-center justify-center lg:justify-start space-x-2 text-purple-700 font-bold uppercase tracking-widest text-[10px]">
                            <span class="w-8 h-[2px] bg-purple-700"></span>
                            <span>Jelajahi Surabaya</span>
                        </div>

                        <h1 x-show="loaded" x-transition:enter="transition ease-out duration-700 delay-200"
                            x-transition:enter-start="opacity-0 -translate-y-4"
                            class="text-5xl md:text-6xl lg:text-[100px] font-bold text-gray-900 leading-[0.9] tracking-tighter">
                            Pesan Tiket <br>
                            <span class="text-purple-700">Anti Ribet.</span>
                        </h1>

                        <p x-show="loaded" x-transition:enter="transition ease-out duration-700 delay-400"
                            x-transition:enter-start="opacity-0 -translate-y-4"
                            class="text-gray-500 text-base md:text-lg max-w-lg mx-auto lg:mx-0 font-medium leading-relaxed font-outfit italic">
                            "Menghadirkan akses eksklusif ke setiap sudut magis Surabaya. Definisi baru dalam menjelajahi
                            sejarah dan modernitas Jawa Timur."
                        </p>

                        <div x-show="loaded" x-transition:enter="transition ease-out duration-700 delay-600"
                            x-transition:enter-start="opacity-0 -translate-y-4"
                            class="flex items-center justify-center lg:justify-start space-x-6 pt-4">
                            <a href="{{ route('wisata') }}"
                                class="group relative inline-flex items-center space-x-3 bg-gray-900 text-white px-8 py-4 lg:py-5 rounded-full font-bold overflow-hidden transition-all hover:pr-12 active:scale-95 shadow-xl shadow-gray-900/20">
                                <span class="relative z-10">Jelajahi Sekarang</span>
                                <svg class="w-5 h-5 relative z-10 transform group-hover:translate-x-2 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Visual Content -->
                    <div class="lg:col-span-5 relative mt-8 lg:mt-0">
                        <div
                            class="relative w-full aspect-[4/5] rounded-[2.5rem] lg:rounded-[3rem] overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-700">
                            <img src="{{ asset('images/hero-beranda.png') }}" alt="Surabaya Landmark"
                                class="w-full h-full object-cover">
                        </div>
                        <!-- Decorative Elements -->
                        <div
                            class="absolute -bottom-10 -left-10 w-32 h-32 lg:w-40 lg:h-40 bg-purple-100 rounded-full -z-10 animate-pulse">
                        </div>
                        <div class="absolute -top-10 -right-10 w-48 h-48 lg:w-64 lg:h-64 bg-gray-50 rounded-full -z-10">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bespoke Section: Featured Destinations -->
        <section class="py-20 lg:py-32 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-16 lg:mb-20">
                    <h2 class="text-xs font-black uppercase tracking-[0.5em] text-purple-700 mb-4 ml-1">Unggulan</h2>
                    <div class="flex flex-col md:flex-row justify-between items-baseline gap-6">
                        <h3 class="text-4xl md:text-5xl font-bold text-gray-900 tracking-tighter">Destinasi <br>
                            Ikonik Pilihan</h3>
                        <p class="max-w-xs text-gray-500 font-medium italic text-sm border-l-2 border-purple-200 pl-4">"Kami
                            mengurasi pengalaman paling prestisius untuk menyempurnakan perjalanan Anda."</p>
                    </div>
                </div>

                <div class="space-y-24 lg:space-y-32">
                    @foreach ($wisataList->take(3) as $index => $dest)
                        @if ($index % 2 == 0)
                            <!-- Left Aligned Layout -->
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center group">
                                <div class="lg:col-span-7 relative">
                                    <a href="{{ route('wisata.show', $dest->slug) }}"
                                        class="block relative aspect-[16/10] rounded-[2rem] lg:rounded-[3rem] overflow-hidden shadow-2xl transition-transform duration-700 group-hover:-rotate-1">
                                        <img src="{{ asset($dest->image_url) }}" alt="{{ $dest->name }}"
                                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors">
                                        </div>
                                    </a>
                                    <!-- Floating Info Badge -->
                                    <div
                                        class="absolute -bottom-6 -right-6 lg:-bottom-10 lg:-right-10 bg-white p-6 lg:p-8 rounded-[2rem] lg:rounded-[2.5rem] shadow-xl max-w-xs transition-transform duration-700 group-hover:translate-x-4">
                                        <span class="text-[10px] font-black text-purple-700 uppercase tracking-widest">Rate
                                            from</span>
                                        <div class="text-xl lg:text-2xl font-bold text-gray-900">Rp
                                            {{ number_format($dest->base_price_weekday, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                                <div class="lg:col-span-5 space-y-6 lg:space-y-8 lg:pl-12">
                                    <div class="space-y-2">
                                        <span
                                            class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ $dest->location }}</span>
                                        <h2
                                            class="text-3xl md:text-4xl lg:text-6xl font-bold text-gray-900 tracking-tighter group-hover:text-purple-700 transition-colors">
                                            {{ $dest->name }}</h2>
                                    </div>
                                    <p class="text-gray-500 text-base lg:text-lg leading-relaxed font-medium italic">
                                        "{{ $dest->description }}"
                                    </p>
                                    <a href="{{ route('wisata.show', $dest->slug) }}"
                                        class="inline-flex items-center space-x-4 text-gray-900 font-bold group/btn">
                                        <span
                                            class="border-b-2 border-purple-200 group-hover/btn:border-purple-700 pb-1 transition-all">Lihat
                                            Detail Wisata</span>
                                        <div
                                            class="w-10 h-10 rounded-full bg-gray-900 text-white flex items-center justify-center transition-transform group-hover/btn:translate-x-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @else
                            <!-- Right Aligned Layout -->
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center group">
                                <div
                                    class="lg:col-span-5 order-2 lg:order-1 space-y-6 lg:space-y-8 lg:pr-12 text-left lg:text-right flex flex-col items-start lg:items-end">
                                    <div class="space-y-2">
                                        <span
                                            class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ $dest->location }}</span>
                                        <h2
                                            class="text-3xl md:text-4xl lg:text-6xl font-bold text-gray-900 tracking-tighter group-hover:text-purple-700 transition-colors">
                                            {{ $dest->name }}</h2>
                                    </div>
                                    <p class="text-gray-500 text-base lg:text-lg leading-relaxed font-medium italic">
                                        "{{ $dest->description }}"
                                    </p>
                                    <a href="{{ route('wisata.show', $dest->slug) }}"
                                        class="inline-flex items-center space-x-4 text-gray-900 font-bold group/btn lg:flex-row-reverse lg:space-x-reverse">
                                        <span
                                            class="border-b-[3px] border-purple-200 group-hover/btn:border-purple-700 pb-1 transition-all">Lihat
                                            Detail Wisata</span>
                                        <div
                                            class="w-10 h-10 rounded-full bg-gray-900 text-white flex items-center justify-center transition-transform group-hover/btn:-translate-x-2 border-2 border-gray-900">
                                            <svg class="w-5 h-5 transform lg:rotate-180" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="lg:col-span-7 order-1 lg:order-2 relative">
                                    <a href="{{ route('wisata.show', $dest->slug) }}"
                                        class="block relative aspect-[16/10] rounded-[2rem] lg:rounded-[3rem] overflow-hidden shadow-2xl transition-transform duration-700 group-hover:rotate-1 border-2 border-gray-100">
                                        <img src="{{ asset($dest->image_url) }}" alt="{{ $dest->name }}"
                                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors">
                                        </div>
                                    </a>
                                    <!-- Floating Info Badge (Left Side) -->
                                    <div
                                        class="absolute -bottom-6 -left-6 lg:-bottom-10 lg:-left-10 bg-white p-6 lg:p-8 rounded-[2rem] lg:rounded-[2.5rem] shadow-xl max-w-xs transition-transform duration-700 group-hover:-translate-x-4 border-2 border-gray-200">
                                        <span class="text-[10px] font-black text-purple-700 uppercase tracking-widest">Rate
                                            from</span>
                                        <div class="text-xl lg:text-2xl font-bold text-gray-900">Rp
                                            {{ number_format($dest->base_price_weekday, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="mt-20 lg:mt-32 text-center">
                    <a href="{{ route('wisata') }}"
                        class="inline-flex items-center space-x-4 text-purple-700 font-bold hover:text-purple-900 transition-colors border-b-2 border-purple-100 pb-2">
                        <span>Lihat Seluruh Wisata</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Bespoke Section: Experience -->
        <section class="py-20 lg:py-32 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                    <div class="relative order-2 lg:order-1">
                        <div class="grid grid-cols-2 gap-4 lg:gap-6">
                            <div class="space-y-4 lg:space-y-6">
                                <div
                                    class="aspect-square bg-purple-700 rounded-[1.5rem] lg:rounded-[2rem] flex flex-col items-center justify-center p-6 lg:p-8 text-white shadow-xl rotate-3">
                                    <span class="text-3xl lg:text-4xl font-black mb-2">15+</span>
                                    <span
                                        class="text-[10px] font-bold uppercase tracking-widest text-purple-200">Destinasi</span>
                                </div>
                                <div class="aspect-[3/4] bg-gray-100 rounded-[1.5rem] lg:rounded-[2rem] overflow-hidden">
                                    <img src="{{ asset('images/wisata/atlantis-land.jpg') }}"
                                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                                </div>
                            </div>
                            <div class="space-y-4 lg:space-y-6 pt-10 lg:pt-12">
                                <div class="aspect-[3/4] bg-gray-100 rounded-[1.5rem] lg:rounded-[2rem] overflow-hidden">
                                    <img src="{{ asset('images/wisata/mangrove.jpg') }}"
                                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                                </div>
                                <div
                                    class="aspect-square bg-gray-900 rounded-[1.5rem] lg:rounded-[2rem] flex flex-col items-center justify-center p-6 lg:p-8 text-white shadow-xl -rotate-3">
                                    <span class="text-3xl lg:text-4xl font-black mb-2">4.9</span>
                                    <span
                                        class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 space-y-8 lg:space-y-10">
                        <h4 class="text-xs font-black uppercase tracking-[0.5em] text-purple-700">Sistem Modern</h4>
                        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 tracking-tighter leading-tight">
                            Digitalisasi Tiket <br>
                            Untuk Masa Depan.</h3>
                        <p class="text-gray-500 font-medium leading-relaxed italic">"Kami percaya bahwa akses wisata
                            haruslah semudah bernafas. Lupakan antrean panjang dan sambut kemudahan reservasi digital di
                            ujung jari Anda."</p>

                        <ul class="space-y-5 lg:space-y-6">
                            <li class="flex items-center space-x-4">
                                <div
                                    class="w-10 h-10 lg:w-12 lg:h-12 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-700">
                                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="font-bold text-gray-800">Verifikasi QR-Code Cepat</span>
                            </li>
                            <li class="flex items-center space-x-4">
                                <div
                                    class="w-10 h-10 lg:w-12 lg:h-12 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-700">
                                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="font-bold text-gray-800">Pembayaran Aman & Beragam</span>
                            </li>
                            <li class="flex items-center space-x-4">
                                <div
                                    class="w-10 h-10 lg:w-12 lg:h-12 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-700">
                                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="font-bold text-gray-800">Riwayat Pesanan Terintegrasi</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bespoke Contact Teaser -->
        <section class="py-20 lg:py-32 bg-gray-900 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center space-y-8">
                    <h3 class="text-4xl lg:text-7xl font-bold text-white tracking-tighter">Sudah Siap Memulai <br>
                        Perjalanan Anda?</h3>
                    <p class="text-gray-400 max-w-lg mx-auto font-medium italic text-base lg:text-lg">"Bergabunglah dengan
                        ribuan wisatawan yang
                        telah merasakan kemudahan bersama SBYTickets."</p>
                    <div
                        class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6 pt-4">
                        <a href="/register"
                            class="bg-purple-700 hover:bg-purple-800 text-white px-10 py-5 rounded-full font-bold shadow-2xl transition-all hover:scale-105 active:scale-95 w-full sm:w-auto">Daftar
                            Sekarang</a>
                        <a href="{{ route('contact') }}"
                            class="text-white font-bold hover:text-purple-400 border-b border-white/20 pb-2 transition-all">Hubungi
                            Bantuan</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
