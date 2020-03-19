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
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `slot` time NOT NULL,
  `confirm` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pet` varchar(10) NOT NULL,
  `petname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `concern` varchar(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `payment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date`, `slot`, `confirm`, `first_name`, `email`, `phone`, `pet`, `petname`, `gender`, `concern`, `question`, `payment`) VALUES
(1, '2020-03-19', '08:00:00', 'confirm', 'shyam', 'sai.vcemanu@gmail.co', '7894561230', 'DOG', 'doggyy', 'Male', 'ENQUIRY', 'proddatur', 'CREDIT/DEBIT CARD'),
(2, '2020-03-19', '08:00:00', 'confirm', 'shyam', 'sai.vcemanu@gmail.co', '9398949451', 'DOG', 'doggyy', 'Male', 'DAILY VISIT', 'suggestion', 'NET BANKING'),
(3, '2020-03-20', '01:00:00', 'confirm', 'shyam', 'madirajusaikumar@gma', '7093535523', 'CAT', 'ff', 'Male', 'DAILY VISIT', 'proddatur', 'CREDIT/DEBIT CARD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
