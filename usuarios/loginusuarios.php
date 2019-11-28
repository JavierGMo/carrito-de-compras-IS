<?php 
    require "../database/database.php";
	session_start();
	$usuarios = $mysqli->query("SELECT correo, password
		from datos
		WHERE correo = '" .$_POST['emailLogin'] ."' 
		AND password = '" .$_POST['passworsLogin']. "' ");
	if ($usuarios->num_rows == 1){
		$datos = $usuarios->fetch_assoc();
		$_SESSION['usuario'] = $datos;  
		echo json_encode(array('error' => false, 'tipo' => $datos['Tipo_usuario']));
	}
	else{
		echo json_encode(array('error' => true));
	}
	
	$mysqli -> close();

?>
<?php
/*
    //Conectamos a la base de datos
    include("../database/database.php");

    if(isset($_POST["nombre-registro"]) && isset($_POST["apellido-registro"])){
        $correo = $_POST["email-log"];
        $pass = $_POST["pass-log"];
        //Hacer la accion para para login

        
        try {
            mysqli_query($conexion, $query);
        } catch (Error $e) {
            die("<br><p> Registro no guardado, reintente ". mysqli_error($conexion)."</p>" );
        }   
    }
    mysqli_close($conexion);*/
    /*
	echo'
		<script>
			location.href="index.php";
		</script>
	'
    */
?>