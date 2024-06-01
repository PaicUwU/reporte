<?php 
include("menu2.php");
?><br><br><br>
<div class="container">
	<div>
		<center>
			<img src="img/logo.png" width="6%">
		<label>" "</label>
		<h1 style="color: hotpink;">Ashen Knight</h1>
		</center>
	</div>
</div><br><br>
<center>
	<div class="container">
		<form action="funciones/validar_usuario.php" method="post" id="formulario" class="container">
			<h1 style="color: white;">Inicia Sesion</h1>
			<label style="color: white;">Nombre de usuario:</label>
			<input type="text" name="username">
			<label style="color: white;">Contraseña:</label>
			<input type="password" name="contraseña">

			<input class="btn btn-outline-success" type="submit" title="Entrar">
			<a class="btn btn-outline-danger" href="registrarte.php" role="button" title="registrate">Registrate</a><br><br>
		</form>
</center>

