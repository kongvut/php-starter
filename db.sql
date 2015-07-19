-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2015 at 04:52 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `starterphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `ref_content_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `by_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `by_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createtime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `ref_content_id`, `comment`, `by_name`, `by_email`, `createtime`) VALUES
(1, 1, 'ทดสอบแสดงความคิดเห็น 1', 'kongvut', '', '2015-07-18 00:00:00'),
(2, 1, 'ทดสอบแสดงความคิดเห็น 1-1', 'kongvut', '', '2015-07-18 00:00:00'),
(3, 2, 'ทดสอบแสดงความคิดเห็น 2', 'kongvut', '', '2015-07-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createby` int(11) NOT NULL,
  `createtime` datetime NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `total_read` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`id`, `title`, `createby`, `createtime`, `content`, `total_read`) VALUES
(1, 'ทดสอบหัวข้อที่ 1', 1, '2015-07-18 00:00:00', 'เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1 เนื้อหาหัวข้อที่ 1', 0),
(2, 'ทดสอบหัวข้อที่ 2', 1, '2015-07-18 00:00:00', 'เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2 เนื้อหาหัวข้อที่ 2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user`, `pass`, `email`) VALUES
(1, 'kongvut', '1234', 'kongvut@kkumail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
