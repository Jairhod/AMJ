-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 06:48 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
  `id` int(11) NOT NULL,
  `nomArtiste` varchar(255) NOT NULL,
  `nomGenre` varchar(255) NOT NULL,
  `cheminImagePrincipale` varchar(1000) NOT NULL,
  `descriptionArtiste` text NOT NULL,
  `artistesLies` varchar(100) NOT NULL,
  `dateModification` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artistes`
--

INSERT INTO `artistes` (`id`, `nomArtiste`, `nomGenre`, `cheminImagePrincipale`, `descriptionArtiste`, `artistesLies`, `dateModification`) VALUES
(3, 'BLACKOUT BAND', 'SOUL-FUNK-BLUES', 'SoulQuartet1.jpg', 'C’est sur les scènes et clubs du sud de la France que les quatre membres du groupe BACKOUT se sont rencontrés afin de rendre hommage au plus grandes voix féminines de la SOUL et du R&B.\r\n\r\nEmile MÉLENCHON (guitare et arrangements), Arnaud PACINI (basse) et Marc BELLION (batterie), Andréa CAPARROS (Piano et choeurs) venant tout juste d’intégrer la formation, accompagnent Nicole LISE (chant), incarnant à elle seule toutes les qualités nécessaires à l’interprétation de ce répertoire pour nous faire voyager dans le temps.\r\n\r\nD’ARETHA FRANKLIN à BEYONCE en passant par SHAKA KHAN, ERYKA BADU et bien d’autres, le BLACKOUT Band vous fera partager leur énergie communicative.', 'soul', '2017-04-02 18:44:42'),
(4, 'IGUANA VAN', 'POP-ROCK-ACTU', 'IguanaVan.jpg', 'Iguana Van est un groupe marseillais fondé en 2009 par John, Max et Mathieu, amis d’enfance. Apres deux EP auto-produits, le groupe remporte l’edition 2012 du tremplin Massilia Rock qui lui permet d’être programmé sur la scène du Immecke Rock Festival en Allemagne.\r\n \r\nIguana Van distille une musique pop mélodieuse enveloppée de groove, qui prend toute sa dimension en live grâce à un jeu de scène énergique. En 2013, la formation remporte le tremplin Sounds of Marseille et joue en première partie d’Electric Guest.\r\n \r\n2014 voit l’arrivée de Dorian au poste de batteur. Iguana Van reprend le chemin des studios et enregistre un nouvel E.P, Heroes, Shadows, sous le label Two Records, accompagné de Christophe Moura à la trompette et John Massa au saxophone.', 'pop', '2017-04-02 18:21:39'),
(5, 'QUARTIERS NORD', 'POP-ROCK-ACTU', 'balti-social-club.png', 'Fort de ses 16 albums bigarrés, de sa fabuleuse tétralogie d’opérettes-rock-­marseillaises, de ses revues loufoques et autres comédies musicales et sociales, QUARTIERS NORD, groupe ô combien atypique qui fêtera bientôt ses 40 ans d’existence, fait désormais ­partie du patrimoine massaliote.\r\nFaisant plus que jamais le lien entre ego-histoire et le contexte qui l’a vu naître,\r\nil ­poursuit son œuvre musicale inclassable en nous conviant au BALÈTI SOCIAL CLUB, un concept novateur à la fois festif et déjanté, à la fibre sociale ­revendiquée et aux influences « ­world  protéiformes ». Ce joyeux maelström ­musical se ­conjuguera à l’envi dans un esprit convivial et interactif, avec des invités-­surprise issus de tous horizons qui apporteront à chaque prestation une touche unique.', 'pop', '2017-04-01 04:41:14'),
(6, 'JOHN MASSA TRIPBAND', 'SOUL-FUNK-BLUES', '38364.jpg', 'Le groupe du saxophoniste John MASSA est basé à Marseille, ville native de ses membres, qui représente un véritable laboratoire de rencontre musicales.\r\n\r\nLes compositions du saxophoniste, explorantes courants du jazz, du groove et de la World Music sont servies par des musiciens de très fortes personnalités qui viennent d’univers musicaux riches et variés.', 'soul', '2017-04-02 18:23:43'),
(7, 'THE GODFATHERS', 'SOUL-FUNK-BLUES', 'GodfathersSimplicity.jpg', 'Emmené par  Jean GOMEZ, leader charismatique et chanteur dont la voix évoque celle des grands artistes de la SOUL MUSIC et du RHTHM''N''BLUES,\r\nLes Godfathers, restituent avec brio, fidélité et  authenticité un grand nombre de standards puisé dans le répertoire des monstres sacrés de la musique afro-américaine des années 60 et 70.', 'soul', '2017-04-02 18:34:15');

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin.mail.me', '$2y$10$eLxVr0xe1W6T8xAEitRvJ.8JkTDgjTU.iyn0UD.R40GT2jeXwjVFy', 'admin'),
(2, 'ben', 'ben@cool.dude', '$2y$10$2cUjw/W5xJDNnrhLEWgJyeaoOVTElK2FNrg3B/IAMXpJyqVU5h1B.', 'admin'),
(3, 'Bob123', 'bob@123.com', '$2y$10$nMPl5Fxyz9YZjw5ut9hr/uu6H94ESHCZocr.MvcHLCCrNsadEJZJq', 'admin');

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
