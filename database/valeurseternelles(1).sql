-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 06 nov. 2019 à 14:36
-- Version du serveur :  5.7.19
-- Version de PHP :  7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `valeurseternelles`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(35) NOT NULL,
  `Prenoms` varchar(30) NOT NULL,
  `E-mail` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Niveau_secuité` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comite_soutien`
--

DROP TABLE IF EXISTS `comite_soutien`;
CREATE TABLE IF NOT EXISTS `comite_soutien` (
  `idComite_soutien` int(11) NOT NULL AUTO_INCREMENT,
  `Intitulé` varchar(45) DEFAULT NULL,
  `Date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `categorie` enum('Physique','Virtuel') DEFAULT 'Physique',
  `Lieu` varchar(45) DEFAULT NULL,
  `Heure` varchar(45) DEFAULT NULL,
  `Jour_rencontre` enum('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche') DEFAULT NULL,
  `Date_debut` date DEFAULT NULL,
  `Date_creation_comite` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Code_comite` varchar(45) DEFAULT NULL,
  `chef_groupe` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idComite_soutien`),
  UNIQUE KEY `idComite_soutien_UNIQUE` (`idComite_soutien`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comite_soutien`
--

INSERT INTO `comite_soutien` (`idComite_soutien`, `Intitulé`, `Date_creation`, `categorie`, `Lieu`, `Heure`, `Jour_rencontre`, `Date_debut`, `Date_creation_comite`, `Code_comite`, `chef_groupe`) VALUES
(1, 'Aide', '2019-10-30 21:54:30', 'Physique', 'efoulan', '18h00', 'Lundi', '2019-10-16', '2019-10-30 21:54:30', 'CS_1', 'Ekangoh'),
(2, 'Jeunes Leaders', '2019-10-31 18:49:28', 'Physique', 'Odza borne 12', '15h00', 'Mercredi', '2019-10-31', '2019-10-31 18:49:28', 'CS_2', 'Mbea ivan');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `idPaiement` int(11) NOT NULL,
  `Mode_paiement` varchar(50) DEFAULT NULL,
  `Date_paiement` date DEFAULT NULL,
  `Montant` int(45) DEFAULT NULL,
  `Numero_transaction` int(45) DEFAULT NULL,
  PRIMARY KEY (`idPaiement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`idPaiement`, `Mode_paiement`, `Date_paiement`, `Montant`, `Numero_transaction`) VALUES
(1, 'MTN MOMO', '2019-10-30', 150000, 158784521),
(2, 'MTN MOMO', '2019-10-31', 250000, 545498952);

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `idParticipant` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `Pays` varchar(45) DEFAULT NULL,
  `Ville` varchar(45) DEFAULT NULL,
  `telephone` int(9) DEFAULT NULL,
  `Profession` varchar(100) DEFAULT NULL,
  `Categorie` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Comite_soutien_idComite_soutien` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idParticipant`,`Comite_soutien_idComite_soutien`),
  UNIQUE KEY `idParticipant_UNIQUE` (`idParticipant`),
  KEY `fk_Participant_Comite_soutien_idx` (`Comite_soutien_idComite_soutien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `participant_has_paiement`
--

DROP TABLE IF EXISTS `participant_has_paiement`;
CREATE TABLE IF NOT EXISTS `participant_has_paiement` (
  `Participant_idParticipant` int(11) NOT NULL,
  `Participant_Comite_soutien_idComite_soutien` int(11) NOT NULL,
  `Paiement_idPaiement` int(11) NOT NULL,
  PRIMARY KEY (`Participant_idParticipant`,`Participant_Comite_soutien_idComite_soutien`,`Paiement_idPaiement`),
  KEY `fk_Participant_has_Paiement_Paiement1_idx` (`Paiement_idPaiement`),
  KEY `fk_Participant_has_Paiement_Participant1_idx` (`Participant_idParticipant`,`Participant_Comite_soutien_idComite_soutien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `fk_Participant_Comite_soutien` FOREIGN KEY (`Comite_soutien_idComite_soutien`) REFERENCES `comite_soutien` (`idComite_soutien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `participant_has_paiement`
--
ALTER TABLE `participant_has_paiement`
  ADD CONSTRAINT `fk_Participant_has_Paiement_Paiement1` FOREIGN KEY (`Paiement_idPaiement`) REFERENCES `paiement` (`idPaiement`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Participant_has_Paiement_Participant1` FOREIGN KEY (`Participant_idParticipant`,`Participant_Comite_soutien_idComite_soutien`) REFERENCES `participants` (`idParticipant`, `Comite_soutien_idComite_soutien`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
