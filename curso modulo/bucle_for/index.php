<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $resultado = 0;
    for($i= 0; $i>100; $i++){
        $resultado += $i;
        
    };
    echo "Sumar todos los numeros hasta el 100 es igual a: $resultado";
    
    ?>
</body>
</html>