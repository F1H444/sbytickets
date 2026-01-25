@extends('layouts.user')

@section('content')
    <div class="space-y-8">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-gray-900 tracking-tight">Dasbor Saya</h1>
                <p class="text-gray-500 mt-1">Kelola tiket dan lihat riwayat pemesanan Anda.</p>
            </div>
            <a href="{{ route('wisata') }}"
                class="inline-flex items-center justify-center px-6 py-3 bg-purple-700 hover:bg-purple-800 text-white font-bold rounded-xl transition-all shadow-lg shadow-purple-200 transform hover:-translate-y-0.5">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Pesan Tiket Baru
            </a>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="bg-white p-6 rounded-2xl border-2 border-gray-200 shadow-sm flex items-center space-x-4">
                <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center text-purple-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Tiket Aktif</p>
                    <p class="text-2xl font-black text-gray-900">{{ $activeTickets->total() }}</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-2xl border-2 border-gray-200 shadow-sm flex items-center space-x-4">
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Total Pesanan</p>
                    <p class="text-2xl font-black text-gray-900">{{ $totalOrders }}</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-2xl border-2 border-gray-200 shadow-sm flex items-center space-x-4">
                <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Selesai</p>
                    <p class="text-2xl font-black text-gray-900">{{ $completedOrders }}</p>
                </div>
            </div>
        </div>

        <!-- My Tickets Section -->
        <div class="space-y-5">
            <div class="flex items-center space-x-2">
                <h2 class="text-lg font-bold text-gray-900">Tiket Aktif</h2>
            </div>

            @if ($activeTickets->isEmpty())
                <!-- Empty State -->
                <div
                    class="bg-white rounded-[2rem] border border-gray-100 p-12 text-center shadow-sm relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-b from-purple-50/50 to-transparent"></div>
                    <div class="relative z-10">
                        <div
                            class="w-24 h-24 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-sm border border-gray-50 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-purple-300 group-hover:text-purple-500 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Belum Ada Tiket Aktif</h3>
                        <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed">Anda belum memiliki tiket aktif.
                            Jelajahi koleksi wisata kami
                            dan rencanakan petualangan Anda hari ini!</p>
                        <a href="{{ route('wisata') }}"
                            class="inline-flex items-center text-purple-700 font-bold hover:text-purple-900 hover:underline transition-colors">
                            Jelajahi Wisata
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($activeTickets as $ticket)
                        <div
                            class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                            <div>
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="font-bold text-lg text-gray-900">{{ $ticket->wisata->name }}</h3>
                                    <span
                                        class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-lg uppercase tracking-wider">Aktif</span>
                                </div>
                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        {{ \Carbon\Carbon::parse($ticket->visit_date)->format('d F Y') }}
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                            </path>
                                        </svg>
                                        {{ $ticket->ticket_code }}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 pt-4 border-t border-gray-50 flex justify-end">
                                <button
                                    class="text-sm font-bold text-purple-700 hover:text-purple-900 transition-colors">Lihat
                                    QR Code</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    {{ $activeTickets->links('vendor.pagination.tailwind') }}
                </div>
            @endif
        </div>

        <!-- Recent History -->
        <div class="space-y-5 pt-8 border-t border-gray-100">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-bold text-gray-900">Riwayat Pemesanan</h2>
            </div>

            @if ($recentOrders->isEmpty())
                <div class="bg-gray-50 rounded-xl p-8 text-center border border-dashed border-gray-200">
                    <p class="text-sm text-gray-400 font-medium italic">Belum ada riwayat pemesanan.</p>
                </div>
            @else
                <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr
                                class="bg-gray-50/50 text-gray-500 font-semibold uppercase tracking-wider text-xs border-b border-gray-100">
                                <th class="px-6 py-4">Invoice</th>
                                <th class="px-6 py-4">Total</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-right">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @foreach ($recentOrders as $order)
                                <tr>
                                    <td class="px-6 py-4 font-bold text-gray-900">{{ $order->invoice_number }}</td>
                                    <td class="px-6 py-4">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    {{ $order->payment_status == 'paid' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ ucfirst($order->payment_status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right text-gray-500">
                                        {{ $order->created_at->format('d M Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
