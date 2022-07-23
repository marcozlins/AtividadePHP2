-- criando código SQL --

DROP DATABASE IF EXISTS livraria;

CREATE DATABASE livraria CHARACTER SET utf8 COLLATE utf8_general_ci;

use livraria;

create table livro (
    nomelivro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    editora VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    preco VARCHAR(255) NOT NULL,
    isbn VARCHAR(255) NOT NULL
    
);