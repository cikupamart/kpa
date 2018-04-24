-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 03:02 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggaran`
--

CREATE TABLE `tbl_anggaran` (
  `id_project` int(12) NOT NULL,
  `bulan` int(2) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `triwulan` int(1) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggaran`
--

INSERT INTO `tbl_anggaran` (`id_project`, `bulan`, `jumlah`, `triwulan`, `tahun`) VALUES
(1, 1, 10000000, 1, 2017),
(1, 2, 10000000, 1, 2017),
(1, 3, 10000000, 1, 2017),
(1, 4, 10000000, 2, 2017),
(1, 5, 10000000, 2, 2017),
(1, 6, 10000000, 2, 2017),
(1, 7, 10000000, 3, 2017),
(1, 8, 10000000, 3, 2017),
(1, 9, 10000000, 3, 2017),
(1, 10, 10000000, 4, 2017),
(1, 11, 10000000, 4, 2017),
(1, 12, 10000000, 4, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id_group` int(20) NOT NULL,
  `nama_group` varchar(20) NOT NULL,
  `nama_bidang` varchar(20) NOT NULL,
  `nik` int(30) NOT NULL,
  `id_project` int(20) NOT NULL,
  `id_penyerapan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_m_user`
--

CREATE TABLE `tbl_m_user` (
  `nik` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_m_user`
--

INSERT INTO `tbl_m_user` (`nik`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'sekertaris', '893d376739371ea724608e8d2ab96cee', 2),
(3, 'karyawan', '9e014682c94e0f2cc834bf7348bda428', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyerapan`
--

CREATE TABLE `tbl_penyerapan` (
  `id_penyerapan` int(20) NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL,
  `nik` int(30) NOT NULL,
  `id_project` int(20) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `triwulan` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `anggaran` int(20) NOT NULL,
  `saldo` int(20) NOT NULL,
  `jenis_kegiatan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `jumlah` bigint(3) NOT NULL,
  `submited` varchar(20) NOT NULL,
  `tanggal_submit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id_project` int(11) NOT NULL,
  `nama_project` varchar(30) NOT NULL,
  `jenis_anggaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `nama_project`, `jenis_anggaran`) VALUES
(1, 'Uwarnet', 'inkubasi'),
(2, 'makan', '7000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggaran`
--
ALTER TABLE `tbl_anggaran`
  ADD KEY `id_project` (`id_project`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id_group`),
  ADD KEY `id_project` (`id_project`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_penyerapan` (`id_penyerapan`);

--
-- Indexes for table `tbl_m_user`
--
ALTER TABLE `tbl_m_user`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_penyerapan`
--
ALTER TABLE `tbl_penyerapan`
  ADD PRIMARY KEY (`id_penyerapan`),
  ADD KEY `id_project` (`id_project`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_m_user`
--
ALTER TABLE `tbl_m_user`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2738;
--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_anggaran`
--
ALTER TABLE `tbl_anggaran`
  ADD CONSTRAINT `tbl_anggaran_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `tbl_project` (`id_project`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
