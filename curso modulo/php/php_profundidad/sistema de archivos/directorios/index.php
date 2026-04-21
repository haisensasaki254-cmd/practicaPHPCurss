<?php

if(!is_dir("CarpetaNueva")){
    mkdir("CarpetaNueva",0755);
}else{
    echo "<strong>Ya existe la carpeta</strong><br>El contenido es igual a: <br>";
}
    

//rmdir("CarpetaNueva");

try{
    if($gestor = opendir("./CarpetaNueva")){
    while(false!== $archivo = readdir($gestor)){
        if(!empty($archivo) && $archivo !==  '.' && $archivo !== ".."){
            echo $archivo . '<br>';
            $file  = fopen($archivo,"+r");
            echo "El contendo del archivo es igual a";
            echo feof($file);
            while(!feof($file)){
                
                $line = fgets($file);
            
                echo $line . '<br>';
            };
        };
        
    };}
}catch (Exception  $e){
    
    echo "<strong>Error: </strong> $e";
};

