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
-- Table structure for table `treat`
--

CREATE TABLE `treat` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `choose` varchar(200) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treat`
--

INSERT INTO `treat` (`id`, `first_name`, `email`, `phone`, `pet`, `age`, `choose`, `quantity`, `delivery`, `address`, `payment`) VALUES
(1, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'DOG', 'kitten', 'Veg', '2', 'delivery every month', 'proddatur', 'PHONE PAY'),
(2, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'FISH', 'adult', 'Veg', '2', 'delivery for one time', 'proddatur', 'PAY PAL'),
(3, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'DOG', 'kitten', 'Veg', '1', 'delivery for one time', 'proddatur', 'PHONE PAY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `treat`
--
ALTER TABLE `treat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `treat`
--
ALTER TABLE `treat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
