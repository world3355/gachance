CREATE TABLE `users` (
	`user_id` INT(11) NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(50) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `nickname` VARCHAR(100) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
	`phone` VARCHAR(20) NULL DEFAULT NULL,
    `role` VARCHAR(20) NULL DEFAULT NULL,
	`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`modified` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`user_id`),
    UNIQUE KEY ninkname_UNIQUE (`nickname`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

COLLATE=`utf8_general_ci`
ENGINE=InnoDB;




INSERT INTO `users` (`email`, `password`, `nickname`, `name`, `phone`, `created`) VALUES ('test21@cakephp.org', '0000', 'pyeongha', '평강', '0101234021', now());



user : markets = 1 : n

category : markets = 1 : n 


>>카테고리 있음
CREATE TABLE `markets` (
    `market_id` INT(11) NOT NULL AUTO_INCREMENT,
    `product_name` VARCHAR(50) NOT NULL,
    `price` INT(30) NOT NULL,
    `product_cnt` INT(10) NOT NULL,
    `product_img` VARCHAR(255) NOT NULL,
    `product_info` VARCHAR(255) NOT NULL,
    `condition` VARCHAR(50) NOT NULL,
    `exchange` VARCHAR(50) NOT NULL,
    `recommended` INT(30) NOT NULL,
    `user_id` INT(11) NOT NULL,
    `category_id` INT(11) NOT NULL,
    `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`modified` DATETIME NULL DEFAULT NULL,
    PRIMARY KEY (`product_id`),
    KEY `user_id` (`user_id`),
    KEY `category_id` (`category_id`)




CREATE TABLE `products` (
    `product_id` INT(11) NOT NULL AUTO_INCREMENT,
    `user_id` INT(11) NOT NULL,
    `category_id` INT(11) NOT NULL,
    `product_name` VARCHAR(50) NOT NULL,
    `price` INT(40) NOT NULL,
    `product_img` VARCHAR(255) NOT NULL,
    `condition` VARCHAR(50) NOT NULL,
    `exchange` VARCHAR(50) NOT NULL,
    `recommended` INT(40) NOT NULL,
    `product_info` VARCHAR(255) NOT NULL,
    `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`modified` DATETIME NULL DEFAULT NULL,
    PRIMARY KEY (`product_id`)
)
COLLATE=`utf8_general_ci`
ENGINE=InnoDB;




>>카테고리 없음
CREATE TABLE `markets` (
    `market_id` INT(11) NOT NULL AUTO_INCREMENT,
    `product_name` VARCHAR(50) NOT NULL,
    `product_price` INT(30) NOT NULL,
    `product_img` VARCHAR(255) NOT NULL,
    `product_info` VARCHAR(255) NOT NULL,
    `product_condition` VARCHAR(50) NOT NULL,
    `product_exchange` VARCHAR(50) NOT NULL,
    `product_recommended` INT(30) NOT NULL,
    `user_id` INT(11) NOT NULL,
    `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`modified` DATETIME NULL DEFAULT NULL,
    PRIMARY KEY (`market_id`),
    KEY `user_id` (`user_id`)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


카테고리 -> 가챠에서 세부적으로 - 애니매이션, 독특한,
1




CREATE TABLE `categories` (
    `category_id` INT(11) NOT NULL AUTO_INCREMENT,
    `category_name` VARCHAR(50) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`category_id`)
)
COLLATE=`utf8_general_ci`
ENGINE=InnoDB;






CREATE TABLE `send_note` (
    `send_note_id` INT(11) NOT NULL AUTO_INCREMENT,
    `recv_nick` VARCHAR(100) NOT NULL,
    `send_nick` VARCHAR(100) NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `content` TEXT NOT NULL,
    `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`send_note_id`)
)
COLLATE=`utf8_general_ci`
ENGINE=InnoDB;





CREATE TABLE `recv_note` (
    `recv_note_id` INT(11) NOT NULL AUTO_INCREMENT,
    `recv_nick` VARCHAR(100) NOT NULL,
    `send_nick` VARCHAR(100) NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `content` TEXT NOT NULL,
    `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`recv_note_id`)
)
COLLATE=`utf8_general_ci`
ENGINE=InnoDB;


