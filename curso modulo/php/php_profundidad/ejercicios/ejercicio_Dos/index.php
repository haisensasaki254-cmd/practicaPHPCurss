<?php



function validite($email){
    $emailResponse = filter_var($email,FILTER_VALIDATE_EMAIL);
    if($emailResponse){
        echo "Es una variable valida";
    }else{
        echo "El correo esta mal escrito";
    }
    echo "<br>";
    if((isset($_GET["Variable"]) && !empty($_GET["Variable"]))){
        echo "Si existe variable por get";
    }else{
        echo "No existe la variable o esta vacia";
    };
};

validite("josuecastillo254@gmail.com");

?>