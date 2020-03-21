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
-- Table structure for table `dental`
--

CREATE TABLE `dental` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pet` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `choose` varchar(50) NOT NULL,
  `quantity` varchar(300) NOT NULL,
  `delivery` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `payment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dental`
--

INSERT INTO `dental` (`id`, `first_name`, `email`, `phone`, `pet`, `gender`, `choose`, `quantity`, `delivery`, `address`, `payment`) VALUES
(1, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'DOG', 'Female', 'DENTAL CHEWS', '1', 'delivery for one time', 'proddatur', 'PHONE PAY'),
(2, 'MANOJ', 'sai.vcemanu@gmail.com', '7894561230', 'DOG', 'Female', 'DENTAL CHEWS', '1', 'delivery every month', 'proddatur', 'PHONE PAY'),
(3, 'MANOJ', 'sai.vcemanu@gmail.com', '7093505523', 'CAT', 'Female', 'DENTAL CHEWS', '2', 'delivery for one time', 'proddatur', 'PHONE PAY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dental`
--
ALTER TABLE `dental`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dental`
--
ALTER TABLE `dental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
