@extends('layouts.admin')

@section('content')
    <div class="space-y-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-black text-gray-900 tracking-tight">Edit Pengguna</h1>
                <p class="text-gray-500 mt-1">Perbarui detail pengguna dan peran akses.</p>
            </div>
            <a href="{{ route('admin.users.index') }}"
                class="flex items-center space-x-2 text-gray-500 hover:text-gray-900 font-bold transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                <span>Kembali ke Pengguna</span>
            </a>
        </div>

        <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-8 max-w-3xl">
            <form action="{{ route('admin.users.update', $user->user_id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Full Name -->
                    <div class="space-y-2">
                        <label for="full_name"
                            class="text-sm font-bold text-gray-700 uppercase tracking-widest text-[11px]">Nama
                            Lengkap</label>
                        <input type="text" id="full_name" name="full_name"
                            value="{{ old('full_name', $user->full_name) }}" required
                            class="w-full px-4 py-3 bg-gray-50 border-gray-100 rounded-xl text-gray-900 focus:ring-2 focus:ring-purple-700 focus:border-transparent transition-all font-medium placeholder-gray-400">
                        @error('full_name')
                            <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="space-y-2">
                        <label for="email"
                            class="text-sm font-bold text-gray-700 uppercase tracking-widest text-[11px]">Alamat
                            Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                            required
                            class="w-full px-4 py-3 bg-gray-50 border-gray-100 rounded-xl text-gray-900 focus:ring-2 focus:ring-purple-700 focus:border-transparent transition-all font-medium placeholder-gray-400">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="space-y-2">
                        <label for="phone"
                            class="text-sm font-bold text-gray-700 uppercase tracking-widest text-[11px]">Nomor
                            Telepon</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}"
                            class="w-full px-4 py-3 bg-gray-50 border-gray-100 rounded-xl text-gray-900 focus:ring-2 focus:ring-purple-700 focus:border-transparent transition-all font-medium placeholder-gray-400">
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Is Admin -->
                    <div class="space-y-4 flex flex-col justify-center">
                        <label class="text-sm font-bold text-gray-700 uppercase tracking-widest text-[11px]">Akses
                            Administrator</label>
                        <div class="flex items-center space-x-3">
                            <input type="checkbox" id="is_admin" name="is_admin" value="1"
                                {{ old('is_admin', $user->is_admin) ? 'checked' : '' }}
                                class="w-5 h-5 text-purple-700 border-gray-300 rounded focus:ring-purple-500">
                            <label for="is_admin" class="text-sm font-medium text-gray-600">Berikan akses ke panel
                                admin</label>
                        </div>
                    </div>

                    <!-- Password (Optional) -->
                    <div class="space-y-2">
                        <label for="password"
                            class="text-sm font-bold text-gray-700 uppercase tracking-widest text-[11px]">Kata Sandi Baru
                            (Opsional)</label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-3 bg-gray-50 border-gray-100 rounded-xl text-gray-900 focus:ring-2 focus:ring-purple-700 focus:border-transparent transition-all font-medium placeholder-gray-400"
                            placeholder="Biarkan kosong jika tidak ingin mengubah">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="space-y-2">
                        <label for="password_confirmation"
                            class="text-sm font-bold text-gray-700 uppercase tracking-widest text-[11px]">Konfirmasi Kata
                            Sandi Baru</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="w-full px-4 py-3 bg-gray-50 border-gray-100 rounded-xl text-gray-900 focus:ring-2 focus:ring-purple-700 focus:border-transparent transition-all font-medium placeholder-gray-400"
                            placeholder="Biarkan kosong jika tidak ingin mengubah">
                    </div>
                </div>

                <div class="pt-6 border-t border-gray-50 flex justify-end">
                    <button type="submit"
                        class="px-8 py-3 bg-purple-700 hover:bg-purple-800 text-white font-bold rounded-xl shadow-lg shadow-purple-200 transition-all transform hover:-translate-y-0.5">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
