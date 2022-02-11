-- Adminer 4.8.1 MySQL 5.5.5-10.5.13-MariaDB-0ubuntu0.21.10.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `name` varchar(45) DEFAULT NULL,
                            PRIMARY KEY (`id`),
                            UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `category` (`id`, `name`) VALUES
                                          (1,	'Cat1'),
                                          (2,	'Cat2'),
                                          (3,	'Cat3');

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `name` varchar(45) NOT NULL,
                          `firstname` varchar(45) DEFAULT NULL,
                          `password` varchar(45) NOT NULL,
                          `email` varchar(45) NOT NULL,
                          PRIMARY KEY (`id`),
                          UNIQUE KEY `id_UNIQUE` (`id`),
                          UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `client` (`id`, `name`, `firstname`, `password`, `email`) VALUES
                                                                          (1,	'Charlie',	NULL,	'sdfds',	'sdfsdf@gmail.com'),
                                                                          (2,	'Hugo',	'sdfsdf',	'sdfdsdf',	'hhh@gmail.com'),
                                                                          (3,	'Toto',	NULL,	'qbga',	'ttt@gmail.co');

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `order_date` datetime NOT NULL,
                         `delivery_date` date NOT NULL,
                         `client_id` int(11) NOT NULL,
                         PRIMARY KEY (`id`),
                         UNIQUE KEY `id_UNIQUE` (`id`),
                         KEY `fk_order_client1_idx` (`client_id`),
                         CONSTRAINT `fk_order_client1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `order` (`id`, `order_date`, `delivery_date`, `client_id`) VALUES
                                                                           (1,	'2022-01-03 01:01:01',	'2022-01-08',	1),
                                                                           (2,	'2022-01-05 01:01:01',	'2022-01-28',	2),
                                                                           (3,	'2022-01-03 01:01:01',	'2022-01-28',	1);

DROP TABLE IF EXISTS `order_has_product`;
CREATE TABLE `order_has_product` (
                                     `order_id` int(11) NOT NULL,
                                     `product_id` int(11) NOT NULL,
                                     `quantity` int(11) NOT NULL,
                                     `order_price` float NOT NULL,
                                     PRIMARY KEY (`order_id`,`product_id`),
                                     KEY `fk_order_has_product_product1_idx` (`product_id`),
                                     KEY `fk_order_has_product_order1_idx` (`order_id`),
                                     CONSTRAINT `fk_order_has_product_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
                                     CONSTRAINT `fk_order_has_product_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `order_has_product` (`order_id`, `product_id`, `quantity`, `order_price`) VALUES
                                                                                          (1,	1,	12,	20),
                                                                                          (1,	2,	3,	15.5),
                                                                                          (1,	3,	1,	22),
                                                                                          (2,	1,	2,	1);

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `name` varchar(45) NOT NULL,
                           `description` longtext NOT NULL,
                           `price` float NOT NULL,
                           `weight` float NOT NULL,
                           `tva` float NOT NULL,
                           `stock` int(11) NOT NULL,
                           `category_id` int(11) NOT NULL,
                           PRIMARY KEY (`id`),
                           UNIQUE KEY `id_UNIQUE` (`id`),
                           KEY `fk_product_category1_idx` (`category_id`),
                           CONSTRAINT `fk_product_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;