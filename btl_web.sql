-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 18, 2023 lúc 07:16 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `musics`
--

CREATE TABLE `musics` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `singer` text NOT NULL,
  `path` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `musics`
--

INSERT INTO `musics` (`id`, `name`, `singer`, `path`, `image`) VALUES
(3, 'Beatiful in white', 'Westlife', 'Westlife_Beautiful in white.mp3', 'beautiful_in_white.png'),
(4, 'Lạ Lùng', 'Vũ', 'Lạ_Lùng _Vũ.mp3', 'Vu_Ti_Hong.jpg'),
(5, 'Talking To The Moon', 'Bruno Mars', 'Bruno Mars_Talking To The Moon.mp3', 'Talking to the moon.jpg'),
(6, 'Just Give Me A Reason', 'P!nk', 'P!nk_Just Give Me A Reason ft Nate Ruess.mp3', 'Just_give_me_a_reason.jpg'),
(7, 'To The Moon', 'holigan', 'TO THE MOON_hooligan.mp3', 'TO THE MOON.jpg'),
(8, 'I do', '911 Band', 'I_Do _911_Band.mp3', 'I_Do_911.jpg'),
(9, 'Happy For You', 'Lukas Graham feat Vũ', 'Lukas Graham Happy For You .mp3', 'HappyForYou.png'),
(10, 'Snowman', 'Sia', 'Snowman_Sia.mp3', 'Sia_Snowman.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `top100`
--

CREATE TABLE `top100` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `top100`
--

INSERT INTO `top100` (`id`, `image`, `title`, `description`) VALUES
(1, 'top100_edm.png', 'Top 100 Bài Nhạc Trẻ Hay', 'MONO'),
(2, 'top100_nhacAuMy.png', 'Test1', 'Test1ha');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `top100`
--
ALTER TABLE `top100`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `musics`
--
ALTER TABLE `musics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `top100`
--
ALTER TABLE `top100`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
