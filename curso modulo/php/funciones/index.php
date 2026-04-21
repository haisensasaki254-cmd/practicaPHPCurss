<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1>Funciones en php</h1>
    <p>
        Como se declara una funcion
    </p>
    <?php
    function suma($num1 , $num2){
        echo 'El valor de la suma entre '.  $num1 . ' ' .$num2 . ' ' . ' y '. ''. 'es igual a: ' . $num1 + $num2;
    }
    suma(1,2);
    ?>
    <h2>Uso de parametros opcionales</h2>
    <?php 
        //Para poder tener un parametro opcional, solo le asignamos con el = el valor por defecto
        // Otra cosa una funcion por buenas practicas no debe hacer un print, devolver algun valor
        function nombre(){

        };
    
    ?>

    <p>Para ejecutar una funcion dentro de otra</p>
    <br/>
    <?php 
        function getApellido($apellido){
            $texto = "El apellido es: $apellido";
            return $texto;
        };

        function getNombre($nombre){
            $texto = "El nombre es: $nombre";
            return $texto;
        };

        function getNombreApellido($nombre, $apellido){
            return  getNombre($nombre) . '<br/>' . getApellido($apellido);

        };
        echo getNombreApellido("Josue","Castillo");
    ?>
</body>
</html>