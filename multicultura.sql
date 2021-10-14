-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 14 okt 2021 om 14:19
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reservaties`
--

INSERT INTO `reservaties` (`ID`, `naam`, `aantal`, `datum`, `opmerking`, `added_on`) VALUES
(1, 'Yannick', 1, '2021-10-22 12:20:00', '', '2021-10-14 16:08:29'),
(2, 'Dylan_bot', 5, '2021-10-22 18:00:00', 'Nee, fuck off, OOF!', '2021-10-14 16:09:11'),
(3, 'aaaaaaa', 1, '2021-10-14 11:11:00', '', '2021-10-14 16:14:44'),
(4, 'dylan_bot', 12, '2021-10-01 15:10:00', 'geen opmerking toegevoegd', '2021-10-14 16:16:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
