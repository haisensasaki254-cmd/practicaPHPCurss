<?php 
    require_once 'includes/redirection.php';

    
    if(isset($_POST) && !empty($_POST)){
        require_once 'includes/conexion.php';
        global $conexion;
        
        $nombre = isset($_POST['title_entry']) ? mysqli_real_escape_string($conexion, $_POST['title_entry']) : false;
        $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
        $categoria = isset($_POST['categoria']) && is_numeric($_POST['categoria']) ? (int)$_POST['categoria'] : false;
        $usuario = $_SESSION['user_login']['id'];
        // Validacion de errores
        $errores = array();

        if(empty($nombre) && $nombre == false){

            $errores['titulo'] = "El titulo no es valido";
        }

        if(empty($descripcion) && $descripcion == false){
            $errores['descripcion'] = "La descripcion no es valida";
        }

        if(empty($categoria) && $categoria == false){
            $errores['categoria'] = "La categoria no es valida";
        }

        
        if(count($errores) == 0){
            $sql="INSERT INTO entradas VALUES(NULL,$usuario,$categoria,'$nombre','$descripcion',CURDATE())";
            $guardar = mysqli_query($conexion, $sql);

            if(!$guardar){
                $_SESSION['error'] = 'Error al guardar en la base de datos';
            }else{
                $_SESSION['registro'] = 'Se ha registrado de manera correcta la entrada';
            }
        }else{
            $_SESSION['error'] = $errores;
        }





        header("Location:create-entry.php");
    }


?>