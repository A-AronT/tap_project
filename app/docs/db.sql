-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Mai 19, 2021 kell 07:51 EL
-- Serveri versioon: 10.4.18-MariaDB
-- PHP versioon: 7.4.16

SET
FOREIGN_KEY_CHECKS=0;
SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";

--
-- Andmebaas: `kpr`
--
CREATE
DATABASE IF NOT EXISTS `kpr` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE
`kpr`;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity`
(
    `id` int
(
    11
) NOT NULL AUTO_INCREMENT,
    `name` varchar
(
    255
) NOT NULL,
    PRIMARY KEY
(
    `id`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `activity`
--

INSERT INTO `activity` (`id`, `name`)
VALUES (1, ''katused''),
       (2, ''põrandad''),
       (3, ''basseinid''),
       (4, ''maja ehitus'');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners`
(
    `id` int
(
    11
) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar
(
    255
) NOT NULL,
    `reg_nr` int
(
    11
) UNSIGNED NOT NULL,
    `email` varchar
(
    255
) NOT NULL,
    `phone` varchar
(
    255
) NOT NULL,
    `activity` int
(
    11
) NOT NULL,
    `activity_details` varchar
(
    255
) NOT NULL,
    `location` varchar
(
    255
) NOT NULL,
    PRIMARY KEY
(
    `id`
),
    KEY `activity`
(
    `activity`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `partners`
--

INSERT INTO `partners` (`id`, `name`, `reg_nr`, `email`, `phone`, `activity`, `activity_details`, `location`)
VALUES (6, ''Quinton'', 12345, ''quin71@gmail.com'', ''1234567'', 3, ''kloriini käsitlus'', ''uus meremaa'');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users`
(
    `id` int
(
    11
) NOT NULL AUTO_INCREMENT,
    `name` varchar
(
    255
) NOT NULL,
    `email` varchar
(
    255
) NOT NULL,
    `password` varchar
(
    255
) NOT NULL,
    `created` date NOT NULL DEFAULT current_timestamp
(
),
    PRIMARY KEY
(
    `id`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Tõmmistatud tabelite piirangud
--

--
-- Piirangud tabelile `partners`
--
ALTER TABLE `partners`
    ADD CONSTRAINT `partners_ibfk_1` FOREIGN KEY (`activity`) REFERENCES `activity` (`id`);
SET
FOREIGN_KEY_CHECKS=1;
COMMIT;
