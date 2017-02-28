-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 03:58 PM
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
  `id` int(11) NOT NULL,
  `nomArtiste` varchar(255) NOT NULL,
  `cheminImagePrincipale` varchar(1000) NOT NULL,
  `descriptionArtiste` text NOT NULL,
  `artistesLies` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artistes`
--

INSERT INTO `artistes` (`id`, `nomArtiste`, `cheminImagePrincipale`, `descriptionArtiste`, `artistesLies`) VALUES
(1, 'Quel classe MySQL !', 'assets/img/melons.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dicta distinctio voluptates eaque libero ullam inventore totam vero maxime accusantium doloribus voluptatibus, amet ipsum in aperiam rem iusto debitis quasi.', '6'),
(2, 'Ho non c''est trop dur !', 'assets/img/melons.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dicta distinctio voluptates eaque libero ullam inventore totam vero maxime accusantium doloribus voluptatibus, amet ipsum in aperiam rem iusto debitis quasi.', '9');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  `cheminAudio` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
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
  `id` int(11) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  `nomGenre` enum('Festivals','Soul-Funk-Blues','Tribute','Duo-Trio-Quartet','Dancefloor','Strolling','Orchestres','Jazz','World Music','Magie') NOT NULL
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
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `niveau` int(11) NOT NULL,
  `cleValidation` varchar(255) NOT NULL,
  `dateCreation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `password`, `niveau`, `cleValidation`, `dateCreation`) VALUES
(1, '1536@mail.me', '$2y$10$u01pwCMMlAnufL8vhqeCH.bNmERod.VNu0d/RgLNJ04tXd1/SfoXC', 8, '0', '0000-00-00 00:00:00'),
(2, 'test1537@mail.me', '$2y$10$DPUL4SjuJ5o.sr7xXuEiXupf2pNwi7mT81CZnodhAFkL0p1Z8SFiS', 2, '0', '0000-00-00 00:00:00'),
(3, 'test1548@mail.me', '$2y$10$fEgBYqAooRz0DushGegMpOJ7HfoIMmrQaXqZuqmeEj8fLkEWiu./2', 2, '0', '0000-00-00 00:00:00'),
(4, 'test1601@mail.me', '$2y$10$xvINWMwhFsvv0yNGnf1RL.8Z27mrDM/0YlawQveSRH4JsuKb9Yebm', 2, '0', '0000-00-00 00:00:00'),
(5, '1605@mail.me', '$2y$10$IavpLH8rFPSwMZMJLoftOeTC83cKVLIfpG/l5c954DVm2JBsPmf6a', 2, '0', '0000-00-00 00:00:00'),
(6, 'test1607@mail.me', '$2y$10$Z7WIs95vVl9AmYdS134mQu6Z.F4/q.HZG0W9kWGkq5MOkzazxCAhq', 2, '0', '0000-00-00 00:00:00'),
(7, 'test1609@mail.me', '$2y$10$91sUHAVXIRHDVlS5Wyj1m.KV9sl3OoQAQs3ILnJCtJIaWGQrWH3Ee', 2, '0', '0000-00-00 00:00:00'),
(8, 'test1613@mail.me', '$2y$10$lUluPCOEZovjWGYZojW8h.w4PtVGR7E7t5gpJ4G17KwRASwlFRh3.', 2, '0', '0000-00-00 00:00:00'),
(9, 'test1215@mail.me', '$2y$10$yQmso7/YXqs3FHGLP5op8e2k9JHbDVT2btPRTmi9U96hZGuKv8Dve', 2, '0', '0000-00-00 00:00:00'),
(10, 'test1438@mail.me', '$2y$10$S/gDPFW9Kk2SfizbJI7qW.U.bxyKukC4WyR.2jq4.dnfNsJu7v7p6', 0, '589', '2017-02-11 14:39:05'),
(11, 'test1444@mail.me', '$2y$10$3zQj2DhYgmC5Z66EHGdYpeFyKA7kIQea24kYd2T6S/Y7ecpgMnrQe', 0, '589f15511b38e', '2017-02-11 14:44:49');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
