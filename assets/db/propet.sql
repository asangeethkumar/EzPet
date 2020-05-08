-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 09:42 AM
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
-- Table structure for table `propet`
--

CREATE TABLE `propet` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `date` date NOT NULL,
  `Membershipid` varchar(255) NOT NULL,
  `PIJAC` enum('yes','no') NOT NULL,
  `PIJACuser` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propet`
--

INSERT INTO `propet` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `date`, `Membershipid`, `PIJAC`, `PIJACuser`, `address`, `email`, `phone`) VALUES
(1, 'abcd', 'asdf', 'asdf', 'Male', '0000-00-00', '', '', '', 'asfm;;lfm;mf;', 'john@gmail.com', '7894561230'),
(2, 'abcd', 'asdf', 'asdf', 'Male', '0000-00-00', '', '', '', 'asfm', 'john@gmail.com', '7894561230'),
(3, 'abcd', 'asdf', 'asdf', 'Male', '2020-05-06', '12345', 'yes', 'asdfg', 'asfm', 'john@gmail.com', '7894561230');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `propet`
--
ALTER TABLE `propet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `propet`
--
ALTER TABLE `propet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
