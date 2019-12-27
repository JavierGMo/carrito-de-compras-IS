<?php
    include("../database/database.php");
    //include("/proyectoISoft/database/database.php");
    $resultado_json = array();
    $query = "SELECT * FROM productos";
    $resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die("<p>Error en la consulta<p>".mysqli_error($conexion));
    }else{
        while($pre_json_data = mysqli_fetch_array($resultado)){
            $resultado_json[] = array(
                'id'=>$pre_json_data['id'],
                'nombre'=>$pre_json_data['nombre'],
                'precio' =>$pre_json_data['precio'],
                'descripcion'=>$pre_json_data['descripcion']
            );
        }
        mysqli_free_result($resultado);
        //Arreglar con un ciclo el fetch xd
    }
    mysqli_close($conexion);

    $resultado_json = json_encode($resultado_json);
    echo $resultado_json;
?>