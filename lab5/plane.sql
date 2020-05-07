-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 07, 2020 at 01:42 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plane`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional`
--

CREATE TABLE `additional` (
  `id` int(11) NOT NULL,
  `aircraft_id` int(11) NOT NULL,
  `reldate` int(11) NOT NULL,
  `class` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `additional`
--

INSERT INTO `additional` (`id`, `aircraft_id`, `reldate`, `class`) VALUES
(1, 1, 2011, 'long-haul'),
(2, 2, 2016, 'long-haul'),
(3, 3, 2018, 'long-haul'),
(4, 4, 2013, 'mid');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(128) NOT NULL,
  `used` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `used`) VALUES
(1, '', 0),
(2, 'Bagdad', 0),
(3, 'Manchester', 0),
(4, 'Erevan', 0),
(5, 'Archangelsk', 0),
(6, 'Kiev', 0),
(7, 'Minsk', 0),
(8, 'Moscow', 0),
(9, 'Warsaw', 0),
(10, 'Damask', 0),
(11, 'Prague', 0),
(12, 'London', 0),
(13, 'Krakow', 0),
(14, 'Amsterdam', 0),
(15, 'NewYork', 0),
(16, 'Astana', 0),
(17, 'Adler', 0),
(18, 'Munchen', 0),
(19, 'Nurnberg', 0),
(20, 'Geneva', 0),
(23, 'Varna', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `manufactor` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `distance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `manufactor`, `name`, `distance`) VALUES
(1, 'Airbus', 'A380', 16400),
(2, 'Airbus', 'A350', 21300),
(3, 'Boeing', '777x', 18900),
(4, 'Boeing', '787', 15500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional`
--
ALTER TABLE `additional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional`
--
ALTER TABLE `additional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
