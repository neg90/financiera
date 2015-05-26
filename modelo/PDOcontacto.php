<?php

require_once 'coneDB.php';
require_once 'contacto.php';

class PDOcontacto extends contacto{
	

	public function __construct ($correo,$ubicacion,$telefono){

		parent::__construct($correo,$ubicacion,$telefono);
	}

	public static function modificar ($Correo,$Ubicacion,$Telefono,$Id){
		try {$conexion = new conexion;}catch (PDOException $e){}

		$consulta = $conexion->prepare('UPDATE contacto SET Correo = :Correo, Ubicacion = :Ubicacion, Telefono = :Telefono
		 WHERE Id = :Id');

		$consulta->bindParam(':Id',$Id);
		$consulta->bindParam(':Correo',$Correo);
		$consulta->bindParam(':Ubicacion',$Ubicacion);
		$consulta->bindParam(':Telefono',$Telefono);
		$consulta->execute();
	}

	public static function buscarContacto (){
		try {$conexion = new conexion;}catch (PDOException $e){}
		$consulta = $conexion->prepare('SELECT * FROM contacto');
		$consulta->execute();
		$existe=$consulta->fetch();
		if ($existe){
			return $existe;
		}else{
			return false;
		}
	}
	
}
?>