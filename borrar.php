<?php
    include("database/database.php");
    
        $id = $_POST["id"];
        echo "Hola";
        $query = "DELETE FROM productos WHERE id='$id';";
        mysqli_query($conexion, $query);
        
        mysqli_close($conexion);
?>