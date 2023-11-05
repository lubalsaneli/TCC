create database felpudos;

use felpudos;

create table usuarios (ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        primeironome varchar(50) NOT NULL,
                        sobrenome varchar(50) NOT NULL,
                        email varchar(255) NOT NULL,
                        celular varchar(16) NOT NULL,
                        nascimento date NOT NULL,
                        cpf varchar(15) NOT NULL,
                        senha varchar(50) NOT NULL);

