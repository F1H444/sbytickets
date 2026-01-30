@extends('layouts.user')

@section('content')
    <div class="space-y-8">
        <div>
            <h1 class="text-3xl font-black text-gray-900 tracking-tight">Edit Profil</h1>
            <p class="text-gray-500 mt-1">Perbarui informasi akun dan foto profil Anda.</p>
        </div>

        @if (session('success'))
            <div class="bg-emerald-50 border border-emerald-100 text-emerald-700 px-6 py-4 rounded-2xl flex items-center space-x-3 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-bold text-sm">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white rounded-3xl border-2 border-gray-100 shadow-sm overflow-hidden">
            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data" class="divide-y divide-gray-50">
                @csrf
                @method('PUT')

                <!-- Photo Section -->
                <div class="p-8 space-y-6">
                    <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-8">
                        <div class="relative group">
                            <div class="w-32 h-32 rounded-2xl bg-gray-100 border-4 border-white shadow-md overflow-hidden flex items-center justify-center relative">
                                @if(Auth::user()->profile_photo)
                                    <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-purple-50 flex items-center justify-center text-purple-700 text-3xl font-black">
                                        {{ substr(Auth::user()->full_name, 0, 1) }}
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex-1 space-y-2">
                            <label for="profile_photo" class="block text-sm font-bold text-gray-900 uppercase tracking-widest">Foto Profil</label>
                            <input type="file" name="profile_photo" id="profile_photo" 
                                class="block w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-black file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100 transition-all cursor-pointer">
                            <p class="text-xs text-gray-400">Rasio 1:1, JPG atau PNG, Maks. 2MB</p>
                            @error('profile_photo')
                                <p class="text-xs text-red-500 font-bold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Bio Section -->
                <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label for="full_name" class="block text-sm font-bold text-gray-900 uppercase tracking-widest">Nama Lengkap</label>
                        <input type="text" name="full_name" id="full_name" value="{{ old('full_name', Auth::user()->full_name) }}"
                            class="w-full px-5 py-3.5 bg-gray-50 border-2 border-transparent focus:border-purple-600 focus:bg-white rounded-2xl outline-none transition-all font-semibold"
                            placeholder="Contoh: John Doe">
                        @error('full_name')
                            <p class="text-xs text-red-500 font-bold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="phone" class="block text-sm font-bold text-gray-900 uppercase tracking-widest">Nomor HP</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', Auth::user()->phone) }}"
                            class="w-full px-5 py-3.5 bg-gray-50 border-2 border-transparent focus:border-purple-600 focus:bg-white rounded-2xl outline-none transition-all font-semibold"
                            placeholder="Contoh: 08123456789">
                        @error('phone')
                            <p class="text-xs text-red-500 font-bold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-gray-400 uppercase tracking-widest">Alamat Email</label>
                        <input type="email" disabled value="{{ Auth::user()->email }}"
                            class="w-full px-5 py-3.5 bg-gray-100 border-2 border-transparent text-gray-400 rounded-2xl font-semibold cursor-not-allowed">
                        <p class="text-[10px] text-gray-400 font-bold italic mt-1">* Email tidak dapat diubah</p>
                    </div>
                </div>

                <!-- Password Section -->
                <div class="p-8 space-y-6">
                    <div class="flex items-center space-x-2">
                        <div class="w-1 h-6 bg-purple-600 rounded-full"></div>
                        <h2 class="text-lg font-bold text-gray-900">Ubah Kata Sandi</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label for="password" class="block text-sm font-bold text-gray-900 uppercase tracking-widest text-[11px]">Sandi Baru</label>
                            <input type="password" name="password" id="password"
                                class="w-full px-5 py-3.5 bg-gray-50 border-2 border-transparent focus:border-purple-600 focus:bg-white rounded-2xl outline-none transition-all font-semibold"
                                placeholder="••••••••">
                            @error('password')
                                <p class="text-xs text-red-500 font-bold mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="password_confirmation" class="block text-sm font-bold text-gray-900 uppercase tracking-widest text-[11px]">Konfirmasi Sandi</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="w-full px-5 py-3.5 bg-gray-50 border-2 border-transparent focus:border-purple-600 focus:bg-white rounded-2xl outline-none transition-all font-semibold"
                                placeholder="••••••••">
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 italic">Kosongkan jika tidak ingin mengubah kata sandi.</p>
                </div>

                <!-- Action Section -->
                <div class="p-8 bg-gray-50/50 flex justify-end">
                    <button type="submit"
                        class="px-8 py-4 bg-purple-700 hover:bg-purple-800 text-white font-black rounded-2xl shadow-lg shadow-purple-100 transition-all hover:-translate-y-1 active:scale-95 flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Simpan Perubahan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
