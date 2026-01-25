<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-white border-r border-gray-100 lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-8 px-6">
        <a href="/" class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-200">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </div>
            <span class="text-xl font-bold tracking-tight text-gray-900">
                SBY<span class="text-blue-600">Tickets</span>
            </span>
        </a>
    </div>

    <!-- Mobile close button -->
    <div class="lg:hidden absolute top-0 right-0 p-4">
        <button @click="sidebarOpen = false" class="text-gray-500 hover:text-gray-600 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <nav class="mt-10 px-4 space-y-2">
        <!-- Dashboard Link -->
        <a class="flex items-center px-4 py-3 text-blue-600 bg-blue-50 rounded-xl transition-all duration-200"
            href="#">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="mx-4 font-semibold">Dasbor</span>
        </a>

        <!-- Destinasi (Admin) -->
        <a class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-200 group"
            href="#">
            <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="mx-4 font-medium">Kelola Destinasi</span>
        </a>

        <!-- Tiket (User) -->
        <a class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-200 group"
            href="#">
            <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path
                    d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="mx-4 font-medium">Tiket Saya</span>
        </a>

        <!-- Transaksi -->
        <a class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-200 group"
            href="#">
            <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="mx-4 font-medium">Transaksi</span>
        </a>

        <!-- Promo (Admin) -->
        <a class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-200 group"
            href="#">
            <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path
                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="mx-4 font-medium">Kelola Promo</span>
        </a>

        <div class="pt-10">
            <span class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Akun</span>
            <a class="mt-4 flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50/50 rounded-xl transition-all duration-200 group"
                href="#">
                <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="mx-4 font-medium">Profil</span>
            </a>
            <a class="flex items-center px-4 py-3 text-red-600 hover:bg-red-50 rounded-xl transition-all duration-200 group"
                href="#">
                <svg class="h-5 w-5 text-red-400 group-hover:text-red-600" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="mx-4 font-medium">Keluar</span>
            </a>
        </div>
    </nav>
</div>

<!-- Sidebar Mobile Overlay -->
<div x-show="sidebarOpen" @click="sidebarOpen = false"
    class="fixed inset-0 z-20 bg-black/50 transition-opacity lg:hidden"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
