-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 29, 2022 at 08:58 AM
-- Server version: 10.8.4-MariaDB-1:10.8.4+maria~ubu2204
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sae301`
--

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_rue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`id`, `nom`, `capacite`, `adresse_rue`) VALUES
(1, 'Théâtre Michel Portal', '592', '1 Rue Edouard Ducéré, 64100 Bayonne'),
(2, 'La Luna Negra', '82', '7 Rue des Augustins, 64100 Bayonne'),
(3, 'CIAP Lapurdum', '213', '7 Rue des Gouverneurs, 64100 Bayonne'),
(8, 'Cinéma l\'Atalante', '170', '3-5 Quai Amiral Antoine Sala, 64100 Bayonne'),
(10, 'Palais des sports de Lauga', '270', 'S.U.A.P.S., 1 Av. Paul Pras, 64100 Bayonne'),
(11, 'Salle Lauga', '2400', '25 Av. Paul Pras, 64100 Bayonne'),
(12, 'Arène de Bayonne', '10000', 'Rue Alfred Boulant, 64100 Bayonne'),
(13, 'DIDAM', '60', '6 Quai de Lesseps, 64100 Bayonne'),
(15, 'Cloître de la Cathédrale St  Marie de Bayonne', '50', '15 Rue des Prébendes, 64100 Bayonne'),
(16, 'GALERIE DU 2e ÉTAGE ÉCOLE SUPÉRIEURE D’ART PAYS BASQUE CITÉ DES ARTS', '50', '3 Av. Jean Darrigrand, 64100 Bayonne'),
(17, 'Musée Basque', '110', '37 Quai des Corsaires, 64100 Bayonne'),
(18, 'Galerie des Corsaires', '30', '16 Rue Pontrique, 64100 Bayonne'),
(20, 'Esplanade Roland Barthes', '160', 'All. des Platanes, 64100 Bayonne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
