-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2022 lúc 03:22 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `user_id` int(5) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `permission` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `catalog_id` int(5) NOT NULL,
  `name_catalog` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`catalog_id`, `name_catalog`) VALUES
(1, 'MANS6'),
(2, ''),
(8, 'man');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id_cthd` int(5) NOT NULL,
  `name_product` varchar(100) DEFAULT NULL,
  `amounts` int(20) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `id_product` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `invoice_details`
--

INSERT INTO `invoice_details` (`id_cthd`, `name_product`, `amounts`, `price`, `id_product`) VALUES
(1, 'Womens burnt orange casual tee', 600, 46, 'SP02'),
(3, 'Womens burnt orange casual tee', 600, 46, 'SP02'),
(6, 'Womens burnt orange casual tee', 600, 46, 'SP02'),
(8, 'Womens burnt orange casual tee', 600, 46, 'SP02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` int(5) NOT NULL,
  `name_post` varchar(150) DEFAULT NULL,
  `infor_post` mediumtext DEFAULT NULL,
  `image_post` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `name_post`, `infor_post`, `image_post`) VALUES
(1, 'HAND DESIGNED', 'Praesent feugiat malesuada tristique maecenas rhoncus diam eget quam vestibulim consectetur, id condimentum leo porttitor. Cum sociis natoque penatibus eta magnis disut parturient montes, nascetur ridiculus mus. Donec sem lorem laoreet tempor un risus vitae, rutrum sodales nibh suspendisse congue metus nunc, id viverra elit loreti rhoncus quis consecteur es. Donec pulvinar tempor lorem a pretium justo interdum.', 'thebrand_content_image1.png'),
(2, 'OUR VALUES, VISION AND STRATEGY', 'Cras maximus venenatis malesuada. Nulla sagittis elit felis, ac facilisis quam ornare aliquam. Etiam cursus odio vitae dui dignissim, sed tempus lacus tincidunt et donec sapien velit, rhoncus eu nulla a, molestie tempus mi maecenas sagittis ornare. Pellentesque sapien mi, tincidunt nec magna vitae, volutpat elementum odioni lorem Aliquam tempor massa vitae augue mattis tempor id in ante ut augue erat, luctus eil.', 'thebrand_content_image2.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` varchar(5) NOT NULL,
  `name_product` varchar(100) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `amounts` int(20) DEFAULT NULL,
  `desciption` mediumtext DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `sale` int(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `image_list` varchar(1000) DEFAULT NULL,
  `catalog_id` int(5) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `amounts`, `desciption`, `color`, `size`, `status`, `sale`, `image`, `image_list`, `catalog_id`, `notes`) VALUES
('SP02', 'Womens burnt orange casual tee', 46, 655, 'Classic casual t-shirt for women on the move.100% cotton.Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.<br><br>Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'popular', 50, 'home_item2.png', 'home_item2.png,home_item3.png,home_item5.png', 1, 'favorite'),
('SP07', 'Womens burnt orange casual tee', 79, 489, 'Classic casual t-shirt for women on the move.100% cotton.Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.<br><br>Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'best sellers', 0, 'home_item1.png', 'home_item2.png,home_item3.png,home_item5.png', 1, 'favorite'),
('SP08', 'Womens burnt orange casual tee', 79, 456, 'Classic casual t-shirt for women on the move.100% cotton.Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.<br><br>Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'best sellers', 30, 'home_item1.png', 'home_item2.png,home_item3.png,home_item5.png', 1, 'favorite'),
('SP10', 'Womens burnt orange casual tee', 46, 0, 'Classic casual t-shirt for women on the move.100% cotton.Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.<br><br>Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'special offers', 50, 'home_item2.png', 'home_item2.png,home_item3.png,home_item5.png', 1, ''),
('SP11', 'Womens burnt orange casual tee', 79, 456, 'Classic casual t-shirt for women on the move.100% cotton.Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.<br><br>Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'special offers', 30, 'home_item5.png', 'home_item2.png,home_item3.png,home_item5.png', 1, ''),
('SP12', 'Womens burnt orange casual tee £29.95', 79, 456, 'Classic casual t-shirt for women on the move.100% cotton.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'special offers', 30, 'home_item1.png', 'home_item2.png,home_item3.png,home_item5.png', 1, ''),
('SP13', 'Womens burnt orange casual tee £29.95', 30, 207, 'Classic casual t-shirt for women on the move.100% cotton.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'comming soon', 30, 'home_item1.png', 'home_item1.png,home_item2.png,home_item4.png', 1, ''),
('SP14', 'Womens burnt orange casual tee', 79, 456, 'Classic casual t-shirt for women on the move.100% cotton.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'comming soon', 30, 'home_item2.png', 'home_item2.png,home_item3.png,home_item5.png', 1, ''),
('SP15', 'Womens burnt orange casual tee', 46, 600, 'Classic casual t-shirt for women on the move.100% cotton.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'comming soon', 50, 'home_item2.png', 'home_item2.png,home_item3.png,home_item5.png', 1, ''),
('SP16', 'Womens burnt orange casual tee', 46, 600, 'Classic casual t-shirt for women on the move.100% cotton.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'comming soon', 50, 'home_item2.png', 'home_item2.png,home_item3.png,home_item5.png', 1, ''),
('SP17', 'Womens burnt orange casual tee £29.95', 30, 207, 'Classic casual t-shirt for women on the move.100% cotton.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'comming soon', 30, 'home_item1.png', 'home_item1.png,home_item2.png,home_item4.png', 1, ''),
('SP18', 'Womens burnt orange casual tee', 46, 600, 'Classic casual t-shirt for women on the move.100% cotton.Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.<br><br>Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'popular', 50, 'home_item2.png', 'home_item2.png,home_item3.png,home_item5.png', 1, 'favorite'),
('SP19', 'Womens burnt orange casual tee', 79, 456, 'Classic casual t-shirt for women on the move.100% cotton.Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.<br><br>Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'best sellers', 30, 'home_item1.png', 'home_item2.png,home_item3.png,home_item5.png', 1, 'favorite'),
('SP20', 'Womens burnt orange casual tee', 46, 600, 'Classic casual t-shirt for women on the move.100% cotton.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'comming soon', 50, 'home_item2.png', 'home_item2.png,home_item3.png,home_item5.png', 1, ''),
('SP21', 'Womens burnt orange casual tee', 79, 456, 'Classic casual t-shirt for women on the move.100% cotton.Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.<br><br>Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.', 'red,green,blue', 'X,L,XL,XXL,XXXL', 'best sellers', 30, 'home_item1.png', 'home_item2.png,home_item3.png,home_item5.png', 1, 'favorite');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id_tst` int(5) NOT NULL,
  `user_id` int(5) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `phonenumber` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `total_price` int(30) DEFAULT NULL,
  `id_cthd` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`catalog_id`);

--
-- Chỉ mục cho bảng `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id_cthd`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `catalog_id` (`catalog_id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_tst`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id_cthd` (`id_cthd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id_cthd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_tst` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`catalog_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `admin` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`id_cthd`) REFERENCES `invoice_details` (`id_cthd`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
