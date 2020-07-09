-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 02:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akun`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Admin', 'admin123'),
('Wahyu', 'Wahyu123');

-- --------------------------------------------------------

--
-- Table structure for table `product_edit`
--

CREATE TABLE `product_edit` (
  `id_barang` varchar(50) NOT NULL,
  `warna_barang` varchar(50) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `ukuran` int(100) DEFAULT NULL,
  `diskon` varchar(4) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` enum('One Pupose','Multi Purpose') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_edit`
--

INSERT INTO `product_edit` (`id_barang`, `warna_barang`, `harga`, `jumlah`, `ukuran`, `diskon`, `gambar`, `kategori`) VALUES
('1', 'Silver', '1.700.000', 3, 80, '5%', '1.jpg', 'Multi Purpose'),
('10', 'Biru', '200.000', 8, 50, '0%', '10.jpg', 'One Pupose'),
('2', 'hitam', '1.500.000', 3, 80, '10%', '2.jpg', 'Multi Purpose'),
('3', 'Hitam', '800.000', 3, 50, '5%', '3.jpg', 'One Pupose'),
('4', 'Hitam', '1.000.000', 4, 50, '5%', '4.jpg', 'One Pupose'),
('5', 'Hitam', '1.900.000', 5, 80, '5%', '5.jpg', 'Multi Purpose'),
('6', 'Hitam', '950.000', 6, 80, '5%', '6.jpg', 'Multi Purpose'),
('7', 'Hitam', '2.500.000', 10, 50, '5%', '7.jpg', 'Multi Purpose'),
('8', 'Hitam', '7.000.000', 8, 50, '5%', '8.jpg', 'Multi Purpose'),
('9', 'Hitam', '50.000', 9, 50, '0%', '9.jpg', 'One Pupose');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `product_edit`
--
ALTER TABLE `product_edit`
  ADD PRIMARY KEY (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
