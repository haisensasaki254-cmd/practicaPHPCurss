<?php

// Una clase estatica no es necesario que sea instanciada para est en cada valor debe poer
class Configuracion{
    public static $color;
    public static $newsletter;
    public static $entorno;
    
    
    //Aqui en los get y set no se usa el valor de $his sino se usa el valor de self

    public static function getColor(){
        return self::$color;

    }
    public static function setColor($color){
        self::$color = $color;
    }
    
    public static function getNewsletter(){
        return self::$newsletter;
    }

    public  static function setNewsletter($newsletter){
        self::$newsletter = $newsletter;
    }

    public static function getEntorno(){
        return self::$entorno;
    }
    public static function setEntorno($entorno){
        self::$entorno = $entorno;
    }

}

?>