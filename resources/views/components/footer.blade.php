<footer class="bg-gray-900 border-t border-gray-800 pt-24 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 mb-20 text-white">
            <div class="col-span-1 md:col-span-2 lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 mb-8 group">
                    <div
                        class="w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    </div>
                    <span class="text-2xl font-black tracking-tighter">
                        SBY<span class="text-purple-400">Tickets</span>
                    </span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed mb-8 max-w-xs font-medium">
                    Platform reservasi tiket wisata digital resmi untuk mengeksplorasi keindahan destinasi di Kota
                    Surabaya dengan mudah dan terpercaya.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="w-12 h-12 rounded-2xl bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-purple-600 hover:text-white transition-all transform hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-12 h-12 rounded-2xl bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-purple-600 hover:text-white transition-all transform hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-black uppercase text-xs tracking-widest mb-10 text-purple-400">Layanan</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('home') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Beranda</a>
                    </li>
                    <li><a href="{{ route('wisata') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Cari
                            Tiket</a>
                    </li>
                    <li><a href="{{ route('about') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Tentang
                            Kami</a>
                    </li>
                    <li><a href="{{ route('guide') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Panduan
                            Wisata</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-black uppercase text-xs tracking-widest mb-10 text-purple-400">Terpopuler
                </h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('wisata.show', 'alun-alun-surabaya') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Balai
                            Pemuda</a>
                    </li>
                    <li><a href="{{ route('wisata.show', 'kebun-binatang-surabaya') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">KBS
                            Wonokromo</a></li>
                    <li><a href="{{ route('wisata.show', 'museum-kapal-selam') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Museum
                            Kapal
                            Selam</a></li>
                    <li><a href="{{ route('wisata.show', 'pagoda-tian-ti') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Ken
                            Park Surabaya</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-black uppercase text-xs tracking-widest mb-10 text-purple-400">Bantuan</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('contact') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Hubungi
                            Kami</a>
                    </li>

                    <li><a href="{{ route('terms') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Syarat
                            &
                            Ketentuan</a></li>
                    <li><a href="{{ route('privacy') }}"
                            class="text-gray-400 hover:text-white transition-colors font-medium hover:translate-x-2 inline-block duration-300">Kebijakan
                            Privasi</a></li>
                </ul>
            </div>
        </div>

        <div
            class="pt-12 border-t-2 border-gray-800 flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0 text-xs font-bold text-gray-500 uppercase tracking-widest">
            <p class="text-center md:text-left">&copy; {{ date('Y') }} SBYTickets. Hak Cipta Dilindungi.</p>
            <div class="flex space-x-8">
                <span>Surabaya, Indonesia</span>
            </div>
        </div>
    </div>
</footer>
