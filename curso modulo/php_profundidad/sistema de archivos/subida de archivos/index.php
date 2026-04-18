<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
</head>
<body>
    <h1>
        Subir archivos en PHP
    </h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" required="required">
        <input value="Enviar  archvios" type="submit">
    </form>


    <hr>
    <h2>Como modificar las configuraciones de php en linux</h2>
    <p>
        Para poder hacer esto:
        <ul>
            <li>
                etc/php.ini => Modificamos el archivo con permisos de sudo, como post_max max_filesize
            </li>
        </ul>
    </p>

    <?php if(is_dir("uploads")): ?>
        <h1>Lista de imagenes</h1>
        <?php $directorio = opendir("./uploads"); ?>
        <?php if($directorio): ?>
        <?php while(($image = readdir($directorio))!= false){
            if ($image != '.' && $image !='..'){
                echo "<img src='uploads/$image' width='200px'/><br>";
            }
        }
                    
           
            
            
        ?>
        <?php endif ?>    
    <?php endif ?>
</body>
</html>