-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2022 年 04 月 19 日 12:05
-- 伺服器版本： 5.7.37-cll-lve
-- PHP 版本： 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `danhewnm608`
--

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Echo', 'enest.com', 'https://enest.com', 50, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Echo Is Listening', 'Echo.jpg', 'Echo_1.jpg,Echo_2.jpg,'),
(2, 'Apple Speaker', 'enest.com', 'https://enest.com', 10, 'device', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'HomePod mini smart speaker by Apple', 'Speaker.jpg', 'Speaker_1.jpg,Speaker_2.jpg'),
(3, 'Google Home Mini', 'remoter.com', 'remoter.com', 50, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Google Home Mini', 'Google', 'Google_1.jpg,Google_2.jpg'),
(4, 'Alexa', 'e-nest.com', 'e-nest.com', 10, 'device', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Hi Alexa', 'Alexa.jpg', 'Alexa_1.jpg,Alexa_2.jpg,'),
(5, 'Nuki Smart Lock', 'e-nest.com', 'e-nest.com', 50, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Nuki Smart Lock', 'Nuki.jpg', 'Nuki_1.jpg,Nuki_2.jpg,'),
(6, 'Smart Thermostat', 'e-nest.com', 'e-nest.com', 149, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Smart Thermostat', 'Thermostat.jpg', 'Thermostat_1.jpg,Thermostat_2.jpg,'),
(7, 'Ecobee3 Lite', 'e-nest.com', 'e-nest.com', 149, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Smart Thermostat-Ecobee3 Lite', 'Ecobee.jpg', 'Ecobee_1.jpg,Ecobee_2.jpg,'),
(8, 'Smart Clock Gen 2', 'e-nest.com', 'e-nest.com', 69, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'A daily assistant Clock Gen 2', 'ClockGen.jpg', 'ClockGen_1.jpg,ClockGen_2.jpg,'),
(9, 'Apple Watch', 'e-nest.com', 'e-nest.com', 399, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Apple Watch', 'AppleWatch.jpg', 'AppleWatch_1.jpg,AppleWatch_2.jpg,'),
(10, 'Google Nest Hub', 'e-nest.com', 'e-nest.com', 99, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Google Nest Hub Smart Display', 'Nest.jpg', 'Nest_1.jpg,Nest_2.jpg,'),
(11, 'Wyze Thermostat', 'e-nest.com', 'e-nest.com', 71, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Wyze Thermostat', 'Wyze.jpg', 'Wyze_1.jpg,Wyze_2.jpg,'),
(12, 'Fitbit Sense Smart Watch', 'e-nest.com', 'e-nest.com', 300, 'product', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Fitbit Sense Smart Watch', 'Fibit.jpg', 'Fibit_1.jpg,Fibit_2.jpg,');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
