-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 26 nov. 2023 à 11:27
-- Version du serveur : 11.1.0-MariaDB
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smartbike`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_velos` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_velos` (`id_velos`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `id_velos`, `nom`, `prenom`, `email`, `message`) VALUES
(1, 3, 'gogo', 'toto', 'maxsteel3ervin@gmail.com', ',nnnnnnnnnnn'),
(2, 3, 'gogo', 'toto', 'maxsteel3ervin@gmail.com', 'ertyuiop'),
(3, 3, 'gogo', 'toto', 'maxsteel3ervin@gmail.com', 'ertyuiop'),
(4, 3, 'gogo', 'toto', 'maxsteel3ervin@gmail.com', 'tuyuyuyyu'),
(5, 3, 'goby', 'ervin', 'ervingoby@gmail.com', 'hjklm'),
(6, 3, 'goby', 'ervin', 'ervingoby@gmail.com', 'hjklm'),
(7, 3, 'goby', 'ervin', 'ervingoby@gmail.com', 'gsgsggs'),
(8, 2, 'dozihdz', 'dzdza', 'ervinzzzgoby@gmail.com', 'dzdzd'),
(9, 2, 'Goby', 'Ervin', 'ervin.goby@efrei.net', 'sdfghjk'),
(10, 3, 'Gob', 'Ervin', 'ervin.goby@efrei.net', 'zzzzzzzz'),
(11, 3, 'zz', 'zz', 'zz@gamail.com', 'zz'),
(12, 2, 'zzz', 'zz', 'ervinzzzgoby@gmail.com', 'zzzzzz'),
(13, 2, 'zzz', 'zz', 'ervinzzzgoby@gmail.com', 'xwwwwwww'),
(14, 2, 'zzz', 'zz', 'ervinzzzgoby@gmail.com', 'xwwwwwww'),
(15, 2, 'goby', 'ervin', 'ervingoby@gmail.com', 'jjj'),
(16, 3, 'gogo', 'toto', 'maxsteel3ervin@gmail.com', 'hgvgf'),
(17, 3, 'gogo', 'toto', 'maxsteel3ervin@gmail.com', 'uuuu'),
(35, 5, 'Madar', 'String', 'ervin.goby@efrei.net', 'ttttt'),
(36, 5, 'Madar', 'String', 'ervin.goby@efrei.net', 'ttttt'),
(37, 5, 'Madar', 'String', 'ervin.goby@efrei.net', 'ttttt'),
(38, 5, 'Madar', 'String', 'ervin.goby@efrei.net', 'ttttt');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `message`) VALUES
(1, 'gogo', 'toto', 'toto.gogo@gmail.com', 'dfghjk'),
(2, 'test', 'test', 'test@test.fr', 'tet'),
(3, 'GOBY', 'RYan', 'maxsteel3ervin@gmail.com', 'qsfqds'),
(4, 'goby', 'ervin', 'ervingoby@gmail.com', 'ppmm'),
(5, 'DIDEROT', 'NALINI', 'ervingoby@gmail.com', 'testtttt'),
(6, 'DIDEROT', 'NALINI', 'ervingoby@gmail.com', 'testtttt');

-- --------------------------------------------------------

--
-- Structure de la table `velos`
--

DROP TABLE IF EXISTS `velos`;
CREATE TABLE IF NOT EXISTS `velos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `velos`
--

INSERT INTO `velos` (`id`, `nom`, `description`, `prix`, `image`) VALUES
(2, 'BikeOne', 'Le BikeOne Easy bénéficie de caractéristiques haut de gamme. Le nouveau eBike BikeOne Easy vous offre une liberté totale de déplacement en ville. VTT electrique. ', '100 euro', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-43w7ey_ZuqXnoTFArO2BD0tPyF4FaaPr1w&usqp=CAU'),
(3, 'bike22', 'Le bike22 Easy bénéficie de caractéristiques haut de gamme. Le nouveau eBike bike22 Easy vous offre une liberté totale de déplacement en ville. VTT electrique. ', '189 euro', 'https://wegoboard.com/6665-large_default/velo-electrique-pliable-superbike-plus-noir-rouge.jpg'),
(5, 'BikeFirst', 'Le BOOSTER Easy bénéficie de caractéristiques haut de gamme. Le nouveau eBike BOOSTER Easy vous offre une liberté totale de déplacement en ville. VTT electrique.', '200 euro', 'https://fr.fiido.com/cdn/shop/files/x-access_1000x.jpg?v=1699942051');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`id_velos`) REFERENCES `velos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
