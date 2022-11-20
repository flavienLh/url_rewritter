-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 20 nov. 2022 à 00:34
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `switchurl`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `username`, `password`, `email`, `token`) VALUES
(5, 'test', '$argon2id$v=19$m=65536,t=4,p=1$Nm1sTUloMTZxSk9OSEIwRQ$1ikZ3zhVdObkS9QheC57jQs4Wzw3lilj2wJ3bpg5zH0', 'test@test.com', ''),
(6, 'admin', '$argon2id$v=19$m=65536,t=4,p=1$am5qdDJOSHRrQmI0SWZWUw$t2tUhC3Lm+Dbf5PKmTVrLfN9zT716unEZXeBLZOCS3c', 'admin@admin.com', ''),
(7, 'gus', '$argon2id$v=19$m=65536,t=4,p=1$NFdYUWVoME9SUHhjRXpHNQ$LP0mlGSWbqBXF3haczf7OsQEFA80HzcDT/MYxl+/c0o', 'gus@gus.fr', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `urls`
--

DROP TABLE IF EXISTS `urls`;
CREATE TABLE IF NOT EXISTS `urls` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `long_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `short_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `click` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `urls`
--

INSERT INTO `urls` (`ID`, `long_url`, `short_url`, `click`) VALUES
(85, 'https://www.youtube.com/', 'localhost/d010719aa7', 0),
(86, 'https://symfony.com/doc/current/setup/symfony_server.html', 'localhost/f658b5654b', 0),
(87, 'https://symfony.com/doc/current/setup.html', 'localhost/baae1114cf', 0),
(88, 'https://www.youtube.com/', 'localhost/167fd7d786', 0),
(89, 'https://www.youtube.com/', 'localhost/60930fd8c5', 0),
(90, 'https://www.youtube.com/', 'localhost/a1e5d2bf0e', 0),
(91, 'https://www.youtube.com/', 'localhost/f32e435401', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
