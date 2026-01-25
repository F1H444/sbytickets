@extends('layouts.app')

@section('content')
    <div class="bg-white min-h-screen pt-28 pb-20 lg:pt-40 lg:pb-32">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-4 mb-16">
                <div class="text-purple-700 font-bold uppercase tracking-widest text-[10px]">Information Center</div>
                <h1 class="text-4xl lg:text-6xl font-black text-gray-900 tracking-tighter">Panduan Wisata</h1>
            </div>

            <div class="space-y-12">
                <div class="bg-gray-50 p-8 rounded-[2rem] border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Cara Memesan Tiket</h3>
                    <ol class="list-decimal list-inside space-y-4 text-gray-600 font-medium">
                        <li>Buka menu <a href="{{ route('wisata') }}" class="text-purple-700 font-bold">Wisata</a> untuk
                            memilih destinasi.</li>
                        <li>Klik tombol "Lihat Detail" pada wisata yang diinginkan.</li>
                        <li>Pada halaman detail, klik tombol reservasi atau "Amankan Tiket Anda".</li>
                        <li>Pilih tanggal kunjungan dan jumlah tiket.</li>
                        <li>Lakukan pembayaran melalui metode yang tersedia.</li>
                        <li>Tiket elektronik akan dikirim ke email dan tersedia di dashboard Anda.</li>
                    </ol>
                </div>

                <div class="bg-gray-50 p-8 rounded-[2rem] border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Ketentuan Pengunjung</h3>
                    <ul class="list-disc list-inside space-y-4 text-gray-600 font-medium">
                        <li>Pastikan datang sesuai tanggal yang tertera pada tiket.</li>
                        <li>Tunjukkan QR Code tiket digital di loket masuk.</li>
                        <li>Patuhi protokol kesehatan dan aturan di lokasi wisata.</li>
                        <li>Anak di bawah 3 tahun gratis masuk (syarat ketentuan berlaku per lokasi).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
