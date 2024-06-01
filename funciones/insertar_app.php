<?php 

include("../clases/Apps.php");

$apps=new apps();

$titulo=$_POST['titulo'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$desarrolladora=$_POST['desarrolladora'];
$distribuidora=$_POST['distribuidora'];
$fk_categoria=$_POST['fk_categoria'];

$archi_foto=$_FILES["foto"]["tmp_name"];
$nombre_foto=$_FILES["foto"]["name"];


move_uploaded_file($archi_foto, "../img/".$nombre_foto);

$respuesta=$apps->insertar($titulo, $precio, $nombre_foto, $descripcion, $desarrolladora, $distribuidora, $fk_categoria);

if ($respuesta) {
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_app.php'><script>alert('Agregado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../formulario_app.php'><script>alert('No se registro') </script>";
}

?>