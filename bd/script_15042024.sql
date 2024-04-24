create database bdCompeticoes;

use bdCompeticoes;

select * from tbusuarios t 


create table tbUsuarios(
id int not null primary key auto_increment,
nome varchar(100) not null,
email varchar(100) not null,
senha varchar(25) not null,
status varchar(20) not null default "Pendente",
dataCadastro datetime not null default now()
); 
create table tbEquipes(
id int not null primary key auto_increment,
nomeEquipe varchar(200) not null,
dataCriacao datetime not null default now()
);
select * from tbequipes t 

create table tbParticipantes(
id int not null primary key auto_increment,
idEquipe int not null,
idParticipante int not null ,
status varchar(20) not null default "Pendente",
lider bit default 0, 
constraint fk_Equipe foreign key (idEquipe)
references tbequipes(id),
constraint fk_Participante foreign key (idParticipante) 
references tbusuarios(id));
select p.*, e.nomeEquipe , u.nome 
from tbparticipantes p, tbequipes e, tbusuarios u
where  p.idEquipe = e.id and p.idParticipante = u.id 

create table tbCompeticoes (
id int not null auto_increment primary key,
nomeCompeticao varchar(200) not null,
descricao text not null,
dataInicioInscricoes date not null,
dataFimInscricoes date not null,
dataInicioCompeticao date not null,
dataFimCompeticao date not null,
premios text,
logo blob)
create table tbEquipesCompeticao(
idCompeticao int not null references tbCompeticoes(id),
idEquipe int not null references tbEquipes(id),
dataCadastro datetime not null default now(),
status varchar(20) not null default "Pendente",
colocacao int default 0)
create table tbFotosCompeticao (
id int not null auto_increment primary key,
idCompeticao int not null references tbCompeticoes(id),
descricao varchar(200) not null,
foto blob,
dataFoto date)