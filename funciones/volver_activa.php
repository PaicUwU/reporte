<?php 
include("../clases/Apps.php");
$apps=new Apps();

$pk_apps=$_GET["pk_apps"];

$resultado=$pk_apps->cambiar_activa($pk_apps);

if ($resultado) {
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_apps_baja.php'><script>alert('Regreso la app') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_apps_baja.php'><script>alert('No regreso la app') </script>";
}

 ?>