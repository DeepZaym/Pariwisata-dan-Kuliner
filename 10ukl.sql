-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
<<<<<<< HEAD
-- Generation Time: May 25, 2024 at 02:53 PM
=======
-- Generation Time: Apr 26, 2024 at 05:28 AM
>>>>>>> 0387e62d83dd53a19ee219f4ef5a4c47b0831eb4
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
<<<<<<< HEAD
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
(1, 'rendang', '', 20000, 'rendang.jpg'),
(2, 'ketoprak', '', 15000, 'Ketoprak.jpg'),
(3, 'soto banjar', '', 20000, 'Sotobanjar.jpg');

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
(5, 0, 0, 'momentum', 5, 'bawain piring', 100000, 'SHOPEEPAY', '2024-05-24 21:57:52');

-- --------------------------------------------------------

--
=======
>>>>>>> 0387e62d83dd53a19ee219f4ef5a4c47b0831eb4
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
(1, 'siu', 'siu', '111', 'user'),
(2, 'aaa', 'aaa', '222', 'user'),
(3, 'vaio', 'vaio', '333', 'user'),
(4, 'zaim', 'zaim', '555', 'admin'),
<<<<<<< HEAD
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
(16, 'na', 'dip', '111', 'user');
=======
(5, 'nabil', 'nabil', '222', 'user');
>>>>>>> 0387e62d83dd53a19ee219f4ef5a4c47b0831eb4

--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`IdBarang`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`),
  ADD UNIQUE KEY `IdPengguna` (`IdPengguna`,`IdBarang`);

--
=======
>>>>>>> 0387e62d83dd53a19ee219f4ef5a4c47b0831eb4
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IdPengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `IdBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
=======
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> 0387e62d83dd53a19ee219f4ef5a4c47b0831eb4
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
