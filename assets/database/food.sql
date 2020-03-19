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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `product` varchar(10) NOT NULL,
  `range` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `first_name`, `email`, `phone`, `age`, `address`, `product`, `range`, `pet`, `brand`, `delivery`, `payment`) VALUES
(1, 'MANOJ', 'sai.vcemanu@gmail.com', '2147483647', 'kitten', 'proddatur', 'Veg', '0-500', 'DOG', 'PEDIGREE', 'delivery for one time', 'PHONE PAY'),
(2, 'MANOJ', 'sai.vcemanu@gmail.com', '2147483647', 'kitten', 'proddatur', 'Veg', '0-500', 'DOG', 'PEDIGREE', 'delivery for one time', 'PHONE PAY'),
(3, 'MANOJ', 'sai.vcemanu@gmail.com', '2147483647', 'kitten', 'proddatur', 'Non-Veg', '1000-1500', 'CAT', 'PEDIGREE', 'delivery every month', 'CREDIT/DEBIT CARD'),
(4, 'MANOJ', 'sai.vcemanu@gmail.com', '2147483647', 'adult', 'proddatur', 'Veg', '1500-2000', 'CAT', 'PEDIGREE', 'delivery for one time', 'CREDIT/DEBIT CARD'),
(5, 'ropa', 'madirajusaikumar@gmail.co', '7396004899', 'adult', 'proddatur', 'Veg', '500-1000', 'FISH', 'ROYAL CANIN', 'delivery every month', 'CREDIT/DEBIT CARD'),
(6, 'MANOJ', 'manu@gmail.com', '8106410782', 'adult', 'proddatur', 'Veg', '1500-2000', 'DOG', 'PEDIGREE', 'delivery for one time', 'PHONE PAY'),
(7, 'MANOJ', 'manu@gmail.com', '8106410782', 'adult', 'proddatur', 'Veg', '1500-2000', 'DOG', 'PEDIGREE', 'delivery for one time', 'PHONE PAY'),
(8, 'MANOJ', 'sai.vcemanu@gmail.com', '9398949451', 'adult', 'proddatur', 'Veg', '0-500', 'DOG', 'PEDIGREE', 'delivery for one time', 'PHONE PAY'),
(9, 'MANOJ', 'madirajusaikumar@gmail.co', '7894561230', 'adult', 'proddatur', 'Veg', '500-1000', 'DOG', 'PEDIGREE', 'delivery for one time', 'PHONE PAY'),
(10, 'MANOJ', 'madirajusaikumar@gmail.co', '7894561230', 'adult', 'proddatur', 'Veg', '500-1000', 'DOG', 'PEDIGREE', 'delivery for one time', 'PHONE PAY'),
(11, 'MANOJ', 'madirajusaikumar@gmail.co', '7894561230', 'adult', 'proddatur', 'Veg', '500-1000', 'DOG', 'PEDIGREE', 'delivery for one time', 'PHONE PAY'),
(12, 'saikumar', 'sai.vcemanu@gmail.com', '7093505523', 'adult', 'proddatur', 'Veg', '500-1000', 'DOG', 'PEDIGREE', 'delivery for one time', 'GOOGLE PAY'),
(13, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'adult', 'proddatur', 'Veg', '0-500', 'FISH', 'PEDIGREE', 'delivery for one time', 'PAY PAL'),
(14, 'MANOJ', 'madirajusaikumar@gmail.co', '9398949451', 'adult', 'proddatur', 'Veg', '500-1000', 'DOG', 'PEDIGREE', 'delivery every month', 'PAY PAL'),
(15, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'kitten', 'proddatur', 'Veg', '500-1000', 'DOG', 'PEDIGREE', 'delivery for one time', 'PAY PAL'),
(16, 'MANOJ', 'sai.vcemanu@gmail.com', '7093505523', 'kitten', 'proddatur', 'Veg', '1000-1500', 'FISH', 'HILLS', 'delivery for one time', 'PAY PAL'),
(17, 'MANOJ', 'sai.vcemanu@gmail.com', '7093535523', 'adult', 'proddatur', 'Veg', '0-500', 'DOG', 'PEDIGREE', 'delivery for one time', 'PAY PAL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
