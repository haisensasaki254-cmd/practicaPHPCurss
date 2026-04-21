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
                                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                                <li>
                    <a href="index.php"> Categoria 3</a>
                </li>
                                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                 </li>
                                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                 </li>
                                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="contenedor">
        <!-- barra lateral -->
         <aside id="sidebar">
            <div id="login.php" class="bloque">
                <h3>Indentificate</h3>
                <form method="POST" action="login.php">
                <label for="email">Email</label>
                <input type="mail" required="required" name="email" >
                <label>Contraseña</label>
                <input type="password" required="required" name="password">
                <input type="submit" value="Enviar">
                </form>
            </div>
         </aside>

         <aside id="sidebar">
            <div id="register.php" class="bloque">
                <h3>Registrate</h3>
                <form method="POST" action="login.php">
                <label for="nombre">
                    Nombre
                </label>
                <input type="text" required ="required" name="name">
                <label>
                    Apellidos
                </label>
                <input type="text" require="required" name="lastname">
                <label for="email">Email</label>
                <input type="mail" required="required" name="email" >
                <label>Contraseña</label>
                <input type="password" required="required" name="password">
                <input type="submit" value="Registrar">
                </form>
            </div>
         </aside>

    <!--caja principal -->

    <div id="principal"> 
        <h1>Ultimas entradas</h1>
        <article class="entrada">
            <h2>
                Titulo de mi entrada
            </h2>
            <p>
                Descripcion de entrada
            </p>
        </article>
                <article class="entrada">
            <h2>
                Titulo de mi entrada
            </h2>
            <p>
                Descripcion de entrada
            </p>
        </article>
                <article class="entrada">
            <h2>
                Titulo de mi entrada
            </h2>
            <p>
                Descripcion de entrada
            </p>
        </article>
                <article class="entrada">
            <h2>
                Titulo de mi entrada
            </h2>
            <p>
                Descripcion de entrada
            </p>
        </article>


    </div>
    <!-- Pie de pagina -->
        <footer id="pie">
            <p>
                Desarrollado por Josue Castillo &copy; 2026 <!--Copy agrega el simbolo de copyright-->
            </p>
        </footer>
    </div>

    




    
</body>
</html>

<?php 


?>