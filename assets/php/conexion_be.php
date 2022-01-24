<?php 

	$conexion = mysqli_connect("localhost","root", "", "login-register-db");
	

	if(!$conexion){
		echo "Conexion fallida" . mysqli_connect_error();
	}

?>