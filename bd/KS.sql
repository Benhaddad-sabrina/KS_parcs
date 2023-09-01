-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 22 mars 2022 à 11:08
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `KS`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `email_admin` varchar(100) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`email_admin`, `nom`, `prenom`, `mot_de_passe`) VALUES
('eren@hotmail.com', 'yeager', 'eren', 'mdp');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `email_user` varchar(100) NOT NULL,
  `id_parc` int(30) NOT NULL,
  `note` int(30) NOT NULL,
  `date` date NOT NULL,
  `commentaire` varchar(300) NOT NULL,
  `heure` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`email_user`, `id_parc`, `note`, `date`, `commentaire`, `heure`) VALUES
('kou@hotmail.com', 1, 3, '2022-03-22', 'Pas très adapté aux tous petits', '10:34:25.000000'),
('mounira@gmail.com', 1, 4, '2022-03-22', 'Ce parc est très accueillant et familial', '00:39:09.000000'),
('sabrina.benhaddad@etu.univ-amu.fr', 38, 5, '2022-03-22', 'Parfait pour un séjour en famille !', '00:43:47.000000'),
('zineb@gmail.com', 38, 1, '2022-03-22', 'Pas très fan de l\'univers', '11:04:32.000000'),
('zineb@gmail.com', 41, 4, '2022-03-22', 'Très bien pour les enfants !', '11:03:44.000000');

-- --------------------------------------------------------

--
-- Structure de la table `parc`
--

CREATE TABLE `parc` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `type` char(50) DEFAULT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `pays` varchar(30) DEFAULT NULL,
  `description` varchar(400) DEFAULT NULL,
  `position` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `parc`
--

INSERT INTO `parc` (`id`, `nom`, `type`, `libelle`, `image`, `pays`, `description`, `position`) VALUES
(1, 'WAVE ISLAND', 'Aquatique', 'Parc d\'attraction 100% glisse en Provence', 'images/waveisland.jpg', 'France', 'Le grand saut ludique existe désormais, avec Wave Island Provence, ex : Splashworld, pour tous ceux qui veulent se mouiller ou profiter des plaisirs de l’eau en famille et en plein air. Un parc aquatique éco-responsable existe à côté d’Avignon, à Monteux.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2869.020384197293!2d4.963209615509696!3d44.02097327911038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b58c85f8a9d91b%3A0xd65402beb9af534a!2sWAVE%20ISLAND!5e0!3m2!1sfr!2sfr!4v1645119657852!5m2!1sfr!2sfr'),
(2, 'FUTUROSCOPE', 'Sensations fortes', 'Parc d\'attraction et de spectacle à Poitiers', 'images/futuroscope.jpg', 'France', 'Vous souhaitez passer un weekend magique, imaginaire et fantastique… ? Le Futuroscope devrait être alors votre prochaine destination car il s’agit d’un parc d’attraction de renom mondial ayant reçu le lauréat 2015 Trip Advisor Travel’s choice.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.817846985215!2d0.36756941547949046!3d46.66985727913386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fda33c42dc2de3%3A0x6676320a3d792873!2sFuturoscope!5e0!3m2!1sfr!2sfr!4v1645119730009!5m2!1sfr!2sfr'),
(3, 'WALIBI SUD OUEST', 'Sensations fortes', 'Attractions et spectacles près d\'Agen', 'images/walibi-so.jpg', 'France', 'Les parcs Walibi sont bien connus de tous les amateurs de bons moments. Le premier parc Walibi est né en Belgique.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2860.9874482331184!2d0.5738738153910604!3d44.186725379106655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aa4bbfffffffff%3A0xa8044d515dca566d!2sWalygator%20Sud-Ouest!5e0!3m2!1sfr!2sfr!4v1645119794077!5m2!1sfr!2sfr'),
(4, 'Disneyland Paris', 'Sensations fortes', 'Parc d\'attraction magique pour les petits et les g', 'images/disneylandParis.jpg', 'France', 'Du Far West au fond d’une lointaine galaxie, télétransportez-vous dans les univers des films Disney, Pixar, Marvel et Star Warsᵀᴹ que vous aimez tant !', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.5187966912977!2d2.78140431556086!3d48.867385779288405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61d19ca7ae2bd%3A0x57faf8cb6310e660!2sDisneyland%20Paris!5e0!3m2!1sfr!2sfr!4v1645119816473!5m2!1sfr!2sfr'),
(5, 'Ok Corral', 'Sensations fortes', 'Le plus grand parc d\'attraction du Sud de la Franc', 'images/okcorral.jpg', 'France', 'Bienvenue à OK CORRAL, le lieu unique et magique pour toute la famille. Le meilleure parc du Sud de la France.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.225123786563!2d5.725739115359283!3d43.267659279136474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c90a00ac7eb7e7%3A0x69e0d808dca529bc!2sOK%20Corral!5e0!3m2!1sfr!2sfr!4v1645119847207!5m2!1sfr!2sfr'),
(6, 'Astérix', 'Sensations fortes', 'Parc d\'attraction près de Paris', 'images/parcAsterix.jpg', 'France', 'Embarquez avec nous sur le Pégase Express, la montagne la plus ébouriffante du Parc Astérix. Chicanes, creux, bosses… On ne va pas en faire des wagons mais, vous sortirez de cette attraction… médusés. ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2610.4971873805966!2d2.569041415570948!3d49.13418387931553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671ae444f41bb%3A0x95cf289d71bcfb42!2sParc%20Ast%C3%A9rix!5e0!3m2!1sfr!2sfr!4v1645119872272!5m2!1sfr!2sfr'),
(7, 'Aqualand ', 'Aquatique', 'Parc aquatique à Frejus', 'images/aqualand.jpg', 'France', 'A moins de 20 min de Cannes, Aqualand Fréjus offre un festival de fun,\r\navec ses 19 attractions exceptionnelles sur plus de 7 hectares.\r\nLa référence des fans de glisse, avec ses 2 attractions uniques en Europe !', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46368.501181987165!2d6.691778898239147!3d43.418172258186885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cebd6aca995eb7%3A0xa11c6b1f318e14fb!2sAqualand%20Fr%C3%A9jus!5e0!3m2!1sfr!2sfr!4v1645120048655!5m2!1sfr!2sfr'),
(9, 'Caribe Bay', 'Aquatique', 'Parc aquatique à Venise', 'images/caribebay.jpg', 'Italie', '\r\nCircondata da palme ed immersa nella sabbia caraibica Pirates’ Bay, la nuova area dedicata ai più piccoli, cambia volto e si arricchisce di scivoli, fontanelle e giochi d’acqua.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.7530190477637!2d12.601029715437182!3d45.49491807910131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477c0068803b9889%3A0x295d88144f4b8025!2sCaribe%20Bay!5e0!3m2!1sfr!2sfr!4v1645120190949!5m2!1sfr!2sfr'),
(38, 'Europa-Park', 'Sensations fortes', 'Le meilleur parc du monde', 'images/panorama.jpeg', 'Allemagne', 'Certes, il n\'est pas en France, mais c\'est tout comme. ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2655.914526719671!2d7.719818915653528!3d48.26601937923395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791398732e35ed9%3A0x14b73404fff2ada0!2sEuropa-Park!5e0!3m2!1sfr!2sfr!4v1646228675374!5m2!1sfr!2sfr'),
(41, 'Aqua Family', 'Aquatique', 'Parc aquatique du sud', 'images/aquafamily.jpeg', 'France', 'Parc aquatique du sud ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2913.9046708367705!2d6.140009615166586!3d43.08549947914497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c921c73208131f%3A0x9dbdc54ad9bd021d!2sAqua%20Family!5e0!3m2!1sfr!2sfr!4v1647434543882!5m2!1sfr!2sfr'),
(42, 'Puy du fou', 'Sensations fortes', 'test test', 'images/puydefou.jpeg', 'France', 'Parc à sensations fortes', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.6668441635784!2d-0.9303044843942461!3d46.88960237914365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48065eb9615fe2ab%3A0x48386616c38da263!2sPuy%20du%20Fou!5e0!3m2!1sfr!2sfr!4v1647437917807!5m2!1sfr!2sfr');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `email_user` varchar(200) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`email_user`, `nom`, `prenom`, `mot_de_passe`) VALUES
('kou@hotmail.com', 'Saiki', 'Kusuo', 'mdp'),
('mounira@gmail.com', 'Benyahia', 'Mounira', 'mounira'),
('s@hotmail.com', 'salem', 'spellman', 'mdp'),
('sabrina.benhaddad@etu.univ-amu.fr', 'BENHADDAD', 'Sabrina', 'sabrina'),
('zineb@gmail.com', 'ben', 'zineb', 'zineb');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email_admin`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`email_user`,`id_parc`),
  ADD KEY `id_parc` (`id_parc`),
  ADD KEY `id_parc_2` (`id_parc`),
  ADD KEY `email_user` (`email_user`);

--
-- Index pour la table `parc`
--
ALTER TABLE `parc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `parc`
--
ALTER TABLE `parc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`id_parc`) REFERENCES `parc` (`id`),
  ADD CONSTRAINT `avis_ibfk_2` FOREIGN KEY (`email_user`) REFERENCES `user` (`email_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
