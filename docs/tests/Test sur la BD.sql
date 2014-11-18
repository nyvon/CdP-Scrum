-- Test sur la BD

--
-- Base de données :  `dyfscrum`
--

USE dyfscrum;

-- --------------------------------------------------------

--
-- Structure de la table `ASSOCIER`
--

-- CREATE TABLE `ASSOCIER` (
--  `ID_USER_STORY` int(11) NOT NULL,
--  `ID_TACHE` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Test sur la table ASSOCIER
--

INSERT INTO ASSOCIER
(ID_USER_STORY,ID_TACHE)
VALUES
(1,1),
(2,2);

-- --------------------------------------------------------

--
-- Structure de la table `BACKLOG`
--

-- CREATE TABLE `BACKLOG` (
--   `ID_PROJET` int(11) NOT NULL,
--   `ID_USER_STORY` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Test sur la table
--

INSERT INTO BACKLOG
(ID_PROJET,ID_USER_STORY)
VALUES
(1,1),
(1,2),
(1,3);

-- --------------------------------------------------------

--
-- Structure de la table `CONTENIR`
--

-- CREATE TABLE `CONTENIR` (
--   `ID_SPRINT` int(11) NOT NULL,
--   `ID_USER_STORY` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Test sur la table
--

INSERT INTO CONTENIR
(ID_SPRINT,ID_USER_STORY)
VALUES
(1,1),
(1,2),
(2,3);

-- --------------------------------------------------------

--
-- Structure de la table `DEPENDANCE`
--

-- CREATE TABLE IF NOT EXISTS `DEPENDANCE` (
--   `ID_TACHE` int(11) NOT NULL,
--   `ID_TACHE_DEPENDANT` int(11) NOT NULL,
--   PRIMARY KEY  (`ID_TACHE`,`TACHE`),
--   KEY `ID_TACHE_DEPENDANT` (`ID_TACHE_DEPENDANT`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Test sur la table
--

INSERT INTO DEPENDANCE
(ID_TACHE,ID_TACHE_DEPENDANT)
VALUES
(2,1);

-- --------------------------------------------------------

--
-- Structure de la table `ETAT`
--

-- CREATE TABLE `ETAT` (
-- `ID` int(11) NOT NULL,
--   `DESCRIPTION` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Test sur la table
--

-- INSERT INTO ETAT
-- (DESCRIPTION)
-- VALUES
-- ('À FAIRE'),
-- ('EN COURS'),
-- ('FAIT');


-- --------------------------------------------------------

--
-- Structure de la table `KANBAN`
--

-- CREATE TABLE `KANBAN` (
--   `ID_TACHE` int(11) NOT NULL,
--   `ID_UTILISATEUR` int(11) NOT NULL
-- ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Test sur la table
--
INSERT INTO KANBAN
(ID_TACHE,ID_UTILISATEUR)
VALUES
(1,1),
(2,2);



-- --------------------------------------------------------

--
-- Structure de la table `PARTICIPER`
--

-- CREATE TABLE `PARTICIPER` (
--   `ID_PROJET` int(11) NOT NULL,
--   `ID_UTILISATEUR` int(11) NOT NULL,
--   `ID_ROLE` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Test sur la table
--

INSERT INTO PARTICIPER
(ID_PROJET,ID_UTILISATEUR,ID_ROLE)
VALUES
(1,1,1),
(1,2,2),
(1,3,3),
(2,2,3);

-- --------------------------------------------------------

--
-- Structure de la table `PROJET`
--

-- CREATE TABLE `PROJET` (
-- `ID` int(11) NOT NULL,
--   `NOM` varchar(50) NOT NULL,
--   `DESCRIPTION` text NOT NULL,
--   `LIEN_GIT` text NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Test sur la table
--

INSERT INTO PROJET
(NOM,DESCRIPTION,LIEN_GIT)
VALUES
('DYF-Scrum',"Site de gestion de projet méthode agile","https://github.com/nyvon/CdP-Scrum"),
('Autre projet',"Une autre projet","https://autreprojet.com/");

-- --------------------------------------------------------

--
-- Structure de la table `ROLE`
--

-- CREATE TABLE `ROLE` (
-- `ID` int(11) NOT NULL,
--   `NOM` varchar(50) NOT NULL
-- ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


--
-- Test sur la table
--

-- INSERT INTO `ROLE` (`ID`, `NOM`) VALUES
-- (1, 'Développeur'),
-- (2, 'Product Owner'),
-- (3, 'Scrum Master');

-- Données de base dans la BD

-- --------------------------------------------------------

--
-- Structure de la table `SPRINT`
--

-- CREATE TABLE `SPRINT` (
-- `ID` int(11) NOT NULL,
--   `DATE_DEB` date NOT NULL,
--   `DATE_FIN` date NOT NULL,
--   `DUREE` int(11) NOT NULL,
--   `ID_PROJET` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Test sur la table
--

INSERT INTO SPRINT
(DATE_DEB,DATE_FIN,DUREE,ID_PROJET)
VALUES
('2014-10-27',"2014-10-31",5,1),
('2014-11-03',"2014-11-08",5,1);

-- --------------------------------------------------------

--
-- Structure de la table `TACHE`
--

-- CREATE TABLE `TACHE` (
-- `ID` int(11) NOT NULL,
--   `INTITULE` varchar(100) NOT NULL,
--   `DESCRIPTION` text NOT NULL,
--   `COUT` int(11) NOT NULL,
--   `ID_ETAT` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Test sur la table
--

INSERT INTO TACHE
(INTITULE,DESCRIPTION,COUT,ID_ETAT)
VALUES
('Test E2E',"Effectuer les tests E2E",1,1),
('BD','Créer la BD',1,3);

-- --------------------------------------------------------

--
-- Structure de la table `TEST`
--

-- CREATE TABLE `TEST` (
-- `ID` int(11) NOT NULL,
--   `TYPE` varchar(60) NOT NULL,
--   `DESCRIPTION` text NOT NULL,
--   `SPECIFICATION` text NOT NULL,
--   `ID_ETAT` int(11) NOT NULL
-- ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Test sur la table
--

INSERT INTO TEST
(TYPE,DESCRIPTION,SPECIFICATION,ID_ETAT,ID_SPRINT,ID_USER_STORY,ID_TACHE)
VALUES
('Validation',"Test de validation sur la page de connexion",'-cliquer sur connexion \n- entrer les login \n-cliquer sur connexion \n -resultat attendu:état connecté',1,1,1,1),
('Unitaire','Tester la méthode check()','Tester la méthode check() en lui donnant en paramètre des valeurs diverses',1,1,2,NULL);

-- --------------------------------------------------------

--
-- Structure de la table `USER_STORY`
--

-- CREATE TABLE `USER_STORY` (
-- `ID` int(11) NOT NULL,
--   `TYPE_UTILISATEUR` varchar(100) NOT NULL,
--   `BUT` varchar(100) NOT NULL,
--   `BENEFICE` varchar(100) NOT NULL,
--   `COUT` int(11) NOT NULL,
--   `PRIORITE` int(11) NOT NULL,
--   `ID_ETAT` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Test sur la table
--

INSERT INTO USER_STORY
(TYPE_UTILISATEUR,BUT,BENEFICE,COUT,PRIORITE,ID_ETAT) 
VALUES
('visiteur',"m'inscrire sur le site",'',3,1,3),
('Product Owner','ajouter des utilisateurs et leur 
rôle','de donner responabilités',3,2,3),
('Développeur','créer/modifier/supprimer des
User Story','de générer un backlog',3,1,1);

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

-- CREATE TABLE `UTILISATEUR` (
-- `ID` int(11) NOT NULL,
--   `NOM` varchar(20) NOT NULL,
--   `PRENOM` varchar(20) NOT NULL,
--   `MAIL` varchar(50) NOT NULL,
--   `PSEUDO` varchar(15) NOT NULL,
--   `MOT_DE_PASSE` char(32) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Test sur la table
--

INSERT INTO UTILISATEUR
(NOM,PRENOM,MAIL,PSEUDO,MOT_DE_PASSE) 
VALUES
('Yvon','Nicolas','nicolasyvon@gmail.com','nyvon',MD5('1234')),
('Dossot','Sébastien','sebastiendossot@gmail.com','sdossot',MD5('5678')),
('Fane','Boubacar','boubacarfane@gmail.com','bfane',MD5('9012'));