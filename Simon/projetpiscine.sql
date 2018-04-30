-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 30 avr. 2018 à 18:51
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
-- Base de données :  `projetpiscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `Nom` varchar(40) NOT NULL,
  `pourcentage` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`Nom`, `pourcentage`) VALUES
('C++', '76%'),
('Anglais', '86%');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `poste` varchar(20) NOT NULL,
  `entreprise` varchar(20) NOT NULL,
  `lieu` varchar(40) NOT NULL,
  `note` text NOT NULL,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  PRIMARY KEY (`poste`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`poste`, `entreprise`, `lieu`, `note`, `datedebut`, `datefin`) VALUES
('Student', 'La Poste', 'Paris 15', 'Trop fun ', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `ecole` varchar(40) NOT NULL,
  `diplome` varchar(40) NOT NULL,
  `domaine` varchar(40) NOT NULL,
  `lieu` varchar(40) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `note` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`ecole`, `diplome`, `domaine`, `lieu`, `datedebut`, `datefin`, `note`) VALUES
('ECE', 'Master', 'Ingenieurie', 'Paris', '2015-04-19', '2020-04-16', 'C\'est sympa');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `destinataire` varchar(40) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`destinataire`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`destinataire`, `message`) VALUES
('Carole', 'Salut je cherche un stage'),
('Dimitri', 'Sympa ton stage tu as des contacts ?');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `titre` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`titre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`titre`, `note`, `date`) VALUES
('Nouvel ami', 'Jerome souhaite rejoindre votre réseau', '2018-04-03');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `titre` varchar(40) NOT NULL,
  `texte` text NOT NULL,
  `media` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`titre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`titre`, `texte`, `media`, `date`) VALUES
('Ma nouvelle app', 'Hy voici ma nouvelle app\r\n', 'URL link', '2018-04-11');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `adresse` varchar(40) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  `nom` varchar(11) NOT NULL,
  `prenom` varchar(11) NOT NULL,
  `age` int(100) NOT NULL,
  `experience` varchar(40) NOT NULL,
  `situation` varchar(40) NOT NULL,
  `photoProfil` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `adressepostale` varchar(40) NOT NULL,
  `photofond` varchar(200) NOT NULL,
  PRIMARY KEY (`adresse`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`adresse`, `mdp`, `nom`, `prenom`, `age`, `experience`, `situation`, `photoProfil`, `tel`, `adressepostale`, `photofond`) VALUES
('jean@hotmai.fr', 'jean', 'Dupont', 'Jean', 28, 'Entrepreuneur', 'Recherche stagiaire', 'https://pixabay.com/fr/profil-homme-m%C3%A2le-photo-visage-2092113/', '', '', ''),
('sim97@hotmail.fr', 'mdp', 'Lhuillier', 'Simon', 20, 'Licence', 'Etudiant en 1 année du cycle ingénieur', 'link url', '0778213368', '5 rue Perthuis 92140 Clamart', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
