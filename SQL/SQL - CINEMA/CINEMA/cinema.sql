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


-- Listage de la structure de la base pour cinema
CREATE DATABASE IF NOT EXISTS `cinema` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cinema`;

-- Listage de la structure de la table cinema. acteur
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `naissance` date NOT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.acteur : ~6 rows (environ)
/*!40000 ALTER TABLE `acteur` DISABLE KEYS */;
INSERT IGNORE INTO `acteur` (`id_acteur`, `nom`, `prenom`, `sexe`, `naissance`) VALUES
	(1, 'Truc', 'Bidule', 'Masculin', '2001-01-01'),
	(2, 'Azer', 'Tyu', 'Masculin', '2001-01-01'),
	(3, 'Piou', 'Erty', 'Masculin', '2001-01-01'),
	(4, 'Aty', 'Zery', 'Masculin', '2001-01-01'),
	(5, 'Ryu', 'Opai', 'Masculin', '2001-01-01'),
	(6, 'Qasder', 'Fresza', 'Féminin', '2001-01-01');
/*!40000 ALTER TABLE `acteur` ENABLE KEYS */;

-- Listage de la structure de la table cinema. casting
CREATE TABLE IF NOT EXISTS `casting` (
  `id_film` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  KEY `FK_casting_film` (`id_film`),
  KEY `FK_casting_role` (`id_role`),
  KEY `FK_casting_acteur` (`id_acteur`),
  CONSTRAINT `FK_casting_acteur` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  CONSTRAINT `FK_casting_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_casting_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.casting : ~9 rows (environ)
/*!40000 ALTER TABLE `casting` DISABLE KEYS */;
INSERT IGNORE INTO `casting` (`id_film`, `id_role`, `id_acteur`) VALUES
	(1, 2, 2),
	(2, 1, 1),
	(1, 3, 5),
	(1, 4, 6),
	(2, 5, 6),
	(2, 6, 2),
	(2, 4, 4),
	(4, 8, 4),
	(4, 9, 3);
/*!40000 ALTER TABLE `casting` ENABLE KEYS */;

-- Listage de la structure de la table cinema. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `id_genre` int(11) NOT NULL,
  `id_realisateur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `date_de_sortie` varchar(50) NOT NULL DEFAULT '',
  `duree` varchar(50) NOT NULL DEFAULT '',
  `resumer` varchar(50) NOT NULL,
  PRIMARY KEY (`id_film`),
  KEY `id_genre` (`id_genre`),
  KEY `id_realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.film : ~4 rows (environ)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT IGNORE INTO `film` (`id_film`, `id_genre`, `id_realisateur`, `nom`, `date_de_sortie`, `duree`, `resumer`) VALUES
	(1, 1, 1, 'Premier', '01/01/01', '60', 'Il était une fois'),
	(2, 2, 1, 'Se gond', '01/01/01', '180', 'Il vécurent heureux'),
	(3, 3, 2, 'Plage', '01/01/01', '360', 'Un coup de soleil'),
	(4, 3, 2, 'Lachute', '01/01/01', '120', 'Et eurent beaucoup d\'enfant');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Listage de la structure de la table cinema. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.genre : ~3 rows (environ)
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT IGNORE INTO `genre` (`id_genre`, `libelle`) VALUES
	(1, 'Aventure'),
	(2, 'Science Fiction'),
	(3, 'Comedie');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;

-- Listage de la structure de la table cinema. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `naissance` date NOT NULL,
  PRIMARY KEY (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.realisateur : ~2 rows (environ)
/*!40000 ALTER TABLE `realisateur` DISABLE KEYS */;
INSERT IGNORE INTO `realisateur` (`id_realisateur`, `nom`, `prenom`, `sexe`, `naissance`) VALUES
	(1, 'Sed', 'Dreza', 'Féminin', '2001-01-01'),
	(2, 'Huj', 'Kil', 'Masculin', '2001-01-01');
/*!40000 ALTER TABLE `realisateur` ENABLE KEYS */;

-- Listage de la structure de la table cinema. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema.role : ~9 rows (environ)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT IGNORE INTO `role` (`id_role`, `nom`) VALUES
	(1, 'Chauffeur'),
	(2, 'Nageur'),
	(3, 'Lecteur'),
	(4, 'Balayeur'),
	(5, 'Serrurier'),
	(6, 'Gardien'),
	(7, 'Balayeur'),
	(8, 'Semeur'),
	(9, 'Conteur');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
