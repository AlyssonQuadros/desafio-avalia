CREATE DATABASE desafio;
USE desafio;

CREATE TABLE `desafio`.`veiculo` (
  `veiculo_id` INT NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(50) NOT NULL,
  `modelo` VARCHAR(50) NOT NULL,
  `ano` INT(20) NOT NULL,
  `valor` DECIMAL(20) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`veiculo_id`));

INSERT INTO `veiculo` (`veiculo_id`,`marca`,`modelo`, `ano`, `valor`, `data_cadastro`) VALUES (1,'fiat','argo', '2018', '50000', '2021-10-28 19:42:12');
INSERT INTO `veiculo` (`veiculo_id`,`marca`,`modelo`, `ano`, `valor`, `data_cadastro`) VALUES (2,'fiat','palio', '2013', '30000', '2021-10-29 19:43:12');
INSERT INTO `veiculo` (`veiculo_id`,`marca`,`modelo`, `ano`, `valor`, `data_cadastro`) VALUES (3,'renaut','kwid', '2017', '38000', '2021-10-30 19:44:12');