-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 fév. 2021 à 20:08
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `women_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `idActualite` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `titre` varchar(254) DEFAULT NULL,
  `lien` varchar(254) DEFAULT NULL,
  `photo` varchar(254) DEFAULT NULL,
  `dateA` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`idActualite`, `idMembre`, `titre`, `lien`, `photo`, `dateA`) VALUES
(1, 3, 'Les 10 idées marketing de la semaine', 'https://www.e-marketing.fr/Thematique/veille-1097/Diaporamas/les-idees-marketing-semaine-septembre-352163/general-mills-champions-devoilent-collection-vetements-352164.htm#&utm_source=navigation&utm_medium=rebond&utm_campaign=rebond_meme_rubrique', '1600064028_2020-09-13T123840Z_1622475618_RC2OXI9QWGER_RTRMADP_3_BELARUS-ELECTION-PROTESTS.webp', '2020-09-14'),
(2, 3, 'Le Point ', 'https://www.lepoint.fr/monde/', '1600807694_20789697LPW_20789706_Une__Michel-Fourniret--enquete--justice_660x287.jpg', '2020-09-22');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `idAvis` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `idquestion` int(11) NOT NULL,
  `avis` text NOT NULL,
  `dateA` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`idAvis`, `idMembre`, `idquestion`, `avis`, `dateA`) VALUES
(2, 11, 1, 'hg', '2020-09-14'),
(3, 11, 2, 'h', '2020-09-14'),
(4, 11, 2, 'merci beaucoup ', '2020-09-14'),
(5, 11, 2, 'Le Président de la République, SEM Issoufou Mahamadou a reçu vendredi 11 Septembre 2020, successivement le représentant spécial du Secrétaire général des Nations Unies pour l’Afrique de l’Ouest et le Sahel (UNOWAS), M. Mohamed Ibn Chambass et, le Président du Comité International de la Croix Rouge (CICR), M. Peter Maurer. Des échanges pertinents ont été au centre de ces rencontres.\r\n\r\nConcernant la première audience, M. Mohamed Ibn Chambass a indiqué que les échanges ont notamment porté sur la situation sécuritaire', '2020-09-14'),
(6, 11, 2, 'a.', '2020-09-14'),
(7, 11, 2, 'merci bien .', '2020-09-14'),
(8, 11, 2, 'CAR LA FEMME ', '2020-09-14'),
(9, 11, 3, 'azehgtddf', '2020-09-22'),
(10, 11, 4, 'dugftilyiol', '2020-09-23'),
(11, 11, 4, 'jnio,kl;:', '2020-10-05');

-- --------------------------------------------------------

--
-- Structure de la table `collaborateur`
--

CREATE TABLE `collaborateur` (
  `idCollaborateur` int(11) NOT NULL,
  `idProjet` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `fonction` varchar(254) DEFAULT NULL,
  `phone` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idCom` int(11) NOT NULL,
  `idMembre` int(11) DEFAULT NULL,
  `messagec` text DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `datec` datetime DEFAULT current_timestamp(),
  `nom` varchar(25) NOT NULL,
  `photo_def` varchar(245) NOT NULL DEFAULT 'tof_defaul_commentaire.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idCom`, `idMembre`, `messagec`, `email`, `datec`, `nom`, `photo_def`) VALUES
(1, 11, 'bonjour et merci ', NULL, '2020-09-14 07:58:06', '', 'tof_defaul_commentaire.png'),
(2, NULL, 'hallo ', 'iness@gmail.com', '2020-09-22 21:49:53', 'iness', 'tof_defaul_commentaire.png'),
(3, 10, 'uhfjgkhkjfruruktit', NULL, '2020-09-22 22:36:40', '', 'tof_defaul_commentaire.png'),
(4, NULL, 'hbyègtfvc-rè(c-tvgbuhyn', 'agnesbassom@yahoo.com', '2020-10-05 15:16:06', 'tubuh', 'tof_defaul_commentaire.png');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `idInfos` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `messageI` varchar(254) DEFAULT NULL,
  `dateIj` date DEFAULT current_timestamp(),
  `statut` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`idInfos`, `idMembre`, `messageI`, `dateIj`, `statut`) VALUES
(1, 3, 'réunion urgence ', '2020-09-14', 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `idMembre` int(11) NOT NULL,
  `idRole` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `telephone` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `datej` datetime DEFAULT current_timestamp(),
  `photo` varchar(254) NOT NULL DEFAULT 'tof_defaul_commentaire.png',
  `statutM` tinyint(1) NOT NULL DEFAULT 1,
  `pass` varchar(254) NOT NULL,
  `prenom` varchar(24) NOT NULL,
  `nationalite` varchar(24) NOT NULL,
  `numero_passeport` varchar(24) NOT NULL,
  `formation` varchar(24) NOT NULL,
  `entrepreneuse` tinyint(1) NOT NULL DEFAULT 0,
  `facebook` varchar(66) NOT NULL,
  `instagram` varchar(66) NOT NULL,
  `youtube` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idMembre`, `idRole`, `nom`, `telephone`, `email`, `datej`, `photo`, `statutM`, `pass`, `prenom`, `nationalite`, `numero_passeport`, `formation`, `entrepreneuse`, `facebook`, `instagram`, `youtube`) VALUES
(1, 1, 'clinton Mambou', '55806338', 'cmambou@gmail.com', NULL, '1598363731_ODYP9587.JPG', 1, '$2y$10$1QprKYdnTNG/gSntjgLfH.xPO8EbNEZqryEYt4BpGsDs8c4j/mOS6', '', '', '', '', 0, '', '', ''),
(3, 1, 'Agnes Carolle Annie Colette OUBILEN BASSOM', '+21627232258', 'agnesbassom@yahoo.com', '2020-08-20 13:06:16', '1598280797_IMG_20190830_150521_975.jpg', 1, '$2y$10$guU8aanEdqn.PIigewSddOMymN0mOyZItEU0ApzCX3gTE4D2Z4QpO', '', '2263452862462', 'Camerounaise', '', 0, '', '', ''),
(10, 2, 'ATIBOU', '7894565', 'stella@gmail.com', '2020-09-14 07:26:27', '1600064929_IMG_3359.JPG', 1, '$2y$10$DQlZPqc2KsFkI7WHVvTspeHL/uJ6bDPDtFqyd5Htcb7fuQbkLj/1O', 'stella vanell', '', '', '', 0, '', '', ''),
(11, 2, 'MAYO ', '123456', 'sonia@gmail.com', '2020-09-14 07:50:33', '1600066565_FB_IMG_1575576523549.jpg', 1, '$2y$10$/JgyEjIeEZsAQ8sY1AhbC.mxvmG1Urb2BvdImiunGyfNktHXQoIaa', 'sonia ', 'camerounnaise ', '9632584', 'architecte', 1, 'g', 'g', 'g');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `idProjet` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `pays` varchar(254) DEFAULT NULL,
  `adresse` varchar(25) DEFAULT NULL,
  `domaine` varchar(254) DEFAULT NULL,
  `image` varchar(254) NOT NULL,
  `site` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`idProjet`, `idMembre`, `nom`, `description`, `pays`, `adresse`, `domaine`, `image`, `site`) VALUES
(2, 11, 'Cuisine ', 'Bien manger ', 'TUNISIE', 'Route Mharza km 0,5 Immeu', 'Restauration ', '1600075498_IMG_7534.JPG', 'g'),
(3, 11, 'coiffure ', 'BEAUTE', 'sénegale ', 'Route Mharza km 0,5 Immeu', 'BELLE ', '1600075721_IMG_7605.JPG', 'A');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `idquestion` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `question` varchar(254) NOT NULL,
  `dateQ` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`idquestion`, `idMembre`, `question`, `dateQ`) VALUES
(1, 10, 'Que pouvons nous faire pour la jeune fille ?', '2020-09-14'),
(2, 10, 'Pourquoi venir en aide aux jeune fille ? ', '2020-09-14'),
(3, 10, 'gkjgffjgkggi', '2020-09-22'),
(4, 10, 'dyhfkghcdgsyjghxfwnjgcdh,jfjfikhhdtsyhjkgfdgqrfgxc', '2020-09-22');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `libelle` varchar(254) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idRole`, `libelle`, `level`) VALUES
(1, 'admin', 3),
(2, 'ancien', 2),
(3, 'nouveau', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`idActualite`),
  ADD KEY `FK_ACTUALIT_SAISIR_MEMBRE` (`idMembre`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`idAvis`),
  ADD KEY `FK_AVIS_ASSOCIATI_QUESTION` (`idquestion`),
  ADD KEY `FK_AVIS_ASSOCIATI_MEMBRE` (`idMembre`);

--
-- Index pour la table `collaborateur`
--
ALTER TABLE `collaborateur`
  ADD PRIMARY KEY (`idCollaborateur`),
  ADD KEY `FK_COLLABOR_ASSOCIATI_PROJET` (`idProjet`),
  ADD KEY `FK_COLLABOR_ASSOCIATI_MEMBRE` (`idMembre`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idCom`),
  ADD KEY `FK_COMMENTA_DONNER_MEMBRE` (`idMembre`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`idInfos`),
  ADD KEY `FK_INFOS_REDIGER_MEMBRE` (`idMembre`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idMembre`),
  ADD KEY `FK_MEMBRE_POSSEDER_ROLE` (`idRole`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`idProjet`),
  ADD KEY `FK_PROJET_CONCERNER_MEMBRE` (`idMembre`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`idquestion`),
  ADD KEY `FK_QUESTION_POSER_MEMBRE` (`idMembre`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `idActualite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `idAvis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `collaborateur`
--
ALTER TABLE `collaborateur`
  MODIFY `idCollaborateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idCom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `idInfos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `idMembre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `idProjet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `idquestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD CONSTRAINT `FK_ACTUALIT_SAISIR_MEMBRE` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`idMembre`);

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_AVIS_ASSOCIATI_MEMBRE` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`idMembre`),
  ADD CONSTRAINT `FK_AVIS_ASSOCIATI_QUESTION` FOREIGN KEY (`idquestion`) REFERENCES `question` (`idquestion`);

--
-- Contraintes pour la table `collaborateur`
--
ALTER TABLE `collaborateur`
  ADD CONSTRAINT `FK_COLLABOR_ASSOCIATI_MEMBRE` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`idMembre`),
  ADD CONSTRAINT `FK_COLLABOR_ASSOCIATI_PROJET` FOREIGN KEY (`idProjet`) REFERENCES `projet` (`idProjet`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_COMMENTA_DONNER_MEMBRE` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`idMembre`);

--
-- Contraintes pour la table `infos`
--
ALTER TABLE `infos`
  ADD CONSTRAINT `FK_INFOS_REDIGER_MEMBRE` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`idMembre`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_MEMBRE_POSSEDER_ROLE` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_PROJET_CONCERNER_MEMBRE` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`idMembre`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_QUESTION_POSER_MEMBRE` FOREIGN KEY (`idMembre`) REFERENCES `membre` (`idMembre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
