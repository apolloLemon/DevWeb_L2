-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 14 mai 2018 à 22:23
-- Version du serveur :  5.7.20
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `l2_exm_1718`
--

-- --------------------------------------------------------

--
-- Structure de la table `PASSAGER`
--

CREATE TABLE `PASSAGER` (
  `ID` int(4) NOT NULL,
  `CLASSE` enum('économique','affaires','première','') NOT NULL DEFAULT 'économique',
  `BAGAGES` tinyint(1) NOT NULL DEFAULT '0',
  `PRIORITE` tinyint(1) NOT NULL DEFAULT '0',
  `VOITURE` tinyint(1) NOT NULL DEFAULT '0',
  `NOURRITURE` enum('A','B','C') NOT NULL DEFAULT 'B',
  `CONFORT` enum('A','B','C') NOT NULL DEFAULT 'B',
  `POLITESSE` enum('A','B','C') NOT NULL DEFAULT 'B',
  `ATTENTE` enum('A','B','C') NOT NULL DEFAULT 'B'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `PASSAGER`
--
ALTER TABLE `PASSAGER`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `PASSAGER`
--
ALTER TABLE `PASSAGER`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
