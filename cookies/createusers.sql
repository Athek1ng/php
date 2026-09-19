CREATE DATABASE cookies;
show tables;
CREATE TABLE usuarios
(
	email varchar(100) NOT NULL,
	senha varchar(20) NOT NULL,
	nome varchar(100) NOT NULL,
	cidade varchar(50) NOT NULL,
	estado char(2) NOT NULL,
	primary key(email)
);

INSERT INTO usuarios VALUES ('andremaya@gmail.com','teste','ANDRE MAIA','SÃO PAULO','SP');
