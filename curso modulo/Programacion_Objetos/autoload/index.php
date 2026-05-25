<?php 
require_once "autoload.php"; //Esta incluye de manera nativa todas las clases dentro de una carpeta
use misclases\Usuario , misclases\Categoria , misclases\Entrada; 
#use paneladministrador\Usuario as usuario_admin;
 //Asi podemos tratar lo que venga como una clase





//Espacios de nombres y paquetes
class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public  function __construct(){
        $this->usuario = new Usuario("josue","haisen@gmail.com");
        $this->categoria = new Categoria("eroge","Los juegos de personas mas cultas");
        $this->entrada = new Entrada("Mejor juego","Sin duda mengumin tensei esta buenaso");
    }

    public function saludar(){
        return 'saludo';
    }

    public function informacion(){
        echo __CLASS__; //Existen constantes que tiene por defecto nuestras clases
    }
    
}

$persona  =  new Principal();
var_dump($persona);


//Como verificar si una clase existe ?

$metodos = get_class_methods($persona);
$busqueda = array_search("saludar", $metodos);
var_dump($busqueda);


$class = class_exists("misclases\Usuario"); #Es necesario indicarle el auto load
var_dump($class);
if($class){ 
    echo "SI existe la clase";
}else{
    echo "No existe la clase";
}

?>