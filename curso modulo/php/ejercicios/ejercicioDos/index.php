<!--Sacar todo los numero pares del 1 al 100-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio N.2</title>
</head>
<body>
    <?php 

    echo "Imprimiendo todos los numero pares del uno al cien<br/>";
    for($i = 1; $i <= 100; $i++){
        if($i % 2 == 0 && $i != 1){
            echo "$i<br/>";
        }
    };
     ?>

    
</body>
</html>