-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2020 at 07:14 AM
-- Server version: 10.1.46-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piofme_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_log`
--

CREATE TABLE `action_log` (
  `id` int(11) NOT NULL,
  `action` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `action_log`
--

INSERT INTO `action_log` (`id`, `action`, `status`) VALUES
(1, 'Login', 1),
(2, 'Add User', 1),
(3, 'Add Service', 1),
(4, 'Add Product', 1),
(5, 'Add Quote', 1),
(6, 'Add News', 1),
(7, 'Delete User', 1),
(8, 'Update User', 1),
(9, 'Delete Service', 1),
(10, 'Update Service', 1),
(11, 'Delete Product', 1),
(12, 'Update Product', 1),
(13, 'Delete Quote', 1),
(14, 'Update Quote', 1),
(15, 'Delete Information Quote', 1),
(16, 'Update Information Quote', 1),
(17, 'Update Menu', 1),
(18, 'Change PassWord', 1),
(19, 'Update News', 1),
(20, 'Delete News', 1),
(21, 'Update Contact', 1),
(22, 'Delete Contact', 1);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `sale` float NOT NULL COMMENT 'Số khuyến mãi',
  `refund` float NOT NULL COMMENT 'Hoàn tiền',
  `url` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `price` float NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `slug`, `images`, `order`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(64, 'gioi-thieu', NULL, 1, 1, NULL, '2020-06-16 11:07:40', '2020-06-27 18:19:09'),
(65, 'tin-tuc', NULL, 2, 1, NULL, '2020-06-16 11:07:47', '2020-06-27 18:18:57'),
(66, 'du-an', NULL, 3, 1, NULL, '2020-06-16 11:07:52', '2020-06-27 18:18:41'),
(67, 'linh-vuc-kinh-doanh', NULL, 4, 1, NULL, '2020-06-16 11:07:58', '2020-06-27 18:18:22'),
(68, 'tuyen-dung', NULL, 5, 1, NULL, '2020-06-16 11:08:07', '2020-06-27 18:17:32'),
(69, 'lien-he', NULL, 6, 1, NULL, '2020-06-16 11:08:11', '2020-06-27 18:16:53'),
(73, 'ban-lanh-dao-vset-group-21', '/photos/6/81939770_175912137148072_8133884398891171840_o.jpg', 9, 1, 64, '2020-06-16 16:01:22', '2020-06-27 18:15:57'),
(77, 've-vset-group', '/photos/6/09_Lissoni_Fantini-Headquarters_ph-Simone-Bossi_full.jpg', 8, 1, 64, '2020-06-16 17:55:08', '2020-06-27 18:16:29'),
(78, 'tin-tuc-tap-doan', '/photos/6/VsetGroup - hop tac chien luoc Han Quoc 2.jpg', 9, 1, 65, '2020-06-17 11:08:15', '2020-06-27 18:19:54'),
(79, 'tin-tuc-co-dong', '/photos/6/nam/ZZ.jpg', 10, 1, 65, '2020-06-17 11:13:28', '2020-06-27 18:13:53'),
(80, 'thanh-tuu', '/photos/6/nam/XX.jpg', 11, 1, 65, '2020-06-17 11:14:34', '2020-06-27 18:12:55'),
(82, 'tuyen-dung-vsetgoup', '/photos/6/CCC.png', 13, 1, 65, '2020-06-17 11:16:31', '2020-06-27 18:19:43'),
(84, 'tuyen-dung-vset-nature', '/photos/6/Q?E.png', 15, 1, 65, '2020-06-17 11:17:54', '2020-06-27 18:19:38'),
(85, 'tuyen-dung-htx-gia-khang', '/photos/6/VV.png', 16, 1, 65, '2020-06-17 11:18:35', '2020-06-27 18:09:36'),
(86, 'tuyen-dung-xay-dung-truong-gia', '/photos/6/tg.png', 17, 1, 65, '2020-06-17 11:19:17', '2020-06-27 18:07:28'),
(87, 'tuyen-dung-giai-tri-khang-anh', '/photos/6/KA.png', 18, 1, 65, '2020-06-17 11:19:52', '2020-06-27 18:04:09'),
(88, 'quyen-loi-nhan-su-tap-doan-vsetgroup', '/photos/6/NS.jpg', 19, 1, 65, '2020-06-17 11:20:43', '2020-06-27 18:21:42'),
(89, 'lanh-dao-tap-doan', '/photos/6/LD.jpg', 20, 1, 65, '2020-06-17 11:21:42', '2020-06-27 17:58:57'),
(90, 'co-phieu-trai-phieu', '/photos/6/CP.jpg', 21, 1, 65, '2020-06-17 11:22:12', '2020-06-27 17:58:10'),
(91, 'danh-cho-nha-dau-tu', '/photos/6/DT.jpg', 22, 1, 65, '2020-06-17 11:22:47', '2020-06-27 17:53:50'),
(92, 'trach-nhiem-xa-hoi', '/photos/6/XH.jpg', 23, 1, 65, '2020-06-17 11:23:18', '2020-06-27 17:51:16'),
(93, 'so-tay-tai-chinh', '/photos/6/TC.jpg', 24, 1, 65, '2020-06-17 11:24:02', '2020-06-27 17:50:47'),
(94, 'lich-tra-co-tuc', '/photos/6/CT.jpg', 25, 1, 65, '2020-06-17 11:24:39', '2020-06-27 17:48:15'),
(104, 'van-hoa-tap-doan', NULL, 32, 1, 64, '2020-06-20 09:44:04', '2020-06-27 18:21:35'),
(105, 'tam-nhin-su-menh-gia-tri-cot-loi', NULL, 33, 1, 64, '2020-06-20 09:49:30', '2020-06-27 17:33:37'),
(106, 'cac-cong-ty-thanh-vien', NULL, 34, 1, 64, '2020-06-20 10:28:49', '2020-06-27 17:04:17'),
(107, 'vsetcom-electronic', '/photos/6/CCC.png', 27, -1, 67, '2020-06-23 10:39:22', '2020-06-23 11:21:01'),
(108, 'vsetcom-electronic', '/photos/6/CCC.png', 28, 1, 67, '2020-06-23 11:13:22', '2020-06-27 17:03:36'),
(109, 'truong-gia-construction', '/photos/6/CCC.png', 29, 1, 67, '2020-06-23 11:13:38', '2020-06-27 17:03:23'),
(110, 'vset-nature', '/photos/6/CCC.png', 30, 1, 67, '2020-06-23 11:14:35', '2020-06-27 17:03:02'),
(111, 'thong-phat', '/photos/6/CCC.png', 31, 1, 67, '2020-06-23 11:15:19', '2020-06-27 17:02:44'),
(112, 'gia-khang-logistics', '/photos/6/CCC.png', 32, 1, 67, '2020-06-23 11:15:40', '2020-06-27 16:58:21'),
(113, 'vs-green', '/photos/6/CCC.png', 33, 1, 67, '2020-06-23 11:15:51', '2020-06-27 16:58:05'),
(114, 'khang-anh-entertainment', '/photos/6/CCC.png', 34, 1, 67, '2020-06-23 11:40:25', '2020-06-27 16:57:40'),
(115, 'long', NULL, 35, -1, NULL, '2020-06-29 09:39:01', '2020-06-29 15:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_model_id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `name`, `category_model_id`, `language_id`, `locale`) VALUES
(74, 'Giới thiệu', 64, 1, 'vn'),
(75, 'Tin tức', 65, 1, 'vn'),
(76, 'Dự án', 66, 1, 'vn'),
(77, 'Lĩnh vực kinh doanh', 67, 1, 'vn'),
(78, 'Tuyển dụng', 68, 1, 'vn'),
(79, 'Liên hệ', 69, 1, 'vn'),
(83, 'Ban lãnh đạo VSET Group 21', 73, 1, 'vn'),
(87, 'Về VSET Group', 77, 1, 'vn'),
(88, 'Tin Tức Tập Đoàn', 78, 1, 'vn'),
(89, 'TIN TỨC CỔ ĐÔNG', 79, 1, 'vn'),
(90, 'THÀNH TỰU', 80, 1, 'vn'),
(92, 'TUYỂN DỤNG VSETGOUP', 82, 1, 'vn'),
(94, 'TUYỂN DỤNG VSET NATURE', 84, 1, 'vn'),
(95, 'TUYỂN DỤNG HTX GIA KHANG', 85, 1, 'vn'),
(96, 'TUYỂN DỤNG XÂY DỰNG TRƯƠNG GIA', 86, 1, 'vn'),
(97, 'TUYỂN DỤNG GIẢI TRÍ KHANG ANH', 87, 1, 'vn'),
(98, 'QUYỀN LỢI NHÂN SỰ TẬP ĐOÀN VSETGROUP', 88, 1, 'vn'),
(99, 'LÃNH ĐẠO TẬP ĐOÀN', 89, 1, 'vn'),
(100, 'CỔ PHIẾU - TRÁI PHIẾU', 90, 1, 'vn'),
(101, 'DÀNH CHO NHÀ ĐẦU TƯ', 91, 1, 'vn'),
(102, 'TRÁCH NHIỆM XÃ HỘI', 92, 1, 'vn'),
(103, 'SỔ TAY TÀI CHÍNH', 93, 1, 'vn'),
(104, 'LỊCH TRẢ CỔ TỨC', 94, 1, 'vn'),
(114, 'Văn hoá tập đoàn', 104, 1, 'vn'),
(115, 'Tầm Nhìn - Sứ Mệnh - Giá Trị Cốt Lõi', 105, 1, 'vn'),
(116, 'CÁC CÔNG TY THÀNH VIÊN', 106, 1, 'vn'),
(117, 'VSETCOM ELECTRONIC', 107, 1, 'vn'),
(118, 'VSETCOM ELECTRONIC', 108, 1, 'vn'),
(119, 'TRƯƠNG GIA CONSTRUCTION', 109, 1, 'vn'),
(120, 'VSET NATURE', 110, 1, 'vn'),
(121, 'THỐNG PHÁT', 111, 1, 'vn'),
(122, 'GIA KHANG LOGISTICS', 112, 1, 'vn'),
(123, 'VS GREEN', 113, 1, 'vn'),
(124, 'KHANG ANH ENTERTAINMENT', 114, 1, 'vn'),
(125, 'KHANG ANH ENTERTAINMENT', 114, 2, 'en'),
(126, 'VS GREEN', 113, 2, 'en'),
(127, 'GIA KHANG LOGISTICS', 112, 2, 'en'),
(128, 'THONG PHAT COMPANY', 111, 2, 'en'),
(129, 'VSET NATURE', 110, 2, 'en'),
(130, 'TRUONG GIA CONSTRUCTION', 109, 2, 'en'),
(131, 'VSETCOM ELECTRONIC', 108, 2, 'en'),
(132, 'MEMBER COMPANIES', 106, 2, 'en'),
(133, 'VISION - MISSION - CORE VALUES', 105, 2, 'en'),
(134, 'VSET GROUP CULTURE', 104, 2, 'en'),
(135, 'PAYING DIVIDED CALENDAR', 94, 2, 'en'),
(136, 'FINANCIAL HANDBOOK', 93, 2, 'en'),
(137, 'SOCIAL RESPONSIBILITY', 92, 2, 'en'),
(138, 'INVESTOR\'S NEWS', 91, 2, 'en'),
(139, 'PROJECT', 66, 2, 'en'),
(140, 'STOCKS - BONDS', 90, 2, 'en'),
(141, 'BOARD OF MANAGEMENT VSET GROUP', 89, 2, 'en'),
(142, 'VSET GROUP\'S HUMAN RIGHTS', 88, 2, 'en'),
(143, 'ENTERTAINMENT KHANG ANH RECRUITMENT', 87, 2, 'en'),
(144, 'CONSTRUCTION TRUONG GIA RECRUITMENT', 86, 2, 'en'),
(145, 'GIA KHANG COOPERATIVE RECRUITMENT', 85, 2, 'en'),
(146, 'VSET NATURE RECRUITMENT', 84, 2, 'en'),
(147, 'VSET GROUP RECRUITMENT', 82, 2, 'en'),
(148, 'ACHIEVEMENT', 80, 2, 'en'),
(149, 'SHAREHOLDER NEWS', 79, 2, 'en'),
(150, 'VSET GROUP\'S NEWS', 78, 2, 'en'),
(151, 'ABOUT VSET GROUP', 77, 2, 'en'),
(152, 'BOARD OF MANAGEMENT VSET GROUP', 73, 2, 'en'),
(153, 'CONTACT', 69, 2, 'en'),
(154, 'RECRUITMENT', 68, 2, 'en'),
(155, 'BUSSINESS AREAS', 67, 2, 'en'),
(156, 'NEWS', 65, 2, 'en'),
(157, 'INTRODUCE', 64, 2, 'en'),
(158, 'long', 115, 1, 'vn');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Contact_Phone` int(12) NOT NULL,
  `Contact_Location` varchar(255) NOT NULL,
  `Contact_Sub` int(12) NOT NULL,
  `question` varchar(255) NOT NULL,
  `status` int(12) NOT NULL DEFAULT '1',
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `Contact_Phone`, `Contact_Location`, `Contact_Sub`, `question`, `status`, `Created_at`, `Updated_at`) VALUES
(1, 'nguyen long123', 'ndtai1705@gmail.com123', 121241, '1415', 1, 'zxvfafkjqkj.  q t123', 0, '2020-06-18 06:33:43', '2020-06-18 06:33:43'),
(3, 'tèn tén ten', 'khongcomail@gmail.com', 2147483647, 'ádkja', 3, 'ádasdasd', 0, '2020-06-18 09:48:28', '2020-06-18 09:48:28'),
(4, 'zxczxcz', 'benzlon.1996@gmail.com', 2147483647, 'ádkja', 3, 'dqwuydtqwuydsadgasjhdghjdqwuydtqwuydsadgasjhdghjdqwuydtqwuydsadgasjhdghjdqwuydtqwuydsadgasjhdghjdqwuydtqwuydsadgasjhdghjdqwuydtqwuydsadgasjhdghjdqwuydtqwuydsadgasjhdghjdqwuydtqwuydsadgasjhdghjdqwuydtqwuydsadgasjhdghjdqwuydtqwuydsadgasjhdghjdqwuydtqwuydsad', 0, '2020-06-18 09:49:15', '2020-06-18 09:49:15'),
(5, 'sdasdsadsa', 'benzlon.1996@gmail.com', 2147483647, 'ádkja', 3, 'dsadasdas', 0, '2020-06-25 09:38:31', '2020-06-25 09:38:31'),
(6, 'am famf', 'ndtai1705@gmail.com', 41412141, 'fabgag', 2, 'fnalgnalgn', 0, '2020-06-26 03:47:02', '2020-06-26 03:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) UNSIGNED NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `footer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `tel`, `fax`, `email`, `website`, `footer_id`) VALUES
(1, '0283 8150 724', '0286 6800 373', 'tuvan@vsetgroup.com', 'www.vsetgroup.com', NULL),
(2, '0292 3676 888', NULL, NULL, NULL, 1),
(3, '0274 3763 777', NULL, NULL, NULL, 1),
(4, '0251 3783 777', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `footer_translations`
--

CREATE TABLE `footer_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `footer_model_id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_translations`
--

INSERT INTO `footer_translations` (`id`, `name`, `address`, `time`, `footer_model_id`, `language_id`, `locale`) VALUES
(1, 'VSET GROUP CORPORATION', 'Headquarters: 42 Hoang Bat Dat, Ward 15, Tan Binh Distric, Ho Chi Minh city', 'Monday - Friday: 8h-17h Saturday: 8h-12h', 1, 2, 'en'),
(2, 'CÔNG TY CỔ PHẦN TẬP ĐOÀN VSET GROUP', '42 Hoàng Bật Đạt, Phường 15, Quận Tân Bình, TP. Hồ Chí Minh', 'Thứ 2 - Thứ 6: 8h-17h Thứ 7: 8h-12h', 1, 1, 'vn'),
(3, 'CAN THO BRANCH', 'E35, 56 Street , Residential Area 586, Phu Thu, Cai Rang - Can Tho City.', NULL, 2, 2, 'en'),
(4, 'CHI NHÁNH CẦN THƠ', 'E35, Đường 56, Khu Dân Cư 586, Phú Thứ, Cái Răng – Tp Cần Thơ.', NULL, 2, 1, 'vn'),
(5, 'BINH DUONG BRANCH', 'Ha Nam Building 3rd Floor, 26 National Route 13, Western Quarter, Vinh Phu Ward, Thuan An Town, Binh Duong', NULL, 3, 2, 'en'),
(6, 'CHI NHÁNH BÌNH DƯƠNG', 'Lầu 3 Hà Nam Building, 26 Quốc Lộ 13, Khu phố Tây, Phường Vĩnh Phú, Thị xã Thuận An, Bình Dương', NULL, 3, 1, 'vn'),
(7, 'DONG NAI BRANCH', '10B, National Route 1A, Phu Binh Ward, Long Khanh city, Dong Nai province.', NULL, 4, 2, 'en'),
(8, 'CHI NHÁNH ĐÔNG NAI', '20B QL1A, KP2, P. Phú Bình, TP. Long Khánh, Tỉnh Đồng Nai.', NULL, 4, 1, 'vn');

-- --------------------------------------------------------

--
-- Table structure for table `information_quote`
--

CREATE TABLE `information_quote` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone_number` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information_quote`
--

INSERT INTO `information_quote` (`id`, `name`, `email`, `phone_number`, `quote_id`, `status`) VALUES
(1, 'Linh1233', 'lenhatlinh250895@gmail.com123', 33507484, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `langdingpages`
--

CREATE TABLE `langdingpages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `langdingpages`
--

INSERT INTO `langdingpages` (`id`, `name`, `category_id`, `status`, `order`, `created_at`, `updated_at`) VALUES
(13, 'Nguyễn Huỳnh Nhật Nam', 68, 1, 1, '2020-06-25 01:27:39', '2020-06-25 01:27:39'),
(14, 'Nguyễn Huỳnh Nhật Nam', 68, 1, 2, '2020-06-25 01:27:41', '2020-06-25 01:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `locale`, `name`, `slug`) VALUES
(1, 'vn', 'Việt Nam', 'viet-nam'),
(2, 'en', 'English', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user_id`, `comment`, `created_at`, `updated_at`, `action`) VALUES
(1, 6, 'Login with IP: 27.74.243.123', '2020-09-01 03:02:30', '2020-08-31 05:17:47', '1'),
(2, 6, 'Add User ID: 29 By ID: 6', '2020-09-01 03:03:00', '2020-08-31 06:34:09', '2'),
(3, 6, 'Login with IP: 27.74.243.123', '2020-09-01 03:02:33', '2020-09-01 00:21:11', '1'),
(4, 6, 'Add Service by ID: 6', '2020-09-01 03:03:15', '2020-09-01 00:21:48', '3'),
(5, 6, 'Add Product by ID: 6', '2020-09-01 03:03:19', '2020-09-01 00:25:54', '4'),
(6, 6, 'Add Quote by ID: 6', '2020-09-01 03:03:22', '2020-09-01 00:43:35', '5'),
(7, 6, 'Login with IP: 27.74.243.123', '2020-09-03 02:57:57', '2020-09-03 00:50:32', '1'),
(8, 6, 'Add News by ID: 6', '2020-09-03 02:58:16', '2020-09-03 00:56:08', '6'),
(9, 6, 'Add News by ID: 6', '2020-09-03 00:59:34', '2020-09-03 00:59:34', '6'),
(10, 6, 'Update Menu by ID: 6', '2020-09-03 01:22:46', '2020-09-03 01:22:46', '17'),
(11, 6, 'Delete ID: 29 By ID: 6', '2020-09-03 01:33:55', '2020-09-03 01:33:55', '7'),
(12, 6, 'Add User ID: 30 By ID: 6', '2020-09-03 01:35:04', '2020-09-03 01:35:04', '2'),
(13, 6, 'Update ID: 30 by ID: 6', '2020-09-03 01:38:34', '2020-09-03 01:38:34', '8'),
(14, 6, 'Change Password ID: 6', '2020-09-03 01:45:57', '2020-09-03 01:45:57', '18'),
(15, 6, 'Delete user: lenhatlinh250895@gmail.com By ID: 6', '2020-09-03 01:56:09', '2020-09-03 01:56:09', '7'),
(16, 6, 'Add Service ID:4 by ID: 6', '2020-09-03 01:59:54', '2020-09-03 01:59:54', '3'),
(17, 6, 'Update service ID: 4 by user ID: 6', '2020-09-03 02:18:14', '2020-09-03 02:18:14', '10'),
(18, 6, 'Delete service ID: 4 by user ID: 6', '2020-09-03 02:18:36', '2020-09-03 02:18:36', '9'),
(19, 6, 'Update contact ID: 1 By user ID: 6', '2020-09-03 02:33:40', '2020-09-03 02:33:40', '21'),
(20, 6, 'Delete contact ID: 1 By user ID: 6', '2020-09-03 02:33:59', '2020-09-03 02:33:59', '22'),
(21, 6, 'Update Menu by ID: 6', '2020-09-03 04:58:09', '2020-09-03 04:58:09', '17'),
(22, 6, 'Update Menu by ID: 6', '2020-09-03 05:02:38', '2020-09-03 05:02:38', '17'),
(23, 6, 'Delete service ID: 3 by user ID: 6', '2020-09-03 05:08:45', '2020-09-03 05:08:45', '9'),
(24, 6, 'Delete service ID: 2 by user ID: 6', '2020-09-03 05:08:47', '2020-09-03 05:08:47', '9'),
(25, 6, 'Add Service ID:5 by ID: 6', '2020-09-03 05:16:43', '2020-09-03 05:16:43', '3'),
(26, 6, 'Add Service ID:6 by ID: 6', '2020-09-03 05:17:25', '2020-09-03 05:17:25', '3'),
(27, 6, 'Add Service ID:7 by ID: 6', '2020-09-03 05:18:04', '2020-09-03 05:18:04', '3'),
(28, 6, 'Add Service ID:8 by ID: 6', '2020-09-03 05:19:02', '2020-09-03 05:19:02', '3'),
(29, 6, 'Update Menu by ID: 6', '2020-09-03 05:19:52', '2020-09-03 05:19:52', '17'),
(30, 6, 'Add User ID: 31 By ID: 6', '2020-09-03 05:37:08', '2020-09-03 05:37:08', '2'),
(31, 31, 'Login with IP: 27.74.243.123', '2020-09-03 05:37:18', '2020-09-03 05:37:18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `service_id` int(11) UNSIGNED DEFAULT NULL,
  `product_id` int(11) UNSIGNED DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `service_id`, `product_id`, `href`, `menu_id`, `status`) VALUES
(1, 'VỀ CHÚNG TÔI', NULL, NULL, 'https://piofme.rezxcvbnm.co/ve-chung-toi', NULL, 1),
(2, 'DỊCH VỤ', NULL, NULL, NULL, NULL, 1),
(3, 'Giải Pháp Phi Tập Trung', 5, NULL, NULL, 2, 1),
(4, 'Game / App Mobie', 6, NULL, NULL, 2, 1),
(5, 'Thiết Kế Website', 7, NULL, NULL, 2, 1),
(6, 'Dịch Vụ Marketing Đa Quốc Gia', 8, NULL, NULL, 2, 1),
(7, 'SẢN PHẨM', NULL, NULL, 'https://piofme.rezxcvbnm.co/san-pham', NULL, 1),
(8, 'BẢNG GIÁ', NULL, NULL, 'https://piofme.rezxcvbnm.co/bang-gia', NULL, 1),
(9, 'TIN TỨC', NULL, NULL, 'https://piofme.rezxcvbnm.co/tin-tuc', NULL, 1),
(10, 'LIÊN HỆ', NULL, NULL, 'https://piofme.rezxcvbnm.co/lien-he', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `news_id` int(11) UNSIGNED DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `name`, `name_en`, `category_id`, `news_id`, `order`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 'introduce', NULL, NULL, NULL, NULL, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(2, 'Về Chúng Tôi', NULL, NULL, 219, NULL, 1, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(3, 'BAN LÃNH ĐẠO VSET GROUP', NULL, NULL, 177, NULL, 1, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(4, 'Văn hóa tập đoàn', NULL, NULL, 371, NULL, 1, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(5, 'Tầm nhìn - Sứ mệnh - Giá trị cốt lõi', NULL, NULL, 314, NULL, 1, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(6, 'Các công ty thành viên', NULL, 106, NULL, NULL, 1, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(7, 'Chiến lược phát triển 5 năm của VSET Group', NULL, NULL, 370, NULL, 1, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(8, 'tin tức', 'news', NULL, NULL, NULL, NULL, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(9, 'TIN TỨC TẬP ĐOÀN', NULL, 78, NULL, NULL, 8, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(10, 'TIN TỨC CỔ ĐÔNG', NULL, 79, NULL, NULL, 8, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(11, 'Dành Cho Nhà Đầu Tư', NULL, 91, NULL, NULL, 8, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(12, 'LỊCH TRẢ CỔ TỨC', NULL, 94, NULL, NULL, 8, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(13, 'TRÁCH NHIỆM XÃ HỘI', NULL, 92, NULL, NULL, 8, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(14, 'THÀNH TỰU', NULL, 80, NULL, NULL, 8, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(15, 'SỔ TAY TÀI CHÍNH', NULL, 93, NULL, NULL, 8, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(16, 'dự án', '', 66, NULL, NULL, NULL, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(17, 'Lĩnh vực kinh doanh', '', 67, NULL, NULL, NULL, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(18, 'tuyển dụng', 'RECRUITMENT', NULL, NULL, NULL, NULL, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(19, 'VsetGroup', NULL, 82, NULL, NULL, 18, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(20, 'VsetNature', NULL, 84, NULL, NULL, 18, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(21, 'HTX GIA KHANG', NULL, 85, NULL, NULL, 18, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(22, 'XÂY DỰNG TRƯƠNG GIA', NULL, 86, NULL, NULL, 18, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(23, 'GIẢI TRÍ KHANG ANH', NULL, 87, NULL, NULL, 18, '2020-07-24 09:31:00', '2020-07-24 09:31:00'),
(24, 'QUYỀN LỢI NHÂN SỰ TẬP ĐOÀN VSETGROUP', NULL, 88, NULL, NULL, 18, '2020-07-24 09:31:00', '2020-07-24 09:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `summary_content` text CHARACTER SET utf8 NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `alt` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `slug`, `content`, `summary_content`, `status`, `image`, `alt`, `created_at`, `updated_at`) VALUES
(402, 'Le Nhat Linh123', 'le-nhat-linh123', '<p>adsfsdf123</p>', 'sdfsdf123', 0, '/photos/6/Sports & Entertainment.jpg', 'áđá123', NULL, NULL),
(403, 'Le Nhat Linh', 'le-nhat-linh', '<p>qwedasad</p>', 'asdasd', 1, '/photos/6/Sports & Entertainment.jpg', 'asd', NULL, NULL),
(404, 'asdasdfsadf', 'asdasdfsadf', '<p>wersdfs</p>', 'dfsdf', 1, '/photos/6/Machinery.jpg', 'sdfsdfsfd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`, `updated_at`) VALUES
('admin@gmail.com', 'Pw08RWhzJBMn636387jU15GpiZsap2LwATbC0DNVGGvI0tVw2GGHdYQCYSeQ', '2020-06-13 14:08:58', '2020-06-13 14:08:58'),
('linh@gmail.com', 'DmLb7vkZmZbLnANNt6RDrTGpMRX2ebvAa1sMH79APUKGAlG3t15Fw6lezbgV', '2020-06-13 16:22:02', '2020-06-13 16:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `summary_content` text NOT NULL,
  `service_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `image`, `alt`, `content`, `summary_content`, `service_id`, `status`) VALUES
(1, 'Le Nhat Linh 123', 'le-nhat-linh-123', '/photos/6/Machinery.jpg', 'ád123', '<p>test123</p>', 'test123', 2, 0),
(2, 'nhatlinh', 'nhatlinh', '/photos/6/piofme_image/Beauty & Personal Care.jpg', 'asda', '<p>asdasd</p>', 'asdasd', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` decimal(18,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `name`, `price`, `status`) VALUES
(1, 'Le Nhat Linh', '212134123', 1),
(2, 'nhatlinh', '5000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `refund_catalog`
--

CREATE TABLE `refund_catalog` (
  `id` int(11) NOT NULL,
  `catalog` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `refund` float NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `introduce` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `slug`, `image`, `alt`, `introduce`, `status`, `updated_at`, `created_at`) VALUES
(1, 'test', '', 'No', 'No alt', 'Viet gi do 1000 tu', 0, '2020-08-31 01:11:28', '0000-00-00 00:00:00'),
(2, 'test123', 'test123', '/photos/6/Machinery.jpg', 'asd123', '<p>test123</p>', 0, '2020-09-03 05:08:47', '2020-08-31 01:11:13'),
(3, 'test1', 'test1', '/photos/6/Sports & Entertainment.jpg', 'asd', '<p>xvdfgdad</p>', 0, '2020-09-03 05:08:45', '2020-09-01 00:21:48'),
(4, 'test11111', 'test11111', '/photos/6/Machinery.jpg', 'asd123', '<p>aseada</p>', 0, '2020-09-03 02:18:36', '2020-09-03 01:59:54'),
(5, 'Giải Pháp Phi Tập Trung', 'giai-phap-phi-tap-trung', '/photos/6/1.jpg', 'giai phap phi tap trung', '<p>Giải pháp phi tập trung</p>', 1, '2020-09-03 05:16:43', '2020-09-03 05:16:43'),
(6, 'Game / App Mobie', 'game-app-mobie', '/photos/6/2.jpg', 'game / app mobie', '<p>Game và App Mobie</p>', 1, '2020-09-03 05:17:25', '2020-09-03 05:17:25'),
(7, 'Thiết Kế Website', 'thiet-ke-website', '/photos/6/3.png', 'thiet ke website', '<p>Thiết kế website</p>', 1, '2020-09-03 05:18:04', '2020-09-03 05:18:04'),
(8, 'Dịch Vụ Marketing Đa Quốc Gia', 'dich-vu-marketing-da-quoc-gia', '/photos/6/4.jpg', 'dich vu marketing da quoc gia', '<p>Dịch vụ marketing đa quốc gia</p>', 1, '2020-09-03 05:19:02', '2020-09-03 05:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link_image` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `order` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `link_image`, `url`, `order`, `status`) VALUES
(24, '/photos/6/vtv3.png', 'https://www.youtube.com/watch?v=5KwgxbDtUR0', 2, 0),
(25, '/photos/6/ttvn.png', 'http://thanhtravietnam.vn/tim-hieu-phap-luat/vsetgroup-co-phieu-trai-phieu-mot-hinh-thuc-dau-tu-sinh-loi-hap-dan-183980', 2, 0),
(26, '/photos/6/dspl.png', 'http://www.doisongphapluat.com/kinh-doanh/tap-doan-vsetgroup-phat-hanh-co-phieu-trai-phieu-nam-2018-a252240.html', 2, 0),
(27, '/photos/6/vnexpress.png', 'https://vnexpress.net/vsetgroup-phat-hanh-co-phieu-trai-phieu-cho-nha-dau-tu-3886044.html', 2, 0),
(28, '/photos/6/htv9.png', 'https://www.youtube.com/watch?v=V9s0sHLq7cw', 2, 0),
(29, '/photos/6/gdpl.png', 'https://giadinhvaphapluat.vn/tap-doan-vsetgroup-phat-hanh-co-phieu-trai-phieu-nam-2018-p63622.html', 2, 0),
(30, '/photos/6/dantri.png', 'https://dantri.com.vn/doanh-nghiep/chu-tich-tap-doan-vsetgroup-nhan-ky-niem-chuong-cho-top-10-doanh-nhan-tieu-bieu-2018101511225397.htm', 2, 0),
(31, '/photos/6/tuoitre.png', 'https://tuoitre.vn/tap-doan-vsetgroup-tung-bung-mung-ky-niem-5-nam-thanh-lap-20190409164545484.htm', 2, 0),
(32, '/photos/6/thanhnien.png', 'https://thanhnien.vn/tai-chinh-kinh-doanh/doanh-nghiep/vsetgroup-chinh-thuc-cong-bo-ke-hoach-5-nam-cua-tap-doan-giai-doan-2019-2024-1089832.html', 2, 0),
(49, '/photos/6/landing_1.png', NULL, 1, 1),
(50, '/photos/6/landing_3.png', NULL, 1, 1),
(51, '/photos/6/landing_4.png', NULL, 1, 1),
(52, '/photos/6/banner/landing_1_2.jpg', NULL, 1, 1),
(53, '/photos/6/banner/landing_2_2.jpg', NULL, 1, 1),
(54, '/photos/6/banner/landing_3_2.jpg', NULL, 1, 1),
(55, '/photos/6/banner/photo_2020-06-26_15-16-00 (2).jpg', NULL, 1, 0),
(56, '/photos/6/banner/photo_2020-06-26_15-16-00.jpg', NULL, 1, 0),
(57, '/photos/6/banner/photo_2020-06-26_15-16-01 (2).jpg', NULL, 1, 0),
(58, '/photos/6/banner/photo_2020-06-26_15-16-01 (3).jpg', NULL, 1, 0),
(59, '/photos/6/banner/photo_2020-06-26_15-16-01.jpg', NULL, 1, 0),
(60, '/photos/6/banner/photo_2020-06-26_15-16-02.jpg', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` smallint(6) DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Admin', 'admin@gmail.com', NULL, '$2y$10$7lTqsHoKrpNXOcSlWCRPHecHrlpRXpwm1GXUmzmQX6FWkdtvmksoe', 1, 'H8vvPtUBkAb4RXqBNE2kuiUSYCuDQz6cl6iGXIRgtIj81s0Bjhhxg4SOVXti', '2020-06-11 16:09:10', '2020-07-03 14:08:11'),
(31, 'Le Nhat Linh', 'lenhatlinh250895@gmail.com', NULL, '$2y$10$q9bS5LUSjmA5FVrelLdC9Ot51ymarlbLDbJ0roBjpDTSNdkrcpqLm', 0, NULL, '2020-09-03 05:37:08', '2020-09-03 05:37:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_log`
--
ALTER TABLE `action_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_index` (`category_model_id`),
  ADD KEY `language_index` (`language_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_translations`
--
ALTER TABLE `footer_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_index` (`footer_model_id`,`language_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `information_quote`
--
ALTER TABLE `information_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langdingpages`
--
ALTER TABLE `langdingpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_index` (`service_id`,`product_id`),
  ADD KEY `news_id` (`product_id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refund_catalog`
--
ALTER TABLE `refund_catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_log`
--
ALTER TABLE `action_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer_translations`
--
ALTER TABLE `footer_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `information_quote`
--
ALTER TABLE `information_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `langdingpages`
--
ALTER TABLE `langdingpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refund_catalog`
--
ALTER TABLE `refund_catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_ibfk_1` FOREIGN KEY (`category_model_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_translations_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `footer_translations`
--
ALTER TABLE `footer_translations`
  ADD CONSTRAINT `footer_translations_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `footer_translations_ibfk_2` FOREIGN KEY (`footer_model_id`) REFERENCES `footer` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
