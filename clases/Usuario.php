 <?php 

class usuario
{
	
	function __construct()
	{
		require_once("Conexion.php");
		$this->conexion=new Conexion();
	}
	function buscar($username,$contraseña){
		$consulta="SELECT * FROM usuario WHERE username='{$username}' AND contraseña='{$contraseña}' AND estatus=1";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function mostrar(){
		$consulta="SELECT * FROM usuario WHERE estatus=1";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function baja($pk_usuario){
		$consulta="UPDATE usuario SET estatus=0 WHERE pk_usuario='{$pk_usuario}'";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function cambiar_admin($pk_usuario){
		$consulta="UPDATE usuario SET tipo=1 WHERE pk_usuario='{$pk_usuario}'";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function cambiar_plebeyo($pk_usuario){
		$consulta="UPDATE usuario SET tipo=2 WHERE pk_usuario='{$pk_usuario}'";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function mostrar_baja(){
		$consulta="SELECT * FROM usuario WHERE estatus=0";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	function cambiar_activo($pk_usuario){
		$consulta="UPDATE usuario SET estatus=1 WHERE pk_usuario='{$pk_usuario}'";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
}
 ?>