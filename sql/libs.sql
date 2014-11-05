-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 19 2013 г., 17:47
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `flovers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mens` int(100) NOT NULL,
  `det` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `detals` (`det`),
  KEY `User` (`mens`),
  KEY `mens` (`mens`,`det`),
  KEY `det` (`det`),
  KEY `mens_2` (`mens`),
  KEY `mens_3` (`mens`),
  KEY `det_2` (`det`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `mens`, `det`) VALUES
(45, 19, 330),
(44, 23, 330);

-- --------------------------------------------------------

--
-- Структура таблицы `components`
--

CREATE TABLE IF NOT EXISTS `components` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detals` varchar(20) NOT NULL,
  `cost` decimal(5,0) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `detals` (`detals`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`),
  UNIQUE KEY `detals_5` (`detals`),
  KEY `detals_2` (`detals`),
  KEY `detals_3` (`detals`),
  KEY `detals_4` (`detals`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=335 ;

--
-- Дамп данных таблицы `components`
--

INSERT INTO `components` (`id`, `detals`, `cost`) VALUES
(330, 'Гербера', '432'),
(331, 'Ромашка', '100'),
(332, 'хризантема', '11'),
(333, 'роза', '120'),
(334, 'примула', '100');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fio` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `fio` (`fio`,`adres`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `fio`, `adres`) VALUES
(19, 'Измаилов Олег Александрович', 'проспект Ленина д.51 кв. 17'),
(25, 'Кондратович Павел Александрович', 'ул. Замысловского д.31 кв. 55'),
(23, 'Лупоглазов Михаил Иванович', 'проспект Гагарина д.55 кв.33'),
(27, 'Петров Петр Петрович  ', 'ул.Московская,д2,кв3'),
(26, 'Самодуров Павел Олегович', 'ул. Пиратов д.4 кв.44'),
(22, 'Семенов Олег Викторович', 'проспект Ленина д.51 кв. 17');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`mens`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`det`) REFERENCES `components` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
