<?php 
try{
    if(isset($_GET["name"])){
        echo $_GET["name"];
    }
    // Capturar excepciones en codigo supseptible a errores
    throw new Exception("Hay un error"); //SI lo invoco ya se vera, que existe un error
}catch(Exception $e){
    echo "Habido un error que es: $e ->getMessage()";

}finally{
echo "Todo correcto aunque no haya pasado anda";
}




?>