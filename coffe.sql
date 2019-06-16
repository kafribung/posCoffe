-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 09:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffe`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanans`
--

CREATE TABLE `makanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(9,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makanans`
--

INSERT INTO `makanans` (`id`, `gambar`, `nama`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, '1559040406.jpg', 'pizza', 20000.00, 4, '2019-05-28 17:46:47', '2013-01-01 16:12:02'),
(2, '1559148920.jpg', 'nasi', 5000.00, -3, '2019-05-29 23:55:21', '2013-01-01 16:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_pesan`
--

CREATE TABLE `makanan_pesan` (
  `id` int(10) UNSIGNED NOT NULL,
  `makanan_id` int(11) NOT NULL,
  `pesan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makanan_pesan`
--

INSERT INTO `makanan_pesan` (`id`, `makanan_id`, `pesan_id`, `created_at`, `updated_at`) VALUES
(2, 2, 12, NULL, NULL),
(3, 2, 13, NULL, NULL),
(4, 1, 13, NULL, NULL),
(5, 2, 14, NULL, NULL),
(6, 1, 14, NULL, NULL),
(7, 2, 15, NULL, NULL),
(8, 1, 16, NULL, NULL),
(9, 2, 17, NULL, NULL),
(10, 1, 17, NULL, NULL),
(11, 2, 18, NULL, NULL),
(12, 1, 18, NULL, NULL),
(13, 2, 19, NULL, NULL),
(14, 1, 20, NULL, NULL),
(15, 1, 21, NULL, NULL),
(16, 2, 22, NULL, NULL),
(17, 1, 22, NULL, NULL),
(18, 2, 23, NULL, NULL),
(19, 1, 23, NULL, NULL),
(20, 2, 24, NULL, NULL),
(21, 1, 24, NULL, NULL),
(22, 2, 25, NULL, NULL),
(23, 2, 26, NULL, NULL),
(24, 2, 27, NULL, NULL),
(25, 1, 27, NULL, NULL),
(26, 2, 31, NULL, NULL),
(27, 2, 32, NULL, NULL),
(28, 2, 33, NULL, NULL),
(29, 1, 35, NULL, NULL),
(30, 2, 37, NULL, NULL),
(31, 2, 38, NULL, NULL),
(32, 2, 40, NULL, NULL),
(33, 2, 41, NULL, NULL),
(34, 2, 43, NULL, NULL),
(35, 1, 43, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manajemens`
--

CREATE TABLE `manajemens` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_25_232834_create_manajemens_table', 1),
(4, '2019_05_26_012110_create_makanans_table', 1),
(5, '2019_05_28_095727_create_minums_table', 1),
(6, '2019_05_29_123841_create_pesans_table', 2),
(7, '2019_05_29_163953_create_minum_pesan_table', 3),
(8, '2019_05_29_164156_create_makanan_pesan_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `minums`
--

CREATE TABLE `minums` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(9,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `minums`
--

INSERT INTO `minums` (`id`, `gambar`, `nama`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(2, '1559038568.jpg', 'ballo kacci', 10000.00, -6, '2019-05-28 17:16:09', '2019-06-16 12:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `minum_pesan`
--

CREATE TABLE `minum_pesan` (
  `id` int(10) UNSIGNED NOT NULL,
  `minum_id` int(11) NOT NULL,
  `pesan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `minum_pesan`
--

INSERT INTO `minum_pesan` (`id`, `minum_id`, `pesan_id`, `created_at`, `updated_at`) VALUES
(1, 2, 12, NULL, NULL),
(2, 2, 13, NULL, NULL),
(3, 2, 14, NULL, NULL),
(4, 2, 16, NULL, NULL),
(5, 2, 17, NULL, NULL),
(6, 2, 19, NULL, NULL),
(7, 2, 20, NULL, NULL),
(8, 2, 21, NULL, NULL),
(9, 2, 22, NULL, NULL),
(10, 2, 23, NULL, NULL),
(11, 2, 24, NULL, NULL),
(12, 2, 27, NULL, NULL),
(13, 2, 32, NULL, NULL),
(14, 2, 33, NULL, NULL),
(15, 2, 34, NULL, NULL),
(16, 2, 36, NULL, NULL),
(17, 2, 37, NULL, NULL),
(18, 2, 39, NULL, NULL),
(19, 2, 40, NULL, NULL),
(20, 2, 41, NULL, NULL),
(21, 2, 42, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayar` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id`, `nama`, `tempat`, `bayar`, `created_at`, `updated_at`) VALUES
(16, 'praja', '201', 1, '2019-06-04 14:58:11', '2019-06-11 02:14:53'),
(17, 'rifki', '301', 1, '2019-06-13 16:04:25', '2019-06-13 16:04:25'),
(21, 'nisa', '301', 1, '2019-06-15 19:04:27', '2019-06-16 11:29:11'),
(22, 'praja', '101', 1, '2019-06-15 19:09:12', '2019-06-16 11:47:11'),
(23, 'kafri', '101', 1, '2019-06-15 19:21:03', '2019-06-16 11:45:36'),
(24, 'kafri', '101', 1, '2019-06-15 19:28:15', '2019-06-16 11:19:41'),
(27, 'kafri', '101', 1, '2019-06-15 19:37:48', '2019-06-16 11:30:04'),
(33, 'yassar', '101', 1, '2019-06-16 11:05:35', '2019-06-16 11:16:15'),
(34, 'becce', '301', 1, '2019-06-16 11:06:20', '2019-06-16 11:51:47'),
(35, 'praja', '101', 1, '2019-06-16 11:24:02', '2019-06-16 11:55:34'),
(36, 'nisa', '301', 1, '2019-06-16 11:55:16', '2019-06-16 12:03:39'),
(37, 'nisa', '201', 1, '2019-06-16 11:56:48', '2019-06-16 12:12:55'),
(38, 'kafri', '101', 1, '2019-06-16 12:08:46', '2019-06-16 12:17:48'),
(39, 'sapi', '201', 1, '2019-06-16 12:17:20', '2019-06-16 12:38:17'),
(41, 'kafri', '101', 1, '2019-06-16 12:39:48', '2019-06-16 12:43:48'),
(42, 'sapi', '301', 1, '2019-06-16 12:40:26', '2019-06-16 12:42:46'),
(43, 'sogi', '01', 1, '2013-01-01 16:12:10', '2013-01-01 16:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'kafribung@gmail.com', '$2y$10$ZdzQzYNWSKYHHpAL/KmTGOtxu.zaKJ8Z5/QySRdYdyZn.sV6ZoISq', 'admin', 'gcihxldAWpKK1tCaWstd1y6psGZ40WgkVU6oqXISm68d80n9Tf9JjSzKwXWT', '2019-05-29 09:13:59', '2019-05-29 09:13:59'),
(2, 'bung', 'bung@gmail.com', '$2y$10$JyFamwMoOazVjbWR5xRvDeDjHpl5LcZtpMLZlewdkxMAzcxDUTh76', 'user', 'FxhvaO5KwSsVRJUdBFW6wJzgftFwblP7NgHFiy8jzVUVkgw5vkAI2kLqdTWL', '2019-05-29 12:14:07', '2019-05-29 12:14:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanans`
--
ALTER TABLE `makanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan_pesan`
--
ALTER TABLE `makanan_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manajemens`
--
ALTER TABLE `manajemens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minums`
--
ALTER TABLE `minums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minum_pesan`
--
ALTER TABLE `minum_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
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
-- AUTO_INCREMENT for table `makanans`
--
ALTER TABLE `makanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `makanan_pesan`
--
ALTER TABLE `makanan_pesan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `manajemens`
--
ALTER TABLE `manajemens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `minums`
--
ALTER TABLE `minums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `minum_pesan`
--
ALTER TABLE `minum_pesan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
