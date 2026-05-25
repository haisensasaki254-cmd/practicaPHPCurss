<?php 
trait Utiliadades{
    public function mostarNonmbre(){
        echo "<h1>EL nombre es   $this->nombre </h1>";
    }
}
class Coche{
    public $nombre;
    public $marca;
    use Utiliadades; //Aqui es donde usar los traits
}

class Persona{
    public $nombre;
    public $apellidos;
}

class Videojuego{
    public $nombre;
    public $year;
}

//UN metodo para compartir los tres, no van a heredar la misma clase padre

$coche = new Coche();
$videojuego = new Videojuego();
$persona  = new Persona();


//Y ahi es donde si puedes interactuar con el articulo en si
$coche-> nombre = "Camaro";
$coche ->mostarNonmbre();

//El trair es mas recomendado si todos tienes el mismo nombre en una propiedad, osa ahi es importanten
// Definir lo que deses
?>