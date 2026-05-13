<?php 
    require_once "./includes/conexion.php";
    require_once "./includes/helpers.php";
    $categoria_unit = get_entry($_GET["id"]);
    require_once "./includes/cabecera.php";
    require_once "./includes/lateral.php";

    

?>

 <div id="principal"> 
        
               
        <h1> <?=  $categoria_unit['titulo'] ?></h1>
        <a href="category_show.php?id=<?= $categoria_unit["categoria_id"] ?>">
        <h2>categoria: <?=  $categoria_unit['nombre'] ?></h2>
        </a>
        <h4>
            Fecha: <?= $categoria_unit['fecha']; ?>
        </h4>
        <p>
            <?= $categoria_unit["descripcion"]; ?>
        </p>
           

    </div>

<?php 
    require_once "./includes/pie.php";
?>