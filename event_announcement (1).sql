-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 12:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_announcement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `password`) VALUES
(1, 'rahulkore976', 'c06ab99c45303fa3d1df19492eb3a355'),
(2, 'bhupeshpatil', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'akshaynaikwadi', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `stu_id` int(11) NOT NULL,
  `stu_name` text NOT NULL,
  `roll_no` text NOT NULL,
  `year` text NOT NULL,
  `branch` text NOT NULL,
  `division` text NOT NULL,
  `phone_no` text NOT NULL,
  `email_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `seats` int(11) NOT NULL,
  `e_duration` text NOT NULL,
  `e_venue` text NOT NULL,
  `e_date` date NOT NULL,
  `event_by` text NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `seats`, `e_duration`, `e_venue`, `e_date`, `event_by`, `admin_id`) VALUES
(6, 'protocol 1.0', 200, '5 hours', 'auditorium', '2018-10-10', 'csi-vit', 1),
(7, 'android development', 100, '3 hours', 'm-201', '2018-10-11', 'cesa-vit', 2),
(9, 'linkedIN', 150, '1 hour', 'm-202', '2018-10-17', 'cesa-vit', 1),
(10, 'python gaming', 50, '5 hours', 'auditorium', '2018-10-18', 'ieee-vit', 1),
(11, 'music workshop', 69, '2 hours', 'auditorium', '2018-10-20', 'csi-vit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_attendies`
--

CREATE TABLE `event_attendies` (
  `event_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_attendies`
--

INSERT INTO `event_attendies` (`event_id`, `stu_id`) VALUES
(6, 1),
(6, 2),
(6, 3),
(7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stu_id` int(11) NOT NULL,
  `stu_name` text NOT NULL,
  `roll_no` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `division` varchar(10) NOT NULL,
  `phone_no` text NOT NULL,
  `email_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_id`, `stu_name`, `roll_no`, `year`, `branch`, `division`, `phone_no`, `email_id`) VALUES
(1, 'rahul kore', '16102A0031', 'TE', 'CMPN', 'A', '9552139510', 'rahulkore976@gmail.com'),
(2, 'akshay naikwdi', '16102A0024', 'TE', 'CMPN', 'A', '1234567896', 'akshay@gmail.com'),
(3, 'bhupesh patil', '16102A0018', 'TE', 'CMPN', 'A', '7894561231', 'bhups@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `students_admin`
--

CREATE TABLE `students_admin` (
  `admin_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_admin`
--

INSERT INTO `students_admin` (`admin_id`, `stu_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `event_attendies`
--
ALTER TABLE `event_attendies`
  ADD PRIMARY KEY (`event_id`,`stu_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `students_admin`
--
ALTER TABLE `students_admin`
  ADD PRIMARY KEY (`admin_id`,`stu_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `event_attendies`
--
ALTER TABLE `event_attendies`
  ADD CONSTRAINT `event_attendies_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`),
  ADD CONSTRAINT `event_attendies_ibfk_2` FOREIGN KEY (`stu_id`) REFERENCES `students` (`stu_id`);

--
-- Constraints for table `students_admin`
--
ALTER TABLE `students_admin`
  ADD CONSTRAINT `students_admin_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `students` (`stu_id`),
  ADD CONSTRAINT `students_admin_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
