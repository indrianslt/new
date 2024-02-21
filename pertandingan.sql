-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 04:02 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `id` int(11) NOT NULL,
  `id_club1` int(3) NOT NULL,
  `nama_club1` varchar(100) NOT NULL,
  `id_club2` int(3) NOT NULL,
  `nama_club2` varchar(100) NOT NULL,
  `skor1` int(3) NOT NULL,
  `skor2` int(3) NOT NULL,
  `win` varchar(100) NOT NULL,
  `lose` varchar(100) NOT NULL,
  `draw` tinyint(1) NOT NULL,
  `code` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pertandingan`
--

INSERT INTO `pertandingan` (`id`, `id_club1`, `nama_club1`, `id_club2`, `nama_club2`, `skor1`, `skor2`, `win`, `lose`, `draw`, `code`) VALUES
(1, 1, 'Andine', 2, 'Bellinda', 2, 0, 'Andine', 'Bellinda', 0, '1-2'),
(2, 1, 'Andine', 3, 'Cruella', 2, 0, 'Andine', 'Cruella', 0, '1-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_club1` (`id_club1`),
  ADD KEY `id_club2` (`id_club2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pertandingan`
--
ALTER TABLE `pertandingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD CONSTRAINT `pertandingan_ibfk_1` FOREIGN KEY (`id_club1`) REFERENCES `club` (`id_klub`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pertandingan_ibfk_2` FOREIGN KEY (`id_club2`) REFERENCES `club` (`id_klub`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
