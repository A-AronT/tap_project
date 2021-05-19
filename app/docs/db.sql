-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Mai 19, 2021 kell 08:13 EL
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
VALUES (1, 'katused'),
       (2, 'põrandad'),
       (3, 'basseinid'),
       (4, 'maja ehitus');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `activity_details`
--

DROP TABLE IF EXISTS `activity_details`;
CREATE TABLE IF NOT EXISTS `activity_details`
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
    ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `activity_details`
--

INSERT INTO `activity_details` (`id`, `name`)
VALUES (1, 'kloriini käsitlus'),
       (2, 'plekkkatused'),
       (3, 'puitkatused'),
       (4, 'puitpõrandad'),
       (5, 'palkmajad');

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
    ) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Andmete tõmmistamine tabelile `partners`
--

INSERT INTO `partners` (`id`, `name`, `reg_nr`, `email`, `phone`, `activity`, `location`)
VALUES (7, 'Quinton', 12345, 'quin71@gmail.com', '1234567', 3, 'uus meremaa'),
       (8, 'Toomas Peeterson', 23456, 'toomasp@gmail.com', '2345678', 1, 'üle eesti'),
       (9, 'Juhan', 52312, 'jupats@gmail.com', '3456789', 2, 'tartumaa'),
       (10, 'Jüri', 63136, 'ratas@eesti.ee', '4567891', 4, 'üle eesti'),
       (11, 'Peeterson Toomas', 23456, 'peetersont@gmail.com', '2345678', 1, 'üle eesti');

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
-- Andmete tõmmistamine tabelile `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`)
VALUES (1, 'yep', 'yep@gmail.com', 'q', '2021-05-10'),
       (2, 'yeps', '', '', '2021-05-11'),
       (3, 'yeps', '', '', '2021-05-11'),
       (4, 'QUINTONSIXNINRE', '', '', '2021-05-11'),
       (5, 'YESYESYE', 'YESYESYES@YES.YES', '$2y$10$bOul3BlyBb4MIOZUkf03BewNKEA6lAzYD2en7ajS7AnWErmK6qgMu',
        '2021-05-11'),
       (6, 'yeps', 'saararon@gmail.com', '$2y$10$GazAC7CRHp9a/dJs0R9WG.9ARzAzNQc.SZBqRnJZTvdOixgs066iG', '2021-05-11'),
       (7, 'praks8', 'gesae@gma.com', '$2y$10$ugCUn.FO8q8izaUV64UpVeJYGPQPxO9dTWOe98XxXmqQ6MI3IFCbi', '2021-05-11'),
       (8, 'yeps', 'yep@gmai2l.com', '$2y$10$uF01SpNOs7Q9o3wHFK1GQe79yWNoNqdIP5q1yE6dttxcvkhS/57vS', '2021-05-11'),
       (9, 'yeps', 'yep@gmai22l.com', '$2y$10$1nbL4WTQIcQnSbBHw.4BqeDlFfYjEE3C3uqrCRwRXz/hB8E/NieDu', '2021-05-11'),
       (10, 'toomas', 'toomas@gmail.com', '$2y$10$vAya8yg5e3pvKhTC/J1O2OOpuseXW5Fh6GrMd8BtkoTKnwlCjAoea', '2021-05-11');

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
