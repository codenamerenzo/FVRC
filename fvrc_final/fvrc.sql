-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 09:05 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fvrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id_no` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `account_status` varchar(25) NOT NULL,
  `position` text NOT NULL,
  `club_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id_no`, `username`, `password`, `account_status`, `position`, `club_name`) VALUES
(' FVRC-000002 ', 'administrator', 'admin', 'approve', 'fvrc president', 'none'),
(' FVRC-000003', 'director', 'director', 'approve', 'regional director', 'team nindot'),
(' FVRC-000004', 'member', 'member', 'approve', 'member', 'none'),
(' FVRC-000005', 'leader', 'leader', 'approve', 'club leader', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `annoucement`
--

CREATE TABLE IF NOT EXISTS `annoucement` (
  `id` int(4) NOT NULL,
  `date` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `content` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annoucement`
--

INSERT INTO `annoucement` (`id`, `date`, `subject`, `content`) VALUES
(1, 'March 12, 2016', 'meeting', 'discuss about our party'),
(2, 'March 19, 2016', 'asdasasd', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `club_member` int(6) NOT NULL,
  `club_name` varchar(25) NOT NULL,
  `club_leader` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`club_member`, `club_name`, `club_leader`) VALUES
(1, 'generation of mirancles', 'reynante'),
(1, 'nindot', 'nindot'),
(4, 'team nindot', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(6) NOT NULL,
  `date` varchar(15) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `report_category` varchar(20) NOT NULL,
  `reoprt_content` varchar(150) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `date`, `first_name`, `last_name`, `email_address`, `contact`, `report_category`, `reoprt_content`, `status`) VALUES
(11, 'March 22, 2016', 'reynante', 'daitol', '', '09232763077', 'Boat and water accid', 'My boat is sinking.', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `report_category`
--

CREATE TABLE IF NOT EXISTS `report_category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_category`
--

INSERT INTO `report_category` (`id`, `category`) VALUES
(1, 'Vehicular Accident'),
(2, 'Boat and water accident'),
(3, 'Slips, trips, and fall'),
(4, 'Wrongful death/ clinical negligence'),
(5, 'Work accidents/ factory accidents'),
(6, 'Assaults'),
(7, 'Hijacking');

-- --------------------------------------------------------

--
-- Table structure for table `update_news`
--

CREATE TABLE IF NOT EXISTS `update_news` (
  `Id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `News` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_news`
--

INSERT INTO `update_news` (`Id`, `Title`, `News`) VALUES
(1, 'Title', 'Content'),
(2, 'Title', 'Content'),
(3, 'Title', 'Content');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_contact`
--

CREATE TABLE IF NOT EXISTS `volunteer_contact` (
  `id_no` varchar(15) NOT NULL,
  `cellphone_no` varchar(15) NOT NULL,
  `telephone_no` varchar(15) NOT NULL,
  `e-mail` varchar(30) NOT NULL,
  `present_address` varchar(50) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `homephone_no` varchar(15) NOT NULL,
  `year_of_stay` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_contact`
--

INSERT INTO `volunteer_contact` (`id_no`, `cellphone_no`, `telephone_no`, `e-mail`, `present_address`, `permanent_address`, `homephone_no`, `year_of_stay`) VALUES
(' FVRC-000003', '09232763077', '3449320', 'reynantedaitol@gmail.com', 'saac 1, buaya, lapu-lapu city', 'saac 1, buaya, lapu-lapu city', '3449320', 22),
('FVRC-000002', '09323545795', '123123', 'codenamekirito@gmail.com', 'buaya, lapu-lapu city', 'buaya, lapu-lapu city', '3449322', 25),
(' FVRC-000005', 'asd', 'gsd', 'sd', 'gsd', 'gfsd', 'gsdf', 0),
(' FVRC-000004', 'asdsad', 'afsdas', 'fsdf', 'gsdf', 'gsdf', 'gsdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_information`
--

CREATE TABLE IF NOT EXISTS `volunteer_information` (
  `id_no` varchar(15) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `maidenname` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `status` varchar(11) NOT NULL,
  `cellphone_no` varchar(15) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `place_of_birth` varchar(80) NOT NULL,
  `citizenship` varchar(15) NOT NULL,
  `club_name` varchar(25) NOT NULL,
  `civic_call_sign` varchar(25) NOT NULL,
  `fvrc_call_sign` varchar(25) NOT NULL,
  `date_registered` varchar(20) NOT NULL,
  `religion` text NOT NULL,
  `blood_type` varchar(15) NOT NULL,
  `health_issues` varchar(25) NOT NULL,
  `medications` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_information`
--

INSERT INTO `volunteer_information` (`id_no`, `firstname`, `lastname`, `middlename`, `maidenname`, `gender`, `status`, `cellphone_no`, `date_of_birth`, `place_of_birth`, `citizenship`, `club_name`, `civic_call_sign`, `fvrc_call_sign`, `date_registered`, `religion`, `blood_type`, `health_issues`, `medications`) VALUES
(' FVRC-000002 ', 'renz', 'daitol', 'qweqwe', '', 'male', 'single', '', '01/01/94', 'qweqwe', 'qweqwe', 'generation of mirancles', 'none', 'none', '02/18/2016', 'roman catholic', 'ab+', 'none', 'none'),
(' FVRC-000003', 'reynante', 'daitol', 'i', 'none', 'male', 'single', '09232763077', 'january 01, 1994', 'basak, lapu-lapu city', 'filipino', 'team nindot', 'none', 'none', 'March 6, 2016', 'roman catholic', 'ab+', 'none', 'none'),
(' FVRC-000005', 'asd', 'adsd', 'fsdf', 'gsd', 'fsdf', 'gsdgsd', 'asd', 'gsdc', 'gsdc', 'gvsd', 'fgsd', 'qfgvsdx', 'g', 'March 19, 2016', 'qds', 'fsdf', 'sfd', 'fsd'),
(' FVRC-000004', 'asdasd', 'fasdas', 'qfsdfsd', 'fsdf', 'gsdfsd', 'gsdfs', 'asdsad', 'qgsdf', 'gsdfds', 'gsdfsd', 'gsdf', 'gsdfsd', 'gsdfsd', 'March 19, 2016', 'gsdfsd', 'gsdf', 'sdfsdgsd', 'gsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_resources`
--

CREATE TABLE IF NOT EXISTS `volunteer_resources` (
  `id_no` varchar(25) NOT NULL,
  `item_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_resources`
--

INSERT INTO `volunteer_resources` (`id_no`, `item_name`) VALUES
(' FVRC-000002 ', 'cellphone'),
(' FVRC-000003', 'laptop 2 pcs'),
(' FVRC-000004', 'gdf'),
(' FVRC-000005', 'fsdf');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_skills`
--

CREATE TABLE IF NOT EXISTS `volunteer_skills` (
  `id_no` varchar(15) NOT NULL,
  `dialects_spoken` varchar(50) NOT NULL,
  `special_skills` varchar(50) NOT NULL,
  `trainings` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_skills`
--

INSERT INTO `volunteer_skills` (`id_no`, `dialects_spoken`, `special_skills`, `trainings`) VALUES
(' FVRC-000002 ', 'english', 'qweqwe', 'programming nc 4, computer hardware nc 2'),
(' FVRC-000003', 'english, tagalog, bisaya', 'programming', 'programming nc 4'),
(' FVRC-000004', 'gsdfsdf', 'gsdf', 'sdf'),
(' FVRC-000005', 'fser', 'fsdf', 'fsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD UNIQUE KEY `id_no_2` (`id_no`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_no` (`id_no`),
  ADD KEY `id_no_3` (`id_no`);

--
-- Indexes for table `annoucement`
--
ALTER TABLE `annoucement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD UNIQUE KEY `club_name` (`club_name`),
  ADD KEY `club_name_2` (`club_name`),
  ADD KEY `No` (`club_member`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_category`
--
ALTER TABLE `report_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_news`
--
ALTER TABLE `update_news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `volunteer_contact`
--
ALTER TABLE `volunteer_contact`
  ADD PRIMARY KEY (`cellphone_no`),
  ADD UNIQUE KEY `cellphone_no_3` (`cellphone_no`),
  ADD KEY `cellphone_no` (`cellphone_no`),
  ADD KEY `cellphone_no_2` (`cellphone_no`),
  ADD KEY `cellphone_no_4` (`cellphone_no`);

--
-- Indexes for table `volunteer_information`
--
ALTER TABLE `volunteer_information`
  ADD PRIMARY KEY (`cellphone_no`),
  ADD UNIQUE KEY `id_no_2` (`id_no`),
  ADD KEY `cellphone_no` (`cellphone_no`),
  ADD KEY `id_no` (`id_no`),
  ADD KEY `id_no_3` (`id_no`),
  ADD KEY `club_name` (`club_name`);

--
-- Indexes for table `volunteer_resources`
--
ALTER TABLE `volunteer_resources`
  ADD UNIQUE KEY `id_no_2` (`id_no`),
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `volunteer_skills`
--
ALTER TABLE `volunteer_skills`
  ADD UNIQUE KEY `id_no_2` (`id_no`),
  ADD KEY `id_no` (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annoucement`
--
ALTER TABLE `annoucement`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `report_category`
--
ALTER TABLE `report_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `update_news`
--
ALTER TABLE `update_news`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_2` FOREIGN KEY (`id_no`) REFERENCES `volunteer_information` (`id_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer_resources`
--
ALTER TABLE `volunteer_resources`
  ADD CONSTRAINT `volunteer_resources_ibfk_1` FOREIGN KEY (`id_no`) REFERENCES `volunteer_information` (`id_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer_skills`
--
ALTER TABLE `volunteer_skills`
  ADD CONSTRAINT `volunteer_skills_ibfk_1` FOREIGN KEY (`id_no`) REFERENCES `volunteer_information` (`id_no`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
