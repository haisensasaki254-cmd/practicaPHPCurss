
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones y cookies</title>
</head>
<body>
    <h1>Que es una sesion?</h1>
    <p>Almacencar y persistir datos del usuario mientras el navega en un sitio web, hasta que cierra la sesion o el sitio web</p>
    <p>Esto se guarda en el servidor web y se pierde cuando el usuario cierra el navegador</p>
    <form method="POST" action="site_sesion.php">
        <label>
            username
        </label>
        <input type="text" name="username" require>
        <label>
            password
        </label>
        <input type="password" name="password" require>
        <input type="submit" value="Crear usuario" >
    </form>
</body>
</html>