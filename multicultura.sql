-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 20 okt 2021 om 18:15
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
  `username` varchar(50) NOT NULL COMMENT 'Naam van de gebruiker.',
  `email` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Datum van aanmaken account.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'dylan_bot', 'dylan_bot@gmail.com', 'abcdefghijk', '2021-10-18 13:20:05'),
(2, 'francois_dylans', 'francois.dylans@gmail.com', 'dylan', '2021-10-18 13:24:58'),
(3, 'freddie', 'freddie.murc@outlooked.com', '$2y$10$3NvOP7TVW0kjBciSG/2Y8OhZmUgdQshuZXEBrSkm20M1uEBjaSZJy', '2021-10-18 13:37:46'),
(4, 'Yannick', 'vankerckvoordeyannick@gmail.com', '$2y$10$15fgNbxnkt9fDSSWe8zgZuSvrgGu0qR6E9x9tSXsoCmnKrHI76OMK', '2021-10-18 14:26:37');

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
  `id` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `geslachten`
--

INSERT INTO `geslachten` (`id`, `naam`) VALUES
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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rolearea`
--

DROP TABLE IF EXISTS `rolearea`;
CREATE TABLE IF NOT EXISTS `rolearea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL COMMENT 'Beschrijving van de role omgeving.',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rolearea`
--

INSERT INTO `rolearea` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Beheert heel de website'),
(2, 'Menu', 'Zone waarin het menu gemaakt/gewijzigd word. Waar men een item kan toevoegen/verwijderen/aanpassen.'),
(3, 'Accounts', 'Beheren van accounts / aanmaken van accounts.'),
(4, 'Gebruiker', 'De gebruikers zone, voor users zonder enige speciale rechten voor de site.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rolelink`
--

DROP TABLE IF EXISTS `rolelink`;
CREATE TABLE IF NOT EXISTS `rolelink` (
  `linkID` int(11) NOT NULL AUTO_INCREMENT,
  `accountID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL,
  PRIMARY KEY (`linkID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT 'Naam van de rol.',
  `description` text NOT NULL COMMENT 'Beschrijving van de rol.',
  `rolearea` int(11) NOT NULL COMMENT 'Gebied waar de rol zich bevind. OA: blog, menu, accounts, ALL',
  `rolenummer` int(11) NOT NULL COMMENT 'Stelt de grote voor van de rechten van deze rol.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `rolearea`, `rolenummer`) VALUES
(1, 'Menueditor', 'Kan de gegevens van items aanmaken/controleren.', 2, 6),
(2, 'Admin', 'Beheerder van de website. Beheert zowel gebruikers en kan de rollen aanpassen. ', 1, 10),
(7, 'Blogposter', 'Kan blogs maken.', 0, 0),
(4, 'Gebruiker', 'Een gewone gebruiker van de site', 4, 0),
(5, 'Translator', 'Vertaler van de website, kan artikels/items wijzigen/vertalen.', 0, 3),
(6, 'Accountbeheerder', 'Kan de gegevens van gebruikers aanmaken/controleren.', 3, 8),
(8, 'Blog-Admin', 'Beheerder van de blogs.', 0, 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
