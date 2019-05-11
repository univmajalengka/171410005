-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 11:40 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `study_kasus_di_konter_dokter_cell_leuwimunding`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `kode_brg` int(6) NOT NULL,
  `Nama_barang` varchar(30) NOT NULL,
  `Harga_barang` int(12) NOT NULL,
  `Jumlah_barang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`kode_brg`, `Nama_barang`, `Harga_barang`, `Jumlah_barang`) VALUES
(0, 'kartu perdana', 20000, 23),
(110, 'kartu perdana', 20000, 200),
(111, 'voucher kuota', 20000, 200),
(112, 'casing hp', 100000, 300),
(113, 'case', 75000, 300),
(114, 'charger', 150000, 300),
(115, 'headset', 150000, 100),
(116, 'usb', 50000, 100),
(117, 'memory card', 150000, 100),
(118, 'temepered glass', 30000, 100),
(119, 'otg', 20000, 50),
(666, '', 0, 0),
(777, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_kasir`
--

CREATE TABLE `data_kasir` (
  `Kode_ksr` int(4) NOT NULL,
  `Nama_ksr` text NOT NULL,
  `Password_ksr` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kasir`
--

INSERT INTO `data_kasir` (`Kode_ksr`, `Nama_ksr`, `Password_ksr`) VALUES
(0, '', ''),
(110, 'reno pratama', 'reno123'),
(111, 'ajat', 'ajat123'),
(112, 'doni', 'doni123'),
(113, 'reni', 'reni123'),
(114, 'devi', 'devi123'),
(115, 'nino', 'nino123'),
(116, 'ratih', 'ratih123'),
(117, 'revan', 'revan123'),
(118, 'andi', 'andi123'),
(119, 'dina', 'dina123'),
(120, 'radit', 'radit123'),
(123, 'sjak', '123'),
(222, 'wqewa', '123'),
(345, 'didin', '123'),
(555, '', '23'),
(4444, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_penjualan`
--

CREATE TABLE `data_penjualan` (
  `faktur` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jml_harga` int(12) NOT NULL,
  `jml_item` int(5) NOT NULL,
  `dibayar` int(12) NOT NULL,
  `jml_kembali` int(12) NOT NULL,
  `kode_ksr` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penjualan`
--

INSERT INTO `data_penjualan` (`faktur`, `tanggal`, `jml_harga`, `jml_item`, `dibayar`, `jml_kembali`, `kode_ksr`) VALUES
('', '0000-00-00', 0, 0, 0, 0, 0),
('001', '2019-03-17', 150000, 1, 150000, 0, 110),
('002', '2019-03-17', 20000, 1, 20000, 0, 111),
('003', '2019-03-17', 150000, 1, 150000, 0, 111),
('004', '2019-03-17', 100000, 2, 100000, 0, 113),
('005', '2019-03-17', 150000, 1, 150000, 0, 114),
('006', '2019-03-17', 20000, 1, 20000, 0, 115),
('007', '2019-03-17', 100000, 1, 100000, 0, 116),
('008', '2019-03-16', 150000, 2, 150000, 0, 117),
('009', '2019-03-17', 30000, 1, 30000, 0, 119),
('010', '2019-03-17', 20000, 2, 40000, 0, 120),
('43', '0000-00-00', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `Nomor` int(2) NOT NULL,
  `kode_brg` int(6) NOT NULL,
  `Harga` int(12) NOT NULL,
  `Jumlah` int(5) NOT NULL,
  `Total` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`Nomor`, `kode_brg`, `Harga`, `Jumlah`, `Total`) VALUES
(1, 110, 150000, 1, 150000),
(2, 111, 20000, 1, 20000),
(3, 112, 150000, 1, 150000),
(4, 113, 50000, 2, 10000),
(5, 114, 150000, 1, 150000),
(6, 115, 20000, 1, 20000),
(7, 116, 100000, 1, 100000),
(8, 117, 75000, 2, 150000),
(9, 118, 30000, 1, 30000),
(10, 119, 20000, 2, 40000),
(11, 1234, 2000, 12, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_jual`
--

CREATE TABLE `detail_jual` (
  `kode_detail_jual` int(11) NOT NULL,
  `kode_brg` int(6) NOT NULL,
  `faktur` varchar(5) NOT NULL,
  `jml_jual` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_jual`
--

INSERT INTO `detail_jual` (`kode_detail_jual`, `kode_brg`, `faktur`, `jml_jual`) VALUES
(1, 110, '001', 1),
(2, 111, '002', 1),
(3, 112, '003', 1),
(4, 113, '004', 2),
(5, 114, '005', 1),
(6, 115, '006', 1),
(7, 115, '006', 1),
(8, 116, '007', 1),
(9, 117, '007', 2),
(10, 118, '008', 1),
(11, 119, '009', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(0, '', '', ''),
(1231, 'sadsad', '123', ''),
(0, '', '', ''),
(345, 'hhhhh', '12345', '3'),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indexes for table `data_kasir`
--
ALTER TABLE `data_kasir`
  ADD PRIMARY KEY (`Kode_ksr`);

--
-- Indexes for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD PRIMARY KEY (`faktur`),
  ADD KEY `kode_ksr` (`kode_ksr`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`Nomor`),
  ADD KEY `kode_brg` (`kode_brg`);

--
-- Indexes for table `detail_jual`
--
ALTER TABLE `detail_jual`
  ADD PRIMARY KEY (`kode_detail_jual`),
  ADD KEY `kode_brg` (`kode_brg`),
  ADD KEY `faktur` (`faktur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
