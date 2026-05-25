<?php 
namespace paneladministrador;
class Usuario{
    
    protected $nombre;
    protected $rol;
    protected $accesoNivel;
    
    public function __construct(  $nombre,  $rol, int $accesoNivel){
        $this->nombre = $nombre;
        $this->rol = $rol;
        $this->accesoNivel  = $accesoNivel;
    }
    

}



?>