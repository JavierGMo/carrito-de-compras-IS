<?php
    include("../database/database.php");
    if($_GET["id"]){
        $id = $_GET["id"];
        $resultado_json = array();
        $query = "SELECT * FROM producto WHERE ID=".$id;
        $pre_json = array();
        $json_chido = array();
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            die("<p>Error en la consulta<p>".mysqli_error($conexion));
        }else{
            while($pre_json = mysqli_fetch_assoc($resultado)){
                $json_chido = array(
                    "id"=>$pre_json["ID"],
                    "nombre"=>$pre_json["NOMBREPRODUCTO"],
                    "descripcion"=>$pre_json["DESCRIPCION"],
                     "precio"=>$pre_json["PRECIO"]
                    // "refimagenproducto"=>$pre_json["REFIMAGENPRODCUTO"],
                    // "proveedor_id"=>$pre_json["PROVEEDOR_ID"]
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
        $query = "UPDATE producto SET NOMBREPRODUCTO='$nombre', DESCRIPCION='$descripcion', PRECIO='$precio' WHERE ID='$id';";
        $resultado = mysqli_query($conexion, $query);
        //Arreglar la redireccion
        if($resultado){
            mysqli_close($conexion);
            header("Location: http://localhost/proyectoISoft/controlproductos.php");
        }
        // try {
            
        //     header("Location: http://localhost/proyectoISoft/");
        // } catch (Error $e) {
        //     die("<br><p> Registro no guardado, reintente ". mysqli_error($conexion)."</p>" );
        // }
        
        //mysqli_close($conexion);
    }
?>