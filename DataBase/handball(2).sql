-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 juil. 2024 à 11:38
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `handball`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs_joueurs`
--

CREATE TABLE `utilisateurs_joueurs` (
  `id` int(11) NOT NULL,
  `profil` varchar(500) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `prenoms` varchar(500) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(500) NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  `ref_cip` varchar(500) NOT NULL,
  `contact_parent` int(11) NOT NULL,
  `taille` double NOT NULL,
  `poids` double NOT NULL,
  `hauteur_poids` double NOT NULL,
  `imc` double NOT NULL,
  `empan` double NOT NULL,
  `envergure` double NOT NULL,
  `pointure` double NOT NULL,
  `lateralite` varchar(500) NOT NULL,
  `force_physique` tinyint(1) NOT NULL,
  `vitesse` tinyint(1) NOT NULL,
  `endurance` varchar(500) NOT NULL,
  `test_detente` tinyint(1) NOT NULL,
  `tir` varchar(500) NOT NULL,
  `dribble` varchar(500) NOT NULL,
  `feinte` varchar(500) NOT NULL,
  `adaptation_jeu` varchar(500) NOT NULL,
  `tir_gardien` varchar(500) NOT NULL,
  `passe` varchar(500) NOT NULL,
  `tir_decision` varchar(500) NOT NULL,
  `montee` varchar(500) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `motDePasse` varchar(500) NOT NULL,
  `connect` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs_joueurs`
--

INSERT INTO `utilisateurs_joueurs` (`id`, `profil`, `nom`, `prenoms`, `date_naissance`, `lieu_naissance`, `sexe`, `ref_cip`, `contact_parent`, `taille`, `poids`, `hauteur_poids`, `imc`, `empan`, `envergure`, `pointure`, `lateralite`, `force_physique`, `vitesse`, `endurance`, `test_detente`, `tir`, `dribble`, `feinte`, `adaptation_jeu`, `tir_gardien`, `passe`, `tir_decision`, `montee`, `mail`, `motDePasse`, `connect`) VALUES
(1, 'joueur.png', 'HOUNDEALO', 'Dodo', '2024-05-16', '', 0, 'BJ023265', 53629855, 10, 32, 20, 30, 12, 20, 36, 'gaucher', 0, 0, 'trente_quinze', 0, 'tir_tres_bon', 'dribble_tres_bon', 'feinte_tres_bon', 'participe_toutes_phases', 'tir_face_gardien_tbon', 'passe_tbon', 'tir_decision_tbon', 'monte_repli_tbon', 'jeanpierrehoundealo03@gmail.com', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', ''),
(2, 'donald.png', 'HOUNDEALO', 'Dodo', '2024-05-09', '', 0, 'BJ023265', 53629855, 10, 32, 20, 30, 12, 20, 36, 'droitier', 0, 0, 'test_yoyo', 0, 'tir_tres_bon', 'dribble_tres_bon', 'feinte_tres_bon', 'participe_toutes_phases', 'tir_face_gardien_tbon', 'passe_tbon', 'tir_decision_tbon', 'monte_repli_tbon', 'jeanpierrehoundealo@gmail.com', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', ''),
(3, '1671780020640.jpg', 'Jean', 'Pierre', '2024-05-01', '', 0, 'BJ023265', 53629855, 10, 32, 20, 30, 12, 20, 36, 'droitier', 0, 0, 'test_yoyo', 0, 'tir_tres_bon', 'dribble_tres_bon', 'feinte_tres_bon', 'participe_toutes_phases', 'tir_face_gardien_tbon', 'passe_bon', 'tir_decision_tbon', 'monte_repli_tbon', 'jeanpierrehoundealo@gmail.com', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', ''),
(4, '_7f063a41-5413-48f0-bde9-c0326330b3e9.jpeg', 'Jean', 'Pierre', '2021-04-13', '', 0, '123566', 97758465, 20, 10, 10, 10, 50, 30, 20, 'ambidextre', 0, 0, 'test_yoyo', 0, 'tir_tres_bon', 'dribble_tres_bon', 'feinte_tres_bon', 'participe_toutes_phases', 'tir_face_gardien_tbon', '', 'tir_decision_tbon', 'monte_repli_tbon', 'jeanpierre229@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_entraineur`
--

CREATE TABLE `utilisateur_entraineur` (
  `id` int(11) NOT NULL,
  `nom_prenoms` varchar(500) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `annee_experience` int(11) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `motDePasse` varchar(200) NOT NULL,
  `valcheck` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur_entraineur`
--

INSERT INTO `utilisateur_entraineur` (`id`, `nom_prenoms`, `ville`, `annee_experience`, `mail`, `motDePasse`, `valcheck`) VALUES
(6, 'Leo SOSSOU', 'Bohicon', 5, 'leo.sossou@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(7, 'Charles VIDO', 'Akpro-Missérété', 5, 'charles.vido@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(8, 'John Peter', 'Parakou', 5, 'johnpeter@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_parent`
--

CREATE TABLE `utilisateur_parent` (
  `id` int(11) NOT NULL,
  `nom_prenoms` varchar(500) NOT NULL,
  `ville` varchar(500) NOT NULL,
  `parent_de` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `motDePasse` varchar(500) NOT NULL,
  `connect` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur_parent`
--

INSERT INTO `utilisateur_parent` (`id`, `nom_prenoms`, `ville`, `parent_de`, `email`, `motDePasse`, `connect`) VALUES
(1, 'AGOSSOU Codjovi', 'COCOTOMEY', 'AGOSSOU Gilles', 'agossou.codjovi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(2, 'AGOSSOU Codjovi', 'COCOTOMEY', 'AGOSSOU Gilles', 'agossou.codjovi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(3, 'AGOSSOU Codjovi', 'COCOTOMEY', 'AGOSSOU Gilles', 'agossou.codjovi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(4, 'Jean-Pierre HOUNDEALO', 'Parakou', 'HOUNDEALO Junior', 'jeanpierrehoundealo03@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(5, 'Solomon', 'Lokossa', 'Solomon David', 'solomonagounmalo@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(6, 'Solomon Ag', 'Hêvié', 'Solomon Kouassi', 'solomonagounmalo1@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(7, 'Jean Pierre', 'Parakou', 'Jean Jonas', 'jeanpierre@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs_joueurs`
--
ALTER TABLE `utilisateurs_joueurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur_entraineur`
--
ALTER TABLE `utilisateur_entraineur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur_parent`
--
ALTER TABLE `utilisateur_parent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs_joueurs`
--
ALTER TABLE `utilisateurs_joueurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur_entraineur`
--
ALTER TABLE `utilisateur_entraineur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur_parent`
--
ALTER TABLE `utilisateur_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
