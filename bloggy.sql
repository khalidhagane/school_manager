-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2022 at 04:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloggy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `matr` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `matr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `job` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profs`
--

CREATE TABLE `profs` (
  `id` int(11) NOT NULL,
  `matr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `matier` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `matr` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `genre` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_ne` date NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `parents_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `matr`, `name`, `genre`, `address`, `date_ne`, `email`, `parents_name`) VALUES
(1, 0, 'test', '', '', '0000-00-00', 'test@test.com', ''),
(5, 0, 'loukili', '', '', '0000-00-00', 'loukili@loukili.org', 'active'),
(7, 0, 'Abdeslam Loukili', '', '', '0000-00-00', 'abdeslam.edu@gmail.com', '1'),
(8, 0, 'Abdeslam tester', '', '', '0000-00-00', 'tester@ter.com', '1'),
(9, 0, 'phantom wallete', '', '', '0000-00-00', 'abdeslam.edu@gmail.com', '1'),
(10, 0, 'phantom wallete', '', '', '0000-00-00', 'abdeslam.edu@gmail.com', '1'),
(11, 0, 'LOUKILI ABDESLAM', '', '', '0000-00-00', 'email@email.com', '1'),
(12, 0, 'neal bridges', '', '', '0000-00-00', 'abdeslm@lkd.cl', '0'),
(13, 0, 'test', '', '', '0000-00-00', 'test@test.test', '0'),
(14, 0, 'khalid', '', '', '0000-00-00', 'khalid@khalid.com', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profs`
--
ALTER TABLE `profs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
