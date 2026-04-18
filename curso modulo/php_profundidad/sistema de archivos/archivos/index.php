<?php
    //Su uso es bastante parecido al de linux 
$abrir_archivo = fopen("texto.php","r+"); // Abrir archivo
// No de esta manera
#echo $abrir_archivo;
//Usamos la funcion de fgets para mostrar el contenido de los archivso
//$contenido = fgets($abrir_archivo);
// https://www.php.net/manual/es/function.fopen.php => Cuales son los permisos que tiene un archivos
//Importante no confundir con fgets con fgetc que el
//fgets => Devuelve las lineas
//fgetc => Devueve los caracteres uno a uno 

fwrite($abrir_archivo,"Esto es un nuevo dato");

while (!feof($abrir_archivo)) { //Esta funcion me permitira  mostra todo el contenido de un archivo 
    $contenido = fgets($abrir_archivo);
    echo "$contenido"."<br>";
}

//echo feof($abrir_archivo);

echo $contenido;
fclose($abrir_archivo); // Cerrar el contenido del archivo

// Copiar un archivo a otro para esto usamos la funcion copy
//copy("texto.php","new_texto.php")  or die("Error al copiar"); //die tambien puede ser empleado para cuando existen errores ??

//Renombrar un fichero 
//rename("texto.txt", "texto.dart") or die("Error al renombrar un fichero"); //Pero aqui en cambio el problema es que si uso die se muere

//Eleminar un fichero
//unlink("new_texto.php");

if (file_exists("new_texto.php")){
    echo "<p>EL archivo existe</p> <br>";
}else{
    echo "<p>El fichero no existe</p><br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamiento de ficheros</title>
</head>
<body>
    <h1>Como hacer el tratamiento de ficheros</h1>
    <p>Para el tratamiento de los ficheros las funciones mas comunes son: </p>
    <ul>
        <li>
            fopen
        </li>
        <li>
            fclose
        </li>
        <li>
            fgets => Obtener las lineas de un archivo
        </li>
        <li>
            feof => Este permite iterar con un bucle while sobre un archivo
        </li>
        <li>
            fwrite => Para escribir dentro de un archivo <strong>fwrite</strong> => Escribe datos en un fichero. Devuelve el número de bytes escritos o false en caso de error.
            <p>Requisitos y consejos: usar fopen con un modo que permita escritura ('w','w+','a','a+','r+','x'), comprobar el valor devuelto por fwrite, tener en cuenta que fwrite escribe desde la posición actual del puntero (usar fseek para moverla), y usar flock para evitar condiciones de carrera. 'w' trunca el archivo, 'a' añade al final.</p>
            <pre><code>&lt;?php
            $fp = fopen("texto.php", "a") or die("No se puede abrir el archivo");
            if (flock($fp, LOCK_EX)) { // bloqueo exclusivo
                $bytes = fwrite($fp, "Esto es una línea nueva\n");
                fflush($fp); // forzar escritura al disco
                flock($fp, LOCK_UN); // liberar bloqueo
            } else {
                $bytes = false;
            }
            fclose($fp);


            if ($bytes === false) {
                echo "Error al escribir";
            } else {
                echo "Escritos $bytes bytes";
            }
            ?&gt;</code></pre>
        </li>
        </ul>
        <h2>
            Manipulacion de archivos
        </h2>
        <p>
            Aqui se emplea distintas funciones que no son exclusivas para archivos pero funcionan
        </p>
        <ul>
            <li>
                rename => Renombrar el archivo
            </li>
            <li>
                unlink => Eliminar un archivo 
            </li>
            <li>
                copy => Copiar un archivo
            </li>
        </ul>
        <p>
            <strong>NOta: </strong>  COn un die se muere todo tener cuidado

        </p>
        
    
</body>
</html>
