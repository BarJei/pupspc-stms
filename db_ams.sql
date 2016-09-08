-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2016 at 12:25 AM
-- Server version: 5.6.30
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffs`
--

CREATE TABLE IF NOT EXISTS `tbl_staffs` (
  `id` int(10) NOT NULL,
  `isAdmin` tinyint(2) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime DEFAULT NULL,
  `isDeleted` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staffs`
--

INSERT INTO `tbl_staffs` (`id`, `isAdmin`, `email`, `username`, `password`, `firstName`, `lastName`, `birthdate`, `dateCreated`, `dateUpdated`, `isDeleted`) VALUES
(1, 1, 'admin@smartwave.ph', 'admin', '$2a$08$KteJNIkxMAdPz2nemqpSAeyeRKbGmrXKAdn9BF.4Gx5lBbi2s2UbC', 'BarJei', 'Loba', '1995-05-29', '2016-04-17 13:36:54', NULL, 0),
(2, 1, 'joanne.faller@pupsanpedro.info', 'jfa', '$2a$08$OLEvtiUi.d7EseIUeccCu.uQS30qYMoIWF/nKn8MD2UcbBJBgAsAO', 'Joanne', 'Antonio', NULL, '2016-09-08 07:56:59', NULL, 0),
(5, 1, 'joanne.faller@pupsanpedro.info2', 'jfaf', '$2a$08$VZr97iTEel/Qx9.hqo00/uGfrTBmpxKC/hj/EO2rOu0deRLnYJ3oK', 'Joanne', 'Antonio', NULL, '2016-09-08 07:58:15', NULL, 0),
(7, 1, 'joanne.malvar@pupsanpedro.info', 'joanne.malvar', '$2a$08$bPs0HzSjWA6oJ1kA.PJiPuaZ4lnUwy7UpuKsDX02YGiRnCmZTyCPq', 'Joanne', 'Malvar', NULL, '2016-09-08 08:01:23', NULL, 0),
(8, 0, 'hehehe@as', 'asdf', '$2a$08$v8rvcutuXVylKkzORtKr4OvCOufD8N9vVc0ZYBWIqHzYCfB3ex812', 'Asdfasd', 'Adsf', NULL, '2016-09-08 08:02:13', NULL, 0),
(10, 0, 'hehehe@as123', 'asdf12312', '$2a$08$sJE34zUmRf/XSETVC/oFNOV4NZnvihAnMvo/k2RUKZIaJjztzGqde', 'Asdfasd', 'Adsf', NULL, '2016-09-08 08:02:55', NULL, 0),
(11, 0, 'barjei@smartwave.ph', 'barjei', '$2a$08$.w4Dijx./T7XPJmSfcsKpeXOZCYDC69jDc0qupgxZF9bE58RWhhzK', 'Barjei', 'Loba', NULL, '2016-09-08 08:03:22', NULL, 0),
(13, 1, 'aasf@asdf', 'sdfasdf', '$2a$08$yK05MRMS/8PmRmS8tcuuCeDV8315.3km8rayPWMLrDHtNIf.Z9jPi', 'Asdfasdfa', 'Sdfasdfasfa', NULL, '2016-09-08 08:08:13', NULL, 0),
(15, 0, 'haha2asd@asdf', 'adfas', '$2a$08$4KfSQkj.4daO.NYwbGuA2ObS8HaxudbGP9gFD/Zpawq.VMsgHQ.VG', 'Adasfas', 'Asdf', NULL, '2016-09-08 08:11:22', NULL, 0),
(17, 0, 'asdf@asdf', 'dfd', '$2a$08$MB9NrCQeJbuRGPHfjK7LW.gAIuX4p2Jkdy8TrwygLzec1YTotG8Ga', 'Asdfa', 'Adf', NULL, '2016-09-08 08:12:52', NULL, 0),
(18, 1, 'anthony@gmail.com', 'tonton', '$2a$08$rolJjlcWmEjWIWI1Oi2OgOp9/7ZNrukXwHNduGdt1itpfVeR6npTu', 'Anthony', 'Manuel', NULL, '2016-09-08 08:13:49', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE IF NOT EXISTS `tbl_students` (
  `id` int(5) NOT NULL,
  `rfid` int(40) NOT NULL,
  `userType` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0 = student, 1 = L.M.G., 2 = S.A.',
  `isOnline` tinyint(2) NOT NULL DEFAULT '0',
  `isAtLab` tinyint(2) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `isValidated` tinyint(2) NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime DEFAULT NULL,
  `isDeleted` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `userType` (`userType`),
  ADD UNIQUE KEY `rfid` (`rfid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_staffs`
--
ALTER TABLE `tbl_staffs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
