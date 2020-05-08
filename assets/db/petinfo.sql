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
  `species` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `coat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `petinfo` (`id`, `image`, `AIN`, `Pet_Name`, `DOB`, `color`, `GENIUS`, `species`, `coat`, `weight`, `Height`, `Microchiped_or_Tattooed`, `Microchip_or_Tattoo`, `State_License_or_Registration`, `Club_or_Association_Registration`, `Pet_Sire_Name`, `Pet_Sire_AIN`, `Pet_Dam_Name`, `Pet_Dam_AIN`, `email`, `password`, `gender`, `Spayed_or_Neutered`, `Special_Status`, `phone`, `created`, `modified`, `status`) VALUES
(37, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', '', '', 90, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'sul', 'jqdfqwj', '', '', 'Male', 'yes', 'Emotional Support Animal', '321654', '2020-02-26 11:14:42', '2020-02-26 11:14:42', 1),
(38, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', '', '', 90, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'sul', 'jqdfqwj', '', '', 'Male', 'yes', 'Service Dog', '321654', '2020-02-26 11:15:42', '2020-02-26 11:15:42', 1),
(39, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', '', '', 90, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'sul', 'jqdfqwj', '', '', 'Male', 'yes', 'Other', '321654', '2020-02-26 11:16:10', '2020-02-26 11:16:10', 1),
(40, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', '', '', 90, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'sul', 'jqdfqwj', '', '', 'Female', 'no', 'Service Dog', '321654', '2020-02-26 11:16:40', '2020-02-26 11:16:40', 1),
(41, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', '', '', 12, 7, 'yes', 'yes', 'fdsffa', 'gfdsa', 'sai', '143', 'jsfdsjh', 'jqdfqwj', '', '', 'Female', 'no', 'K-9', '1254789633', '2020-02-26 11:24:01', '2020-02-26 11:24:01', 1),
(42, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', '', '', 12, 7, 'yes', 'sad', 'fdsffa', 'gfdsa', 'sai', '143', 'jsfdsjh', 'jqdfqwj', '', '', 'Female', 'no', 'K-9', '1254789633', '2020-02-26 11:28:36', '2020-02-26 11:28:36', 1),
(43, '', 321654, 'dobberman', '2020-02-20', 'red', 'dhahj', '', '', 12, 7, 'no', 'sad', 'fdsffa', 'gfdsa', 'sai', '143', 'jsfdsjh', 'jqdfqwj', '', '', 'Female', 'no', 'K-9', '1254789633', '2020-02-26 11:30:03', '2020-02-26 11:30:03', 1),
(49, '', 321654, 'dobberman', '2020-03-19', 'red', 'dhahj', '', '', 50, 7, 'yes', 'yes', 'fdsffa', 'chudali', 'jhfdhj', 'ku', 'jsfdsjh', 'jqdfqwj', 'saikutti.mathukumalli1234@gmail.com', '', 'Male', 'yes', 'K-9', '9491888714', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(50, '', 321654, 'dobberman', '2020-03-18', 'ahudak', 'dhahj', '', '', 50, 7, 'yes', 'auskg', 'fdsffa', 'wfsf', 'jhfdhj', 'ku', 'jsfdsjh', 'jqdfqwj', 'sairam2@gmail.com', '', 'Male', 'yes', 'K-9', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(51, '', 321654, 'dobberman', '2020-03-18', 'red', 'dhahj', '', '', 50, 7, 'yes', 'kfgksj', 'fdsffa', 'wfsf', 'jhfdhj', 'jhqfdqf', 'goaat', 'jqdfqwj', 'saikutti.mathukumalli21345@gmail.com', '', 'Male', 'yes', 'Other', '9491888714', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(52, '', 321654, 'drew', '2020-03-20', 'white', 'agsg', '', '', 50, 3, 'yes', 'yes', 'jhgdj', 'gfdsa', 'drw', 'ku', 'jsfdsjh', 'dvkldhsl', 'saikutti.mathukumalli123@gmail.com', '', 'Female', 'no', 'Service Dog', '9491888714', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(53, 'download.jpg', 123, 'abc', '2020-03-31', 'brown', 'asfjdjg', '', '', 201, 123, 'yes', 'asds', 'FFUYQ', 'WQ,MDGKU', 'FKHSKD', 'KJADSG', 'HSJJA', 'AJSJD', 'john@gmail.com', '', 'Male', 'yes', 'Other', '9874563210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(54, 'unnamed.jpg', 123, 'abc', '2020-03-25', 'brown', 'asfjdjg', '', '', 201, 433, 'yes', 'asfs', 'dgs', 'dggs', 'gs', '1234', 'wqrre', 'qwteq', 'kishor123@gmail.com', '', 'Male', 'yes', 'Other', '9213456780', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(55, 'unnamed.jpg', 123, 'abc', '2020-03-25', 'brown', 'asfjdjg', '', '', 201, 433, 'yes', 'asfs', 'dgs', 'dggs', 'gs', '1234', 'wqrre', 'qwteq', 'kishor123@gmail.com', '', 'Male', 'yes', 'Other', '9213456780', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(56, '886353-pet.jpg', 123, 'abc', '2020-04-08', 'red', 'asfjdjg', '', '', 86, 6, 'yes', 'yes', 'adkjg', 'zjckgjx', 'aasduaiy', 'dvm,vkja', 'zv,sbhkl', 's.vlsdhv', 'sai@gmail.com', '', 'Male', 'yes', 'Other', '9874563210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(57, 'unnamed.jpg', 123, 'abc', '2020-03-25', 'brown', 'asfjdjg', '', '', 201, 433, 'yes', 'asfs', 'dgs', 'dggs', 'gs', '1234', 'wqrre', 'qwteq', 'kishor123@gmail.com', '', 'Male', 'yes', 'Other', '9213456780', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(58, 'unnamed.jpg', 123, 'abc', '2020-03-25', 'brown', 'asfjdjg', '', '', 201, 433, 'yes', 'asfs', 'dgs', 'dggs', 'gs', '1234', 'wqrre', 'qwteq', 'kishor123@gmail.com', '', 'Male', 'yes', 'Other', '9213456780', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(59, 'unnamed.jpg', 123, 'abc', '2020-03-25', 'brown', 'asfjdjg', '', '', 201, 433, 'yes', 'asfs', 'dgs', 'dggs', 'gs', '1234', 'wqrre', 'qwteq', 'kishor123@gmail.com', '', 'Male', 'yes', 'Other', '9213456780', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(60, 'thumb-1920-380977.jpg', 123, 'abc', '2020-04-30', 'red', 'jhakjhf', '', '', 0, 0, 'yes', 'ndsgls', 'slkkvlnlk', 'nxlbnl', 'klnlbnl', 'vlndbn', 'kldlvn', 'lksnb', 'jack@gmail.com', '', 'Male', 'yes', 'Other', '9874563210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(61, 'unnamed.jpg', 123, 'abc', '2020-03-25', 'brown', 'asfjdjg', '', '', 201, 433, 'yes', 'asfs', 'dgs', 'dggs', 'gs', '1234', 'wqrre', 'qwteq', 'kishor123@gmail.com', '', 'Male', 'yes', 'Other', '9213456780', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(62, '886353-pet.jpg', 123, 'abc', '2020-04-02', 'brown', 'asfjdjg', '', '', 86, 6, 'yes', 'asds', '987456', 'asafb', 'vddvs', 'dvdv', 'dggsbz', 'sdfbzfb', 'john@gmail.com', '', 'Male', 'yes', 'Other', '9874563210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(63, '886353-pet.jpg', 123, 'xnsdam', '2020-04-02', 'brown', 'asfjdjg', '', '', 86, 6, 'yes', 'asfs', 'qsfasd', 'dgf', 'fewfq', 'fewwe', 'wefwewefwew', 'jgkuhjh', 'john@gmail.com', '', 'Male', 'yes', 'Other', '98974566123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(64, 'unnamed.jpg', 123, 'vjh', '2020-04-02', 'brown', 'asfjdjg', '', '', 86, 6, 'yes', 'asds', 'Bjugkj', 'WQ,MDGKU', 'FKHSKD', 'KJADSG', 'wqrre', 'AJSJD', 'john@gmail.com', '', 'Male', 'yes', 'Other', '8099951702', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(65, 'download.jpg', 123, 'abc', '2020-04-02', 'brown', 'asfjdjg', '', '', 86, 6, 'yes', 'asds', 'hfghdh', 'WQ,MDGKU', 'hdyhfh', 'dhtdh', 'dh', 'yt', 'vinaykumar@gmail.com', '', 'Male', 'yes', 'Other', '9874563210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(66, 'unnamed.jpg', 123, 'abc', '2020-04-03', 'brown', 'asfjdjg', '', '', 86, 6, 'yes', 'asfs', 'saf', 'WQ,MDGKU', 'vddvs', 'KJADSG', 'wqrre', 'qwteq', 'abcd@gmail.com', '', 'Male', 'yes', 'Other', '7894561230', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(67, 'unnamed.jpg', 123, 'vjh', '2020-04-02', 'brown', 'asfjdjg', '', '', 86, 6, 'yes', 'asds', 'Bjugkj', 'WQ,MDGKU', 'FKHSKD', 'KJADSG', 'wqrre', 'AJSJD', 'john@gmail.com', '', 'Male', 'yes', 'Other', '8099951702', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(68, 'thumb-1920-380977.jpg', 123, 'abc', '2020-04-03', 'red', 'asfjdjg', '', '', 86, 6, 'yes', 'asds', 'adav', 'kjggak', 'vsjjasgdk', 'sjagkka', 'shdih', 'kjvkh', 'john@gmail.com', '', 'Female', 'yes', 'Other', '9685741230', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(69, 'download.jpg', 123, 'abc', '2020-04-02', 'brown', 'ml;n;ln', '', '', 86, 6, 'yes', 'asds', 'bm, ,', 'm.m.n,.', ',nnklbj', 'jhvhjfju', 'hgghf', 'hjjhvj', 'john@gmail.com', '', 'Male', 'yes', 'Other', '9874563210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(70, 'download.jpg', 123, 'abc', '2020-04-02', 'brown', 'ml;n;ln', '', '', 86, 6, 'yes', 'asds', 'bm, ,', 'm.m.n,.', ',nnklbj', 'jhvhjfju', 'hgghf', 'hjjhvj', 'john@gmail.com', '', 'Male', 'yes', 'Other', '9874563210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(71, 'thumb-1920-380977.jpg', 123, 'abc', '2020-04-17', 'brown', 'asfjdjg', '', '', 86, 123, 'yes', 'asds', 'as', 'cs', 'vvs', 'dsgd', 'aasef', 'sdvd', 'kishor123@gmail.com', '', 'Male', 'yes', 'Other', '7894561230', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(72, 'thumb-1920-380977.jpg', 123, 'abc', '2020-04-17', 'brown', 'asfjdjg', '', '', 86, 123, 'yes', 'asds', 'as', 'cs', 'vvs', 'dsgd', 'aasef', 'sdvd', 'kishor123@gmail.com', '', 'Male', 'yes', 'Other', '7894561230', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(73, 'unnamed.jpg', 123, 'abc', '2020-04-17', 'brown', 'asfjdjg', '', '', 0, 433, 'yes', 'asds', 'sfag', 'sds', 'dbf', 'dfd', 'dsbdg', 'rhd', 'jack@gmail.com', '', 'Male', 'yes', 'Other', '7894562301', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(74, 'thumb-1920-380977.jpg', 123, 'abc', '2020-04-17', 'brown', 'asfjdjg', '', '', 86, 123, 'yes', 'asds', 'as', 'cs', 'vvs', 'dsgd', 'aasef', 'sdvd', 'kishor123@gmail.com', '', 'Male', 'yes', 'Other', '7894561230', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(75, 'unnamed.jpg', 123, 'abc', '2020-05-14', 'red', 'asfjdjg', '', '', 86, 123, 'yes', 'asds', 'asdgd', 'jgjg', 'ug', 'jhgjug', 'jgjg', 'ugjuh', 'john@gmail.com', '', 'Female', 'yes', 'Other', '9874563210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(76, 'unnamed.jpg', 123, 'abc', '2020-05-02', 'brown', 'asfjdjg', '', '', 86, 123, 'yes', 'asds', 'dsf', 'sfs', 'jojj', 'jlj', 'ljlj', 'lkjlj', 'john@gmail.com', '', 'Male', 'yes', '', 'jkkjhj', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(77, '886353-pet.jpg', 789, 'abc', '2020-05-04', 'brown', 'asfjdjg', '', '', 86, 123, 'yes', 'asfs', 'nklk', 'jccgh', 'jhjhb', 'jvjhv', 'jhvjhb', 'jhhj', 'john@gmail.com', '', 'Male', 'yes', '', '9587463210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(78, '886353-pet1.jpg', 789, 'abc', '2020-05-04', 'brown', 'asfjdjg', '', '', 86, 123, 'yes', 'asfs', 'nklk', 'jccgh', 'jhjhb', 'jvjhv', 'jhvjhb', 'jhhj', 'john@gmail.com', '', 'Male', 'yes', '', '9587463210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(79, 'download.jpg', 789, 'abc', '2020-05-04', 'brown', 'jhakjhf', '', '', 0, 0, 'yes', 'mbkgk', 'h', 'ugu', 'ugug', 'uiguy', 'uygu', 'uyguyg', 'john@gmail.com', '', 'Male', 'yes', 'Emotional Support Animal', '7894563210', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(80, 'unnamed1.jpg', 789, 'abc', '2020-05-04', 'brown', 'asfjdjg', '', '', 86, 6, 'yes', 'asds', 'xsac', 'jhvh', 'hgchgc', 'hgh', 'chggh', 'chgh', 'kiran@gmail.com', '', 'Male', 'yes', '', 'bhhgav', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(81, '', 789, 'abc', '2020-05-06', 'brown', 'asfjdjg', '', '', 0, 123, 'yes', 'm,bj', 'mnjk', 'bj,b,', 'hgjgj', 'jhjhv', 'jhvjv', 'jhjhv', 'john@gmail.com', '', 'Male', 'yes', 'K-9', '7845123690', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petinfo`
--
ALTER TABLE `petinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petinfo`
--
ALTER TABLE `petinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
