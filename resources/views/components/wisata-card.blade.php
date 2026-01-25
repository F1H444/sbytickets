<a href="{{ route('wisata.show', $slug) }}"
    class="group bg-white flex flex-col h-full border-b-2 border-transparent hover:border-purple-100 transition-all duration-700">
    <div
        class="relative aspect-square rounded-[2rem] overflow-hidden grayscale hover:grayscale-0 transition-all duration-1000">
        <img src="{{ asset($image) }}" alt="{{ $name }}"
            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
        <div
            class="absolute top-6 left-6 flex items-center space-x-2 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-full shadow-sm">
            <span class="text-[10px] font-black text-gray-900 tracking-widest uppercase">Rating
                {{ $rating }}</span>
        </div>
    </div>
    <div class="pt-8 pb-10 space-y-4 px-2">
        <div class="flex flex-col space-y-1">
            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em]">{{ $location }}</span>
            <h4
                class="text-2xl font-bold text-gray-900 leading-tight tracking-tight group-hover:text-purple-700 transition-colors">
                {{ $name }}</h4>
        </div>
        <p class="text-sm text-gray-500 font-medium italic line-clamp-2 leading-relaxed">"Nikmati keindahan kearifan
            lokal di {{ $name }}, pilihan tepat untuk akhir pekan Anda."</p>
        <div class="pt-4 flex items-center justify-between border-t border-gray-50">
            <div class="flex flex-col">
                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Mulai Dari</span>
                <span class="text-lg font-bold text-gray-900 tracking-tighter">Rp {{ $price }}</span>
            </div>
            <a href="#"
                class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center text-white transition-all transform group-hover:bg-purple-700 group-hover:scale-110 active:scale-95 shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</a>
