create database db_livraria;
use db_livraria;

create table tb_usuarios(
usu_id int not null auto_increment primary key,
usu_nome varchar(45) not null,
usu_email varchar(45) not null,
usu_senha varchar(45) not null
);

create table tb_livros (
liv_id int not null auto_increment primary key,
liv_nome varchar(45) not null,
liv_usu_id int,
foreign key(liv_usu_id) references tb_usuarios(usu_id)
);

select * from tb_usuarios;
select * from tb_livros;