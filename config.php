<?php
/*The central configuration file
that contains required parameters to establish a connection with the MySQL Server's database instance */
$username = "kald";
$database = "kald";
$password = "Y7jK66@dBud5etz";
$servername = "localhost";
$dbConnection = new mysqli($servername, $username, $password, $database);
/* Use UTF8 encoding for database */
$dbConnection -> set_charset("utf8");
/*CREATE TABLE game (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    question VARCHAR(50),
    answer VARCHAR(50),
    usrAnswer VARCHAR(3),
    correct VARCHAR(10),
    submitdatetime VARCHAR(100)
    );

/* CREATE TABLE cities ( id int PRIMARY KEY NOT NULL AUTO_INCREMENT, city VARCHAR(50) ); */    
?>