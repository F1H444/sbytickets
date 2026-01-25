@extends('layouts.admin')

@section('content')
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.wisata.index') }}"
                class="p-2 bg-white border border-gray-100 rounded-xl text-gray-400 hover:text-gray-900 transition-colors shadow-sm">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
            </a>
            <div>
                <h1 class="text-3xl font-black text-gray-900 tracking-tight">Edit Wisata</h1>
                <p class="text-gray-500 mt-1">Perbarui informasi wisata <span
                        class="text-purple-700 font-bold">{{ $wisata->name }}</span>.</p>
            </div>
        </div>

        <form action="{{ route('admin.wisata.update', $wisata->wisata_id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT')

            <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-black text-gray-900 uppercase tracking-widest">Nama Wisata</label>
                        <input type="text" name="name" value="{{ old('name', $wisata->name) }}" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-100 rounded-xl focus:ring-2 focus:ring-purple-500 focus:bg-white transition-all outline-none"
                            placeholder="Contoh: Tugu Pahlawan">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-black text-gray-900 uppercase tracking-widest">Lokasi</label>
                        <input type="text" name="location" value="{{ old('location', $wisata->location) }}" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-100 rounded-xl focus:ring-2 focus:ring-purple-500 focus:bg-white transition-all outline-none"
                            placeholder="Contoh: Jl. Pahlawan, Alun-alun Contong">
                        @error('location')
                            <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-black text-gray-900 uppercase tracking-widest">Harga Weekday</label>
                        <div class="relative">
                            <span class="absolute left-4 top-3.5 text-gray-400 font-bold">Rp</span>
                            <input type="number" name="base_price_weekday"
                                value="{{ old('base_price_weekday', $wisata->base_price_weekday) }}" required
                                class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-gray-100 rounded-xl focus:ring-2 focus:ring-purple-500 focus:bg-white transition-all outline-none"
                                placeholder="0">
                        </div>
                        @error('base_price_weekday')
                            <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-black text-gray-900 uppercase tracking-widest">Harga Weekend</label>
                        <div class="relative">
                            <span class="absolute left-4 top-3.5 text-gray-400 font-bold">Rp</span>
                            <input type="number" name="base_price_weekend"
                                value="{{ old('base_price_weekend', $wisata->base_price_weekend) }}" required
                                class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-gray-100 rounded-xl focus:ring-2 focus:ring-purple-500 focus:bg-white transition-all outline-none"
                                placeholder="0">
                        </div>
                        @error('base_price_weekend')
                            <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-black text-gray-900 uppercase tracking-widest">Kapasitas Per Hari</label>
                        <input type="number" name="capacity_per_day"
                            value="{{ old('capacity_per_day', $wisata->capacity_per_day) }}" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-100 rounded-xl focus:ring-2 focus:ring-purple-500 focus:bg-white transition-all outline-none"
                            placeholder="100">
                        @error('capacity_per_day')
                            <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2 text-center flex flex-col justify-center">
                        <label class="text-sm font-black text-gray-900 uppercase tracking-widest mb-2">Status Wisata</label>
                        <div class="flex items-center justify-center gap-6">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="is_active" value="1"
                                    {{ old('is_active', $wisata->is_active) ? 'checked' : '' }}
                                    class="w-4 h-4 text-purple-700">
                                <span class="text-sm font-bold text-gray-700">Aktif</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="is_active" value="0"
                                    {{ !old('is_active', $wisata->is_active) ? 'checked' : '' }}
                                    class="w-4 h-4 text-gray-400">
                                <span class="text-sm font-bold text-gray-400">Non-Aktif</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-black text-gray-900 uppercase tracking-widest">Deskripsi</label>
                    <textarea name="description" rows="4" required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-100 rounded-[1.5rem] focus:ring-2 focus:ring-purple-500 focus:bg-white transition-all outline-none resize-none"
                        placeholder="Ceritakan tentang daya tarik wisata ini...">{{ old('description', $wisata->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-black text-gray-900 uppercase tracking-widest">Foto Wisata</label>
                    <div class="relative group mt-2">
                        <input type="file" name="image" id="image" class="hidden" accept="image/*"
                            onchange="previewImage(event)">
                        <label for="image"
                            class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-gray-200 rounded-[2rem] cursor-pointer hover:border-purple-300 hover:bg-purple-50 transition-all overflow-hidden relative">
                            <div id="placeholder" class="{{ $wisata->image_url ? 'hidden' : '' }} space-y-2 text-center">
                                <svg class="w-12 h-12 text-gray-300 mx-auto" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="text-gray-400 font-bold block">Klik untuk ganti foto</span>
                            </div>
                            <img id="preview" src="{{ $wisata->image_url ? asset($wisata->image_url) : '#' }}"
                                class="{{ $wisata->image_url ? '' : 'hidden' }} absolute inset-0 w-full h-full object-cover">
                        </label>
                    </div>
                    @error('image')
                        <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('admin.wisata.index') }}"
                    class="px-8 py-4 text-gray-500 font-bold hover:text-gray-900 transition-colors">Batal</a>
                <button type="submit"
                    class="px-10 py-4 bg-gray-900 text-white font-bold rounded-full shadow-xl shadow-gray-200 transition-all transform hover:scale-105 active:scale-95">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            const preview = document.getElementById('preview');
            const placeholder = document.getElementById('placeholder');

            reader.onload = function() {
                preview.src = reader.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
