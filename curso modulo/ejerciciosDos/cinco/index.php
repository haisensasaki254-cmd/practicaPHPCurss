<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio N.5</title>
</head>
<body>
    <?php

    include("aventura.php");
    include("deportes.php");
    include("accion.php");

    $union = array("Aventura" => $aventura, "Deporte" => $deportes, "Accion" => $accion);
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    foreach($union as $key => $videojuego){
        echo "<th>$key</th>";
        
        //Aqui se puede remplazar por la funcion arraykey
        
        

    }
    echo '</tr>';
    echo '</thead>';
    
    echo "<tbody>";

    for($i=0;$i<sizeof($union);$i++){
        echo "<tr>";
        foreach($union as $key => $videojuego){
            echo "<td>$videojuego[$i]</td>";
                
        }
        echo "</tr>";

           
    };
    echo "</tbody>";

        

    
    
   
    echo '</table>';
    
    
    ?>
   
</body>
</html>