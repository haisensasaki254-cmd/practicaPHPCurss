<?php
require_once 'includes/cabecera.php';
$categoria = show_category($_GET['id']);
if(empty($categoria)||!isset($categoria)){
    header("Location:index.php");
}


?>


    <?php  require_once "includes/lateral.php" ?>


    <!--caja principal -->

    

    <div id="principal"> 
        
       
        <h1>Todas las entradas para la categoria: <?=  $categoria['nombre'] ?></h1>
        <?php 
        
            $entrys = show_last_entrys(categoria:$categoria['id']);
            if(!empty($entrys) && mysqli_num_rows($entrys) >= 1):
                while($last_entry = mysqli_fetch_assoc($entrys)):
        ?>
        <article class="entrada">

            <a href="detail_category.php?id=<?= $last_entry['id']; ?>">

            <h2>

                <?=   $last_entry["titulo"] ?>
            </h2>
            <span class="fecha">
                <?= $last_entry["categoria"] . ' | ' . $last_entry['fecha'] ?>
            </span>
            <p>

               <?= substr($last_entry["descripcion"],0,200 ) . '...';?>
            </p>
            </a>
                
       <?php endwhile;?>
       <?php else: ?>
        <h3 style="color:red">
            No existen entradas para esta categoria
        </h3>
               <?php endif;  ?>
           

    </div>

    
    <!-- Pie de pagina -->



 </div>

    <?php require_once "includes/pie.php"  ?>


<?php 


?>