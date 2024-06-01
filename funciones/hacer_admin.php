 <?php 
include("../clases/Usuario.php");
$usuario=new Usuario();

$pk_usuario=$_GET["pk_usuario"];

$resultado=$usuario->cambiar_admin($pk_usuario);

if ($resultado) {
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuario.php'><script>alert('Ahoras es Admin') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuario.php'><script>alert('Fallo la transformacion') </script>";
}

 ?>