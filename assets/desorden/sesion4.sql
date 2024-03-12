create database colegio;
create database hotel;
create database restaurante;
create database ferreteria;
create database supermercado;
create database transportes;
create database departamento;
create database cursos;
show databases;
use colegio;
create table clientes (nombres varchar(30), 
apellidos varchar(30), identificacion integer (10));
create table curso (califica varchar(4), 
observaciones varchar(50), satisfaccion char (2));
drop table curso;
create table curso( nombrecurso varchar(40), especialidad varchar (30), modalidad varchar(30), codigo integer (6));
describe clientes;
drop database citas;
drop database curso_sql;
drop database salmon;
use motos;
describe motos;
create database ejemplo4;
use ejemplo4;
create table usuarios(nombres varchar(30), clave
varchar(6), identificacion integer(11), primary key
(identificacion));
show tables;
describe usuarios;
insert into usuarios(nombres, clave,
identificacion) values ('Mauricio',
'Pola50', 7690036);
insert into usuarios(nombres, clave,
identificacion) values ('Gerardo',
'Pola51', 7690037);
insert into usuarios(nombres, clave,
identificacion) values ('Carlos', 'Pola52',
7690040);
insert into usuarios(nombres, clave,
identificacion) values ('Rocio', 'Pola53',
7690015);
insert into usuarios(nombres, clave,
identificacion) values ('Norma',
'Pola54', 7690008);
insert into usuarios(nombres, clave,
identificacion) values ('William', 'Pola56',
7690036 );
select nombres,clave, identificacion from usuarios order
by nombres, identificacion;
select count(*) from usuarios;

create table libros(
codigo int unsigned auto_increment,
titulo varchar(40),
autor varchar(30),
editorial varchar(15),
precio decimal (5,2) unsigned,
primary key (codigo)
);
insert into libros (titulo,autor,editorial,precio)
values('El aleph','Borges','Planeta',15.50);
insert into libros (titulo,autor,editorial,precio)
values('Martin Fierro','Jose Hernandez','Emece',22.90);
insert into libros (titulo,autor,editorial,precio)
values('Martin Fierro','Jose Hernandez','Planeta',39);
insert into libros (titulo,autor,editorial,precio)
values('Aprenda PHP','Mario Molina','Emece',19.50);
insert into libros (titulo,autor,editorial,precio)
values('Cervantes y el quijote','Borges','Paidos',35.40);
insert into libros (titulo,autor,editorial,precio)
values('Matematica estas ahi', 'Paenza', 'Paidos',19);
select codigo,titulo,autor,editorial,precio
from libros
order by titulo;
select codigo,titulo,autor,editorial,precio
from libros
order by 5;
select codigo,titulo,autor,editorial,precio
from libros
order by titulo, editorial;
select codigo,titulo,autor,editorial,precio
from libros
order by titulo asc, editorial desc;
use colegio;
Create table Alumnos(Id char(8) primary key, Nombre varchar(20) not null, Apellido varchar(20) not null,
Direccion varchar(50),Fecha_nacimiento char(8));
Create table Asignatura(Id char(8) primary key, Nombre varchar(20) not null);
Create table Inscripcion(Id char(8) primary key, IdAsignatura char(8) not null,
IdAlumno char(8) not null,IdProfesor char(8) not null, Fecha char(8),
CONSTRAINT fk_Asignatura FOREIGN KEY (IdAsignatura) REFERENCES
Asignatura (Id),CONSTRAINT fk_Alumno FOREIGN KEY (IdAlumno) REFERENCES
Alumnos (Id), CONSTRAINT fk_Profesor FOREIGN KEY (IdProfesor) REFERENCES
Profesor (Id));

show tables;
describe alumnos;
describe asignatura;
describe inscripcion;
alter table profesor add primary key(id);
describe profesor;
alter table profesor drop primary key;
create database biblioteca;
use biblioteca;
create table libros( codigo int
unsigned auto_increment, titulo
varchar(40) not null, autor
varchar(30), editorial varchar(15),
precio decimal(5,2) unsigned,
cantidad smallint unsigned, primary
key (codigo) );
describe libros;
insert into libros (titulo,autor,editorial,precio,cantidad) values('El Adefecio','J Borges','Planeta',15,100);
insert into libros (titulo,autor,editorial,precio,cantidad) values('Martin Fierro','Jose
Hernandez','Emece',22.20,200);
insert into libros (titulo,autor,editorial,precio,cantidad) values('Antologia poetica','Borges','Planeta',40,150);
insert into libros (titulo,autor,editorial,precio,cantidad) values('Aprenda PHP','Mario
Molina','Emece',18.20,200);
insert into libros (titulo,autor,editorial,precio,cantidad) values('Cervantes y el quijote',' J
Borges','Paidos',36.40,100);
insert into libros (titulo,autor,editorial,precio,cantidad) values('Manual de PHP', 'J.C. Paez',
'Paidos',30.80,100);
insert into libros (titulo,autor,editorial,precio,cantidad) values('Harry Potter y la piedra filosofal','J.K.
Rowling','Paidos',45.00,500);
insert into libros (titulo,autor,editorial,precio,cantidad) values('Harry Potter y la camara secreta','J.K.
Rowling','Paidos',46.00,300);
insert into libros (titulo,autor,editorial,precio,cantidad) values('Alicia en el pais de las maravillas','Lewis
Carroll','Paidos',null,50);
insert into libros (titulo,autor,editorial,precio,cantidad) values('Cien Años de Soledad','Garcia
Marquez','Norma',20.50,100);
select * from libros;
select titulo, precio,cantidad,precio*cantidad from
libros;
select titulo,
precio,cantidad,precio*cantidad,(precio*cantidad
*0.19) from libros;
select titulo, precio,precio*0.1,precio-(precio*0.1)
from libros;
create database XYZ_ltda;



