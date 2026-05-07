<?php
require_once 'includes/cabecera.php';

?>


    <?php  require_once "includes/lateral.php" ?>


    <!--caja principal -->

    

    <div id="principal"> 
        <h1>Ultimas entradas</h1>
        <?php 
        
            $entrys = show_last_entrys();
            if(!empty($entrys)):
                while($last_entry = mysqli_fetch_assoc($entrys)):
        ?>
        <article class="entrada">

            <a href="">

            <h2>

                <?=   $last_entry["titulo"] ?>
            </h2>
            <p>

               <?= substr($last_entry["descripcion"],0,200 ) . '...';?>
            </p>
            </a>
                
       <?php endwhile;?>
       <?php else: ?>
        <h3 style="color:red">
            No existen entradas;
        </h3>
               <?php endif;  ?>
           
    <div id="ver-todas">
        <a href="#">Ver todas las entradas </a>
    </div>

    </div>

    
    <!-- Pie de pagina -->



 </div>

    <?php require_once "includes/pie.php"  ?>


<?php 


?>