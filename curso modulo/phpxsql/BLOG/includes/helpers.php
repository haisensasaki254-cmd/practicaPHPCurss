

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

        function show_category(int $id){
        global $conexion;
        //$sql="SELECT nombre FROM categorias ORDER BY id ASC"; # SOlo con el nombre
        $sql="SELECT * FROM categorias where id=$id";
        $consulta=mysqli_query($conexion, $sql);
        $result = [];

        if($consulta && mysqli_num_rows($consulta) >= 1){
            $result = mysqli_fetch_assoc($consulta);
        }
        //var_dump($result);
        //die();
        return $result;
        
    }

    function show_last_entrys(int $limit = null, int $categoria = null){
        global $conexion;
            $sql = "SELECT e.*, c.nombre as categoria FROM entradas e inner join categorias c ON e.categoria_id = c.id ";
        

        if(is_numeric($categoria)){
            $sql .= "WHERE e.categoria_id = $categoria ";
        }
    

        

        $sql .= " order by e.id desc "; //Un order by siempre va al final de una consulta
        if($limit != null){
            
            $sql .= "LIMIT $limit";
        }

        
        
        $result = mysqli_query($conexion, $sql);
        $entrys = [];
        if($result && mysqli_num_rows($result)>=1){
            $entrys = $result;
        }
        return $entrys;        
        
    }

    function get_entry(int $entrada_id){
        global $conexion;
        $sql = "SELECT e.*, c.nombre FROM entradas e INNER JOIN  categorias c ON e.categoria_id WHERE e.id = $entrada_id";
        $solicitud = mysqli_query($conexion,$sql);
        $resultado = [];
        if($solicitud && mysqli_num_rows($solicitud)>=1){
            $resultado = mysqli_fetch_assoc($solicitud);
        }
        return $resultado;
    }
?>