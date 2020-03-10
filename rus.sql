-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 02:35 PM
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
(23, 'DRAFTING BUILDING', 8, 2, '2020-03-06 13:16:57', '0000-00-00 00:00:00');

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
(0, 'New room successfully added: ITB301', '2020-03-06 07:00:06', 1);

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
  `room_number` varchar(20) NOT NULL,
  `room_floor` int(11) NOT NULL,
  `room_added` datetime NOT NULL DEFAULT current_timestamp(),
  `room_modified` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_type_id`, `building_id`, `room_number`, `room_floor`, `room_added`, `room_modified`) VALUES
(4, 3, 2, '4', 4, '2020-02-21 16:53:19', NULL),
(5, 2, 3, 'HTB201', 2, '2020-02-26 16:38:23', '2020-03-06 13:53:02'),
(6, 1, 2, '122', 2, '2020-02-28 09:42:38', '2020-02-28 10:43:11'),
(7, 2, 5, 'ACB21', 2, '2020-03-06 13:46:12', '2020-03-06 13:47:02'),
(8, 2, 5, 'ACB22', 2, '2020-03-06 13:46:25', NULL),
(9, 2, 5, 'ACB23', 2, '2020-03-06 13:47:16', NULL),
(10, 2, 5, 'ACB24', 2, '2020-03-06 13:47:24', NULL),
(11, 2, 5, 'ACB25', 2, '2020-03-06 13:47:34', NULL),
(12, 2, 5, 'ACB26', 2, '2020-03-06 13:47:45', NULL),
(13, 2, 5, 'ACB27', 2, '2020-03-06 13:47:57', NULL),
(14, 2, 5, 'ACB28', 2, '2020-03-06 13:48:04', NULL),
(15, 2, 5, 'ACB31', 3, '2020-03-06 13:48:19', NULL),
(16, 2, 5, 'ACB32', 3, '2020-03-06 13:48:34', NULL),
(17, 2, 5, 'ACB33', 3, '2020-03-06 13:48:43', NULL),
(18, 2, 5, 'ACB33', 3, '2020-03-06 13:48:53', NULL),
(19, 2, 5, 'ACB34', 3, '2020-03-06 13:49:02', NULL),
(20, 2, 5, 'ACB35', 3, '2020-03-06 13:49:19', NULL),
(21, 2, 5, 'ACB36', 3, '2020-03-06 13:49:29', NULL),
(22, 2, 5, 'ACB37', 3, '2020-03-06 13:49:37', NULL),
(23, 2, 5, 'ACB38', 3, '2020-03-06 13:49:48', NULL),
(24, 2, 6, 'HTB101', 1, '2020-03-06 13:50:47', NULL),
(25, 1, 6, 'HTB102', 1, '2020-03-06 13:51:01', NULL),
(26, 2, 6, 'HTB103', 1, '2020-03-06 13:51:20', NULL),
(27, 2, 6, 'HTB105', 1, '2020-03-06 13:51:31', NULL),
(28, 2, 6, 'HTB106', 1, '2020-03-06 13:51:38', NULL),
(29, 2, 6, 'HTB107', 1, '2020-03-06 13:51:52', NULL),
(30, 2, 6, 'HTB201', 2, '2020-03-06 13:52:33', NULL),
(31, 2, 6, 'HTB202', 2, '2020-03-06 13:52:41', NULL),
(32, 2, 6, 'HTB202', 2, '2020-03-06 13:53:20', NULL),
(33, 2, 6, 'HTB203', 2, '2020-03-06 13:53:31', NULL),
(34, 2, 6, 'HTB203', 2, '2020-03-06 13:53:43', NULL),
(35, 2, 6, 'HTB204', 2, '2020-03-06 13:53:52', NULL),
(36, 2, 6, 'HTB205', 2, '2020-03-06 13:53:59', NULL),
(37, 2, 6, 'HTB206', 2, '2020-03-06 13:54:17', NULL),
(38, 1, 6, 'HTB207', 2, '2020-03-06 13:54:32', '2020-03-06 13:54:49'),
(39, 2, 6, 'HTB208', 2, '2020-03-06 13:55:41', NULL),
(40, 2, 6, 'HTB301', 3, '2020-03-06 13:56:02', NULL),
(41, 2, 6, 'HTB302', 3, '2020-03-06 13:56:11', NULL),
(42, 2, 6, 'HTB303', 3, '2020-03-06 13:56:20', NULL),
(43, 2, 6, 'HTB304', 3, '2020-03-06 13:56:36', NULL),
(44, 2, 6, 'HTB305', 3, '2020-03-06 13:56:47', NULL),
(45, 2, 6, 'HTB306', 3, '2020-03-06 13:57:03', NULL),
(46, 2, 6, 'HTB307', 3, '2020-03-06 13:57:12', NULL),
(47, 1, 6, 'HTB308', 3, '2020-03-06 13:57:34', NULL),
(48, 1, 6, 'HTB309', 3, '2020-03-06 13:57:48', NULL),
(49, 2, 7, 'Room 1', 3, '2020-03-06 13:59:08', NULL),
(50, 2, 7, 'Room 2', 3, '2020-03-06 13:59:16', NULL),
(51, 2, 7, 'Room 3', 3, '2020-03-06 13:59:29', NULL),
(52, 2, 7, 'Room 4', 3, '2020-03-06 13:59:36', NULL),
(53, 1, 9, 'GSB101', 1, '2020-03-06 14:05:12', '2020-03-06 14:07:22'),
(54, 1, 9, 'GSB110', 1, '2020-03-06 14:06:31', '2020-03-06 14:07:28'),
(55, 2, 9, 'GSB201', 2, '2020-03-06 14:07:15', NULL),
(56, 2, 9, 'GSB202', 2, '2020-03-06 14:07:48', NULL),
(57, 2, 9, 'GSB203', 2, '2020-03-06 14:07:57', NULL),
(58, 2, 9, 'GSB204', 2, '2020-03-06 14:08:08', NULL),
(59, 2, 9, 'GSB205', 2, '2020-03-06 14:08:24', NULL),
(60, 2, 9, 'GSB206', 2, '2020-03-06 14:08:35', NULL),
(61, 2, 9, 'GSB207', 2, '2020-03-06 14:08:43', NULL),
(62, 2, 9, 'GSB208', 2, '2020-03-06 14:08:49', NULL),
(63, 2, 10, 'DRAFTING STUDIO 1', 1, '2020-03-06 14:10:40', NULL),
(64, 2, 10, 'DRAFTING STUDIO 2', 1, '2020-03-06 14:10:47', NULL),
(65, 2, 10, 'DRAFTING STUDIO 3', 2, '2020-03-06 14:10:58', NULL),
(66, 2, 10, 'DRAFTING STUDIO 4', 2, '2020-03-06 14:11:04', NULL),
(67, 2, 10, 'LECTURE ROOM 1', 2, '2020-03-06 14:11:23', NULL),
(68, 2, 10, 'LECTURE ROOM 2', 2, '2020-03-06 14:11:28', NULL),
(69, 2, 10, 'LECTURE ROOM 3', 2, '2020-03-06 14:11:34', NULL),
(70, 2, 10, 'LECTURE ROOM 4', 2, '2020-03-06 14:11:42', NULL),
(71, 1, 3, 'IT201', 2, '2020-03-06 14:12:10', '2020-03-06 14:14:06'),
(72, 1, 3, 'IT202', 2, '2020-03-06 14:12:20', '2020-03-06 14:14:19'),
(73, 1, 3, 'METROLOGY LABORATORY', 2, '2020-03-06 14:13:05', NULL),
(74, 2, 3, 'IT301', 3, '2020-03-06 14:13:15', NULL),
(75, 2, 3, 'IT203', 2, '2020-03-06 14:14:37', NULL),
(76, 2, 3, 'IT302', 3, '2020-03-06 14:14:58', NULL),
(77, 1, 3, 'IT303', 3, '2020-03-06 14:15:19', NULL),
(78, 1, 3, 'IT304', 3, '2020-03-06 14:15:29', NULL),
(79, 1, 11, 'ITTDC249', 1, '2020-03-06 14:19:56', NULL),
(80, 1, 11, 'ITTDC248', 1, '2020-03-06 14:20:07', NULL),
(81, 1, 23, 'DB101', 1, '2020-03-06 14:25:24', NULL),
(82, 1, 23, 'DB102', 1, '2020-03-06 14:26:12', NULL),
(83, 1, 23, 'DB103', 1, '2020-03-06 14:26:20', NULL),
(84, 1, 23, 'DB104', 1, '2020-03-06 14:26:28', NULL),
(85, 1, 23, 'DB201', 2, '2020-03-06 14:27:14', NULL),
(86, 1, 23, 'DB202', 2, '2020-03-06 14:27:23', NULL),
(87, 1, 23, 'DB203', 2, '2020-03-06 14:27:41', NULL),
(88, 1, 23, 'DB204', 2, '2020-03-06 14:27:49', NULL),
(89, 2, 12, 'TB105', 1, '2020-03-06 14:29:19', NULL),
(90, 1, 12, 'TB101', 1, '2020-03-06 14:30:05', NULL),
(91, 1, 12, 'TB102', 1, '2020-03-06 14:30:20', NULL),
(92, 1, 12, 'TB201', 2, '2020-03-06 14:30:44', NULL),
(93, 1, 12, 'TB202', 2, '2020-03-06 14:30:58', NULL),
(94, 2, 12, 'TB203', 2, '2020-03-06 14:31:11', NULL),
(95, 2, 12, 'TB204', 2, '2020-03-06 14:31:22', NULL),
(96, 2, 12, 'TB205', 2, '2020-03-06 14:31:30', NULL),
(97, 2, 12, 'TB206', 2, '2020-03-06 14:31:41', NULL),
(98, 1, 12, 'TB208', 2, '2020-03-06 14:32:16', NULL),
(99, 2, 12, 'TB301', 3, '2020-03-06 14:32:40', NULL),
(100, 2, 12, 'TB302', 3, '2020-03-06 14:32:48', NULL),
(101, 2, 12, 'TB305', 3, '2020-03-06 14:33:21', NULL),
(102, 1, 12, 'TB303', 3, '2020-03-06 14:33:34', NULL),
(103, 1, 12, 'TB304', 3, '2020-03-06 14:33:43', NULL),
(104, 1, 12, 'TB306', 3, '2020-03-06 14:34:17', NULL),
(105, 2, 13, 'SB127', 1, '2020-03-06 14:35:27', NULL),
(106, 2, 13, 'SB128', 1, '2020-03-06 14:35:37', NULL),
(107, 2, 13, 'SB129', 1, '2020-03-06 14:35:45', NULL),
(108, 2, 13, 'SB129', 1, '2020-03-06 14:35:54', NULL),
(109, 2, 13, 'SB130', 1, '2020-03-06 14:36:03', NULL),
(110, 2, 13, 'SB131', 1, '2020-03-06 14:36:11', NULL),
(111, 2, 13, 'SB132', 1, '2020-03-06 14:36:21', NULL),
(112, 2, 9, 'SB233', 1, '2020-03-06 14:36:56', NULL),
(113, 1, 13, 'SB234', 2, '2020-03-06 14:37:07', NULL),
(114, 2, 13, 'SB235', 2, '2020-03-06 14:37:22', NULL),
(115, 2, 13, 'SB236', 2, '2020-03-06 14:37:29', NULL),
(116, 2, 13, 'SB237', 2, '2020-03-06 14:37:38', NULL),
(117, 2, 13, 'SB238', 2, '2020-03-06 14:37:45', NULL),
(118, 2, 13, 'SB239', 2, '2020-03-06 14:37:52', NULL),
(119, 2, 13, 'SB240', 2, '2020-03-06 14:38:07', NULL),
(120, 1, 13, 'SB322', 3, '2020-03-06 14:38:21', NULL),
(121, 2, 13, 'SB323', 3, '2020-03-06 14:38:31', NULL),
(122, 2, 13, 'SB324', 3, '2020-03-06 14:38:37', NULL),
(123, 2, 13, 'SB326', 3, '2020-03-06 14:38:51', NULL),
(124, 1, 13, 'SB327', 3, '2020-03-06 14:39:04', NULL),
(125, 1, 13, 'SB328', 3, '2020-03-06 14:39:17', NULL),
(126, 1, 13, 'SB329', 3, '2020-03-06 14:39:25', NULL),
(127, 1, 14, 'ROOM 1', 1, '2020-03-06 14:39:46', NULL),
(128, 1, 15, 'ROOM 1', 1, '2020-03-06 14:40:00', NULL),
(129, 2, 16, 'ROOM 201', 2, '2020-03-06 14:40:57', NULL),
(130, 2, 16, 'ROOM 202', 2, '2020-03-06 14:41:03', NULL),
(131, 2, 16, 'ROOM 203', 2, '2020-03-06 14:41:11', NULL),
(132, 2, 17, 'ROOM 201', 2, '2020-03-06 14:41:55', NULL),
(133, 2, 17, 'ROOM 202', 2, '2020-03-06 14:42:04', NULL),
(134, 2, 17, 'ROOM 203', 2, '2020-03-06 14:42:40', NULL),
(135, 2, 18, 'EB201', 2, '2020-03-06 14:44:13', NULL),
(136, 2, 18, 'EB202', 2, '2020-03-06 14:44:24', NULL),
(137, 2, 18, 'EB203', 2, '2020-03-06 14:44:35', NULL),
(138, 2, 18, 'EB205', 2, '2020-03-06 14:44:59', NULL),
(139, 2, 18, 'EB206', 2, '2020-03-06 14:45:08', NULL),
(140, 1, 18, 'EB207', 2, '2020-03-06 14:45:24', NULL),
(141, 2, 18, 'EB209', 2, '2020-03-06 14:45:38', NULL),
(142, 2, 18, 'EB210', 2, '2020-03-06 14:45:48', NULL),
(143, 2, 18, 'EB211', 2, '2020-03-06 14:46:03', NULL),
(144, 2, 18, 'EB301', 3, '2020-03-06 14:46:25', NULL),
(145, 2, 18, 'EB302', 3, '2020-03-06 14:46:31', NULL),
(146, 2, 18, 'EB303', 3, '2020-03-06 14:46:36', NULL),
(147, 2, 18, 'EB304', 3, '2020-03-06 14:46:43', NULL),
(148, 2, 18, 'EB305', 3, '2020-03-06 14:46:48', NULL),
(149, 2, 18, 'EB306', 3, '2020-03-06 14:46:56', NULL),
(150, 1, 18, 'EB307', 3, '2020-03-06 14:47:12', NULL),
(151, 2, 18, 'EB308', 3, '2020-03-06 14:47:18', NULL),
(152, 2, 18, 'EB310', 3, '2020-03-06 14:47:30', NULL),
(153, 2, 18, 'EB311', 3, '2020-03-06 14:47:37', NULL),
(154, 2, 18, 'EB312', 3, '2020-03-06 14:47:46', NULL),
(156, 2, 18, 'EB313', 3, '2020-03-06 14:50:38', NULL),
(157, 2, 18, 'EB314', 3, '2020-03-06 14:50:50', NULL),
(158, 2, 18, 'EB315', 3, '2020-03-06 14:50:56', NULL),
(159, 1, 18, 'EB316', 3, '2020-03-06 14:51:10', NULL),
(160, 1, 18, 'EB317', 3, '2020-03-06 14:52:00', NULL),
(161, 1, 19, 'ELB201', 2, '2020-03-06 14:53:06', NULL),
(162, 1, 19, 'ELB202', 2, '2020-03-06 14:53:17', NULL),
(163, 1, 19, 'ELB203', 2, '2020-03-06 14:53:23', NULL),
(164, 1, 20, 'GB1', 1, '2020-03-06 14:53:52', NULL),
(165, 2, 20, 'GB2', 1, '2020-03-06 14:53:58', NULL),
(166, 2, 20, 'GB3', 1, '2020-03-06 14:54:08', NULL),
(167, 1, 20, 'GB4', 1, '2020-03-06 14:54:19', NULL),
(168, 1, 21, 'IAB01', 1, '2020-03-06 14:54:50', NULL),
(169, 1, 21, 'IAB02', 1, '2020-03-06 14:55:01', NULL),
(170, 1, 21, 'IAB03', 1, '2020-03-06 14:55:11', NULL),
(171, 1, 21, 'IAB04A', 1, '2020-03-06 14:55:20', NULL),
(172, 1, 21, 'IAB04B', 1, '2020-03-06 14:55:28', NULL),
(173, 1, 21, 'IAB05', 1, '2020-03-06 14:55:37', NULL),
(174, 1, 21, 'IAB06', 1, '2020-03-06 14:55:47', NULL),
(175, 1, 22, 'ITB103', 1, '2020-03-06 14:56:36', NULL),
(176, 1, 22, 'ITB104', 1, '2020-03-06 14:56:48', NULL),
(177, 1, 22, 'ITB105', 1, '2020-03-06 14:56:58', NULL),
(178, 1, 22, 'ITB201', 2, '2020-03-06 14:57:18', NULL),
(179, 2, 22, 'ITB202', 2, '2020-03-06 14:58:37', NULL),
(180, 2, 22, 'ITB203', 2, '2020-03-06 14:58:51', NULL),
(181, 1, 22, 'ITB205', 2, '2020-03-06 14:59:08', NULL),
(182, 2, 22, 'ITB305', 3, '2020-03-06 14:59:24', NULL),
(183, 2, 22, 'ITB306', 3, '2020-03-06 14:59:33', NULL),
(184, 1, 22, 'ITB304', 3, '2020-03-06 14:59:43', NULL),
(185, 2, 22, 'ITB303', 3, '2020-03-06 14:59:55', NULL),
(186, 2, 22, 'ITB301', 3, '2020-03-06 15:00:06', NULL);

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
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `sy_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `schedule_added` datetime NOT NULL,
  `schedule_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`schedule_id`, `room_id`, `subject_id`, `faculty_id`, `time_start`, `time_end`, `sy_id`, `semester_id`, `schedule_added`, `schedule_modified`) VALUES
(1, 0, 0, 0, '00:00:00', '00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 5, 3, 1, '07:00:00', '13:00:00', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_type_id`, `faculty_id`, `username`, `password`, `user_added`, `user_modified`) VALUES
(1, 5, 1, 'admin', '$2y$10$wrTjFsvYNtXtgTFZ2ZPIJuXYU5Mki8WYbl2osbFuMKOCCLcS9afeC', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  MODIFY `building_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `tbl_room_type`
--
ALTER TABLE `tbl_room_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
