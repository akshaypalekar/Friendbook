-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2014 at 06:37 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `friendbook`
--
CREATE DATABASE IF NOT EXISTS `friendbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `friendbook`;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` varchar(20) DEFAULT NULL,
  `to_id` varchar(20) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`id`, `from_id`, `to_id`, `status`) VALUES
(2, '1', '2', 0),
(3, '1', '3', 0),
(4, '1', '4', 0),
(6, '6', '5', 0),
(8, '6', '1', 0),
(11, '7', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `work_no` varchar(10) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sr_no`, `fname`, `lname`, `email`, `password`, `day`, `month`, `year`, `gender`, `image`, `mob`, `work_no`, `occupation`, `college`, `school`, `skills`, `city`) VALUES
(1, 'q', 'q', 'a@k.k', 'qqqqqqq', 1, 1, 1, 'female', 'images/Photo-0016.jpg', '1234567890', '0225487594', 'qc', 'qc c', 'a', 'aaa', 'Mumbai'),
(2, 'a', 'a', 'abc@s.com', '123456', 2, 2, 2, 'mame', 'images\\default.jpg', '0', '0', '', '', '', '', ''),
(3, 'b', 'b', 'pqr@d.com', '222222', 3, 3, 3, 'female', 'images\\default.jpg', '0', '0', '', '', '', '', ''),
(4, 'b', 'b', 'pqrcf@ad.ascuh', 'asCvaaV', 2, 2, 2, 'male', 'images\\default.jpg', '0', '0', '', '', '', '', ''),
(5, 'b', 'b', 'pqrcf@ad.ascuh', 'asCvaaV', 2, 2, 2, 'male', 'images\\default.jpg', '0', '0', '', '', '', '', ''),
(6, 'd', 'd', 'hbj@ct.fv', NULL, NULL, NULL, NULL, NULL, 'images\\default.jpg', '', '', '', '', '', '', ''),
(7, 'n', 'n', 'cabih@ncj.dsh', NULL, NULL, NULL, NULL, NULL, 'images\\default.jpg', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
