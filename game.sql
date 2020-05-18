-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 06:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_fame`
--

CREATE TABLE `hall_of_fame` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_of_fame`
--

INSERT INTO `hall_of_fame` (`id`, `nama`, `skor`) VALUES
(1, 'bintang', -10),
(2, 'bintang', -10),
(3, 'bintang', 0),
(4, 'timur', 30),
(5, 'timur', 10),
(6, 'timur', 10),
(7, 'kusmanto', 60),
(8, 'kusmanto', 30),
(9, 'kusmanto', 10),
(10, 'tes', -10),
(11, 'test', 20),
(12, 'timur', -10),
(13, 'timur', 30),
(14, 'timur', -10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hall_of_fame`
--
ALTER TABLE `hall_of_fame`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hall_of_fame`
--
ALTER TABLE `hall_of_fame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
