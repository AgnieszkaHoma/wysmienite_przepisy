-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Cze 2021, 14:47
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `comment`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`cid`, `username`, `date`, `message`) VALUES
(60, 'Użytkownik', '2021-06-23 14:19:49', 'sds');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments_o`
--

CREATE TABLE `comments_o` (
  `cid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `comments_o`
--

INSERT INTO `comments_o` (`cid`, `username`, `date`, `message`) VALUES
(1, 'Anonymous', '2021-06-20 22:38:20', 'elo'),
(2, 'Użytkownik', '2021-06-22 14:19:15', 'siema'),
(3, 'Użytkownik', '2021-06-22 18:27:45', 'super mordy'),
(4, 'Użytkownik', '2021-06-23 14:19:42', 'sds');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments_s`
--

CREATE TABLE `comments_s` (
  `cid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `comments_s`
--

INSERT INTO `comments_s` (`cid`, `username`, `date`, `message`) VALUES
(1, 'Anonymous', '2021-06-20 22:56:05', 'siemaneczko'),
(2, 'Użytkownik', '2021-06-21 22:25:35', ''),
(3, 'Użytkownik', '2021-06-21 22:25:40', ''),
(4, 'Użytkownik', '2021-06-21 22:25:40', ''),
(5, 'Użytkownik', '2021-06-21 22:25:40', ''),
(6, 'Użytkownik', '2021-06-21 22:25:40', ''),
(7, 'Użytkownik', '2021-06-21 22:25:40', ''),
(8, 'Użytkownik', '2021-06-21 22:25:40', ''),
(9, 'Użytkownik', '2021-06-21 22:25:40', ''),
(10, 'Użytkownik', '2021-06-21 22:25:40', ''),
(11, 'Użytkownik', '2021-06-21 22:25:40', ''),
(12, 'Użytkownik', '2021-06-21 22:25:40', ''),
(13, 'Użytkownik', '2021-06-21 22:25:40', ''),
(14, 'Użytkownik', '2021-06-21 22:25:40', ''),
(15, 'Użytkownik', '2021-06-21 22:25:40', ''),
(16, 'Użytkownik', '2021-06-21 22:25:40', ''),
(17, 'Użytkownik', '2021-06-21 22:25:40', ''),
(18, 'Użytkownik', '2021-06-21 22:25:40', ''),
(19, 'Użytkownik', '2021-06-21 22:25:40', ''),
(20, 'Użytkownik', '2021-06-21 22:25:40', ''),
(21, 'Użytkownik', '2021-06-23 14:19:26', 'sds');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `poczekalnia`
--

CREATE TABLE `poczekalnia` (
  `cid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `poczekalnia`
--

INSERT INTO `poczekalnia` (`cid`, `username`, `date`, `message`) VALUES
(1, 'Admin', '2021-06-23 11:55:43', 'Racuchy z jabłkami.\nSkładniki:\n260 ml mleka\n1 jajko\n170 g mąki typu 650\n1 łyżka cukru wanilinowego\n1 łyżeczka cukru\n1/2 łyżeczki sody oczyszczonej\nodrobina oleju do smażenia\n\nPrzygotowanie:\nMąkę przesiać do miski, dodać cukier wanilinowy, cukier oraz sodę oczyszczoną, wymieszać.\nDodać mleko i jajko i wymieszać składniki rózgą na jednolitą masę bez grudek.\nWykładać po około łyżce ciasta na rozgrzany tłuszcz na patelni i smażyć przez około 1 minuty na złocisty kolor. Przewrócić na drugą stronę i powtórzyć smażenie.\nAby racuszki lepiej wyglądały można posypać cukrem pudrem lub ozdobić dżemem.\nSmacznego :)\n');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indeksy dla tabeli `comments_o`
--
ALTER TABLE `comments_o`
  ADD PRIMARY KEY (`cid`);

--
-- Indeksy dla tabeli `comments_s`
--
ALTER TABLE `comments_s`
  ADD PRIMARY KEY (`cid`);

--
-- Indeksy dla tabeli `poczekalnia`
--
ALTER TABLE `poczekalnia`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT dla tabeli `comments_o`
--
ALTER TABLE `comments_o`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `comments_s`
--
ALTER TABLE `comments_s`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `poczekalnia`
--
ALTER TABLE `poczekalnia`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
