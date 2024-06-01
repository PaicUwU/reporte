<html>
<head>
  <title></title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/estilo.css?a=7">
  
</head>
<body>
	<br><br>
	<div class="container">
		<div>
			<center>
				<img src="img/logo.png" width="6%">
			<label>" "</label>
			<h1 style="color: hotpink;">Ashen Knight</h1>
			</center>
		</div>
	</div><br><br>
	<div class="row">
  	<div class="col-md-4"></div>
  	<div class="col-md-4">
  		<center><h1 style="color: white;">REGISTRATE:</h1></center>
  		<form  method="POST" action="registrarte.php" >

  			<div class="form-group">
	    		<label style="color: white;" for="doc">Nombre(s) </label>
	    		<input required type="text" name="nombres" class="form-control" id="doc">
				</div>

				<div class="form-group">
	    		<label style="color: white;" for="nombre">Correo </label>
	    		<input required type="text" name="correo" placeholder="example@example.com" class="form-control" id="nombre">
				</div>

   			<div class="form-group">
	    		<label style="color: white;" for="dir">Usuario </label>
	    		<input required type="text" name="usuario" class="form-control" id="dir">
				</div>

				<div class="form-group">
	    		<label style="color: white;" for="tel">Contraseña </label>
	    		<input required type="password" name="contraseña" class="form-control" id="tel">
				</div>
    
    		<center>
    			<input type="submit" value="Registrate" class="btn btn-success" name="btinsert">
    			<a class="btn btn btn-info" href="inicio_secion.php" role="button">Iniciar Secion</a>
    		</center>
    

  		</form>
  		
			<div style="color: white;">
    			<?php
  				if(isset($_POST['btinsert']))
  				{
  					include("clases/Conexion2.php");

  					$nombres=$_POST['nombres'];
  					$username=$_POST['usuario'];
  					$correo=$_POST['correo'];
  					$contraseña=$_POST['contraseña'];

  					$conexion->query("INSERT INTO $usuario (pk_usuario, nombres, username, correo, contraseña, estatus, tipo) values (null,'$nombres','$username','$correo','$contraseña',1,2)");

  					include("clases/Cerrar_conexion.php");
                    echo "Se registro corectamente";
                   

  				}
  			?>
			</div>
  



  	</div>
  	<div class="col-md-4"></div>
	</div>

 
</body>
</html>