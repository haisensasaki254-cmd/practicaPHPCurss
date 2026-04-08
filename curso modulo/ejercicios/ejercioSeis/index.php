<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Seis</title>
</head>
<body>
    <center>

    <table>
        <tr>
            <th>Multiplicador</th>
            <th>Multiplicando</th>
            <th>Resultado</th>

        </tr>
        <?php

        for($i=1;$i<=10;$i++){
            
            for($a=1;$a<=12;$a++){
                
                $resultado = $i*$a;
                echo "
                
        <tr>
            <td>$i</td>
            <td>$a</td>
            <td>$resultado</td>
            </tr>
                
                
                
            
                ";
            

            }

        };
    
    ?>
    </table>
    </center>
    

    
    
</body>
</html>