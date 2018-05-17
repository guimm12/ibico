create database ibico
use ibico

create table usuario 
(
cd_usuario int primary key auto_increment, 
nome varchar(100) not null,
sobrenome varchar(300) not  null,
email varchar(50) not null,
telefone varchar(12),
celular varchar(13),
senha varchar(100) not null


select * from usuario


insert into usuario(nome,sobrenome,email,telefone,celular,senha) values('Dunga','Burro','dunga@hotmail.com','13997125069','1334062223','brasel');
