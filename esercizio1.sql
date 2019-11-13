drop table if exists frutta;
drop table if exists verdura;
drop table if exists stagione;

Create table frutta (
nome character (20),
stagione character (20) primary key
);

insert into frutta (nome, stagione) values ('mela', 'autunno');
insert into frutta  (nome, stagione) values ('pera', 'primavera');
insert into frutta (nome, stagione) values ('anguria', 'estate');
insert into frutta (nome, stagione) values ('mandarini', 'inverno');

Create table verdura (
nome character (20),
stagione character  (20),
foreign key (stagione) references stagione (nome)
);

insert into verdura (nome, stagione) values ('carota', 'autunno');
insert into verdura (nome, stagione) values ('cicoria', 'inverno');
insert into verdura (nome, stagione) values ('asparagi', 'primavera');
insert into verdura (nome, stagione) values ('zucchine', 'estate');


Create table stagione (
nome character (20)
);

insert into stagione (nome) values ('autunno');
insert into stagione (nome) values ('primavera');
insert into stagione (nome) values ('estate');
insert into stagione (nome) values ('inverno');

select nome stagione from frutta where stagione like 'inverno';
select nome stagione from verdura where stagione like 'estiva';

