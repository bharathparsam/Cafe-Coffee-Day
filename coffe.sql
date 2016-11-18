-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2015 at 07:09 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coffe`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` varchar(200) NOT NULL,
  `choosebeans` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `numberofbags` int(11) DEFAULT NULL,
  `arrivaldate` date DEFAULT NULL,
  `catalog` varchar(200) DEFAULT NULL,
  `gift` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `choosebeans`, `type`, `numberofbags`, `arrivaldate`, `catalog`, `gift`, `name`, `address`, `city`, `state`, `zip`, `phone`, `comments`) VALUES
('16474242', 'kenyan', 'ground', 5, '2015-10-20', '', NULL, 'Sharth Parsam', 'VIT VEllore', 'vellore', 'Tamil Nadu', 632014, 2147483647, 'Send soon'),
('40721917', 'kenyan', 'whole', 3, '2015-10-20', 'catalog', NULL, 'Bharath Parsam', '21,Chittoor', 'Palamaner', 'Andhra Pradesh', 632014, 2147483647, 'Comments!!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
