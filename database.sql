-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2018 at 12:34 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ivao`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE IF NOT EXISTS `availability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dates` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL DEFAULT 'No remarks',
  `last_edit` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `vid`, `month`, `year`, `name`, `dates`, `remarks`, `last_edit`) VALUES
(1, 506109, 7, 2018, 'Leonard Selvaraja', '3,4,8,15,22,29', 'On 8th, only available in the afternoon. Rest all days, available in the evening.', '2018-07-02 16:53:44'),
(2, 275220, 7, 2018, 'Karan Malik', 'leave', 'No remarks', '2018-07-02 16:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE IF NOT EXISTS `trainers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_privledge` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `ivao_email` varchar(25) NOT NULL,
  `personal_email` varchar(25) NOT NULL,
  `vid` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `staff_privledge`, `firstname`, `lastname`, `ivao_email`, `personal_email`, `vid`) VALUES
(1, 'IN-TA1', 'Leonard', 'Selvaraja', 'in-ta1@ivao.aero', 'kashrayks@gmail.com', 506109),
(2, 'IN-TA2', 'Jiffry', 'Shaheem', 'in-ta2@ivao.aero', 'kashrayks@gmail.com', 1231232),
(3, 'IN-ADIR', 'Karan', 'Malik', 'in-adir@ivao.aero', 'karan.malik@gmail.com', 275220);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
