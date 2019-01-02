-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2019 lúc 02:07 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `music_web_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `cmid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `msg` text COLLATE utf8_unicode_ci NOT NULL,
  `cmdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`cmid`, `uid`, `id`, `msg`, `cmdate`) VALUES
(1, 11, 19, 'Hay lam', '0000-00-00 00:00:00'),
(2, 2, 19, 'ok', '0000-00-00 00:00:00'),
(3, 2, 21, 'Chả biết nói gì', '0000-00-00 00:00:00'),
(4, 5, 19, 'Có ai thấy con vàng nhà tôi đâu không', '0000-00-00 00:00:00'),
(5, 5, 12, 'Cũng tạm được', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `music`
--

CREATE TABLE `music` (
  `id` int(10) UNSIGNED NOT NULL,
  `sid` int(10) UNSIGNED NOT NULL,
  `mid` int(10) UNSIGNED NOT NULL,
  `song` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `new` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `best` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL,
  `topten` int(2) NOT NULL,
  `num` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mp3` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `music`
--

INSERT INTO `music` (`id`, `sid`, `mid`, `song`, `country`, `style`, `new`, `best`, `topten`, `num`, `img`, `mp3`) VALUES
(1, 16, 15, 'Xe Đạp', 'Việt Nam', 'BALLAD', '0', '1', 6, 7, 'image/xedap.gif', 'mp3/XeDap.mp3'),
(2, 1, 1, 'Faded', 'Âu Mỹ', 'BALLAD', '0', '2', 1, 10, 'image/special.gif', 'mp3/Faded - Alan Walker.mp3'),
(3, 2, 2, 'Look What You made Me Do', 'Âu Mỹ', 'POP', '0', '0', 4, 1, 'image/lwymmd.gif', 'mp3/Look What You Made Me Do.mp3'),
(4, 5, 3, 'BangBang', 'Âu Mỹ', 'POP', '0', '0', 8, 0, 'image/bangbang.jpg', 'mp3/BangBang.mp3'),
(5, 12, 4, 'Cant Be Tamed', 'Âu Mỹ', 'ROCK', '0', '0', 3, 0, 'image/cantbetamed.jpg', 'mp3/CantBeTamed.mp3'),
(6, 7, 5, 'Chandelier', 'Âu Mỹ', 'BALLAD', '0', '0', 2, 3, 'image/chandelier.gif', 'mp3/Chandelier.mp3'),
(7, 6, 6, 'Chạy ngay đi', 'Việt Nam', 'HIPHOP', '0', '0', 7, 0, 'image/chayngaydi.gif', 'mp3/ChayNgayDi.mp3'),
(8, 6, 6, 'Chúng ta không thuộc về nhau', 'Việt Nam', 'POP', '0', '0', 4, 0, 'image/ctktvn.jpg', 'mp3/ChungTaKhongThuocVeNhau.mp3'),
(9, 6, 6, 'Không phải dạng vừa đâu', 'Việt Nam', 'HIPHOP', '1', '0', 8, 0, 'image/kpdvd.jpg', 'mp3/KhongPhaiDangVuaDau.mp3'),
(10, 8, 7, 'Haru Haru', 'Hàn Quốc', 'HIPHOP', '0', '0', 8, 0, 'image/haru.gif', 'mp3/HaruHaru.mp3'),
(11, 9, 8, 'Smile', 'Âu Mỹ', 'ROCK', '1', '0', 9, 0, 'image/smile.jpg', 'mp3/Smile.mp3'),
(12, 13, 9, 'Gee', 'Hàn Quốc', 'POP', '1', '0', 1, 6, 'image/gee.gif', 'mp3/Gee.mp3'),
(13, 12, 10, 'Wrecking Ball', 'Âu Mỹ', 'HIPHOP', '0', '0', 10, 2, 'image/wreckingball.gif', 'mp3/WreckingBall.mp3'),
(14, 10, 11, 'Love Yourself', 'Âu Mỹ', 'POP', '0', '0', 6, 0, 'image/loveuself.jpg', 'mp3/LoveYourself.mp3'),
(15, 11, 12, 'Marshmello Wolves', 'Âu Mỹ', 'BALLAD', '0', '0', 5, 0, 'image/mmwolves.jpg', 'mp3/Marshmello – Wolves.mp3'),
(16, 16, 14, 'Anh', 'Việt Nam', 'POP', '0', '1', 5, 0, 'image/anh.gif', 'mp3/Anh.mp3'),
(17, 6, 6, 'Lạc Trôi', 'Việt Nam', 'HIPHOP', '0', '1', 2, 0, 'image/lactroi.gif', 'mp3/LacTroi.mp3'),
(18, 6, 6, 'Nơi này có anh', 'Việt Nam', 'POP', '0', '1', 0, 0, 'image/noinaycoanh.gif', 'mp3/NoiNayCoAnh.mp3'),
(19, 26, 29, 'Tình ta biển bạc đồng xanh', 'Việt Nam', 'BALLAD', '1', '0', 0, 0, 'image/phuonganh.gif', 'mp3/TinhTaBienBacDongXanh.mp3'),
(20, 17, 16, 'Bùa Yêu', 'Việt Nam', 'POP', '0', '0', 3, 0, 'image/bichphuong.jpg', 'mp3/BuaYeu.mp3'),
(21, 16, 17, 'Giấc Mơ Trưa', 'Việt Nam', 'BALLAD', '0', '1', 1, 0, 'image/anh-thuychi.gif', 'mp3/GiacMoTrua.mp3'),
(22, 18, 18, 'Ngốc Nghếch', 'Việt Nam', 'POP', '0', '0', 9, 0, 'image/ngocnghech.gif', 'mp3/NgocNghech.mp3'),
(23, 18, 19, 'Kí Ức Của Mưa', 'Việt Nam', 'BALLAD', '0', '0', 10, 4, 'image/baothy.gif', 'mp3/KiUcCuaMua.mp3'),
(24, 22, 20, 'Roar', 'Âu Mỹ', 'POP', '0', '0', 6, 0, 'image/roar.gif', 'mp3/Roar.mp3'),
(25, 22, 20, 'Dark Horse', 'Âu Mỹ', 'POP', '0', '0', 7, 9, 'image/darkhorse.gif', 'mp3/DarkHorse.mp3'),
(26, 23, 21, 'Ed Sheeran - Shape Of You (cover by J.Fla)', 'Âu Mỹ', 'BALLAD', '0', '0', 10, 0, 'image/jfla.gif', 'mp3/ShapeOfYou.mp3'),
(27, 24, 22, 'Sexy Love', 'Hàn Quốc', 'POP', '0', '0', 5, 0, 'image/sexylove.gif', 'mp3/SexyLove.mp3'),
(28, 25, 23, 'Lolipop', 'Hàn Quốc', 'ROCK', '0', '0', 4, 0, 'image/lolipop.gif', 'mp3/Lolipop.mp3'),
(29, 8, 7, 'Fantastic Baby', 'Hàn Quốc', 'ROCK', '0', '0', 6, 0, 'image/fantasticbaby.gif', 'mp3/FantasticBaby.mp3'),
(30, 25, 24, 'Fire', 'Hàn Quốc', 'HIPHOP', '0', '0', 9, 0, 'image/2ne1.gif', 'mp3/Fire.mp3'),
(31, 15, 25, 'DduDuDduDu', 'Hàn Quốc', 'POP', '1', '0', 3, 0, 'image/blackpink2.gif', 'mp3/DduDuDduDu - BlackPink.mp3'),
(32, 24, 26, 'We Were In Love', 'Hàn Quốc', 'BALLAD', '0', '0', 2, 0, 'image/wwinlove.gif', 'mp3/WeWereInLove.mp3'),
(33, 14, 27, 'Likey', 'Hàn Quốc', 'POP', '0', '1', 7, 0, 'image/likey.gif', 'mp3/Likey.mp3'),
(34, 14, 27, 'TWICE TT', 'Hàn Quốc', 'POP', '1', '0', 10, 0, 'image/twice.jpg', 'mp3/TT.mp3'),
(35, 4, 28, 'BBoom BBoom', 'Hàn Quốc', 'POP', '1', '0', 0, 0, 'image/nancy9.jpg', 'mp3/BBoomBBoom.mp3'),
(36, 2, 2, 'Love Story', 'Âu Mỹ', 'BALLAD', '1', '0', 0, 0, 'image/lovestory.gif', 'mp3/lovestory.mp3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `musician`
--

CREATE TABLE `musician` (
  `mid` int(11) UNSIGNED NOT NULL,
  `mname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `minfomation` text COLLATE utf8_unicode_ci NOT NULL,
  `mimg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `votelike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `musician`
--

INSERT INTO `musician` (`mid`, `mname`, `minfomation`, `mimg`, `votelike`) VALUES
(1, 'Alan Walker', 'Nhac si viet thi thich', '', 0),
(2, 'Taylor Swift', 'Nhac si thich thi viet', '', 0),
(3, 'Jessie J', 'Nhac si thich thi hat', '', 0),
(4, 'Antonina Armato, Tim James,  John Shanks', 'Nhac si thich thi viet', '', 0),
(5, 'Sia', 'Nhac si thich thi thich', '', 0),
(6, 'Sơn Tùng MTP', 'Nhac si thich noi loan', '', 0),
(7, 'Big Bang', 'Nhac si thich tham thi', '', 0),
(8, 'Vista', 'Nhac si thich vit qua ta', '', 0),
(9, 'SNSD', 'Nhac si thich hat', '', 0),
(10, 'Miley Cyrus', 'Nhac si thich quay', '', 0),
(11, 'Justin Bieber', 'Nhac si thich an bo', '', 0),
(12, 'Selena Gomes', 'Nhac si ban nhom', '', 0),
(14, 'Anh Vũ', 'Nhac si thich thi viet', '', 0),
(15, 'Thùy Chi - M4U', 'Nhac si thich thi viet', '', 0),
(16, 'Tiên Cookie - Phạm Thanh Hà - Dương K', 'Nhac si thich thi viet', '', 0),
(17, 'Giáng Son', 'Nhac si thich thi viet', '', 0),
(18, 'Bảo Thy', 'Nhac si thich thi viet', '', 0),
(19, 'Sỹ Luân - Nguyễn Hải Phong', 'Nhac si thich thi viet', '', 0),
(20, 'Katy Perry', 'Nhac si thich thi viet', '', 0),
(21, 'Ed Sheeran', 'Nhac si thich thi viet', '', 0),
(22, 'T Ara', 'Nhac si thich thi viet', '', 0),
(23, '2NE1 - BigBang', 'Nhac si thich thi viet', '', 0),
(24, '2NE1', 'Nhac si thich thi viet', '', 0),
(25, 'Black Pink', 'Nhac si thich thi viet', '', 0),
(26, 'Davichi', 'Nhac si thich thi viet', '', 0),
(27, 'Twice', 'Nhac si thich thi viet', '', 0),
(28, 'Momoland', 'Nhac si thich thi viet', '', 0),
(29, 'Duy Phường - Minh Phúc', 'Nhac si thich thi viet', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mylist`
--

CREATE TABLE `mylist` (
  `mlid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mylist`
--

INSERT INTO `mylist` (`mlid`, `id`, `uid`) VALUES
(19, 31, 2),
(20, 2, 2),
(21, 20, 2),
(22, 23, 2),
(23, 34, 2),
(24, 35, 2),
(25, 21, 2),
(26, 28, 2),
(27, 12, 2),
(28, 21, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply`
--

CREATE TABLE `reply` (
  `reid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `remsg` text COLLATE utf8_unicode_ci NOT NULL,
  `redate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `singer`
--

CREATE TABLE `singer` (
  `sid` int(10) UNSIGNED NOT NULL,
  `sname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sinfomation` text COLLATE utf8_unicode_ci NOT NULL,
  `simg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `votelike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `singer`
--

INSERT INTO `singer` (`sid`, `sname`, `sinfomation`, `simg`, `votelike`) VALUES
(1, 'Alan Walker', 'Ca sĩ thích thì hát', 'image/faded.jpg', 124598),
(2, 'Taylor Swift', 'Ca sĩ thích thì hát', 'image/taylorswift.jpg', 105689),
(3, 'Ariana Grande', 'Ca sĩ thích bỏ show', 'image/ariana-grande.jpg', 15878),
(4, 'Nancy', 'Ca sĩ thích thì hát', 'image/nancy2.jpg', 999999),
(5, 'Jessie J, Ariana Grande, Nicki Minaj', 'Ca sĩ thích thì hát', 'image/bangbang.jpg', 121212),
(6, 'Sơn Tùng MTP', 'Ca sĩ bán ti vi', 'image/kpdvd.jpg', 100012),
(7, 'Sia', 'Ca sĩ thích bi a', 'image/anhnen13.jpg', 99898),
(8, 'Big Bang', 'Ca sĩ thích thì hát', 'image/haru.jpg', 68778),
(9, 'Vista', 'Ca sĩ thích thì hát', 'image/smile.jpg', 45454),
(10, 'Justin Bieber', 'Ca sĩ thích bi a', 'image/loveuself.jpg', 55656),
(11, 'Selena Gomes', 'Ca sĩ thích seo đi', 'image/selena.jpg', 50454),
(12, 'Miley Cyrus', 'Ca si thích đu quay', 'image/miley.jpg', 99991),
(13, 'SNSD', 'Ca sĩ thích thì hát', 'image/snsd.jpg', 89898),
(14, 'Twice', 'Ca sĩ thích thì hát', 'image/twice1.jpg', 112119),
(15, 'Black Pink', 'Ca sĩ thích thì hát', 'image/blackpink4.jpg', 101258),
(16, 'Thùy Chi', 'Ca sĩ thích thì hát', 'image/thuychi.jpg', 100000),
(17, 'Bích Phương', 'Ca sĩ thích thì hát', 'image/bichphuong.jpg', 101000),
(18, 'Bảo Thy', 'Ca sĩ thích thì hát', 'image/anhnen14.jpg', 88989),
(19, 'Tzuzu', 'Ca sĩ thích thì hát', 'image/tzuzu1.jpg', 89898),
(20, 'Momoland', 'Ca sĩ thích thì hát', 'image/nancy6.jpg', 989898),
(21, 'Phương Anh', 'Ca sĩ thích thì hát', 'image/phuonganh.jpg', 88888),
(22, 'Katy Perry', 'Ca sĩ thích thì hát', 'image/darkhorse.gif', 255000),
(23, 'J.Fla', 'Ca sĩ thích thì hát', 'image/nancy5.png', 168000),
(24, 'T Ara', 'Ca sĩ thích thì hát', 'image/blackpink1.png', 145454),
(25, '2NE1', 'Ca sĩ thích thì hát', 'image/twice1.jpg', 165652),
(26, 'Minh Phúc', 'Ca sĩ/ ban nhạc: Minh Phúc Tên thật/ tên đầy đủ: Minh Phúc Ngày sinh/ Năm sinh/ thành lập: 19xx Nước/ quốc gia: Việt Nam Ca sĩ Minh Phúc là thành viên của ban the Black Caps', 'image/nen3.gif', 99999),
(28, 'Dũng CT', 'Gamer thích thì hát', 'image/background.jpg', 88888),
(29, 'MoMo', 'Ca sĩ thích thì hát', 'image/momoland.jpg', 1111111),
(30, 'LaLa', 'Ca sĩ thích thì hát', 'image/nancy7.png', 898989),
(31, 'HaVa HaNa', 'Ca sĩ thích thì hát', 'image/nancy09.jpg', 889989);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `uid` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sex` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL,
  `activation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `address`, `email`, `sex`, `birth`, `username`, `password`, `level`, `activation`, `status`) VALUES
(1, 'ad', 'ad', 'Số 7 - Phùng Hưng - Hà Đông - Hà Nội', 'admin169@gmail.com', '1', '0000-00-00', 'admin', '25f9e794323b453885f5181f1b624d0b', '2', '', '1'),
(2, 'Đồng năm', 'Cân team 20 gg', 'Số 17 - Phùng Hưng - Hà Đông - Hà Nội', 'gdnhell169@gmail.com', '1', '0000-00-00', 'cauvang', '25f9e794323b453885f5181f1b624d0b', '1', '', '1'),
(3, 'Thần kiếm', 'Vô địch', 'Hà Đông - Hà Nội', 'thankiem@gmail.com', '0', '0000-00-00', 'thankiem', 'cc569360a083da71d8c1731bf97f82bd', '0', '', '1'),
(4, 'Hổ mang', 'trắng', 'Hà Đông - Hà Nội', 'homangtrang169@gmail.com', '1', '0000-00-00', 'homangtrang', '25d55ad283aa400af464c76d713c07ad', '0', '', '1'),
(5, 'Lão', 'Hạc', 'Hà Đông - Hà Nội', 'gdnhell169@gmail.com', '0', '0000-00-00', 'laohac', '25d55ad283aa400af464c76d713c07ad', '0', '', '1'),
(6, 'Thêm một', 'Tài khoản', 'Hà Đông - Hà Nội', 'gdnhell169@gmail.com', '0', '0000-00-00', 'themmottaikhoan', '25f9e794323b453885f5181f1b624d0b', '0', '', '1'),
(7, 'yasuo', 'moe', 'Hà Đông - Hà Nội', 'yasuo@gmail.com', '0', '0000-00-00', 'yasuo', '03cce43f8b49ea165c6effeb3e141e08', '', '', '1'),
(8, 'Lam sao', 'Bi gio', 'Hà Đông - Hà Nội', 'gdnhell169@gmail.com', '0', '0000-00-00', 'lamsaobigio', 'cc569360a083da71d8c1731bf97f82bd', '0', 'c485c7959f2fcaf54da995d4ce32066b', '0'),
(10, 'Biet', 'Lam sao', 'Hà Đông - Hà Nội', 'gdnhell169@gmail.com', '0', '0000-00-00', 'bietlamsao', '25f9e794323b453885f5181f1b624d0b', '0', 'd06323abca4e45aea666d3326d60624d', '0'),
(11, 'them', 'them', 'Hà Đông - Hà Nội', 'gdnhell169@gmail.com', '0', '0000-00-00', 'taikhoan', '25f9e794323b453885f5181f1b624d0b', '0', '', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmid`),
  ADD KEY `id` (`id`),
  ADD KEY `uid` (`uid`);

--
-- Chỉ mục cho bảng `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`),
  ADD KEY `mid` (`mid`);

--
-- Chỉ mục cho bảng `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`mid`);

--
-- Chỉ mục cho bảng `mylist`
--
ALTER TABLE `mylist`
  ADD PRIMARY KEY (`mlid`),
  ADD KEY `id` (`id`),
  ADD KEY `uid` (`uid`);

--
-- Chỉ mục cho bảng `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reid`),
  ADD KEY `id` (`id`),
  ADD KEY `uid` (`uid`);

--
-- Chỉ mục cho bảng `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`sid`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `cmid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `music`
--
ALTER TABLE `music`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `musician`
--
ALTER TABLE `musician`
  MODIFY `mid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `mylist`
--
ALTER TABLE `mylist`
  MODIFY `mlid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `reply`
--
ALTER TABLE `reply`
  MODIFY `reid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `singer`
--
ALTER TABLE `singer`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `music` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Các ràng buộc cho bảng `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `singer` (`sid`),
  ADD CONSTRAINT `music_ibfk_2` FOREIGN KEY (`mid`) REFERENCES `musician` (`mid`);

--
-- Các ràng buộc cho bảng `mylist`
--
ALTER TABLE `mylist`
  ADD CONSTRAINT `mylist_ibfk_1` FOREIGN KEY (`id`) REFERENCES `music` (`id`),
  ADD CONSTRAINT `mylist_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Các ràng buộc cho bảng `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`id`) REFERENCES `music` (`id`),
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
