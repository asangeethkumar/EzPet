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
-- Table structure for table `rx`
--

CREATE TABLE `rx` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `quant` varchar(20) NOT NULL,
  `delivery` varchar(200) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `upload` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rx`
--

INSERT INTO `rx` (`id`, `first_name`, `email`, `phone`, `quantity`, `quant`, `delivery`, `payment`, `upload`) VALUES
(1, 'MANOJ', 'sai.vcemanu@gmail.com', '2147483647', '2', '15 ml', 'delivery every month', 'CREDIT/DEBIT CARD', '590.png'),
(2, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', '1', '15 ml', 'delivery for one time', 'CREDIT/DEBIT CARD', 'baidmutha-nqz00dm55lebuf972o502c4182wnq2'),
(3, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', '2', '15 ml', 'delivery for one time', 'PAY PAL', 'baidmutha-nqz00dm55lebuf972o502c4182wnq2'),
(4, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', '1', '20 ml', 'delivery for one time', 'PAY PAL', '590.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rx`
--
ALTER TABLE `rx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rx`
--
ALTER TABLE `rx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
