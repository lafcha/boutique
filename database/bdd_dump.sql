-- Adminer 4.8.1 MySQL 5.5.5-10.5.13-MariaDB-0ubuntu0.21.10.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `boutique`;
CREATE DATABASE `boutique` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `boutique`;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `name` varchar(45) DEFAULT NULL,
                            PRIMARY KEY (`id`),
                            UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `category` (`id`, `name`) VALUES
                                          (1,	'Breads'),
                                          (2,	'Viennoiseries'),
                                          (3,	'Pastries'),
                                          (4,	'Snacks'),
                                          (5,	'Drinks');

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
                                                                          (3,	'Toto',	NULL,	'qbga',	'ttt@gmail.co'),
                                                                          (4,	'Abrahart',	'Brandy',	'aqRZFG5jPr',	'babrahart3@pen.io'),
                                                                          (5,	'Wivell',	'Sumner',	'BHfgZpjV',	'swivell4@skyrock.com'),
                                                                          (6,	'Maddra',	'Ertha',	'R3XDPCmrSIH',	'emaddra5@intel.com'),
                                                                          (7,	'Quinnet',	'Dillie',	'nDiGum',	'dquinnet6@amazon.com'),
                                                                          (8,	'Starte',	'Rayner',	'ccZda6hCv',	'rstarte7@dailymail.co.uk'),
                                                                          (9,	'Knowlson',	'Jodi',	'XX8Em3Et',	'jknowlson8@hc360.com'),
                                                                          (10,	'Duny',	'Helaina',	'tlrQ2G',	'hduny9@wufoo.com'),
                                                                          (11,	'Tuddall',	'Fiann',	'2VLxnJmn',	'ftuddalla@npr.org'),
                                                                          (12,	'Clemmey',	'Artur',	'lchojcHnbE',	'aclemmeyb@nsw.gov.au'),
                                                                          (13,	'Klosser',	'Roxine',	'92qLsZ',	'rklosserc@hatena.ne.jp'),
                                                                          (14,	'Dudhill',	'Kate',	'lsiKJrBtLb',	'kdudhilld@state.gov'),
                                                                          (15,	'Jillett',	'Etan',	'gpjIeEdK',	'ejillette@liveinternet.ru'),
                                                                          (16,	'Meenehan',	'Royal',	'UjiHyVQ',	'rmeenehanf@taobao.com'),
                                                                          (17,	'Asquez',	'Sileas',	'yqZbGBSiI',	'sasquezg@mtv.com'),
                                                                          (18,	'Ambrosini',	'Fernande',	'EV5KnUjWgzK',	'fambrosinih@kickstarter.com'),
                                                                          (19,	'O???Connor',	'Towney',	'pr4tLhdp',	'toconnori@time.com'),
                                                                          (20,	'Winckles',	'Stephie',	'q0IJYApY',	'swincklesj@google.co.jp');

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


DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `name` varchar(45) NOT NULL,
                           `description` longtext NOT NULL,
                           `price` float(10,2) NOT NULL,
  `weight` float(10,2) NOT NULL,
  `tva` float(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_product_category1_idx` (`category_id`),
  CONSTRAINT `fk_product_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`id`, `name`, `description`, `price`, `weight`, `tva`, `stock`, `category_id`) VALUES
                                                                                                          (1,	'Tartes au citron meringu??es',	'P??te sabl?? croustillante, garnis d???une cr??me onctueuse au citron, recouvert d???un nuage de meringues d??licatement brul??.',	2.00,	170.00,	0.20,	50,	3),
                                                                                                          (2,	'Baguette',	'Pain traditionnel avec une cro??te croustillante et une mie moelleuse.\r\n\r\n',	1.00,	220.00,	0.20,	10,	1),
                                                                                                          (3,	'Fl??te',	'Pain fin croustillant ?? l???ext??rieur moelleux ?? l???int??rieur.\r\n',	1.00,	180.00,	0.20,	10,	1),
                                                                                                          (4,	'Pain de Mie ',	'Pain compos?? essentiellement de mie extr??mement moelleuse. Id??ale pour les personnes n???aimant pas une cro??te d??re.',	1.00,	300.00,	0.20,	8,	1),
                                                                                                          (5,	'Pain aux C??r??ales',	'Pain croustillant agr??menter de petites graines (seigle, avoine???)\r\n\r\n',	1.00,	250.00,	0.20,	8,	1),
                                                                                                          (6,	'Pain Complet',	' Pain r??aliser avec de la farine compl??te.',	1.00,	250.00,	0.20,	8,	1),
                                                                                                          (7,	'Pain au chocolat ',	'Duo de barres chocolat?? enroul?? d???une d??licieuse p??te feuillet??e.',	1.00,	110.00,	0.20,	15,	2),
                                                                                                          (8,	'Croissant',	'Triangles de p??tes feuillet?? pur beurre rouler.',	1.00,	90.00,	0.20,	15,	2),
                                                                                                          (9,	' Pains au Raisins',	'brioche roul?? agr??ment?? de raisins secs et de cr??me p??tissi??re',	1.00,	120.00,	0.20,	10,	2),
                                                                                                          (10,	'Beignet framboise',	'Boules de p??te moelleuse, frit fourr?? ?? la confiture de framboises maison.',	1.00,	90.00,	0.20,	10,	2),
                                                                                                          (11,	'Chausson aux pommes',	'Chausson feuillet?? garni d???une compote de pomme ?? la cannelle.',	1.00,	135.00,	0.20,	10,	2),
                                                                                                          (12,	'Succ??s au chocolat',	'Ganache au chocolat noir 75% d??pos?? sur un Biscuit dacquoise (poudre de noisettes) moelleux, enrober d???une couche fin de chcolat craquant.',	2.00,	80.00,	0.20,	8,	3),
                                                                                                          (13,	'Milles-Feuilles',	'P??tisserie faite de trois couches de p??te feuillet??e et deux couches de cr??me p??tissi??re ?? la vanille. D??corer de sucre glace.',	2.00,	80.00,	0.20,	8,	3),
                                                                                                          (15,	'Op??ra',	'Entremets ?? base de cr??me au beurre qui combine la douceur du chocolat et le caract??re du caf??.',	2.00,	100.00,	0.20,	6,	3),
                                                                                                          (16,	'Quiche',	'Tarte sal??es garnies d???une pr??paration ?? base d?????uf et de cr??me, de jambon et de fromage.',	2.00,	125.00,	0.20,	10,	4),
                                                                                                          (17,	'Pizza chorizo',	'P??te ?? pain ??talement finement, recouvert de sauce tomates l??g??rement acidul??e, de tranches de chorizo doux, de mozzarella et de gruy??re r??p??.',	2.00,	90.00,	0.20,	12,	4),
                                                                                                          (18,	'Feuillet?? ch??vre',	'Carr?? de p??te feuillet??, cuit au four, garnis d???une tranche de buche de ch??vre de la Ferme Chevre&co, d???herbe de provence et d???un filet d???huile d???olive.',	2.00,	110.00,	0.20,	6,	4),
                                                                                                          (19,	'Fougasse aux olives',	'Pain ?? la cro??te molle parfum?? ?? l???huile d???olive, garnis de tapenade et de brisure d???olives.',	2.00,	160.00,	0.20,	8,	4),
                                                                                                          (20,	'Canette 33cl',	'Une petite soif? Laissez-vous tentez par une petite canette d??shalt??rente. (Coca-cola, Oasis, Fanta, Ice-Tea, evian...)',	1.00,	350.00,	0.20,	30,	5),
                                                                                                          (21,	'Canette 50cl',	'Une moyenne soif? Laissez-vous tentez par une  canette 50cl d??shalt??rente. (Coca-cola, Oasis, Fanta, Ice-Tea, evian...)',	1.00,	500.00,	0.20,	35,	5);

-- 2022-02-16 15:07:19
