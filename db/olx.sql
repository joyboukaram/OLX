-- MySQL Script generated by MySQL Workbench
-- Fri Dec  7 12:14:55 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema olx
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema olx
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `olx` DEFAULT CHARACTER SET utf8 ;
USE `olx` ;

-- -----------------------------------------------------
-- Table `olx`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `olx`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `firstName` VARCHAR(45) NULL,
  `lastName` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `gender` TINYINT NULL,
  `address` VARCHAR(45) NULL,
  `birthdate` VARCHAR(45) NULL,
  `cart` VARCHAR(45) NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olx`.`ads`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `olx`.`ads` (
  `idads` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `price` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `location` VARCHAR(45) NULL,
  `categorie` VARCHAR(45) NULL,
  `image` TEXT NULL,
  `seller` VARCHAR(45) NULL,
  PRIMARY KEY (`idads`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `olx`.`adminuser`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `olx`.`adminuser` (
  `idadminuser` INT NOT NULL,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`idadminuser`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
