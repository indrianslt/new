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
-- Table structure for table `klasemen`
--

CREATE TABLE `klasemen` (
  `id` int(3) NOT NULL,
  `nama_klub` varchar(100) DEFAULT NULL,
  `main` int(3) DEFAULT NULL,
  `menang` int(3) DEFAULT NULL,
  `seri` int(3) DEFAULT NULL,
  `kalah` int(3) DEFAULT NULL,
  `gol_menang` int(3) DEFAULT NULL,
  `gol_kalah` int(3) DEFAULT NULL,
  `point` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `klasemen`
--

INSERT INTO `klasemen` (`id`, `nama_klub`, `main`, `menang`, `seri`, `kalah`, `gol_menang`, `gol_kalah`, `point`) VALUES
(1, 'Andine', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Bellinda', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Cruella', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klasemen`
--
ALTER TABLE `klasemen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasemen`
--
ALTER TABLE `klasemen`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
