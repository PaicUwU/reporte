<?php 
session_start();

if (!isset($_SESSION['pk_usuario'])) {
	header("location: inicio_secion.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ashen Knight</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css?a=22">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/estilo_flip.css?b=3">
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
  		<div class="container-fluid">
  			<img role="button" href="index.php" src="img/logo.png" width="5%">
    		<a class="navbar-brand" href="index.php">Ashen Knight</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
   			<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        			<li class="nav-item">
          				<a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        			</li>
        			<li class="nav-item dropdown">
          				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          				 	Categorias
          				</a>
          				<ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #212526;">
            				<li><a class="dropdown-item" href="accion.php">Accion</a></li>
            				<li><a class="dropdown-item" href="anime.php">Anime</a></li>
            				<li><a class="dropdown-item" href="carreras.php">Carreras</a></li>
            				<li><a class="dropdown-item" href="souls_like.php">Souls Like</a></li>
            				<li><a class="dropdown-item" href="shooter.php">Shooter</a></li>
          				</ul>
        			</li>
        			<?php 
						if ($_SESSION['tipo']==1) {
				 	?>
				 	<li class="nav-item dropdown">
          				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          				 	Usuarios
          				</a>
          				<ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #212526;">
          					<li class="nav-item">
          						<a class="nav-link" href="lista_usuario.php">Lista de Usuarios</a>
        					</li>
        					<li class="nav-item">
          						<a class="nav-link" href="lista_usuario_baja.php">Lista de Usuarios dados de baja</a>
        					</li>
          				</ul>
        			</li>
        			<li class="nav-item dropdown">
          				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
          				 	Aplicaciones
          				</a>
          				<ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #212526;">
            				<li class="nav-item">
          						<a class="nav-link" href="lista_apps.php">Lista de Aplicaciones</a>
        					</li>
            				<li class="nav-item">
          						<a class="nav-link" href="formulario_app.php">Agregar una Aplicacion</a>
        					</li>
        					<li class="nav-item">
          						<a class="nav-link" href="formulario_categoria.php">Agregar una Categoria</a>
        					</li>
          				</ul>
        			</li>
        			<?php 
						}
				 	?>
        			<li class="nav-item">
          				<a class="nav-link" href="funciones/cerrar_sesion.php">Cerrar sesion</a>
        			</li>
      			</ul>
    		</div>
  		</div>
	</nav>
</body>
</html>