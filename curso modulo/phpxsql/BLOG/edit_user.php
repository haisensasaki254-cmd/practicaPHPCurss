<?php 
    require_once 'includes/redirection.php';
    require_once 'includes/cabecera.php';
    require_once 'includes/pie.php';
    require_once 'includes/lateral.php';
    
?>


<div class="bloque">
<h2>Modifica a tu usuario</h2>
<p style="padding-bottom: 15px; padding-top: 15px;">Si deseas modificar a tu usuario este es el lugar correcto no te preocupes</p>
<div >
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
</div>
<form method="POST" action="edit_user_logic.php">
    <label for="nombre">
        <strong>Nombre</strong>
    </label>
    <input type="text" value="<?= $_SESSION['user_login']['nombre']?>" name="nombre" required="required" autofocus="autofocus" placeholder="Nombre">
    <label for="apellido">
        <strong>Apellido</strong>
    </label>
    <input type="text" value="<?= $_SESSION['user_login']['apellido']?>" name="apellido" required="required" autofocus="autofocus" placeholder="Apellido"> 
    <label for="email">
        <strong>Correo electronico</strong>
    </label>
    <input type="email" value="<?= $_SESSION['user_login']['email']?>" name="email" required="required" autofocus="autofocus" placeholder="Correo electronico">
    <input type="submit" value="Editar usuario">

</form>
<?php 
    default_sesion();
    ?>

</div>
