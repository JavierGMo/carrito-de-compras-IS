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