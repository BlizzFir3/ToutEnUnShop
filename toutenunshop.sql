-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 mai 2024 à 10:28
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `toutenunshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `mdp`) VALUES
(2, 'admin', 'admin@admin.com', 'admin2024');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `prix` float NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`) VALUES
(1, 'https://nb.scene7.com/is/image/NB/mr530sg_nb_02_i?$dw_detail_main_lg$&amp;bgc=f1f1f1&amp;layer=1&amp;bgcolor=f1f1f1&amp;blendMode=mult&amp;scale=10&amp;wid=1600&amp;hei=1600', 'New Balance 530', 120, 'La sneaker 530 remet au goût du jour l&#039;une de nos chaussures de running classiques. Cette chaussure décontractée combine style casual et technologie moderne. L&#039;amorti ABZORB assure un confort supérieur.'),
(2, 'https://m.media-amazon.com/images/I/51BvGrRD1yL._AC_UF1000,1000_QL80_.jpg', 'Tefal RE320 ', 49.95, 'Kit raclette avec rangement astucieux pour les poêlons ; 3 fonctions : raclette, grill et crêpe\r\n'),
(4, 'https://www.pro-duo.fr/dw/image/v2/BBTX_PRD/on/demandware.static/-/Sites-produo-master-catalog/default/dw9dcc084a/images/original/VR054212_0.jpg?sw=1000&amp;sh=1000', 'Steampod 4.0 Lisseur', 345, '[MOINS DE DOMMAGES] Cheveux 85% moins cassants.\r\n\r\nCoiffage 3x plus rapide.\r\n\r\nMeilleure expérience de lissage : 30% plus près de la racine en comparaison avec le SteamPod 3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
