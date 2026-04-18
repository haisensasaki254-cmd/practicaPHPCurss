<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de aceptacion</title>
</head>
<body>
   

    <div style="border: 3px; border-style: solid; margin: 12px;">
    
    <center>

    
    <div>
        <h1>
            Encuesta de entrada con PHP 
        </h1>
    </div>


    <?php   if(!empty($_GET["error"])):?>
        <h2 style="color: red;">
            Error: <?= $_GET["error"] ?>
        </h2>

    <?php   endif?>

    
    
    <form method="POST" action="validador.php">
        
        <label for="Nombre"></label>
        <input name="name" required="required" parent="[a-zA-Z ]+" placeholder="Nombre" type="text" autofocus="autofocus" maxlength="30" minlength="3"><br><br>
         <label for="Edad"></label>
        <input name="age" required="required" parent="[0-9]+" placeholder="Edad" type="number"><br><br>
         <label for="Email"></label>
        <input name="email" required="required"  placeholder="Email" type="email"><br><br>
        <label>Pais</label>
        <select  name="country" id="country"> 
            <option value="P-uno">Ecuador</option>
            <option value="P-dos">Colombia</option>
            <option value="P-tres">Peru</option>
        </select>


        <br><br>
            
        <input value="Enviar" type="submit" style="margin-bottom: 15px;">

    </form>
    </center>
    </div>

</body>
</html>