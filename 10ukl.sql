-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2024 at 02:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10ukl`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `IdBarang` int(11) NOT NULL,
  `NamaBarang` varchar(111) DEFAULT NULL,
  `asal` varchar(11) NOT NULL,
  `harga` int(111) NOT NULL,
  `foto` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`IdBarang`, `NamaBarang`, `asal`, `harga`, `foto`) VALUES
(1, 'Rendang', 'PADANG', 20000, 'Gambar/rendang.jpg'),
(2, 'Ketoprak', 'JAKARTA', 15000, 'Gambar/Ketoprak.jpg'),
(3, 'Soto Banjar', 'KALSEL', 20000, 'Gambar/Sotobanjar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idorder` int(11) NOT NULL,
  `IdPengguna` int(11) NOT NULL,
  `IdBarang` int(11) NOT NULL,
  `alamat` varchar(111) NOT NULL,
  `qty` int(11) NOT NULL,
  `custom` varchar(111) NOT NULL,
  `total` int(11) NOT NULL,
  `pembayaran` varchar(111) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idorder`, `IdPengguna`, `IdBarang`, `alamat`, `qty`, `custom`, `total`, `pembayaran`, `tanggal`) VALUES
(1, 1, 1, 'mars', 7, '', 140000, 'OVO', '2024-05-17 11:00:57'),
(2, 2, 2, 'mars', 3, '', 45000, 'OVO', '2024-05-19 11:18:52'),
(3, 3, 1, 'sembarang', 5, '', 100000, 'OVO', '2024-05-20 09:19:03'),
(4, 0, 1, 'sidoarjo', 11, 'ngga ada', 220000, 'COD', '2024-05-23 21:07:30'),
(5, 0, 0, 'momentum', 5, 'bawain piring', 100000, 'SHOPEEPAY', '2024-05-24 21:57:52'),
(10, 4, 1, 'Surabaya', 3, '0', 0, 'DANA', '2024-05-27 11:53:08'),
(16, 5, 1, 'paris', 9, 'bismillahhh', 180000, 'COD', '2024-05-27 00:00:00'),
(17, 6, 1, 'darjo', 9, 'bismillah', 180000, 'DANA', '2024-05-27 08:07:21'),
(18, 4, 3, 'darjo', 5, 'bismillah', 100000, 'COD', '2024-05-27 10:31:18'),
(21, 4, 2, 'malang', 3, 'gaada', 60000, 'COD', '2024-05-27 14:30:25'),
(22, 18, 1, 'jakarta', 3, 'terserah', 60000, 'COD', '2024-05-27 18:17:10'),
(23, 4, 1, 'jakarta', 3, 'bumbunya dibanyakin', 60000, 'COD', '2024-05-28 05:19:53'),
(24, 17, 1, 'sekardangan', 3, 'bumbunya dibanyakin', 60000, 'GOPAY', '2024-05-28 05:35:38'),
(25, 17, 1, 'sekardangan', 123455, 'pler', 2147483647, 'GOPAY', '2024-05-28 05:52:28'),
(26, 18, 1, 'malang', 3, 'bawain piring', 60000, 'COD', '2024-05-28 08:07:01'),
(27, 4, 0, 'malang', 3, 'bawain piring', 60000, 'OVO', '2024-05-28 09:16:21'),
(28, 4, 1, 'Sda', 2, 'gapake kuah', 0, 'DANA', '2024-05-28 09:44:15'),
(29, 18, 2, 'Sda', 3, 'gapake kuah', 0, 'SHOPEEPAY', '2024-05-28 09:48:50'),
(30, 4, 1, 'PERUMAHAN SURYA CITRA TAMA 2 BLOK E-31 DESA/KEL.KEPUH KEMIRI RT.48 RW. 11 KEC. TULANGAN', 3, 'bisa yok', 0, 'DANA', '2024-05-28 12:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `IdPengguna` int(11) NOT NULL,
  `nama` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `role` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`IdPengguna`, `nama`, `username`, `password`, `role`) VALUES
(1, 'siu', 'ronaldo', '111', 'user'),
(2, 'aaa', 'aaa', '222', 'user'),
(3, 'vaio', 'vaio', '333', 'user'),
(4, 'zaim', 'zaim', '555', 'admin'),
(5, 'nabil', 'nabil', '222', 'user'),
(6, 'mimin', 'admin', 'qqq', 'role'),
(7, 'mimin', 'admin', 'qqq', 'Array'),
(8, 'admin', 'mimmmin', 'qqq', 'Array'),
(9, 'ddaa', 'aaaa', '2222', 'Array'),
(10, 'ddaa', 'aaaa', '2222', 'admin'),
(11, 'bisa', 'bisaa', 'buisaaaa', 'admin'),
(12, 'bisa', 'bisaa', 'buisaaaa', 'admin'),
(13, 'aku', 'hehee', '123', 'user'),
(14, 'senin', 'h-seminggu', '111', 'user'),
(15, 'nampilin', 'nama username disini', '999', 'user'),
(16, 'na', 'dip', '111', 'user'),
(17, 'nadip', 'nadip', '111', 'user'),
(18, 'sye', 'sye', '555', 'user'),
(19, 'nadip', 'nadip', '111', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`IdBarang`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `IdPengguna` (`IdPengguna`,`IdBarang`) USING BTREE,
  ADD KEY `IdPengguna_3` (`IdPengguna`,`IdBarang`) USING BTREE,
  ADD KEY `IdPengguna_2` (`IdPengguna`,`IdBarang`) USING BTREE;

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IdPengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `IdBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
