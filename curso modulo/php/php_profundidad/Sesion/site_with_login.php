<?php 

session_start();
if (isset($_SESSION["username"])){
    echo 'Bienvenido a tu sitio: '  .$_SESSION["username"] .'</br>';
    echo 'Si deseas cerrar sesion pulsa <a href="logout.php">Aqui</a>';
}else{
    echo 'Atencion para este sitio tienes que tener sesion';
};