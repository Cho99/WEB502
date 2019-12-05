-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2019 lúc 03:04 AM
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
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(32, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '14500000.0000', 'offline', '', 1574063894),
(33, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '181790000.0000', 'offline', '', 1574171430),
(34, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '32499000.0000', 'offline', '', 1574762588),
(35, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '53997000.0000', 'offline', '', 1575337484),
(36, 1, 'quangsoi99@gmail.com', 'Dog', 12712313, '8999500.0000', 'offline', '', 1575338414);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_catalog` int(11) NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=koi8r;

--
-- Đang đổ dữ liệu cho bảng `new`
--

INSERT INTO `new` (`id`, `ten`, `mota`, `noidung`, `id_catalog`, `created`) VALUES
(3, 'Sapa rất lạnh ', 'Trời miền bắc rất lạnh', 'Sa Pa nằm cách thành phố Lào Cai 38km và cách Hà Nội 376km. Để du lịch Sa Pa bạn có thể chọn phương tiện là tàu hỏa hoặc ô tô. Nên đi tàu đêm để sáng sớm đến Sapa.\r\n\r\nHiện nay đường cao tốc Lào Cai rất đẹp, êm ru, có thể đi ô tô riêng hoặc xe khách cũng rất thuận tiện. Nếu đi nhóm đông người, các bạn có thể thuê 1 chiếc xe riêng.\r\nNhà Thờ Cổ Sapa: Nằm ở giữa trung tâm Sapa là một tu viện cổ kính, đẹp nguy nga, huyền bí, được người Pháp xây vào cuối thế kỷ XVIII, dấu ấn kiến trúc của người Pháp còn lại vẹn toàn nhất. Bất cứ ai nhìn thấy nó đều ngạc nhiên vì thời kỳ đó đã có một công trình vừa đồ sộ vừa cầu kỳ một cách lạ thường.Chợ Sapa: là một hoạt động kinh tế văn hóa rất độc đáo, đây là nơi trao đổi mua bán nhiều loại hàng hóa, sản phẩm địa phương.\r\n\r\n', 2, 1575468365),
(4, 'Hà Nội', 'Đẹp một cách hữu tình', 'Hà Nội, âm thanh vang lên nghe thật trong trẻo, làm động lòng trái tim bao người con đất Việt. Trải qua biết bao thăng trầm lịch sử, Hà Nội vẫn sừng sững ở đó, nguy nga tráng lệ. Nói về Hà Nội, người ta không khỏi nghĩ đến một thành phố tấp nập, những công ti cao trọc trời, những trung tâm giải trí, trung tâm thương mại rộng lớn. Nhưng bạn biết không, bên cạnh vẻ đẹp hiện đại đấy, Hà Nội vẫn giữ cho mình một nét rất riêng, rất Hà Nội mà không nơi đâu có được.', 2, 65422),
(5, 'Huế', 'Đẹp như 1 nàng thơ', 'Huế – mảnh đất lãng mạn, mộng mơ, đậm chất thơ, một miền di sản có một không hai về vẻ đẹp rất riêng, rất ngọt ngào. Khi chưa đặt chân đến Huế, tôi không mường tượng được một cố đô đầy chất thơ sẽ ra sao giữa thời hiện đại. Nhìn cuộc sống sôi động, ồn ào, náo nhiệt không ngừng ở Thủ đô Hà Nội và tp Hồ Chí Minh, tôi bất chợt lo lắng cho thành phố nhỏ, thơ mộng ấy dường như chỉ xuất hiện trong thơ ca, nhạc họa và nhiếp ảnh...\r\nTrang chủDu lịchTheo chân du khách\r\n \r\nTheo chân du khách\r\nCảm xúc về Huế thân thương\r\nHuế – mảnh đất lãng mạn, mộng mơ, đậm chất thơ, một miền di sản có một không hai về vẻ đẹp rất riêng, rất ngọt ngào. Khi chưa đặt chân đến Huế, tôi không mường tượng được một cố đô đầy chất thơ sẽ ra sao giữa thời hiện đại. Nhìn cuộc sống sôi động, ồn ào, náo nhiệt không ngừng ở Thủ đô Hà Nội và tp Hồ Chí Minh, tôi bất chợt lo lắng cho thành phố nhỏ, thơ mộng ấy dường như chỉ xuất hiện trong thơ ca, nhạc họa và nhiếp ảnh...\r\n\r\nThế rồi, tôi cũng đến Huế. Huế đón chào tôi giống như khi tôi ngắm Huế qua những bức ảnh, thơ ca… Thật bình yên, thơ mộng đến lạ kỳ, Huế bình lặng từ cảnh vật đến con người. Từ nụ cười dịu dàng, kín đáo sau vành nón lá của các cô gái Huế đạp xe trên phố cho đến nét đôn hậu vô tư của bà chủ quán hàng ăn, tay thoăn thoắt xếp bánh bèo cho khách đang nôn nóng chờ đợi…Huế có sông Hương hiền hòa thơ mộng, có núi Ngự thông reo vi vu giữa trời xanh. Huế có Kinh thành, nơi chứng kiến biết bao sự đổi thay quyền cai trị đất nước, lúc thịnh lúc suy. Huế có lăng tẩm đền đài lưu dấu ngàn thu của các bậc Vua chúa. Huế có Từ Đàm, ngôi Phạm Vũ đã chứng tri biết bao biến động thăng trầm hào hùng của lịch sử nước nhà. Huế có Thiên Mụ, ngôi cổ tự hùng thiêng trải qua bao thế hệ. Những hồi chuông Thiên Mụ còn mãi ngân vang từ ngàn xưa cho tới tận ngàn đời sau. Tháp Phước Duyên vời vợi giữa chốn Kinh kỳ, như thâu gọn hồn thiêng của Tổ quốc.', 2, 66545),
(6, 'Đà Lạt', 'Đà Lạt mộng mơ và quyến rũ', 'Thiên nhiên và con người Đà Lạt đi vào những áng văn thơ, những bức tranh ảnh, vào nghệ thuật, và trong tim mỗi người. Song dù có cố gắng miêu tả thế nào, chỉ khi tự mình đặt chân đến, bạn mới có những cảm nhận thật nhất của riêng mình. Không dám tự nhận là đã hiểu hết về Đà Lạt, xin mạo muội đưa ra những đúc kết của riêng mình về thành phố Đà Lạt – những lý do mà mỗi chúng ta đều yêu mến nơi này.Còn gì tuyệt hơn khi có thể chạy trốn cái nắng nóng của Sài Gòn, đến với Đà Lạt yên bình. Những người con phương Nam chưa bao giờ biết đến mùa đông phương Bắc có thể cảm nhận chút ít tại Đà Lạt. Điều đặc biệt là tiết trời Đà Lạt chỉ se se chứ không quá lạnh… cực kỳ đáng giá là địa điểm nghỉ ngơi.Với rừng thông bạt ngàn, rất nhiều hồ nước, sông suối, Đà Lạt sở hữu khí hậu tuyệt vời. Không khí ở đây trong lành, mát mẻ, khác hẳn sự ngột ngạt, đông đúc của những đô thị lớn như Sài Gòn, Hà Nội. Đến Đà Lạt, bạn có thể trải nghiệm 1 ngày với 4 mùa: Buổi sáng sớm là thời tiết của mùa xuân, buổi trưa là mùa hạ, buổi chiều là mùa thu, và đêm là mùa đông…. Do đó du lịch Đà Lạt không cần mùa, cần tháng. Đà Lạt lúc nào cũng đẹp, cũng mát diụ, cũng nên thơ.', 3, 6824),
(7, 'TP Hồ Chí Mình', 'Thành phố mang tên Bác', 'Nếu như Hà Nội - bên cạnh nhịp sống hối hả, hiện đại còn ẩn chứa vẻ đẹp thâm trầm sâu lắng của thành phố ngàn năm tuổi, thì Thành phố Hồ Chí Minh (TPHCM) lại là một thành phố trẻ trung, sôi động với nhịp sống hiện đại… TPHCM hiện nay (Sài Gòn trước đây) đã trải qua bao nhiêu thay đổi, nhưng nhịp sống trẻ đầy nhiệt huyết vẫn chẳng hề đổi thay, luôn năng động và hội nhập nhanh chóng với những cái mới khiến bất kì ai đến đây cũng không thể chối từ được “cuốn theo” nhịp sống ấy. Nếu bạn có cơ hội, hãy đến với TPHCM trong dịp Xuân mới để cùng trải nghiệm, khám phá vẻ đẹp và văn hóa của con người mảnh đất phương Nam.Chợ Bến Thành được xem như nhân chứng lịch sử hùng hồn, chứng kiến biết bao đau thương cũng như sự thay đổi, phát triển từng ngày của thành phố, trở thành biểu tượng của TPHCM. Ngày nay, khu chợ vẫn giữ vai trò quan trọng và là một trong những trung tâm buôn bán tấp nập, sầm uất không chỉ của TPHCM mà còn của các tỉnh phía Nam.Một biểu tượng khác của thành phố không thể không nhắc đến là Nhà thờ Đức Bà Sài Gòn (có tên chính thức là Vương cung thánh đường Chính tòa Đức Mẹ Vô nhiễm Nguyên tội), là nhà thờ chính tòa của Tổng giáo phận TPHCM. Nhà thờ không chỉ mang ý nghĩa tôn giáo, mà nó còn mang giá trị kiến trúc độc đáo, một điểm đến hấp dẫn cho khách du lịch. Nhà thờ được người Pháp xây dựng ngay sau khi vừa chiếm được Sài Gòn, trở thành nơi hành lễ cho người Pháp theo đạo Công giáo. Lúc đầu, Nhà thờ khá nhỏ, được linh mục Lefebvre xây dựng trên nền một ngôi chùa bỏ hoang của người Việt. Năm 1876, Thống đốc Nam kỳ Duperré đã tổ chức kỳ thi vẽ đồ án thiết kế Nhà thờ và đồ án của kiến trúc sư J.Bourard với phong cách kiến trúc Roman cải biên pha trộn nét phong cách kiến trúc Gothic đã được chọn. Nhà thờ được xây dựng trong 3 năm (1877-1880), cho đến năm 1895, Nhà thờ xây dựng thêm hai tháp chuông, mỗi tháp cao gần 60 m và có 6 chuông đồng lớn, trên đỉnh có một cây thánh giá cao 3,5 m với trọng lượng 600 kg. Trong quá trình xây dựng, toàn bộ nguyên vật liệu xây dựng từ xi măng, sắt thép đến ốc vít đều mang từ Pháp sang. Từng chi tiết nội thất, thiết kế đều được tính toán tỉ mỉ, cẩn thận và đầy nghệ thuật. Cho đến ngày nay, Nhà thờ Đức Bà Sài Gòn vẫn luôn được xem là thành tựu nổi bật cho kiến trúc tại Sài Gòn.', 1, 5343);

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
(39, 32, 12, 14500000, 1, 1574118000, 0),
(40, 33, 11, 179990000, 20, 1574377200, 0),
(41, 33, 1, 1800000, 1, 1573945200, 0),
(42, 34, 11, 17999000, 2, 1575068400, 0),
(43, 34, 12, 14500000, 1, 1574809200, 0),
(44, 35, 11, 53997000, 6, 1577314800, 0),
(45, 36, 11, 8999500, 1, 1577314800, 0);

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
(8, 'Huế', 'hue2.jpg', 'THÀNH PHỐ FESTIVAL DU LỊCH', 'Từng là Kinh đô của triều đại nhà Nguyễn, chính vì thế mà Huế được xem là một trong những thành phố có bề dày lịch sử, văn hóa lâu đời nhất ở nước ta...', 1575470391),
(9, 'Nha Trang', 'nhatrang1.jpg', 'BIỂN XANH DÀI BẤT TẬN', 'Thành phố biển Nha Trang là thủ phủ của tỉnh Khánh Hòa, thuộc miền duyên hải Nam Trung bộ Việt Nam. Vịnh biển Nha Trang là một trong những vịnh biển đẹp nhất thế giới...', 1575470480);

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
(1, 1, 'Du lịch Hoàng Thành Thăng Long VIP', '2000000.0000', 200000, 30, 20, 'mbac41.jpg', 5, 'Du lịch cực kỳ đẹp', 1572272643, 156, 12),
(4, 3, 'Du lịch Miền Nam', '2000000.0000', 200000, 30, 30, 'mbac41.jpg', 3, 'Du lịch cực kỳ đẹp', 1572272643, 125, 5),
(9, 2, 'Miền Trung', '9000000.0000', 500000, 1, 1, 'dalat1.jpg', 4, 'Thật thú vị', 1573287594, 10, 1),
(11, 2, 'Đà nẵng', '9000000.0000', 500, 22, 17, 'dd31.jpg', 7, '132', 1573479608, 10, 5),
(12, 1, 'Du lịch Hoàng Thành Thăng Long', '15000000.0000', 500000, 30, 21, 'mbac41.jpg', 5, 'Du lịch cực kỳ đẹp', 1572272643, 126, 10),
(13, 1, 'Chùa một cột', '200000.0000', 1000, 30, 20, 'mbac41.jpg', 1, 'Đi là nhớ', 1730, 256, 120),
(15, 2, 'Cầu vàng', '7000000.0000', 4500000, 25, 22, 'dd31.jpg', 3, 'Đi để trở về', 301199, 784, 620),
(16, 3, 'Vũng Tàu', '500000.0000', 3000000, 12, 6, 'mbac41.jpg', 5, 'Đi là nhớ', 6534, 345, 120),
(17, 3, 'Cần Thơ', '3500000.0000', 1500000, 20, 15, 'mbac41.jpg', 5, 'Đi xa để nhớ', 7542, 412, 212);

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
(5, 'admin', 2147483647, 127, '1231312312313', '', 'admin@gmail.com', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
