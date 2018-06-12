create database ibico;
use ibico;

create table usuario 
(
	-- chave primária
	cd_usuario int primary key auto_increment,
	
    -- dados do primeiro cadastro
    nome varchar(100) not null,
	sobrenome varchar(300) not  null,
	email varchar(300) not null,
	sexo varchar(15);
    telefone varchar(12),
	celular varchar(13),
    senha varchar(100) not null,
    
    -- dados do profissional
    formacao varchar(300),
    cargo varchar(100),
    ds_curriculo varchar(5000),
    
    -- outros
    dt_criacao datetime,
    ds_perfil varchar(3000)
);

create table tag
(
	cd_tag int primary key auto_increment,
    tag varchar(100)
);

create table anuncio
(
	cd_anuncio int primary key auto_increment,
    dt_criacao datetime,
    cd_usuario int, -- profissional dono do serviço
    contato varchar(300),
    ds_titulo varchar(100),
    ds_anuncio varchar(5000),
    nota float -- toda vez que uma avaliação é aprovada esse valor é atualizado
);

-- tabela para consulta dos estados/cidades/bairros do Brasil
create table localidade
(
	cd_localidade int primary key auto_increment,
    uf varchar(2),
	estado varchar(300),
	municipio varchar(300),
    bairro varchar(300)
);

create table anuncio_localidade
(
	cd_anuncio int,
    cd_localidade int
);

create table anuncio_tag
(
	cd_anuncio int,
    cd_tag int
);

create table anuncio_avaliacao -- gera uma notificação ao ser criado
(
	cd_avaliacao int primary key auto_increment,
	cd_anuncio int,
	cd_usuario int, -- cliente que quer fazer a avaliação
    nota int, -- review de 1-5 estrelas
    ds_avaliacao varchar(1000),
    ic_aprovada bit -- aprovada se o profissional confirmou ter feito serviço com esse cliente
);

create table pedido
(
	cd_pedido int primary key auto_increment,
    dt_criacao datetime,
    -- cd_localidade int,
    ds_titulo varchar(100),
    ds_pedido varchar(5000),
	estado varchar(50),
	municipio varchar(100),
	bairro varchar(100),
	FK_id_cliente int not null,
	FOREIGN KEY (FK_id_cliente) REFERENCES usuario(Id)
);

create table pedido_tag
(
	cd_pedido int,
    cd_tag int
);

create table pedido_resposta -- gera uma notificação ao ser criado
(
	cd_resposta int primary key auto_increment,
	cd_pedido int,
    cd_usuario int, -- profissional que quer atender ao pedido
    contato varchar(300),
    ds_resposta varchar(500)
);

create table notificacao
(
	cd_usuario int, -- usuario que recebeu a notificação
    dt_criacao datetime,
    tipo varchar(9), -- "avaliacao" ou "resposta"
    cd_avaliacao int,
    cd_resposta int
);
