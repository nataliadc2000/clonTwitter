CREATE SCHEMA `twitter` ;
CREATE TABLE `twitter`.`usuarios` (
  `id` INT NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `pass` CHAR(60) NOT NULL,
  `description` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`));

CREATE table `twitter`.`publications` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userId` INT NOT NULL,
  `text` LONGTEXT NOT NULL,
  `createDate` Date NOT NULL,
  PRIMARY KEY(`id`),
  FOREIGN KEY(`userId`) REFERENCES usuarios(`id`));

CREATE TABLE `twitter`.`follows` (
  `users_id` INT NOT NULL ,
  `userToFollowId` INT NOT NULL ,
  PRIMARY KEY (`users_id`),
  PRIMARY KEY (`userToFollowId`),
  FOREIGN KEY (`users_id`) REFERENCES users(`id`)
);