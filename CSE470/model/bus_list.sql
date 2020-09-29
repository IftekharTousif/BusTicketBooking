-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 05:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL,
  `cost` int(11) NOT NULL,
  `departing_time` varchar(50) NOT NULL,
  `arrival_time` varchar(50) NOT NULL,
  `seat_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `location`, `type`, `date`, `cost`, `departing_time`, `arrival_time`, `seat_available`) VALUES
(1, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-10-01', 1400, '10:30 PM', '04:45 AM', 29),
(2, 'Saintmartin Paribahan', 'Bandarban', 'AC', '2020-09-30', 950, '10:45 PM', '07:15 AM', 33),
(3, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-10-01', 620, '08:15 AM', '06:44 PM', 38),
(4, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-30', 620, '09:45 PM', '06:15 AM', 33),
(5, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-10-01', 620, '10:01 PM', '05:30 AM', 38),
(6, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-30', 620, '10:15 PM', '04:45 AM', 33);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `bus` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL,
  `cost` int(11) NOT NULL,
  `departing_time` varchar(50) NOT NULL,
  `arrival_time` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `number`, `bus`, `location`, `type`, `date`, `cost`, `departing_time`, `arrival_time`, `payment`) VALUES
(1, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-12', 620, '09:45 PM', '06:15 AM', 'Bkash'),
(2, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '10:01 PM', '05:30 AM', 'Bkash'),
(3, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '08:15 AM', '06:44 PM', 'Bkash'),
(4, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '10:01 PM', '05:30 AM', 'Bkash'),
(5, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '10:01 PM', '05:30 AM', 'Bkash'),
(6, 'abla', 1234567, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-09-12', 1400, '10:30 PM', '04:45 AM', 'Bkash'),
(7, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-09-12', 1400, '10:30 PM', '04:45 AM', 'Rocket'),
(8, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '10:01 PM', '05:30 AM', 'Nagad'),
(9, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '08:15 AM', '06:44 PM', 'Bkash'),
(10, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '10:01 PM', '05:30 AM', 'Bkash'),
(11, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '10:01 PM', '05:30 AM', 'Nagad'),
(12, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '08:15 AM', '06:44 PM', 'Bkash'),
(13, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-10-01', 620, '10:01 PM', '05:30 AM', 'Nagad'),
(14, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-30', 620, '09:45 PM', '06:15 AM', 'Rocket'),
(15, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-30', 620, '10:15 PM', '04:45 AM', 'Nagad'),
(16, 'tamak', 1224365987, 'Saintmartin Paribahan', 'Bandarban', 'AC', '2020-09-30', 950, '10:45 PM', '07:15 AM', 'Bkash'),
(17, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-10-01', 1400, '10:30 PM', '04:45 AM', 'Bkash'),
(18, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-10-01', 1400, '10:30 PM', '04:45 AM', 'Bkash');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `number`, `pwd`) VALUES
(1, 'omuk', 1111111111, 'tomuk'),
(2, 'abla', 1234567, 'baabla'),
(3, 'abra', 1672539882, 'kadabra'),
(6, 'agdum', 1883456972, 'bagdum'),
(7, 'abol', 1765412289, 'tabol'),
(8, 'ashik', 1345789632, 'chowdhury'),
(9, 'tamak', 1224365987, 'pata'),
(10, 'tousif', 1733987704, 'aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
