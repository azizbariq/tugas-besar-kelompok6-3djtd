-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 01:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kodebarang` varchar(5) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `harga` float(10,0) NOT NULL,
  `persediaan` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kodebarang`, `namabarang`, `harga`, `persediaan`) VALUES
('98012', 'Shampo', 5000, 6),
('12781', 'ayam', 1789, 8),
('12001', 'aqua', 8999, 2),
('22222', 'lampu', 3000, 25);

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `kodebarang` varchar(5) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `harga` float(10,0) NOT NULL,
  `persediaan` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`kodebarang`, `namabarang`, `harga`, `persediaan`) VALUES
('12345', 'daging ikan', 8000, 2),
('33333', 'buah', 2500, 30),
('90365', 'pizza', 6000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `kodebarang` varchar(5) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `harga` float(10,0) NOT NULL,
  `persediaan` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`kodebarang`, `namabarang`, `harga`, `persediaan`) VALUES
('11111', 'akua', 5000, 10),
('25621', 'teh', 500, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD KEY `NewIndex` (`kodebarang`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD KEY `NewIndex` (`kodebarang`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD KEY `NewIndex` (`kodebarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
