<?php

require_once 'coneDB.php';
require_once 'noticia.php';

class PDOnoticia extends noticia{
	

	public function __construct ($titulo1,$titulo2,$cuerpo1,$cuerpo2){

		parent::__construct($titulo1,$titulo2,$cuerpo1,$cuerpo2);
	}

	public function insertar(){
		try {$conexion = new conexion;}catch (PDOException $e){}
		$consulta = $conexion->prepare('INSERT INTO noticia (titulo1,titulo2,cuerpo1,cuerpo2) 
		VALUES(:titulo1,:titulo2,:cuerpo1,:cuerpo2)');

		$consulta->bindParam(':titulo1', $this->getTitulo1());
		$consulta->bindParam(':titulo2', $this->getTitulo2());
		$consulta->bindParam(':cuerpo1', $this->getCuerpo1());
		$consulta->bindParam(':cuerpo2', $this->getCuerpo2());
		$consulta->execute();
	}

	public function buscarNoticia(){	
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







