@extends('layouts.app')

@section('content')
    <div class="bg-white min-h-screen pt-28 pb-20 lg:pt-40 lg:pb-32 selection:bg-purple-500/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 items-start">

                <!-- Left: Wisata Context -->
                <div class="lg:col-span-5 space-y-8 lg:space-y-12">
                    <div class="space-y-6">
                        <div
                            class="flex items-center space-x-2 text-purple-700 font-bold uppercase tracking-widest text-[10px]">
                            <span class="w-8 h-[2px] bg-purple-700"></span>
                            <span>Reservasi Tiket</span>
                        </div>
                        <h1 class="text-4xl lg:text-6xl font-black text-gray-900 tracking-tighter leading-none">
                            Tentukan <br> <span class="text-purple-700">Waktu Anda.</span>
                        </h1>
                        <p
                            class="text-gray-500 font-medium italic leading-relaxed text-sm border-l-2 border-purple-100 pl-4">
                            "Persiapkan petualangan Anda di {{ $wisata->name }} dengan memilih tanggal dan jumlah tiket yang
                            sesuai."
                        </p>
                    </div>

                    <div class="relative aspect-video rounded-[2rem] overflow-hidden shadow-2xl">
                        <img src="{{ asset($wisata->image_url) }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-bold">{{ $wisata->name }}</h3>
                            <p class="text-xs text-white/70">{{ $wisata->location }}</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Booking Form -->
                <div class="lg:col-span-7 bg-gray-50 rounded-[3rem] p-8 lg:p-16 shadow-inner relative overflow-hidden"
                    x-data="{
                        visitDate: '{{ $visitDate }}',
                        remainingQuota: {{ $remainingQuota }},
                        isLoading: false,
                        checkQuota() {
                            if (!this.visitDate) return;
                            this.isLoading = true;
                            fetch('{{ route('user.booking.check-availability', $wisata->slug) }}?date=' + this.visitDate)
                                .then(res => res.json())
                                .then(data => {
                                    this.remainingQuota = data.remaining_quota;
                                    this.isLoading = false;
                                });
                        }
                    }">
                    <!-- Decor -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-purple-200/30 rounded-full blur-3xl -z-10"></div>

                    <form action="{{ route('user.booking.checkout', $wisata->slug) }}" method="POST"
                        class="space-y-8 lg:space-y-12 relative z-10">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-gray-900 uppercase tracking-widest ml-1">Pilih
                                    Tanggal Kunjungan</label>
                                <div class="relative group">
                                    <input type="date" name="visit_date" min="{{ date('Y-m-d') }}" required
                                        x-model="visitDate" @change="checkQuota()"
                                        class="w-full px-6 py-4 bg-white border-2 border-gray-200 focus:border-purple-700 rounded-2xl transition-all outline-none font-bold text-gray-900 shadow-sm group-hover:shadow-md">
                                    <p class="text-[10px] text-gray-400 mt-2 italic">*Harga mungkin berbeda di akhir pekan
                                    </p>
                                    <template x-if="!isLoading">
                                        <p class="text-[10px] text-purple-600 mt-1 font-bold">
                                            Sisa Tiket: <span x-text="remainingQuota"></span>
                                        </p>
                                    </template>
                                    <template x-if="isLoading">
                                        <p class="text-[10px] text-gray-400 mt-1 animate-pulse">
                                            Mengecek ketersediaan...
                                        </p>
                                    </template>
                                </div>
                                @error('visit_date')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-4">
                                <label class="text-[10px] font-black text-gray-900 uppercase tracking-widest ml-1">Jumlah
                                    Tiket</label>
                                <div class="relative group" x-data="{ count: 1 }">
                                    <div
                                        class="flex items-center bg-white rounded-2xl border-2 border-gray-200 focus-within:border-purple-700 transition-all shadow-sm group-hover:shadow-md">
                                        <button type="button" @click="count > 1 ? count-- : count"
                                            class="p-4 text-purple-700 hover:scale-110 transition-transform">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M20 12H4" />
                                            </svg>
                                        </button>
                                        <input type="number" name="quantity" x-model="count" readonly
                                            class="w-full text-center font-black text-xl text-gray-900 bg-transparent outline-none">
                                        <button type="button" @click="count++"
                                            class="p-4 text-purple-700 hover:scale-110 transition-transform">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                @error('quantity')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-8 lg:pt-12">
                            <button type="submit"
                                class="w-full bg-gray-900 text-white py-6 lg:py-8 px-12 rounded-full font-black uppercase tracking-[0.4em] text-xs lg:text-sm hover:bg-purple-700 transition-all transform hover:scale-105 active:scale-95 shadow-2xl flex items-center justify-center space-x-6">
                                <span>Lanjut ke Pembayaran</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
