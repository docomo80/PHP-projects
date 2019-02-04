-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.16-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for project
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `project`;

-- Dumping structure for table project.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8;

-- Dumping data for table project.categories: ~3 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`) VALUES
	(125, 'entertainment'),
	(124, 'sport'),
	(123, 'world');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table project.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `FK_news_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- Dumping data for table project.news: ~6 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `category_id`, `time`, `name`, `text`) VALUES
	(35, 123, '2018-10-26 02:20:58', 'Бомбена заплаха приземи самолет на Wizz Air', 'Самолет на нискотарифната компания Wizz Air, извършващ полет от град Кутаиси, Грузия, до Варшава, Полша, кацна извънредно в Букурещ днес заради бомбена заплаха, съобщава Ройтерс, позовавайки се на румънски официални представители.'),
	(36, 125, '2018-10-26 02:22:33', 'Принц Хари и Меган Маркъл посетиха кралство Тонга ', 'Меган Маркъл и принц Хари продължиха обиколката си в Тихоокеанския регион с посещение в кралство Тонга.'),
	(37, 124, '2018-10-26 02:23:56', 'Лудогорец не успя да победи и в третия си мач', 'Джоди Лукоки даде аванс на българския шампион в 7-ата минута, но домакините стигнаха бързо до реми с гол от дузпа на Хорхе Ларена.'),
	(38, 123, '2018-10-26 02:25:04', 'Русия подготвя за ЕС списък с терористи', 'Русия подготвя за ЕС списък с терористи, извършили химически атаки в Сирия Москва е готова да сподели с ЕС списъците на терористи в Сирия, включително представители на неправителствената организация Бели каски, отговорна за поредица от химически атаки в републиката. Това бе обявено от постоянния представител на Руската федерация в ЕС Владимир Чижов по телевизионния канал Русия-24'),
	(39, 123, '2018-10-26 02:26:22', 'изчезнали след проливни дъждове в Йордания', 'Девет души загинаха, а повече от десет пострадаха в резултат на силни дъждове и мощните кални потоци, причинени от тях в близост до Мъртво море в Йордания. Това съобщи порталът Амон нюз във връзка с изявлението на Министерството на здравеопазването на кралството.'),
	(40, 123, '2018-10-26 02:28:01', 'Евакуираха сграда на Конгреса на САЩ', 'Една от сградите на Конгреса на САЩ, която принадлежи на Камарата на представителите, е била евакуирана по тревога. Това съобщи телевизионната компания Ей Би Си. Евакуацията започнала след звуков алармен сигнал, причините за който още не са оповестени, предаде ТАСС.');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table project.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table project.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
