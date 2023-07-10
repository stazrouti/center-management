-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2023 at 10:48 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneebo`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnes`
--

DROP TABLE IF EXISTS `abonnes`;
CREATE TABLE IF NOT EXISTS `abonnes` (
  `Annee` int NOT NULL,
  `Nombre` int NOT NULL,
  `Categorie` varchar(25) NOT NULL,
  `Code1` int NOT NULL,
  KEY `Categorie` (`Categorie`),
  KEY `Code1` (`Code1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abonnes`
--

INSERT INTO `abonnes` (`Annee`, `Nombre`, `Categorie`, `Code1`) VALUES
(2010, 4, 'Administration', 756318),
(2011, 1, 'Industrielle', 756318),
(2013, 4, 'Particulier', 756318),
(2014, 2, 'Industrielle', 756318),
(2015, 7, 'Administration', 756318),
(2016, 8, 'Particulier', 756318),
(2017, 6, 'Borne_Fontaine\r\n', 756318),
(2020, 2, 'Industrielle', 756318),
(2020, 3, 'Borne_Fontaine', 756318);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `Matricule` varchar(30) NOT NULL,
  `CIN` varchar(20) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Echelle` int DEFAULT NULL,
  `Echelon` int DEFAULT NULL,
  `College` varchar(3) DEFAULT NULL,
  `Sexe` varchar(10) DEFAULT NULL,
  `Affiliation` varchar(20) DEFAULT NULL,
  `Immatriculation` varchar(20) DEFAULT NULL,
  `Situation_Familiale` varchar(15) DEFAULT NULL,
  `Filiere` varchar(20) DEFAULT NULL,
  `Tele` int DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Code1` int NOT NULL,
  PRIMARY KEY (`Matricule`),
  UNIQUE KEY `Matricule` (`Matricule`),
  UNIQUE KEY `CIN` (`CIN`),
  KEY `Code1` (`Code1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`Matricule`, `CIN`, `Nom`, `Prenom`, `Date_Naissance`, `Echelle`, `Echelon`, `College`, `Sexe`, `Affiliation`, `Immatriculation`, `Situation_Familiale`, `Filiere`, `Tele`, `Email`, `Code1`) VALUES
('a121432432', 'u87638754', 'Karimi', 'Karim', '2023-03-14', 11, 11, 'M', 'Homme', 'test', 'test', 'Celebataire', 'A', 676446787, 'test@gmail.com', 756318),
('a121132432', 'u87638354', 'Nabili', 'Nabil', '2023-03-14', 11, 11, 'M', 'Homme', 'test', 'test', 'celebataire', 'A', 676446787, 'test@gmail.com', 756318),
('a12132432', 'u876098354', 'Nabili', 'Nabil', '2023-03-14', 11, 11, 'C', 'Homme', 'test', 'test', 'celebataire', 'T', 676446787, 'test@gmail.com', 756318),
('b121132432', 'u87609354', 'Karimi', 'Nabila', '2023-03-14', 11, 11, 'M', 'Femme', 'test', 'test', 'celebataire', 'A', 676446787, 'test@gmail.com', 756318),
('c12132432', 'u876098644', 'Nabili', 'Nabil', '2023-03-14', 11, 11, 'C', 'Femme', 'test', 'test', 'celebataire', 'T', 676446787, 'test@gmail.com', 756318),
('d121132562', 'u87234354', 'Nabili', 'Nabil', '2023-03-14', 11, 11, 'M', 'Homme', 'test', 'test', 'celebataire', 'A', 676446787, 'test@gmail.com', 756318),
('e12132409', 'u876128354', 'Nabili', 'Nabil', '2023-03-14', 11, 11, 'C', 'Homme', 'test', 'test', 'celebataire', 'T', 676446787, 'test@gmail.com', 756318),
('u5678d', 'u311451', 'Ben', 'Khalid', '2023-12-31', 11, 11, 'M', 'Homme', 'qweqe', 'q12536', 'Marier', 'dd', 7624636, 'khalid@gmail.com', 756318),
('u5679', 'u3131452', 'hamidi', 'hamid', '2023-12-08', 11, 11, 'E', 'Femme', 'qweqe', 'immatr', 'Marier', 'dd', 7624636, 'salah@gmail.com', 756318),
('12345', 'u6533734', 'hakimi', 'hakim', '1996-02-19', 10, 10, 'M', 'Homme', 'a1', 's123', 'Celebataire', 'de', 657654358, 'hakimi@gmail.com', 756318);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `Categorie`) VALUES
(1, 'Particulier'),
(2, 'Industrielle'),
(3, 'Administration'),
(4, 'Borne_Fontaine');

-- --------------------------------------------------------

--
-- Table structure for table `centre`
--

DROP TABLE IF EXISTS `centre`;
CREATE TABLE IF NOT EXISTS `centre` (
  `Code1` int NOT NULL,
  `Code2` int DEFAULT NULL,
  `Libelle` varchar(30) DEFAULT NULL,
  `Type` varchar(30) DEFAULT NULL,
  `X` float DEFAULT NULL,
  `Y` float DEFAULT NULL,
  PRIMARY KEY (`Code1`),
  UNIQUE KEY `Code1` (`Code1`),
  UNIQUE KEY `Code2` (`Code2`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `centre`
--

INSERT INTO `centre` (`Code1`, `Code2`, `Libelle`, `Type`, `X`, `Y`) VALUES
(756318, 2, 'Test', 'U', 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `consommation`
--

DROP TABLE IF EXISTS `consommation`;
CREATE TABLE IF NOT EXISTS `consommation` (
  `Annee` int NOT NULL,
  `Volume` float DEFAULT NULL,
  `Categorie` varchar(25) NOT NULL,
  `Code1` int NOT NULL,
  KEY `Categorie` (`Categorie`),
  KEY `Code1` (`Code1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `consommation`
--

INSERT INTO `consommation` (`Annee`, `Volume`, `Categorie`, `Code1`) VALUES
(2010, 4, 'Administration', 756318),
(2011, 5, 'Industrielle', 756318),
(2013, 6, 'Particulier', 756318),
(2014, 6, 'Particulier', 756318);

-- --------------------------------------------------------

--
-- Table structure for table `energie`
--

DROP TABLE IF EXISTS `energie`;
CREATE TABLE IF NOT EXISTS `energie` (
  `Contrat` int NOT NULL,
  `Type_Contrat` varchar(5) NOT NULL,
  `Code1` int NOT NULL,
  PRIMARY KEY (`Contrat`),
  KEY `Code1` (`Code1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `energie`
--

INSERT INTO `energie` (`Contrat`, `Type_Contrat`, `Code1`) VALUES
(123, 'MT', 756318),
(132, 'MT', 756318),
(133, 'MT', 756318),
(313, 'MT', 756318),
(145, 'BT', 756318),
(653, 'BT', 756318),
(323, 'MT', 756318);

-- --------------------------------------------------------

--
-- Table structure for table `enfants`
--

DROP TABLE IF EXISTS `enfants`;
CREATE TABLE IF NOT EXISTS `enfants` (
  `Nom` varchar(30) DEFAULT NULL,
  `Prenom` varchar(30) DEFAULT NULL,
  `Date_Naissance` date DEFAULT NULL,
  `Sexe` varchar(10) DEFAULT NULL,
  `Matricule` varchar(30) NOT NULL,
  KEY `Matricule` (`Matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enfants`
--

INSERT INTO `enfants` (`Nom`, `Prenom`, `Date_Naissance`, `Sexe`, `Matricule`) VALUES
('Karimi', 'Said', '2002-04-12', 'M', 'a121432432'),
('karimi', 'karim', '2023-05-16', 'M', 'a121432432'),
('Hilal', 'Karim', '2002-04-12', 'M', 'b121132432'),
('Hilal', 'Nabil', '2000-03-01', 'M', 'b121132432'),
('Hilal', 'Amin', '2010-04-12', 'M', 'b121132432'),
('Nabili', 'Hafida', '1989-04-11', 'F', 'a121132432'),
('Nabili', 'Nabil', '1999-03-28', 'M', 'a121132432');

-- --------------------------------------------------------

--
-- Table structure for table `indexr`
--

DROP TABLE IF EXISTS `indexr`;
CREATE TABLE IF NOT EXISTS `indexr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `IndexR` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `indexr`
--

INSERT INTO `indexr` (`id`, `IndexR`) VALUES
(1, 'Plein'),
(2, 'Creuse'),
(3, 'Pointe'),
(4, 'Reactive');

-- --------------------------------------------------------

--
-- Table structure for table `marches`
--

DROP TABLE IF EXISTS `marches`;
CREATE TABLE IF NOT EXISTS `marches` (
  `N_Marches` int NOT NULL,
  `Intitule` varchar(30) NOT NULL,
  `Genre` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Date_Os` date NOT NULL,
  `Date_Reception` date NOT NULL,
  `Code1` int NOT NULL,
  PRIMARY KEY (`N_Marches`),
  KEY `Code1` (`Code1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `marches`
--

INSERT INTO `marches` (`N_Marches`, `Intitule`, `Genre`, `Type`, `Date_Os`, `Date_Reception`, `Code1`) VALUES
(1, 'test1', 'Eau Potable', 'Simple', '2015-03-09', '2016-03-08', 756318),
(2, 'test2', 'Assainissement', 'Cadre', '2023-05-01', '2023-05-11', 756318),
(3, 'test4', 'Eau Potable', 'Simple', '2017-03-09', '2018-03-08', 756318),
(4, 'test5', 'Eau Potable', 'Cadre', '2018-03-09', '2018-05-08', 756318),
(5, 'test6', 'Eau Potable', 'Simple', '2015-03-09', '2019-03-08', 756318),
(6, 'test7', 'Assainissement', 'Cadre', '2010-03-09', '2015-03-08', 756318),
(7, 'test8', 'Eau Potable', 'Simple', '2020-03-09', '2021-03-08', 756318);

-- --------------------------------------------------------

--
-- Table structure for table `releveenergie`
--

DROP TABLE IF EXISTS `releveenergie`;
CREATE TABLE IF NOT EXISTS `releveenergie` (
  `Date_Releve` date NOT NULL,
  `IndexR` varchar(15) NOT NULL,
  `Contrat` int NOT NULL,
  `Code1` int NOT NULL,
  KEY `IndexR` (`IndexR`),
  KEY `Contrat` (`Contrat`),
  KEY `Code1` (`Code1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `releveenergie`
--

INSERT INTO `releveenergie` (`Date_Releve`, `IndexR`, `Contrat`, `Code1`) VALUES
('2015-03-05', 'Plein', 132, 756318),
('2015-03-05', 'Creuse', 313, 756318),
('2015-03-05', 'Reactive', 145, 756318),
('2023-05-25', 'Plein', 167, 756318),
('2015-03-05', 'Plein', 243, 756318),
('2020-06-05', 'Creuse', 123, 756318);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
