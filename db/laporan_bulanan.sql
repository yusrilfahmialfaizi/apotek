-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 01:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Structure for view `laporan_bulanan`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_bulanan`  AS  select `penjualan`.`id_penjualan` AS `id_penjualan`,`user`.`nama_user` AS `nama_user`,`user`.`jabatan` AS `jabatan`,`penjualan`.`tanggal` AS `tanggal`,`penjualan`.`total_harga` AS `total_harga`,`penjualan`.`bayar` AS `bayar`,`penjualan`.`kembalian` AS `kembalian`,`penjualan`.`diskon` AS `diskon` from (`user` join `penjualan`) where (`user`.`id_user` = `penjualan`.`id_user`) ;

--
-- VIEW  `laporan_bulanan`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
