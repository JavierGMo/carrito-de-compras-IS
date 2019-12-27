<?php
    session_start();
    include("/proyectoISoft/database/database.php");
    $producto;
    
    $resultado_json = array();
    if(isset($_GET["caja-buscar"])){
        $resultado;
        $producto = $_GET["caja-buscar"];
        $query = "SELECT nombre, precio, descripcion FROM productos WHERE nombre like '$producto':";
        try {
            $resultado = mysqli_query($conexion, $query);
            if(!$resultado){
                die("".mysqli_error($conexion));
            }else{
                while($pre_json = mysqli_fetch_array($resultado)){
                    $resultado_json[] = array(
                        "nombre"=>$pre_json["nombre"],
                        "precio"=>$pre_json["precio"],
                        "descripcion"=>$pre_json["descripcion"]
                    );
                }
                mysqli_free_result($resultado);
            }
        } catch (Exception $e) {
        }
        mysqli_close($conexion);
    }
    $resultado_json = json_encode($resultado_json);
    //Traer esta data con javascript usan ajax 
    echo $resultado_json;
?>