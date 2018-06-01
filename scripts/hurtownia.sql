-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 17 Wrz 2016, 16:03
-- Wersja serwera: 5.5.52-0ubuntu0.14.04.1
-- Wersja PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `hurtownia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykuly`
--

CREATE TABLE IF NOT EXISTS `artykuly` (
  `id_art` int(11) NOT NULL AUTO_INCREMENT,
  `id_dostawcy` int(11) NOT NULL,
  `id_gat` int(11) NOT NULL,
  `nazwa_art` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `wielkosc_miary` int(6) NOT NULL,
  `id_miary` int(12) NOT NULL,
  `alert_sztuki` int(6) NOT NULL,
  PRIMARY KEY (`id_art`),
  KEY `id_dostawcy_idx` (`id_dostawcy`),
  KEY `id_gat_idx` (`id_gat`),
  KEY `id_miary_idx` (`id_miary`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `artykuly`
--

INSERT INTO `artykuly` (`id_art`, `id_dostawcy`, `id_gat`, `nazwa_art`, `wielkosc_miary`, `id_miary`, `alert_sztuki`) VALUES
(1, 1, 1, 'laciate', 1, 1, 3),
(2, 2, 2, 'oselkowe', 300, 2, 4),
(3, 2, 2, 'extra', 250, 2, 4),
(4, 3, 3, 'srednie', 1, 3, 5),
(5, 2, 1, 'kwasne', 1, 1, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dostawcy`
--

CREATE TABLE IF NOT EXISTS `dostawcy` (
  `id_dostawcy` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa_dost` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `adres_ul` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `telefon` varchar(12) COLLATE utf8_polish_ci NOT NULL,
  `os_do_kontaktu` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_dostawcy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `dostawcy`
--

INSERT INTO `dostawcy` (`id_dostawcy`, `nazwa_dost`, `miasto`, `adres_ul`, `email`, `telefon`, `os_do_kontaktu`) VALUES
(1, 'SM Ryki', 'Ryki', 'Å»ytnia 3', 'biuro@smryki.pl', '818651269', 'Jan Nowak'),
(2, 'SM Gostyń', 'Gostyń', 'Wielkopolska 1', 'zakupy@smgostyn.com.pl', '48 655752208', 'Stanisław Szulc'),
(3, 'SM w Wieprzu', 'Wieprz', 'Wieprz 232', 'handel@smwieprz.pl', '33 8755113', 'Jarosław Kowalski'),
(4, 'SM Å»arÃ³w', 'Å»arÃ³w', 'Wiosenna 2', 'biuro@smzarow.pl', '75 8882323', 'Roman Adamski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miary`
--

CREATE TABLE IF NOT EXISTS `miary` (
  `id_miary` int(11) NOT NULL AUTO_INCREMENT,
  `miara` varchar(12) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_miary`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `miary`
--

INSERT INTO `miary` (`id_miary`, `miara`) VALUES
(1, 'litr'),
(2, 'gram'),
(3, 'szt'),
(4, 'kg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notatki`
--

CREATE TABLE IF NOT EXISTS `notatki` (
  `id_notatki` int(11) NOT NULL AUTO_INCREMENT,
  `id_zadania` int(11) DEFAULT NULL,
  `tresc` varchar(45) COLLATE utf8_polish_ci DEFAULT NULL,
  `data` varchar(45) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id_notatki`),
  KEY `id_zadania_idx` (`id_zadania`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `partie_towaru`
--

CREATE TABLE IF NOT EXISTS `partie_towaru` (
  `id_partii_towaru` int(11) NOT NULL AUTO_INCREMENT,
  `id_art` int(11) NOT NULL,
  `ilosc_przyjeta` int(11) NOT NULL,
  `ilosc_aktualna` int(11) NOT NULL,
  `data_przyjecia` date NOT NULL,
  `data_przydatnosci` date NOT NULL,
  `alert_przydatnosc` date NOT NULL,
  PRIMARY KEY (`id_partii_towaru`),
  KEY `id_art_idx` (`id_art`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `partie_towaru`
--

INSERT INTO `partie_towaru` (`id_partii_towaru`, `id_art`, `ilosc_przyjeta`, `ilosc_aktualna`, `data_przyjecia`, `data_przydatnosci`, `alert_przydatnosc`) VALUES
(1, 1, 500, 800, '2016-01-10', '2016-02-13', '2016-02-04'),
(2, 2, 20, 28, '2016-01-15', '2016-02-20', '2016-02-15'),
(3, 3, 30, 37, '2016-01-20', '2016-02-20', '2016-02-04'),
(4, 4, 900, 950, '2016-01-21', '2016-02-28', '2016-02-23'),
(5, 5, 70, 77, '2016-01-22', '2016-02-27', '2016-02-22');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaje_art`
--

CREATE TABLE IF NOT EXISTS `rodzaje_art` (
  `id_gat` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa_rodzaju` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_gat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `rodzaje_art`
--

INSERT INTO `rodzaje_art` (`id_gat`, `nazwa_rodzaju`) VALUES
(1, 'mleko'),
(2, 'maslo'),
(3, 'jajka'),
(4, 'ser_bialy'),
(5, 'ser_zolty');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE IF NOT EXISTS `rola` (
  `id_rola` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_rola`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_rola` int(11) NOT NULL,
  PRIMARY KEY (`id_role`),
  KEY `id_rola_idx` (`id_rola`),
  KEY `id_user_idx` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stan_magazynu`
--

CREATE TABLE IF NOT EXISTS `stan_magazynu` (
  `id_stanu` int(11) NOT NULL AUTO_INCREMENT,
  `id_partii_towaru` int(11) NOT NULL,
  PRIMARY KEY (`id_stanu`),
  KEY `id_partii_towaru_idx` (`id_partii_towaru`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `stan_magazynu`
--

INSERT INTO `stan_magazynu` (`id_stanu`, `id_partii_towaru`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `strata`
--

CREATE TABLE IF NOT EXISTS `strata` (
  `id_strata` int(11) NOT NULL AUTO_INCREMENT,
  `id_partii_towaru` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `data` date NOT NULL,
  `powod` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_strata`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `straty`
--

CREATE TABLE IF NOT EXISTS `straty` (
  `id_straty` int(11) NOT NULL AUTO_INCREMENT,
  `id_strata` int(11) NOT NULL,
  `id_stanu` int(11) NOT NULL,
  PRIMARY KEY (`id_straty`),
  KEY `id_stanu_idx` (`id_stanu`),
  KEY `id_strata_idx` (`id_strata`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE IF NOT EXISTS `uzytkownicy` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(40) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `haslo` char(32) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(40) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `aktywny` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_user`, `login`, `haslo`, `imie`, `nazwisko`, `email`, `aktywny`) VALUES
(1, 'raptor', '62f6ca0dfc3626c7b68bed075d17d75f', 'Zdzislaw', 'Bronikowski', 'zdzislaw.bronikowski@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadania`
--

CREATE TABLE IF NOT EXISTS `zadania` (
  `id_zadania` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL,
  `stan` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_zadania`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  ADD CONSTRAINT `id_dostawcy` FOREIGN KEY (`id_dostawcy`) REFERENCES `dostawcy` (`id_dostawcy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_gat` FOREIGN KEY (`id_gat`) REFERENCES `rodzaje_art` (`id_gat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_miary` FOREIGN KEY (`id_miary`) REFERENCES `miary` (`id_miary`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `notatki`
--
ALTER TABLE `notatki`
  ADD CONSTRAINT `id_zadania` FOREIGN KEY (`id_zadania`) REFERENCES `zadania` (`id_zadania`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `partie_towaru`
--
ALTER TABLE `partie_towaru`
  ADD CONSTRAINT `id_art` FOREIGN KEY (`id_art`) REFERENCES `artykuly` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `id_rola` FOREIGN KEY (`id_rola`) REFERENCES `rola` (`id_rola`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `uzytkownicy` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `stan_magazynu`
--
ALTER TABLE `stan_magazynu`
  ADD CONSTRAINT `id_partii_towaru` FOREIGN KEY (`id_partii_towaru`) REFERENCES `partie_towaru` (`id_partii_towaru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `straty`
--
ALTER TABLE `straty`
  ADD CONSTRAINT `id_stanu` FOREIGN KEY (`id_stanu`) REFERENCES `stan_magazynu` (`id_stanu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_strata` FOREIGN KEY (`id_strata`) REFERENCES `strata` (`id_strata`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
