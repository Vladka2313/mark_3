-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.22 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win64
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных work
CREATE DATABASE IF NOT EXISTS `work` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `work`;


-- Дамп структуры для таблица work.comment
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы work.comment: ~10 rows (приблизительно)
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` (`id`, `name`, `email`, `massage`) VALUES
	(1, '\r\n  `password` varchar(128) COLLATE utf8_unicode_c', '\r\n  `email` varchar(128) COLLATE utf8_unicode_ci N', ''),
	(2, '\r\n  PRIMARY KEY (`id`)\r\n) ENGINE=InnoDB AUTO_INCRE', ' `username`', ' `password`'),
	(3, ' \'demo\'', ' \'$2a$10$JTJf6/XqC94rrOtzuF397OHa4mbmZrVTBOQCmYD9U', ' \'webmaster@example.com\''),
	(4, ' \'\') */;\r\n/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_', ' 1', ' @OLD_FOREIGN_KEY_CHECKS) */;'),
	(5, '', '', ''),
	(6, '\r\n  `password` varchar(128) COLLATE utf8_unicode_c', '\r\n  `email` varchar(128) COLLATE utf8_unicode_ci N', ''),
	(7, '\r\n  PRIMARY KEY (`id`)\r\n) ENGINE=InnoDB AUTO_INCRE', ' `username`', ' `password`'),
	(8, ' \'demo\'', ' \'$2a$10$JTJf6/XqC94rrOtzuF397OHa4mbmZrVTBOQCmYD9U', ' \'webmaster@example.com\''),
	(9, ' \'\') */;\r\n/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_', ' 1', ' @OLD_FOREIGN_KEY_CHECKS) */;'),
	(10, '', '', '');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;


-- Дамп структуры для таблица work.tbl_comment
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `author` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comment_post` (`post_id`),
  CONSTRAINT `FK_comment_post` FOREIGN KEY (`post_id`) REFERENCES `tbl_post` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы work.tbl_comment: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `tbl_comment` DISABLE KEYS */;
INSERT INTO `tbl_comment` (`id`, `content`, `status`, `create_time`, `author`, `email`, `url`, `post_id`) VALUES
	(1, 'This is a test comment.', 2, 1230952187, 'Tester', 'tester@example.com', NULL, 2);
/*!40000 ALTER TABLE `tbl_comment` ENABLE KEYS */;


-- Дамп структуры для таблица work.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы work.tbl_user: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `profile`) VALUES
	(1, 'demo', '$2a$10$JTJf6/XqC94rrOtzuF397OHa4mbmZrVTBOQCmYD9U.obZRUut4BoC', 'webmaster@example.com', NULL);
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
