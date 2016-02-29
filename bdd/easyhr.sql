-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 29 Février 2016 à 11:37
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `easyhr`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `startdate` varchar(48) NOT NULL,
  `enddate` varchar(48) NOT NULL,
  `allDay` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(80) NOT NULL,
  `SIRET` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `urlSS` varchar(255) NOT NULL,
  `urlFiscalite` varchar(255) NOT NULL,
  `urlAttestation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `poste` varchar(45) NOT NULL,
  `numberSS` varchar(40) NOT NULL,
  `numberFisc` varchar(45) NOT NULL,
  `entreprises_id` int(11) NOT NULL,
  `profil_id` int(11) NOT NULL,
  `rtt` int(11) NOT NULL,
  `cp` int(11) NOT NULL,
  `formation` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `genre`, `role`, `lastname`, `firstname`, `email`, `password`, `poste`, `numberSS`, `numberFisc`, `entreprises_id`, `profil_id`, `rtt`, `cp`, `formation`, `created_at`, `updated_at`) VALUES
(3, 'Melle', 'salarie', 'LEMERCIER', 'Paula', 'lemercier@gmail.com', '$2y$10$TXhr6rJy5GxaOk7eYD5vXex2i5gJ9mNpCfIfmco6BVDJFa1muYMJm', '', '', '', 0, 0, 10, 9, 12, '2016-02-28 21:47:43', '2016-02-28 21:47:43'),
(4, 'Melle', 'salarie', 'MOEVA', 'NADIA', 'kpongo@yahoo.fr', '$2y$10$jBHjZdBhfeYPc6Ur3PkgY.pe82y8TEdgIaKFVCZJzRY.G8.NxLzi.', '', '', '', 0, 0, 0, 0, 0, '2016-02-29 11:25:01', '2016-02-29 11:25:01'),
(5, 'Melle', 'admin', 'K', 'Nadia', 'nadia@gmail.com', '$2y$10$vrn9DAyjoWiXrFMtjo33NeYDIvM6P2VKGGpogFMBJujVxlCkr7kPW', '', '', '', 0, 0, 0, 0, 0, '2016-02-29 11:35:39', '2016-02-29 11:35:39');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
