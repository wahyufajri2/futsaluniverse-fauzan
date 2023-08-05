-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 05:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(4) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `wa` varchar(14) DEFAULT NULL,
  `tim` varchar(20) DEFAULT NULL,
  `lapangan` varchar(20) DEFAULT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `durasi` varchar(20) DEFAULT NULL,
  `mulai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `wa`, `tim`, `lapangan`, `hari`, `durasi`, `mulai`) VALUES
(37, 'uygyu', '12345678', '87g8', 'Lapangan 1', 'Senin', '1', '13:00'),
(38, 'hgcyt', '12345678', 'uyg', 'Lapangan 1', 'Senin', '1', '14:00'),
(39, 'ewasrdtfygu', '123456789', 'werdtyb', 'Lapangan 1', 'Selasa', '1', '14:00'),
(40, 'waertyvbhj', '12345678', 'erty', 'Lapangan 1', 'Senin', '1', '14:00'),
(41, 'suhem', '083827004158', 'SUHEM FC', 'Lapangan 1', 'Senin', '1', '13:00'),
(42, 'sss', '223211', 'se', 'Lapangan 1', 'Selasa', '2', '13:00');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id` int(3) NOT NULL,
  `nama` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id`, `nama`) VALUES
(10, 'ghjfy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(36) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'rizki', '$2y$10$gOwKV2wLtNgnPpkWOTyqpeq4QUOXli/oZeVLKhWTSyjYJI5GIh62W'),
(2, 'admin', '$2y$10$f7lAW4T71H2hQFqiQcfa9.YeiD7R1QEpUrvM0s4aAcqfQmndL0dbG'),
(3, 'oke', '$2y$10$sMMc5zcYOPCrtgTAjvm2e.SwoQP7xoSVnoekoU8jpNcEhC7vBbkpG'),
(4, 'halo', '$2y$10$ixMP3iHfw2TVpkQYvwu6B.fLvC/N6pqyjGM4v73rx7Q0lsDHawMvS'),
(5, 'fauzan', '$2y$10$YIGozOOyk1LlVjEpoF5kiu/nzR52GwRkzyBuOY195BxY4utvuWO3i'),
(6, 'admin1', '$2y$10$M60BZXFldky9BhJ807GMiO1pc7Ncy22utIDuFWjcVFCjxzitW3TVq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
