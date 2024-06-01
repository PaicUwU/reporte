 <?php 
include("../clases/Usuario.php");
$usuario=new Usuario();

$pk_usuario=$_GET["pk_usuario"];

$resultado=$usuario->baja($pk_usuario);

if ($resultado) {
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuario.php'><script>alert('Se borro el usuario') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuario.php'><script>alert('no se fue') </script>";
}

 ?>