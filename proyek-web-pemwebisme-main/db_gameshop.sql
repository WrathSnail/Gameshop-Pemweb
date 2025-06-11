-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2023 pada 05.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gameshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `games`
--

CREATE TABLE `games` (
  `game_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `game_image` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`game_id`, `title`, `slug`, `description`, `game_image`, `created_at`, `updated_at`) VALUES
(5, 'Mobile Legend', 'mobile-legend', 'Game Mobile 5v5', '1701410557_6806826a84bc75feeb7b.jpeg', '2023-12-01 06:02:37', '2023-12-01 06:02:37'),
(6, 'PUBGM', 'pubgm', 'Game Shooting Mobile', '1701410575_3d434e2a7c2c73124185.jpeg', '2023-12-01 06:02:55', '2023-12-01 06:02:55'),
(7, 'Valorant', 'valorant', 'Game Shooting FPS ', '1701410589_788798af71158932375c.jpeg', '2023-12-01 06:03:09', '2023-12-01 06:03:09'),
(9, 'Free Fire', 'free-fire', 'Shooting 8 bit', '1701410994_452443034e93f235a07f.jpeg', '2023-12-01 06:09:54', '2023-12-01 06:09:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-11-12-192437', 'App\\Database\\Migrations\\TbUsers', 'default', 'App', 1700374188, 1),
(2, '2023-11-12-192448', 'App\\Database\\Migrations\\TbGames', 'default', 'App', 1700374188, 1),
(3, '2023-11-12-192454', 'App\\Database\\Migrations\\TbTopups', 'default', 'App', 1700374188, 1),
(4, '2023-11-12-192500', 'App\\Database\\Migrations\\TbTransactions', 'default', 'App', 1700374188, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `topups`
--

CREATE TABLE `topups` (
  `topup_id` int(11) UNSIGNED NOT NULL,
  `game_id` int(11) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `topup_title` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `topups`
--

INSERT INTO `topups` (`topup_id`, `game_id`, `price`, `topup_title`, `created_at`, `updated_at`) VALUES
(15, 5, 5000, '18 Diamond', '2023-12-01 06:34:11', '2023-12-02 13:23:16'),
(16, 5, 30000, '113 Diamond', '2023-12-01 06:34:20', '2023-12-02 13:23:38'),
(17, 5, 45000, '172 Diamond', '2023-12-01 06:34:29', '2023-12-02 13:24:09'),
(18, 5, 102000, '384 Diamond', '2023-12-02 13:24:32', '2023-12-02 13:24:32'),
(19, 5, 252000, '963 Diamond', '2023-12-02 13:24:57', '2023-12-02 13:24:57'),
(20, 6, 12500, '60 UC', '2023-12-02 13:25:58', '2023-12-02 13:25:58'),
(21, 6, 62000, '325 UC', '2023-12-02 13:26:26', '2023-12-02 13:26:26'),
(22, 6, 125000, '660', '2023-12-02 13:26:46', '2023-12-02 13:26:46'),
(23, 6, 250000, '1320 UC', '2023-12-02 13:27:08', '2023-12-02 13:27:08'),
(24, 6, 376000, '2125 UC', '2023-12-02 13:27:27', '2023-12-02 13:27:27'),
(25, 7, 14500, '125 Points', '2023-12-02 13:27:54', '2023-12-02 13:27:54'),
(26, 7, 45000, '420 Points', '2023-12-02 13:28:20', '2023-12-02 13:28:20'),
(27, 7, 92000, '795 Points', '2023-12-02 13:28:37', '2023-12-02 13:28:37'),
(28, 7, 146000, '1375 Points', '2023-12-02 13:28:58', '2023-12-02 13:28:58'),
(29, 7, 293000, '2820 Points', '2023-12-02 13:29:21', '2023-12-02 13:29:21'),
(30, 9, 12000, '100 Diamond', '2023-12-02 13:30:32', '2023-12-02 13:30:32'),
(31, 9, 35000, '280 Diamond', '2023-12-02 13:30:50', '2023-12-02 13:30:50'),
(32, 9, 53000, '425 Diamond', '2023-12-02 13:31:12', '2023-12-02 13:31:12'),
(33, 9, 178000, '1440 Diamond', '2023-12-02 13:31:30', '2023-12-02 13:31:30'),
(34, 9, 267000, '2160 Diamond', '2023-12-02 13:31:50', '2023-12-02 13:31:50'),
(35, 5, 5000, '26 Diamond', '2023-12-04 04:06:14', '2023-12-04 04:06:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `game_id` int(11) UNSIGNED NOT NULL,
  `gameuser_id` varchar(11) NOT NULL,
  `game_location` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_payment` int(11) NOT NULL,
  `payment_image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `user_id`, `game_id`, `gameuser_id`, `game_location`, `payment_method`, `total_payment`, `payment_image`, `created_at`, `updated_at`) VALUES
(7, 4, 5, '1231231231', '2000', 'DANA', 5000, '1701412501_5ed3c4156e2d579885f4.png', '2023-12-01 06:35:01', '2023-12-01 06:35:01'),
(8, 5, 5, '123213212', '2012', 'OVO', 10000, '1701412529_c16643807c905dae8f5c.png', '2023-12-01 06:35:29', '2023-12-01 06:35:29'),
(9, 1, 5, '21313213213', '2112', 'BANK BCA', 10000, '1701412554_988f09b9c603b97679e3.jpeg', '2023-12-01 06:35:54', '2023-12-01 06:35:54'),
(10, 6, 5, '1231231231', '2019', 'OVO', 5000, '1701662844_df554e66e586593d53dd.jpg', '2023-12-04 04:07:24', '2023-12-04 04:07:24');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `transaction_view`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `transaction_view` (
`transaction_id` int(11) unsigned
,`user_id` int(11) unsigned
,`game_id` int(11) unsigned
,`user_name` varchar(50)
,`gameuser_id` varchar(11)
,`game_location` varchar(255)
,`payment_method` varchar(255)
,`total_payment` int(11)
,`payment_image` varchar(255)
,`created_at` datetime
,`updated_at` datetime
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Louis', 'louis@gmail.com', '$2y$10$4NPyewkgytNiJfBYCh3ihOxOTCRYLczCWGjM7mXOeETAl/UMcZFjK', 'user', '2023-11-20 09:08:35', '2023-11-20 02:18:42'),
(2, 'admin', 'admin@gmail.com', '$2y$10$SrqfRAgxNepN9rMpge3Zx.0l7E2P2Xlq71CcC6v4MA6QPhMVOQlvi', 'admin', NULL, '2023-11-20 02:11:04'),
(3, 'dafjo', 'dafjo@gmail.com', '$2y$10$JocplKteJKBq70n1xwRLgutigrw3w5JfD95BhSQgTSEU.uEfyQmEC', 'user', '2023-12-01 05:58:20', '2023-12-01 05:58:20'),
(4, 'jonathan', 'jonathan@gmail.com', '$2y$10$7L0F7mlnYXb7pj7f9TPgaOVzG0V2M4HPMDj0IGutR9Po.GRDs5zGS', 'user', '2023-12-01 06:33:20', '2023-12-01 06:33:20'),
(5, 'daffa', 'daffa@gmail.com', '$2y$10$vMQoUveNXNqcRiiRT3zJ5./qMuBtbHv5KY4j1fDS206Og44O8E00u', 'user', '2023-12-01 06:33:35', '2023-12-01 06:33:35'),
(6, 'daburr', 'daburr@gmail.com', '$2y$10$pg/ef2N4Lm3XpQpfmDmO0uk1Jm.IFzbRbbLRsngx4ejycVoNa7n9u', 'user', '2023-12-04 04:04:53', '2023-12-04 04:04:53');

-- --------------------------------------------------------

--
-- Struktur untuk view `transaction_view`
--
DROP TABLE IF EXISTS `transaction_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `transaction_view`  AS SELECT `transactions`.`transaction_id` AS `transaction_id`, `transactions`.`user_id` AS `user_id`, `transactions`.`game_id` AS `game_id`, `users`.`name` AS `user_name`, `transactions`.`gameuser_id` AS `gameuser_id`, `transactions`.`game_location` AS `game_location`, `transactions`.`payment_method` AS `payment_method`, `transactions`.`total_payment` AS `total_payment`, `transactions`.`payment_image` AS `payment_image`, `transactions`.`created_at` AS `created_at`, `transactions`.`updated_at` AS `updated_at` FROM (`transactions` join `users` on(`transactions`.`user_id` = `users`.`user_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `topups`
--
ALTER TABLE `topups`
  ADD PRIMARY KEY (`topup_id`),
  ADD KEY `topups_game_id_foreign` (`game_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_game_id_foreign` (`game_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `topups`
--
ALTER TABLE `topups`
  MODIFY `topup_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `topups`
--
ALTER TABLE `topups`
  ADD CONSTRAINT `topups_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
