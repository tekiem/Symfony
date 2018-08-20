-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 20 août 2018 à 20:26
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

DROP TABLE IF EXISTS `advert`;
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `nb_applications` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_54F1F40B2B36786B` (`title`),
  UNIQUE KEY `UNIQ_54F1F40B989D9B62` (`slug`),
  UNIQUE KEY `UNIQ_54F1F40B3DA5256D` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `image_id`, `date`, `title`, `author`, `content`, `published`, `updated_at`, `nb_applications`, `slug`) VALUES
(1, 1, '2018-08-07 17:43:00', 'Je m\'appelle Kevin', 'Kevin', 'Ici c\'est Paris', 1, NULL, 0, 'je-mappelle-kevin'),
(2, 2, '2018-08-20 20:07:00', 'Je m\'appelle Kevin2', 'fjgfg', '<p>fgjhfgj</p>', 1, '2018-08-20 20:11:22', 0, 'je-mappelle-kevin2');

-- --------------------------------------------------------

--
-- Structure de la table `advert_category`
--

DROP TABLE IF EXISTS `advert_category`;
CREATE TABLE IF NOT EXISTS `advert_category` (
  `advert_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`advert_id`,`category_id`),
  KEY `IDX_84EEA340D07ECCB6` (`advert_id`),
  KEY `IDX_84EEA34012469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `advert_category`
--

INSERT INTO `advert_category` (`advert_id`, `category_id`) VALUES
(1, 11),
(2, 11);

-- --------------------------------------------------------

--
-- Structure de la table `advert_skill`
--

DROP TABLE IF EXISTS `advert_skill`;
CREATE TABLE IF NOT EXISTS `advert_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5619F91BD07ECCB6` (`advert_id`),
  KEY `IDX_5619F91B5585C142` (`skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A45BDDC1D07ECCB6` (`advert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(11, 'Développement web'),
(12, 'Développement mobile'),
(13, 'Graphisme'),
(14, 'Intégration'),
(15, 'Réseau');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `url`, `alt`) VALUES
(1, 'jpeg', 'téléchargement.jpg'),
(2, 'jpeg', 'téléchargement.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE IF NOT EXISTS `skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `skill`
--

INSERT INTO `skill` (`id`, `name`) VALUES
(15, 'PHP'),
(16, 'Symfony'),
(17, 'C++'),
(18, 'Java'),
(19, 'Photoshop'),
(20, 'Blender'),
(21, 'Bloc-note');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'Alexandre', 'alexandre', NULL, NULL, 0, '', 'Alexandre', NULL, NULL, NULL, 'a:0:{}'),
(2, 'Marine', 'marine', NULL, NULL, 0, '', 'Marine', NULL, NULL, NULL, 'a:0:{}'),
(3, 'Anna', 'anna', NULL, NULL, 0, '', 'Anna', NULL, NULL, NULL, 'a:0:{}'),
(4, 'kevin', 'kevin', NULL, NULL, 0, '', 'kevin', NULL, NULL, NULL, 'a:0:{}'),
(5, 'kevinplc', 'kevinplc', 'kevin.huor@hotmail.fr', 'kevin.huor@hotmail.fr', 1, '3.wy..EQfK9fEZo.RAWF2LHRIy3eefLAvuuAgf7QVLQ', 'O3PDir0ElrRh+zU03Z98bgGqkS1QKPIViu1zbOtOHe1K3eh24aFFsYHYujP2oIn3h6IVMEa9FVYCefDKnNzMSQ==', '2018-08-20 13:21:21', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `FK_54F1F40B3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Contraintes pour la table `advert_category`
--
ALTER TABLE `advert_category`
  ADD CONSTRAINT `FK_84EEA34012469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_84EEA340D07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `advert_skill`
--
ALTER TABLE `advert_skill`
  ADD CONSTRAINT `FK_5619F91B5585C142` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`),
  ADD CONSTRAINT `FK_5619F91BD07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`);

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK_A45BDDC1D07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
