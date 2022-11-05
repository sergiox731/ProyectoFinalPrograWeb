# ProyectoFinalPrograWeb
Página web que funciona como una agenda y calendario para recordar eventos futuros.

Esta página cuenta con un login de inicio de sesión y registrar usuario, cuenta con un calendario donde puede visualizar los meses, días y semanas del año, al darle click en algún día valido podrá crear un evento marcando la fecha y hora de inicio hasta hora y fecha fin (Recordando deben ser fechas válidas, si ingresa una fehca pasada no podrá crear eventos) también cuenta con un menú para crear eventos manualente y seleccionarlos donde desee.


Scripts para las bases de datos:

Tabla usuarios:

CREATE TABLE usuarios(
nombre VARCHAR(50) PRIMARY KEY AUTO_INCREMENT,
clave  VARCHAR(50) 
);

Tabla eventosusuarios:

CREATE TABLE eventosusuarios(
id INT(11) PRIMARY KEY AUTO_INCREMENT,
titulo VARCHAR(255) NULL,
descripcion TEXT NULL,
inicio DATETIME NULL,
fin DATETIME NULL,
colortexto VARCHAR(7) NULL,
colorfondo VARCHAR(7) NULL,
usuario VARCHAR(50) NULL
);

Tabla eventospredefinidos:


CREATE TABLE eventospredefinidos:
id INT(11) PRIMARY KEY AUTO_INCREMENT,
titulo VARCHAR(255) NULL,
horainicio TIME NULL,
horafin TIME NULL,
colortexto VARCHAR(7) NULL,
colorfondo VARCHAR(7) NULL,
usuario VARCHAR(50) NULL
);
