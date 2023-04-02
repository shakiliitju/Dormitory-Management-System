-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2022 at 06:59 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities_problem`
--

DROP TABLE IF EXISTS `facilities_problem`;
CREATE TABLE IF NOT EXISTS `facilities_problem` (
  `Room_Number` int(5) NOT NULL,
  `Vacant_Seat` int(3) NOT NULL,
  `Damaged_Fan` int(3) NOT NULL,
  `Damaged_Light` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities_problem`
--

INSERT INTO `facilities_problem` (`Room_Number`, `Vacant_Seat`, `Damaged_Fan`, `Damaged_Light`) VALUES
(101, 1, 2, 1),
(102, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facility_problem`
--

DROP TABLE IF EXISTS `facility_problem`;
CREATE TABLE IF NOT EXISTS `facility_problem` (
  `Room_Number` int(11) NOT NULL,
  `Damaged_Fan_Un` int(11) NOT NULL,
  `Damaged_Fan_Pro` int(11) NOT NULL,
  `Damaged_Fan_Sol` int(11) NOT NULL,
  `Damaged_Light_Un` int(11) NOT NULL,
  `Damaged_Light_Pro` int(11) NOT NULL,
  `Damaged_Light_Sol` int(11) NOT NULL,
  `Modified_Date` date NOT NULL,
  `total_uv` int(20) DEFAULT NULL,
  `total_pro` int(20) DEFAULT NULL,
  `total_sol` int(20) DEFAULT NULL,
  PRIMARY KEY (`Room_Number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility_problem`
--

INSERT INTO `facility_problem` (`Room_Number`, `Damaged_Fan_Un`, `Damaged_Fan_Pro`, `Damaged_Fan_Sol`, `Damaged_Light_Un`, `Damaged_Light_Pro`, `Damaged_Light_Sol`, `Modified_Date`, `total_uv`, `total_pro`, `total_sol`) VALUES
(101, 2, 3, 4, 5, 34, 4, '2022-01-04', NULL, NULL, NULL),
(234, 1, 2, 3, 4, 5, 6, '2022-01-26', NULL, NULL, NULL),
(321, 3, 2, 5, 1, 3, 2, '2022-01-26', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

DROP TABLE IF EXISTS `floor`;
CREATE TABLE IF NOT EXISTS `floor` (
  `Floor_Number` varchar(10) NOT NULL,
  `Block` varchar(10) NOT NULL,
  `Num_of_Kitchen` int(5) NOT NULL,
  `Num_of_Room` int(5) NOT NULL,
  `Num_of_Washroom` int(5) NOT NULL,
  PRIMARY KEY (`Floor_Number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`Floor_Number`, `Block`, `Num_of_Kitchen`, `Num_of_Room`, `Num_of_Washroom`) VALUES
('1/A', 'A', 4, 100, 20),
('2/B', 'B', 6, 150, 30),
('1/B', 'B', 43, 321, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message_table`
--

DROP TABLE IF EXISTS `message_table`;
CREATE TABLE IF NOT EXISTS `message_table` (
  `Stu_ID` int(20) DEFAULT NULL,
  `Name` varchar(20) NOT NULL,
  `Room_Num` varchar(20) DEFAULT NULL,
  `Messages` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_table`
--

INSERT INTO `message_table` (`Stu_ID`, `Name`, `Room_Num`, `Messages`) VALUES
(2013, 'Shakil Ahmed', '125/A', 'problem a fan and light'),
(2090, 'Amit Azim', '125/A', 'Door problem'),
(2090, 'Amit Azim', '125/A', 'Door problem');

-- --------------------------------------------------------

--
-- Table structure for table `provost`
--

DROP TABLE IF EXISTS `provost`;
CREATE TABLE IF NOT EXISTS `provost` (
  `P_ID` int(10) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provost`
--

INSERT INTO `provost` (`P_ID`, `Phone`, `Name`, `Address`, `Email`, `Designation`) VALUES
(500001, '0169696969', 'Muzibur Rahman', 'Islampur Thana More, Islampur, Jamalpur', 'muzibur@juniv.edu', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `Room_Number` int(20) NOT NULL,
  `Num_of_Table` int(15) NOT NULL,
  `Num_of_Bed` int(5) NOT NULL,
  `Floor_Number` varchar(30) NOT NULL,
  PRIMARY KEY (`Room_Number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_Number`, `Num_of_Table`, `Num_of_Bed`, `Floor_Number`) VALUES
(101, 4, 2, '4/A'),
(102, 3, 2, '4/B');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `S_ID` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`S_ID`, `Name`, `Address`, `Email`, `Designation`) VALUES
(4001, 'motiur', 'Gerua, Savar', 'motiur.staff@juniv.edu', 'Office Assistant');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Stu_id` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Session` varchar(20) NOT NULL,
  `Room_Number` int(10) NOT NULL,
  `Floor_Number` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stu_id`, `Name`, `Department`, `Session`, `Room_Number`, `Floor_Number`) VALUES
(102, 'Monir', 'CSE', '2018-2019', 112, '3/C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
