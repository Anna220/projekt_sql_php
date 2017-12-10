-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Gru 2017, 15:55
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wypozyczenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dni`
--

CREATE TABLE `dni` (
  `ID` int(11) NOT NULL,
  `liczba` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dni`
--

INSERT INTO `dni` (`ID`, `liczba`) VALUES
(1, 30),
(2, 14),
(3, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacja`
--

CREATE TABLE `rezerwacja` (
  `ID` int(11) NOT NULL,
  `IDtypsamochodu` text COLLATE utf8_polish_ci,
  `IDliczbadni` int(3) DEFAULT NULL,
  `Imie` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Telefon` int(11) NOT NULL,
  `Email` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Uwagi` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rezerwacja`
--

INSERT INTO `rezerwacja` (`ID`, `IDtypsamochodu`, `IDliczbadni`, `Imie`, `Nazwisko`, `Telefon`, `Email`, `Uwagi`) VALUES
(1, '1', 1, 'Krzysztof', 'kowalski', 345678098, 'krzysztof.kowalski@wp.pl', 'wakacje'),
(2, '1', 1, 'felcia', 'kowalska', 226653345, 'felcia@wp.pl', 'wakacje'),
(3, '3', 2, 'Piotr', 'Nowak', 890777890, 'p.nowak@onet.pl', 'wyjazd na urlop');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochod`
--

CREATE TABLE `samochod` (
  `ID` int(11) NOT NULL,
  `IDtypsamochodu` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `samochod`
--

INSERT INTO `samochod` (`ID`, `IDtypsamochodu`) VALUES
(1, 'Audi S8'),
(2, 'BMW M2'),
(3, 'Ferrari 458 Italia'),
(4, 'Mercedes A45 AMG'),
(5, 'Nissan GTR'),
(6, 'Mini Cooper S'),
(7, 'Volkswagen Up'),
(8, 'Opel Corsa'),
(9, 'Seat Ibiza');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `dni`
--
ALTER TABLE `dni`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rezerwacja`
--
ALTER TABLE `rezerwacja`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `samochod`
--
ALTER TABLE `samochod`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dni`
--
ALTER TABLE `dni`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `rezerwacja`
--
ALTER TABLE `rezerwacja`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `samochod`
--
ALTER TABLE `samochod`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
