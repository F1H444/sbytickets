<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Dashboard - SBYTickets</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">
    <div x-data="{ sidebarOpen: false }" class="min-h-screen flex flex-col md:flex-row">

        <!-- Sidebar -->
        <aside
            class="fixed inset-y-0 left-0 z-50 w-72 bg-white border-r border-gray-100 transform transition-transform duration-300 md:translate-x-0 flex flex-col"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">

            <!-- Brand -->
            <div class="h-24 flex items-center px-8 border-b border-gray-50 shrink-0">
                <a href="{{ route('home') }}" class="group">
                    <span
                        class="text-2xl font-black tracking-tighter text-gray-900 group-hover:text-purple-700 transition-colors">
                        SBY<span class="text-purple-600 group-hover:text-purple-500 transition-colors">Tickets</span>.
                    </span>
                    <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase mt-0.5">Dasbor
                        Pengguna</span>
                </a>
            </div>

            <!-- Nav -->
            <nav class="flex-1 px-4 py-8 space-y-2 overflow-y-auto custom-scrollbar">
                <div class="text-xs font-bold text-gray-400 uppercase tracking-widest px-4 mb-3">Menu</div>

                <a href="{{ route('user.dashboard') }}"
                    class="flex items-center space-x-3 px-4 py-3.5 {{ request()->routeIs('user.dashboard') ? 'bg-purple-50 text-purple-700 font-bold ring-1 ring-purple-100 shadow-sm' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-semibold' }} rounded-xl transition-all group">
                    <div
                        class="p-1.5 {{ request()->routeIs('user.dashboard') ? 'bg-white text-purple-700 shadow-sm' : 'bg-gray-50 text-gray-400' }} rounded-lg group-hover:scale-110 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <span>Akun Saya</span>
                </a>

                <a href="{{ route('user.tickets.index') }}"
                    class="flex items-center space-x-3 px-4 py-3.5 {{ request()->routeIs('user.tickets.*') ? 'bg-purple-50 text-purple-700 font-bold ring-1 ring-purple-100 shadow-sm' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900 font-semibold' }} rounded-xl transition-all group">
                    <div
                        class="p-1.5 {{ request()->routeIs('user.tickets.*') ? 'bg-white text-purple-700 shadow-sm' : 'bg-gray-50 text-gray-400' }} rounded-lg group-hover:scale-110 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                            </path>
                        </svg>
                    </div>
                    <span>Tiket Saya</span>
                </a>
            </nav>

            <!-- Logout -->
            <div class="p-4 border-t border-gray-50 shrink-0">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex items-center space-x-3 px-4 py-3.5 w-full text-gray-500 hover:text-red-600 hover:bg-red-50 rounded-xl transition-all group font-medium">
                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        <span>Keluar</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Overlay -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false" x-cloak
            class="fixed inset-0 bg-black/50 z-40 md:hidden backdrop-blur-sm"></div>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col min-h-screen transition-all duration-300 md:pl-72">
            <!-- Topbar -->
            <header
                class="h-20 bg-white border-b border-gray-100 flex items-center justify-between px-6 sticky top-0 z-30">
                <div class="flex items-center space-x-4">
                    <button @click="sidebarOpen = !sidebarOpen"
                        class="md:hidden text-gray-500 hover:text-gray-900 transition-colors p-2 hover:bg-gray-50 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <a href="{{ route('home') }}"
                        class="flex items-center space-x-2 text-gray-500 hover:text-purple-600 transition-all group font-bold text-sm">
                        <div class="p-2 bg-gray-50 group-hover:bg-purple-50 rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                        </div>
                        <span class="hidden sm:inline">Beranda</span>
                    </a>
                </div>

                <div class="flex items-center space-x-4 ml-auto">
                    <div class="text-right hidden sm:block">
                        <span class="block text-sm font-bold text-gray-900">Halo, {{ Auth::user()->full_name }}</span>
                        <span class="block text-[10px] font-bold text-purple-600 uppercase tracking-widest">Member
                            Pengguna</span>
                    </div>
                    <div
                        class="w-10 h-10 rounded-full bg-purple-50 flex items-center justify-center text-purple-700 font-bold border-2 border-purple-100 shadow-sm">
                        {{ substr(Auth::user()->full_name, 0, 1) }}
                    </div>
                </div>
            </header>

            <div class="p-6 md:p-8 lg:p-10 flex-1 overflow-y-auto w-full max-w-7xl mx-auto">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
