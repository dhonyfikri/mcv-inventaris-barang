-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 03:20 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `sku`, `kategori`, `harga_satuan`, `stok`) VALUES
(1, 'Acer Nitro 5 AN515-57-71CV', 'LPT000048', 'Laptop', '17000000', 20),
(2, 'Seagate internal hardisk 3.5 500GB', 'HDK000062', 'Hardisk', '165000', 45),
(7, 'Asus A455L X455L Core i3 NviDia', 'LPT000049', 'Laptop', '5500000', 4),
(8, 'PC Gaming i7 Ram 16 GB VGA GT/ RX 4Gb ddr5 SSD 120Gb', 'PVC000064', 'Komputer', '5300000', 8),
(10, 'Weyon Sakura LED Monitor 24 inch', 'MTR000024', 'Monitor', '1140000', 6),
(11, 'Mouse Gaming HP M100 - 1600DPI RGB Gaming Mouse USB Wired - Black', 'MUS000074', 'Mouse', '60000', 40),
(16, 'Keyboard Gaming Kabel Divipard GK-50', 'KBD000038', 'Keyboard', '94000', 62),
(17, 'LENOVO IDEAPAD SLIM 3i 14 - N4020 4GB 512SSD', 'LPT000050', 'Laptop', '6000000', 7),
(18, 'PC Gaming New Fullset Core I5/8GB/Vga 2Gb/LED19inc', 'PVC000065', 'Komputer', '3998000', 4),
(21, 'Hardisk pc Sata 500GB WD Blue 35 inch', 'HDK000063', 'Hardisk', '200000', 10),
(22, 'Monitor Samsung LED IPS S24R350/ LS24R350FHE - Full HD 24 Inch', 'MTR000025', 'Monitor', '2235000', 5),
(23, 'Keyboard Gaming Mechanical AULA S-2022 BLACK–RGB Display Rainbow', 'KBD000039', 'Keyboard', '233000', 8),
(24, 'Jovitech 2021 NEW MOUSE GAMING LED Wireless 2.4G & Bluetooth 5.1 Rechargeable', 'MUS000075', 'Mouse', '80000', 12),
(25, 'LAPTOP GAMING ACER PREDATOR HELIOS 300 PH315 | I7 11800H 16GB 512SSD | RTX3060 6GB', 'LPT000052', 'Laptop', '22000000', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Admin', '0192023a7bbd73250516f069df18b500'),
(3, 'dhony', 'ce442221391d3b0d2fa4b0d5131e83e8'),
(5, 'indry', '97a958bdac56570684fb24f3eb31670b'),
(6, 'uswa', '9a1e6fa11389a6221c24b5c09fa91534');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
