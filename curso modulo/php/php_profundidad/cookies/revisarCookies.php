<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar cookies</title>
</head>
<body>
    <h1>Ver cookies</h1>
    <?php if(isset($_COOKIE["username"])): ?>
        <ul>
         <p>Esta es la lista de tus cookies </p>
       
        <?php  $valores = array_keys($_COOKIE);
            foreach($valores as $key => $cookieTitle){
                echo '<li>'.$cookieTitle .' => '. $_COOKIE[$cookieTitle] .'</li><br>';
            }
        ?> 
         </ul>
    <?php else: ?>
        <p>No existen cookies de ningun tipo</p>
    <?php endif; ?>
    <p>Regresar a la pagina principal del <?php   if(isset($_COOKIE["username"])): ?> <a href="index.php?mostrar=true">index</a><?php else: ?><a href="index.php">index</a><?php endif ?> </p>
    
</body>
</html>