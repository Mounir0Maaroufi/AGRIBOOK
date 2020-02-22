-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 11 jan. 2020 à 13:39
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionstagiaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `encadreur`
--

DROP TABLE IF EXISTS `encadreur`;
CREATE TABLE IF NOT EXISTS `encadreur` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(20) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `encadreur`
--

INSERT INTO `encadreur` (`ID`, `NOM`, `PRENOM`) VALUES
(10, 'ben taher ', 'ahmed');

-- --------------------------------------------------------

--
-- Structure de la table `etablissment`
--

DROP TABLE IF EXISTS `etablissment`;
CREATE TABLE IF NOT EXISTS `etablissment` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `NOM` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etablissment`
--

INSERT INTO `etablissment` (`ID`, `NOM`) VALUES
(6, 'ISET JENDOUBA'),
(7, 'ISET KEF'),
(8, 'ISET MANOUBA'),
(9, 'ISET BEJA'),
(10, 'ISET CHATGUIA'),
(11, 'ISET Kélibia '),
(12, 'ISET Ksar Hellal '),
(13, 'ISET Nabeul '),
(14, 'ISET Radès '),
(15, 'ISET Siliana '),
(16, 'ISET Sousse '),
(17, 'ISET Zaghouan '),
(18, 'ISET Bizerte'),
(19, 'ISET Gafsa'),
(20, 'ISET Djerba ');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `NOM_FILIERE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`ID`, `NOM_FILIERE`) VALUES
(1, 'Systeme embarque'),
(2, 'Developpement des Systemes D\'Information');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `NIVEAU` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`ID`, `NIVEAU`) VALUES
(1, '1ére Année'),
(2, '2\'eme Annee'),
(3, '3\'eme Annee'),
(4, '4\'eme Annee'),
(5, '5\'eme Annee');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

DROP TABLE IF EXISTS `stagiaire`;
CREATE TABLE IF NOT EXISTS `stagiaire` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(50) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `DATE` varchar(20) NOT NULL,
  `ADRESSE` varchar(100) NOT NULL,
  `TELEPHONE` varchar(50) NOT NULL,
  `ETABLISSMENT` varchar(50) NOT NULL,
  `NIVEAU` varchar(50) NOT NULL,
  `ID_FILIERE` varchar(50) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `SUJET` varchar(50) NOT NULL,
  `PERIODE` varchar(20) NOT NULL,
  `DATEPERIODE1` date NOT NULL,
  `DATEPERIODE2` date NOT NULL,
  `PAIEMENT` varchar(50) NOT NULL,
  `MONTON` varchar(50) DEFAULT NULL,
  `ENCADREUR` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`ID`, `NOM`, `PRENOM`, `DATE`, `ADRESSE`, `TELEPHONE`, `ETABLISSMENT`, `NIVEAU`, `ID_FILIERE`, `TYPE`, `SUJET`, `PERIODE`, `DATEPERIODE1`, `DATEPERIODE2`, `PAIEMENT`, `MONTON`, `ENCADREUR`) VALUES
(28, 'ben taher ', 'souha', '1999-12-21', 'bizerte', '58696225', 'ISET JENDOUBA', '2\'eme Annee', 'Developpement des Systemes D\'Information', 'Obligatoires', ' gestion des stagiaires', 'Un Mois', '2020-01-07', '2020-02-07', 'Non', '0', 'ben taher ');

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

DROP TABLE IF EXISTS `sujet`;
CREATE TABLE IF NOT EXISTS `sujet` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `NOM_Sujet` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`ID`, `NOM_Sujet`) VALUES
(1, ' gestion de bibliotheque'),
(2, ' gestion des stagiaires'),
(3, ' gestion  de courrier\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `LOGIN` varchar(100) NOT NULL,
  `PWD` varchar(255) NOT NULL,
  `ROLE` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `ETAT` int(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `LOGIN`, `PWD`, `ROLE`, `EMAIL`, `ETAT`) VALUES
(1, 'admin', '123', 'ADMIN', 'mounir0maaroufi@gmail.com', 1),
(2, 'user1', '123', 'VISITEUR', 'user1@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
