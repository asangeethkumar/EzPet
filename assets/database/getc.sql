-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 03:21 PM
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
-- Database: `ezpet`
--

-- --------------------------------------------------------

--
-- Table structure for table `getc`
--

CREATE TABLE `getc` (
  `id` int(11) NOT NULL,
  `pet` varchar(20) NOT NULL,
  `petname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `petage` varchar(20) NOT NULL,
  `question` varchar(300) NOT NULL,
  `upload` tinyblob DEFAULT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getc`
--

INSERT INTO `getc` (`id`, `pet`, `petname`, `gender`, `petage`, `question`, `upload`, `category`) VALUES
(1, 'DOG', 'doggyy', 'Female', '10 years', 'suggestion', NULL, 'Disease'),
(2, 'DOG', 'doggyy', 'Male', '10 years', 'consult', 0x626169646d757468612d6e717a3030646d35356c656275663937326f3530326334313832776e7132707a6367343933376233366b2e706e67, 'Disease'),
(3, 'DOG', 'doggyy', 'Male', '10 years', 'suggestion', 0x3539302e706e67, 'Enquiry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `getc`
--
ALTER TABLE `getc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `getc`
--
ALTER TABLE `getc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
