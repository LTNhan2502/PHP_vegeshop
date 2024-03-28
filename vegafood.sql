-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:41 AM
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
-- Database: `vegafood`
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
  `mota` text NOT NULL,
  `giamgia` float NOT NULL,
  `soluongton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cthanghoa`
--

INSERT INTO `cthanghoa` (`mahh`, `idsize`, `hinh`, `dongia`, `mota`, `giamgia`, `soluongton`) VALUES
(1, 2, 'product-1.jpg', 50000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nỚt chuông đem lại tác dụng: cung cấp vitamin C, hỗ trợ tiêu hóa, giảm nguy cơ mắc bệnh tim mạch và ung thư, hỗ trợ giảm cân.', 45000, 10),
(2, 1, 'product-2.jpg', 50000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nDâu tây đem lại tác dụng: cung cấp vitamin C và K, hỗ trợ tiêu hóa, lợi ích cho da, hỗ trợ giảm cân, hỗ trợ sức khỏe não.', 0, 15),
(3, 1, 'product-3.jpg', 50000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nĐậu hà lan đem lại tác dụng: cung cấp protein thực vật, hỗ trợ giảm cân, giúp kiểm soát đường huyết, hỗ trợ sức khỏe não.', 45000, 10),
(4, 3, 'product-4.jpg', 50000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nBắp cải tím đem lại tác dụng: chống oxi hóa, cung cấp vitamin C và K, hỗ trợ kiểm soát cân nặng, hỗ trợ sức khỏe não.', 0, 10),
(5, 2, 'product-5.jpg', 50000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nCà chua đem lại tác dụng: cung cấp vitamin C, hỗ trợ tiêu hóa, giúp kiểm soát cân nặng.', 0, 10),
(6, 3, 'product-6.jpg', 50000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nSúp lơ xanh đem lại tác dụng: cung cấp vitamin C, K, A, duy trì hệ tiêu hóa khỏe mạnh, giảm nguy cơ mắc ung thư, hỗ trợ giảm cân.', 0, 10),
(7, 2, 'product-7.jpg', 50000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nCà rốt đem lại tác dụng: cung cấp vitamin A, cải thiện làn da, giảm nguy cơ mắc bệnh tim mạch.', 45000, 10),
(8, 3, 'product-8.jpg', 60000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nNước cốt chanh dây đem lại tác dụng: cung cấp vitamin C và chất chống oxy hóa, giảm căng thẳng và mệt mỏi, hỗ trợ tiêu hóa, giải khát và tăng cường năng lượng.', 0, 7),
(9, 1, 'product-9.jpg', 15000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nHành tím thường được dùng làm gia vị cho các món ăn nhằm tăng thêm hương vị.', 0, 15),
(10, 2, 'product-10.jpg', 25000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon, nên mua.', 20000, 20),
(11, 1, 'product-11.jpg', 10000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nThường được dùng làm gia vị tăng hương vị cho các món ăn.', 0, 10),
(12, 1, 'product-12.jpg', 10000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nThường được dùng làm gia vị tăng vị cay cho món ăn.', 0, 10),
(13, 2, 'product-13.jpg', 60000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nThơm ngon, chua ngọt.', 0, 15),
(14, 1, 'product-14.jpg', 50000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', 0, 10),
(15, 1, 'product-15.jpg', 50000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', 0, 15),
(16, 3, 'product-16.jpg', 60000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', 0, 5),
(17, 3, 'product-17.jpg', 65000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', 0, 7),
(18, 2, 'product-18.jpg', 80000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', 65000, 12),
(19, 2, 'product-19.jpg', 15000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', 7000, 6),
(20, 3, 'product-20.jpg', 27000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', 0, 4),
(21, 1, 'product-21.jpg', 60000, 'Hàng tươi mới, sạch sẽ, đảm bao an toàn vệ sinh thực phẩm.\r\nRất ngon.', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `mahh` int(11) NOT NULL,
  `idhd` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` float NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(200) NOT NULL,
  `ngaytao` date NOT NULL,
  `idloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `ngaytao`, `idloai`) VALUES
(1, 'Ớt chuông', '2023-12-10', 1),
(2, 'Dâu tây', '2023-12-09', 2),
(3, 'Đậu hà lan', '2023-12-10', 4),
(4, 'Bắp cải tím', '2023-12-08', 1),
(5, 'Cà chua', '2023-12-08', 1),
(6, 'Súp lơ xanh', '2023-12-10', 1),
(7, 'Cà rốt', '2023-12-07', 1),
(8, 'Nước cốt chanh dây', '2023-12-09', 3),
(9, 'Hành tím', '2023-12-09', 5),
(10, 'Táo', '2023-12-08', 2),
(11, 'Tỏi', '2023-12-10', 5),
(12, 'Ớt', '2023-12-09', 5),
(13, 'Kiwi', '2023-12-15', 2),
(14, 'Mâm xôi', '2023-12-16', 2),
(15, 'Nho', '2023-12-16', 2),
(16, 'Sinh tố Cherry', '2023-12-17', 3),
(17, 'Sinh tố Kiwi', '2023-12-17', 3),
(18, 'Hạt óc chó', '2023-12-15', 4),
(19, 'Rau xà lách', '2023-12-17', 1),
(20, 'Chuối', '2023-12-17', 2),
(21, 'Hạnh nhân', '2023-12-17', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(11) NOT NULL,
  `tenhd` varchar(200) NOT NULL,
  `ngaylap` datetime NOT NULL,
  `tongtien` float NOT NULL,
  `idkh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `matkhau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `username`, `email`, `tenkh`, `diachi`, `sdt`, `matkhau`) VALUES
(1, 'TrongNhan', 'letrongnhan2502@gmail.com', 'Trọng Nhân', '12TĐT', 123456789, 'abcABC'),
(2, 'LTN', 'a@gmail.com', 'Lê Trọng Nhân', '12 Trịnh Đình Thảo', 1321387123, '69be6e6653dc6323bd93dc4372bb7fa4'),
(3, 'TNN', 'abc@gmail.com', 'Lê Trọng Nhân', '12 Trịnh Đình Thảo', 1321387123, '3fd1ade7f3fb9d5aeeae513bd05f8c24'),
(4, 'LTN001', 'b@gmail.com', 'Trọng Nhân', '12 Trịnh Đình Thảo', 2147483647, '69be6e6653dc6323bd93dc4372bb7fa4');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `idloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`idloai`, `tenloai`) VALUES
(1, 'rau củ'),
(2, 'trái cây'),
(3, 'nước'),
(4, 'hạt'),
(5, 'gia vị');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `idsize` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`idsize`, `size`) VALUES
(1, 'nhỏ'),
(2, 'vừa'),
(3, 'lớn'),
(4, 'siêu lớn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`mahh`,`idsize`),
  ADD KEY `FK_idsize` (`idsize`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`mahh`,`idhd`);

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
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idsize`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `idloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD CONSTRAINT `FK_idsize` FOREIGN KEY (`idsize`) REFERENCES `size` (`idsize`) ON DELETE CASCADE ON UPDATE CASCADE,
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
