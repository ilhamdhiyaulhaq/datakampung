-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2021 at 03:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datakampung`
--

-- --------------------------------------------------------

--
-- Table structure for table `kas_warga`
--

CREATE TABLE `kas_warga` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` int(11) NOT NULL,
  `keluar` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kas_warga`
--

INSERT INTO `kas_warga` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`) VALUES
(49, '2021-02-05', 'Kas Warga', 9000000, 0),
(50, '2021-02-06', 'Pembelian semen', 0, 750000),
(51, '2021-02-02', 'Bantuan', 700000, 0),
(52, '2021-01-06', 'Pemasukan', 5000000, 0),
(53, '2021-01-21', 'tes', 0, 400000);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(5) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama_user`, `username`, `password`, `level`) VALUES
(53, 'Ilham Dhiya Ulhaq', 'ilham01', 'ilham01', 'Developer'),
(140, 'undin', 'udin', 'udin01', 'Publik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id` int(2) NOT NULL,
  `tgl_kegiatan` varchar(10) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_agenda`
--

INSERT INTO `tb_agenda` (`id`, `tgl_kegiatan`, `nama_kegiatan`, `keterangan`) VALUES
(9, '2021-02-05', 'test', 'test'),
(10, '2021-02-19', 'Senam bersama', 'jbkasjbas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rtrw`
--

CREATE TABLE `tb_rtrw` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `periode_jabatan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_warga`
--

CREATE TABLE `tb_warga` (
  `id` int(10) NOT NULL,
  `nama_warga` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `rt` char(10) NOT NULL,
  `nik` char(16) NOT NULL,
  `nkk` char(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_warga`
--

INSERT INTO `tb_warga` (`id`, `nama_warga`, `tempat`, `ttl`, `jenis_kelamin`, `rt`, `nik`, `nkk`) VALUES
(72, 'Salman', 'Surabaya', '1992-02-06', 'Laki-laki', '04', '3374131705980005', '987654321'),
(74, 'Badrun', 'Surabaya', '1994-01-12', 'Laki-laki', '04', '3374131705980005', '987654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kas_warga`
--
ALTER TABLE `kas_warga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rtrw`
--
ALTER TABLE `tb_rtrw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kas_warga`
--
ALTER TABLE `kas_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_rtrw`
--
ALTER TABLE `tb_rtrw`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_warga`
--
ALTER TABLE `tb_warga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
