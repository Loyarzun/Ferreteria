ALTER TABLE `tienda`.`orders` 
ADD COLUMN `order_state` VARCHAR(45) NOT NULL AFTER `order_email`;