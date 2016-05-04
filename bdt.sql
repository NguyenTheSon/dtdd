-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2016 at 04:34 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhsp`
--

CREATE TABLE `anhsp` (
  `id` int(10) UNSIGNED NOT NULL,
  `san_pham_id` int(10) UNSIGNED NOT NULL,
  `anh` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anhsp`
--

INSERT INTO `anhsp` (`id`, `san_pham_id`, `anh`, `created_at`, `updated_at`) VALUES
(72, 7, '1462162043iphone-5s-16gb-h1-600x451.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 7, '1462162043iphone-5s-16gb-h2-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 7, '1462162043iphone-5s-16gb-h3-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 7, '1462163749iphone-5s-16gb-h4-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 8, '1462285384nokia-lumia-1520-h1-600x451.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 8, '1462285384nokia-lumia-1520-h2-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 8, '1462285384nokia-lumia-1520-h3-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 8, '1462285384nokia-lumia-1520-h4-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 9, '1462289244samsung-galaxy-s5-h1-650x489.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 9, '1462289245samsung-galaxy-s5-h2-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 9, '1462289245samsung-galaxy-s5-h3-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 9, '1462289245samsung-galaxy-s5-h4-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 10, '1462291737iphone-6-128gb-h1-650x489.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 10, '1462291737iphone-6-128gb-h2-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 10, '1462291737iphone-6-128gb-h3-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 10, '1462291737iphone-6-128gb-h4-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 11, '1462292141iphone-6-plus-128gb-h1-650x489.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 11, '1462292142iphone-6-plus-128gb-h2-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 11, '1462292142iphone-6-plus-128gb-h3-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 11, '1462292142iphone-6-plus-128gb-h4-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 12, '1462292495q-smart-dream-c1-h1-650x489.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 12, '1462292496q-smart-dream-c1-h2-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 12, '1462292496q-smart-dream-c1-h3-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 12, '1462292496q-smart-dream-c1-h4-650x489.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ba_hd`
--

CREATE TABLE `ba_hd` (
  `id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ba_phieunhap`
--

CREATE TABLE `ba_phieunhap` (
  `id` int(11) NOT NULL,
  `mapn` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `mahd` int(10) UNSIGNED NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tensp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`mahd`, `masp`, `soluong`, `dongia`, `created_at`, `updated_at`, `tensp`) VALUES
(1, 7, 5, 14990000, '2016-05-02 17:28:55', '2016-05-02 17:28:55', 'IPHONE 5S 16GB'),
(2, 7, 1, 14990000, '2016-05-02 17:34:38', '2016-05-02 17:34:38', 'IPHONE 5S 16GB'),
(3, 7, 1, 14990000, '2016-05-02 17:36:22', '2016-05-02 17:36:22', 'IPHONE 5S 16GB'),
(4, 7, 1, 4000000, '2016-05-03 09:20:51', '2016-05-03 09:20:51', 'IPHONE 5S 16GB');

-- --------------------------------------------------------

--
-- Table structure for table `ct_phieunhap`
--

CREATE TABLE `ct_phieunhap` (
  `mapn` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(10) UNSIGNED NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `makh` int(10) UNSIGNED NOT NULL,
  `noidung` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `ngaylap` date NOT NULL,
  `manv` int(10) UNSIGNED NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(25) NOT NULL,
  `noinhan` varchar(255) NOT NULL,
  `tgnhan` date NOT NULL,
  `trangthai` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `ngaylap`, `manv`, `ten_kh`, `diachi`, `sdt`, `noinhan`, `tgnhan`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, '2016-05-03', 5, 'Nguyễn Thế Sơn', 'Cầu giấy1', '0968605051', 'Hà Nội', '2016-05-04', 'Đặt hàng tại webstite', '2016-05-02 17:28:55', '2016-05-02 17:28:55'),
(2, '2016-05-03', 5, 'Nguyễn Thế Sơn1', 'Cầu giấy2', '0968605051', 'Hà Nội', '2016-05-10', 'Đặt hàng tại webstite', '2016-05-02 17:34:38', '2016-05-02 17:34:38'),
(3, '2016-05-03', 5, 'Nguyễn Thế Sơn1', 'Cầu giấy1', '0000000000', 'Hà Nội', '2016-05-04', 'Đặt hàng tại webstite', '2016-05-02 17:36:22', '2016-05-02 17:36:22'),
(4, '2016-05-03', 5, 'Nguyễn Thế Sơn', 'Cầu giấy', '0975412134', 'Hà Nội', '2016-05-03', 'Đặt hàng tại webstite', '2016-05-03 09:20:51', '2016-05-03 09:20:51'),
(5, '2016-05-04', 1, 'Sơn', 'Cầu giấy', '0968605051', 'Hà Nội', '2016-05-26', 'Full box', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `daichi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id`, `name`, `thutu`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Nokia', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'SamSung', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'LG Electronic', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Sony', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'HTC', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Sky Pantech', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Oppo', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Q - Moble', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tam94dk', '$2y$10$KDuen4XExclimRia2kbiw.2d9FpCFEzbyxhSkV33aPjhDgorSNPqa', 'tam94dk@gmail.com', 0, '0MwySsrM5rfFFpgXnZ4ePMNT41HixctjXr8Kre4VyYzqQauznjYiEwZ6s5Ep', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'tam9dk1', '$2y$10$ZiS/t0DV14xyUmXCHvylLOjRE.3YcIuAjh.Xpkog4YZUgD2GkbE5G', 'tam94dk1@gmail.com', 0, 'GW1k62slRlP5hMQBO6BcIyfrn9SEKvOmlfa9vwKI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'tam94dk2', '$2y$10$THtIoDQF.4X4YT86lwrw1e/Ub4wEnnItYeUHDezCjcRJD51ECGCPy', 'tam94dk2@gmail.com', 2, 'DiS8DpLVSVBElDDeiPBkGVXUnJcRcRJZwOkVQGcOYSXHOKwf0OM1rEei8ofT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'ntamnx', '$2y$10$6yf7ufxqt86oRG1wjfXn4uUDdfsNed2eLlQDelWYstCgO1dckomNe', 'ntamnx@gmail.com', 2, '3JUrrfa9Omvdn77cDs9TLGc1hb4PtRw2504ZgmdO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'khachhang', '$2y$10$HcSl7EXC6DLKN.C2oqwwSONwvUNyUOsGDHmgG9i00b.awuzqqoZ5S', 'khachhang@gmail.com', 1, 'qmRnD1Kng8iIkjw02ZDZEAv0mJcwWFyHPvQOD1SYVf1mXbt7xBkioiDsz7EX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'TheSon', '$2y$10$eFnas/qzDcugL2wwSaeTj.cr.1MVI5R/Y7iagPTX/wQO//ZBoszqG', 'admin@gmail.com', 2, 'XsaWL88P7Ha6PtjnsNCIAalZkk8LJ3pDCXKD2GIFlEJBztahaMptgZvgQiPv', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nhacc`
--

CREATE TABLE `nhacc` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhacc`
--

INSERT INTO `nhacc` (`id`, `name`, `diachi`, `dienthoai`, `created_at`, `update_at`) VALUES
(1, 'SamSung', 'Bắc Ninh', '0968605051', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `ngaynhap` date NOT NULL,
  `mancc` int(10) UNSIGNED NOT NULL,
  `manv` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phieunhap`
--

INSERT INTO `phieunhap` (`id`, `ngaynhap`, `mancc`, `manv`, `created_at`, `updated_at`) VALUES
(1, '2016-05-04', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `phukien`
--

CREATE TABLE `phukien` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenpk` varchar(255) NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `gia` int(11) NOT NULL,
  `bao_hanh` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '0',
  `anh` varchar(255) NOT NULL,
  `mota` varchar(3000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phukien`
--

INSERT INTO `phukien` (`id`, `tenpk`, `masp`, `gia`, `bao_hanh`, `soluong`, `anh`, `mota`, `created_at`, `updated_at`) VALUES
(1, 'Tai nghe', 7, 230000, 'Tai nghe', 100, '1462293601img-slider1-100x100.png', 'Tai nghe', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sanxuat` varchar(255) NOT NULL,
  `baohanh` varchar(255) NOT NULL,
  `mau` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `mo_ta` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `maloai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `sanxuat`, `baohanh`, `mau`, `gia`, `soluong`, `anh`, `trang_thai`, `mo_ta`, `luot_xem`, `maloai`, `created_at`, `updated_at`) VALUES
(7, 'IPHONE 5S 16GB', 'Mỹ', '12 tháng', 'Đen, Trắng, Vàng', 14990000, 99, '1462204118iphone-5s-16gb-h1-270x203.png', 'Full box', ' có một thay đổi đáng ý chú nhất về bề ngoài chính là </span><strong style="box-sizing: border-box; padding: 0px; margin: 0px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">nút Home</strong><span style="color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">. Sử dụng công nghệ </span><strong style="box-sizing: border-box; padding: 0px; margin: 0px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">Touch ID</strong><span style="color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;"> nhận dạng vân tay mới, Apple đã tạo một “điểm nhấn” cần thiết trên chiếc </span><strong style="box-sizing: border-box; padding: 0px; margin: 0px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;"><a href="http://fptshop.com.vn/dien-thoai" style="box-sizing: border-box; padding: 0px; margin: 0px; text-decoration: none; color: rgb(0, 0, 0); background: transparent;" target="_blank">điện thoại</a> </strong><span style="color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">này với một vòng kim loại cùng màu với máy và bề mặt nút Home cũng phẳng hơn, tạo nên sự liền lạc và sang trọng hơn hẳn.</span></p>\r\n\r\n<p><img alt="" src="image/data/iphone/iphone-5s-16gb-h5.jpg" style="width: 800px; height: 454px;" /></p>\r\n\r\n<div style="box-sizing: border-box; padding: 0px; margin: 0px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">Một điểm khác biệt nữa chính là đèn Flash ở mặt sau bên cạnh camera của máy. 5S cải tiến đèn LED thành <strong style="box-sizing: border-box; padding: 0px; margin: 0px;">flash kép</strong> với 2 màu sắc khác nhau là trắng và vàng tạo nên độ chính xác màu cao hơn khi đánh flash, cho cảm giác chân thực hơn, không bị tình trạng nhợt màu.</div>\r\n\r\n<div style="box-sizing: border-box; padding: 0px; margin: 0px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;"> </div>\r\n\r\n<div style="box-sizing: border-box; padding: 0px; margin: 0px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">Các chi tiết còn lại cũng được hoàn thiện tương tự như trên iPhone 5 bằng công nghệ tinh xảo, các cạnh được vát xéo bóng bẩy đẹp lung linh. Mặt khác, một điểm đáng chú ý ở <strong style="box-sizing: border-box; padding: 0px; margin: 0px;">iPhone 5S</strong> nữa là về màu sắc. Máy có 3 màu là: Gold (Vàng Kim), Silver (Trắng Bạc) và Space Gray (Màu xám không gian vũ trụ). Máy vẫn giữ nguyên độ dày của iPhone 5 là 7.6mm, và trọng lượng 112g, rất thon gọn và sang trọng.</div>" >" >', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Lumia 1520', 'Hàn quốc', '12990000', 'Xám, Vàng, Đen, Đỏ', 12990000, 0, '1462285383nokia-lumia-1520-h1-270x203.png', 'Full box', '<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Màn hình 6 inch Full HD siêu nhạy,hiển thị sắc nét, màu sắc rực rỡ, không bị chói khi dùn gở ngoài trời và cảm ứng chính xác dù bạn đang đeo găng tay</span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;"><img alt="" src="image/data/lumia/nokia-lumia-1520-h3.jpg" /></span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Máy được trang bị vi xử lý 4 nhân, tốc độ cao 2.2 GHz, chạy mượt mà các game đồ hoạ cao mang đến những trải nghiệm thú vị</span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Hệ điều hành Windows Phone 8 cập nhật tin tức mới nhất ở các ô Live Titles và tích hợp sẵn ứng dụng MS Office giúp bạn làm việc tiện lợi khi không có máy tính</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'SAMSUNG GALAXY S5 G900', 'Hàn quốc', '11999000', 'Đen, Trắng', 11999000, 0, '1462289244samsung-galaxy-s5-h1-270x203.png', 'Full box', '<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Thiết kế sang trọng và hiện đại với mặt lưng họa tiết vân lỗ bắt mắt, chống xước, chống bám dấu vân tay hiệu quả.</span></p>\n\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;"><img alt="" src="image/data/samsung/samsung-galaxy-s5-h3.jpg" /></span></p>\n\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Camera 16 MP lấy nét cực nhanh giúp ảnh có độ nét cao cùng nhiều tùy chỉnh cho màu sắc trung thực, ấn tượng và giàu cảm xúc. &nbsp;</span></p>\n\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Màn hình 5.1 inch Full HD công nghệ Super AMOLED có màu sắc tươi sáng, rực rỡ, hiển thị rõ nét khi dùng ngoài trời.&nbsp;</span></p>\n\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Thiết kế nắp đậy các cổng kết nối giúp máy chống bụi và nước giúp S5 bền bỉ trong điều kiện sử dụng dưới mua, làm đổ chất lỏng lên máy…</span></p>\n\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Kết nối WiFi nhanh gấp đôi nhờ chuẩn kết nối mới và công nghệ MIMO hiện đại giúp bạn xem phim, đăng tải, chia sẻ mạng xã hội nhanh chóng.</span></p>', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'IPHONE 6 128GB', 'Nhật Bản', '22900000', 'Trắng , Đen', 22900000, 0, '1462291737iphone-6-128gb-h1-270x203.png', 'Full box', '<p><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">Hai siêu phẩm đáng mong chờ nhất năm 2014 đã chính thức ra mắt:&nbsp;</span><strong style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;"><a href="http://www.vienthonga.vn/iphone-6.html" style="color: blue; text-decoration: none;">iPhone 6</a></strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">&nbsp;và&nbsp;</span><strong style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;"><a href="http://www.vienthonga.vn/iphone-6-plus.html" style="color: blue; text-decoration: none;">iPhone 6 Plus</a></strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">. Sở hữu màn hình Retina HD siêu nét, vi xử lý Apple A8 mạnh mẽ cùng hệ điều hành iOS8 mới nhất,&nbsp;</span><strong style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">iPhone 6</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">&nbsp;đã phần nào "khớp" với những lời đồn đoán trước đó và làm mãn nhãn các “fan táo” trên khắp thế giới.</span></p>\r\n\r\n<p><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;"><img alt="" src="image/data/iphone/iphone-6-128gb-h5.jpg" /></span></p>\r\n\r\n<p style="font-family: ''Open Sans'', Arial, sans-serif; margin: 0px 0px 24px; font-size: 15px; line-height: 19.5px; text-align: justify;">Cụm máy ảnh sau của&nbsp;<strong>iPhone 6</strong>&nbsp;có độ phân giải như cũ là 8.0 MP 3264 x 2448 pixels, đèn flash dual LED. Dù không được nâng cấp độ phân giải nhưng máy ảnh của&nbsp;<strong>iPhone 6</strong>&nbsp;vẫn hoạt động hiệu quả hơn nhờ được cải tiến ở khả năng ổn định hình ảnh kỹ thuật số.</p>\r\n\r\n<p><strong style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">iPhone 6</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">&nbsp;hoạt động với chip Apple A8 lõi kép tốc độ 1.4 GHz theo công nghệ điện toán 64-bit, bộ nhớ RAM 1GB, bộ nhớ trong 128GB không có khe cắm thẻ microSD bên ngoài, chip đồ họa PowerVR GX6650. Vi xử lý 64-bit sẽ đem lại hiệu suất hoạt động&nbsp;</span><strong style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">nhanh hơn iPhone đầu tiên 50 lần và 84 lần về xử lý đồ hoạ</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">.</span></p>\r\n\r\n<p><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">Pin Li-Po (không tháo rời) của&nbsp;</span><strong style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">iPhone 6</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">&nbsp;có dung lượng thấp hơn&nbsp; so với&nbsp;</span><strong style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">iPhone 6 Plus&nbsp;1810 mAh</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">, cho thời gian chờ trong 10 ngày, thời gian nghe nhạc tối đa 50 giờ, 11 giờ xem video và 10-11 giờ dùng Internet.</span><strong style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">&nbsp;iPhone 6</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">&nbsp;chạy hệ điều hành iOS8 mới nhất, trình duyệt HTML (Safari).&nbsp;</span><strong style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">iphone 6</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 15px; line-height: 19.5px; text-align: justify;">&nbsp;có các cảm biến: gia tốc, con quay hồi chuyển, khoảng cách, la bàn, thước đo...</span></p>', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'IPHONE 6 PLUS 128GB', 'Mỹ', '12 tháng', 'Đen, Trắng, Xám', 25990000, 0, '1462292141iphone-6-plus-128gb-h1-270x203.png', 'Full box', '<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Cuộc cách tân lớn nhất trong lịch sử iPhone với màn hình 5.5 inch, 4 góc bo tròn và mặt kính mài tinh xảo, dễ dàng cầm nắm thao tác sản phẩm hơn.</span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Màn hình Retina, độ phân giải Full HD, cấu hình mạnh mẽ, chip A8-64 bit cho trải nghiệm xem phim, chơi game duyệt web hấp dẫn và thoải mái.</span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;"><img alt="" src="image/data/iphone/iphone-6-plus-128gb-h5.jpg" /></span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Giao diện, bàn phím ảo nằm ngang như trên iPad giúp bạn thao tác, soạn văn bản dễ dàng như trên một chiếc tablet.</span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Camera lồi 8 MP, camera trước 1.2 MP cùng nhiều cải tiến công nghệ, tính năng chống rung quang học giúp ảnh sắc nét căng, màu sắc trung thực giàu chi tiết.</span></p>\r\n', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Q-SMART DREAM C1', 'Trung quốc', '24 tháng', 'Đen, Trắng', 2790000, 0, '1462292495q-smart-dream-c1-h1-270x203.png', 'Full box', '<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Nổi bật với các đường nét khỏe khoắn, viền giả kim loại ôm trọn bốn cạnh vuông vức của máy. Máy nhẹ, mỏng cho cảm giác cầm rất thoải mái trong lòng bàn tay</span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;"><img alt="" src="image/data/qmobile/q-smart-dream-c1-h4.jpg" /></span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Màn hình 4.5 inch hiển thị các chi tiết và màu sắc phong phú, hài hòa. Độ sáng cao giúp bạn dùng máy ngoài trời dễ dàng</span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">Trang bị chip lõi tứ tốc độ 1.2GHz, sản phẩm hoàn toàn có thể đáp ứng được các ứng dụng, game &nbsp;lướt web với nhiều tab và việc chạy đa nhiệm tốc độ cao</span></p>\r\n\r\n<p><span style="font-family: Helvetica, Arial, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 15px; line-height: 25px;">2 SIM 2 sóng giúp bạn liên lạc và kết nối 3G tiết kiệm hơn</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 0, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `time_click`
--

CREATE TABLE `time_click` (
  `id` int(11) NOT NULL,
  `time_click` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time_click`
--

INSERT INTO `time_click` (`id`, `time_click`) VALUES
(1, '2016-05-02 17:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `tinhnang`
--

CREATE TABLE `tinhnang` (
  `id` int(10) UNSIGNED NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `manhinh` text NOT NULL,
  `camera_sau` text NOT NULL,
  `camera_truoc` text NOT NULL,
  `hedieuhanh_CPU` text NOT NULL,
  `bonho_luutru` text NOT NULL,
  `ketnoi` text NOT NULL,
  `thietke_trongluong` text NOT NULL,
  `thongtin_pin` text NOT NULL,
  `giaitri_ungdung` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tinhnang`
--

INSERT INTO `tinhnang` (`id`, `masp`, `manhinh`, `camera_sau`, `camera_truoc`, `hedieuhanh_CPU`, `bonho_luutru`, `ketnoi`, `thietke_trongluong`, `thongtin_pin`, `giaitri_ungdung`, `created_at`, `update_at`) VALUES
(5, 7, '<tr>\n<td>Công nghệ màn hình</td> \n<td>LED-backlit IPS LCD</td>\n</tr>\n<tr>\n<td>Độ phân giải</td>\n<td>640 x 1136 pixels</td>\n</tr>\n<tr>\n<td>Màn hình rộng</td>\n<td>4"</td>\n</tr>\n<tr>\n<td>Cảm ứng</td>\n<td>Cảm ứng điện dung đa điểm</td>\n</tr>\n<tr>\n<td>Mặt kính cảm ứng</td>\n<td>Kính cường lực Gorilla Glass</td>\n</tr>', '<tr> <td>Độ phân giải</td>  <td>8 MP</td> </tr> <tr> <td>Quay phim</td> <td>Quay phim FullHD 1080p@30fps</td> </tr> <tr> <td>Đèn Flash</td> <td>Có</td> </tr> <tr> <td>Chụp ảnh nâng cao</td> <td>Tự động lấy nét, Chạm lấy nét, Nhận diện khuôn mặt, Nhận diện nụ cười, HDR, Panorama</td></tr>', '<tr> <td>Độ phân giải</td>  <td>1.2 MP</td> </tr> <tr> <td>Quay phim</td> <td>Có</td> </tr> <tr> <td>Videocall</td> <td>Có</td> </tr> <tr> <td>Thông tin khác</td> <td>Chống rung, Tự động cân bằng sáng</td> </tr>', '<tr>\n<td>Hệ điều hành</td> \n<td>iOS 9</td>\n</tr>\n<tr>\n<td>Chipset (hãng SX CPU)</td>\n<td>Apple A7 2 nhân 64-bit</td>\n</tr>\n<tr>\n<td>Tốc độ CPU</td>\n<td>1.3 GHz</td>\n</tr>\n<tr>\n<td>Chip đồ họa (GPU)</td>\n<td>PowerVR G6430</td>\n</tr>', '<tr>\n<td>RAM</td> \n<td>1 GB</td>\n</tr>\n<tr>\n<td>Bộ nhớ trong (ROM)</td>\n<td>16 GB</td>\n</tr>\n<tr>\n<td>Bộ nhớ còn lại (khả dụng)</td>\n<td>12.5 GB</td>\n</tr>\n<tr>\n<td>Thẻ nhớ ngoài</td>\n<td>Không</td>\n</tr>\n<tr>\n<td>Hỗ trợ thẻ tối đa</td>\n<td>Không</td>\n</tr>', '<tr>\n<td>Băng tần 2G</td> \n<td>GSM 850/900/1800/1900</td>\n</tr>\n<tr>\n<td>Băng tần 3G</td>\n<td>HSDPA 850/900/1700/1900/2100, LTE</td>\n</tr>\n<tr>\n<td>Hỗ trợ 4G</td>\n<td>4G LTE Cat 4</td>\n</tr>\n<tr>\n<td>Số khe sim</td>\n<td>1 Sim</td>\n</tr>\n<tr>\n<td>Loại Sim</td>\n<td>Nano SIM</td>\n</tr>\n<tr>\n<td>Wifi</td>\n<td>Wi-Fi Direct, Wi-Fi hotspot</td>\n</tr>\n<tr>\n<td>GPS</td>\n<td>A-GPS, GLONASS</td>\n</tr>\n<tr>\n<td>Bluetooth</td>\n<td>V4.0</td>\n</tr>\n<tr>\n<td>NFC</td>\n<td>Không</td>\n</tr>\n<tr>\n<td>Cổng kết nối/sạc</td>\n<td>Lightning</td>\n</tr>\n<tr>\n<td>Jack tai nghe</td>\n<td>3.5 mm</td>\n</tr>\n<tr>\n<td>Kết nối khác</td>\n<td>Không</td>\n</tr>', '<tr> <td>Thiết kế</td>  <td>Nguyên khối</td> </tr> <tr> <td>Chất liệu</td> <td>Hợp kim nhôm</td> </tr> <tr> <td>Kích thước</td> <td>Dài 123.8 mm - Ngang 58.6 mm - Dày 7.6 mm\n</td> </tr> <tr> <td>Trọng lượng</td> <td>112 g</td> </tr>', '<tr> <td>Dung lượng pin</td>  <td>1560 mAh</td> </tr> <tr> <td>Loại pin</td> <td>Pin chuẩn Li-Ion</td> </tr>', '<tr> <td>Xem phim</td>  <td>MP4, WMV, H.263, H.264(MPEG4-AVC)</td> </tr> <tr> <td>Nghe nhạc</td> <td>MP3, WAV, WMA, eAAC+</td> </tr> <tr> <td>Ghi âm</td> <td>Có</td> </tr> <tr> <td>Radio</td> <td>Không</td> </tr> <tr> <td>Chức năng khác</td> <td>Mở khóa bằng vân tay</td> </tr>', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 8, '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 9, '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 10, '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '<tr>\r\n<td>Công nghệ màn hình</td> \r\n<td>LED-backlit IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td>Độ phân giải</td>\r\n<td>640 x 1136 pixels</td>\r\n</tr>\r\n<tr>\r\n<td>Màn hình rộng</td>\r\n<td>4"</td>\r\n</tr>\r\n<tr>\r\n<td>Cảm ứng</td>\r\n<td>Cảm ứng điện dung đa điểm</td>\r\n</tr>\r\n<tr>\r\n<td>Mặt kính cảm ứng</td>\r\n<td>Kính cường lực Gorilla Glass</td>\r\n</tr>', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(500) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `anh`, `mota`, `noidung`, `luot_xem`, `created_at`, `updated_at`) VALUES
(1, 'Tablet v?i hai m?n h?nh c?a Samsung gi?m gi?', '2016/3/26/1458966048anh.jpg', 'M?u laptop ki?m tablet v?i hai m?n h?nh m? Samsung trung b?y t?i tri?n l?m IFA 2012 c? thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d?o c?a prototype (nguy?n m?u) n?y l? t?ch h?p th?m m?t m?n h?nh th? hai nam tr?n n?p v?.', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\n\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\n\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.</span></p>\n', 6, '0000-00-00 00:00:00', '2016-03-26 05:52:58'),
(3, 'Iphone 6s v?i hai m?n h?nh c?a Samsung gi?m gi?', '2016/3/26/1458969952dien-thoai-samsung-galaxy-grand-prime-g530-8gb.jpg', 'M?u laptop ki?m tablet v?i hai m?n h?nh m? Samsung trung b?y t?i tri?n l?m IFA 2012 c? thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d?o c?a prototype (nguy?n m?u) n?y l? t?ch h?p th?m m?t m?n h?nh th? hai nam tr?n n?p v?. ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.</span></p>\r\n', 2, '2016-03-26 05:25:52', '2016-05-02 16:56:28'),
(4, 'Iphone 7s v?i hai m?n h?nh c?a Samsung gi?m gi?', '2016/3/26/1458971333asus-zenfone-c-533-400x533.png', 'M?u laptop ki?m tablet v?i hai m?n h?nh m? Samsung trung b?y t?i tri?n l?m IFA 2012 c? thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d?o c?a prototype (nguy?n m?u) n?y l? t?ch h?p th?m m?t m?n h?nh th? hai nam tr?n n?p v?. ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/5.png" style="height:445px; width:430px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.</span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px"><img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/2.png" style="height:420px; width:620px" /></span></p>\r\n', 0, '2016-03-26 05:48:53', '2016-03-26 05:48:53'),
(5, 'Galaxy s8 m?i ra m?t g?y s?t c?ng d?ng m?ng', '2016/3/26/1458971452dien-thoai-samsung-galaxy-s3-mini-i8190-8gb_360.jpg', 'M?u laptop ki?m tablet v?i hai m?n h?nh m? Samsung trung b?y t?i tri?n l?m IFA 2012 c? thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d?o c?a prototype (nguy?n m?u) n?y l? t?ch h?p th?m m?t m?n h?nh th? hai nam tr?n n?p v?. ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/5.png" style="height:445px; width:430px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.</span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px"><img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/2.png" style="height:420px; width:620px" /></span></p>\r\n', 1, '2016-03-26 05:50:52', '2016-03-27 01:35:22'),
(6, 'Iphone 8s v?i hai m?n h?nh c?a Samsung gi?m gi?', '2016/3/26/1458971511article-0-0000BF3300000CB2-664_306x432.jpg', 'M?u laptop ki?m tablet v?i hai m?n h?nh m? Samsung trung b?y t?i tri?n l?m IFA 2012 c? thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d?o c?a prototype (nguy?n m?u) n?y l? t?ch h?p th?m m?t m?n h?nh th? hai nam tr?n n?p v?.  ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/5.png" style="height:445px; width:430px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.</span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px"><img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/2.png" style="height:420px; width:620px" /></span></p>\r\n', 1, '2016-03-26 05:51:51', '2016-03-27 01:35:13'),
(7, 'Iphone 7s v?i hai m?n h?nh c?a Samsung', '2016/3/26/1458971565images (1).jpg', 'M?u laptop ki?m tablet v?i hai m?n h?nh m? Samsung trung b?y t?i tri?n l?m IFA 2012 c? thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d?o c?a prototype (nguy?n m?u) n?y l? t?ch h?p th?m m?t m?n h?nh th? hai nam tr?n n?p v?.  ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/5.png" style="height:445px; width:430px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">M?u laptop ki&ecirc;m tablet v?i hai m&agrave;n h&igrave;nh m&agrave; Samsung trung b&agrave;y t?i tri?n l&atilde;m IFA 2012 c&oacute; thi?t k? g?n gi?ng ASUS Taichi. ?i?m d?c d&aacute;o c?a prototype (nguy&ecirc;n m?u) n&agrave;y l&agrave; t&iacute;ch h?p th&ecirc;m m?t m&agrave;n h&igrave;nh th? hai nam tr&ecirc;n n?p v?.</span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px"><img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/2.png" style="height:420px; width:620px" /></span></p>\r\n', 0, '2016-03-26 05:52:45', '2016-03-26 05:52:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masp` (`san_pham_id`),
  ADD KEY `san_pham_id` (`san_pham_id`);

--
-- Indexes for table `ba_hd`
--
ALTER TABLE `ba_hd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ba_phieunhap`
--
ALTER TABLE `ba_phieunhap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`mahd`,`masp`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `ct_phieunhap`
--
ALTER TABLE `ct_phieunhap`
  ADD PRIMARY KEY (`mapn`,`id`),
  ADD KEY `san_pham_id` (`id`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masp` (`masp`),
  ADD KEY `makh` (`makh`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manv` (`manv`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tensp` (`name`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `nhacc`
--
ALTER TABLE `nhacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manv` (`manv`),
  ADD KEY `mancc` (`mancc`);

--
-- Indexes for table `phukien`
--
ALTER TABLE `phukien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `maloai` (`maloai`);

--
-- Indexes for table `time_click`
--
ALTER TABLE `time_click`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinhnang`
--
ALTER TABLE `tinhnang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masp_2` (`masp`),
  ADD UNIQUE KEY `masp_3` (`masp`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhsp`
--
ALTER TABLE `anhsp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nhacc`
--
ALTER TABLE `nhacc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `phukien`
--
ALTER TABLE `phukien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `time_click`
--
ALTER TABLE `time_click`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tinhnang`
--
ALTER TABLE `tinhnang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD CONSTRAINT `anhsp_ibfk_1` FOREIGN KEY (`san_pham_id`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD CONSTRAINT `ct_hoadon_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `ct_hoadon_ibfk_3` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ct_phieunhap`
--
ALTER TABLE `ct_phieunhap`
  ADD CONSTRAINT `ct_phieunhap_ibfk_2` FOREIGN KEY (`id`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `ct_phieunhap_ibfk_3` FOREIGN KEY (`mapn`) REFERENCES `phieunhap` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`manv`) REFERENCES `nguoidung` (`id`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`mancc`) REFERENCES `nhacc` (`id`),
  ADD CONSTRAINT `phieunhap_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nguoidung` (`id`);

--
-- Constraints for table `phukien`
--
ALTER TABLE `phukien`
  ADD CONSTRAINT `phukien_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaisp` (`id`);

--
-- Constraints for table `tinhnang`
--
ALTER TABLE `tinhnang`
  ADD CONSTRAINT `tinhnang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
