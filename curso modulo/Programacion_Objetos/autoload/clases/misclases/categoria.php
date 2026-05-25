<?php 

namespace misclases;
class  Categoria{
    public $nombre;
    public $descripcion;

    public function __construct($nombre,$descripcion){
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
    }

}

?>