create database felpudos;

use felpudos;

create table usuarios (ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        firstname varchar(50) NOT NULL,
                        lastname varchar(50) NOT NULL,
                        login varchar(255) NOT NULL,
                        number varchar(16) NOT NULL,
                        data date NOT NULL,
                        cpf varchar(15) NOT NULL,
                        password varchar(50) NOT NULL,
                        gender char(1) NOT NULL);

