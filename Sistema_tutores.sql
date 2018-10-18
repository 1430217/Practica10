create table carreras(
	idCarrera int auto_increment,
	nombre varchar(120),
    primary key (idCarrera)
);


create table maestros(
	idMaestro int auto_increment,
    nombre varchar(120),
    no_empleado int,
    idCarrera int,
	email varchar(120),
    password varchar(255),
    foreign key(idCarrera) references carreras(idCarrera),
    primary key (idMaestro)
);


create table alumnos(
	idAlumno int auto_increment,
    nombre varchar(120),
    matricula varchar(129),
    idCarrera int,
    idMaestro int,
    foreign key (idCarrera) references carreras(idCarrera),
    foreign key (idMaestro) references maestros(idMaestro),
    primary key(idAlumno)
);

create table session_tutoria(
	idSesion int auto_increment,
    idAlumno int,
    idMaestro int,
    fecha date,
    hora time,
    categoria varchar(255),
    tipo varchar(120),
    descripcion varchar(255),
    foreign key (idAlumno) references alumnos(idAlumno),
    foreign key (idMaestro) references maestros(idMaestro),
    primary key (idSesion)
);
 
insert into carreras (nombre) values('Ing. en Tec. de la informacion'), ('Lic. en Admon. de G. de PyMES'),('Ing. en Mecatronica'), 
														('ing. en Tec. de Manufactura'),('Ing. en Sistemas Automotrices');
select * from alumnos;

