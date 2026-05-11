<?php 
    require_once 'includes/redirection.php';

    
    if(isset($_POST) && !empty($_POST)){
        require_once 'includes/conexion.php';
        global $conexion;
        
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;

        $errores = array();

        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) && $nombre != false){
            $nombre_valido = true;
        }else{
            $nombre_valido = false;
            $_SESSION['error'] = "Formato no valido";
        }

        if(empty($_SESSION['error']) || !isset($_SESSION['error'])){
            $sql = "INSERT INTO categorias VALUES(NULL,'$nombre')";
            $ingreso_category = mysqli_query($conexion,$sql);
            if($ingreso_category){
                $_SESSION['registro'] = "Felicidades nueva categoria creada: $nombre";
            }else{
                $_SESSION['error']= "Error al ingresar la nueva categoria $nombre";
            }
        
        }

        header("Location:create-category.php");
    }


?>