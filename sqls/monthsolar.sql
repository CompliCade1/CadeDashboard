-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2023 at 04:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tridentpowerusage`
--

-- --------------------------------------------------------

--
-- Table structure for table `monthlysolar`
--

CREATE TABLE `monthlysolar` (
  `id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `kWh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monthlysolar`
--

INSERT INTO `monthlysolar` (`id`, `date`, `kWh`) VALUES
(1, 'Jan 21', 1566),
(2, 'Feb 21', 1216),
(3, 'Mar 21', 1078),
(4, 'Apr 21', 769),
(5, 'May 21', 581),
(6, 'June 21', 395),
(7, 'July 21', 526),
(8, 'Aug 21', 688),
(9, 'Sep 21', 383),
(10, 'Oct 21', 724),
(11, 'Nov 21', 1432),
(12, 'Dec 21', 1524);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monthlysolar`
--
ALTER TABLE `monthlysolar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monthlysolar`
--
ALTER TABLE `monthlysolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
