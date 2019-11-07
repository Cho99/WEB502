-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2019 lúc 08:06 AM
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
(6, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '1111', 1572965926),
(8, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '3600000.0000', 'offline', '', 1573029827),
(9, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573094763);

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
(7, 6, 4, 1800000, 1, 0),
(10, 8, 4, 1800000, 1, 0),
(11, 8, 1, 1800000, 1, 0),
(12, 9, 5, 1800000, 1, 0);

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
  `image_link` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `ngay_di` int(11) NOT NULL,
  `ngay_ve` int(11) NOT NULL,
  `content` text COLLATE utf16_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `buyed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id`, `catalog_id`, `name`, `price`, `discount`, `amount`, `image_link`, `ngay_di`, `ngay_ve`, `content`, `created`, `view`, `buyed`) VALUES
(1, 1, 'Du lịch Hoàng Thành Thăng Long', '2000000.0000', 200000, 30, 'mbac41.jpg', 0, 0, 'Du lịch cực kỳ đẹp', 1572272643, 43, 5),
(4, 3, 'Du lịch Miền Nam', '2000000.0000', 200000, 30, 'mbac41.jpg', 0, 0, 'Du lịch cực kỳ đẹp', 1572272643, 108, 5),
(5, 2, 'Du lịch Miền Trung', '2000000.0000', 200000, 30, 'mbac41.jpg', 0, 0, 'Du lịch cực kỳ đẹp', 1572272643, 43, 5),
(6, 2, 'TrungAnh', '9000000.0000', 500, 0, '', 8, 5, '<p>\r\n	ddadadada</p>\r\n', 1573100907, 0, 0);

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
-- AUTO_INCREMENT cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `huongdanvien`
--
ALTER TABLE `huongdanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
