-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 18 Février 2017 à 18:17
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `guitars`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `Id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `author`
--

INSERT INTO `author` (`Id`, `name`) VALUES
(1, 'Claire'),
(2, 'Benjamin');

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

CREATE TABLE `brand` (
  `Id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `brand`
--

INSERT INTO `brand` (`Id`, `name`) VALUES
(1, 'Fender'),
(2, 'Gibson'),
(3, 'PRS'),
(4, 'Ibanez'),
(5, 'ESP'),
(6, 'Lâg'),
(7, 'MusicMan'),
(8, 'Godin'),
(9, 'Vigier'),
(10, 'Schecter'),
(11, 'Gretsch'),
(12, 'Cort'),
(13, 'Rickenbacker'),
(14, 'Aria'),
(15, 'Epiphone'),
(16, 'Jackson'),
(17, 'G&L'),
(18, 'Warwick'),
(19, 'Yamaha'),
(20, 'Takamine'),
(21, 'Taylor'),
(22, 'Guild'),
(23, 'Martin');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `date_comment` datetime NOT NULL,
  `Id_guitar` int(11) NOT NULL,
  `Id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `guitar`
--

CREATE TABLE `guitar` (
  `Id` int(11) NOT NULL,
  `description` text,
  `picture` varchar(255) DEFAULT NULL,
  `date_article` date DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `micros` varchar(125) DEFAULT NULL,
  `body_wood` varchar(125) DEFAULT NULL,
  `fretboard_wood` varchar(125) DEFAULT NULL,
  `neck_wood` varchar(125) DEFAULT NULL,
  `Id_author` int(11) NOT NULL,
  `Id_serie` int(11) NOT NULL,
  `Id_subtype2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `Id` int(11) NOT NULL,
  `mail_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `relation2`
--

CREATE TABLE `relation2` (
  `Id` int(11) NOT NULL,
  `Id_guitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `relation8`
--

CREATE TABLE `relation8` (
  `Id` int(11) NOT NULL,
  `Id_subtype1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE `serie` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `Id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `serie`
--

INSERT INTO `serie` (`Id`, `name`, `Id_brand`) VALUES
(1, 'Classic Stingray 5', 7),
(2, 'GB30CE Natural', 20),
(3, 'Alien Standard', 18),
(4, 'Jazz Bass 64', 1),
(5, 'Occitania OC300', 6),
(6, 'G 1275 Custom Double Neck', 15),
(7, 'Mustang Classic Series 65', 1),
(8, 'Sheraton II Ebony', 15),
(9, 'Les Paul std 1956', 2),
(10, 'Stratocaster std', 1),
(11, 'Stractocaster Clapton Signature', 1),
(12, 'ASAT Classic Bluesboy Tribute  Semi-Hollow', 17),
(13, 'TMB-300', 4),
(14, '516-ce', 21),
(15, 'D-45', 23);

-- --------------------------------------------------------

--
-- Structure de la table `subtype1`
--

CREATE TABLE `subtype1` (
  `Id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `Id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `subtype1`
--

INSERT INTO `subtype1` (`Id`, `name`, `Id_type`) VALUES
(1, 'demi-caisse', 1),
(2, 'type telecaster', 1),
(3, 'type stratocaster', 1),
(4, 'type Les Paul', 1),
(5, '6 cordes', 2),
(6, '12 cordes', 2),
(7, 'normal', 3),
(8, 'pan coupé', 3),
(9, 'électrique', 5),
(10, 'acoustique', 5);

-- --------------------------------------------------------

--
-- Structure de la table `subtype2`
--

CREATE TABLE `subtype2` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `subtype2`
--

INSERT INTO `subtype2` (`Id`, `name`) VALUES
(1, 'type plein'),
(2, 'pan coupé');

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `Id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `Id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`Id`, `name`) VALUES
(1, 'Electrique'),
(2, 'Folk'),
(3, 'Electro-acoustique'),
(4, 'Classique'),
(5, 'Basse');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `user_pseudo` varchar(30) NOT NULL,
  `user_email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_comment_Id_guitar` (`Id_guitar`),
  ADD KEY `FK_comment_Id_user` (`Id_user`);

--
-- Index pour la table `guitar`
--
ALTER TABLE `guitar`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_guitar_Id_author` (`Id_author`),
  ADD KEY `FK_guitar_Id_serie` (`Id_serie`),
  ADD KEY `FK_guitar_Id_subtype2` (`Id_subtype2`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `relation2`
--
ALTER TABLE `relation2`
  ADD PRIMARY KEY (`Id`,`Id_guitar`),
  ADD KEY `FK_relation2_Id_guitar` (`Id_guitar`);

--
-- Index pour la table `relation8`
--
ALTER TABLE `relation8`
  ADD PRIMARY KEY (`Id`,`Id_subtype1`),
  ADD KEY `FK_relation8_Id_subtype1` (`Id_subtype1`);

--
-- Index pour la table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_serie_Id_brand` (`Id_brand`);

--
-- Index pour la table `subtype1`
--
ALTER TABLE `subtype1`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_subtype1_Id_type` (`Id_type`);

--
-- Index pour la table `subtype2`
--
ALTER TABLE `subtype2`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `brand`
--
ALTER TABLE `brand`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `guitar`
--
ALTER TABLE `guitar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `serie`
--
ALTER TABLE `serie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `subtype1`
--
ALTER TABLE `subtype1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `subtype2`
--
ALTER TABLE `subtype2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_comment_Id_guitar` FOREIGN KEY (`Id_guitar`) REFERENCES `guitar` (`Id`),
  ADD CONSTRAINT `FK_comment_Id_user` FOREIGN KEY (`Id_user`) REFERENCES `user` (`Id`);

--
-- Contraintes pour la table `guitar`
--
ALTER TABLE `guitar`
  ADD CONSTRAINT `FK_guitar_Id_author` FOREIGN KEY (`Id_author`) REFERENCES `author` (`Id`),
  ADD CONSTRAINT `FK_guitar_Id_serie` FOREIGN KEY (`Id_serie`) REFERENCES `serie` (`Id`),
  ADD CONSTRAINT `FK_guitar_Id_subtype2` FOREIGN KEY (`Id_subtype2`) REFERENCES `subtype2` (`Id`);

--
-- Contraintes pour la table `relation2`
--
ALTER TABLE `relation2`
  ADD CONSTRAINT `FK_relation2_Id` FOREIGN KEY (`Id`) REFERENCES `tag` (`Id`),
  ADD CONSTRAINT `FK_relation2_Id_guitar` FOREIGN KEY (`Id_guitar`) REFERENCES `guitar` (`Id`);

--
-- Contraintes pour la table `relation8`
--
ALTER TABLE `relation8`
  ADD CONSTRAINT `FK_relation8_Id` FOREIGN KEY (`Id`) REFERENCES `subtype2` (`Id`),
  ADD CONSTRAINT `FK_relation8_Id_subtype1` FOREIGN KEY (`Id_subtype1`) REFERENCES `subtype1` (`Id`);

--
-- Contraintes pour la table `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `FK_serie_Id_brand` FOREIGN KEY (`Id_brand`) REFERENCES `brand` (`Id`);

--
-- Contraintes pour la table `subtype1`
--
ALTER TABLE `subtype1`
  ADD CONSTRAINT `FK_subtype1_Id_type` FOREIGN KEY (`Id_type`) REFERENCES `type` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
