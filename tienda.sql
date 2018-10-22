-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';


-- -----------------------------------------------------
-- Schema tienda
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tienda`;
USE `tienda` ;

CREATE TABLE `tienda`.`products` (
`product_id` int(11) NOT NULL,
`product_name` varchar(255) NOT NULL,
`product_image` varchar(255) DEFAULT NULL,
`product_description` text,
`product_price` decimal(10,2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `tienda`.`products`
ADD PRIMARY KEY (`product_id`),
ADD KEY `name` (`product_name`);

ALTER TABLE `tienda`.`products`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `tienda`.`orders` (
`order_id` int(11) NOT NULL,
`order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
`order_name` varchar(255) NOT NULL,
`order_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `tienda`.`orders`
ADD PRIMARY KEY (`order_id`),
ADD KEY `name` (`order_name`),
ADD KEY `email` (`order_email`),
ADD KEY `order_date` (`order_date`);

ALTER TABLE `tienda`.`orders`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `tienda`.`orders_items` (
`order_id` int(11) NOT NULL,
`product_id` int(11) NOT NULL,
`quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `tienda`.`orders_items`
ADD PRIMARY KEY (`order_id`,`product_id`);

INSERT INTO `tienda`.`products` (`product_id`, `product_name`, `product_image`, `product_description`, `product_price`) VALUES
(1, 'Car', 'car.jpg', 'It\'s a car. Batteries not included, not required. Powered by hand.', '6.00'),
(2, 'Dangerous Bear', 'dangerous-bear.jpg', 'Beware. This bear is extremely dangerous.', '8.00'),
(3, 'Fish', 'fish.jpg', 'There is something fishy going on here...', '7.50'),
(4, 'Chill Gorilla', 'gorilla.jpg', 'Unlike the dangerous bear, this one is chill.', '8.80'),
(5, 'Rubber Duck', 'rubber-duck.jpg', 'Best partner in the bath tub.', '9.75'),
(6, 'Rubiks Cube', 'rubiks-cube.jpg', 'Some say that this cube trains your intelligence. Some others claim that it\'s just frustration.', '9.30');