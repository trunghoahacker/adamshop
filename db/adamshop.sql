-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 06:36 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adamshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL,
  `note1` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `note2` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
`id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `mobile` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `massage` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `note` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `name`, `email`, `mobile`, `subject`, `massage`, `note`) VALUES
(9, 'Name', 'Email', 'Mobile', 'Subject', 'a', NULL),
(10, '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
`id` int(11) NOT NULL,
  `maloai` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenloai` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `maloai`, `tenloai`) VALUES
(1, 'SAP', 'Sáp vuốt tóc'),
(2, 'GOM', 'Gôm xịt'),
(3, 'COMBO', 'Combo');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
`id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `mathuonghieu` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `maloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE IF NOT EXISTS `thuonghieu` (
`id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `mathuonghieu` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `maloai` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `name`, `mathuonghieu`, `maloai`) VALUES
(1, 'Sáp LOREAL', 'LOREAL', 'SAP'),
(2, 'Sáp OSIS', 'OSIS', 'SAP'),
(3, 'Sáp KANFA', 'KANFA', 'SAP'),
(4, 'Sáp SEBA', 'SEBA', 'SAP'),
(5, 'Sáp COLONNA', 'COLONNA', 'SAP'),
(6, 'Sáp CLAYWAX', 'CLAYWAX', 'SAP'),
(7, 'Gôm LUXURIOUS', 'LUXURIOUS', 'GOM'),
(8, 'Gôm BUTTERFLY', 'BUTTERFLY', 'GOM'),
(9, 'Gôm COLONNA', 'COLONNA', 'GOM'),
(10, 'COMBO Soái Ca', 'Soái ca', 'COMBO'),
(11, 'COMBO Sửu Nhi', 'Sửu nhi', 'COMBO'),
(12, 'Sáp VOLCANIC CLAY', 'VOLCANIC CLAY', 'SAP'),
(14, 'Xịt giữ nếp VILAIN SIDEKICK', 'VILAIN SIDEKICK', 'GOM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
