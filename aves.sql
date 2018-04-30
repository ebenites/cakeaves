-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema aves
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema aves
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `aves` DEFAULT CHARACTER SET utf8 ;
USE `aves` ;

-- -----------------------------------------------------
-- Table `aves`.`aves`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aves`.`aves` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NULL,
  `genero` CHAR(1) NOT NULL,
  `nacimiento` DATE NULL,
  `descripcion` TEXT NULL,
  `madre_id` INT NULL,
  `padre_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `padre_id_idx` (`padre_id` ASC),
  INDEX `madre_id_idx` (`madre_id` ASC),
  CONSTRAINT `madre_id`
    FOREIGN KEY (`madre_id`)
    REFERENCES `aves`.`aves` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `padre_id`
    FOREIGN KEY (`padre_id`)
    REFERENCES `aves`.`aves` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `aves`.`aves`
-- -----------------------------------------------------
START TRANSACTION;
USE `aves`;
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, 'Hatch', 'M', '2001-01-01', NULL, NULL, NULL);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, '', 'H', '2001-01-01', NULL, NULL, NULL);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, 'Asil', 'M', '2002-02-02', NULL, NULL, NULL);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, NULL, 'H', '2002-02-02', NULL, NULL, NULL);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, NULL, 'M', '2001-06-06', NULL, 2, 1);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, NULL, 'M', '2001-06-06', NULL, 2, 1);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, NULL, 'H', '2002-06-06', NULL, 4, 3);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, NULL, 'H', '2002-06-06', NULL, 4, 3);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, NULL, 'M', '2003-09-09', NULL, 7, 5);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, NULL, 'H', '2003-09-09', NULL, 7, 5);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, NULL, 'M', '2003-12-12', NULL, 8, 6);
INSERT INTO `aves`.`aves` (`id`, `nombre`, `genero`, `nacimiento`, `descripcion`, `madre_id`, `padre_id`) VALUES (DEFAULT, NULL, 'H', '2003-12-12', NULL, 8, 6);

COMMIT;