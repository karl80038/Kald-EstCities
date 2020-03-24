<?php
/*The central configuration file
that contains required parameters to establish a connection with the MySQL Server's database instance */
$username = "kald";
$database = "kald";
$password = "Y7jK66@dBud5etz";
$servername = "localhost";
$dbconnection = new mysqli($servername, $username, $password, $database);
/* Use UTF8 encoding for database */
$dbconnection -> set_charset("utf8");
/*CREATE TABLE game (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    question VARCHAR(50),
    answer VARCHAR(50),
    usrAnswer VARCHAR(3),
    correct int
    );

/* CREATE TABLE cities ( id int PRIMARY KEY NOT NULL AUTO_INCREMENT, city VARCHAR(50) ); */    
?>