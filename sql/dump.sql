-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 07 2014 г., 14:37
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `curs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`id` int(11) NOT NULL,
  `mens` int(100) NOT NULL,
  `det` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `mens`, `det`) VALUES
(45, 1, 330),
(44, 23, 330);

-- --------------------------------------------------------

--
-- Структура таблицы `components`
--

CREATE TABLE IF NOT EXISTS `components` (
`id` int(11) NOT NULL,
  `detals` varchar(20) NOT NULL,
  `cost` decimal(5,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=334 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `components`
--

INSERT INTO `components` (`id`, `detals`, `cost`) VALUES
(330, 'Артур Конан Дойл', '432'),
(331, 'Агата Кристи', '100'),
(332, 'Вальтер Скотт', '11'),
(333, 'Уильям Шекспир', '120');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(100) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `fio`, `adres`) VALUES
(25, 'Иванов Иван Иванович', 'ул. Народная д.31 кв. 54'),
(23, 'Киврин Михаил Иванович', 'пр. Наставников д.30 кв.19'),
(1, 'Кипунов Иван Александрович', 'пр. Космонавтов д.51 кв. 17'),
(27, 'Петров Петр Петрович  ', 'ул.Московская,д2,кв3'),
(26, 'Самодуров Павел Олегович', 'ул. Пиратов д.4 кв.44'),
(22, 'Семенов Олег Викторович', 'ул. Ленина д.13 кв.55');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id`), ADD KEY `detals` (`det`), ADD KEY `User` (`mens`), ADD KEY `mens` (`mens`,`det`), ADD KEY `det` (`det`), ADD KEY `mens_2` (`mens`), ADD KEY `mens_3` (`mens`), ADD KEY `det_2` (`det`);

--
-- Индексы таблицы `components`
--
ALTER TABLE `components`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `detals` (`detals`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `id_2` (`id`), ADD UNIQUE KEY `detals_5` (`detals`), ADD KEY `detals_2` (`detals`), ADD KEY `detals_3` (`detals`), ADD KEY `detals_4` (`detals`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `fio` (`fio`,`adres`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `components`
--
ALTER TABLE `components`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=334;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
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
