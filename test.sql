-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 28 Avril 2019 à 15:48
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `UName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `UName`, `Password`) VALUES
(1, 'admin', 'admin'),
(2, 'omar', 'tekup');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `cathegories` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `balance` varchar(10) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `cathegories`, `type`, `balance`) VALUES
(2, 'slim jeans', 'jeans.jpg', 119.99, 'men', 'jeans', NULL),
(1, 'slim jeans', 'jeans2.jpg', 119.99, 'men', 'jeans', NULL),
(3, 'Skinny jeans', 'skinny.jpg', 119.99, 'men', 'jeans', NULL),
(4, 'slim fit jeans', 'slim_fit.jpg', 119.99, 'men', 'jeans', NULL),
(40, 'red dress', 'dresses3.jpg', 169.99, 'women', 'Dress', '-5%'),
(8, 'trainer shoes red', 'trainer_shoes_red.jpg', 189.99, 'men', 'shoes', NULL),
(9, 'trainer shoes green', 'trainer_shoes_green.jpg', 199.99, 'men', 'shoes', NULL),
(10, 'cuir shoes', 'shoes.jpg', 230.99, 'men', 'shoes', NULL),
(30, 'trainer shoes', 'trainer_shoes.jpg', 189.99, 'men', 'shoes', '-20%'),
(31, 'red jacket', 'jacket1.jpg', 199.99, 'men', 'jacket', '-5%'),
(32, 'yellow jacket', 'jacket2.jpg', 240.00, 'men', 'jacket', NULL),
(33, 'blue jacket', 'jacket.jpg', 260.99, 'men', 'jacket', NULL),
(35, 'black jacket', 'jacket3.jpg', 280.99, 'men', 'jacket', NULL),
(38, 'blue dress', 'dresses1.jpg', 189.99, 'women', 'Dress', NULL),
(37, 'omar', 'jacket4.jpg', 150.00, 'men', 'jacket', NULL),
(39, 'black dress', 'dresses2.jpg', 198.99, 'women', 'Dress', '-10%'),
(41, 'green dress', 'dresses4.jpg', 169.99, 'women', 'Dress', '-15%'),
(42, 'perfume', 'parfain.jpg', 69.99, 'men', 'accessories', NULL),
(43, 'belt', 'sebta.jpg', 29.99, 'men', 'accessories', NULL),
(44, 'cap', 'tarboucha.jpg', 39.99, 'men', 'accessories', NULL),
(45, 'watch', 'watch2.jpg', 229.99, 'men', 'accessories', '-10%'),
(46, 'watch', 'watch.jpg', 230.99, 'men', 'accessories', NULL),
(47, 'cap', 'tarboucha1.jpg', 39.99, 'women', 'accessories', NULL),
(48, 'watch', 'watch3.jpg', 198.99, 'women', 'accessories', NULL),
(49, 'bag', 'sac2.jpg', 89.99, 'women', 'accessories', NULL),
(50, 'bag', 'sac.jpg', 89.99, 'women', 'accessories', '-10%');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(2) NOT NULL,
  `fullname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
