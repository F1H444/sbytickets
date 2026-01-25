-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2026 at 05:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbytickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `dest_id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `base_price_weekday` decimal(10,2) NOT NULL,
  `base_price_weekend` decimal(10,2) NOT NULL,
  `capacity_per_day` int NOT NULL DEFAULT '100',
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`dest_id`, `name`, `slug`, `image_url`, `location`, `base_price_weekday`, `base_price_weekend`, `capacity_per_day`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Kebun Binatang Surabaya', 'kebun-binatang-surabaya', 'images/wisata/kebun-binatang.jpg', 'Wonokromo, Surabaya', '15000.00', '20000.00', 1000, 'Salah satu kebun binatang terlengkap di Asia Tenggara.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(2, 'Pantai Kenjeran', 'pantai-kenjeran', 'images/wisata/kenjeran.jpg', 'Kenjeran, Surabaya', '10000.00', '15000.00', 2000, 'Nikmati pemandangan laut dan Jembatan Suroboyo yang ikonik.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(3, 'Tugu Pahlawan', 'tugu-pahlawan', 'images/wisata/tugu-pahlawan.jpeg', 'Pusat Kota, Surabaya', '5000.00', '5000.00', 500, 'Monumen bersejarah perjuangan arek-arek Suroboyo.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(4, 'House of Sampoerna', 'house-of-sampoerna', 'images/wisata/sampoerna.jpg', 'Pabean Cantian, Surabaya', '0.00', '0.00', 300, 'Museum tembakau dan sejarah industri kretek di Indonesia.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(5, 'Museum Kapal Selam', 'museum-kapal-selam', 'images/wisata/kapal-selam.jpg', 'Genteng, Surabaya', '15000.00', '15000.00', 400, 'Kapal selam asli KRI Pasopati 410 dari Angkatan Laut.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(6, 'Hutan Bambu Keputih', 'hutan-bambu-keputih', 'images/wisata/hutan-bambu.jpg', 'Sukolilo, Surabaya', '5000.00', '5000.00', 200, 'Suasana asri mirip hutan bambu Sagano di Jepang.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(7, 'Taman Bungkul', 'taman-bungkul', 'images/wisata/taman-bungkul.jpg', 'Darmo, Surabaya', '0.00', '0.00', 500, 'Taman kota terbaik yang menjadi jantung kegiatan warga Surabaya.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(8, 'Surabaya North Quay', 'surabaya-north-quay', 'images/wisata/northquay.jpg', 'Perak Utara, Surabaya', '10000.00', '10000.00', 300, 'Tempat nongkrong mewah dengan pemandangan kapal pesiar.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(9, 'Alun-Alun Surabaya', 'alun-alun-surabaya', 'images/wisata/alun-alun.jpg', 'Genteng, Surabaya', '0.00', '0.00', 1000, 'Pusat budaya dengan galeri seni bawah tanah yang unik.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(10, 'Pagoda Tian Ti', 'pagoda-tian-ti', 'images/wisata/pagoda tian ti.jpg', 'Ken Park, Surabaya', '15000.00', '15000.00', 500, 'Replika Temple of Heaven Beijing yang megah.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(11, 'Museum Siola', 'museum-siola', 'images/wisata/siola.jpg', 'Tunjungan, Surabaya', '0.00', '0.00', 400, 'Museum Surabaya yang menyimpan ribuan artefak sejarah kota.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(12, 'Monumen Bambu Runcing', 'monumen-bambu-runcing', 'images/wisata/bambu-runcing.jpg', 'Embong Kaliasin, Surabaya', '0.00', '0.00', 200, 'Simbol keberanian pejuang Surabaya melawan penjajah.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(13, 'Taman Pelangi', 'taman-pelangi', 'images/wisata/taman-pelangi.webp', 'Wonocolo, Surabaya', '0.00', '0.00', 300, 'Taman dengan air mancur berwarna-warni di malam hari.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(14, 'Jembatan Merah', 'jembatan-merah', 'images/wisata/jembatan-merah.jpg', 'Krembangan, Surabaya', '0.00', '0.00', 100, 'Saksi bisu pertempuran 10 November yang bersejarah.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02'),
(15, 'Kawasan Wisata Religi Ampel', 'kawasan-wisata-religi-ampel', 'images/wisata/ampel.jpg', 'Semampir, Surabaya', '0.00', '0.00', 5000, 'Pusat wisata religi dan kuliner khas Timur Tengah.', 1, '2026-01-22 09:39:02', '2026-01-22 09:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0000_01_01_000000_create_roles_table', 1),
(2, '0001_01_01_000000_create_users_table', 1),
(3, '0001_01_01_000001_create_cache_table', 1),
(4, '0001_01_01_000002_create_jobs_table', 1),
(5, '2026_01_20_155809_create_promos_table', 1),
(6, '2026_01_20_155810_create_destinations_table', 1),
(7, '2026_01_20_155811_create_orders_table', 1),
(8, '2026_01_20_155812_create_tickets_table', 1),
(9, '2026_01_21_023129_add_slug_to_destinations_table', 1),
(10, '2026_01_24_134118_add_snap_token_to_orders_table', 2),
(11, '2026_01_24_000000_add_snap_token_to_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `promo_id` bigint UNSIGNED DEFAULT NULL,
  `invoice_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `tax_amount` decimal(10,2) DEFAULT NULL,
  `payment_status` enum('unpaid','paid','expired','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `payment_method` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snap_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `promo_id`, `invoice_number`, `total_amount`, `tax_amount`, `payment_status`, `payment_method`, `snap_token`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, 'INV-T4OJQIWUXL', '15000.00', NULL, 'paid', 'Midtrans / Fake', NULL, '2026-01-22 10:09:52', '2026-01-22 10:09:52'),
(2, 3, NULL, 'INV-YNCP5D0AJG', '5000.00', NULL, 'paid', 'Midtrans / Fake', NULL, '2026-01-24 06:32:32', '2026-01-24 06:32:32'),
(3, 3, NULL, 'INV-1769264398490', '45000.00', NULL, 'paid', 'Midtrans', NULL, '2026-01-24 07:21:29', '2026-01-24 07:21:29'),
(4, 3, NULL, 'INV-1769265122869', '75000.00', NULL, 'paid', 'Midtrans', NULL, '2026-01-24 07:32:21', '2026-01-24 07:32:21'),
(5, 3, NULL, 'INV-1769270234195', '80000.00', NULL, 'paid', 'Midtrans', NULL, '2026-01-24 08:57:33', '2026-01-24 08:57:33'),
(6, 3, NULL, 'INV-1769270881340', '10000.00', NULL, 'paid', 'Midtrans', NULL, '2026-01-24 09:08:21', '2026-01-24 09:08:21'),
(7, 3, NULL, 'INV-1769271510756', '0.00', NULL, 'paid', 'Midtrans', NULL, '2026-01-24 09:18:33', '2026-01-24 09:18:33'),
(9, 3, NULL, 'INV-1769271912980', '0.00', NULL, 'paid', 'Midtrans', NULL, '2026-01-24 09:25:16', '2026-01-24 09:25:16'),
(10, 3, NULL, 'INV-1769272009665', '0.00', NULL, 'paid', 'Midtrans', NULL, '2026-01-24 09:26:52', '2026-01-24 09:26:52'),
(11, 3, NULL, 'INV-1769272138319', '0.00', NULL, 'paid', 'Midtrans', NULL, '2026-01-24 09:29:01', '2026-01-24 09:29:01'),
(12, 3, NULL, 'INV-1769272262365', '30000.00', NULL, 'paid', 'Midtrans', NULL, '2026-01-24 09:31:26', '2026-01-24 09:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `promo_id` bigint UNSIGNED NOT NULL,
  `promo_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_percent` int NOT NULL,
  `valid_until` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, NULL),
(2, 'Admin Wisata', NULL, NULL),
(3, 'Customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('90VFaEfBMPNnpVlM2Nvykmu61bSnzpqBT5k2doU9', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia09HaUNmZndySm9JOVV1T1ZOcXFxN0w2Y1BpUmo2dmw5cERibTdkZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS91c2VyL2Jvb2svc3VjY2Vzcy85IjtzOjU6InJvdXRlIjtzOjIwOiJ1c2VyLmJvb2tpbmcuc3VjY2VzcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1769271916),
('qtyQXW8yajuXkHoEJyLsslRy1uWFil4JsjMkiFiB', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVGV1V2gwNEdoanpZVE5DVk5ySVBhU3VybVBnME4zUXNBeVZSbGNyNCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2Jvb2svc3VjY2Vzcy8xMiI7czo1OiJyb3V0ZSI7czoyMDoidXNlci5ib29raW5nLnN1Y2Nlc3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1769272287),
('SfPJ77NJ14dcvtW1ppGWEypRWlofewWXLsXbNjne', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia0NmZ3FWZXpDMTRNdGw0aGZEQ2hMU3J1aHJhMmRLMk5kU1JGZ0lEeSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvdGlja2V0cyI7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO3M6NToicm91dGUiO3M6NToibG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1769272082);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `dest_id` bigint UNSIGNED NOT NULL,
  `visit_date` date NOT NULL,
  `ticket_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitor_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor_id_card` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','used','expired') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `scanned_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `order_id`, `dest_id`, `visit_date`, `ticket_code`, `visitor_name`, `visitor_id_card`, `status`, `scanned_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2026-01-30', 'TIX-TPSJ8G0CDJMX', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-22 10:09:52', '2026-01-22 10:09:52'),
(2, 2, 3, '2026-01-24', 'TIX-X8XXF5NWXY8X', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 06:32:32', '2026-01-24 06:32:32'),
(3, 3, 2, '2026-01-24', 'TIX-0V7CPKDKYG7X', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 07:21:29', '2026-01-24 07:21:29'),
(4, 3, 2, '2026-01-24', 'TIX-2CREIIMX4RCF', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 07:21:29', '2026-01-24 07:21:29'),
(5, 3, 2, '2026-01-24', 'TIX-QO0QT0FOVFR3', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 07:21:29', '2026-01-24 07:21:29'),
(6, 4, 2, '2026-01-24', 'TIX-RV2XMXX7JJPD', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 07:32:21', '2026-01-24 07:32:21'),
(7, 4, 2, '2026-01-24', 'TIX-3H2PLQ7G4IUJ', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 07:32:21', '2026-01-24 07:32:21'),
(8, 4, 2, '2026-01-24', 'TIX-0AFG3BC495GP', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 07:32:21', '2026-01-24 07:32:21'),
(9, 4, 2, '2026-01-24', 'TIX-DI8TYSELUCQU', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 07:32:21', '2026-01-24 07:32:21'),
(10, 4, 2, '2026-01-24', 'TIX-GEVCT7B8L5ET', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 07:32:21', '2026-01-24 07:32:21'),
(11, 5, 1, '2026-01-24', 'TIX-Z5PQZGSLWNMO', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 08:57:33', '2026-01-24 08:57:33'),
(12, 5, 1, '2026-01-24', 'TIX-PWWOK4VZLQIY', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 08:57:33', '2026-01-24 08:57:33'),
(13, 5, 1, '2026-01-24', 'TIX-LCIEWH5ET5KO', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 08:57:33', '2026-01-24 08:57:33'),
(14, 5, 1, '2026-01-24', 'TIX-FE7TDQSLRQEY', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 08:57:33', '2026-01-24 08:57:33'),
(15, 6, 8, '2026-01-24', 'TIX-WZEBJCU5ZOPX', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 09:08:21', '2026-01-24 09:08:21'),
(16, 7, 9, '2026-01-28', 'TIX-YLVLNUOFDVO5', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 09:18:33', '2026-01-24 09:18:33'),
(17, 9, 9, '2026-01-28', 'TIX-KRIZH1FHJ6IZ', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 09:25:16', '2026-01-24 09:25:16'),
(18, 10, 15, '2026-01-31', 'TIX-WEFFVJRFBS3U', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 09:26:52', '2026-01-24 09:26:52'),
(19, 11, 4, '2026-01-26', 'TIX-BJC87GCFFHSG', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 09:29:01', '2026-01-24 09:29:01'),
(20, 12, 1, '2026-02-18', 'TIX-9BPUG7DGWA4U', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 09:31:26', '2026-01-24 09:31:26'),
(21, 12, 1, '2026-02-18', 'TIX-8BMJVUV0QODC', 'Fiha Aridhoi', NULL, 'active', NULL, '2026-01-24 09:31:26', '2026-01-24 09:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `full_name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Super Administrator', 'admin@sbytickets.com', NULL, '$2y$12$ULsj.JeykppgiVrBv9UkoOe0iIhQij4.vB1SJpI/xL/OmV9i1hSym', '081234567890', NULL, '2026-01-20 21:26:34', '2026-01-22 08:34:24'),
(2, 3, 'John Doe', 'customer@gmail.com', NULL, '$2y$12$rza890nIX343/.YwhJSjLOmq/UyQVsqqZrvaw0lxHy6easTuVZ4PW', '08987654321', NULL, '2026-01-20 21:26:34', '2026-01-20 21:26:34'),
(3, 3, 'Fiha Aridhoi', 'fihaaridhoi@gmail.com', NULL, '$2y$12$CoOGOT0Tho7Hh1dPZPuiz.ToApdoPDNmD78QSLIZn7hg1jmwu3E.S', '082128573839', NULL, '2026-01-22 10:09:13', '2026-01-22 10:09:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`dest_id`),
  ADD UNIQUE KEY `destinations_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `orders_invoice_number_unique` (`invoice_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_promo_id_foreign` (`promo_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`promo_id`),
  ADD UNIQUE KEY `promos_promo_code_unique` (`promo_code`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD UNIQUE KEY `tickets_ticket_code_unique` (`ticket_code`),
  ADD KEY `tickets_order_id_foreign` (`order_id`),
  ADD KEY `tickets_dest_id_foreign` (`dest_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `dest_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `promo_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_promo_id_foreign` FOREIGN KEY (`promo_id`) REFERENCES `promos` (`promo_id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_dest_id_foreign` FOREIGN KEY (`dest_id`) REFERENCES `destinations` (`dest_id`),
  ADD CONSTRAINT `tickets_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
