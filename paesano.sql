-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 04:25 PM
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
-- Database: `paesano`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'Arwen', '0e43e12703cafa17ac09e4d0899c5a21');

-- --------------------------------------------------------

--
-- Table structure for table `allen`
--

CREATE TABLE `allen` (
  `id` int(11) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkin_time` time NOT NULL,
  `name` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allen`
--

INSERT INTO `allen` (`id`, `checkin_date`, `checkin_time`, `name`, `service_type`) VALUES
(1, '2023-09-27', '23:40:00', 'secondTest', 'Shave');

-- --------------------------------------------------------

--
-- Table structure for table `arwen`
--

CREATE TABLE `arwen` (
  `id` int(11) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkin_time` time NOT NULL,
  `name` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arwen`
--

INSERT INTO `arwen` (`id`, `checkin_date`, `checkin_time`, `name`, `service_type`) VALUES
(1, '2023-09-27', '22:40:00', 'firstTest', 'Haircut');

-- --------------------------------------------------------

--
-- Table structure for table `ramil`
--

CREATE TABLE `ramil` (
  `id` int(11) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkin_time` time NOT NULL,
  `name` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ramil`
--

INSERT INTO `ramil` (`id`, `checkin_date`, `checkin_time`, `name`, `service_type`) VALUES
(1, '2023-09-27', '23:41:00', 'thirdTest', 'Hair styling'),
(2, '2023-09-27', '23:41:00', 'thirdTest', 'Hair styling');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allen`
--
ALTER TABLE `allen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arwen`
--
ALTER TABLE `arwen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ramil`
--
ALTER TABLE `ramil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allen`
--
ALTER TABLE `allen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arwen`
--
ALTER TABLE `arwen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ramil`
--
ALTER TABLE `ramil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
