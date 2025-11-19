-- -- Eliminar la base de datos si ya existe
DROP DATABASE IF EXISTS libreria;

-- Crear la base de datos
CREATE DATABASE libreria CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usar la base de datos
USE libreria;

-- Crear tabla Autor
CREATE TABLE Autor (
    id_autor INT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    nacionalidad VARCHAR(100),
    fecha_nacimiento DATE
) ENGINE=InnoDB;

-- Crear tabla Libro
CREATE TABLE Libro (
    id_libro INT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    genero VARCHAR(100),
    año_publicacion YEAR,
    editorial VARCHAR(150),
    precio DECIMAL(10,2)
) ENGINE=InnoDB;

-- Crear tabla Escribe (relación N a N entre Autor y Libro)
CREATE TABLE Escribe (
    id_autor INT,
    id_libro INT,
    rol_autor VARCHAR(50),
    PRIMARY KEY (id_autor, id_libro),
    FOREIGN KEY (id_autor) REFERENCES Autor(id_autor)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (id_libro) REFERENCES Libro(id_libro)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB;
