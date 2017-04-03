-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 12:37 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adam_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `MaLienHe` int(11) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `TieuDe` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `NoiDung` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`MaLoai`, `TenLoai`) VALUES
(4, 'Bao cao su'),
(3, 'Combo'),
(2, 'Gôm xịt'),
(1, 'Sáp vuốt tóc'),
(5, 'Sextoy');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `DonGia` int(11) NOT NULL DEFAULT '0',
  `HinhAnh` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MaLoai` int(11) NOT NULL,
  `MaThuongHieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`MaSanPham`, `TenSanPham`, `DonGia`, `HinhAnh`, `MaLoai`, `MaThuongHieu`) VALUES
(1, 'Gell bôi trơn đb', 250000, NULL, 2, 3),
(2, 'Bao cao su hiệu con cu', 35000, NULL, 4, 3),
(3, 'Sextoy hiệu con voi', 400000, NULL, 5, 2),
(4, 'Sextoy cho boy', 100000, NULL, 5, 6),
(5, 'Bao cao su không có mu', 40000, NULL, 4, 8),
(6, 'Gôm xịt hiệu con vịt', 450000, NULL, 3, 3),
(7, 'Gell bôi trơn nàng mơn', 120000, NULL, 2, 3),
(8, 'Sáp vuốt tóc hiệu con cóc', 450000, NULL, 1, 9),
(9, 'Sáp vuốt tóc cho người không có tóc', 200000, NULL, 1, 12),
(10, 'Combo trọn bộ bao cao su cho người vô sinh', 500000, NULL, 4, 9),
(11, 'Bao cao su hình cái lu', 50000, NULL, 4, 8),
(12, 'Combo gell bôi trơn + sextoy', 700000, NULL, 3, 4),
(13, 'Bao cao su có lỗ thoát khí', 100000, NULL, 4, 12),
(14, 'Sextoy hình quả mít', 250000, NULL, 5, 10),
(15, 'Sextoy có đèn pin', 200000, NULL, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `MaThuongHieu` int(11) NOT NULL,
  `TenThuongHieu` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`MaThuongHieu`, `TenThuongHieu`) VALUES
(8, 'BUTTERFLY'),
(6, 'CLAYWAX'),
(5, 'COLONNA'),
(3, 'KANFA'),
(1, 'LOREAL'),
(7, 'LUXURIOUS'),
(2, 'OSIS'),
(4, 'SEBA'),
(10, 'Soái ca'),
(9, 'Sửu nhi'),
(12, 'VILAIN SIDEKICK'),
(11, 'VOLCANIC CLAY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`MaLienHe`),
  ADD UNIQUE KEY `MaLienHe` (`MaLienHe`);

--
-- Indexes for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`MaLoai`),
  ADD UNIQUE KEY `TenLoai` (`TenLoai`),
  ADD UNIQUE KEY `MaLoai` (`MaLoai`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD UNIQUE KEY `MaSanPham` (`MaSanPham`),
  ADD UNIQUE KEY `TenSanPham` (`TenSanPham`),
  ADD KEY `MaLoai` (`MaLoai`),
  ADD KEY `MaThuongHieu` (`MaThuongHieu`);

--
-- Indexes for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`MaThuongHieu`),
  ADD UNIQUE KEY `TenThuongHieu` (`TenThuongHieu`),
  ADD UNIQUE KEY `MaThuongHieu` (`MaThuongHieu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `MaLienHe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `MaThuongHieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loai_san_pham` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`MaThuongHieu`) REFERENCES `thuong_hieu` (`MaThuongHieu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
