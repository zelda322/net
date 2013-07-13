-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 18 2012 г., 08:18
-- Версия сервера: 5.5.16
-- Версия PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `net`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of user',
  `login` varchar(54) NOT NULL,
  `pass` varchar(54) NOT NULL,
  `email` varchar(54) NOT NULL,
  `salt` varchar(54) NOT NULL,
  `status` int(1) NOT NULL,
  `age` int(2) NOT NULL,
  `sex` varchar(16) NOT NULL,
  `avatar` varchar(54) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='users table' AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `email`, `salt`, `status`, `age`, `sex`, `avatar`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@example.ru', '', 0, 0, '', ''),
(2, 'test', '827ccb0eea8a706c4c34a16891f84e7b', 'test@mail.ru', '', 0, 0, '', ''),
(3, 'lol', '8f036369a5cd26454949e594fb9e0a2d', 'lol@mail.ru', '', 0, 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
