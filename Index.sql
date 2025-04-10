CREATE DATABASE IF NOT EXISTS `Solo Leveling`;
USE `Solo Leveling`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_name` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `âge` int(255) NOT NULL,
    PRIMARY KEY (`id`)
);