-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2023 at 12:00 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maid_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `bookingdate` date NOT NULL,
  `customer_id` int(255) NOT NULL,
  `rated` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `service`, `customer_name`, `customer_phone`, `address`, `status`, `duration`, `bookingdate`, `customer_id`, `rated`) VALUES
(8, 2, 'LNDMARK BULDING', 2147483647, 'VLANJAMBALAM', 1, 'Hour', '2023-12-13', 9, '5'),
(10, 4, 'LNDMARK BULDING', 2147483647, 'VLANJAMBALAM', 1, '', '2023-12-14', 9, '4'),
(14, 6, 'test 5', 2147483647, 'VLANJAMBALAM', 1, '', '2023-12-14', 9, '4'),
(15, 3, 'LNDMARK BULDING', 2147483647, 'VLANJAMBALAM', 1, '', '2023-12-14', 9, '0'),
(16, 4, 'test 4', 2147483647, 'VLANJAMBALAM', 1, '', '2023-12-14', 9, '0');

-- --------------------------------------------------------

--
-- Table structure for table `maid`
--

CREATE TABLE IF NOT EXISTS `maid` (
  `id` int(11) NOT NULL,
  `Service` varchar(255) NOT NULL,
  `Hourlyrate` int(11) NOT NULL,
  `monthlyrate` int(11) NOT NULL,
  `Availability` tinyint(1) NOT NULL,
  `Service_Name` varchar(255) NOT NULL,
  `Company_name` varchar(255) NOT NULL,
  `Rating` int(20) NOT NULL,
  `totalrater` int(20) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maid`
--

INSERT INTO `maid` (`id`, `Service`, `Hourlyrate`, `monthlyrate`, `Availability`, `Service_Name`, `Company_name`, `Rating`, `totalrater`, `location`) VALUES
(2, 'Cleaning Service', 123, 12098, 1, 'Hellooooo', 'Hire me', 5, 1, 'Kochi'),
(3, 'Elderly Care', 123, 100000, 1, 'Old age', 'new Hire', 8, 2, ''),
(4, 'Cleaning Service', 100, 12000, 1, 'jgdjgdsfs', 'Test', 4, 1, 'Kollam'),
(5, 'Cleaning Service', 2000, 1002, 1, 'skjsga', 'test 2', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE IF NOT EXISTS `Rating` (
  `id` int(11) NOT NULL,
  `Maid` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `email`) VALUES
(1, 'pramod', '1234', 'pramod', 'gopinath.pramod@gmail.com'),
(9, 'anaz', '1234', 'anaz', 'anaz@gmail.com'),
(12, 'anu', '1234', 'pramod', 'anushava740@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maid`
--
ALTER TABLE `maid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Rating`
--
ALTER TABLE `Rating`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `maid`
--
ALTER TABLE `maid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Rating`
--
ALTER TABLE `Rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
