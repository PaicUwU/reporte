 <?php 
session_start();
include("../clases/Usuario.php");

$usuario=new Usuario();

$username=$_POST['username'];
$contraseña=$_POST['contraseña'];

$resultado=$usuario->buscar($username, $contraseña);

$resultado2=mysqli_num_rows($resultado);
$datos=mysqli_fetch_assoc($resultado);

if ($resultado2==0) {
	echo "<meta http-equiv='REFRESH' content='0; url=../inicio_secion.php'><script>alert('Usuario o Contraseña incorrectos') </script>";
}else{
	$_SESSION['pk_usuario']=$datos['pk_usuario'];
	$_SESSION['username']=$username;
	$_SESSION['tipo']=$datos['tipo'];

	echo "<meta http-equiv='REFRESH' content='0; url=../index.php'><script>alert('Bienvenido(a)') </script>";
}

?>