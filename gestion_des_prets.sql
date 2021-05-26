-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 mai 2021 à 11:55
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_des_prets`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

DROP TABLE IF EXISTS `calendrier`;
CREATE TABLE IF NOT EXISTS `calendrier` (
  `IdentifiantCal` int(11) NOT NULL AUTO_INCREMENT,
  `JourCal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HoraireCal` time DEFAULT NULL,
  `EtatCal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdentifiantR` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdentifiantCal`),
  KEY `IdentifiantR` (`IdentifiantR`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `IdentifiantEm` int(11) NOT NULL AUTO_INCREMENT,
  `DateEmprunt` date DEFAULT NULL,
  `DateRetour` date DEFAULT NULL,
  `identifiantV` int(11) NOT NULL,
  `IdentifiantR` int(11) NOT NULL,
  `IdentifiantM` int(11) NOT NULL,
  `IdentifiantE` int(11) NOT NULL,
  PRIMARY KEY (`IdentifiantEm`),
  KEY `identifiantV` (`identifiantV`),
  KEY `IdentifiantR` (`IdentifiantR`),
  KEY `IdentifiantM` (`IdentifiantM`),
  KEY `IdentifiantE` (`IdentifiantE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emprunteur`
--

DROP TABLE IF EXISTS `emprunteur`;
CREATE TABLE IF NOT EXISTS `emprunteur` (
  `IdentifiantE` int(11) NOT NULL,
  `NomE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PrenomE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AdresseE` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Statut` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Secretariat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdentifiantE`)
) ENGINE=MyISAM AUTO_INCREMENT=85413602 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `emprunteur`
--

INSERT INTO `emprunteur` (`IdentifiantE`, `NomE`, `PrenomE`, `EmailE`, `AdresseE`, `TelE`, `Statut`, `Secretariat`, `Formation`) VALUES
(22508753, 'Dumas', 'Thomas', 'AAA.AAA@etud.ut-capitole.fr', '105 Boulevard d\'Arcole 31000 Toulouse', '0625987415', 'Etudiant', NULL, 'M2 MIAGE ISIAD'),
(45628764, 'Martin', 'Axel', 'BBB.BBB@etud.ut-capitole.fr', '46 Rue des Blanchers 31000 Toulouse', '0698714115', 'Etudiant', NULL, 'M2 MIAGE ISIAD'),
(75664889, 'Coralie', 'Gardet', 'CCC.CCC@etud.ut-capitole.fr', '18 Rue Molière 31000 Toulouse', '0684391709', 'Etudiant', NULL, 'M2 MIAGE ISIAD'),
(35741568, 'Vincent', 'Mallet', 'DDD.DDD@etud.ut-capitole.fr', '50 Rue Dayde 31000 Toulouse', '0608496503', 'Etudiant', NULL, 'M2 MIAGE ISIAD'),
(85413601, 'Alice', 'Bassot', 'EEE.EEE@etud.ut-capitole.fr', '7 Rue du Luan 31000 Toulouse', '0634895147', 'Etudiant', NULL, 'M2 MIAGE ISIAD');

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `IdentifiantM` int(11) NOT NULL,
  `DateAchat` date DEFAULT NULL,
  `EtatM` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CatégorieM` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StatutM` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdentifiantM`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `probleme`
--

DROP TABLE IF EXISTS `probleme`;
CREATE TABLE IF NOT EXISTS `probleme` (
  `IdentifiantP` int(11) NOT NULL AUTO_INCREMENT,
  `NomP` text COLLATE utf8mb4_unicode_ci,
  `DateProblème` date DEFAULT NULL,
  `DateResolution` date DEFAULT NULL,
  `Résolution` text COLLATE utf8mb4_unicode_ci,
  `Description` text COLLATE utf8mb4_unicode_ci,
  `IdentifiantE` int(11) NOT NULL,
  PRIMARY KEY (`IdentifiantP`),
  KEY `IdentifiantE` (`IdentifiantE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `resoudre`
--

DROP TABLE IF EXISTS `resoudre`;
CREATE TABLE IF NOT EXISTS `resoudre` (
  `identifiantV` int(11) NOT NULL,
  `IdentifiantP` int(11) NOT NULL,
  PRIMARY KEY (`identifiantV`,`IdentifiantP`),
  KEY `IdentifiantP` (`IdentifiantP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `IdentifiantR` int(11) NOT NULL,
  `NomR` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PrenomR` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelR` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailR` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdentifiantR`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`IdentifiantR`, `NomR`, `PrenomR`, `TelR`, `EmailR`) VALUES
(23158748, 'Cazal', 'Fabien', '0671563248', 'fabien.cazal@ut-capitole.fr');

-- --------------------------------------------------------

--
-- Structure de la table `s_occuper`
--

DROP TABLE IF EXISTS `s_occuper`;
CREATE TABLE IF NOT EXISTS `s_occuper` (
  `IdentifiantM` int(11) NOT NULL,
  `identifiantV` int(11) NOT NULL,
  PRIMARY KEY (`IdentifiantM`,`identifiantV`),
  KEY `identifiantV` (`identifiantV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vacataire`
--

DROP TABLE IF EXISTS `vacataire`;
CREATE TABLE IF NOT EXISTS `vacataire` (
  `identifiantV` int(11) NOT NULL,
  `NomV` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PrenomV` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailV` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelV` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EntrepriseV` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`identifiantV`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vacataire`
--

INSERT INTO `vacataire` (`identifiantV`, `NomV`, `PrenomV`, `EmailV`, `TelV`, `EntrepriseV`) VALUES
(69874521, 'Barnier', 'Célia', 'celia.barnier@ut-capitole.fr', '0645231608', NULL),
(25687413, 'Marais', 'Bastien', 'bastien.marais@ut-capitole.fr', '0698525630', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
