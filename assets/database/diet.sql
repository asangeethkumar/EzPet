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
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `petname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `e` varchar(100) NOT NULL,
  `f` varchar(100) NOT NULL,
  `g` varchar(100) NOT NULL,
  `h` varchar(100) NOT NULL,
  `i` varchar(100) NOT NULL,
  `j` varchar(100) NOT NULL,
  `k` varchar(100) NOT NULL,
  `l` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`id`, `first_name`, `email`, `phone`, `pet`, `petname`, `gender`, `problem`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`) VALUES
(1, 'MANOJ', 'pavan@gmail.com', '7093535523', 'DOG', 'doggyy', 'Female', 'headache', 'rice', '10gm', '12gm', '5gm', 'milk', '500ml', '500ml', '500ml', 'biscuits', '10', '10', '10'),
(2, 'MANOJ', 'pavan@gmail.com', '7093535523', 'DOG', 'doggyy', 'Female', 'headache', 'rice', '10gm', '12gm', '5gm', 'milk', '500ml', '500ml', '500ml', 'biscuits', '10', '10', '10'),
(3, 'sai', 'sai.vcemanu@gmail.com', '7093535523', 'DOG', 'doggyy', 'Female', 'headache', 'rice', '10gm', '12gm', '5gm', 'milk', 'before', '500ml', '500ml', 'biscuits', 'after', 'after', '10'),
(4, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'DOG', 'doggyy', 'Male', 'headache', 'rice', '10gm', '12gm', '5gm', 'milk', '500ml', '500ml', '500ml', 'biscuits', '10', '10', 'after');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diet`
--
ALTER TABLE `diet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
