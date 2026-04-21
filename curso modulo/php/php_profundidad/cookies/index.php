<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Que es una cookie?</h1>

    <p>

    
    Cookie es un fichero que se almacena en el ordenador del uusario que visita 
    la web con el fin de recordar datos o rastrear el comportamietno del mismo en la 
    web.
</br>
    <b>servidor </b>=> Tiene una referencia del usuario
    Crear cookies:
    setcookie("nombre","valor",duracion,sitio)
    Y las cookies se guardan en una variable super global la cual es $_COOKIE y aqui se accede 
    con el valor.
    <br>
    <b>Nota=> </b> Por lo general el que mas se emplea es el de duracion, para las cookies
    </p>
    <p>Para iniciar con tus cookies pulsa aqui: <a href="http://localhost:8081/index.php?mostrar=true">Inicar cookies</a></p>
    <?php if(isset($_GET["mostrar"]) && $_GET["mostrar"] == true):?>
    <?php 
        setcookie("username","haisen");
        setcookie("username_with_time","kurumi",time()+(60*60*24*365));
    ?>
    <h3>Tus cookies han sido creadas de manera satisfactoria</h3>
    <h3>Para eliminar tus cookies pulsa <a href="eliminarCookies.php">aqui</a></h3>
    <?php else: ?>
        <h3>No existen cookies disponibles</h3>
    <?php endif ?>
    <a href="revisarCookies.php">Verifica tus cookies</a>


    
</body>
</html>