-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 12:54 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`) VALUES
(1, 'Class 10'),
(2, 'Class 9'),
(3, 'Class 12'),
(4, 'Class 8');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_name`) VALUES
(1, 'RU School'),
(2, 'School 2'),
(3, 'School 3'),
(4, 'School 5'),
(5, 'SHcool 10'),
(6, 'School 340'),
(7, 'School 340');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `email`, `class_id`, `school_id`, `gender`, `address`) VALUES
(43, 'asdsad', 123456, 'asdasd@asdsad.com', 1, 2, 'Male', ''),
(47, 'Kushal', 131231, 'm.r.kushal@gmail.com', 1, 2, 'Male', 'H. No- 249, Haragram, Court Station Road, Rajpara, Rajshahi -6201'),
(33, 'rahman', 123459, 'testttttttttttttt@gmail.com', 1, 1, 'Male', 'asdasdsad'),
(40, 'dasd', 23445, 'sdasadasd', 1, 1, 'M', 'sdfdsfds'),
(42, 'zzzzzzzzzz', 453459, 'asdasd@asdsad.com', 1, 2, 'Male', ''),
(44, 'dfgfdg', 123456, 'asdasd@asdsad.com', 2, 1, 'Male', 'dfgfd'),
(46, 'student new ', 123456, 'michealwagon@gmail.com', 4, 2, 'Female', 'sdfsfsdfdsf'),
(48, 'New Name', 111111, 'aaaaa@bbbb.ccc', 1, 1, 'Male', 'New Address');

-- --------------------------------------------------------

--
-- Table structure for table `student_subjects`
--

CREATE TABLE `student_subjects` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_subjects`
--

INSERT INTO `student_subjects` (`id`, `student_id`, `subject_id`) VALUES
(80, 39, 4),
(79, 39, 2),
(78, 39, 1),
(129, 47, 2),
(100, 27, 1),
(99, 46, 7),
(98, 46, 6),
(29, 34, 2),
(28, 34, 1),
(27, 33, 4),
(26, 33, 3),
(25, 33, 2),
(24, 33, 1),
(30, 34, 3),
(31, 34, 4),
(32, 34, 5),
(33, 34, 6),
(39, 35, 1),
(40, 35, 2),
(41, 35, 3),
(84, 42, 1),
(85, 42, 6),
(86, 42, 2),
(97, 46, 1),
(128, 47, 7),
(102, 27, 5),
(101, 27, 6),
(127, 47, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`) VALUES
(1, 'Bangla'),
(2, 'English'),
(3, 'Math'),
(4, 'Physics'),
(5, 'Chemistry'),
(6, 'Biology'),
(7, 'Computer'),
(8, 'Stat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_subjects`
--
ALTER TABLE `student_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `student_subjects`
--
ALTER TABLE `student_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
