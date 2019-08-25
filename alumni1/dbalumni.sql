-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 02:09 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
('001', 'Kerja'),
('002', 'Kuliah');

-- --------------------------------------------------------

--
-- Table structure for table `t_alumni`
--

CREATE TABLE IF NOT EXISTS `t_alumni` (
  `nis` varchar(7) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jurusanID` varchar(10) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `scan_ijazah` text NOT NULL,
  `scan_transkrip_nilai_1` text NOT NULL,
  `scan_transkrip_nilai_2` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_alumni`
--

INSERT INTO `t_alumni` (`nis`, `nama`, `jurusanID`, `alamat`, `tahun_lulus`, `no_hp`, `email`, `scan_ijazah`, `scan_transkrip_nilai_1`, `scan_transkrip_nilai_2`, `photo`) VALUES
('1154054', 'Luqman Nurfajri', '01', 'Ciwaruga', '2015', '089534332530', 'l.nurfajri@yahoo.com', '1154054_1500221236196.jpg', '1154054_1500220821007.jpg', '1154054_1500220824286.jpg', '1154054_1481298249320.jpg'),
('1154055', 'Fathan Mubin', '01', 'Parakan', '2015', '087534232114', 'fathanubin@gmail.com', '1154055_1500221236196.jpg', '1154055_1500220821007.jpg', '1154055_1500220824286.jpg', '1154055_pohon satu.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `t_jurusan`
--

CREATE TABLE IF NOT EXISTS `t_jurusan` (
  `jurusanid` varchar(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurusan`
--

INSERT INTO `t_jurusan` (`jurusanid`, `jurusan`) VALUES
('01', 'IPA'),
('02', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `t_kelulusan`
--

CREATE TABLE IF NOT EXISTS `t_kelulusan` (
  `kd_ijazah` varchar(100) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `scan_ijazah` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kelulusan`
--

INSERT INTO `t_kelulusan` (`kd_ijazah`, `no_ijazah`, `tahun_lulus`, `scan_ijazah`) VALUES
('01', '1154054', '2015', '01_1500220819150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE IF NOT EXISTS `t_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE IF NOT EXISTS `t_status` (
  `nama` varchar(100) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nama_pt` text NOT NULL,
  `alamat_pt` text NOT NULL,
  `nama_univ` text NOT NULL,
  `alamat_univ` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status`
--

INSERT INTO `t_status` (`nama`, `nis`, `status`, `nama_pt`, `alamat_pt`, `nama_univ`, `alamat_univ`) VALUES
('Luqman Nurfajri', '1154054', 'Kuliah', '-', '-', 'Politeknik Pos Indonesia', 'Kota Bandung'),
('Fathan Mubin', '1154055', 'Kerja', 'Lion Air', 'Tangerang', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `t_alumni`
--
ALTER TABLE `t_alumni`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD PRIMARY KEY (`jurusanid`);

--
-- Indexes for table `t_kelulusan`
--
ALTER TABLE `t_kelulusan`
  ADD PRIMARY KEY (`kd_ijazah`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_status`
--
ALTER TABLE `t_status`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
