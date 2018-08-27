-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Des 2017 pada 06.31
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biner-shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `all_settings`
--

CREATE TABLE `all_settings` (
  `all_id` int(3) NOT NULL,
  `all_name_settings` varchar(60) NOT NULL,
  `all_value_settings` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `all_settings`
--

INSERT INTO `all_settings` (`all_id`, `all_name_settings`, `all_value_settings`) VALUES
(1, 'footer', 'Copyright © Binercenter.com 2015'),
(2, 'site_name', 'Biner Shop V.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `gro_id` tinyint(1) NOT NULL,
  `gro_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`gro_id`, `gro_name`) VALUES
(1, 'admin'),
(2, 'c_admin'),
(3, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `id` int(16) NOT NULL,
  `data` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` enum('paid','confirmed','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `invoices`
--

INSERT INTO `invoices` (`id`, `data`, `due_date`, `user_id`, `status`) VALUES
(10001014, '2017-12-05 18:30:17', '2017-12-06 18:30:17', 5, 'unpaid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(16) NOT NULL,
  `invoice_id` int(16) NOT NULL,
  `product_id` int(16) NOT NULL,
  `product_type` varchar(60) NOT NULL,
  `product_title` varchar(60) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `product_id`, `product_type`, `product_title`, `qty`, `price`, `options`) VALUES
(10001020, 10001014, 14, 'Buku Framework', 'Laravel', 1, 7000, ''),
(10001021, 10001014, 15, 'Buku Framework', 'Buku Codeigniter', 1, 9000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `pro_id` int(16) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_title` varchar(20) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_price` int(9) NOT NULL,
  `pro_stock` int(3) NOT NULL,
  `pro_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_title`, `pro_description`, `pro_price`, `pro_stock`, `pro_image`) VALUES
(14, 'Buku Framework', 'Laravel', 'Buku Framework Laravel', 7000, 5, '168202_ede9fe0c-ea4c-11e4-9083-00eb49bc7260.jpg'),
(15, 'Buku Framework', 'Buku Codeigniter', 'Buku Framework Codeigniter', 9000, 5, '35398_f.jpg'),
(16, 'Tugas Kuliah', 'Cake PHP', 'Tugas Kuliah Cake PHP', 8000, 5, 'beginning-cakephp.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `rep_id` int(9) NOT NULL,
  `rep_name` varchar(60) NOT NULL,
  `rep_id_product` int(9) NOT NULL,
  `rep_title_product` varchar(60) NOT NULL,
  `rep_usr_name` varchar(60) NOT NULL,
  `rep_usr_group` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shop_session`
--

CREATE TABLE `shop_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `shop_session`
--

INSERT INTO `shop_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('a4b9c8176fdc8e30b6901e645bdf048667cf44ce', '::1', 1512537604, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323533373336313b757365726e616d657c733a353a2261646d696e223b67726f75707c733a313a2231223b),
('ab64ce741624d95f9360b37327758d178cf9ce6a', '::1', 1512537823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323533373636373b757365726e616d657c733a353a2261646d696e223b67726f75707c733a313a2231223b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `usr_id` int(10) NOT NULL,
  `usr_name` varchar(25) NOT NULL,
  `usr_password` varchar(60) NOT NULL,
  `usr_group` tinyint(1) NOT NULL,
  `stuts` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`usr_id`, `usr_name`, `usr_password`, `usr_group`, `stuts`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(4, 'biner', '202cb962ac59075b964b07152d234b70', 3, 1),
(5, 'army', '1c724cf4167b3adbe48c2f985403ab96', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_settings`
--
ALTER TABLE `all_settings`
  ADD PRIMARY KEY (`all_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`gro_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`rep_id`);

--
-- Indexes for table `shop_session`
--
ALTER TABLE `shop_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_settings`
--
ALTER TABLE `all_settings`
  MODIFY `all_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `gro_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001015;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001022;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `rep_id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
