-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 08:07 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`KodeA` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12121324 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`KodeA`, `Nama`, `Keterangan`) VALUES
(1111, 'm', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`Idbuku` int(5) NOT NULL,
  `Judul_buku` varchar(30) NOT NULL,
  `Penerbit` varchar(15) NOT NULL,
  `Tahun` varchar(5) NOT NULL,
  `Jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`Idbuku`, `Judul_buku`, `Penerbit`, `Tahun`, `Jumlah`) VALUES
(1, 'Si Kancil', 'Indria Pustaka', '2011', 20);

-- --------------------------------------------------------

--
-- Table structure for table `dataguru`
--

CREATE TABLE IF NOT EXISTS `dataguru` (
  `NIG` char(16) NOT NULL,
  `Nama` varchar(32) DEFAULT NULL,
  `Jabatan` varchar(16) DEFAULT NULL,
  `Sebagai` varchar(16) DEFAULT NULL,
  `Alamat` text,
  `Tempat_Lahir` varchar(16) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `No_HP` varchar(16) DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `pass` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
`Idpinjam` int(10) NOT NULL,
  `NIM` int(12) NOT NULL,
  `Idbuku` int(12) NOT NULL,
  `Jumlahbuku` int(10) DEFAULT NULL,
  `Penerbit` varchar(25) NOT NULL,
  `Tglpinjam` date NOT NULL,
  `Tglkembali` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`Idpinjam`, `NIM`, `Idbuku`, `Jumlahbuku`, `Penerbit`, `Tglpinjam`, `Tglkembali`) VALUES
(1, 65757, 8, 6987, '2018-05-16', '2018-05-15', '2018-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE IF NOT EXISTS `pengembalian` (
`Idkembali` int(10) NOT NULL,
  `Idpinjam` int(11) NOT NULL,
  `Tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `peran_user`
--

CREATE TABLE IF NOT EXISTS `peran_user` (
  `kode_peran` varchar(20) NOT NULL,
  `nama_peran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peran_user`
--

INSERT INTO `peran_user` (`kode_peran`, `nama_peran`) VALUES
('A', 'Irul'),
('B', 'Inung'),
('C', 'Mex'),
('user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_swedish_ci DEFAULT NULL,
  `kode_peran` varchar(30) COLLATE utf8_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `kode_peran`) VALUES
('id1', '0001', 'A'),
('id2', '0002', 'B'),
('id3', '0003', 'C'),
('US', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`KodeA`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`Idbuku`);

--
-- Indexes for table `dataguru`
--
ALTER TABLE `dataguru`
 ADD PRIMARY KEY (`NIG`), ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
 ADD PRIMARY KEY (`Idpinjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
 ADD PRIMARY KEY (`Idkembali`);

--
-- Indexes for table `peran_user`
--
ALTER TABLE `peran_user`
 ADD PRIMARY KEY (`kode_peran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `KodeA` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12121324;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `Idbuku` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
MODIFY `Idpinjam` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
MODIFY `Idkembali` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
