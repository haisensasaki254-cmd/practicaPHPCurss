<?php 
    require_once "./includes/redirection.php";
    require_once "./includes/conexion.php";
    require_once "./includes/helpers.php";
    $categoria_unit = get_entry($_GET["id_entrada"]);
    if(!isset($categoria_unit['id'])){
        header("Location: index.php");
    }
    require_once "./includes/cabecera.php";
    require_once "./includes/lateral.php";

    



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
    
    

    
    <h1>Modificar entradas </h1>
    <!--Div para mostrar erroes de entrada o de ingreso correcto-->
    <!-- Vista normal-->
    <p style="margin-bottom: 12px; margin-top:12px">Modifica tus entradas</p>
    <form method="post" action="new_entry.php?editar=<?=$categoria_unit['id']?>">
        <label for="title_entry"> <strong>Titulo de entrada:</strong></label>
        <input type="text" name="title_entry" required="required" autofocus="autofocus" value="<?= $categoria_unit['titulo'] ?>">
        <label>Descripcion: </label>
        <textarea name="descripcion" required="required" placeholder="Ingresa tu descripcion" ><?= $categoria_unit['descripcion'] ?></textarea>
        <label>Categoria</label>
        <select name="categoria">
            <?php $categorias = show_categorias(); 
                if(!empty($categorias)): ?>
                <?php while($categoria = mysqli_fetch_assoc($categorias)): ?>
                <!-- Observa como esta puesto aqui usa los valores de  las ternaarias-->
                    <option value="<?= $categoria['id'] ?>" <?= $categoria['id'] == $categoria_unit['categoria_id'] ? 'selected="selected"': '' ?> >

                        <?= $categoria['nombre'] ?>
                </option>
                <?php endwhile ?>
            <?php endif?>
        </select>
        <input type="submit" value="Editar entrada">
    </form>
    <?php 
    default_sesion();
    ?>

</div>

<?php     require_once 'includes/pie.php'; ?>