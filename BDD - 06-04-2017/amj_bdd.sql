-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 01:07 AM
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
  `imagePrincipale` varchar(1000) NOT NULL,
  `descriptionArtiste` text NOT NULL,
  `artistesLies` varchar(100) NOT NULL,
  `dateModification` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artistes`
--

INSERT INTO `artistes` (`id`, `nomArtiste`, `nomGenre`, `imagePrincipale`, `descriptionArtiste`, `artistesLies`, `dateModification`) VALUES
(40, 'BLACKOUT BAND', 'SOUL-FUNK-BLUES', '201704051110581560212479.jpg', 'C’est sur les scènes et clubs du sud de la France que les quatre membres du groupe BACKOUT se sont rencontrés afin de rendre hommage au plus grandes voix féminines de la SOUL et du R&B. Emile MÉLENCHON (guitare et arrangements), Arnaud PACINI (basse) et Marc BELLION (batterie), Andréa CAPARROS (Piano et choeurs) venant tout juste d’intégrer la formation, accompagnent Nicole LISE (chant), incarnant à elle seule toutes les qualités nécessaires à l’interprétation de ce répertoire pour nous faire voyager dans le temps. D’ARETHA FRANKLIN à BEYONCE en passant par SHAKA KHAN, ERYKA BADU et bien d’autres, le BLACKOUT Band vous fera partager leur énergie communicative.', 'Soul', '2017-04-05 11:10:58'),
(41, 'IGUANA VAN', 'POP-ROCK-ACTU', '201704051112031884424895.jpg', 'Iguana Van est un groupe marseillais fondé en 2009 par John, Max et Mathieu, amis d’enfance. Apres deux EP auto-produits, le groupe remporte l’edition 2012 du tremplin Massilia Rock qui lui permet d’être programmé sur la scène du Immecke Rock Festival en Allemagne. Iguana Van distille une musique pop mélodieuse enveloppée de groove, qui prend toute sa dimension en live grâce à un jeu de scène énergique. En 2013, la formation remporte le tremplin Sounds of Marseille et joue en première partie d’Electric Guest. 2014 voit l’arrivée de Dorian au poste de batteur. Iguana Van reprend le chemin des studios et enregistre un nouvel E.P, Heroes, Shadows, sous le label Two Records, accompagné de Christophe Moura à la trompette et John Massa au saxophone.', 'Pop', '2017-04-05 20:06:37'),
(42, 'John Massa Tripband', 'SOUL-FUNK-BLUES', '20170404021346190797701.png', 'Le groupe du saxophoniste John MASSA est basé à Marseille, ville native de ses membres, qui représente un véritable laboratoire de rencontre musicales. Les compositions du saxophoniste, explorantes courants du jazz, du groove et de la World Music sont servies par des musiciens de très fortes personnalités qui viennent d’univers musicaux riches et variés.', 'Soul', '2017-04-04 02:13:46'),
(43, 'QUARTIERS NORD', 'POP-ROCK-ACTU', '201704040217582144820669.jpg', 'Fort de ses 16 albums bigarrés, de sa fabuleuse tétralogie d’opérettes-rock-­marseillaises, de ses revues loufoques et autres comédies musicales et sociales, QUARTIERS NORD, groupe ô combien atypique qui fêtera bientôt ses 40 ans d’existence, fait désormais ­partie du patrimoine massaliote. Faisant plus que jamais le lien entre ego-histoire et le contexte qui l’a vu naître, il ­poursuit son œuvre musicale inclassable en nous conviant au BALÈTI SOCIAL CLUB, un concept novateur à la fois festif et déjanté, à la fibre sociale ­revendiquée et aux influences « ­world protéiformes ». Ce joyeux maelström ­musical se ­conjuguera à l’envi dans un esprit convivial et interactif, avec des invités-­surprise issus de tous horizons qui apporteront à chaque prestation une touche unique.', 'Pop', '2017-04-04 02:17:57'),
(44, 'THE GODFATHERS', 'SOUL-FUNK-BLUES', '20170404022022588144992.jpg', 'Emmené par Jean GOMEZ, leader charismatique et chanteur dont la voix évoque celle des grands artistes de la SOUL MUSIC et du RHTHM''N''BLUES, Les Godfathers, restituent avec brio, fidélité et authenticité un grand nombre de standards puisé dans le répertoire des monstres sacrés de la musique afro-américaine des années 60 et 70.', 'Soul', '2017-04-04 02:20:22'),
(49, 'Test14:00', 'cool', '20170405140133743758018.jpeg', 'bla bla bla', 'soul', '2017-04-05 14:01:33'),
(52, 'Test 16:46', 'cool', '20170405164721372252413.jpeg', 'des trucs', 'Pop', '2017-04-05 16:47:21'),
(54, 'Test 19:21', 'Cool', '201704051922422139902958.png', 'Des trucs super sympas', 'Pop', '2017-04-05 19:23:24'),
(56, 'Test 00:40', 'Jazz', '201704060041101836635395.jpg', 'lmkijlmkjdsf sdqmlkfjsqf kljlksqdjlkfjsq sdklqjflkjlkjlkjlkjfdqs lksdqjf mj   dskqlfjlmfkjqlkfjlkjkl  fslqkdjflkjf ldsqlkfjqm lkfj', 'Cool', '2017-04-06 00:41:10');

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

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `idArtiste`, `cheminImage`) VALUES
(63, 40, '201704040205061586864673.jpg'),
(64, 40, '201704040205061654810263.jpg'),
(65, 40, '201704040205061939165078.jpg'),
(66, 40, '2017040402050657466130.jpg'),
(67, 40, '201704040205062087827908.jpg'),
(68, 40, '201704040205061962637928.jpg'),
(69, 40, '20170404020506704296452.jpg'),
(70, 40, '20170404020506482905637.jpg'),
(71, 40, '20170404020506286123197.jpg'),
(72, 40, '201704040205071954017188.jpg'),
(73, 40, '201704040205071940392213.jpg'),
(74, 40, '20170404020507217476270.jpg'),
(75, 40, '201704040205071631274635.jpg'),
(76, 40, '20170404020507134660977.jpg'),
(77, 40, '20170404020507187156327.jpg'),
(78, 40, '20170404020507400400629.jpeg'),
(79, 40, '201704040205071373730467.jpeg'),
(80, 40, '201704040205071999449041.jpeg'),
(81, 40, '201704040205071094986970.jpeg'),
(82, 40, '201704040205071526597577.jpeg'),
(83, 40, '201704040205071625556217.jpeg'),
(84, 40, '20170404020507874588940.jpeg'),
(85, 40, '20170404020507235966566.jpg'),
(86, 40, '201704040205071682790129.jpeg'),
(87, 41, '20170404020926581546663.jpg'),
(88, 41, '20170404020926893183808.jpg'),
(89, 41, '2017040402092638510191.jpg'),
(90, 41, '201704040209261892731442.jpg'),
(91, 41, '201704040209261467614224.jpg'),
(92, 41, '201704040209261378531385.jpg'),
(93, 41, '201704040209262124960066.jpg'),
(94, 41, '201704040209261951054376.jpg'),
(95, 41, '2017040402092681308671.jpg'),
(96, 41, '20170404020926783702494.jpg'),
(97, 41, '201704040209261121279380.jpg'),
(98, 42, '20170404021346855229278.jpg'),
(99, 42, '201704040213462117299969.png'),
(100, 42, '20170404021346187105678.png'),
(101, 42, '201704040213461831776267.png'),
(102, 42, '201704040213461558012379.jpg'),
(103, 42, '201704040213461113582635.png'),
(104, 43, '201704040217581630117208.jpg'),
(105, 43, '201704040217581660954179.png'),
(106, 43, '20170404021758704256522.jpg'),
(107, 43, '201704040217581984123032.jpg'),
(108, 43, '201704040217581325644879.jpg'),
(109, 43, '20170404021758485392404.jpg'),
(110, 43, '20170404021758681293007.jpg'),
(111, 43, '201704040217581786400714.jpg'),
(112, 43, '2017040402175896481604.jpg'),
(113, 43, '20170404021758884165769.jpg'),
(114, 43, '20170404021758518025739.jpg'),
(115, 43, '201704040217581323157165.jpg'),
(116, 43, '201704040217581786164794.jpg'),
(117, 43, '201704040217581296205560.jpg'),
(118, 43, '201704040217581966596192.jpg'),
(119, 43, '20170404021758263690460.jpg'),
(120, 43, '201704040217581813688229.jpg'),
(121, 43, '201704040217581274209212.jpg'),
(122, 43, '201704040217581526431912.jpg'),
(123, 43, '2017040402175833801463.jpg'),
(124, 44, '20170404022022426434938.jpg'),
(125, 44, '201704040220221862043269.jpg'),
(126, 44, '201704040220221743781553.jpg'),
(127, 44, '20170404022022813962855.jpg'),
(128, 44, '20170404022022253433496.jpg'),
(129, 44, '201704040220232013508378.jpg'),
(130, 44, '20170404022023856977945.jpg'),
(131, 44, '20170404022023266681402.jpg'),
(132, 44, '2017040402202364416553.jpg'),
(133, 44, '20170404022023415146993.jpg'),
(150, 49, '20170405140133491924519.jpg'),
(152, 49, '20170405140133665370455.jpg'),
(153, 49, '20170405140133447777504.jpeg'),
(169, 52, '20170405164721985908432.jpeg'),
(170, 52, '20170405164721380209979.jpg'),
(171, 52, '20170405164721731836409.jpg'),
(173, 52, '20170405173011193186036.jpg'),
(174, 52, '20170405173032452660697.jpeg'),
(175, 52, '20170405173032171170346.jpg'),
(176, 52, '20170405173032915021684.jpeg'),
(191, 52, '20170405183422667866503.jpg'),
(192, 52, '20170405183422537125358.jpg'),
(193, 52, '201704051834221142159641.jpg'),
(194, 52, '201704051834221349659898.jpg'),
(203, 54, '20170405192242552545142.png'),
(204, 54, '20170405192242116424327.jpg'),
(205, 54, '201704051922421122190093.png'),
(206, 54, '201704051922421826797067.png'),
(207, 54, '201704051922421569645651.jpg'),
(208, 54, '2017040519224236123573.png'),
(209, 54, '201704051922422099874436.jpg'),
(210, 54, '20170405192242389206676.jpg'),
(211, 54, '20170405192243940198049.jpg'),
(212, 54, '20170405192243574559556.jpg'),
(213, 54, '201704051922431661758626.jpg'),
(215, 54, '201704051923522049766934.jpg'),
(216, 54, '20170405192352502690998.jpg'),
(240, 56, '201704060041101342254888.jpg'),
(241, 56, '201704060041101078840569.jpg'),
(242, 56, '201704060041101807950219.jpg'),
(243, 56, '201704060041101289355640.jpg'),
(244, 56, '201704060041102019835344.jpg'),
(245, 56, '20170406004111497688490.jpg'),
(246, 56, '20170406004111280827184.jpg'),
(247, 56, '20170406004111990631964.jpg'),
(248, 56, '20170406004111475362856.jpg'),
(249, 56, '20170406004111364518597.jpg'),
(250, 56, '201704060041111039914672.jpg'),
(251, 56, '2017040600411115197885.jpg'),
(252, 56, '201704060041121459697183.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
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
