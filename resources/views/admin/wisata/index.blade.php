@extends('layouts.admin')

@section('content')
    <div class="space-y-8">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-gray-900 tracking-tight">Kelola Wisata</h1>
                <p class="text-gray-500 mt-1">Tambah, edit, atau hapus destinasi wisata Surabaya.</p>
            </div>
            <a href="{{ route('admin.wisata.create') }}"
                class="inline-flex items-center justify-center px-6 py-3 bg-purple-700 hover:bg-purple-800 text-white font-bold rounded-xl shadow-lg shadow-purple-200 transition-all transform hover:scale-105 active:scale-95">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah Wisata Baru
            </a>
        </div>

        @if (session('success'))
            <div class="p-4 bg-green-50 border border-green-100 text-green-700 rounded-xl flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-bold">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white rounded-2xl border-2 border-gray-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50/50 border-b border-gray-100">
                            <th class="px-6 py-4 text-xs font-black text-gray-400 uppercase tracking-widest">Wisata</th>
                            <th class="px-6 py-4 text-xs font-black text-gray-400 uppercase tracking-widest">Lokasi</th>
                            <th class="px-6 py-4 text-xs font-black text-gray-400 uppercase tracking-widest">Harga (WD/WE)
                            </th>
                            <th class="px-6 py-4 text-xs font-black text-gray-400 uppercase tracking-widest">Kapasitas</th>
                            <th class="px-6 py-4 text-xs font-black text-gray-400 uppercase tracking-widest text-right">Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse($wisata as $w)
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
                                            <img src="{{ asset($w->image_url) }}" alt="{{ $w->name }}"
                                                class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <div class="font-bold text-gray-900">{{ $w->name }}</div>
                                            <div class="text-xs text-gray-400">{{ $w->slug }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-600 font-medium">{{ $w->location }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm">
                                        <span class="font-bold text-gray-900">Rp
                                            {{ number_format($w->base_price_weekday, 0, ',', '.') }}</span>
                                        <span class="text-gray-400 mx-1">/</span>
                                        <span class="text-purple-600 font-bold">Rp
                                            {{ number_format($w->base_price_weekend, 0, ',', '.') }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-blue-50 text-blue-600">
                                        {{ $w->capacity_per_day }} org/hari
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('admin.wisata.edit', $w) }}"
                                            class="p-2 text-gray-400 hover:text-purple-700 hover:bg-purple-50 rounded-lg transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.wisata.destroy', $w) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus wisata ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center text-gray-500 italic">Belum ada data
                                    wisata.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
