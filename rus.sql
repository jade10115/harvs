-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 07:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `building_added` datetime NOT NULL DEFAULT current_timestamp(),
  `building_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_building`
--

INSERT INTO `tbl_building` (`building_id`, `building_name`, `no_of_rooms`, `no_of_floors`, `building_added`, `building_modified`) VALUES
(2, 'Science Building', 10, 3, '2020-02-21 16:11:32', '2020-02-21 16:15:36'),
(3, 'Information Technology', 2, 2, '2020-02-26 16:37:50', '0000-00-00 00:00:00'),
(4, '4', 4, 4, '2020-02-28 13:39:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

CREATE TABLE `tbl_college` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(250) NOT NULL,
  `college_abbr` varchar(20) NOT NULL,
  `college_added` datetime NOT NULL DEFAULT current_timestamp(),
  `college_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`college_id`, `college_name`, `college_abbr`, `college_added`, `college_modified`) VALUES
(1, 'College of Education', 'COED', '2020-02-20 16:45:14', '2020-02-28 16:01:05'),
(4, 'College of Business and Entrepreneurship', 'COBE', '2020-02-20 16:45:31', '2020-02-28 16:01:28'),
(5, 'College of Arts and Allied Disciplines', 'CAAD', '2020-02-20 16:45:35', '2020-02-28 16:01:11'),
(6, 'College of Arts and Sciences', 'CAS', '2020-02-20 16:45:42', '2020-02-28 16:01:36'),
(7, 'College of Engineering', 'COE', '2020-02-28 15:59:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(10) NOT NULL,
  `college_id` int(10) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_abbr` varchar(20) NOT NULL,
  `course_added` datetime NOT NULL DEFAULT current_timestamp(),
  `course_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `college_id`, `department_id`, `course_name`, `course_abbr`, `course_added`, `course_modified`) VALUES
(15, 7, 5, 'Bachelor of Science in Information Technology', 'BSIT', '2020-02-28 16:05:11', '0000-00-00 00:00:00'),
(17, 7, 4, 'Bachelor of Science in Civil Engineering', 'BSCE', '2020-02-28 16:13:59', '2020-02-28 16:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(10) NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_added` datetime NOT NULL DEFAULT current_timestamp(),
  `department_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `college_id`, `department_name`, `department_added`, `department_modified`) VALUES
(4, 7, 'CE', '2020-02-26 14:00:36', '2020-02-28 16:04:40'),
(5, 7, 'IT', '2020-02-26 14:00:38', '2020-02-28 16:04:44'),
(6, 5, 'ARCHI', '2020-02-26 14:00:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(150) NOT NULL,
  `regular_unit` int(11) NOT NULL,
  `designation_added` datetime NOT NULL DEFAULT current_timestamp(),
  `designation_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
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
  `faculty_added` datetime NOT NULL DEFAULT current_timestamp(),
  `faculty_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `identification`, `f_name`, `m_name`, `l_name`, `suffix_name`, `ext_name`, `contact_no`, `email`, `birth_date`, `address`, `image_src`, `department_id`, `rank_id`, `designation_id`, `faculty_added`, `faculty_modified`) VALUES
(1, '', 'Francisco', 'Osdon', 'Ibañez', 'III', '', '09150125942', 'foibanez@gmail.com', '2020-02-24', 'Tacloban City', 'avatar.png', 5, 2, 1, '2020-02-24 15:01:15', '2020-03-03 14:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `log_id` int(11) NOT NULL,
  `log_name` varchar(255) NOT NULL,
  `log_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`log_id`, `log_name`, `log_added`, `user_id`) VALUES
(1, 'Designation successfully updated: 122', '2020-02-28 02:43:11', 1),
(2, 'Designation successfully updated: Department Head', '2020-02-28 02:44:07', 1),
(0, 'New college successfully added: College of Engineering', '2020-02-28 23:59:24', 1),
(0, 'College successfully updated: College of Education', '2020-02-29 00:01:05', 1),
(0, 'College successfully updated: College of Arts and Allied Disciplines', '2020-02-29 00:01:11', 1),
(0, 'Successfully deleted college: COE', '2020-02-29 00:01:16', 1),
(0, 'College successfully updated: College of Business and Entrepreneurship', '2020-02-29 00:01:28', 1),
(0, 'College successfully updated: College of Arts and Sciences', '2020-02-29 00:01:36', 1),
(0, 'Department successfully updated: CE', '2020-02-29 00:04:40', 1),
(0, 'Department successfully updated: IT', '2020-02-29 00:04:44', 1),
(0, 'New course successfully added: Bachelor of Science in Information Technology', '2020-02-29 00:05:11', 1),
(0, 'New course successfully added: test', '2020-02-29 00:06:52', 1),
(0, 'Course successfully updated: testss', '2020-02-29 00:06:57', 1),
(0, 'Successfully deleted course: testss', '2020-02-29 00:06:59', 1),
(0, 'New course successfully added: Bachelor of Science in Civil Engineering', '2020-02-29 00:13:59', 1),
(0, 'Course successfully updated: Bachelor of Science in Civil Engineering', '2020-02-29 00:14:08', 1),
(0, 'Course successfully updated: Bachelor of Science in Civil Engineering', '2020-02-29 00:14:21', 1),
(0, 'New subject successfully added: CE 252', '2020-02-29 00:20:23', 1),
(0, 'New subject successfully added: CE 253', '2020-02-29 00:20:55', 1),
(0, 'Room successfully updated: 201', '2020-02-29 00:39:08', 1),
(0, 'New course successfully added: a', '2020-02-29 00:42:40', 1),
(0, 'New schedule successfully added to:   ', '2020-03-03 23:11:43', 1),
(0, 'New schedule successfully added to:   ', '2020-03-09 06:39:38', 1),
(0, 'New schedule successfully added to:   ', '2020-03-09 06:39:53', 1),
(0, 'New schedule successfully added to:   ', '2020-03-09 06:54:05', 1),
(0, 'New schedule successfully added to: Francisco Osdon Ibañez', '2020-03-10 01:22:21', 1),
(0, 'Successfully deleted schedule: ', '2020-03-10 05:04:29', 1),
(0, 'Successfully deleted schedule: ', '2020-03-10 05:05:59', 1),
(0, 'Successfully deleted schedule: ', '2020-03-10 05:06:08', 1),
(0, 'Successfully deleted schedule: ', '2020-03-10 05:06:25', 1),
(0, 'New schedule successfully added to: Francisco Osdon Ibañez', '2020-03-10 05:11:57', 1),
(0, 'New schedule successfully added to: Francisco Osdon Ibañez', '2020-03-10 05:16:27', 1),
(0, 'New schedule successfully added to: Francisco Osdon Ibañez', '2020-03-10 05:16:31', 1),
(0, 'New schedule successfully added to: Francisco Osdon Ibañez', '2020-03-10 05:16:35', 1),
(0, 'Successfully deleted schedule: ', '2020-03-10 05:16:43', 1),
(0, 'Successfully deleted schedule: ', '2020-03-10 05:16:44', 1),
(0, 'Successfully deleted schedule: ', '2020-03-10 05:16:45', 1),
(0, 'New schedule successfully added to: Francisco Osdon Ibañez', '2020-03-10 05:18:57', 1),
(0, 'New schedule successfully added to: Francisco Osdon Ibañez', '2020-03-10 05:21:21', 1),
(0, 'Successfully deleted schedule: ', '2020-03-10 05:21:37', 1),
(0, 'New schedule successfully added to: Francisco Osdon Ibañez', '2020-03-10 05:21:45', 1),
(0, 'New schedule successfully added to:   ', '2020-03-10 06:02:44', 1);

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
  `room_added` datetime NOT NULL DEFAULT current_timestamp(),
  `room_modified` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_type_id`, `building_id`, `room_number`, `room_floor`, `room_added`, `room_modified`) VALUES
(4, 3, 2, 4, 4, '2020-02-21 16:53:19', NULL),
(5, 2, 3, 201, 2, '2020-02-26 16:38:23', '2020-02-28 16:39:08'),
(6, 1, 2, 122, 2, '2020-02-28 09:42:38', '2020-02-28 10:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_type`
--

CREATE TABLE `tbl_room_type` (
  `room_type_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_description` varchar(150) NOT NULL,
  `room_type_added` datetime NOT NULL DEFAULT current_timestamp(),
  `room_type_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_type`
--

INSERT INTO `tbl_room_type` (`room_type_id`, `room_type`, `room_description`, `room_type_added`, `room_type_modified`) VALUES
(1, 'Laboratory', 'Laboratory', '2020-02-26 13:58:56', '2020-02-26 13:59:09'),
(2, 'Lecture', 'Lecture', '2020-02-26 13:59:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `schedule_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `day` varchar(15) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `sy_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `schedule_added` datetime NOT NULL DEFAULT current_timestamp(),
  `schedule_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`schedule_id`, `room_id`, `subject_id`, `faculty_id`, `day`, `time_start`, `time_end`, `sy_id`, `semester_id`, `schedule_added`, `schedule_modified`) VALUES
(2, 5, 3, 1, 'Wednesday', '07:00:00', '13:00:00', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 5, 3, 1, 'Monday', '09:00:00', '10:00:00', 1, 1, '2020-03-10 13:11:57', NULL),
(12, 5, 3, 1, 'Monday', '19:30:00', '20:30:00', 2, 5, '2020-03-10 13:21:21', NULL),
(13, 5, 3, 1, 'Monday', '07:00:00', '09:00:00', 1, 1, '2020-03-10 13:21:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `semester_id` int(10) NOT NULL,
  `semester_type` varchar(50) NOT NULL,
  `semester_added` datetime NOT NULL DEFAULT current_timestamp(),
  `semester_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
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
  `course_id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(250) NOT NULL,
  `subject_type` varchar(50) NOT NULL,
  `subject_unit` int(4) NOT NULL,
  `subject_added` datetime NOT NULL DEFAULT current_timestamp(),
  `subject_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `course_id`, `subject_code`, `subject_description`, `subject_type`, `subject_unit`, `subject_added`, `subject_modified`) VALUES
(3, 15, 'IT 363L', 'Lodi Programming I', 'Laboratory', 3, '2020-02-21 15:49:22', '2020-02-28 16:15:42'),
(4, 17, 'CE 252', 'I don\'t know', 'Laboratory', 3, '2020-02-28 16:20:23', '2020-02-28 16:20:42'),
(5, 17, 'CE 253', 'I don\'t know again', 'Lecture', 3, '2020-02-28 16:20:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sy`
--

CREATE TABLE `tbl_sy` (
  `sy_id` int(11) NOT NULL,
  `school_year` varchar(25) NOT NULL,
  `sy_added` datetime NOT NULL DEFAULT current_timestamp(),
  `sy_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sy`
--

INSERT INTO `tbl_sy` (`sy_id`, `school_year`, `sy_added`, `sy_modified`) VALUES
(1, '2020-2021', '2020-02-28 15:10:40', '0000-00-00 00:00:00'),
(2, '2021-2022', '2020-02-28 15:20:40', '0000-00-00 00:00:00');

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
  `user_added` datetime NOT NULL DEFAULT current_timestamp(),
  `user_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_type_id`, `faculty_id`, `username`, `password`, `user_added`, `user_modified`) VALUES
(1, 5, 1, 'admin', 'admin', '2020-02-26 01:06:56', '2020-02-28 14:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `user_type_added` datetime NOT NULL DEFAULT current_timestamp(),
  `user_type_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`user_type_id`, `user_type`, `user_type_added`, `user_type_modified`) VALUES
(3, 'Dean', '2020-02-21 15:38:49', '0000-00-00 00:00:00'),
(4, 'Faculty', '2020-02-21 15:38:52', '0000-00-00 00:00:00'),
(5, 'Administrator', '2020-02-28 14:54:39', '0000-00-00 00:00:00');

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
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`schedule_id`);

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
  ADD PRIMARY KEY (`sy_id`);

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
  MODIFY `building_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_college`
--
ALTER TABLE `tbl_college`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `faculty_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rank`
--
ALTER TABLE `tbl_rank`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_room_type`
--
ALTER TABLE `tbl_room_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `semester_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sy`
--
ALTER TABLE `tbl_sy`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
