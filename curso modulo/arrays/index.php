<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <a href="funciones.php">Funciones con array</a>
    <h1>Que es un array?</h1>
    <P>Es una coleccion o conjunto de datos bajo un unico nombre y para acceder a estos valores podemos usar un indice numerico o alfa numerico</P>
    <p>Existe para recorrer todo el conjunto con el foreach y el for.</p>
    <?php
        # Manera numero uno de declararion
        $peliculas = array('Batman','Superman','Death Note'); #El array se inicia con la funcion array
        echo "Este es el sistema en el cual estas corriendo" . PHP_OS;
        var_dump($peliculas); #Muestra el tipo de dato y el contenido del array
        echo $peliculas[0];

        $bandas = ["Linkin park","AC DC"];
        #unset($bandas); #Elimando la varible de $bandas
        #$var_dump($bandas);

        #Ejercicio 
        echo '<br/>';
        echo $peliculas[0];
        #Recorer un listado de arrays
        # Para poder visualizar la cantidad de un array se puede usar una funcion count
        echo '<h3>Mostrando una lista de peliculas</h3>';
        echo '<ul>';
        for ($i = 0; $i < count($peliculas); $i++) {
            echo '<li>'.$peliculas[$i] . '</li>' .'<br/>';
        };
        echo '</ul>';

        foreach($peliculas as $pelicula){
            echo $pelicula;
        };



    ?>
    <h2>Array asosiativos</h2>
    <p>
        Los array aosciativos en cambio se trata que en vez de usar una lista numerica tipo python esta vez es un diccionario pero se emplea
        en este caso <b>=></b> para poder asignar
        
    </p>
    <?php
        $estudiantes = array(
            'Josue' => 10,
            'Matias' => 20,
        );
        foreach ($estudiantes as $estudiante => $key) {
            echo $estudiante . ' nota: ' . $key . '</br>';
        };
    ?>
    <h3>Arrays multidimensionales</h3>
    <p>
        Tiene varios arrays con varios arrays dentro de si, pero la entrada es practicametnte la misma que en python con [][]
    </p>
    <?php 
        $animes  = [
            ['nombre'=>'Date a live',
            'año'=> '2013'],
            ['nombre'=>'One piece',
            'año'=> '1990'],
            ['nombre'=>'Naruto',
            'año'=> '1999'],
        ];
        foreach ($animes as $key => $anime){
            echo 'El anime en la lista es: ' . $anime['nombre']  . ' y se estreno en ' . $anime['año'] . '</br>'; # Mala practica aqui nunca se debe poner un caracter en español
        }
    ?>
</body>
</html>