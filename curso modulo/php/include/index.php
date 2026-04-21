<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>
<?php 
include 'includes/cabecera.php'
?>

        <div class="Contenido">
        <p>Permite incluir codigo de php en un archivo de php y permite usar las utilidades</p>
        <p>Como consiste esto : </p>
        <p>
            <p>INCLUDE => Se puede incluir cuantas veces se desea el elemento</p>
            <p>INCLUDE_once => Se puede incluir solo una vez</p>

        </p>
        <h2>Require</h2>
        <p>Si existe  un fallo o algo la pagina no se va a ejecutar y tampoco se ejecutara lo demas del sitio web</p>
        <ul>
            <li>require => Si algo esta mal el stio en si no se ejecuta</li>
            <li>require_once => Solo una vez se ejecuta y ademas si no funciona o tiene error no se ejecuta el codigo, este es el mas recomendado </li>
        </ul>
        </div>

    <?php 
        include 'includes/footer.php';
    ?>
</body>
</html>