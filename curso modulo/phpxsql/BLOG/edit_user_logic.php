<?php 
    require_once 'includes/redirection.php';
    

    
    if(isset($_POST) && !empty($_POST)){

        
        require_once 'includes/conexion.php';
        global $conexion;
        
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;
        $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($conexion, $_POST['apellido']) : false;
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, $_POST['email']) : false;
        $usuario_id = $_SESSION['user_login']['id'];
        $errores = array();

        if(empty($nombre) || is_numeric($nombre) || preg_match("/[0-9]/", $nombre) || $nombre == false){
        
            $errores['nombre']= "No se ingreso el nombre de manera correcta error !!";
        };

        if(empty($apellido) || is_numeric($apellido) || preg_match("/[0-9]/", $apellido) || $apellido == false){
            $errores['apellido']= "No se ingreso el apellido de manera correcta error !!";
        }

        if(empty($email)|| !filter_var($email ,FILTER_VALIDATE_EMAIL) ){
            $errores['$email']= "No se ingreso un email correcto ";
        }

        $_SESSION['error'] = $errores;   
        var_dump($errores);     
        
        if(empty($errores)){

            //Comprobar si el email ya existe en la base de datos
            $sql = "SELECT id, email from usuarios where email = '$email'";
            $verficiar =mysqli_query($conexion,$sql);
            $isset_user = mysqli_fetch_assoc($verficiar);
            if($isset_user == $usuario_id || empty($isset_user)){

            
            $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido' , email='$email' WHERE id = $usuario_id";
            


            $guarda_usuario = mysqli_query($conexion,$sql);

        
            if($guarda_usuario){
                $_SESSION['user_login']['nombre'] = "$nombre";
                $_SESSION['user_login']['apellido'] = "$apellido";
                $_SESSION['user_login']['email'] = "$email";
                $_SESSION['registro'] = "Se modifica de manera satisfactoria al usuario";
            }else{
                $_SESSION['error'] = "Usuario no registrado, erro database";
            }

            }else{
                $_SESSION['error'] = "Correo no valido";
            }
        }

        header("Location:edit_user.php");
    }


?>