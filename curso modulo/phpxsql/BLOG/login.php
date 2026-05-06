<?php 



if(isset($_POST)){

    


    require_once 'includes/conexion.php';
    $_SESSION['user_login_error'] = 'Sorry, password or email, incorrect :(';
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    

    
    #COnexion a la base de datos
    $sql = "SELECT * FROM usuarios WHERE EMAIL = '$email' LIMIT 1";
    $consulta  = mysqli_query($conexion,$sql);

    if ($consulta && mysqli_num_rows($consulta) == 1){
        $user = mysqli_fetch_assoc($consulta);
        //$password_hash = password_hash($password, PASSWORD_BCRYPT,["cost"=>4]);
        $validate_password = password_verify($password, $user["password"]);

        if($validate_password){
            $_SESSION['user_login'] = $user;
            //var_dump($_SESSION['user_login']);
            if(isset($_SESSION['user_login_error'])){
                unset($_SESSION['user_login_error']);
            };
            
        }else{
            $_SESSION['user_login_error'] = "User or password incorrect :C";
        };
    

        
    }else{
        $_SESSION['user_login_error'] = "User or password incorrect :(";
    };
    
    
};
header('Location:index.php');

?>