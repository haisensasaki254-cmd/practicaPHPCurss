<?php 
require_once "autoload.php"; //Esta incluye de manera nativa todas las clases dentro de una carpeta



//Espacios de nombres y paquetes
class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public  function __construct(){
        $this->usuario = new misclases\Usuario("josue","haisen@gmail.com");
    }

    
}

?>