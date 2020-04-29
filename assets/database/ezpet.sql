-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 07:59 PM
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
--



-- --------------------------------------------------------

--
-- Table structure for table `dogplayground`
--

CREATE TABLE `dogplayground` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pet_age` varchar(15) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dogplayground`
--

INSERT INTO `dogplayground` (`id`, `first_name`, `phone`, `email`, `pet_age`, `pet_name`, `pet_breed`, `area`) VALUES
(1, 'john', '9974563210', 'john@gmail.com', '9', 'scooby', 'dol', 'star');

-- --------------------------------------------------------

--
-- Table structure for table `dogwalker`
--

CREATE TABLE `dogwalker` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ephone` varchar(15) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `pet_age` varchar(15) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dogwalker`
--

INSERT INTO `dogwalker` (`id`, `first_name`, `phone`, `email`, `ephone`, `pet_name`, `pet_breed`, `pet_age`, `color`) VALUES
(1, 'dynamo', '9947856456', 'dyno@gmail.com', '9986457852', 'tom', 'cat', '9', 'brown');

-- --------------------------------------------------------

--
-- Table structure for table `funeral`
--

CREATE TABLE `funeral` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `birth` date NOT NULL DEFAULT current_timestamp(),
  `death` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funeral`
--

INSERT INTO `funeral` (`id`, `first_name`, `phone`, `email`, `pet_name`, `pet_breed`, `birth`, `death`) VALUES
(1, 'josh', '9874561232', 'john@gmail.com', 'asf', 'saf', '2017-01-04', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `globalpet`
--

CREATE TABLE `globalpet` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ephone` varchar(15) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `globalpet`
--

INSERT INTO `globalpet` (`id`, `first_name`, `phone`, `email`, `ephone`, `pet_name`, `pet_breed`, `passport`, `location`, `dest`) VALUES
(1, 'john', '9874563210', 'john@gmail.com', '', 'scooby', 'dol', '321456987', 'uk', 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `petbedding`
--

CREATE TABLE `petbedding` (
  `id` int(10) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `bed_size` varchar(15) NOT NULL,
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petclub`
--

CREATE TABLE `petclub` (
  `id` int(10) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `food` varchar(50) NOT NULL,
  `pet_food_quantity` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petclub`
--

INSERT INTO `petclub` (`id`, `pet_name`, `pet_breed`, `food`, `pet_food_quantity`, `gender`) VALUES
(1, 'scooby', 'dol', 'drols', '2kg', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `petfashion`
--

CREATE TABLE `petfashion` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `pet_size` int(15) NOT NULL,
  `costume_type` varchar(50) NOT NULL,
  `costume_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pethostel`
--

CREATE TABLE `pethostel` (
  `id` int(11) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date_j` date NOT NULL DEFAULT current_timestamp(),
  `date_l` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pethostel`
--

INSERT INTO `pethostel` (`id`, `pet_name`, `pet_breed`, `gender`, `first_name`, `email`, `phone`, `date_j`, `date_l`) VALUES
(1, 'scooby', 'dol', 'Male', 'john', 'john@gmail.com', '9874563210', '2020-01-01', '2020-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `petsitter`
--

CREATE TABLE `petsitter` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ephone` varchar(15) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `alarm_de_code` varchar(15) NOT NULL,
  `alarm_ac_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petsitter`
--

INSERT INTO `petsitter` (`id`, `first_name`, `phone`, `email`, `ephone`, `pet_name`, `pet_breed`, `address`, `alarm_de_code`, `alarm_ac_code`) VALUES
(1, 'skak', '9845678956', 'sifglash', '8234665658', 'kjbkjf', 'kjabdkj', 'kjqbsfkb				', 'kbkqbfk', 'qkjbvk'),
(2, 'kishor', '9989381745', 'kishor123@gmail.com', '9848022338', 'scooby', 'dol', 'ark		', '12136456', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `pettaxi`
--

CREATE TABLE `pettaxi` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ephone` varchar(15) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `paddress` varchar(50) NOT NULL,
  `daddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pettaxi`
--

INSERT INTO `pettaxi` (`id`, `first_name`, `phone`, `email`, `ephone`, `pet_name`, `paddress`, `daddress`) VALUES
(1, 'john', '9874563210', 'john@gmail.com', '9123456789', 'asdf', 'uk', 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `pet_day_care`
--

CREATE TABLE `pet_day_care` (
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ephone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `pet_food_type` varchar(50) NOT NULL,
  `pet_food_quantity` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_day_care`
--

INSERT INTO `pet_day_care` (`first_name`, `phone`, `email`, `ephone`, `address`, `pet_name`, `pet_breed`, `gender`, `pet_food_type`, `pet_food_quantity`, `id`) VALUES
('kiran', '9884984544', 'kiran@gmail.com', '', 'arj', 'scooby', 'dol', 'Male', 'drools', '2kg', 1),
('john', '9874561236', 'john@gmail.com', '9874556556', 'asf', 'jeff', 'dassd', 'Male', 'drools', '5kg', 2),
('john', '9874563210', 'john@gmail.com', '9123456789', 'sadfs', 'scooby', 'dal', 'Male', 'drools', '2kg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pet_training`
--

CREATE TABLE `pet_training` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ephone` varchar(15) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `level` enum('beginner','intermediate','advance') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_training`
--

INSERT INTO `pet_training` (`id`, `first_name`, `phone`, `email`, `ephone`, `pet_name`, `pet_breed`, `level`) VALUES
(1, 'john', '9874563210', 'john@gmail.com', '', 'scooby', 'dol', 'beginner');

--
-- Indexes for dumped tables
--

--
--


--
-- Indexes for table `dogplayground`
--
ALTER TABLE `dogplayground`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogwalker`
--
ALTER TABLE `dogwalker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funeral`
--
ALTER TABLE `funeral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `globalpet`
--
ALTER TABLE `globalpet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petbedding`
--
ALTER TABLE `petbedding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petclub`
--
ALTER TABLE `petclub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petfashion`
--
ALTER TABLE `petfashion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pethostel`
--
ALTER TABLE `pethostel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petsitter`
--
ALTER TABLE `petsitter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pettaxi`
--
ALTER TABLE `pettaxi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_day_care`
--
ALTER TABLE `pet_day_care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_training`
--
ALTER TABLE `pet_training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dia`
--
ALTER TABLE `dia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dogplayground`
--
ALTER TABLE `dogplayground`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dogwalker`
--
ALTER TABLE `dogwalker`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `funeral`
--
ALTER TABLE `funeral`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `globalpet`
--
ALTER TABLE `globalpet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petbedding`
--
ALTER TABLE `petbedding`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petclub`
--
ALTER TABLE `petclub`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petfashion`
--
ALTER TABLE `petfashion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pethostel`
--
ALTER TABLE `pethostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petsitter`
--
ALTER TABLE `petsitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pettaxi`
--
ALTER TABLE `pettaxi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pet_day_care`
--
ALTER TABLE `pet_day_care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pet_training`
--
ALTER TABLE `pet_training`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
