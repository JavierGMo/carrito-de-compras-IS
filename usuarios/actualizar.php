<?php
    include("../database/database.php");
    if($_GET["id"]){
        $id = $_GET["id"];
        $resultado_json = array();
        $query = "SELECT * FROM productos WHERE id=".$id;
        $pre_json = array();
        $json_chido = array();
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            die("<p>Error en la consulta<p>".mysqli_error($conexion));
        }else{
            while($pre_json = mysqli_fetch_assoc($resultado)){
                $json_chido = array(
                    "id"=>$pre_json["id"],
                    "nombre"=>$pre_json["nombre"],
                    "precio"=>$pre_json["precio"],
                    "descripcion"=>$pre_json["descripcion"]
                );
            }
            mysqli_close($conexion);
            $json_chido = json_encode($json_chido);
            echo $json_chido;
        }
    }
    if(isset($_POST["id"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $query = "UPDATE productos SET nombre='$nombre', precio='$precio', descripcion='$descripcion' WHERE id='$id';";
        $resultado = mysqli_query($conexion, $query);
        mysqli_close($conexion);
        if($resultado){
            header("Location: http://localhost/proyectoISoft/");
        }
        // try {
            
        //     header("Location: http://localhost/proyectoISoft/");
        // } catch (Error $e) {
        //     die("<br><p> Registro no guardado, reintente ". mysqli_error($conexion)."</p>" );
        // }
        
        mysqli_close($conexion);
    }
?>