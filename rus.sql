-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 01:47 AM
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
  `BUILDING_ID` int(10) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `no_of_room` int(10) NOT NULL,
  `no_of_floor` int(10) NOT NULL,
  `building_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `building_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_building`
--

INSERT INTO `tbl_building` (`BUILDING_ID`, `building_name`, `no_of_room`, `no_of_floor`, `building_added`, `building_modified`) VALUES
(1, 'qweqweqwe', 0, 0, '2020-02-20 10:28:23', '0000-00-00 00:00:00');

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
(3, 'COT', '2020-02-20 16:45:29', '0000-00-00 00:00:00'),
(4, 'COBE', '2020-02-20 16:45:31', '2020-02-20 16:45:38'),
(5, 'CAAD', '2020-02-20 16:45:35', '0000-00-00 00:00:00'),
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
(1, 2, 'IT', '2020-02-20 14:07:02', '0000-00-00 00:00:00'),
(2, 2, 'CE', '2020-02-20 14:07:05', '0000-00-00 00:00:00'),
(3, 4, 'ARCHI', '2020-02-20 14:07:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `designation_id` int(10) NOT NULL,
  `designation_name` varchar(255) NOT NULL,
  `regular_unit` tinyint(4) NOT NULL,
  `designation_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `designation_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`designation_id`, `designation_name`, `regular_unit`, `designation_added`, `designation_modified`) VALUES
(1, 'Head', 15, '2020-02-20 15:32:45', '2020-02-20 15:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `FACULTY_ID` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `suffix_name` varchar(50) NOT NULL,
  `ext_name` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `DEPARTMENT_ID` int(11) NOT NULL,
  `RANK_ID` int(11) NOT NULL,
  `DESIIGNATION_ID` int(11) NOT NULL,
  `faculty_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `faculty_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rank`
--

CREATE TABLE `tbl_rank` (
  `rank_id` int(10) NOT NULL,
  `rank_type` varchar(50) NOT NULL,
  `rank_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rank_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rank`
--

INSERT INTO `tbl_rank` (`rank_id`, `rank_type`, `rank_added`, `rank_modified`) VALUES
(1, 'Instructor I', '2020-02-20 15:54:26', '2020-02-20 15:58:15');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_type`
--

CREATE TABLE `tbl_room_type` (
  `room_type_id` int(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_description` varchar(255) NOT NULL,
  `room_type_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `room_type_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_type`
--

INSERT INTO `tbl_room_type` (`room_type_id`, `room_type`, `room_description`, `room_type_added`, `room_type_modified`) VALUES
(4, 'Lecture', '', '2020-02-20 16:35:47', '0000-00-00 00:00:00'),
(5, 'Laboratory', '', '2020-02-20 16:35:52', '0000-00-00 00:00:00');

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
  `SUBJECT_ID` int(10) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(255) NOT NULL,
  `subject_type` varchar(50) NOT NULL,
  `subject_unit` tinyint(4) NOT NULL,
  `subject_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subject_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `USER_ID` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `FACULTY_ID` int(11) NOT NULL,
  `USER_TYPE_ID` int(11) NOT NULL,
  `user_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `user_type_id` int(10) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `user_type_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`user_type_id`, `user_type`, `user_type_added`, `user_type_modified`) VALUES
(2, 'Dean', '2020-02-20 16:18:33', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_building`
--
ALTER TABLE `tbl_building`
  ADD PRIMARY KEY (`BUILDING_ID`);

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
  ADD PRIMARY KEY (`FACULTY_ID`),
  ADD KEY `FK_faculty_department` (`DEPARTMENT_ID`),
  ADD KEY `FK_faculty_rank` (`RANK_ID`),
  ADD KEY `FK_faculty_designation` (`DESIIGNATION_ID`);

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
  ADD PRIMARY KEY (`SUBJECT_ID`);

--
-- Indexes for table `tbl_sy`
--
ALTER TABLE `tbl_sy`
  ADD PRIMARY KEY (`SY_ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD KEY `FK_user_faculty` (`FACULTY_ID`),
  ADD KEY `FK_user_user_type` (`USER_TYPE_ID`);

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
  MODIFY `BUILDING_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_college`
--
ALTER TABLE `tbl_college`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_colleges`
--
ALTER TABLE `tbl_colleges`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `designation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `FACULTY_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_rank`
--
ALTER TABLE `tbl_rank`
  MODIFY `rank_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_room_type`
--
ALTER TABLE `tbl_room_type`
  MODIFY `room_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `semester_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `SUBJECT_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sy`
--
ALTER TABLE `tbl_sy`
  MODIFY `SY_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `USER_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `user_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD CONSTRAINT `FK_tbl_course_tbl_college` FOREIGN KEY (`college_id`) REFERENCES `tbl_college` (`COLLEGE_ID`),
  ADD CONSTRAINT `FK_tbl_course_tbl_department` FOREIGN KEY (`department_id`) REFERENCES `tbl_department` (`department_id`);

--
-- Constraints for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD CONSTRAINT `FK_faculty_department` FOREIGN KEY (`DEPARTMENT_ID`) REFERENCES `tbl_department` (`DEPARTMENT_ID`),
  ADD CONSTRAINT `FK_faculty_designation` FOREIGN KEY (`DESIIGNATION_ID`) REFERENCES `tbl_designation` (`DESIGNATION_ID`),
  ADD CONSTRAINT `FK_faculty_rank` FOREIGN KEY (`RANK_ID`) REFERENCES `tbl_rank` (`RANK_ID`);

--
-- Constraints for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD CONSTRAINT `FK_tbl_room_tbl_building` FOREIGN KEY (`building_id`) REFERENCES `tbl_building` (`BUILDING_ID`),
  ADD CONSTRAINT `FK_tbl_room_tbl_room_type` FOREIGN KEY (`room_type_id`) REFERENCES `tbl_room_type` (`ROOM_TYPE_ID`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `FK_user_faculty` FOREIGN KEY (`FACULTY_ID`) REFERENCES `tbl_faculty` (`FACULTY_ID`),
  ADD CONSTRAINT `FK_user_user_type` FOREIGN KEY (`USER_TYPE_ID`) REFERENCES `tbl_user_type` (`USER_TYPE_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
