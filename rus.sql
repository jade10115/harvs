-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 08:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
-- Table structure for table `tbl_adjacent`
--

CREATE TABLE `tbl_adjacent` (
  `adjacent_id` int(11) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `adjacent_building_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_adjacent`
--

INSERT INTO `tbl_adjacent` (`adjacent_id`, `building_id`, `adjacent_building_id`) VALUES
(1, 3, 11),
(2, 3, 10),
(3, 10, 16),
(4, 11, 10),
(5, 8, 5),
(6, 5, 8),
(7, 11, 3),
(8, 10, 11),
(9, 10, 3),
(10, 20, 8),
(11, 8, 20),
(12, 18, 12),
(13, 12, 18),
(14, 12, 16),
(15, 16, 12),
(16, 16, 10),
(17, 9, 8),
(18, 8, 9),
(19, 18, 20),
(20, 20, 18),
(21, 12, 13),
(22, 13, 12),
(23, 9, 13),
(24, 13, 9),
(25, 13, 18),
(26, 18, 13),
(27, 10, 13),
(28, 13, 10),
(29, 18, 24),
(30, 24, 18),
(31, 18, 19),
(32, 19, 18),
(33, 19, 12),
(34, 12, 19),
(35, 13, 19),
(36, 19, 13),
(37, 5, 6),
(38, 6, 5);

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
(3, 'INFORMATION TECHNOLOGY BUILDING (IT)', 8, 3, '2020-02-26 16:37:50', '2020-03-06 12:58:49'),
(5, 'ACADEMIC BUILDING (CAS)', 17, 3, '2020-03-06 12:53:24', '0000-00-00 00:00:00'),
(6, 'HOME TECHNOLOGY BUILDING (HTB)', 23, 3, '2020-03-06 12:54:20', '0000-00-00 00:00:00'),
(7, 'COLLEGE OF BUSINESS AND ENTREPRENEURSHIP (COBE) (NEW BUILDING)', 10, 3, '2020-03-06 12:56:16', '0000-00-00 00:00:00'),
(8, 'ABS-CBN LINGKOD KAPAMILYA BUILDING', 6, 2, '2020-03-06 12:56:51', '0000-00-00 00:00:00'),
(9, 'GRADUATE SCHOOL BUILDING', 10, 2, '2020-03-06 12:57:24', '0000-00-00 00:00:00'),
(10, 'COLLEGE OF ARCHITECTURE AND ALLIED DICIPLINE (CAAD)', 10, 2, '2020-03-06 12:58:09', '0000-00-00 00:00:00'),
(11, 'INFORMATION TECHNOLOGY TRAINING DEVELOPMENT CENTER (ITTDC)', 4, 2, '2020-03-06 13:03:27', '2020-03-06 14:17:22'),
(12, 'TECHNOLOGICAL BUILDING', 18, 3, '2020-03-06 13:03:58', '0000-00-00 00:00:00'),
(13, 'SCIENCE BUILDING', 20, 3, '2020-03-06 13:04:41', '0000-00-00 00:00:00'),
(14, 'FOUNDRY BUILDING', 1, 1, '2020-03-06 13:04:53', '0000-00-00 00:00:00'),
(15, 'ETB BUILDING/ERAC BUILDING', 1, 1, '2020-03-06 13:05:33', '0000-00-00 00:00:00'),
(16, 'MARINE BUILDING (NEW)', 4, 2, '2020-03-06 13:05:55', '0000-00-00 00:00:00'),
(17, 'AUTOMOTIVE BUILDING', 4, 2, '2020-03-06 13:06:10', '0000-00-00 00:00:00'),
(18, 'ADMIN/ENGINEERING BUILDING', 21, 3, '2020-03-06 13:06:46', '0000-00-00 00:00:00'),
(19, 'MECHANICAL ENGINEERING BUILDING (NEW)', 4, 2, '2020-03-06 13:07:25', '0000-00-00 00:00:00'),
(20, 'GABALDON BUILDING', 4, 1, '2020-03-06 13:07:42', '0000-00-00 00:00:00'),
(21, 'INDUSTRIAL ARTS BUILDING', 7, 1, '2020-03-06 13:07:57', '2020-03-06 13:13:02'),
(22, 'INDUSTRIAL TECHNOLOGY BUILDING', 12, 3, '2020-03-06 13:08:33', '0000-00-00 00:00:00'),
(23, 'DRAFTING BUILDING', 8, 2, '2020-03-06 13:16:57', '0000-00-00 00:00:00'),
(24, 'Education Building', 15, 3, '2020-03-10 15:29:22', '0000-00-00 00:00:00');

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
(0, 'New building successfully added: ACADEMIC BUILDING (CAS)', '2020-03-06 04:53:24', 1),
(0, 'Successfully deleted building: 4', '2020-03-06 04:53:30', 1),
(0, 'Successfully deleted building: Science Building', '2020-03-06 04:53:33', 1),
(0, 'New building successfully added: HOME TECHNOLOGY BUILDING (HTB)', '2020-03-06 04:54:20', 1),
(0, 'New building successfully added: COLLEGE OF BUSINESS AND ENTREPRENEURSHIP (COBE) (NEW BUILDING)', '2020-03-06 04:56:16', 1),
(0, 'New building successfully added: ABS-CBN LINGKOD KAPAMILYA BUILDING', '2020-03-06 04:56:51', 1),
(0, 'New building successfully added: GRADUATE SCHOOL BUILDING', '2020-03-06 04:57:24', 1),
(0, 'New building successfully added: COLLEGE OF ARCHITECTURE AND ALLIED DICIPLINE (CAAD)', '2020-03-06 04:58:09', 1),
(0, 'Building successfully updated: INFORMATION TECHNOLOGY BUILDING (IT)', '2020-03-06 04:58:49', 1),
(0, 'New building successfully added: INFORMATION TECHNOLOGY TRAINING DEVELOPMENT CENTER', '2020-03-06 05:03:27', 1),
(0, 'New building successfully added: TECHNOLOGICAL BUILDING', '2020-03-06 05:03:58', 1),
(0, 'New building successfully added: SCIENCE BUILDING', '2020-03-06 05:04:41', 1),
(0, 'New building successfully added: FOUNDRY BUILDING', '2020-03-06 05:04:53', 1),
(0, 'New building successfully added: ETB BUILDING/ERAC BUILDING', '2020-03-06 05:05:33', 1),
(0, 'New building successfully added: MARINE BUILDING (NEW)', '2020-03-06 05:05:55', 1),
(0, 'New building successfully added: AUTOMOTIVE BUILDING', '2020-03-06 05:06:10', 1),
(0, 'New building successfully added: ADMIN/ENGINEERING BUILDING', '2020-03-06 05:06:46', 1),
(0, 'New building successfully added: MECHANICAL ENGINEERING BUILDING (NEW)', '2020-03-06 05:07:25', 1),
(0, 'New building successfully added: GABALDON BUILDING', '2020-03-06 05:07:42', 1),
(0, 'New building successfully added: INDUSTRIAL BUILDING', '2020-03-06 05:07:57', 1),
(0, 'New building successfully added: INDUSTRIAL TECHNOLOGY BUILDING', '2020-03-06 05:08:33', 1),
(0, 'Building successfully updated: INDUSTRIAL ARTS BUILDING', '2020-03-06 05:09:25', 1),
(0, 'Building successfully updated: INDUSTRIAL ARTS BUILDING', '2020-03-06 05:13:02', 1),
(0, 'New building successfully added: DRAFTING BUILDING', '2020-03-06 05:16:58', 1),
(0, 'New room successfully added: frm_room_add', '2020-03-06 05:46:12', 1),
(0, 'New room successfully added: ACB22', '2020-03-06 05:46:25', 1),
(0, 'Room successfully updated: ACB21', '2020-03-06 05:47:02', 1),
(0, 'New room successfully added: ACB23', '2020-03-06 05:47:16', 1),
(0, 'New room successfully added: ACB24', '2020-03-06 05:47:24', 1),
(0, 'New room successfully added: ACB25', '2020-03-06 05:47:34', 1),
(0, 'New room successfully added: ACB26', '2020-03-06 05:47:45', 1),
(0, 'New room successfully added: ACB27', '2020-03-06 05:47:57', 1),
(0, 'New room successfully added: ACB28', '2020-03-06 05:48:04', 1),
(0, 'New room successfully added: ACB31', '2020-03-06 05:48:19', 1),
(0, 'New room successfully added: ACB32', '2020-03-06 05:48:34', 1),
(0, 'New room successfully added: ACB33', '2020-03-06 05:48:43', 1),
(0, 'New room successfully added: ACB33', '2020-03-06 05:48:53', 1),
(0, 'New room successfully added: ACB34', '2020-03-06 05:49:02', 1),
(0, 'New room successfully added: ACB35', '2020-03-06 05:49:20', 1),
(0, 'New room successfully added: ACB36', '2020-03-06 05:49:29', 1),
(0, 'New room successfully added: ACB37', '2020-03-06 05:49:37', 1),
(0, 'New room successfully added: ACB38', '2020-03-06 05:49:48', 1),
(0, 'New room successfully added: HTB101', '2020-03-06 05:50:47', 1),
(0, 'New room successfully added: HTB102', '2020-03-06 05:51:01', 1),
(0, 'New room successfully added: HTB103', '2020-03-06 05:51:20', 1),
(0, 'New room successfully added: HTB105', '2020-03-06 05:51:31', 1),
(0, 'New room successfully added: HTB106', '2020-03-06 05:51:39', 1),
(0, 'New room successfully added: HTB107', '2020-03-06 05:51:52', 1),
(0, 'New room successfully added: HTB201', '2020-03-06 05:52:33', 1),
(0, 'New room successfully added: HTB202', '2020-03-06 05:52:41', 1),
(0, 'Room successfully updated: HTB201', '2020-03-06 05:53:02', 1),
(0, 'New room successfully added: HTB202', '2020-03-06 05:53:20', 1),
(0, 'New room successfully added: HTB203', '2020-03-06 05:53:31', 1),
(0, 'New room successfully added: HTB203', '2020-03-06 05:53:43', 1),
(0, 'New room successfully added: HTB204', '2020-03-06 05:53:52', 1),
(0, 'New room successfully added: HTB205', '2020-03-06 05:53:59', 1),
(0, 'New room successfully added: HTB206', '2020-03-06 05:54:17', 1),
(0, 'New room successfully added: HTB207', '2020-03-06 05:54:33', 1),
(0, 'Room successfully updated: HTB207', '2020-03-06 05:54:49', 1),
(0, 'New room successfully added: HTB208', '2020-03-06 05:55:41', 1),
(0, 'New room successfully added: HTB301', '2020-03-06 05:56:02', 1),
(0, 'New room successfully added: HTB302', '2020-03-06 05:56:11', 1),
(0, 'New room successfully added: HTB303', '2020-03-06 05:56:20', 1),
(0, 'New room successfully added: HTB304', '2020-03-06 05:56:36', 1),
(0, 'New room successfully added: HTB305', '2020-03-06 05:56:47', 1),
(0, 'New room successfully added: HTB306', '2020-03-06 05:57:03', 1),
(0, 'New room successfully added: HTB307', '2020-03-06 05:57:12', 1),
(0, 'New room successfully added: HTB308', '2020-03-06 05:57:34', 1),
(0, 'New room successfully added: HTB309', '2020-03-06 05:57:48', 1),
(0, 'New room successfully added: Room 1', '2020-03-06 05:59:08', 1),
(0, 'New room successfully added: Room 2', '2020-03-06 05:59:16', 1),
(0, 'New room successfully added: Room 3', '2020-03-06 05:59:29', 1),
(0, 'New room successfully added: Room 4', '2020-03-06 05:59:36', 1),
(0, 'New room successfully added: GSB 101', '2020-03-06 06:05:12', 1),
(0, 'New room successfully added: GSB 110', '2020-03-06 06:06:31', 1),
(0, 'New room successfully added: GSB201', '2020-03-06 06:07:15', 1),
(0, 'Room successfully updated: GSB101', '2020-03-06 06:07:22', 1),
(0, 'Room successfully updated: GSB110', '2020-03-06 06:07:29', 1),
(0, 'New room successfully added: GSB202', '2020-03-06 06:07:48', 1),
(0, 'New room successfully added: GSB203', '2020-03-06 06:07:57', 1),
(0, 'New room successfully added: GSB204', '2020-03-06 06:08:08', 1),
(0, 'New room successfully added: GSB205', '2020-03-06 06:08:24', 1),
(0, 'New room successfully added: GSB206', '2020-03-06 06:08:35', 1),
(0, 'New room successfully added: GSB207', '2020-03-06 06:08:43', 1),
(0, 'New room successfully added: GSB208', '2020-03-06 06:08:49', 1),
(0, 'New room successfully added: DRAFTING STUDIO 1', '2020-03-06 06:10:40', 1),
(0, 'New room successfully added: DRAFTING STUDIO 2', '2020-03-06 06:10:47', 1),
(0, 'New room successfully added: DRAFTING STUDIO 3', '2020-03-06 06:10:58', 1),
(0, 'New room successfully added: DRAFTING STUDIO 4', '2020-03-06 06:11:04', 1),
(0, 'New room successfully added: LECTURE ROOM 1', '2020-03-06 06:11:23', 1),
(0, 'New room successfully added: LECTURE ROOM 2', '2020-03-06 06:11:28', 1),
(0, 'New room successfully added: LECTURE ROOM 3', '2020-03-06 06:11:34', 1),
(0, 'New room successfully added: LECTURE ROOM 4', '2020-03-06 06:11:42', 1),
(0, 'New room successfully added: IT201', '2020-03-06 06:12:10', 1),
(0, 'New room successfully added: IT202', '2020-03-06 06:12:20', 1),
(0, 'New room successfully added: METROLOGY LABORATORY ROOM', '2020-03-06 06:13:05', 1),
(0, 'New room successfully added: IT301', '2020-03-06 06:13:15', 1),
(0, 'Room successfully updated: IT201', '2020-03-06 06:14:06', 1),
(0, 'Room successfully updated: IT202', '2020-03-06 06:14:19', 1),
(0, 'New room successfully added: IT203', '2020-03-06 06:14:37', 1),
(0, 'New room successfully added: IT302', '2020-03-06 06:14:58', 1),
(0, 'New room successfully added: IT303', '2020-03-06 06:15:19', 1),
(0, 'New room successfully added: IT304', '2020-03-06 06:15:29', 1),
(0, 'Building successfully updated: INFORMATION TECHNOLOGY TRAINING DEVELOPMENT CENTER (ITTDC)', '2020-03-06 06:17:22', 1),
(0, 'New room successfully added: ITTDC249', '2020-03-06 06:19:56', 1),
(0, 'New room successfully added: ITTDC248', '2020-03-06 06:20:08', 1),
(0, 'New room successfully added: DB101', '2020-03-06 06:25:24', 1),
(0, 'New room successfully added: DB102', '2020-03-06 06:26:12', 1),
(0, 'New room successfully added: DB103', '2020-03-06 06:26:20', 1),
(0, 'New room successfully added: DB104', '2020-03-06 06:26:28', 1),
(0, 'New room successfully added: DB201', '2020-03-06 06:27:14', 1),
(0, 'New room successfully added: DB202', '2020-03-06 06:27:23', 1),
(0, 'New room successfully added: DB203', '2020-03-06 06:27:41', 1),
(0, 'New room successfully added: DB204', '2020-03-06 06:27:49', 1),
(0, 'New room successfully added: TB105', '2020-03-06 06:29:19', 1),
(0, 'New room successfully added: TB101', '2020-03-06 06:30:05', 1),
(0, 'New room successfully added: TB102', '2020-03-06 06:30:20', 1),
(0, 'New room successfully added: TB201', '2020-03-06 06:30:44', 1),
(0, 'New room successfully added: TB202', '2020-03-06 06:30:58', 1),
(0, 'New room successfully added: TB203', '2020-03-06 06:31:11', 1),
(0, 'New room successfully added: TB204', '2020-03-06 06:31:22', 1),
(0, 'New room successfully added: TB205', '2020-03-06 06:31:30', 1),
(0, 'New room successfully added: TB206', '2020-03-06 06:31:41', 1),
(0, 'New room successfully added: TB208', '2020-03-06 06:32:16', 1),
(0, 'New room successfully added: TB301', '2020-03-06 06:32:40', 1),
(0, 'New room successfully added: TB302', '2020-03-06 06:32:48', 1),
(0, 'New room successfully added: TB305', '2020-03-06 06:33:21', 1),
(0, 'New room successfully added: TB303', '2020-03-06 06:33:34', 1),
(0, 'New room successfully added: TB304', '2020-03-06 06:33:43', 1),
(0, 'New room successfully added: TB306', '2020-03-06 06:34:17', 1),
(0, 'New room successfully added: SB127', '2020-03-06 06:35:27', 1),
(0, 'New room successfully added: SB128', '2020-03-06 06:35:37', 1),
(0, 'New room successfully added: SB129', '2020-03-06 06:35:45', 1),
(0, 'New room successfully added: SB129', '2020-03-06 06:35:54', 1),
(0, 'New room successfully added: SB130', '2020-03-06 06:36:03', 1),
(0, 'New room successfully added: SB131', '2020-03-06 06:36:11', 1),
(0, 'New room successfully added: SB132', '2020-03-06 06:36:21', 1),
(0, 'New room successfully added: SB233', '2020-03-06 06:36:56', 1),
(0, 'New room successfully added: SB234', '2020-03-06 06:37:07', 1),
(0, 'New room successfully added: SB235', '2020-03-06 06:37:22', 1),
(0, 'New room successfully added: SB236', '2020-03-06 06:37:29', 1),
(0, 'New room successfully added: SB237', '2020-03-06 06:37:39', 1),
(0, 'New room successfully added: SB238', '2020-03-06 06:37:45', 1),
(0, 'New room successfully added: SB239', '2020-03-06 06:37:52', 1),
(0, 'New room successfully added: SB240', '2020-03-06 06:38:07', 1),
(0, 'New room successfully added: SB322', '2020-03-06 06:38:21', 1),
(0, 'New room successfully added: SB323', '2020-03-06 06:38:31', 1),
(0, 'New room successfully added: SB324', '2020-03-06 06:38:37', 1),
(0, 'New room successfully added: SB326', '2020-03-06 06:38:52', 1),
(0, 'New room successfully added: SB327', '2020-03-06 06:39:04', 1),
(0, 'New room successfully added: SB328', '2020-03-06 06:39:17', 1),
(0, 'New room successfully added: SB329', '2020-03-06 06:39:25', 1),
(0, 'New room successfully added: ROOM 1', '2020-03-06 06:39:46', 1),
(0, 'New room successfully added: ROOM 1', '2020-03-06 06:40:00', 1),
(0, 'New room successfully added: ROOM 201', '2020-03-06 06:40:57', 1),
(0, 'New room successfully added: ROOM 202', '2020-03-06 06:41:03', 1),
(0, 'New room successfully added: ROOM 203', '2020-03-06 06:41:11', 1),
(0, 'New room successfully added: ROOM 201', '2020-03-06 06:41:55', 1),
(0, 'New room successfully added: ROOM 202', '2020-03-06 06:42:04', 1),
(0, 'New room successfully added: ROOM 203', '2020-03-06 06:42:41', 1),
(0, 'New room successfully added: EB201', '2020-03-06 06:44:13', 1),
(0, 'New room successfully added: EB202', '2020-03-06 06:44:24', 1),
(0, 'New room successfully added: EB203', '2020-03-06 06:44:36', 1),
(0, 'New room successfully added: EB205', '2020-03-06 06:44:59', 1),
(0, 'New room successfully added: EB206', '2020-03-06 06:45:08', 1),
(0, 'New room successfully added: EB207', '2020-03-06 06:45:25', 1),
(0, 'New room successfully added: EB209', '2020-03-06 06:45:38', 1),
(0, 'New room successfully added: EB210', '2020-03-06 06:45:48', 1),
(0, 'New room successfully added: EB211', '2020-03-06 06:46:03', 1),
(0, 'New room successfully added: EB301', '2020-03-06 06:46:25', 1),
(0, 'New room successfully added: EB302', '2020-03-06 06:46:31', 1),
(0, 'New room successfully added: EB303', '2020-03-06 06:46:36', 1),
(0, 'New room successfully added: EB304', '2020-03-06 06:46:43', 1),
(0, 'New room successfully added: EB305', '2020-03-06 06:46:48', 1),
(0, 'New room successfully added: EB306', '2020-03-06 06:46:56', 1),
(0, 'New room successfully added: EB307', '2020-03-06 06:47:12', 1),
(0, 'New room successfully added: EB308', '2020-03-06 06:47:18', 1),
(0, 'New room successfully added: EB310', '2020-03-06 06:47:30', 1),
(0, 'New room successfully added: EB311', '2020-03-06 06:47:37', 1),
(0, 'New room successfully added: EB312', '2020-03-06 06:47:46', 1),
(0, 'New room successfully added: EB312', '2020-03-06 06:47:54', 1),
(0, 'New room successfully added: EB313', '2020-03-06 06:50:39', 1),
(0, 'New room successfully added: EB314', '2020-03-06 06:50:50', 1),
(0, 'New room successfully added: EB315', '2020-03-06 06:50:56', 1),
(0, 'New room successfully added: EB316', '2020-03-06 06:51:10', 1),
(0, 'New room successfully added: EB317', '2020-03-06 06:52:00', 1),
(0, 'New room successfully added: ELB201', '2020-03-06 06:53:06', 1),
(0, 'New room successfully added: ELB202', '2020-03-06 06:53:17', 1),
(0, 'New room successfully added: ELB203', '2020-03-06 06:53:23', 1),
(0, 'New room successfully added: GB1', '2020-03-06 06:53:52', 1),
(0, 'New room successfully added: GB2', '2020-03-06 06:53:59', 1),
(0, 'New room successfully added: GB3', '2020-03-06 06:54:08', 1),
(0, 'New room successfully added: GB4', '2020-03-06 06:54:19', 1),
(0, 'New room successfully added: IAB01', '2020-03-06 06:54:50', 1),
(0, 'New room successfully added: IAB02', '2020-03-06 06:55:01', 1),
(0, 'New room successfully added: IAB03', '2020-03-06 06:55:11', 1),
(0, 'New room successfully added: IAB04A', '2020-03-06 06:55:21', 1),
(0, 'New room successfully added: IAB04B', '2020-03-06 06:55:28', 1),
(0, 'New room successfully added: IAB05', '2020-03-06 06:55:37', 1),
(0, 'New room successfully added: IAB06', '2020-03-06 06:55:47', 1),
(0, 'New room successfully added: ITB103', '2020-03-06 06:56:36', 1),
(0, 'New room successfully added: ITB104', '2020-03-06 06:56:48', 1),
(0, 'New room successfully added: ITB105', '2020-03-06 06:56:58', 1),
(0, 'New room successfully added: ITB201', '2020-03-06 06:57:18', 1),
(0, 'New room successfully added: ITB202', '2020-03-06 06:58:37', 1),
(0, 'New room successfully added: ITB203', '2020-03-06 06:58:51', 1),
(0, 'New room successfully added: ITB205', '2020-03-06 06:59:08', 1),
(0, 'New room successfully added: ITB305', '2020-03-06 06:59:24', 1),
(0, 'New room successfully added: ITB306', '2020-03-06 06:59:33', 1),
(0, 'New room successfully added: ITB304', '2020-03-06 06:59:43', 1),
(0, 'New room successfully added: ITB303', '2020-03-06 06:59:55', 1),
(0, 'New room successfully added: ITB301', '2020-03-06 07:00:06', 1),
(0, 'New building successfully added: Education Building', '2020-03-10 07:29:22', 1);

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
  `password` text NOT NULL,
  `user_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_type_id`, `faculty_id`, `username`, `password`, `user_added`, `user_modified`) VALUES
(1, 5, 1, 'admin', '$2y$10$HMjcXPgM006ooqyk4c26/.pEtmjHhyjxuEiDiP0KLx8PHP0qQ/.Nq', '2020-02-25 17:06:56', '2020-03-11 07:08:57');

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
-- Indexes for table `tbl_adjacent`
--
ALTER TABLE `tbl_adjacent`
  ADD PRIMARY KEY (`adjacent_id`),
  ADD KEY `building_id` (`building_id`);

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
-- AUTO_INCREMENT for table `tbl_adjacent`
--
ALTER TABLE `tbl_adjacent`
  MODIFY `adjacent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_building`
--
ALTER TABLE `tbl_building`
  MODIFY `building_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_adjacent`
--
ALTER TABLE `tbl_adjacent`
  ADD CONSTRAINT `tbl_adjacent_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `tbl_building` (`building_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
