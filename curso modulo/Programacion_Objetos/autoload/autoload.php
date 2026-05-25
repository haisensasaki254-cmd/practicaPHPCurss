<?php 


function autoload($clase){
    require_once 'clases/'.strtolower( $clase).'.php';
}

spl_autoload_register("autoload"); //Emplea para cargar las clases que estan dentro del directorio
?>