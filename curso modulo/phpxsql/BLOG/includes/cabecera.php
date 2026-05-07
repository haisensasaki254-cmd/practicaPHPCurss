<?php 
    require_once "conexion.php";
    require_once "helpers.php"

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videogames page</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"> 
    
    
</head>
<body>
    <!-- cabecera -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php"> <!--Solo debe haber un h1, es mas recomendable a nivel de header de entradas solo un html-->
                
                    Blog de videojuegos
                
            </a>

        </div>

        <!-- menu -->
       

        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php 
                    $categoriasResultado  =  show_categorias();
                    if(!empty($categoriasResultado)):
                        while($categoria = mysqli_fetch_assoc($categoriasResultado)):
                ?>
                <li>
                    <a href="categoria.php?id=<?= $categoria['id'] ;?>"><?= $categoria['nombre'];?></a>
                </li>

                

                <?php endwhile; ?>
                <?php else: ?>
                    <li>
                    <a href="agregar_categoria.php">Agrega tus categorias</a>
                </li>
                    
                <?php endif; ?>                 
                                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                 </li>
                                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>

 <div id="contenedor">