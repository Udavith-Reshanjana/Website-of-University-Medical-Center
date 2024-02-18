-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 09:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseofumc`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `appoinment_no` int(11) NOT NULL,
  `com_id` varchar(15) NOT NULL,
  `appoinment_date` date NOT NULL,
  `id` varchar(15) DEFAULT NULL,
  `appoinment_time` time NOT NULL,
  `geder` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `symptoms` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`appoinment_no`, `com_id`, `appoinment_date`, `id`, `appoinment_time`, `geder`, `email`, `symptoms`) VALUES
(1, 'PS/2020/322', '2024-02-11', NULL, '17:45:00', 'Male', 'reshanj-ps20322@stu.kln.ac.lk', ''),
(2, 'PS/2020/322', '2024-02-11', NULL, '17:59:00', 'Male', 'sl.udavith@kln.ac.lk', ''),
(3, 'PS/2020/322', '2024-02-11', NULL, '18:37:00', 'Male', 'sl.udavith@stu.kln.ac.lk', '');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_contact_no`
--

CREATE TABLE `appoinment_contact_no` (
  `appoinment_no` int(11) NOT NULL,
  `com_id` varchar(15) NOT NULL,
  `contact_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communitty`
--

CREATE TABLE `communitty` (
  `com_id` varchar(14) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `communitty`
--

INSERT INTO `communitty` (`com_id`, `name`, `user_id`, `password`, `type`) VALUES
('BS/2020/247', 'Tharuka Rednando', 'fernand-bs20247', '00000', 'undergraduate'),
('PS/2020/274', 'B.N.R. Ariyarathne', 'ariyara-ps20274', '00000', 'undergraduate'),
('PS/2020/322', 'R.M.U. Reshanjana', 'reshanj-ps20322', '00000', 'undergraduate');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `specilized_area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `specilized_area`) VALUES
('DOC00001', 'Chinthaka Rathnayake', 'Chronic Disease Management'),
('DOC00002', 'N. Thivanka De Silva', 'Mental Health');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_qualification`
--

CREATE TABLE `doctor_qualification` (
  `id` varchar(15) NOT NULL,
  `qualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_qualification`
--

INSERT INTO `doctor_qualification` (`id`, `qualification`) VALUES
('DOC00001', 'MBBS (Kelani)'),
('DOC00002', 'MBBS (Colombo)'),
('DOC00002', 'MCGP (SL)'),
('DOC00002', 'MNS (LSU, USA)');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_no` int(11) NOT NULL,
  `com_id` varchar(15) NOT NULL,
  `feedback_date` date NOT NULL,
  `waiting_time` int(11) NOT NULL,
  `doctor_knowladege` int(11) NOT NULL,
  `doctor_kindness` int(11) NOT NULL,
  `hygene` int(11) NOT NULL,
  `suggesstions` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_no`, `com_id`, `feedback_date`, `waiting_time`, `doctor_knowladege`, `doctor_kindness`, `hygene`, `suggesstions`) VALUES
(1, 'PS/2020/322', '2024-02-11', 4, 2, 3, 5, ''),
(2, 'PS/2020/322', '2024-02-11', 4, 1, 2, 5, 'scxv'),
(3, 'PS/2020/322', '2024-02-11', 5, 5, 5, 5, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`appoinment_no`,`com_id`),
  ADD KEY `id` (`id`),
  ADD KEY `com_id` (`com_id`);

--
-- Indexes for table `appoinment_contact_no`
--
ALTER TABLE `appoinment_contact_no`
  ADD PRIMARY KEY (`appoinment_no`,`com_id`,`contact_no`);

--
-- Indexes for table `communitty`
--
ALTER TABLE `communitty`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_qualification`
--
ALTER TABLE `doctor_qualification`
  ADD PRIMARY KEY (`id`,`qualification`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_no`,`com_id`),
  ADD KEY `com_id` (`com_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`id`) REFERENCES `doctor` (`id`),
  ADD CONSTRAINT `appoinment_ibfk_3` FOREIGN KEY (`com_id`) REFERENCES `communitty` (`com_id`);

--
-- Constraints for table `appoinment_contact_no`
--
ALTER TABLE `appoinment_contact_no`
  ADD CONSTRAINT `appoinment_contact_no_ibfk_1` FOREIGN KEY (`appoinment_no`,`com_id`) REFERENCES `appoinment` (`appoinment_no`, `com_id`);

--
-- Constraints for table `doctor_qualification`
--
ALTER TABLE `doctor_qualification`
  ADD CONSTRAINT `doctor_qualification_ibfk_1` FOREIGN KEY (`id`) REFERENCES `doctor` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `communitty` (`com_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
