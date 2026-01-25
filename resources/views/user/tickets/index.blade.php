@extends('layouts.user')

@section('content')
    <div class="space-y-8">
        <div>
            <h1 class="text-3xl font-black text-gray-900 tracking-tight">Tiket Saya</h1>
            <p class="text-gray-500 mt-1">Riwayat semua tiket wisata yang pernah Anda beli.</p>
        </div>

        @if ($tickets->isEmpty())
            <div class="bg-white rounded-[2rem] border border-gray-100 p-12 text-center shadow-sm">
                <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 text-gray-400">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900">Belum Ada Tiket</h3>
                <p class="text-gray-500 mt-2">Anda belum pernah melakukan pemesanan tiket.</p>
                <a href="{{ route('wisata') }}"
                    class="inline-block mt-6 px-6 py-3 bg-purple-700 text-white font-bold rounded-xl hover:bg-purple-800 transition-colors">
                    Jelajahi Wisata
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($tickets as $ticket)
                    <div
                        class="bg-white rounded-2xl border-2 border-gray-200 shadow-sm overflow-hidden hover:shadow-md transition-all group">
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset($ticket->wisata->image_url) }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="font-bold text-lg">{{ $ticket->wisata->name }}</h3>
                                <div class="flex items-center text-xs opacity-90 mt-1">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    {{ $ticket->wisata->location }}
                                </div>
                            </div>
                            <span
                                class="absolute top-4 right-4 px-2 py-1 bg-white/90 backdrop-blur text-xs font-bold rounded-lg uppercase tracking-wider {{ $ticket->status == 'active' ? 'text-green-700' : 'text-gray-500' }}">
                                {{ $ticket->status == 'active' ? 'Aktif' : 'Digunakan' }}
                            </span>
                        </div>

                        <div class="px-6 pt-6 pb-2 border-b border-gray-50 flex justify-center">
                            <div class="bg-gray-50 p-2 rounded-xl border border-gray-100 inline-block">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ route('ticket.verify', $ticket->ticket_code) }}"
                                    alt="QR Code" class="w-24 h-24">
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Tanggal Kunjung</span>
                                <span
                                    class="font-bold text-gray-900">{{ \Carbon\Carbon::parse($ticket->visit_date)->format('d M Y') }}</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Kode Tiket</span>
                                <span
                                    class="font-mono font-bold text-gray-900 bg-gray-50 px-2 py-1 rounded">{{ $ticket->ticket_code }}</span>
                            </div>
                            <div class="pt-4 border-t border-gray-50">
                                <button
                                    class="w-full py-2 text-center text-purple-700 font-bold text-sm hover:bg-purple-50 rounded-xl transition-colors">
                                    Lihat Detail & QR
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $tickets->links() }}
            </div>
        @endif
    </div>
@endsection
