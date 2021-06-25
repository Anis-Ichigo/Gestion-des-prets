-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 25 juin 2021 à 16:38
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

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
  `IdentifiantCal` int(10) NOT NULL AUTO_INCREMENT,
  `JourCal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HoraireCal` time DEFAULT NULL,
  `EtatCal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdentifiantCal`)
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `calendrier`
--

INSERT INTO `calendrier` (`IdentifiantCal`, `JourCal`, `HoraireCal`, `EtatCal`) VALUES
(1, 'Lundi', '08:00:00', 'Disponible'),
(2, 'Lundi', '08:15:00', 'Disponible'),
(3, 'Lundi', '08:30:00', 'Disponible'),
(4, 'Lundi', '08:45:00', 'Disponible'),
(5, 'Lundi', '09:00:00', 'Disponible'),
(6, 'Lundi', '09:15:00', 'Disponible'),
(7, 'Lundi', '09:30:00', 'Disponible'),
(8, 'Lundi', '09:45:00', 'Disponible'),
(9, 'Lundi', '10:00:00', 'Disponible'),
(10, 'Lundi', '10:15:00', 'Disponible'),
(11, 'Lundi', '10:30:00', 'Disponible'),
(12, 'Lundi', '10:45:00', 'Disponible'),
(13, 'Lundi', '11:00:00', 'Indisponible'),
(14, 'Lundi', '11:15:00', 'Disponible'),
(15, 'Lundi', '11:30:00', 'Disponible'),
(16, 'Lundi', '11:45:00', 'Disponible'),
(17, 'Lundi', '12:00:00', 'Disponible'),
(18, 'Lundi', '12:15:00', 'Disponible'),
(19, 'Lundi', '12:30:00', 'Disponible'),
(20, 'Lundi', '14:00:00', 'Disponible'),
(21, 'Lundi', '14:15:00', 'Disponible'),
(22, 'Lundi', '14:30:00', 'Disponible'),
(23, 'Lundi', '14:45:00', 'Disponible'),
(24, 'Lundi', '15:00:00', 'Disponible'),
(25, 'Lundi', '15:15:00', 'Disponible'),
(26, 'Lundi', '15:30:00', 'Disponible'),
(27, 'Lundi', '15:45:00', 'Disponible'),
(28, 'Lundi', '16:00:00', 'Disponible'),
(29, 'Lundi', '16:15:00', 'Disponible'),
(30, 'Lundi', '16:30:00', 'Disponible'),
(31, 'Lundi', '16:45:00', 'Disponible'),
(32, 'Lundi', '17:00:00', 'Disponible'),
(33, 'Mardi', '08:00:00', 'Disponible'),
(34, 'Mardi', '08:15:00', 'Disponible'),
(35, 'Mardi', '08:30:00', 'Disponible'),
(36, 'Mardi', '08:45:00', 'Disponible'),
(37, 'Mardi', '09:00:00', 'Disponible'),
(38, 'Mardi', '09:15:00', 'Disponible'),
(39, 'Mardi', '09:30:00', 'Disponible'),
(40, 'Mardi', '09:45:00', 'Disponible'),
(41, 'Mardi', '10:00:00', 'Disponible'),
(42, 'Mardi', '10:15:00', 'Disponible'),
(43, 'Mardi', '10:30:00', 'Disponible'),
(44, 'Mardi', '10:45:00', 'Disponible'),
(45, 'Mardi', '11:00:00', 'Disponible'),
(46, 'Mardi', '11:15:00', 'Disponible'),
(47, 'Mardi', '11:30:00', 'Disponible'),
(48, 'Mardi', '11:45:00', 'Disponible'),
(49, 'Mardi', '12:00:00', 'Disponible'),
(50, 'Mardi', '12:15:00', 'Disponible'),
(51, 'Mardi', '12:30:00', 'Disponible'),
(52, 'Mardi', '14:00:00', 'Disponible'),
(53, 'Mardi', '14:15:00', 'Disponible'),
(54, 'Mardi', '14:30:00', 'Disponible'),
(55, 'Mardi', '14:45:00', 'Disponible'),
(56, 'Mardi', '15:00:00', 'Disponible'),
(57, 'Mardi', '15:15:00', 'Disponible'),
(58, 'Mardi', '15:30:00', 'Disponible'),
(59, 'Mardi', '15:45:00', 'Disponible'),
(60, 'Mardi', '16:00:00', 'Disponible'),
(61, 'Mardi', '16:15:00', 'Disponible'),
(62, 'Mardi', '16:30:00', 'Disponible'),
(63, 'Mardi', '16:45:00', 'Disponible'),
(64, 'Mardi', '17:00:00', 'Disponible'),
(65, 'Mercredi', '08:00:00', 'Disponible'),
(66, 'Mercredi', '08:15:00', 'Disponible'),
(67, 'Mercredi', '08:30:00', 'Disponible'),
(68, 'Mercredi', '08:45:00', 'Disponible'),
(69, 'Mercredi', '09:00:00', 'Disponible'),
(70, 'Mercredi', '09:15:00', 'Disponible'),
(71, 'Mercredi', '09:30:00', 'Disponible'),
(72, 'Mercredi', '09:45:00', 'Disponible'),
(73, 'Mercredi', '10:00:00', 'Disponible'),
(74, 'Mercredi', '10:15:00', 'Disponible'),
(75, 'Mercredi', '10:30:00', 'Disponible'),
(76, 'Mercredi', '10:45:00', 'Disponible'),
(77, 'Mercredi', '11:00:00', 'Disponible'),
(78, 'Mercredi', '11:15:00', 'Disponible'),
(79, 'Mercredi', '11:30:00', 'Disponible'),
(80, 'Mercredi', '11:45:00', 'Disponible'),
(81, 'Mercredi', '12:00:00', 'Disponible'),
(82, 'Mercredi', '12:15:00', 'Disponible'),
(83, 'Mercredi', '12:30:00', 'Disponible'),
(84, 'Mercredi', '14:00:00', 'Disponible'),
(85, 'Mercredi', '14:15:00', 'Disponible'),
(86, 'Mercredi', '14:30:00', 'Disponible'),
(87, 'Mercredi', '14:45:00', 'Disponible'),
(88, 'Mercredi', '15:00:00', 'Disponible'),
(89, 'Mercredi', '15:15:00', 'Disponible'),
(90, 'Mercredi', '15:30:00', 'Disponible'),
(91, 'Mercredi', '15:45:00', 'Disponible'),
(92, 'Mercredi', '16:00:00', 'Disponible'),
(93, 'Mercredi', '16:15:00', 'Disponible'),
(94, 'Mercredi', '16:30:00', 'Disponible'),
(95, 'Mercredi', '16:45:00', 'Disponible'),
(96, 'Mercredi', '17:00:00', 'Disponible'),
(97, 'Jeudi', '08:00:00', 'Disponible'),
(98, 'Jeudi', '08:15:00', 'Disponible'),
(99, 'Jeudi', '08:30:00', 'Disponible'),
(100, 'Jeudi', '08:45:00', 'Disponible'),
(101, 'Jeudi', '09:00:00', 'Disponible'),
(102, 'Jeudi', '09:15:00', 'Disponible'),
(103, 'Jeudi', '09:30:00', 'Disponible'),
(104, 'Jeudi', '09:45:00', 'Disponible'),
(105, 'Jeudi', '10:00:00', 'Disponible'),
(106, 'Jeudi', '10:15:00', 'Disponible'),
(107, 'Jeudi', '10:30:00', 'Disponible'),
(108, 'Jeudi', '10:45:00', 'Disponible'),
(109, 'Jeudi', '11:00:00', 'Disponible'),
(110, 'Jeudi', '11:15:00', 'Disponible'),
(111, 'Jeudi', '11:30:00', 'Disponible'),
(112, 'Jeudi', '11:45:00', 'Disponible'),
(113, 'Jeudi', '12:00:00', 'Disponible'),
(114, 'Jeudi', '12:15:00', 'Disponible'),
(115, 'Jeudi', '12:30:00', 'Disponible'),
(116, 'Jeudi', '14:00:00', 'Disponible'),
(117, 'Jeudi', '14:15:00', 'Disponible'),
(118, 'Jeudi', '14:30:00', 'Disponible'),
(119, 'Jeudi', '14:45:00', 'Disponible'),
(120, 'Jeudi', '15:00:00', 'Disponible'),
(121, 'Jeudi', '15:15:00', 'Disponible'),
(122, 'Jeudi', '15:30:00', 'Disponible'),
(123, 'Jeudi', '15:45:00', 'Disponible'),
(124, 'Jeudi', '16:00:00', 'Disponible'),
(125, 'Jeudi', '16:15:00', 'Disponible'),
(126, 'Jeudi', '16:30:00', 'Disponible'),
(127, 'Jeudi', '16:45:00', 'Disponible'),
(128, 'Jeudi', '17:00:00', 'Disponible'),
(129, 'Vendredi', '08:00:00', 'Disponible'),
(130, 'Vendredi', '08:15:00', 'Disponible'),
(131, 'Vendredi', '08:30:00', 'Disponible'),
(132, 'Vendredi', '08:45:00', 'Disponible'),
(133, 'Vendredi', '09:00:00', 'Disponible'),
(134, 'Vendredi', '09:15:00', 'Disponible'),
(135, 'Vendredi', '09:30:00', 'Disponible'),
(136, 'Vendredi', '09:45:00', 'Disponible'),
(137, 'Vendredi', '10:00:00', 'Disponible'),
(138, 'Vendredi', '10:15:00', 'Disponible'),
(139, 'Vendredi', '10:30:00', 'Disponible'),
(140, 'Vendredi', '10:45:00', 'Disponible'),
(141, 'Vendredi', '11:00:00', 'Disponible'),
(142, 'Vendredi', '11:15:00', 'Disponible'),
(143, 'Vendredi', '11:30:00', 'Disponible'),
(144, 'Vendredi', '11:45:00', 'Disponible'),
(145, 'Vendredi', '12:00:00', 'Disponible'),
(146, 'Vendredi', '12:15:00', 'Disponible'),
(147, 'Vendredi', '12:30:00', 'Disponible'),
(148, 'Vendredi', '14:00:00', 'Disponible'),
(149, 'Vendredi', '14:15:00', 'Disponible'),
(150, 'Vendredi', '14:30:00', 'Disponible'),
(151, 'Vendredi', '14:45:00', 'Disponible'),
(152, 'Vendredi', '15:00:00', 'Disponible'),
(153, 'Vendredi', '15:15:00', 'Disponible'),
(154, 'Vendredi', '15:30:00', 'Disponible'),
(155, 'Vendredi', '15:45:00', 'Disponible'),
(156, 'Vendredi', '16:00:00', 'Disponible'),
(157, 'Vendredi', '16:15:00', 'Disponible'),
(158, 'Vendredi', '16:30:00', 'Disponible'),
(159, 'Vendredi', '16:45:00', 'Disponible'),
(160, 'Vendredi', '17:00:00', 'Indisponible');

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `IdentifiantE` int(11) NOT NULL AUTO_INCREMENT,
  `DateEmprunt` date DEFAULT NULL,
  `DateRetour` date DEFAULT NULL,
  `DateProlongation` date DEFAULT NULL,
  `Motif` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_rappel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_retour_depasse` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EtatE` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Non rendu',
  `Statut_RDV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'à venir',
  `Contrat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Horaire_modif` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdentifiantM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdentifiantPe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdentifiantCal` int(10) NOT NULL,
  PRIMARY KEY (`IdentifiantE`),
  KEY `IdentifiantM` (`IdentifiantM`),
  KEY `IdentifiantPe` (`IdentifiantPe`),
  KEY `IdentifiantCal` (`IdentifiantCal`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`IdentifiantE`, `DateEmprunt`, `DateRetour`, `DateProlongation`, `Motif`, `mail_rappel`, `mail_retour_depasse`, `EtatE`, `Statut_RDV`, `Contrat`, `Horaire_modif`, `IdentifiantM`, `IdentifiantPe`, `IdentifiantCal`) VALUES
(102, '2021-06-25', '2021-08-04', NULL, 'Prêt', NULL, NULL, 'Non rendu', 'terminé', 'signe', '16:46:00', 'N635215328745', 'antoine@ut-capitole.fr', 2),
(101, '2021-06-20', '2021-06-30', NULL, 'Prêt', NULL, NULL, 'Non rendu', 'terminé', 'signe', NULL, 'N122342546567', 'test@ut-capitole.fr', 3),
(100, '2021-06-21', '2021-06-30', NULL, 'Prêt', NULL, NULL, 'Non rendu', 'terminé', 'signe', NULL, 'N122342546567', 'test@ut-capitole.fr', 3),
(99, '2021-06-21', '2021-06-25', NULL, 'Prêt', NULL, NULL, 'Non rendu', 'terminé', 'signe', NULL, 'N148695207869', 'test@ut-capitole.fr', 3),
(98, '2021-06-21', '2021-06-30', NULL, 'Prêt', NULL, NULL, 'Non rendu', 'terminé', 'signe', NULL, 'N122342546567', 'test@ut-capitole.fr', 4),
(97, '2021-06-23', '2021-06-16', NULL, 'Retour', NULL, NULL, 'Rendu', 'terminé', 'signe', NULL, 'N122342546567', 'antoine@ut-capitole.fr', 94),
(96, '2021-06-21', '2021-07-01', NULL, 'Prêt', NULL, NULL, 'Non rendu', 'terminé', 'signe', NULL, 'N122342546567', 'test@ut-capitole.fr', 1),
(95, '2021-06-23', '2021-06-16', NULL, 'Prêt', NULL, NULL, 'Rendu', 'terminé', 'signe', NULL, 'N122342546567', 'antoine@ut-capitole.fr', 96),
(94, '2021-06-23', '2021-07-07', NULL, 'Prêt', NULL, NULL, 'Rendu', 'terminé', 'signe', NULL, 'N122342546567', 'antoine@ut-capitole.fr', 96),
(93, '2021-06-23', '2021-06-22', NULL, 'Prêt', NULL, NULL, 'Rendu', 'terminé', 'signe', NULL, 'N122342546567', 'antoine@ut-capitole.fr', 96),
(103, '2021-06-21', '2021-07-01', NULL, 'Prêt', NULL, NULL, 'Non rendu', 'terminé', 'signe', '08:15:00', 'N635215328745', 'antoine@ut-capitole.fr', 2),
(104, '2021-06-25', '2021-06-30', NULL, 'Prêt', NULL, NULL, 'Non rendu', 'terminé', 'signe', '08:30:00', 'N635215328745', 'responsable@ut-capitole.fr', 160),
(105, '2021-06-21', '2021-07-07', NULL, 'Prêt', NULL, NULL, 'Non rendu', 'à venir', 'signe', '11:00:00', 'N77', 'responsable@ut-capitole.fr', 13);

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `IdentifiantM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateReception` date DEFAULT NULL,
  `EtatM` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CategorieM` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StatutM` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumBonCommande` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdentifiantMo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`IdentifiantM`),
  KEY `FK_materiel` (`IdentifiantMo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`IdentifiantM`, `DateReception`, `EtatM`, `CategorieM`, `StatutM`, `NumBonCommande`, `IdentifiantMo`) VALUES
('N122342546567', '2021-02-12', 'Non Dispo', 'Ordinateur', 'Existant', NULL, 'Inspiron 15 3000'),
('N952145236874', '2021-01-18', 'DSI', 'Tablette', 'Existant', NULL, 'Inspiron 15 3000'),
('N635215328745', '2021-06-02', 'Non Dispo', 'Ordinateur', 'Existant', NULL, 'Inspiron 15 3000'),
('N382596325852', '2021-02-20', 'Non Dispo', 'Ordinateur', 'Supprimé', NULL, 'Inspiron 15 3000'),
('azerty', '2021-01-21', 'Non Dispo', 'Tablette', 'Existant', NULL, 'Inspiron 15 3000'),
('N230285049374', '2021-04-12', 'DSI', 'Ordinateur', 'Existant', NULL, 'Inspiron 15 3000'),
('N963701365874', '2021-03-17', 'Non Dispo', 'Ordinateur', 'Existant', NULL, 'Inspiron 15 3000'),
('N77', '2021-09-25', 'Non Dispo', 'Cle 4G', 'Existant', NULL, 'Inspiron 15 3000'),
('N148695207869', '2021-11-10', 'Non Dispo', 'Ordinateur', 'Existant', NULL, 'Inspiron 15 3000'),
('7777777', '2021-06-21', 'Non Dispo', 'Ordinateur', 'Existant', '963', 'ASUS Vivobook S14 S413IA'),
('1234567', '2021-06-16', 'Non Dispo', 'Tablette', 'Supprimé', '123', '1'),
('987456', '2021-06-16', 'Dispo', 'Clé 3G', 'Supprimé', '369852147', 'z');

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

DROP TABLE IF EXISTS `modele`;
CREATE TABLE IF NOT EXISTS `modele` (
  `IdentifiantMo` varchar(50) NOT NULL,
  `Marque` varchar(50) DEFAULT NULL,
  `RAM` varchar(50) DEFAULT NULL,
  `CapaciteStockage` varchar(50) DEFAULT NULL,
  `Processeur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdentifiantMo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`IdentifiantMo`, `Marque`, `RAM`, `CapaciteStockage`, `Processeur`) VALUES
('Inspiron 15 3000', 'DELL', '4 Go', '128 Go', 'Processeur Intel® Pentium® Silver N5030 '),
('ASUS Vivobook S14 S413IA', 'ASUS', '8 Go', '256 Go', 'AMD Ryzen 5 4500U'),
('1', 'a', 'a', 'a', 'a'),
('z', 'z', 'z', 'z', 'z');

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

DROP TABLE IF EXISTS `parametres`;
CREATE TABLE IF NOT EXISTS `parametres` (
  `IdentifiantPa` int(11) NOT NULL AUTO_INCREMENT,
  `Bureau` varchar(50) NOT NULL,
  PRIMARY KEY (`IdentifiantPa`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parametres`
--

INSERT INTO `parametres` (`IdentifiantPa`, `Bureau`) VALUES
(1, 'ME404');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `IdentifiantPe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NomPe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PrenomPe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailPe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mot_de_passePe` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdressePe` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelPe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Statut` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Secretariat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RolePe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semaine` int(20) DEFAULT NULL,
  `date_r` date DEFAULT NULL,
  `categorie` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdentifiantPe`)
) ENGINE=MyISAM AUTO_INCREMENT=85413602 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`IdentifiantPe`, `NomPe`, `PrenomPe`, `EmailPe`, `Mot_de_passePe`, `AdressePe`, `TelPe`, `Statut`, `Secretariat`, `Formation`, `RolePe`, `semaine`, `date_r`, `categorie`) VALUES
('22508753', 'Dumas', 'Thomas', 'antoine.lavigne@ut-capitole.fr', '', '105 Boulevard d\'Arcole 31000 Toulouse', '0625987415', 'Etudiant', NULL, 'M2 MIAGE ISIAD', 'Emprunteur', 0, NULL, ''),
('45628764', 'Martin', 'Axel', 'BBB.BBB@etud.ut-capitole.fr', '', '46 Rue des Blanchers 31000 Toulouse', '0698714115', 'Etudiant', NULL, 'M2 MIAGE ISIAD', 'Emprunteur', 0, NULL, ''),
('75664889', 'Coralie', 'Gardet', 'CCC.CCC@etud.ut-capitole.fr', '', '18 Rue Molière 31000 Toulouse', '0684391709', 'Etudiant', NULL, 'M2 MIAGE IPM', 'Emprunteur', 0, NULL, ''),
('35741568', 'Vincent', 'Mallet', 'DDD.DDD@etud.ut-capitole.fr', '', '50 Rue Dayde 31000 Toulouse', '0608496503', 'Etudiant', NULL, 'M2 MIAGE ISIAD', 'Vacataire', 0, NULL, ''),
('85413601', 'Alice', 'Bassot', 'EEE.EEE@etud.ut-capitole.fr', '', '7 Rue du Luan 31000 Toulouse', '0634895147', NULL, NULL, NULL, 'Responsable', 0, NULL, ''),
('$mail', '$nom', '$prenom', '$mail', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '$tel', '$statut', NULL, '$formation', NULL, 0, NULL, ''),
('', 'der', 'a', '', '9cf95dacd226dcf43da376cdb6cbba7035218921', NULL, '0123456789', 'Etudiant', NULL, 'L3 MIASHS TI', 'Responsable', 0, NULL, ''),
('a@gmail.com', 'der', 'a', 'a@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', NULL, '0123456789', 'Etudiant', NULL, 'L3 MIASHS TI', 'Responsable', 0, NULL, ''),
('test@test.com', 'test', 'test', 'test@test.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '0123456789', 'Personnel Administratif', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('a@ut-capitole.fr', 'Antoine', 'test', 'a@a.com', '5a9cf67e86ca9737d77fe30e613f70ea1ef9e6b2', NULL, '0123456789', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('antoine@ut-capitole.fr', 'Lavigne', 'Antoine', 'antoine@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '0633333333', 'Etudiant', '', 'M2 MIAGE ISIAD', 'Vacataire', 0, NULL, ''),
('azer@ut-capitole.fr', 'a', 'a', 'azer@ut-capitole.fr', '10d58bd87102f18f6f8d2e7fc4600aab5ef5549c', NULL, '0123456789', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('bn@ut-capitole.fr', 'a', 'a', 'bn@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '0987654321', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('test@ut-capitole.fr', 'test', 'test', 'test@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1478523690', 'Etudiant', NULL, 'L3 MIASHS TI', 'Responsable', 0, NULL, ''),
('w@ut-capitole.fr', 'w', 'w', 'w@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1236547891', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('x@ut-capitole.fr', 'x', 'x', 'x@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '0352458964', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('aze@ut-capitole.fr', 'aze', 'aze', 'aze@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '0614856946', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('h@ut-capitole.fr', 'h', 'h', 'h@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1236547893', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('n@ut-capitole.fr', 'n', 'n', 'n@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '7531598521', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('qs@ut-capitole.fr', 'qs', 'qs', 'qs@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1236547895', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('aaa@ut-capitole.fr', 'aaa', 'aaa', 'aaa@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1236325874', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('t@ut-capitole.fr', 't', 't', 't@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '8523697415', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('tyu@ut-capitole.fr', 'tyu', 'tyu', 'tyu@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1236547895', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('ghj@ut-capitole.fr', 'ghj', 'ghj', 'ghj@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '6541239875', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('wxc@ut-capitole.fr', 'wxc', 'wxc', 'wxc@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '9874563215', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('qsd@ut-capitole.fr', 'qsd', 'qsd', 'qsd@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1236547895', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('klm@ut-capitole.fr', 'klm', 'klm', 'klm@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1254789636', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('yui@ut-capitole.fr', 'yui', 'yui', 'yui@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1478523694', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('mlk@ut-capitole.fr', 'mlk', 'mlk', 'mlk@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '7523694127', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('eng@ut-capitole.fr', 'eng', 'eng', 'eng@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '4563218963', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('ant@ut-capitole.fr', 'Antoine', 'Lavigne', 'ant@ut-capitole.fr', '9359a4d812173b65a3a0094cd86363e79731a3c2', NULL, '1236547895', 'Etudiant', NULL, 'L3 MIASHS TI', 'Emprunteur', 0, NULL, ''),
('langue@ut-capitole.fr', 'langue', 'langue', 'langue@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '7896541230', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('antlangue@ut-capitole.fr', 'antlangue', 'antlangue', 'antlangue@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1236547895', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('asx@ut-capitole.fr', 'asx', 'asx', 'asx@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1236541236', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('nbv@ut-capitole.fr', 'nbv', 'nbv', 'nbv@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1478523698', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('aqw@ut-capitole.fr', 'aqw', 'aqw', 'aqw@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '7896541258', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('asc@ut-capitole.fr', 'asc', 'asc', 'asc@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1478523697', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('asy@ut-capitole.fr', 'asy', 'asy', 'asy@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '4569871236', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('aa@aa', 'aa', 'aa', 'aa@aa', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1478523699', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('antoinelvign@gmail.com', 'Lavigne', 'Antoine', 'antoinelvign@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'A', '1234567890', 'Etudiant', NULL, 'LICENCE PRO RTAI', NULL, 0, NULL, ''),
('an@gmail.com', 'An', 'An', 'an@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1234567890', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('zajeajzh@azeaz', 'a', 'a', 'zajeajzh@azeaz', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('qsd@ty.fr', 'qsd', 'qsd', 'qsd@ty.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1234567891', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('antoine.la@ut-capitole.fr', 'la', 'antoine', 'antoine.la@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1459874523', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('antoine.lavi@ut-capitole.fr', 'lavi', 'antoine', 'antoine.lavi@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '3698521478', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('anla@ut-capitole.fr', 'la', 'an', 'anla@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '8523697416', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('atp@ut-capitole.fr', 'atp', 'atp', 'atp@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '4', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('ag@ut-capitole.fr', 'ag', 'ag', 'ag@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '159', 'Etudiant', NULL, 'L3 MIASHS TI', NULL, 0, NULL, ''),
('apc@ut-capitole.fr', 'Apc', 'Apc', 'apc@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '1', 'Etudiant', NULL, 'M2 MIAGE ISIAD', 'Emprunteur', 0, NULL, ''),
('responsable@ut-capitole.fr', 'Responsable', 'Responsable', 'responsable@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '0574123698', 'Etudiant', NULL, 'L3 MIASHS TI', 'Responsable', 0, '2021-06-25', ''),
('nathalie.valles@ut-capitole.fr', 'Valles', 'Nathalie', 'nathalie.valles@ut-capitole.fr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, '0856253586', 'Enseignant', NULL, 'AUTRE', 'Emprunteur', 0, NULL, ''),
('aaaaa@ut-capitole.fr', 'a', 'a', 'aaaaa@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '7896541230', 'Etudiant', NULL, 'L3 MIASHS TI', 'Emprunteur', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `probleme`
--

DROP TABLE IF EXISTS `probleme`;
CREATE TABLE IF NOT EXISTS `probleme` (
  `IdentifiantP` int(11) NOT NULL AUTO_INCREMENT,
  `NomP` text COLLATE utf8mb4_unicode_ci,
  `DateProbleme` date DEFAULT NULL,
  `DateResolution` date DEFAULT NULL,
  `Resolution` text COLLATE utf8mb4_unicode_ci,
  `Description` text COLLATE utf8mb4_unicode_ci,
  `IdentifiantPe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdentifiantM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`IdentifiantP`),
  KEY `IdentifiantPe` (`IdentifiantPe`),
  KEY `IdentifiantM` (`IdentifiantM`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `probleme`
--

INSERT INTO `probleme` (`IdentifiantP`, `NomP`, `DateProbleme`, `DateResolution`, `Resolution`, `Description`, `IdentifiantPe`, `IdentifiantM`) VALUES
(1, 'Panne', '2021-05-19', '2021-05-31', 'Problème résolu', 'Ordinateur en panne.', '22508753', 'N122342546567'),
(2, 'Autre panne', '2021-05-05', '2021-06-21', 'Problème résolu', 'panne', '45628764', 'N635215328745'),
(3, 'Panne', NULL, NULL, 'Problème résolu', 'Ordi en panne', '85413601', 'N230285049374'),
(4, 'Test Ordi N122', '2021-06-01', NULL, 'Problème résolu', 'pb sur Ordi N122', '1', 'N122342546567'),
(5, 'test', '2021-06-01', '2021-06-22', 'Problème résolu', 'test N122', '22508753', 'N77'),
(6, 'a', '2021-06-11', NULL, 'Non résolu', 'a', 'ant@ut-capitole.fr', 'N952145236874');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
