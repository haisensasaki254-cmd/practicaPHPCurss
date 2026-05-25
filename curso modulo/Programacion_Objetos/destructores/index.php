<?php 
    class Usuario{
        public $nombre;
        public $email;

        public function __construct(){
            $this->nombre = "Josue";
            $this->email = "andres@gmail.com";
            echo "Instanci a del objeto creado"; //NO hagas esto en este caso por que fue necesario
        }

        public function __destruct()  //AUtomaticamente al finalizar la ejecucion del programa se mata a la clase
        {
            echo "Ya me mori";
        }

        public function __toString() //Controlar al objeto si es un string como lo trataremos
        {
            return "Hola el usuario {$this->nombre} usa el email {$this->email}";
        }

    
    }


    $usuario = new Usuario();
    echo $usuario->email;
    
    
    
?>