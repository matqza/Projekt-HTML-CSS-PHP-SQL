-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Wrz 2022, 12:19
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `users`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `userstable`
--

CREATE TABLE `userstable` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Forname` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Mail` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Usertype` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `userstable`
--

INSERT INTO `userstable` (`ID`, `Name`, `Forname`, `Username`, `Mail`, `Password`, `Usertype`) VALUES
(1, 'Mateusz', 'Kuźnia', 'mateusz', 'mateusz@mail.pl', 'silnehaslo123', 'Admin'),
(2, 'janusz', 'Kowalski', 'janusz', 'janusz@mail.pl', 'haslojanusz', 'User'),
(4, 'Donald', 'Tusk', 'donald', 'Donald@mail.pl', 'haslodonald', 'Ban');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `userstable`
--
ALTER TABLE `userstable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `userstable`
--
ALTER TABLE `userstable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
