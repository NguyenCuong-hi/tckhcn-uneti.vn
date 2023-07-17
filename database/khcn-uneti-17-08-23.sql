-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 05:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news-project`
--
CREATE DATABASE IF NOT EXISTS `khcn-uneti` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `khcn-uneti`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `fullname`, `email`, `url`, `image`) VALUES
(1, 'Nguyen Van Cuong', 'nvc@gmail.com', '/public/', 'public/setting/logo.png'),
(2, 'Nguyễn Đình Tú', 'nvc@gmail.com', '', ''),
(3, 'Nguyễn Đình Vượng', 'dung@gmail.com', '', ''),
(4, 'Lê Tiến Bảo', 'bao@gmail.com', '', ''),
(5, 'Đỗ Tiến Long', 'long@gmail.com', '', ''),
(6, 'Lê Văn Ba', 'ba@gmail.com', '', ''),
(7, 'Trần Quốc Chiến', 'chien@gmail.com', '', ''),
(8, 'Đỗ Chí Bình', 'binh@gmail.com', '', ''),
(9, 'Trần Tiến Dũng', 'dung@gmail.com', '', ''),
(10, 'Lê Quốc Bảo', 'baob@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `url`, `type`, `created_at`, `updated_at`, `id_post`) VALUES
(73, './public/post-image/2023-07-16-11-32-52-16894999729987.jpeg', '', 1, '2023-07-16 16:32:52', NULL, 129),
(74, './public/post-image/2023-07-16-11-32-53-16894999730197.jpeg', '', 0, '2023-07-16 16:32:53', NULL, 129),
(75, './public/post-image/2023-07-16-11-32-53-16894999730226.jpeg', '', 0, '2023-07-16 16:32:53', NULL, 129),
(76, './public/post-image/2023-07-16-11-32-53-16894999730254.jpeg', '', 0, '2023-07-16 16:32:53', NULL, 129),
(77, './public/post-image/2023-07-16-11-35-45-16895001451952.jpeg', '', 1, '2023-07-16 16:35:45', NULL, 130),
(78, './public/post-image/2023-07-16-11-35-45-16895001451987.jpeg', '', 0, '2023-07-16 16:35:45', NULL, 130),
(79, './public/post-image/2023-07-16-11-35-45-16895001452007.jpeg', '', 0, '2023-07-16 16:35:45', NULL, 130),
(80, './public/post-image/2023-07-16-11-35-45-16895001452033.jpeg', '', 0, '2023-07-16 16:35:45', NULL, 130),
(81, './public/post-image/2023-07-16-11-38-29-16895003094186.jpeg', '', 1, '2023-07-16 16:38:29', NULL, 131),
(82, './public/post-image/2023-07-16-11-38-29-16895003094281.jpeg', '', 0, '2023-07-16 16:38:29', NULL, 131),
(83, './public/post-image/2023-07-16-11-38-29-16895003094303.jpeg', '', 0, '2023-07-16 16:38:29', NULL, 131),
(88, './public/post-image/2023-07-16-11-45-11-16895007115444.jpeg', '', 1, '2023-07-16 16:45:11', NULL, 133),
(89, './public/post-image/2023-07-16-11-45-11-16895007115475.jpeg', '', 0, '2023-07-16 16:45:11', NULL, 133),
(90, './public/post-image/2023-07-16-11-45-11-16895007115497.jpeg', '', 0, '2023-07-16 16:45:11', NULL, 133),
(91, './public/post-image/2023-07-16-11-45-11-16895007115517.jpeg', '', 0, '2023-07-16 16:45:11', NULL, 133),
(92, './public/post-image/2023-07-16-11-47-41-16895008615435.jpeg', '', 1, '2023-07-16 16:47:41', NULL, 134),
(93, './public/post-image/2023-07-16-11-47-41-16895008615469.jpeg', '', 0, '2023-07-16 16:47:41', NULL, 134),
(94, './public/post-image/2023-07-16-11-47-41-16895008615487.jpeg', '', 0, '2023-07-16 16:47:41', NULL, 134),
(95, './public/post-image/2023-07-16-11-51-16-16895010762059.jpeg', '', 1, '2023-07-16 16:51:16', NULL, 135),
(96, './public/post-image/2023-07-16-11-51-16-16895010762089.jpeg', '', 0, '2023-07-16 16:51:16', NULL, 135),
(97, './public/post-image/2023-07-16-11-51-16-16895010762109.jpeg', '', 0, '2023-07-16 16:51:16', NULL, 135),
(98, './public/post-image/2023-07-16-11-51-16-1689501076213.jpeg', '', 0, '2023-07-16 16:51:16', NULL, 135),
(99, './public/post-image/2023-07-16-11-53-51-16895012313826.jpeg', '', 1, '2023-07-16 16:53:51', NULL, 136),
(100, './public/post-image/2023-07-16-11-53-51-1689501231385.jpeg', '', 0, '2023-07-16 16:53:51', NULL, 136),
(101, './public/post-image/2023-07-16-11-53-51-16895012313868.jpeg', '', 0, '2023-07-16 16:53:51', NULL, 136),
(102, './public/post-image/2023-07-16-11-53-51-16895012313884.jpeg', '', 0, '2023-07-16 16:53:51', NULL, 136),
(103, './public/post-image/2023-07-16-11-53-51-16895012313909.jpeg', '', 0, '2023-07-16 16:53:51', NULL, 136),
(110, './public/post-image/2023-07-16-11-57-09-1689501429863.jpeg', '', 1, '2023-07-16 16:57:09', NULL, 138),
(111, './public/post-image/2023-07-16-11-57-09-16895014298657.jpeg', '', 0, '2023-07-16 16:57:09', NULL, 138),
(112, './public/post-image/2023-07-16-11-57-09-16895014298674.jpeg', '', 0, '2023-07-16 16:57:09', NULL, 138),
(113, './public/post-image/2023-07-16-11-57-09-16895014298691.jpeg', '', 0, '2023-07-16 16:57:09', NULL, 138),
(114, './public/post-image/2023-07-16-11-57-09-16895014298707.jpeg', '', 0, '2023-07-16 16:57:09', NULL, 138),
(115, './public/post-image/2023-07-16-11-57-09-16895014298724.jpeg', '', 0, '2023-07-16 16:57:09', NULL, 138),
(119, './public/post-image/2023-07-16-17-30-39-16895214395696.jpeg', '', 1, '2023-07-16 22:30:39', NULL, 142),
(120, './public/post-image/2023-07-16-17-30-39-16895214395714.jpeg', '', 0, '2023-07-16 22:30:39', NULL, 142),
(121, './public/post-image/2023-07-16-17-30-39-16895214395734.jpeg', '', 0, '2023-07-16 22:30:39', NULL, 142),
(122, './public/post-image/2023-07-16-17-30-39-16895214395758.jpeg', '', 0, '2023-07-16 22:30:39', NULL, 142),
(127, './public/post-image/2023-07-16-17-48-27-1689522507489.jpeg', '', 1, '2023-07-16 22:48:27', NULL, 144),
(128, './public/post-image/2023-07-16-17-48-27-16895225074918.jpeg', '', 0, '2023-07-16 22:48:27', NULL, 144),
(129, './public/post-image/2023-07-16-17-48-27-16895225074941.jpeg', '', 0, '2023-07-16 22:48:27', NULL, 144),
(130, './public/post-image/2023-07-16-17-48-27-16895225074972.jpeg', '', 0, '2023-07-16 22:48:27', NULL, 144),
(135, './public/post-image/2023-07-16-18-11-18-16895238788733.jpeg', '', 1, '2023-07-16 23:11:18', NULL, 146),
(136, './public/post-image/2023-07-16-18-11-18-16895238788771.jpeg', '', 0, '2023-07-16 23:11:18', NULL, 146),
(137, './public/post-image/2023-07-16-18-11-18-16895238788798.jpeg', '', 0, '2023-07-16 23:11:18', NULL, 146),
(138, './public/post-image/2023-07-16-18-11-18-16895238788827.jpeg', '', 0, '2023-07-16 23:11:18', NULL, 146),
(139, './public/post-image/2023-07-16-18-14-32-16895240722432.jpeg', '', 1, '2023-07-16 23:14:32', NULL, 147),
(140, './public/post-image/2023-07-16-18-14-32-16895240722461.jpeg', '', 0, '2023-07-16 23:14:32', NULL, 147),
(141, './public/post-image/2023-07-16-18-14-32-16895240722487.jpeg', '', 0, '2023-07-16 23:14:32', NULL, 147),
(142, './public/post-image/2023-07-16-18-14-32-16895240722515.jpeg', '', 0, '2023-07-16 23:14:32', NULL, 147),
(143, './public/post-image/2023-07-16-18-20-16-16895244167017.jpeg', '', 1, '2023-07-16 23:20:16', NULL, 148),
(144, './public/post-image/2023-07-16-18-20-16-16895244167052.jpeg', '', 0, '2023-07-16 23:20:16', NULL, 148),
(145, './public/post-image/2023-07-16-18-20-16-16895244167085.jpeg', '', 0, '2023-07-16 23:20:16', NULL, 148),
(146, './public/post-image/2023-07-16-18-20-16-16895244167112.jpeg', '', 0, '2023-07-16 23:20:16', NULL, 148),
(147, './public/post-image/2023-07-16-18-23-17-16895245978534.jpeg', '', 1, '2023-07-16 23:23:17', NULL, 149),
(148, './public/post-image/2023-07-16-18-23-17-16895245978565.jpeg', '', 0, '2023-07-16 23:23:17', NULL, 149),
(149, './public/post-image/2023-07-16-18-23-17-16895245978594.jpeg', '', 0, '2023-07-16 23:23:17', NULL, 149),
(150, './public/post-image/2023-07-16-18-23-17-16895245978625.jpeg', '', 0, '2023-07-16 23:23:17', NULL, 149),
(151, './public/post-image/2023-07-16-18-25-49-16895247491532.jpeg', '', 1, '2023-07-16 23:25:49', NULL, 150),
(152, './public/post-image/2023-07-16-18-25-49-16895247491559.jpeg', '', 0, '2023-07-16 23:25:49', NULL, 150),
(153, './public/post-image/2023-07-16-18-25-49-16895247491587.jpeg', '', 0, '2023-07-16 23:25:49', NULL, 150),
(154, './public/post-image/2023-07-16-18-25-49-16895247491616.jpeg', '', 0, '2023-07-16 23:25:49', NULL, 150),
(155, './public/post-image/2023-07-16-18-27-55-16895248755108.jpeg', '', 1, '2023-07-16 23:27:55', NULL, 151),
(156, './public/post-image/2023-07-16-18-27-55-16895248755364.jpeg', '', 0, '2023-07-16 23:27:55', NULL, 151),
(157, './public/post-image/2023-07-16-18-27-55-16895248755391.jpeg', '', 0, '2023-07-16 23:27:55', NULL, 151),
(158, './public/post-image/2023-07-16-18-27-55-16895248755412.jpeg', '', 0, '2023-07-16 23:27:55', NULL, 151);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `code_name` varchar(200) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `code_name`, `type`) VALUES
(15, 'Tạp chí khoa học và công nghệ Trường Đại Học Kinh Tế Kỹ Thuật Công nghiệp ', '2022-10-24 09:36:05', '2023-07-11 15:45:01', 'Số 31 (2022)', 1),
(16, 'Tạp chí khoa học và công nghệ Trường Đại Học Kinh Tế Kỹ Thuật Công nghiệp ', '2022-10-24 09:49:39', '2023-07-11 15:45:03', 'Số 31 (2022)', 1),
(17, 'Tạp chí khoa học và công nghệ Trường Đại Học Bách Khoa Hà Nội', '2022-10-24 10:00:18', '2023-07-11 15:32:12', 'Số 31 (2022)', 1),
(18, 'Tạp chí khoa học và Công nghệ Bộ Công Thương', '2023-07-11 15:33:55', '2023-07-11 15:33:57', 'Số 32 (2023)', 1),
(19, 'Tạp chí kinh tế - xã hội Bộ Công Thương', '2023-07-11 15:34:44', '2023-07-11 15:34:41', 'Số 33 (2023)', 2),
(20, 'Tạp chí kinh tế - xã hội Bộ Công Thương', '2023-07-11 15:36:10', '2023-07-11 15:36:13', 'Số 34(2023)', 2),
(21, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:43:28', '2023-07-11 15:44:14', 'Số 31 (2023)', 2),
(22, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:43:32', '2023-07-11 15:44:17', 'Số 32 (2023)', 2),
(23, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:43:35', '2023-07-11 15:44:20', 'Số 33 (2023)', 2),
(24, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:43:38', '2023-07-11 15:44:24', 'Số 34 (2023)', 2),
(25, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:43:41', '2023-07-11 15:44:27', 'Số 35 (2023)', 2),
(26, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:43:44', '2023-07-11 15:44:31', 'Số 36 (2023)', 2),
(27, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:43:47', '2023-07-11 15:44:35', 'Số 37 (2023)', 2),
(28, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:43:50', '2023-07-11 15:44:38', 'Số 38 (2023)', 2),
(29, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:43:53', '2023-07-11 15:44:40', 'Số 39 (2023)', 2),
(30, 'Tạp chí Khoa học quốc tế', '2023-07-11 15:43:55', '2023-07-11 15:44:43', 'Số 59 (2023)', 3),
(31, 'Tạp chí Khoa học Luxambua', '2023-07-11 15:43:58', '2023-07-11 15:44:45', 'Số 66 (2023)', 3),
(32, 'Tạp chí Diễn đàn khoa học Bộ công thương', '2023-07-11 15:44:01', '2023-07-11 15:44:48', 'Số 45 (2023)', 3),
(33, 'Tạp chí Diễn đàn khoa học Bộ Công nghệ thông tin', '2023-07-11 15:44:03', '2023-07-11 15:44:50', 'Số 39 (2023)', 3),
(34, 'Tạp chí Diễn đàn khoa học và hội nhập kinh tế', '2023-07-11 15:44:05', '2023-07-11 15:44:52', 'Số 77 (2023)', 3),
(77, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:44:09', '2023-07-11 15:44:54', 'Số 32 (2023)', 2),
(79, 'Thông báo', '2023-07-16 01:53:58', NULL, NULL, 4),
(80, 'Sự kiện', '2023-07-16 01:54:23', NULL, NULL, 5),
(81, 'Giới thiệu', '2023-07-16 01:54:40', NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `status` enum('unseen','seen','approved') NOT NULL DEFAULT 'unseen',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id` (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(300) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `url`, `parent_id`, `created_at`, `updated_at`) VALUES
(9, 'most visited', '#', NULL, '2019-07-17 12:05:11', '2022-10-24 11:33:11'),
(12, 'about us ', 'http://localhost/OnlineNewsSite/', NULL, '2022-10-24 14:38:39', NULL),
(13, 'Home', 'http://localhost/OnlineNewsSite/', NULL, '2022-10-24 14:39:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `summary` text NOT NULL,
  `body` text NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` enum('disable','enable') NOT NULL DEFAULT 'disable',
  `selected` tinyint(5) NOT NULL DEFAULT 1,
  `breaking_news` tinyint(5) NOT NULL DEFAULT 1,
  `published_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `author_name` varchar(200) NOT NULL DEFAULT '',
  `file` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`),
  KEY `user_id` (`user_id`),
  KEY `posts_author` (`author_name`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `summary`, `body`, `view`, `user_id`, `cat_id`, `image`, `status`, `selected`, `breaking_news`, `published_at`, `created_at`, `updated_at`, `author_name`, `file`) VALUES
(129, 'Tạp chí nghiên cứu khoa học số 30', 'Bài báo dựa trên ý tưởng toán học trên đường cong Elliptic. Số học đường cong Elliptic này \r\nđược ứng dụng trong bảo mật, an toàn thông tin, chứng thực, chữ ký số. So với các hệ mật \r\ntruyền thống khác với cùng kích thước khóa thì hệ mật đường cong Elliptic có độ mật tốt \r\nhơn.', 'Bài báo dựa trên ý tưởng toán học trên đường cong Elliptic. Số học đường cong Elliptic này \r\nđược ứng dụng trong bảo mật, an toàn thông tin, chứng thực, chữ ký số. So với các hệ mật \r\ntruyền thống khác với cùng kích thước khóa thì hệ mật đường cong Elliptic có độ mật tốt \r\nhơn. Trong bài báo này nhóm tác giả đề xuất không cần tạo chuỗi dữ liệu để mã hóa mà chỉ \r\ncần lấy vị trí của điểm tương ứng ký tự để mã hóa. Với việc này thì bản mã ngắn gọn hơn khi\r\ngửi bản mã trên mạng sẽ chiếm ít băng thông trên quá trình truyền.', 0, 1, 32, '', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-16 16:32:52', '2023-07-16 18:05:04', 'Nguyễn Cao Ngọc Hồng, Nguyễn Minh Vương, Phạm Xuân Việt, Bùi Xuân Thành, Dương Thanh Tùng\r\n', './public/upload/2023-07-16-11-32-52-.pdf'),
(130, 'Tạp chí nghiên cứu khoa học số 31', 'Graphene oxit (GO) là một vật liệu carbon 2 chiều, được biết đến như một loại vật liệu tương \r\nlai với nhiều đặc tính ưu việt. Trong nghiên cứu này, chúng tôi báo cáo một quy trình tổng \r\nhợp điện hóa xanh cho chế tạo GO sử dụng điện cực graphit và chất điện ly K2CO3. Các đặc \r\ntrưng của vật liệu GO được khảo sát sử dụng các phương pháp: phép đo nhiễu xạ tia X \r\n(XRD), hiển vi điện tử quét (SEM), phổ hồng ngoại biến đổi Fourier (FTIR), quang phổ \r\nRaman và quang phổ hấp thụ tử ngoại khả kiến (UV-vis). ', 'Graphene oxit (GO) là một vật liệu carbon 2 chiều, được biết đến như một loại vật liệu tương \r\nlai với nhiều đặc tính ưu việt. Trong nghiên cứu này, chúng tôi báo cáo một quy trình tổng \r\nhợp điện hóa xanh cho chế tạo GO sử dụng điện cực graphit và chất điện ly K2CO3. Các đặc \r\ntrưng của vật liệu GO được khảo sát sử dụng các phương pháp: phép đo nhiễu xạ tia X \r\n(XRD), hiển vi điện tử quét (SEM), phổ hồng ngoại biến đổi Fourier (FTIR), quang phổ \r\nRaman và quang phổ hấp thụ tử ngoại khả kiến (UV-vis). Kết quả thu được cho thấy, GO \r\nđược chế tạo ở điều kiện nồng độ chất điện ly K2CO3 0,08 M, điệp áp 12 V trong thời gian \r\n120 phút ở nhiệt độ phòng cho chất lượng GO tốt nhất. Phổ UV-vis của GO xuất hiện 2 đỉnh \r\nhấp thụ đặc trưng ở tại 230 nm đặc trưng cho liên kết C=C và một bờ hấp thụ ở 280-320 nm \r\nđặc trưng cho liên kết C=O. Vật liệu GO chế tạo được có số lớp khoảng 5-6 lớp, khoảng \r\ncách giữa hai lớp liền kề khoảng 0,82 nm, kích thước tấm GO lên đến vài micromet. Các kết \r\nquả thu được cho thấy đây là một giải pháp công nghệ đơn giản, thân thiện với môi trường, \r\nchi phí thấp và dễ dàng nâng cấp quy mô sản xuất số lượng lớn.\r\n', 0, 1, 15, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 16:35:45', NULL, 'Hoàng Văn Tuấn, Nguyễn Lê Nhật Trang, Đào Thị Nguyệt Nga, Ngô Xuân Đinh , Vũ Đình Lãm , Lê Anh Tuấn\r\n', './public/upload/2023-07-16-11-35-45-.vnd.openxmlformats-officedocument.wordprocessingml.document'),
(131, 'Tạp chí nghiên cứu khoa học số 32', 'Để bảo đảm độ tin cậy và hiệu quả của quá trình gia công cắt gọt không thể thiếu các thông \r\ntin về trạng thái dao, cũng như trạng thái của cả quá trình cắt. Bài báo giới thiệu mô hình \r\nứng dụng mạng nơron nhân tạo trong dự báo mòn dao khi tiện, nhằm nâng cao hiệu quả, độ \r\ntin cậy của quá trình gia công.', 'Để bảo đảm độ tin cậy và hiệu quả của quá trình gia công cắt gọt không thể thiếu các thông \r\ntin về trạng thái dao, cũng như trạng thái của cả quá trình cắt. Bài báo giới thiệu mô hình \r\nứng dụng mạng nơron nhân tạo trong dự báo mòn dao khi tiện, nhằm nâng cao hiệu quả, độ \r\ntin cậy của quá trình gia công.', 0, 1, 15, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 16:38:29', NULL, 'Phạm Vũ Dũng', './public/upload/2023-07-16-11-38-29-.pdf'),
(133, 'Tạp chí nghiên cứu khoa học số 33', 'Bảo quản rau bina bằng màng bao gói kháng khuẩn ứng dụng kỹ thuật khí quyển biến đổi là \r\nmột phương pháp phù hợp với điều kiện cơ sở vật chất tại Việt Nam. Mục tiêu của nghiên \r\ncứu này là xác định được ảnh hưởng của tỷ lệ diện tích màng bao gói LLDPE -G/khối lượng \r\nnông sản (cm²/g); độ dày màng (mm) đến điều kiện cân bằng khí oxy, cacbonic trong bao \r\ngói và chất lượng dinh dưỡng, cảm quan của rau bina trong quá trình tồn trữ.\r\n\r\n, Đặng Thảo Yến Linh\r\n, \r\nNguyễn Thị Mai Hương3', 'Bảo quản rau bina bằng màng bao gói kháng khuẩn ứng dụng kỹ thuật khí quyển biến đổi là \r\nmột phương pháp phù hợp với điều kiện cơ sở vật chất tại Việt Nam. Mục tiêu của nghiên \r\ncứu này là xác định được ảnh hưởng của tỷ lệ diện tích màng bao gói LLDPE -G/khối lượng \r\nnông sản (cm²/g); độ dày màng (mm) đến điều kiện cân bằng khí oxy, cacbonic trong bao \r\ngói và chất lượng dinh dưỡng, cảm quan của rau bina trong quá trình tồn trữ. Kết quả thực \r\nnghiệm đã xác định được tỷ lệ diện tích màng bao gói/ khối lượng rau bina là 3,43 cm2\r\n/g và \r\nđộ dày màng LLDPE -G là 0,04 mm, tương ứng với trạng thái cân bằng môi trường vi khí \r\nhậu ở nồng độ khí O2 khoảng 18% và nồng độ khí CO2 10%. Chất lượng rau bina được bảo \r\nquản ở điều kiện này được đánh giá sau 15 ngày tồn trữ đạt tiêu chuẩn vệ sinh an toàn \r\nthực phẩm về vi sinh theo quy định Thực hành sản xuất nông nghiệp tốt (GAP)', 0, 1, 15, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 16:45:11', NULL, 'Phạm Thị Thu Hoài\r\n, Chu Xuân Quang\r\n, Trần Hùng Thuận\r\n\r\n, Đặng Thảo Yến Linh', './public/upload/2023-07-16-11-45-11-.pdf'),
(134, 'Tạp chí nghiên cứu khoa học số 34', 'Bài báo nghiên cứu xây dựng quy trình ứng dụng phần mềm Mastercam để tạo ra 1 bộ \r\npost-processor hỗ trợ cho việc kiết xuất chương trình gia công sử dụng trên máy tiện CNC \r\nCLK6140D/2. Để xử lý một số cấu trúc chương trình đặc trưng riêng của máy tiện CNC \r\nCLK6140D/2, đảm bảo máy hoạt động không bị lỗi trong quá trình vận hành. ', 'Bài báo nghiên cứu xây dựng quy trình ứng dụng phần mềm Mastercam để tạo ra 1 bộ \r\npost-processor hỗ trợ cho việc kiết xuất chương trình gia công sử dụng trên máy tiện CNC \r\nCLK6140D/2. Để xử lý một số cấu trúc chương trình đặc trưng riêng của máy tiện CNC \r\nCLK6140D/2, đảm bảo máy hoạt động không bị lỗi trong quá trình vận hành. Đây là một \r\ncông việc quan trọng và được sử dụng nhiều trong lĩnh vực gia công cơ khí có áp dụng công \r\nnghệ CAD/CAM/CNC, nhằm nâng cao độ chính xác chế tạo, chất lượng bề mặt gia công, \r\nđơn giản hoá quy trình công nghệ, nâng cao năng suất & giảm giá thành sản phẩm.', 0, 1, 19, '', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-16 16:47:41', '2023-07-16 18:03:31', 'Trịnh Thị Mai1\r\n, Đỗ Anh Tuấn\r\n\r\n, Trần Trọng Thể\r\n\r\n, Hoàng Trọng Hưng\r\n', ''),
(135, 'Tạp chí nghiên cứu khoa học số 36', 'gũ vị tử (Schisandra chinensis) thu hoạch ở chân núi Ngọc Linh - Kom Tum. Theo Đông y, \r\nngũ vị tử có vị chua, tính ôn. Ngũ vị tử có nhiều công dụng trong hỗ trợ điều trị bệnh bởi \r\ntrong quả chứa các thành phần hóa học có hoạt chất sinh học như lignan, vitamin C, axit \r\nhữu cơ. Tuy nhiên, các hoạt chất dễ bị tổn thất trong công đoạn làm khô quả. \r\n', 'Ngũ vị tử (Schisandra chinensis) thu hoạch ở chân núi Ngọc Linh - Kom Tum. Theo Đông y, \r\nngũ vị tử có vị chua, tính ôn. Ngũ vị tử có nhiều công dụng trong hỗ trợ điều trị bệnh bởi \r\ntrong quả chứa các thành phần hóa học có hoạt chất sinh học như lignan, vitamin C, axit \r\nhữu cơ. Tuy nhiên, các hoạt chất dễ bị tổn thất trong công đoạn làm khô quả. Nghiên cứu đã \r\nứng dụng phương pháp sấy bơm nhiệt kết hợp bức xạ hồng ngoại để làm khô quả ngũ vị tử \r\nvới các thông số công nghệ: nhiệt độ sấy 49,18oC, độ dày lớp quả sấy 20,41 cm, tốc độ tác \r\nnhân sấy 1,5 m/s. Kết quả thu được quả ngũ vị tử khô có hàm lượng lignan được bảo tồn là \r\n4,26%, hàm hượng VTM C 143,28 mg%; hàm lượng axit 5,37%, độ ẩm < 9%, quả khô đều, \r\nmàu đỏ nâu sáng phù hợp để làm dược liệu hỗ trợ trong điều trị bệnh hoặc dùng làm nguyên \r\nliệu để chế biến các sản phẩm trà từ ngũ vị tử.', 0, 1, 15, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 16:51:16', NULL, 'Đặng Thị Thanh Quyên\r\n, Đỗ Thị Kim Loan\r\n, Nguyễn Thị Thảo', './public/upload/2023-07-16-11-51-16-.pdf'),
(136, 'Tạp chí khoa học công nghệ số 37', 'Hydroxyapatite kích thước nano là ứng viên sáng giá trong lĩnh vực kĩ thuật mô xương, do \r\ncó thành phần tương tự với thành phần vô cơ trong xương tự nhiên. Ở dạng bột mịn, HAp \r\nvới kích thước nano là dạng canxi photphat được cơ thể hấp thụ dễ dàng do tỷ lệ Ca/P trong \r\nphân tử HAp tương đồng tỷ lệ Ca/P trong xương và răng. Nano bạc kim loại là vật liệu có tác \r\ndụng kháng khuẩn, diệt virut, nấm…', 'Hydroxyapatite kích thước nano là ứng viên sáng giá trong lĩnh vực kĩ thuật mô xương, do \r\ncó thành phần tương tự với thành phần vô cơ trong xương tự nhiên. Ở dạng bột mịn, HAp \r\nvới kích thước nano là dạng canxi photphat được cơ thể hấp thụ dễ dàng do tỷ lệ Ca/P trong \r\nphân tử HAp tương đồng tỷ lệ Ca/P trong xương và răng. Nano bạc kim loại là vật liệu có tác \r\ndụng kháng khuẩn, diệt virut, nấm… Sự kết hợp giữa nano HAp với nano Ag thể hiện các \r\nđặc tính kháng khuẩn ưu việt và là vật liệu sinh học thích hợp để điều trị các bệnh nhiễm \r\ntrùng xương do vi khuẩn như viêm tủy xương. Trong nghiên cứu này, chúng tôi đã nghiên \r\ncứu chế tạo thành công vật liệu nano Ag/hydroxyapatite (Ag/HAp) với quy trình hai bước. \r\nĐặc trưng hóa lý của bột nano Ag/HAp được phân tích bằng phương pháp nhiễu xạ tia X, \r\nhình ảnh hiển vi điện tử quét, phổ hồng ngoại biến đổi Fourier, quang phổ huỳnh quang tia X \r\nvà quang phổ tử ngoại khả kiến UV-Vis... Kết quả phân tích cho thấy bột nano Ag/HAp có \r\ndạng hạt, kích thước hạt trung bình khoảng 75 nm, bột có cấu trúc xốp rỗng với các lỗ xốp \r\nphân bố khá đồng đều gần tương đồng với cấu trúc dạng xốp của xương tự nhiên.', 0, 1, 15, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 16:53:51', NULL, 'Phan Thị Lan Hương\r\n, Nguyễn Bá Hưng\r\n, Nguyễn Thị Thục Anh\r\n, Vũ Thị Trang1', './public/upload/2023-07-16-11-53-51-.pdf'),
(138, 'Tạp chí nghiên cứu khoa học số 38', 'Quyết định thay dụng cụ phù hợp và đúng lúc là yêu cầu cấp thiết, nhằm tránh hư hỏng chi \r\ntiết hoặc thay dụng cụ không cần thiết. Giám sát trực tuyến tình trạng của dụng cụ là cần \r\nthiết đối với các máy công cụ hiện đại. ', 'Quyết định thay dụng cụ phù hợp và đúng lúc là yêu cầu cấp thiết, nhằm tránh hư hỏng chi \r\ntiết hoặc thay dụng cụ không cần thiết. Giám sát trực tuyến tình trạng của dụng cụ là cần \r\nthiết đối với các máy công cụ hiện đại. Mài là quá trình, được đặc trưng bởi sử dụng đá mài \r\ncó nhiều lưỡi cắt, chịu mài mòn không đồng nhất, vì vậy mòn đá mài là phức tạp nhất so với \r\ncác loại dụng cụ cắt khác. Bài báo đề cập sự phát triển hệ thống giám sát mòn đá mài trên \r\ncơ sở ANN. Thiết lập được hệ giám sát trực tuyến mòn đá gồm DAQ và DSS. Xây dựng các \r\nquan hệ cơ bản trong quá trình mài, đặc biệt giữa mòn đá và các thông số đầu ra (lực cắt, \r\nrung động, độ nhám bề mặt…) sử dụng chúng trong giám sát mòn đá.\r\n', 0, 1, 15, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 16:57:09', NULL, 'Phạm Vũ Dũng, Đỗ Anh Tuấn', './public/upload/2023-07-16-11-57-09-.pdf'),
(142, 'Tạp chí số 10', 'Bài báo giới thiệu kết quả nghiên cứu và chế tạo hệ thống truyền thông SERCOS tiêu\r\nchuẩn PCI.', 'Bài báo giới thiệu kết quả nghiên cứu và chế tạo hệ thống truyền thông SERCOS tiêu\r\nchuẩn PCI. Bo mạch SERCOS PCI dựa trên bo mạch tích hợp chuyên dụng SERCON\r\n816 và được hỗ trợ bởi hầu hết các phần, tất cả tính năng bởi SERCON 816. Bo mạch\r\ncó thể được vận hành như một bo mạch chủ hoặc bo mạch tớ. Nó có thể hoạt động với\r\ntốc độ truyền tải 2, 4, 8 Mbit/s. Việc trao đổi dữ liệu giữa bộ điều khiển SERCOS và máy\r\nchủ CPU được sử dụng bằng chip PLX9052.', 0, 1, 33, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 22:30:39', NULL, 'Phạm Hữu Đức Dục - Nguyễn Đức Dương - Lưu Tuấn Khanh', './public/upload/2023-07-16-17-30-39-.vnd.openxmlformats-officedocument.wordprocessingml.document'),
(144, 'Tạp chí nghiên cứu khoa học số 11', 'Máy phát điện sức gió sử dụng động cơ không đồng bộ rotor dây quấn (KĐB-RDQ), cũn\r\nđược gọi là không đồng bộ nguồn kép DFIG (Doubly-Fed-Induction-Generator).', 'Máy phát điện sức gió sử dụng động cơ không đồng bộ rotor dây quấn (KĐB-RDQ), cũn\r\nđược gọi là không đồng bộ nguồn kép DFIG (Doubly-Fed-Induction-Generator). Việc\r\nnghiên cứu, thiết kế các bộ điều khiển nhằm đảm bảo cho máy phát làm việc ổn định với\r\nlưới là vấn đề có tính thời sự, đang thu hút sự chỳ ý của các nhà khoa học trong và\r\nngoài nước. Trong bài báo này tác giả nghiên cứu việc sử dụng phương pháp\r\nBackstepping để thiết kế bộ điều khiển cho máy phát kiểu DFIG. Kết quả nghiên cứu đó\r\nchứng minh được chất lượng điều khiển máy phát trong hệ thống DFIG tốt hơn so với\r\nphương pháp điều khiển tuyến tính thông thường.', 0, 1, 21, '', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-16 22:48:27', '2023-07-16 22:49:44', 'Nguyễn Thị Thành', './public/upload/2023-07-16-17-48-27-.vnd.openxmlformats-officedocument.wordprocessingml.document'),
(146, 'Tạp chí nghiên cứu khoa học số 12', 'Gia công các chi tiết dạng cam phẳng, các bánh răng đặc biệt… có biên dạng là đường\r\nAcsimet, hipôxiclôit, êpixiclôit… theo phương pháp truyền thống thường rất khó khăn,\r\nbiên dạng chi tiết có độ chính xác không cao.', 'Gia công các chi tiết dạng cam phẳng, các bánh răng đặc biệt… có biên dạng là đường\r\nAcsimet, hipôxiclôit, êpixiclôit… theo phương pháp truyền thống thường rất khó khăn,\r\nbiên dạng chi tiết có độ chính xác không cao.\r\nBài bỏo trỡnh bày phương pháp gia công mới, theo đó trước hết phải thiết lập phương\r\ntrỡnh mụ tả biên dạng chi tiết, sau đó sử dụng các phần mềm SolidWorks, Mastercam để\r\nvẽ, lập trỡnh, gia cụng trờn mỏy CNC. Kết quả thu được chi tiết có độ chính xác cao.\r\nĐây là phương pháp tiên tiến, đúng với công nghệ sản xuất hiện đại.', 0, 1, 23, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 23:11:18', NULL, 'Trần Ngọc Hải - Nguyễn Tiến Dũng', './public/upload/2023-07-16-18-11-18-.vnd.openxmlformats-officedocument.wordprocessingml.document'),
(147, 'Tạp chí nghiên cứu khoa học số 13', 'Vỏ bugi được chế tạo bằng nhiều phương pháp khác nhau. Hiện nay, nhiều doanh\r\nnghiệp Việt Nam chế tạo vỏ bugi theo phương pháp đúc, sau đó gia công cắt gọt.', 'Vỏ bugi được chế tạo bằng nhiều phương pháp khác nhau. Hiện nay, nhiều doanh\r\nnghiệp Việt Nam chế tạo vỏ bugi theo phương pháp đúc, sau đó gia công cắt gọt. Với\r\nphương pháp này năng suất và chất lượng chi tiết không cao, đặc biệt là khả năng đáp\r\nứng các yêu cầu kỹ thuật. Bài báo dưới đây trỡnh bày cỏc kết quả nghiên cứu một công\r\nnghệ mới, công nghệ ép chảy. Công nghệ này có ưu điểm nổi bật trong gia công loạt lớn\r\nvà có khả năng nâng cao chất lượng sản phẩm. Với việc ứng dụng phương pháp mô\r\nphỏng số cho phép phân tích đánh giá quá trỡnh tạo hỡnh chi tiết vỏ bugi bằng công\r\nnghệ ép chảy cũng như tối ưu được các thông số công nghệ, hỡnh dạng và kích thước\r\ncủa khuụn ộp. Vỡ vậy kết quả thu được có thể ứng dụng vào thực tế để chế tạo khuôn\r\nép chảy cũng như tạo ra được các sản phẩm có chất lượng cao.', 0, 1, 24, '', 'disable', 1, 1, '2018-02-10 00:00:00', '2023-07-16 23:14:32', NULL, 'Vũ Hoài Anh', './public/upload/2023-07-16-18-14-32-.vnd.openxmlformats-officedocument.wordprocessingml.document'),
(148, 'Tạp chí nghiên cứu khoa học số 14', 'Nâng cao chất lượng bề mặt chi tiết gia công với các loại vật liệu có cơ, lý tớnh cao là yờu cầu cấp thiết trong quỏ trỡnh sản xuất thực tiễn hiện nay', 'Nâng cao chất lượng bề mặt chi tiết gia công với các loại vật liệu có cơ, lý tớnh cao là\r\nyờu cầu cấp thiết trong quỏ trỡnh sản xuất thực tiễn hiện nay. Khi gia công các loại vật\r\nliệu này để tạo ra các chi tiết máy có chất lượng cao là rất khó khăn nếu sử dụng các\r\nphương pháp gia công lần cuối là tiện, phay. Do vậy để đáp ứng được yêu cầu này, sử\r\ndụng phương pháp mài để gia công lần cuối cho sản phẩm là thích hợp hơn cả.\r\nĐồng thau 66400 là loại vật liệu dẻo được sử dụng nhiều trong lĩnh vực cơ khí như làm\r\nbạc chống mũn, cỏc chi tiết chịu mũn trong mụi trường nước biển,… Vỡ vậy, “Nghiên\r\ncứu ảnh hưởng của một số thông số công nghệ đến độ nhám bề mặt chi tiết khi mài\r\nphẳng vật liệu đồng thau 66400” là đề tài có tính khoa học và thực tiễn.', 0, 1, 24, '', 'disable', 1, 1, '2018-11-22 00:00:00', '2023-07-16 23:20:16', NULL, 'Dương Hải Nam', './public/upload/2023-07-16-18-20-16-.pdf'),
(149, 'Tạp chí nghiên cứu khoa học số 17', 'Rung động là trạng thái giới hạn của tự dao động trong quá trình gia công, là nguyên nhân chính hạn chế năng suất và chất lượng chi tiết gia công. Vì vậy các công trình nghiên cứu hiện nay đều tập trung vào phát hiện, nhận dạng, tránh, ngăn ngừa, giảm hoặc loại trừ rung động.', 'Rung động là trạng thái giới hạn của tự dao động trong quá trình gia công, là nguyên nhân chính hạn chế năng suất và chất lượng chi tiết gia công. Vì vậy các công trình nghiên cứu hiện nay đều tập trung vào phát hiện, nhận dạng, tránh, ngăn ngừa, giảm hoặc loại trừ rung động. Có nhiều phương pháp phát hiện và đo rung động đã được đề xuất, mỗi phương pháp có ưu, nhược điểm riêng. Bài báo này trình bày phương pháp dựa trên quan hệ giữa lực mài và các thông số rung động. Kết quả nghiên cứu đã chỉ ra rằng tín hiệu lực cắt không chỉ giúp phát hiện rung động mà còn dự báo nó trước khi xảy ra.', 0, 1, 25, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 23:23:17', NULL, 'Phạm Vũ Dũng', './public/upload/2023-07-16-18-23-17-.pdf'),
(150, 'Tạp chí nghiên cứu khoa học số 15', 'Nâng cao chất lượng bề mặt chi tiết gia công với các loại vật liệu có cơ, lý tớnh cao là\r\nyờu cầu cấp thiết trong quỏ trỡnh sản xuất thực tiễn hiện nay. Khi gia công các loại vật\r\nliệu này để tạo ra các chi tiết máy có chất lượng cao là rất khó khăn nếu sử dụng các\r\nphương pháp gia công lần cuối là tiện, phay. ', 'Nâng cao chất lượng bề mặt chi tiết gia công với các loại vật liệu có cơ, lý tớnh cao là\r\nyờu cầu cấp thiết trong quỏ trỡnh sản xuất thực tiễn hiện nay. Khi gia công các loại vật\r\nliệu này để tạo ra các chi tiết máy có chất lượng cao là rất khó khăn nếu sử dụng các\r\nphương pháp gia công lần cuối là tiện, phay. Do vậy để đáp ứng được yêu cầu này, sử\r\ndụng phương pháp mài để gia công lần cuối cho sản phẩm là thích hợp hơn cả.\r\nĐồng thau 66400 là loại vật liệu dẻo được sử dụng nhiều trong lĩnh vực cơ khí như làm\r\nbạc chống mũn, cỏc chi tiết chịu mũn trong mụi trường nước biển,… Vỡ vậy, “Nghiên\r\ncứu ảnh hưởng của một số thông số công nghệ đến độ nhám bề mặt chi tiết khi mài\r\nphẳng vật liệu đồng thau 66400” là đề tài có tính khoa học và thực tiễn.', 0, 1, 24, '', 'disable', 1, 1, '2018-11-21 00:00:00', '2023-07-16 23:25:49', NULL, 'Dương Hải Nam', './public/upload/2023-07-16-18-25-49-.pdf'),
(151, 'Tạp chí nghiên cứu khoa học số 16', 'Việc xác định chế độ cắt tối ưu cho quá trỡnh mài nhằm nâng cao chất lượng chi tiết và hạ giá thành sản phẩm rất quan trọng trong quỏ trỡnh gia cụng. Thộp X12M thuộc nhóm thép hợp kim cao, có độ bền nhiệt và độ bền cơ học cao.', 'Việc xác định chế độ cắt tối ưu cho quá trỡnh mài nhằm nâng cao chất lượng chi tiết và hạ giá thành sản phẩm rất quan trọng trong quỏ trỡnh gia cụng. Thộp X12M thuộc nhóm thép hợp kim cao, có độ bền nhiệt và độ bền cơ học cao. Vật liệu này thường dùng để chế tạo các chi tiết máy chính xác, chịu tải va đập lớn, chịu mài mũn và ăn mũn húa học. Trong bài báo này, trên cơ sở ứng dụng phần mềm toán học Mable, tác giả đó kết hợp giữa phõn tớch lý thuyết với thực nghiệm để tỡm ra bộ thông số chế độ cắt tối ưu khi gia công thép X12M trên máy mài trũn ngoài.', 0, 1, 26, '', 'disable', 1, 1, '2023-07-16 00:00:00', '2023-07-16 23:27:55', NULL, 'Nguyễn Văn Trúc, Bùi Ánh Hưng, Trịnh Thị Mai', './public/upload/2023-07-16-18-27-55-.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `permission` enum('user','admin') NOT NULL DEFAULT 'user',
  `verify_token` varchar(191) DEFAULT NULL,
  `is_active` tinyint(5) NOT NULL DEFAULT 0,
  `forgot_token` varchar(191) DEFAULT NULL,
  `forgot_token_expire` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `permission`, `verify_token`, `is_active`, `forgot_token`, `forgot_token_expire`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$kUh4xMjKTXeNiy7jSIJO6.LOVBth9hQiPwMi0BgD.ao2uWBDn1OB.', 'admin', 'cf408fb6caedd3c8308a21254b1a3cb4a5c8757f7740354104af7b43dfe7bff6', 1, NULL, NULL, '2023-06-12 16:17:46', '2023-07-11 21:42:03'),
(2, 'louis', 'louis@yahoo.com', '$2y$10$kUh4xMjKTXeNiy7jSIJO6.LOVBth9hQiPwMi0BgD.ao2uWBDn1OB.', 'user', NULL, 1, NULL, NULL, '2021-06-23 23:35:51', '2019-07-05 02:10:50'),
(3, 'kam', 'kamran@gmail.com', '$2y$10$nlZ5dMJ2sv9HrKU4NJslDe0ick10lGSBZNM2i14zKtDGGAEqAdXVS', 'user', NULL, 0, NULL, NULL, '2019-06-06 01:28:40', '2023-06-12 16:13:53'),
(4, 'nova', 'nova@yahoo.com', '$2y$10$CrqnkHtp2dKlyHfYRniXG.B8fWtrHtfavUyGVqc6bdiiF5lgwzi96', 'admin', NULL, 1, NULL, NULL, '2019-10-27 21:56:13', '2019-10-27 22:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `websetting`
--

DROP TABLE IF EXISTS `websetting`;
CREATE TABLE IF NOT EXISTS `websetting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `websetting`
--

INSERT INTO `websetting` (`id`, `title`, `description`, `keywords`, `logo`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'online news', 'online news', 'online news', 'public/setting/logo.png', 'public/setting/icon.jpeg', '2019-06-09 19:54:37', '2022-10-24 16:41:31');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table author
--

--
-- Metadata for table banners
--

--
-- Metadata for table categories
--

--
-- Metadata for table comments
--

--
-- Metadata for table menus
--

--
-- Metadata for table posts
--

--
-- Metadata for table users
--

--
-- Metadata for table websetting
--

--
-- Metadata for database news-project
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
