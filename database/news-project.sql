-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2023 lúc 12:47 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `news-project`
--
CREATE DATABASE IF NOT EXISTS `news-project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `news-project`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
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
-- Đang đổ dữ liệu cho bảng `author`
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
-- Cấu trúc bảng cho bảng `banners`
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `image`, `url`, `type`, `created_at`, `updated_at`, `id_post`) VALUES
(1, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', '', 0, '0000-00-00 00:00:00', NULL, 70),
(25, '', '', 0, '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
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
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
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
(77, 'Tạp chí kinh tế - xã hội Bộ Văn Hóa Thể thao và Du lịch', '2023-07-11 15:44:09', '2023-07-11 15:44:54', 'Số 32 (2023)', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
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
-- Cấu trúc bảng cho bảng `menus`
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
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `url`, `parent_id`, `created_at`, `updated_at`) VALUES
(9, 'most visited', '#', NULL, '2019-07-17 12:05:11', '2022-10-24 11:33:11'),
(12, 'about us ', 'http://localhost/OnlineNewsSite/', NULL, '2022-10-24 14:38:39', NULL),
(13, 'Home', 'http://localhost/OnlineNewsSite/', NULL, '2022-10-24 14:39:03', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
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
  `author_id` int(11) NOT NULL,
  `file` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`),
  KEY `user_id` (`user_id`),
  KEY `posts_author` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `summary`, `body`, `view`, `user_id`, `cat_id`, `image`, `status`, `selected`, `breaking_news`, `published_at`, `created_at`, `updated_at`, `author_id`, `file`) VALUES
(70, 'Tạp chí NCKH số 30', 'Trong nghiên cứu này, hạt nano tinh thể CsPbBr3 và CsPbBr3 pha tạp Co2+ bằng phương\r\npháp hóa một bước. Các hạt nano tinh thể CsPbX3 (X= Cl, I) cũng được chế tạo bằng\r\nphương pháp trao đổi ion từ CsPbBr3 và CsX. Các mẫu CsPbBr3 và CsPbCl3 thu được có\r\ndạng hình vuông với kích thước hạt trong khoảng 7-14 nm, và dưới 7 nm đối với mẫu\r\nCsPbI3. Chúng phát quang với các bước sóng 450, 516 và 660 nm khi được kích thích bằng\r\nnguồn sáng có bước sóng dưới 400 nm tương ứng với mức năng lượng vùng cấm lần lượt\r\nlà 1,81, 2,4 và 2,71 eV. Bước đầu khi tiến hành pha tạp ion Co2+ vào mạng nền CsPbBr3\r\ncho thấy sự cải thiện về cấu trúc tinh thể và tính chất quang của mẫu CsPb0.95Co0.05Br3 đối\r\nvới mẫu không pha tạp CsPbBr', 'Bột huỳnh quang chấm lượng tử là một trong\r\nnhững vật liệu quan trọng trong lĩnh vực chiếu\r\nsáng rắn - một cấu trúc gồm có LED và vật\r\nliệu huỳnh quang hiệu suất cao có thể hấp thụ\r\nmột phần ánh sáng phát ra từ LED chuyển\r\nthành ánh sáng ở vùng phổ mong muốn, góp\r\nphần làm cho ánh sáng phát ra từ tổ hợp LED\r\n+ bột huỳnh quang có màu sắc mong muốn.\r\nThuật ngữ chấm lượng tử có ý nghĩa cụ thể về\r\ncấu trúc trong đó xảy ra hiệu ứng giam giữ\r\nKHOA HỌC & CÔNG NGHỆ\r\n2 TẠP CHÍ KHOA HỌC & CÔNG NGHỆ . SỐ 30 - 2022\r\nlượng tử các hạt tải điện. Trong thực tế, vì\r\nhiệu ứng giam giữ lượng tử xảy ra khi có ít\r\nnhất là một chiều kích thước của vật liệu nhỏ\r\nso sánh được với bán kính Bohr, mà bán kính\r\nbohr của đa số vật liệu tinh thể bán dẫn nằm\r\ntrong vùng nano mét.\r\nVật liệu perovskite vô cơ dựa trên cấu trúc\r\nCsPbX3 đươc nghiên cứu rộng rãi gần đây do\r\nchúng có tính chất quang điện đặc biệt phù\r\nhợp cho các ứng dụng rộng rãi như pin mặt\r\ntrời, linh kiện chiếu sáng rắn, linh kiện nhạy\r\nquang...[1-3]', 0, 1, 15, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-13 00:04:39', NULL, 1, NULL),
(71, 'Tạp chí NCKH số 38', 'NGHIÊN CỨU XÂY DỰNG MÔ HÌNH GIÁM SÁT MÒN ĐÁ\r\nKHI GIA CÔNG HỢP KIM Ti6Al4V TRÊN MÁY MÀI PHẲNG\r\n', 'Quyết định thay dụng cụ phù hợp và đúng lúc là yêu cầu cấp thiết, nhằm tránh hư hỏng chi\r\ntiết hoặc thay dụng cụ không cần thiết. Giám sát trực tuyến tình trạng của dụng cụ là cần\r\nthiết đối với các máy công cụ hiện đại. Mài là quá trình, được đặc trưng bởi sử dụng đá mài\r\ncó nhiều lưỡi cắt, chịu mài mòn không đồng nhất, vì vậy mòn đá mài là phức tạp nhất so với\r\ncác loại dụng cụ cắt khác. Bài báo đề cập sự phát triển hệ thống giám sát mòn đá mài trên\r\ncơ sở ANN. Thiết lập được hệ giám sát trực tuyến mòn đá gồm DAQ và DSS. Xây dựng các\r\nquan hệ cơ bản trong quá trình mài, đặc biệt giữa mòn đá và các thông số đầu ra (lực cắt,\r\nrung động, độ nhám bề mặt…) sử dụng chúng trong giám sát mòn đá.', 0, 1, 19, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-13 00:39:01', NULL, 2, NULL),
(72, 'Tạp chí NCKH số 37', 'lokijuyhgtfrdesw', ',kụmnyhtbgvfcdx', 0, 1, 15, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:05:25', NULL, 3, NULL),
(73, 'Tạp chí NCKH số 36', 'zữecrvtgbyhjumki,l', ';plokijuyhgtfrde', 0, 1, 15, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:06:34', NULL, 2, NULL),
(74, 'Tạp chí NCKH số 32', ',mụnyhtbgvrfecdws', 'li,ukmjyhtreds', 0, 1, 15, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:08:13', NULL, 5, NULL),
(75, 'Tạp chí NCKH số 34', 'oiuytrewsa', 'mnbvcxzcv', 0, 1, 23, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:09:18', NULL, 1, NULL),
(76, 'Tạp chí NCKH số 29', 'ynttbrvfcdxsza', 'j6hy5gtsqrtghy', 0, 1, 28, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:14:03', NULL, 3, NULL),
(77, 'Tạp chí NCKH số 28', 'il,ukmyjnhtbrgvfecd', ',umynthbrgvfecdsx', 0, 1, 19, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:14:44', NULL, 4, NULL),
(78, 'Tạp chí NCKH số 27', 'oiuytrewa', 'jhgfdsaf', 0, 1, 25, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:15:31', NULL, 2, NULL),
(79, 'Tạp chí NCKH số 25', ';lkjhgfdsaaaaas', 'kjhgfdswedededede', 0, 1, 25, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:16:35', NULL, 1, NULL),
(80, 'Tạp chí NCKH số 24', '25dxsegfyf', 'ggfttyftyfy', 0, 1, 33, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:18:05', NULL, 5, NULL),
(81, 'Tạp chí NCKH số 23', 'dfghjkl', 'sdfghjkl', 0, 1, 27, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:19:18', NULL, 2, NULL),
(82, 'Tạp chí NCKH số 22', 'ẻtfghjjhyugfy', 'jkdfjdghiijsdhfiwe\r\n', 0, 1, 26, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:20:12', NULL, 3, NULL),
(83, 'Tạp chí NCKH số 20', 'kkjfifirfrfrfrfrggt', 'gtgtgtgtgdfgdfggtgt', 0, 1, 34, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:21:16', NULL, 1, NULL),
(84, 'Tạp chí NCKH số 19', 'ẻtyuioljhufgt', 'gfdrtdrrdr', 0, 1, 25, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:22:03', NULL, 5, NULL),
(85, 'Tạp chí NCKH số 16', 'jhhnhhh', 'jhhnhhhhghhyhyh', 0, 1, 26, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:22:54', NULL, 4, NULL),
(86, 'Tạp chí NCKH số 13', 'tggyhmftukmjutguiu', 'utukmukm uikj uikjjik', 0, 1, 24, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:23:46', NULL, 1, NULL),
(87, 'Tạp chí NCKH số 12', 'bgbhgbhghyhyt', 'rghrrhrthhrthrh', 0, 1, 15, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:26:39', NULL, 4, NULL),
(88, 'Tạp chí NCKH số 11', '2828282', 'dfvgbhnjmkl,', 0, 1, 17, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:28:57', NULL, 3, NULL),
(89, 'Tạp chí NCKH số 10', 'gtgtgtgtgtgtff', 'bfbfbtbtbtbtbtb', 0, 1, 32, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:30:26', NULL, 4, NULL),
(90, 'Tạp chí NCKH số 9', 'ttttgtgtgtgtg', 'tgtgtgtvtvtv', 0, 1, 32, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:31:13', NULL, 5, NULL),
(91, 'Tạp chí NCKH số 8', 'tgtgtgtgtg', 'tgtgtgtgtg', 0, 1, 15, 'public/banner-image/Bìa-1-số-30-1448x2048.jpg', 'disable', 1, 1, '1970-01-01 01:00:00', '2023-07-14 12:31:58', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `permission`, `verify_token`, `is_active`, `forgot_token`, `forgot_token_expire`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$kUh4xMjKTXeNiy7jSIJO6.LOVBth9hQiPwMi0BgD.ao2uWBDn1OB.', 'admin', 'cf408fb6caedd3c8308a21254b1a3cb4a5c8757f7740354104af7b43dfe7bff6', 1, NULL, NULL, '2023-06-12 16:17:46', '2023-07-11 21:42:03'),
(2, 'louis', 'louis@yahoo.com', '$2y$10$kUh4xMjKTXeNiy7jSIJO6.LOVBth9hQiPwMi0BgD.ao2uWBDn1OB.', 'user', NULL, 1, NULL, NULL, '2021-06-23 23:35:51', '2019-07-05 02:10:50'),
(3, 'kam', 'kamran@gmail.com', '$2y$10$nlZ5dMJ2sv9HrKU4NJslDe0ick10lGSBZNM2i14zKtDGGAEqAdXVS', 'user', NULL, 0, NULL, NULL, '2019-06-06 01:28:40', '2023-06-12 16:13:53'),
(4, 'nova', 'nova@yahoo.com', '$2y$10$CrqnkHtp2dKlyHfYRniXG.B8fWtrHtfavUyGVqc6bdiiF5lgwzi96', 'admin', NULL, 1, NULL, NULL, '2019-10-27 21:56:13', '2019-10-27 22:18:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `websetting`
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
-- Đang đổ dữ liệu cho bảng `websetting`
--

INSERT INTO `websetting` (`id`, `title`, `description`, `keywords`, `logo`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'online news', 'online news', 'online news', 'public/setting/logo.png', 'public/setting/icon.jpeg', '2019-06-09 19:54:37', '2022-10-24 16:41:31');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


--
-- Siêu dữ liệu
--
USE `phpmyadmin`;

--
-- Siêu dữ liệu cho bảng author
--

--
-- Siêu dữ liệu cho bảng banners
--

--
-- Siêu dữ liệu cho bảng categories
--

--
-- Siêu dữ liệu cho bảng comments
--

--
-- Siêu dữ liệu cho bảng menus
--

--
-- Siêu dữ liệu cho bảng posts
--

--
-- Siêu dữ liệu cho bảng users
--

--
-- Siêu dữ liệu cho bảng websetting
--

--
-- Siêu dữ liệu cho cơ sở dữ liệu news-project
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
