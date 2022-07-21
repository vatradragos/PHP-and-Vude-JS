-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: dec. 29, 2021 la 08:20 PM
-- Versiune server: 10.4.21-MariaDB
-- Versiune PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `transparent`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `bookcategories`
--

CREATE TABLE `bookcategories` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `bookcategories`
--

INSERT INTO `bookcategories` (`id`, `category`, `created_at`) VALUES
(1, 'children', '2021-11-09 13:59:49'),
(2, 'history', '2021-12-10 10:33:16'),
(3, 'novels', '2021-12-10 10:33:48'),
(4, 'science', '2021-12-10 10:33:59');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `books`
--

INSERT INTO `books` (`id`, `category`, `author`, `title`, `year`) VALUES
(16, 1, 'Senior Author', 'Endgame', 2020),
(17, 1, 'Rick Riordan', 'Daugther of the Deep', 2020),
(18, 1, 'Harriet Muncaster', 'Isadora Moon', 2019),
(19, 2, 'Clive Aslet', 'The Story of the Country House', 2020),
(20, 2, 'Joanna Lumley', 'A Queen for all Seasons', 2019),
(21, 2, 'Jonathan Dimbleby', 'Barbarossa', 2020),
(22, 3, 'Jonathan Franzen', 'Crossroads', 2020),
(23, 3, 'Colson Whitehead', 'Harlem Shuffle', 2021),
(24, 3, 'Pat Barker', 'The Women of Troy', 2020),
(25, 4, 'Matt Baker', 'A Year on our Farm', 2020),
(26, 4, 'Sarah Gilbert', 'Vaxxers', 2019),
(27, 4, 'Paul Merson', 'Hooked', 2020),
(28, 1, 'Alex Smith', 'How Winston delivered Christmas', 2020),
(29, 1, 'Adam Kay', 'Kay\'s marvellous Medicine', 2019),
(30, 1, 'Cashawn Thompson', 'Good Night Stories for Rebel Girls', 2020),
(31, 2, 'Andrew Pettegree', 'The Library', 2021),
(32, 2, 'Allan Mallinson', 'The Shape of Battle', 2021),
(34, 2, 'Edward Brooke', 'The Devil\'s Atlas', 2021),
(35, 3, 'Katherine Ryan', 'The Audacity', 2021),
(36, 3, 'Michael McIntyre', 'A Funny Life', 2020),
(38, 3, 'J R Tolkien', 'The Lord of the Rings', 2019),
(39, 4, 'Merlin Sheldrake', 'Entangled Life', 2020),
(40, 4, 'Oliver Burkeman', 'Four Thousand Weeks', 2020),
(41, 4, 'Evanna Lynch', 'The Opposite of Buterfly Hunting', 2021),
(42, 1, 'Benjamin Alire Saenz', 'Aristotle and Dante', 2020),
(43, 1, 'Lenny Henry', 'The Boy with Wings', 2020),
(44, 1, 'Candice Carty Williams', 'Empress and Aniya', 2021),
(45, 2, 'Marc David Baer', 'The Ottomans', 2021),
(46, 2, 'Allen Lane', 'George III', 2020),
(47, 2, 'Fintan O Toole', 'We don\'t know ourselves', 2019),
(48, 3, 'Chris Hadfield', 'The Apollo Murders', 2021),
(49, 3, 'Alison Weir', 'In the Shadow of Queens', 2021),
(50, 3, 'Matt Haig', 'The Comfort Book', 2020),
(51, 4, 'Tim Marchall', 'The Power of Geography', 2019),
(52, 4, 'Sathnam Sanghera', 'Empireland', 2021),
(53, 4, 'William Boyd', 'Trio', 2020),
(54, 1, 'Noel Szpatrick', 'Vetman', 2020),
(55, 1, 'Padraig Kenny', 'The Monsters of Rookhaven', 2021),
(56, 1, 'Kerri Maniscalco', 'Kingdom of the Cursed', 2020),
(57, 2, 'Patrick Bishop', 'Operation Jubilee', 2021),
(58, 2, 'David Graeber', 'The Dawn of Everything', 2019),
(59, 2, 'Mary Beard', 'Twelve Caesars', 2021),
(60, 3, 'Bob Mortimer', 'The Autobiography', 2021),
(61, 3, 'Sally Rooney', 'Beautiful world, where are you', 2020),
(62, 3, 'Janice Hallett', 'The Appeal', 2021),
(63, 4, 'Steven Pinker', 'Rationality', 2021),
(64, 4, 'Rutherford and Fry', 'Everything', 2020),
(65, 4, 'Jorge Cham', 'Frequently asked questions about the Universe', 2021),
(66, 1, 'Jeff Kinney', 'Big Shoot', 2019),
(67, 1, 'J R Rowling', 'The Christmas Pig', 2021),
(68, 1, 'Tom Fletcher', 'The Christmasaurus and the naughty List', 2021),
(69, 2, 'James Holland', 'Brothers in Arms', 2021),
(70, 2, 'Jeremy Paxman', 'Black Gold', 2021),
(71, 2, 'Amy Jeffs', 'Storyland', 2021),
(72, 3, 'John Grisham', 'The Judge\'s List', 2021),
(73, 3, 'Dave Grohl', 'The Storyteller', 2021),
(74, 3, 'Richard Osman', 'The Man who died twice', 2021),
(75, 4, 'David Attenborough', 'Living Planet', 2021),
(76, 4, 'HRH Prince William', 'Earthshot', 2021),
(77, 4, 'David Spiegelhalter', 'Covid by Numbers', 2021);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `borrows`
--

CREATE TABLE `borrows` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idbook` int(11) NOT NULL,
  `date_borrowed` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `borrows`
--

INSERT INTO `borrows` (`id`, `iduser`, `idbook`, `date_borrowed`) VALUES
(5, 4, 18, '2021-12-26 09:33:50'),
(6, 4, 23, '2021-12-26 22:01:06');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `forename` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `forename`, `surname`, `username`, `password`, `created_at`) VALUES
(3, 'Dragos', 'Vatra', 'dragosvatra', 'd18928fabad59ca8760b9b81dae6a71c', '2021-11-07 17:57:02'),
(4, 'Ioan', 'Popescu', 'ioanpopescu', '9b2cdc846e52fab1172fd1fff9d4eef3', '2021-11-07 17:57:35'),
(8, 'Gogu', 'GoguCraiu', 'gogu', '88693f28b5706bb8e6cee9289a0e512a', '2021-12-04 18:17:36'),
(9, 'Goerge', 'Washington', 'georgewashington', '0ed2b406efc231be1270e405e86ca14a', '2021-12-11 15:46:11');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `bookcategories`
--
ALTER TABLE `bookcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category`);

--
-- Indexuri pentru tabele `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `bookcategories`
--
ALTER TABLE `bookcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pentru tabele `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pentru tabele `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category`) REFERENCES `bookcategories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
