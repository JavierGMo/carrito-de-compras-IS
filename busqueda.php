<?php
    include("database/database.php");
    $search = $_POST["busqueda"];
    if(!empty($search)){
        $query = "SELECT * FROM datos WHERE nombre LIKE '$search%'";
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            die("Query error".mysqli_error($conexion));
        }
        $json = array();

        while($row = mysqli_fetch_array($resultado)){
            $json[] = array(
                'name'=> $row['nombre'],
                'correo'=>$row['correo'],
                'id'=>$row['id']
            );
        }
        $conexion->close();
        $jsoncodificado = json_encode($json);
        echo $jsoncodificado;

    }

?>