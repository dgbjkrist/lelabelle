-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 21 fév. 2019 à 20:27
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `labelle`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mdp` varchar(45) NOT NULL,
  `tel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `nom`, `prenom`, `username`, `email`, `mdp`, `tel`) VALUES
(3, '', '', 'jbt', 'jbt@dev.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
(19, '', '', 'jbtognon', 'jbt@dev.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL),
(20, '', '', 'simplon', 'simplon@dev.ci', '827ccb0eea8a706c4c34a16891f84e7b', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `bons`
--

CREATE TABLE `bons` (
  `idbon` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `editdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bons`
--

INSERT INTO `bons` (`idbon`, `code`, `montant`, `editdate`) VALUES
(7, 'LB5c5c36e536128', 11000, '2007-02-19'),
(8, 'LB5c5c518b88c1d', 5000, '2007-02-19'),
(9, 'LB5c66b38fab81b', 100000, '2015-02-19'),
(10, 'LB5c66b398697b2', 100000, '2015-02-19'),
(11, 'LB5c66b39aca78d', 100000, '2015-02-19'),
(12, 'LB5c66b39d110b7', 100000, '2015-02-19'),
(13, 'LB5c66b39f8e055', 100000, '2015-02-19'),
(14, 'LB5c66b3eaad371', 100000, '2015-02-19'),
(15, 'LB5c66b40a1ff4f', 100000, '2015-02-19'),
(16, 'LB5c66b46aa11f9', 100000, '2015-02-19'),
(17, 'LB5c66bb029f9fc', 100000, '2015-02-19'),
(18, 'LB5c66da824503e', 100000, '2015-02-19'),
(19, 'LB5c66db2a60323', 100000, '2015-02-19'),
(20, 'LB5c66dc04e788e', 100000, '2015-02-19'),
(21, 'LB5c66dc92655a5', 100000, '2015-02-19'),
(22, 'LB5c66dcbba9944', 100000, '2015-02-19'),
(23, 'LB5c66dd4c5267d', 100000, '2015-02-19'),
(24, 'LB5c66de8eb5f96', 100000, '2015-02-19'),
(25, 'LB5c66deb21edfb', 100000, '2015-02-19'),
(26, 'LB5c66ded885191', 100000, '2015-02-19'),
(27, 'LB5c66e0714600b', 100000, '2015-02-19'),
(28, 'LB5c66e07ce518b', 50000, '2015-02-19'),
(29, 'LB5c66e183e393d', 30000, '2015-02-19'),
(30, 'LB5c66e21b1d3e0', 100000, '2015-02-19'),
(31, 'LB5c66e7dae999e', 100000, '2015-02-19'),
(32, 'LB5c66f4d91f277', 30000, '2015-02-19'),
(33, 'LB5c698cf3a5fb8', 100000, '2017-02-19'),
(34, 'LB5c6a17bf99921', 25000, '2018-02-19'),
(35, 'LB5c6a17e947d31', 25000, '2018-02-19'),
(36, 'LB5c6a1814a556e', 25000, '2018-02-19'),
(37, 'LB5c6a182e187d7', 25000, '2018-02-19'),
(38, 'LB5c6a1832100af', 25000, '2018-02-19'),
(39, 'LB5c6a19d28e425', 25000, '2018-02-19'),
(40, 'LB5c6a19f1db931', 30000, '2018-02-19'),
(41, 'LB5c6a1b403ee1e', 25000, '2018-02-19'),
(42, 'LB5c6a1c91d227f', 50000, '2018-02-19'),
(43, 'LB5c6a1e15c0b6d', 25000, '2018-02-19'),
(44, 'LB5c6a54f161e77', 25000, '2018-02-19'),
(45, 'LB5c6a5c3b14d68', 30000, '2018-02-19'),
(46, 'LB5c6a5d2b62a17', 100000, '2018-02-19'),
(47, 'LB5c6a5d8549afd', 100000, '2018-02-19'),
(48, 'LB5c6a83850646d', 100000, '2018-02-19'),
(49, 'LB5c6a8522738bc', 100000, '2018-02-19'),
(50, 'LB5c6a991387e0a', 50000, '2018-02-19'),
(51, 'LB5c6aa112eeb82', 50000, '2018-02-19'),
(52, 'LB5c6aa639a1fc0', 100000, '2018-02-19'),
(53, 'LB5c6aa89c9fef4', 100000, '2018-02-19'),
(54, 'LB5c6aa9b9e45f0', 100000, '2018-02-19');

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `id_destination` int(11) NOT NULL,
  `departville` varchar(255) NOT NULL,
  `arriveville` varchar(255) NOT NULL,
  `montant` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `destination`
--

INSERT INTO `destination` (`id_destination`, `departville`, `arriveville`, `montant`) VALUES
(1, 'yopougon', 'agnibilekrou', 10000),
(2, 'marcory', 'adzope', 5000),
(3, 'aboisso', 'beoumi', 15000),
(4, 'abengourou', 'bingerville', 20000),
(5, 'attecoube', 'bocanda', 10000),
(6, 'cocody', 'agboville', 17000),
(7, 'mankono', 'seguela', 45000),
(8, 'dabakala', 'man', 30000),
(9, 'kong', 'vavoua', 5000),
(0, 'attecoube', 'plateau', 43210),
(0, 'cocody', 'plateau', 43210),
(0, 'adzope', 'agboville', 43210),
(0, 'attecoube', 'anyama', 43210);

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `idhistorique` int(11) NOT NULL,
  `depart` varchar(45) NOT NULL,
  `arrive` varchar(45) NOT NULL,
  `ticket` varchar(45) DEFAULT NULL,
  `iduser` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idmsg` int(11) NOT NULL,
  `emetteur` varchar(50) NOT NULL,
  `recepteur` varchar(50) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `sms` text NOT NULL,
  `dateposte` varchar(25) NOT NULL,
  `statut` int(11) NOT NULL,
  `usertel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idmsg`, `emetteur`, `recepteur`, `objet`, `sms`, `dateposte`, `statut`, `usertel`) VALUES
(1, 'lelabelle GROUP', 'client', 'REMERCIEMENT', 'LE LABELLE TRANSPORT vous remercie d\'avoir effectue le voyage sa compagnie nous vous souhaitons un agrÃ©able weekend tout en espÃ©rant vous revoir de si tÃ´t.\r\n        ', 'Tue, 12 Feb 2019 11:44:47', 0, ''),
(4, 'lelabelle GROUP', 'Jean Baptiste', 'SMS personnalise', '3434', 'Wed, 13 Feb 2019 10:09:42', 1, '08001496'),
(10, 'lelabelle GROUP', 'TOGNON JEAN BAPTISTE', 'Achat de BON', 'Votre compte a ete recharger de <b>100000</b> le 2019-02-18 <br>Merci pour votre fidelite ', 'Mon, 18 02 2019 08 02 19', 1, '08001496'),
(11, 'lelabelle GROUP', 'simplon dev', 'Achat de BON', 'Votre compte a ete recharger de <b>100000</b> le 2019-02-18 <br>Merci pour votre fidelite ', 'Mon, 18 02 2019 08 02 49', 1, '00000000'),
(12, 'lelabelle GROUP', 'TOGNON JEAN BAPTISTE', 'Achat de BON', 'Votre compte a ete recharger de <b>100000</b> le 2019-02-18 <br>Merci pour votre fidelite ', 'Mon, 18 02 2019 11 02 57', 1, '08001496'),
(13, 'lelabelle GROUP', 'TOGNON JEAN BAPTISTE', 'Achat de BON', 'Votre compte a ete recharger de <b>100000</b> le 2019-02-18 <br>Merci pour votre fidelite ', 'Mon, 18 02 2019 11:02:50', 1, '08001496'),
(14, 'lelabelle GROUP', 'Eunice babo', 'Achat de BON', 'Votre compte a ete recharger de <b>50000</b> le 2019-02-18 <br>Merci pour votre fidelite ', 'Mon, 18 02 2019 12:02:55', 1, '88144835'),
(15, 'lelabelle GROUP', 'kouadio ambroise', 'Achat de BON', 'Votre compte a ete recharger de <b>50000</b> le 2019-02-18 <br>Merci pour votre fidelite ', 'Mon, 18 02 2019 13:02:02', 1, '01010101'),
(16, 'lelabelle GROUP', 'TOGNON JEAN BAPTISTE', 'Achat de BON', 'Votre compte a ete recharger de <b>100000</b> le 2019-02-18 <br>Merci pour votre fidelite ', 'Mon, 18 02 2019 13:02:01', 1, '08001496'),
(17, 'lelabelle GROUP', 'TOGNON JEAN BAPTISTE', 'Achat de BON', 'Votre compte a ete recharger de <b>100000</b> le 2019-02-18 <br>Merci pour votre fidelite ', 'Mon, 18 02 2019 13:02:12', 1, '08001496'),
(18, 'lelabelle GROUP', 'TOGNON JEAN BAPTISTE', 'Achat de BON', 'Votre compte a ete recharger de <b>100000</b> le 2019-02-18 <br>Merci pour votre fidelite ', 'Mon, 18 02 2019 13:02:57', 1, '08001496');

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE `trajet` (
  `id_trajet` int(11) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrive` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `montant` int(255) NOT NULL,
  `ticketutilise` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`id_trajet`, `depart`, `arrive`, `ticket`, `montant`, `ticketutilise`) VALUES
(1, 'aboisso', 'beoumi', 'TK5c6372dce0083', 15000, 'utilise'),
(13, 'kong', 'vavoua', 'TK5c6aad6ba8075', 5000, ''),
(14, 'aboisso', 'beoumi', 'TK5c6aad810bf92', 15000, '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `datenaiss` date NOT NULL,
  `sexe` varchar(45) NOT NULL,
  `solde` int(11) NOT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `nom`, `prenom`, `datenaiss`, `sexe`, `solde`, `tel`, `email`, `mdp`, `date_create`) VALUES
(1, 'EFFI', 'philibert', '2018-07-04', 'ðŸ‘¦', 755000, '34343434', 'test@2019.com', 'd91431df0bdf9524341e75e476f4e71b', '0000-00-00'),
(2, 'TOGNON', 'JEAN BAPTISTE', '2019-02-13', 'Homme', 755000, '08001496', 'jbtworksadress@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-02-08'),
(8, 'kouadio', 'ambroise', '1975-07-05', 'Homme', 755000, '01010101', 'bernard@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-02-18');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `ville`, `lat`, `lng`) VALUES
(1, 'adjame', 5.36507, -4.02357),
(2, 'attecoube', 5.33625, -4.04145),
(3, 'cocody', 5.36022, -3.96744),
(4, 'koumassi', 5.30298, -3.94194),
(5, 'marcory', 5.30271, -3.98274),
(6, 'plateau', 5.32332, -4.02357),
(7, 'portbouet', 5.27725, -3.8859),
(8, 'treichville', 5.29209, -4.01336),
(9, 'yopougon', 5.31767, -4.08999),
(10, 'abengourou', 6.7157, -3.48013),
(11, 'aboisso', 5.47451, -3.20308),
(12, 'adzope', 6.10715, -3.85535),
(13, 'agboville', 5.9355, -4.22308),
(14, 'agnibilekrou', 7.13028, -3.20308),
(15, 'anyama', 5.48771, -4.05166),
(16, 'beoumi', 7.67309, -5.57223),
(17, 'bingerville', 5.35036, -3.87571),
(18, 'bocanda', 7.06591, -4.49543),
(19, 'bondoukou', 8.04788, -2.80786),
(20, 'bongouanou', 6.6487, -4.20515),
(21, 'bonoua', 5.27118, -3.59393),
(22, 'boundiali', 9.51836, -6.48232),
(23, 'dabou', 5.32621, -4.36679),
(24, 'daloa', 6.88833, -6.43969),
(25, 'bouaflé', 6.98274, -5.74051),
(26, 'danané', 7.2676, -8.14478),
(27, 'daoukro', 7.0654, -3.95724),
(28, 'dimbokro', 6.65747, -4.71223),
(29, 'divo', 5.84154, -5.36255),
(30, 'douekoue', 6.74738, -7.36246),
(31, 'ferkessedougou', 9.5842, -5.19536),
(32, 'gagnoa', 6.15144, -5.95154),
(33, 'gohitafla', 7.48828, -5.88024),
(34, 'grandlahou', 5.13652, -5.02605),
(35, 'grandbassam', 5.22594, -3.75367),
(36, 'Grand-Bereby', 4.65137, -6.92205),
(37, 'guiglo', 6.54906, -7.49765),
(38, 'issia', 6.48761, -6.58368),
(39, 'jacqueville', 5.20598, -4.42335),
(40, 'katiola', 8.14023, -5.09631),
(41, 'korhogo', 9.46693, -5.61426),
(42, 'mbahiakro', 7.4548, -4.3411),
(43, 'mankono', 8.05991, -6.18983),
(44, 'odienne', 9.51888, -7.55722),
(45, 'oumé', 6.37413, -5.40966),
(46, 'sassandra', 4.95128, -6.09175),
(47, 'seguela', 7.96018, -6.6745),
(48, 'sinfra', 6.62334, -5.91456),
(49, 'soubré', 5.78662, -6.58902),
(50, 'tengrela', 10.482, -6.41306),
(51, 'tiassale', 5.90426, -4.82614),
(52, 'Toulepleu', 6.57956, -8.4102),
(53, 'toumodi', 6.55603, -5.01565),
(54, 'vavoua', 7.37506, -6.47699),
(55, 'yamoussoukro', 6.82762, -5.28934),
(56, 'zuenoula', 7.42404, -6.05204),
(57, 'Bouna', 9.27166, -2.99256),
(58, 'lakota', 5.85947, -5.67735),
(59, 'kani', 8.47784, -6.60504),
(60, 'man', 7.40643, -7.55722),
(61, 'dabakala', 8.36626, -4.43364),
(62, 'kong', 9.15102, -4.61018),
(63, 'Touba', 8.28417, -7.68194),
(64, 'bouake', 7.69047, -5.03905);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `bons`
--
ALTER TABLE `bons`
  ADD PRIMARY KEY (`idbon`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`idhistorique`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idmsg`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`id_trajet`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `bons`
--
ALTER TABLE `bons`
  MODIFY `idbon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `idhistorique` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `idmsg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `id_trajet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
