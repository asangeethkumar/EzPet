-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 08:54 PM
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
-- Table structure for table `breeders`
--

CREATE TABLE `breeders` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `breeder_phone` varchar(50) NOT NULL,
  `address_female` varchar(50) NOT NULL,
  `Height` int(25) NOT NULL,
  `address_stud` varchar(200) NOT NULL,
  `Veterinary_Doctor_Name` varchar(100) NOT NULL,
  `Veterinary_Doctor_ADDRESS` varchar(50) NOT NULL,
  `Veterinary_Doctor_phone_number` varchar(50) NOT NULL,
  `Microchip` varchar(50) NOT NULL,
  `Pet_breed` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `DOB` date NOT NULL,
  `color` varchar(50) NOT NULL,
  `Body_Markings` varchar(50) NOT NULL,
  `DOB_rabies` date NOT NULL,
  `DOB_last` date NOT NULL,
  `DOB_deworming` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breeders`
--

INSERT INTO `breeders` (`id`, `Full_Name`, `address`, `breeder_phone`, `address_female`, `Height`, `address_stud`, `Veterinary_Doctor_Name`, `Veterinary_Doctor_ADDRESS`, `Veterinary_Doctor_phone_number`, `Microchip`, `Pet_breed`, `gender`, `DOB`, `color`, `Body_Markings`, `DOB_rabies`, `DOB_last`, `DOB_deworming`) VALUES
(1, 'Saikutti', 'hyd', '456123', 'bang', 0, 'guntur', 'warne', 'aus', '123343', 'no', 'german', 'Male', '2020-03-19', 'red', 'one', '2020-03-25', '2020-03-11', '2020-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `billing_address` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `conf_password` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `middle_name`, `last_name`, `DOB`, `address`, `billing_address`, `email`, `password`, `conf_password`, `gender`, `phone`) VALUES
(1, 'sai', 'M', 'sanjay', '2020-03-04', 'hyd', 'bangalore', 'saikutti.mathukumalli@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Male', '1254789633');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `shipping_address` varchar(50) NOT NULL,
  `alt_address` varchar(50) NOT NULL,
  `delivery_charges` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `Full_Name`, `address`, `phone`, `email`, `shipping_address`, `alt_address`, `delivery_charges`) VALUES
(1, 'Saikutti', 'hyd', '9491888714', 'saikutti.mathukumalli@gmail.com', 'ban', 'guntur', '50');

-- --------------------------------------------------------

--
-- Table structure for table `dietchart`
--

CREATE TABLE `dietchart` (
  `id` int(11) NOT NULL,
  `diet_chart` varchar(50) NOT NULL,
  `Special_Status` enum('Puppies and kitten','Adult pets (7yrs old)','senior pets(14yrs old)','Other') NOT NULL,
  `online_booking` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dietchart`
--

INSERT INTO `dietchart` (`id`, `diet_chart`, `Special_Status`, `online_booking`) VALUES
(1, 'sfgas', 'senior pets(14yrs old)', '2');

-- --------------------------------------------------------

--
-- Table structure for table `estimation`
--

CREATE TABLE `estimation` (
  `id` int(11) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `range` varchar(50) NOT NULL,
  `Special_Status` enum('Dog','cat','birds','orther') NOT NULL,
  `availability` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estimation`
--

INSERT INTO `estimation` (`id`, `budget`, `range`, `Special_Status`, `availability`) VALUES
(1, '2000', '1500', 'Dog', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `income` varchar(50) NOT NULL,
  `expenses` varchar(50) NOT NULL,
  `savings` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `healthvacination`
--

CREATE TABLE `healthvacination` (
  `id` int(11) NOT NULL,
  `petname` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `DOB_vacination` date NOT NULL,
  `Monitoring` varchar(50) NOT NULL,
  `DOB_bookvac` date NOT NULL,
  `preferred_Doctor` varchar(25) NOT NULL,
  `hospital_preferred` varchar(100) NOT NULL,
  `availability` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `healthvacination`
--

INSERT INTO `healthvacination` (`id`, `petname`, `DOB`, `DOB_vacination`, `Monitoring`, `DOB_bookvac`, `preferred_Doctor`, `hospital_preferred`, `availability`) VALUES
(1, 'loosy', '2020-03-18', '2020-03-19', 'yes', '2020-03-11', 'honey', 'Sulky', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `myorders`
--

CREATE TABLE `myorders` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `Contact_number` varchar(50) NOT NULL,
  `my_products` varchar(50) NOT NULL,
  `total` varchar(25) NOT NULL,
  `billing_address` varchar(50) NOT NULL,
  `Shipping_address` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myorders`
--

INSERT INTO `myorders` (`id`, `Full_Name`, `email`, `Contact_number`, `my_products`, `total`, `billing_address`, `Shipping_address`) VALUES
(1, 'Saikutti', 'saikutti.mathukumalli@gmail.com', '949111714', 'pedegree,drools', '1000', 'bangalore', 'no'),
(2, 'Saikutti', 'saikutti.mathukumalli@gmail.com', '949111714', 'pedegree,drools', '1000', 'bangalore', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `orderpet`
--

CREATE TABLE `orderpet` (
  `id` int(11) NOT NULL,
  `Special_Status` enum('Dog','cat','birds','orther') NOT NULL,
  `images` blob NOT NULL,
  `Cost` varchar(50) NOT NULL,
  `Adopton_pets` varchar(50) NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderpet`
--

INSERT INTO `orderpet` (`id`, `Special_Status`, `images`, `Cost`, `Adopton_pets`, `Status`) VALUES
(1, 'cat', 0x647366, '500', '2', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `petchart`
--

CREATE TABLE `petchart` (
  `id` int(11) NOT NULL,
  `Pet_Name` varchar(50) NOT NULL,
  `Breed` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `ID_Mark_ifany` varchar(50) NOT NULL,
  `Age` int(50) NOT NULL,
  `Recommended_Immunization_Schedule` int(25) NOT NULL,
  `Immunization_dates` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petfind`
--

CREATE TABLE `petfind` (
  `id` int(11) NOT NULL,
  `Pet_breed` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(50) NOT NULL,
  `Height` int(50) NOT NULL,
  `Purpose_Of_Pet` enum('Service Dog','Emotional Support Animal','K-9','homely') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cost` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `petfind`
--

INSERT INTO `petfind` (`id`, `Pet_breed`, `gender`, `color`, `weight`, `Height`, `Purpose_Of_Pet`, `phone`, `Cost`, `created`, `modified`, `status`) VALUES
(37, '', 'Male', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:14:42', '2020-02-26 11:14:42', 1),
(38, '', 'Male', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:15:42', '2020-02-26 11:15:42', 1),
(39, '', 'Male', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:16:10', '2020-02-26 11:16:10', 1),
(40, '', 'Female', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:16:40', '2020-02-26 11:16:40', 1),
(41, '', 'Female', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:24:01', '2020-02-26 11:24:01', 1),
(42, '', 'Female', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:28:36', '2020-02-26 11:28:36', 1),
(43, '', 'Female', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:30:03', '2020-02-26 11:30:03', 1),
(44, '', 'Female', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:31:40', '2020-02-26 11:31:40', 1),
(45, '', 'Female', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:33:06', '2020-02-26 11:33:06', 1),
(46, '', 'Female', '', 0, 0, 'Service Dog', '', '', '2020-02-26 11:33:42', '2020-02-26 11:33:42', 1),
(47, '', 'Male', '', 0, 0, 'Service Dog', '', '', '2020-02-26 12:49:00', '2020-02-26 12:49:00', 1),
(48, '', 'Male', '', 0, 0, 'Service Dog', '', '', '2020-03-19 12:48:08', '2020-03-19 12:48:08', 1),
(49, 'german', 'Male', 'red', 50, 3, '', '9491888714', '500', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(50, 'german', 'Male', 'red', 50, 3, 'K-9', '987654', '1000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petinfo`
--

CREATE TABLE `petinfo` (
  `id` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `AIN` int(11) NOT NULL,
  `Pet_Name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `color` text COLLATE utf8_unicode_ci NOT NULL,
  `GENIUS` text COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(50) NOT NULL,
  `Height` int(11) NOT NULL,
  `Microchiped_or_Tattooed` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `Microchip_or_Tattoo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `State_License_or_Registration` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Club_or_Association_Registration` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pet_Sire_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pet_Sire_AIN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pet_Dam_Name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Pet_Dam_AIN` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `Spayed_or_Neutered` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL,
  `Special_Status` enum('Service Dog','Emotional Support Animal','K-9','Other') COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `petinfo`
--

INSERT INTO `petinfo` (`id`, `image`, `AIN`, `Pet_Name`, `DOB`, `color`, `GENIUS`, `weight`, `Height`, `Microchiped_or_Tattooed`, `Microchip_or_Tattoo`, `State_License_or_Registration`, `Club_or_Association_Registration`, `Pet_Sire_Name`, `Pet_Sire_AIN`, `Pet_Dam_Name`, `Pet_Dam_AIN`, `email`, `password`, `gender`, `Spayed_or_Neutered`, `Special_Status`, `phone`, `created`, `modified`, `status`) VALUES
(37, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', 90, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'sul', 'jqdfqwj', '', '', 'Male', 'yes', 'Emotional Support Animal', '321654', '2020-02-26 11:14:42', '2020-02-26 11:14:42', 1),
(38, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', 90, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'sul', 'jqdfqwj', '', '', 'Male', 'yes', 'Service Dog', '321654', '2020-02-26 11:15:42', '2020-02-26 11:15:42', 1),
(39, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', 90, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'sul', 'jqdfqwj', '', '', 'Male', 'yes', 'Other', '321654', '2020-02-26 11:16:10', '2020-02-26 11:16:10', 1),
(40, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', 90, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'sul', 'jqdfqwj', '', '', 'Female', 'no', 'Service Dog', '321654', '2020-02-26 11:16:40', '2020-02-26 11:16:40', 1),
(41, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', 12, 7, 'yes', 'yes', 'fdsffa', 'gfdsa', 'sai', '143', 'jsfdsjh', 'jqdfqwj', '', '', 'Female', 'no', 'K-9', '1254789633', '2020-02-26 11:24:01', '2020-02-26 11:24:01', 1),
(42, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', 12, 7, 'yes', 'sad', 'fdsffa', 'gfdsa', 'sai', '143', 'jsfdsjh', 'jqdfqwj', '', '', 'Female', 'no', 'K-9', '1254789633', '2020-02-26 11:28:36', '2020-02-26 11:28:36', 1),
(43, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', 12, 7, 'no', 'sad', 'fdsffa', 'gfdsa', 'sai', '143', 'jsfdsjh', 'jqdfqwj', '', '', 'Female', 'no', 'K-9', '1254789633', '2020-02-26 11:30:03', '2020-02-26 11:30:03', 1),
(49, '', 321654, 'dobberman', '2020-03-19', 'red', 'dhahj', 50, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'jsfdsjh', 'jqdfqwj', 'saikutti.mathukumalli1234@gmail.com', '', 'Male', 'yes', 'K-9', '9491888714', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(50, '', 321654, 'dobberman', '2020-03-18', 'ahudak', 'dhahj', 50, 7, 'yes', 'auskg', 'fdsffa', 'wfsf', 'jhfdhj', 'ku', 'jsfdsjh', 'jqdfqwj', 'sairam2@gmail.com', '', 'Male', 'yes', 'K-9', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(51, '', 321654, 'dobberman', '2020-03-18', 'red', 'dhahj', 50, 7, 'yes', 'kfgksj', 'fdsffa', 'wfsf', 'jhfdhj', 'jhqfdqf', 'goaat', 'jqdfqwj', 'saikutti.mathukumalli21345@gmail.com', '', 'Male', 'yes', 'Other', '9491888714', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(52, '', 321654, 'drew', '2020-03-20', 'white', 'agsg', 50, 3, 'yes', 'yes', 'jhgdj', 'gfdsa', 'drw', 'ku', 'jsfdsjh', 'dvkldhsl', 'saikutti.mathukumalli123@gmail.com', '', 'Female', 'no', 'Service Dog', '9491888714', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petlicense`
--

CREATE TABLE `petlicense` (
  `id` int(50) NOT NULL,
  `License_No` int(50) NOT NULL,
  `Year` int(50) NOT NULL,
  `Applicant_Category` varchar(50) NOT NULL,
  `Ward_Name` varchar(50) NOT NULL,
  `Owners_Name` varchar(25) NOT NULL,
  `Applicant_name` varchar(25) NOT NULL,
  `Address_Pets_Owner_Institution` varchar(25) NOT NULL,
  `Pet_Name` varchar(25) NOT NULL,
  `Breed` varchar(25) NOT NULL,
  `Colour` varchar(25) NOT NULL,
  `ID_Mark_ifany` varchar(25) NOT NULL,
  `Age` int(25) NOT NULL,
  `Date_brought` date NOT NULL,
  `Veterinary_Doctors_name` varchar(25) NOT NULL,
  `Date_ARV` date NOT NULL,
  `Stray_Dog_Adopted` varchar(25) NOT NULL,
  `Puppy_owners_place` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petlicense`
--

INSERT INTO `petlicense` (`id`, `License_No`, `Year`, `Applicant_Category`, `Ward_Name`, `Owners_Name`, `Applicant_name`, `Address_Pets_Owner_Institution`, `Pet_Name`, `Breed`, `Colour`, `ID_Mark_ifany`, `Age`, `Date_brought`, `Veterinary_Doctors_name`, `Date_ARV`, `Stray_Dog_Adopted`, `Puppy_owners_place`) VALUES
(1, 165123, 2020, 'adsa', 'sad', 'efewaf', 'gfrwa', 'hyd', 'drew', 'german', 'red', '', 12, '2020-03-11', 'warnr', '2020-03-10', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `petshelter`
--

CREATE TABLE `petshelter` (
  `id` int(11) NOT NULL,
  `Perspective_Pet_Parent` varchar(50) NOT NULL,
  `pet_name_adopted` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `Pet_Name` varchar(50) NOT NULL,
  `Pet_breed` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `weight` int(50) NOT NULL,
  `Height` int(50) NOT NULL,
  `rent_or_own_home` varchar(25) NOT NULL,
  `veterinarian_name` varchar(50) NOT NULL,
  `veterinarian_phone_number` varchar(50) NOT NULL,
  `Hours_pet_alone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petshelter`
--

INSERT INTO `petshelter` (`id`, `Perspective_Pet_Parent`, `pet_name_adopted`, `gender`, `Pet_Name`, `Pet_breed`, `phone`, `address`, `weight`, `Height`, `rent_or_own_home`, `veterinarian_name`, `veterinarian_phone_number`, `Hours_pet_alone`) VALUES
(1, 'sai', 'drew', 'Female', 'drew', 'german', '987654', 'hyd', 50, 7, 'rent', 'dr sk', '9491888741', '2');

-- --------------------------------------------------------

--
-- Table structure for table `puppy`
--

CREATE TABLE `puppy` (
  `id` int(11) NOT NULL,
  `adopt_pet_finder` varchar(50) NOT NULL,
  `Special_Status` enum('Dog','cat','birds','orther') NOT NULL,
  `Pet_breed` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `featured_pets` varchar(50) NOT NULL,
  `search_results` varchar(25) NOT NULL,
  `userfile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puppy`
--

INSERT INTO `puppy` (`id`, `adopt_pet_finder`, `Special_Status`, `Pet_breed`, `age`, `featured_pets`, `search_results`, `userfile`) VALUES
(1, 'dsaf', 'cat', 'german', '3', 'sd', 'fdsa', 0x312e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breeders`
--
ALTER TABLE `breeders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dietchart`
--
ALTER TABLE `dietchart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimation`
--
ALTER TABLE `estimation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthvacination`
--
ALTER TABLE `healthvacination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myorders`
--
ALTER TABLE `myorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderpet`
--
ALTER TABLE `orderpet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petchart`
--
ALTER TABLE `petchart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petfind`
--
ALTER TABLE `petfind`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petinfo`
--
ALTER TABLE `petinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petlicense`
--
ALTER TABLE `petlicense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petshelter`
--
ALTER TABLE `petshelter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puppy`
--
ALTER TABLE `puppy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breeders`
--
ALTER TABLE `breeders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dietchart`
--
ALTER TABLE `dietchart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estimation`
--
ALTER TABLE `estimation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `healthvacination`
--
ALTER TABLE `healthvacination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myorders`
--
ALTER TABLE `myorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderpet`
--
ALTER TABLE `orderpet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petchart`
--
ALTER TABLE `petchart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petfind`
--
ALTER TABLE `petfind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `petinfo`
--
ALTER TABLE `petinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `petlicense`
--
ALTER TABLE `petlicense`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petshelter`
--
ALTER TABLE `petshelter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `puppy`
--
ALTER TABLE `puppy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
