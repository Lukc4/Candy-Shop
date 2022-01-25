<?php 

	include 'conexion_be.php';


	$nombre_completo = $_POST['nombre_completo'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	//password encriptada
	
	$password = sha1($password);

	//$password = password_hash($password, PASSWORD_BCRYPT); 
	//hash('sha512', $password);

	$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password)
			  VALUES('$nombre_completo', '$correo', '$usuario', '$password')";


	//Verificar que el correo no se repita en la base de datos

	$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

	if(mysqli_num_rows($verificar_correo) > 0){
		echo '
			<script>
				alert("Este correo ya esta registrado, intenta con otro diferente");
				window.location = "../../index.php";
			</script>
		';
		exit();
	};


	//Verificar que el usuario no se repita en la base de datos

	$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

	if(mysqli_num_rows($verificar_usuario) > 0){
		echo '
			<script>
				alert("Este nombre de usuario ya esta registrado, intenta con otro diferente");
				window.location = "../../index.php";
			</script>
		';
		exit();
	};


	$ejecutar = mysqli_query($conexion, $query);

	if($ejecutar){
		echo '
		<script>
			alert("Usuario registrado exitosamente");
			window.location = "../../index.php"
		</script>
		';
	}else{
		echo '
		<script>
			alert("Ups! Algo salio mal, intentalo de nuevo.");
			window.location = "../../index.php"
		</script>
		';
	}

	mysqli_close($conexion);



//redireccionar

	function Redireccionar($url){
        $Page = '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL='.$url.'">';
       echo $Page;
    }


?>

