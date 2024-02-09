show databases;

create database curso_sql;

use curso_sql;

create table usuario(
nombre varchar(50), 
edad int (5)
);

show tables;

describe usuario;

drop table usuario;

drop database curso_sql;
drop table alumno;

create table alumno(
nombre varchar (50),
apellido varchar(50),
dirección varchar(100),
telefono varchar(15),
edad int (10));

show tables;
describe alumno;

INSERT INTO alumno(nombre, apellido, dirección, telefono, edad)
		VALUES('Juan', 'Martinez','Centro', '8298293849', 35);
        
insert into alumno values('Pedro', 'Martinez', 'Alqueria', '3453563', 15);

insert into alumno (nombre, telefono, edad) values ('Miguel', '34546657', 36);

INSERT INTO alumno(nombre, apellido, dirección, telefono, edad)
		VALUES('Jorge', 'Sanchez','Galan', '23434556', 35),
				('Carlos', 'Suarez', 'Chapinero', '13234234', 30);

select * from alumno;

select nombre, dirección from alumno;

select * from alumno where nombre = 'Juan';

INSERT INTO alumno(nombre, apellido, dirección, telefono, edad)
		VALUES('Juan', 'Lopez','Chico', '8293849', 35);
        
select * from alumno where nombre = 'Alex';

#OPERADORES RELACIONALES
# = Igual
# <> Diferente
# > Mayor que
# < Menor que
# >= Mayor o Igual que
# <= Mwenor o Igual que

delete from alumno;

delete from alumno where nombre = 'Juan';

UPDATE alumno SET edad =33;

UPDATE alumno SET edad =11 WHERE nombre='pedro';

CREATE TABLE IF NOT exists producto(
id int(11) auto_increment,
nombreProducto varchar(50),
descipcion text,
precio float(11,2),
primary key(id));

describe producto;

insert into producto values(101,'laptop','la mejor laptop del mercado',128.6);

insert into producto values(null,'laptop','la mejor laptop del mercado',128.6);

select*from producto;

delete from producto;

insert into producto values(null,'mouse','prende luz led',5.8);

truncate table producto;

create table persona(
id integer unsigned primary key,
nombre varchar(50) not null,
edad integer unsigned);

insert into persona values(1.5,'luis',30.5);

create table if not exists libros(
id int(6) unsigned auto_increment,
titulo varchar(40) not null,
editorial varchar(40),
autor varchar(50) default 'Desconocido',
precio decimal(5,2) unsigned default 8.25,
cantidad mediumint unsigned not null,
primary key(id));

insert into libros(titulo,editorial,autor,cantidad)
		values('c# en una hora','sql','luis',5);
 
 insert into libros(titulo,editorial,autor,cantidad)
		values('JAVA','KDK','JUAN',30);
        
insert into libros(titulo,cantidad)
		values('SQL',200);

select*from libros;

drop table libros;

create table if not exists libros(
id int(6) zerofill auto_increment,
titulo varchar(40) not null,
editorial varchar(40),
autor varchar(50) default 'Desconocido',
precio decimal(5,2) unsigned default 8.25,
cantidad mediumint zerofill not null,
primary key(id));









