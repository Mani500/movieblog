-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Sam 22 Juin 2013 à 17:35
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `movieblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `movie` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `movie`, `user`, `date`, `comment`) VALUES
(8, 1, 'Mani500', '2013-06-21 17:35:25', 'Ouin shnin'),
(9, 1, 'Mani', '2013-06-21 17:38:35', 'Plop'),
(10, 1, 'Mani500', '2013-06-22 17:05:43', 'Wazaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` year(4) NOT NULL,
  `director` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `affiche` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `movie`
--

INSERT INTO `movie` (`id`, `name`, `date`, `director`, `genre`, `affiche`) VALUES
(1, 'Alien', 1979, 'Ridley Scott', 'Science-fiction', 'Alien.jpg'),
(2, 'Léon', 1994, 'Luc Besson', 'Thriller', 'Leon.jpg'),
(3, 'Terminator', 1984, 'James Cameron', 'Science-fiction', 'Terminator.jpg'),
(4, 'Drive', 2011, 'Nicolas Winding Refn', 'Drame', 'Drive.jpg'),
(5, 'Goodfellas', 1990, 'Martin Scorsese', 'Mafia', 'Goodfellas.jpg'),
(6, 'Snatch', 2000, 'Guy Ritchie', 'Comédie', 'Snatch.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NickName` (`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `nickname`, `password`) VALUES
(1, 'sqf', 'fsdq', 'Mani', 'fsdf'),
(2, 'Adrien', 'HANNEQUIN', 'Mani500', 'abc123'),
(3, 'Raphaël', 'HANNEQUIN', 'Argileman', 'zeub');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
