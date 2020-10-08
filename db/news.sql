-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.37 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных news
CREATE DATABASE IF NOT EXISTS `news` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `news`;

-- Дамп структуры для таблица news.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `title` char(55) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы news.posts: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
REPLACE INTO `posts` (`title`, `date`) VALUES
	('Акции на размещение баннерного пано 20% до конца июля', '2020-10-08'),
	('Мы работаем в обычном режиме с 15 июня!', '2020-06-15'),
	('С 20 июня масочный режим', '2020-06-18'),
	('Как правильно подобрать рекламный канал?', '2020-06-10'),
	('Акция до конца 2019 года', '2019-10-08'),
	('Статистика за уходящий год', '2019-12-15'),
	('Обновление портфолио, отзывов  и вакансий', '2020-07-07'),
	('Мы переезжаем в новый офис на Ленина 21', '2020-03-13'),
	('С праздником 8 МАРТА !!!', '2020-03-13'),
	('Новый дизайн сайта! ☺ Пожалуйста, оставьте отзыв', '2020-08-09');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
