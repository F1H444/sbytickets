@extends('layouts.app')

@section('content')
    <div class="min-h-screen pt-28 lg:pt-20 flex items-center justify-center bg-gray-50 px-4 pb-12">
        <div class="max-w-md w-full">
            <!-- Logo Display -->
            <div class="text-center mb-8 lg:mb-10">
                <a href="{{ route('home') }}" class="inline-flex items-center space-x-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo"
                        class="w-10 h-10 lg:w-12 lg:h-12 object-contain group-hover:rotate-12 transition-transform duration-500"
                        onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=ST&background=581c87&color=fff&bold=true&rounded=true';">
                    <span class="text-xl lg:text-2xl font-bold tracking-tight text-gray-900">
                        SBY<span class="text-purple-700">Tickets</span>
                    </span>
                </a>
                <h2 class="mt-6 text-2xl lg:text-3xl font-bold text-gray-900 tracking-tight">Selamat Datang Kembali</h2>
                <p class="mt-2 text-xs lg:text-sm text-gray-500 font-medium italic">Silakan masuk ke akun Anda untuk
                    melanjutkan
                    perjalanan.</p>
            </div>

            <div class="bg-white p-6 lg:p-10 rounded-[2rem] shadow-2xl shadow-purple-900/5 border-2 border-gray-100">
                @if (session('success'))
                    <div
                        class="mb-6 p-4 rounded-xl bg-green-50 text-green-700 font-bold text-sm border border-green-100 flex items-center space-x-3">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
                @if (request()->has('reset_sent'))
                    <div
                        class="mb-6 p-4 rounded-xl bg-purple-50 text-purple-700 font-bold text-sm border border-purple-100 flex items-center space-x-3">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>Link pemulihan sandi telah dikirim ke email Anda.</span>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="mb-6 p-4 rounded-xl bg-red-50 text-red-700 font-bold text-sm border border-red-100">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('login.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="space-y-2">
                        <label for="email"
                            class="text-sm font-bold text-gray-700 ml-1 uppercase tracking-widest text-[10px]">Alamat
                            Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-gray-900 focus:ring-2 focus:ring-purple-700 transition-all outline-none font-medium placeholder-gray-400"
                            placeholder="nama@email.com">
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center ml-1">
                            <label for="password"
                                class="text-sm font-bold text-gray-700 uppercase tracking-widest text-[10px]">Kata
                                Sandi</label>
                            <a href="{{ route('password.request') }}"
                                class="text-[10px] font-bold text-purple-700 hover:text-purple-800 uppercase tracking-widest">Lupa
                                Sandi?</a>
                        </div>
                        <input type="password" id="password" name="password" required
                            class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl text-gray-900 focus:ring-2 focus:ring-purple-700 transition-all outline-none font-medium placeholder-gray-400"
                            placeholder="••••••••">
                    </div>

                    <button type="submit"
                        class="w-full py-5 bg-purple-700 hover:bg-purple-800 text-white text-sm font-black uppercase tracking-widest rounded-2xl shadow-xl shadow-purple-700/20 transition-all transform hover:-translate-y-1 active:scale-95">
                        Masuk Akun
                    </button>
                </form>

                <div class="mt-10 text-center">
                    <p class="text-sm text-gray-500 font-medium">
                        Belum punya akun?
                        <a href="/register" class="text-purple-700 font-bold hover:underline">Daftar Sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
