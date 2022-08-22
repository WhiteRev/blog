-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 21 août 2022 à 23:58
-- Version du serveur :  8.0.30-0ubuntu0.20.04.2
-- Version de PHP : 8.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `data-blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `featured_image_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `featured_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `featured_image_id`, `title`, `slug`, `content`, `featured_text`, `created_at`, `updated_at`) VALUES
(1, 2, 'Force et honneur', 'force-et-honneur', '<div>Objectif 10</div>', NULL, '2022-08-18 21:23:40', '2022-08-20 19:54:37'),
(2, NULL, 'article', 'article', '<div>ewffe</div>', 'weffew', '2022-08-19 19:43:53', NULL),
(3, NULL, 'dqwdqd', 'dqwdqd', '<div>wddqwdqw</div>', 'qwddqdqdwdwwqdqd', '2022-08-20 19:13:49', NULL),
(4, NULL, 'dqwdqwdqwd', 'dqwdqwdqwd', '<div>wqdqdqdqwd</div>', 'qwdqdqwdqd', '2022-08-20 19:13:55', NULL),
(5, NULL, 'wqdqwdqwd', 'wqdqwdqwd', '<div>qwdqdqd</div>', 'qwdqdqwdqwdw', '2022-08-20 19:14:02', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_category`
--

CREATE TABLE `article_category` (
  `article_id` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article_category`
--

INSERT INTO `article_category` (`article_id`, `category_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `color`) VALUES
(1, 'Tutoriel', 'tutoriel', '#000000');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `article_id` int NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `article_id`, `content`, `created_at`, `user_id`) VALUES
(1, 1, 'wqeq', '2022-08-19 02:08:12', 1),
(2, 1, 'wqeq', '2022-08-19 02:09:13', 1),
(3, 1, 'wqeq', '2022-08-19 02:09:16', 1),
(4, 1, 'wqeqwqe', '2022-08-19 02:09:18', 1),
(5, 1, 'wqeqwqe', '2022-08-19 02:09:20', 1),
(6, 1, 'wqeqwqe', '2022-08-19 02:09:20', 1),
(7, 1, 'wqeqwqe', '2022-08-19 02:09:21', 1),
(8, 1, 'wqeqwqe', '2022-08-19 02:09:21', 1),
(9, 1, 'wqeqwqe', '2022-08-19 02:09:22', 1),
(10, 1, 'wqeqwqe', '2022-08-19 02:09:34', 1),
(11, 1, 'wqeqwqe', '2022-08-19 02:09:36', 1),
(12, 1, 'wqeqwqe', '2022-08-19 02:30:28', 1),
(13, 1, 'wqeqwqe', '2022-08-19 02:33:19', 1),
(14, 1, 'wqeqwqewefwef', '2022-08-19 02:33:24', 1),
(15, 1, 'test', '2022-08-19 02:33:31', 1),
(16, 1, 'mon comment', '2022-08-19 14:38:40', 1),
(17, 1, 'mon comment', '2022-08-19 14:38:41', 1),
(18, 1, 'mon comment', '2022-08-19 14:38:43', 1),
(19, 1, 'mon comment', '2022-08-19 14:38:49', 1),
(20, 1, 'ad', '2022-08-19 14:40:11', 1),
(21, 1, 'greg', '2022-08-19 14:40:29', 1),
(22, 1, 'greg', '2022-08-19 14:41:13', 1),
(23, 1, 'wff', '2022-08-19 14:41:19', 1),
(24, 1, 'wffdfbbd', '2022-08-19 14:42:30', 1),
(25, 1, 'wffdfbbdd', '2022-08-19 14:49:53', 1),
(26, 1, 'wffdfbbdda', '2022-08-19 14:51:11', 1),
(27, 1, 'qwc', '2022-08-19 14:51:39', 1),
(28, 1, 'qwcwdqqd', '2022-08-19 14:53:14', 1),
(29, 1, 'qwcwdqqdwqd', '2022-08-19 14:54:16', 1),
(30, 1, 'qwcwdqqdwqdwddqw', '2022-08-19 14:56:51', 1),
(31, 1, 'qwcwdqqdwqdwddqw', '2022-08-19 14:58:55', 1),
(32, 1, 'qwcwdqqdwqdwddqw', '2022-08-19 15:00:57', 1),
(33, 1, 'qwcwdqqdwqdcwddqw', '2022-08-19 15:01:02', 1),
(34, 2, 'wqdd', '2022-08-19 22:00:45', 2);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220818182410', '2022-08-18 20:24:23', 4588),
('DoctrineMigrations\\Version20220818185416', '2022-08-18 20:54:21', 756),
('DoctrineMigrations\\Version20220821161512', '2022-08-21 18:15:38', 109);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `name`, `alt_text`, `filename`) VALUES
(1, 'test', NULL, '764261-d4863608-d3a7-42f8-aaa5-08eaf7085a5b.png'),
(2, 'test', NULL, '764261-a1079e9a-9800-4936-a2b8-fdcb0ca86c21.png');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `article_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `page_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_order` int DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `article_id`, `category_id`, `page_id`, `name`, `menu_order`, `is_visible`, `link`) VALUES
(1, 2, NULL, NULL, 'Mon exemple', 1, 1, NULL),
(2, NULL, NULL, NULL, 'Mon exemple', 1, 1, '#'),
(3, 1, NULL, NULL, 'Sujer', 3, 0, NULL),
(6, 1, NULL, NULL, 'test', 2, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `menu_menu`
--

CREATE TABLE `menu_menu` (
  `menu_source` int NOT NULL,
  `menu_target` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menu_menu`
--

INSERT INTO `menu_menu` (`menu_source`, `menu_target`) VALUES
(1, 3),
(1, 6),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `option`
--

CREATE TABLE `option` (
  `id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`, `email`) VALUES
(1, 'admintest', '[\"ROLE_ADMIN\"]', 'admin', NULL),
(2, 'steve', '[]', '$2y$13$sMs3IAjYN42v8EsnSShcU.Jgls8n5dfkQjwxtzoHyWnTsE.HoOR4i', NULL),
(3, 'admin', '[\"ROLE_ADMIN\"]', '$2y$13$Pmefwhgmus1sQ5kY5UOWzeABqJr2YXl7ppZaQsSYepUeB7lS1/Qxu', NULL),
(4, 'testtest', '[\"ROLE_AUTHOR\"]', '$2y$13$Q2pIoGSbOW8U9RGny0eJ4uUzUgoP6dvTIEAbRRibG5cSBFeWeaJyu', NULL),
(5, 'so', '[]', '$2y$13$7jGGIRxrWINc.jgXyzI84eRExHUHpPUaYhVELCDXlTmuYEZzWCGRi', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E663569D950` (`featured_image_id`);

--
-- Index pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`article_id`,`category_id`),
  ADD KEY `IDX_53A4EDAA7294869C` (`article_id`),
  ADD KEY `IDX_53A4EDAA12469DE2` (`category_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526C7294869C` (`article_id`),
  ADD KEY `IDX_9474526CA76ED395` (`user_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7D053A937294869C` (`article_id`),
  ADD KEY `IDX_7D053A9312469DE2` (`category_id`),
  ADD KEY `IDX_7D053A93C4663E4` (`page_id`);

--
-- Index pour la table `menu_menu`
--
ALTER TABLE `menu_menu`
  ADD PRIMARY KEY (`menu_source`,`menu_target`),
  ADD KEY `IDX_B54ACADD8CCD27AB` (`menu_source`),
  ADD KEY `IDX_B54ACADD95287724` (`menu_target`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `option`
--
ALTER TABLE `option`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E663569D950` FOREIGN KEY (`featured_image_id`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `FK_53A4EDAA12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_53A4EDAA7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_9474526CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `FK_7D053A9312469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_7D053A937294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_7D053A93C4663E4` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`);

--
-- Contraintes pour la table `menu_menu`
--
ALTER TABLE `menu_menu`
  ADD CONSTRAINT `FK_B54ACADD8CCD27AB` FOREIGN KEY (`menu_source`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B54ACADD95287724` FOREIGN KEY (`menu_target`) REFERENCES `menu` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
