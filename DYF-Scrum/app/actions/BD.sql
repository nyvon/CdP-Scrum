-- phpMyAdmin SQL Dump
-- version 3.1.2deb1ubuntu0.2
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Lun 27 Octobre 2014 à 18:02
-- Version du serveur: 5.0.75
-- Version de PHP: 5.2.6-3ubuntu4.6
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
-- 
-- Base de données: `nyvon`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `ASSOCIER`
-- 
CREATE TABLE IF NOT EXISTS `ASSOCIER` (
`ID_USER_STORY` int(11) NOT NULL,
`ID_TACHE` int(11) NOT NULL,
PRIMARY KEY (`ID_USER_STORY`,`ID_TACHE`),
KEY `ID_TACHE` (`ID_TACHE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Contenu de la table `ASSOCIER`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `BACKLOG`
-- 
CREATE TABLE IF NOT EXISTS `BACKLOG` (
`ID_PROJET` int(11) NOT NULL,
`ID_USER_STORY` int(11) NOT NULL,
PRIMARY KEY (`ID_PROJET`,`ID_USER_STORY`),
KEY `ID_USER_STORY` (`ID_USER_STORY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Contenu de la table `BACKLOG`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `CONCERNER`
-- 
CREATE TABLE IF NOT EXISTS `CONCERNER` (
`ID_TEST` int(11) NOT NULL,
`ID_USER_STORY` int(11) NOT NULL,
`ID_TACHE` int(11) default NULL,
PRIMARY KEY (`ID_TEST`,`ID_USER_STORY`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- 
-- Contenu de la table `CONCERNER`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `CONTENIR`
-- 
CREATE TABLE IF NOT EXISTS `CONTENIR` (
`ID_SPRINT` int(11) NOT NULL,
`ID_USER_STORY` int(11) NOT NULL,
PRIMARY KEY (`ID_SPRINT`,`ID_USER_STORY`),
UNIQUE KEY `ID_USER_STORY` (`ID_USER_STORY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Contenu de la table `CONTENIR`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `DEPENDANCE`
-- 
CREATE TABLE IF NOT EXISTS `DEPENDANCE` (
`ID_USER_STORY` int(11) NOT NULL,
`ID_US_DEPENDANT` int(11) NOT NULL,
PRIMARY KEY (`ID_USER_STORY`,`ID_US_DEPENDANT`),
KEY `ID_US_DEPENDANT` (`ID_US_DEPENDANT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Contenu de la table `DEPENDANCE`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `ETAT`
-- 
CREATE TABLE IF NOT EXISTS `ETAT` (
`ID` int(11) NOT NULL auto_increment,
`DESCRIPTION` int(11) NOT NULL,
PRIMARY KEY (`ID`),
UNIQUE KEY `DESCRIPTION` (`DESCRIPTION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- 
-- Contenu de la table `ETAT`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `LIER`
-- 
CREATE TABLE IF NOT EXISTS `LIER` (
`ID_PROJET` int(11) NOT NULL,
`ID_SPRINT` int(11) NOT NULL,
PRIMARY KEY (`ID_PROJET`,`ID_SPRINT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- 
-- Contenu de la table `LIER`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `PARTICIPER`
-- 
CREATE TABLE IF NOT EXISTS `PARTICIPER` (
`ID_PROJET` int(11) NOT NULL,
`ID_UTILISATEUR` int(11) NOT NULL,
`ID_ROLE` int(11) NOT NULL,
PRIMARY KEY (`ID_PROJET`,`ID_UTILISATEUR`),
KEY `ID_UTILISATEUR` (`ID_UTILISATEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Contenu de la table `PARTICIPER`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `PROJET`
-- 
CREATE TABLE IF NOT EXISTS `PROJET` (
`ID` int(11) NOT NULL auto_increment,
`NOM` varchar(50) NOT NULL,
`DESCRIPTION` text NOT NULL,
`LIEN_GIT` text NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- 
-- Contenu de la table `PROJET`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `ROLE`
-- 
CREATE TABLE IF NOT EXISTS `ROLE` (
`ID` int(11) NOT NULL auto_increment,
`NOM` varchar(50) NOT NULL,
PRIMARY KEY (`ID`),
UNIQUE KEY `NOM` (`NOM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- 
-- Contenu de la table `ROLE`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `SPRINT`
-- 
CREATE TABLE IF NOT EXISTS `SPRINT` (
`ID` int(11) NOT NULL auto_increment,
`DATE_DEB` date NOT NULL,
`DATE_FIN` date NOT NULL,
`DUREE` int(11) NOT NULL,
`ID_PROJET` int(11) NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- 
-- Contenu de la table `SPRINT`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `TACHE`
-- 
CREATE TABLE IF NOT EXISTS `TACHE` (
`ID` int(11) NOT NULL auto_increment,
`INTITULE` varchar(100) NOT NULL,
`DESCRIPTION` text NOT NULL,
`COUT` int(11) NOT NULL,
`ID_ETAT` int(11) NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- 
-- Contenu de la table `TACHE`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `TEST`
-- 
CREATE TABLE IF NOT EXISTS `TEST` (
`ID` int(11) NOT NULL auto_increment,
`TYPE` varchar(60) NOT NULL,
`DESCRIPTION` text NOT NULL,
`SPECIFICATION` text NOT NULL,
`ID_ETAT` int(11) NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- 
-- Contenu de la table `TEST`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `USER_STORY`
-- 
CREATE TABLE IF NOT EXISTS `USER_STORY` (
`ID` int(11) NOT NULL auto_increment,
`TYPE_UTILISATEUR` varchar(100) NOT NULL,
`BUT` varchar(100) NOT NULL,
`BENEFICE` varchar(100) NOT NULL,
`COUT` int(11) NOT NULL,
`PRIORITE` int(11) NOT NULL,
`ID_ETAT` int(11) NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- 
-- Contenu de la table `USER_STORY`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `UTILISATEUR`
-- 
CREATE TABLE IF NOT EXISTS `UTILISATEUR` (
`ID` int(11) NOT NULL auto_increment,
`NOM` varchar(20) NOT NULL,
`PRENOM` varchar(20) NOT NULL,
`MAIL` varchar(50) NOT NULL,
`PSEUDO` varchar(15) NOT NULL,
`MOT_DE_PASSE` varchar(20) NOT NULL,
PRIMARY KEY (`ID`),
UNIQUE KEY `MAIL` (`MAIL`,`PSEUDO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- 
-- Contenu de la table `UTILISATEUR`
-- 
-- 
-- Contraintes pour les tables exportées
-- 
-- 
-- Contraintes pour la table `ASSOCIER`
-- 
ALTER TABLE `ASSOCIER`
ADD CONSTRAINT `ASSOCIER_ibfk_2` FOREIGN KEY (`ID_TACHE`) REFERENCES `TACHE` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `ASSOCIER_ibfk_1` FOREIGN KEY (`ID_USER_STORY`) REFERENCES `USER_STORY` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
-- 
-- Contraintes pour la table `BACKLOG`
-- 
ALTER TABLE `BACKLOG`
ADD CONSTRAINT `BACKLOG_ibfk_1` FOREIGN KEY (`ID_PROJET`) REFERENCES `PROJET` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `BACKLOG_ibfk_2` FOREIGN KEY (`ID_USER_STORY`) REFERENCES `USER_STORY` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
-- 
-- Contraintes pour la table `DEPENDANCE`
-- 
ALTER TABLE `DEPENDANCE`
ADD CONSTRAINT `DEPENDANCE_ibfk_2` FOREIGN KEY (`ID_US_DEPENDANT`) REFERENCES `USER_STORY` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `DEPENDANCE_ibfk_1` FOREIGN KEY (`ID_USER_STORY`) REFERENCES `USER_STORY` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
-- 
-- Contraintes pour la table `PARTICIPER`
-- 
ALTER TABLE `PARTICIPER`
ADD CONSTRAINT `PARTICIPER_ibfk_1` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `UTILISATEUR` (`ID`);
-- 
-- Contraintes pour la table `PROJET`
-- 
ALTER TABLE `PROJET`
ADD CONSTRAINT `PROJET_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `PARTICIPER` (`ID_PROJET`) ON DELETE CASCADE ON UPDATE CASCADE;
-- 
-- Contraintes pour la table `SPRINT`
-- 
ALTER TABLE `SPRINT`
ADD CONSTRAINT `SPRINT_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `CONTENIR` (`ID_SPRINT`) ON DELETE CASCADE ON UPDATE CASCADE;
-- 
-- Contraintes pour la table `USER_STORY`
-- 
ALTER TABLE `USER_STORY`
ADD CONSTRAINT `USER_STORY_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `CONTENIR` (`ID_USER_STORY`) ON DELETE CASCADE ON UPDATE CASCADE;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;