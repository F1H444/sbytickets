<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    public function run(): void
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \App\Models\Wisata::truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        $wisataList = [
            [
                'name' => 'Kebun Binatang Surabaya',
                'slug' => 'kebun-binatang-surabaya',
                'image_url' => 'images/wisata/kebun-binatang.jpg',
                'location' => 'Wonokromo, Surabaya',
                'base_price_weekday' => 15000,
                'base_price_weekend' => 15000,
                'capacity_per_day' => 5000,
                'is_active' => true,
                'description' => 'Kebun binatang legendaris dengan koleksi satwa terlengkap di Asia Tenggara, menjadi ikon wisata edukasi keluarga di Surabaya.',
            ],
            [
                'name' => 'Atlantis Land Kenjeran',
                'slug' => 'atlantis-land-kenjeran',
                'image_url' => 'images/wisata/atlantis-land.jpg',
                'location' => 'Ken Park, Surabaya',
                'base_price_weekday' => 100000,
                'base_price_weekend' => 125000,
                'capacity_per_day' => 3000,
                'is_active' => true,
                'description' => 'Taman hiburan air dan wahana permainan megah dengan arsitektur bergaya istana dongeng yang menawarkan berbagai atraksi seru.',
            ],
            [
                'name' => 'THP Pantai Kenjeran',
                'slug' => 'thp-pantai-kenjeran',
                'image_url' => 'images/wisata/kenjeran.jpg',
                'location' => 'Kenjeran, Surabaya',
                'base_price_weekday' => 10000,
                'base_price_weekend' => 15000,
                'capacity_per_day' => 4000,
                'is_active' => true,
                'description' => 'Taman Hiburan Pantai (THP) Kenjeran menawarkan pemandangan pesisir yang indah dengan latar Jembatan Suramadu dan kuliner laut khas.',
            ],
            [
                'name' => 'Tugu Pahlawan & Museum 10 November',
                'slug' => 'tugu-pahlawan',
                'image_url' => 'images/wisata/tugu-pahlawan.jpeg',
                'location' => 'Pusat Kota, Surabaya',
                'base_price_weekday' => 5000,
                'base_price_weekend' => 5000,
                'capacity_per_day' => 1000,
                'is_active' => true,
                'description' => 'Monumen ikonik setinggi 41 meter yang menjadi simbol perjuangan Arek-Arek Suroboyo dalam mempertahankan kemerdekaan.',
            ],
            [
                'name' => 'Museum Kapal Selam',
                'slug' => 'museum-kapal-selam',
                'image_url' => 'images/wisata/kapal-selam.jpg',
                'location' => 'Genteng, Surabaya',
                'base_price_weekday' => 15000,
                'base_price_weekend' => 15000,
                'capacity_per_day' => 500,
                'is_active' => true,
                'description' => 'Saksi bisu kemegahan sejarah maritim Indonesia, menghadirkan edukasi mendalam mengenai kekuatan armada angkatan laut di jantung kota.',
            ],
            [
                'name' => 'Kebun Raya Mangrove Gunung Anyar',
                'slug' => 'kebun-raya-mangrove',
                'image_url' => 'images/wisata/mangrove.jpg',
                'location' => 'Gunung Anyar, Surabaya',
                'base_price_weekday' => 10000,
                'base_price_weekend' => 15000,
                'capacity_per_day' => 1500,
                'is_active' => true,
                'description' => 'Oase hijau yang menawarkan ketenangan di tengah hiruk pikuk kota, menjadi pusat konservasi dan rekreasi alam yang fotogenik.',
            ],
            [
                'name' => 'Surabaya North Quay',
                'slug' => 'surabaya-north-quay',
                'image_url' => 'images/wisata/northquay.jpg',
                'location' => 'Perak Utara, Surabaya',
                'base_price_weekday' => 50000,
                'base_price_weekend' => 50000,
                'capacity_per_day' => 500,
                'is_active' => true,
                'description' => 'Menikmati cakrawala Selat Madura dengan kemewahan kapal pesiar yang bersandar, menghadirkan estetika modernitas pelabuhan internasional.',
            ],
            [
                'name' => 'Wisata Perahu Kalimas',
                'slug' => 'wisata-perahu-kalimas',
                'image_url' => 'images/wisata/kalimas.jpg',
                'location' => 'Ketabang, Surabaya',
                'base_price_weekday' => 10000,
                'base_price_weekend' => 10000,
                'capacity_per_day' => 300,
                'is_active' => true,
                'description' => 'Menyusuri jalur air bersejarah di bawah naungan cahaya lampu kota, menghidupkan kembali romantisme kota lama di malam hari.',
            ],
            [
                'name' => 'Adventure Land Romokalisari',
                'slug' => 'adventure-land-romokalisari',
                'image_url' => 'images/wisata/romokalisari.jpg',
                'location' => 'Benowo, Surabaya',
                'base_price_weekday' => 10000,
                'base_price_weekend' => 15000,
                'capacity_per_day' => 1000,
                'is_active' => true,
                'description' => 'Destinasi petualangan outdoor terlengkap bagi keluarga, menghadirkan kombinasi seru antara wahana pesisir dan aktivitas ketangkasan.',
            ],
            [
                'name' => 'Hutan Bambu Keputih',
                'slug' => 'hutan-bambu-keputih',
                'image_url' => 'images/wisata/hutan-bambu.jpg',
                'location' => 'Sukolilo, Surabaya',
                'base_price_weekday' => 5000,
                'base_price_weekend' => 5000,
                'capacity_per_day' => 500,
                'is_active' => true,
                'description' => 'Menawarkan ketenangan batin melalui deretan bambu yang tertata rapi, menciptakan suasana asri layaknya destinasi mancanegara.',
            ],
            [
                'name' => 'Pagoda Tian Ti',
                'slug' => 'pagoda-tian-ti',
                'image_url' => 'images/wisata/pagoda tian ti.jpg',
                'location' => 'Ken Park, Surabaya',
                'base_price_weekday' => 15000,
                'base_price_weekend' => 15000,
                'capacity_per_day' => 1000,
                'is_active' => true,
                'description' => ' Landmark budaya yang megah dengan arsitektur klasik Timur, menjadi simbol harmoni dan keragaman warisan budaya di Surabaya.',
            ],
            [
                'name' => 'Ciputra Waterpark',
                'slug' => 'ciputra-waterpark',
                'image_url' => 'images/wisata/ciputra-waterpark.jpg',
                'location' => 'Sambikerep, Surabaya',
                'base_price_weekday' => 75000,
                'base_price_weekend' => 95000,
                'capacity_per_day' => 2000,
                'is_active' => true,
                'description' => 'Taman rekreasi air bertema petualangan legendaris terbesar, menghadirkan keceriaan tanpa batas untuk seluruh anggota keluarga.',
            ],
            [
                'name' => 'KidZania Surabaya',
                'slug' => 'kidzania-surabaya',
                'image_url' => 'images/wisata/kidzania.jpg',
                'location' => 'Laguoon Avenue, Surabaya',
                'base_price_weekday' => 150000,
                'base_price_weekend' => 200000,
                'capacity_per_day' => 1000,
                'is_active' => true,
                'description' => 'Pusat edukasi dan rekreasi inovatif yang memberikan wawasan dunia profesi nyata kepada anak-anak dalam lingkungan yang inspiratif.',
            ],
            [
                'name' => 'Blockbuster Museum Surabaya',
                'slug' => 'blockbuster-museum',
                'image_url' => 'images/wisata/blockbuster.jpg',
                'location' => 'Kenjeran, Surabaya',
                'base_price_weekday' => 80000,
                'base_price_weekend' => 100000,
                'capacity_per_day' => 400,
                'is_active' => true,
                'description' => 'Surga bagi pecinta budaya pop dan sinema, menampilkan ribuan koleksi memorabilia film Hollywood yang ikonis dan prestisius.',
            ],
            [
                'name' => 'Museum Kanker Indonesia',
                'slug' => 'museum-kanker-indonesia',
                'image_url' => 'images/wisata/museum-kanker.jpg',
                'location' => 'Kayoon, Surabaya',
                'base_price_weekday' => 10000,
                'base_price_weekend' => 10000,
                'capacity_per_day' => 200,
                'is_active' => true,
                'description' => 'Pusat edukasi kesehatan yang transformatif, berfokus pada kesadaran dan deteksi dini melalui pameran yang mendidik dan humanis.',
            ],
        ];

        foreach ($wisataList as $dest) {
            \App\Models\Wisata::create($dest);
        }
    }
}
