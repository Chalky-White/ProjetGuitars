-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 04 Mars 2017 à 13:09
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `guitarsbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(1, 'Claire'),
(2, 'Benjamin');

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(125) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
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
(20, 'Takamine');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `date_comment` datetime DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `guitar`
--

CREATE TABLE `guitar` (
  `id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `picture` text COLLATE utf8_unicode_ci,
  `date_article` datetime DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_desc` longtext COLLATE utf8_unicode_ci,
  `micros` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body_wood` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fretboard_wood` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `neck_wood` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serie` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `subtype2_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `guitars_tags`
--

CREATE TABLE `guitars_tags` (
  `guitar_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `mail_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sub1_sub2`
--

CREATE TABLE `sub1_sub2` (
  `subtype1_id` int(11) NOT NULL,
  `subtype2_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subtype1`
--

CREATE TABLE `subtype1` (
  `id` int(11) NOT NULL,
  `name` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subtype2`
--

CREATE TABLE `subtype2` (
  `id` int(11) NOT NULL,
  `name` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(125) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_pseudo` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(125) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526CF8697D13` (`comment_id`);

--
-- Index pour la table `guitar`
--
ALTER TABLE `guitar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_423AC30DF675F31B` (`author_id`),
  ADD KEY `IDX_423AC30D44F5D008` (`brand_id`),
  ADD KEY `IDX_423AC30DA68AB186` (`subtype2_id`);

--
-- Index pour la table `guitars_tags`
--
ALTER TABLE `guitars_tags`
  ADD PRIMARY KEY (`guitar_id`,`tag_id`),
  ADD KEY `IDX_366C0D5248420B1E` (`guitar_id`),
  ADD KEY `IDX_366C0D52BAD26311` (`tag_id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sub1_sub2`
--
ALTER TABLE `sub1_sub2`
  ADD PRIMARY KEY (`subtype1_id`,`subtype2_id`),
  ADD KEY `IDX_167758F8B43F1E68` (`subtype1_id`),
  ADD KEY `IDX_167758F8A68AB186` (`subtype2_id`);

--
-- Index pour la table `subtype1`
--
ALTER TABLE `subtype1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BB514656C54C8C93` (`type_id`);

--
-- Index pour la table `subtype2`
--
ALTER TABLE `subtype2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `guitar`
--
ALTER TABLE `guitar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `subtype1`
--
ALTER TABLE `subtype1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `subtype2`
--
ALTER TABLE `subtype2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `guitar`
--
ALTER TABLE `guitar`
  ADD CONSTRAINT `FK_423AC30D44F5D008` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `FK_423AC30DA68AB186` FOREIGN KEY (`subtype2_id`) REFERENCES `subtype2` (`id`),
  ADD CONSTRAINT `FK_423AC30DF675F31B` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

--
-- Contraintes pour la table `guitars_tags`
--
ALTER TABLE `guitars_tags`
  ADD CONSTRAINT `FK_366C0D5248420B1E` FOREIGN KEY (`guitar_id`) REFERENCES `guitar` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_366C0D52BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sub1_sub2`
--
ALTER TABLE `sub1_sub2`
  ADD CONSTRAINT `FK_167758F8A68AB186` FOREIGN KEY (`subtype2_id`) REFERENCES `subtype2` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_167758F8B43F1E68` FOREIGN KEY (`subtype1_id`) REFERENCES `subtype1` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `subtype1`
--
ALTER TABLE `subtype1`
  ADD CONSTRAINT `FK_BB514656C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
