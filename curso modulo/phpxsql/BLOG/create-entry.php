<?php 
    require_once 'includes/redirection.php';
    require_once 'includes/cabecera.php';
    require_once 'includes/lateral.php';
?>


<div id="principal">
    <?php if(isset($_SESSION['registro']) && !empty($_SESSION['registro'])):?>
        <div class="bloque">
            <div class="alerta alerta-exito">
                <?= $_SESSION['registro'] ?>
            </div>
        </div>
    <?php elseif(isset($_SESSION['error']) && !empty($_SESSION['error'])): 
        
        foreach($_SESSION['error'] as $error):?>

        
               
        
        <div class="bloque">
            <div class="alerta alerta-error">
                <?= $error ?>
            </div>
        </div>
    <?php  endforeach?>
    <?php endif ?>
    

    
    <h1>Crear nuevas entradas</h1>
    <!--Div para mostrar erroes de entrada o de ingreso correcto-->
    <!-- Vista normal-->
    <p style="margin-bottom: 12px; margin-top:12px">Añade nuevas entradas para que tu comunidad pueda leerlas</p>
    <form method="post" action="new_entry.php">
        <label for="title_entry"> <strong>Titulo de entrada:</strong></label>
        <input type="text" name="title_entry" required="required" autofocus="autofocus">
        <label>Descripcion: </label>
        <textarea name="descripcion" required="required" placeholder="Ingresa tu descripcion"></textarea>
        <label>Categoria</label>
        <select name="categoria">
            <?php $categorias = show_categorias(); 
                if(!empty($categorias)): ?>
                <?php while($categoria = mysqli_fetch_assoc($categorias)): ?>
                    <option value="<?= $categoria['id'] ?>">
                        <?= $categoria['nombre'] ?>
                </option>
                <?php endwhile ?>
            <?php endif?>
        </select>
        <input type="submit" value="Crear entrada">
    </form>
    <?php 
    default_sesion();
    ?>

</div>

<?php     require_once 'includes/pie.php'; ?>