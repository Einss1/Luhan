-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 03:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject01`
--

-- --------------------------------------------------------

--
-- Table structure for table `kanjis`
--

CREATE TABLE `kanjis` (
  `id` int(50) NOT NULL,
  `kanji` varchar(50) DEFAULT NULL,
  `meaning` varchar(50) NOT NULL,
  `level` int(50) NOT NULL,
  `hiragana` varchar(255) DEFAULT NULL,
  `romanji` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kanjis`
--

INSERT INTO `kanjis` (`id`, `kanji`, `meaning`, `level`, `hiragana`, `romanji`) VALUES
(1, '一', 'one', 1, NULL, 'ichi'),
(2, '二', 'two', 1, NULL, 'ni'),
(3, '三', 'three', 1, NULL, 'san'),
(4, '四', 'four', 1, NULL, 'yon'),
(5, '五', 'five', 1, NULL, 'go'),
(6, '六', 'six', 1, NULL, 'roku'),
(7, '七', 'seven', 1, NULL, 'nana'),
(8, '八', 'eight', 1, NULL, 'hachi'),
(9, '九', 'nine', 1, NULL, 'kyu'),
(10, '十', 'ten', 1, NULL, 'jū'),
(25, NULL, 'hello', 2, 'こんにちわ', 'kon’nichiwa'),
(26, NULL, 'bye', 2, 'さようなら', 'sayounara'),
(27, 'お願いします', 'please', 2, 'おねがいします', 'onegaishimasu'),
(28, NULL, 'yes', 2, 'はい。', 'hai'),
(29, NULL, 'no', 2, 'いいえ', 'iie'),
(30, NULL, 'ok', 2, 'オーケー', 'ok'),
(31, '助けて', 'help', 2, 'たすけて', 'tasukete'),
(32, NULL, 'sorry', 2, 'ごめんなさい', 'gomennasai'),
(33, NULL, 'excuse me', 2, 'すみません', 'sumimasen'),
(34, NULL, 'thank you', 2, 'ありがとうございます。', 'arigatougozaimasu'),
(35, '黒', 'black', 3, 'くろ', 'kuro'),
(36, '白', 'white', 3, 'しろ', 'shiro'),
(37, '緑', 'green', 3, 'みどり', 'midori'),
(38, '黄', 'yellow', 3, 'き', 'ki'),
(39, '赤', 'red', 3, 'あか', 'aka'),
(40, '青', 'blue', 3, 'あお', 'ao'),
(41, '紫', 'purple', 3, 'むらさき', 'murasaki'),
(42, 'ピンク', 'pink', 3, 'ピンク', 'pinku'),
(43, '茶', 'brown', 3, 'ちゃ', 'cha'),
(44, '灰', 'grey', 3, 'はい', 'hai'),
(45, '月曜日', 'monday', 4, 'げつようび', 'getsuyoubi'),
(46, '火曜日', 'tuesday', 4, 'かようび', 'kayoubi'),
(47, '水曜日', 'wednesday', 4, 'すいようび', 'suiyoubi'),
(48, '木曜日', 'thursday', 4, 'もくようび', 'mokuyoubi'),
(49, '金曜日', 'friday', 4, 'きんようび', 'kinyoubi'),
(50, '土曜日', 'saturday', 4, 'どようび', 'doyoubi'),
(51, '日曜日', 'sunday', 4, 'にちようび', 'nichiyoubi'),
(52, '今日', 'today', 4, 'きょう', 'kyou'),
(53, '明日', 'tomorrow', 4, 'あした', 'ashita'),
(54, '昨日', 'yesterday', 4, 'きのう', 'kinou'),
(55, '日', 'day', 5, 'ひ', 'hi'),
(56, '朝', 'morning', 5, 'あさ', 'asa'),
(57, '正午', 'midday', 5, 'しょうご', 'shōgo'),
(58, '午後', 'afternoon', 5, 'ごご', 'gogo'),
(59, '晩', 'evening', 5, 'ばん', 'ban'),
(60, '真夜中', 'midnight', 5, 'まよなか', 'mayonaka'),
(61, '日の出', 'sunrise', 5, 'ひので', 'hinode'),
(62, '日没', 'sunset', 5, 'にちぼつ', 'nichibotsu'),
(63, '夜明け', 'dawn', 5, 'よあけ', 'yoake'),
(64, '夕暮れ', 'dusk', 5, 'ゆうぐれ', 'yūgure');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(34, 'luan_navarro@hotmail.com', '6e6f2bb7bee65090', '$2y$10$s.8RKpeXniHjVHVUB.cxIOUcRvOLAMpwYN26f.WfCvDCQhComr9Na', '1635688288');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `usersLevel` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersLevel`) VALUES
(88, 'Luan Navarro Silva', 'luan_navarro@hotmail.com', 'luan_navarro', '$2y$10$TmWHBAFSpBs8Rhae7OVuK.1n4H555gTABADtb6mjG7R6Yw0f4xdwK', 2),
(90, 'Admin', 'admin@admin.com', 'admin', '$2y$10$QCryukDhlwPaO4ih1B9TR.pINEBE915yiHye7AGbKgf3L1jDF.3B.', 6),
(92, 'test', 'test@test.com', 'test', '$2y$10$uv1wMjkjlODnnr5lBgVNGefwJCHz/p4VIuxLaglkquqXrbDt8Is5K', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kanjis`
--
ALTER TABLE `kanjis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kanjis`
--
ALTER TABLE `kanjis`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
