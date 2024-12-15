-- Se crean las tablas de la base de datos villapress
-- Se crean las relaciones entre las tablas de la base de datos villapress
-- Se hacen validaciones para que no se creen tablas o relaciones que ya existen
CREATE DATABASE IF NOT EXISTS villapress;
USE villapress;

CREATE TABLE IF NOT EXISTS empleado
(
    PKId_Emp SMALLINT NOT NULL AUTO_INCREMENT,
    TipoDoc_Emp ENUM('cedula de ciudadania', 'cedula de extranjeria') DEFAULT 'cedula de ciudadania' NOT NULL,
    NoDoc_Emp SMALLINT NOT NULL,
    Nombre_Emp VARCHAR(50) NOT NULL,
    Apellido_Emp VARCHAR(50) NOT NULL,
    Usuario_Emp VARCHAR(50) NOT NULL,
    Contrasena_Emp VARCHAR (50) NOT NULL,
    Telefono_Emp VARCHAR(50) NOT NULL,
    Email_Emp VARCHAR(50) NOT NULL,
    
    PRIMARY KEY(PKId_Emp)
);

CREATE TABLE IF NOT EXISTS cliente
(
    PKId_Cli SMALLINT NOT NULL AUTO_INCREMENT,
    TipoDoc_Cli ENUM('cedula de ciudadania', 'cedula de extranjeria') DEFAULT 'cedula de ciudadania' NOT NULL,
    NoDoc_Cli SMALLINT NOT NULL,
    Nombre_Cli VARCHAR(50) NOT NULL,
    Apellido_Cli VARCHAR(50) NOT NULL,
    Telefono_Cli VARCHAR(50) NOT NULL,
    Direccion_Cli VARCHAR(50) NOT NULL,
    
    PRIMARY KEY(PKId_Cli)
);

CREATE TABLE IF NOT EXISTS servicio
(
    PKId_Ser SMALLINT NOT NULL AUTO_INCREMENT,
    Nombre_Ser VARCHAR(50) NOT NULL,
    Precio_Ser FLOAT NOT NULL,
    
    PRIMARY KEY(PKId_Ser)
);

CREATE TABLE IF NOT EXISTS factura
(
    PKId_Fac SMALLINT NOT NULL AUTO_INCREMENT,
    Total_Fac FLOAT NOT NULL,
    Fecha_Fac DATE NOT NULL,
    Estado_Fac ENUM('pago', 'no pago') NOT NULL DEFAULT 'no pago',
    FKId_Emp SMALLINT NOT NULL,
    FKId_Cli SMALLINT NOT NULL,
    
    PRIMARY KEY(PKId_Fac)
);

CREATE TABLE IF NOT EXISTS pago
(
    PKId_Pago SMALLINT NOT NULL AUTO_INCREMENT,
    Total_Pago FLOAT NOT NULL,
    Fecha_Pago DATE NOT NULL,
    MetodoPago ENUM('nequi', 'daviplata', 'datafono', 'efectivo') DEFAULT 'efectivo',

    PRIMARY KEY(PKId_Pago)
);

CREATE TABLE IF NOT EXISTS facturaXservicio
(
    PKId_FxS SMALLINT NOT NULL AUTO_INCREMENT,
    Cantidad_Ser SMALLINT NOT NULL,
    FKId_Fac SMALLINT NOT NULL,
    FKId_Ser SMALLINT NOT NULL,

    PRIMARY KEY(PKId_FxS)
);

CREATE TABLE IF NOT EXISTS facturaXpago
(
    PKId_FxP SMALLINT NOT NULL AUTO_INCREMENT,
    Total_FxP FLOAT NOT NULL,
    FKId_Fac SMALLINT NOT NULL,
    FKId_Pago SMALLINT NOT NULL,

    PRIMARY KEY(PKId_FxP)
);

ALTER TABLE factura
    ADD CONSTRAINT genera
        FOREIGN KEY (FKId_Emp) REFERENCES empleado(PKId_Emp);

ALTER TABLE factura
    ADD CONSTRAINT recibe
        FOREIGN KEY (FKId_Cli) REFERENCES cliente(PKId_Cli);

ALTER TABLE facturaXservicio
    ADD CONSTRAINT contiene
        FOREIGN KEY (FKId_Fac) REFERENCES factura(PKId_Fac);

ALTER TABLE facturaXservicio
    ADD CONSTRAINT contiene_1
        FOREIGN KEY (FKId_Ser) REFERENCES servicio(PKId_Ser);

ALTER TABLE facturaXpago
    ADD CONSTRAINT pertenece
        FOREIGN KEY (FKId_Fac) REFERENCES factura(PKId_Fac);

ALTER TABLE facturaXpago
    ADD CONSTRAINT pertenece_1
        FOREIGN KEY (FKId_Pago) REFERENCES pago(PKId_Pago);