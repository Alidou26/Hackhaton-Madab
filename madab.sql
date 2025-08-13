-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 30 mai 2024 à 17:09
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `madab`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `pseudo`, `mot_de_passe`) VALUES
(1, 'Admin', 'Admin', 'Admin1', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `operations`
--

CREATE TABLE `operations` (
  `id_operation` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'EN COURS',
  `type` varchar(255) NOT NULL,
  `qte_produite` float NOT NULL,
  `montant` float NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_operation` datetime NOT NULL DEFAULT current_timestamp(),
  `numero_bancaire` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `operations`
--

INSERT INTO `operations` (`id_operation`, `status`, `type`, `qte_produite`, `montant`, `id_utilisateur`, `date_operation`, `numero_bancaire`) VALUES
(2, 'EN COURS', 'VIREMENT BANCAIRE', 96, 6.4, 49, '2023-03-10 01:22:57', '1234-5678-9123-1234'),
(3, 'EN COURS', 'ENERGIE', 153, 10.2, 49, '2023-03-10 01:24:41', ''),
(4, 'EN COURS', 'VIREMENT BANCAIRE', 6138, 409.2, 49, '2023-03-10 22:49:35', '1234-5678-9123-1234'),
(5, 'TRAITE', 'DON', 1527, 101.8, 49, '2023-03-11 00:47:29', '');

-- --------------------------------------------------------

--
-- Structure de la table `paves`
--

CREATE TABLE `paves` (
  `id_pave` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `paves`
--

INSERT INTO `paves` (`id_pave`, `lat`, `lon`) VALUES
(1, 23.7335135, -15.9169964),
(2, 23.7207552, -15.9350784),
(3, 23.7081975, -15.9239284),
(4, 23.7081945, -15.9239229),
(7, 27.1417344, -13.172736);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'DECONNECTE',
  `derniere_connexion` datetime NOT NULL DEFAULT current_timestamp(),
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp(),
  `pas` int(11) NOT NULL,
  `qte_produite` double NOT NULL,
  `solde_total` double NOT NULL,
  `solde_dispo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom`, `prenom`, `telephone`, `email`, `adresse`, `pseudo`, `mot_de_passe`, `photo`, `status`, `derniere_connexion`, `date_inscription`, `pas`, `qte_produite`, `solde_total`, `solde_dispo`) VALUES
(49, 'DARO FALL', 'AMINE', '+212 06 45 45 54', 'kialidou10@gmail.com', 'KASSAM', 'Alidou26', '$2y$10$v2sx4nzzyMqgP9sJh/4hheZ4vv8S5wY5Zcq7fyvtXZbKtZzF8gnPi', 'image-utilisateurs/Alidou26bk1.jpg', 'DECONNECTE', '2023-03-11 11:48:57', '2023-03-06 18:18:28', 12246, 34758, 2317.2000000000835, 71.80000000000048),
(50, 'SOUKROUMDE ', 'AMINE', '+212 06 45 45 54', 'kialidou10@gmail.com', 'KASSAM', 'Alidou1', '$2y$10$0Xj11dHJj9yzOX9EEcZjRuUPX.kFwlLG9HKxdoI/kLJrGzSBqY4q.', 'image-utilisateurs/Alidou1hc.jpg', 'CONNECTE', '2023-03-06 18:21:08', '2023-03-06 18:21:08', 0, 0, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id_operation`),
  ADD KEY `fk1` (`id_utilisateur`);

--
-- Index pour la table `paves`
--
ALTER TABLE `paves`
  ADD PRIMARY KEY (`id_pave`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `operations`
--
ALTER TABLE `operations`
  MODIFY `id_operation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `paves`
--
ALTER TABLE `paves`
  MODIFY `id_pave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
