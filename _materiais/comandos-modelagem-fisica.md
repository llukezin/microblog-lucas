# Comandos SQL para Modelagem Fisica

## Criar bancos de dados

CREATE DATABASE microblog_lucas CHARACTER SET utf8mb4;

## Criar tabela de usuarios

CREATE TABLE usuarios(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    email VAARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('admin', 'editor') NOT NULL
);

# Faça o comando SQL  para criação da tabela de noticias com todas as colunas: id, data, titulo, texto,resumo, imagem e usuario_id

CREATE TABLE noticias(
    id NT NOT PRIMARY KEY AUTO_INCREMENT,
    data DATETU=IME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    titulo VARCHAR(150) NOT NULL,
    texto TEXT NOT NULL,
    resumo TEXT NOT NULL,
    imagem TEXT NOT NULL,
    usuario_id INT NOT NULL

); 

## Criar o relacionamento entre tabelas e a chave estrangeira

ALTER TABLE noticias
    ADD CONSTRAINT fk_noticias_usuarios
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id);