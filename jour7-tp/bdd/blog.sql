-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 05 fév. 2024 à 09:32
-- Version du serveur :  8.0.36-0ubuntu0.20.04.1
-- Version de PHP : 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text,
  `dt_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `dt_creation`, `img`) VALUES
(1, 'bonjour les amis', 'les données viennent de la table article', '2024-01-29 15:53:31', NULL),
(2, 'mon premier article via un formulaire', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet mauris dapibus neque efficitur bibendum ac nec neque. Mauris aliquet tincidunt odio a dictum. Aenean congue pharetra auctor. Ut nec augue quis mauris finibus gravida eu a elit. Morbi accumsan, nisi eu dapibus vulputate, neque elit sollicitudin tortor, vitae tempor leo turpis sit amet purus. Nam suscipit tellus leo, in egestas arcu pulvinar eget. Curabitur dapibus tempus rutrum. Curabitur pharetra cursus nisi, et commodo nunc euismod eget. Sed vitae justo ac lacus bibendum aliquam vitae ut turpis. Suspendisse eu neque massa. Aliquam lacinia quam leo. Integer sed ipsum gravida, fringilla quam vitae, cursus velit. Vestibulum varius lorem arcu, at malesuada lacus vehicula et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras id mattis metus, eget tincidunt libero. Quisque commodo sodales metus, sit amet fermentum diam aliquam a. ', '2024-02-01 10:16:34', 'https://source.unsplash.com/random/400x200'),
(3, 'bonjour', 'lorem ipsum', '2024-02-01 11:02:06', 'https://source.unsplash.com/random/300300'),
(4, 'deuxieme article', 'Maecenas ut nibh quam. Aenean arcu mauris, pellentesque in porta in, semper id massa. Integer faucibus nisl nisi, in viverra nisl aliquam in. Suspendisse risus dolor, molestie nec rhoncus scelerisque, venenatis nec turpis. Nullam at odio cursus eros auctor sagittis eget quis augue. Proin velit ante, tincidunt id eros vitae, fringilla pellentesque orci. Fusce facilisis est vel mi pulvinar placerat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec a ex lectus. Morbi bibendum sagittis mauris, a laoreet diam elementum vel. Integer maximus pulvinar turpis. Quisque at augue vel ipsum efficitur bibendum. Etiam rutrum massa at nisi varius, nec molestie ante imperdiet. Nam eu erat id ipsum dignissim egestas sit amet at mi. ', '2024-02-01 11:31:01', 'https://source.unsplash.com/user/wsanter'),
(5, 'bonjour les amis', 'Donec at malesuada nunc. Phasellus sollicitudin auctor mauris quis tempor. Etiam non nisl nulla. Phasellus sagittis interdum urna sit amet porta. Nam at quam sed dolor efficitur luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ullamcorper, lorem sit amet venenatis tincidunt, libero mauris luctus lectus, at dignissim metus ex in lacus. Cras at vestibulum nisl, id pellentesque leo. Suspendisse in viverra enim, sit amet molestie dolor. ', '2024-02-01 11:43:27', NULL),
(6, 'encore un article', 'depuis le back office', '2024-02-04 20:22:46', NULL),
(7, '&lt;h3&gt;coucou&lt;/h3&gt;', '&lt;p&gt;les amis&lt;/p&gt;', '2024-02-05 08:15:14', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`) VALUES
(1, 'première catégorie', 'un lorem ipsum'),
(2, 'première catégorie', 'un lorem ipsum'),
(3, 'PHP', 'découverte du langage PHP');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `dt_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`, `dt_creation`) VALUES
(1, 'toto@yahoo.fr', 'azerty1234', 'redacteur', '2024-01-30 10:40:04'),
(3, 'malik@yahoo.fr', 'Azerty1234', 'redacteur', '2024-02-01 14:27:24'),
(4, 'titi@yahoo.fr', '$2y$10$tnxaM4i5wu0d7XPaLy.tQOhpyWCEjHqmUOMzp6S9sPeawvdIujan2', 'redacteur', '2024-02-01 15:10:21'),
(5, 'exemple@yahoo.fr', '$2y$10$rCxfWuv1JBzqKak1GwMHIeO5Df1zUM6TjZ64KDMp7kni9Y2LZ6/Pi', 'redacteur', '2024-02-05 08:19:38');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
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
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
