-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2018 lúc 06:15 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acounts`
--

CREATE TABLE `acounts` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL COMMENT '0:chưa xác nhận, 1:đã xác nhận, 2:đã khóa',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `acounts`
--

INSERT INTO `acounts` (`user_id`, `email`, `password`, `fullname`, `address`, `phone`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kimquy@gmail.com', '123456', 'Đặng Kim Quý', '242 Minh Khai', '0942343545', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'kimquy@gmail.com', '123456', 'Đặng Kim Quý', '242 Minh Khai', '0942343545', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'phuong@gmail.com', '$2y$10$e3gPCa7l6pr0KRyr.2/oducU3KVnCuDCH3rUHdbxxyIywr.OfK3Pq', 'Ngọc Phương', 'aaa', '098324343', 1, '1', '2018-05-08 07:18:46', '2018-05-08 07:18:46'),
(4, 'abc@gmail.com', '$2y$10$e3gPCa7l6pr0KRyr.2/oducU3KVnCuDCH3rUHdbxxyIywr.OfK3Pq', 'Đặng Kim Quý', 'abc', '123456789', 2, '1', '2018-05-08 07:21:04', '2018-05-08 07:21:04'),
(5, 'abc@gmail.com', '123456', 'abc', 'aa', '0987676', 2, '1', '2018-05-09 20:24:06', '2018-05-09 20:24:06'),
(6, 'kimquy@gmail.com', '123456', 'kimquy', 'aaa', '988676', 2, '1', '2018-05-09 20:26:02', '2018-05-09 20:26:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_user` text NOT NULL,
  `total_money` varchar(9) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0: chưa giao hàng, 1: đang giao hàng, 2: đã giao hàng, 3: đã hủy',
  `date` datetime NOT NULL,
  `address` varchar(100) NOT NULL,
  `district_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `name_user_rc` text NOT NULL,
  `phone_rc` varchar(15) NOT NULL,
  `address_rc` varchar(100) NOT NULL,
  `district_id_rc` int(11) NOT NULL,
  `note` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`bill_id`, `user_id`, `name_user`, `total_money`, `status`, `date`, `address`, `district_id`, `email`, `phone`, `name_user_rc`, `phone_rc`, `address_rc`, `district_id_rc`, `note`, `created_at`, `updated_at`) VALUES
(69, 4, 'Đặng Kim Quý', '378000', 2, '2018-05-10 14:40:46', '242G Minh Khai,...', 1, 'k@gmail.com', '098234653', 'Nguyễn Ngọc Phương', '0287484574', '213C', 2, 'Gọi điện thoại trước ghi giao hàng', '2018-05-10 14:40:46', '2018-05-15 21:17:33'),
(70, 6, 'Nguyễn Thị Oanh', '441000', 2, '2018-05-10 15:43:25', '123A Phùng Khoang', 9, 'oanh@gmail.com', '098234653', 'Nam Anh', '0958675874', '315A Nguyễn Trãi', 2, '', '2018-05-10 15:43:25', '2018-05-17 00:43:23'),
(71, 4, 'Ngọc Phương', '441000', 0, '2018-05-10 16:21:27', '24 Trường Chinh,Thanh Xuân, Hà Nội', 2, 'phuong@gmail.com', '098234653', '', '', '', 0, 'fdfdf', '2018-05-10 16:21:27', '2018-05-10 16:21:27'),
(79, 0, 'Nguyễn Văn Hoàn', '441000', 2, '2018-05-10 17:35:06', '12 Trung Văn, Nam Từ Liêm, Hà Nội', 2, 'hoannguyen@gmail.com', '0958765654', '', '', '', 0, '', '2018-05-10 17:35:06', '2018-05-17 00:43:23'),
(80, 0, 'Tuyết Nhung', '603000', 2, '2018-05-10 17:49:00', '24 Vũ Hữu, Thanh Xuân, Hà Nội', 2, 'nhung@gmail.com', '0958765654', '', '', '', 0, '', '2018-05-10 17:49:00', '2018-05-17 00:43:23'),
(87, 4, 'Đặng Kim Quý', '72000', 2, '2018-05-11 01:25:06', '34A Bạch Mai, Hai Bà Trưng, Hà Nội', 2, 'au@gmail.com', '0958765654', 'Đặng Lam', '098945894', '334A Nguyễn Trãi, Thanh Xuân, Hà Nội', 11, 'Hello', '2018-05-11 01:25:06', '2018-05-15 17:01:51'),
(93, 0, 'abc', '45000', 2, '2018-05-15 15:04:30', '123A Lí Thường Kiệt, Hà Nôị', 18, 'abc@gmail.com', '038958604', '', '', '', 0, '', '2018-05-15 15:04:30', '2018-05-15 17:01:51'),
(94, 0, 'Đặng', '369000', 1, '2018-05-15 13:36:08', 'ưuhrehfr', 18, 'abc@gmail.com', '903859894', '', '', '', 0, '', '2018-05-15 13:36:08', '2018-05-15 17:01:26'),
(95, 0, 'kimquydang', '544500', 1, '2018-05-15 16:21:20', '1244t5dfdf', 50, 'au@gmail.com', '958765654', 'phương', '02989435', 'aaa', 50, '', '2018-05-15 16:21:20', '2018-05-15 17:01:26'),
(96, 0, 'kimquydang', '319500', 1, '2018-05-15 19:38:48', '1244t5dfdf', 50, 'au@gmail.com', '958765654', '', '', '', 0, '', '2018-05-15 19:38:48', '2018-05-17 00:35:06'),
(97, 0, 'Đặng', '162000', 1, '2018-05-15 19:39:42', '234343', 63, 'abc@gmail.com', '0958765654', '', '', '', 0, '', '2018-05-15 19:39:42', '2018-05-17 00:35:06'),
(98, 0, 'Đặng', '80100', 1, '2018-05-15 20:00:16', 'jhdhf', 18, 'abc@gmail.com', '0838754344', 'dfgf', '', '', 0, '', '2018-05-15 20:00:16', '2018-05-17 00:35:06'),
(99, 0, 'kimquydang', '63000', 1, '2018-05-15 20:34:30', '1244t5dfdf', 50, 'au@gmail.com', '958765654', '', '', '', 0, '', '2018-05-15 20:34:30', '2018-05-17 00:35:06'),
(100, 0, 'kimquydang', '117500', 1, '2018-05-15 21:11:04', '1244t5dfdf', 50, 'au@gmail.com', '958765654', 'phương', '0947435', '12 Trung Văn', 18, '', '2018-05-15 21:11:04', '2018-05-17 00:35:06'),
(101, 0, 'kimquydang', '162000', 1, '2018-05-16 23:10:20', '1244t5dfdf', 50, 'au@gmail.com', '0958765654', '', '', '12 Trung Văn', 0, '', '2018-05-16 23:10:20', '2018-05-17 00:40:11'),
(102, 0, 'Đặng Kim Quý', '193500', 0, '2018-05-17 01:57:44', '252A Minh Khai', 18, 'au@gmail.com', '098364734', ' Nguyễn Thị Oanh', '0972344545', '12 Trung Văn', 18, 'Tặng', '2018-05-17 01:57:44', '2018-05-17 01:57:44'),
(103, 0, 'kimquydang', '144000', 0, '2018-05-25 07:31:38', '1244t5dfdf', 50, 'au@gmail.com', '958765654', '', '', '', 0, '', '2018-05-25 07:31:38', '2018-05-25 07:31:38'),
(104, 0, 'kimquydang', '25000', 0, '2018-05-25 13:53:25', '1244t5dfdf', 50, 'au@gmail.com', '958765654', '', '', '', 0, '', '2018-05-25 13:53:25', '2018-05-25 13:53:25'),
(105, 0, 'kimquydang', '162000', 0, '2018-05-25 14:30:57', '1244t5dfdf', 50, 'au@gmail.com', '958765654', '', '', '', 0, '', '2018-05-25 14:30:57', '2018-05-25 14:30:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `number_star` int(1) NOT NULL,
  `title` text NOT NULL,
  `comment` varchar(225) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0: chưa duyệt, 1: đã duyệt',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`comment_id`, `user_id`, `product_id`, `number_star`, `title`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 0, 3, '', 'rerrt', 0, '2018-05-11 00:11:35', '0000-00-00 00:00:00'),
(2, 4, 0, 3, '', 'fsdf', 0, '2018-05-11 00:12:26', '0000-00-00 00:00:00'),
(3, 4, 0, 3, '', 'sfgfg', 0, '2018-05-11 00:17:33', '0000-00-00 00:00:00'),
(4, 4, 0, 5, '', 'sfdsf', 0, '2018-05-11 00:21:17', '0000-00-00 00:00:00'),
(5, 4, 0, 0, '', 'sdfkfgj', 0, '2018-05-11 00:23:29', '0000-00-00 00:00:00'),
(6, 4, 0, 3, 'sdsrfd', 'ưeewr', 0, '2018-05-11 00:26:18', '0000-00-00 00:00:00'),
(7, 4, 0, 4, 'đkf', 'cũng đc', 0, '2018-05-11 00:26:56', '0000-00-00 00:00:00'),
(8, 4, 10, 4, 'kimquysds', 'skdfjd', 1, '2018-05-11 00:33:09', '0000-00-00 00:00:00'),
(9, 4, 10, 2, 'ádfdfga', 'đsgdffsdsa', 1, '2018-05-11 00:34:30', '0000-00-00 00:00:00'),
(10, 4, 10, 0, '', '', 0, '2018-05-11 00:46:08', '0000-00-00 00:00:00'),
(11, 4, 10, 0, '', '', 0, '2018-05-11 03:57:53', '0000-00-00 00:00:00'),
(12, 4, 10, 4, 'kjksghf', 'sdkgfgf', 0, '2018-05-11 04:28:27', '0000-00-00 00:00:00'),
(13, 4, 11, 3, 'kim quy', 'abc', 0, '2018-05-16 23:57:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`contact_id`, `fullname`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Kim Quý', 'kimquy@gmail.com', 'Hãy g?i cho tôi các ch??ng trình ?a ?ãi c?a nhà sách Skybooks.', '2018-03-21 10:10:14', '2018-03-21 10:10:14'),
(2, 'Nguy?n Ph??ng', 'phuongnguyen@gmail.com', 'G?i cho tôi các ch??ng trình khuy?n m?i c?a nhà sách skybooks.', '2018-03-21 10:14:59', '2018-03-21 10:14:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_bill`
--

CREATE TABLE `detail_bill` (
  `detail_bill_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(7) NOT NULL,
  `amount` varchar(9) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `detail_bill`
--

INSERT INTO `detail_bill` (`detail_bill_id`, `bill_id`, `product_id`, `price`, `amount`, `created_at`, `updated_at`) VALUES
(71, 69, 8, '45000', '2', '2018-05-10 14:40:46', '2018-05-10 14:40:46'),
(72, 69, 10, '67500', '2', '2018-05-10 14:40:46', '2018-05-10 14:40:46'),
(73, 69, 9, '45000', '2', '2018-05-10 14:40:46', '2018-05-10 14:40:46'),
(74, 69, 11, '63000', '1', '2018-05-10 14:40:46', '2018-05-10 14:40:46'),
(75, 70, 8, '45000', '2', '2018-05-10 15:43:26', '2018-05-10 15:43:26'),
(76, 70, 10, '67500', '2', '2018-05-10 15:43:26', '2018-05-10 15:43:26'),
(77, 70, 9, '45000', '2', '2018-05-10 15:43:26', '2018-05-10 15:43:26'),
(78, 70, 11, '63000', '2', '2018-05-10 15:43:26', '2018-05-10 15:43:26'),
(79, 72, 8, '45000', '2', '2018-05-10 16:28:11', '2018-05-10 16:28:11'),
(80, 72, 10, '67500', '2', '2018-05-10 16:28:11', '2018-05-10 16:28:11'),
(81, 72, 9, '45000', '2', '2018-05-10 16:28:11', '2018-05-10 16:28:11'),
(82, 72, 11, '63000', '2', '2018-05-10 16:28:11', '2018-05-10 16:28:11'),
(83, 72, 8, '45000', '2', '2018-05-10 16:28:49', '2018-05-10 16:28:49'),
(84, 72, 10, '67500', '2', '2018-05-10 16:28:49', '2018-05-10 16:28:49'),
(85, 72, 9, '45000', '2', '2018-05-10 16:28:49', '2018-05-10 16:28:49'),
(86, 72, 11, '63000', '2', '2018-05-10 16:28:49', '2018-05-10 16:28:49'),
(87, 73, 8, '45000', '2', '2018-05-10 16:29:05', '2018-05-10 16:29:05'),
(88, 73, 10, '67500', '2', '2018-05-10 16:29:05', '2018-05-10 16:29:05'),
(89, 73, 9, '45000', '2', '2018-05-10 16:29:05', '2018-05-10 16:29:05'),
(90, 73, 11, '63000', '2', '2018-05-10 16:29:05', '2018-05-10 16:29:05'),
(91, 74, 8, '45000', '2', '2018-05-10 16:33:14', '2018-05-10 16:33:14'),
(92, 74, 10, '67500', '2', '2018-05-10 16:33:14', '2018-05-10 16:33:14'),
(93, 74, 9, '45000', '2', '2018-05-10 16:33:14', '2018-05-10 16:33:14'),
(94, 74, 11, '63000', '2', '2018-05-10 16:33:14', '2018-05-10 16:33:14'),
(95, 75, 8, '45000', '2', '2018-05-10 16:34:57', '2018-05-10 16:34:57'),
(96, 75, 10, '67500', '2', '2018-05-10 16:34:57', '2018-05-10 16:34:57'),
(97, 75, 9, '45000', '2', '2018-05-10 16:34:57', '2018-05-10 16:34:57'),
(98, 75, 11, '63000', '2', '2018-05-10 16:34:57', '2018-05-10 16:34:57'),
(99, 76, 8, '45000', '2', '2018-05-10 16:36:40', '2018-05-10 16:36:40'),
(100, 76, 10, '67500', '2', '2018-05-10 16:36:40', '2018-05-10 16:36:40'),
(101, 76, 9, '45000', '2', '2018-05-10 16:36:40', '2018-05-10 16:36:40'),
(102, 76, 11, '63000', '2', '2018-05-10 16:36:40', '2018-05-10 16:36:40'),
(103, 77, 8, '45000', '2', '2018-05-10 16:36:49', '2018-05-10 16:36:49'),
(104, 77, 10, '67500', '2', '2018-05-10 16:36:49', '2018-05-10 16:36:49'),
(105, 77, 9, '45000', '2', '2018-05-10 16:36:49', '2018-05-10 16:36:49'),
(106, 77, 11, '63000', '2', '2018-05-10 16:36:49', '2018-05-10 16:36:49'),
(107, 78, 8, '45000', '2', '2018-05-10 16:59:20', '2018-05-10 16:59:20'),
(108, 78, 10, '67500', '2', '2018-05-10 16:59:20', '2018-05-10 16:59:20'),
(109, 78, 9, '45000', '2', '2018-05-10 16:59:20', '2018-05-10 16:59:20'),
(110, 78, 11, '63000', '2', '2018-05-10 16:59:20', '2018-05-10 16:59:20'),
(111, 79, 8, '45000', '2', '2018-05-10 17:35:07', '2018-05-10 17:35:07'),
(112, 79, 10, '67500', '2', '2018-05-10 17:35:07', '2018-05-10 17:35:07'),
(113, 79, 9, '45000', '2', '2018-05-10 17:35:07', '2018-05-10 17:35:07'),
(114, 79, 11, '63000', '2', '2018-05-10 17:35:07', '2018-05-10 17:35:07'),
(115, 80, 8, '45000', '2', '2018-05-10 17:49:00', '2018-05-10 17:49:00'),
(116, 80, 10, '67500', '2', '2018-05-10 17:49:00', '2018-05-10 17:49:00'),
(117, 80, 9, '45000', '2', '2018-05-10 17:49:00', '2018-05-10 17:49:00'),
(118, 80, 11, '63000', '2', '2018-05-10 17:49:00', '2018-05-10 17:49:00'),
(119, 80, 19, '162000', '1', '2018-05-10 17:49:00', '2018-05-10 17:49:00'),
(120, 81, 11, '63000', '4', '2018-05-10 18:34:40', '2018-05-10 18:34:40'),
(121, 81, 13, '63000', '1', '2018-05-10 18:34:40', '2018-05-10 18:34:40'),
(122, 82, 13, '63000', '1', '2018-05-10 18:37:58', '2018-05-10 18:37:58'),
(123, 82, 10, '67500', '1', '2018-05-10 18:37:58', '2018-05-10 18:37:58'),
(124, 83, 11, '63000', '1', '2018-05-10 18:39:58', '2018-05-10 18:39:58'),
(125, 83, 24, '76500', '1', '2018-05-10 18:39:58', '2018-05-10 18:39:58'),
(126, 84, 8, '45000', '2', '2018-05-10 19:02:24', '2018-05-10 19:02:24'),
(127, 85, 9, '45000', '1', '2018-05-10 20:19:18', '2018-05-10 20:19:18'),
(128, 86, 13, '63000', '1', '2018-05-11 00:49:01', '2018-05-11 00:49:01'),
(129, 87, 22, '72000', '1', '2018-05-11 01:25:06', '2018-05-11 01:25:06'),
(130, 87, 9, '45000', '2', '2018-05-14 10:44:53', '2018-05-14 10:44:53'),
(131, 87, 11, '63000', '1', '2018-05-14 10:44:53', '2018-05-14 10:44:53'),
(132, 87, 26, '31500', '1', '2018-05-14 10:44:53', '2018-05-14 10:44:53'),
(133, 87, 21, '121500', '1', '2018-05-14 10:44:53', '2018-05-14 10:44:53'),
(134, 88, 8, '45000', '1', '2018-05-14 11:15:13', '2018-05-14 11:15:13'),
(135, 88, 15, '135000', '1', '2018-05-14 11:15:13', '2018-05-14 11:15:13'),
(136, 88, 19, '162000', '1', '2018-05-14 11:15:13', '2018-05-14 11:15:13'),
(137, 88, 13, '63000', '1', '2018-05-14 11:15:13', '2018-05-14 11:15:13'),
(138, 89, 21, '121500', '1', '2018-05-14 11:23:33', '2018-05-14 11:23:33'),
(139, 90, 8, '45000', '1', '2018-05-14 12:01:42', '2018-05-14 12:01:42'),
(140, 91, 12, '63000', '1', '2018-05-14 12:02:29', '2018-05-14 12:02:29'),
(141, 92, 12, '63000', '1', '2018-05-14 12:06:06', '2018-05-14 12:06:06'),
(142, 93, 8, '45000', '1', '2018-05-15 15:04:31', '2018-05-15 15:04:31'),
(143, 94, 10, '67500', '3', '2018-05-15 13:36:08', '2018-05-15 13:36:08'),
(144, 94, 8, '45000', '1', '2018-05-15 13:36:08', '2018-05-15 13:36:08'),
(145, 94, 21, '121500', '1', '2018-05-15 13:36:08', '2018-05-15 13:36:08'),
(146, 95, 8, '45000', '1', '2018-05-15 16:21:20', '2018-05-15 16:21:20'),
(147, 95, 9, '45000', '3', '2018-05-15 16:21:21', '2018-05-15 16:21:21'),
(148, 95, 13, '63000', '3', '2018-05-15 16:21:21', '2018-05-15 16:21:21'),
(149, 95, 26, '31500', '1', '2018-05-15 16:21:21', '2018-05-15 16:21:21'),
(150, 95, 16, '144000', '1', '2018-05-15 16:21:21', '2018-05-15 16:21:21'),
(151, 96, 24, '76500', '2', '2018-05-15 19:38:50', '2018-05-15 19:38:50'),
(152, 96, 25, '166500', '1', '2018-05-15 19:38:50', '2018-05-15 19:38:50'),
(153, 97, 19, '162000', '1', '2018-05-15 19:39:42', '2018-05-15 19:39:42'),
(154, 98, 20, '80100', '1', '2018-05-15 20:00:16', '2018-05-15 20:00:16'),
(155, 99, 12, '63000', '1', '2018-05-15 20:34:31', '2018-05-15 20:34:31'),
(156, 100, 8, '25000', '2', '2018-05-15 21:11:05', '2018-05-15 21:11:05'),
(157, 100, 10, '67500', '1', '2018-05-15 21:11:05', '2018-05-15 21:11:05'),
(158, 101, 19, '162000', '1', '2018-05-16 23:10:20', '2018-05-16 23:10:20'),
(159, 102, 13, '63000', '2', '2018-05-17 01:57:45', '2018-05-17 01:57:45'),
(160, 102, 10, '67500', '1', '2018-05-17 01:57:45', '2018-05-17 01:57:45'),
(161, 103, 16, '144000', '1', '2018-05-25 07:31:39', '2018-05-25 07:31:39'),
(162, 104, 8, '25000', '1', '2018-05-25 13:53:26', '2018-05-25 13:53:26'),
(163, 105, 19, '162000', '1', '2018-05-25 14:30:58', '2018-05-25 14:30:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL COMMENT '1-25: Tỉnh miền Bắc, 26-44:Tỉnh miền Trung, 45-63: Tỉnh miền Nam',
  `district_name` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `district`
--

INSERT INTO `district` (`district_id`, `district_name`) VALUES
(1, 'Lào Cai'),
(2, 'Yên Bái'),
(3, '?i?n Biên'),
(4, 'Hòa Bình'),
(5, 'Lai Châu'),
(6, 'S?n La'),
(7, 'Hà Giang'),
(8, 'Cao B?ng'),
(9, 'B?c C?n'),
(10, 'L?ng S?n'),
(11, 'Tuyên Quang'),
(12, 'Thái Nguyên'),
(13, 'Phú Th?'),
(14, 'B?c Giang'),
(15, 'Qu?ng Ninh'),
(16, 'B?c Ninh'),
(17, 'Hà Nam'),
(18, 'Hà N?i'),
(19, 'H?i D??ng'),
(20, 'H?i Phòng'),
(21, 'H?ng Yên'),
(22, 'Nam ??nh'),
(23, 'Ninh Bình'),
(24, 'Thái Bình'),
(25, 'V?nh Phúc'),
(26, 'Thanh Hóa'),
(27, 'Ngh? An'),
(28, 'Hà T?nh'),
(29, 'Qu?ng Bình'),
(30, 'Qu?ng Tr?'),
(31, 'Th?a Thiên Hu?'),
(32, '?à N?ng'),
(33, 'Qu?ng Nam'),
(34, 'Qu?ng Ngãi'),
(35, 'Bình ??nh'),
(36, 'Phú Yên'),
(37, 'Khánh Hòa'),
(38, 'Ninh Thu?n'),
(39, 'Bình Thu?n'),
(40, 'Kom Tum'),
(41, 'Gia Lai'),
(42, '??c L?c'),
(43, '??c Nông'),
(44, 'Lâm ??ng'),
(45, 'Bình Ph??c'),
(46, 'Bình D??ng'),
(47, '??ng Nai'),
(48, 'Tây Ninh'),
(49, 'Bà R?a-V?ng Tàu'),
(50, 'Thành Ph? H? Chí Minh'),
(51, 'Long An'),
(52, '??ng Tháp'),
(53, 'Ti?n Giang'),
(54, 'An Giang'),
(55, 'B?n Tre'),
(56, 'V?nh Long'),
(57, 'Trà Vinh'),
(58, 'H?u Giang'),
(59, 'Kiên Giang'),
(60, 'Sóc Tr?ng'),
(61, 'B?c Liêu'),
(62, 'Cà Mau'),
(63, 'Thành Ph? C?n Th?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manage_warehouse`
--

CREATE TABLE `manage_warehouse` (
  `manage_wh_id` int(11) NOT NULL,
  `wh_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `manage_warehouse`
--

INSERT INTO `manage_warehouse` (`manage_wh_id`, `wh_id`, `product_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 50, '2017-04-23 00:00:00', '2017-04-23 00:00:00'),
(2, 2, 8, 50, '2017-04-23 00:00:00', '2017-04-23 00:00:00'),
(3, 3, 8, 50, '2017-04-23 00:00:00', '2017-04-23 00:00:00'),
(4, 1, 9, 30, '2017-04-23 00:00:00', '2017-04-23 00:00:00'),
(5, 2, 9, 30, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(6, 3, 9, 50, '2017-04-24 00:00:00', '2017-04-24 00:00:00'),
(7, 1, 10, 30, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(8, 2, 10, 30, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(9, 3, 10, 30, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(10, 1, 11, 30, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(11, 2, 11, 20, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(12, 3, 11, 20, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(13, 1, 18, 20, '2017-05-09 00:00:00', '0000-00-00 00:00:00'),
(14, 2, 18, 20, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(15, 3, 18, 20, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(16, 1, 20, 20, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(17, 2, 20, 20, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(18, 3, 20, 20, '2017-05-09 00:00:00', '2017-05-09 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `input_price` varchar(7) NOT NULL,
  `price` varchar(7) NOT NULL,
  `discount` int(11) NOT NULL COMMENT 'đơn vị: %',
  `page_number` int(11) NOT NULL,
  `cover_type` text NOT NULL,
  `image_link` text NOT NULL,
  `image_path` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `catalog_id`, `product_name`, `input_price`, `price`, `discount`, `page_number`, `cover_type`, `image_link`, `image_path`, `author`, `description`, `created_at`, `updated_at`) VALUES
(8, 7, 'Truyện cổ Andersen', '30000', '50000', 50, 100, 'Mềm', 'http://skybooks.test/images/truyen-1.jpg', 'images/truyen-1.jpg', 'Ngọc Ngân ', 'Truyện cổ tích Anđécxen từ lâu đã quen thuộc với các bạn nhỏ trên khắp thế giới. Những câu chuyện cổ gợi mở trí tưởng tượng, sự hiểu biết của các em về thế giới xung quanh. Hơn thế nữa, truyện cổ tích Anđécxen giáo dục các em lòng yêu thương, biết ơn và kính trọng đối với ông bà, cha mẹ… Ngay cả người lớn, khi đọc cũng cảm nhận được những điều thú vị và bổ ích qua các câu chuyện nhỏ đáng yêu.\n\nĐáp ứng nhu cầu của bạn đọc, Skybooks tiếp tục tái bản bộ Truyện cổ Anđécxen bìa cứng. Truyện cổ Anđécxen gồm 56 truyện do Nguyễn Văn Hải và Vũ Minh Toàn dịch. Đây là bản dịch hay và được yêu thích nhất từ trước đến nay ở Việt Nam. Đến với tuyển tập này, các bạn sẽ bước vào miền đất diệu kì – nơi có các hoàng đế, công chúa, bầy thiên nga, nàng tiên cá… rất đỗi ngọt ngào và thú vị: Nàng công chúa và hạt đậu, Bầy thiên nga, Bộ quần áo mới của Hoàng đế, Nàng tiên cá, Em bé bán diêm…\n\n', '2018-03-20 11:14:04', '2018-03-20 11:14:04'),
(9, 7, 'Vidia và vương miện tiên thất lạc', '30000', '50000', 30, 150, 'Cứng', 'http://skybooks.test/images/truyen-2.jpg', 'images/truyen-2.jpg', 'Ngọc Ngân', 'Khi chiếc vương miện của Nữ hoàng Clarion bị thất lạc, tất cả thần dân trong thung lũng Tiên đều nghi ngờ Vidia cáu kỉnh. Vidia phải tự cứu lấy thanh danh. Nhưng thời gian đang cạn dần, nàng chỉ có hai ngày để giải đáp bí mật về chiếc vương miện thất lạc, nếu không, sẽ bị trục xuất khỏi Thung lũng Tiên vĩnh viễn...\n\nHướng theo ngôi sao thứ hai bên phải và bay mãi đến rạng đông, bạn sẽ tới hòn đảo thần kỳ Never Land. Lần theo những tiếng leng keng, bạn sẽ trạm đến trái tim xứ sở - Thung lũng Tiên. Rồi hãy ngồi lại và nhắm mắt, bạn sẽ được lắng nghe những cậu chuyện đẹp nhất ở xứ này...\n', '2018-03-20 12:07:27', '2018-03-20 12:07:27'),
(10, 7, 'Chuyện ở xứ tiên', '50000', '75000', 10, 150, 'Mềm', 'http://skybooks.test/images/truyen-3.jpg', 'images/truyen-3.jpg', 'Đoàn Hương Giang (dịch)', 'Với chất giọng văn học ngọt ngào và minh họa sống động, “Chuyện ở xứ tiên” đặc biệt dành tặng cho các cô bé đáng yêu, tự tin và mạnh mẽ.\r\n\r\nVà toàn bộ trái tim bí mật của Never Land – Thung lũng Tiên Pixie sẽ được bật mí cùng bạn đọc.\r\n\r\nThế giới ấy có Cung Cây – ngôi nhà của hàng trăm nàng tiên và nàng tiên sinh sống, có Mẹ Bồ Câu giữ nguồn sống vĩnh hằng cho tất thảy, có thứ bụi phép màu giúp các tiên cất cánh bay…\r\n\r\nThế giới loài tiên ở Thung lũng Pixie dẫu khác thường nhưng vẫn rất đời thường. Bạn có thể tìm thấy những nàng tiên, chàng tiên với những tài năng khác biệt: Tinker Bell giỏi sửa chữa và sáng chế, Beck có tài nói chuyện với muông thú, Vidia bay nhanh như gió… Nhưng họ cũng mang những tính xấu, cũng có những khi mắc lỗi, rồi tự mình sửa lỗi và hoàn thiện bản thân mình.\r\n\r\nVà nếu đã tận hưởng trọn vẹn chuyến phiêu lưu kỳ diệu qua từng trang sách, bạn sẽ nhận ra: Vẻ đẹp của các nàng tiên chính là vẻ đẹp thực sự của thiên nhiên và cuộc sống bình dị quanh ta!\r\n\r\nMời các bạn ', '2018-03-20 12:10:04', '2018-03-20 12:10:04'),
(11, 7, 'Bộ váy của nàng tiên vườn Rosetta', '50000', '70000', 10, 120, 'Mềm', 'http://skybooks.test/images/truyen-4.jpg', 'images/truyen-4.jpg', 'Ngọc Ngân', 'Với chất giọng văn học ngọt ngào và minh họa sống động, “Chuyện ở xứ tiên” đặc biệt dành tặng cho các cô bé đáng yêu, tự tin và mạnh mẽ.  Và toàn bộ trái tim bí mật của Never Land – Thung lũng Tiên Pixie sẽ được bật mí cùng bạn đọc.  Thế giới ấy có Cung Cây – ngôi nhà của hàng trăm nàng tiên và nàng tiên sinh sống, có Mẹ Bồ Câu giữ nguồn sống vĩnh hằng cho tất thảy, có thứ bụi phép màu giúp các tiên cất cánh bay…  Thế giới loài tiên ở Thung lũng Pixie dẫu khác thường nhưng vẫn rất đời thường. Bạn có thể tìm thấy những nàng tiên, chàng tiên với những tài năng khác biệt: Tinker Bell giỏi sửa chữa và sáng chế, Beck có tài nói chuyện với muông thú, Vidia bay nhanh như gió… Nhưng họ cũng mang những tính xấu, cũng có những khi mắc lỗi, rồi tự mình sửa lỗi và hoàn thiện bản thân mình.  Và nếu đã tận hưởng trọn vẹn chuyến phiêu lưu kỳ diệu qua từng trang sách, bạn sẽ nhận ra: Vẻ đẹp của các nàng tiên chính là vẻ đẹp thực sự của thiên nhiên và cuộc sống bình dị quanh ta!  Mời các bạn và các em ', '2018-03-20 12:35:05', '2018-03-20 12:40:29'),
(12, 7, 'Beck - Nàng tiên muông thú', '50000', '70000', 10, 101, 'Mềm', 'http://skybooks.test/images/truyen-5.jpg', 'images/truyen-5.jpg', 'Lê Vân Anh (dịch)', 'Với chất giọng văn học ngọt ngào và minh họa sống động, “Chuyện ở xứ tiên” đặc biệt dành tặng cho các cô bé đáng yêu, tự tin và mạnh mẽ.\r\n\r\nVà toàn bộ trái tim bí mật của Never Land – Thung lũng Tiên Pixie sẽ được bật mí cùng bạn đọc.\r\n\r\nThế giới ấy có Cung Cây – ngôi nhà của hàng trăm nàng tiên và nàng tiên sinh sống, có Mẹ Bồ Câu giữ nguồn sống vĩnh hằng cho tất thảy, có thứ bụi phép màu giúp các tiên cất cánh bay…\r\n\r\nThế giới loài tiên ở Thung lũng Pixie dẫu khác thường nhưng vẫn rất đời thường. Bạn có thể tìm thấy những nàng tiên, chàng tiên với những tài năng khác biệt: Tinker Bell giỏi sửa chữa và sáng chế, Beck có tài nói chuyện với muông thú, Vidia bay nhanh như gió… Nhưng họ cũng mang những tính xấu, cũng có những khi mắc lỗi, rồi tự mình sửa lỗi và hoàn thiện bản thân mình.\r\n\r\nVà nếu đã tận hưởng trọn vẹn chuyến phiêu lưu kỳ diệu qua từng trang sách, bạn sẽ nhận ra: Vẻ đẹp của các nàng tiên chính là vẻ đẹp thực sự của thiên nhiên và cuộc sống bình dị quanh ta!\r\n\r\nMời các bạn ', '2018-03-20 12:44:45', '2018-03-20 12:44:45'),
(13, 7, 'Tink - Nàng tiên thợ rắc rối', '50000', '70000', 10, 101, 'Mềm', 'http://skybooks.test/images/truyen-6.jpg', 'images/truyen-6.jpg', 'Ngọc  Ngân', 'Với chất giọng văn học ngọt ngào và minh họa sống động, “Chuyện ở xứ tiên” đặc biệt dành tặng cho các cô bé đáng yêu, tự tin và mạnh mẽ.\r\n\r\nVà toàn bộ trái tim bí mật của Never Land – Thung lũng Tiên Pixie sẽ được bật mí cùng bạn đọc.\r\n\r\nThế giới ấy có Cung Cây – ngôi nhà của hàng trăm nàng tiên và nàng tiên sinh sống, có Mẹ Bồ Câu giữ nguồn sống vĩnh hằng cho tất thảy, có thứ bụi phép màu giúp các tiên cất cánh bay…\r\n\r\nThế giới loài tiên ở Thung lũng Pixie dẫu khác thường nhưng vẫn rất đời thường. Bạn có thể tìm thấy những nàng tiên, chàng tiên với những tài năng khác biệt: Tinker Bell giỏi sửa chữa và sáng chế, Beck có tài nói chuyện với muông thú, Vidia bay nhanh như gió… Nhưng họ cũng mang những tính xấu, cũng có những khi mắc lỗi, rồi tự mình sửa lỗi và hoàn thiện bản thân mình.\r\n\r\nVà nếu đã tận hưởng trọn vẹn chuyến phiêu lưu kỳ diệu qua từng trang sách, bạn sẽ nhận ra: Vẻ đẹp của các nàng tiên chính là vẻ đẹp thực sự của thiên nhiên và cuộc sống bình dị quanh ta!\r\n\r\nMời các bạn ', '2018-03-20 12:46:00', '2018-03-20 12:46:00'),
(14, 7, 'Chuyện xảy ra ở làng tí hon', '30000', '50000', 10, 70, 'Mềm', 'http://skybooks.test/images/truyen-7.jpg', 'images/truyen-7.jpg', 'Kim Jong Sin', 'Quà tặng cho những công dân nhí toàn cầu\r\n\r\nGồm 08 câu chuyện về các vấn đề môi trường được kể bằng giọng văn nhẹ nhàng, hóm hỉnh, cùng hình ảnh minh họa rực rỡ sinh động, phù hợp tư duy trẻ em.\r\n\r\nMỗi cuốn sách là một câu chuyện nhỏ, mang những thông điệp gần gũi về môi trường, giúp trẻ hiểu được thế nào là phát triển bền vững, thế nào là nước sạch, thế nào là hành tinh xanh… Đồng thời còn trang bị cho trẻ những kỹ năng cơ bản nhất để bảo vệ môi trường xung quanh chúng ta xanh, sạch, đẹp hơn.\r\n\r\nThuyền trưởng Tôi-không-biết truy tìm kho báu cho trẻ thấy tầm quan trọng của nước trong đời sống, Chuyện xảy ra ở làng Tí Hon lại là câu chuyện về quá trình đô thị hóa, Kẻ trộm băng nêu lên những vấn đề nghiêm trọng khi nhiệt độ trái đất tăng lên, Bài ca của cây lại là câu chuyện về sức mạnh của rừng… 08 truyện tranh minh họa, tất cả đều là những bài học sâu sắc về việc phải bảo vệ môi trường sống đang ngày càng bị ô nhiễm.\r\nSống xanh – sống lành mạnh và thân thiện với môi trường là cách sống', '2018-03-20 12:49:03', '2018-03-20 12:49:03'),
(15, 7, 'Cây táo yêu thương', '100000', '150000', 10, 212, 'Mềm', 'http://skybooks.test/images/truyen-8.jpg', 'images/truyen-8.jpg', 'Nhóm tác giả ', 'Cây Táo Yêu Thương lạ khi toàn bộ câu chuyện chỉ là 25 bức vẽ trắng đen. Đã vậy, cốt truyện của sách được gói gọn trong những câu kể ngắn, rất ngắn, không có phù thủy, không có công chúa, càng chẳng có phép màu, chẳng li kỳ thú vị như những truyện thiếu nhi khác. Kết thúc truyện cũng không có \"cái thiện chiến thắng cái ác\" hay \"họ sống chung bên nhau hạnh phúc suốt đời\", mà thay vào đó, lại là một câu chuyện buồn nhiều dư vị...\r\n\r\nDẫu có thế nào đi nữa, quyển sách của Shel Silverstein vẫn đứng vững trong lòng bạn đọc suốt 50 năm, được dịch ra 30 ngôn ngữ khác nhau trên thế giới và trở thành cuốn sách yêu thích của hàng triệu trẻ em. The Giving Tree liên tục nằm trong những truyện thiếu nhi bán chạy nhất, xếp thứ 24 trong 100 cuốn sách thiếu nhi được yêu thích nhất theo khảo sát của Hiệp hội Giáo dục Quốc gia Hoa Kì (NEA), và gần đây là vị trí thứ 3 trong danh sách The Giving Tree của cộng đồng Goodreads với gần 50.000 lượt bình chọn.', '2018-03-20 12:51:36', '2018-03-20 12:51:36'),
(16, 7, 'Tôi bị bố bắt cóc', '100000', '160000', 10, 213, 'Mềm', 'http://skybooks.test/images/truyen-9.jpg', 'images/truyen-9.jpg', 'Misuyo Kakuta', 'Tôi bị bố bắt cóc đạt giải Văn học Robo no ishi năm 2000 (Totto- chan: Cô bé bên cửa sổ cũng đạt giải thưởng này năm 1983).\r\n\r\nTôi bị bố bắt cóc viết về một chuyến nghỉ hè.\r\n\r\nĐây là một chuyến nghỉ hè \"lạ lùng\" - bởi người ta đi nghỉ cùng tên bắt cóc!\r\n\r\nĐây là một chuyến bắt cóc \"lạ lùng\" - bởi kẻ bắt cóc là bố, \"một người lớn không tốt!\" và người bị bắt cóc là con gái \"còn không biết là mình yêu hay ghét bố nữa\" (vì người ta phải gặp nhau thì mới biết yêu, hay ghét).\r\n\r\nThế nhưng, chuyến đi của hai người - thủ phạm Takashi và nạn nhân Haru, hay chính xác là bố và con - không hề mất đi tính gay cấn, hồi hộp của một chuyến “bắt cóc” và cũng không thiếu những thú vị, trong trẻo, yêu thương của một chuyến “du lịch gia đình”.\r\n\r\nHơn tất cả, đây là \"một chuyến đi sẽ nối liền trái tim đứa bé và cha mẹ vì lý do nào đó phải sống xa nhau\".\r\n\r\nNhà văn nổi tiếng Nhật Bản Shigematsu Kiyoshi nhận xét: \"Cuốn sách cần thiết cho những người lớn đang chật vật với những khó khăn của việc làm cha, làm ', '2018-03-20 12:53:42', '2018-03-20 12:53:42'),
(17, 7, 'Chuột túi xanh ơi, cậu đâu rồi ?', '120000', '200000', 70, 235, 'Mềm', 'http://skybooks.test/images/truyen-10.jpg', 'images/truyen-10.jpg', 'Emma Clark', 'Cô bé Lily lúc nào cũng muốn có người chơi cùng và làm hộ. Khi không biết phải làm gì, Lily thường hỏi: Mình làm gì bây giờ nhỉ, Chuột Túi Xanh? Nhưng rồi, Chuột Túi Xanh, mẹ và mọi người đã giúp Lily biết tự chơi và tự làm biết bao nhiêu việc.\r\nChuột Túi Xanh là người bạn mà Lily yêu quý nhất trên đời. Nhưng rồi, Lily lần lượt được tặng nào Gấu Nâu Lông Xù, nào Thỏ Bông Vàng, nào Chó Lông Mượt, và bao nhiêu đồ chơi khác nữa. Chuột Túi Xanh dần dần bị cho ra rìa…Chuột Túi Xanh tủi thân lắm nhưng chú có bỏ rơi người bạn nhỏ thân thiết không? Lily có vì những người bạn mới mà bỏ rơi Chuột Túi Xanh không?\r\nLily quyết định sẽ có một sinh nhật chỉ toàn là màu hồng; thiệp sinh nhật hồng này, bánh ga tô hồng này, cả những món quà cũng màu hồng nữa này. Nhưng đó lại không phải là màu của Chuột Túi Xanh.\r\nLily yêu quý Chuột Túi Xanh nhất mực. Thế mà lần đi chơi nào Lily cũng bỏ quên chú. Chuột Túi Xanh lo lắng lắm. Và chú đã nghĩ ra mẹo để giúp Lily sửa được thói xấu này đấy.\r\nBộ sách Lily và C', '2018-03-20 12:56:14', '2018-03-20 12:56:14'),
(18, 7, 'Kẻ trộm băng', '80000', '130000', 10, 102, 'Cứng', 'http://skybooks.test/images/truyen-11.jpg', 'images/truyen-11.jpg', 'Lee Koem Hee', 'Đây là câu chuyện về một Kẻ trộm băng, những từ ngữ một người chơi đàn xếp, vài gã người Đức cuồng tín, một tay đấm Do Thái, và khá nhiều vụ ăn trộm - và được kể bởi Thần Chết. Chỉ có vậy, nhưng câu chuyện về Kẻ trộm sách đã làm rung động trái tim của hàng triệu triệu độc giả trên khắp hành tinh.\r\n\r\nKể câu chuyện về chiến tranh, hẳn không ai kể hay hơn Thần Chết (có lẽ đó cũng là lý do Thần Chết được chọn làm người kể chuyện). Xuyên suốt quyển sách này, hình ảnh cái chết và chiến tranh được nhắc lại nhiều lần. Và cuộc chiến tranh mà chúng ta đang nói đến ở đây là Thế chiến II - cuộc chiến mà mức độ tàn phá của nó đã khiến chính bản thân Thần Chết cũng phải rùng mình. Zusak đã viết nên một câu chuyện đầy ắp những nỗi kinh hoàng một cách chân thực và đầy sức mạnh. Nỗi kinh hoàng của chiến tranh trong Kẻ trộm sách không phải được thể hiện bằng chiến trường đẫm máu hay những cỗ xe tăng súng đạn chết người, mà bằng quãng thời gian bốn năm của một cô bé tại một thị trấn nhỏ thuộc ngoại ô thà', '2018-03-20 13:01:44', '2018-03-20 13:01:44'),
(19, 7, 'Nếu ngày mai không bao giờ tới', '100000', '180000', 10, 121, 'Cứng', 'http://skybooks.test/images/truyen-12.jpg', 'images/truyen-12.jpg', 'Trần Trọng Sâm', 'Tác phẩm “Nếu ngày mai không bao giờ đến” là tác phẩm thứ 2 của Kitagawa, xuất bản năm 2006. Cuốn tiểu thuyết này trở thành best seller với doanh số bán hàng đạt 90.000 bản và được xếp hạng nhất trong bảng xếp hạng của “Hội nghiên cứu phổ biến việc đọc sách, book sommelier” năm 2007.\r\n\r\nCó rất nhiều thứ để miêu tả vẻ đẹp của tuổi trưởng thành. Khi từng dòng hồi ức lướt qua đủ để con người ở thì hiện tại cảm thấy bồi hồi và nuối tiếc. Người ta vẫn thường nói, mọi cuộc hạnh ngộ trên đời là do duyên số đưa đẩy, nhưng cũng tồn tại những cuộc gặp gỡ vốn được lên kế hoạch từ trước, chỉ chờ một cái cớ hoàn hảo để tiếp cận đối phương. Đó cũng chính là cách Haruka xích lại gần hơn với cậu bạn Yousuke, người cô thầm mến mộ đã lâu.\r\n\r\n“Tôi muốn trở thành một người khiến bất cứ ai có duyên gặp gỡ cảm thấy tuyệt vời vì được quen biết một người như thế.”\r\n\r\n\r\nKhông nhiều màu sắc, không nhiều kịch tính, dữ dội mà chỉ với một gam màu dịu dàng và lãng đãng xuyên suốt, tựa tiếng nói thủ thỉ chảy nhẹ vào', '2018-03-20 13:04:30', '2018-03-20 13:04:30'),
(20, 7, 'Tôi và Paris', '50000', '89000', 10, 200, 'Mềm', 'http://skybooks.test/images/truyen-13.jpg', 'images/truyen-13.jpg', 'Hoàng Long', 'Nằm trong tủ sách \"Trải nghiệm du học\", cuốn sách Tôi và Paris - Câu chuyện một dòng sông là trải nghiệm chân thực, sống động của chính tác giả Hoàng Long về những năm tháng du học tại Paris. Cuốn sách là hành trang quý báu cho những ai chuẩn bị dấn thân vào con đường du học.\r\n\r\n\"Dường như phải đi hết chừng ấy chặng đường, gặp gỡ chừng ấy con người, tôi mới bắt đầu gặp được mình. Tôi đi bao nhiêu ngày đường mới đủ học để hiểu chính mình phần nào. Rồi tôi thấy mình là một dòng sông, có lúc êm đềm, đôi khi sóng dữ, có lúc thảnh thơi có khi vội vã, giản dị thế mà huyền bí đến thế. Mỗi cuộc đời là một dòng sông, mải miết theo những lối chảy đã được định trước hay là tự mình chọn lấy? Quan trọng là tiến lên hay dừng lại, quan trọng là mạnh mẽ hay dịu dàng, là đến được nơi nào đó hay không cần ở đâu cả?\"', '2018-03-20 13:07:15', '2018-03-20 13:07:15'),
(21, 20, 'Con cái tự giác, cha mẹ yên tâm', '85000', '135000', 70, 212, 'Mềm', 'http://skybooks.test/images/giaoduc-1.jpg', 'images/giaoduc-1.jpg', 'Phạm Thùy Linh (dịch)', 'Xã hội hiện nay rất phức tạp nên các bậc cha mẹ thường không dám lơ là với con cái dù chỉ một phút. Nhưng cha mẹ nào cũng không thể ở bên con suốt cả đời. Những đứa trẻ sống trong sự bao bọc sẽ thiếu khả năng tự bảo vệ bản thân, khi bước chân ra xã hội sẽ gặp phải nhiều rắc rối. Vì vậy, chúng ta không nên nghĩ rằng phải chuẩn bị đầy đủ mọi thứ để đón nhận sự chào đời của con, mà hãy để con tự chuẩn bị đầy đủ mọi thứ để đón nhận tương lai của chúng.\r\n\r\nTự giác mới có thể tự do, muốn bay cao, bay xa thì phải có một bộ não biết tư duy và một đôi cánh khỏe mạnh. Bố mẹ quản lý càng chặt thì năng lực tự quản lý bản thân của con càng kém, dẫn đến việc tâm lý chống đối, muốn thoát khỏi sự kìm kẹp của cha mẹ càng trở nên mạnh mẽ trong chúng, đặc biệt là trong giai đoạn dậy thì. Vậy làm thế nào để con cái trở nên tự giác? Cuốn sách Con cái tự giác, cha mẹ yên tâm đã tổng kết ra những phương pháp giáo dục vô cùng hiệu quả và rất đáng để chúng ta học hỏi.', '2018-03-21 12:27:45', '2018-03-21 12:27:45'),
(22, 20, 'Dạy con trẻ cách tư duy', '50000', '80000', 70, 115, 'Mềm', 'http://skybooks.test/images/giaoduc-2.jpg', 'images/giaoduc-2.jpg', 'Bình Minh (dịch)', 'Một trong những tham vọng của tôi khi viết cuốn sách này là sẽ giúp cho nhiều bạn trẻ ngày càng tự tin rằng: “Tôi biết tư duy”. Thậm chí sẽ tuyệt vời hơn nữa nếu họ khẳng định thêm: “Tôi có tư duy và tôi thích tư duy”.\r\n \r\nCuốn sách này cũng mang lại cơ hội phát triển tư duy như vậy cho các bậc cha mẹ và người lớn nói chung.\r\n \r\nTư duy không hề khó và cũng không hề nhàm chán. Bạn không cần phải là một thiên tài mới có thể trở thành người giỏi tư duy.\r\n \r\nTương lai phát triển thịnh vượng của thế giới sẽ rất cần những con người có tư duy tốt. Mặc dù nhu cầu của cuộc sống hằng ngày đã luôn đòi hỏi chúng ta phải có tư duy tốt, nhưng chúng ta thậm chí còn phải tư duy tốt hơn nữa khi các nhu cầu và cơ hội ngày càng trở nên phức tạp trong tương lai.\r\n \r\nChính vì vậy, tư duy tốt là yếu tố sống còn để tồn tại, đế thành công và là yếu tố cạnh tranh trong công việc cũng như trong cuộc sống hằng ngày.', '2018-03-21 12:30:01', '2018-03-21 12:30:01'),
(24, 20, 'Để luôn đạt điểm 10', '50000', '85000', 30, 250, 'Mềm', 'http://skybooks.test/images/giaoduc-4.jpg', 'images/giaoduc-4.jpg', 'Gordon ', 'Bộ sách ĐỂ LUÔN ĐẠT ĐIỂM 10 dành cho các bạn 9-15 tuổi – Bí kíp nắm vững kiến thức của siêu học sinh sẽ cùng các bạn nhỏ củng cố kiến thức đã học, đồng thời giúp khám phá những điều mới mẻ qua những câu chuyện đầy vui nhộn và thú vị.\r\n\r\nĐôi khi chúng ta sẽ thắc mắc rằng:\r\n\r\nCó phải mọi con cua đều bò ngang? Câu trả lời sẽ có trong cuốn Sự sống và môi trường – Bí kíp nắm vững kiến thức Sinh học.\r\nSố 0,999... có nhỏ hơn số 1? Hãy tìm hiểu trong cuốn Toán và những con số kỳ diệu – Bí kíp nắm vững kiến thức Toán học nhé!\r\nLàm thế nào để tách muối khỏi cát sau khi chúng được trộn lẫn? – Cuốn Vô vàn vật chất – Bí kíp nắm vững kiến thức Hóa học sẽ giải đáp điều này cho các bạn nhỏ.\r\nChúng ta có thể tạo ra một cục nam châm từ một cái đinh không? – Mẹo hay sẽ có trong cuốn Chuyển động và năng lượng – Bí kíp nắm vững kiến thức Vật lý.\r\nCác địa tầng của Trái đất hình thành như thế nào? – Bạn nhỏ sẽ có câu trả lời trong cuốn Trái đất và vũ trụ – Bí kíp nắm vững kiến thức Khoa học.\r\nĐồng thời, mỗi ', '2018-03-21 12:42:11', '2018-03-21 12:42:11'),
(25, 20, 'Học khôn ngoan mà không gian nan', '135000', '185000', 40, 300, 'Cứng', 'http://skybooks.test/images/giaoduc-5.jpg', 'images/giaoduc-5.jpg', 'Kenvin Paul', 'Hãy tự tin để trở thành người có kỹ năng học tập siêu việt như bạn hằng mong muốn.\nHọc khôn ngoan mà không gian nan chỉ cho bạn cách học - kỹ năng giá trị nhất mà có thể bây giờ bạn mới biết. Ở trường hay ở nơi làm việc, chúng ta luôn được thử thách làm sao để đạt được những ý tưởng và kỹ năng mới, cũng như loại bỏ những kiến thức đã lỗi thời.\nHãy làm chủ bảy yếu tố cơ bản của việc hoàn thành các kỹ năng học tập mà cuốn sách này trình bày, bạn có thể khơi dậy tối đa khả năng tiềm tàng của bản thân và gia tăng năng lực học tập. Học khôn ngoan mà không gian nan bóc trần rất nhiều điều hoang tưởng liên quan đến kỹ năng học tập. Các bài tập thực hành trong cuốn sách này có ích tức thì, khiến cho việc học tập hiệu quả và không gây tổn hại.\nCuốn sách sẽ giúp bạn đạt được những mục tiêu mà bạn đề ra như: vượt qua kỳ thi, tham gia khoá học cấp tốc hay một chương trình cấp chứng chỉ hoặc một khoá học nâng cao kỹ năng chuyên môn. Bạn sẽ tìm thấy lời giải đáp cho rất nhiều câu hỏi:\n- Làm thế ', '2018-03-21 12:45:03', '2018-03-21 12:45:03'),
(26, 20, 'Học đâu nhớ đó', '50000', '105000', 10, 215, 'Cứng', 'http://skybooks.test/images/giaoduc-8.jpg', 'images/giaoduc-8.jpg', 'Peter', 'Hãy tự tin để trở thành người có kỹ năng học tập siêu việt như bạn hằng mong muốn.\nHọc khôn ngoan mà không gian nan chỉ cho bạn cách học - kỹ năng giá trị nhất mà có thể bây giờ bạn mới biết. Ở trường hay ở nơi làm việc, chúng ta luôn được thử thách làm sao để đạt được những ý tưởng và kỹ năng mới, cũng như loại bỏ những kiến thức đã lỗi thời.\nHãy làm chủ bảy yếu tố cơ bản của việc hoàn thành các kỹ năng học tập mà cuốn sách này trình bày, bạn có thể khơi dậy tối đa khả năng tiềm tàng của bản thân và gia tăng năng lực học tập. Học khôn ngoan mà không gian nan bóc trần rất nhiều điều hoang tưởng liên quan đến kỹ năng học tập. Các bài tập thực hành trong cuốn sách này có ích tức thì, khiến cho việc học tập hiệu quả và không gây tổn hại.\nCuốn sách sẽ giúp bạn đạt được những mục tiêu mà bạn đề ra như: vượt qua kỳ thi, tham gia khoá học cấp tốc hay một chương trình cấp chứng chỉ hoặc một khoá học nâng cao kỹ năng chuyên môn. Bạn sẽ tìm thấy lời giải đáp cho rất nhiều câu hỏi:\n- Làm thế ', '2018-05-09 23:09:17', '2018-05-09 23:09:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_catalog`
--

CREATE TABLE `product_catalog` (
  `catalog_id` int(11) NOT NULL,
  `catalog_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_catalog`
--

INSERT INTO `product_catalog` (`catalog_id`, `catalog_name`, `created_at`, `update_at`) VALUES
(7, 'Truyện', '2018-02-27 20:36:58', '2018-02-27 20:36:58'),
(16, 'Khoa học', '2018-03-07 02:09:39', '2018-03-07 02:09:39'),
(17, 'Kinh tế', '2018-03-07 02:12:15', '2018-03-07 02:12:15'),
(18, 'Chính trị', '2018-03-07 02:12:51', '2018-03-07 02:12:51'),
(19, 'Nấu ăn', '2018-03-20 09:37:15', '2018-03-20 09:37:15'),
(20, 'Giáo dục', '2018-03-20 09:37:53', '2018-03-20 09:37:53'),
(21, 'Lịch sử', '2018-03-20 09:38:45', '2018-03-20 09:38:45'),
(22, 'Tâm lí', '2018-03-20 09:39:22', '2018-03-20 09:39:22'),
(23, 'Tâm linh', '2018-03-20 09:39:43', '2018-03-20 09:39:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `value` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `warehouse`
--

CREATE TABLE `warehouse` (
  `wh_id` int(11) NOT NULL,
  `wh_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `warehouse`
--

INSERT INTO `warehouse` (`wh_id`, `wh_name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Kho 1', 'Hà Nội', '2018-04-16 08:00:54', '0000-00-00 00:00:00'),
(2, 'Kho 2', 'Thừa Thiên Huế', '2018-04-16 08:02:13', '2018-04-16 08:02:13'),
(3, 'Kho 3', 'Hồ Chí Minh', '2018-05-16 00:00:00', '2018-05-16 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acounts`
--
ALTER TABLE `acounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `fk_bill` (`district_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_comment_acounts` (`user_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`detail_bill_id`),
  ADD KEY `fk_detailbill_product` (`product_id`);

--
-- Chỉ mục cho bảng `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Chỉ mục cho bảng `manage_warehouse`
--
ALTER TABLE `manage_warehouse`
  ADD PRIMARY KEY (`manage_wh_id`),
  ADD KEY `fk_warehouse` (`wh_id`),
  ADD KEY `fk_manage_product` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product` (`catalog_id`);

--
-- Chỉ mục cho bảng `product_catalog`
--
ALTER TABLE `product_catalog`
  ADD PRIMARY KEY (`catalog_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`wh_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acounts`
--
ALTER TABLE `acounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  MODIFY `detail_bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT cho bảng `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '1-25: Tỉnh miền Bắc, 26-44:Tỉnh miền Trung, 45-63: Tỉnh miền Nam', AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT cho bảng `manage_warehouse`
--
ALTER TABLE `manage_warehouse`
  MODIFY `manage_wh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT cho bảng `product_catalog`
--
ALTER TABLE `product_catalog`
  MODIFY `catalog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `wh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_acounts` FOREIGN KEY (`user_id`) REFERENCES `acounts` (`user_id`);

--
-- Các ràng buộc cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD CONSTRAINT `fk_detailbill_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Các ràng buộc cho bảng `manage_warehouse`
--
ALTER TABLE `manage_warehouse`
  ADD CONSTRAINT `fk_manage_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `fk_warehouse` FOREIGN KEY (`wh_id`) REFERENCES `warehouse` (`wh_id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`catalog_id`) REFERENCES `product_catalog` (`catalog_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
