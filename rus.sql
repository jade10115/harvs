-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 03:44 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_building`
--

CREATE TABLE `tbl_building` (
  `building_id` int(10) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `no_of_rooms` int(10) NOT NULL,
  `no_of_floors` int(10) NOT NULL,
  `building_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `building_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_building`
--

INSERT INTO `tbl_building` (`building_id`, `building_name`, `no_of_rooms`, `no_of_floors`, `building_added`, `building_modified`) VALUES
(2, 'Science Building', 10, 3, '2020-02-21 16:11:32', '2020-02-21 16:15:36'),
(3, 'Information Technology', 2, 2, '2020-02-26 16:37:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

CREATE TABLE `tbl_college` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(250) NOT NULL,
  `college_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `college_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`college_id`, `college_name`, `college_added`, `college_modified`) VALUES
(1, 'COED', '2020-02-20 16:45:14', '2020-02-20 16:45:27'),
(2, 'COE', '2020-02-20 16:45:17', '2020-02-20 16:45:24'),
(4, 'COBE', '2020-02-20 16:45:31', '2020-02-20 16:45:38'),
(5, 'College of Arts and Allied Disciplines', '2020-02-20 16:45:35', '2020-02-26 16:40:38'),
(6, 'CAS', '2020-02-20 16:45:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_colleges`
--

CREATE TABLE `tbl_colleges` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `college_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_colleges`
--

INSERT INTO `tbl_colleges` (`college_id`, `college_name`, `college_added`, `college_modified`) VALUES
(2, 'COE', '2020-02-19 15:17:23', '0000-00-00 00:00:00'),
(3, 'COED', '2020-02-19 15:17:29', '0000-00-00 00:00:00'),
(4, 'CAAD', '2020-02-19 15:17:34', '0000-00-00 00:00:00'),
(5, 'CAS', '2020-02-19 15:17:35', '0000-00-00 00:00:00'),
(6, 'COBE', '2020-02-19 15:17:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(10) NOT NULL,
  `college_id` int(10) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `course_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `college_id`, `department_id`, `course_name`, `course_added`, `course_modified`) VALUES
(2, 2, 1, 'asd', '2020-02-20 14:28:11', '0000-00-00 00:00:00'),
(14, 2, 2, 'ce', '2020-02-20 15:34:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(10) NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `department_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `college_id`, `department_name`, `department_added`, `department_modified`) VALUES
(4, 1, 'CE', '2020-02-26 14:00:36', '0000-00-00 00:00:00'),
(5, 1, 'IT', '2020-02-26 14:00:38', '0000-00-00 00:00:00'),
(6, 5, 'ARCHI', '2020-02-26 14:00:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(150) NOT NULL,
  `regular_unit` int(11) NOT NULL,
  `designation_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `designation_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`designation_id`, `designation_name`, `regular_unit`, `designation_added`, `designation_modified`) VALUES
(1, 'Department Head', 12, '2020-02-24 14:23:52', '2020-02-28 10:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `faculty_id` int(10) NOT NULL,
  `identification` varchar(20) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `suffix_name` varchar(50) NOT NULL,
  `ext_name` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image_src` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `department_id` int(11) NOT NULL,
  `rank_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `faculty_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `faculty_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `identification`, `f_name`, `m_name`, `l_name`, `suffix_name`, `ext_name`, `contact_no`, `email`, `birth_date`, `address`, `image_src`, `department_id`, `rank_id`, `designation_id`, `faculty_added`, `faculty_modified`) VALUES
(1, '', 'Francisco', 'Osdon', 'Ibañez', 'III', '', '09150125942', 'foibanez@gmail.com', '2020-02-24', 'Tacloban City', 'avatar.png', 6, 2, 1, '2020-02-24 15:01:15', '2020-02-27 15:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `log_id` int(11) NOT NULL,
  `log_name` varchar(255) NOT NULL,
  `log_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`log_id`, `log_name`, `log_added`, `user_id`) VALUES
(1, 'Designation successfully updated: 122', '2020-02-28 02:43:11', 1),
(2, 'Designation successfully updated: Department Head', '2020-02-28 02:44:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rank`
--

CREATE TABLE `tbl_rank` (
  `rank_id` int(11) NOT NULL,
  `rank_type` varchar(50) NOT NULL,
  `rank_added` datetime NOT NULL,
  `rank_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rank`
--

INSERT INTO `tbl_rank` (`rank_id`, `rank_type`, `rank_added`, `rank_modified`) VALUES
(1, 'Instructor I', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Instructor II', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(11) NOT NULL,
  `room_type_id` int(50) NOT NULL,
  `building_id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_floor` int(11) NOT NULL,
  `room_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `room_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_type_id`, `building_id`, `room_number`, `room_floor`, `room_added`, `room_modified`) VALUES
(4, 3, 2, 4, 4, '2020-02-21 16:53:19', NULL),
(5, 1, 3, 201, 2, '2020-02-26 16:38:23', NULL),
(6, 1, 2, 122, 2, '2020-02-28 09:42:38', '2020-02-28 10:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_type`
--

CREATE TABLE `tbl_room_type` (
  `room_type_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_description` varchar(150) NOT NULL,
  `room_type_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `room_type_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_type`
--

INSERT INTO `tbl_room_type` (`room_type_id`, `room_type`, `room_description`, `room_type_added`, `room_type_modified`) VALUES
(1, 'Laboratory', 'Laboratory', '2020-02-26 13:58:56', '2020-02-26 13:59:09'),
(2, 'Lecture', 'Lecture', '2020-02-26 13:59:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `semester_id` int(10) NOT NULL,
  `semester_type` varchar(50) NOT NULL,
  `semester_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `semester_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semester_id`, `semester_type`, `semester_added`, `semester_modified`) VALUES
(1, 'First Semester', '2020-02-20 16:02:53', '2020-02-20 16:05:23'),
(3, 'Second Semester', '2020-02-20 16:04:06', '0000-00-00 00:00:00'),
(5, 'Summer', '2020-02-20 16:05:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(250) NOT NULL,
  `subject_type` varchar(50) NOT NULL,
  `subject_unit` int(4) NOT NULL,
  `subject_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subject_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `subject_code`, `subject_description`, `subject_type`, `subject_unit`, `subject_added`, `subject_modified`) VALUES
(3, 'IT 363L', 'Lodi Programming I', 'Laboratory', 3, '2020-02-21 15:49:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sy`
--

CREATE TABLE `tbl_sy` (
  `SY_ID` int(10) NOT NULL,
  `school_year` varchar(50) NOT NULL,
  `sy_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sy_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_type_id`, `faculty_id`, `username`, `password`, `user_added`, `user_modified`) VALUES
(1, 3, 7, '1', '1', '2020-02-26 01:06:56', '0000-00-00 00:00:00'),
(2, 3, 8, '4', '4', '2020-02-26 02:41:34', '0000-00-00 00:00:00'),
(3, 3, 9, '2', '2', '2020-02-26 02:42:17', '0000-00-00 00:00:00'),
(4, 4, 10, 'fasd', 'asd', '2020-02-26 02:44:39', '0000-00-00 00:00:00'),
(5, 3, 11, '4', '4', '2020-02-26 03:25:32', '0000-00-00 00:00:00'),
(6, 3, 12, 'zx', 'zxc', '2020-02-26 16:35:35', '0000-00-00 00:00:00'),
(7, 3, 13, '1', '1', '2020-02-27 14:47:34', '0000-00-00 00:00:00'),
(8, 3, 14, '23', '3', '2020-02-27 14:47:57', '0000-00-00 00:00:00'),
(9, 3, 15, '3', '3', '2020-02-27 14:51:52', '0000-00-00 00:00:00'),
(10, 3, 16, '555', '4', '2020-02-27 15:03:34', '0000-00-00 00:00:00'),
(11, 3, 17, 'g', 'g', '2020-02-27 15:04:55', '0000-00-00 00:00:00'),
(12, 3, 18, 'yyy', 'yyy', '2020-02-27 15:06:02', '0000-00-00 00:00:00'),
(13, 3, 19, 't', 't', '2020-02-27 15:06:50', '0000-00-00 00:00:00'),
(14, 3, 20, '4', '4', '2020-02-27 15:15:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `user_type_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`user_type_id`, `user_type`, `user_type_added`, `user_type_modified`) VALUES
(3, 'Dean', '2020-02-21 15:38:49', '0000-00-00 00:00:00'),
(4, 'Faculty', '2020-02-21 15:38:52', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_building`
--
ALTER TABLE `tbl_building`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `tbl_college`
--
ALTER TABLE `tbl_college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `tbl_colleges`
--
ALTER TABLE `tbl_colleges`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `FK__college` (`college_id`),
  ADD KEY `FK_tbl_course_tbl_department` (`department_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `FK_tbl_department_tbl_college` (`college_id`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `FK_faculty_department` (`department_id`),
  ADD KEY `FK_faculty_rank` (`rank_id`),
  ADD KEY `FK_faculty_designation` (`designation_id`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_rank`
--
ALTER TABLE `tbl_rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `FK_tbl_room_tbl_room_type` (`room_type_id`),
  ADD KEY `FK_tbl_room_tbl_building` (`building_id`);

--
-- Indexes for table `tbl_room_type`
--
ALTER TABLE `tbl_room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_sy`
--
ALTER TABLE `tbl_sy`
  ADD PRIMARY KEY (`SY_ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_user_faculty` (`faculty_id`),
  ADD KEY `FK_user_user_type` (`user_type_id`);

--
-- Indexes for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_building`
--
ALTER TABLE `tbl_building`
  MODIFY `building_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_college`
--
ALTER TABLE `tbl_college`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_colleges`
--
ALTER TABLE `tbl_colleges`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `faculty_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_rank`
--
ALTER TABLE `tbl_rank`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_room_type`
--
ALTER TABLE `tbl_room_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `semester_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_sy`
--
ALTER TABLE `tbl_sy`
  MODIFY `SY_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
