-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Mai 2019 à 11:21
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
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(20) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phone`, `email`, `message`) VALUES
(8, 'omar ouesleti', '53306396', 'omarouesleti7@gmail.com', 'slt admin!!!!'),
(9, 'chaima jebari', '53306935', 'chaimajebari0@gmail.com', 'hello admin!!!'),
(13, 'omar', '53306396', 'omarouesleti7@gmail.com', 'nnnnn'),
(14, 'houssem', '53306396', 'omarouesleti7@gmail.com', 'qqqqqqqqqqq'),
(18, 'mourad', '58975223', 'mouradjelassi@gmail.com', 'salut admin omar!!'),
(19, 'sofien', '53697112', 'trabeldi', 'salut admin cava?'),
(20, 'hammadi', '536398878', 'hammadi@gmail.com', 'salut admin '),
(21, 'chouaieb', '27878995', 'chouaieb@gmail.com', 'salut admin omar cava?');

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
  `balance` varchar(10) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `cathegories`, `type`, `balance`, `quantity`) VALUES
(84, 'skinny jeans', 'skinny_jeans.jpg', 180.99, 'men', 'jeans', '-10%', 0),
(40, 'red dress', 'dresses3.jpg', 170.00, 'women', 'Dress', '', NULL),
(78, 'sac', 'sac.jpg', 119.99, 'women', 'accessories', '', 0),
(9, 'trainer shoes green', 'trainer_shoes_green.jpg', 160.99, 'men', 'shoes', '', NULL),
(87, 'slim fit', 'slim_fit.jpg', 129.99, 'men', 'jeans', '', 0),
(30, 'trainer shoes', 'trainer_shoes.jpg', 189.99, 'men', 'shoes', '-20%', NULL),
(31, 'red jacket', 'jacket1.jpg', 199.99, 'men', 'jacket', '-5%', NULL),
(32, 'yellow jacket', 'jacket2.jpg', 240.00, 'men', 'jacket', '', NULL),
(33, 'blue jacket', 'jacket.jpg', 260.99, 'men', 'jacket', NULL, NULL),
(35, 'black jacket', 'jacket3.jpg', 300.99, 'men', 'jacket', '', NULL),
(38, 'blue dress', 'dresses1.jpg', 210.99, 'women', 'Dress', '', NULL),
(39, 'black dress', 'dresses2.jpg', 198.99, 'women', 'Dress', '', NULL),
(41, 'green dress', 'dresses4.jpg', 169.99, 'women', 'Dress', '-15%', NULL),
(56, 'bag', 'bag.jpg', 189.99, 'women', 'accessories', '-10%', NULL),
(55, 'sac', 'mmm.jpg', 180.99, 'women', 'accessories', '', NULL),
(45, 'watch', 'watch2.jpg', 229.99, 'men', 'accessories', '-10%', NULL),
(46, 'watch', 'watch.jpg', 230.99, 'men', 'accessories', NULL, NULL),
(52, 'bag', 'bag.jpg', 89.99, 'men', 'accessories', '-25%', NULL),
(53, 'tarboucha', 'tarboucha1.jpg', 89.99, 'women', 'accessories', '-15%', NULL),
(119, 'sebta', 'sebta.jpg', 39.99, 'men', 'accessories', '', NULL),
(80, 'trainer shoes red', 'trainer_shoes_red.jpg', 149.99, 'men', 'shoes', '', 0),
(85, 'jeans 1 ', 'jeans.jpg', 100.99, 'men', 'jeans', '-10%', 0),
(96, 'skinny jeans', 'skinny_jeans.jpg', 129.99, '88', 'shoes', '-12%', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
