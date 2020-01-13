<?php
    include("../database/database.php");
    
        $id = $_POST["ID"];
        echo "Hola";
        $query = "DELETE FROM producto WHERE ID='$id';";
        mysqli_query($conexion, $query);
        
        mysqli_close($conexion);
?>