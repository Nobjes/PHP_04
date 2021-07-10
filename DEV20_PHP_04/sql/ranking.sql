-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 7 月 10 日 00:44
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `ranking_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `login_table`
--

CREATE TABLE `login_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `kana` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `u_name` varchar(64) NOT NULL,
  `lid` varchar(64) NOT NULL,
  `lpw` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `login_table`
--

INSERT INTO `login_table` (`id`, `name`, `kana`, `email`, `u_name`, `lid`, `lpw`) VALUES
(1, '鈴木宣彦', 'スズキノブヒコ', 'evenkoala@yahoo.co.jp', 'ノブです', 'suzuki', 'pw'),
(5, '山田花子', 'ヤマダハナコ', 'hanako@yahoo.co.jp', 'ハナコちゃん', 'hanako', 'hanahana'),
(6, '大谷翔平', 'オオタニショウヘイ', 'ootani@ootani.com', 'オータニさん', 'ootani', 'ootani'),
(7, '本田圭祐', 'ホンダケイスケ', 'honda@honda.com', '情熱大陸', 'honda', 'honda'),
(8, '山田太郎', 'ヤマダタロウ', 'yamada@tarou', 'タローちゃん', 'taro', 'yamada'),
(9, 'スズキ', 'スズキノブヒコ', 'evenkoala@yahoo.co.jp', 'ノブです', 'suzuki', 'pw'),
(10, 'スズキ', 'スズキノブヒコ', 'evenkoala@yahoo.co.jp', 'ノブです', 'suzuki', 'pw'),
(11, 'スズキ', 'スズキノブヒコ', 'evenkoala@yahoo.co.jp', 'ノブです', 'suzuki', 'pw'),
(12, '', '', '', '', '', ''),
(13, '八村塁', 'ハチムラルイ', 'rui@hachi.com', 'ハッチ', 'hacchi', '8888');

-- --------------------------------------------------------

--
-- テーブルの構造 `ranking_table`
--

CREATE TABLE `ranking_table` (
  `id` int(12) NOT NULL,
  `name` varchar(128) NOT NULL,
  `first` varchar(64) NOT NULL,
  `first_place` varchar(64) NOT NULL,
  `first_com` varchar(128) NOT NULL,
  `img_first` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `second` varchar(64) NOT NULL,
  `second_place` varchar(64) NOT NULL,
  `second_com` varchar(128) NOT NULL,
  `img_second` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `third` varchar(64) NOT NULL,
  `third_place` varchar(64) NOT NULL,
  `third_com` varchar(128) NOT NULL,
  `img_third` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fourth` varchar(64) NOT NULL,
  `fourth_place` varchar(64) NOT NULL,
  `fourth_com` varchar(128) NOT NULL,
  `img_fourth` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fifth` varchar(64) NOT NULL,
  `fifth_place` varchar(64) NOT NULL,
  `fifth_com` varchar(128) NOT NULL,
  `img_fifth` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ranking_table`
--

INSERT INTO `ranking_table` (`id`, `name`, `first`, `first_place`, `first_com`, `img_first`, `second`, `second_place`, `second_com`, `img_second`, `third`, `third_place`, `third_com`, `img_third`, `fourth`, `fourth_place`, `fourth_com`, `img_fourth`, `fifth`, `fifth_place`, `fifth_com`, `img_fifth`) VALUES
(25, 'スズキ', '来々軒', '田町', '', '肉画像２.jpeg', '和膳', '人形町', '', '和食.jpeg', '寿司よし', '東京', '', '和食.jpeg', '道産子', '札幌', '', '中華.jpeg', 'ハーモニー', '原宿', '', '寿司.jpeg'),
(27, '情熱大陸', '原宿王', '原宿', '', '中華.jpeg', 'うまい亭', '新橋', '', '肉画像.jpeg', '寿司よし', '大阪', '', '寿司.jpeg', '道産子', '札幌', '', '和食.jpeg', 'レストランゼロ', '大宮', '', '肉画像２.jpeg'),
(28, 'ハッチ', '来々軒', '田町', '', '中華.jpeg', '和膳', '人形町', '', '和食.jpeg', '寿司よし', '東京', '', '寿司.jpeg', '道産子', '札幌', '', '肉画像.jpeg', 'ハーモニー', '原宿', '', '肉画像２.jpeg'),
(29, '大和田常務', 'おおおおおおおお', '原宿', 'うううううう', '寿司.jpeg', 'えええええええ', '三軒茶屋', 'うううううううう', '寿司.jpeg', 'ああああああ', '大阪', 'いいいいいいいいい', '寿司.jpeg', 'いいいいいい', '梅田', 'えええええええええ', '寿司.jpeg', 'うううううううう', '大宮', 'あああああああああ', '寿司.jpeg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `ranking_table`
--
ALTER TABLE `ranking_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- テーブルの AUTO_INCREMENT `ranking_table`
--
ALTER TABLE `ranking_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
