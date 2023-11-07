create database felpudos;

use felpudos;

create table usuarios (ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        primeironome varchar(50) NOT NULL,
                        sobrenome varchar(50) NOT NULL,
                        email varchar(255) NOT NULL,
                        celular varchar(16) NOT NULL,
                        nascimento date NOT NULL,
                        cpf varchar(15) NOT NULL,
                        senha varchar(50) NOT NULL,
                        gender char(1) NOT NULL);

create table animais (ID INT AUTO_INCREMENT PRIMARY KEY,
                        nome varchar(50) NOT NULL,
                        especie	varchar(10) NOT NULL,
                        sexo char(1) NOT NULL,
                        porte varchar(10) NOT NULL,
                        raca varchar(50) NOT NULL,
                        idade int NOT NULL,
                        descricao varchar(250),
                        imagem varchar(50) NOT NULL);
