-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 06 nov. 2021 à 15:25
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cnosc2`
--
CREATE DATABASE IF NOT EXISTS `cnosc2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cnosc2`;

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id_actualite` int(11) NOT NULL,
  `photo` text DEFAULT NULL,
  `titre` varchar(250) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `libelle` text NOT NULL,
  `corps` text NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(10) NOT NULL,
  `mois` varchar(50) NOT NULL,
  `id_categorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id_actualite`, `photo`, `titre`, `auteur`, `libelle`, `corps`, `date`, `heure`, `mois`, `id_categorie`) VALUES
(2, '1628684749.jpg', 'L\'équipe nationale Dame de Handball gagne son 1er match de can contre le Cap-vert', 'Louis NGAMI', 'Les Diables rouges entrent la compétition ce 11 juin à 16h, à Yaoundé, au Cameroun, en affrontant la sélection du Cap-Vert.', 'Les Diables rouges entrent en compétition ce 11 juin à 16h, à Yaoundé, au Cameroun, en affrontant la sélection du Cap- Vert...\r\nLe Congo joue son premier match de la 24e Coupe d’Afrique des nations(CAN) sans trop de pression face à l’équipe du Cap-Vert, qui a enregistré une défaite lors de sa première sortie, le 9 juin face à l’Angola, 14-39.\r\nLe Congo fait partie des meilleurs pays africains au classement général du handball féminin, car les Diables rouges ont fait le beau temps de ce sport autour de la décennie 1980-1990. Avec quatre CAN dans leur palmarès (1979, 1981, 1983 et 1985), quatre fois finaliste (1976, 1992, 1998 et 2000) puis à deux reprises troisième (2006 et 2008), les Congolaises sont déterminées à remporter ce match pour commencer avec assurance leur deuxième match, contre l’Angola, le 13 juin.\r\nAprès le désistement de l’Algérie, le Congo ne jouera que deux matchs dans la phase de poule. Selon la gardienne des Diables rouges, l’équipe est en forme et les joueuses sont prêtes à se déchainer pour défendre l’image de la République du Congo.\r\n« Nous sommes prêtes, nous jouerons sans pression. Notre détermination est sans faille », a-t-elle déclaré.\r\nMême si les adversaires des protégées du président Ayessa Ndinga Yengué ont un curriculum vitae quasi vide dans cette compétition, il est nécessaire de prendre ce match au sérieux puisque le Cap-Vert n’a certes pas encore atteint le carré d’as dans cette compétition, mais ce pays est actuellement en plein expansion.\r\nPour permettre à un plus grand nombre de suivre le match, la rencontre Congo-Cap-Vert sera diffusée en direct sur les chaînes de télévision camerounaises à savoir CRTV et CRTV Sport, disponibles sur les bouquets Canal+.', '2021-08-11', '12h', 'août', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `categorie`) VALUES
(1, 'Jeux olympiques d\'été'),
(2, 'Jeux olympiques de la jeunesse'),
(3, 'Jeux Africains'),
(4, 'Jeux Africains de la jeunesse'),
(5, 'Jeux ACNOA zone IV'),
(6, 'Jeux de la Francophonie');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `identite` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `sujet` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `date_message` date NOT NULL,
  `mois_message` varchar(30) NOT NULL,
  `annee_message` varchar(30) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `identite`, `email`, `tel`, `sujet`, `msg`, `date_message`, `mois_message`, `annee_message`, `statut`) VALUES
(1, 'Précieux', 'apc@gmail.com', '069897169', 'Test', 'Salut', '2021-07-25', 'juillet', '2021', 0),
(2, 'Précieux', 'apc@gmail.com', '069897169', 'Test', 'Salut', '2021-07-25', 'juillet', '2021', 0),
(3, 'Précieux', 'apc@gmail.com', '069897169', 'Test', 'aaaa', '2021-07-29', 'juillet', '2021', 0),
(4, 'Précieux Assako', 'assakoprecieux@gmail.com', '069897169', 'Test', 'ça marche !', '2021-08-01', 'août', '2021', 0),
(5, 'Précieux Assako', 'assakoprecieux@gmail.com', '069897169', 'Test', 'wxwcx', '2021-08-01', 'août', '2021', 0),
(6, 'Précieux Assako', 'assakoprecieux@gmail.com', '069897169', 'Test', 'qss', '2021-08-01', 'août', '2021', 0),
(7, 'Précieux Assako', 'apc@gmail.com', '069897169', 'Test', 'contact', '2021-08-01', 'août', '2021', 0),
(8, 'Précieux', 'apc@gmail.com', '069897169', 'Test', 'rr', '2021-08-01', 'août', '2021', 0);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_newsletter` date NOT NULL,
  `mois_newsletter` varchar(20) NOT NULL,
  `annee_newsletter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date_newsletter`, `mois_newsletter`, `annee_newsletter`) VALUES
(1, 'apc@gmail.com', '2021-07-25', 'juillet', '2021'),
(2, 'apc@gmail.com', '2021-07-25', 'juillet', '2021'),
(3, 'a', '2021-07-26', 'juillet', '2021'),
(4, 'apc@gmail.com', '2021-07-29', 'juillet', '2021'),
(5, 'a@gmail.com', '2021-08-01', 'août', '2021'),
(8, 'z@gmail.com', '2021-08-01', 'août', '2021'),
(10, 'cc@gmail.com', '2021-08-01', 'août', '2021'),
(11, 'aa@gmail.com', '2021-08-01', 'août', '2021'),
(13, 'q', '2021-08-12', 'août', '2021');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `phototheque`
--

CREATE TABLE `phototheque` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `phototheque`
--

INSERT INTO `phototheque` (`id`, `titre`, `photo`, `date`, `heure`) VALUES
(1, NULL, '1628719973.jpg', '2021-08-11', '22h'),
(2, NULL, '1628720755.jpg', '2021-08-11', '22h');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'apc', 'assakoprecieux@gmail.com', '$2y$10$HxdvA2CiID8YHd3Z0SVWnuuN4UMzZURr0p9WzNZMCnL3VXrqbyPjK', '2021-08-02 21:18:51', '2021-08-02 21:18:51'),
(2, 'new user', 'newuser@gmail.com', '$2y$10$bnKpC1T0faSz/9cxT3B2mO821tlDlRJrFegtbTdUlVzVvcz71qJXa', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `videotheque`
--

CREATE TABLE `videotheque` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `lien` text NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `videotheque`
--

INSERT INTO `videotheque` (`id`, `titre`, `lien`, `date`, `heure`) VALUES
(1, NULL, 'https://www.youtube.com/embed/_m9Zu2b33Lg', '2021-08-13', '11h');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id_actualite`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `phototheque`
--
ALTER TABLE `phototheque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `videotheque`
--
ALTER TABLE `videotheque`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id_actualite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `phototheque`
--
ALTER TABLE `phototheque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `videotheque`
--
ALTER TABLE `videotheque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
