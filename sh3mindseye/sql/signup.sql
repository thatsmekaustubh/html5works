-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2015 at 08:21 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sh3mindseye`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teamname` varchar(100) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `prjdesc` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `teamname`, `eventname`, `prjdesc`) VALUES
(5, 'areeresdsadas', 'sdas@gmail.com', 'tempadu', 'edcStartupExpo', 'sadsad asdsada sadsa'),
(6, 'areeresdsadas', 'sdas@gmail.com', 'tempadusdsad', 'edcStartupExpo', 'sadsad asdsada sadsa'),
(7, 'areeresdsadas', 'sdas@gmail.com', 'tempadusdsadasd', 'edcStartupExpo', 'sadsad asdsada sadsa'),
(8, '', '', '', '', ''),
(9, 'areeresdsadas', 'sdas@gmail.com', 'tempadusdsadassadd', 'edcStartupExpo', 'sadsad asdsada sadsa');
