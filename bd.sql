Exemplo de Banco de Dados

create database tcc1;

use tcc1;

create table usuario(
	id int primary key auto_increment,
	email_usu varchar(60) not null,
	nome_usu varchar(60) not null,
	senha_usu varchar(20) not null,
	cpf_usu char(11) not null,
	ende_usu int,
	foreign key (ende_usu) references endereco(id)
);

create table endereco(
	id int primary key auto_increment,
	rua varchar(80) not null,
	numero int not null,
	bairro varchar(60) not null,
	complemento varchar(20) null
);

create table produto(
	id int primary key auto_increment,
	nome_prod varchar(220) not null,
	preco_prod double not null,
	imagem varchar(220) not null,
	quant_prod int not null,
	desc_prod text not null
);

insert into produto values ('1', "Camisa Real Madrid", '300,00', "foto1.jpg", '12', "Camisa 100%poliester");
insert into produto values ('', "Camisa Liverpool", '300,00', "foto2.jpg", '12', "Camisa 100%poliester");
insert into produto values ('', "Camisa Chelsea", '260,00', "foto3.jpg", '6', "Camisa 100%poliester");
insert into produto values ('', "Camisa Corinthians", '350,00', "foto4.jpg", '10', "Camisa 100%poliester");
insert into produto values ('', "Camisa Barcelona", '280,00', "foto5.jpg", '4', "Camisa 100%poliester");
insert into produto values ('', "Camisa Santos", '230,00', "foto6.jpg", '2', "Camisa 100%poliester");

_____________________________________________________________________________________________________________________________________
Banco de Dados do Site

create database ngstore;
use ngstore;

create table usuario (
    id int primary key auto_increment,
    nome_usu varchar(80) not null,
    cpf_usu char(11) not null,
    email_usu varchar(80) not null,
    senha_usu varchar(20) not null,
    ende_usu int,
    foreign key (ende_usu) references endereco(id)
);

create table endereco(
    id int primary key auto_increment,
    cid_usu varchar(60) not null,
    rua_usu varchar(60) not null,
    num_usu int not null,
    bairro_usu varchar(60) not null,
    complem_usu varchar(60) not null
);

create table produto(
    id int primary key auto_increment,
    nome_prod varchar(220) not null,
    preco_prod double not null,
    imagem_prod varchar(220) not null,
    quant_prod int not null,
    desc_prod varchar(500) null
);





