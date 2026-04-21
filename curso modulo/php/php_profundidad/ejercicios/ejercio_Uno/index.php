<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio N.1</title>
</head>

<?php 
if(!empty($_GET)){
    session_start(); //REcuerda inciar las sesiones al principio de los programas
    
    if(!isset($_SESSION["sesion_activa"])){
        
        echo "SI pasa por donde no debe";
        $_SESSION["sesion_activa"] = 1;
    };
    echo 'Valor inicial:' . $_SESSION["sesion_activa"]. '<br>';

    if($_GET["counter"] == 'a' ){
        echo "SI entro";
        $_SESSION["sesion_activa"] += 1;
    }else{
        $_SESSION["sesion_activa"] -= 1;
    };
    echo 'Valor final:' . $_SESSION["sesion_activa"];
    
};
 ?>
<body>
    <div>
        <form method="GET" action="index.php">
        <select name="counter">
            <option value="a">
               <strong>+</strong> Aumentar 
            </option>
            
            <option value="d">
                <strong>-</strong> Disminuir
            </option>
        </select>
        <input type="submit" value="Enviar a Sesion">

    </form>

    </div>
    
    
    
</body>
</html>

<?php 
    
    

?>