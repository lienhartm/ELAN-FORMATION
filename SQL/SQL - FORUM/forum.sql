-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour forum
CREATE DATABASE IF NOT EXISTS `forum` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `forum`;

-- Listage de la structure de la table forum. sujet
CREATE TABLE IF NOT EXISTS `sujet` (
  `id_sujet` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `texte` varchar(50) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `creation` datetime DEFAULT NULL,
  PRIMARY KEY (`id_sujet`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Listage des données de la table forum.sujet : ~17 rows (environ)
/*!40000 ALTER TABLE `sujet` DISABLE KEYS */;
INSERT IGNORE INTO `sujet` (`id_sujet`, `titre`, `texte`, `auteur`, `creation`) VALUES
	(1, 'il etait une fois', '', '2', NULL),
	(2, 'qssq', '', 'az', '2022-11-06 08:38:00'),
	(3, 'aeae', '', 'ae', '2022-11-06 08:39:26'),
	(4, 'aa', '', 'dsd', '2022-11-06 10:09:52'),
	(5, 'a', 'a', 'a', '2023-02-14 12:27:44'),
	(6, 'aq', 'aq', 'aq', '2023-02-14 12:29:42'),
	(7, 'az"e', 'hmkgb\r\n', 'az', '2023-02-14 12:38:19'),
	(8, 'wx', 'wx', 'wx', '2023-02-14 12:40:33'),
	(9, 'cv', 'cv', 'cv', '2023-02-14 12:43:09'),
	(10, 'wx', 'wx', 'wx', '2023-02-14 12:43:40'),
	(11, 'qs', 'qs', 'qs', '2023-02-14 12:45:13'),
	(12, 'qs', 'qs', 'qs', '2023-02-14 12:46:14'),
	(13, 'qs', 'qs', 'qs', '2023-02-14 12:46:50'),
	(14, 'ml', 'ml', 'ml', '2023-02-14 12:58:12'),
	(15, 'aa', 'aa', 'aa', '2023-02-14 12:59:58'),
	(16, 'ee', 'eerer', 'erer', '2023-02-14 13:56:21'),
	(17, '', '', '', '2023-02-14 14:12:05'),
	(18, 'wx', 'wx', 'wx', '2023-02-14 14:12:13');
/*!40000 ALTER TABLE `sujet` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
