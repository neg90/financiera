<?php

require_once 'coneDB.php';
require_once 'noticia.php';

class PDOnoticia extends noticia{
	

	public function __construct ($titulo1,$titulo2,$cuerpo1,$cuerpo2){

		parent::__construct($titulo1,$titulo2,$cuerpo1,$cuerpo2);
	}

	public static function modificar($titulo1,$titulo2,$cuerpo1,$cuerpo2,$Id){
		try {$conexion = new conexion;}catch (PDOException $e){}

		$consulta = $conexion->prepare('UPDATE noticia SET titulo1 = :titulo1, titulo2 = :titulo2, cuerpo1 = :cuerpo1,
		cuerpo2 = :cuerpo2 WHERE Id = :Id');

		$consulta->bindParam(':Id',$Id);
		$consulta->bindParam(':titulo1',$titulo1);
		$consulta->bindParam(':titulo2',$titulo2);
		$consulta->bindParam(':cuerpo1',$cuerpo1);
		$consulta->bindParam(':cuerpo2',$cuerpo2);
		$consulta->execute();
	}

	public static function buscarNoticia(){	
		try {$conexion = new conexion;}catch (PDOException $e){}
		$consulta = $conexion->prepare('SELECT * FROM noticia');
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







