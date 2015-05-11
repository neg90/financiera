<?php

require_once 'coneDB.php';
require_once 'usuario.php';

class PDOusuario extends usuario{
	

	public function __construct ($id,$user,$email,$clave,$activo,$id_rol,$id_persona){

		parent::__construct($id,$user,$email,$clave,$activo,$id_rol,$id_persona);
	}

	public static function verificarUsuario($unUser,$unaClave){
		try {
		$conexion = new conexion; //creo instancia de la conexion
		}catch (PDOException $e){}
		$consulta = $conexion->prepare('SELECT * FROM acces WHERE Usuario = :Usuario and Clave = :Clave');
		$consulta->bindParam(':Usuario',$unUser);
		$consulta->bindParam(':Clave',$unaClave);
		$consulta->execute();
		$existe=$consulta->fetch();

		if($existe==true){
			return 1;
		}else{
			return 0;
		}	
			

	}


	public static function modificar($user,$clave){
		try {
		$conexion = new conexion; //creo instancia de la conexion
		}catch (PDOException $e){}
		$consulta = $conexion->prepare('UPDATE alimento SET Usuario = Usuario AND Clave = Clave  WHERE Usuario = :Usuario');
		$consulta->bindParam(':Usuario',$unUser);
		$consulta->bindParam(':Clave',$unaClave);
		$consulta->execute();
		
	}
}
?>