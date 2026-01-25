@extends('layouts.app')

@section('content')
    <div class="bg-white min-h-screen pt-28 pb-20 lg:pt-40 lg:pb-32">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-4 mb-16">
                <div class="text-purple-700 font-bold uppercase tracking-widest text-[10px]">Legal</div>
                <h1 class="text-4xl lg:text-6xl font-black text-gray-900 tracking-tighter">Syarat & Ketentuan</h1>
            </div>

            <div class="prose prose-lg text-gray-600 mx-auto">
                <p>Selamat datang di SBYTickets. Dengan menggunakan layanan kami, Anda menyetujui syarat dan ketentuan
                    berikut:</p>

                <h3>1. Umum</h3>
                <p>SBYTickets adalah platform pemesanan tiket wisata resmi di Surabaya. Kami bertindak sebagai perantara
                    antara pengunjung dan pengelola wisata.</p>

                <h3>2. Pemesanan Tiket</h3>
                <p>Tiket yang sudah dibeli tidak dapat dikembalikan (non-refundable), kecuali jika terjadi pembatalan
                    sepihak dari pengelola wisata atau force majeure.</p>

                <h3>3. Pembayaran</h3>
                <p>Pembayaran harus dilakukan sesuai dengan nominal yang tertera. Kesalahan nominal pembayaran bukan
                    tanggung jawab kami.</p>

                <h3>4. Penggunaan Tiket</h3>
                <p>Tiket hanya berlaku untuk satu kali masuk pada tanggal yang dipilih. Dilarang memperjualbelikan tiket
                    dengan harga lebih tinggi.</p>
            </div>
        </div>
    </div>
@endsection
