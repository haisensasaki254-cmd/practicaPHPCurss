<!DOCTYPE html>
<html>

<head>

    <title>Operadores</title>
</head>
<body>
    <div>
        <h1>Aritmeticos

        </h1>
        <?php 
            $suma  = 2 + 3;
            $num1 = 10;
            $num2 = 3;
            echo '<p> Suma: '. $suma . '</p>';  
            echo 'Resta: ' . ($num1 - $num2) . '<br/>';
            echo ' Multiplicacion' . ($num1 * $num2) . '<br/>';
            echo 'Division' . ($num1 / $num2) . '<br/>';
            echo 'Modulo de la division' . ($num1 % $num2) . '<br/>'
         ?>
    </div>

    <div>
        <h1>Operadores de incremento y decremento</h1>
        <?php 
        $year = 2026;
        echo 'EL año es igual a:  ' . $year;
        echo '<br/>';
        echo 'EL siguiente es igual a: ' .  ++$year;
        echo '<br/>';
        echo 'El anterior es igual a: ' . ++$year;
        ?>

    </div>

    <div>

        <h2>Operadores de asignacion</h2>
        <?php 
            /**
             * Aqui es como se pueden asignar en php los valores
             */

            echo "Aqui es como los += o el -= ". '<br/>';
            $num3 = 5;
            echo 'Numero original: ' . $num3 . '<br/>';
            echo 'Operador de suma =+ ' . $num3+=3 . '<br/>';
            echo 'Operador de resta -=' . $num3 -=5 . '<br/>'; 
        ?>
        
    </div>
</body>
</html>