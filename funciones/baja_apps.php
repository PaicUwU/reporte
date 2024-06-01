<?php 
include("../clases/Apps.php");
$apps=new Apps();

$pk_apps=$_GET["pk_apps"];

$resultado=$apps->baja($pk_apps);

if ($resultado) {
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_apps.php'><script>alert('Se borro la app') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../lista_apps.php'><script>alert('No se borro la app') </script>";
}

 ?>