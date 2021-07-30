-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2021 at 12:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `regdate` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `username`, `email`, `regdate`, `modified`, `password`) VALUES
(1, 'group', 'five', 'admin', 'admin@a.a', '2021-07-29 15:32:33', '2021-07-29 15:32:33', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `msg_id` int(11) NOT NULL,
  `usr_name` varchar(25) NOT NULL,
  `usr_email` varchar(25) NOT NULL,
  `usr_msg` varchar(255) NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `faculty`, `modified`) VALUES
(1, 'Computer science', 'science', '2021-07-29 15:33:32'),
(2, 'Information technology', 'science', '2021-07-29 15:33:48'),
(3, 'science general', 'science', '2021-07-29 15:34:03'),
(4, 'business administration', 'Business Admin and Management', '2021-07-29 15:34:50'),
(5, 'procurement', 'Business Admin and Management', '2021-07-29 15:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `regnum` varchar(30) DEFAULT NULL,
  `studentnum` varchar(30) DEFAULT NULL,
  `year` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `regdate` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `username`, `regnum`, `studentnum`, `year`, `course`, `semester`, `email`, `regdate`, `modified`, `password`) VALUES
(1, 'testuser', 'student ', 'studentone', '2019-B038-10002', '1800500955', 'One', 'Computer science', 'One', 'stud@u.u', '2021-07-29 16:26:29', '2021-07-30 13:38:26', '202cb962ac59075b964b07152d234b70'),
(2, 'student', 'two', 'studenttwo', '2018-B018-30003', '1800500944', 'Two', 'Information technology', 'One', 'stud1@u.u', '2021-07-29 16:27:27', '2021-07-29 16:27:27', '202cb962ac59075b964b07152d234b70'),
(3, 'student', 'three', 'studentthree', '2019-B038-10045', '1800930955', 'One', 'Computer science', 'One', 'stud2@u.u', '2021-07-29 16:28:07', '2021-07-29 16:28:07', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(6) UNSIGNED NOT NULL,
  `unit` varchar(30) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `yearofstudy` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `tutor` varchar(20) DEFAULT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `unit`, `venue`, `yearofstudy`, `semester`, `course`, `day`, `starttime`, `endtime`, `tutor`, `modified`) VALUES
(1, 'introduction to IT', 'Lab 1', 'One', 'One', 'Computer science', 'Monday', '07:00:00', '00:00:00', 'Random tom', '2021-07-29 16:34:33'),
(2, 'introduction to IT', 'Lab 1', 'One', 'One', 'Computer science', 'Monday', '08:00:00', '00:00:00', 'Random tom', '2021-07-29 17:02:01'),
(3, 'Programing methods', 'Lab 2', 'One', 'One', 'Information technology', 'Monday', '07:00:00', '00:00:00', 'tutor3', '2021-07-29 19:57:31'),
(4, 'Programing methods', 'Lab 2', 'One', 'One', 'Information technology', 'Monday', '08:00:00', '00:00:00', 'tutor3', '2021-07-29 19:58:19'),
(5, 'Programing methods', 'Lab 2', 'One', 'One', 'Information technology', 'Monday', '09:00:00', '00:00:00', 'tutor3', '2021-07-29 20:07:31'),
(6, 'introduction to IT', 'Lab 1', 'One', 'One', 'Computer science', 'Tuesday', '07:00:00', '00:00:00', 'Random tom', '2021-07-29 20:09:33'),
(12, 'information security', 'Bsc lab', 'Two', 'One', 'Information technology', 'Monday', '11:00:00', '00:00:00', 'tutor3', '2021-07-30 10:26:23'),
(14, 'introduction to business', 'Room 3', 'One', 'One', 'business administration', 'Monday', '07:00:00', '00:00:00', 'bamwine', '2021-07-30 10:31:39'),
(15, 'introduction to business', 'Room 3', 'One', 'One', 'business administration', 'Monday', '08:00:00', '00:00:00', 'bamwine', '2021-07-30 10:32:36'),
(16, 'Principles of programing', 'Lab 1', 'One', 'One', 'Computer science', 'Thursday', '10:00:00', '00:00:00', 'tech guy', '2021-07-30 10:33:44'),
(17, 'Principles of programing', 'Lab 1', 'One', 'One', 'Computer science', 'Thursday', '11:00:00', '00:00:00', 'tech guy', '2021-07-30 10:34:10'),
(18, 'Fundamentals of networking', 'Lab 1', 'One', 'One', 'Computer science', 'Wednesday', '02:00:00', '00:00:00', 'adfer', '2021-07-30 10:34:37'),
(19, 'Fundamentals of networking', 'Lab 1', 'One', 'One', 'Computer science', 'Wednesday', '03:00:00', '00:00:00', 'adfer', '2021-07-30 10:34:59'),
(20, 'Principles of programing', 'Room 4', 'One', 'One', 'Computer science', 'Monday', '02:00:00', '00:00:00', 'tech guy', '2021-07-30 10:35:41'),
(22, 'Fundamentals of networking', 'Lab 1', 'One', 'One', 'Computer science', 'Friday', '07:00:00', '00:00:00', 'adfer', '2021-07-30 10:43:30'),
(23, 'information security', 'Lab 2', 'Two', 'One', 'Information technology', 'Monday', '12:00:00', '00:00:00', 'tutor3', '2021-07-30 13:04:20'),
(24, 'marketing in IT', 'Room 2', 'Two', 'One', 'Information technology', 'Wednesday', '07:00:00', '00:00:00', 'test tutor', '2021-07-30 13:04:47'),
(25, 'marketing in IT', 'Room 2', 'Two', 'One', 'Information technology', 'Wednesday', '08:00:00', '00:00:00', 'test tutor', '2021-07-30 13:05:41'),
(26, 'data communication', 'Lab 2', 'Two', 'One', 'Information technology', 'Thursday', '10:00:00', '00:00:00', 'mark zu', '2021-07-30 13:06:08'),
(27, 'data communication', 'Lab 2', 'Two', 'One', 'Information technology', 'Thursday', '12:00:00', '00:00:00', 'mark zu', '2021-07-30 13:06:25'),
(28, 'data communication', 'Lab 2', 'Two', 'One', 'Information technology', 'Thursday', '11:00:00', '00:00:00', 'mark zu', '2021-07-30 13:06:49'),
(29, 'operating systems', 'Room 5', 'Two', 'One', 'Information technology', 'Monday', '07:00:00', '00:00:00', 'moon man', '2021-07-30 13:07:29'),
(30, 'object oriented programming', 'Lab 2', 'One', 'Two', 'Information technology', 'Monday', '07:00:00', '00:00:00', 'tutor3', '2021-07-30 13:15:26'),
(31, 'object oriented programming', 'Lab 2', 'One', 'Two', 'Information technology', 'Monday', '08:00:00', '00:00:00', 'tutor3', '2021-07-30 13:15:33'),
(32, 'database management', 'Bsc lab', 'One', 'Two', 'Information technology', 'Tuesday', '07:00:00', '00:00:00', 'moon man', '2021-07-30 13:15:48'),
(33, 'database management', 'Lab 2', 'One', 'Two', 'Information technology', 'Wednesday', '10:00:00', '00:00:00', 'moon man', '2021-07-30 13:16:04'),
(34, 'database management', 'Lab 2', 'One', 'Two', 'Information technology', 'Wednesday', '11:00:00', '00:00:00', 'moon man', '2021-07-30 13:16:19'),
(35, 'system analysis and design', 'Lab 2', 'One', 'Two', 'Information technology', 'Monday', '02:00:00', '00:00:00', 'test tutor', '2021-07-30 13:16:55'),
(36, 'system analysis and design', 'Lab 2', 'One', 'Two', 'Information technology', 'Monday', '03:00:00', '00:00:00', 'test tutor', '2021-07-30 13:17:13'),
(37, 'system analysis and design', 'Room 2', 'One', 'Two', 'Information technology', 'Friday', '07:00:00', '00:00:00', 'test tutor', '2021-07-30 13:17:40'),
(38, 'computer architecture', 'Bsc lab', 'One', 'One', 'Information technology', 'Wednesday', '07:00:00', '00:00:00', 'mark zu', '2021-07-30 13:18:49'),
(39, 'computer architecture', 'Bsc lab', 'One', 'One', 'Information technology', 'Wednesday', '09:00:00', '00:00:00', 'mark zu', '2021-07-30 13:19:12'),
(40, 'computer architecture', 'Bsc lab', 'One', 'One', 'Information technology', 'Wednesday', '08:00:00', '00:00:00', 'mark zu', '2021-07-30 13:19:30'),
(41, 'basics of mathematics', 'Lab 2', 'One', 'One', 'Information technology', 'Tuesday', '02:00:00', '00:00:00', 'test tutor', '2021-07-30 13:20:40'),
(42, 'basics of mathematics', 'Lab 2', 'One', 'One', 'Information technology', 'Tuesday', '03:00:00', '00:00:00', 'test tutor', '2021-07-30 13:20:55'),
(43, 'basics of mathematics', 'Lab 2', 'One', 'One', 'Information technology', 'Friday', '09:00:00', '00:00:00', 'test tutor', '2021-07-30 13:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `course` varchar(60) NOT NULL,
  `tutornum` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `regdate` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `fname`, `lname`, `username`, `phone`, `course`, `tutornum`, `email`, `regdate`, `modified`, `password`) VALUES
(1, 'random', 'tom', 'Random tom', '0703838293', 'Computer science', '103-0384-2', 'teacher@t.t', '2021-07-29 16:04:10', '2021-07-29 16:04:10', '202cb962ac59075b964b07152d234b70'),
(2, 'monday', 'maine', 'maine mon', '0764923355', 'Computer science', '103-0384-8', 'teacher2@t.t', '2021-07-29 16:05:05', '2021-07-29 16:05:05', '202cb962ac59075b964b07152d234b70'),
(3, 'thirdtm', 'tutor', 'tutor3', '0703838294', 'Information technology', '103-0384-5', 'teacher3@t.t', '2021-07-29 16:06:40', '2021-07-30 13:33:27', '202cb962ac59075b964b07152d234b70'),
(4, 'manzy', 'moon', 'moon man', '0764923356', 'Information technology', '103-0384-10', 'teacher4@t.t', '2021-07-29 16:07:29', '2021-07-29 16:07:29', '202cb962ac59075b964b07152d234b70'),
(5, 'adrian', 'after', 'adfer', '0703868293', 'Computer science', '103-0384-35', 'teacher5@t.t', '2021-07-29 16:21:00', '2021-07-29 16:21:00', '202cb962ac59075b964b07152d234b70'),
(6, 'techguy', 'taught', 'tech guy', '0708382939', 'Computer science', '103-0384-48', 'teacher6@t.t', '2021-07-29 16:22:02', '2021-07-29 16:22:02', '202cb962ac59075b964b07152d234b70'),
(7, 'bamm', 'winnie', 'bamwine', '0764923990', 'business administration', '103-0344-5', 'teacher7@e.e', '2021-07-29 16:22:57', '2021-07-29 16:22:57', '202cb962ac59075b964b07152d234b70'),
(8, 'mark', 'zukasound', 'mark zu', '0764956355', 'Information technology', '103-0384-28', 'teacher8@t.t', '2021-07-29 16:23:44', '2021-07-29 16:23:44', '202cb962ac59075b964b07152d234b70'),
(9, 'test', 'tutor', 'test tutor', '0766923934', 'Information technology', '103-0384-25', 'teacher9@t.t', '2021-07-29 16:24:28', '2021-07-29 16:24:28', '202cb962ac59075b964b07152d234b70'),
(10, 'another', 'wone', 'one other', '0709838294', 'Computer science', '103-0384-29', 'teacher10@t.t', '2021-07-29 16:25:24', '2021-07-29 16:25:24', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `course` varchar(60) NOT NULL,
  `yearofstudy` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `code`, `course`, `yearofstudy`, `semester`, `modified`) VALUES
(1, 'introduction to IT', 'CSC-1101', 'Computer science', 'One', 'One', '2021-07-29 15:37:21'),
(2, 'Fundamentals of networking', 'CSC-1104', 'Computer science', 'One', 'One', '2021-07-29 15:37:46'),
(3, 'Principles of programing', 'CSC-1106', 'Computer science', 'One', 'One', '2021-07-29 15:38:13'),
(4, 'Programing methods', 'CSC-2101', 'Information technology', 'One', 'One', '2021-07-29 15:38:47'),
(5, 'computer architecture', 'CSC-2102', 'Information technology', 'One', 'One', '2021-07-29 15:39:21'),
(6, 'introduction to business', 'BAM-1200', 'business administration', 'One', 'One', '2021-07-29 15:39:53'),
(7, 'Business ethics', 'BAM-1203', 'business administration', 'One', 'One', '2021-07-29 15:40:15'),
(8, 'object oriented programming', 'CSC-1134', 'Information technology', 'One', 'Two', '2021-07-29 15:40:46'),
(9, 'database management', 'CSC-1145', 'Information technology', 'One', 'Two', '2021-07-29 15:41:08'),
(10, 'system analysis and design', 'CSC-1119', 'Information technology', 'One', 'Two', '2021-07-29 15:41:33'),
(11, 'information security', 'CSC-1341', 'Information technology', 'Two', 'One', '2021-07-29 15:42:12'),
(12, 'operating systems', 'CSC-1182', 'Information technology', 'Two', 'One', '2021-07-29 15:42:43'),
(13, 'data communication', 'CSC-1390', 'Information technology', 'Two', 'One', '2021-07-29 15:43:09'),
(14, 'marketing in IT', 'CSC-1117', 'Information technology', 'Two', 'One', '2021-07-29 15:43:36'),
(15, 'general sciences basics', 'CSC-889', 'science general', 'One', 'One', '2021-07-29 16:51:37'),
(16, 'basics of mathematics', 'CSC-8240', 'Information technology', 'One', 'One', '2021-07-30 13:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `course` varchar(60) NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `name`, `code`, `course`, `modified`) VALUES
(1, 'Lab 1', 'LB1', 'Computer science', '2021-07-29 15:44:17'),
(2, 'Lab 2', 'LB2', 'Information technology', '2021-07-29 15:44:36'),
(3, 'Bsc lab', 'BSL', 'Information technology', '2021-07-29 15:45:13'),
(4, 'Room 1', 'RM1', 'Computer science', '2021-07-29 15:45:31'),
(5, 'Room 2', 'RM2', 'Information technology', '2021-07-29 15:45:50'),
(6, 'Room 3', 'RM3', 'business administration', '2021-07-29 15:46:21'),
(7, 'Auditorium', 'AUD', 'business administration', '2021-07-29 15:46:41'),
(8, 'Room 4', 'RM4', 'Computer science', '2021-07-29 15:47:01'),
(9, 'Room 5', 'RM5', 'Information technology', '2021-07-29 15:47:16'),
(10, 'Room 11', 'RM11', 'science general', '2021-07-29 16:51:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
