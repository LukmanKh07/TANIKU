-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 08:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_taniku`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id_cart` int(11) NOT NULL,
  `id_session` varchar(191) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id_cart`, `id_session`, `id_produk`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(16, 'v8w4IJop90WHqVBqmV4OlgNyY2b6hLkrGpGfv7EB', 2, 1, 5000, '2021-01-01 12:30:23', '2021-01-01 12:30:23'),
(17, 'v8w4IJop90WHqVBqmV4OlgNyY2b6hLkrGpGfv7EB', 7, 1, 100000, '2021-01-01 12:54:54', '2021-01-01 12:54:54'),
(21, 'W81czvL2QCEaja2zKX7Q9EppGxptU72FdhzITz3m', 2, 1, 5000, '2021-01-04 06:21:54', '2021-01-04 06:21:54'),
(27, 'TtKC9R61dcHd9KEJrtQ1SMX181IPo6kr9ErfdiLB', 2, 1, 5000, '2021-01-08 00:09:00', '2021-01-08 00:09:00'),
(28, 'TtKC9R61dcHd9KEJrtQ1SMX181IPo6kr9ErfdiLB', 1, 1, 2000, '2021-01-08 00:14:22', '2021-01-08 00:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `kategori` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Sayuran', '2021-01-18 00:24:22', '2021-01-18 00:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `detailorders`
--

CREATE TABLE `detailorders` (
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailorders`
--

INSERT INTO `detailorders` (`id_order`, `id_produk`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(11, 1, 1, 2000, '2021-01-02 20:04:31', '2021-01-02 20:04:31'),
(11, 2, 1, 5000, '2021-01-02 20:04:31', '2021-01-02 20:04:31'),
(12, 8, 1, 25000, '2021-01-07 18:30:55', '2021-01-07 18:30:55'),
(12, 7, 1, 100000, '2021-01-07 18:30:55', '2021-01-07 18:30:55'),
(12, 9, 1, 10000, '2021-01-07 18:30:55', '2021-01-07 18:30:55'),
(14, 8, 2, 50000, '2021-01-08 22:31:16', '2021-01-08 22:31:16'),
(14, 9, 1, 10000, '2021-01-08 22:31:16', '2021-01-08 22:31:16'),
(15, 11, 2, 2000, '2021-01-19 19:57:27', '2021-01-19 19:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE `markets` (
  `id_market` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_market` varchar(100) NOT NULL,
  `alamat_market` varchar(191) NOT NULL,
  `kontak_market` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`id_market`, `id_user`, `nama_market`, `alamat_market`, `kontak_market`, `created_at`, `updated_at`) VALUES
(1, 3, 'Harga Murah shops', 'Wedomartani', '086777222953', '2020-12-31 13:59:47', NULL),
(2, 2, 'Green day', 'Kalasan', '086777222953', '2021-01-08 00:43:03', NULL),
(4, 4, 'Monkey Shops', 'Wedomartani', '08122222888', '2021-01-19 19:53:58', '2021-01-19 19:53:58');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'order',
  `tujuan` text DEFAULT NULL,
  `kontak` varchar(20) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `total`, `status`, `tujuan`, `kontak`, `created_at`, `updated_at`) VALUES
(11, 3, 7000, 'selesai', 'Sleman', '0', '2021-01-02 20:04:31', '2021-01-02 20:04:31'),
(12, 4, 135000, 'selesai', 'Kalasan', '0', '2021-01-07 18:30:55', '2021-01-07 18:30:55'),
(14, 3, 60000, 'selesai', 'Wedomartani', '0', '2021-01-08 22:31:16', '2021-01-08 22:31:16'),
(15, 3, 2000, 'selesai', 'Wedomartani', '0', '2021-01-19 19:57:27', '2021-01-19 19:57:27');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_produk` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_market` int(11) NOT NULL,
  `kategori` int(11) NOT NULL DEFAULT 1,
  `nama_produk` varchar(191) NOT NULL,
  `gambar` varchar(191) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_produk`, `id_user`, `id_market`, `kategori`, `nama_produk`, `gambar`, `deskripsi`, `harga_produk`, `stok`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 0, 'Timun Manis', 'public/images\\1610167565.jpg', NULL, 2000, 5, '2020-12-31 14:24:56', '2020-12-31 22:31:14'),
(2, 3, 1, 0, 'Cabe Hijau', 'public/images\\1610167584.jpg', NULL, 5000, 12, '2020-12-31 14:25:21', '2020-12-31 22:31:14'),
(7, 3, 1, 0, 'Brokoli Hijau 3', 'public/images\\1609487888.jpg', NULL, 100000, 3, '2020-12-31 20:52:02', '2020-12-31 20:52:02'),
(8, 2, 2, 0, 'Cabe Merah', 'public/images\\1610067504.jpg', NULL, 25000, 5, '2021-01-07 17:58:24', '2021-01-07 17:58:24'),
(9, 2, 2, 1, 'Tomat Merah', 'public/images\\1610982490.jpg', 'Tomat Merah Segar', 10000, 2, '2021-01-07 17:59:10', '2021-01-07 17:59:10'),
(10, 3, 1, 0, 'kacang hijau', 'public/images\\1610170030.jpg', NULL, 10000, 5, '2021-01-08 22:27:10', '2021-01-08 22:27:10'),
(11, 4, 4, 1, 'sawi hijau', 'public/images\\1611111307.jpg', NULL, 1000, 3, '2021-01-19 19:55:07', '2021-01-19 19:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `is_seller` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `is_seller`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, 0, NULL, '$2y$10$dS5T6eTHqoZEzmkwHhZ.beWAHzJonReY1aN5GE3zu5P7jnshI1Eb6', NULL, '2020-12-30 04:27:07', '2020-12-30 04:27:07', 'aktif'),
(2, 'User', 'user@gmail.com', 0, 0, NULL, '$2y$10$Sb/asnaKM8e/ZqXc.WIkYeE20h.O4Mdbr6GZiG5QZaM.QdwyzjMZq', NULL, '2020-12-30 04:27:07', '2020-12-30 04:27:07', 'aktif'),
(3, 'Lukman', 'khoiruddinlk@gmail.com', 0, 0, NULL, '$2y$10$VuElY1GmJMZTfy39Z.XMX.YqLjxuJFRoAI0k.Tf9ZIGCRKFBmmWQ6', NULL, '2020-12-30 09:02:22', '2020-12-30 09:02:22', 'aktif'),
(4, 'monkey', 'monkey@gmail.com', 0, 0, NULL, '$2y$10$IwV01sZb6zB4AUEalmi2ne78edb92EOV/debs02kVdqWdt09St6Ay', NULL, '2021-01-07 17:59:50', '2021-01-07 17:59:50', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailorders`
--
ALTER TABLE `detailorders`
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markets`
--
ALTER TABLE `markets`
  ADD PRIMARY KEY (`id_market`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_merek` (`id_market`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `markets`
--
ALTER TABLE `markets`
  MODIFY `id_market` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `products` (`id_produk`);

--
-- Constraints for table `detailorders`
--
ALTER TABLE `detailorders`
  ADD CONSTRAINT `detailorders_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `detailorders_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `products` (`id_produk`);

--
-- Constraints for table `markets`
--
ALTER TABLE `markets`
  ADD CONSTRAINT `markets_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_market`) REFERENCES `markets` (`id_market`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
