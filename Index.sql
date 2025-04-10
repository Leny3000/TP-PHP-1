CREATE DATABASE IF NOT EXISTS `Solo Leveling` CHARACTER SET utf8mb4 COLLATE uft8mb4_unicode_ci;
USE `Solo Leveling`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `âge` int(255) NOT NULL,
    PRIMARY KEY (`id`)
);