

<?php 

    
    function show_errors( array $error, string $value){
        $alerta = '';
        if(isset($error[$value]) && !empty($value)){
            $alerta = '<div class = "Errores"> <p  style="color: red;" >'.    $error[$value] . '</p></div>';
        }
       return  $alerta;
    }

    function default_sesion(){
        $borrado = false;
        if(isset($_SESSION["error"])){
            $_SESSION["error"] = null;
            unset($_SESSION["error"]);
            
        

        };
        
        if(isset($_SESSION["registro"]) && !empty($_SESSION["registro"])){
            $_SESSION["registro"] = null;
            unset($_SESSION["registro"]);
            
        }

        
        return $borrado;
        
        
    }

    function show_categorias(){
        global $conexion;
        //$sql="SELECT nombre FROM categorias ORDER BY id ASC"; # SOlo con el nombre
        $sql="SELECT * FROM categorias ORDER BY id ASC";
        $consulta=mysqli_query($conexion, $sql);
        $result = [];

        if($consulta && mysqli_num_rows($consulta) >= 1){
            return $result = $consulta;
        }
        
    }

    function show_last_entrys(){
        global $conexion;
        $sql = "SELECT e.*, c.nombre as categoria FROM entradas e inner join categorias c where e.categoria_id = c.id order by e.id desc limit 4";
        $result = mysqli_query($conexion, $sql);
        $entrys = [];
        if($result && mysqli_num_rows($result)>=1){
            $entrys = $result;
        }
        return $entrys;        
        
    }
?>