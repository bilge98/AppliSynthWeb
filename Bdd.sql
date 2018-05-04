-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 04 mai 2018 à 07:34
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
-- Base de données :  `junior`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(20) NOT NULL,
  `NumRue` int(11) NOT NULL,
  `NomRue` varchar(50) NOT NULL,
  `CP` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Siret` varchar(50) NOT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `convention`
--

DROP TABLE IF EXISTS `convention`;
CREATE TABLE IF NOT EXISTS `convention` (
  `NumConvention` int(11) NOT NULL AUTO_INCREMENT,
  `NomProjet` varchar(50) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `MontantHT` double NOT NULL,
  `MontantTTC` double NOT NULL,
  `Acompte` double NOT NULL,
  `TVA` float NOT NULL,
  `Signature` tinyint(1) NOT NULL,
  `Commentaire` text NOT NULL,
  PRIMARY KEY (`NumConvention`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `IdEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` int(50) NOT NULL,
  `Adresse` int(50) NOT NULL,
  `NumSecu` varchar(50) NOT NULL,
  `DateNaiss` date NOT NULL,
  PRIMARY KEY (`IdEtudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `NumFacture` int(11) NOT NULL AUTO_INCREMENT,
  `DateFacture` date NOT NULL,
  `MontantHT` double NOT NULL,
  `MontantTTC` double NOT NULL,
  `Payee` tinyint(1) NOT NULL,
  PRIMARY KEY (`NumFacture`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

DROP TABLE IF EXISTS `tache`;
CREATE TABLE IF NOT EXISTS `tache` (
  `NumTache` int(11) NOT NULL AUTO_INCREMENT,
  `Intitule` varchar(50) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `PrixHT` int(11) NOT NULL,
  PRIMARY KEY (`NumTache`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
