-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 09:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gitar`
--

-- --------------------------------------------------------

--
-- Table structure for table `gitars`
--

CREATE TABLE `gitars` (
  `id_gitar` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gitars`
--

INSERT INTO `gitars` (`id_gitar`, `nama`, `merk`, `jenis`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Yamaha DG1900', 1, 2, '150000', 'PicsArt_03-09-05.25.49.jpg', NULL, '2021-07-04 22:09:44'),
(2, 'Suzuki Z5012', 2, 2, '176000', 'none', NULL, '2021-07-04 22:10:06'),
(3, 'Gibson Y2544', 2, 1, '240000', 'none', '2021-07-04 07:57:02', '2021-07-04 07:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `jeniss`
--

CREATE TABLE `jeniss` (
  `id_jenis` int(10) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jeniss`
--

INSERT INTO `jeniss` (`id_jenis`, `nama_jenis`, `created_at`, `updated_at`) VALUES
(1, 'Akustik', NULL, NULL),
(2, 'Listrik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `merks`
--

CREATE TABLE `merks` (
  `id_merk` int(10) UNSIGNED NOT NULL,
  `nama_merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merks`
--

INSERT INTO `merks` (`id_merk`, `nama_merk`, `created_at`, `updated_at`) VALUES
(1, 'Yamaha', NULL, NULL),
(2, 'Gibson', NULL, NULL),
(3, 'Fender', NULL, NULL),
(4, 'Schecter', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2021_06_20_121019_create_gitars_table', 1),
(22, '2021_06_23_035117_create_merk_table', 1),
(23, '2021_06_23_035453_create_jeniss_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Paleng', 'a@a.com', '$2y$10$JQVaRZ9uRXvON96bJS28pO28apWhBbwg/L6LxNtS/dTKr2GhzdkYe', 1, 'EHcE5zJ9covtcEIVCuP3EXVcY2p1hnpglr5vP5OHwEBIhcVsDdNhBM2ggi4D', '2021-07-01 05:19:43', '2021-07-01 05:19:43'),
(2, 'Bukan Admin', 'b@b.com', '$2y$10$fxY4WWmd160dVJQ35ICAE.iNc2cFqAaT0DtaLqTAS56Mg4V57hV4S', 0, 'lR4QqJgDvAr4ldaChen4Bp9XSHZ5CNl5aaRGUeP3Cg0THe5UlNO6BMdh2uoj', '2021-07-01 05:24:40', '2021-07-01 05:24:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gitars`
--
ALTER TABLE `gitars`
  ADD PRIMARY KEY (`id_gitar`);

--
-- Indexes for table `jeniss`
--
ALTER TABLE `jeniss`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `merks`
--
ALTER TABLE `merks`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `gitars`
--
ALTER TABLE `gitars`
  MODIFY `id_gitar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jeniss`
--
ALTER TABLE `jeniss`
  MODIFY `id_jenis` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `merks`
--
ALTER TABLE `merks`
  MODIFY `id_merk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
