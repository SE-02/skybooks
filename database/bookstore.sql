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

CREATE TABLE `users` (
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
-- Cấu trúc bảng cho bảng `product_catalog`
--

CREATE TABLE `product_catalog` (
  `catalog_id` int(11) NOT NULL,
  `catalog_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
