<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de datos</title>
</head>
<body>
    
    <h1>Validar formularios en PHP</h1>
    <?php 
        if(!empty($_GET["error"])){
            echo '<strong style="color: red"; >Debes llenar de manera correcta cada uno de los valores ' .  $_GET['error']. '</strong>';
        }
    ?>
   
    <form action="
    procesar_formulario.php" method="POST">
    <label for="name">
        Nombre
    </label>
    <input type="text" required="required" autofocus="autofocus" name="name" pattern="[A-Za-z]+">
    <br>


    <label for="lastname">
        LastName
    </label>
    <input type="text" required="required" autofocus="autofocus" name="lastname" pattern="[A-Za-z]+">
    <br>


    <label for="age">
        Age
    </label>
    <input type="number" required="required" autofocus="autofocus" name="age" pattern="[0-9]+">
    <br>

    <label for="email">
        Email
    </label>
    <input type="email" required="required" autofocus="autofocus" name="email">
    <br>

    <label for="password">
        Password
    </label>
    <input type="password" required="required" autofocus="autofocus" name="password">
    <br>

    <input type="submit" value="Registrar">

</form>
</body>
</html>