<?php 
class Persona{
    private $nombre;
    private $ciudad;
    private $edad;
    public function __construct($nombre, $ciudad, $edad) 
    {
        $this ->nombre = $nombre;
        $this ->ciudad = $ciudad;
        $this ->edad = $edad;
    }

    public function __call($name, $arguments) //NOmbre del metodo es $name 
    {
        $prefix_metodo = substr($name,0,3);
        if($prefix_metodo == "get"){
            $propiedad = substr(strtolower($name),3);
            return $this->$propiedad;
        }else{
            return "Metodo no encontrado";
        }
    }
}

$persona  = new Persona("Josue", "Quito", 12);
echo $persona->getNombre();



?>