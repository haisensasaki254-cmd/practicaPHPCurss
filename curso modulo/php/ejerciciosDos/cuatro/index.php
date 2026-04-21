<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio N.4</title>
</head>
<body>
    <h1>Imprime el tipo :D</h1>
    <?php
    
    $raza = 'bulldog';
    $datos = array("nombre" => "Cesar", "edad" => 15);
    $hermanos = 1;
    $isOld = true;


function detectarVariable($var){
    
    
    switch ($var){

        case is_string($var):
            $resp = "Es una variable de tipo string";
            break;
        case is_bool($var):
            $resp = "Es una variable de tipo bool";
            break;
        case is_numeric($var):
            $resp =  "Es una variable de tipo numeric";
            break;
        case is_array($var):
            $resp =  "Es una variable de tipo array";
            break;
        
    } 
    return $resp;
}

    echo detectarVariable($raza) . '</br>';
    echo detectarVariable($datos) . '</br>';
    echo detectarVariable($hermanos) . '</br>';
    echo detectarVariable($isOld) . '</br>';

    ?>
</body>
</html>