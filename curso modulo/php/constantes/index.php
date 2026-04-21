<?php 
//Constantes 
// Contenedor de informacion que no puede variar

define('nombre','Josue Castillo'); #Se emplean la funcion de define en el que se pasa nombre de la constante y contenido 
define('web', 'Haisen Programing');

echo nombre;

echo '<h1>Hola mi nombre es</h1>' . nombre ;  #La pecularidad es que no se usa $ sino el nombre directo


$nombre = "Otro nombre";

//Constantes predefinidas 


echo PHP_OS;

echo "<h2>".PHP_DATADIR."</h2>";

echo PATHINFO_EXTENSION;


?>