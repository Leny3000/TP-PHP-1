CREATE DATABASE IF NOT EXISTS `TP1` CHARACTER SET utf8mb4;
USE `TP1`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `âge` int(255) NOT NULL,
    PRIMARY KEY (`id`)
);