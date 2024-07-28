-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 12:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dunia_gitar.db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id_ci` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id_ci`, `name`, `email`, `message`, `tanggal`) VALUES
(2, 'Muhadist Hasbi Irsyadi', 'aby@gmail.com', 'Barang yang dikirimkan sudah dengan tingkat keamanan yang sangat baik. Tetapi untuk pengiriman membutuhkan waktu yang sangat lama.', '2024-06-14 10:09:38'),
(3, 'Mutiara Sajidah', 'ejid123@gmail.com', 'Admin merespon customer dengan sangat ramah. Pertahankan kedepannya â˜…â˜…â˜…â˜…â˜…', '2024-06-14 10:12:53'),
(4, 'Lucas', 'lucas@gmail.com', 'Barang yang dikirim dengan kualitas yang sangat premium. Tetapi ada sedikit baret. Mungkin dapat meningkat keamanan barang yang akan di kirim \r\nbarang :â˜…â˜…â˜…â˜…â˜…\r\npengiriman : â˜…â˜…â˜…', '2024-06-14 10:16:42'),
(5, 'Lucas', 'lucas@gmail.com', 'Barang yang dikirim dengan kualitas yang sangat premium, tetapi ada sedikit baret. Mungkin dapat meningkat keamanan barang yang akan di kirim \r\nbarang     :â˜…â˜…â˜…â˜…â˜…\r\npengiriman :â˜…â˜…â˜…', '2024-06-14 10:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` enum('pending','completed','cancelled') DEFAULT 'pending',
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `address`, `phone`, `payment_method`, `total_price`, `status`, `order_date`) VALUES
(6, 'Riziq', 'Bukittinggi', '081234567890', 'credit_card', '19050000.00', 'pending', '2024-06-18 00:47:40'),
(7, 'Aby', 'Biaro', '091234567890', 'credit_card', '26950000.00', 'pending', '2024-06-18 00:51:23'),
(8, 'Jungwoo', 'Indonesia', '098765432112', 'credit_card', '26950000.00', 'pending', '2024-06-18 01:08:06'),
(9, 'Muhadist Hasbi Irsyadi', 'Bukittinggi', '093878460006', 'cash_on_delivery', '99999999.99', 'pending', '2024-06-18 03:30:19'),
(10, 'Muhadist Hasbi Irsyadi', 'Papua', '098765432112', 'bank_transfer', '24500000.00', 'pending', '2024-06-18 03:36:38'),
(11, 'Jon Irwil', 'Padang', '091266808081', 'cash_on_delivery', '46000000.00', 'pending', '2024-06-18 13:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id_detail` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id_detail`, `order_id`, `product_id`, `name`, `quantity`, `price`) VALUES
(2, 6, 4, 'Stringray Gitar Bass Musicman Hitam', 1, '1500000.00'),
(3, 6, 6, 'Ibanez Jem Flower Gitar Listrik Elektrik', 1, '17550000.00'),
(4, 7, 1, 'G&L USA Guitar ASAT Classic in Surf Gree', 1, '26950000.00'),
(5, 8, 1, 'G&L USA Guitar ASAT Classic in Surf Gree', 1, '26950000.00'),
(6, 9, 2, 'G&L Tribute Comanche Gloss Black Gitar L', 1, '25750000.00'),
(7, 9, 3, 'Gretsch G6146TG Player Edition Falcon', 1, '55850000.00'),
(8, 9, 5, 'Kramer Baretta Custom Graphics Feral Cat', 1, '23000000.00'),
(9, 9, 6, 'Ibanez Jem Flower Gitar Listrik Elektrik', 1, '17550000.00'),
(10, 10, 4, 'Stringray Gitar Bass Musicman Hitam', 1, '1500000.00'),
(11, 10, 5, 'Kramer Baretta Custom Graphics Feral Cat', 1, '23000000.00'),
(12, 11, 5, 'Kramer Baretta Custom Graphics Feral Cat', 2, '23000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(60) NOT NULL,
  `price` double NOT NULL,
  `stok_tersedia` int(11) DEFAULT '0',
  `stok_awal` int(11) DEFAULT NULL,
  `stok_terjual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `stok_tersedia`, `stok_awal`, `stok_terjual`) VALUES
(1, 'G&L USA Guitar ASAT Classic in Surf Green finishes.jpg', 'G&L USA Guitar ASAT Classic in Surf Gree', 'Barang limited edition\r\nwarna : green mit', 26950000, 6, 10, 4),
(2, 'G&L Tribute Comanche Gloss Black Gitar Listrikk.jpg', 'G&L Tribute Comanche Gloss Black Gitar L', 'warna : Hitam\r\ntype : electric gitar', 25750000, 7, 15, 8),
(3, 'Gretsch G6146TG Player Edition Falcon.jpg', 'Gretsch G6146TG Player Edition Falcon', 'warna : putih, merah, hitam\r\ntampilan : aestetic dan mewah', 55850000, 6, 12, 6),
(4, 'Stringray Gitar Bass Musicman Hitam.jpg', 'Stringray Gitar Bass Musicman Hitam', 'type : Gitar Bass\r\nWarna : Hitam', 1500000, 6, 8, 2),
(5, 'Kramer Baretta Custom Graphics Feral Cat Electric Guitar.jpg', 'Kramer Baretta Custom Graphics Feral Cat', 'Rainbow Leopard Kramer Baretta Custom  Graphics Feral Cat El', 23000000, 1, 10, 9),
(6, 'Ibanez Jem Flower Gitar Listrik Elektrik Custom.jpg', 'Ibanez Jem Flower Gitar Listrik Elektrik', 'Type : custom gitar\r\ndengan motif flower', 17550000, 0, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `stok_barang`
--

CREATE TABLE `stok_barang` (
  `id_stok` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `stok_awal` int(11) DEFAULT NULL,
  `stok_tersedia` int(11) DEFAULT NULL,
  `stok_terjual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_barang`
--

INSERT INTO `stok_barang` (`id_stok`, `product_id`, `name`, `stok_awal`, `stok_tersedia`, `stok_terjual`) VALUES
(1, 1, 'G&L USA Guitar ASAT Classic in Surf Gree', 10, 6, 4),
(2, 2, 'G&L Tribute Comanche Gloss Black Gitar L', 15, 7, 8),
(3, 3, 'Gretsch G6146TG Player Edition Falcon', 12, 6, 6),
(4, 4, 'Stringray Gitar Bass Musicman Hitam', 8, 6, 2),
(5, 5, 'Kramer Baretta Custom Graphics Feral Cat', 10, 3, 7),
(6, 6, 'Ibanez Jem Flower Gitar Listrik Elektrik', 9, 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `order_id`, `product_id`, `name`, `jumlah`, `tanggal`) VALUES
(1, 7, 1, 'G&L USA Guitar ASAT Classic in Surf Gree', 1, '2024-06-18'),
(2, 8, 1, 'G&L USA Guitar ASAT Classic in Surf Gree', 1, '2024-06-18'),
(3, 9, 2, 'G&L Tribute Comanche Gloss Black Gitar L', 1, '2024-06-18'),
(4, 9, 3, 'Gretsch G6146TG Player Edition Falcon', 1, '2024-06-18'),
(5, 9, 5, 'Kramer Baretta Custom Graphics Feral Cat', 1, '2024-06-18'),
(6, 9, 6, 'Ibanez Jem Flower Gitar Listrik Elektrik', 1, '2024-06-18'),
(7, 10, 4, 'Stringray Gitar Bass Musicman Hitam', 1, '2024-06-18'),
(8, 10, 5, 'Kramer Baretta Custom Graphics Feral Cat', 1, '2024-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'riziq', 'riziq@gmail.com', '$2y$10$0F8SKmoEixNudJrFmcw19uRsY0fUbsMQ1ZnT8XJQ.rfuT2W.mfTgu', 'admin', '2024-06-13 03:56:42'),
(2, 'ejid', 'ejid12@gmail.com', '$2y$10$JpFqnYe46q8cts/CFgEZJ.HrFUq2f6MG6UKqFHZu5KxRRziDdeWzK', 'customer', '2024-06-13 04:22:08'),
(3, 'mutiara', 'adek@gmail.com', '$2y$10$OQQcmiwPlvTofXuW/2qeoeMbvjWkxEZ.e.XrA79CEwQw/S2XRq/hG', 'admin', '2024-06-14 06:29:39'),
(4, 'aby', 'aby@gmail.com', '$2y$10$ZVB3iw/Tmz71Wv5s.0.d0eKgYmPReE2QkXtGyDUSPTxi.I0QkbgCy', 'customer', '2024-06-14 06:42:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id_ci`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id_ci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stok_barang`
--
ALTER TABLE `stok_barang`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
