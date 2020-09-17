-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2020 at 08:28 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeValley`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `fname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(2, 'john', 'smith', 'john123@gmail.com', '$2y$12$Abz.GNrkNmZPmC7pw9xhC..IT7KP/Vm2TATXdaPccC9AwypjXzwZu'),
(12, 'Shruti', 'Ikhar', 'shruti@gmail.com', '$2y$12$w015BmZZe4MQ5JFlXd99p.5vBsi04.dcYX6tKAKgzgXYb9OvlElle'),
(13, 'Rita', 'Sanon', 'rita@gmail.com', '$2y$12$csDYFx6aV50mToWwsU6bDewn2hAJrbJAVQa.6zuNpYlAQQ1u6V0Gi'),
(14, 'Shruti', 'Ikhar', 'ikharshruti@gmail.com', '$2y$12$WOdmtHJMv.ryaSN..KYpiO9YsrmJwMjYP.leiHPGivaUGbskAxX4u'),
(15, 'shreya', 'wasule', 'shreya@gmail.com', '$2y$12$jUbwDlBV6g.ecIUugiZzgOhbpyupkrFpmDqTBhFh1372oFuPvAtH2'),
(19, 'Shruti', 'Ikhar', 'ikhar23@gmail.com', '$2y$12$L6tOlt0QKKZeNMKOwqUn7.9YMfxQf2YJNsV6hh4yZXLlLr1fusyTS'),
(24, 'mika', 'singh', 'mika@gmail.com', '$2y$12$Zq.eSpvveZgB5RWGqBisKuVUY4q7.cPuMvbVgtXI7D8eFTfXRPrSu'),
(25, 'Shruti', 'Ikhar', 'shruti123@gmail.com', '$2y$12$tMs/vX2feSCcSEdi6aM9ROODtSEQO84RBXbverqUR6Ois2DReSAMC'),
(26, 'Shruti', 'Ikhar', 'ikhar@gmail.com', '$2y$12$bZp6EyjNoGcXcbDLTMNDp.OouHVs8EQbfwd8pYw4jTZcqlhDbo.5G'),
(27, 'Shruti', 'Ikhar', 'shrutiikhar23@gmail.com', '$2y$12$skLTjzxKxu5l0QEhnjncoeGs2wzTVcN.e0CRVyqkRYIulGG.47dXW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
