/**
 * Author:  Enrique Nieto Lorenzo
 * Created: 17 nov. 2025
 */

CREATE DATABASE IF NOT EXISTS DBENLDWESProyectoTema5;

USE DBENLDWESProyectoTema5;

CREATE TABLE IF NOT EXISTS T02_Departamento(
T02_CodDepartamento VARCHAR(3) PRIMARY KEY,
T02_DescDepartamento VARCHAR(255),
T02_FechaCreacionDepartamento DATETIME,
T02_VolumenDeNegocio FLOAT,
T02_FechaBajaDepartamento DATETIME
);

CREATE TABLE IF NOT EXISTS T01_Usuarios (
    T01_CodUsuario VARCHAR(10) NOT NULL,
        CHECK (LENGTH(T01_CodUsuario) >= 4),
        PRIMARY KEY (T01_CodUsuario),
    T01_Password VARCHAR(255) NOT NULL,
        CHECK (LENGTH(T01_Password) >= 4),
    T01_DescUsuario VARCHAR(255) NOT NULL,
    T01_NumConexiones INT NOT NULL default 0,
    T01_FechaHoraUltimaConexion DATETIME NOT NULL default now(),
    T01_Perfil VARCHAR(20) NOT NULL default 'usuario',
    T01_ImagenUsuario VARCHAR(255) default null
);

CREATE USER IF NOT EXISTS "userENLDWESProyectoTema5"@"%" IDENTIFIED BY "paso";
GRANT ALL PRIVILEGES ON *.* TO "userENLDWESProyectoTema5"@"%" WITH GRANT OPTION;

FLUSH PRIVILEGES;
