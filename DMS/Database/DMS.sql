-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 01:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities_problem`
--

CREATE TABLE `facilities_problem` (
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

CREATE TABLE `facility_problem` (
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
  `total_sol` int(20) DEFAULT NULL
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

CREATE TABLE `floor` (
  `Floor_Number` varchar(10) NOT NULL,
  `Block` varchar(10) NOT NULL,
  `Num_of_Kitchen` int(5) NOT NULL,
  `Num_of_Room` int(5) NOT NULL,
  `Num_of_Washroom` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`Floor_Number`, `Block`, `Num_of_Kitchen`, `Num_of_Room`, `Num_of_Washroom`) VALUES
('1/A', 'A', 4, 100, 20),
('2/B', 'B', 6, 150, 30),
('1/B', 'B', 43, 321, 1),
('4', 'A', 2, 40, 3),
('3', 'B', 3, 20, 5),
('1', 'A', 3, 22, 2),
('6', 'B', 7, 43, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `H_ID` int(11) NOT NULL,
  `H_Name` varchar(250) NOT NULL,
  `T_Seat` int(11) NOT NULL,
  `A_Seat` int(11) NOT NULL,
  `N_Student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`H_ID`, `H_Name`, `T_Seat`, `A_Seat`, `N_Student`) VALUES
(1, 'Mir Mosharraf Hossain Hall', 800, 50, 750),
(2, 'Shaheed Salam-Barkat Hall', 400, 0, 400),
(3, 'Bangabandhu Sheikh Mujibur Rahman Hall', 500, 10, 490),
(4, 'Al Beruni Hall', 400, 50, 350),
(5, 'Shaheed Rafiq-Jabbar Hall', 500, 0, 500),
(6, 'A F M Kamaluddin Hall', 400, 100, 300),
(7, 'Mowlana Bhashani Hall', 600, 200, 400),
(8, 'Bishwakabi Rabindranath Tagore Hall', 400, 0, 400),
(9, 'Jahanara Imam Hall', 200, 50, 150),
(10, 'Nawab Faizunnesa Hall', 100, 20, 80),
(11, 'Pritilata Hall', 300, 60, 240),
(12, 'Fazilatunnesa Hall', 150, 50, 100),
(13, 'Begum Khaleda Zia Hall', 400, 100, 300),
(14, 'Sheikh Hasina Hall', 500, 100, 400),
(15, 'Bangamata Begum Fazilatunnessa Mujib Hall', 600, 100, 500),
(16, 'Begum Sufia Kamal Hall', 400, 20, 380);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `message_table`
--

CREATE TABLE `message_table` (
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `id`, `type`, `quantity`) VALUES
(1, 'Md. Shakil Hossain ', 2023, 'breakfast', 1),
(5, 'Zamshed Ikbal', 1997, 'dinner', 2),
(6, 'Mahbubur Rahman', 2024, 'launch', 1);

-- --------------------------------------------------------

--
-- Table structure for table `provost`
--

CREATE TABLE `provost` (
  `P_ID` int(10) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL
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

CREATE TABLE `room` (
  `Room_Number` int(20) NOT NULL,
  `Num_of_Table` int(15) NOT NULL,
  `Num_of_Bed` int(5) NOT NULL,
  `Floor_Number` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_Number`, `Num_of_Table`, `Num_of_Bed`, `Floor_Number`) VALUES
(101, 4, 2, '4/A'),
(102, 3, 2, '4/B'),
(103, 2, 4, '1/B'),
(104, 4, 3, '2/A'),
(105, 4, 4, '5/B'),
(504, 3, 2, '5/B'),
(234, 4, 4, '2/A'),
(320, 1, 4, '3/A'),
(410, 3, 4, '4/B');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `S_ID` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`S_ID`, `Name`, `Address`, `Email`, `Designation`) VALUES
(4001, 'motiur', 'Gerua, Savar', 'motiur.staff@juniv.edu', 'Office Assistant'),
(102, 'Shohid', 'Ju', 'example@gmail.com', 'Staff'),
(291, 'Shohel Rana', 'JU, Savar, Dhaka', 'sohel@gmail.com', 'Officer');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Stu_id` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Session` varchar(20) NOT NULL,
  `hall` varchar(250) NOT NULL,
  `Room_Number` int(10) NOT NULL,
  `Floor_Number` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stu_id`, `Name`, `Department`, `Session`, `hall`, `Room_Number`, `Floor_Number`) VALUES
(2023, 'Md. Shakil Hossain', 'IIT', '2018-2019', 'RTH', 406, '4/B'),
(1234, 'Md. Solaiman Ali', 'IR', '2019-2020', 'RTH', 501, '5/B'),
(2024, 'Mahbubur Rahman', 'IIT', '2018-2019', 'RTH', 104, '1/B'),
(2022, 'Ashfaqur Rahman Tokee', 'IIT', '2018-2019', 'SRJ', 234, '2/A'),
(2026, 'Mahfuz', 'CSE', '2018-2019', 'AFH', 309, '3/A'),
(2028, 'Nahidul Islam', 'IIT', '2018-2019', 'RTH', 104, '1/B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facility_problem`
--
ALTER TABLE `facility_problem`
  ADD PRIMARY KEY (`Room_Number`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`Floor_Number`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `provost`
--
ALTER TABLE `provost`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_Number`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
