<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Predefinidas</title>
</head>
<body>
    <h1>Que son las funciones predefinidas? </h1>
    <p>Se trata de funciones que por defecto php tiene por defecto como: </p>
    <h2>Debug</h2>
    <ul>
        <li>
            var_dump => Permite conocer 
        </li>
        <li>
            isset => Verificar si ha llegado por post o get informacion
        </li>
    </ul>
    <h2>Fecha</h2>
    <ul>
        <li>date => Permite conocer la fecha como formato</li> 
        <li>time  => Permite conocer la hora de Unix  </li>
    </ul>
    <h2>Matematica</h2>
    <ul>
        <li>sqrt => Permite emplear conocer la raiz cuadrada de cualquier </li> 
        <li>rand => Permite obtener numeros random </li>
        <li>pi => Permite obtener el numero pi en la pantalla </li>
        <li>round => Permite obtener numeros aleatorios </li>
    </ul>

    <h2>Variables</h2>
    <ul>
        <li>gettype => Obtener el tipo de una variable</li>
        <li>is_int => Permite conocer si que tipo de variable</li>
        <?php 
            $frase = "       mi contenido    ";
            $frase = trim($frase); // Elimina los espacion por delante y por detras 
            
            // Eliminar variables / inidces 
            $year = 2025;
            echo 'Ahora es el anio: ' . $year . "<br/>";
            unset($year); // Eliminar variables del codigo 

            // Comprobar variables vacias
            $text = "";
            if(empty($text)){
                echo "La vairable de texto esta vacia" . "<br/>";
            }else{
                echo "Ña variables tiene contenido" . "<br/>";
            };
            unset($text);
                    
            // str len => Contar caracteres de una cadena o string
            $text = "Cadena";
            echo "El tamanio de la cadena es igual a: " . strlen($text) . "<br/>";
            
            // str pos =Z Permite encontrar un contenido dentro de un string
            $texto = "La vida es bella" . "<br/>";
            echo "La frase original es igual a: ". $texto; 
            echo strpos($texto,"vida") . "<br/>";
            

            // str replace => Remplazar una palabra con otra 
            echo str_replace("vida","moto",$texto) . "<br/>";

            // MAYUSCULAS Y MINUSCILAS
            echo strtoupper($frase) . "<br/>";
            echo strtolower($frase) .  "<br/>";
            
            
        ?>
    </ul>


</body>
</html>