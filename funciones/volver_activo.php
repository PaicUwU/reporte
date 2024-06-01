<?php 
include("../clases/Usuario.php");
$usuario=new Usuario();

$pk_usuario=$_GET["pk_usuario"];

$resultado=$usuario->cambiar_activo($pk_usuario);

if ($resultado) {
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuario_baja.php'><script>alert('Se reactivó el usuario') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuario.php'><script>alert('Sigue en el inactivo') </script>";
}

 ?>