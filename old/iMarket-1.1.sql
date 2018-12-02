SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `faculdade` ;
CREATE SCHEMA IF NOT EXISTS `faculdade` DEFAULT CHARACTER SET utf8 ;
USE `faculdade` ;

-- -----------------------------------------------------
-- Table `faculdade`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`cliente` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`cliente` (
  `codCliente` INT NOT NULL AUTO_INCREMENT ,
  `nomeCliente` VARCHAR(45) NOT NULL ,
  `CPF` VARCHAR(20) NOT NULL ,
  `dataNascimento` DATE NOT NULL ,
  `emailCliente` VARCHAR(45) NOT NULL ,
  `senhaCliente` VARCHAR(45) NOT NULL ,
  `perfil` TINYINT NOT NULL ,
  PRIMARY KEY (`codCliente`) ,
  UNIQUE INDEX `CPF_UNIQUE` (`CPF` ASC) );


-- -----------------------------------------------------
-- Table `faculdade`.`telefoneCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`telefoneCliente` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`telefoneCliente` (
  `codTelefone` INT NOT NULL AUTO_INCREMENT ,
  `telefone` INT NOT NULL ,
  `cliente_codCliente` INT NOT NULL ,
  PRIMARY KEY (`codTelefone`) ,
  INDEX `fk_telefoneCliente_cliente_idx` (`cliente_codCliente` ASC) ,
  CONSTRAINT `fk_telefoneCliente_cliente`
    FOREIGN KEY (`cliente_codCliente` )
    REFERENCES `faculdade`.`cliente` (`codCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`enderecoCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`enderecoCliente` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`enderecoCliente` (
  `codEndereco` INT NOT NULL AUTO_INCREMENT ,
  `CEP` VARCHAR(45) NOT NULL ,
  `estado` VARCHAR(45) NOT NULL ,
  `cidade` VARCHAR(45) NOT NULL ,
  `logradouro` VARCHAR(45) NOT NULL ,
  `numero` VARCHAR(45) NOT NULL ,
  `complemento` VARCHAR(45) NULL DEFAULT NULL ,
  `cliente_codCliente` INT NOT NULL ,
  PRIMARY KEY (`codEndereco`) ,
  INDEX `fk_enderecoCliente_cliente1_idx` (`cliente_codCliente` ASC) ,
  CONSTRAINT `fk_enderecoCliente_cliente1`
    FOREIGN KEY (`cliente_codCliente` )
    REFERENCES `faculdade`.`cliente` (`codCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`enderecoSupermercado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`enderecoSupermercado` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`enderecoSupermercado` (
  `codEndereco` INT NOT NULL AUTO_INCREMENT ,
  `CEP` VARCHAR(45) NOT NULL ,
  `estado` VARCHAR(45) NOT NULL ,
  `cidade` VARCHAR(45) NOT NULL ,
  `logradouro` VARCHAR(45) NOT NULL ,
  `numero` VARCHAR(45) NOT NULL ,
  `complemento` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`codEndereco`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`supermercado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`supermercado` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`supermercado` (
  `codSupermercado` INT NOT NULL AUTO_INCREMENT ,
  `nomeFantasia` VARCHAR(45) NOT NULL ,
  `emailSupermercado` VARCHAR(45) NOT NULL ,
  `razaoSocial` VARCHAR(45) NOT NULL ,
  `enderecoSupermercado_codEndereco` INT NOT NULL ,
  `cnpj` VARCHAR(20) NOT NULL ,
  `inscricao` VARCHAR(45) NOT NULL ,
  `senhaSupermercado` VARCHAR(45) NOT NULL ,
  `perfil` TINYINT NOT NULL ,
  PRIMARY KEY (`codSupermercado`) ,
  INDEX `fk_supermercado_enderecoCliente_copy11_idx` (`enderecoSupermercado_codEndereco` ASC) ,
  CONSTRAINT `fk_supermercado_enderecoCliente_copy11`
    FOREIGN KEY (`enderecoSupermercado_codEndereco` )
    REFERENCES `faculdade`.`enderecoSupermercado` (`codEndereco` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`telefoneSupermercado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`telefoneSupermercado` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`telefoneSupermercado` (
  `codTelefone` INT NOT NULL AUTO_INCREMENT ,
  `telefone` INT NOT NULL ,
  `supermercado_codSupermercado` INT NOT NULL ,
  PRIMARY KEY (`codTelefone`) ,
  INDEX `fk_telefoneSupermercado_supermercado1_idx` (`supermercado_codSupermercado` ASC) ,
  CONSTRAINT `fk_telefoneSupermercado_supermercado1`
    FOREIGN KEY (`supermercado_codSupermercado` )
    REFERENCES `faculdade`.`supermercado` (`codSupermercado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`departamentoProduto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`departamentoProduto` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`departamentoProduto` (
  `codDepartamentoProduto` INT NOT NULL AUTO_INCREMENT ,
  `nomeDepartamento` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`codDepartamentoProduto`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`unidadeMedida`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`unidadeMedida` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`unidadeMedida` (
  `codUnidadeMedida` INT NOT NULL AUTO_INCREMENT,
  `nomeUnidadeMedida` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`codUnidadeMedida`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`produto` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`produto` (
  `codProduto` INT NOT NULL AUTO_INCREMENT ,
  `nomeProduto` VARCHAR(45) NOT NULL ,
  `codBarra` VARCHAR(45) NOT NULL ,
  `precoVenda` VARCHAR(45) NOT NULL ,
  `departamentoProduto_codDepartamentoProduto` INT NOT NULL ,
  `quantidade` INT NOT NULL ,
  `unidadeMedida_codUnidadeMedida` INT NOT NULL ,
  PRIMARY KEY (`codProduto`) ,
  INDEX `fk_produto_departamentoProduto1_idx` (`departamentoProduto_codDepartamentoProduto` ASC) ,
  INDEX `fk_produto_unidadeMedida1_idx` (`unidadeMedida_codUnidadeMedida` ASC) ,
  CONSTRAINT `fk_produto_departamentoProduto1`
    FOREIGN KEY (`departamentoProduto_codDepartamentoProduto` )
    REFERENCES `faculdade`.`departamentoProduto` (`codDepartamentoProduto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_unidadeMedida1`
    FOREIGN KEY (`unidadeMedida_codUnidadeMedida` )
    REFERENCES `faculdade`.`unidadeMedida` (`codUnidadeMedida` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`carrinho`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`carrinho` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`carrinho` (
  `codCarrinho` INT NOT NULL AUTO_INCREMENT ,
  `dataFinalizacao` DATETIME NULL DEFAULT NULL ,
  `cliente_codCliente` INT NOT NULL ,
  PRIMARY KEY (`codCarrinho`) ,
  INDEX `fk_carrinho_cliente1_idx` (`cliente_codCliente` ASC) ,
  CONSTRAINT `fk_carrinho_cliente1`
    FOREIGN KEY (`cliente_codCliente` )
    REFERENCES `faculdade`.`cliente` (`codCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`produtoCarrinho`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`produtoCarrinho` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`produtoCarrinho` (
  `carrinho_codCarrinho` INT NOT NULL ,
  `produto_codProduto` INT NOT NULL ,
  `quantidade` INT NOT NULL ,
  PRIMARY KEY (`carrinho_codCarrinho`, `produto_codProduto`) ,
  INDEX `fk_produto_carrinho_produto1_idx` (`produto_codProduto` ASC) ,
  CONSTRAINT `fk_produto_carrinho_carrinho1`
    FOREIGN KEY (`carrinho_codCarrinho` )
    REFERENCES `faculdade`.`carrinho` (`codCarrinho` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_carrinho_produto1`
    FOREIGN KEY (`produto_codProduto` )
    REFERENCES `faculdade`.`produto` (`codProduto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`pagamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`pagamento` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`pagamento` (
  `codPagamento` INT NOT NULL AUTO_INCREMENT ,
  `numeroCartao` VARCHAR(16) NOT NULL ,
  `nomeCartao` VARCHAR(45) NOT NULL ,
  `vencimentoCartao` VARCHAR(4) NOT NULL ,
  `codSeguranca` VARCHAR(4) NOT NULL ,
  `cliente_codCliente` INT NOT NULL ,
  PRIMARY KEY (`codPagamento`) ,
  INDEX `fk_pagamento_cliente1_idx` (`cliente_codCliente` ASC) ,
  CONSTRAINT `fk_pagamento_cliente1`
    FOREIGN KEY (`cliente_codCliente` )
    REFERENCES `faculdade`.`cliente` (`codCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`produtoEstoque`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`produtoEstoque` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`produtoEstoque` (
  `codProdutoEstoque` INT NOT NULL ,
  `codProduto` INT NOT NULL ,
  `quantidade` INT NOT NULL ,
  `produto_codProduto` INT NULL DEFAULT NULL ,
  PRIMARY KEY (`codProdutoEstoque`) ,
  INDEX `fk_produtoEstoque_produto1_idx` (`produto_codProduto` ASC) ,
  CONSTRAINT `fk_produtoEstoque_produto1`
    FOREIGN KEY (`produto_codProduto` )
    REFERENCES `faculdade`.`produto` (`codProduto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faculdade`.`entrega`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`entrega` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`entrega` (
  `codEntrega` INT NOT NULL AUTO_INCREMENT ,
  `carrinho_codCarrinho` INT NOT NULL ,
  `dataEntrega` DATETIME NOT NULL ,
  `codEndereco` INT NOT NULL ,
  PRIMARY KEY (`codEntrega`) ,
  INDEX `fk_entrega_carrinho2_idx` (`carrinho_codCarrinho` ASC) ,
  INDEX `fk_entrega_enderecocliente1_idx` (`codEndereco` ASC) ,
  CONSTRAINT `fk_entrega_carrinho2`
    FOREIGN KEY (`carrinho_codCarrinho` )
    REFERENCES `faculdade`.`carrinho` (`codCarrinho` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entrega_enderecocliente1`
    FOREIGN KEY (`codEndereco` )
    REFERENCES `faculdade`.`enderecocliente` (`codEndereco` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `faculdade`.`estoquesupermercado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`estoquesupermercado` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`estoquesupermercado` (
  `codSupermercado` INT(11) NOT NULL AUTO_INCREMENT ,
  `codProdutoEstoque` INT(11) NOT NULL ,
  PRIMARY KEY (`codSupermercado`, `codProdutoEstoque`) ,
  INDEX `fk_estoque_supermercado_produto1_idx` (`codSupermercado` ASC) ,
  INDEX `fk_estoqueSupermercado_produtoEstoque1_idx` (`codProdutoEstoque` ASC) ,
  CONSTRAINT `fk_estoqueSupermercado_produtoEstoque1`
    FOREIGN KEY (`codProdutoEstoque` )
    REFERENCES `faculdade`.`produtoestoque` (`codProdutoEstoque` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estoque_supermercado_produto1`
    FOREIGN KEY (`codSupermercado` )
    REFERENCES `faculdade`.`supermercado` (`codSupermercado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `faculdade`.`pagamentocarrinho`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`pagamentocarrinho` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`pagamentocarrinho` (
  `carrinho_codCarrinho` INT(11) NOT NULL ,
  `pagamento_codPagamento` INT(11) NOT NULL ,
  PRIMARY KEY (`carrinho_codCarrinho`, `pagamento_codPagamento`) ,
  INDEX `fk_table1_pagamento1_idx` (`pagamento_codPagamento` ASC) ,
  CONSTRAINT `fk_table1_carrinho1`
    FOREIGN KEY (`carrinho_codCarrinho` )
    REFERENCES `faculdade`.`carrinho` (`codCarrinho` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_pagamento1`
    FOREIGN KEY (`pagamento_codPagamento` )
    REFERENCES `faculdade`.`pagamento` (`codPagamento` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `faculdade`.`telefonecliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`telefonecliente` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`telefonecliente` (
  `codTelefone` INT(11) NOT NULL AUTO_INCREMENT ,
  `telefone` INT(11) NOT NULL ,
  `cliente_codCliente` INT(11) NOT NULL ,
  PRIMARY KEY (`codTelefone`) ,
  INDEX `fk_telefoneCliente_cliente_idx` (`cliente_codCliente` ASC) ,
  CONSTRAINT `fk_telefoneCliente_cliente`
    FOREIGN KEY (`cliente_codCliente` )
    REFERENCES `faculdade`.`cliente` (`codCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `faculdade`.`telefonesupermercado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`telefonesupermercado` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`telefonesupermercado` (
  `codTelefone` INT(11) NOT NULL AUTO_INCREMENT ,
  `telefone` INT(11) NOT NULL ,
  `supermercado_codSupermercado` INT(11) NOT NULL ,
  PRIMARY KEY (`codTelefone`) ,
  INDEX `fk_telefoneSupermercado_supermercado1_idx` (`supermercado_codSupermercado` ASC) ,
  CONSTRAINT `fk_telefoneSupermercado_supermercado1`
    FOREIGN KEY (`supermercado_codSupermercado` )
    REFERENCES `faculdade`.`supermercado` (`codSupermercado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `faculdade`.`entrega`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `faculdade`.`entrega` ;

CREATE  TABLE IF NOT EXISTS `faculdade`.`entrega` (
  `codEntrega` INT NOT NULL AUTO_INCREMENT ,
  `carrinho_codCarrinho` INT NOT NULL ,
  `dataEntrega` DATETIME NOT NULL ,
  `codEndereco` INT NOT NULL ,
  PRIMARY KEY (`codEntrega`) ,
  INDEX `fk_entrega_carrinho2_idx` (`carrinho_codCarrinho` ASC) ,
  INDEX `fk_entrega_enderecocliente1_idx` (`codEndereco` ASC) ,
  CONSTRAINT `fk_entrega_carrinho2`
    FOREIGN KEY (`carrinho_codCarrinho` )
    REFERENCES `faculdade`.`carrinho` (`codCarrinho` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entrega_enderecocliente1`
    FOREIGN KEY (`codEndereco` )
    REFERENCES `faculdade`.`enderecocliente` (`codEndereco` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `faculdade` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;



insert into departamentoProduto (nomeDepartamento) values ('Açougue'),('Padaria'),('Mercearia'),('Hortifruti'),('Frios e Laticínios'),('Bebidas'),('Limpeza'),('Cuidados Pessoais');
insert into unidadeMedida (nomeUnidadeMedida) values ('kilograma(s)'),('grama(s)'),('litro(s)'),('unidade'),('fatia'),('peça'),('mililitro(s)');
