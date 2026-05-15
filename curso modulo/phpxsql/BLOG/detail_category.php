<?php 
    require_once "./includes/conexion.php";
    require_once "./includes/helpers.php";
    $categoria_unit = get_entry($_GET["id"]);
    require_once "./includes/cabecera.php";
    require_once "./includes/lateral.php";

    

?>

 <div id="principal"> 
        
               
        <h1> <?=  $categoria_unit['titulo'] ?></h1>
        <p><strong> Autor: </strong> <?=  $categoria_unit['usuario']  ?></p>
        <a href="category_show.php?id=<?= $categoria_unit["categoria_id"] ?>">
        <h2>categoria: <?=  $categoria_unit['categoria'] ?></h2>
        </a>
        <h4>
            Fecha: <?= $categoria_unit['fecha']; ?>
        </h4>
        <p>

            <?= $categoria_unit["descripcion"]; ?>
        </p>
           
        <?php if(isset($_SESSION["user_login"]) && $_SESSION["user_login"]["id"] == $categoria_unit['usuario_id'] ):  ?>
            <br>
            <a href="edit_entry.php?id_entrada=<?= $categoria_unit['id'] ?>" class="boton boton-verde">Editar entrada</a>
            <br>
            <a href="./includes/borar_entradas.php?id_entrada=<?= $categoria_unit['id'] ?>" class="boton">Eliminar entrada</a>
        <?php endif ?>

    </div>

<?php 
    require_once "./includes/pie.php";
?>