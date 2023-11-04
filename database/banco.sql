create database felpudos;

use felpudos;

create table usuarios (ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        login varchar(50) NOT NULL,
                        senha Varchar(50) NOT NULL);