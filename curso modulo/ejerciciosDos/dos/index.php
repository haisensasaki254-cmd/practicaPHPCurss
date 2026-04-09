<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio N.2</title>
</head>
<body>
    <?php 
        $objetos = ['pera','durazno','sandia',1,5,31,34];
        $number = 1;
        while( count($objetos) < 120){
            $objetos[]= $number++;
        };
        foreach($objetos as $key => $object){
            echo  $key + 1 .' ' . $object .'</br>';

        };
        echo 'La cantiad es es igual a: '. count($objetos);

        
    ?>
</body>
</html>