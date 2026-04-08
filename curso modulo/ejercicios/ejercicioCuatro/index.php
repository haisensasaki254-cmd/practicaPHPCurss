<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora get</title>
</head>
<body>
    <?php 
        
        if(isset($_GET["num1"])&& isset($_GET["num2"])){
            $num1 =  $_GET["num1"];
            $num2 = $_GET["num2"];

            echo "Las operaciones son: <br/> ";
            echo "SUMA: " . $num1 + $num2 . "<br/>";

            echo "RESTA: ". $num1 - $num2 . "<br/>";

            echo "Multiplicacion: ". $num1 * $num2 . "<br/>"; 
            echo "Division : ". $num1 / $num2 . "<br/>";


        }else{
            echo "Atencion no se ingresado ningun numero";
        };
        
        
     ?>
</body>
</html>