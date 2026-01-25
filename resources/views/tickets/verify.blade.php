@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 min-h-screen pt-28 pb-20 lg:pt-40 lg:pb-32 selection:bg-purple-500/30">
        <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-[2rem] border-2 border-gray-200 shadow-xl overflow-hidden relative">
                <!-- Status Banner -->
                <div
                    class="{{ $ticket->status == 'active' ? 'bg-green-500' : 'bg-gray-500' }} p-6 text-center text-white relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                        @if ($ticket->status == 'active')
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        @else
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        @endif
                    </div>
                    <h1 class="text-2xl font-black tracking-tight">
                        {{ $ticket->status == 'active' ? 'Tiket Valid' : 'Tiket Tidak Valid' }}</h1>
                    <p class="text-white/80 font-medium text-sm mt-1">Kode: {{ $ticket->ticket_code }}</p>
                </div>

                <!-- Ticket Details -->
                <div class="p-8 space-y-6">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="text-gray-500 text-sm">Wisata</span>
                            <span class="font-bold text-gray-900">{{ $ticket->wisata->name }}</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="text-gray-500 text-sm">Tanggal</span>
                            <span
                                class="font-bold text-gray-900">{{ \Carbon\Carbon::parse($ticket->visit_date)->format('d M Y') }}</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="text-gray-500 text-sm">Pengunjung</span>
                            <span class="font-bold text-gray-900">{{ $ticket->visitor_name }}</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="text-gray-500 text-sm">Status</span>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold uppercase {{ $ticket->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ $ticket->status }}
                            </span>
                        </div>
                    </div>

                    <div class="text-center pt-4">
                        <p class="text-[10px] text-gray-400 uppercase tracking-widest">SBYTickets Verification System</p>
                        <p class="text-xs text-gray-300 mt-1">{{ now()->format('d M Y H:i:s') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
