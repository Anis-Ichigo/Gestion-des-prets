-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 03 juil. 2021 à 10:51
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
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(13, 'Lundi', '11:00:00', 'Disponible'),
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
(65, 'Mercredi', '08:00:00', 'Indisponible'),
(66, 'Mercredi', '08:15:00', 'Disponible'),
(67, 'Mercredi', '08:30:00', 'Disponible'),
(68, 'Mercredi', '08:45:00', 'Disponible'),
(69, 'Mercredi', '09:00:00', 'Indisponible'),
(70, 'Mercredi', '09:15:00', 'Disponible'),
(71, 'Mercredi', '09:30:00', 'Indisponible'),
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
(160, 'Vendredi', '17:00:00', 'Disponible');

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
  `Statut_RDV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a venir',
  `Contrat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Horaire_modif` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdentifiantM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdentifiantPe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdentifiantCal` int(10) DEFAULT NULL,
  PRIMARY KEY (`IdentifiantE`),
  KEY `IdentifiantM` (`IdentifiantM`),
  KEY `IdentifiantPe` (`IdentifiantPe`),
  KEY `IdentifiantCal` (`IdentifiantCal`)
) ENGINE=MyISAM AUTO_INCREMENT=149 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`IdentifiantE`, `DateEmprunt`, `DateRetour`, `DateProlongation`, `Motif`, `mail_rappel`, `mail_retour_depasse`, `EtatE`, `Statut_RDV`, `Contrat`, `Horaire_modif`, `IdentifiantM`, `IdentifiantPe`, `IdentifiantCal`) VALUES
(146, '2021-07-01', '2021-07-02', NULL, 'Pret', NULL, NULL, 'Non rendu', 'termine', 'signe', '08:00:00', 'A36548', 'anis1@ut-capitole.fr', 65),
(148, '2021-07-07', '2021-11-02', NULL, 'Pret', NULL, NULL, 'Non rendu', 'a venir', NULL, NULL, 'A95634', 'anis1@ut-capitole.fr', 71),
(145, '2021-07-07', '2021-11-02', NULL, 'Pret', NULL, NULL, 'Non rendu', 'a venir', NULL, NULL, 'A98756', 'anis@ut-capitole.fr', 69),
(144, '2021-07-02', '2021-07-02', NULL, 'Retour', NULL, NULL, 'Rendu', 'termine', 'signe', '09:00:00', 'A98756', 'responsable@ut-capitole.fr', 69),
(142, '2021-07-21', '2022-06-02', NULL, 'Pret', NULL, NULL, 'Non rendu', 'a venir', NULL, NULL, 'A96314', 'antoine.lavigne@ut-capitole.fr', 77),
(143, '2021-07-02', '2021-09-23', NULL, 'Pret', NULL, NULL, 'Rendu', 'termine', 'signe', '14:30:00', 'A98756', 'responsable@ut-capitole.fr', 150);

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
('A98756', '2021-06-29', 'Non Dispo', 'Ordinateur', 'Existant', '123456', 'Inspiron '),
('A96314', '2021-06-04', 'Non Dispo', 'Ordinateur', 'Existant', 'C-785', 'Inspiron 15 3000'),
('A36548', '2021-05-05', 'Non Dispo', 'Ordinateur', 'Existant', 'C-963', 'ASUS Vivobook S14 S413IA'),
('A96348', '2020-11-18', 'Dispo', 'Tablette', 'Existant', 'C-963', 'Lenovo TAB M10+ X606'),
('A78526', '2021-06-09', 'Dispo', 'Cle 4G', 'Supprimé', 'C-452', 'HUAWEI E8372h-320 LTE'),
('A12845', '2021-06-10', 'Dispo', 'Ordinateur', 'Existant', 'C-975', 'Inspiron 15 3000'),
('A95634', '2021-06-04', 'Non Dispo', 'Ordinateur', 'Existant', 'C-456', 'Inspiron 15 3000');

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
('HUAWEI E8372h-320 LTE', 'HUAWEI ', '', '', ''),
('Lenovo TAB M10+ X606', 'Lenovo ', '4', '64', 'MediaTek® Helio P22T Tab'),
('Inspiron ', 'DELL', '8', '500gb', 'Intel i3');

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
  `semaine` int(20) DEFAULT '0',
  `date_r` date DEFAULT NULL,
  `categorie` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdentifiantPe`)
) ENGINE=MyISAM AUTO_INCREMENT=85413602 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`IdentifiantPe`, `NomPe`, `PrenomPe`, `EmailPe`, `Mot_de_passePe`, `AdressePe`, `TelPe`, `Statut`, `Secretariat`, `Formation`, `RolePe`, `semaine`, `date_r`, `categorie`) VALUES
('tim.cabirol@ut-capitole.fr', 'CABIROL ', 'Tim', 'tim.cabirol@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, '0624356789', 'Etudiant', NULL, 'M2 MIAGE IPM', 'Emprunteur', NULL, NULL, NULL),
('anis1@ut-capitole.fr', 'Anis', 'Mana', 'anis1@ut-capitole.fr', '940c0f26fd5a30775bb1cbd1f6840398d39bb813', NULL, '0612344568', 'Etudiant', NULL, 'L3 MIASHS TI', 'Emprunteur', 1, '2021-07-02', 'Ordinateur'),
('anis@ut-capitole.fr', 'Mana ', 'Anis', 'anis@ut-capitole.fr', 'e6bfd3374b5922d4e6fac56af4e31199bcbcc36f', NULL, '0617306324', 'Etudiant', NULL, 'L3 MIASHS TI', 'Emprunteur', 1, '2021-11-02', 'Ordinateur'),
('alain.berro@ut-capitole.fr', 'Berro', 'Alain', 'alain.berro@ut-capitole.fr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, '0608667107', 'Etudiant', NULL, 'L3 MIASHS TI', 'Emprunteur', 1, '2021-09-01', 'Ordinateur'),
('anis.mana@ut-capitole.fr', 'MANA', 'Anis', 'anis.mana@ut-capitole.fr', 'e6bfd3374b5922d4e6fac56af4e31199bcbcc36f', NULL, '0632158769', 'Etudiant', NULL, 'M1 MIAGE IM', 'Emprunteur', NULL, NULL, NULL),
('haoyang.yu@ut-capitole.fr', 'YU', 'Haoyang', 'haoyang.yu@ut-capitole.fr', '167b6c4a4e415fdfc65024a01a1d46b38344ab1b', NULL, '0714563215', 'Etudiant', NULL, 'M2 MIAGE IPM', 'Emprunteur', NULL, NULL, NULL),
('vacataire.malle@ut-capitole.fr', 'MALLE', 'vacataire', 'vacataire@ut-capitole.fr', 'a947d6753ff19cc105d24a5e8289a93d3502f028', NULL, '0715384562', 'Etudiant', NULL, 'M1 MIAGE IDA', 'Vacataire', 0, NULL, ''),
('antoine.lavigne@ut-capitole.fr', 'LAVIGNE', 'Antoine', 'antoine.lavigne@ut-capitole.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '', '0698745639', 'Etudiant', NULL, 'M1 MIAGE IM', 'Emprunteur', 2, '2021-07-15', 'Cle 4G'),
('responsable@ut-capitole.fr', 'BALLABRIGA', 'Responsable', 'responsable@ut-capitole.fr', 'ad7d7cd6095d5d334af4bafe5ba75bbbaf61dbfd', NULL, '0623687415', 'Personnel Administratif', NULL, 'AUTRE', 'Responsable', 0, '2021-07-02', ''),
('marine.cabirol@ut-capitole.fr', 'CABIROL', 'Marine', 'marine.cabirol@ut-capitole.fr', 'd0a50bedfb1b8d42a734a8a4067d8308a527e627', NULL, '0612365478', 'Etudiant', NULL, 'M2 MIAGE ISIAD', 'Emprunteur', NULL, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `probleme`
--

INSERT INTO `probleme` (`IdentifiantP`, `NomP`, `DateProbleme`, `DateResolution`, `Resolution`, `Description`, `IdentifiantPe`, `IdentifiantM`) VALUES
(12, 'probleme', '2021-07-02', '2021-07-02', 'Problème résolu', 'le pc ne s\'allume plus', 'responsable@ut-capitole.fr', 'A98756');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
