<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio cinco</title>
</head>
<body>
    <h1>Entre numeros</h1>
    <h2>Reglas</h2>
    <ul>
        <li>Ingresa dos numeros, el primero menor que otro</li>
        <li>Usa num1 y num2 en el parametro get</li>
    </ul>
    <?php 
        if(isset($_GET["num1"]) && isset($_GET["num2"]) ){
            for($i = $_GET["num1"]; $i < $_GET["num2"]; $i++){
                if($i != $_GET["num1"]){
                    echo"$i";
                };
                
            };
        }else{
            echo "Ingrese por favor dos numeros";
        }
    
    ?>
</body>
</html>