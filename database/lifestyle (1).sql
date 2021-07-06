-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 juil. 2021 à 01:45
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lifestyle`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `_id` int(11) NOT NULL,
  `_email` varchar(30) DEFAULT NULL,
  `_PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chois_user`
--

CREATE TABLE `chois_user` (
  `id_chois` int(11) NOT NULL,
  `id_service` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `taille` decimal(10,0) DEFAULT NULL,
  `poids` decimal(10,0) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `_PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `first_name`, `last_name`, `birthday`, `sexe`, `taille`, `poids`, `email`, `_PASSWORD`) VALUES
(11, 'iiiopo', 'uuiupioi', '2021-06-10', 'female', '59', '175', 'rrriuytgffv@gmail.com', '66'),
(12, 'Khadija', 'EL OUAFI', '2021-07-09', 'female', '55', '175', 'jassmine135@gmail.com', '777'),
(13, 'uuuu', 'uuuu', '2021-01-04', 'male', '99', '178', 'poi35@gmail.com', '0000');

-- --------------------------------------------------------

--
-- Structure de la table `pannier`
--

CREATE TABLE `pannier` (
  `id_pannier` int(11) NOT NULL,
  `id_produit` varchar(10) DEFAULT NULL,
  `id_client` varchar(10) DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `mode_payment` varchar(10) DEFAULT NULL,
  `qantiter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `ref_produit` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `_description` varchar(20) DEFAULT NULL,
  `quatiter_stock` int(11) DEFAULT NULL,
  `prix` decimal(6,2) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ref_produit`, `name`, `_description`, `quatiter_stock`, `prix`, `image`) VALUES
('1', 'gym set for women', '2 PCS', 4, '20.00', 'assets/img/portfolio/femme3.jpg'),
('10', 'Best Egg Protein Pow', 'GASPARI NUTRITION PR', 3, '30.00', 'assets/img/portfolio/pro7.jpg'),
('11', 'kettlebell', 'BLUE & PINK & GREEN', 9, '10.00', 'assets/img/portfolio/gym8.jpg'),
('12', 'gym set for women', '2 PCS', 4, '20.00', 'assets/img/portfolio/homme2.jpg'),
('13', 'Best Protein For Wei', 'ISOPURE ZERO CARB WP', 4, '20.00', 'assets/img/portfolio/pro8.jpg'),
('14', 'exercise ball', 'WHITE', 4, '20.00', 'assets/img/portfolio/gym3.jpg'),
('15', 'PACK 3 VITAMINE D3 V', '2000 UI SPRAY 20 ML', 4, '20.00', 'assets/img/portfolio/vit6.jpg'),
('16', 'gym set for women', '3 PCS', 4, '40.00', 'assets/img/portfolio/femme4.jpg\r\n'),
('17', 'jump rope', 'BLACK', 4, '40.00', 'assets/img/portfolio/gym4.jpg\r\n'),
('18', 'gym essential equipm', 'BLACK & ORANGE', 4, '50.00', 'assets/img/portfolio/gym7.jpg\r\n'),
('19', 'Best-Tasting Protein', 'PRO JYM PROTEIN POWD', 4, '14.80', 'assets/img/portfolio/pro1.jpg\r\n'),
('2', 'Best Casein Protein ', 'KAGED MUSCLE KASEIN', 3, '30.00', 'assets/img/portfolio/pro5.jpg'),
('21', 'VITAMINE D3', '200 GÉLULES', 4, '27.80', 'assets/img/portfolio/vit1.jpg'),
('22', 'mat', 'BLUE', 4, '27.80', 'assets/img/portfolio/gym6.jpg'),
('23', 'Best-Tasting Protein', 'PRO WHEY PROTEIN POW', 4, '14.80', 'assets/img/portfolio/pro2.jpg\r\n'),
('24', 'PACK 3 BACIBIOTIC', '3 X 30 STICKS', 4, '17.80', 'assets/img/portfolio/vit3.jpg\r\n'),
('25', 'gym set for women', '3 PCS', 4, '61.80', 'assets/img/portfolio/femme1.jpg\r\n'),
('26', 'Best Whey Protein Is', 'PRO WHEY PROTEIN ISO', 7, '18.80', 'assets/img/portfolio/pro3.jpg\r\n'),
('27', 'PACK 2 COENZYME Q10 ', '2 X 60 GÉLULES', 45, '20.80', 'assets/img/portfolio/vit4.jpg\r\n'),
('3', 'weightlifting', 'ORANGE', 10, '15.00', 'assets/img/portfolio/gym1.jpg'),
('4', 'Best Plant-Based Veg', 'EVLUTION NUTRITION S', 5, '40.00', 'assets/img/portfolio/pro4.jpg'),
('5', 'gym set for women', '3 PCS', 4, '20.00', 'assets/img/portfolio/femme2.jpg'),
('6', 'weightlifting', 'PURPLE', 4, '17.00', 'assets/img/portfolio/gym2.jpg'),
('7', 'Best Value Protein P', 'BODYBUILDING SIGNATU', 4, '20.00', 'assets/img/portfolio/pro6.jpg'),
('8', 'gym set for men', '2 PCS', 4, '22.00', 'assets/img/portfolio/homme1.jpg'),
('9', 'boxers gloves', 'NUDE PINK', 4, '26.70', 'assets/img/portfolio/gym5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `name_service` varchar(20) DEFAULT NULL,
  `description_service` varchar(500) DEFAULT NULL,
  `prix` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`_id`);

--
-- Index pour la table `chois_user`
--
ALTER TABLE `chois_user`
  ADD PRIMARY KEY (`id_chois`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `pannier`
--
ALTER TABLE `pannier`
  ADD PRIMARY KEY (`id_pannier`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ref_produit`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chois_user`
--
ALTER TABLE `chois_user`
  MODIFY `id_chois` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `pannier`
--
ALTER TABLE `pannier`
  MODIFY `id_pannier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
