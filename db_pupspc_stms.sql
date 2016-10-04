-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2016 at 06:23 PM
-- Server version: 5.6.30
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pupspc_stms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffs`
--

CREATE TABLE IF NOT EXISTS `tbl_staffs` (
  `id` int(10) NOT NULL,
  `userType` tinyint(2) NOT NULL DEFAULT '0' COMMENT '1 = admin, 2 = guard',
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime DEFAULT NULL,
  `isDeleted` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staffs`
--

INSERT INTO `tbl_staffs` (`id`, `userType`, `email`, `username`, `password`, `firstName`, `lastName`, `birthdate`, `dateCreated`, `dateUpdated`, `isDeleted`) VALUES
(1, 1, 'admin@smartwave.ph', 'admin', '$2a$08$7S0XokFyZcxKMDYj5yVtmOqAJqrILfNtfBcA0nv5g1/Mo0HrmNsX2', 'BarJei', 'Loba', '1995-05-29', '2016-04-17 13:36:54', NULL, 0),
(18, 1, 'anthony@gmail.com', 'tonton', '$2a$08$rolJjlcWmEjWIWI1Oi2OgOp9/7ZNrukXwHNduGdt1itpfVeR6npTu', 'Anthony', 'Manuel', NULL, '2016-09-08 08:13:49', NULL, 0),
(21, 2, 'barjei@smartwave.ph', 'guard', '$2a$08$7S0XokFyZcxKMDYj5yVtmOqAJqrILfNtfBcA0nv5g1/Mo0HrmNsX2', 'Jeirene Richmond', 'Barbo', NULL, '2016-09-10 18:56:28', NULL, 0),
(22, 1, 'asdf@asdf', 'asdfadf', '$2a$08$PYtA8I280IqPSODyI621QOUdPj4yIJsE81bMgI3DU6um/ezCnLX12', 'Asdfasdf', 'Adsfas', NULL, '2016-09-16 00:55:12', NULL, 0),
(23, 2, 'asdfasdf@asdf', 'asdfasdf', '$2a$08$J06GguANo7RZCt3dEx0do.Q3SkHrgCe9OrqSduI9Oe0r4lFN4T5PC', 'Asdf', 'Asdf', NULL, '2016-09-16 00:55:33', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE IF NOT EXISTS `tbl_students` (
  `id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(20) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `studNo` varchar(20) NOT NULL,
  `yearLevel` tinyint(2) NOT NULL,
  `course` varchar(20) NOT NULL,
  `rfid` int(40) NOT NULL,
  `userType` tinyint(2) NOT NULL DEFAULT '10' COMMENT '10 = student, 1 = L.M.G., 2 = S.A.',
  `isOnline` tinyint(2) NOT NULL DEFAULT '0',
  `isAtLab` tinyint(2) NOT NULL DEFAULT '0',
  `isValidated` tinyint(2) NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime DEFAULT NULL,
  `isDeleted` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `email`, `username`, `password`, `firstName`, `middleName`, `lastName`, `birthdate`, `studNo`, `yearLevel`, `course`, `rfid`, `userType`, `isOnline`, `isAtLab`, `isValidated`, `dateCreated`, `dateUpdated`, `isDeleted`) VALUES
(1, '', '', '', 'Jeirene Richmond', 'Loba', 'Barbo', '0000-00-00', '2011-00150-sp-0', 4, 'BSIT', 1282427186, 10, 0, 1, 0, '2016-09-15 00:37:44', NULL, 0),
(3, '', '', '', 'Jierose', 'Camara', 'Escaño', '0000-00-00', '2012-00067-sp-0', 4, 'BSIT', 1384568114, 10, 1, 0, 0, '2016-09-15 00:39:21', NULL, 0),
(4, '', '', '', 'Labo', '', 'Ratory', '0000-00-00', '2011-00123-sp-0', 3, 'BSIT', 2147483647, 1, 0, 1, 0, '2016-09-15 01:03:04', NULL, 0),
(10, '', '', '', 'Assistant', '', 'Student', '0000-00-00', '2011-00232-sp-0', 2, 'BSA', 1016651653, 2, 1, 0, 0, '2016-09-15 02:21:16', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timelogs`
--

CREATE TABLE IF NOT EXISTS `tbl_timelogs` (
  `id` int(10) NOT NULL,
  `rfid` int(20) NOT NULL,
  `logTime` datetime NOT NULL,
  `logOut` datetime DEFAULT NULL,
  `logDate` date NOT NULL,
  `logHours` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_timelogs`
--

INSERT INTO `tbl_timelogs` (`id`, `rfid`, `logTime`, `logOut`, `logDate`, `logHours`) VALUES
(1, 1282427186, '2016-09-15 03:43:30', '2016-09-15 04:17:38', '2016-09-15', NULL),
(2, 2147483647, '2016-09-15 03:44:34', NULL, '2016-09-15', NULL),
(3, 0, '2016-09-15 03:44:41', NULL, '2016-09-15', NULL),
(4, 0, '2016-09-15 03:47:25', NULL, '2016-09-15', NULL),
(5, 0, '2016-09-15 03:47:54', NULL, '2016-09-15', NULL),
(6, 1282427186, '2016-09-15 03:49:22', '2016-09-15 04:17:38', '2016-09-15', NULL),
(7, 1282427186, '2016-09-15 03:51:50', '2016-09-15 04:17:38', '2016-09-15', NULL),
(8, 1282427186, '2016-09-15 03:54:35', '2016-09-15 04:17:38', '2016-09-15', NULL),
(9, 1282427186, '2016-09-15 03:58:14', '2016-09-15 04:17:38', '2016-09-15', NULL),
(10, 1282427186, '2016-09-15 03:59:05', '2016-09-15 04:17:38', '2016-09-15', NULL),
(11, 1282427186, '2016-09-15 03:59:27', '2016-09-15 04:17:38', '2016-09-15', NULL),
(12, 1282427186, '2016-09-15 04:00:43', '2016-09-15 04:17:38', '2016-09-15', NULL),
(13, 1282427186, '2016-09-15 04:01:26', '2016-09-15 04:17:38', '2016-09-15', NULL),
(14, 1282427186, '2016-09-15 04:01:26', '2016-09-15 04:17:38', '2016-09-15', NULL),
(15, 1282427186, '2016-09-15 04:02:31', '2016-09-15 04:17:38', '2016-09-15', NULL),
(16, 1282427186, '2016-09-15 04:03:18', '2016-09-15 04:17:38', '2016-09-15', NULL),
(17, 1282427186, '2016-09-15 04:05:00', '2016-09-15 04:17:38', '2016-09-15', NULL),
(18, 1282427186, '2016-09-15 04:09:48', '2016-09-15 04:17:38', '2016-09-15', NULL),
(19, 1282427186, '2016-09-15 04:11:11', '2016-09-15 04:17:38', '2016-09-15', NULL),
(20, 1282427186, '2016-09-15 04:13:32', '2016-09-15 04:17:38', '2016-09-15', NULL),
(21, 1282427186, '2016-09-15 04:15:30', '2016-09-15 04:17:38', '2016-09-15', NULL),
(22, 1282427186, '2016-09-15 04:16:46', '2016-09-15 04:17:38', '2016-09-15', NULL),
(23, 1282427186, '2016-09-15 04:24:35', NULL, '2016-09-15', NULL),
(24, 1384568114, '2016-09-26 14:05:22', NULL, '2016-09-26', NULL),
(25, 1016651653, '2016-09-26 14:05:45', NULL, '2016-09-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timelogs_lab`
--

CREATE TABLE IF NOT EXISTS `tbl_timelogs_lab` (
  `id` int(10) NOT NULL,
  `rfid` int(20) NOT NULL,
  `logTime` datetime NOT NULL,
  `logOut` datetime DEFAULT NULL,
  `logDate` date NOT NULL,
  `logHours` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_timelogs_lab`
--

INSERT INTO `tbl_timelogs_lab` (`id`, `rfid`, `logTime`, `logOut`, `logDate`, `logHours`) VALUES
(1, 1282427186, '2016-10-05 01:55:11', NULL, '2016-10-05', NULL),
(2, 2147483647, '2016-10-05 01:56:53', '2016-10-05 01:57:12', '2016-10-05', NULL),
(3, 2147483647, '2016-10-05 01:57:05', '2016-10-05 01:57:12', '2016-10-05', NULL),
(4, 2147483647, '2016-10-05 01:57:14', NULL, '2016-10-05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_staffs`
--
ALTER TABLE `tbl_staffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rfid` (`rfid`),
  ADD UNIQUE KEY `studNo` (`studNo`);

--
-- Indexes for table `tbl_timelogs`
--
ALTER TABLE `tbl_timelogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_timelogs_lab`
--
ALTER TABLE `tbl_timelogs_lab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_staffs`
--
ALTER TABLE `tbl_staffs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_timelogs`
--
ALTER TABLE `tbl_timelogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_timelogs_lab`
--
ALTER TABLE `tbl_timelogs_lab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
