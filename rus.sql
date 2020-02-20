-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 06:08 PM
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
  `building_id` int(11) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `building_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `building_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_building`
--

INSERT INTO `tbl_building` (`building_id`, `building_name`, `building_added`, `building_updated`) VALUES
(4, 'College of Arts & Sciences', '2020-01-21 02:03:45', '2020-01-21 13:48:54'),
(5, 'College of Architecture & Allied Disciplines', '2020-01-21 02:06:38', NULL),
(6, 'Information Technology', '2020-01-21 02:06:52', NULL),
(7, 'Administration', '2020-01-21 02:07:01', NULL),
(8, 'Technology', '2020-01-21 02:07:07', NULL),
(9, 'Graduate School', '2020-01-21 02:07:28', NULL),
(10, 'Science', '2020-01-21 02:07:43', NULL),
(11, 'Information Technology Training and Development Centre', '2020-01-21 02:09:03', '2020-01-21 13:43:54'),
(12, 'Engineering', '2020-01-21 02:09:27', NULL),
(14, 'Marine', '2020-01-21 13:54:37', NULL),
(15, 'College of Education', '2020-01-21 20:32:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instructor`
--

CREATE TABLE `tbl_instructor` (
  `instructor_id` int(11) NOT NULL,
  `instructor_name` varchar(255) NOT NULL,
  `instructor_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `instructor_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_instructor`
--

INSERT INTO `tbl_instructor` (`instructor_id`, `instructor_name`, `instructor_added`, `instructor_updated`) VALUES
(1, 'Dianne Remot', '2020-01-22 23:00:11', NULL),
(2, 'Eric Sta. Singh', '2020-01-22 23:00:34', NULL),
(3, 'Ritchell Villafuerte', '2020-01-22 23:00:45', NULL),
(4, 'Dindo Cusi', '2020-01-22 23:00:49', NULL),
(5, 'Jessie Paragas', '2020-01-22 23:00:53', NULL),
(6, 'Jude Urmeneta', '2020-01-22 23:01:01', NULL),
(7, 'Raymond Daylo', '2020-01-22 23:01:07', '2020-01-22 23:10:01'),
(8, 'Giovanni Delos Reyes', '2020-01-22 23:01:19', '2020-01-22 23:10:14'),
(9, 'Benito Badilla', '2020-01-22 23:01:29', '2020-01-22 23:09:50'),
(10, 'Wendie Cerena', '2020-01-22 23:01:36', NULL),
(11, 'Lyra Nuevas', '2020-01-22 23:02:16', NULL),
(12, 'Ronnie Cabillan', '2020-01-22 23:03:33', NULL),
(13, 'Vienmar Ogrimen', '2020-01-22 23:03:58', NULL),
(14, 'Niel Pascual', '2020-01-22 23:05:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_floor` int(11) NOT NULL,
  `room_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `room_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `building_id`, `room_type`, `room_number`, `room_floor`, `room_added`, `room_updated`) VALUES
(1, 4, 'Laboratory', 104, 1, '2020-01-21 16:52:34', NULL),
(10, 0, 'Laboratory', 1, 1, '2020-01-22 22:08:22', NULL),
(13, 4, 'Laboratory', 102, 1, '2020-01-22 22:10:44', '2020-01-22 22:19:09'),
(14, 6, 'Laboratory', 201, 2, '2020-01-22 23:41:23', NULL),
(15, 11, 'Lecture', 10, 1, '2020-01-23 00:35:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  `subject_code` varchar(25) NOT NULL,
  `subject_description` varchar(255) NOT NULL,
  `year_level` varchar(20) NOT NULL,
  `sections` int(11) NOT NULL,
  `sets` int(11) NOT NULL,
  `set_hours` int(11) NOT NULL,
  `subject_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subject_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_building`
--
ALTER TABLE `tbl_building`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `tbl_instructor`
--
ALTER TABLE `tbl_instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_building`
--
ALTER TABLE `tbl_building`
  MODIFY `building_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_instructor`
--
ALTER TABLE `tbl_instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
