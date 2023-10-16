CREATE SCHEMA `twitter` ;
CREATE TABLE `twitter`.`usuarios` (
  `id` INT NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `pass` CHAR(60) NOT NULL,
  `description` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`));
