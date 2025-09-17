-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 14, 2023 at 06:26 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbd`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `ID_rola` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `rola`
--

INSERT INTO `rola` (`ID_rola`, `nazwa`) VALUES
(1, 'Administrator'),
(2, 'Moderator'),
(3, 'Użytkownik');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID_user` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `haslo` varchar(30) NOT NULL,
  `plec` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `login`, `haslo`, `plec`) VALUES
(1, 'Marta', '123', 'Kobieta'),
(2, 'user', 'user', 'Kobieta'),
(3, 'Jowi', '456', 'Kobieta'),
(4, 'Jowi2', '789', 'Kobieta'),
(5, 'Jowi2', '789', 'Kobieta'),
(6, 'Jowi3', '147', 'Kobieta'),
(7, 'Marta', '123456', 'Kobieta'),
(8, 'Marta2', '123', 'Kobieta'),
(9, 'Ania', 'HasloAni', 'Kobieta'),
(10, 'Ola', 'HasloOli', 'Kobieta'),
(11, 'Asia', 'HasloAsi', 'Kobieta'),
(12, 'Ela', 'Haslo123', 'Kobieta');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user-rola`
--

CREATE TABLE `user-rola` (
  `user_ID` int(11) NOT NULL,
  `rola_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `user-rola`
--

INSERT INTO `user-rola` (`user_ID`, `rola_ID`) VALUES
(1, 1),
(2, 3),
(6, 3),
(7, 3),
(8, 2),
(9, 3),
(10, 3),
(11, 3),
(12, 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`ID_rola`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`);

--
-- Indeksy dla tabeli `user-rola`
--
ALTER TABLE `user-rola`
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `rola_ID` (`rola_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rola`
--
ALTER TABLE `rola`
  MODIFY `ID_rola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user-rola`
--
ALTER TABLE `user-rola`
  ADD CONSTRAINT `user-rola_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID_user`),
  ADD CONSTRAINT `user-rola_ibfk_2` FOREIGN KEY (`rola_ID`) REFERENCES `rola` (`ID_rola`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
