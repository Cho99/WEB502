-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2019 lúc 02:43 PM
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
(19, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573263420),
(20, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1573263458),
(21, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '10800000.0000', 'offline', '', 1573350488),
(22, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '123', 1573350978),
(23, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '8999500.0000', 'offline', '', 1573480476),
(24, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '10300000.0000', 'offline', '', 1573991416),
(25, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '34400000.0000', 'offline', '', 1573994136),
(26, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1574045356),
(27, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '14500000.0000', 'offline', '', 1574045441),
(28, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', '', 1574046593),
(29, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '14500000.0000', 'offline', '', 1574046636),
(30, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '1800000.0000', 'offline', 'dđ', 1574047344),
(31, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '5400000.0000', 'offline', '', 1574063766),
(32, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '14500000.0000', 'offline', '', 1574063894);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_catalog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=koi8r;

--
-- Đang đổ dữ liệu cho bảng `new`
--

INSERT INTO `new` (`id`, `ten`, `mota`, `noidung`, `id_catalog`) VALUES
(1, 'New', 'Tuyệ đẹp', ' hiều 18/11, TAND Cấp cao tại TP.HCM mở lại phiên tòa xét xử vụ án ly hôn giữa bà Lê Hoàng Diệp Thảo, SN 1973, Chủ tịch HĐQT kiêm Tổng Giám đốc công ty Cà phê hòa tan Trung Nguyên và ông Đặng Lê Nguyên Vũ, SN 1971, Chủ tịch HĐQT kiêm Tổng Giám đốc Tập đoàn Cà phê Trung Nguyên.\r\n\r\nTrước đó vào sáng cùng ngày, cấp tòa này đã mở phiên tòa xét xử nhưng sau đó quyết định tạm hoãn phiên tòa vì nguyên đơn có đơn xin hoãn xử.\r\n\r\nTheo HĐXX, việc tạm hoãn phiên tòa là để xác minh bà Thảo có thực sự ốm, đang nằm viện hay không, sau đó sẽ đưa ra quyết định chính thức hoãn phiên xét xử phúc thẩm.\r\n\r\nĐây là lần thứ 3 tòa phúc thẩm mở phiên tòa xét xử theo đơn kháng cáo của bà Thảo, ông Vũ và kháng nghị hủy án của VKSND TP.HCM.\r\n\r\nTrong cả 3 lần mở tòa, ông Vũ đều đến tòa từ sớm. Trong khi đó, cả 3 lần phía bà Thảo đều đề nghị hoãn xét xử vì nhiều lý do khác nhau.', 0);

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
  `ngay_di` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `id_giaodich`, `id_tour`, `sotien`, `so_nguoi`, `ngay_di`, `status`) VALUES
(13, 10, 4, 1800000, 1, 0, 0),
(14, 11, 1, 1800000, 1, 0, 0),
(15, 12, 5, 1800000, 1, 0, 0),
(16, 13, 1, 1800000, 1, 0, 0),
(17, 14, 1, 1800000, 1, 0, 0),
(18, 15, 1, 1800000, 1, 0, 0),
(19, 15, 4, 1800000, 1, 0, 0),
(20, 16, 1, 1800000, 1, 0, 0),
(21, 17, 1, 1800000, 1, 0, 0),
(22, 17, 4, 1800000, 1, 0, 0),
(23, 18, 1, 1800000, 1, 0, 0),
(24, 19, 4, 1800000, 1, 0, 0),
(25, 20, 1, 1800000, 1, 0, 0),
(26, 21, 1, 10800000, 6, 0, 0),
(27, 22, 1, 1800000, 1, 0, 0),
(28, 23, 11, 8999500, 1, 0, 0),
(29, 24, 1, 1800000, 1, 0, 0),
(30, 24, 9, 8500000, 1, 0, 0),
(31, 25, 12, 29000000, 2, 1574550000, 0),
(32, 25, 1, 5400000, 3, 1574550000, 0),
(33, 26, 1, 1800000, 1, 1574118000, 0),
(34, 27, 12, 14500000, 1, 1574463600, 0),
(35, 28, 1, 1800000, 1, 1574463600, 0),
(36, 29, 12, 14500000, 1, 1574550000, 0),
(37, 30, 1, 1800000, 1, 1574118000, 0),
(38, 31, 1, 5400000, 3, 1575068400, 0),
(39, 32, 12, 14500000, 1, 1574118000, 0);

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
  `days` int(11) NOT NULL,
  `content` text COLLATE utf16_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `buyed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id`, `catalog_id`, `name`, `price`, `discount`, `amount`, `booked`, `image_link`, `days`, `content`, `created`, `view`, `buyed`) VALUES
(1, 1, 'Du lịch Hoàng Thành Thăng Long VIP', '2000000.0000', 200000, 30, 19, 'mbac41.jpg', 5, 'Du lịch cực kỳ đẹp', 1572272643, 146, 11),
(4, 3, 'Du lịch Miền Nam', '2000000.0000', 200000, 30, 30, 'mbac41.jpg', 3, 'Du lịch cực kỳ đẹp', 1572272643, 121, 5),
(9, 2, 'Miền Trung', '9000000.0000', 500000, 1, 1, 'dalat1.jpg', 4, 'Thật thú vị', 1573287594, 2, 1),
(11, 2, 'Đà nẵng', '9000000.0000', 500, 22, 1, 'dd31.jpg', 7, '132', 1573479608, 3, 1),
(12, 1, 'Du lịch Hoàng Thành Thăng Long', '15000000.0000', 500000, 30, 20, 'mbac41.jpg', 5, 'Du lịch cực kỳ đẹp', 1572272643, 123, 9);

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
-- Chỉ mục cho bảng `new`
--
ALTER TABLE `new`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
