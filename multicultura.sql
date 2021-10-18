-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 18 okt 2021 om 11:32
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multicultura`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'dylan_bot', 'dylan_bot@gmail.com', 'abcdefghijk', '2021-10-18 13:20:05'),
(2, 'francois', 'francois.dylans@gmail.com', 'dylan', '2021-10-18 13:24:58');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `messageID` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `geslacht` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bericht` varchar(255) NOT NULL,
  PRIMARY KEY (`messageID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `geslachten`
--

DROP TABLE IF EXISTS `geslachten`;
CREATE TABLE IF NOT EXISTS `geslachten` (
  `ID` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `geslachten`
--

INSERT INTO `geslachten` (`ID`, `naam`) VALUES
(0, 'man'),
(1, 'vrouw'),
(2, 'andere');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservaties`
--

DROP TABLE IF EXISTS `reservaties`;
CREATE TABLE IF NOT EXISTS `reservaties` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(100) NOT NULL,
  `aantal` int(11) NOT NULL,
  `datum` datetime NOT NULL,
  `opmerking` varchar(255) DEFAULT 'Geen opmerkingen meegeven',
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reservaties`
--

INSERT INTO `reservaties` (`ID`, `naam`, `aantal`, `datum`, `opmerking`, `added_on`) VALUES
(1, 'Yannick', 1, '2021-10-22 12:20:00', '', '2021-10-14 16:08:29'),
(2, 'Dylan_bot', 5, '2021-10-22 18:00:00', 'Nee, fuck off, OOF!', '2021-10-14 16:09:11'),
(3, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2021-10-14 11:11:00', '', '2021-10-14 16:14:44'),
(4, 'dylan_bot', 12, '2021-10-01 15:10:00', 'geen opmerking toegevoegd', '2021-10-14 16:16:35'),
(5, 'yy', 10, '2021-10-17 12:00:00', 'neee', '2021-10-14 16:56:22'),
(6, 'picachooooo', 20, '2021-10-17 12:00:00', 'geen opmerking toegevoegd', '2021-10-14 17:00:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
