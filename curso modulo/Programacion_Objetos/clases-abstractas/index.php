<?php
//Una clase es aquella que no puede ser usada normalmente pero si puede ser empleada para heredar
abstract class Ordenador{
    public $encendido; //Propiedades no pueden ser abstractas

    abstract public function encender(); // Metodos si pueden ser abstractos

    public function apagar(){
        $this->encendido = "";
    }
}


class PcAsus extends Ordenador{
    public function encender(){ //Aqui ya estamos heredando
        $this->encendido = true;

    }
    public $software;
    public function arrancarSoftware(){
        $this->software = true;
    }
}

$legion  = new PcAsus();
$legion->arrancarSoftware();
$legion->encender();
var_dump($legion) ;
?>