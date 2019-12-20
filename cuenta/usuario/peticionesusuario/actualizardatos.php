<?php
    include_once('../../../database/database.php');
    echo "hola";
    echo "<br>";
    var_dump($_POST);
    if(isset($_POST["nombreactualizar"]) && isset($_POST["apellidoactualizar"])){
        echo "<br>";
        echo "hecho";
    }else{
        echo "<br>";
        echo "no echo";
    }
    mysqli_close($conexion);
?>