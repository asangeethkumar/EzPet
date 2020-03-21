-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 03:20 PM
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
-- Table structure for table `dconsult`
--

CREATE TABLE `dconsult` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `slot` time NOT NULL,
  `confirm` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pet` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dconsult`
--

INSERT INTO `dconsult` (`id`, `date`, `slot`, `confirm`, `email`, `phone`, `pet`, `gender`, `question`, `location`, `payment`) VALUES
(1, '2020-03-18', '08:00:00', 'confirm', 'madirajusaikumar@gmail.com', '7093505523', 'DOG', 'Male', 'consult', 'proddatur', 'CREDIT/DEBIT CARD'),
(2, '2020-03-20', '08:00:00', 'confirm', 'sai.vcemanu@gmail.com', '7093535523', 'DOG', 'Female', 'consult', 'proddatur', 'CREDIT/DEBIT CARD'),
(3, '2020-03-20', '05:00:00', 'confirm', 'sai.vcemanu@gmail.com', '7093535523', 'CAT', 'Male', 'consult', 'proddatur', 'CREDIT/DEBIT CARD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dconsult`
--
ALTER TABLE `dconsult`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dconsult`
--
ALTER TABLE `dconsult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
