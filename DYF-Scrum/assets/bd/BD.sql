-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Dim 16 Novembre 2014 à 20:55
-- Version du serveur :  5.5.38
-- Version de PHP :  5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données :  `dyfscrum`
--


CREATE DATABASE dyfscrum;
USE dyfscrum;

-- --------------------------------------------------------

--
-- Structure de la table `ASSOCIER`
--

CREATE TABLE `ASSOCIER` (
  `ID_USER_STORY` int(11) NOT NULL,
  `ID_TACHE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `BACKLOG`
--

CREATE TABLE `BACKLOG` (
  `ID_PROJET` int(11) NOT NULL,
  `ID_USER_STORY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CONTENIR`
--

CREATE TABLE `CONTENIR` (
  `ID_SPRINT` int(11) NOT NULL,
  `ID_USER_STORY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DEPENDANCE`
--

CREATE TABLE `DEPENDANCE` (
  `ID_TACHE` int(11) NOT NULL,
  `ID_TACHE_DEPENDANT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ETAT`
--

CREATE TABLE `ETAT` (
`ID` int(11) NOT NULL,
  `DESCRIPTION` varchar(32) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `ETAT`
--

INSERT INTO `ETAT` (`ID`, `DESCRIPTION`) VALUES
(1, 'À FAIRE'),
(2, 'EN COURS'),
(3, 'FAIT');

-- --------------------------------------------------------

--
-- Structure de la table `KANBAN`
--

CREATE TABLE `KANBAN` (
  `ID_TACHE` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LIER`
--

CREATE TABLE `LIER` (
  `ID_PROJET` int(11) NOT NULL,
  `ID_SPRINT` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `PARTICIPER`
--

CREATE TABLE `PARTICIPER` (
  `ID_PROJET` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `ID_ROLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `PROJET`
--

CREATE TABLE `PROJET` (
`ID` int(11) NOT NULL,
  `NOM` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DESCRIPTION` text CHARACTER SET utf8 NOT NULL,
  `LIEN_GIT` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ROLE`
--

CREATE TABLE `ROLE` (
`ID` int(11) NOT NULL,
  `NOM` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `ROLE`
--

INSERT INTO `ROLE` (`ID`, `NOM`) VALUES
(1, 'Développeur'),
(2, 'Product Owner'),
(3, 'Scrum Master');

-- --------------------------------------------------------

--
-- Structure de la table `SPRINT`
--

CREATE TABLE `SPRINT` (
`ID` int(11) NOT NULL,
  `DATE_DEB` date NOT NULL,
  `DATE_FIN` date NOT NULL,
  `DUREE` int(11) NOT NULL,
  `ID_PROJET` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `TACHE`
--

CREATE TABLE `TACHE` (
`ID` int(11) NOT NULL,
  `INTITULE` varchar(100) CHARACTER SET utf8 NOT NULL,
  `DESCRIPTION` text CHARACTER SET utf8 NOT NULL,
  `COUT` int(11) NOT NULL,
  `ID_ETAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `TEST`
--

CREATE TABLE `TEST` (
`ID` int(11) NOT NULL,
  `TYPE` varchar(60) CHARACTER SET utf8 NOT NULL,
  `DESCRIPTION` text CHARACTER SET utf8 NOT NULL,
  `SPECIFICATION` text CHARACTER SET utf8 NOT NULL,
  `ID_ETAT` int(11) NOT NULL,
  `ID_SPRINT` int(11) NOT NULL,
  `ID_USER_STORY` int(11) DEFAULT NULL,
  `ID_TACHE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `USER_STORY`
--

CREATE TABLE `USER_STORY` (
`ID` int(11) NOT NULL,
  `TYPE_UTILISATEUR` varchar(100) CHARACTER SET utf8 NOT NULL,
  `BUT` varchar(100) CHARACTER SET utf8 NOT NULL,
  `BENEFICE` varchar(100) CHARACTER SET utf8 NOT NULL,
  `COUT` int(11) NOT NULL,
  `PRIORITE` int(11) NOT NULL,
  `ID_ETAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE `UTILISATEUR` (
`ID` int(11) NOT NULL,
  `NOM` varchar(20) CHARACTER SET utf8 NOT NULL,
  `PRENOM` varchar(20) CHARACTER SET utf8 NOT NULL,
  `MAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  `PSEUDO` varchar(15) CHARACTER SET utf8 NOT NULL,
  `MOT_DE_PASSE` char(32) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ASSOCIER`
--
ALTER TABLE `ASSOCIER`
 ADD PRIMARY KEY (`ID_USER_STORY`,`ID_TACHE`), ADD KEY `ID_TACHE` (`ID_TACHE`);

--
-- Index pour la table `BACKLOG`
--
ALTER TABLE `BACKLOG`
 ADD PRIMARY KEY (`ID_PROJET`,`ID_USER_STORY`), ADD KEY `ID_USER_STORY` (`ID_USER_STORY`);

--
-- Index pour la table `CONTENIR`
--
ALTER TABLE `CONTENIR`
 ADD PRIMARY KEY (`ID_SPRINT`,`ID_USER_STORY`), ADD UNIQUE KEY `ID_USER_STORY` (`ID_USER_STORY`);

--
-- Index pour la table `DEPENDANCE`
--
ALTER TABLE `DEPENDANCE`
 ADD PRIMARY KEY (`ID_TACHE`,`ID_TACHE_DEPENDANT`), ADD KEY `ID_TACHE_DEPENDANT` (`ID_TACHE_DEPENDANT`);

--
-- Index pour la table `ETAT`
--
ALTER TABLE `ETAT`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `DESCRIPTION` (`DESCRIPTION`);

--
-- Index pour la table `KANBAN`
--
ALTER TABLE `KANBAN`
 ADD PRIMARY KEY (`ID_TACHE`,`ID_UTILISATEUR`);

--
-- Index pour la table `LIER`
--
ALTER TABLE `LIER`
 ADD PRIMARY KEY (`ID_PROJET`,`ID_SPRINT`);

--
-- Index pour la table `PARTICIPER`
--
ALTER TABLE `PARTICIPER`
 ADD PRIMARY KEY (`ID_PROJET`,`ID_UTILISATEUR`), ADD KEY `ID_UTILISATEUR` (`ID_UTILISATEUR`);

--
-- Index pour la table `PROJET`
--
ALTER TABLE `PROJET`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `ROLE`
--
ALTER TABLE `ROLE`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `NOM` (`NOM`);

--
-- Index pour la table `SPRINT`
--
ALTER TABLE `SPRINT`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `TACHE`
--
ALTER TABLE `TACHE`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `TEST`
--
ALTER TABLE `TEST`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `USER_STORY`
--
ALTER TABLE `USER_STORY`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `MAIL` (`MAIL`,`PSEUDO`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ETAT`
--
ALTER TABLE `ETAT`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `PROJET`
--
ALTER TABLE `PROJET`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ROLE`
--
ALTER TABLE `ROLE`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `SPRINT`
--
ALTER TABLE `SPRINT`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `TACHE`
--
ALTER TABLE `TACHE`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `TEST`
--
ALTER TABLE `TEST`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `USER_STORY`
--
ALTER TABLE `USER_STORY`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;