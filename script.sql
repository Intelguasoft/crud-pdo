-- Creacion de la BBDD.
CREATE DATABASE demo_pdo;

-- Especificacion de la BBDD a utilizar.
USE demo_pdo;

-- Creacion de la tabla de usuarios.
CREATE TABLE  usuarios (
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(50) NOT NULL,
apellidos VARCHAR(50) NOT NULL,
direccion VARCHAR(100) NOT NULL,
email VARCHAR(90) NOT NULL
) ENGINE=InnoDB;

