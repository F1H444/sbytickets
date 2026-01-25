@extends('layouts.admin')

@section('content')
    <div class="space-y-8">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-gray-900 tracking-tight">Ikhtisar Dasbor</h1>
                <p class="text-gray-500 mt-1">Pantau performa platform Anda secara real-time.</p>
            </div>
            <div
                class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-sm text-gray-600 font-semibold shadow-sm flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                {{ now()->format('l, d F Y') }}
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Stat Card 1 -->
            <div
                class="bg-white p-6 rounded-2xl border-2 border-gray-200 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                </div>
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-purple-50 rounded-full group-hover:bg-purple-100 transition-colors">
                </div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Total Pendapatan</p>
                            <h3 class="text-3xl font-black text-gray-900 mt-2">Rp 0</h3>
                        </div>
                        <div class="p-2.5 bg-purple-50 text-purple-600 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-xs font-medium text-green-600">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span>+0% dari bulan lalu</span>
                    </div>
                </div>
            </div>

            <!-- Stat Card 2 -->
            <div
                class="bg-white p-6 rounded-2xl border-2 border-gray-200 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-blue-50 rounded-full group-hover:bg-blue-100 transition-colors">
                </div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Tiket Aktif</p>
                            <h3 class="text-3xl font-black text-gray-900 mt-2">0</h3>
                        </div>
                        <div class="p-2.5 bg-blue-50 text-blue-600 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-xs font-medium text-gray-400">
                        <span>Tidak ada pesanan aktif</span>
                    </div>
                </div>
            </div>

            <!-- Stat Card 3 -->
            <div
                class="bg-white p-6 rounded-2xl border-2 border-gray-200 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-green-50 rounded-full group-hover:bg-green-100 transition-colors">
                </div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Total Pengunjung</p>
                            <h3 class="text-3xl font-black text-gray-900 mt-2">0</h3>
                        </div>
                        <div class="p-2.5 bg-green-50 text-green-600 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-xs font-medium text-green-600">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span>+0 baru hari ini</span>
                    </div>
                </div>
            </div>

            <!-- Stat Card 4 -->
            <div
                class="bg-white p-6 rounded-2xl border-2 border-gray-200 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-yellow-50 rounded-full group-hover:bg-yellow-100 transition-colors">
                </div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Wisata</p>
                            <h3 class="text-3xl font-black text-gray-900 mt-2">{{ \App\Models\Wisata::count() ?? 0 }}
                            </h3>
                        </div>
                        <div class="p-2.5 bg-yellow-50 text-yellow-600 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-xs font-medium text-gray-500">
                        <span>Lokasi Aktif</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-50 bg-gray-50/50 flex items-center justify-between">
                <div>
                    <h3 class="font-bold text-lg text-gray-900">Transaksi Terbaru</h3>
                    <p class="text-xs text-gray-500">Pemesanan dan pembayaran terakhir yang berhasil</p>
                </div>
                <button
                    class="px-4 py-2 bg-white text-purple-700 text-sm font-bold rounded-lg border border-purple-100 hover:bg-purple-50 transition-colors">
                    Lihat Laporan
                </button>
            </div>
            <div class="p-12 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-50 mb-4">
                    <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                        </path>
                    </svg>
                </div>
                <h4 class="text-lg font-bold text-gray-900">Belum ada transaksi</h4>
                <p class="text-gray-500 text-sm mt-1 max-w-sm mx-auto">Setelah pelanggan mulai memesan tiket, transaksi
                    mereka akan muncul di sini secara instan.</p>
            </div>
        </div>
    </div>
@endsection
