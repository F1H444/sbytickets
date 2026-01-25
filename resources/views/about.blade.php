@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <!-- Hero Section -->
        <section class="relative h-[60vh] lg:h-[80vh] flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0">
                <img src="{{ asset('images/hero-beranda.png') }}" alt="Surabaya City"
                    class="w-full h-full object-cover opacity-30 scale-105 animate-slow-zoom">
                <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-white/50"></div>
            </div>
            <div class="relative z-10 text-center max-w-4xl mx-auto px-4 mt-16 lg:mt-0">
                <span
                    class="block text-purple-700 font-bold uppercase tracking-[0.3em] mb-4 lg:mb-6 text-xs lg:text-base">Tentang
                    Kami</span>
                <h1
                    class="text-4xl md:text-6xl md:text-8xl font-black text-gray-900 tracking-tighter mb-4 lg:mb-8 max-w-3xl mx-auto leading-none">
                    Mendefinisikan Ulang <br> <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-purple-700 to-purple-400">Eksplorasi.</span>
                </h1>
                <p class="text-base lg:text-2xl text-gray-500 font-medium italic max-w-2xl mx-auto leading-relaxed px-4">
                    "SBYTickets hadir sebagai jembatan digital menuju kemegahan Surabaya, menyatukan warisan sejarah dan
                    visi modernitas dalam satu genggaman prestisius."
                </p>
            </div>
        </section>

        <!-- Story Section -->
        <section class="py-20 lg:py-32 bg-white relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">
                    <div class="space-y-8 lg:space-y-12">
                        <div class="space-y-6">
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 tracking-tight">Lebih Dari Sekadar <br>
                                Platform
                                Tiket.</h2>
                            <div class="w-24 h-1 bg-purple-700"></div>
                        </div>
                        <div class="prose prose-lg text-gray-500 text-base lg:text-lg">
                            <p>
                                SBYTickets bukanlah sekadar platform reservasi. Kami adalah kurator pengalaman yang
                                berdedikasi untuk membuka pintu eksklusivitas menuju destinasi terbaik. Kami percaya bahwa
                                narasi Surabaya layak dinikmati dengan kenyamanan kelas dunia.
                            </p>
                            <p>
                                Dari sakralnya monumen perjuangan hingga simfoni alam yang menenangkan, setiap aspek layanan
                                kami dirancang untuk memastikan perjalanan Anda dimulai dengan impresi yang luar biasa.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 gap-8 lg:gap-12 pt-4 lg:pt-8">
                            <div>
                                <h3 class="text-4xl lg:text-5xl font-black text-gray-900 mb-2">15+</h3>
                                <p class="text-xs lg:text-sm font-bold uppercase tracking-widest text-purple-700">Destinasi
                                    Premium</p>
                            </div>
                            <div>
                                <h3 class="text-4xl lg:text-5xl font-black text-gray-900 mb-2">10k+</h3>
                                <p class="text-xs lg:text-sm font-bold uppercase tracking-widest text-purple-700">Pengguna
                                    Aktif</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative mt-12 lg:mt-0">
                        <div
                            class="aspect-[4/5] rounded-[2rem] lg:rounded-[3rem] overflow-hidden shadow-2xl rotate-3 hover:rotate-0 transition-all duration-700 border-2 border-gray-100">
                            <img src="{{ asset('images/wisata/tugu-pahlawan.jpeg') }}" class="w-full h-full object-cover">
                        </div>
                        <div
                            class="absolute -bottom-10 -left-10 w-40 h-40 bg-purple-100 rounded-full -z-10 mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                        </div>
                        <div
                            class="absolute -top-10 -right-10 w-40 h-40 bg-purple-200 rounded-full -z-10 mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-20 lg:py-32 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-20">
                    <h2 class="text-xs lg:text-sm font-black text-purple-700 uppercase tracking-widest mb-4">Nilai Kami</h2>
                    <h3 class="text-3xl md:text-5xl font-bold text-gray-900 tracking-tight">Mengapa Memilih SBYTickets?</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                    <div
                        class="bg-white p-8 lg:p-10 rounded-[2rem] shadow-lg hover:-translate-y-2 transition-transform duration-500 border-2 border-gray-100">
                        <div
                            class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-700 mb-8">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">Akses Instan</h4>
                        <p class="text-gray-500 leading-relaxed text-sm lg:text-base">
                            Tidak perlu lagi mengantre di loket. Dapatkan tiket digital Anda dalam hitungan detik dan masuk
                            dengan sistem scanning QR-Code kami yang canggih.
                        </p>
                    </div>
                    <div
                        class="bg-white p-8 lg:p-10 rounded-[2rem] shadow-lg hover:-translate-y-2 transition-transform duration-500 delay-100 border-2 border-gray-100">
                        <div
                            class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-700 mb-8">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h4 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">Aman & Terpercaya</h4>
                        <p class="text-gray-500 leading-relaxed text-sm lg:text-base">
                            Bekerja sama langsung dengan Pemerintah Kota Surabaya untuk menjamin keamanan transaksi dan
                            validitas tiket wisata Anda.
                        </p>
                    </div>
                    <div
                        class="bg-white p-8 lg:p-10 rounded-[2rem] shadow-lg hover:-translate-y-2 transition-transform duration-500 delay-200 border-2 border-gray-100">
                        <div
                            class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-700 mb-8">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h4 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">Layanan Sepenuh Hati</h4>
                        <p class="text-gray-500 leading-relaxed text-sm lg:text-base">
                            Tim dukungan pelanggan kami siap membantu Anda 24/7 memastikan setiap rencana perjalanan
                            berjalan dengan lancar tanpa hambatan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 lg:py-32 bg-gray-900 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <h2 class="text-4xl md:text-6xl font-bold text-white mb-6 lg:mb-8 tracking-tighter">Mulai Perjalanan Anda.
                </h2>
                <p class="text-gray-400 text-lg lg:text-xl italic mb-8 lg:mb-12 max-w-2xl mx-auto">"Temukan keajaiban
                    Surabaya bersama mitra
                    perjalanan terbaik Anda."</p>
                <a href="{{ route('wisata') }}"
                    class="inline-block bg-purple-600/20 backdrop-blur-md border border-purple-500/30 text-white px-10 lg:px-12 py-4 lg:py-5 rounded-full font-bold hover:bg-purple-600 transition-all hover:scale-105">
                    Cari Destinasi
                </a>
            </div>
        </section>
    </div>
@endsection
