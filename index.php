<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/estiloLog.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<form id="formulario" method="post" action="./registro/registro.php">
			<input type="submit" id="registro" value="REGISTRARSE" class="registrarse">
		</form>
	<section>
		<center>
			<form id="formulario" method="post" action="verificarCliente.php">
				<label id="titulo">MAKEMI Shop</label><br><br><br>
				<label for="usuario">Nombre de usuario: </label><br>
				<input type="text" id="usuario" name="Usuario" placeholder="Digite su nombre de usuario..." ><br><br><br>
				<label for="password">Contraseña: </label><br>
				<input type="password" id="password" name="Password" placeholder="Digite su contraseña..." ><br><br><br><br>
				<input type="submit" id="aceptar" value="ACEPTAR" class="aceptar">
				<?php 
					if(isset($_GET['error'])){
						echo '<br><br><span id="error">¡LOS DATOS INGRESADOS SON INCORRECTOS!</span>';
						
					}
				?>
			</form>
		</center>
	</section>
</body>

</html>