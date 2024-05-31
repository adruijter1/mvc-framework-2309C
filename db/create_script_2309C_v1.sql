-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 31 mei 2024 om 10:48
-- Serverversie: 8.0.32
-- PHP-versie: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcframework-2309C`
--
CREATE DATABASE IF NOT EXISTS `mvcframework-2309C` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `mvcframework-2309C`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Country`
--

DROP TABLE IF EXISTS `Country`;
CREATE TABLE IF NOT EXISTS `Country` (
  `Id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `CapitalCity` varchar(255) NOT NULL,
  `Continent` varchar(255) NOT NULL,
  `Population` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Country`
--

INSERT INTO `Country` (`Id`, `Name`, `CapitalCity`, `Continent`, `Population`) VALUES
(1, 'China', 'Bejing', 'Azië', 1400000000),
(2, 'Tanzania', 'Dodoma', 'Afrika', 59730000),
(3, 'Japan', 'Tokyo', 'Azië', 12000000),
(4, 'Chili', 'Santiago', 'Zuid-Amerika', 17640001),
(5, 'België', 'Brussel', 'Europa', 12000000),
(6, 'Noorwegen', 'Oslo', 'Europa', 5400000),
(7, 'Mexico', 'Mexico-City', 'Zuid-Amerika', 1400000000),
(14, 'Noorwegen1', 'Osloooo', 'Europapapa', 45000000),
(15, 'Noorwegen', 'Oslo', 'Europa', 123),
(16, 'Nepal', 'Kathmandu', 'Azi&euml;', 30550000),
(17, 'Zweden', 'Oslo', 'Europa', 12000000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
