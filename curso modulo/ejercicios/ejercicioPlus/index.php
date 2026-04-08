<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercioc Plus</title>
</head>
<body>
    <?php 
        function calcularImpuestos($precio, $tasa, $negrita = false){
            return  $precio + $precio * ($tasa * 0.01);

        }


    ?>

    <center>
        <h1>Calcula tus impuestos</h1>
        <form method = "POST" action="index.php">
            <label>
                Precio
            </label>
            <input name="precio" type="number">
            <label>
                Impuesto
            </label>
            <input name="impuesto" type="number">
            <input type="submit" value="Verificar">

        </form>
        <?php 
            if(isset($_POST['precio'])&& isset($_POST['impuesto'])){
                
                echo "El valor a pagar es: " . calcularImpuestos($_POST['precio'],$_POST['impuesto']);
            }else{
                echo "<h2>Esperando valor </h2>";
            }
        ?>
        
    </center>
    
    
    
</body>
</html>