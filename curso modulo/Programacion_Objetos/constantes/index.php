<?php 
class Usuario{
    public $email;
    public $password;
    const URL_COMPLETA = "http://localhost";


    public function getEmail(){
        return $this->email;
        
    }

    public function setEmail(string $email){
        $this->email = $email;
    }
}

$persona = new Usuario();
echo usuario::URL_COMPLETA; //Para traer el valor de la constante
var_dump($persona);


?>

