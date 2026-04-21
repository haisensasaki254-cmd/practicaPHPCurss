<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="POST" action="index.php" enctype="multipart/form-data" id="formulario">
        <label for="num1">
        Primer numero
        </label>
        <br><br>
        <input type="number" required="required" autofocus="autofocus" name="num1"><br><br>
        <input type="button" value="+" name="sumar">
        <input type="button" value="-" name="restar">
        <input type="button" value="X" name="multiplicar">
        <input type="button" value="%" name="dividir">
        <br><br>
        <label for="num2">
            Segundo Numero
        </label><br><br>
        <input type="number" required="required" autofocus="autofocus" name="num2"><br><br>
        <input type="submit" value="Respuesta">
    </form>

    <?php 
     echo $_POST["num1"];
        if(isset($_POST["num1"]) && isset($_POST["num2"])){
            echo "is here";
            var_dump($_POST);
            if(isset($_POST["sumar"])){
                echo $num1 + $num2;
            }

        };
    
    ?>
</body>
</html>