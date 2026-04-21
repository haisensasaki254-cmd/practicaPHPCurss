<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Numero uno</title>
</head>
<body>
<!--Ejercicio numero uno: 
    
-->

<h1>Busqueda de elementos :) </h1>
<p>Holiss, mira este ejercicio voy a mostrarte el siguiente array: </p>
<?php 
    $numeros = [1,4,42,234,5,2,53,623];
    echo 'Primero te amuestro como esta compuesto mi array: ' . '</br>';
    echo '<ul>';
    foreach($numeros as $key => $number){
        echo '<li> El numero en la posicion ' . $key + 1 . ' es igual a: ' . $number .'</li>';
    }
    echo '</ul>';

    echo '<p>Ahora voy a mostarlo en la pantalla pero de manera ordenada </p>';
    sort($numeros); //Este de por si no se debe poner en una variable directo, ya que devuelve true
    //Leccion tenemos que existen funciones que devuelven true y lo mejor es no ponerlas directo en una variable
    
    echo '<ol>';
    foreach($numeros as $key => $number){
        echo '<li> El numero en la posicion ' . $key + 1 . ' es igual a: ' . $number .'</li>';
    }
    echo '</ol>';

    echo "<p>La longitud del arraay es de " . sizeof($numeros) . "</p>";
    
?>  
<h2>Ahora viene la parte divertida</h2>
<p>Tienes que poner para buscar tu numero: </p>
<form method="POST" action="index.php">
    <label>Numero a buscar</label>
    <input  type="number" name="number">
    <input type="submit" value="Buscar" >
</form>  
<?php 
    if (isset($_POST['number'])){
        $busqueda = array_search($_POST['number'],$numeros);
        if($busqueda == false){
            echo "<p><b>No se encontro el numero: " . $_POST['number'] . "</b></p>";
            unset($_POST['number']);
        }else{
            echo "El numero ". $_POST['number']  . " que buscas esta en la posicion: " . $busqueda;
            unset($_POST['number']);
        };
        
    }else{
        echo "Esperando tu numero";
    }
?>
</body>
</html>