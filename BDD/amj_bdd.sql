-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 05:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amj_bdd`
--
CREATE DATABASE IF NOT EXISTS `amj_bdd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `amj_bdd`;

-- --------------------------------------------------------

--
-- Table structure for table `artistes`
--

DROP TABLE IF EXISTS `artistes`;
CREATE TABLE `artistes` (
  `idArtiste` int(11) NOT NULL,
  `nomArtiste` varchar(255) NOT NULL,
  `cheminImagePrincipale` varchar(1000) NOT NULL,
  `descriptionArtiste` text NOT NULL,
  `artistesLies` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artistes`
--

INSERT INTO `artistes` (`idArtiste`, `nomArtiste`, `cheminImagePrincipale`, `descriptionArtiste`, `artistesLies`) VALUES
(3, 'Blackout Band', 'assets/media/img/BLACKOUT-BAND-01.jpg', 'C’est sur les scènes et clubs du sud de la France que les quatre membres du groupe BACKOUT se sont rencontrés afin de rendre hommage au plus grandes voix féminines de la SOUL et du R&B.\r\n\r\nEmile MÉLENCHON (guitare et arrangements), Arnaud PACINI (basse) et Marc BELLION (batterie), Andréa CAPARROS (Piano et choeurs) venant tout juste d’intégrer la formation, accompagnent Nicole LISE (chant), incarnant à elle seule toutes les qualités nécessaires à l’interprétation de ce répertoire pour nous faire voyager dans le temps.\r\n\r\nD’ARETHA FRANKLIN à BEYONCE en passant par SHAKA KHAN, ERYKA BADU et bien d’autres, le BLACKOUT Band vous fera partager leur énergie communicative.', 'soul');

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

DROP TABLE IF EXISTS `audios`;
CREATE TABLE `audios` (
  `id` int(11) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  `cheminAudio` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `idGenre` int(11) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  `nomGenre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`idGenre`, `idArtiste`, `nomGenre`) VALUES
(1, 3, 'Soul-Funk-Blues');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  `cheminImage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `niveau` int(11) NOT NULL,
  `cleValidation` varchar(255) NOT NULL,
  `dateCreation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `pseudo`, `password`, `niveau`, `cleValidation`, `dateCreation`) VALUES
(1, '1536@mail.me', '', '$2y$10$u01pwCMMlAnufL8vhqeCH.bNmERod.VNu0d/RgLNJ04tXd1/SfoXC', 8, '0', '0000-00-00 00:00:00'),
(11, 'test1444@mail.me', '', '$2y$10$3zQj2DhYgmC5Z66EHGdYpeFyKA7kIQea24kYd2T6S/Y7ecpgMnrQe', 0, '589f15511b38e', '2017-02-11 14:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  `cheminVideo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `idArtiste`, `cheminVideo`) VALUES
(1, 3, 'https://youtu.be/Fz3DDoNq5Wk'),
(2, 3, 'https://youtu.be/Ffo4ZxWfEGs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`idArtiste`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`idGenre`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artistes`
--
ALTER TABLE `artistes`
  MODIFY `idArtiste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `idGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
