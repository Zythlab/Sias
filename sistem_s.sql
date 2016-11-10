-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2015 at 02:47 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistem_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_biodata`
--

CREATE TABLE IF NOT EXISTS `m_biodata` (
  `id` int(5) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_kelas`
--

CREATE TABLE IF NOT EXISTS `m_kelas` (
  `id` int(5) NOT NULL,
  `kode` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kelas`
--

INSERT INTO `m_kelas` (`id`, `kode`) VALUES
(1, '7A'),
(2, '7B'),
(3, '8A'),
(4, '8B'),
(5, '9A'),
(6, '9B');

-- --------------------------------------------------------

--
-- Table structure for table `m_kritiksaran`
--

CREATE TABLE IF NOT EXISTS `m_kritiksaran` (
  `id` int(5) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `isi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_nilai`
--

CREATE TABLE IF NOT EXISTS `m_nilai` (
  `id` int(5) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kategori` varchar(5) NOT NULL,
  `agama` float NOT NULL,
  `pkn` float NOT NULL,
  `mat` float NOT NULL,
  `ipa` float NOT NULL,
  `ips` float NOT NULL,
  `bindo` float NOT NULL,
  `bing` float NOT NULL,
  `penjas` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_nilai`
--

INSERT INTO `m_nilai` (`id`, `nis`, `kelas`, `kategori`, `agama`, `pkn`, `mat`, `ipa`, `ips`, `bindo`, `bing`, `penjas`) VALUES
(110, '1144141', '7A', 'ul1', 0, 0, 0, 0, 0, 0, 0, 0),
(111, '1144141', '7A', 'ul2', 0, 0, 0, 0, 0, 0, 0, 0),
(112, '1144141', '7A', 'ul3', 0, 0, 0, 0, 0, 0, 0, 0),
(113, '1144141', '7A', 'ul4', 0, 0, 0, 0, 0, 0, 0, 0),
(114, '1144141', '7A', 'uts', 0, 0, 0, 0, 0, 0, 0, 0),
(115, '1144141', '7A', 'uas', 0, 0, 0, 0, 0, 0, 0, 0),
(116, '1144141', '7A', 'ul1', 0, 0, 0, 0, 0, 0, 0, 0),
(117, '1144141', '7A', 'ul2', 0, 0, 0, 0, 0, 0, 0, 0),
(118, '1144141', '7A', 'ul3', 0, 0, 0, 0, 0, 0, 0, 0),
(119, '1144141', '7A', 'ul4', 0, 0, 0, 0, 0, 0, 0, 0),
(120, '1144141', '7A', 'uts', 0, 0, 0, 0, 0, 0, 0, 0),
(121, '1144141', '7A', 'uas', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_siswa`
--

CREATE TABLE IF NOT EXISTS `m_siswa` (
  `id` int(5) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_siswa`
--

INSERT INTO `m_siswa` (`id`, `nis`, `nama`, `password`, `kelas`) VALUES
(10, '1144141', 'qeqweqwe', 'weqweqweqq', '7A');

-- --------------------------------------------------------

--
-- Table structure for table `m_super`
--

CREATE TABLE IF NOT EXISTS `m_super` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_super`
--

INSERT INTO `m_super` (`id`, `username`, `password`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_biodata`
--
ALTER TABLE `m_biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_kelas`
--
ALTER TABLE `m_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_kritiksaran`
--
ALTER TABLE `m_kritiksaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_nilai`
--
ALTER TABLE `m_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_siswa`
--
ALTER TABLE `m_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_super`
--
ALTER TABLE `m_super`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_biodata`
--
ALTER TABLE `m_biodata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_kelas`
--
ALTER TABLE `m_kelas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_kritiksaran`
--
ALTER TABLE `m_kritiksaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_nilai`
--
ALTER TABLE `m_nilai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `m_siswa`
--
ALTER TABLE `m_siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `m_super`
--
ALTER TABLE `m_super`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
