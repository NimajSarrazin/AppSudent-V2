-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 mars 2023 à 23:57
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app_student`
--
CREATE DATABASE IF NOT EXISTS `app_student` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `app_student`;

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `url_img` varchar(255) DEFAULT 'img/ben.jpg',
  `status` int(1) DEFAULT 0,
  `date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `email`, `age`, `formation`, `created_at`, `updated_at`, `url_img`, `status`, `date_of_birth`) VALUES
(5, 'jack', 'Ma', 'Jackma@hotmail.com', 40, 'Développeur back-end', '2023-03-17 08:38:59', '2023-03-17 08:38:59', 'https://www.challenge.ma/wp-content/uploads/2019/11/Jack-Ma-fondateur-de-Ali-Baba.jpg', 0, '1984-03-12'),
(7, 'Elon', 'Musk', 'elon@outlook.com', 40, 'Développeur back-end', '2023-03-17 08:38:59', '2023-03-23 16:52:47', 'https://images.bfmtv.com/fADpEDejSHkpf1LDrwQCG0ZVwoQ=/0x0:1600x900/1600x0/images/Elon-Musk-a-ete-rappele-a-l-ordre-par-la-SEC-1039348.jpg', 1, '1984-03-15'),
(8, 'Jenna ', 'ortega', 'Jenna-marie@ortega.fr', 40, 'Développeur back-end', '2023-03-17 08:38:59', '2023-03-23 16:52:47', 'https://www.programme-tv.net/imgre/fit/~1~tel~2023~03~19~0234a222-522a-4299-b687-2fdb525693a2.png/1200x600/crop-from/top/quality/80/jenna-ortega-aurait-prefere-que-mercredi-fasse-un-bide-et-ne-croyait-pas-au-succes-de-la-serie.jpg', 1, '2002-09-27'),
(11, 'Sarrazin', 'Benjamin', 'sarrazin.benjamin.pro@gmail.com', 24, 'Dev Front', '2023-03-23 19:55:16', NULL, 'img/ben.jpg', 2023, '0000-00-00'),
(13, 'Jenna ', 'ortega', 'Jenna-marie@ortega.fr', 40, 'Développeur back-end', '2023-03-17 08:38:59', '2023-03-23 16:52:47', 'https://www.programme-tv.net/imgre/fit/~1~tel~2023~03~19~0234a222-522a-4299-b687-2fdb525693a2.png/1200x600/crop-from/top/quality/80/jenna-ortega-aurait-prefere-que-mercredi-fasse-un-bide-et-ne-croyait-pas-au-succes-de-la-serie.jpg', 1, '2002-09-27'),
(14, 'Jenna ', 'ortega', 'Jenna-marie@ortega.fr', 40, 'Développeur back-end', '2023-03-17 08:38:59', '2023-03-23 16:52:47', 'https://www.programme-tv.net/imgre/fit/~1~tel~2023~03~19~0234a222-522a-4299-b687-2fdb525693a2.png/1200x600/crop-from/top/quality/80/jenna-ortega-aurait-prefere-que-mercredi-fasse-un-bide-et-ne-croyait-pas-au-succes-de-la-serie.jpg', 1, '2002-09-27'),
(15, 'Jenna', 'ortega', 'Jenna-marie@ortega.fr', 21, 'Dev React', '2023-03-17 08:38:59', '2023-03-23 20:12:39', 'https://www.programme-tv.net/imgre/fit/~1~tel~2023~03~19~0234a222-522a-4299-b687-2fdb525693a2.png/1200x600/crop-from/top/quality/80/jenna-ortega-aurait-prefere-que-mercredi-fasse-un-bide-et-ne-croyait-pas-au-succes-de-la-serie.jpg', 1, '2002-09-27'),
(16, 'jack', 'ma', 'jack.pro@gmail.com', 29, 'Dev Synfony', '2023-03-23 20:02:31', NULL, 'img/ben.jpg', 2023, '0000-00-00'),
(17, 'Sarrazin', 'Benjamin', 'sarrazin.benjamin.pro@gmail.com', 24, 'Dev React', '2023-03-23 23:23:14', NULL, 'img/ben.jpg', 2023, '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
