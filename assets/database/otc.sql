-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 03:22 PM
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
-- Table structure for table `otc`
--

CREATE TABLE `otc` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `medicine` varchar(200) NOT NULL,
  `quantity` int(20) NOT NULL,
  `quant` varchar(20) DEFAULT NULL,
  `delivery` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otc`
--

INSERT INTO `otc` (`id`, `first_name`, `email`, `phone`, `medicine`, `quantity`, `quant`, `delivery`, `address`, `payment`) VALUES
(1, 'MANOJ', 'sai.vcemanu@gmail.com', '7093505523', 'dolo,paractimal', 1, NULL, 'delivery for one time', 'proddatur', 'GOOGLE PAY'),
(4, 'ropa', 'lakshmikadapa@gmail.com', '7396004899', 'dolo,paractimal', 1, NULL, 'delivery for one time', 'proddatur', 'PAY PAL'),
(5, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'dolo,paractimal', 1, NULL, 'delivery every month', 'proddatur', 'PAY PAL'),
(6, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'dolo,paractimal', 1, NULL, 'delivery for every two months', 'proddatur', 'PHONE PAY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otc`
--
ALTER TABLE `otc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otc`
--
ALTER TABLE `otc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
