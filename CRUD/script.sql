create database bookstore
default character set utf8
default collate utf8_general_ci;

use bookstore;

create table if not exists produtos(
	id int not null auto_increment,
    nome varchar(100) not null,
    quantidade int not null,
    valor decimal(10, 2),
    primary key(id)
) default charset = utf8;

select * from produtos;