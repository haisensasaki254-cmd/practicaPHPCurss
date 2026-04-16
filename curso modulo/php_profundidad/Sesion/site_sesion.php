<?php 
if(isset($_POST["username"])){
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['pasword'] = $_POST['password'];
    echo 'Tu solo veras esto si tu sesion esta abierta ' . '<a href="site_with_login.php">Site with login</a>';
}else{
    echo 'Atencion no tienes una sesion por lo tanto no te dejare pasar';
}