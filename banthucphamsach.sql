-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2019 lúc 08:24 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banthucphamsach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills_ban`
--

CREATE TABLE `bills_ban` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kh` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `tong_tien` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `status` varchar(20) NOT NULL,
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills_ban`
--

INSERT INTO `bills_ban` (`id`, `id_kh`, `date_order`, `tong_tien`, `payment`, `status`, `note`, `created_at`, `updated_at`) VALUES
(20, 32, '2019-05-06', 20000, 'on', '1', NULL, '2019-05-05 18:19:04', '2019-05-05 18:19:04'),
(22, 34, '2019-05-09', 35000, 'on', '1', NULL, '2019-05-09 01:27:05', '2019-05-09 01:27:05'),
(15, 27, '2019-04-19', 17000, 'on', '1', NULL, '2019-04-22 08:17:54', '2019-04-18 22:48:32'),
(16, 28, '2019-04-19', 70000, 'on', '0', NULL, '2019-04-22 08:21:23', '2019-04-22 01:21:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills_nhap`
--

CREATE TABLE `bills_nhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ncc` int(11) DEFAULT NULL,
  `id_nhanvien` int(10) NOT NULL,
  `date_order` date DEFAULT NULL,
  `tong_tien` float DEFAULT NULL COMMENT 'tổng tiền',
  `thanh_toan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills_nhap`
--

INSERT INTO `bills_nhap` (`id`, `id_ncc`, `id_nhanvien`, `date_order`, `tong_tien`, `thanh_toan`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-04-15', 1500000, 'on', NULL, '2019-04-15 06:35:40', '2019-04-15 05:39:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail_ban`
--

CREATE TABLE `bill_detail_ban` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill_ban` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `sl` int(11) NOT NULL COMMENT 'số lượng',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail_ban`
--

INSERT INTO `bill_detail_ban` (`id`, `id_bill_ban`, `id_sp`, `sl`, `created_at`, `updated_at`) VALUES
(12, 16, 6, 1, '2019-04-18 22:50:19', '2019-04-18 22:50:19'),
(11, 15, 4, 1, '2019-04-18 22:48:32', '2019-04-18 22:48:32'),
(13, 16, 7, 2, '2019-04-18 22:50:19', '2019-04-18 22:50:19'),
(19, 22, 2, 1, '2019-05-09 01:27:05', '2019-05-09 01:27:05'),
(17, 20, 6, 1, '2019-05-05 18:19:04', '2019-05-05 18:19:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail_nhap`
--

CREATE TABLE `bill_detail_nhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill_nhap` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `sl` int(11) NOT NULL COMMENT 'số lượng',
  `don_vi` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail_nhap`
--

INSERT INTO `bill_detail_nhap` (`id`, `id_bill_nhap`, `id_sp`, `sl`, `don_vi`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, 'kg', '2019-04-15 06:35:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ten_kh`, `email`, `dia_chi`, `sdt`, `note`, `created_at`, `updated_at`) VALUES
(28, 'Đoàn Thùy Linh', 'doanlinh1098@gmail.com', 'Bình Nguyên-Đa Lộc-Ân Thi-Hưng Yên', '0983017991', NULL, '2019-04-18 22:50:19', '2019-04-18 22:50:19'),
(32, 'Đoàn Văn Việt', 'tuan@gmail.com', 'Đa Lộc-Ân Thi-Hưng Yên', '0983756482', NULL, '2019-05-05 18:19:04', '2019-05-05 18:19:04'),
(34, 'Đoàn Linh', 'doanlinh@gmail.com', 'Đa Lộc- Ân Thi-Hưng Yên', '01628470872', NULL, '2019-05-09 01:27:05', '2019-05-09 01:27:05'),
(27, 'Nguyễn Văn Hùng', 'hung@gmail.com', 'Nguyễn Xá- Nhân Hòa-Mỹ Hào-Hưng yên', '0983017763', NULL, '2019-04-22 08:11:30', '2019-04-18 22:48:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

CREATE TABLE `kho` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho`
--

INSERT INTO `kho` (`id`, `id_sp`, `sl`) VALUES
(1, 1, 12),
(2, 2, 23),
(3, 3, 23),
(4, 4, 23),
(5, 5, 34),
(6, 6, 34),
(7, 7, 56),
(8, 8, 25),
(9, 9, 45),
(10, 10, 27),
(11, 11, 43),
(12, 12, 44),
(13, 13, 29),
(14, 14, 55),
(15, 15, 58),
(16, 31, 77),
(17, 32, 55);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenloai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Delet` int(11) NOT NULL COMMENT '0:hien,1:an',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`id`, `tenloai`, `Delet`, `created_at`, `updated_at`) VALUES
(8, 'Trái cây', 2, '2019-04-05 14:27:26', '2019-04-21 20:57:50'),
(9, 'Nấm', 2, '2019-04-17 03:41:45', '2019-05-08 18:45:27'),
(10, 'Thit heo', 0, '2019-04-17 03:41:45', '2019-05-08 20:20:27'),
(11, 'Rau xanh', 2, NULL, NULL),
(13, 'Thịt bò', 1, '2019-04-22 01:56:35', '2019-05-09 01:27:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_new` int(10) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_new`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, '10 thức uống giải độc cho thận tốt nhất', 'Nếu thận của bạn không khoẻ mạnh, nó sẽ mất khả năng lọc ra chất thải và chất độc sẽ bắt đầu tích tụ trong cơ thể, dẫn đến sỏi thận.\r\n', 'img2.png', '2019-03-31 11:16:43', '0000-00-00 00:00:00'),
(2, 'Bí quyết về ăn uống giúp bạn mau chóng khỏi ốm', '', 'img1.png', '2019-03-31 11:16:43', '0000-00-00 00:00:00'),
(3, '9 công dụng chữa bệnh của đậu nành', '', 'img3.png', '2019-03-31 11:16:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id` int(11) NOT NULL,
  `ten_nhanvien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capbac` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`id`, `ten_nhanvien`, `gioitinh`, `ngaysinh`, `quequan`, `sdt`, `email`, `capbac`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thị Thùy', 'Nữ', '1989-10-04', 'Nguyễn Xá-Nhân Hòa-Mỹ Hào-Hưng Yên', '0986253821', 'thuynguyen@gmail.com', '1', '2019-04-04 14:45:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_cung_cap`
--

CREATE TABLE `nha_cung_cap` (
  `id` int(11) NOT NULL,
  `ten_ncc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi_ncc` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Delet` int(11) NOT NULL COMMENT '0:hien,1:an',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_cung_cap`
--

INSERT INTO `nha_cung_cap` (`id`, `ten_ncc`, `diachi_ncc`, `email`, `sdt`, `Delet`, `created_at`, `updated_at`) VALUES
(1, 'CÔNG TY CỔ PHẦN ĐẦU TƯ EXP VIỆT NAM', 'Nhà D21, dãy D, khu tập thể sư đoàn 361, P. Xuân Đỉnh, Q. Bắc Từ Liêm, Hà Nội', 'thucphamexp@gmail.com', '024 3750294', 0, '2019-04-04 14:48:55', '0000-00-00 00:00:00'),
(2, 'Công Ty TNHH Chế Biến Nông Sản Thực Phẩm Thiên Hà', 'Lầu 10, Toà Nhà Vinaconex, 47 Điện Biên Phủ, P. Đa Kao, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 'nancy@galaxy-vn.com', '(028) 39103066', 0, '2019-04-04 14:48:55', '0000-00-00 00:00:00'),
(3, 'Nông Sản Galaxy Agro - Công Ty TNHH Galaxy Agro', 'Số 14/16, Đường 990, Khu Phố 4, Phường Phú Hữu, Quận 9, Tp. Hồ Chí Minh (TPHCM)', 'nancy@galaxy-vn.com', '(028) 39103066', 0, '2019-04-04 14:48:55', '0000-00-00 00:00:00'),
(4, 'Công ty QTY', 'Phố 4, Quận 7 Tp.Hồ Chí Minh', 'QTY@gmail.com', '09648359821', 0, '2019-05-09 03:40:05', '2019-05-08 20:40:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_hoi`
--

CREATE TABLE `phan_hoi` (
  `id_phan_hoi` int(11) NOT NULL,
  `id_tk` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_hoi`
--

INSERT INTO `phan_hoi` (`id_phan_hoi`, `id_tk`, `id_sp`, `level`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, 'Nếu mua nhiều có được chiết khấu không vậy?', '2019-04-15 05:27:42', '0000-00-00 00:00:00'),
(2, 1, 7, 5, 'Mình đã mua hoa quả đúng chất lượng.', '2019-04-15 05:27:43', '0000-00-00 00:00:00'),
(3, 1, 2, 3, 'Ngon.Ngon', '2019-04-15 05:27:43', '0000-00-00 00:00:00'),
(4, 1, 1, 0, 'Quả này đẻ', '2019-04-15 05:27:43', '2019-04-10 02:20:29'),
(5, 1, 1, 0, 'uk', '2019-04-15 05:27:43', '2019-04-10 02:21:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `tittle` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_loai_sp` int(10) UNSIGNED DEFAULT NULL,
  `id_ncc` int(11) NOT NULL,
  `mota_sp` text COLLATE utf8_unicode_ci,
  `unit_price` float DEFAULT NULL,
  `gia_km` float DEFAULT NULL,
  `so_luong` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `don_vi_tinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Delet` int(11) NOT NULL COMMENT '0:hien, 1:an',
  `new` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `name`, `id_loai_sp`, `id_ncc`, `mota_sp`, `unit_price`, `gia_km`, `so_luong`, `image`, `don_vi_tinh`, `Delet`, `new`, `created_at`, `updated_at`) VALUES
(1, 'Bơ', 8, 2, '<p>Quả bơ chứa khoảng 25 loại vitamin v&agrave; kho&aacute;ng chất tự nhi&ecirc;n tốt cho sức khỏe.</p>', 30000, NULL, 24, 'LSTy_bo.jpg', 'kg', 1, 0, NULL, '2019-05-08 00:25:19'),
(2, 'Bưởi đào', 8, 2, '<p>Bưởi l&agrave; loại quả xuất hiện nhiều ở m&ugrave;a thu đ&ocirc;ng. Bưởi c&oacute; vị ngọt, b&ecirc;n trong c&oacute; chứa rất nhiều dưỡng chất, th&iacute;ch hợp ăn v&agrave;o m&ugrave;a thu đ&ocirc;ng hanh kh&ocirc;. Trong đ&ocirc;ng y cho rằng bưởi c&oacute; c&ocirc;ng hiệu lợi cho dạ d&agrave;y, l&agrave; thực phẩm ti&ecirc;u h&oacute;a, trị hen suyễn, giải rượu. Theo nghi&ecirc;n cứu ph&aacute;t hiện, bưởi c&ograve;n chứa nhiều th&agrave;nh phần chất như protein, chất b&eacute;o, carbohydrate, chất xơ, h&agrave;m lượng vitamin C phong ph&uacute;, vitamin B2, viatamin P, carotene, insulin&hellip; v&agrave; nguy&ecirc;n tố vi lượng như canxi, kali, phốt pho, sắt&hellip; n&ecirc;n rất c&oacute; lợi cho cơ thể. Do trong tr&aacute;i bưởi c&oacute; chứa chất kali rất phong ph&uacute;, cho n&ecirc;n l&agrave; loại tr&aacute;i c&acirc;y trị liệu l&iacute; tưởng cho những người mắc bệnh thận, v&agrave; bệnh về mạch m&aacute;u n&atilde;o, hơn nữa trong t&eacute;p bưởi tươi c&oacute; chứa th&agrave;nh phần chất như insulin, cũng l&agrave; một loại thực phẩm l&yacute; tưởng cho những người mắc bệnh tiểu đường. Vitamin P trong tr&aacute;i bưởi c&oacute; thể tăng cường chức năng của c&aacute;c lỗ ch&acirc;n l&ocirc;ng trong da, gi&uacute;p mau l&agrave;nh những viết thương ở ngo&agrave;i da, hơn nữa h&agrave;m lượng calo trong tr&aacute;i bưởi &iacute;t, n&oacute; c&oacute; thể gi&uacute;p giảm b&eacute;o, c&oacute; t&aacute;c dụng l&agrave;m đẹp da. Rất ph&ugrave; hợp với nguy&ecirc;n tắc &ldquo;đẹp tự nhi&ecirc;n&rdquo; của chị em, l&agrave; loại hoa quả th&iacute;ch hợp nhất cho sự chọn lựa của c&aacute;c bạn g&aacute;i trong m&ugrave;a thu đ&ocirc;ng. H&agrave;m lượng vitamin C trong tr&aacute;i bưởi l&agrave; chất h&oacute;a học của quả trong tự nhi&ecirc;n c&oacute; thể giảm l&agrave;m giảm h&agrave;m lượng cholesterol trong m&aacute;u của cơ thể, đồng thời c&ograve;n c&oacute; lợi cho việc hấp thụ canxi, sắt gi&uacute;p tăng cường thể chất. Vỏ bưởi c&oacute; t&aacute;c dụng th&uacute;c đẩy sự lưu th&ocirc;ng m&aacute;u, cải thiện qu&aacute; tr&igrave;nh trao đổi chất, ngo&agrave;i ra sự khuyếch t&aacute;n hương vị c&ograve;n c&oacute; thể loại bỏ mệt mỏi v&agrave; giảm bớt căng thẳng. Ngo&agrave;i ra, lượng vitamin C v&agrave; chất keo phong ph&uacute; trong t&eacute;p bưởi c&oacute; t&aacute;c dụng dưỡng ẩm cho da v&agrave; giữ nước cho cơ thể, ngăn chặn c&aacute;c nếp nhăn v&agrave; ch&acirc;n chim. Thường xuy&ecirc;n ăn bưởi, c&oacute; t&aacute;c dụng hỗ trợ việc trị liệu đối với c&aacute;c bệnh nh&acirc;n cao huyết &aacute;p, bệnh tiểu đường, bệnh xơ cứng động mạch, c&oacute; c&ocirc;ng dụng gi&uacute;p giảm b&eacute;o. Ngo&agrave;i ra, vỏ bưởi c&oacute; chứa chất glycosides mang hoạt t&iacute;nh sinh l&yacute;, c&oacute; thể tăng độ lưu th&ocirc;ng cho m&aacute;u, giảm thiểu sự h&igrave;nh th&agrave;nh của huyết khối, ch&iacute;nh v&igrave; vậy c&oacute; t&aacute;c dụng ph&ograve;ng bệnh tắc nghẽn mạch m&aacute;u n&atilde;o. Trong bưởi c&oacute; chứa &ldquo;quinine&rdquo;, rất hữu &iacute;ch trong việc điều trị bệnh sốt r&eacute;t v&agrave; chứng cảm lạnh. Đặc biệt, c&oacute; khả năng giảm căng thẳng v&agrave; mệt mỏi. Chỉ bằng c&aacute;ch đơn giản sau, bạn h&atilde;y uống một cốc nước &eacute;p bưởi lẫn với nước chanh vắt, sẽ thấy ngay hiệu quả. C&aacute;c c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu đ&atilde; chỉ ra rằng, ăn bưởi gi&uacute;p tiết nước bọt v&agrave; dịch vị, v&igrave; thế c&oacute; khả năng &ldquo;hỗ trợ&rdquo; hệ ti&ecirc;u ho&aacute;. Bạn c&oacute; thể ăn bưởi hay uống nước &eacute;p từ bưởi đều đem lại hiệu quả cao trong việc ngăn chặn v&agrave; hay &ldquo;ứng ph&oacute;&rdquo; với nhiều căn bệnh kh&aacute;c c&oacute; li&ecirc;n quan do việc dư thừa axit g&acirc;y n&ecirc;n.</p>', 35000, NULL, 52, 'buoi_ngot.jpg', 'quả', 1, 1, NULL, '2019-05-09 01:27:05'),
(3, 'Cam ngọt', 8, 1, '<p>Cam l&agrave; một trong những tr&aacute;i c&acirc;y được y&ecirc;u th&iacute;ch nhất tr&ecirc;n thế giới Nguồn gốc thực sự của cam thực sự l&agrave; một b&iacute; ẩn, nhưng việc trồng cam được cho l&agrave; đ&atilde; bắt đầu ở miền đ&ocirc;ng Ch&acirc;u &Aacute; h&agrave;ng ng&agrave;n năm trước đ&acirc;y.</p>\r\n\r\n<p>Ch&uacute;ng được trồng ở hầu hết c&aacute;c khu vực ấm &aacute;p v&agrave; được b&aacute;n cam tươi hoặc l&agrave;m nước &eacute;p tr&aacute;i c&acirc;y. Chất xơ dường như cũng đ&oacute;ng g&oacute;p một phần. D&ugrave;ng những chất xơ ph&acirc;n lập từ c&aacute;c loại tr&aacute;i c&acirc;y họ cam qu&yacute;t đ&atilde; được chứng minh l&agrave; l&agrave;m giảm nồng độ cholesterol trong m&aacute;u.</p>\r\n\r\n<p>Ăn cam thường xuy&ecirc;n c&oacute; thể l&agrave;m giảm nguy cơ bệnh tim.</p>', 25000, NULL, 15, 'kOB2_cam_ngot.jpg', 'kg', 0, 0, NULL, '2019-05-08 20:39:07'),
(4, 'Dứa', 8, 3, 'Dứa (Ananas comosus) là một trong những loại trái cây nhiệt đới phổ biến nhất trên thế giới.\r\nLà một nguồn tốt của nhiều chất dinh dưỡng, chẳng hạn như vitamin C, mangan, đồng và folate. Dứa cũng là nguồn duy nhất của bromelain (hợp chất thực vật).\r\nBromelain được gắn liền với nhiều lợi ích sức khỏe, chẳng hạn như tăng cường chức năng miễn dịch, phòng chống ung thư, cải thiện vết thương, chữa bệnh và sức khỏe đường ruột tốt hơn.\r\nDứa ngon hơn khi còn tươi, nhưng bạn cũng có thể thưởng thức dứa theo nhiều cách khác nhau như sấy khô, đóng hộp hoặc là một thành phần trong công thức nấu ăn khác nhau.\r\nDứa có một lớp vỏ thô ráp và có mắt, thịt của quả dứa chín biến đổi từ màu trắng sang màu vàng, có mùi thơm đặc trưng và một hương vị ngọt.', 17000, NULL, 23, 'dua.jpg', 'qua', 0, 0, NULL, NULL),
(5, 'Dưa hấu', 8, 3, '<p>Dưa hấu l&agrave; một tr&aacute;i c&acirc;y lớn, c&oacute; nguồn gốc từ miền nam Ch&acirc;u Phi, c&ugrave;ng họ h&agrave;ng với b&iacute; ng&ocirc; v&agrave; dưa chuột. Dưa hấu chủ yếu được sản xuất bằng nước uống v&agrave; c&aacute;c chất dinh dưỡng, nhưng lại chứa rất &iacute;t calo.</p>\r\n\r\n<p>Dưa hấu cũng l&agrave; một nguồn dinh dưỡng tốt của cả hai citrulline v&agrave; lycopene, hai hợp chất thực vật c&oacute; lợi cho sức khỏe. Ăn dưa hấu hoặc uống nước &eacute;p dưa hấu c&oacute; thể mang lại một sức khỏe tốt, bao gồm huyết &aacute;p thấp, cải thiện t&igrave;nh trạng kh&aacute;ng insulin v&agrave; giảm đau nhức cơ bắp. Bổ sung dưa hấu hoặc nước &eacute;p dưa hấu đ&atilde; được chứng minh l&agrave; l&agrave;m giảm huyết &aacute;p v&agrave; độ cứng động mạch ở những người bị huyết &aacute;p cao</p>', 24000, NULL, 16, 'dua_hau.jpg', 'kg', 0, 0, NULL, '2019-05-05 06:14:19'),
(6, 'Đu đủ siêu ngọt', 8, 3, '<p>Trong đu đủ lượng beta caroten nhiều hơn trong c&aacute;c rau quả kh&aacute;c. Beta caroten l&agrave; một tiền chất của vitamin A, v&agrave;o cơ thể sẽ được chuyển ho&aacute; th&agrave;nh vitamin A. Đ&acirc;y l&agrave; một loại vi chất dinh dưỡng c&oacute; vai tr&ograve; l&agrave; chống oxy ho&aacute; mạnh gi&uacute;p chống lại một số căn bệnh ung thư, chống kh&ocirc; mắt, kh&ocirc; da v&agrave; c&oacute; t&aacute;c dụng nhuận tr&agrave;ng. Trong 100g đu đủ ch&iacute;n chứa 2.100 mcg beta caroten. Tuy nhi&ecirc;n nhu cầu beta caroten cũng cần vừa phải, nếu ăn qu&aacute; nhiều, li&ecirc;n tục sẽ dẫn đến thừa v&agrave; g&acirc;y v&agrave;ng da. Hiện tượng v&agrave;ng da n&agrave;y sẽ mất nếu giảm lượng beta caroten ăn v&agrave;o. Ngo&agrave;i ra trong đu đủ c&ograve;n chứa nhiều vitamin. Đu đủ c&oacute; thể cung cấp cho cơ thể c&aacute;c loại vitamin thiết yếu như vitamin A v&agrave; vitamin C, trong 100g đu đủ c&oacute; 74&ndash;80 mg vitamin C. Ở Ấn Độ người ta đ&atilde; chiết xuất vitamin A từ quả đu đủ để sản xuất ra thuốc chống lại bệnh qu&aacute;ng g&agrave; ở trẻ em. Đu đủ c&ograve;n c&oacute; c&aacute;c vitamin B1, B2, c&aacute;c acid g&acirc;y men v&agrave; kho&aacute;ng chất như kali, canxi, magi&ecirc;, sắt v&agrave; kẽm. Ăn đu đủ thường xuy&ecirc;n c&oacute; t&aacute;c dụng bổ m&aacute;u, gi&uacute;p hồi phục gan ở người bị sốt r&eacute;t. Do c&oacute; nhiều sinh tố C v&agrave; caroten n&ecirc;n đu đủ c&oacute; t&aacute;c dụng chống oxy ho&aacute;, tăng sức đề kh&aacute;ng cho cơ thể. Trong Đ&ocirc;ng y, đu đủ c&oacute; t&ecirc;n mộc qua, t&iacute;nh h&agrave;n, vị ngọt, c&oacute; t&aacute;c dụng thanh nhiệt, bổ tỳ. Đu đủ ch&iacute;n c&oacute; quanh năm v&agrave; m&ugrave;a n&agrave;o d&ugrave;ng cũng tốt cho sức khoẻ. V&agrave;o m&ugrave;a h&egrave;, ăn đu đủ c&oacute; t&aacute;c dụng thanh t&acirc;m, nhuận phế, giải nhiệt, giải độc. V&agrave;o thu đ&ocirc;ng, đu đủ gi&uacute;p nhuận t&aacute;o, &ocirc;n bổ tỳ vị, dưỡng can, nhuận phế, chỉ kh&aacute;i, ho&aacute; đ&agrave;m.</p>', 20000, NULL, 42, 'img3.jpg', 'kg', 0, 1, NULL, '2019-05-05 18:19:04'),
(7, 'Lê', 8, 2, 'Quả lê là một loại trái cây ăn rất mát, ngon, vị thơm ngọt nhẹ và có xơ ở lõi trái. Nó là một loại quả giàu các chống ô xy hóa quan trọng, các chất Flavonoid và chất xơ thực vật, đồng thời ôm trọn nhiều chất dinh dưỡng bên trong. Loại quả này không có chất béo, cholesterol, mỗi quả lê cung cấp 100 calori năng lượng. Ăn lê còn có tác dụng làm giảm cân và giảm nguy cơ phát triển bệnh ung thư, tăng huyết áp, bệnh tiểu đường và bệnh tim, ngoài ra nó còn là một loại thực phẩm cực tốt cho sức khỏe.', 30000, NULL, 27, 'le.jpg', 'kg', 0, 1, NULL, NULL),
(8, 'Lựu', 8, 3, 'Lựu chứa nhiều polyphenol, chất hóa học thực vật nổi tiếng trong việc làm giảm quá trình sưng phù liên quan đến bệnh tim”.\r\nTheo trang Nutrition Data, sưng phù mức độ thấp mãn tính trong cơ thể có liên quan đến nguy cơ bệnh tật, bao gồm bệnh tim và đột quỵ. Tăng lợi ích cho động mạch của bạn bằng cách kết hợp lựu với các thành phần có lợi cho tim khác như quả hạnh và quả lê, cả hai đều chứa chất béo “tốt” và chống sưng phù.', 35000, NULL, 33, 'lựu.jpg', 'kg', 0, 1, NULL, NULL),
(9, 'Mãng cầu xiêm Đà Lạt', 8, 2, '<p>100 gram m&atilde;ng cầu đ&atilde; c&oacute; đến 20mg vitamin C, gấp đ&ocirc;i so với chuối, l&ecirc;, t&aacute;o, nho v&agrave; dứa. Do đ&oacute;, đ&acirc;y l&agrave; loại tr&aacute;i c&acirc;y rất hữu &iacute;ch trong việc tăng cường hệ thống miễn dịch của cơ thể. Ăn m&atilde;ng cầu sẽ l&agrave;m giảm khả năng nhiễm tr&ugrave;ng đồng thời cũng ti&ecirc;u diệt c&aacute;c vi r&uacute;t, vi khuẩn g&acirc;y hại gi&uacute;p cơ thể ph&ograve;ng ngừa c&aacute;c bệnh tốt hơn.</p>', 35000, NULL, 35, 'Mang-cau-Xiem-Da-Lat.jpg', 'kg', 0, 0, NULL, '2019-05-05 05:53:41'),
(10, 'Mơ', 8, 2, '', 25000, NULL, 32, 'mơ.jpg', 'kg', 0, 0, NULL, NULL),
(11, 'Ổi tím', 8, 2, 'Trong thời điểm giao mùa, ổi là loại quả “lành” vì đảm bảo xuất xứ cũng như giá trị dinh dưỡng dồi dào cung cấp cho cơ thể và đặc biệt với làn da.\r\nDa là cơ quan chiếm diện tích nhiều nhất trên cơ thể con người và sức khỏe của làn da phản ánh một phần sức khỏe tổng thể của bạn. Phát ban, mụn trứng cá, eczema, bệnh vảy nến, da nhờn, khô, nếp nhăn theo độ tuổi… đều phán ảnh cơ thể bạn đang bị căng thẳng, lưu thông máu kém và cần điều chỉnh chế độ ăn.', 18000, NULL, 24, 'oi_tim.jpg', 'kg', 0, 0, NULL, NULL),
(12, 'Xoài ngọt', 8, 2, '<p>Sở dĩ xo&agrave;i được mệnh danh l&agrave; vua tr&aacute;i c&acirc;y v&igrave; n&oacute; tổng hợp c&aacute;c hương vị từ đu đủ, dứa, cam. Loại quả n&agrave;y khi ch&iacute;n rất c&oacute; lợi cho sức khỏe. Một miếng xo&agrave;i trung b&igrave;nh chứa 1g protein, 0,5g chất b&eacute;o, 25g carbohydrate, 23g đường v&agrave; 3g chất xơ. Ăn một miếng xo&agrave;i nghĩa l&agrave; ch&uacute;ng ta đ&atilde; nạp 100 calo v&agrave;o cơ thể. Khi nhắc đến th&agrave;nh phần dinh dưỡng quả xo&agrave;i, kh&ocirc;ng thể kể đến h&agrave;m lượng vitamin cao , đặc biệt l&agrave; vitamin C. Theo ph&acirc;n t&iacute;ch, một cốc xo&agrave;i cung cấp 25% lượng vitamin C cơ thể cần mỗi ng&agrave;y. B&ecirc;n cạnh đ&oacute; cũng c&oacute; 2/3 vitamin A v&agrave; một lượng lớn vitamin B6, vitamin E, phốt pho, kali v&agrave; magi&ecirc;..</p>', 25000, NULL, 23, 'xoai tuoi.jpg', 'kg', 0, 1, NULL, '2019-04-11 05:04:55'),
(15, 'Cải thảo', 11, 2, '<p>Rau cải bẹ trắng hay c&ograve;n được gọi l&agrave; rau cải trắng, loại rau n&agrave;y c&oacute; chứa nhiều chất bổ v&agrave; vitamin. Hạt cải trắng gọi l&agrave; bạch giới tử, c&oacute; vị cay, t&iacute;nh ấm, nhưng kh&ocirc;ng độc, ti&ecirc;u đờm, thuận kh&iacute;, trị lao truyền nhiễm, đau phong. Cải bẹ trắng l&agrave; 1 trong c&aacute;c loai rau cải với c&aacute;c m&oacute;n ăn quen thuộc, h&agrave;ng ng&agrave;y. L&aacute; cải bẹ trắng c&oacute; khả năng chữa đau dạ d&agrave;y, bệnh cam răng. Hạt cải bẹ trắng c&oacute; vị cay, t&iacute;nh ấm, kh&ocirc;ng độc c&oacute; thể trị đau răng, trị ho, ti&ecirc;u thũng, ti&ecirc;u đờm, th&ocirc;ng kinh mạch. Nếu bạn hoặc người nh&agrave; bị đau bụng dưới, đau đầu, cam răng&hellip;, c&oacute; thể khắc phục t&igrave;nh trạng đ&oacute; bằng c&aacute;ch sử dụng l&aacute; hoặc hạt cải bẹ trắng.</p>', 15000, NULL, 25, 'cai_thao_da_lat.jpg', 'kg', 0, 0, '2019-04-06 03:00:48', '2019-04-06 13:00:36'),
(31, 'Xà lách lolo xanh1', 11, 1, NULL, 24000, NULL, 15, 'rau_cang_cua_40.jpg', 'kg', 0, 1, '2019-04-15 02:46:52', '2019-04-15 02:46:52'),
(34, 'nấm kim', 9, 1, NULL, 50000, NULL, 23, 'nam_kim_cham.jpg', 'kg', 1, 1, '2019-04-22 00:41:04', '2019-05-08 19:32:47'),
(35, 'Nấm ngô', 9, 3, NULL, 300000, NULL, 20, 'xfd7_nam_ngo.jpg', 'kg', 0, 1, '2019-05-05 06:21:03', '2019-05-05 06:29:01'),
(36, 'Nấm sò navisa', 9, 1, NULL, 50000, NULL, 40, 'AKU5_nam-so-navisa.jpg', 'kg', 0, 1, '2019-05-05 06:23:08', '2019-05-05 06:27:11'),
(37, 'Nấm rơm', 9, 3, NULL, 30000, NULL, 27, 'nam_rom.jpg', 'kg', 0, 1, '2019-05-05 06:26:17', '2019-05-05 06:26:17'),
(38, 'Súp lơ trắng', 11, 3, NULL, 17000, NULL, 26, 'suplotrang1.jpg', 'kg', 0, 1, '2019-05-05 06:28:35', '2019-05-05 06:28:35'),
(39, 'Nấm tươi chân dài', 9, 1, NULL, 50000, NULL, 20, 'nam-tuoi-chan-dai-navisa.jpg', 'kg', 0, 1, '2019-05-08 18:45:28', '2019-05-09 00:34:24'),
(40, 'Lơn ba chỉ', 10, 2, NULL, 100000, NULL, 20, 'lon.png', 'kg', 1, 1, '2019-05-09 00:33:58', '2019-05-09 00:35:33'),
(41, 'Thịt lợn ba chỉ', 10, 2, NULL, 100000, NULL, 20, 'ba_chi.jpg', 'kg', 0, 1, '2019-05-09 01:28:03', '2019-05-09 01:28:03'),
(42, 'Thịt mong', 10, 3, NULL, 110000, NULL, 30, 'bo_lac_mong.jpg', 'kg', 0, 1, '2019-05-09 01:28:03', '2019-05-09 01:28:03'),
(43, 'Thịt bò xay', 10, 2, NULL, 150000, NULL, 20, 'bo_xay.jpg', 'kg', 0, 1, '2019-05-09 01:28:03', '2019-05-09 01:28:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(10) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id_slide`, `link`, `image`) VALUES
(1, '', 'image-14.jpg'),
(2, '', 'image-33.jpg'),
(3, '', 'image-13.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `users_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `Delet` int(11) NOT NULL COMMENT '0:hien,1:an',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `users_name`, `email`, `password`, `phone`, `address`, `image`, `Delet`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đoàn Linh', 'DoanLinh', 'doanlinh@gmail.com', '$2y$10$qwkACRebVrq1PxDhpFQTUeof.5.Qr1lVayiJrXx8NgfLYdoWQH4m6', '01628470872', 'Đa Lộc- Ân Thi-Hưng Yên', '', 0, NULL, '2019-04-14 22:16:56', '2019-04-14 22:16:56'),
(5, 'DoanThiLinh', 'LinhD', 'vinh@gmail.com', '$2y$10$9nFyWml4BRW1seMuzicLqOz9/EP5BeHSi9j.TxR.vdR.GEVB6VaIi', '983715373', 'Ân Thi', '', 1, NULL, '2019-05-09 06:50:25', '2019-05-08 23:50:25'),
(7, 'Đoàn Thị Thùy Linh', 'LinhDoan', 'doanlinh101998@gmail.com', '$2y$10$TE8Q0ak2lz3W7.pWUQMW7.Li5O7KkGFwlI/ci8McxtPtKpLkWybbK', '0983017992', 'Đa Lộc -Ân Thi-Hưng Yên', '', 0, NULL, '2019-04-22 01:52:34', '2019-04-22 01:52:34'),
(8, 'Đoàn Thị Linh', 'Linh', 'doanlinh1098@gmail.com', '$2y$10$E2tUqHVotdoL8T9d2DhBlepbHod5zuTTVYVafvLl1caMG2t67NYrS', '0983017991', 'Bình Nguyên-Đa Lộc-Ân Thi-Hưng Yên', '', 0, 'bWKdka3a0UR3Qu8Iu2wGYZrqafQnlzhk9O82dcsUlILBO0vIXS0zvog62m51', '2019-05-08 08:36:19', '2019-05-04 22:23:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills_ban`
--
ALTER TABLE `bills_ban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills_nhap`
--
ALTER TABLE `bills_nhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail_ban`
--
ALTER TABLE `bill_detail_ban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail_nhap`
--
ALTER TABLE `bill_detail_nhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenloai` (`tenloai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phan_hoi`
--
ALTER TABLE `phan_hoi`
  ADD PRIMARY KEY (`id_phan_hoi`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `full_name` (`full_name`),
  ADD UNIQUE KEY `users_name` (`users_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills_ban`
--
ALTER TABLE `bills_ban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `bills_nhap`
--
ALTER TABLE `bills_nhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `bill_detail_ban`
--
ALTER TABLE `bill_detail_ban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `bill_detail_nhap`
--
ALTER TABLE `bill_detail_nhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `kho`
--
ALTER TABLE `kho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phan_hoi`
--
ALTER TABLE `phan_hoi`
  MODIFY `id_phan_hoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
