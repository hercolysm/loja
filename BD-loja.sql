CREATE DATABASE loja;

USE loja;

CREATE TABLE produtos (
	cod_barra BIGINT NOT NULL primary key,
	nome VARCHAR(50) NOT NULL,
	categoria INT NOT NULL,
	descricao VARCHAR(200),
	custo FLOAT NOT NULL,
	preco FLOAT NOT NULL,
	saldo INT NOT NULL
);

CREATE TABLE usuario (
	cpf CHAR(14) NOT NULL primary key,
	nome VARCHAR(50) NOT NULL,
	dt_nasc DATE NOT NULL,
	nivel_de_acesso CHAR(1) NOT NULL,
	telefone CHAR(15) NOT NULL,
	endereco VARCHAR(100) NOT NULL,
	senha VARCHAR(20) NOT NULL,
	e_mail VARCHAR(50) NOT NULL
);
CREATE TABLE categorias (
	cod_categoria INT primary key AUTO_INCREMENT,
	nome VARCHAR(30)
);
/*
DROP table usuario;
INSERT INTO usuario VALUES ('055.297.663-66','hercolys moraes araujo','1993-10-02','1','(85) 98869-6392','rua dos parlamentares, 1234, vicent pizon, 60.181-420','123456','hercolysmoraes@hotmail.com');
SELECT * FROM usuario; */