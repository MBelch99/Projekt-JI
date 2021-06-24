-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Cze 2021, 00:13
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dobrefilmy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmbooks`
--

CREATE TABLE `filmbooks` (
  `id` int(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `numberOfPersons` int(11) NOT NULL,
  `filmID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `filmbooks`
--

INSERT INTO `filmbooks` (`id`, `date`, `numberOfPersons`, `filmID`) VALUES
(16, '2021-06-18', 2, 1),
(17, '2021-06-04', 2, 2),
(18, '', 3, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `nrOfTickets` int(11) NOT NULL,
  `closesPlay` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `films`
--

INSERT INTO `films` (`id`, `title`, `nrOfTickets`, `closesPlay`) VALUES
(1, 'Gdzie jest nemo?', 40, '2021-06-29'),
(2, 'PSY', 60, '2021-07-03'),
(3, 'AUTA', 55, '2021-06-28'),
(4, 'Bad Boys', 55, '2021-06-29');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmbooks`
--
ALTER TABLE `filmbooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filmID` (`filmID`);

--
-- Indeksy dla tabeli `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `filmbooks`
--
ALTER TABLE `filmbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `filmbooks`
--
ALTER TABLE `filmbooks`
  ADD CONSTRAINT `filmbooks_ibfk_1` FOREIGN KEY (`filmID`) REFERENCES `films` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
