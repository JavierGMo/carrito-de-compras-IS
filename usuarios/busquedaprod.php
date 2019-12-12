<?php
    include("../database/database.php");
    
    if(isset($_GET["busqueda"])){
        $search = $_GET["busqueda"];
        $query = "SELECT * FROM productos WHERE nombre LIKE '$search%'";
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            die("Query error".mysqli_error($conexion));
        }else{
            $json = array();

            while($row = mysqli_fetch_assoc($resultado)){
                $json[] = array(
                    'id'=>$row['id'],
                    'nombre'=> $row['nombre'],
                    'precio'=>$row['precio'],
                    'descripcion'=>$row['descripcion'],
                );
            }
            $conexion->close();
            $json = json_encode($json);
            echo $json;
        }
    }else{
        $json_error_db = array(
            "res"=>"no encontrado",
            "ok"=>"false"
        );
        $json_error_db = json_encode($json_error_db);
        echo $json_error_db;
    }

?>