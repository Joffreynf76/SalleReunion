-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 09 fév. 2018 à 09:30
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
-- Base de données :  `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_reservation`
--

CREATE TABLE `t_reservation` (
  `T_USERS_id_USERS` int(11) NOT NULL,
  `T_ROOM_id_ROOM` int(11) NOT NULL,
  `HEUREDEBUT` datetime NOT NULL,
  `DUREE` time NOT NULL,
  `NBRPLACE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_room`
--

CREATE TABLE `t_room` (
  `id_ROOM` int(11) NOT NULL,
  `ROOMNAME` varchar(45) NOT NULL,
  `ROOMCAPACITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_room`
--

INSERT INTO `t_room` (`id_ROOM`, `ROOMNAME`, `ROOMCAPACITY`) VALUES
(1, 'Gilbert Montagne', 20),
(2, 'Claude Francois', 12),
(3, 'Patrick Sebastien', 35),
(4, 'Jul', 68);

-- --------------------------------------------------------

--
-- Structure de la table `t_users`
--

CREATE TABLE `t_users` (
  `id_USERS` int(11) NOT NULL,
  `USERNAME` varchar(45) NOT NULL,
  `USERFNAME` varchar(45) NOT NULL,
  `USERMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_users`
--

INSERT INTO `t_users` (`id_USERS`, `USERNAME`, `USERFNAME`, `USERMAIL`) VALUES
(1, 'Revert ', 'Romain', 'romain@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_reservation`
--
ALTER TABLE `t_reservation`
  ADD KEY `fk_T_USERS_has_T_ROOM_T_ROOM1_idx` (`T_ROOM_id_ROOM`),
  ADD KEY `fk_T_USERS_has_T_ROOM_T_USERS_idx` (`T_USERS_id_USERS`);

--
-- Index pour la table `t_room`
--
ALTER TABLE `t_room`
  ADD PRIMARY KEY (`id_ROOM`);

--
-- Index pour la table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id_USERS`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_room`
--
ALTER TABLE `t_room`
  MODIFY `id_ROOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_USERS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_reservation`
--
ALTER TABLE `t_reservation`
  ADD CONSTRAINT `fk_T_USERS_has_T_ROOM_T_ROOM1` FOREIGN KEY (`T_ROOM_id_ROOM`) REFERENCES `t_room` (`id_ROOM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_T_USERS_has_T_ROOM_T_USERS` FOREIGN KEY (`T_USERS_id_USERS`) REFERENCES `t_users` (`id_USERS`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
