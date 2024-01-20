-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2024 at 04:01 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chattingspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sno` int NOT NULL,
  `rev_id` varchar(100) DEFAULT NULL,
  `sent_id` varchar(100) DEFAULT NULL,
  `msg` text,
  `status` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `creation_time` varchar(100) DEFAULT NULL,
  `edited_by` varchar(100) DEFAULT NULL,
  `edition_time` varchar(100) DEFAULT NULL,
  `admin_remarks` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sno`, `rev_id`, `sent_id`, `msg`, `status`, `created_by`, `creation_time`, `edited_by`, `edition_time`, `admin_remarks`) VALUES
(13, '5', '7', 'Hello', '1', '\r\n        7', '20-01-2024 15:40:21', NULL, NULL, NULL),
(14, '7', '5', 'hii', '1', '\r\n        5', '20-01-2024 15:48:21', NULL, NULL, NULL),
(15, '5', '7', 'jelo', '1', '\r\n        7', '20-01-2024 15:48:26', NULL, NULL, NULL),
(16, '5', '7', 'what is going on', '1', '\r\n        7', '20-01-2024 15:48:34', NULL, NULL, NULL),
(17, '7', '5', 'nothing', '1', '\r\n        5', '20-01-2024 15:48:38', NULL, NULL, NULL),
(18, '5', '7', 'hello man', '1', '\r\n        7', '20-01-2024 15:48:42', NULL, NULL, NULL),
(19, '5', '7', 'how', '1', '\r\n        7', '20-01-2024 15:48:45', NULL, NULL, NULL),
(20, '5', '7', 'sfslf', '1', '\r\n        7', '20-01-2024 15:48:47', NULL, NULL, NULL),
(21, '5', '7', 'saf', '1', '\r\n        7', '20-01-2024 15:48:48', NULL, NULL, NULL),
(22, '5', '7', 'adfa', '1', '\r\n        7', '20-01-2024 15:48:48', NULL, NULL, NULL),
(23, '5', '7', 'ds', '1', '\r\n        7', '20-01-2024 15:48:49', NULL, NULL, NULL),
(24, '5', '7', 'dsa', '1', '\r\n        7', '20-01-2024 15:48:49', NULL, NULL, NULL),
(25, '5', '7', 's', '1', '\r\n        7', '20-01-2024 15:48:49', NULL, NULL, NULL),
(26, '5', '7', '', '1', '\r\n        7', '20-01-2024 15:48:49', NULL, NULL, NULL),
(27, '7', '5', 'Hello', '1', '\r\n        5', '20-01-2024 15:48:59', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `sno` int NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `st_time` varchar(100) DEFAULT NULL,
  `en_time` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `creation_time` varchar(100) DEFAULT NULL,
  `edited_by` varchar(100) DEFAULT NULL,
  `edition_time` varchar(100) DEFAULT NULL,
  `admin_remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sno`, `username`, `userid`, `session_id`, `st_time`, `en_time`, `ip`, `created_by`, `creation_time`, `edited_by`, `edition_time`, `admin_remarks`) VALUES
(3, 'shubhamchat224122@gmail.com', '5', '65a6c8c4f332e', '16-01-2024 18:19:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'shubhamchat224122@gmail.com', '0', '65aaa242a829a', '19-01-2024 16:24:34', '19-01-2024 16:28:03', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'shubhamchat224122@gmail.com', '5', '65aaa33e8d38b', '19-01-2024 16:28:46', '19-01-2024 16:29:44', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'shubham@gmail.com', '5', '65aaa3a0dee31', '19-01-2024 16:30:24', '19-01-2024 16:32:17', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'shubham@gmail.com', '5', '65aaa421d355b', '19-01-2024 16:32:33', '19-01-2024 16:33:15', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'shubham@gmail.com', '5', '65aaa47a1c88d', '19-01-2024 16:34:02', '19-01-2024 16:34:04', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'shubham@gmail.com', '5', '65aaa4adc7d79', '19-01-2024 16:34:53', '19-01-2024 16:34:56', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'shubham@gmail.com', '5', '65aaa4c26289a', '19-01-2024 16:35:14', '20-01-2024 05:03:53', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'devesh@gmail.com', '6', '65aaa51787a3a', '19-01-2024 16:36:39', '19-01-2024 16:37:31', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'devesh@gmail.com', '6', '65aaa5569fcfa', '19-01-2024 16:37:42', '19-01-2024 16:37:53', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'devesh@gmail.com', '6', '65aaa56f8c482', '19-01-2024 16:38:07', '19-01-2024 16:43:08', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'devesh@gmail.com', '6', '65aaa75f9ea04', '19-01-2024 16:46:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'vishal@gmail.com', '7', '65aaa7875fd89', '19-01-2024 16:47:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'vishal@gmail.com', '7', '65aaa7ced518d', '19-01-2024 16:48:14', '19-01-2024 16:57:00', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'aka@gmail.com', '8', '65aaa80a0a1d5', '19-01-2024 16:49:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'vishal@gmail.com', '7', '65aaa9e433f02', '19-01-2024 16:57:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 's@gmail.com', '9', '65aba00c46b92', '20-01-2024 10:27:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'shubham@gmail.com', '5', '65aba393e64c0', '20-01-2024 10:42:27', '20-01-2024 12:14:05', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'vishal@gmail.com', '7', '65abb8b475179', '20-01-2024 12:12:36', '20-01-2024 12:13:51', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'shubham@gmail.com', '5', '65abd0787c56a', '20-01-2024 13:54:00', '20-01-2024 13:55:16', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'shubham@gmail.com', '5', '65abd0e918cd6', '20-01-2024 13:55:53', '20-01-2024 13:57:42', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'shubham@gmail.com', '5', '65abd21c9089f', '20-01-2024 14:01:00', '20-01-2024 21:30:22', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'vishal@gmail.com', '7', '65abd23d74bd2', '20-01-2024 14:01:33', '20-01-2024 14:14:59', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'vishal@gmail.com', '7', '65abd6d0927fe', '20-01-2024 14:21:04', '20-01-2024 14:30:36', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'vishal@gmail.com', '7', '65abd9d66c302', '20-01-2024 14:33:58', '20-01-2024 14:34:26', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'vishal@gmail.com', '7', '65abda1737cf9', '20-01-2024 14:35:03', '20-01-2024 21:30:29', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `creation_time` varchar(100) DEFAULT NULL,
  `edited_by` varchar(100) DEFAULT NULL,
  `edition_time` varchar(100) DEFAULT NULL,
  `admin_remarks` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `first_name`, `last_name`, `email`, `password`, `profile`, `gender`, `status`, `created_by`, `creation_time`, `edited_by`, `edition_time`, `admin_remarks`) VALUES
(5, 'Shubham', 'Chaturvedi', 'shubham@gmail.com', '123', NULL, 'Male', 'OFFLINE', NULL, NULL, NULL, NULL, NULL),
(6, 'Devesh', 'Verma', 'devesh@gmail.com', 'devesh', NULL, 'Male', 'OFFLINE', NULL, NULL, NULL, NULL, NULL),
(7, 'Vishal', 'Mishra', 'vishal@gmail.com', 'vishal', NULL, 'Male', 'OFFLINE', NULL, NULL, NULL, NULL, NULL),
(8, 'Akansha', 'Sahu', 'aka@gmail.com', 'aka', NULL, 'Female', 'OFFLINE', NULL, NULL, NULL, NULL, NULL),
(9, 'Andi Bandi', 'Sandi', 's@gmail.com', 'andi@007', NULL, 'Male', 'OFFLINE', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
