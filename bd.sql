-- MySQL Workbench Synchronization
-- Generated: 2016-09-15 15:33
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: 20131084010202

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE TABLE IF NOT EXISTS `mural`.`Cartaz` (
  `idCartaz` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NULL DEFAULT NULL,
  `texto` VARCHAR(300) NULL DEFAULT NULL,
  `anexo` VARCHAR(45) NULL DEFAULT NULL,
  `data` DATE NULL DEFAULT NULL,
  `hora` TIME(10) NULL DEFAULT NULL,
  `Administrador_matricula` INT(11) NOT NULL,
  PRIMARY KEY (`idCartaz`, `Administrador_matricula`),
  INDEX `fk_Cartaz_Administrador_idx` (`Administrador_matricula` ASC),
  CONSTRAINT `fk_Cartaz_Administrador`
    FOREIGN KEY (`Administrador_matricula`)
    REFERENCES `mural`.`Administrador` (`matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mural`.`Administrador` (
  `matricula` INT(11) NOT NULL,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `login` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`matricula`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mural`.`palavraChave` (
  `idpalavraChave` INT(11) NOT NULL AUTO_INCREMENT,
  `palavras` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idpalavraChave`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mural`.`Usuario` (
  `idusuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `login` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mural`.`palavraChave_has_Usuario` (
  `palavraChave_idpalavraChave` INT(11) NOT NULL,
  `Usuario_idusuario` INT(11) NOT NULL,
  PRIMARY KEY (`palavraChave_idpalavraChave`, `Usuario_idusuario`),
  INDEX `fk_palavraChave_has_Usuario_Usuario1_idx` (`Usuario_idusuario` ASC),
  INDEX `fk_palavraChave_has_Usuario_palavraChave1_idx` (`palavraChave_idpalavraChave` ASC),
  CONSTRAINT `fk_palavraChave_has_Usuario_palavraChave1`
    FOREIGN KEY (`palavraChave_idpalavraChave`)
    REFERENCES `mural`.`palavraChave` (`idpalavraChave`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_palavraChave_has_Usuario_Usuario1`
    FOREIGN KEY (`Usuario_idusuario`)
    REFERENCES `mural`.`Usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mural`.`palavraChave_has_Cartaz` (
  `palavraChave_idpalavraChave` INT(11) NOT NULL,
  `Cartaz_idCartaz` INT(11) NOT NULL,
  `Cartaz_Administrador_matricula` INT(11) NOT NULL,
  PRIMARY KEY (`palavraChave_idpalavraChave`, `Cartaz_idCartaz`, `Cartaz_Administrador_matricula`),
  INDEX `fk_palavraChave_has_Cartaz_Cartaz1_idx` (`Cartaz_idCartaz` ASC, `Cartaz_Administrador_matricula` ASC),
  INDEX `fk_palavraChave_has_Cartaz_palavraChave1_idx` (`palavraChave_idpalavraChave` ASC),
  CONSTRAINT `fk_palavraChave_has_Cartaz_palavraChave1`
    FOREIGN KEY (`palavraChave_idpalavraChave`)
    REFERENCES `mural`.`palavraChave` (`idpalavraChave`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_palavraChave_has_Cartaz_Cartaz1`
    FOREIGN KEY (`Cartaz_idCartaz` , `Cartaz_Administrador_matricula`)
    REFERENCES `mural`.`Cartaz` (`idCartaz` , `Administrador_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
