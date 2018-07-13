-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 08:14 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educot`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_reg`
--

CREATE TABLE `company_reg` (
  `name` varchar(20) NOT NULL,
  `company` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `hiring_for` text NOT NULL,
  `description` text NOT NULL,
  `number_candidates` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_reg`
--

CREATE TABLE `job_reg` (
  `f_name` varchar(11) NOT NULL,
  `l_name` varchar(11) NOT NULL,
  `dateof_birth` varchar(10) NOT NULL,
  `mail` text NOT NULL,
  `college` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `exper` text NOT NULL,
  `skill` text NOT NULL,
  `alt_contact` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `father_n` text NOT NULL,
  `father_contact` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_reg`
--

CREATE TABLE `stud_reg` (
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `dateof_birth` varchar(10) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `college` text NOT NULL,
  `alt_contact` varchar(10) NOT NULL,
  `contact` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `re_pass` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_reg`
--

INSERT INTO `stud_reg` (`f_name`, `l_name`, `dateof_birth`, `mail`, `college`, `alt_contact`, `contact`, `year`, `pass`, `re_pass`) VALUES
('Shreyash', 'Kanaujia', '19/05/1998', 'shreyash@gmail.com', 'SRM NCR', '7275040624', '', 'Third', 'genius', 'genius'),
('Shreyash', 'Kanaujia', '19/05/1998', 'shreyash2@gmail.com', 'SRM NCR', '7275040624', '7275040623', 'Third', 'genius', 'genius');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_reg`
--
ALTER TABLE `stud_reg`
  ADD UNIQUE KEY `mail` (`mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
