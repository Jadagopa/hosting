CREATE DATABASE PRES_PERS;
    
use PRES_PERS;

    CREATE TABLE USUARIOS (
            ID0 int AUTO_INCREMENT PRIMARY KEY ,
            ID Int, 
            NOMBRE TEXT (50),
            APELLIDO TEXT (50),
            EMAIL TEXT (50),
            CONTRASEÑA TEXT (50)
            );
    CREATE TABLE CONECTADOS (
            ID0 int AUTO_INCREMENT PRIMARY KEY ,
            ID INT,
            EMAIL TEXT (50),
            CONTRASEÑA TEXT (50),
            IP TEXT (50)
            );