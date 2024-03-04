-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 mars 2024 à 09:57
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp1`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_art` int NOT NULL AUTO_INCREMENT,
  `titre_art` varchar(25) DEFAULT NULL,
  `description_art` varchar(255) DEFAULT NULL,
  `prix_art` int DEFAULT NULL,
  `prix_promo` int DEFAULT NULL,
  `stock_art` int DEFAULT NULL,
  `photo_art` varchar(255) DEFAULT NULL,
  `fk_categorie` int DEFAULT NULL,
  PRIMARY KEY (`id_art`),
  KEY `fk_categorie` (`fk_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `titre_art`, `description_art`, `prix_art`, `prix_promo`, `stock_art`, `photo_art`, `fk_categorie`) VALUES
(2, 'Produit1', 'Description du produit 1', 180, 170, 25, 'photo1.jpg', 1),
(3, 'Produit2', 'Description du produit 2', 250, 240, 30, 'photo2.jpg', 2),
(4, 'Produit3', 'Description du produit 3', 300, 290, 20, 'photo3.jpg', 3),
(5, 'Produit4', 'Description du produit 4', 150, 140, 18, 'photo4.jpg', 4),
(6, 'Produit5', 'Description du produit 5', 200, 190, 22, 'photo5.jpg', 1),
(7, 'Produit6', 'Description du produit 6', 260, 250, 15, 'photo6.jpg', 2),
(8, 'Produit7', 'Description du produit 7', 320, 310, 28, 'photo7.jpg', 3),
(9, 'Produit8', 'Description du produit 8', 170, 160, 12, 'photo8.jpg', 4),
(10, 'Produit9', 'Description du produit 9', 220, 210, 25, 'photo9.jpg', 1),
(11, 'Produit10', 'Description du produit 10', 280, 270, 20, 'photo10.jpg', 2),
(12, 'Produit11', 'Description du produit 11', 340, 330, 17, 'photo11.jpg', 3),
(13, 'Produit12', 'Description du produit 12', 190, 180, 10, 'photo12.jpg', 4),
(14, 'Produit13', 'Description du produit 13', 240, 230, 19, 'photo13.jpg', 1),
(15, 'Produit14', 'Description du produit 14', 300, 290, 23, 'photo14.jpg', 2),
(16, 'Produit15', 'Description du produit 15', 360, 350, 15, 'photo15.jpg', 3),
(17, 'Produit16', 'Description du produit 16', 210, 200, 27, 'photo16.jpg', 4),
(18, 'Produit17', 'Description du produit 17', 270, 260, 13, 'photo17.jpg', 1),
(19, 'Produit18', 'Description du produit 18', 330, 320, 21, 'photo18.jpg', 2),
(20, 'Produit19', 'Description du produit 19', 240, 230, 14, 'photo19.jpg', 3),
(21, 'Produit20', 'Description du produit 20', 300, 290, 18, 'photo20.jpg', 4),
(22, 'Produit21', 'Description du produit 21', 350, 340, 10, 'photo21.jpg', 1),
(23, 'Produit22', 'Description du produit 22', 150, 140, 20, 'photo22.jpg', 2),
(24, 'Produit23', 'Description du produit 23', 220, 210, 15, 'photo23.jpg', 3),
(25, 'Produit24', 'Description du produit 24', 280, 270, 25, 'photo24.jpg', 4),
(26, 'Produit25', 'Description du produit 25', 320, 310, 18, 'photo25.jpg', 1),
(27, 'Produit26', 'Description du produit 26', 200, 190, 22, 'photo26.jpg', 2),
(28, 'Produit27', 'Description du produit 27', 270, 260, 14, 'photo27.jpg', 3),
(29, 'Produit28', 'Description du produit 28', 330, 320, 17, 'photo28.jpg', 4),
(30, 'Produit29', 'Description du produit 29', 160, 150, 12, 'photo29.jpg', 1),
(31, 'Produit30', 'Description du produit 30', 230, 220, 20, 'photo30.jpg', 2),
(32, 'Produit31', 'Description du produit 31', 290, 280, 15, 'photo31.jpg', 3),
(33, 'Produit32', 'Description du produit 32', 340, 330, 19, 'photo32.jpg', 4),
(34, 'Produit33', 'Description du produit 33', 170, 160, 18, 'photo33.jpg', 1),
(35, 'Produit34', 'Description du produit 34', 240, 230, 22, 'photo34.jpg', 2),
(36, 'Produit35', 'Description du produit 35', 300, 290, 14, 'photo35.jpg', 3),
(37, 'Produit36', 'Description du produit 36', 350, 340, 17, 'photo36.jpg', 4),
(38, 'Produit37', 'Description du produit 37', 180, 170, 20, 'photo37.jpg', 1),
(39, 'Produit38', 'Description du produit 38', 250, 240, 13, 'photo38.jpg', 2),
(40, 'Produit39', 'Description du produit 39', 310, 300, 21, 'photo39.jpg', 3),
(41, 'Produit40', 'Description du produit 40', 160, 155, 18, 'photo40.jpg', 4),
(42, 'Produit41', 'Description du produit 41', 190, 180, 20, 'photo41.jpg', 1),
(43, 'Produit42', 'Description du produit 42', 260, 250, 22, 'photo42.jpg', 2),
(44, 'Produit43', 'Description du produit 43', 320, 310, 15, 'photo43.jpg', 3),
(45, 'Produit44', 'Description du produit 44', 170, 165, 17, 'photo44.jpg', 4),
(46, 'Produit45', 'Description du produit 45', 200, 190, 19, 'photo45.jpg', 1),
(47, 'Produit46', 'Description du produit 46', 210, 200, 22, 'photo46.jpg', 2),
(48, 'Produit47', 'Description du produit 47', 275, 265, 15, 'photo47.jpg', 3),
(49, 'Produit48', 'Description du produit 48', 330, 320, 18, 'photo48.jpg', 4),
(50, 'Produit49', 'Description du produit 49', 185, 175, 20, 'photo49.jpg', 1),
(51, 'Produit50', 'Description du produit 50', 250, 240, 16, 'photo50.jpg', 2),
(52, 'Produit51', 'Description du produit 51', 305, 295, 14, 'photo51.jpg', 3),
(53, 'Produit52', 'Description du produit 52', 360, 350, 12, 'photo52.jpg', 4),
(54, 'Produit53', 'Description du produit 53', 190, 180, 19, 'photo53.jpg', 1),
(55, 'Produit54', 'Description du produit 54', 255, 245, 17, 'photo54.jpg', 2),
(56, 'Produit55', 'Description du produit 55', 310, 300, 15, 'photo55.jpg', 3),
(57, 'Produit56', 'Description du produit 56', 165, 155, 20, 'photo56.jpg', 4),
(58, 'Produit57', 'Description du produit 57', 220, 210, 18, 'photo57.jpg', 1),
(59, 'Produit58', 'Description du produit 58', 280, 270, 16, 'photo58.jpg', 2),
(60, 'Produit59', 'Description du produit 59', 335, 325, 14, 'photo59.jpg', 3),
(61, 'Produit60', 'Description du produit 60', 170, 160, 19, 'photo60.jpg', 4),
(62, 'Produit61', 'Description du produit 61', 230, 220, 17, 'photo61.jpg', 1),
(63, 'Produit62', 'Description du produit 62', 290, 280, 15, 'photo62.jpg', 2),
(64, 'Produit63', 'Description du produit 63', 340, 330, 13, 'photo63.jpg', 3),
(65, 'Produit64', 'Description du produit 64', 175, 165, 21, 'photo64.jpg', 4),
(66, 'Produit65', 'Description du produit 65', 240, 230, 19, 'photo65.jpg', 1),
(67, 'Produit66', 'Description du produit 66', 300, 290, 17, 'photo66.jpg', 2),
(68, 'Produit67', 'Description du produit 67', 355, 345, 15, 'photo67.jpg', 3),
(69, 'Produit68', 'Description du produit 68', 180, 170, 18, 'photo68.jpg', 4),
(70, 'Produit69', 'Description du produit 69', 245, 235, 16, 'photo69.jpg', 1),
(71, 'Produit70', 'Description du produit 70', 310, 300, 14, 'photo70.jpg', 2),
(72, 'Produit71', 'Description du produit 71', 320, 310, 13, 'photo71.jpg', 3),
(73, 'Produit72', 'Description du produit 72', 185, 175, 21, 'photo72.jpg', 4),
(74, 'Produit73', 'Description du produit 73', 250, 240, 18, 'photo73.jpg', 1),
(75, 'Produit74', 'Description du produit 74', 315, 305, 15, 'photo74.jpg', 2),
(76, 'Produit75', 'Description du produit 75', 170, 160, 22, 'photo75.jpg', 3),
(77, 'Produit76', 'Description du produit 76', 235, 225, 19, 'photo76.jpg', 4),
(78, 'Produit77', 'Description du produit 77', 300, 290, 17, 'photo77.jpg', 1),
(79, 'Produit78', 'Description du produit 78', 365, 355, 14, 'photo78.jpg', 2),
(80, 'Produit79', 'Description du produit 79', 180, 170, 20, 'photo79.jpg', 3),
(81, 'Produit80', 'Description du produit 80', 245, 235, 18, 'photo80.jpg', 4),
(82, 'Produit81', 'Description du produit 81', 310, 300, 16, 'photo81.jpg', 1),
(83, 'Produit82', 'Description du produit 82', 175, 165, 23, 'photo82.jpg', 2),
(84, 'Produit83', 'Description du produit 83', 240, 230, 20, 'photo83.jpg', 3),
(85, 'Produit84', 'Description du produit 84', 305, 295, 17, 'photo84.jpg', 4),
(86, 'Produit85', 'Description du produit 85', 370, 360, 14, 'photo85.jpg', 1),
(87, 'Produit86', 'Description du produit 86', 185, 175, 21, 'photo86.jpg', 2),
(88, 'Produit87', 'Description du produit 87', 250, 240, 19, 'photo87.jpg', 3),
(89, 'Produit88', 'Description du produit 88', 315, 305, 16, 'photo88.jpg', 4),
(90, 'Produit89', 'Description du produit 89', 170, 160, 22, 'photo89.jpg', 1),
(91, 'Produit90', 'Description du produit 90', 235, 225, 20, 'photo90.jpg', 2),
(92, 'Produit91', 'Description du produit 91', 300, 290, 18, 'photo91.jpg', 3),
(93, 'Produit92', 'Description du produit 92', 365, 355, 15, 'photo92.jpg', 4),
(94, 'Produit93', 'Description du produit 93', 180, 170, 19, 'photo93.jpg', 1),
(95, 'Produit94', 'Description du produit 94', 245, 235, 17, 'photo94.jpg', 2),
(96, 'Produit95', 'Description du produit 95', 310, 300, 15, 'photo95.jpg', 3),
(97, 'Produit96', 'Description du produit 96', 175, 165, 22, 'photo96.jpg', 4),
(98, 'Produit97', 'Description du produit 97', 240, 230, 21, 'photo97.jpg', 1),
(99, 'Produit98', 'Description du produit 98', 305, 295, 19, 'photo98.jpg', 2),
(100, 'Produit99', 'Description du produit 99', 370, 360, 16, 'photo99.jpg', 3),
(101, 'Produit100', 'Description du produit 100', 185, 175, 23, 'photo100.jpg', 4),
(102, 'Produit101', 'Description du produit 101', 250, 240, 20, 'photo101.jpg', 1),
(103, 'Produit102', 'Description du produit 102', 315, 305, 18, 'photo102.jpg', 2),
(104, 'Produit103', 'Description du produit 103', 170, 160, 25, 'photo103.jpg', 3),
(105, 'Produit104', 'Description du produit 104', 235, 225, 22, 'photo104.jpg', 4),
(106, 'Produit105', 'Description du produit 105', 300, 290, 20, 'photo105.jpg', 1),
(107, 'Produit106', 'Description du produit 106', 365, 355, 17, 'photo106.jpg', 2),
(108, 'Produit107', 'Description du produit 107', 180, 170, 24, 'photo107.jpg', 3),
(109, 'Produit108', 'Description du produit 108', 245, 235, 21, 'photo108.jpg', 4),
(110, 'Produit109', 'Description du produit 109', 310, 300, 19, 'photo109.jpg', 1),
(111, 'Produit110', 'Description du produit 110', 175, 165, 23, 'photo110.jpg', 2),
(112, 'Produit111', 'Description du produit 111', 240, 230, 22, 'photo111.jpg', 3),
(113, 'Produit112', 'Description du produit 112', 305, 295, 20, 'photo112.jpg', 4),
(114, 'Produit113', 'Description du produit 113', 370, 360, 17, 'photo113.jpg', 1),
(115, 'Produit114', 'Description du produit 114', 185, 175, 24, 'photo114.jpg', 2),
(116, 'Produit115', 'Description du produit 115', 250, 240, 21, 'photo115.jpg', 3),
(117, 'Produit116', 'Description du produit 116', 315, 305, 19, 'photo116.jpg', 4),
(118, 'Produit117', 'Description du produit 117', 170, 160, 26, 'photo117.jpg', 1),
(119, 'Produit118', 'Description du produit 118', 235, 225, 23, 'photo118.jpg', 2),
(120, 'Produit119', 'Description du produit 119', 300, 290, 21, 'photo119.jpg', 3),
(121, 'Produit120', 'Description du produit 120', 365, 355, 18, 'photo120.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `ass_art_tag`
--

DROP TABLE IF EXISTS `ass_art_tag`;
CREATE TABLE IF NOT EXISTS `ass_art_tag` (
  `fk_art` int DEFAULT NULL,
  `fk_tag` int DEFAULT NULL,
  KEY `fk_tag` (`fk_tag`),
  KEY `fk_art` (`fk_art`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `libelle_cat` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `libelle_cat`) VALUES
(1, 'DVD'),
(2, 'Bluray'),
(3, 'Livre'),
(4, 'CD');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(25) DEFAULT NULL,
  `prenom_client` varchar(25) DEFAULT NULL,
  `cp_client` varchar(25) DEFAULT NULL,
  `ville_client` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_cmd` int NOT NULL AUTO_INCREMENT,
  `fk_client` int DEFAULT NULL,
  `date_cmd` date DEFAULT NULL,
  `montant_cmd` double DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_cmd`),
  KEY `fk_client` (`fk_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `interface`
--

DROP TABLE IF EXISTS `interface`;
CREATE TABLE IF NOT EXISTS `interface` (
  `id_interface` int NOT NULL AUTO_INCREMENT,
  `type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `action` text NOT NULL,
  `champ` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `template` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `zone` text NOT NULL,
  `ordre` int NOT NULL,
  PRIMARY KEY (`id_interface`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `interface`
--

INSERT INTO `interface` (`id_interface`, `type`, `action`, `champ`, `template`, `zone`, `ordre`) VALUES
(1, 'titre_3', '', 'titre_art', 'template1', 'zone1', 1),
(2, 'image', '', 'photo_art', 'template1', 'zone1', 2),
(3, 'text', '', 'commentaire_art', 'template1', '', 3),
(4, 'text', '', 'prix_art', 'template1', 'zone1', 4),
(5, 'text', '', 'description_art', 'template1', 'zone2', 1),
(6, 'text', '', 'tags_art', 'template1', '', 1),
(8, 'titre_3', '', 'titre_art', 'template2', 'zone1', 1),
(9, 'image', '', 'photo_art', 'template2', 'zone1', 2),
(10, 'text', '', 'commentaire_art', 'template2', '', 3),
(11, 'text', '', 'prix_art', 'template2', 'zone1', 4),
(12, 'text', '', 'description_art', 'template2', 'zone2', 1),
(13, 'text', '', 'tags_art', 'template2', '', 1),
(14, 'bouton', 'ajoutpanier_m', 'Ajouter au panier', 'template1', 'zone3', 4),
(15, 'bouton', 'ajoutpanier_m', 'Ajouter au panier', 'template2', 'zone3', 4);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `id_ligne` int NOT NULL AUTO_INCREMENT,
  `fk_art` int DEFAULT NULL,
  `quantite_ligne` int DEFAULT NULL,
  `prix_ligne` double DEFAULT NULL,
  `fk_commande` int DEFAULT NULL,
  PRIMARY KEY (`id_ligne`),
  KEY `fk_art` (`fk_art`),
  KEY `fk_commande` (`fk_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `meta_champs`
--

DROP TABLE IF EXISTS `meta_champs`;
CREATE TABLE IF NOT EXISTS `meta_champs` (
  `nom_formulaire` text NOT NULL,
  `libelle_champs` text NOT NULL,
  `ordre` int NOT NULL,
  `id` text NOT NULL,
  `longueur` int NOT NULL,
  `type_controle` text NOT NULL,
  `obligatoire` tinyint(1) NOT NULL,
  `querie_sql` text NOT NULL,
  `id_parent` text NOT NULL,
  `id_champs` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_champs`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `meta_champs`
--

INSERT INTO `meta_champs` (`nom_formulaire`, `libelle_champs`, `ordre`, `id`, `longueur`, `type_controle`, `obligatoire`, `querie_sql`, `id_parent`, `id_champs`) VALUES
('UpdateForm', 'titre', 1, 'titre_art', 255, 'text', 1, '', '', 1),
('UpdateForm', 'categorie', 2, 'listeCategorie', 30, 'select', 1, 'SELECT DISTINCT * FROM Categorie ORDER BY libelle_cat ASC', '', 2),
('UpdateForm', 'prix', 3, 'prix_art', 12, 'text', 1, '', '', 3),
('UpdateForm', 'stock', 4, 'stock_art', 12, 'text', 1, '', '', 4),
('UpdateForm', 'image', 5, 'photo_art', 12, 'text', 1, '', '', 5),
('UpdateForm', 'description', 6, 'description_art', 12, 'text', 1, '', '', 6);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `code_tag` int NOT NULL AUTO_INCREMENT,
  `libelle_tag` varchar(25) DEFAULT NULL,
  `picto_tag` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`code_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`fk_categorie`) REFERENCES `categorie` (`id_cat`);

--
-- Contraintes pour la table `ass_art_tag`
--
ALTER TABLE `ass_art_tag`
  ADD CONSTRAINT `ass_art_tag_ibfk_1` FOREIGN KEY (`fk_tag`) REFERENCES `tag` (`code_tag`),
  ADD CONSTRAINT `ass_art_tag_ibfk_2` FOREIGN KEY (`fk_art`) REFERENCES `article` (`id_art`),
  ADD CONSTRAINT `ass_art_tag_ibfk_3` FOREIGN KEY (`fk_tag`) REFERENCES `tag` (`code_tag`),
  ADD CONSTRAINT `ass_art_tag_ibfk_4` FOREIGN KEY (`fk_art`) REFERENCES `article` (`id_art`),
  ADD CONSTRAINT `ass_art_tag_ibfk_5` FOREIGN KEY (`fk_art`) REFERENCES `article` (`id_art`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`fk_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`fk_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`fk_art`) REFERENCES `article` (`id_art`),
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`fk_commande`) REFERENCES `commande` (`id_cmd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
