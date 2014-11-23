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

INSERT INTO `ASSOCIER` (`ID_USER_STORY`, `ID_TACHE`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(1, 2),
(1, 3),
(2, 4),
(3, 5),
(3, 6),
(4, 7),
(5, 8),
(1, 9),
(2, 9),
(3, 9),
(4, 9),
(5, 9),
(6, 9),
(7, 9),
(8, 9),
(9, 9),
(10, 9),
(11, 9),
(12, 9),
(13, 9),
(14, 9),
(15, 9),
(16, 9),
(17, 9),
(18, 9),
(19, 9),
(20, 9),
(6, 10),
(7, 11),
(7, 12),
(7, 13),
(6, 14),
(6, 15),
(9, 16),
(10, 17),
(5, 18),
(5, 19),
(13, 20),
(13, 21),
(12, 22),
(12, 23),
(12, 24),
(17, 25),
(17, 26),
(14, 27),
(14, 28),
(15, 29),
(16, 30),
(16, 31);

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

INSERT INTO `BACKLOG` (`ID_PROJET`, `ID_USER_STORY`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20);

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

INSERT INTO `CONTENIR` (`ID_SPRINT`, `ID_USER_STORY`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 6),
(2, 7),
(2, 9),
(5, 10),
(5, 11),
(3, 12),
(3, 13),
(4, 14),
(4, 15),
(4, 16),
(3, 17),
(5, 19),
(5, 20);

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

INSERT INTO `DEPENDANCE` (`ID_TACHE`, `ID_TACHE_DEPENDANT`) VALUES
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(10, 1),
(9, 3),
(9, 4),
(7, 5),
(8, 5),
(9, 6),
(9, 7),
(9, 8),
(10, 8),
(9, 9);

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
INSERT INTO `KANBAN` (`ID_TACHE`, `ID_UTILISATEUR`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 3),
(5, 2),
(6, 3),
(7, 1),
(8, 3),
(9, 3),
(10, 3),
(11, 2),
(12, 3),
(13, 2),
(14, 1),
(15, 2),
(16, 1),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 1),
(23, 1),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 1),
(30, 3),
(31, 1);



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

INSERT INTO `PARTICIPER` (`ID_PROJET`, `ID_UTILISATEUR`, `ID_ROLE`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 3, 3),
(2, 2, 3);

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

INSERT INTO `PROJET` (`ID`, `NOM`, `DESCRIPTION`, `LIEN_GIT`) VALUES
(1, 'DYF-Scrum', 'Site de gestion de projet méthode agile', 'https://github.com/nyvon/CdP-Scrum'),
(2, 'Autre projet', 'Un autre projet', 'https://autreprojet.com/');

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

INSERT INTO `SPRINT` (`ID`, `DATE_DEB`, `DATE_FIN`, `DUREE`, `ID_PROJET`) VALUES
(1, '2014-10-28', '2014-11-04', 7, 1),
(2, '2014-11-04', '2014-11-11', 7, 1),
(3, '2014-11-11', '2014-11-18', 7, 1),
(4, '2014-11-18', '2014-11-25', 7, 1),
(5, '2014-11-25', '2014-12-02', 7, 1);

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

INSERT INTO `TACHE` (`ID`, `INTITULE`, `DESCRIPTION`, `COUT`, `ID_ETAT`) VALUES
(1, 'BD', 'concevoir la base de données', 1, 3),
(2, 'Test BD', 'Tester la base de données', 1, 3),
(3, 'form_inscript', 'créer Formulaire inscription', 1, 3),
(4, 'form_conn', 'créer formulaire de connexion', 1, 3),
(5, 'form_ajout_projet', 'créer formulaire d''ajout de projet', 1, 3),
(6, 'page_projet', 'créer page de projet', 1, 3),
(7, 'form_ajout_user', 'créer formulaire ajout d''utilisateur au projet', 1, 3),
(8, 'form_ajout_us', 'créer formulaire de création et d''ajout d''user story au projet', 1, 3),
(9, 'Tests E2E', 'Tests E2E sur toutes les fonctionnalités crées', 1, 3),
(10, 'form_sprint', 'créer formulaire de création de sprint et association d''US', 2, 3),
(11, 'form_ajout_tache', 'Formulaire d''ajout des tâches', 1, 3),
(12, 'form_modif_tache', 'Modification des tâches', 1, 3),
(13, 'form_suppr_tache', 'Formulaire suppression de tâches', 1, 3),
(14, 'form_modif_sprint', 'Formulaire modification sprint', 1, 3),
(15, 'form_suppr_sprint', 'Formulaire suppression de sprint', 1, 3),
(16, 'page_kanban', 'Page du kanban par sprint', 2, 3),
(17, 'Modif_etat_tache', 'Modifier état d''une tache du kanban', 1, 3),
(18, 'Form_modif_US', 'Formulaire modification US', 1, 3),
(19, 'form_suppr_us', 'Formulaire suppression US', 1, 3),
(20, 'page_backlog', 'Page backlog (listing des US et leurs taches)', 1, 3),
(21, 'ajout_bouton_US', 'Ajout des boutons manipulant les US', 1, 3),
(22, 'ajout_plugin_github', 'Ajouter le plugin github-php au site', 2, 3),
(23, 'lister_commit_github', 'Lister les commits de la branche principale', 2, 3),
(24, 'page_info_dépôt_github', 'Afficher les informations générales sur le dépôt github', 1, 3),
(25, 'page_test', 'Page de présentation des tests', 1, 3),
(26, 'form_spec_tests', 'Formulaire d''ajout de spécification de test', 1, 3),
(27, 'ajout_dependance', 'Ajouter dépendances pour le pert', 1, 3),
(28, 'page_pert', 'Générer le pert grace aux dépendances', 7, 1),
(29, 'afficher_sprint_actuel', 'Afficher sprint actuel', 5, 2),
(30, 'afficher_tache_us', 'Afficher tâche pour un US', 3, 1),
(31, 'afficher_tache_sprint', 'Afficher tâche pour un Sprint', 3, 1);

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

INSERT INTO `TEST` (`ID`, `TYPE`, `DESCRIPTION`, `SPECIFICATION`, `ID_ETAT`, `ID_SPRINT`, `ID_USER_STORY`, `ID_TACHE`) VALUES
(1, 'Validation', 'Test de validation sur la page de connexion', '-cliquer sur connexion \n- entrer les login \n-cliquer sur connexion \n -resultat attendu:état connecté', 1, 1, 1, 1),
(2, 'Unitaire', 'Tester la méthode check()', 'Tester la méthode check() en lui donnant en paramètre des valeurs diverses', 1, 1, 2, NULL),
(3, 'Validation', 'Test de validation sur connexion', 'cliquer sur connexion - entrer login et mot de passe - cliquer sur envoyer - verifier texte prÃ©sent : ConnectÃ© en tant que $pseudo', 1, 1, 2, NULL);

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

INSERT INTO `USER_STORY` (`ID`, `TYPE_UTILISATEUR`, `BUT`, `BENEFICE`, `COUT`, `PRIORITE`, `ID_ETAT`) VALUES
(1, 'visiteur', 'm''inscrire sur le site', '', 3, 1, 1),
(2, 'visiteur', 'me connecter', 'de créer un nouveau projet ou d''intégrer un projet', 1, 1, 1),
(3, 'Product Owner', 'créer un projet et spécifier l''environnement', 'd''organiser le projet', 5, 1, 1),
(4, 'Product Owner', 'ajouter des utilisateurs et leur rôle', 'de donner responabilités', 3, 1, 1),
(5, 'Développeur', 'créer/modifier/supprimer des User Story', 'de générer un backlog', 3, 1, 1),
(6, 'Product Owner ou Scrum Master', 'créer mes sprints', 'de répartir mes US', 8, 1, 1),
(7, 'Développeur', 'créer/modifier des tâches/supprimer', 'les associer aux US et leur donner des coûts/priorités/dépendances', 5, 1, 1),
(9, 'Scrum Master et Développeur', 'faire un kanban et le modifier', 'lier les tâches aux développeurs', 5, 1, 1),
(10, 'Développeur', 'afficher le kanban', 'connaître mes tâches à effectuer et de pouvoir changer leur état', 8, 1, 1),
(11, 'Développeur', 'lier le git au projet', 'd''accéder facilement au code', 3, 3, 1),
(12, 'Développeur', 'suivre l''avancement par les commit du git', 'savoir où on en est', 13, 4, 1),
(13, 'Développeur', 'lister les User story', '', 3, 2, 1),
(14, 'Développeur', 'pouvoir créer un PERT du sprint', 'd''obtenir un planning des tâches', 8, 3, 1),
(15, 'Développeur', 'afficher le sprint actuel', 'de voir l''avancement du sprint', 5, 1, 1),
(16, 'Développeur', 'afficher mes tâches pour un sprint ou une US donnée', '', 5, 2, 1),
(17, 'Développeur', 'spécifier les tests pour chaque US', 'les développer sur l''outil correspondant', 3, 2, 1),
(18, 'Développeur', 'lier jenkins au projet', 'voir l''avancement des tests', 13, 4, 1),
(19, 'Développeur', 'afficher l''ensemble des tests', 'voir s''ils sont réalisés, par qui et quand.', 3, 3, 1),
(20, 'Développeur', 'afficher le burn-down chart', 'voir l''avancement général du projet.', 5, 3, 1);

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