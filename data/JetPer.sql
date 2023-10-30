create database JetPersonalizacao;   /*implementando o bando de dados*/

use JetPersonalizacao;                        

create table CrieCaca (   /*gerando tabelas*/
	ID_Caca int (10) primary key auto_increment,
    Nome_Caca varchar (110),
    /*Descrição do Historico*/
    Tipo_Missao enum ('Multimissão', 'Multitarefa', 'Multifunção', 'Superioridae Aérea', 'Ataque ao Solo', 'Treinamento', 'Transporte', 'AWACS', 'AGS', 'AEW', 'Bombardeiro') 
    check (Tipo_Missao like '%Multimissão%' and '%Multitarefa%' and '%Multifunção%' and '%Superioridae Aérea%' and '%Ataque ao Solo%' and '%Treinamento%' and '%Transporte%' 
						and '%AWACS%' and '%AGS%' and '%AEW%' and '%Bombardeiro%'),
    Geracao varchar (30),
    Pais varchar (50),
    Fabricante varchar (200),
    Periodo_Producao varchar (100),
    Custo_Unitaio decimal (15,2),
    Custo_Desevolvimento decimal (15,2),
    Tempo_Develo decimal (2),
    Primeiro_Voo date,
    Introduzido date,

    /*Descrição Geral*/
    Tripulacao int (2),
    Comprimento decimal (3,2),
    Envergadura decimal (3,2),
    Altura decimal (3,2),
    Área_Asa decimal (3,2),
    Peso_Va decimal (8,2),
    Peso_Bru decimal (8,2),
    Peso_Cheio decimal (8,2),
    Capacidade_Combustivel decimal (8,2),

    /*Descrição Motor*/
    Numero_Motor int (2),
    Tipo_Mo varchar (50),
    Fabricante_Modelo varchar (110),
    Empuxo_Seco decimal (8,2),
    Empuxo_Pós_Com decimal (8,2),

    /*Descrição Perofmace*/
    Velocidade_Max decimal (8,2),
    VelocidadeMach decimal (8,2),
    Alcance decimal (8,2),
    Alcance_Belico decimal (8,2),
    Razao_Sub decimal (8,2),
    Teto_Servi decimal (8,2),

    /*Descrição Armamento*/
    Metra_Canhao varchar (60),
    Capacidade_carga decimal (8,2),
    Hardpoints text,
    Misseis_Ar text,
    Misseis_Terra text,
    Misseis_Navio text,
    Misseis_Radicao text,
    Bombas text,
    Foguetes text,

    
    /*Descrição Armamento*/
    Radar varchar (50),
    Outros varchar (110)
);



