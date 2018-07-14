-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 01:21 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `dob` text NOT NULL,
  `college` varchar(20) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `qualification` varchar(10) DEFAULT NULL,
  `experience` varchar(10) DEFAULT NULL,
  `skills` text,
  `email` varchar(200) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `alternate_contact_no` varchar(11) NOT NULL,
  `address` varchar(20) DEFAULT NULL,
  `image_id` int(11) NOT NULL,
  `father_name` varchar(10) DEFAULT NULL,
  `father_no` varchar(11) DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  `student` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `dob`, `college`, `year`, `qualification`, `experience`, `skills`, `email`, `contact_no`, `alternate_contact_no`, `address`, `image_id`, `father_name`, `father_no`, `password`, `student`) VALUES
(24, 'satyam', 'sa', '20/10/1997', 'xz', NULL, 'xz', 'xz', 'xz', 'satyam04sharma@gmail', '9058113737', '8077193953', 'sa', 43, 'sa', '9999999999', ' 0f2cdafc6b1adf94892b17f355bd9110', 0),
(25, 'satyam', 's', '20/10/1996', 'srm', 0, NULL, NULL, NULL, 'satyam04sharma@gmail.com', '8888888888', '8077193953', NULL, 32, NULL, NULL, '0f2cdafc6b1adf94892b17f355bd9110', 1),
(26, 'satya', 'satya', '2018-03-07', 'as', 0, NULL, NULL, NULL, 's@g.com', '9999999999', '8888888888', NULL, 48, NULL, NULL, '0f2cdafc6b1adf94892b17f355bd9110', 1),
(27, 'satya', 'sa', '2018-03-01', 'sa', 0, NULL, NULL, NULL, 'sa@g.com', '9999999999', '0000000000', NULL, 49, NULL, NULL, '0f2cdafc6b1adf94892b17f355bd9110', 1),
(28, 'radhe ma', 'Krishna', '2018-03-10', 'GURUKUK', 3, NULL, NULL, NULL, 'r@g.com', '9058113737', '9412464391', NULL, 369, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 1),
(29, 'satyaaaaaa', 'skajhklash', '2018-03-17', 'sjapojdsjp', 2, NULL, NULL, NULL, 'd@g.com', '9058113737', '8888888889', NULL, 108, NULL, NULL, '13bbf54a6850c393fb8d1b2b3bba997b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
