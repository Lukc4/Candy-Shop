<?php 


session_start();

if(!isset($_SESSION['usuario'])){
	echo '
		<script>
			alert("Debes iniciar sesion");
			window.location = "index.php";
		</script>

	';
	session_destroy();
	die();
}

	session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido</title>
</head>
<body>
	<h1>Bienvenido usuario!!!</h1>
	<a href="assets/php/cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>