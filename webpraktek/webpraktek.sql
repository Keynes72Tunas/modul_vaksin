-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 01:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpraktek`
--

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Nomor_hp` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Jenis_kelamin` enum('L','P') NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `id_vaksin` int(50) NOT NULL,
  `id_puskesmas` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK`, `Nama`, `Nomor_hp`, `Email`, `Jenis_kelamin`, `Tanggal_lahir`, `id_vaksin`, `id_puskesmas`) VALUES
(12314134, 'rehan', '08134614567', 'rehan@gmail.com', 'L', '2023-04-10', 5, 3),
(123152631, 'Keynes', '081350722994', 'keynes@gmail.com', 'L', '2023-03-21', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_puskesmas` int(50) NOT NULL,
  `nama_puskes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`id_puskesmas`, `nama_puskes`) VALUES
(1, 'Puskesmas Likupang '),
(2, 'Puskesmas Likupang Timur'),
(3, 'Puskesmas Batu Minut'),
(4, 'Puskesmas Mubune'),
(7, 'puskes sarawet');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usernama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `usernama`, `password`) VALUES
(1, 'key', 'keynes', '123'),
(2, 'Yoimiya', 'Yoimiya', '123'),
(3, 'childe', 'childe', '123');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `id_vaksin` int(50) NOT NULL,
  `jenis_vaksin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `jenis_vaksin`) VALUES
(1, 'Sinovac'),
(2, 'Pfizer'),
(3, 'Biofarma'),
(4, 'Moderna'),
(5, 'AstraZeneca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `id_vaksin` (`id_vaksin`),
  ADD KEY `id_puskesmas` (`id_puskesmas`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id_puskesmas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id_vaksin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`id_vaksin`) REFERENCES `vaksin` (`id_vaksin`),
  ADD CONSTRAINT `penduduk_ibfk_2` FOREIGN KEY (`id_puskesmas`) REFERENCES `puskesmas` (`id_puskesmas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
