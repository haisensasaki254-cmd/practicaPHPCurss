<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio tres</title>
</head>
<body>
    <?php 
    $variable = "";
    if(empty($variable)){
        $variable = "Relleno";
        $variable = strtolower($variable);
        echo '<b>' . strtoupper($variable) . '</b>' ;
        

    }else{
        echo '<p>La variable no esta vacia</p>';
    }
    ?>
    
</body>
</html>