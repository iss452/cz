-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2014 at 10:00 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cz_members`
--

-- --------------------------------------------------------

--
-- Table structure for table `cz_members4`
--

CREATE TABLE IF NOT EXISTS `cz_members4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `chineseName` varchar(50) DEFAULT NULL,
  `sign` varchar(12) DEFAULT NULL,
  `element` varchar(10) DEFAULT NULL,
  `compatible` varchar(50) DEFAULT NULL,
  `YinYang` varchar(5) DEFAULT NULL,
  `personality` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `passwordHash` varchar(50) DEFAULT NULL,
  `passwordSalt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `cz_members4`
--

INSERT INTO `cz_members4` (`id`, `firstName`, `lastName`, `chineseName`, `sign`, `element`, `compatible`, `YinYang`, `personality`, `image`, `userName`, `passwordHash`, `passwordSalt`) VALUES
(3, 'Joe', 'Schmoe', '', '', '', '', '', '', '', 'dkokoska+joe@maine.edu', 'a3004aee382bc9cc0fce9bc3afa26d11', '7a13d7618a9df90bcc4f486792403c4f'),
(93, 'Some', 'Student', '', NULL, NULL, NULL, NULL, NULL, NULL, 'some.student@maine.edu', 'd86c5f5a4d9f434f94a83c38b30e6d59', '9ffc7a03c1959674fa8c0a7369460097');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
