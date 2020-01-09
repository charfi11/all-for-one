-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 10 nov. 2019 à 18:16
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `afo`
--
CREATE DATABASE IF NOT EXISTS `afo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `afo`;

-- --------------------------------------------------------

--
-- Structure de la table `crew`
--

DROP TABLE IF EXISTS `crew`;
CREATE TABLE IF NOT EXISTS `crew` (
  `id_crew` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `pseudo` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  PRIMARY KEY (`id_crew`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `crew`
--

INSERT INTO `crew` (`id_crew`, `nom`, `prenom`, `pseudo`, `img`, `email`, `tel`) VALUES
(1, 'Rhilassi', 'Jawad', 'Shoto', 'jaja.jpg', 'jawad@mail.fr', '0809089345'),
(2, 'Da costa', 'Alexandre', 'Deku', 'daco.jpg', 'deku@mail.fr', '9870986890'),
(3, 'Boudinot', 'Aymerick', 'Rico', 'rico.jpg', 'rico@mail.fr', '00909090909'),
(4, 'Borgniet', 'Pierre', 'Deydey', 'pier.jpg', 'deydey@mail.fr', '09090909098'),
(5, 'Blanchard', 'Joris', 'Jojo', 'jo.jpg', 'jojo@mail.fr', '07878898679');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `img`) VALUES
(1, 'jaja.jpg'),
(3, 'joj.jpg'),
(4, 'j.jpg'),
(5, 'daco.jpg'),
(6, 'duo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id_like` int(11) NOT NULL AUTO_INCREMENT,
  `id_gallery` int(11) NOT NULL,
  `id_love` int(11) NOT NULL,
  PRIMARY KEY (`id_like`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id_like`, `id_gallery`, `id_love`) VALUES
(17, 3, 1),
(16, 4, 1),
(15, 3, 1),
(14, 4, 1),
(13, 3, 1),
(12, 1, 1),
(11, 6, 1),
(18, 3, 1),
(19, 3, 1),
(20, 1, 1),
(21, 5, 1),
(22, 6, 1),
(23, 4, 1),
(24, 3, 1),
(25, 1, 1),
(26, 3, 1),
(27, 4, 1),
(28, 6, 1),
(29, 1, 1),
(30, 1, 1),
(31, 6, 1),
(32, 4, 1),
(33, 3, 1),
(34, 4, 1),
(35, 3, 1),
(36, 3, 1),
(37, 4, 1),
(38, 1, 1),
(39, 1, 1),
(40, 1, 1),
(41, 6, 1),
(42, 1, 1),
(43, 1, 1),
(44, 1, 1),
(45, 1, 1),
(46, 4, 1),
(47, 4, 1),
(48, 4, 1),
(49, 4, 1),
(50, 4, 1),
(51, 3, 1),
(52, 3, 1),
(53, 1, 1),
(54, 4, 1),
(55, 4, 1),
(56, 5, 1),
(57, 5, 1),
(58, 6, 1),
(59, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `love`
--

DROP TABLE IF EXISTS `love`;
CREATE TABLE IF NOT EXISTS `love` (
  `id_love` int(11) NOT NULL AUTO_INCREMENT,
  `love` varchar(250) NOT NULL,
  PRIMARY KEY (`id_love`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `love`
--

INSERT INTO `love` (`id_love`, `love`) VALUES
(1, '1');
--
-- Base de données :  `ajax`
--
CREATE DATABASE IF NOT EXISTS `ajax` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ajax`;

-- --------------------------------------------------------

--
-- Structure de la table `input`
--

DROP TABLE IF EXISTS `input`;
CREATE TABLE IF NOT EXISTS `input` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
--
-- Base de données :  `bdd`
--
CREATE DATABASE IF NOT EXISTS `bdd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdd`;

-- --------------------------------------------------------

--
-- Structure de la table `logger`
--

DROP TABLE IF EXISTS `logger`;
CREATE TABLE IF NOT EXISTS `logger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logger`
--

INSERT INTO `logger` (`id`, `username`, `pass`) VALUES
(10, 'koko', '$2y$10$S1GsDJsQH59lADKuA2XBX.L5OvfXVxY8fSt4bAybr4TL50qwzpMT.');
--
-- Base de données :  `memo`
--
CREATE DATABASE IF NOT EXISTS `memo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `memo`;

-- --------------------------------------------------------

--
-- Structure de la table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `id_memo` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(400) NOT NULL,
  `datem` datetime NOT NULL,
  `contenu` varchar(500) NOT NULL,
  PRIMARY KEY (`id_memo`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `content`
--

INSERT INTO `content` (`id_memo`, `titre`, `datem`, `contenu`) VALUES
(16, 'halelouiah', '2019-10-17 00:00:00', 'envolÃ© vrille clÃ© jette dos v passe clÃ© new moy');
--
-- Base de données :  `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_roles` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(50) NOT NULL,
  PRIMARY KEY (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id_roles`, `roles`) VALUES
(0, 'role_user'),
(1, 'role_admin');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `mdp` varchar(500) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `id_roles` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `user_roles_FK` (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name`, `mdp`, `mail`, `id_roles`) VALUES
(59, 'admin', '$2y$10$nXXpthYJvMuR/DcIdhEx3.5dAS2WRXTZhWsBv2Xqi4iSoVam2fXGK', 'admin@live.fr', 1),
(60, 'user', '$2y$10$C.K14VbQTx5W7aFIdLiv6u2wlAwrWshimRfzifdbiH13ueucW9FvC', 'user@mail.fr', 0),
(62, 'momo', '$2y$10$cg/Rc6sazm.GkwpbN8T0ne1feRd32GCITgM0iymZIewBZGi8rfE6O', 'momo@lol.fr', 0),
(63, 'test', '$2y$10$z2caJbxXIwyYoPOXeUS9NOz65VG.wc583w8FiIWutCG533KYLFH8y', 'test@mail.fr', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_roles_FK` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
