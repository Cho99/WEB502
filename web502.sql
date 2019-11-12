-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2019 lúc 03:45 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web502`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `hoten`, `username`, `password`) VALUES
(1, 'Quang Anh', 'admin', '123'),
(2, 'Quang Anh Bùi', 'dog', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `sort_order` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `parent_id`, `sort_order`) VALUES
(1, 'Bắc', 0, 0),
(2, 'Trung', 0, 1),
(3, 'Nam', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(50) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=koi8r;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `ten`, `fax`, `sdt`, `email`, `diachi`, `created`) VALUES
(1, 'Hồ Chí Minh', '3829 9142', '3822 8898', '', '190 Pasteur, Quận 3, Tp. Hồ Chí Minh, Việt Nam\r\n', 0),
(2, 'Chi Nhánh Hà Nội\r\n', '3933 1979', '3933 1978', '', '03 Hai Bà Trưng, Quận Hoàn Kiếm, Hà Nội\r\n', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaodich`
--

CREATE TABLE `giaodich` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `ten` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `so_tien` decimal(15,4) NOT NULL,
  `hinhthuc_thanhtoan` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaodich`
--

INSERT INTO `giaodich` (`id`, `id_user`, `email`, `ten`, `sdt`, `so_tien`, `hinhthuc_thanhtoan`, `ghi_chu`, `created`) VALUES
(10, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573208837),
(11, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573214642),
(12, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573261224),
(13, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573262945),
(14, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '3600000.0000', 'offline', '', 1573262966),
(15, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '3600000.0000', 'offline', '', 1573263032),
(16, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '3600000.0000', 'offline', '', 1573263252),
(17, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '3600000.0000', 'offline', '', 1573263284),
(18, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573263385),
(19, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573263420),
(20, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573263458),
(21, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '10800000.0000', 'offline', '', 1573350488),
(22, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '123', 1573350978),
(23, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '8999500.0000', 'offline', '', 1573480476);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huongdanvien`
--

CREATE TABLE `huongdanvien` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `diachi` text COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `cmnd` int(15) NOT NULL,
  `avatar` varchar(255) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_giaodich` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `sotien` int(11) NOT NULL,
  `so_nguoi` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `id_giaodich`, `id_tour`, `sotien`, `so_nguoi`, `status`) VALUES
(13, 10, 4, 1800000, 1, 0),
(14, 11, 1, 1800000, 1, 0),
(15, 12, 5, 1800000, 1, 0),
(16, 13, 1, 1800000, 1, 0),
(17, 14, 1, 1800000, 1, 0),
(18, 15, 1, 1800000, 1, 0),
(19, 15, 4, 1800000, 1, 0),
(20, 16, 1, 1800000, 1, 0),
(21, 17, 1, 1800000, 1, 0),
(22, 17, 4, 1800000, 1, 0),
(23, 18, 1, 1800000, 1, 0),
(24, 19, 4, 1800000, 1, 0),
(25, 20, 1, 1800000, 1, 0),
(26, 21, 1, 10800000, 6, 0),
(27, 22, 1, 1800000, 1, 0),
(28, 23, 11, 8999500, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(50) CHARACTER SET koi8r NOT NULL,
  `tieude` varchar(50) CHARACTER SET utf8 NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `ten`, `image_link`, `tieude`, `noidung`, `created`) VALUES
(1, 'Đà Lạt', 'dd4.jpg', 'Xinh đẹp hùng vĩ', 'Xinh đẹp', 1573523845),
(4, '', 'bacninh.jpg', '', '', 1573524025),
(5, '', '5.jpg', '', '', 1573524123);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `discount` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `image_link` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `ngay_di` int(11) NOT NULL DEFAULT current_timestamp(),
  `ngay_ve` int(11) NOT NULL,
  `content` text COLLATE utf16_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `buyed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id`, `catalog_id`, `name`, `price`, `discount`, `amount`, `booked`, `image_link`, `ngay_di`, `ngay_ve`, `content`, `created`, `view`, `buyed`) VALUES
(1, 1, 'Du lịch Hoàng Thành Thăng Long', '2000000.0000', 200000, 30, 9, 'mbac41.jpg', 1573426800, 1573513200, 'Du lịch cực kỳ đẹp', 1572272643, 71, 5),
(4, 3, 'Du lịch Miền Nam', '2000000.0000', 200000, 30, 30, 'mbac41.jpg', 1573426800, 1573513200, 'Du lịch cực kỳ đẹp', 1572272643, 120, 5),
(9, 2, 'Miền Trung', '9000000.0000', 500000, 1, 0, 'dalat1.jpg', 1573426800, 1573513200, 'Thật thú vị', 1573287594, 0, 0),
(11, 2, 'Đà nẵng', '9000000.0000', 500, 22, 1, 'dd31.jpg', 1573426800, 1573513200, '132', 1573479608, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `cmnd` int(15) NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` text COLLATE utf16_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `ten`, `cmnd`, `sdt`, `diachi`, `avatar`, `email`, `password`) VALUES
(1, 'Dog', 123131, 12712313, '504H4, Khu đô thị Việt Hưng', '', 'quangsoi99@gmail.com', '123'),
(5, 'Anh99', 2147483647, 127, '1231312312313', '', 'A@gmail.com', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `huongdanvien`
--
ALTER TABLE `huongdanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `huongdanvien`
--
ALTER TABLE `huongdanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
