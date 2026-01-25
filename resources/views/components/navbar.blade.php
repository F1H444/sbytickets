<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

@php
    $isDarkHero = request()->routeIs('wisata.show');
@endphp

<div x-data="{
    open: false,
    scrolled: false,
    isDark: {{ $isDarkHero ? 'true' : 'false' }}
}" @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false" class="relative">

    <nav class="fixed top-0 left-0 right-0 z-[100] transition-all duration-300 border-b-2"
        :class="{
            'bg-white shadow-md py-0 border-gray-200': scrolled || open,
            'bg-transparent py-2 border-transparent': !scrolled && !open
        }">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">

                <div class="flex-shrink-0 flex items-center z-[110]">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo SBYTickets"
                            class="w-10 h-10 object-contain transition-transform duration-500 group-hover:rotate-12"
                            onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=ST&background=7e22ce&color=fff&bold=true&rounded=true';">

                        <span class="text-xl font-black tracking-tight transition-colors duration-300"
                            :class="(scrolled || open || !isDark) ? 'text-gray-900' : 'text-white'">
                            SBY<span
                                :class="(scrolled || open || !isDark) ? 'text-purple-700' : 'text-purple-400'">Tickets</span>
                        </span>
                    </a>
                </div>

                <div class="hidden lg:flex items-center space-x-8 relative z-50">
                    @foreach ([['route' => 'home', 'label' => 'Beranda'], ['route' => 'about', 'label' => 'Tentang'], ['route' => 'wisata', 'label' => 'Wisata'], ['route' => 'contact', 'label' => 'Kontak']] as $item)
                        <a href="{{ route($item['route']) }}" class="text-sm font-bold transition-all duration-200"
                            :class="(scrolled || !isDark) ? 'text-gray-600 hover:text-purple-700' :
                            'text-white/80 hover:text-white'">
                            {{ $item['label'] }}
                        </a>
                    @endforeach

                    <div class="flex items-center space-x-4 border-l-2 pl-6 border-gray-200">
                        @guest
                            <a href="{{ route('login') }}" class="text-sm font-bold transition-colors"
                                :class="(scrolled || !isDark) ? 'text-gray-900' : 'text-white'">Login</a>
                            <a href="{{ route('register') }}"
                                class="bg-purple-700 hover:bg-purple-800 text-white px-5 py-2 rounded-full text-sm font-bold shadow-lg shadow-purple-200 transition-all transform hover:scale-105 active:scale-95">Daftar</a>
                        @endguest

                        @auth
                            <a href="{{ Auth::user()->role && Auth::user()->role->role_name === 'Super Admin' ? route('admin.dashboard') : route('user.dashboard') }}"
                                class="flex items-center space-x-2 bg-purple-100 text-purple-700 px-5 py-2 rounded-full text-sm font-black shadow-sm border border-purple-200 hover:bg-purple-200 transition-all transform hover:scale-105">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        @endauth
                    </div>
                </div>

                <div class="lg:hidden flex items-center z-[110]">
                    <button type="button" @click="open = !open"
                        class="p-2 rounded-lg transition-all focus:outline-none"
                        :class="(scrolled || open || !isDark) ? 'bg-gray-100 text-gray-900' :
                        'bg-white/10 text-white border border-white/20'">

                        <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>

                        <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="open" x-cloak @click.away="open = false" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            class="lg:hidden absolute top-full left-0 w-full bg-white border-b border-gray-100 shadow-xl overflow-hidden">

            <div class="px-6 py-8 space-y-4">
                @foreach ([['route' => 'home', 'label' => 'Beranda'], ['route' => 'wisata', 'label' => 'Wisata'], ['route' => 'about', 'label' => 'Tentang'], ['route' => 'contact', 'label' => 'Kontak']] as $item)
                    <a href="{{ route($item['route']) }}"
                        class="block text-2xl font-bold text-gray-900 hover:text-purple-700 transition-colors">
                        {{ $item['label'] }}
                    </a>
                @endforeach

                <div class="pt-6 grid grid-cols-2 gap-4 border-t-2 border-gray-200">
                    @guest
                        <a href="{{ route('login') }}"
                            class="flex items-center justify-center py-3 rounded-xl font-bold border-2 border-gray-100 text-gray-900">Login</a>
                        <a href="{{ route('register') }}"
                            class="flex items-center justify-center py-3 rounded-xl font-bold bg-purple-700 text-white shadow-lg shadow-purple-100">Daftar</a>
                    @endguest

                    @auth
                        <a href="{{ Auth::user()->role && Auth::user()->role->role_name === 'Super Admin' ? route('admin.dashboard') : route('user.dashboard') }}"
                            class="col-span-2 flex items-center justify-center space-x-2 py-4 rounded-xl font-black bg-purple-50 text-purple-700 border border-purple-100 shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Buka Dasbor</span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</div>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
