<?php
//require_once "helpers.php";
?>
<!-- Mensaje de bienveninda -->
<!-- barra lateral -->
<aside id="sidebar-login">
<div id="login.php" class="bloque">
<?php if((isset($_SESSION['user_login'])) && (!empty($_SESSION['user_login']))): ?>
<div  class="bloque">
<?= " Bienvenido <strong>" . $_SESSION['user_login']['nombre'] .' ' .$_SESSION['user_login']['apellido'] . ' </strong>'; ?>
<a href="#" class="boton boton-naranja" >Editar mis datos</a>
<a href="#" class="boton" >Crear categoria</a>
<a href="#" class="boton boton-verde" >Crear entradas</a>
<a href="cerrar.php" class="boton boton-rojo" >Cerrar sesion</a>
</div>
<?php endif;?>
<h3>Indentificate</h3>
<?php if(isset($_SESSION['user_login_error']) && !empty($_SESSION['user_login_error'])): ?>
<div class="alerta alerta-error">
<?= $_SESSION['user_login_error'] ?>
</div>        
<?php endif; ?>
<form method="POST" action="login.php">
<label for="email">Email</label>
<input type="email" required="required" name="email">
<label>Contraseña</label>
<input type="password" required="required" name="password">
<input type="submit" value="Enviar">
</form>
</div>
</aside>
<aside id="sidebar-register">
<div id="register.php" class="bloque">
<?php if(isset($_SESSION["registro"])): ?>
<div class="alerta alerta-exito">
<?php echo $_SESSION["registro"]; ?>
</div>
<?php endif; ?>
<h3>Registrate</h3>
<form method="POST" action="formulario.php">
<label for="nombre">
                Nombre
</label>
<input type="text" required="required" name="name">
<?php
echo !empty($_SESSION["error"]) && isset($_SESSION["error"]) ? show_errors($_SESSION["error"], "name") : "";
?>
<label>
                Apellidos
</label>
<input type="text" required="required" name="lastname">
<?php
echo !empty($_SESSION["error"]) && isset($_SESSION["error"]) ? show_errors($_SESSION["error"], "lastname") : "";
?>
<label for="email">Email</label>
<input type="email" required="required" name="email">
<?php
echo !empty($_SESSION["error"]) && isset($_SESSION["error"]) ? show_errors($_SESSION["error"], "email") : "";
?>
<label>Contraseña</label>
<input type="password" required="required" name="password">
<?php
echo !empty($_SESSION["error"]) && isset($_SESSION["error"]) ? show_errors($_SESSION["error"], "password") : "";
?>
<input type="submit" value="Registrar">
<?php
//Para destruir los sesion
default_sesion();
?>
</form>
</div>
</aside>