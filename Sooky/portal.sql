-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 10.Dec 2022, 14:03
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `portal`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `days`
--

CREATE TABLE `days` (
  `id` int(11) NOT NULL,
  `div_id` varchar(50) NOT NULL,
  `day_id` int(11) NOT NULL,
  `day` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `days`
--

INSERT INTO `days` (`id`, `div_id`, `day_id`, `day`) VALUES
(1, 'monday', 2, 'Pondelok'),
(2, 'tuesday', 3, 'Utorok'),
(3, 'wednesday', 4, 'Streda'),
(4, 'thursday', 5, 'Štvrtok'),
(5, 'friday', 6, 'Piatok');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `destinations`
--

INSERT INTO `destinations` (`id`, `name`) VALUES
(1, 'Cambodia'),
(2, 'Hong Kong'),
(3, 'India'),
(4, 'Japan'),
(5, 'Korea'),
(6, 'Laos'),
(7, 'Myanmar'),
(8, 'Singapore'),
(9, 'Thailand'),
(10, 'Vietnam');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `most_visited`
--

CREATE TABLE `most_visited` (
  `id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `most_visited`
--

INSERT INTO `most_visited` (`id`, `city`, `about`, `image`) VALUES
(2, 'Moravce', 'Lorem ipsum dolor', 'img/place-02.jpg'),
(3, 'Paris', 'Proin dignissim', 'img/place-03.jpg'),
(4, 'Hollywood', 'Fusce sed ipsum', 'img/place-04.jpg'),
(5, 'Tokyo', 'Vivamus egestas', 'img/place-02.jpg'),
(6, 'New York', 'Aliquam elit metus', 'img/place-01.jpg'),
(7, 'Paris', 'Phasellus pharetra', 'img/place-03.jpg'),
(8, 'Hollywood', 'In in quam efficitur', 'img/place-04.jpg'),
(9, 'NEW YORK', 'Sed faucibus odio', 'img/place-01.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `recomended`
--

CREATE TABLE `recomended` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `href` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `recomended`
--

INSERT INTO `recomended` (`id`, `name`, `href`) VALUES
(1, 'Living Room', 'livingroom'),
(2, 'Suit Room', 'suitroom'),
(3, 'Swiming Pool', 'swimingpool'),
(4, 'Massage Service', 'massage'),
(5, 'Fitness Life', 'fitness'),
(6, 'Evening Event', 'event');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `recomended_items`
--

CREATE TABLE `recomended_items` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `about` varchar(40) NOT NULL,
  `image` varchar(128) NOT NULL,
  `href` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `recomended_items`
--

INSERT INTO `recomended_items` (`id`, `name`, `about`, `image`, `href`) VALUES
(1, 'Aurora Resort', 'Clean And Relaxing Room', 'img/suite-02.jpg', 'suitroom'),
(2, 'Khao Yai Hotel', 'Special Living Room TV', 'img/suite-01.jpg', 'livingroom'),
(3, 'Victoria Resort and Spa', 'Lovely Swiming Pool For Special Guests', 'img/swiming-pool.jpg', 'swimingpool'),
(4, 'Napali Beach', 'Perfect Place For Relaxation', 'img/massage-service.jpg', 'massage'),
(5, 'Hua Hin Beach', 'Insane Street Workout', 'img/fitness-service.jpg', 'fitness'),
(6, 'Queen Restaurant', 'Finest Winery Night', 'img/evening-event.jpg', 'event');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `from` text NOT NULL,
  `to` text NOT NULL,
  `departure` varchar(30) NOT NULL,
  `return` varchar(30) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `tickets`
--

INSERT INTO `tickets` (`id`, `from`, `to`, `departure`, `return`, `type`) VALUES
(1, 'Hong Kong', 'Hong Kong', '12/13/2022', '12/27/2022', 'oneway'),
(2, 'Cambodia', 'Hong Kong', '11/30/2022', '12/20/2022', 'oneway');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.sk', 'heslo');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `weather`
--

CREATE TABLE `weather` (
  `id` int(11) NOT NULL,
  `temp_avg` int(11) NOT NULL,
  `temp_one` int(11) NOT NULL,
  `temp_two` int(11) NOT NULL,
  `temp_three` int(11) NOT NULL,
  `temp_four` int(11) NOT NULL,
  `date` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `weather` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `weather`
--

INSERT INTO `weather` (`id`, `temp_avg`, `temp_one`, `temp_two`, `temp_three`, `temp_four`, `date`, `country`, `weather`) VALUES
(1, 32, 21, 45, 32, 22, '2022-12-19', 'India', 'sunny'),
(2, 23, 24, 13, 42, 23, '2022-12-19', 'China', 'rainy'),
(3, 23, 32, 23, 32, 23, '2022-12-19', 'Slovakia', 'cloudy'),
(4, 23, 23, 43, 54, 35, '2022-12-27', 'India', 'sunny'),
(5, 45, 53, 32, 32, 43, '2022-12-27', 'Slovakia', 'rainy'),
(6, 42, 34, 23, 43, 23, '2022-12-27', 'Germany', 'cloudy'),
(7, 23, 32, 32, 42, 32, '2022-12-28', 'Germany', 'sunny'),
(8, 32, 43, 53, 24, 53, '2022-12-28', 'Norway', 'sunny'),
(9, 42, 53, 31, 43, 31, '2022-12-28', 'Australia', 'sunny'),
(10, 31, 23, 13, 41, 43, '2022-12-29', 'Germany', 'rainy'),
(11, 12, 1, 23, 32, 5, '2022-12-29', 'Norway', 'rainy'),
(12, 32, 32, 32, 22, 32, '2022-12-29', 'Australia', 'sunny'),
(13, 2, 23, 0, 3, 4, '2022-12-30', 'Australia', 'sunny'),
(14, 32, 23, 43, 53, 23, '2022-12-30', 'India', 'rainy'),
(15, 12, 21, 12, 4, 2, '2022-12-30', 'Norway', 'rainy'),
(16, 29, 29, 29, 29, 29, '2022-12-02', 'Czechia', 'cloudy'),
(19, 10, 11, 12, 13, 14, '2022-12-07', 'Holandsko', 'sunny'),
(20, 13, 11, 10, 8, 8, '2022-12-07', 'Old York', 'sunny');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `most_visited`
--
ALTER TABLE `most_visited`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `recomended`
--
ALTER TABLE `recomended`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `recomended_items`
--
ALTER TABLE `recomended_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `weather`
--
ALTER TABLE `weather`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `most_visited`
--
ALTER TABLE `most_visited`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `recomended`
--
ALTER TABLE `recomended`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `recomended_items`
--
ALTER TABLE `recomended_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pre tabuľku `weather`
--
ALTER TABLE `weather`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
