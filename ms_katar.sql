-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Lis 2022, 11:49
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
-- Baza danych: `ms_katar`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa_a`
--

CREATE TABLE `grupa_a` (
  `Zespol` varchar(15) DEFAULT NULL,
  `Pkt` int(11) DEFAULT NULL,
  `M` int(11) DEFAULT NULL,
  `W` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL,
  `P` int(11) DEFAULT NULL,
  `Br_Z` int(11) DEFAULT NULL,
  `Br_S` int(11) DEFAULT NULL,
  `Bilans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `grupa_a`
--

INSERT INTO `grupa_a` (`Zespol`, `Pkt`, `M`, `W`, `R`, `P`, `Br_Z`, `Br_S`, `Bilans`) VALUES
('Katar', 0, 0, 0, 0, 0, 0, 0, 0),
('Ekwador', 0, 0, 0, 0, 0, 0, 0, 0),
('Senegal', 0, 0, 0, 0, 0, 0, 0, 0),
('Holandia', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa_b`
--

CREATE TABLE `grupa_b` (
  `Zespol` varchar(15) DEFAULT NULL,
  `Pkt` int(11) DEFAULT NULL,
  `M` int(11) DEFAULT NULL,
  `W` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL,
  `P` int(11) DEFAULT NULL,
  `Br_Z` int(11) DEFAULT NULL,
  `Br_S` int(11) DEFAULT NULL,
  `Bilans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `grupa_b`
--

INSERT INTO `grupa_b` (`Zespol`, `Pkt`, `M`, `W`, `R`, `P`, `Br_Z`, `Br_S`, `Bilans`) VALUES
('Anglia', 0, 0, 0, 0, 0, 0, 0, 0),
('Iran', 0, 0, 0, 0, 0, 0, 0, 0),
('Stany Zjednoczo', 0, 0, 0, 0, 0, 0, 0, 0),
('Walia', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa_c`
--

CREATE TABLE `grupa_c` (
  `Zespol` varchar(15) DEFAULT NULL,
  `Pkt` int(11) DEFAULT NULL,
  `M` int(11) DEFAULT NULL,
  `W` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL,
  `P` int(11) DEFAULT NULL,
  `Br_Z` int(11) DEFAULT NULL,
  `Br_S` int(11) DEFAULT NULL,
  `Bilans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `grupa_c`
--

INSERT INTO `grupa_c` (`Zespol`, `Pkt`, `M`, `W`, `R`, `P`, `Br_Z`, `Br_S`, `Bilans`) VALUES
('Argentyna', 0, 0, 0, 0, 0, 0, 0, 0),
('Arabia Saudyjsk', 0, 0, 0, 0, 0, 0, 0, 0),
('Meksyk', 0, 0, 0, 0, 0, 0, 0, 0),
('Polska', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa_d`
--

CREATE TABLE `grupa_d` (
  `Zespol` varchar(15) DEFAULT NULL,
  `Pkt` int(11) DEFAULT NULL,
  `M` int(11) DEFAULT NULL,
  `W` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL,
  `P` int(11) DEFAULT NULL,
  `Br_Z` int(11) DEFAULT NULL,
  `Br_S` int(11) DEFAULT NULL,
  `Bilans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `grupa_d`
--

INSERT INTO `grupa_d` (`Zespol`, `Pkt`, `M`, `W`, `R`, `P`, `Br_Z`, `Br_S`, `Bilans`) VALUES
('Francja', 0, 0, 0, 0, 0, 0, 0, 0),
('Australia', 0, 0, 0, 0, 0, 0, 0, 0),
('Dania', 0, 0, 0, 0, 0, 0, 0, 0),
('Tunezja', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa_e`
--

CREATE TABLE `grupa_e` (
  `Zespol` varchar(15) DEFAULT NULL,
  `Pkt` int(11) DEFAULT NULL,
  `M` int(11) DEFAULT NULL,
  `W` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL,
  `P` int(11) DEFAULT NULL,
  `Br_Z` int(11) DEFAULT NULL,
  `Br_S` int(11) DEFAULT NULL,
  `Bilans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `grupa_e`
--

INSERT INTO `grupa_e` (`Zespol`, `Pkt`, `M`, `W`, `R`, `P`, `Br_Z`, `Br_S`, `Bilans`) VALUES
('Hiszpania', 0, 0, 0, 0, 0, 0, 0, 0),
('Kostaryka', 0, 0, 0, 0, 0, 0, 0, 0),
('Niemcy', 0, 0, 0, 0, 0, 0, 0, 0),
('Japonia', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa_f`
--

CREATE TABLE `grupa_f` (
  `Zespol` varchar(15) DEFAULT NULL,
  `Pkt` int(11) DEFAULT NULL,
  `M` int(11) DEFAULT NULL,
  `W` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL,
  `P` int(11) DEFAULT NULL,
  `Br_Z` int(11) DEFAULT NULL,
  `Br_S` int(11) DEFAULT NULL,
  `Bilans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `grupa_f`
--

INSERT INTO `grupa_f` (`Zespol`, `Pkt`, `M`, `W`, `R`, `P`, `Br_Z`, `Br_S`, `Bilans`) VALUES
('Belgia', 0, 0, 0, 0, 0, 0, 0, 0),
('Kanada', 0, 0, 0, 0, 0, 0, 0, 0),
('Maroko', 0, 0, 0, 0, 0, 0, 0, 0),
('Chorwacja', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa_g`
--

CREATE TABLE `grupa_g` (
  `Zespol` varchar(15) DEFAULT NULL,
  `Pkt` int(11) DEFAULT NULL,
  `M` int(11) DEFAULT NULL,
  `W` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL,
  `P` int(11) DEFAULT NULL,
  `Br_Z` int(11) DEFAULT NULL,
  `Br_S` int(11) DEFAULT NULL,
  `Bilans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `grupa_g`
--

INSERT INTO `grupa_g` (`Zespol`, `Pkt`, `M`, `W`, `R`, `P`, `Br_Z`, `Br_S`, `Bilans`) VALUES
('Brazylia', 0, 0, 0, 0, 0, 0, 0, 0),
('Serbia', 0, 0, 0, 0, 0, 0, 0, 0),
('Szwacjaria', 0, 0, 0, 0, 0, 0, 0, 0),
('Kamerun', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupa_h`
--

CREATE TABLE `grupa_h` (
  `Zespol` varchar(15) DEFAULT NULL,
  `Pkt` int(11) DEFAULT NULL,
  `M` int(11) DEFAULT NULL,
  `W` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL,
  `P` int(11) DEFAULT NULL,
  `Br_Z` int(11) DEFAULT NULL,
  `Br_S` int(11) DEFAULT NULL,
  `Bilans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `grupa_h`
--

INSERT INTO `grupa_h` (`Zespol`, `Pkt`, `M`, `W`, `R`, `P`, `Br_Z`, `Br_S`, `Bilans`) VALUES
('Portugalia', 0, 0, 0, 0, 0, 0, 0, 0),
('Ghana', 0, 0, 0, 0, 0, 0, 0, 0),
('Urugwaj', 0, 0, 0, 0, 0, 0, 0, 0),
('Korea Południow', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miastaistadiony`
--

CREATE TABLE `miastaistadiony` (
  `ID` int(11) NOT NULL,
  `Miasto` varchar(50) DEFAULT NULL,
  `Stadion` varchar(50) DEFAULT NULL,
  `Pojemnosc` varchar(50) DEFAULT NULL,
  `Ilosc_meczy` varchar(50) DEFAULT NULL,
  `Pierwszy_mecz` varchar(50) DEFAULT NULL,
  `Ostatni_mecz` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `miastaistadiony`
--

INSERT INTO `miastaistadiony` (`ID`, `Miasto`, `Stadion`, `Pojemnosc`, `Ilosc_meczy`, `Pierwszy_mecz`, `Ostatni_mecz`) VALUES
(1, 'Lusajl', 'Lusail Stadium', '80.000', '6 meczów fazy grupowej, 1/8 finału, ćwierćfinał, p', '22 listopada 2022', '18 grudnia 2022'),
(2, 'Al-Chaur', 'Al Bayt Stadium', '60.000', '6 meczów fazy grupowej, mecz otwarcia, 1/8 finału,', '20 listopada 2022', '14 grudnia 2022'),
(3, 'Doha', 'Stadium 974', '40.000', '6 meczów fazy grupowej, 1/8 finału,', '22 listopada 2022', '5 grudnia 2022'),
(4, 'Doha', 'Al Thumana Stadium', '40.000', '6 meczów fazy grupowej, 1/8 finału, ćwierćfinał', '21 listopada 2022', '10 grudnia 2022'),
(5, 'Ar-Rajjan', 'Education City Stadium', '45 350', '6 meczów fazy grupowej, 1/8 finału, ćwierćfinał', '22 listopada 2022', '9 grudnia 2022'),
(6, 'Ar-Rajjan', 'Ahmed bin Ali Stadium', '44 740', '6 meczów fazy grupowej, 1/8 finału', '21 listopada 2022', '3 grudnia 2022'),
(7, 'Ar-Rajjan', 'Khalifa International Stadium', '45 416', '6 meczów fazy grupowej, 1/8 finału, mecz o 3. miej', '21 listopada 2022', '17 grudnia 2022'),
(8, 'Al-Wakra', 'Al Janoub Stadium', '40 000', '6 meczów fazy grupowej, 1/8 finału', '22 listopada 2022', '5 grudnia 2022');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sedziowie`
--

CREATE TABLE `sedziowie` (
  `Konfederacja` varchar(20) DEFAULT NULL,
  `Panstwo` varchar(50) DEFAULT NULL,
  `Sedzia` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `sedziowie`
--

INSERT INTO `sedziowie` (`Konfederacja`, `Panstwo`, `Sedzia`) VALUES
('AFC', 'Katar', 'Abdulla Al Marri'),
('AFC', 'Singapur', 'Muhammad Taqi'),
('AFC', 'Australia', 'Shaun Evans'),
('CAF', 'Maroko', 'Rédouane Jiyed'),
('CONCACAF', 'Kanada', 'Adil Zourakl'),
('CONCACAF', 'Meksyk', 'Armando Villarreal'),
('CONCACAF', 'Stany Zjednoczone', 'Mauro Vigliano'),
('CONCACAF', 'Chile', 'Armando Villarreal'),
('CONMEBOL', 'Kolumbia', 'Jérôme Brisard'),
('UEFA', 'Urugwaj', 'Bastian Dankert'),
('UEFA', 'Francja', 'Pol van Boekel'),
('UEFA', 'Polska', 'Tomasz Kwiatkowski'),
('UEFA', 'Hiszpania', 'Alejandro Hernández Hernández'),
('UEFA', 'Holandia', 'Benoît Millot');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `miastaistadiony`
--
ALTER TABLE `miastaistadiony`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `miastaistadiony`
--
ALTER TABLE `miastaistadiony`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
