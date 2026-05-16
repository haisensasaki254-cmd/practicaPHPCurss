<?php
require_once 'includes/cabecera.php';
include_once 'includes/helpers.php';

if( !isset($_POST["busqueda"])){
    var_dump($_POST);

    header("Location:index.php");
}
require_once "includes/lateral.php";



?>


  


    <!--caja principal -->

    

    <div id="principal">
        
        
       
        <?php 
         $busqueda = buscar_entradas($_POST['busqueda']);
        
        
        if(!empty($busqueda) && mysqli_num_rows($busqueda) >= 1):
        while($last_entry = mysqli_fetch_assoc($busqueda)):
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