-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2012 at 09:31 PM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `starvol`
--

-- --------------------------------------------------------

--
-- Table structure for table `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(255) NOT NULL,
  `nr_musicas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `grupos`
--

INSERT INTO `grupos` (`id`, `grupo`, `nr_musicas`) VALUES
(28, 'testeGrupo', 4),
(29, 'sdfs', 0),
(30, 'teste', 1),
(31, 'ultimo grupo', 1),
(32, 'asdsad', 0),
(33, 'olapainatal', 0),
(34, 'olapainatal', 0),
(37, 'dasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `musicas`
--

CREATE TABLE IF NOT EXISTS `musicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` text NOT NULL,
  `tema` text NOT NULL,
  `youtube` text NOT NULL,
  `letra` text NOT NULL,
  `duracao` text NOT NULL,
  `grupo` text NOT NULL,
  `gosto` int(11) NOT NULL,
  `n_gosto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `musicas`
--

INSERT INTO `musicas` (`id`, `autor`, `tema`, `youtube`, `letra`, `duracao`, `grupo`, `gosto`, `n_gosto`) VALUES
(30, 'asdasd', 'sadsad', 'asdsad', '', '\n03:50\n', '28', 0, 0),
(32, 'Nightwish', 'phantom of the opera', 'http://www.youtube.com/watch?v=Ej1zMxbhOO0', '', '\n05:15\n', '22', 0, 0),
(33, 'sad', 'asd', 'asd', '', '\n17:10\n', '22', 0, 0),
(34, 'teste', 'teste', 'teste', 'teste', '\n04:48\n', '30', 0, 0),
(35, 'painatal', 'painatal', 'painatal', 'painatal', '\n06:25\n', '31', 0, 0),
(36, 'asd', 'asdasdas', 'asdasasd', 'asdasd', '\n20:53\n', '28', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
