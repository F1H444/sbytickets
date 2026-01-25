<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - SBYTickets</title>
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
            class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-900 text-white transform transition-transform duration-300 md:translate-x-0 flex flex-col"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">

            <!-- Brand -->
            <div
                class="h-24 flex items-center justify-center border-b border-white/10 bg-slate-900/50 backdrop-blur-xl shrink-0">
                <span class="text-2xl font-black tracking-tighter">
                    SBY<span class="text-purple-400">Tickets</span> <span
                        class="text-[10px] text-zinc-400 block font-medium tracking-widest uppercase mt-1 text-center">Panel
                        Admin</span>
                </span>
            </div>

            <!-- Nav -->
            <nav class="flex-1 px-4 py-8 space-y-3 overflow-y-auto custom-scrollbar">
                <div class="text-xs font-bold text-white/40 uppercase tracking-widest px-4 mb-2">Menu Utama</div>

                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center space-x-3 px-4 py-3.5 {{ request()->routeIs('admin.dashboard') ? 'bg-purple-600 text-white shadow-lg shadow-purple-900/20 ring-1 ring-white/10' : 'text-zinc-400 hover:text-white hover:bg-white/5' }} rounded-xl transition-all duration-200 group relative overflow-hidden">
                    @if (request()->routeIs('admin.dashboard'))
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-purple-600 to-purple-500 opacity-100 transition-opacity">
                        </div>
                    @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.dashboard') ? 'text-white relative z-10' : 'group-hover:text-purple-400 transition-colors' }}"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    <span
                        class="font-bold {{ request()->routeIs('admin.dashboard') ? 'relative z-10' : 'font-medium' }}">Dasbor</span>
                </a>

                <!-- Placeholder for future links -->
                <a href="{{ route('admin.users.index') }}"
                    class="flex items-center space-x-3 px-4 py-3.5 {{ request()->routeIs('admin.users.*') ? 'bg-purple-600 text-white shadow-lg shadow-purple-900/20 ring-1 ring-white/10' : 'text-zinc-400 hover:text-white hover:bg-white/5' }} rounded-xl transition-all duration-200 group relative overflow-hidden">
                    @if (request()->routeIs('admin.users.*'))
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-purple-600 to-purple-500 opacity-100 transition-opacity">
                        </div>
                    @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.users.*') ? 'text-white relative z-10' : 'group-hover:text-purple-400 transition-colors' }}"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <span
                        class="font-bold {{ request()->routeIs('admin.users.*') ? 'relative z-10' : 'font-medium' }}">Pengguna</span>
                </a>

                <a href="{{ route('admin.wisata.index') }}"
                    class="flex items-center space-x-3 px-4 py-3.5 {{ request()->routeIs('admin.wisata.*') ? 'bg-purple-600 text-white shadow-lg shadow-purple-900/20 ring-1 ring-white/10' : 'text-zinc-400 hover:text-white hover:bg-white/5' }} rounded-xl transition-all duration-200 group relative overflow-hidden">
                    @if (request()->routeIs('admin.wisata.*'))
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-purple-600 to-purple-500 opacity-100 transition-opacity">
                        </div>
                    @endif
                    <svg class="w-5 h-5 {{ request()->routeIs('admin.wisata.*') ? 'text-white relative z-10' : 'group-hover:text-purple-400 transition-colors' }}"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span
                        class="font-bold {{ request()->routeIs('admin.wisata.*') ? 'relative z-10' : 'font-medium' }}">Wisata</span>
                </a>
            </nav>

            <!-- Profile / Logout -->
            <div class="p-4 border-t border-white/10 bg-slate-900/50 shrink-0">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex items-center space-x-3 px-4 py-3 w-full text-zinc-400 hover:text-white hover:bg-white/5 rounded-xl transition-all group">
                        <svg class="w-5 h-5 group-hover:text-red-400 transition-colors" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        <span class="font-medium">Keluar</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Overlay -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false" x-cloak
            class="fixed inset-0 bg-black/50 z-40 md:hidden backdrop-blur-sm"></div>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col min-h-screen transition-all duration-300 md:pl-64">
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
                        <span class="block text-sm font-bold text-gray-900">Selamat Datang,
                            {{ Auth::user()->full_name }}</span>
                        <span
                            class="block text-[10px] font-bold text-purple-600 uppercase tracking-widest">Administrator</span>
                    </div>
                    <div
                        class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-700 font-bold border-2 border-purple-200 shadow-sm">
                        {{ substr(Auth::user()->full_name, 0, 1) }}
                    </div>
                </div>
            </header>

            <div class="p-6 md:p-8 lg:p-10 flex-1 overflow-y-auto">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
