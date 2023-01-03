-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2021 at 06:07 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccsitjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyemail` varchar(250) NOT NULL,
  `post` varchar(250) NOT NULL,
  `qualification` varchar(250) NOT NULL,
  `basicsalary` varchar(250) NOT NULL,
  `experience` varchar(250) NOT NULL,
  `interviewdate` varchar(250) NOT NULL,
  `interviewtime` varchar(250) NOT NULL,
  `interviewlocation` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companydetails`
--

DROP TABLE IF EXISTS `companydetails`;
CREATE TABLE IF NOT EXISTS `companydetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `contactno` varchar(250) NOT NULL,
  `licenseno` varchar(250) NOT NULL,
  `file` longblob NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `bio` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companylogin`
--

DROP TABLE IF EXISTS `companylogin`;
CREATE TABLE IF NOT EXISTS `companylogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'Not_verified',
  `activation_code` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'Not_verified',
  `activation_code` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE IF NOT EXISTS `userdetails` (
  `email` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `cno` varchar(150) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `ugcourse` varchar(250) NOT NULL,
  `ugcollege` varchar(250) NOT NULL,
  `uguniversity` varchar(250) NOT NULL,
  `ugmark` varchar(250) NOT NULL,
  `pgcourse` varchar(250) NOT NULL,
  `pgmark` varchar(250) NOT NULL,
  `file` longblob NOT NULL,
  `skill` varchar(250) NOT NULL,
  `langknown` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT '0',
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
