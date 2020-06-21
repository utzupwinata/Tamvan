-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 11:06 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaspraktik`
--

-- --------------------------------------------------------

--
-- Table structure for table `calonsiswa`
--

CREATE TABLE `calonsiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tempatlahir` varchar(60) NOT NULL,
  `tanggallahir` date NOT NULL,
  `warganegara` char(3) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nomorhp` varchar(12) NOT NULL,
  `asalsmp` varchar(60) NOT NULL,
  `namaayah` varchar(60) NOT NULL,
  `namaibu` varchar(60) NOT NULL,
  `penghasilanortu` int(11) NOT NULL,
  `fotosiswa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calonsiswa`
--

INSERT INTO `calonsiswa` (`id`, `nama`, `tempatlahir`, `tanggallahir`, `warganegara`, `alamat`, `email`, `nomorhp`, `asalsmp`, `namaayah`, `namaibu`, `penghasilanortu`, `fotosiswa`) VALUES
(1, 'Wawan S', 'Jember', '2005-06-16', 'WNI', 'Jambi', 'wawan@yahoo.co.id', '081319700059', 'SMPN 7 Jambi', 'Seti Awan', 'Ningsih S', 2800000, '5eec55cc68a74.jpg'),
(2, 'Wibi', 'Amsterdam', '2004-01-19', 'WNA', 'Bekasi', 'wibie@hotmail.com', '081319700061', 'Arlington JHS', 'Sasongko', 'Rozvet', 20500000, '5eec55dfc79a5.jpg'),
(3, 'Yusup Hidayat', 'Jeddah', '2004-10-26', 'WNA', 'Jakarta', 'yusup@ftumj.ac.id', '081319700067', 'Jeddah JHS', 'Atin S.', 'Wili W.', 50000000, '5eec55ea8d95c.jpg'),
(4, 'Yudho', 'Bandung', '2004-12-29', 'WNI', 'Bogor', 'yudho@yahoo.com', '081319700064', 'SMPN 71 Bogor', 'Witnu', 'Badriah', 6800000, '5eec56024d68a.jpg'),
(8, 'Regina Clara', 'Jakarta', '2020-05-05', 'WNI', 'Bogor', 'nicollereg@gmail.com', '081319700070', 'Jubilee High School', 'Ahui Oeng', 'Wijayanty', 12800000, '5eec56ab7e06f.jpg'),
(9, 'Richie', 'Soho', '2005-06-15', 'WNA', 'Jakarta', 'richie@gmail.com', '081319700068', 'Soho Junior Highscool', 'Richard', 'Amanda', 5400000, '5eec57ce4639f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('yusup', 'yusup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calonsiswa`
--
ALTER TABLE `calonsiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calonsiswa`
--
ALTER TABLE `calonsiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
