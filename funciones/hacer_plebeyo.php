 <?php 
include("../clases/Usuario.php");
$usuario=new Usuario();

$pk_usuario=$_GET["pk_usuario"];

$resultado=$usuario->cambiar_plebeyo($pk_usuario);

if ($resultado) {
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuario.php'><script>alert('Felicidades ahora es plebeyo') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_usuario.php'><script>alert('Aun tienes el poder') </script>";
}

 ?>