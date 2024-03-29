-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 07:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `mahh` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `hinh` varchar(30) NOT NULL,
  `dongia` float NOT NULL,
  `giamgia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cthanghoa`
--

INSERT INTO `cthanghoa` (`mahh`, `idsize`, `hinh`, `dongia`, `giamgia`, `soluongton`, `deleted_at`) VALUES
(1, 2, 'product-1.jpg', 50000, 45000, 10, NULL),
(2, 1, 'product-2.jpg', 50000, 0, 15, NULL),
(3, 1, 'product-3.jpg', 50000, 45000, 10, NULL),
(4, 3, 'product-4.jpg', 50000, 0, 10, NULL),
(5, 2, 'product-5.jpg', 50000, 0, 10, NULL),
(6, 3, 'product-6.jpg', 50000, 0, 10, NULL),
(7, 2, 'product-7.jpg', 50000, 45000, 10, NULL),
(8, 3, 'product-8.jpg', 60000, 0, 7, NULL),
(9, 1, 'product-9.jpg', 15000, 0, 15, NULL),
(10, 2, 'product-10.jpg', 25000, 20000, 20, NULL),
(11, 1, 'product-11.jpg', 10000, 0, 10, NULL),
(12, 1, 'product-12.jpg', 10000, 0, 10, NULL),
(13, 2, 'product-13.jpg', 60000, 0, 13, NULL),
(14, 1, 'product-14.jpg', 50000, 0, 7, NULL),
(15, 1, 'product-15.jpg', 50000, 0, 11, NULL),
(16, 3, 'product-16.jpg', 60000, 0, 5, NULL),
(17, 3, 'product-17.jpg', 65000, 0, 8, NULL),
(18, 2, 'product-18.jpg', 80000, 65000, 9, NULL),
(19, 2, 'product-19.jpg', 15000, 7000, 6, NULL),
(20, 3, 'product-20.jpg', 27000, 0, 4, NULL),
(21, 1, 'product-21.jpg', 60000, 0, 7, NULL),
(22, 0, 'bg_2.jpg', 20000, 0, 4, '2024-03-21 17:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `mahh` int(11) NOT NULL,
  `idhd` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` float NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`mahh`, `idhd`, `soluongmua`, `thanhtien`, `tinhtrang`, `deleted_at`) VALUES
(13, 12, 2, 120000, 0, NULL),
(13, 13, 2, 120000, 0, NULL),
(13, 14, 2, 120000, 0, NULL),
(13, 15, 2, 120000, 0, NULL),
(21, 3, 2, 120000, 0, NULL),
(21, 4, 3, 180000, 0, NULL),
(21, 5, 3, 180000, 0, NULL),
(21, 6, 3, 180000, 0, NULL),
(21, 7, 3, 180000, 0, NULL),
(21, 8, 3, 180000, 0, NULL),
(21, 9, 3, 180000, 0, NULL),
(21, 10, 3, 180000, 0, NULL),
(21, 11, 3, 180000, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(200) NOT NULL,
  `ngaytao` date NOT NULL,
  `idloai` int(11) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `ngaytao`, `idloai`, `mota`, `deleted_at`) VALUES
(1, 'ớt', '2024-02-03', 1, 'Nan khước', NULL),
(2, 'Dâu tây', '2023-12-09', 2, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nDâu tây đem lại tác dụng: cung cấp vitamin C và K, hỗ trợ tiêu hóa, lợi ích cho da, hỗ trợ giảm cân, hỗ trợ sức khỏe não.', NULL),
(3, 'Đậu hà lan', '2023-12-10', 4, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nĐậu hà lan đem lại tác dụng: cung cấp protein thực vật, hỗ trợ giảm cân, giúp kiểm soát đường huyết, hỗ trợ sức khỏe não.', NULL),
(4, 'Bắp cải tím', '2023-12-08', 1, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nBắp cải tím đem lại tác dụng: chống oxi hóa, cung cấp vitamin C và K, hỗ trợ kiểm soát cân nặng, hỗ trợ sức khỏe não.', NULL),
(5, 'Cà chua', '2023-12-08', 1, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nCà chua đem lại tác dụng: cung cấp vitamin C, hỗ trợ tiêu hóa, giúp kiểm soát cân nặng.', NULL),
(6, 'Súp lơ xanh', '2023-12-10', 1, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nSúp lơ xanh đem lại tác dụng: cung cấp vitamin C, K, A, duy trì hệ tiêu hóa khỏe mạnh, giảm nguy cơ mắc ung thư, hỗ trợ giảm cân.', NULL),
(7, 'Cà rốt', '2023-12-07', 1, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nCà rốt đem lại tác dụng: cung cấp vitamin A, cải thiện làn da, giảm nguy cơ mắc bệnh tim mạch.', NULL),
(8, 'Nước cốt chanh dây', '2023-12-09', 3, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nNước cốt chanh dây đem lại tác dụng: cung cấp vitamin C và chất chống oxy hóa, giảm căng thẳng và mệt mỏi, hỗ trợ tiêu hóa, giải khát và tăng cường năng lượng.', NULL),
(9, 'Hành tím', '2023-12-09', 5, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nHành tím thường được dùng làm gia vị cho các món ăn nhằm tăng thêm hương vị.', NULL),
(10, 'Táo', '2023-12-08', 2, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon, nên mua.', NULL),
(11, 'Tỏi', '2023-12-10', 5, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nThường được dùng làm gia vị tăng hương vị cho các món ăn.', NULL),
(12, 'Ớt', '2023-12-09', 5, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nThường được dùng làm gia vị tăng vị cay cho món ăn.', NULL),
(13, 'Kiwi', '2023-12-15', 2, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nThơm ngon, chua ngọt.', NULL),
(14, 'Mâm xôi', '2023-12-16', 2, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', NULL),
(15, 'Nho', '2023-12-16', 2, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', NULL),
(16, 'Sinh tố Cherry', '2023-12-17', 3, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', NULL),
(17, 'Sinh tố Kiwi', '2023-12-17', 3, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', NULL),
(18, 'Hạt óc chó', '2023-12-15', 4, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', NULL),
(19, 'Rau xà lách', '2023-12-17', 1, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', NULL),
(20, 'Chuối', '2023-12-17', 2, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', NULL),
(21, 'Hạnh nhân', '2023-12-17', 4, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', NULL),
(22, 'Cam', '2024-03-18', 2, 'Cam hàng tươi mới, đảm bảo an toàn vệ sinh sạch sẽ', '2024-03-27 18:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(11) NOT NULL,
  `tenhd` varchar(200) NOT NULL,
  `ngaylap` datetime NOT NULL,
  `tongtien` float NOT NULL,
  `idkh` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `tenhd`, `ngaylap`, `tongtien`, `idkh`, `deleted_at`) VALUES
(1, '', '2024-03-15 00:00:00', 0, 4, '2024-03-21 21:27:40'),
(2, '', '2024-03-15 00:00:00', 0, 4, NULL),
(3, '', '2024-03-15 00:00:00', 120000, 4, NULL),
(4, '', '2024-03-15 00:00:00', 180000, 4, NULL),
(5, '', '2024-03-15 00:00:00', 180000, 4, NULL),
(6, '', '2024-03-15 00:00:00', 180000, 4, NULL),
(7, '', '2024-03-15 00:00:00', 180000, 4, NULL),
(8, '', '2024-03-15 00:00:00', 180000, 4, NULL),
(9, '', '2024-03-15 00:00:00', 180000, 4, NULL),
(10, '', '2024-03-15 00:00:00', 180000, 4, NULL),
(11, '', '2024-03-15 00:00:00', 180000, 4, NULL),
(12, '', '2024-03-27 00:00:00', 120000, 2, NULL),
(13, '', '2024-03-27 00:00:00', 120000, 2, NULL),
(14, '', '2024-03-27 00:00:00', 120000, 2, NULL),
(15, '', '2024-03-27 00:00:00', 120000, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tenkh` varchar(200) NOT NULL,
  `diachi` text NOT NULL,
  `sdt` int(11) NOT NULL,
  `matkhau` varchar(200) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `username`, `email`, `tenkh`, `diachi`, `sdt`, `matkhau`, `deleted_at`) VALUES
(1, 'TrongNhan000', 'letrongnhan2502@gmail.com', 'Trọng Nhân', '12TĐT', 123456789, 'abcABC', NULL),
(2, 'LTN', 'a@gmail.com', 'Lê Trọng Nhân', '12 Trịnh Đình Thảo', 1321387123, '69be6e6653dc6323bd93dc4372bb7fa4', NULL),
(3, 'TNN', 'abc@gmail.com', 'Lê Trọng Nhân', '12 Trịnh Đình Thảo', 1321387123, '3fd1ade7f3fb9d5aeeae513bd05f8c24', NULL),
(4, 'LTN001', 'b@gmail.com', 'Trọng Nhân', '12 Trịnh Đình Thảo', 2147483647, '69be6e6653dc6323bd93dc4372bb7fa4', NULL),
(5, '', 'letrongnhan111@gmail.com', 'Trọng Nhân', '12TDT', 1212121212, '69be6e6653dc6323bd93dc4372bb7fa4', '2024-03-21 17:05:28'),
(6, 'Trọng Nhân', 'firstunio@gmail.com', 'Trọng Nhân', '12TDT', 335666543, '3a9e3634d6ff92c9a2caa884ea4d0d22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `idloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`idloai`, `tenloai`, `deleted_at`) VALUES
(1, 'rau củ', NULL),
(2, 'trái cây', NULL),
(3, 'nước', NULL),
(4, 'hạt', NULL),
(5, 'gia vị', NULL),
(6, 'Gia vị 002', '2024-03-20 21:58:40'),
(2147483647, ' abc', '2024-03-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `username`, `password`, `fullname`, `email`, `deleted_at`) VALUES
(1, 'ltn', '123123', 'Lê Trọng Nhân', 'letrongnhan@gmail.com', NULL),
(2, 'admin', '123123', 'Lê Trọng Nhân', 'letrongnhan722@gmail.com', NULL),
(3, 'TTS', '69be6e6653dc6323bd93dc4372bb7fa4', 'Nguyễn Hòa Phước Thiện', 'letrongnhan000@gmail.com', NULL),
(4, 'AdminTS', '69be6e6653dc6323bd93dc4372bb7fa4', 'Trọng Nhân', 'letrongnhan111@gmail.com', NULL),
(5, 'AdminTS01', '69be6e6653dc6323bd93dc4372bb7fa4', 'Trọng Nhân', 'letrongnhan001@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`mahh`,`idsize`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`mahh`,`idhd`),
  ADD KEY `FK_idhd` (`idhd`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `FK_idloai` (`idloai`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`),
  ADD KEY `FK_idkh` (`idkh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idloai`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `idloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD CONSTRAINT `FK_mahh_cthh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `FK_idhd` FOREIGN KEY (`idhd`) REFERENCES `hoadon` (`idhd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_idloai` FOREIGN KEY (`idloai`) REFERENCES `loai` (`idloai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_idkh` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`idkh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
