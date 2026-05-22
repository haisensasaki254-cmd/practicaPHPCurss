<?php 
//Un contrato en que definimos que metodos y el orden en que 

//LOS METODOS ya existen
interface Ordenador{
    public function encender();
    public function apagar();
    public function desfragmentar();
    
}

class iMac implements Ordenador {
    private $modelo;

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo ($modelo){
        $this->modelo = $modelo;
    }

    //Es obligatorio poner lo del extence para visualizar

    public function desfragmentar(){}
    public function apagar(){}
    public function encender(){}

}

$maquintos = new iMac();
var_dump($maquintos);
$maquintos->setModelo("Mackbookpro2019");
echo $maquintos->getModelo();
?>