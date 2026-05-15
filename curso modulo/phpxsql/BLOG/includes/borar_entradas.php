<?php 

require_once 'conexion.php';
session_start();
if(isset($_SESSION['user_login']) && isset($_GET['id_entrada'])){
    global $conexion;
    $entrada_id = $_GET["id_entrada"];
    $user_id = $_SESSION['user_login']['id'];
    $sql = "DELETE FROM entradas WHERE usuario_id  = $user_id and  id = $entrada_id";
    $db = mysqli_query($conexion, $sql);

   

}
header("Location:../index.php");

?>