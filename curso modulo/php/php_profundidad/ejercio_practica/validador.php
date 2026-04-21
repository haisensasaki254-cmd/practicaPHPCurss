<?php

    if(!empty($_POST) && count($_POST) > 0){
    
    $value = validar_Formulario($_POST);
    
    if ($value){
        header("Location:http://localhost:8081/directory.php");
    }
    define("RUTA_INDEX","http://localhost:8081/index.php");

    }else{
        header("Location:http://localhost:8081/index.php?error=Intento de ingreso a validor.php no permitido");
    };
    

    function validar_Formulario($Formulario):bool{
        #$values = array_keys($Formulario);
        foreach($Formulario as $key => $value){
            if( empty($Formulario[$key])){
                $response = "Campo vacio en: $key";
                header('Location:'. 'http://localhost:8081/index.php' .'?error=' .$response);
                return false;

            }elseif(is_numeric( (int) $Formulario[$key]) !== 0){ 
                $age = is_numeric( (int) $Formulario[$key]) ;
                //$age = (int) $Formulario[$key];
                
                if ($age <= 0){
                    $response = "La edad debe ser mayor a cero";
                    header('Location:'. 'http://localhost:8081/index.php'.'?error=' .$age. 'resultado');
                    return false;
                }

            };
        };
        return true;
        
    };