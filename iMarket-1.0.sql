SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`cliente` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`cliente` (
  `codCliente` INT NOT NULL AUTO_INCREMENT ,
  `nomeCliente` VARCHAR(45) NOT NULL ,
  `CPF` VARCHAR(20) NOT NULL ,
  `dataNascimento` DATE NOT NULL ,
  `emailCliente` VARCHAR(45) NOT NULL ,
  `senhaCliente` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`codCliente`) ,
  UNIQUE INDEX `CPF_UNIQUE` (`CPF` ASC) );


-- -----------------------------------------------------
-- Table `mydb`.`telefoneCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`telefoneCliente` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`telefoneCliente` (
  `codTelefone` INT NOT NULL ,
  `telefone` INT NOT NULL ,
  `cliente_codCliente` INT NOT NULL ,
  PRIMARY KEY (`codTelefone`) ,
  INDEX `fk_telefoneCliente_cliente_idx` (`cliente_codCliente` ASC) ,
  CONSTRAINT `fk_telefoneCliente_cliente`
    FOREIGN KEY (`cliente_codCliente` )
    REFERENCES `mydb`.`cliente` (`codCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`enderecoCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`enderecoCliente` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`enderecoCliente` (
  `codEndereco` INT NOT NULL ,
  `CEP` VARCHAR(45) NOT NULL ,
  `estado` VARCHAR(45) NOT NULL ,
  `cidade` VARCHAR(45) NOT NULL ,
  `logradouro` VARCHAR(45) NOT NULL ,
  `numero` VARCHAR(45) NOT NULL ,
  `complemento` VARCHAR(45) NULL ,
  `cliente_codCliente` INT NOT NULL ,
  PRIMARY KEY (`codEndereco`) ,
  INDEX `fk_enderecoCliente_cliente1_idx` (`cliente_codCliente` ASC) ,
  CONSTRAINT `fk_enderecoCliente_cliente1`
    FOREIGN KEY (`cliente_codCliente` )
    REFERENCES `mydb`.`cliente` (`codCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`enderecoSupermercado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`enderecoSupermercado` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`enderecoSupermercado` (
  `codEndereco` INT NOT NULL ,
  `CEP` VARCHAR(45) NOT NULL ,
  `estado` VARCHAR(45) NOT NULL ,
  `cidade` VARCHAR(45) NOT NULL ,
  `logradouro` VARCHAR(45) NOT NULL ,
  `numero` VARCHAR(45) NOT NULL ,
  `complemento` VARCHAR(45) NULL ,
  PRIMARY KEY (`codEndereco`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`supermercado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`supermercado` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`supermercado` (
  `codSupermercado` INT NOT NULL ,
  `nomeFantasia` VARCHAR(45) NOT NULL ,
  `razaoSocial` VARCHAR(45) NULL ,
  `enderecoSupermercado_codEndereco` INT NOT NULL ,
  `cnpj` VARCHAR(20) NOT NULL ,
  `inscricao` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`codSupermercado`) ,
  INDEX `fk_supermercado_enderecoCliente_copy11_idx` (`enderecoSupermercado_codEndereco` ASC) ,
  CONSTRAINT `fk_supermercado_enderecoCliente_copy11`
    FOREIGN KEY (`enderecoSupermercado_codEndereco` )
    REFERENCES `mydb`.`enderecoSupermercado` (`codEndereco` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`telefoneSupermercado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`telefoneSupermercado` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`telefoneSupermercado` (
  `codTelefone` INT NOT NULL ,
  `telefone` INT NOT NULL ,
  `supermercado_codSupermercado` INT NOT NULL ,
  PRIMARY KEY (`codTelefone`) ,
  INDEX `fk_telefoneSupermercado_supermercado1_idx` (`supermercado_codSupermercado` ASC) ,
  CONSTRAINT `fk_telefoneSupermercado_supermercado1`
    FOREIGN KEY (`supermercado_codSupermercado` )
    REFERENCES `mydb`.`supermercado` (`codSupermercado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`produto` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`produto` (
  `codProduto` INT NOT NULL ,
  `nomeProduto` VARCHAR(45) NOT NULL ,
  `codBarra` VARCHAR(45) NOT NULL ,
  `quantidadeEstoque` VARCHAR(45) NOT NULL ,
  `precoVenda` VARCHAR(45) NOT NULL ,
  `supermercado_codSupermercado` INT NOT NULL ,
  PRIMARY KEY (`codProduto`) ,
  INDEX `fk_produto_supermercado1_idx` (`supermercado_codSupermercado` ASC) ,
  CONSTRAINT `fk_produto_supermercado1`
    FOREIGN KEY (`supermercado_codSupermercado` )
    REFERENCES `mydb`.`supermercado` (`codSupermercado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`carrinho`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`carrinho` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`carrinho` (
  `codCarrinho` INT NOT NULL ,
  `dataFinalizacao` DATETIME NULL ,
  `cliente_codCliente` INT NOT NULL ,
  PRIMARY KEY (`codCarrinho`) ,
  INDEX `fk_carrinho_cliente1_idx` (`cliente_codCliente` ASC) ,
  CONSTRAINT `fk_carrinho_cliente1`
    FOREIGN KEY (`cliente_codCliente` )
    REFERENCES `mydb`.`cliente` (`codCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`produto_carrinho`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`produto_carrinho` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`produto_carrinho` (
  `carrinho_codCarrinho` INT NOT NULL ,
  `produto_codProduto` INT NOT NULL ,
  `quantidade` INT NOT NULL ,
  PRIMARY KEY (`carrinho_codCarrinho`, `produto_codProduto`) ,
  INDEX `fk_produto_carrinho_produto1_idx` (`produto_codProduto` ASC) ,
  CONSTRAINT `fk_produto_carrinho_carrinho1`
    FOREIGN KEY (`carrinho_codCarrinho` )
    REFERENCES `mydb`.`carrinho` (`codCarrinho` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_carrinho_produto1`
    FOREIGN KEY (`produto_codProduto` )
    REFERENCES `mydb`.`produto` (`codProduto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pagamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`pagamento` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`pagamento` (
  `codPagamento` INT NOT NULL ,
  `numeroCartao` VARCHAR(16) NOT NULL ,
  `nomeCartao` VARCHAR(45) NOT NULL ,
  `vencimentoCartao` VARCHAR(4) NOT NULL ,
  `codSeguranca` VARCHAR(4) NOT NULL ,
  `cliente_codCliente` INT NOT NULL ,
  PRIMARY KEY (`codPagamento`) ,
  INDEX `fk_pagamento_cliente1_idx` (`cliente_codCliente` ASC) ,
  CONSTRAINT `fk_pagamento_cliente1`
    FOREIGN KEY (`cliente_codCliente` )
    REFERENCES `mydb`.`cliente` (`codCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pagamento_carrinho`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`pagamento_carrinho` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`pagamento_carrinho` (
  `carrinho_codCarrinho` INT NOT NULL ,
  `pagamento_codPagamento` INT NOT NULL ,
  PRIMARY KEY (`carrinho_codCarrinho`, `pagamento_codPagamento`) ,
  INDEX `fk_table1_pagamento1_idx` (`pagamento_codPagamento` ASC) ,
  CONSTRAINT `fk_table1_carrinho1`
    FOREIGN KEY (`carrinho_codCarrinho` )
    REFERENCES `mydb`.`carrinho` (`codCarrinho` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_pagamento1`
    FOREIGN KEY (`pagamento_codPagamento` )
    REFERENCES `mydb`.`pagamento` (`codPagamento` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
