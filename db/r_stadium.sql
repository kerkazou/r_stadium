-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 juin 2022 à 21:06
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `r_stadium`
--

-- --------------------------------------------------------

--
-- Structure de la table `booken`
--

CREATE TABLE `booken` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `stadium` int(11) NOT NULL,
  `date` date NOT NULL,
  `hour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `booken`
--

INSERT INTO `booken` (`id`, `user`, `stadium`, `date`, `hour`) VALUES
(11, 7, 34, '2022-06-23', '6:00PM'),
(12, 17, 34, '2022-06-23', '8:00PM'),
(13, 18, 36, '2022-06-30', '8:00AM');

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(28) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(1, 'Casablanca'),
(2, 'El Kelaa des Srarhna'),
(3, 'Fès'),
(4, 'Tangier'),
(5, 'Marrakech'),
(6, 'Sale'),
(7, 'Rabat'),
(8, 'Meknès'),
(9, 'Kenitra'),
(10, 'Agadir'),
(11, 'Oujda-Angad'),
(12, 'Tétouan'),
(13, 'Taourirt'),
(14, 'Temara'),
(15, 'Safi'),
(16, 'Laâyoune'),
(17, 'Mohammedia'),
(18, 'Kouribga'),
(19, 'Béni Mellal'),
(20, 'El Jadid'),
(21, 'Ait Melloul'),
(22, 'Nador'),
(23, 'Taza'),
(24, 'Settat'),
(25, 'Barrechid'),
(26, 'Al Khmissat'),
(27, 'Inezgane'),
(28, 'Ksar El Kebir'),
(29, 'Larache'),
(30, 'Guelmim'),
(31, 'Khénifra'),
(32, 'Berkane'),
(33, 'Bouskoura'),
(34, 'Al Fqih Ben Çalah'),
(35, 'Oued Zem'),
(36, 'Sidi Slimane'),
(37, 'Errachidia'),
(38, 'Guercif'),
(39, 'Oulad Teïma'),
(40, 'Ad Dakhla'),
(41, 'Ben Guerir'),
(42, 'Wislane'),
(43, 'Tiflet'),
(44, 'Lqoliaa'),
(45, 'Taroudannt'),
(46, 'Sefrou'),
(47, 'Essaouira'),
(48, 'Fnidq'),
(49, 'Ait Ali'),
(50, 'Sidi Qacem'),
(51, 'Tiznit'),
(52, 'Moulay Abdallah'),
(53, 'Tan-Tan'),
(54, 'Warzat'),
(55, 'Youssoufia'),
(56, 'Sa’ada'),
(57, 'Martil'),
(58, 'Aïn Harrouda'),
(59, 'Skhirate'),
(60, 'Ouezzane'),
(61, 'Sidi Yahya Zaer'),
(62, 'Benslimane'),
(63, 'Al Hoceïma'),
(64, 'Beni Enzar'),
(65, 'M’diq'),
(66, 'Sidi Bennour'),
(67, 'Midalt'),
(68, 'Azrou'),
(69, 'Ain El Aouda'),
(70, 'Beni Yakhlef'),
(71, 'Semara'),
(72, 'Ad Darwa'),
(73, 'Al Aaroui'),
(74, 'Qasbat Tadla'),
(75, 'Boujad'),
(76, 'Jerada'),
(77, 'Chefchaouene'),
(78, 'Mrirt'),
(79, 'Sidi Mohamed Lahmar'),
(80, 'Tineghir'),
(81, 'El Aïoun'),
(82, 'Azemmour'),
(83, 'Temsia'),
(84, 'Zoumi'),
(85, 'Laouamra'),
(86, 'Zagora'),
(87, 'Ait Ourir'),
(88, 'Sidi Bibi'),
(89, 'Aziylal'),
(90, 'Sidi Yahia El Gharb'),
(91, 'Biougra'),
(92, 'Taounate'),
(93, 'Bouznika'),
(94, 'Aourir'),
(95, 'Zaïo'),
(96, 'Aguelmous'),
(97, 'El Hajeb'),
(98, 'Mnasra'),
(99, 'Mediouna'),
(100, 'Zeghanghane'),
(101, 'Imzouren'),
(102, 'Loudaya'),
(103, 'Oulad Zemam'),
(104, 'Bou Ahmed'),
(105, 'Tit Mellil'),
(106, 'Arbaoua'),
(107, 'Douar Oulad Hssine'),
(108, 'Bahharet Oulad Ayyad'),
(109, 'Mechraa Bel Ksiri'),
(110, 'Mograne'),
(111, 'Dar Ould Zidouh'),
(112, 'Asilah'),
(113, 'Demnat'),
(114, 'Lalla Mimouna'),
(115, 'Fritissa'),
(116, 'Arfoud'),
(117, 'Tameslouht'),
(118, 'Bou Arfa'),
(119, 'Sidi Smai’il'),
(120, 'Taza'),
(121, 'Souk et Tnine Jorf el Mellah'),
(122, 'Mehdya'),
(123, 'Oulad Hammou'),
(124, 'Douar Oulad Aj-jabri'),
(125, 'Aïn Taoujdat'),
(126, 'Dar Bel Hamri'),
(127, 'Chichaoua'),
(128, 'Tahla'),
(129, 'Bellaa'),
(130, 'Oulad Yaïch'),
(131, 'Ksebia'),
(132, 'Tamorot'),
(133, 'Moulay Bousselham'),
(134, 'Sabaa Aiyoun'),
(135, 'Bourdoud'),
(136, 'Aït Faska'),
(137, 'Boureït'),
(138, 'Lamzoudia'),
(139, 'Oulad Said'),
(140, 'Missour'),
(141, 'Ain Aicha'),
(142, 'Zawyat ech Cheïkh'),
(143, 'Bouknadel'),
(144, 'El Ghiate'),
(145, 'Safsaf'),
(146, 'Ouaoula'),
(147, 'Douar Olad. Salem'),
(148, 'Oulad Tayeb'),
(149, 'Echemmaia Est'),
(150, 'Oulad Barhil'),
(151, 'Douar ’Ayn Dfali'),
(152, 'Setti Fatma'),
(153, 'Skoura'),
(154, 'Douar Ouled Ayad'),
(155, 'Zawyat an Nwaçer'),
(156, 'Khenichet-sur Ouerrha'),
(157, 'Ayt Mohamed'),
(158, 'Gueznaia'),
(159, 'Oulad Hassoune'),
(160, 'Bni Frassen'),
(161, 'Tifariti'),
(162, 'Zawit Al Bour'),
(163, 'Ouarzazate');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `phone`, `message`) VALUES
(1, 'zakaria kerkazou', 'kerkazou.zakaria@gmail.com', '0622766915', 'test'),
(2, 'test', 'test@gmail.com', '0600000000', 'jkkkl');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'manage'),
(2, 'pitch_owner'),
(3, 'player');

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `sport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`id`, `sport`) VALUES
(1, 'football'),
(2, 'basketball'),
(3, 'fitness'),
(4, 'tennis');

-- --------------------------------------------------------

--
-- Structure de la table `stadium`
--

CREATE TABLE `stadium` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` int(255) NOT NULL,
  `sport` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `location` varchar(456) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `site_web` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stadium`
--

INSERT INTO `stadium` (`id`, `name`, `user`, `sport`, `city`, `location`, `description`, `site_web`) VALUES
(34, 'test1', 7, 1, 1, '', '', ''),
(35, 'test2', 7, 3, 5, '', '', ''),
(36, 'aaa', 18, 1, 1, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `role`, `status`) VALUES
(7, 'admin', 'admin', 'admin@gmail.com', '0606060606', '202cb962ac59075b964b07152d234b70', 2, 1),
(11, 'kerkazou', 'zakaria', 'zakaria@gmail.com', '0622766915', '202cb962ac59075b964b07152d234b70', 3, 1),
(16, 'manager', 'manager', 'manager@gmail.com', '0622766915', '202cb962ac59075b964b07152d234b70', 1, 1),
(17, 'Riad', 'Abdelaziz', 'riad.aziz@gmail.com', '0456435693486', '706fa063ed9eae16b85a49ed7a9729a2', 3, 1),
(18, 'test', 'test', 'test@gmail.com', '', '202cb962ac59075b964b07152d234b70', 2, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `booken`
--
ALTER TABLE `booken`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `stadium` (`stadium`);

--
-- Index pour la table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stadium`
--
ALTER TABLE `stadium`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sport` (`sport`),
  ADD KEY `city` (`city`),
  ADD KEY `user` (`user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `booken`
--
ALTER TABLE `booken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `stadium`
--
ALTER TABLE `stadium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `booken`
--
ALTER TABLE `booken`
  ADD CONSTRAINT `booken_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `booken_ibfk_2` FOREIGN KEY (`stadium`) REFERENCES `stadium` (`id`);

--
-- Contraintes pour la table `stadium`
--
ALTER TABLE `stadium`
  ADD CONSTRAINT `stadium_ibfk_1` FOREIGN KEY (`sport`) REFERENCES `sport` (`id`),
  ADD CONSTRAINT `stadium_ibfk_2` FOREIGN KEY (`city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
