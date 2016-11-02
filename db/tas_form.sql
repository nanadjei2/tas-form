-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2016 at 05:29 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tas_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `current_course_assisting` varchar(255) NOT NULL,
  `course_code1` int(10) NOT NULL,
  `course_code2` int(10) NOT NULL,
  `course_code3` int(10) NOT NULL,
  `course_description1` varchar(200) NOT NULL,
  `course_description2` varchar(200) NOT NULL,
  `course_description3` varchar(200) NOT NULL,
  `tas_date` date NOT NULL,
  `comments` int(11) NOT NULL,
  `reason` text NOT NULL,
  `office_date` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `current_course_assisting` varchar(255) NOT NULL,
  `course_code1` int(10) NOT NULL,
  `course_code2` int(10) NOT NULL,
  `course_code3` int(10) NOT NULL,
  `course_description1` varchar(200) NOT NULL,
  `course_description2` varchar(200) NOT NULL,
  `course_description3` varchar(200) NOT NULL,
  `tas_date` date NOT NULL,
  `comments` int(11) NOT NULL,
  `reason` text NOT NULL,
  `signature_and_name_of_office` varchar(200) NOT NULL,
  `office_date` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `department`, `current_course_assisting`, `course_code1`, `course_code2`, `course_code3`, `course_description1`, `course_description2`, `course_description3`, `tas_date`, `comments`, `reason`, `signature_and_name_of_office`, `office_date`, `created_at`, `updated_at`) VALUES
(0, 'Bill', 'Testing', 'Testing', 23451, 34564, 7777, 'Testing', 'Testing', 'Testing', '2016-10-29', 1, 'bncnbvnmvnbv', 'nvbbcvcnbc', 2016, '2016-10-30 07:04:03', '2016-10-30 07:04:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
