-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 08:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

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
-- Table structure for table `detail_kunjungan`
--

CREATE TABLE `detail_kunjungan` (
  `id_det_kunjungan` int(11) NOT NULL,
  `id_kunjungan` varchar(12) DEFAULT NULL,
  `id_obat_praktik` varchar(6) DEFAULT NULL,
  `jenis` enum('Biji','Lembar') DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kunjungan`
--

INSERT INTO `detail_kunjungan` (`id_det_kunjungan`, `id_kunjungan`, `id_obat_praktik`, `jenis`, `qty`) VALUES
(1, '201909260002', 'B00001', 'Biji', 1),
(2, '201910290001', 'B00001', 'Biji', 2),
(3, '201910290001', 'B00002', 'Lembar', 1),
(4, '201910290002', 'B00001', 'Biji', 1),
(5, '201910290002', 'B00002', 'Lembar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_obat`
--

CREATE TABLE `detail_obat` (
  `id_detail_ob` int(6) NOT NULL,
  `id_obat` varchar(6) DEFAULT NULL,
  `exp` date DEFAULT NULL,
  `jumlah_stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_obat`
--

INSERT INTO `detail_obat` (`id_detail_ob`, `id_obat`, `exp`, `jumlah_stok`) VALUES
(1, 'B00001', '2019-11-15', 4),
(2, 'B00001', '2019-11-06', 0),
(3, 'B00002', '2019-11-03', 9),
(4, 'B00001', '2019-12-03', 1),
(5, 'B00002', '2019-12-03', 0),
(6, 'B00001', '2019-12-21', 12);

-- --------------------------------------------------------

--
-- Table structure for table `detail_obat_praktik`
--

CREATE TABLE `detail_obat_praktik` (
  `id_detail_op` int(11) NOT NULL,
  `id_obat_praktik` varchar(6) DEFAULT NULL,
  `exp` date DEFAULT NULL,
  `jumlah_stok` int(11) DEFAULT NULL,
  `jumlah_biji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_obat_praktik`
--

INSERT INTO `detail_obat_praktik` (`id_detail_op`, `id_obat_praktik`, `exp`, `jumlah_stok`, `jumlah_biji`) VALUES
(21, 'B00001', '2019-10-13', 16, 64),
(22, 'B00002', '2019-10-14', 23, 276),
(23, 'B00002', '2019-10-13', 22, 264),
(24, 'B00001', '2019-10-14', 1, 3),
(25, 'B00001', '2019-10-20', 1, 4),
(26, 'B00001', '2019-10-21', 1, 4),
(27, 'B00001', '2019-12-02', 100, 400);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id_det_pembelian` int(11) NOT NULL,
  `id_pembelian` varchar(14) DEFAULT NULL,
  `id_obat` varchar(6) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `exp` date DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`id_det_pembelian`, `id_pembelian`, `id_obat`, `qty`, `exp`, `harga`, `subtotal`) VALUES
(1, 'Jl-2', 'B00001', 1, '2019-12-02', 1, 1),
(2, 'Jl-3', 'B00001', 1, '2019-12-03', 1, 1),
(3, 'Jl-4', 'B00001', 1, '2019-12-03', 1, 1),
(4, 'Jl-5', 'B00001', 1, '2019-12-03', 1, 1),
(5, 'Jl-6', 'B00001', 1, '2019-12-03', 1, 1),
(6, 'Jl-7', 'B00002', 1, '2019-12-03', 1, 1),
(7, 'Jl-7', 'B00001', 1, '2019-12-03', 1, 1),
(8, 'Jl-1000', 'B00001', 12, '2019-12-21', 1000, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian_obat_praktik`
--

CREATE TABLE `detail_pembelian_obat_praktik` (
  `id_det_pembelian` int(11) NOT NULL,
  `id_pembelian` varchar(14) DEFAULT NULL,
  `id_obat_praktik` varchar(6) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `exp` date DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembelian_obat_praktik`
--

INSERT INTO `detail_pembelian_obat_praktik` (`id_det_pembelian`, `id_pembelian`, `id_obat_praktik`, `qty`, `exp`, `harga`, `subtotal`) VALUES
(60, 'JL-003', 'B00001', 1, '2019-10-13', 1, 1),
(61, 'JL-003', 'B00002', 1, '2019-10-14', 1, 1),
(62, 'JL-001', 'B00001', 2, '2019-10-13', 1, 2),
(63, 'JL-002', 'B00001', 2, '2019-10-13', 1, 2),
(64, 'JL-002', 'B00002', 5, '2019-10-13', 1, 5),
(65, 'JL-004', 'B00001', 2, '2019-10-13', 1, 2),
(66, 'JL-004', 'B00002', 10, '2019-10-14', 5, 50),
(67, 'JL-005', 'B00001', 2, '2019-10-13', 1, 2),
(68, 'JL-005', 'B00002', 10, '2019-10-14', 5, 50),
(69, 'JL-006', 'B00001', 2, '2019-10-13', 1, 2),
(70, 'JL-006', 'B00002', 11, '2019-10-13', 1, 11),
(71, 'JL-007', 'B00001', 2, '2019-10-13', 1, 2),
(72, 'JL-007', 'B00002', 11, '2019-10-13', 1, 11),
(73, 'JL-008', 'B00001', 2, '2019-10-13', 1, 2),
(74, 'JL-008', 'B00002', 11, '2019-10-13', 1, 11),
(75, 'JL-009', 'B00001', 2, '2019-10-13', 1, 2),
(76, 'JL-009', 'B00002', 11, '2019-10-13', 1, 11),
(77, 'JL-010', 'B00001', 2, '2019-10-13', 1, 2),
(78, 'JL-011', 'B00001', 1, '2019-10-14', 1, 1),
(79, 'JL-011', 'B00002', 1, '2019-10-14', 1, 1),
(80, 'JL-012', 'B00001', 1, '2019-10-20', 1, 1),
(81, 'JL-012', 'B00002', 1, '2019-10-14', 1, 1),
(82, 'JL-013', 'B00001', 1, '2019-10-21', 1, 1),
(83, 'JL-013', 'B00002', 1, '2019-10-14', 1, 1),
(84, 'JL-014', 'B00002', 1, '2019-10-14', 1, 1),
(85, 'JL-300', 'B00001', 100, '2019-12-02', 2500, 250000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detail_pembelian_op`
-- (See below for the actual view)
--
CREATE TABLE `detail_pembelian_op` (
`id_det_pembelian` int(11)
,`id_pembelian` varchar(14)
,`id_obat_praktik` varchar(6)
,`qty` int(11)
,`exp` date
,`harga` int(11)
,`subtotal` int(11)
,`nama_paten` varchar(20)
,`nama_generic` varchar(20)
,`nama_pabrik` varchar(20)
,`jenis` enum('Bebas','Bebas Terbatas','Narkotik / Psikotropik')
,`kategori` enum('Tablet','Sirup','Salep','Kapsul','Racikan','dll')
);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_det_penjualan` int(11) NOT NULL,
  `id_penjualan` varchar(14) DEFAULT NULL,
  `id_obat` varchar(6) DEFAULT NULL,
  `exp` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_det_penjualan`, `id_penjualan`, `id_obat`, `exp`, `qty`, `harga`, `sub_total`) VALUES
(9, '20191123000001', 'B00001', NULL, 1, 1500, 1500),
(10, '20191123000002', 'B00001', NULL, 1, 1500, 1500),
(11, '20191123000003', 'B00001', NULL, 1, 1500, 1500),
(12, '20191124000001', 'B00001', NULL, 1, 1500, 1500),
(13, '20191125000001', 'B00001', NULL, 1, 1500, 1500),
(14, '20191125000002', 'B00001', NULL, 1, 1500, 1500),
(15, '20191130000001', 'B00001', NULL, 1, 1500, 1500),
(16, '20191130000002', 'B00001', NULL, 1, 1500, 1500),
(17, '20191130000003', 'B00001', NULL, 1, 1500, 1500),
(18, '20191203000001', 'B00002', NULL, 7, 10000, 70000),
(19, '20191203000002', 'B00001', NULL, 6, 1500, 9000),
(20, '20191205000001', 'B00001', NULL, 1, 1500, 1500),
(21, '20191206000001', 'B00002', NULL, 1, 10000, 10000),
(22, '20191210000001', 'B00001', '2019-11-15', 1, 1500, 1500),
(23, '20191210000002', 'B00001', '2019-11-06', 2, 1500, 1500),
(24, '20191210000002', 'B00001', '2019-11-15', 1, 1500, 1500),
(25, '20191210000002', 'B00001', '2019-12-03', 1, 1500, 1500),
(26, '20191210000003', 'B00001', '2019-11-06', 2, 1500, 1500),
(27, '20191210000003', 'B00001', '2019-11-15', 1, 1500, 1500),
(28, '20191210000003', 'B00001', '2019-12-03', 1, 1500, 1500),
(29, '20191210000004', 'B00001', '2019-11-06', 2, 1500, 1500),
(30, '20191210000004', 'B00001', '2019-11-15', 1, 1500, 1500),
(31, '20191210000004', 'B00001', '2019-12-03', 1, 1500, 1500),
(32, '20191210000005', 'B00001', '2019-11-06', 2, 1500, 1500),
(33, '20191210000005', 'B00001', '2019-11-15', 1, 1500, 1500),
(34, '20191210000005', 'B00001', '2019-12-03', 1, 1500, 1500),
(35, '20191210000006', 'B00001', '2019-11-06', 1, 1500, 1500),
(36, '20191210000006', 'B00001', '2019-11-15', 1, 1500, 1500),
(37, '20191210000007', 'B00001', '2019-11-06', 1, 1500, 1500),
(38, '20191210000007', 'B00001', '2019-11-15', 1, 1500, 1500),
(39, '20191210000008', 'B00001', '2019-11-06', 1, 1500, 1500),
(40, '20191210000008', 'B00001', '2019-11-15', 1, 1500, 1500),
(41, '20191210000009', 'B00001', '2019-11-06', 1, 1500, 1500),
(42, '20191210000009', 'B00001', '2019-11-15', 1, 1500, 1500),
(43, '20191210000010', 'B00001', '2019-11-06', 1, 1500, 1500),
(44, '20191210000010', 'B00001', '2019-11-15', 1, 1500, 1500),
(45, '20191210000011', 'B00001', '2019-11-06', 1, 1500, 1500),
(46, '20191210000012', 'B00001', '2019-11-15', 1, 1500, 1500),
(47, '20191210000012', 'B00002', '2019-11-03', 1, 10000, 10000),
(48, '20191210000013', 'B00002', '2019-12-03', 1, 10000, 10000),
(49, '20191210000013', 'B00001', '2019-12-03', 1, 1500, 1500);

--
-- Triggers `detail_penjualan`
--
DELIMITER $$
CREATE TRIGGER `pengurangan` AFTER INSERT ON `detail_penjualan` FOR EACH ROW BEGIN
UPDATE detail_obat SET jumlah_stok = jumlah_stok - New.qty WHERE id_obat = new.id_obat AND exp = new.exp;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_tmp`
--

CREATE TABLE `detail_tmp` (
  `id_detail_tmp` int(11) NOT NULL,
  `id_tmp` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `id_obat` varchar(6) CHARACTER SET latin1 DEFAULT NULL,
  `exp` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_tmp`
--

INSERT INTO `detail_tmp` (`id_detail_tmp`, `id_tmp`, `id_obat`, `exp`, `qty`, `harga`, `sub_total`) VALUES
(18, 'TMP04', 'B00001', '2019-11-15', 1, 1500, 1500),
(19, 'TMP04', 'B00001', '2019-11-06', 1, 1500, 1500),
(22, 'TMP05', 'B00001', '2019-11-06', 2, 1500, 1500),
(23, 'TMP05', 'B00001', '2019-11-15', 1, 1500, 1500),
(24, 'TMP05', 'B00001', '2019-12-03', 1, 1500, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` varchar(12) NOT NULL,
  `no_rm` varchar(8) DEFAULT NULL,
  `tgl_kunjungan` datetime DEFAULT NULL,
  `diagnosa_keperawatan` text DEFAULT NULL,
  `intervensi` text DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `no_rm`, `tgl_kunjungan`, `diagnosa_keperawatan`, `intervensi`, `tarif`) VALUES
('201909260002', 'RM000001', '2019-09-26 01:17:09', 'asd', 'asd', 123),
('201910290001', 'RM000001', '2019-10-29 10:11:34', 'asda', 'asd', 123),
('201910290002', 'RM000001', '2019-10-29 10:20:44', 'asdsad', 'asdsad', 123123213);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan`
-- (See below for the actual view)
--
CREATE TABLE `laporan` (
`id_penjualan` varchar(14)
,`id_user` varchar(4)
,`tanggal` date
,`total_harga` int(11)
,`bayar` int(11)
,`kembalian` int(11)
,`nama_user` varchar(30)
,`jabatan` enum('Owner','Apoteker','Kasir')
);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(6) NOT NULL,
  `nama_paten` varchar(20) DEFAULT NULL,
  `nama_generic` varchar(20) DEFAULT NULL,
  `nama_pabrik` varchar(20) DEFAULT NULL,
  `jenis` enum('Bebas','Bebas Terbatas','Narkotik / Psikotropik') DEFAULT NULL,
  `kategori` enum('Tablet','Sirup','Salep','Kapsul','Racikan','dll') DEFAULT NULL,
  `harga_per_biji` int(6) DEFAULT NULL,
  `harga_per_lembar` int(6) DEFAULT NULL,
  `harga_beli` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_paten`, `nama_generic`, `nama_pabrik`, `jenis`, `kategori`, `harga_per_biji`, `harga_per_lembar`, `harga_beli`) VALUES
('B00001', 'Mixagrip', 'Mixagrip', 'Kalbe', 'Bebas', 'Tablet', 200, 1500, 1000),
('B00002', 'Paracetamol', 'Paracetamol', 'Kimia Farma', 'Bebas', 'Tablet', 1000, 10000, 8000),
('BJ0003', 'Paramex', 'Pilek', 'Kalbe', 'Bebas', 'Tablet', 200, 3000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `obat_praktik`
--

CREATE TABLE `obat_praktik` (
  `id_obat_praktik` varchar(6) NOT NULL,
  `nama_paten` varchar(20) DEFAULT NULL,
  `nama_generic` varchar(20) DEFAULT NULL,
  `nama_pabrik` varchar(20) DEFAULT NULL,
  `jenis` enum('Bebas','Bebas Terbatas','Narkotik / Psikotropik') DEFAULT NULL,
  `kategori` enum('Tablet','Sirup','Salep','Kapsul','Racikan','dll') DEFAULT NULL,
  `jumlah_biji` int(11) NOT NULL,
  `harga_per_biji` int(6) DEFAULT NULL,
  `harga_per_lembar` int(6) DEFAULT NULL,
  `harga_beli` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_praktik`
--

INSERT INTO `obat_praktik` (`id_obat_praktik`, `nama_paten`, `nama_generic`, `nama_pabrik`, `jenis`, `kategori`, `jumlah_biji`, `harga_per_biji`, `harga_per_lembar`, `harga_beli`) VALUES
('B00001', 'Mixagrip', 'Mixagrip', 'Kalbe', 'Bebas', 'Tablet', 4, 150, 2000, 1000),
('B00002', 'Paracetamol', 'Paracetamol', 'Kimia Farma', 'Bebas', 'Tablet', 12, 500, 6000, 4500);

-- --------------------------------------------------------

--
-- Table structure for table `opname_obat`
--

CREATE TABLE `opname_obat` (
  `id_opname` varchar(8) NOT NULL,
  `id_user` varchar(4) DEFAULT NULL,
  `id_obat` varchar(6) DEFAULT NULL,
  `exp` date DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `stok_nyata` int(11) DEFAULT NULL,
  `selisih` int(11) DEFAULT NULL,
  `ket` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opname_obat`
--

INSERT INTO `opname_obat` (`id_opname`, `id_user`, `id_obat`, `exp`, `stok`, `stok_nyata`, `selisih`, `ket`) VALUES
('OB000001', 'A001', 'B00001', '2019-11-06', 1, 1, 0, 'pas'),
('OB000002', 'A001', 'B00001', '2019-11-15', 5, 6, -1, 'salah input'),
('OB000003', 'A002', 'B00001', '2019-11-15', 6, 6, 0, 'pas'),
('OB000004', 'A002', 'B00001', '2019-11-15', 6, 5, 1, 'belum tercatat'),
('OB000005', 'A002', 'B00002', '2019-11-03', 12, 10, 2, 'belum tercatat');

-- --------------------------------------------------------

--
-- Table structure for table `opname_obat_praktik`
--

CREATE TABLE `opname_obat_praktik` (
  `id_opname` varchar(8) NOT NULL,
  `id_obat` varchar(6) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `stok_nyata` int(11) DEFAULT NULL,
  `selisih` int(11) DEFAULT NULL,
  `ket` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `opname_obat_praktik`
--
DELIMITER $$
CREATE TRIGGER `opname_praktik` AFTER INSERT ON `opname_obat_praktik` FOR EACH ROW UPDATE obat SET obat_praktik.stok_obat = new.stok_nyata WHERE opname_obat_praktik.id_obat = obat_praktik.id_obat
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_rm` varchar(8) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `usia` int(3) DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_rm`, `nama`, `jenis_kelamin`, `tgl_lahir`, `usia`, `alamat`) VALUES
('RM000001', 'Yusril Fahmi Al Faizi', 'Laki - laki', '1998-09-24', 20, 'Tempurejo - Jember');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` varchar(14) NOT NULL,
  `id_user` varchar(4) DEFAULT NULL,
  `id_supplier` varchar(5) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `id_supplier`, `tanggal`, `total_harga`) VALUES
('Jl-1', 'A002', NULL, '2019-12-02', 1),
('Jl-1000', 'A002', 'Sup01', '2019-12-06', 12000),
('Jl-2', 'A002', NULL, '2019-12-02', 1),
('Jl-3', 'A002', NULL, '2019-12-03', 1),
('Jl-4', 'A002', 'Sup01', '2019-12-03', 1),
('Jl-5', 'A002', 'Sup01', '2019-12-03', 1),
('Jl-6', 'A002', 'Sup01', '2019-12-03', 1),
('Jl-7', 'A002', 'Sup01', '2019-12-03', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_obat_praktik`
--

CREATE TABLE `pembelian_obat_praktik` (
  `id_pembelian` varchar(14) NOT NULL,
  `id_user` varchar(4) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_obat_praktik`
--

INSERT INTO `pembelian_obat_praktik` (`id_pembelian`, `id_user`, `tanggal`, `total_harga`) VALUES
('JL-001', 'A001', '2019-10-13', 7),
('JL-002', 'A001', '2019-10-13', 7),
('JL-003', 'A001', '2019-10-13', 2),
('JL-004', 'A001', '2019-10-13', 52),
('JL-005', 'A001', '2019-10-13', 52),
('JL-006', 'A001', '2019-10-13', 13),
('JL-007', 'A001', '2019-10-13', 13),
('JL-008', 'A001', '2019-10-13', 13),
('JL-009', 'A001', '2019-10-13', 13),
('JL-010', 'A001', '2019-10-13', 13),
('JL-011', 'A001', '2019-10-13', 2),
('JL-012', 'A001', '2019-10-20', 2),
('JL-013', 'A001', '2019-10-20', 2),
('JL-014', 'A001', '2019-10-20', 1),
('JL-300', 'A001', '2019-12-02', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` varchar(14) NOT NULL,
  `id_user` varchar(4) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_user`, `tanggal`, `total_harga`, `bayar`, `kembalian`) VALUES
('20191123000001', 'A002', '2019-11-23', 1500, 2500, 1000),
('20191123000002', 'A002', '2019-11-23', 1500, 5000, 3500),
('20191123000003', 'A002', '2019-11-23', 1500, 5000, 3500),
('20191124000001', 'A002', '2019-11-24', 1500, 2500, 1000),
('20191125000001', 'A002', '2019-11-25', 1500, 0, -1500),
('20191125000002', 'A002', '2019-11-25', 1500, 0, -1500),
('20191130000001', 'A002', '2019-11-30', 1500, 4000, 2500),
('20191130000002', 'A002', '2019-11-30', 1500, 2976, 1476),
('20191130000003', 'A002', '2019-11-30', 1500, 2000, 500),
('20191203000001', 'A002', '2019-12-03', 2147483647, 2147483647, 2147483647),
('20191203000002', 'A002', '2019-12-03', 9000, 50000, 41000),
('20191205000001', 'A002', '2019-12-05', 1500, 3000, 1500),
('20191206000001', 'A002', '2019-12-06', 10000, 0, 0),
('20191210000001', 'A002', '2019-12-10', 3000, 20000, 17000),
('20191210000002', 'A002', '2019-12-10', 4500, 5000, 500),
('20191210000003', 'A002', '2019-12-10', 4500, 0, 0),
('20191210000004', 'A002', '2019-12-10', 4500, 0, 0),
('20191210000005', 'A002', '2019-12-10', 4500, 5000, 500),
('20191210000006', 'A002', '2019-12-10', 3000, 2000, -1000),
('20191210000007', 'A002', '2019-12-10', 3000, 5000, 2000),
('20191210000008', 'A002', '2019-12-10', 3000, 7000, 4000),
('20191210000009', 'A002', '2019-12-10', 3000, 3000, 0),
('20191210000010', 'A002', '2019-12-10', 3000, 3000, 0),
('20191210000011', 'A002', '2019-12-10', 1500, 2000, 500),
('20191210000012', 'A002', '2019-12-10', 11500, 12000, 500),
('20191210000013', 'A002', '2019-12-10', 11500, 12000, 500);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `nama_pabrik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `no_telepon`, `nama_pabrik`) VALUES
('Sup01', 'Alex', 'Puger', '012345678', 'Kimia Farma');

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE `tmp` (
  `id_tmp` varchar(5) CHARACTER SET latin1 NOT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`id_tmp`, `total_harga`) VALUES
('TMP01', 0),
('TMP02', 0),
('TMP03', 0),
('TMP04', 0),
('TMP05', 0),
('TMP06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(4) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `alamat` tinytext NOT NULL,
  `jabatan` enum('Owner','Apoteker','Kasir') DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `jenis_kelamin`, `alamat`, `jabatan`, `username`, `password`) VALUES
('A001', 'Achmad Syaid', 'Laki - laki', 'Tempurejo - Jember', 'Owner', 'own', '$2y$10$kOnZ0wcHXvb2DNOOD7rWHOGvX6OkY3KKdEa5xdaO4IzqOJSqDHvni'),
('A002', 'Kasir', 'Laki - laki', 'Tempurejo -Jember', 'Kasir', 'kasir', '$2y$10$kPoIO3xNPkA39BK1jpTgY.Nc2w8jP55Cr5UG.rJatWFSKp97p6Jqu'),
('A003', 'Alex', 'Laki - laki', 'Puger', 'Apoteker', 'Alex', '$2y$10$TRA3QyrIPIoDX/1U1bRGf.Qi1EWBykby4A4nrzfUoP4HthDWdjwhK');

-- --------------------------------------------------------

--
-- Structure for view `detail_pembelian_op`
--
DROP TABLE IF EXISTS `detail_pembelian_op`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_pembelian_op`  AS  select `dp`.`id_det_pembelian` AS `id_det_pembelian`,`dp`.`id_pembelian` AS `id_pembelian`,`dp`.`id_obat_praktik` AS `id_obat_praktik`,`dp`.`qty` AS `qty`,`dp`.`exp` AS `exp`,`dp`.`harga` AS `harga`,`dp`.`subtotal` AS `subtotal`,`op`.`nama_paten` AS `nama_paten`,`op`.`nama_generic` AS `nama_generic`,`op`.`nama_pabrik` AS `nama_pabrik`,`op`.`jenis` AS `jenis`,`op`.`kategori` AS `kategori` from (`detail_pembelian_obat_praktik` `dp` join `obat_praktik` `op`) where `dp`.`id_obat_praktik` = `op`.`id_obat_praktik` ;

-- --------------------------------------------------------

--
-- Structure for view `laporan`
--
DROP TABLE IF EXISTS `laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan`  AS  select `penjualan`.`id_penjualan` AS `id_penjualan`,`penjualan`.`id_user` AS `id_user`,`penjualan`.`tanggal` AS `tanggal`,`penjualan`.`total_harga` AS `total_harga`,`penjualan`.`bayar` AS `bayar`,`penjualan`.`kembalian` AS `kembalian`,`user`.`nama_user` AS `nama_user`,`user`.`jabatan` AS `jabatan` from (`penjualan` left join `user` on(`penjualan`.`id_user` = `user`.`id_user`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_kunjungan`
--
ALTER TABLE `detail_kunjungan`
  ADD PRIMARY KEY (`id_det_kunjungan`),
  ADD KEY `id_kunjungan` (`id_kunjungan`),
  ADD KEY `detail_kunjungan` (`id_obat_praktik`);

--
-- Indexes for table `detail_obat`
--
ALTER TABLE `detail_obat`
  ADD PRIMARY KEY (`id_detail_ob`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `detail_obat_praktik`
--
ALTER TABLE `detail_obat_praktik`
  ADD PRIMARY KEY (`id_detail_op`),
  ADD KEY `detail_obat_praktik` (`id_obat_praktik`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`id_det_pembelian`),
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `detail_pembelian_obat_praktik`
--
ALTER TABLE `detail_pembelian_obat_praktik`
  ADD PRIMARY KEY (`id_det_pembelian`),
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `id_obat_praktik` (`id_obat_praktik`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id_det_penjualan`),
  ADD KEY `id_penjualan` (`id_penjualan`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `detail_tmp`
--
ALTER TABLE `detail_tmp`
  ADD PRIMARY KEY (`id_detail_tmp`),
  ADD KEY `id_tmp` (`id_tmp`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `obat_praktik`
--
ALTER TABLE `obat_praktik`
  ADD PRIMARY KEY (`id_obat_praktik`);

--
-- Indexes for table `opname_obat`
--
ALTER TABLE `opname_obat`
  ADD PRIMARY KEY (`id_opname`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `opname_obat_praktik`
--
ALTER TABLE `opname_obat_praktik`
  ADD PRIMARY KEY (`id_opname`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `pembelian_obat_praktik`
--
ALTER TABLE `pembelian_obat_praktik`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_kunjungan`
--
ALTER TABLE `detail_kunjungan`
  MODIFY `id_det_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_obat`
--
ALTER TABLE `detail_obat`
  MODIFY `id_detail_ob` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_obat_praktik`
--
ALTER TABLE `detail_obat_praktik`
  MODIFY `id_detail_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `id_det_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_pembelian_obat_praktik`
--
ALTER TABLE `detail_pembelian_obat_praktik`
  MODIFY `id_det_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id_det_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `detail_tmp`
--
ALTER TABLE `detail_tmp`
  MODIFY `id_detail_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_kunjungan`
--
ALTER TABLE `detail_kunjungan`
  ADD CONSTRAINT `detail_kunjungan` FOREIGN KEY (`id_obat_praktik`) REFERENCES `obat_praktik` (`id_obat_praktik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_kunjungan_ibfk_1` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_obat`
--
ALTER TABLE `detail_obat`
  ADD CONSTRAINT `detail_obat_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_obat_praktik`
--
ALTER TABLE `detail_obat_praktik`
  ADD CONSTRAINT `detail_obat_praktik` FOREIGN KEY (`id_obat_praktik`) REFERENCES `obat_praktik` (`id_obat_praktik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pembelian_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pembelian_obat_praktik`
--
ALTER TABLE `detail_pembelian_obat_praktik`
  ADD CONSTRAINT `detail_pembelian_obat_praktik_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian_obat_praktik` (`id_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pembelian_obat_praktik_ibfk_2` FOREIGN KEY (`id_obat_praktik`) REFERENCES `obat_praktik` (`id_obat_praktik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_ibfk_2` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_penjualan_ibfk_3` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON UPDATE CASCADE;

--
-- Constraints for table `detail_tmp`
--
ALTER TABLE `detail_tmp`
  ADD CONSTRAINT `detail_tmp_ibfk_1` FOREIGN KEY (`id_tmp`) REFERENCES `tmp` (`id_tmp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_tmp_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `pasien` (`no_rm`) ON UPDATE CASCADE;

--
-- Constraints for table `opname_obat`
--
ALTER TABLE `opname_obat`
  ADD CONSTRAINT `opname_obat_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `opname_obat_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `opname_obat_praktik`
--
ALTER TABLE `opname_obat_praktik`
  ADD CONSTRAINT `opname_obat_praktik_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat_praktik` (`id_obat_praktik`) ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian_obat_praktik`
--
ALTER TABLE `pembelian_obat_praktik`
  ADD CONSTRAINT `pembelian_obat_praktik_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
