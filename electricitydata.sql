-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2023 at 11:14 PM
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
-- Table structure for table `electricitydata`
--

CREATE TABLE `electricitydata` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `kWh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electricitydata`
--

INSERT INTO `electricitydata` (`id`, `date`, `kWh`) VALUES
(1, '2022-11-03', 401),
(2, '2022-11-04', 433),
(3, '2022-11-05', 53),
(4, '2022-11-06', 114),
(5, '2022-11-07', 557),
(6, '2022-11-08', 535),
(7, '2022-11-09', 654),
(8, '2022-11-10', 538),
(9, '2022-11-11', 688),
(10, '2022-11-12', 182),
(11, '2022-11-13', 105),
(12, '2022-11-14', 497),
(13, '2022-11-15', 577),
(14, '2022-11-16', 555),
(15, '2022-11-17', 616),
(16, '2022-11-18', 675),
(17, '2022-11-19', 129),
(18, '2022-11-20', 137),
(19, '2022-11-21', 378),
(20, '2022-11-22', 628),
(21, '2022-11-23', 486),
(22, '2022-11-24', 637),
(23, '2022-11-25', 389),
(24, '2022-11-26', 93),
(25, '2022-11-27', 188),
(26, '2022-11-28', 269),
(27, '2022-11-29', 546),
(28, '2022-11-30', 577),
(29, '2022-12-01', 497),
(30, '2022-12-02', 360),
(31, '2022-12-03', 119),
(32, '2022-12-04', 45),
(33, '2022-12-05', 283),
(34, '2022-12-06', 354),
(35, '2022-12-07', 424),
(36, '2022-12-08', 362),
(37, '2022-12-09', 355),
(38, '2022-12-10', 175),
(39, '2022-12-11', 148),
(40, '2022-12-12', 113),
(41, '2022-12-13', 133),
(42, '2022-12-14', 238),
(43, '2022-12-15', 229),
(44, '2022-12-16', 215),
(45, '2022-12-17', 90),
(46, '2022-12-18', 67),
(47, '2022-12-19', 10),
(48, '2022-12-20', 139),
(49, '2022-12-21', 44),
(50, '2022-12-22', 65),
(51, '2022-12-23', 28),
(52, '2022-12-24', 75),
(53, '2022-12-25', 15),
(54, '2022-12-26', 44),
(55, '2022-12-27', 0),
(56, '2022-12-28', 66),
(57, '2022-12-29', 21),
(58, '2022-12-30', 17),
(59, '2022-12-31', 30),
(60, '2023-01-01', 53),
(61, '2023-01-02', 59),
(62, '2023-01-03', 51),
(63, '2023-01-04', 118),
(64, '2023-01-05', 190),
(65, '2023-01-06', 239),
(66, '2023-01-07', 288),
(67, '2023-01-08', 120),
(68, '2023-01-09', 58),
(69, '2023-01-10', 235),
(70, '2023-01-11', 194),
(71, '2023-01-12', 164),
(72, '2023-01-13', 63),
(73, '2023-01-14', 67),
(74, '2023-01-15', 95),
(75, '2023-01-16', 45),
(76, '2023-01-17', 46),
(77, '2023-01-18', 67),
(78, '2023-01-19', 71),
(79, '2023-01-20', 72),
(80, '2023-01-21', 90),
(81, '2023-01-22', 233),
(82, '2023-01-23', 213),
(83, '2023-01-24', 352),
(84, '2023-01-25', 226),
(85, '2023-01-26', 188),
(86, '2023-01-27', 303),
(87, '2023-01-28', 245),
(88, '2023-01-29', 234),
(89, '2023-01-30', 184),
(90, '2023-01-31', 275),
(91, '2023-02-01', 530),
(92, '2023-02-02', 640),
(93, '2023-02-03', 692),
(94, '2023-02-04', 145),
(95, '2023-02-05', 181),
(96, '2023-02-06', 306),
(97, '2023-02-07', 627),
(98, '2023-02-08', 629),
(99, '2023-02-09', 637),
(100, '2023-02-10', 601),
(101, '2023-02-11', 124),
(102, '2023-02-12', 227),
(103, '2023-02-13', 683),
(104, '2023-02-14', 260),
(105, '2023-02-15', 762),
(106, '2023-02-16', 704),
(107, '2023-02-17', 569),
(108, '2023-02-18', 57),
(109, '2023-02-19', 88),
(110, '2023-02-20', 714),
(111, '2023-02-21', 708),
(112, '2023-02-22', 769),
(113, '2023-02-23', 756),
(114, '2023-02-24', 612),
(115, '2023-02-25', 83),
(116, '2023-02-26', 130),
(117, '2023-02-27', 828),
(118, '2023-02-28', 773),
(119, '2023-03-01', 667),
(120, '2023-03-02', 428),
(121, '2023-03-03', 671),
(122, '2023-03-04', 86),
(123, '2023-03-05', 123),
(124, '2023-03-06', 757),
(125, '2023-03-07', 745),
(126, '2023-03-08', 439),
(127, '2023-03-09', 691),
(128, '2023-03-10', 758),
(129, '2023-03-11', 137),
(130, '2023-03-12', 131),
(131, '2023-03-13', 691),
(132, '2023-03-14', 661),
(133, '2023-03-15', 667),
(134, '2023-03-16', 239),
(135, '2023-03-17', 713),
(136, '2023-03-18', 163),
(137, '2023-03-19', 202),
(138, '2023-03-20', 711),
(139, '2023-03-21', 745),
(140, '2023-03-22', 652),
(141, '2023-03-23', 720),
(142, '2023-03-24', 650),
(143, '2023-03-25', 142),
(144, '2023-03-26', 161),
(145, '2023-03-27', 709),
(146, '2023-03-28', 704),
(147, '2023-03-29', 257),
(148, '2023-03-30', 727),
(149, '2023-03-31', 951),
(150, '2023-04-01', 176),
(151, '2023-04-02', 156),
(152, '2023-04-03', 676),
(153, '2023-04-04', 807),
(154, '2023-04-05', 837),
(155, '2023-04-06', 995),
(156, '2023-04-07', 150),
(157, '2023-04-08', 142),
(158, '2023-04-09', 83),
(159, '2023-04-10', 149),
(160, '2023-04-11', 154),
(161, '2023-04-12', 133),
(162, '2023-04-13', 141),
(163, '2023-04-14', 209),
(164, '2023-04-15', 145),
(165, '2023-04-16', 127),
(166, '2023-04-17', 149),
(167, '2023-04-18', 169),
(168, '2023-04-19', 176),
(169, '2023-04-20', 136),
(170, '2023-04-21', 197),
(171, '2023-04-22', 203),
(172, '2023-04-23', 150),
(173, '2023-04-24', 409),
(174, '2023-04-25', 164),
(175, '2023-04-26', 857),
(176, '2023-04-27', 912),
(177, '2023-04-28', 1055),
(178, '2023-04-29', 209),
(179, '2023-04-30', 251),
(180, '2023-05-01', 569);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electricitydata`
--
ALTER TABLE `electricitydata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `electricitydata`
--
ALTER TABLE `electricitydata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
