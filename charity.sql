-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 08:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `sno` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `reg_no` varchar(500) NOT NULL,
  `age` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `surgery` varchar(255) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `eyes` int(11) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`sno`, `name`, `reg_no`, `age`, `service`, `surgery`, `venue`, `city`, `state`, `country`, `gender`, `doctor_name`, `eyes`, `notes`, `image`) VALUES
(1, 'nimeet gadura', '1234abcd', 15, 'good', 'laser', '302/1 pur', 'bhilwara', 'rajasthan', 'india', 'male', 'chiranjeev', 12, 'bakwaas', 'sdr'),
(2, 'chiranjeev vishnoi', '900102567', 18, 'good', 'laser', 'pur', 'BHILWARA', 'RAJASTHAN', 'India', 'male', 'iyer', 9, '', ''),
(4, 'chiranjeev vishnoi', 't8', 18, 'good', 'laser', 'pur', 'BHILWARA', 'RAJASTHAN', 'India', 'male', 'y', 78, '87', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charity`
--
ALTER TABLE `charity`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
