<?php

require_once '../modelo/conexDB.php';
require_once 'usuario.php';

class PDOusuario extends usuario{
	

	public function __construct ($id,$user,$email,$clave,$activo,$id_rol,$id_persona){

		parent::__construct($id,$user,$email,$clave,$activo,$id_rol,$id_persona);
	}

	public static function verificarUsuario($unUser,$unaClave){
		try {
		$conexion = new conexion; //creo instancia de la conexion
		}catch (PDOException $e){}
		$consulta = $conexion->prepare('SELECT * FROM usuario WHERE user = :user and clave = :clave');
		$consulta->bindParam(':user',$unUser);
		$consulta->bindParam(':clave',$unaClave);
		$consulta->execute();
		$existe=$consulta->fetch();

		if($existe==true){
			return 1;
		}else{
			return 0;
		}	
			

}