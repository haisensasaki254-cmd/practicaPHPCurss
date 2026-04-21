<?php 
// Para establecer una conexion a una base datos usamos lo siguiente
$conexion = mysqli_connect('localhost', 'user_curse', 'Renata10', 'curso');

echo "Para poder hacer que funcione el uso de php se necesita en el caso de linux modificar en el php ini y desmarcar la opcion de extension:mysql";

if(mysqli_connect_error()){
    echo "Error conectando a la base de datos " . mysqli_connect_error();
}else{
    echo "Conexion establecida de manera correcta";
};
// Codificacion de caracteres
// Consulta para la codificacion de caracteres 
mysqli_query($conexion,"Set names 'utf8'");

// Consulta de Select
$resultado = mysqli_query($conexion, "Select titulo, descripcion from notas");
// Pasar a un array 



while($nota = mysqli_fetch_assoc($resultado)){
    echo "<br>"."El titulo de la nota es: ". $nota['titulo'];
    echo "<br>"."Descripcion: " . $nota['descripcion'] . "<br>";
};



// Insertar datos en la base de datos, aqui esto se sensite key es decir sensible a mayusculas y minusculas

$insert = "INSERT INTO notas(TITULO, DESCRIPCION, COLOR) VALUES ('Nueva Nota','Esta es mi primera nota desde php','yellow')";
$sql = mysqli_query($conexion,$insert);
if($sql){
    echo 'Se inserto de manera correcta';
}else{
    echo 'NO se inserto de manera correcta';
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <p>Para crear un nuevo usuario en mariadb es de siguiente manera</p>
    <p>gran all privilegies on database_name. * to user_name@'localhots' identified by 'password';</p>
</body>
</html>
