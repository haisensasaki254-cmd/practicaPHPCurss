<html>
    <head>
        <title>
            Variables super globales
        </title>
    </head>
    <body>
        <div>
            <h1>Variables super globales</h1>
            <p>
               Esto para ejecucion de comandos remotos me viene de perlas jsjs, con esto puedo: 
               
            </p>
            <ul>
                <li>
                    Para ejecucion remota obtener datos de la terminal
                </li>
                <li>
                    Para conocer cosas del usuario con una inyeccion de codigo
                </li>
            </ul>
<!--Variables que existen desde php y pueden ser empleadas-->
            <?php
            

            
            
            echo 'Esta es una constante ya defina PHP_OS es importante no confundir con una super variable la cual esta accesible desde cualquier sitio del codigo ejemplo la de aqui abajo <br/>';
            
            echo  PHP_OS; // Estas son constantes que tiene el sistmea es importante eviatar confundirse con las super-variables

            echo '<h2>Esta es una de servidor</h2>';
            echo 'Aqui es con la variable  $_SERVER[] aqui este recibe un string' . '<br/>';

            $servidor_addres =  $_SERVER["SERVER_PORT"];
            echo "La dirrecion del servidor es igual a : $servidor_addres" . '<br/>';

            echo $_SERVER['DOCUMENT_ROOT'] . '<br/>';

            echo $_SERVER['SERVER_NAME'] . '<br/>';

            echo $_SERVER['HTTP_USER_AGENT'] . '<br/>';

            echo $_SERVER['HTTP_HOST'] . '<br/>';

            echo 'Ahora mira tambien puedes sacar mas cosas como la dirrecio ip de un visitante, esto es con $_PHP[]' . '<br/>';
            echo $_SERVER['REMOTE_ADDR'];
            ?>

        <h2>
            Explicacion de don chat gpt
        </h2>

            <div style="background:#0f172a;color:#e2e8f0;padding:15px;border-radius:8px;font-family:monospace;">
<h3>Variables útiles de $_SERVER para análisis de seguridad</h3>

<ul>
<li><b>$_SERVER['REMOTE_ADDR']</b> → IP del cliente que hace la petición.</li>

<li><b>$_SERVER['HTTP_USER_AGENT']</b> → Información del navegador o herramienta que hace la petición (curl, burp, etc).</li>

<li><b>$_SERVER['HTTP_REFERER']</b> → Página desde la que viene la solicitud.</li>

<li><b>$_SERVER['REQUEST_METHOD']</b> → Método HTTP utilizado (GET, POST, PUT, DELETE).</li>

<li><b>$_SERVER['REQUEST_URI']</b> → URI solicitada por el usuario (útil para detectar payloads).</li>

<li><b>$_SERVER['QUERY_STRING']</b> → Parámetros enviados en la URL.</li>

<li><b>$_SERVER['SERVER_NAME']</b> → Nombre del host del servidor.</li>

<li><b>$_SERVER['HTTP_HOST']</b> → Host enviado por el cliente (puede ser manipulado).</li>

<li><b>$_SERVER['SCRIPT_FILENAME']</b> → Ruta absoluta del script ejecutado.</li>

<li><b>$_SERVER['DOCUMENT_ROOT']</b> → Directorio raíz del servidor web.</li>

<li><b>$_SERVER['REQUEST_TIME']</b> → Timestamp cuando empezó la petición.</li>

</ul>

</div>
            
        
        
    </body>
</html>