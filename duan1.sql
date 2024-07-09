-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 10:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh`
--

CREATE TABLE `anh` (
  `idsp` int(11) DEFAULT NULL,
  `anhmota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anh`
--

INSERT INTO `anh` (`idsp`, `anhmota`) VALUES
(1, 'sanpham1_1.jpg'),
(1, 'sanpham1_2.jpg'),
(1, 'sanpham1_3.jpg'),
(2, 'sanpham2_1.jpg'),
(2, 'sanpham2_2.jpg'),
(2, 'sanpham2_3.jpg'),
(3, 'sanpham3_1.jpg'),
(3, 'sanpham3_2.jpg'),
(3, 'sanpham3_3.jpg'),
(4, 'sanpham4_1.jpg'),
(4, 'sanpham4_2.jpg'),
(4, 'sanpham4_3.jpg'),
(5, 'sanpham5_1.jpg'),
(5, 'sanpham5_2.jpg'),
(5, 'sanpham5_3.jpg'),
(6, 'sanpham6_1.jpg'),
(6, 'sanpham6_2.jpg'),
(6, 'sanpham6_3.jpg'),
(7, 'sanpham7_1.jpg'),
(7, 'sanpham7_2.jpg'),
(7, 'sanpham7_3.jpg'),
(8, 'sanpham8_1.jpg'),
(8, 'sanpham8_2.jpg'),
(8, 'sanpham8_3.jpg'),
(9, 'sanpham9_1.jpg'),
(9, 'sanpham9_2.jpg'),
(9, 'sanpham9_3.jpg'),
(10, 'sanpham10_1.jpg'),
(10, 'sanpham10_2.jpg'),
(10, 'sanpham10_3.jpg'),
(11, 'sanpham11_1.jpg'),
(11, 'sanpham11_2.jpg'),
(11, 'sanpham11_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'Sản phẩm rất đang trải nghiệm', 2, 1, '2023-09-22'),
(2, 'Sản phẩm rất tốt', 3, 1, '2023-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `idsp` int(11) DEFAULT NULL,
  `iddh` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `pricesale` decimal(10,2) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Giày NIKE'),
(2, 'Giày ADIDAS'),
(3, 'Giày MIZUNO'),
(4, 'Giày PUMA');

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tongtien` decimal(10,2) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `ngaymua` date DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `trangthaidon` int(11) DEFAULT NULL,
  `loaithanhtoan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dia_chi`
--

CREATE TABLE `dia_chi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `addressother` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dia_chi`
--

INSERT INTO `dia_chi` (`id`, `id_user`, `name`, `tel`, `email`, `addressother`) VALUES
(1, 1, 'Nguyen Anh Tuan', '0987654321', 'tuan@gmail.com', '123/45 Duong Ba Trac'),
(2, 2, 'Le Thi Bich Phuong', '0123456789', 'phuong@gmail.com', '123/2 Le Duan'),
(3, 3, 'Tran Van Nam', '0909090909', 'nam@gmail.com', '456/3 Nguyen Trai');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `idsp` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `pricesale` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `idsp` int(11) DEFAULT NULL,
  `size38` int(11) DEFAULT NULL,
  `size39` int(11) DEFAULT NULL,
  `size40` int(11) DEFAULT NULL,
  `size41` int(11) DEFAULT NULL,
  `size42` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`idsp`, `size38`, `size39`, `size40`, `size41`, `size42`) VALUES
(1, 10, 2, 20, 25, 30),
(2, 11, 16, 0, 26, 31),
(3, 12, 17, 22, 27, 32),
(4, 13, 0, 23, 28, 33),
(5, 14, 19, 24, 29, 34),
(6, 15, 20, 0, 0, 35),
(7, 16, 21, 26, 31, 36),
(8, 17, 4, 27, 32, 37),
(9, 18, 23, 28, 33, 38),
(10, 19, 24, 29, 34, 39),
(11, 20, 25, 30, 35, 40);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `sale` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`, `sale`) VALUES
(1, 'Nike Tiempo Legend 9 Academy ', 30000.00, 'sanpham1.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 100, 1, 20),
(2, 'Nike React Phantom GX Pro TF ', 40000.00, 'sanpham2.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 10, 1, 35),
(3, 'Nike Tiempo  ', 10000.00, 'sanpham3.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 99, 1, 45),
(4, 'ADIDAS PREDATOR 19.3 TF', 20000.00, 'sanpham4.jpg', 'Giày đá bóng sân cỏ tự nhiên', 14, 2, 22),
(5, 'Adidas Copa Sense .3 TF', 13200.00, 'sanpham5.jpg', 'Giày đá bóng sân có tự nhiên  ', 12, 2, 64),
(6, 'Adidas X Ghosted .3 TF', 40000.00, 'sanpham6.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 18, 2, 44),
(7, 'Mizuno Monarcida Neo ', 43142.00, 'sanpham7.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 55, 3, 33),
(8, 'Mizuno Monarcida Neo', 43274.00, 'sanpham8.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 19, 3, 55),
(9, 'Nike Zoom Mercurial Superfly 9 Academy TF ', 95468.00, 'sanpham9.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 133, 4, 77),
(10, 'Adidas Predator Accuracy Injection .3 TF', 274324.00, 'sanpham10.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 1030, 4, 53),
(11, 'Nike Zoom Mercurial Vapor 15 Academy TF', 90000.00, 'sanpham111.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 10330, 4, 25);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'admin', '123456', 'admin1@gmail.com', 'Hà Nội ', '0826226209', 1),
(2, 'minhthiet', '1221', 'minhthiet@gmail.com', 'Ha Nam', '081880892', 0),
(3, 'Thanhdat', '12345', 'Thanhdat@gmail.com', 'PhuTho', '081880892', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `iddh` (`iddh`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dia_chi`
--
ALTER TABLE `dia_chi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dathang`
--
ALTER TABLE `dathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dia_chi`
--
ALTER TABLE `dia_chi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`iddh`) REFERENCES `dathang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
