-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 juin 2018 à 07:31
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
  `NomClient` varchar(255) NOT NULL,
  `NumRue` int(11) NOT NULL,
  `NomRue` varchar(255) NOT NULL,
  `CP` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Tel` varchar(255) NOT NULL,
  `Siret` varchar(255) NOT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `idCompte` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`idCompte`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idCompte`, `UserName`, `Password`, `Admin`) VALUES
(1, 'test1234', '$2y$10$2g7VteGzZ3/0H5muyFzStuvv0DUW5BGYg/oILNrH8l3lg.DkKgVSC', 1),
(2, 'tayfun', '$2y$10$S5y3gkme.UfiwI2G.4keyuDItIyBSt.NflF8pfolOCBhQmqbRLFBK', 0);

-- --------------------------------------------------------

--
-- Structure de la table `convention`
--

DROP TABLE IF EXISTS `convention`;
CREATE TABLE IF NOT EXISTS `convention` (
  `NumConvention` int(11) NOT NULL AUTO_INCREMENT,
  `NomProjet` varchar(255) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `MontantHT` double NOT NULL,
  `MontantTTC` double NOT NULL,
  `Acompte` double NOT NULL,
  `TVA` float NOT NULL,
  `Signature` tinyint(1) NOT NULL,
  `Commentaire` text NOT NULL,
  PRIMARY KEY (`NumConvention`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `convention`
--

INSERT INTO `convention` (`NumConvention`, `NomProjet`, `DateDebut`, `DateFin`, `MontantHT`, `MontantTTC`, `Acompte`, `TVA`, `Signature`, `Commentaire`) VALUES
(1, 'test', '2018-06-04', '2018-06-12', 250, 250, 100, 20, 0, 'sdcwcqscqsxcqsc'),
(2, 'tersdqs', '2018-06-12', '2018-06-27', 222, 222, 1, 2, 1, 'dssd');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `IdEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `NumSecu` varchar(255) NOT NULL,
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
  `Intitule` varchar(255) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `PrixHT` int(11) NOT NULL,
  PRIMARY KEY (`NumTache`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
