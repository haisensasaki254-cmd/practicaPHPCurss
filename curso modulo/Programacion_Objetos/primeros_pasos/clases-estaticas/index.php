<?php 
require_once 'configuracion.php';

//Todo el contenido de esta clase es estatico

Configuracion::setColor('blue'); //Asi accedemos a los valores de las funciones 
Configuracion::setEntorno('Localhost');
Configuracion::setNewsletter(true);

echo Configuracion::$color  . '</br>';
echo Configuracion::$entorno . '</br>';
//Si se puede instancias la 
$configuracion  = new Configuracion();
$configuracion::$color = "rojo";
echo "El color es: " . $configuracion::$color;




?>