<?php
//Conexion a base de datos 
    $server="localhost";
    $username= "user_curse";
    $password = "Renata10";
    $database ="blog";
    $conexion = mysqli_connect($server, $username, $password, $database);
    mysqli_query($conexion, "SET NAMES 'utf8'");

if(!isset($_SESSION)){
    session_start();

}
