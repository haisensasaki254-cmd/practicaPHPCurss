<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <?php 
        session_destroy();
        
    ?>
    <p>Ahora la sesion esta muerta por favor prueba con los otros sitios y lo veras</p>
    <a href="index.php">Sitio oficial</a>
    <a href="site_sesion.php">Sitio restringido</a>
</body>
</html>