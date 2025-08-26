-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 05:25 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playhunt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bettings`
--

CREATE TABLE `bettings` (
  `id` tinyint(4) NOT NULL,
  `betting_creator` tinyint(4) NOT NULL,
  `group_first_id` tinyint(4) NOT NULL,
  `group_second_id` tinyint(4) NOT NULL,
  `first_group_votes` int(11) NOT NULL DEFAULT 0,
  `second_group_votes` int(11) NOT NULL DEFAULT 0,
  `when_end` date NOT NULL,
  `status` enum('Aktywny','Nieaktywny','Zakończony') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bettings`
--

INSERT INTO `bettings` (`id`, `betting_creator`, `group_first_id`, `group_second_id`, `first_group_votes`, `second_group_votes`, `when_end`, `status`) VALUES
(2, 1, 1, 2, 10, 28, '0000-00-00', 'Aktywny'),
(3, 1, 3, 4, 14, 3, '0000-00-00', 'Aktywny'),
(4, 1, 1, 2, 3, 1, '0000-00-00', 'Aktywny'),
(5, 1, 3, 4, 1, 3, '0000-00-00', 'Aktywny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `groups`
--

CREATE TABLE `groups` (
  `id` tinyint(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Aktywny','Nieaktywny') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `status`) VALUES
(1, 'Bambiki', 'Aktywny'),
(2, 'Lamusy', 'Aktywny'),
(3, 'Spoceńce', 'Aktywny'),
(4, 'Borowiki', 'Aktywny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `idRole` tinyint(4) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `activate` varchar(1) DEFAULT 'T',
  `roleDate` date DEFAULT NULL,
  `finishDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRole`, `name`, `activate`, `roleDate`, `finishDate`) VALUES
(1, 'admin', 'T', '2022-01-01', NULL),
(2, 'user', 'T', '2022-01-01', NULL),
(3, 'operator', 'T', '2022-01-01', NULL),
(4, 'moderator', 'T', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `idUser` tinyint(4) NOT NULL,
  `login` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `wins` tinyint(4) DEFAULT 0,
  `loses` tinyint(4) DEFAULT 0,
  `activate` enum('Aktywny','Nieaktywny','Oczekujący','Zawieszony','Zarchiwizowany') NOT NULL DEFAULT 'Oczekujący'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `login`, `password`, `email`, `wins`, `loses`, `activate`) VALUES
(1, 'Ania', 'hasłoani', 'Ania@mail.com', NULL, NULL, 'Oczekujący'),
(2, 'Ula', 'hasłouli', 'Ula@mail.com', 4, 2, 'Oczekujący'),
(3, 'Olek', 'hasłoolka', 'Olek@gmail.com', NULL, NULL, 'Oczekujący'),
(4, 'Łukasz', 'hasłołukasza', 'Łukasz@mail.com', 7, 0, 'Oczekujący'),
(5, 'Marcin', 'hasłoMarcina', 'Marcin@gmail.com', NULL, NULL, 'Oczekujący'),
(9, 'Julia', 'hasłojulii', 'Julia@gmail.com', 0, 0, 'Oczekujący'),
(10, 'Mariusz', 'hasłomariusza', 'Mariusz@gmail.com', 0, 0, 'Oczekujący');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_roles`
--

CREATE TABLE `user_roles` (
  `id` tinyint(4) NOT NULL,
  `whoEdit` varchar(15) DEFAULT NULL,
  `lastEdit` date DEFAULT NULL,
  `idUser` tinyint(4) NOT NULL,
  `idRole` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `whoEdit`, `lastEdit`, `idUser`, `idRole`) VALUES
(1, NULL, NULL, 1, 1),
(2, NULL, NULL, 3, 3),
(3, 'Ania', '2022-05-10', 4, 2),
(4, 'Ania', '2022-05-13', 2, 2),
(5, 'Ania', '2022-05-20', 5, 4),
(6, NULL, NULL, 10, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `votes`
--

CREATE TABLE `votes` (
  `id` tinyint(4) NOT NULL,
  `id_user` tinyint(4) NOT NULL,
  `id_group` tinyint(4) NOT NULL,
  `id_betting` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bettings`
--
ALTER TABLE `bettings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `betting_creator` (`betting_creator`);

--
-- Indeksy dla tabeli `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- Indeksy dla tabeli `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idRole` (`idRole`);

--
-- Indeksy dla tabeli `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_group`,`id_betting`),
  ADD KEY `id_betting` (`id_betting`),
  ADD KEY `id_group` (`id_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bettings`
--
ALTER TABLE `bettings`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bettings`
--
ALTER TABLE `bettings`
  ADD CONSTRAINT `bettings_ibfk_1` FOREIGN KEY (`betting_creator`) REFERENCES `users` (`idUser`) ON DELETE CASCADE;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `user_roles` (`idRole`) ON DELETE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE CASCADE;

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`id_betting`) REFERENCES `bettings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `votes_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`idUser`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
