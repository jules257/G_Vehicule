-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2022 at 03:32 PM
-- Server version: 8.0.13
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gvehicule`
--

-- --------------------------------------------------------

--
-- Table structure for table `affecter`
--

CREATE TABLE `affecter` (
  `idaff` int(11) NOT NULL,
  `idService` int(11) NOT NULL,
  `idV` int(11) NOT NULL,
  `dateaffectation` varchar(15)  NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `droit`
--

CREATE TABLE `droit` (
  `id_droit` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `menu_droit` varchar(20) NOT NULL
);

--
-- Dumping data for table `droit`
--

INSERT INTO `droit` (`id_droit`, `user`, `menu_droit`) VALUES
(153, 2, '6-0'),
(154, 2, '6-1-0'),
(155, 2, '6-2-0'),
(156, 2, '6-3-0'),
(161, 2, '1-0'),
(162, 2, '1-1-0'),
(163, 2, '1-2-0'),
(164, 2, '1-3-0'),
(165, 2, '1-4-0'),
(166, 2, '2-0'),
(167, 2, '2-1-0'),
(168, 2, '2-2-0'),
(169, 2, '2-3-0'),
(170, 2, '3-0'),
(171, 2, '3-1-0'),
(172, 2, '3-2-0'),
(173, 2, '3-3-0'),
(174, 2, '4-0'),
(175, 2, '4-1-0'),
(178, 2, '5-0'),
(179, 2, '5-1-0'),
(180, 2, '5-2-0'),
(181, 2, '5-3-0'),
(182, 2, '4-2-0'),
(183, 2, '4-3-0'),
(184, 5, '1-0'),
(185, 5, '1-1-0'),
(186, 5, '1-2-0'),
(187, 5, '1-3-0'),
(188, 5, '1-4-0'),
(189, 5, '2-0'),
(190, 5, '2-1-0'),
(191, 5, '2-2-0'),
(192, 5, '2-3-0'),
(193, 5, '3-0'),
(194, 5, '3-1-0'),
(195, 5, '3-2-0'),
(196, 5, '3-3-0'),
(197, 5, '4-0'),
(198, 5, '4-1-0'),
(199, 5, '4-2-0'),
(200, 5, '4-3-0'),
(201, 5, '5-0'),
(202, 5, '5-1-0'),
(203, 5, '5-2-0'),
(204, 5, '5-3-0'),
(205, 2, '2-4-0'),
(206, 3, '1-0'),
(207, 3, '1-1-0'),
(208, 3, '1-2-0'),
(209, 3, '1-3-0'),
(210, 3, '1-4-0'),
(211, 3, '2-0'),
(212, 3, '2-1-0'),
(213, 3, '2-2-0'),
(214, 3, '2-3-0'),
(215, 3, '2-4-0'),
(216, 3, '3-0'),
(217, 3, '3-1-0'),
(218, 3, '3-2-0'),
(219, 3, '3-3-0'),
(220, 3, '4-0'),
(221, 3, '4-1-0'),
(222, 3, '4-2-0'),
(223, 3, '4-3-0'),
(224, 3, '5-0'),
(225, 3, '5-1-0'),
(226, 3, '5-2-0'),
(227, 3, '5-3-0');

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `idF` int(11) NOT NULL,
  `nomF` varchar(30) NOT NULL,
  `lieu_travail` varchar(30)  NOT NULL,
  `telephone` varchar(15) NOT NULL
) ;

--
-- Dumping data for table `fournisseur`
--

INSERT INTO `fournisseur` (`idF`, `nomF`, `lieu_travail`, `telephone`) VALUES
(10, 'TOYOTA-NNNN', 'Asiatique', '22458569'),
(12, 'Hilaire Campany', 'BUJA-ROHERO 3ème Av ', '687479942'),
(13, 'NiSSAN', 'CHAnick', '2222222222');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idService` int(11) NOT NULL,
  `nom_service` varchar(30) NOT NULL
);

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idService`, `nom_service`) VALUES
(13, 'PhPNNNNN'),
(14, 'PhPNNNNN'),
(15, 'PhPNNNNNKKKKKKKKK'),
(16, 'ölkjhxcaschjsj'),
(17, 'oisjdvqio'),
(18, 'ZEREND');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(80)  NOT NULL,
  `etat` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL
) ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `matricule`, `nom`, `prenom`, `telephone`, `photo`, `username`, `password`, `etat`, `role`) VALUES
(2, 'TOYOTA', 'BUHIGA', 'Adelard', '+25722222222', 'Captur.PNG', 'admin', 'Burundi', '1', 'Admin'),
(3, 'TOYOTA', 'BUHIGA', 'Adelard', '+25722222222', 'logosuivi.png', 'admin', '405a19f979b823e3772c8eb7338b8c27', '1', 'Admin'),
(5, '01258', 'Ntirandekura', 'Nestor', '7102158700', '', 'nestor', '79211162', '1', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE `vehicule` (
  `idV` int(11) NOT NULL,
  `immatriculation` varchar(30) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `numero_chassis` varchar(30) NOT NULL,
  `date_achat` date NOT NULL,
  `dure_ammortissement` float NOT NULL,
  `idF` int(11) NOT NULL
);

--
-- Dumping data for table `vehicule`
--

INSERT INTO `vehicule` (`idV`, `immatriculation`, `marque`, `type`, `numero_chassis`, `date_achat`, `dure_ammortissement`, `idF`) VALUES
(12, 'PPPPSSSS', '8A324465', '654+64+6+6hjjhghjgjhg', '346+4620', '2021-04-20', 5, 10),
(13, 'Camion', 'Toyota', 'zaboro', '1252366', '2021-04-20', 1, 13),
(14, '14527888D', 'YAMAHA vc', 'Toyota', 'h-/877777777-89564', '2021-04-14', 4, 13),
(15, '14527888Q', 'ROV', 'BENZ', 'h-/877777777-8956445', '2021-04-20', 2, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affecter`
--
ALTER TABLE `affecter`
  ADD PRIMARY KEY (`idaff`),
  ADD KEY `idService` (`idService`),
  ADD KEY `idV` (`idV`);

--
-- Indexes for table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`id_droit`);

--
-- Indexes for table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`idF`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idService`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`idV`),
  ADD KEY `vehicule_ibfk_1` (`idF`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affecter`
--
ALTER TABLE `affecter`
  MODIFY `idaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `droit`
--
ALTER TABLE `droit`
  MODIFY `id_droit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `idF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `idV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `affecter`
--
ALTER TABLE `affecter`
  ADD CONSTRAINT `affecter_ibfk_1` FOREIGN KEY (`idService`) REFERENCES `service` (`idservice`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `affecter_ibfk_2` FOREIGN KEY (`idV`) REFERENCES `vehicule` (`idv`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`idF`) REFERENCES `fournisseur` (`idf`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
