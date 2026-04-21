<?php 
$error = "faltan_datos";
if(!empty($_POST["name"]) && !empty($_POST["lastname"]) && !empty($_POST["age"]) && !empty($_POST["password"]) && !empty($_POST["email"]) ){
    $error = "ok";
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $age = (int)$_POST["age"]; //Pero que pasa si lo lo casteo si 
    $email = $_POST["email"];
    
    //Validacion de errores
    if(!is_string($name) 
        || preg_match("/[0-9]+/",$name)){
        $error = "nombre";

    }


        //Validacion de errores
    if(!is_string($lastname) || !preg_match("/[0-9]+/",$lastname)){
        $error = "Apellido";
    }

    if(!is_int($age) || filter_var($age,FILTER_VALIDATE_INT)){ // Con esta variable global y el filter var le pasamos
        $error = "edad";
    }
    
    if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = "emial";
    }

    if(strlen($password) <= 5){
        $error = "Contrasenia debe ser mayor a 5 caracteres";

    }

    //die(); //Para parar la ejecucion de un programa

}else{
    header("Location:index.php?error=$error");
}

if($error != "ok"){
    header("Location:index.php?error=$error");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de formularios</title>
</head>
<body>
    <?php  if($error == "ok"): ?>
        <h1>Datos valorados </h1>
        <p><?= $name ?></p> <!-- Para poder hacer una regex tenemos que emplear -->
        <p><?= $lastname ?></p>
        <p><?= $email ?></p>
        <p><?= $age ?></p>
    <?php endif ?>
    
</body>
</html>