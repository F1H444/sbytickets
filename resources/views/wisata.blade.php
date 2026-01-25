@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 min-h-screen">
        <!-- Dramatic Editorial Header -->
        <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">
                    <div class="lg:col-span-8 space-y-6 lg:space-y-8">
                        <div
                            class="flex items-center space-x-3 text-purple-700 font-bold uppercase tracking-[0.3em] text-[10px]">
                            <span class="w-12 h-[2px] bg-purple-700"></span>
                            <span>Koleksi 2026</span>
                        </div>
                        <h1
                            class="text-4xl md:text-7xl lg:text-[120px] font-bold text-gray-900 leading-[0.9] lg:leading-[0.85] tracking-tighter">
                            Eksplorasi <br>
                            <span class="text-purple-700">Tanpa Batas.</span>
                        </h1>
                    </div>
                    <div class="lg:col-span-4 lg:pt-20">
                        <p
                            class="text-gray-400 text-lg lg:text-xl font-medium leading-relaxed italic border-l-4 border-purple-200 pl-6 lg:pl-8">
                            "Menemukan keindahan di setiap sudut Surabaya, dari situs bersejarah hingga modernitas yang
                            memukau."
                        </p>
                    </div>
                </div>
            </div>
            <!-- Abstract Background Decor -->
            <div class="absolute top-0 right-0 w-1/3 h-full bg-purple-50/50 -skew-x-12 translate-x-1/2"></div>
        </section>

        <!-- Dynamic Wisata Feed -->
        <section class="py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="space-y-24 lg:space-y-40">
                    @foreach ($wisataList as $index => $dest)
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
                                        <span class="text-[10px] font-black text-purple-700 uppercase tracking-widest">Mulai
                                            dari</span>
                                        <div class="text-xl lg:text-2xl font-bold text-gray-900">Rp
                                            {{ number_format($dest->base_price_weekday, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                                <div class="lg:col-span-5 space-y-6 lg:space-y-8 lg:pl-12">
                                    <div class="space-y-2">
                                        <span
                                            class="text-xs font-bold text-gray-400 uppercase tracking-widest">{{ $dest->location }}</span>
                                        <h2
                                            class="text-3xl md:text-5xl lg:text-6xl font-bold text-gray-900 tracking-tighter group-hover:text-purple-700 transition-colors">
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
                                            class="text-3xl md:text-5xl lg:text-6xl font-bold text-gray-900 tracking-tighter group-hover:text-purple-700 transition-colors">
                                            {{ $dest->name }}</h2>
                                    </div>
                                    <p class="text-gray-500 text-base lg:text-lg leading-relaxed font-medium italic">
                                        "{{ $dest->description }}"
                                    </p>
                                    <a href="{{ route('wisata.show', $dest->slug) }}"
                                        class="inline-flex items-center space-x-4 text-gray-900 font-bold group/btn lg:flex-row-reverse lg:space-x-reverse">
                                        <span
                                            class="border-b-2 border-purple-200 group-hover/btn:border-purple-700 pb-1 transition-all">Lihat
                                            Detail Wisata</span>
                                        <div
                                            class="w-10 h-10 rounded-full bg-gray-900 text-white flex items-center justify-center transition-transform group-hover/btn:-translate-x-2">
                                            <svg class="w-5 h-5 transform lg:rotate-180" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="lg:col-span-7 order-1 lg:order-2 relative">
                                    <a href="{{ route('wisata.show', $dest->slug) }}"
                                        class="block relative aspect-[16/10] rounded-[2rem] lg:rounded-[3rem] overflow-hidden shadow-2xl transition-transform duration-700 group-hover:rotate-1">
                                        <img src="{{ asset($dest->image_url) }}" alt="{{ $dest->name }}"
                                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors">
                                        </div>
                                    </a>
                                    <!-- Floating Info Badge (Left Side) -->
                                    <div
                                        class="absolute -bottom-6 -left-6 lg:-bottom-10 lg:-left-10 bg-white p-6 lg:p-8 rounded-[2rem] lg:rounded-[2.5rem] shadow-xl max-w-xs transition-transform duration-700 group-hover:-translate-x-4">
                                        <span class="text-[10px] font-black text-purple-700 uppercase tracking-widest">Mulai
                                            dari</span>
                                        <div class="text-xl lg:text-2xl font-bold text-gray-900">Rp
                                            {{ number_format($dest->base_price_weekday, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                @if ($wisataList->isEmpty())
                    <div class="text-center py-40">
                        <p class="text-gray-400 font-medium text-2xl italic">"Belum ada wisata yang tersaji."</p>
                    </div>
                @endif
            </div>
        </section>

        <!-- Upsell Section -->
        <section class="py-20 lg:py-32 bg-gray-900 overflow-hidden relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center space-y-8 lg:space-y-12">
                    <h3 class="text-4xl lg:text-7xl font-bold text-white tracking-tighter leading-none">
                        Wujudkan Rencana <br> Wisata Anda.
                    </h3>
                    <p class="text-gray-400 text-base lg:text-lg max-w-xl mx-auto italic">"Kami mengurasi tempat-tempat
                        terbaik agar
                        setiap detik kunjungan Anda menjadi cerita yang berkesan."</p>
                    <div class="pt-8">
                        <a href="{{ route('register') }}"
                            class="bg-purple-700 hover:bg-purple-800 text-white px-10 lg:px-12 py-5 lg:py-6 rounded-full font-bold text-lg transition-all transform hover:scale-105 shadow-2xl w-full sm:w-auto inline-block">
                            Daftar & Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
