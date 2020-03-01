DROP DATABASE IF EXISTS `sendpulse`;
CREATE DATABASE `sendpulse`;
USE `sendpulse`;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  `id` INT(6) AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS tasks;
CREATE TABLE tasks (
  `id` INT(6) AUTO_INCREMENT,
  `parent_id` INT(6) NOT NULL DEFAULT '0',
  `title` VARCHAR(100) NOT NULL,
  `body` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `date` DATETIME,
  PRIMARY KEY(`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
