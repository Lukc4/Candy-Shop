<?php 

	include 'conexion_be.php';

	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$password_encriptada = sha1($password);

	$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'
	and password = '$password_encriptada'");

	if (mysqli_num_rows($validar_login) > 0) {
		header("Location: http://localhost/proyectos/candy-shop/assets/bienvenida.php");
		exit;
	}else{
		echo '
			<script>
				alert("Usuario no existe, por favor verificar los datos introducidos");
				window.location = "../index.php";
			</script>
		';
		exit;
	}

?>