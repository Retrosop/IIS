-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.30 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных aero
CREATE DATABASE IF NOT EXISTS `aero` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `aero`;

-- Дамп структуры для таблица aero.order
CREATE TABLE IF NOT EXISTS `order` (
  `idorder` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `enail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `body` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idorder`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы aero.order: ~13 rows (приблизительно)
INSERT INTO `order` (`idorder`, `name`, `enail`, `subject`, `body`) VALUES
	(1, 'Иванов И.И.', 'ivanov@ya.ru', '24.09.2023', 'Москва на 15 ч. дня из Хабаровск'),
	(2, 'Иванов И.И.', 'ivanov@ya.ru', '24.09.2023', 'Москва на 15 ч. дня из Хабаровск'),
	(3, 'Иванов И.И.', 'ivanov@ya.ru', '24.09.2023', 'Москва на 15 ч. дня из Хабаровск'),
	(4, 'Иванов И.И.', 'ivanov@ya.ru', '24.09.2023', 'Москва на 15 ч. дня из Хабаровск'),
	(5, 'Иванов И.И.', 'ivanov@ya.ru', '24.09.2023', 'Москва на 15 ч. дня из Хабаровск'),
	(6, 'fghsdfgh', 'fghfdghdf@gfsdfgsd', 'dfgsdfg', 'sdfgsd'),
	(7, 'fghsdfgh', 'fghfdghdf@gfsdfgsd', 'dfgsdfg', 'sdfgsd'),
	(8, 'sfdasdfas', 'dfasdfasd', 'fasdf@fgsdfg', 'dfgsdf'),
	(9, 'dfgsdfg', 'sdfgsdfgsdf@dfgsdf', 'gsdfgsdfg', 'sdfgsdfg'),
	(10, '', '', '', ''),
	(11, '', '', '', ''),
	(12, 'dfgsdfgsdf', '', '', '');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
