-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 16 oct. 2023 à 08:09
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbtest`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`) VALUES
(1, 'Nom1', 'email1@example.com'),
(2, 'Nom2', 'email2@example.com'),
(3, 'Nom3', 'email3@example.com'),
(4, 'Nom4', 'email4@example.com'),
(5, 'Nom5', 'email5@example.com'),
(6, 'Nom6', 'email6@example.com'),
(7, 'Nom7', 'email7@example.com'),
(8, 'Nom8', 'email8@example.com'),
(9, 'Nom9', 'email9@example.com'),
(10, 'Nom10', 'email10@example.com'),
(11, 'Nom11', 'email11@example.com'),
(12, 'Nom12', 'email12@example.com'),
(13, 'Nom13', 'email13@example.com'),
(14, 'Nom14', 'email14@example.com'),
(15, 'Nom15', 'email15@example.com'),
(16, 'Nom16', 'email16@example.com'),
(17, 'Nom17', 'email17@example.com'),
(18, 'Nom18', 'email18@example.com'),
(19, 'Nom19', 'email19@example.com'),
(20, 'Nom20', 'email20@example.com'),
(21, 'le bel', 'lebel@pamrilesbg.bg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
