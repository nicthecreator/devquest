drop database os_registrator;

create schema if not exists os_registrator default character set utf8;

use os_registrator;


-- CADASTRO E LOGIN FUNCIONÁRIOS --
create table if not exists login_funcionario (
	id_func int not null primary key auto_increment,
	login_func varchar(100) not null,
    senha_func varchar(12) not null
);

-- CADASTRO, LOGIN E DADOS DOS CLIENTES --
create table if not exists tb_cliente (
	id_cl int not null primary key auto_increment,
    email varchar(100),
    senha_cl varchar(12) not null,
	nome varchar(50),
    sobrenome varchar(80),
    cpf varchar(11),
    telefone int(11),
    endereco varchar(100)
);

-- DADOS DOS EQUIPAMENTOS -- 
create table if not exists equips (
    id_num_os int not null primary key auto_increment,
	modelo varchar(100),
    marca varchar(100),
    serial_number varchar(30),
    obs varchar(200),
    defeito varchar(100),
    os_status varchar(100),
    valor decimal
);

select * from login_funcionario;
select * from tb_cliente;
select* from equips;