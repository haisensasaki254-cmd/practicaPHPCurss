<?php
    
    

    if(isset($_POST)){
        include './includes/conexion.php';

        // Variable de errores
        $error = array();
        
        // Validacion que nada esta vacio dentro
        $name = !empty($_POST["name"]) && isset($_POST["name"]) ?   mysqli_real_escape_string($conexion,trim($_POST["name"]) ) : false;
        $lastname =  !empty($_POST["lastname"]) && isset($_POST["lastname"]) ?  mysqli_real_escape_string($conexion,$_POST["lastname"] )  : false;
        $email = !empty($_POST["email"]) && isset($_POST["email"]) ? mysqli_real_escape_string($conexion,$_POST["email"] )  : false;
        $pasword = !empty($_POST["password"]) && isset($_POST["password"]) ?  mysqli_real_escape_string($conexion,$_POST["password"] ) : false;

        // Validar cada campo 

        if($name && !is_numeric($name) && !preg_match("/[0-9]/",$name)){
            $validate_name=true;
           

        }else{
            $error["name"] = "El nombre no a sido no valido";
            $validate_name= false;

        };

        if(($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/",$lastname)){
            $validate_lastname = true;
            
            
        }else{
            $error["lastname"] = "Error en el apellido";
            $validate_lastname = false;
        };
        
        if($email && filter_var($email,FILTER_VALIDATE_EMAIL)){
            $validite_email = true; 
        }else{
            $error["email"]="Un error en el emial";

        }

        $guardar_usuario = false;
        
        if(count($error) == 0){
            $guardar_usuario = true;
            

            // cifrar la contraseña
            $passwordSecurity = password_hash($pasword, PASSWORD_BCRYPT, ['cost' => 4]);
            $query = "INSERT INTO usuarios VALUES (NULL, '$name', '$lastname', '$email', '$passwordSecurity', CURDATE())";

            $guardarDB = mysqli_query($conexion, $query);
            
            
            
            if($guardarDB){
                $_SESSION["registro"] = "EL registro se ha completado con exito";
                echo $_SESSION["registro"];
            
            }else{
                $_SESSION["error"]["general"] = "EL formulario tiene un error" ;
            }
        
            


        }else{
            $_SESSION["error"] = $error;
            
            
           
            
        }

        

        
    }
    header("Location:index.php");

?>

