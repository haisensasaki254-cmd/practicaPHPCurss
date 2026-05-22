<?php
//Posibilidad de herredar varios metodos y atributors
//Los constructores tambien se pueden heredar y si tienen valores hardcodeados estan tambien estaran;
class Persona{
    //clase de persona
    public $nombre;
    public $altura;
    public $edad;
    public $apellido;


    public function getNombre(){
        return $this->nombre;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function hablar(){
        return "Estoy hablando";
    }

    public  function caminar(){
        return "Estoy caminando"; 
    }

    
}


class Informatico extends Persona{

    public $lenguajes;
    public $experiencia;

    public function __construct()
    {

        $this->lenguajes = "Python, Php,Flutter, SQL";
        $this->experiencia = 10;
        throw new \Exception('Not implemented');
    }
    
    

    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }

    
    public function programar(){
        return "Soy programador";
    }

    public function reparar(){
        return "Reparar ordenadores";
    }

    public function hacerOfimatica(){
        return "Estoy hacienodo ofimatica";
    }

   
}

class TecnicoRedes extends Informatico{
    public $redAuditar;
    public $experienciaRedes;

    public function auditar(){
        return "Estoy auditando las redes";
    }

    //Aqui es necesario llamar al constructor padre

    public function __construct()
    {
        parent::__construct(); //Llama al metodo constructor  de la parte padre

    }


}


?>