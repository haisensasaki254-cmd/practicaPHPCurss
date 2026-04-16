<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formulario</h1>
    <div>
        Se trata de maneras de enviar al servidor informacion, en este caso con los formularios
        aqui un ejemplo de como se ven las propiedades:
        <p>type="text" maxlength="30" minlength="3" required="required" autofocus="autofocus" parent="[A-Z a-z]+" name="nombre"</p>
    </div>
    <center>

    <div  style="border: 1px; border-color: blue; border-style: solid;">
        <form method="POST" action="index.php" enctype="multipart/form-data">

    <label for="nombre">
        Nombre:
    </label>
    
    <input  type="text" maxlength="30" minlength="3" required="required" autofocus="autofocus" parent="[A-Z a-z]+" name="nombre" />
    <br>
    <label for="lastname" >Apellido:</label> 
    <input type="text" parent="[A-Z a-z]" name="lastname" required="required", disabled = "disabled"> <!-- Para el caso  de required y disabled se puede apreciar que es de mas peso el disabled-->
    <br>
    <label for="password">
        Password
    </label>
    <input type="password" name="password" required="required"><br>
    <label>Sexo</label><br>
    <label for="Masculino">Masculino</label>
    <input type="checkbox" name="Masculino" value="M" checked >
    <label for="Femenino">Femenino</label>
    <input type="checkbox" name="Femenino" value="F">
    <br>
    <label for="number">Numero Favorito</label>
    <input type="number">
    <br>
    <label>
        Lugar de residencia
    </label>
    <br>
    America del sur: <input type="radio" value="AS" name="ASUR">
    America del norte<input type="radio" value="AN" name="ANORTE">
    <br>
    <label for="archivos">Cedula</label>
    <input name="archivos" type="file" multiple="multiple">
    <br>

    <input type="submit" value="Crear usuario">
    <textarea></textarea>
    <select></select>
    

    </form>

    </div>


    </center>

    
    


    
    
    
</body>
</html>
