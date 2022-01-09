-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-12-27 14:44:04
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `mypolling`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL,
  `intro` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `ad`
--

INSERT INTO `ad` (`id`, `name`, `sh`, `intro`) VALUES
(17, 'goat-2792443__340.jpg', 0, 'cow'),
(20, '48edgwa3aasgy19.jpg', 0, 'seamless'),
(23, 'a_sug_1.jpg', 0, 'amazimg'),
(26, '8ef2d9af4a3876815e1b79d58ae05fded7aff18c_810.jpg', 1, 'pink sight');

-- --------------------------------------------------------

--
-- 資料表結構 `options`
--

CREATE TABLE `options` (
  `id` int(11) UNSIGNED NOT NULL,
  `opt` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `count` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `topic_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `options`
--

INSERT INTO `options` (`id`, `opt`, `count`, `topic_id`) VALUES
(1, '同意', 3, 5),
(2, '不同意', 1, 5),
(3, '沒意見', 3, 5),
(4, '我認為如果可以此方式大量發電解決台灣缺電的問題就留下', 3, 5),
(9, '同意', 13, 1),
(10, '不同意', 3, 1),
(11, '沒意見', 10, 1),
(13, '同意', 2, 3),
(17, '不同意', 0, 3),
(21, '同意', 1, 2),
(22, '不同意', 3, 2),
(24, '沒意見', 5, 2),
(25, '為了台美的互惠利益，我苟同。', 1, 2),
(32, '我認為不重啟核四面臨電費調漲是無可避免的', 8, 1),
(33, '沒意見', 1, 3),
(34, '我認為公投綁大選會讓很多人人云亦云的亂投', 1, 3),
(37, '123', 0, 9),
(38, '23215', 1, 9);

-- --------------------------------------------------------

--
-- 資料表結構 `photo`
--

CREATE TABLE `photo` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL,
  `intro` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `photo`
--

INSERT INTO `photo` (`id`, `name`, `sh`, `intro`) VALUES
(1, 'news-16372170598656.jpg', 1, '1218 公投');

-- --------------------------------------------------------

--
-- 資料表結構 `topics`
--

CREATE TABLE `topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(64) CHARACTER SET utf32 COLLATE utf32_unicode_520_ci NOT NULL,
  `sh` tinyint(1) NOT NULL,
  `intro` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `topics`
--

INSERT INTO `topics` (`id`, `topic`, `name`, `sh`, `intro`) VALUES
(1, '您是否同意核四啟封商轉發電？', '', 1, ''),
(2, '您是否同意政府應全面禁止進口含有瘦肉精（萊克多巴胺）豬隻之肉品、內臟及其相關產製品？', '', 1, NULL),
(3, '你是否同意公民投票應與該選舉同日舉行？', '', 1, NULL),
(5, '您是否同意中油天然氣接收站遷離桃園大潭藻礁海域？', '', 1, NULL),
(9, 'FFF', '', 0, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `account` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(24) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` date NOT NULL,
  `login_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `password`, `email`, `name`, `gender`, `birthday`, `login_id`) VALUES
(1, 'ohm', '0322', 'ohm@gmail.com', '陳炳林', '', '2000-03-22', 1),
(2, 'nanon', '1218', 'nanon@outlook.com', '太子爺', '', '2000-12-18', 2);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
