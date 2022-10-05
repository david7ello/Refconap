GO
CREATE DATABASE refconap
CREATE TABLE  usuarios (
id_user Int (11),
nombre Varchar (50) NOT NULL,
contrasenia Varchar (50) NOT NULL,
correo Varchar (80) NOT NULL,
celular Varchar (50) NOT NULL,
estatus Varchar(1) NULL DEFAULT 'A', 
tipo Varchar(50) NOT NULL,
fecha datetime NOT NULL,
PRIMARY KEY ('id_user')
ENGINE = InnoDB;

CONSTRAINT actcolumnas_id_user PRIMARY KEY (id_user),

)

CREATE TABLE participantes (
id_part Int (11) AUTO_INCREMENT,
nombre Varchar (50) NOT NULL,
usuario Varchar(50) NOT NULL,
contrasenia Varchar (50) NOT NULL,
correo Varchar (80) NOT NULL,
celular Varchar (50) NOT NULL,
estatus Varchar(1) NULL DEFAULT 'A',
fecha datetime NOT NULL, 

CONSTRAINT actcolumnas_id_part PRIMARY KEY (id_part),

)

INSERT INTO 'usuarios' ('id_user', 'nombre', 'contrasenia', 'correo', 'celular', 'estatus', 'tipo' 'fecha')
VALUES ('1001', 'ADMINISTRADOR 1', '1001', 'ejemplo@gmail.com', '4423123456', 'A', "07/08/2022");
INSERT INTO 'usuarios' ('id_user', 'nombre', 'contrasenia', 'correo', 'celular', 'estatus', 'tipo' 'fecha')
VALUES ('2001', 'INSTRUCTOR 1', '2001', 'instructor@gmail.com', '4412345897', 'A', "07/08/2022");
INSERT INTO 'participantes' ('id_part', 'nombre', 'usuario', 'contrasenia', 'correo', 'celular', 'estatus', 'fecha')
VALUES ('1', 'PARTICIPANTE 01', 'part', 'part', 'part@gmail.com', '4423123478', 'A', "07/08/2022");


CREATE TABLE `edith`.`usuarios` 
(`id_user` INT(11) NOT NULL , 
	`nombre` VARCHAR(50) NULL , 
	`contrasenia` VARCHAR(50) NULL , 
	`fecha` DATE NULL , 
	PRIMARY KEY (`id_user`)) ENGINE = InnoDB;