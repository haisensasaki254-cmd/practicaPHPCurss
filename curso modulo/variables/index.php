<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla Master en php</title>

    </head>
    <body>
        <h1>Master en PHP - Josue Castillo</h1>
        <?php 
        //Comentarios en php, por lo general no suelen verse por el usuario
        /**
         * AHora ya esta con otro mas comentario multi linea
         * 
         */
            echo "<h3> Listado de videojuegos:</h3>";
            echo "<ul>". "<li>GTA</li>"."<li>Fifa</li>" . "<li>Django</li>"."<ul>";
        ?>
        <?
            $variable=12;
            echo "esto es una variable $variable"
        ?>
    </body>

<!--
Debug    
-->



<?php 

// Debug con la variable var_dump de manera nativa
$nombre = "Josue Castillo";
var_dump($nombre);

$lista = [];
$lista[] = "nommbre";
$lista[] = 1;

var_dump($lista)

?>
<div >


</div>
<!--Mostar simbolos que son empelados-->
<?php 
echo 'Hola son un $nombre'; #Es mas rapido la comilla simple,por que no tiene que mostrar una variable
echo "Hola soy un \n $nombre"; # Aqui es mas lento dado que espera que se muestre
/***
 * Recuerda que no se puede mostrar /n /t en la pantalla 
 */

?>



    
</html>
