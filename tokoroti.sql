-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2022 pada 15.27
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoroti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` varchar(5) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `harga_bahan` int(11) NOT NULL,
  `jumlah_bahan` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama_bahan`, `harga_bahan`, `jumlah_bahan`, `updated_at`, `created_at`) VALUES
('B0001', 'Gula', 25000, 222, '2021-01-11 20:00:01', '2020-12-15 02:46:04'),
('B0002', 'Tepung', 10000, 105, '2021-01-11 20:35:24', '2021-01-11 04:51:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id_user` varchar(5) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `kata_sandi` varchar(100) NOT NULL,
  `level_user` varchar(1) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id_user`, `nama_user`, `username`, `kata_sandi`, `level_user`, `updated_at`, `created_at`) VALUES
('U0001', 'Dimaz', 'dummy2', 'dimazivan', '0', '2020-12-15 14:54:11', '2020-12-14 22:13:18'),
('U0002', 'Dummy2', 'dummy', 'dimazivan', '1', '2020-12-15 17:55:53', '2020-12-15 00:56:12'),
('U0003', 'Clara', 'clara', 'dimazivan', '0', '2020-12-15 15:08:56', '2020-12-15 01:00:29'),
('U0004', 'Cust', 'customer', 'dimazivan', '1', '2020-12-15 10:59:55', '2020-12-15 03:59:55'),
('U0005', 'Test2', '18410100117', 'dimazzzzzzz', '0', '2020-12-15 16:39:50', '2020-12-15 01:14:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_11_124802_create_trigger', 1),
(5, '2021_01_11_125437_updatebahan_trigger', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `jumlah_produk` int(11) DEFAULT NULL,
  `deskripsi_produk` varchar(100) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `jumlah_produk`, `deskripsi_produk`, `updated_at`, `created_at`) VALUES
('P0001', 'Kue Bolu', 2000, 200, 'Enak Pol', '2021-01-12 19:38:58', '2020-12-16 04:10:47'),
('P0002', 'Kue Lapis', 2500, 9000, 'Tidak ada', '2021-01-12 19:59:35', '2021-01-11 18:06:09'),
('P0003', 'Kue Tart', 50000, 50, 'Ena Pol', '2021-01-12 12:40:12', '2021-01-12 05:40:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(5) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `no_telp_supplier` varchar(15) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_telp_supplier`, `updated_at`, `created_at`) VALUES
('S0001', 'Supri', 'Manukan', NULL, '2020-12-16 00:13:54', '2020-12-15 17:13:54'),
('S0002', 'Jamal', 'Jelidro', '0182819281', '2020-12-16 00:16:11', '2020-12-15 17:16:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pembelian`
--

CREATE TABLE `transaksi_pembelian` (
  `id_transaksi_pembelian` varchar(5) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `id_bahan` varchar(5) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL DEFAULT 'Tidak Terdaftar',
  `harga_bahan` int(11) NOT NULL DEFAULT 0,
  `jumlah_beli` int(11) NOT NULL,
  `total_harga_beli` int(11) NOT NULL DEFAULT 0,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_pembelian`
--

INSERT INTO `transaksi_pembelian` (`id_transaksi_pembelian`, `nama_supplier`, `id_bahan`, `nama_bahan`, `harga_bahan`, `jumlah_beli`, `total_harga_beli`, `updated_at`, `created_at`) VALUES
('TP001', 'Supri', 'B0001', 'Gula', 25000, 2, 50000, '2021-01-11 13:00:01', '2021-01-11 06:00:01'),
('TP002', 'Jamal', 'B0002', 'Tepung', 10000, 5, 50000, '2021-01-11 13:35:24', '2021-01-11 06:35:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_penjualan`
--

CREATE TABLE `transaksi_penjualan` (
  `id_transaksi_penjualan` varchar(5) NOT NULL DEFAULT '',
  `nama_pembeli` varchar(20) NOT NULL DEFAULT '',
  `id_produk` varchar(5) NOT NULL DEFAULT '',
  `nama_produk` varchar(50) NOT NULL DEFAULT '',
  `harga_produk` int(11) NOT NULL DEFAULT 0,
  `jumlah_order` int(11) NOT NULL DEFAULT 0,
  `total_harga_order` int(11) NOT NULL DEFAULT 0,
  `catatan_pembeli` varchar(100) DEFAULT NULL,
  `bayar_produk` int(11) NOT NULL DEFAULT 0,
  `status_penjualan` varchar(20) DEFAULT 'Proses',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_penjualan`
--

INSERT INTO `transaksi_penjualan` (`id_transaksi_penjualan`, `nama_pembeli`, `id_produk`, `nama_produk`, `harga_produk`, `jumlah_order`, `total_harga_order`, `catatan_pembeli`, `bayar_produk`, `status_penjualan`, `updated_at`, `created_at`) VALUES
('J0001', 'Dimaz', 'P0001', 'P0001', 2000, 10, 20000, 'Ena', 20000, 'Ditolak', '2021-01-12 12:38:58', '2021-01-12 12:38:58'),
('J0003', 'Dimaz Ivan', 'P0002', 'P0002', 2500, 1000, 2500000, NULL, 10000000, 'Proses', '2021-01-12 05:59:04', '2021-01-12 05:59:04'),
('J0071', 'Dimaz2222', 'P0002', 'P0002', 2500, 2, 5000, NULL, 5000, 'Proses', '2021-01-12 04:39:04', '2021-01-12 04:39:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trigger`
--

CREATE TABLE `trigger` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dimaz', 'dimazivan740@gmail.com', '2021-05-25 03:16:35', '$2y$10$ZdeUVgw.iy4d3.5eXFDMy.HbEK3TsyQwMUcJlbi3WhjiY8Lkx8..e', NULL, '2021-05-25 03:16:35', '2021-05-25 03:16:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD PRIMARY KEY (`id_transaksi_pembelian`);

--
-- Indeks untuk tabel `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD PRIMARY KEY (`id_transaksi_penjualan`);

--
-- Indeks untuk tabel `trigger`
--
ALTER TABLE `trigger`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `trigger`
--
ALTER TABLE `trigger`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
