-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 02 2021 г., 13:59
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lz_queue`
--

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`name`, `surname`, `datetime`) VALUES
('name1', 'surname1', '2021-12-02 01:54:53.000000'),
('name2', 'surname2', '2021-12-02 12:18:48.000000'),
('name3', 'surname3', '2021-12-02 12:43:17.000000'),
('name4', 'surname4', '2021-12-02 12:43:55.000000'),
('gfd', 'gfds', '2021-12-02 13:17:29.000000'),
('11', '11', '2021-12-02 13:19:58.000000'),
('hts', 'hgfh', '2021-12-02 13:20:40.000000'),
('222', '222', '2021-12-02 13:49:20.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
