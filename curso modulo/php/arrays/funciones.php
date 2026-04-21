<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones con array</title>
</head>
<body>
    <a href="index.php">Inicio</a>

    <?php 
    $cantantes = ['2pac', 'Drake', 'Jennifer lopez', 'Alfreddo'];
    echo "Ordenar elementos: </br>";
    #Para poner en orden alfabetico de manera normal
    sort($cantantes);
    var_dump($cantantes);
    #Para orden en orden descendiente 
    arsort($cantantes);
    var_dump($cantantes);

    #Agregar un elemento
    $cantantes[] = 'Daddy Yankee';
    array_push($cantantes);
    var_dump($cantantes);

    #Eliminar elementos
    #Para un solo elemento eliminar
    array_pop($cantantes);
    var_dump($cantantes);

    #Aleatorio 
    echo '</br>' . 'El cantante aleatorio es igual a:  ' .$cantantes[array_rand($cantantes)]; 
    
    #Dar la vuelta de manera reversa 
    $numeros = array(1,2,4,5,2,87,423,234,52);
    array_reverse($numeros);
    var_dump($cantantes);

    #Busqueda de array search
    echo array_search('2pac',$cantantes);
    ?>

    
    
</body>
</html>