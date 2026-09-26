
CREATE DATABASE IF NOT EXISTS bd
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;
USE bd;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(254) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

ALTER TABLE usuarios MODIFY senha VARCHAR(255) NOT NULL;

insert into usuarios (email, senha) values ('teste@mail.com', '123456');
