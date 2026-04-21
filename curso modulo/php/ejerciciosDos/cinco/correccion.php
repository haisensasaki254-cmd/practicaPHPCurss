<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correcion ejercicio 5</title>
</head>
<body>
    <?php 
        $tabla = array(
            "ACCION" => array("GTA 5","Call of Duty","PUGB"),
            "AVENTURA"=> array("Assins Creed","Crash Bandicoot", "Prince of Persia"),
            "DEPORTES" => array("Fifa 19","PES 19","Moto G 19")

        );
        $titulos = array_keys($tabla);

    
    ?>

    <table border="1">
        <tr>
            <?php foreach($titulos as $titulo): ?>
                <th><?=   $titulo ?></th>

            <?php endforeach ?>
        </tr>
        <tr>
            <td>
                <?=  $tabla["ACCION"][0] ?>
            </td>
            <td><?=   $tabla["AVENTURA"][0] ?></td>
            <td><?=   $tabla["DEPORTES"][0] ?></td>
        </tr>
    </table>
</body>
</html>