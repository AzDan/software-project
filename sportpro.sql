-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2019 at 02:19 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

DROP TABLE IF EXISTS `entry`;
CREATE TABLE IF NOT EXISTS `entry` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `event` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `class` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `event`, `type`, `username`, `email`, `class`, `contact`) VALUES
(1, 'hocky', 'indoor', 'vaibhav gaikwad', 'abc@gmail.com', 'd15', '8149316305'),
(2, 'cricket', 'indoor', 'vaibhav gaikwad', 'abc@gmail.com', 'd15', '1212121212'),
(3, 'cricket', 'indoor', 'kalpesh deepak juvekar', 'kalpesh.juvekar@ves.ac.in', 'd14', '8149316305'),
(4, 'cricket', 'indoor', 'aniket nighot', 'aniket@gmail.com', 'd13', '7854125478'),
(5, 'hocky', 'indoor', 'kalpesh deepak juvekar', 'kalpesh.juvekar@ves.ac.in', 'd13', '8149316305'),
(6, 'hocky', 'indoor', 'aniket nighot', 'aniket@gmail.com', 'd11', '4141414141'),
(7, 'tennis', 'outdoor', 'jai hinduja', 'jai@gmail.com', 'd13', '1212122121'),
(8, 'cricket', 'outdoor', 'jai hinduja', 'jai@gmail.com', 'd13', '1212122121'),
(9, 'football', 'outdoor', 'jai hinduja', 'jai@gmail.com', 'd13', '1212122121');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `type`, `description`, `start_date`, `end_date`, `time`, `status`) VALUES
(1, 'cricket', 'indoor', 'abc', '2017-04-07', '2017-04-06', '00:02:00', 'end'),
(3, 'hocky', 'indoor', 'abcd', '0000-00-00', '0000-00-00', '00:00:11', 'ongoing'),
(18, 'tennis', 'outoor', 'this is multiplayer game', '2017-04-05', '2017-04-22', '05:00:00', 'ongoing'),
(19, 'football', 'outoor', 'fb', '2017-04-11', '2017-04-06', '12:12:00', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `class` varchar(10) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`, `class`, `fname`, `lname`) VALUES
('20164126', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'vrocks98@gmail.com', 'cse', 'Shryesh', 'Khandelwal');

-- --------------------------------------------------------

--
-- Table structure for table `result1`
--

DROP TABLE IF EXISTS `result1`;
CREATE TABLE IF NOT EXISTS `result1` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(30) NOT NULL,
  `win1` varchar(30) NOT NULL,
  `w1class` varchar(10) NOT NULL,
  `win2` varchar(30) NOT NULL,
  `w2class` varchar(10) NOT NULL,
  `win3` varchar(30) NOT NULL,
  `w3class` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result1`
--

INSERT INTO `result1` (`id`, `eventname`, `win1`, `w1class`, `win2`, `w2class`, `win3`, `w3class`) VALUES
(3, 'football', 'vaibhav gaikwad', 'd15', 'jai hinduja', 'd13', 'aniket', 'd14'),
(4, 'cricket', 'vaibhav gaikwad', 'd15', 'jai hinduja', 'd13', 'kalpesh deepak juvekar', 'd13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
