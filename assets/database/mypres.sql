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
-- Table structure for table `mypres`
--

CREATE TABLE `mypres` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pet` varchar(20) NOT NULL,
  `petname` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `problem` varchar(300) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `e` varchar(200) NOT NULL,
  `f` varchar(200) NOT NULL,
  `g` varchar(200) NOT NULL,
  `h` varchar(200) NOT NULL,
  `i` varchar(200) NOT NULL,
  `j` varchar(200) NOT NULL,
  `k` varchar(200) NOT NULL,
  `l` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mypres`
--

INSERT INTO `mypres` (`id`, `first_name`, `email`, `phone`, `pet`, `petname`, `age`, `problem`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`) VALUES
(1, 'MANOJ', 'manojmadiraju@gmail.', '8106410782', 'FISH', 'doggyy', 'kitten', 'headache', 'qw', 'before', 'after', 'before', 'we', 'before', 'after', 'before', 're', 'after', 'after', 'after'),
(2, 'sai', 'manojmadiraju@gmail.', '7093535523', 'DOG', 'doggyy', 'adult', 'headache', 'rice', '10gm', '12gm', '5gm', 'milk', '500ml', '500ml', '500ml', 'biscuits', '10', '10', '10'),
(3, 'sai', 'sai.vcemanu@gmail.co', '7093535523', 'DOG', 'doggyy', 'adult', 'headache', 'rice', '10gm', '12gm', '5gm', 'milk', '500ml', '500ml', '500ml', 'biscuits', '10', 'after', 'after');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mypres`
--
ALTER TABLE `mypres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mypres`
--
ALTER TABLE `mypres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
