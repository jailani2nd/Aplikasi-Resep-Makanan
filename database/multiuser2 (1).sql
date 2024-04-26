-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 05:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiuser2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judulindo` varchar(255) NOT NULL,
  `juduleng` varchar(255) NOT NULL,
  `deskripsiindo` text NOT NULL,
  `deskripsieng` text NOT NULL,
  `kelebihanindo` varchar(255) NOT NULL,
  `kelebihaneng` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `judulindo`, `juduleng`, `deskripsiindo`, `deskripsieng`, `kelebihanindo`, `kelebihaneng`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Aplikasi Resep Makanan', 'Aplikasi Resep Makanan', 'aplikasi ini berisikan sebuah resep makanan yang di gunakan untuk orang sakit', 'This application contains a food recipe that is used for sick people', 'aplikasi ini sangat bagus dan membantu untuk masyarakat', 'This application is very good and helpful for the community', '66275e91b9ebb.jpg', '2024-04-23 00:02:13', '2024-04-24 23:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2024-01-12 04:36:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'C01ljse77w', NULL, NULL, '2024-01-12 04:36:50', '2024-01-12 04:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `categoris`
--

CREATE TABLE `categoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `judulindo` varchar(255) NOT NULL,
  `juduleng` varchar(255) NOT NULL,
  `deskripsiindo` text NOT NULL,
  `deskripsieng` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoris`
--

INSERT INTO `categoris` (`id`, `nomor`, `judulindo`, `juduleng`, `deskripsiindo`, `deskripsieng`, `image`, `created_at`, `updated_at`) VALUES
(1, '01', 'Jantung', 'Heart', 'Penyakit jantung adalah kondisi ketika bagian jantung yang meliputi pembuluh darah jantung, selaput jantung, katup jantung, dan otot jantung mengalami gangguan. Penyakit jantung bisa disebabkan oleh berbagai hal, seperti sumbatan pada pembuluh darah jantung, peradangan, infeksi, atau kelainan bawaan.', 'Heart disease is a condition when parts of the heart including the heart blood vessels, heart lining, heart valves and heart muscle experience problems. Heart disease can be caused by various things, such as blockages in the heart blood vessels, inflammation, infection, or congenital abnormalities.', '662a00c590e3e.jpg', '2024-04-23 01:29:15', '2024-04-25 00:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomortelepon` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `maps` text NOT NULL,
  `jambuka` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `nama`, `nomortelepon`, `alamat`, `maps`, `jambuka`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Aplikasi Resep Makanan', '0895600485236', 'kampungdalam, Aceh Tamiang', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621', '11:00 - 17:00', 'jailanihansem@gmail.com', '66291061d6f04.png', '2024-04-24 07:00:01', '2024-04-24 07:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_12_104554_create_sessions_table', 1),
(7, '2024_01_12_111236_create_admins_table', 2),
(8, '2024_04_23_042305_create_slides_table', 3),
(9, '2024_04_23_065428_create_abouts_table', 4),
(10, '2024_04_23_073824_create_categoris_table', 5),
(11, '2024_04_23_143958_create_reseps_table', 6),
(12, '2024_04_24_024654_create_rekoms_table', 7),
(13, '2024_04_24_053704_create_testis_table', 8),
(14, '2024_04_24_133800_create_kontaks_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekoms`
--

CREATE TABLE `rekoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenispenyakitindo` varchar(255) NOT NULL,
  `jenispenyakiteng` varchar(255) NOT NULL,
  `judulindo` varchar(255) NOT NULL,
  `juduleng` varchar(255) NOT NULL,
  `biologis` varchar(255) NOT NULL,
  `deskripsiindo` text NOT NULL,
  `deskripsieng` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekoms`
--

INSERT INTO `rekoms` (`id`, `jenispenyakitindo`, `jenispenyakiteng`, `judulindo`, `juduleng`, `biologis`, `deskripsiindo`, `deskripsieng`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jantung', 'Heart', 'Tumis Daging Paprika', 'Sauteed Bell Peppers', 'Bell Peppers', 'Tumis daging selalu menjadi pilihan yang tepat. Resep tumis daging paprika yang dikutip dari Heart Matters ini tak hanya lezat, tetapi juga menyehatkan jantung, Bunda.', 'Stir-fry meat is always the right choice. This recipe for stir-fried paprika meat quoted from Heart Matters is not only delicious, but also healthy for the heart, Mother.', '662bb8e56d0d7.jpeg', '2024-04-23 20:54:27', '2024-04-26 07:23:33'),
(2, 'Jantung', 'Heart', 'Pate Salmon', 'Salmon Pate', 'Pate', 'Masih dalam olahan ikan, Pate Salmon sehat untuk jantung loh, Bunda. Perpaduan rasa gurih dari ikan salmon dan krim keju dipadukan dengan segarnya lemon sangat pas dinikmati bersama roti. Yuk Bunda, coba resep Pate Salmon yang dilansir dari Heart Matters berikut ini.', 'Still processed fish, Salmon Pate is healthy for the heart, Mother. The combination of the savory flavors of salmon and cream cheese combined with the freshness of lemon is perfect to enjoy with bread. Come on, Moms, try the Salmon Pate recipe as reported by Heart Matters below.', '662bb9a85e663.jpeg', '2024-04-23 21:13:42', '2024-04-26 07:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `reseps`
--

CREATE TABLE `reseps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judulindo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `categori` varchar(255) NOT NULL,
  `juduleng` varchar(255) NOT NULL,
  `deskripsipendekindo` text NOT NULL,
  `deskripsipendekeng` text NOT NULL,
  `deskripsiindo` text NOT NULL,
  `deskripsieng` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reseps`
--

INSERT INTO `reseps` (`id`, `judulindo`, `slug`, `categori`, `juduleng`, `deskripsipendekindo`, `deskripsipendekeng`, `deskripsiindo`, `deskripsieng`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Menu Diet: Gulai Jantung Pisang Bandeng Suwir', 'Gulai Jantung Pisang Bandeng Suwir', 'diabetes', 'Diet Menu: Shredded Milkfish Banana Heart Curry', 'sebuah olahan makanan dengan bahan pokok jantung pisang', 'a processed food made from banana blossom as a staple ingredient', 'sebuah olahan makanan dengan bahan pokok jantung pisang', 'a processed food made from banana blossom as a staple ingredient', '6629fe565e5c3.jpeg', '2024-04-23 18:59:55', '2024-04-24 23:55:18'),
(2, 'Kentang tumbuk', 'Kentang Tumbuk', 'diabetes', 'Mash Potatoes', 'Makan kentang rebus tanpa diolah untuk gantikan nasi sangat bosan rasanya. Ayo kita buat variasinya dari bahan kentang. Yang paling simple dan nikmat ya buat mash potatoes aja. Btw mash jg bisa utk mpasi. Baik utk makanan bayi. Ayah bunda sampai baby bisa satu menu.', 'Eating boiled potatoes without processing them to replace rice is very boring. Let\'s make a variation from potatoes. The simplest and most delicious thing is to just make mash potatoes. BTW, it can also be used for mpation. Good for baby food. Mother and father and baby can have one menu.', 'Makan kentang rebus tanpa diolah untuk gantikan nasi sangat bosan rasanya. Ayo kita buat variasinya dari bahan kentang. Yang paling simple dan nikmat ya buat mash potatoes aja. Btw mash jg bisa utk mpasi. Baik utk makanan bayi. Ayah bunda sampai baby bisa satu menu.', 'Eating boiled potatoes without processing them to replace rice is very boring. Let\'s make a variation from potatoes. The simplest and most delicious thing is to just make mash potatoes. BTW, it can also be used for mpation. Good for baby food. Mother and father and baby can have one menu.', '6629fe2fda57a.jpeg', '2024-04-23 19:32:29', '2024-04-24 23:54:39'),
(3, 'Abon Jantung Pisang', 'Abon Jantung Pisang', 'jantung', 'Shredded Banana Heart', 'Melansir dari buku berjudul Cerdas Memilih Sayuran, jantung pisang merupakan sayuran yang rendah lemak, karbohidrat dan bebas kolesterol.  Asal tahu saja, kandungan karbohidrat dalam jantung pisang hanya 6-8g/100 g. Sedangkan kandungan lemaknya hanya 0.3 g- 0.4 g (tergantung dengan varietas pisang)', 'Quoting from a book entitled Smartly Choosing Vegetables, banana blossoms are vegetables that are low in fat, carbohydrates and free of cholesterol. Just so you know, the carbohydrate content in banana blossoms is only 6-8g/100 g. While the fat content is only 0.3 g - 0.4 g (depending on the banana variety)', 'Melansir dari buku berjudul Cerdas Memilih Sayuran, jantung pisang merupakan sayuran yang rendah lemak, karbohidrat dan bebas kolesterol.  Asal tahu saja, kandungan karbohidrat dalam jantung pisang hanya 6-8g/100 g. Sedangkan kandungan lemaknya hanya 0.3 g- 0.4 g (tergantung dengan varietas pisang)', 'Quoting from a book entitled Smartly Choosing Vegetables, banana blossoms are vegetables that are low in fat, carbohydrates and free of cholesterol. Just so you know, the carbohydrate content in banana blossoms is only 6-8g/100 g. While the fat content is only 0.3 g - 0.4 g (depending on the banana variety)', '6629fe3fcc9d2.jpeg', '2024-04-24 08:14:22', '2024-04-24 23:54:55'),
(4, 'Sayur Kentang Telur Puyuh', 'Sayur Kentang Telur Puyuh', 'obesitas', 'Quail Eggs Potato Vegetables', 'Bahan yang di olah dari sayur kentang telur puyuh', 'The ingredients are made from vegetables, potatoes, quail eggs', 'Bahan yang di olah dari sayur kentang telur puyuh', 'The ingredients are made from vegetables, potatoes, quail eggs', '6629fe60b4d6b.jpeg', '2024-04-24 08:14:40', '2024-04-24 23:55:28'),
(5, 'Jus Anti Nyeri Sendi dan Anti Hipertensi', 'Jus Anti Nyeri Sendi dan Anti Hipertensi', 'hipertensi', 'Anti-Joint Pain and Anti-Hypertension Juice', 'jus yang di buat dari buah jeruk dan bagus untuk penderita penyakit hipertensi', 'Juice made from oranges is good for people with hypertension', 'jus yang di buat dari buah jeruk dan bagus untuk penderita penyakit hipertensi', 'Juice made from oranges is good for people with hypertension', '6629fe6a6375d.jpeg', '2024-04-24 08:14:59', '2024-04-24 23:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RgRcWeD0VK5tkrx7pLZbHHKUEpd0o1g1P16Xkbuy', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOUhjUmFSUmU5ZG1oZWhvalNCMHJCNEt2VE85bVJkdkk4VHF2SklEayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jYXRlZ29yaS8wMSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkeWZDRzUwdEExaGZyaGpWWGgycUFkLm5oN1E0MmZXWkpPMXBPRDlGWHNBbWY3SVl3cVNOU3UiO30=', 1714144102),
('XxKRx1KLspC9PTIhdFRJjsVRzN0S9JrKKMHE4eOF', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib3dtMVdwU1RUeVVRQ3cyVng4NlRtNXhTdkY2d0l2M0M3SHZjRURObyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9yZXNlcC9KdXMlMjBBbnRpJTIwTnllcmklMjBTZW5kaSUyMGRhbiUyMEFudGklMjBIaXBlcnRlbnNpIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCR5ZkNHNTB0QTFoZnJoalZYaDJxQWQubmg3UTQyZldaSk8xcE9EOUZYc0FtZjdJWXdxU05TdSI7fQ==', 1714126346);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judulindo` varchar(255) NOT NULL,
  `juduleng` varchar(255) NOT NULL,
  `deskripsiindo` text NOT NULL,
  `deskripsieng` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `judulindo`, `juduleng`, `deskripsiindo`, `deskripsieng`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Aplikasi Resep Makanan', 'Aplikasi Resep Makanan', 'aplikasi ini berisikan sebuah resep makanan yang di gunakan untuk orang sakit', 'This application contains a food recipe that is used for sick people', '66275445af436.jpg', '2024-04-22 21:36:47', '2024-04-22 23:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `testis`
--

CREATE TABLE `testis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `deskripsiindo` text NOT NULL,
  `deskripsieng` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testis`
--

INSERT INTO `testis` (`id`, `nama`, `posisi`, `deskripsiindo`, `deskripsieng`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Riski Mulia ST', 'Mahaasiswa', 'awdawd', 'awdawd', '66289faf8703f.jpg', '2024-04-23 22:59:11', '2024-04-23 22:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', NULL, '$2y$10$yfCG50tA1hfrhjVXh2qAd.nh7Q42fWZJO1pOD9FXsAmf7IYwqSNSu', NULL, NULL, NULL, NULL, NULL, 'profile-photos/sTPQ4cYyc73m5SA3yPB4wygvRIgYjQdgiAHjes8L.jpg', '2024-01-12 03:54:10', '2024-01-12 04:03:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categoris`
--
ALTER TABLE `categoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rekoms`
--
ALTER TABLE `rekoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reseps`
--
ALTER TABLE `reseps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testis`
--
ALTER TABLE `testis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categoris`
--
ALTER TABLE `categoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekoms`
--
ALTER TABLE `rekoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reseps`
--
ALTER TABLE `reseps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testis`
--
ALTER TABLE `testis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
