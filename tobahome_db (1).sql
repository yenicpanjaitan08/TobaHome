-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2020 pada 22.23
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tobahome_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_visitor` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_homestay` int(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `payment` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `id_visitor`, `name`, `notel`, `email`, `id_homestay`, `jumlah`, `check_in`, `check_out`, `payment`, `total`, `created_at`, `updated_at`) VALUES
('', 0, 'Mika', '08123456787654', 'mika@gmail.com', 0, 0, '2020-07-01', '2020-07-02', 'transfer', '', '2020-06-12 12:52:31', '2020-06-12 12:52:31'),
('1', 4, '', '', '', 1, 2, '2020-05-01', '2020-05-03', '0', '300.000', NULL, NULL),
('2', 1, 'Kiky', '085261087299', 'kiky@gmail.com', 1, 0, '2020-06-26', '2020-06-28', 'transfer', '', '2020-06-12 12:42:21', '2020-06-12 12:42:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_homestay`
--

CREATE TABLE `booking_homestay` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(10) UNSIGNED NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `homestay_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `booking_homestay`
--

INSERT INTO `booking_homestay` (`id`, `booking_id`, `visitor_id`, `homestay_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `homestay_id` int(20) NOT NULL,
  `facility_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `homestay_id`, `facility_name`, `img`, `desc`, `updated_at`, `created_at`) VALUES
(1, 2, 'Internet', 'wifi.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-06-10 23:28:37', '2020-05-22 12:23:57'),
(3, 2, 'Parking', 'park.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-31 08:02:03', '2020-05-22 12:24:07'),
(5, 1, 'Bathroom', 'service-7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-31 08:00:16', '2020-05-22 15:38:45'),
(7, 0, 'Restaurant', 'photo2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-06-10 23:28:56', '2020-06-10 23:28:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `homestay`
--

CREATE TABLE `homestay` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_visitor` int(20) NOT NULL,
  `header_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(191) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_room` int(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `homestay`
--

INSERT INTO `homestay` (`id`, `id_visitor`, `header_image`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `name`, `price`, `status`, `contact`, `email`, `address`, `rating`, `review`, `total_room`, `description`, `created_at`, `updated_at`) VALUES
(1, 17, 'room-5.jpg', 'room-b3.jpg', 'room-b2.jpg', 'room-6.jpg', 'room-4.jpg', 'photo2.png', 'room-b3.jpg', 'OYO 1095 RAP Hotel', '100.000', 'Available', '0852-6108-7299', 'oyorap@oyo.com', 'Jl. Siborong Borong - Parapat No.57, Pardede Onan, Balige, Kabupaten Toba Samosir,22312, 22312 Balige, Indonesia', 4, 'Contoh Review', 12, 'Terletak di Balige, OYO 1095 RAP Hotel menawarkan teras. Semua kamar memiliki TV satelit layar datar dan kamar mandi pribadi. Menampilkan pemandangan danau, kamar-kamar yang ber-AC dilengkapi dengan meja kerja dan WiFi gratis. Semua kamar menyediakan lemari pakaian. Resepsionis di OYO 1095 RAP Hotel dapat memberikan saran mengenai area ini.', NULL, '2020-05-23 14:49:54'),
(2, 2, 'room-4.jpg', 'room-b3.jpg', 'room-5.jpg', 'room-6.jpg', 'room-5.jpg', 'room-4.jpg', 'room-b2.jpg', 'Pondok Berata Dapdap', '250.000', 'Available', '0852-6108-7299', 'berata@berata.com', 'JL Sibolahotang SAS Balige Kec. Balige Kab. Toba Samosir Pantai Lumban Bulbul Balige, 22312 Balige, Indonesia', 5, 'Conth Review', 8, 'Pondok Berata Dapdap terletak di Balige.\r\nSemua unit memiliki dapur kecil lengkap agar Anda dapat menyiapkan makanan sendiri. Beberapa unit menyediakan teras dan/atau balkon dengan pemandangan gunung.\r\nSarapan Asia tersedia setiap pagi di B&B ini.\r\n\r\nPondok Berata Dapdap dilengkapi dengan fasilitas barbekyu.\r\nTerdapat juga area pantai pribadi dan lounge bersama di B&B ini.\r\nB&B ini berjarak 65 km dari Parapat.', '2020-05-22 15:01:55', '2020-05-23 14:52:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_19_204332_create_facilities_table', 1),
(4, '2020_05_20_014621_create_room_table', 1),
(5, '2020_05_20_183419_create_profil_table', 1),
(6, '2020_05_20_211215_create_homestay_table', 1),
(7, '2020_05_21_182532_create_rating_table', 1),
(8, '2020_05_22_180922_create_review_table', 1),
(9, '2020_05_23_054613_create_booking_table', 2),
(10, '2020_06_08_135554_create_booking_homestay_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `notel` int(20) NOT NULL,
  `arrive` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `depart` date NOT NULL,
  `tipe_room` varchar(255) NOT NULL,
  `nama_homestay` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `role`, `front_name`, `last_name`, `gender`, `email`, `address`, `phone`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Owner', 'Owner', 'A', 'F', 'owner@gmail.com', 'Porsea', '085261087299', '', NULL, NULL),
(2, 'Visitor', 'Kiky', 'Napitupulu', 'F', 'kiky@gmail.com', 'Porsea', '085261087299', '', NULL, '2020-05-23 06:39:57'),
(4, 'Visitor', 'Mika', 'Manurung', 'F', 'mika@gmail.com', 'Porsea', '0821147483647', '', NULL, '2020-05-27 07:50:48'),
(17, 'Visitor', 'Yeni', 'Panjaitan', 'F', 'yeni@gmail.com', 'Balige', '085261087299', '', '2020-05-23 00:35:28', '2020-05-23 06:40:23'),
(18, 'Visitor', 'Krista', 'Lumbanraja', 'F', 'krista@gmail.com', 'Porsea', '082564351623', '', '2020-06-10 04:05:25', '2020-06-10 23:12:04'),
(21, 'Visitor', 'Enjelin', 'Ida', 'F', 'enjelin@gmail.com', 'Porsea', '0895629378649', '', '2020-06-10 23:15:31', '2020-06-10 23:15:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homestay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moderated_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `rating`, `homestay`, `room`, `status`, `moderated_at`, `created_at`, `updated_at`) VALUES
(2, 'Kiky', 'Pemandangan alam yg sangat bagus, cocok untuk liburan, bisa bermain air di pinggir danau', '5', 'OYO 1095 RAP Hotel', 'Queen Room', '1', '2020-06-11 06:51:58', NULL, '2020-06-10 23:51:58'),
(3, 'Yeni Panjaitan', '----------', '1', 'Pondok Berata Dapdap', 'Kamar Standard Double', '1', '2020-06-11 06:51:53', NULL, '2020-06-10 23:51:53'),
(4, 'Kiky', 'Pemandangan alam yg sangat bagus, cocok untuk liburan, bisa bermain air di pinggir danau', '5', 'Pondok Berata Dapdap', 'Queen Room', '1', '0000-00-00 00:00:00', NULL, '2020-05-23 14:52:38'),
(5, 'Krista ', '----------', '2', 'Pondok Berata Dapdap', 'Kamar Standard Double', '1', '2020-06-11 04:37:08', NULL, '2020-06-10 21:37:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `homestay_id` int(20) NOT NULL,
  `room_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `room`
--

INSERT INTO `room` (`id`, `homestay_id`, `room_type`, `capacity`, `room_size`, `bed_type`, `price`, `img`, `desc`, `created_at`, `updated_at`) VALUES
(1, 2, 'Twin Room', '3', '16', 'King Size Bed', '200.000', 'room-b3.jpg', 'Contoh Deskripsi room', '2020-05-22 12:22:17', '2020-06-10 23:20:40'),
(2, 2, 'Kamar Standard Double', '2', '16', 'Double Bed', '200.000', 'room-b1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-22 15:20:44', '2020-05-31 08:16:08'),
(3, 1, 'Kamar Standard', '2', '16', 'Standard Bed', '100.000', 'room-b2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', '2020-05-22 15:23:48', '2020-05-31 08:16:19'),
(5, 1, 'Family Room', '6', '20', 'Double Bed', '500.000', 'room-b3.jpg', '', '2020-05-31 08:17:05', '2020-05-31 08:17:05'),
(7, 2, 'Single Room', '1', '8', 'Single Bed', '50.000', 'room-b3.jpg', 'Contoh Deskripsi', '2020-06-10 02:10:39', '2020-06-10 03:18:53'),
(9, 1, 'Room Baru', '1', '8', 'Single Bed', '100.000', 'room-b3.jpg', 'Contoh', '2020-06-10 23:24:23', '2020-06-10 23:24:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Owner', 'Owner', 'Owner A', 'owner@gmail.com', NULL, '$2y$10$OH9LnibhWJYNCK99rZrD3euy7/vMIfVUJcrtpiJCY7NspNa5SM.tS', 'oZMVWdjN6eKob0cZBmhIoXuau6bXOOFcAXNdKvTuhEdYvbY6yfNOQ6uUQbiO', '2020-05-22 12:21:29', '2020-05-22 12:21:29'),
(4, 'Visitor', 'Visitor', 'Visitor', 'visitor@gmail.com', NULL, '$2y$10$Y320ocgqO.t.W5.2S/d8Ieuke2dSU17YIpSGZQ8lUM596coOOlICC', NULL, '2020-06-11 00:37:01', '2020-06-11 00:37:01'),
(6, 'kikyNapitupulu', 'Visitor', 'Kiky', 'kikynapitupulu687@gmail.com', NULL, '$2y$10$py8tACTyXyedrx0HXmng9uvnArynLVLyu95.3VNxqOE.o1gEYbxoO', NULL, '2020-06-11 23:39:27', '2020-06-11 23:39:27'),
(7, 'Krista12', 'Visitor', 'Krista', 'krista@gmail.com', NULL, '$2y$10$DhuxVUnab91PTu.AdTAKa.FYfLXv2lXSz.Zr7HYuhieFF0rQDAiv6', NULL, '2020-06-11 23:54:43', '2020-06-11 23:54:43'),
(8, 'Mika12', 'Visitor', 'Mika', 'mika@gmail.com', NULL, '$2y$10$tJk6Ik0uNijVodtaNlmPy.HyF31VW0jcI2RNzP/K7UcwAd1lBH.tS', NULL, '2020-06-11 23:57:24', '2020-06-11 23:57:24'),
(9, 'yenni12', 'Visitor', 'yenni', 'yeni@gmail.com', NULL, '$2y$10$dTvpuwJILUKTFz8AAoUZFek9OvPvk9k9eQ6obFAUsLFWZK.4/CMzy', NULL, '2020-06-12 00:02:08', '2020-06-12 00:02:08'),
(10, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$F5lM594iwZO1IgPnyV3NX.6.oPQX1DHVotynHwSQCwGvklU/ocqmq', NULL, '2020-06-12 05:22:56', '2020-06-12 05:22:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `booking_homestay`
--
ALTER TABLE `booking_homestay`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking_homestay`
--
ALTER TABLE `booking_homestay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `homestay`
--
ALTER TABLE `homestay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
