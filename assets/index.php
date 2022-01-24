<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login y Register</title>
	<link rel="stylesheet" href="../assets/css/estilos.css">
</head>
<body>

	<main>
		<div class="contenedor__todo">
			
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>Ya tienes una cuenta?</h3>
					<p>Inicia sesion para entrar en la pagina</p>
					<button id="btn__iniciar-sesion">Iniciar Sesion</button>
				</div>
				<div class="caja__trasera-register">
						<h3>Aun no tienes una cuenta?</h3>
						<p>Registrate para poder iniciar sesion</p>
						<button id="btn__registrarse">Registrarse</button>
				</div>
			</div>
				<!--Formulario de login y register -->
				<div class="contenedor__login-register">
					<!--Login -->
					<form class="formulario__login" action="php/login_usuario_be.php" method="POST">						
						<h2>Iniciar sesion</h2>
						<input type="text" placeholder="Correo Electronico" name="correo" required>
						<input type="password" placeholder="Password" name="password" required>
						<button>Entrar</button>
					</form>
					<!--Registro -->
					<form class="formulario__register" action="php/registro_usuario_be.php" method="POST">
						
						<h2>Registrarse</h2>
						<input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
						<input type="text" placeholder="Correo Electronico" name="correo" required>
						<input type="text" placeholder="Usuario" name="usuario" required>
						<input type="password" placeholder="Password" name="password" required>
						<button>Registrarse</button>
					</form>
				</div>

		</div>	
	</main>
	<script src="../assets/js/script.js"></script>
</body>
</html>