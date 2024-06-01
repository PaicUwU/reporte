<?php 
class Apps{

	
	function __construct()
	{
		require_once("Conexion.php");
		$this->conexion=new Conexion();
	}
	function insertar($titulo, $precio, $foto, $descripcion, $desarrolladora, $distribuidora, $fk_categoria){
		$consulta="INSERT INTO apps (pk_apps, titulo, precio, foto, descripcion, desarrolladora, distribuidora, estatus, fk_categoria) VALUES (NULL, '{$titulo}', '{$precio}', '{$foto}', '{$descripcion}', '{$desarrolladora}', '{$distribuidora}', 1, '{$fk_categoria}')";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function mostrar(){
		$consulta="SELECT * FROM apps WHERE estatus=1";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function mostrarPorId($pk_apps){
		$consulta="SELECT * FROM apps WHERE pk_apps='{$pk_apps}'";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function mostrar_accion(){
		$consulta="SELECT * FROM apps WHERE estatus=1 AND fk_categoria=1";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function mostrar_carrera(){
		$consulta="SELECT * FROM apps WHERE estatus=1 AND fk_categoria=2";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function mostrar_souls_like(){
		$consulta="SELECT * FROM apps WHERE estatus=1 AND fk_categoria=3";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function mostrar_shooter(){
		$consulta="SELECT * FROM apps WHERE estatus=1 AND fk_categoria=4";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function mostrar_anime(){
		$consulta="SELECT * FROM apps WHERE estatus=1 AND fk_categoria=5";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function baja($pk_apps){
		$consulta="UPDATE apps SET estatus=0 WHERE pk_apps='{$pk_apps}'";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
}

 ?>