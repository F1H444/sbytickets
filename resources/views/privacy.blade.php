@extends('layouts.app')

@section('content')
    <div class="bg-white min-h-screen pt-28 pb-20 lg:pt-40 lg:pb-32">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-4 mb-16">
                <div class="text-purple-700 font-bold uppercase tracking-widest text-[10px]">Legal</div>
                <h1 class="text-4xl lg:text-6xl font-black text-gray-900 tracking-tighter">Kebijakan Privasi</h1>
            </div>

            <div class="prose prose-lg text-gray-600 mx-auto">
                <p>Kami menghargai privasi data Anda. Kebijakan ini menjelaskan bagaimana kami mengelola informasi pribadi
                    Anda.</p>

                <h3>1. Pengumpulan Data</h3>
                <p>Kami mengumpulkan data nama, email, dan nomor telepon untuk keperluan pemrosesan tiket dan verifikasi
                    identitas di lokasi wisata.</p>

                <h3>2. Penggunaan Data</h3>
                <p>Data digunakan untuk mengirimkan tiket elektronik, notifikasi penting, dan peningkatan layanan. Kami
                    tidak menjual data Anda ke pihak ketiga.</p>

                <h3>3. Keamanan</h3>
                <p>Kami menggunakan enkripsi standar industri untuk melindungi data transaksi dan informasi pribadi Anda.
                </p>
            </div>
        </div>
    </div>
@endsection
