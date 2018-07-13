-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 05:34 PM
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
-- Table structure for table `companyrequirement`
--

CREATE TABLE `companyrequirement` (
  `Subject_id` bigint(20) NOT NULL,
  `domain_name` varchar(200) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `experience` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `no_candidate` bigint(20) NOT NULL,
  `takeExam` varchar(5) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyrequirement`
--

INSERT INTO `companyrequirement` (`Subject_id`, `domain_name`, `salary`, `experience`, `duration`, `no_candidate`, `takeExam`, `company_id`) VALUES
(2, 'dads', '213', 1, 3, 12, 'no', 4),
(3, 'micro', '200000000', 1, 2, 2, '', 4),
(4, 'Software developer', '45000/m', 0, 2, 5, '', 4),
(5, 'software', '10000000', 2, 20, 10, '', 5),
(6, 'developer', '20000', 0, 2, 40, '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `Exam_id` bigint(20) NOT NULL,
  `Exam_name` varchar(300) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `Exam_description` varchar(1000) NOT NULL,
  `Exam_date` date NOT NULL,
  `Exam_time` time NOT NULL,
  `Exam_from` date NOT NULL,
  `Exam_to` date NOT NULL,
  `Exam_duration` bigint(20) NOT NULL,
  `Exam_totalQuestion` bigint(20) NOT NULL,
  `Exam_attempted_student` bigint(20) NOT NULL,
  `Exam_code` varchar(50) NOT NULL,
  `Company_tcid` bigint(20) NOT NULL,
  `passing_criteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`Exam_id`, `Exam_name`, `subject`, `Exam_description`, `Exam_date`, `Exam_time`, `Exam_from`, `Exam_to`, `Exam_duration`, `Exam_totalQuestion`, `Exam_attempted_student`, `Exam_code`, `Company_tcid`, `passing_criteria`) VALUES
(1, 'HIRING THE FRESHERS', 'Software Engineer', 'hirring for company', '2018-03-23', '04:00:00', '2018-03-23', '2018-03-24', 2, 10, 0, 'FIID', 4, 0),
(2, 'sym', 'query', 'njkdkbasbjblabbcba', '2018-03-10', '00:20:18', '2018-03-10', '2018-03-24', 20, 20, 0, 'FCCI', 4, 78),
(3, 'Satyam', 'HIRING', 'iudahudip uahdpouihasdihsapdi uhasduophpoasihdiiasdouiashd ouhdoaushuodhpoas', '2018-03-16', '00:20:18', '2018-03-16', '2018-03-09', 10, 20, 0, 'FJJD', 4, 60),
(4, 'satyam1', 'hir', 'nlksncnlsndcl lscnlnaldbcadcla n anclbaspnd', '2018-03-17', '00:20:18', '2018-03-17', '2018-03-24', 20, 20, 0, 'gya', 4, 21),
(5, 'nja', 'nlndlna', 'n ', '2018-03-25', '00:20:18', '2018-03-25', '2018-03-25', 33, 2, 0, 'jnfsd', 4, 12),
(6, 'as', 'dada', 'adsad', '2018-03-02', '00:20:18', '2018-03-02', '2018-03-10', 31, 31, 0, 'dadadw', 4, 12),
(7, 'dask', 'kjdksakk', 'kjkakdbka', '2018-03-16', '00:20:18', '2018-03-16', '2018-03-24', 21, 2, 0, 'kakd', 4, 12),
(8, 'casochuh', 'kjndajklnd', 'nladjnsd', '2018-03-03', '00:20:18', '2018-03-03', '2018-03-25', 21, 21, 0, 'qnsldks', 4, 12),
(9, 'fuck', 'sex', 'uuuuuhhhhhhhh  ahhhhhhh', '2018-03-03', '00:20:18', '2018-03-03', '2018-03-11', 10, 1, 0, 'sex123', 4, 100),
(10, 'sex1', 'sex', 'dasjodjonalsdn', '2018-03-17', '00:20:18', '2018-03-17', '2018-03-18', 12, 12, 0, 'hhh', 4, 12),
(11, 'hghs', 'jalxli', 'jsnxnl', '2018-03-24', '00:20:18', '2018-03-24', '2018-03-25', 12, 10, 0, '1ew', 4, 12),
(12, 'husd', 'jnaln', 'anakjsndknkasd', '2018-03-10', '00:20:18', '2018-03-10', '2018-03-24', 12, 10, 0, 'huahid', 4, 100);

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `company_id` bigint(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `company_email` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `image_id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`company_id`, `f_name`, `company_name`, `contact`, `company_email`, `description`, `image_id`, `password`) VALUES
(1, 'satyam', 'sa', '2147483647', 'satyam04sharma@gmail.com', 'sa', 39, 'c12e01f2a13ff5587e1e'),
(2, 'satyam', 'sa', '9058113737', 's@g.c', 'sa', 39, '03c7c0ace395d80182db'),
(3, 's', 's', '9089909090', 'sa@g.com', 'xsxa', 39, 'c12e01f2a13ff5587e1e'),
(4, 'satyam', 'satyam', '9058113737', 'shreyas@gmail.com', 'sa', 45, '0f2cdafc6b1adf94892b17f355bd9110'),
(5, 'Satyam', 'Satyam.inc', '9059113737', 'satyam04sharma@g.com', 'Hellloooooo lady', 50, '0f2cdafc6b1adf94892b17f355bd9110');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image_name` varchar(300) NOT NULL,
  `image_path` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image_name`, `image_path`) VALUES
(1, '', 'images/'),
(2, '', 'images/'),
(3, '', 'images/'),
(4, '', 'images/'),
(5, '', 'images/'),
(6, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(7, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(8, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(9, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(10, 'temp1.PNG', 'images/temp1.PNG'),
(11, 'temp3.PNG', 'images/temp3.PNG'),
(12, 'temp3.PNG', 'images/temp3.PNG'),
(13, 'temp3.PNG', 'images/temp3.PNG'),
(14, 'SHORT DRESSES.jpeg', 'images/SHORT DRESSES.jpeg'),
(15, 'SHORT DRESSES.jpeg', 'images/SHORT DRESSES.jpeg'),
(16, 'SHORT DRESSES.jpeg', 'images/SHORT DRESSES.jpeg'),
(17, 'PEACEFUL RELIGION.jpeg', 'images/PEACEFUL RELIGION.jpeg'),
(18, 'sticky notes seo.PNG', 'images/sticky notes seo.PNG'),
(19, 'Capture.PNG', 'images/Capture.PNG'),
(20, 'Capture.PNG', 'images/Capture.PNG'),
(21, 'sticky notes seo.PNG', 'images/sticky notes seo.PNG'),
(22, '', 'images/'),
(23, '', 'images/'),
(24, 'globe1600.jpg', 'images/globe1600.jpg'),
(25, 'Capture.PNG', 'images/Capture.PNG'),
(26, 'SHORT DRESSES.jpeg', 'images/SHORT DRESSES.jpeg'),
(27, 'sticky notes seo.PNG', 'images/sticky notes seo.PNG'),
(28, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(29, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(30, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(31, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(32, 'educot-logo-red.png', 'images/educot-logo-red.png'),
(33, '', 'company_logo/'),
(34, '', 'company_logo/'),
(35, '', 'company_logo/'),
(36, '', 'company_logo/'),
(37, '', 'company_logo/'),
(38, '', 'company_logo/'),
(39, 'educot-brand-heading.png', 'company_logo/educot-brand-heading.png'),
(40, 'educot-brand-heading.png', 'company_logo/educot-brand-heading.png'),
(41, 'educot-brand-heading.png', 'company_logo/educot-brand-heading.png'),
(42, 'educot-brand-heading.png', 'company_logo/educot-brand-heading.png'),
(43, 'logo.jpg', 'images/logo.jpg'),
(44, 'educot-logo-red.png', 'images/educot-logo-red.png'),
(45, 'educot-logo-red.png', 'company_logo/educot-logo-red.png'),
(46, 'educot-logo-red.png', 'company_logo/educot-logo-red.png'),
(47, 'sher.jpg', 'company_logo/sher.jpg'),
(48, 'thumb1.png', 'images/thumb1.png'),
(49, 'index.mp4', 'images/index.mp4'),
(50, 'satyam_photo.jpg', 'company_logo/satyam_photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `number_candidate` int(200) NOT NULL,
  `salary` int(200) NOT NULL,
  `job_description` text NOT NULL,
  `take_exam` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Exam_id` bigint(20) NOT NULL,
  `Question_id` bigint(20) NOT NULL,
  `Question` text NOT NULL,
  `optionA` varchar(1000) NOT NULL,
  `optionB` varchar(1000) NOT NULL,
  `optionC` varchar(1000) NOT NULL,
  `optionD` varchar(1000) NOT NULL,
  `question_image` bigint(20) NOT NULL,
  `option_image1` bigint(20) NOT NULL,
  `option_image2` bigint(20) NOT NULL,
  `option_image3` bigint(20) NOT NULL,
  `option_image4` bigint(20) NOT NULL,
  `correctAnswer` int(11) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Exam_id`, `Question_id`, `Question`, `optionA`, `optionB`, `optionC`, `optionD`, `question_image`, `option_image1`, `option_image2`, `option_image3`, `option_image4`, `correctAnswer`, `marks`) VALUES
(12, 3, 'HIRING THE FRESHERS', 'Software Engineer', 'hirring for company', 'jhatu', 'gandu', 0, 0, 0, 0, 0, 1, 1),
(12, 4, 'Hullla', 'sadsse', 'faeasd', 'adae', 'fefae', 0, 0, 0, 0, 0, 2, 2),
(12, 5, 'gydahoui', 'nkjan', 'nkajd', 'jnkajd', 'bkajd', 0, 0, 0, 0, 0, 3, 4),
(12, 6, 'l;fldjal;', 'aiuaoh', 'hbaa', 'hbabda', 'bjhads', 0, 0, 0, 0, 0, 2, 1);

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
(21, 'satyam', 'sharma', '20/10/1996', 'srm', 1, NULL, NULL, NULL, 'satyam04sharma@gmail', '9058113737', '8077193953', NULL, 6, NULL, NULL, 'md5(satyam', 1),
(22, 'satyam', 'sharma', '20/10/1996', 'saasa', 0, NULL, NULL, NULL, 'sat@g.com', '9058113737', '8077193953', NULL, 6, NULL, NULL, '0f2cdafc6b', 1),
(23, 'satyam', 'sasa', '20/10/1997', 'sat', 0, NULL, NULL, NULL, 'sat@g.com', '9058113737', '8077193953', NULL, 32, NULL, NULL, '0f2cdafc6b', 1),
(24, 'satyam', 'sa', '20/10/1997', 'xz', NULL, 'xz', 'xz', 'xz', 'satyam04sharma@gmail', '9058113737', '8077193953', 'sa', 43, 'sa', '9999999999', ' 0f2cdafc6b1adf94892b17f355bd9110', 0),
(25, 'satyam', 's', '20/10/1996', 'srm', 0, NULL, NULL, NULL, 'satyam04sharma@gmail.com', '8888888888', '8077193953', NULL, 32, NULL, NULL, '0f2cdafc6b1adf94892b17f355bd9110', 1),
(26, 'satya', 'satya', '2018-03-07', 'as', 0, NULL, NULL, NULL, 's@g.com', '9999999999', '8888888888', NULL, 48, NULL, NULL, '0f2cdafc6b1adf94892b17f355bd9110', 1),
(27, 'satya', 'sa', '2018-03-01', 'sa', 0, NULL, NULL, NULL, 'sa@g.com', '9999999999', '0000000000', NULL, 49, NULL, NULL, '0f2cdafc6b1adf94892b17f355bd9110', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyrequirement`
--
ALTER TABLE `companyrequirement`
  ADD PRIMARY KEY (`Subject_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`Exam_id`),
  ADD KEY `Exam_id` (`Exam_id`),
  ADD KEY `Comapny_tcid` (`Company_tcid`),
  ADD KEY `Exam_name` (`Exam_name`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyrequirement`
--
ALTER TABLE `companyrequirement`
  MODIFY `Subject_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `Exam_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `company_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
