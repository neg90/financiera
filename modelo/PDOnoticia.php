<?php

require_once 'coneDB.php';
require_once 'noticia.php';

class PDOnoticia extends noticia{
	

	public function __construct ($titulo1,$titulo2,$cuerpo1,$cuerpo2,$nota1,$nota2,$nota3,$nota4,$nota5){

		parent::__construct($titulo1,$titulo2,$cuerpo1,$cuerpo2,$nota1,$nota2,$nota3,$nota4,$nota5);
	}

	public function insertar(){
		try {$conexion = new conexion;}catch (PDOException $e){}
		$consulta = $conexion->prepare('INSERT INTO noticia (titulo1,titulo2,cuerpo1,cuerpo2,nota1,nota2,nota3,nota4,nota5) 
		VALUES(:titulo1,:titulo2,:cuerpo1,:cuerpo2,:nota1,:nota2,:nota3,:nota4,:nota5)');

		$consulta->bindParam(':titulo1', $this->getTitulo1());
		$consulta->bindParam(':titulo2', $this->getTitulo2());
		$consulta->bindParam(':cuerpo1', $this->getCuerpo1());
		$consulta->bindParam(':cuerpo2', $this->getCuerpo2());
		$consulta->bindParam(':nota1', $this->getNota1());
		$consulta->bindParam(':nota2', $this->getNota2());
		$consulta->bindParam(':nota3', $this->getNota3());
		$consulta->bindParam(':nota4', $this->getNota4());
		$consulta->bindParam(':nota5', $this->getNota5());
		$consulta->execute();
	}

}

?>







