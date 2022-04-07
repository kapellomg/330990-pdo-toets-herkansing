-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2022 at 10:44 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_toets_herkansing`
--

-- --------------------------------------------------------

--
-- Table structure for table `burrito`
--

DROP TABLE IF EXISTS `burrito`;
CREATE TABLE IF NOT EXISTS `burrito` (
  `formaat` varchar(500) NOT NULL,
  `saus` varchar(500) NOT NULL,
  `bonen` varchar(500) NOT NULL,
  `rijst` varchar(500) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burrito`
--

INSERT INTO `burrito` (`formaat`, `saus`, `bonen`, `rijst`, `id`) VALUES
('20 centimeter', 'Salsa Verde', 'Zwarte Bonen', 'Witte Rijst', 6),
('25 centimeter', 'Salsa Crudo', 'Kidney Bonen', 'Witte Rijst', 5),
('30 centimeter', 'Salsa Salsa Roja', 'Zwarte Bonen', 'Zwarte Rijst', 7),
('30 centimeter', 'Salsa Verde', 'Zwarte Bonen', 'Witte Rijst', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
