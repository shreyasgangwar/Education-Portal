-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 01:30 PM
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
(5, 'software', '10000000', 2, 20, 10, '', 5),
(6, 'developer', '20000', 0, 2, 40, '', 5),
(7, 'PHP Developer', '100000', 2, 20, 2, 'yes', 4),
(8, 'DEv', '411111', 2, 12, 2, 'yes', 4),
(9, 'DEVops', '21', 0, 8211, 20, 'yes', 5),
(11, 'a', '0', 0, 6, 7, 'yes', 5),
(12, 'a', '0', 0, 6, 7, 'yes', 5),
(13, 'f', '45777', 0, 7, 6, 'yes', 5),
(15, 'satya', '100000', 2, 2, 45, 'yes', 4),
(16, 'satya', 'bkdak', 0, 0, 3, 'yes', 4),
(17, 'jidiaji', 'nakjlnd', 0, 21, 21, 'yes', 4),
(18, 's', '6', 5, 1, 4, 'yes', 4),
(20, 'JaJU', '20000', 12, 13, 12, 'yes', 4),
(21, 'f', '9', 0, 8, 8, 'yes', 4),
(22, 'husiha', '100000', 1, 12, 2, 'yes', 4),
(23, 'sadkop', 'dqd', 0, 2, 2, 'yes', 4),
(24, 'iuhaisuhxh', 'iuasdhih', 0, 221, 29, 'yes', 4),
(25, 'asiodjoijoj', '1233123', 131, 12, 21, 'yes', 4),
(26, 'uhudahiuhi', 'dsad', 2, 12, 2, 'yes', 4),
(27, 'nasiuhdhuh', 'ojjojdojao', 0, 87, 21, 'yes', 4),
(28, 'yiahhduhiahhu', '12', 0, 123, 2, 'yes', 4),
(29, 'sdadaf', 'asda', 0, 12, 31, 'yes', 4),
(30, 'oajdjiqiojdw```', 'dijajpijdpj', 0, 0, 12, 'yes', 4),
(31, 'hahoi', '123', 0, 0, 23, 'yes', 4),
(32, 'fUCKER', '10000000', 0, 2, 1000, 'yes', 4),
(33, 'fUCKERR', '10000000', 0, 2, 1000, 'yes', 4),
(34, 'fUCKERRR', '10000000', 0, 2, 1000, 'yes', 4),
(37, 'CHUU', '411111', 2, 2, 2, 'yes', 4),
(38, 'hudahhdoh', 'kowdo', 0, 2, 2, 'yes', 4),
(39, 'dsabiasdb', '', 0, 0, 22, 'yes', 4),
(40, 'CeO', '100000', 10, 2, 20, 'no', 5);

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
  `passing_criteria` int(11) NOT NULL,
  `Subject_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`Exam_id`, `Exam_name`, `subject`, `Exam_description`, `Exam_date`, `Exam_time`, `Exam_from`, `Exam_to`, `Exam_duration`, `Exam_totalQuestion`, `Exam_attempted_student`, `Exam_code`, `Company_tcid`, `passing_criteria`, `Subject_id`) VALUES
(2, 'sym', 'query', 'njkdkbasbjblabbcba', '2018-03-10', '00:20:18', '2018-03-10', '2018-03-24', 20, 20, 0, 'FCCI', 4, 78, NULL),
(3, 'Satyam', 'HIRING', 'iudahudip uahdpouihasdihsapdi uhasduophpoasihdiiasdouiashd ouhdoaushuodhpoas', '2018-03-16', '00:20:18', '2018-03-16', '2018-03-09', 10, 20, 0, 'FJJD', 4, 60, NULL),
(4, 'satyam1', 'hir', 'nlksncnlsndcl lscnlnaldbcadcla n anclbaspnd', '2018-03-17', '00:20:18', '2018-03-17', '2018-03-24', 20, 20, 0, 'gya', 4, 21, NULL),
(5, 'nja', 'nlndlna', 'n ', '2018-03-25', '00:20:18', '2018-03-25', '2018-03-25', 33, 2, 0, 'jnfsd', 4, 12, NULL),
(6, 'as', 'dada', 'adsad', '2018-03-02', '00:20:18', '2018-03-02', '2018-03-10', 31, 31, 0, 'dadadw', 4, 12, NULL),
(7, 'dask', 'kjdksakk', 'kjkakdbka', '2018-03-16', '00:20:18', '2018-03-16', '2018-03-24', 21, 2, 0, 'kakd', 4, 12, NULL),
(8, 'casochuh', 'kjndajklnd', 'nladjnsd', '2018-03-03', '00:20:18', '2018-03-03', '2018-03-25', 21, 21, 0, 'qnsldks', 4, 12, NULL),
(9, 'fuck', 'sex', 'uuuuuhhhhhhhh  ahhhhhhh', '2018-03-03', '00:20:18', '2018-03-03', '2018-03-11', 10, 1, 0, 'sex123', 4, 100, NULL),
(10, 'sex1', 'sex', 'dasjodjonalsdn', '2018-03-17', '00:20:18', '2018-03-17', '2018-03-18', 12, 12, 0, 'hhh', 4, 12, NULL),
(11, 'hghs', 'jalxli', 'jsnxnl', '2018-03-24', '00:20:18', '2018-03-24', '2018-03-25', 12, 10, 0, '1ew', 4, 12, NULL),
(12, 'husd', 'jnaln', 'anakjsndknkasd', '2018-03-10', '00:20:18', '2018-03-10', '2018-03-24', 12, 10, 0, 'huahid', 4, 100, NULL),
(13, 'satyam04sharma', 'GOOGLE', 'sadafg', '2018-03-15', '00:20:18', '2018-03-15', '2018-03-17', 24, 21, 0, '21re', 4, 12, NULL),
(14, 'SATYAM!@#', 'SOFTWARE', 'bauhdhpia fadshiuhdahnihaiounh jndha;hdoas', '2018-03-17', '00:20:18', '2018-03-17', '2018-03-23', 12, 12, 0, 'gffgf', 4, 56, NULL),
(20, 'DANDI MARCH1', 'fukubai', 'huahlp kadkaoh', '2018-03-04', '00:20:18', '2018-03-04', '2018-03-03', 1, 23, 0, 'udahu', 5, 23, NULL),
(21, 'CORE JAVA', '2', 'jnkjcnajn', '2018-03-16', '00:20:18', '2018-03-16', '2018-03-09', 2, 4, 0, 'tda', 4, 76, NULL),
(23, 'lndada', 'jnala', 'adjlksnkd', '2018-03-02', '00:20:18', '2018-03-02', '2018-03-17', 123, 5, 0, 'dasda', 4, 12, NULL),
(24, 'kuch', '5', 'gugv', '2018-03-29', '00:20:18', '2018-03-29', '2018-03-29', 5, 5, 0, 's', 4, 70, NULL),
(25, 'satyam40sharma', '12', 'sd', '2020-02-01', '00:20:20', '2020-02-01', '2018-01-01', 6, 2, 0, 'd', 4, 12, NULL),
(26, 'JAJU', '23', 'bubocabdcnacoiu asoc iuas oiuciuasuiocoiasiuciuhassuocouiaydyicaoyiciyo asyio gxyiog asyicogiyoas cyig yiasgdyigiaodon saudhuiahsdiu oqygwaod7iwoaido gagdyauyg dyug uaisg udguia d i ', '2018-01-01', '00:20:18', '2018-01-01', '2018-01-02', 2, 4, 0, 'FYTY', 4, 12, NULL),
(27, 'f', 'f', 'ff', '2018-03-30', '00:20:18', '2018-03-30', '2018-03-31', 5, 3, 0, 'f', 4, 48, NULL);

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
(24, 'globe1600.jpg', 'images/globe1600.jpg'),
(25, 'Capture.PNG', 'images/Capture.PNG'),
(26, 'SHORT DRESSES.jpeg', 'images/SHORT DRESSES.jpeg'),
(27, 'sticky notes seo.PNG', 'images/sticky notes seo.PNG'),
(28, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(29, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(30, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(31, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(32, 'educot-logo-red.png', 'images/educot-logo-red.png'),
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
(50, 'satyam_photo.jpg', 'company_logo/satyam_photo.jpg'),
(54, 'ec01f5da4ba7b0624fa8ecaddd823124.jpg', 'images/ec01f5da4ba7b0624fa8ecaddd823124.jpg'),
(59, 'ec01f5da4ba7b0624fa8ecaddd823124.jpg', 'images/ec01f5da4ba7b0624fa8ecaddd823124.jpg'),
(60, 'ec01f5da4ba7b0624fa8ecaddd823124.jpg', 'images/ec01f5da4ba7b0624fa8ecaddd823124.jpg'),
(61, 'sher.jpg', 'images/sher.jpg'),
(62, 'sher.jpg', 'images/sher.jpg'),
(63, 'sher.jpg', 'images/sher.jpg'),
(64, 'sher.jpg', 'images/sher.jpg'),
(65, 'sat.JPG', 'images/sat.JPG'),
(66, 'ec01f5da4ba7b0624fa8ecaddd823124.jpg', 'images/ec01f5da4ba7b0624fa8ecaddd823124.jpg'),
(67, '2fe8c8144bd0347b34c668db3b90dc54.jpg', 'images/2fe8c8144bd0347b34c668db3b90dc54.jpg'),
(68, 'img853.jpg', 'images/img853.jpg'),
(69, 'sat.JPG', 'images/sat.JPG'),
(108, '', 'images/'),
(109, '', 'images/'),
(110, '', 'images/'),
(111, '', 'images/'),
(112, '', 'images/'),
(113, '', 'images/'),
(114, '', 'images/'),
(115, 'logo.jpg', 'images/logo.jpg'),
(116, 'logo2.jpg', 'images/logo2.jpg'),
(117, 'educot-logo-red.png', 'images/educot-logo-red.png'),
(118, 'educot-logo-red.png', 'images/educot-logo-red.png'),
(119, 'educot-brand-heading.png', 'images/educot-brand-heading.png'),
(120, 'contact.jpg', 'images/contact.jpg'),
(121, 'j2sW.png', 'images/j2sW.png'),
(122, 'logo.jpg', 'images/logo.jpg'),
(123, 'logo.png', 'images/logo.png'),
(124, 'logo.png', 'images/logo.png'),
(125, 'j2sw.jpg', 'images/j2sw.jpg'),
(126, '', 'images/'),
(127, '', 'images/'),
(128, '', 'images/'),
(129, '', 'images/'),
(130, 'j2sw.jpg', 'images/j2sw.jpg'),
(131, 'lecture.jpg', 'images/lecture.jpg'),
(132, '', 'images/'),
(133, '', 'images/'),
(134, 'logo.png', 'images/logo.png'),
(135, 'educot-logo-red.png', 'images/educot-logo-red.png'),
(136, '', 'images/'),
(137, 'logo.jpg', 'images/logo.jpg'),
(138, '', 'images/'),
(139, '', 'images/'),
(140, 'j2sW.png', 'images/j2sW.png'),
(141, '', 'images/'),
(142, 'logo2.jpg', 'images/logo2.jpg'),
(143, '', 'images/'),
(144, '', 'images/'),
(145, 'j2sw.jpg', 'images/j2sw.jpg'),
(146, '', 'images/'),
(147, '', 'images/'),
(148, '', 'images/'),
(149, '', 'images/'),
(150, 'j2sW.png', 'images/j2sW.png'),
(151, '', 'images/'),
(152, '', 'images/'),
(153, '', 'images/'),
(154, '', 'images/'),
(155, '', 'images/'),
(156, '', 'images/'),
(157, '', 'images/'),
(158, '', 'images/'),
(159, 'j2sw.jpg', 'images/j2sw.jpg'),
(160, 'img853.jpg', 'images/img853.jpg'),
(161, '', 'images/'),
(162, '', 'images/'),
(163, '', 'images/'),
(164, '', 'images/'),
(165, '', 'images/'),
(166, '', 'images/'),
(167, '', 'images/'),
(168, '', 'images/'),
(169, '', 'images/'),
(170, '', 'images/'),
(171, '', 'images/'),
(172, '', 'images/'),
(173, '', 'images/'),
(174, '', 'images/'),
(175, '', 'images/'),
(176, '', 'images/'),
(177, '', 'images/'),
(178, '', 'images/'),
(179, '', 'images/'),
(180, '', 'images/'),
(181, '', 'images/'),
(182, '', 'images/'),
(183, '', 'images/'),
(184, '', 'images/'),
(185, '', 'images/'),
(186, '', 'images/'),
(187, '', 'images/'),
(188, '', 'images/'),
(189, '', 'images/'),
(190, '', 'images/'),
(191, '', 'images/'),
(192, '', 'images/'),
(193, '', 'images/'),
(194, '', 'images/'),
(195, '', 'images/'),
(196, '', 'images/'),
(197, '', 'images/'),
(198, '', 'images/'),
(199, '', 'images/'),
(200, '', 'images/'),
(201, '', 'images/'),
(202, '', 'images/'),
(203, '', 'images/'),
(204, '', 'images/'),
(205, '', 'images/'),
(206, '', 'images/'),
(207, '', 'images/'),
(208, '', 'images/'),
(209, '', 'images/'),
(210, '', 'images/'),
(211, '', 'images/'),
(212, '', 'images/'),
(213, '', 'images/'),
(214, '', 'images/'),
(215, '', 'images/'),
(216, '', 'images/'),
(217, '', 'images/'),
(218, '', 'images/'),
(219, '', 'images/'),
(220, '', 'images/'),
(221, '', 'images/'),
(222, '', 'images/'),
(223, '', 'images/'),
(224, '', 'images/'),
(225, '', 'images/'),
(226, '', 'images/'),
(227, '', 'images/'),
(228, '', 'images/'),
(229, '', 'images/'),
(230, '', 'images/'),
(231, '', 'images/'),
(232, '', 'images/'),
(233, '', 'images/'),
(234, '', 'images/'),
(235, '', 'images/'),
(236, '', 'images/'),
(237, '', 'images/'),
(238, '', 'images/'),
(239, '', 'images/'),
(240, '', 'images/'),
(241, '', 'images/'),
(242, '', 'images/'),
(243, '', 'images/'),
(244, '', 'images/'),
(245, '', 'images/'),
(246, '', 'images/'),
(247, '', 'images/'),
(248, '', 'images/'),
(249, '', 'images/'),
(250, '', 'images/'),
(251, '', 'images/'),
(252, '', 'images/'),
(253, '', 'images/'),
(254, '', 'images/'),
(255, '', 'images/'),
(256, '', 'images/'),
(257, '', 'images/'),
(258, '', 'images/'),
(259, '', 'images/'),
(260, '', 'images/'),
(261, '', 'images/'),
(262, '', 'images/'),
(263, '', 'images/'),
(264, '', 'images/'),
(265, '', 'images/'),
(266, '', 'images/'),
(267, '', 'images/'),
(268, '', 'images/'),
(269, '', 'images/'),
(270, '', 'images/'),
(271, '', 'images/'),
(272, '', 'images/'),
(273, '', 'images/'),
(274, '', 'images/'),
(275, '', 'images/'),
(276, '', 'images/'),
(277, '', 'images/'),
(278, '', 'images/'),
(279, '', 'images/'),
(280, '', 'images/'),
(281, '', 'images/'),
(282, '', 'images/'),
(283, '', 'images/'),
(284, '', 'images/'),
(285, 'download.jpg', 'images/download.jpg'),
(286, '', 'images/'),
(287, '', 'images/'),
(288, '', 'images/'),
(289, '', 'images/'),
(290, '', 'images/'),
(291, '', 'images/'),
(292, 'j2sw.jpg', 'images/j2sw.jpg'),
(293, '', 'images/'),
(294, '', 'images/'),
(295, 'lecture.jpg', 'images/lecture.jpg'),
(296, 'logo.jpg', 'images/logo.jpg'),
(297, 'j2sw.jpg', 'images/j2sw.jpg'),
(298, 'sat.JPG', 'images/sat.JPG'),
(299, 'img853.jpg', 'images/img853.jpg'),
(300, '', 'images/'),
(301, '', 'images/'),
(302, 'download.jpg', 'images/download.jpg'),
(303, '', 'images/'),
(304, '', 'images/'),
(305, '', 'images/'),
(306, '', 'images/'),
(307, '', 'images/'),
(308, '', 'images/'),
(309, 'lecture.jpg', 'images/lecture.jpg'),
(310, 'j2sW.png', 'images/j2sW.png'),
(311, 'j2sw.jpg', 'images/j2sw.jpg'),
(312, 'logo.png', 'images/logo.png'),
(313, 'lecture.jpg', 'images/lecture.jpg'),
(314, 'lecture.jpg', 'images/lecture.jpg'),
(315, 'logo.jpg', 'images/logo.jpg'),
(316, 'j2sW.png', 'images/j2sW.png'),
(317, 'j2sw.jpg', 'images/j2sw.jpg'),
(318, '', 'images/'),
(319, '', 'images/'),
(320, '', 'images/'),
(321, '', 'images/'),
(322, 'c46f25bc405849e5004f3d0db46850d4.jpg', 'images/c46f25bc405849e5004f3d0db46850d4.jpg'),
(323, '', 'images/'),
(324, '', 'images/'),
(325, '', 'images/'),
(326, '', 'images/'),
(327, '', 'images/'),
(328, '', 'images/'),
(329, '', 'images/'),
(330, '', 'images/'),
(331, '', 'images/'),
(332, '', 'images/'),
(333, '', 'images/'),
(334, '', 'images/'),
(335, '', 'images/'),
(336, '', 'images/'),
(337, '', 'images/'),
(338, '', 'images/'),
(339, '', 'images/'),
(340, 'download.jpg', 'images/download.jpg'),
(341, '', 'images/'),
(342, 'download.jpg', 'images/download.jpg'),
(343, '', 'images/'),
(344, 'download.jpg', 'images/download.jpg'),
(345, '', 'images/'),
(346, '', 'images/'),
(347, '', 'images/'),
(348, '', 'images/'),
(349, '', 'images/'),
(350, '', 'images/'),
(351, '', 'images/'),
(352, '', 'images/'),
(353, '', 'images/'),
(354, '', 'images/'),
(355, '', 'images/'),
(356, '', 'images/'),
(357, '', 'images/'),
(358, '', 'images/'),
(359, '', 'images/'),
(360, 'sher.jpg', 'images/sher.jpg'),
(361, '2fe8c8144bd0347b34c668db3b90dc54.jpg', 'images/2fe8c8144bd0347b34c668db3b90dc54.jpg'),
(362, 'logo.png', 'images/logo.png'),
(363, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(364, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(365, 'satyam_photo.jpg', 'images/satyam_photo.jpg'),
(366, 'sat.JPG', 'images/sat.JPG'),
(367, 'sat.JPG', 'images/sat.JPG'),
(368, 'sat.JPG', 'images/sat.JPG'),
(369, 'abt2.jpg', 'images/abt2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `contact` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `qualification` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `name`, `dob`, `contact`, `email`, `college`, `qualification`, `password`, `image_id`) VALUES
(1, 'Satyam', '2017-01-01', 2147483647, 'saa@g.com', 'srm', 'sdakk', '0f2cdafc6b1adf94892b17f355bd9110', 65);

-- --------------------------------------------------------

--
-- Table structure for table `jobapplications`
--

CREATE TABLE `jobapplications` (
  `id` bigint(20) NOT NULL,
  `job_id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `option_image1` bigint(20) NOT NULL DEFAULT '0',
  `option_image2` bigint(20) NOT NULL DEFAULT '0',
  `option_image3` bigint(20) DEFAULT '0',
  `option_image4` bigint(20) NOT NULL DEFAULT '0',
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
(12, 6, 'l;fldjal;', 'aiuaoh', 'hbaa', 'hbabda', 'bjhads', 0, 0, 0, 0, 0, 2, 1),
(13, 3, 'HIRING THE FRESHERS', 'Software Engineer', 'hirring for company', 'jhatu', 'gandu', 0, 0, 0, 0, 0, 1, 1),
(13, 4, 'Hullla', 'sadsse', 'faeasd', 'adae', 'fefae', 0, 0, 0, 0, 0, 2, 2),
(13, 5, 'gydahoui', 'nkjan', 'nkajd', 'jnkajd', 'bkajd', 0, 0, 0, 0, 0, 3, 4),
(13, 6, 'l;fldjal;', 'aiuaoh', 'hbaa', 'hbabda', 'bjhads', 0, 0, 0, 0, 0, 2, 1),
(14, 3, 'HIRING THE FRESHERS', 'Software Engineer', 'hirring for company', 'jhatu', 'gandu', 0, 0, 0, 0, 0, 1, 1),
(14, 4, 'Hullla', 'sadsse', 'faeasd', 'adae', 'fefae', 0, 0, 0, 0, 0, 2, 2),
(14, 5, 'gydahoui', 'nkjan', 'nkajd', 'jnkajd', 'bkajd', 0, 0, 0, 0, 0, 3, 4),
(14, 6, 'l;fldjal;', 'aiuaoh', 'hbaa', 'hbabda', 'bjhads', 0, 0, 0, 0, 0, 2, 1),
(14, 8, 'adasdw', '', '', '', '', 0, 0, 0, 0, 0, 2, 0),
(14, 9, 'fsadfadafg', 'gareafdad', 'afefdsd', 'aeffafaf', 'agfrgrbrbsaadsa', 0, 0, 0, 0, 0, 2, 0),
(14, 10, 'asdadfa', 'fafaef', 'faeefas', 'dawdfef', 'awdawdawfawf', 0, 0, 0, 0, 0, 3, 0),
(14, 11, 'satyam sharma is good boy', 'yes', 'no', 'chutiya h', 'nahi h', 0, 0, 0, 0, 0, 1, 4),
(14, 11, 'wqewqeqwr', 'qreqewrqw', 'qeqfewfadfads', 'daeawedd', 'adfda', 0, 0, 0, 0, 0, 3, 4),
(14, 11, 'futfyufu', 'qewrt', 'rwer', 'erwerewr', 'qwreqweqw', 0, 0, 0, 0, 0, 3, 7),
(14, 11, 'dgsdfs', 'sefsefseff', 'fse', 'fsef', 'sfesef', 0, 0, 1, 1, 1, 3, 3),
(14, 11, 'xX', 'xSX', 'zx', 'sX', 'z', 54, 1, 1, 1, 1, 2, 5),
(14, 12, 'dad', 'dasdaw', 'dawwa', 'dawd', 'dawqw', 54, 0, 0, 0, 0, 2, 2),
(14, 13, 'wdqdqd', 'axsax', 'axsasx', 'xsax', 'asxasx', 54, 0, 0, 0, 0, 2, 2),
(14, 14, 'XASXA', 'XAS', 'CDCA', 'SCAAC', 'xas', 61, 0, 0, 0, 0, 2, 2),
(14, 14, 'XASXA', 'XAS', 'CDCA', 'SCAAC', 'xas', 61, 0, 0, 0, 0, 2, 2),
(14, 14, 'XASXA', 'XAS', 'CDCA', 'SCAAC', 'xas', 61, 0, 0, 0, 0, 2, 2),
(14, 14, 'casacsasc', 'cascasc', 'ascasca', 'acasca', 'afeafff', 61, 65, 54, 67, 68, 2, 3),
(14, 12, 'ashbjsdba', 'bkahbdbbka', 'kbkkjjakbkskjakdnuw', 'abksjdnjaskjnd', 'bdakbj', 0, 0, 0, 65, 0, 2, 2),
(14, 14, 'fgASF', 'afawdfaw', 'adfaf', 'sfafa', 'afsadsadd', 1, 1, 1, 1, 1, 2, 2),
(20, 0, '', '', '', '', '', 68, 1, 1, 1, 1, 3, 7),
(20, 1, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 2, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 3, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 4, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 5, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 6, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 7, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 8, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 9, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 10, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 11, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 12, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 13, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 14, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 15, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 16, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 22, '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0),
(20, 18, '', '', '', '', '', 1, 1, 1, 1, 1, 2, 0),
(20, 19, '', '', '', '', '', 1, 1, 1, 1, 1, 2, 0),
(20, 20, '', '', '', '', '', 1, 1, 1, 1, 1, 4, 0),
(20, 21, '', '', '', '', '', 1, 1, 1, 1, 1, 3, 0),
(20, 22, '', '', '', '', '', 1, 1, 1, 1, 1, 2, 0),
(21, 1, 'HIRING THE FRESHERS', 'Software Engineer', 'hirring for company', 'jhatu', 'gandu', 0, 0, 0, 0, 0, 1, 1),
(21, 2, 'SATAYAM', 'lknjslkdl', 'nkjlask', 'NKJCNKA', 'AHIHAIH', 1, 1, 1, 1, 1, 3, 2),
(21, 3, 'SA NDKBK', 'BKJBCKASB', 'KBKJB', 'KHBKHBKB', 'KHBKBKB', 1, 1, 1, 1, 1, 2, 1),
(23, 0, '', '', '', '', '', 0, 131, 43, 121, 125, 3, 3),
(23, 1, '', '', '', '', '', 0, 1, 1, 1, 1, 2, 7),
(24, 0, 'a', 'a', 'a', 'a', 'a', 1, 1, 1, 1, 1, 1, 1),
(24, 1, 'b', 'a', 'a', 'a', 'a`', 22, 22, 22, 22, 22, 3, 4),
(24, 2, 'c', 'cc', 'c', 'cc', 'c', 108, 108, 108, 108, 108, 3, 2),
(25, 0, 'jij', 'ji', 'jijhhhihi', 'hihi', 'ssas', 108, 108, 108, 108, 108, 2, 5),
(25, 1, 'fs', ' fa ', 'ad as', 'dsad ad', 'adsadasd', 108, 108, 108, 108, 108, 3, 3),
(25, 2, 'fwa', 'fafsa', 'asdawd', 'dadaw', 'dadwd', 108, 108, 108, 108, 108, 3, 3),
(26, 0, 'asx', 'saxax', 'saxa', 'saxx', 'sax', 0, 0, 0, 0, 0, 3, 12),
(26, 1, 'adas', 'asdasd', 'asdaw', 'dasdwa', 'adwd', 0, 0, 0, 0, 0, 2, 21),
(26, 2, 'adad', 'asda', 'sadqw', 'adsac', 'cwq', 0, 0, 0, 0, 0, 3, 2),
(26, 3, 'adqwaasd', 'adasdsad', 'saddasd', 'dawadsad', 'addawd', 0, 0, 0, 0, 0, 3, 2),
(26, 4, 'saddasdas', 'adawd', 'adqwad', 'adsdde', 'adwad', 0, 0, 0, 0, 0, 3, 2),
(27, 0, 's', 's', 's', 's', 's', 0, 0, 0, 0, 0, 1, 1),
(27, 1, 'a', 'a', 's', 'd', 'x', 0, 0, 0, 0, 0, 3, 2),
(27, 2, '', '', '', '', '', 61, 67, 0, 123, 0, 3, 1),
(27, 3, '', 'a', 'aa', 'ss', 'dd', 0, 0, 0, 0, 0, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` bigint(20) NOT NULL,
  `resume_name` varchar(200) NOT NULL,
  `resume_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `Subject_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `Exam_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `company_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=370;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jobapplications`
--
ALTER TABLE `jobapplications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
