<?php 

$archivo = $_FILES["archivo"];

$name = $archivo["name"];
$type = $archivo["type"];

if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif" ){
    if(!is_dir("uploads")){
        mkdir("uploads",0755);
    }
    
    // Con esta funcion movemos el archivo que tenemos

    move_uploaded_file($archivo['tmp_name'],"uploads/".$name);
    echo 
        "<h1> Archivo subido de manera correcta</h1>";
        header("Refresh:5;URL=index.php");
   

}else{
    header("Refresh:5; URL=index.php");
    echo "<h1>Tipo de archivo no permitido</h1>";
}

?>