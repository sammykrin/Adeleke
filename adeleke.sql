-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 11:02 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adeleke`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `admin_id` int(1) NOT NULL,
  `name` varchar(10) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`admin_id`, `name`, `mail`, `password`) VALUES
(1, 'admin', 'adelekeuni@gmail.com', '888eb2153685f23db4b14d3dbdbd93d951e912b3');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `bed_id` int(10) NOT NULL,
  `bed_type` varchar(40) NOT NULL,
  `bunk_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`bed_id`, `bed_type`, `bunk_name`) VALUES
(1, 'Upper-Bed 1', 'Bunk-1'),
(2, 'Upper-Bed 1', 'Bunk-1');

-- --------------------------------------------------------

--
-- Table structure for table `bed_history`
--

CREATE TABLE `bed_history` (
  `history_id` int(10) NOT NULL,
  `student_info` int(10) NOT NULL,
  `entry_date` date NOT NULL,
  `exist-date` date DEFAULT NULL,
  `bed_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed_history`
--

INSERT INTO `bed_history` (`history_id`, `student_info`, `entry_date`, `exist-date`, `bed_id`) VALUES
(1, 1, '2001-02-19', NULL, 1),
(2, 2, '2001-02-19', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bunk`
--

CREATE TABLE `bunk` (
  `bulk_id` int(10) NOT NULL,
  `bunk_name` varchar(40) NOT NULL,
  `room_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bunk`
--

INSERT INTO `bunk` (`bulk_id`, `bunk_name`, `room_name`) VALUES
(1, 'Bunk-1', 'A~BLOCK'),
(2, 'Bunk-1', 'A~BLOCK');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostel_id` int(10) NOT NULL,
  `hostel_name` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `hostel_name`, `gender`) VALUES
(1, 'Samuel Hostel', 'female'),
(2, 'Samuel Hostel', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(10) NOT NULL,
  `room_name` varchar(40) NOT NULL,
  `hostel_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `hostel_name`) VALUES
(1, 'A~BLOCK', 'Samuel Hostel'),
(2, 'A~BLOCK', 'Samuel Hostel');

-- --------------------------------------------------------

--
-- Table structure for table `student_info_db`
--

CREATE TABLE `student_info_db` (
  `student_info` int(1) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Matric_No` varchar(10) NOT NULL,
  `Level` varchar(10) NOT NULL,
  `D_O_B` varchar(10) NOT NULL,
  `Religion_Denomination` varchar(30) NOT NULL,
  `Home_Address` varchar(30) NOT NULL,
  `Email_Address` varchar(40) NOT NULL,
  `Student_Phone_No` varchar(11) NOT NULL,
  `Parent_Phone_No` varchar(11) NOT NULL,
  `passport` varchar(300) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `Choose_Hostel` varchar(40) NOT NULL,
  `Room_Tags` varchar(40) NOT NULL,
  `Room_NO` varchar(40) NOT NULL,
  `Bunk_Type` varchar(10) NOT NULL,
  `Bed_Type` varchar(40) NOT NULL,
  `time` varchar(10) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info_db`
--

INSERT INTO `student_info_db` (`student_info`, `Name`, `Course`, `Matric_No`, `Level`, `D_O_B`, `Religion_Denomination`, `Home_Address`, `Email_Address`, `Student_Phone_No`, `Parent_Phone_No`, `passport`, `gender`, `Choose_Hostel`, `Room_Tags`, `Room_NO`, `Bunk_Type`, `Bed_Type`, `time`, `dates`) VALUES
(1, 'samuel', 'comp sci', '15/0381', '400', '1998', 'cheu', 'peacevilaa', 'ola@gmail.com', '08102938475', '09874657894', '20180805_111240.jpg', 'female', 'Samuel Hostel', 'A~BLOCK', '1', 'Bunk-1', 'Upper-Bed 1', '10:02:04am', '2001-02-19'),
(2, 'olamidepapa', 'mass com', '2020', '300', '1980', 'musl', 'apapa', 'olamide@gmail.com', '89726354763', '76534267829', 'Ebere3.jpg', 'female', 'Samuel Hostel', 'A~BLOCK', '1', 'Bunk-1', 'Upper-Bed 1', '11:02:00am', '2001-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg_db`
--

CREATE TABLE `student_reg_db` (
  `student_id` int(4) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `matric_no` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `confrim_password` varchar(40) NOT NULL,
  `city` varchar(18) DEFAULT NULL,
  `country` varchar(29) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg_db`
--

INSERT INTO `student_reg_db` (`student_id`, `name`, `email`, `matric_no`, `password`, `confrim_password`, `city`, `country`) VALUES
(1, 'olamilehin samuel olamide', 'olamilehinsamuelolamide@gmail.com', '15/0381', '793f970c52ded1276b9264c742f19d1888cbaf73', '793f970c52ded1276b9264c742f19d1888cbaf73', NULL, NULL),
(2, 'olamide', 'olamide@gmail.com', '2020', '793f970c52ded1276b9264c742f19d1888cbaf73', '793f970c52ded1276b9264c742f19d1888cbaf73', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`bed_id`),
  ADD KEY `bed_type` (`bed_type`),
  ADD KEY `bunk_name` (`bunk_name`);

--
-- Indexes for table `bed_history`
--
ALTER TABLE `bed_history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `student_id` (`student_info`),
  ADD KEY `bed_id` (`bed_id`);

--
-- Indexes for table `bunk`
--
ALTER TABLE `bunk`
  ADD PRIMARY KEY (`bulk_id`),
  ADD KEY `bunk_name` (`bunk_name`),
  ADD KEY `room_name` (`room_name`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`),
  ADD KEY `hostel_name` (`hostel_name`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_name` (`room_name`),
  ADD KEY `hostel_name` (`hostel_name`),
  ADD KEY `hostel_name_2` (`hostel_name`);

--
-- Indexes for table `student_info_db`
--
ALTER TABLE `student_info_db`
  ADD PRIMARY KEY (`student_info`),
  ADD UNIQUE KEY `Matric_No` (`Matric_No`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`),
  ADD UNIQUE KEY `Student_Phone_No` (`Student_Phone_No`),
  ADD UNIQUE KEY `Parent_Phone_No` (`Parent_Phone_No`),
  ADD KEY `Parent_Phone_No_2` (`Parent_Phone_No`);

--
-- Indexes for table `student_reg_db`
--
ALTER TABLE `student_reg_db`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `matric no` (`matric_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `admin_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `bed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bed_history`
--
ALTER TABLE `bed_history`
  MODIFY `history_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bunk`
--
ALTER TABLE `bunk`
  MODIFY `bulk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `hostel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student_info_db`
--
ALTER TABLE `student_info_db`
  MODIFY `student_info` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student_reg_db`
--
ALTER TABLE `student_reg_db`
  MODIFY `student_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed`
--
ALTER TABLE `bed`
  ADD CONSTRAINT `bed_ibfk_1` FOREIGN KEY (`bunk_name`) REFERENCES `bunk` (`bunk_name`) ON DELETE CASCADE;

--
-- Constraints for table `bed_history`
--
ALTER TABLE `bed_history`
  ADD CONSTRAINT `bed_history_ibfk_1` FOREIGN KEY (`student_info`) REFERENCES `student_info_db` (`student_info`) ON DELETE CASCADE;

--
-- Constraints for table `bunk`
--
ALTER TABLE `bunk`
  ADD CONSTRAINT `bunk_ibfk_1` FOREIGN KEY (`room_name`) REFERENCES `room` (`room_name`) ON DELETE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hostel_name`) REFERENCES `hostel` (`hostel_name`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
