-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 06:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bith` date NOT NULL,
  `adress` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `password`, `bith`, `adress`, `sex`) VALUES
(1, 'Pan Kum Hyok', '123', '2017-05-03', 'adsadasdas', 'm'),
(2, 'Kim Sung Min', '123', '2017-05-19', 'dghfdhdfdf', 'm'),
(30, '', 'eert', '0000-00-00', 'eye', 'm'),
(31, '', 'eert', '0000-00-00', 'eye', 'm'),
(37, 'asas', '', '0000-00-00', '', 'aa'),
(41, 'dxfd', 'dfg', '0012-11-22', 'wed', 'e'),
(43, 'dsfds', 'sdf', '0000-00-00', 'we', 'ww'),
(44, 'aa', 'aa', '1111-11-11', 'aa', 'aa'),
(45, 'sss', 'sss', '2017-05-19', 'sss', 'sss'),
(46, 'fgsg', '', '0000-00-00', '', ''),
(47, 'dryerty', '', '0000-00-00', '', ''),
(48, 'trutrurtu', '', '0000-00-00', '', ''),
(49, 'yuttu', '', '0000-00-00', '', ''),
(50, 'stertwt', '', '0000-00-00', '', ''),
(51, 'ryryr', '', '0000-00-00', '', ''),
(52, 'uityi', '', '0000-00-00', '', ''),
(53, 'uyou', '', '0000-00-00', '', ''),
(54, 'suy', '', '0000-00-00', '', ''),
(55, 'ililil', '', '0000-00-00', '', ''),
(57, 'qwew', '', '0000-00-00', '', ''),
(58, 'ioi', '', '0000-00-00', '', ''),
(59, 'fgfdgf', '', '0000-00-00', '', ''),
(60, 'fgfdgf', '', '0000-00-00', '', ''),
(61, 'rehyretger', '', '0000-00-00', '', ''),
(62, 'ukiuyiuy', '', '0000-00-00', '', ''),
(63, 'ouiiuyiuyu', '', '0000-00-00', '', ''),
(64, 'ertyu', '', '0000-00-00', '', ''),
(65, 'eruytu', '', '0000-00-00', '', ''),
(66, '565656', '', '0000-00-00', '', ''),
(67, 'dfdf', '', '0000-00-00', '', ''),
(68, 'ghgh', '', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
