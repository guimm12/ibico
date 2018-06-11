create database db_ibico;
use db_ibico;


create table tb_usuario
(
	cd_usuario int primary key auto_increment, 
	nm_nome varchar(100),
	nm_sobrenome varchar(100),
	cd_telefone_fixo int(12),
	cd_telefone_movel int(13),
	nm_email varchar(100),
	sx_sexo varchar(10),
	cd_senha int(15),
    nm_estado varchar(100),
	nm_cidade varchar(100),
	nm_bairro varchar(100),
	

	nm_formacao varchar(100),
	nm_area_atuacao varchar(100),
	ds_obs varchar(300),
	cd_nota float-- toda vez que uma avaliação é aprovada esse valor é atualizado

);
	
 
 

    
create table tb_anuncio
(
	cd_anuncio int primary key auto_increment, 
	dt_criacao datetime,
	nm_titulo varchar(100),
	ds_anuncio varchar(1000),
	cd_usuario_profissional int,
	cd_estado int,
	cd_cidade int,
	cd_bairro int, 

	
	constraint fk_usuario_profissional
	foreign key (cd_usuario_profissional)
	references tb_usuario_profissional (cd_usuario_profissional),
	constraint fk_estado
	foreign key (cd_estado)
	references tb_estado (cd_estado),
	constraint fk_cidade
	foreign key (cd_cidade)
	references tb_cidade (cd_cidade),
	constraint fk_bairro
	foreign key (cd_bairro)
	references tb_bairro (cd_bairro)
);

create table tb_tag
(
	cd_tag int primary key auto_increment, 
	nm_tag varchar(100)
);
		
       
create table tb_anuncio_tag
(
	cd_anuncio_tag int primary key auto_increment, 
	cd_anuncio int,
	cd_tag int,
			
	constraint fk_anuncio
	foreign key (cd_anuncio)
	references tb_anuncio (cd_anuncio),
	constraint fk_tag
	foreign key (cd_tag)
	references tb_tag (cd_tag)
);

create table tb_anuncio_avaliacao -- gera uma notificação ao ser criado
(
	cd_avaliacao int primary key auto_increment, 
	cd_anuncio int,
	cd_usuario int, -- cliente que quer fazer a avaliação
	cd_nota float,
	ds_avaliacao varchar(1000),
	ic_aprovada bit, -- aprovada se o profissional confirmou ter feito serviço com esse cliente
	
	

			
	constraint fk_anuncio
	foreign key (cd_anuncio)
	references tb_anuncio (cd_anuncio),
	constraint fk_usuario
	foreign key (cd_usuario)
	references tb_usuario (cd_usuario)
);



create table tb_pedido
(
	cd_pedido int primary key auto_increment, 
	dt_criacao datetime,
	nm_titulo varchar(100),
	ds_pedido varchar(1000),
	cd_usuario int,
	nm_estado varchar(100),
	nm_cidade varchar(100),
	nm_bairro varchar(100),
	nm_caregoria varchar(100),


	
	constraint fk_usuario
	foreign key (cd_usuario)
	references tb_usuario (cd_usuario)
	
);


create table tb_pedido_tag
(
	cd_pedido_tag int primary key auto_increment,
	cd_pedido int,
	cd_tag int,
	

	constraint fk_pedido
	foreign key (cd_pedido)
	references tb_pedido (cd_pedido),
	constraint fk_tag
	foreign key (cd_tag)
	references tb_tag (cd_tag)
);

create table tb_pedido_resposta -- gera uma notificação ao ser criado
(
	cd_pedido_resposta int primary key auto_increment, 
	cd_pedido int,
	cd_usuario_profissional int, -- profissional que quer atender ao pedido
	ds_resposta varchar(500),
	
	

	
	constraint fk_usuario_profissional
	foreign key (cd_usuario_profissional)
	references tb_usuario_profissional (cd_usuario_profissional),
	constraint fk_pedido
	foreign key (cd_pedido)
	references tb_pedido (cd_pedido)
	
);

create table tb_notificacao
(
	cd_notificacao int primary key auto_increment, 
	cd_usuario int, -- usuario que recebeu a notificação
	dt_criacao datetime,
	ds_tipo varchar(9), -- "avaliacao" ou "resposta"
	cd_pedido_resposta int,
	
	

	
	constraint fk_usuario
	foreign key (cd_usuario)
	references tb_usuario (cd_usuario),
	constraint fk_pedido_resposta
	foreign key (cd_pedido_resposta)
	references tb_pedido_resposta (cd_pedido_resposta)
);
