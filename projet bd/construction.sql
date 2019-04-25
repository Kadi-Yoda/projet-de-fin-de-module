-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 25 avr. 2019 à 17:49
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `construction`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL,
  `prenom` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `numeroEquipe` varchar(20) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `disponiblite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `prenom`, `Email`, `code`, `numeroEquipe`, `poste`, `disponiblite`) VALUES
(1, 'Yoda', 'Kadi', 'doumbia9@gmail.com', '123', '1', 'Responsable equipe', 'Occupe');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `maison` varchar(50) NOT NULL,
  `devis` varchar(50) NOT NULL,
  `versement_un` varchar(100) NOT NULL,
  `versement_deux` varchar(100) NOT NULL,
  `versement_trois` varchar(100) NOT NULL,
  `versement_quatre` varchar(100) NOT NULL,
  `statut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `email`, `mdp`, `telephone`, `maison`, `devis`, `versement_un`, `versement_deux`, `versement_trois`, `versement_quatre`, `statut`) VALUES
(1, 'yoda', 'kady', 'kadiyoda@gmail.com', '0000', '121212', 'maison basse', 'kadi', '1000000', '2500000', '3000000', '1500000', 'soldé '),
(4, 'ballo ', 'Adja', 'kadiyoda7@gmail.com', '121212', '78130305', 'Villa 4 pieces', '5750000 fcfa', '1000000 fcfa', '350000', '', '', 'non soldé, maison en cours de construction'),
(5, 'konatÃ©', 'bintou', 'kadilove05@live.fr', '55555', '40140016', '', '', '', '', '', '', ''),
(6, 'ballo ', 'fanta', 'kadidiatou.yoda@uvci', '00000', '45451515', '', '', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
