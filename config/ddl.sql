create database commerce;

use commerce;

create table categorias (
	id int primary key not null unique auto_increment,
    nome varchar(50)
);
create table produtos (
    id int primary key not null unique auto_increment,
    nome varchar(50),
    descricao varchar(250),
    categoria int not null,
    img varchar(200),
    preco float,
    foreign key (categoria) references categorias(id)
);

create table usuarios (
    id int primary key not null unique auto_increment,
    nome varchar(50),
    email varchar(50),
    telefone varchar(15),
    data_nascimento date,
    cpf varchar(11),
    genero varchar(10),
    foto_perfil varchar(200)    
);