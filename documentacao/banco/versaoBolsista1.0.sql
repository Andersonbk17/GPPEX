SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sgpp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sgpp` ;

-- -----------------------------------------------------
-- Table `sgpp`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgpp`.`cidade` (
  `idcidade` INT NOT NULL,
  `nome` VARCHAR(50) NULL,
  `idEstado` INT NULL,
  PRIMARY KEY (`idcidade`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sgpp`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgpp`.`curso` (
  `idcurso` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`idcurso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sgpp`.`bosistas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgpp`.`bosistas` (
  `idbosistas` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `dataNascimento` DATE NULL,
  `matricula` VARCHAR(10) NULL,
  `email` VARCHAR(50) NULL,
  `nascionalidade` INT NULL,
  `endereco` VARCHAR(60) NULL,
  `complemento` VARCHAR(50) NULL,
  `bairro` VARCHAR(50) NULL,
  `numero` INT NULL,
  `cep` VARCHAR(13) NULL,
  `telefoneResidencial` VARCHAR(20) NULL,
  `telefoneCelular` VARCHAR(20) NULL,
  `identidade` VARCHAR(20) NULL,
  `orgaoExpedidor` VARCHAR(20) NULL,
  `dataExpedicao` DATE NULL,
  `tituloEleitor` INT NULL,
  `secaoEleitoral` INT NULL,
  `zonaEleitoral` INT NULL,
  `cpf` VARCHAR(15) NULL,
  `situacaoMilitar` VARCHAR(20) NULL,
  `certidaoMilitar` INT NULL,
  `trabalha` INT NULL,
  `localTrabalho` VARCHAR(50) NULL,
  `telefoneTrabalho` VARCHAR(20) NULL,
  `ativo` INT NULL,
  `nomePaiResponsavel` VARCHAR(100) NULL,
  `identidadePaiResponsavel` VARCHAR(20) NULL,
  `orgaoExpedidorPaiResponsavel` VARCHAR(20) NULL,
  `cpfPaiResponsavel` VARCHAR(15) NULL,
  `nomeMae` VARCHAR(100) NULL,
  `indentidadeMae` VARCHAR(20) NULL,
  `cpfMae` VARCHAR(15) NULL,
  `orgaoExpedidorMae` VARCHAR(20) NULL,
  `dataCadastro` TIMESTAMP NULL,
  `campusBolsista` INT NULL,
  `idcidade` INT NOT NULL,
  `idcurso` INT NOT NULL,
  PRIMARY KEY (`idbosistas`, `idcidade`, `idcurso`),
  INDEX `fk_bosistas_cidade_idx` (`idcidade` ASC),
  INDEX `fk_bosistas_curso1_idx` (`idcurso` ASC),
  CONSTRAINT `fk_bosistas_cidade`
    FOREIGN KEY (`idcidade`)
    REFERENCES `sgpp`.`cidade` (`idcidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bosistas_curso1`
    FOREIGN KEY (`idcurso`)
    REFERENCES `sgpp`.`curso` (`idcurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sgpp`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgpp`.`table1` (
)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
