-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2013 at 03:10 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(24) NOT NULL,
  `password` varchar(64) NOT NULL,
  `active` int(1) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `email` varchar(60) NOT NULL,
  `full_name` varchar(65) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user`, `password`, `active`, `sex`, `email`, `full_name`, `birthday`) VALUES
(61, 'kutalia', '3e3fcb004b8f83a252ee131d854b2cd99f7a51f7', 0, 'M', 'kutaliatato@gmail.com', 'Merabi Kutalia', '1993-10-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
