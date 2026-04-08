

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

/**
 * Variables globales son aquellas qeu se declaran fuera de una funcion
 * Variable locales: Se definen dentro de una funcion, y solo estan disponibles dentro de la misma
 * 
 */
//Varible local
echo "<h1>
    Frase motivacional
</h1>";

$frase = "Ni los genio son tan genios, ni los mediocres tan mediocres";
#echo $frase;


function holaMundo(){
    global $frase; //Asi tenemos el acceso a la variable desde una funcion
    echo $frase;
    $year = 2026; // Esta ni lo intentes usar afuera, solo si retornas lo vas a poder ver
    #echo $year;
};

holaMundo();

echo "<h1>Funciones variables</h1>";
echo "Consiste en funciones las cuales, permiten que podemos ir poniendo como se desea operar";

?>

<h1>
    Elige tu operacion
</h1>

<?php 

    function OperacionSuma($num1,$num2){
        return $num1 + $num2;
    };
    function OperacionResta($num1,$num2){
        return $num1 - $num2;
    };
    function OperacionMultiplicacion($num1,$num2){
        return $num1 * $num2;
    };
    function OperacionDivision($num1,$num2){
        return $num1 / $num2;
    };


?>
<form method="POST" action="variables.php">

    <input name="num1" type="number">
        <select name="operacion">
        <option value="suma"> + </option>
        <option value="resta"> - </option>
        <option value="multiplicacion"> x </option>
        <option value="division"> % </option>
    </select>
    <input name="num2" type="number">
    <input type="submit" value="Resolver">


    
</form>

<?php 
    $operacion = "Operacion";
    
    if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operacion"])){
        echo "El resultado de tu operacion es: ";
        switch ($_POST["operacion"]){
            case "suma":
                $eleccion = $operacion ."Suma";
                echo $eleccion($_POST["num1"],$_POST["num2"]);


                break;
            case "resta":
                $eleccion = $operacion ."Resta";
                echo $eleccion($_POST["num1"],$_POST["num2"]);
                break;

            case "multiplicacion":
                $eleccion = $operacion ."Multiplicacion";
                echo $eleccion($_POST["num1"],$_POST["num2"]);
                break;

            case "division":
                $eleccion = $operacion ."Division";
                echo $eleccion($_POST["num1"],$_POST["num2"]);
                break;

        };
            

    }else{
        echo "Esperando valores";
    };
?>

    
</body>
</html>

