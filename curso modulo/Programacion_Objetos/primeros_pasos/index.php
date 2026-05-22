<?php 
    require_once 'clases.php';
    
    $persona = new Persona();
    $persona->setNombre('Josue');
    $persona->setApellido('Castillo');
    $persona->setEdad(12);
    $persona->setAltura(1.70);

    #var_dump($persona);
    // Metodos que se han heredado

    $informatico = new Informatico();
    $informatico -> getNombre('Andres');
    $lenguajes =   'La persona es informatico y sabe estos lenguajes: ';

    
    echo $lenguajes;
    
    
?>