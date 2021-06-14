-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2021 lúc 02:18 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('admin', '123456', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `customer_sendname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_sendtel` int(15) NOT NULL,
  `customer_receivername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_receivertel` int(15) NOT NULL,
  `customer_sendadr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_receiveradr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` float NOT NULL,
  `fee` float NOT NULL,
  `datesend` date NOT NULL,
  `datereceived` date NOT NULL,
  `id` int(50) NOT NULL,
  `bill_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`customer_sendname`, `customer_sendtel`, `customer_receivername`, `customer_receivertel`, `customer_sendadr`, `customer_receiveradr`, `weight`, `fee`, `datesend`, `datereceived`, `id`, `bill_id`, `idb`) VALUES
('nguyen van a', 123456789, 'nguyen van b', 987654321, 'Việt nam', 'Hà quốc', 15, 1000000, '2021-06-01', '2021-06-08', 1, 'et20000', 1),
('number', 123, 'number', 123, 'number', 'number', 12, 123, '2021-06-08', '2021-06-10', 1, 'numberrr', 12),
('number', 123, 'number33', 12, 'number33', 'number33', 1212, 1212, '2021-06-15', '2021-06-10', 2, 'number33', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `name`, `dob`, `phonenumber`, `email`) VALUES
(1, 'admin', 'admin', 'admin', '2021-06-06', 349593356, 'admin@gmail.com'),
(2, 'test1', '123456', 'test1', '2021-06-13', 349593356, 'test1@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`idb`),
  ADD KEY `id-sale` (`id`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `idb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `id-sale` FOREIGN KEY (`id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
