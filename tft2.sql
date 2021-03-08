-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 15 Lip 2020, 11:53
-- Wersja serwera: 10.1.40-MariaDB-cll-lve
-- Wersja PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shamka_tft2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `discounts`
--

CREATE TABLE `discounts` (
  `discount` float NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `discounts`
--

INSERT INTO `discounts` (`discount`, `code`) VALUES
(0.999, 'seba'),
(0.3, 'tftboost'),
(0.15, 'TFTSTART');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `elo_prices`
--

CREATE TABLE `elo_prices` (
  `elo` varchar(20) NOT NULL,
  `division` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `elo_prices`
--

INSERT INTO `elo_prices` (`elo`, `division`, `price`) VALUES
('bronze', 1, 6.12),
('bronze', 2, 6.12),
('bronze', 3, 6.12),
('bronze', 4, 6.12),
('diamond', 1, 77.99),
('diamond', 2, 59.9),
('diamond', 3, 45.62),
('diamond', 4, 25.57),
('gold', 1, 14.44),
('gold', 2, 14.44),
('gold', 3, 13.62),
('gold', 4, 11.96),
('iron', 1, 5.49),
('iron', 2, 5.49),
('iron', 3, 5.49),
('master', 1, 205.5),
('platinum', 1, 20.9),
('platinum', 2, 19.64),
('platinum', 3, 17.88),
('platinum', 4, 16.22),
('silver', 1, 7.73),
('silver', 2, 7.73),
('silver', 3, 7.59),
('silver', 4, 6.99);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `placement_prices`
--

CREATE TABLE `placement_prices` (
  `previous_elo` varchar(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `placement_prices`
--

INSERT INTO `placement_prices` (`previous_elo`, `price`) VALUES
('bronze', 7),
('diamond', 27),
('gold', 12),
('iron', 5),
('master', 38),
('platinum', 19),
('silver', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `win_prices`
--

CREATE TABLE `win_prices` (
  `elo` varchar(20) NOT NULL,
  `division` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `win_prices`
--

INSERT INTO `win_prices` (`elo`, `division`, `price`) VALUES
('bronze', 1, 2.62),
('bronze', 2, 2.62),
('bronze', 3, 2.62),
('bronze', 4, 2.62),
('challenger', 1, 38.74),
('diamond', 1, 26.86),
('diamond', 2, 22.18),
('diamond', 3, 17.87),
('diamond', 4, 13.34),
('gold', 1, 6.7),
('gold', 2, 6.7),
('gold', 3, 5.42),
('gold', 4, 5.42),
('grandmaster', 1, 35.86),
('iron', 1, 2.62),
('iron', 2, 2.62),
('iron', 3, 2.62),
('iron', 4, 2.62),
('master', 1, 31.06),
('platinum', 1, 10.66),
('platinum', 2, 9.86),
('platinum', 3, 9.5),
('platinum', 4, 8.26),
('silver', 1, 5.38),
('silver', 2, 5.38),
('silver', 3, 5.38),
('silver', 4, 4.8);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `discounts`
--
ALTER TABLE `discounts`
  ADD UNIQUE KEY `code` (`code`);

--
-- Indeksy dla tabeli `elo_prices`
--
ALTER TABLE `elo_prices`
  ADD UNIQUE KEY `elo` (`elo`,`division`);

--
-- Indeksy dla tabeli `placement_prices`
--
ALTER TABLE `placement_prices`
  ADD UNIQUE KEY `previous_elo` (`previous_elo`);

--
-- Indeksy dla tabeli `win_prices`
--
ALTER TABLE `win_prices`
  ADD UNIQUE KEY `elo` (`elo`,`division`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
