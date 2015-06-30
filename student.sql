-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 30 2015 г., 12:21
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `stud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `group` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `name`, `sname`, `gender`, `age`, `group`, `faculty`) VALUES
(2, 'Петр', 'Петров', 'Мужской', '45', 'ДИД', 'ИИТ'),
(3, 'Елена', 'Степаненко', 'Женский', '24', '4  - ТУР', 'ИТОТ'),
(4, 'Кирил', 'Кирилов', 'Мужской', '44', '3 - Физ', 'ИФМИТ'),
(5, 'Иван', 'Иванов', 'Мужской', '20', 'Пи', 'ИИТ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
