<?php 

function autoload($clases){
    $clases  = str_replace("\\","/",$clases);
    require_once "clases/" . strtolower($clases) . '.php';

}

spl_autoload_register("autoload");


?>