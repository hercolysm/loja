DROP DATABASE loja;

CREATE DATABASE loja;

USE loja;

CREATE TABLE usuarios (
	id_usuario INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	cpf CHAR(11) NOT NULL,
	senha CHAR(32) NOT NULL,
	e_mail VARCHAR(50) NOT NULL,
	dt_nasc DATE NOT NULL,
	nivel_de_acesso INT(1) NOT NULL,
	telefone VARCHAR(11) NOT NULL,
	rua VARCHAR(50) NOT NULL,
	numero VARCHAR(10) NOT NULL,
	bairro VARCHAR(30) NOT NULL,
	cidade VARCHAR(30) NOT NULL,
	estado CHAR(2) NOT NULL,
	cep CHAR(11) NOT NULL,
	nacionalidade CHAR(3) NOT NULL
);

CREATE TABLE produtos (
	id_produto BIGINT PRIMARY KEY AUTO_INCREMENT,
	cod_barra VARCHAR(100) NOT NULL UNIQUE,
	nome VARCHAR(50) NOT NULL,
	id_categoria INT NOT NULL DEFAULT 1,
	descricao VARCHAR(200),
	custo FLOAT NOT NULL,
	preco FLOAT NOT NULL,
	saldo INT NOT NULL
);

CREATE TABLE categorias (
	id_categoria INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(30)
);

ALTER TABLE produtos ADD CONSTRAINT FK_produto_categoria FOREIGN KEY (id_categoria) REFERENCES categorias (id_categoria) ON UPDATE CASCADE;
