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
    <?php elseif(isset($_SESSION['error']) && !empty($_SESSION['error'])): ?>
        <div class="bloque">
            <div class="alerta alerta-error">
                <?= $_SESSION['error'] ?>
            </div>
        </div>
    <?php endif?>
    
    <?php 
    default_sesion();
    ?>

    
    <h1>Crear categorias</h1>
    <p style="margin-bottom: 12px; margin-top:12px">Añade nuevas categorias para el blog de los usuarios</p>
    <form method="post" action="new_category.php">
        <label for="nombre"> <strong>Nombre</strong></label>
        <input type="text" name="nombre" required="required" autofocus="autofocus">
        <input type="submit" value="Crear categoria">
    </form>

</div>

<?php     require_once 'includes/pie.php'; ?>