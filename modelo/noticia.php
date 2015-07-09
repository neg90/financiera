<?php

class noticia {
	//Atributos
	private $id;
	private $titulo1;
	private $titulo2;
	private $cuerpo1; 
	private $cuerpo2;
		
	

	public function	__construct ($titulo1,$titulo2,$cuerpo1,$cuerpo2) {

		$this->titulo1 = $titulo1;
		$this->titulo2 = $titulo2;
		$this->cuerpo1 = $cuerpo1;
		$this->cuerpo2 = $cuerpo2;
	
	}

	//id
	public function getId(){
		return $this->id;
	}
	
	//titulo1
	public function getTitulo1(){
		return $this->titulo1;
	}

	public function setTitulo1($titulo1){
		$this->titulo1 = $titulo1;
		return $this;
	}

	//titulo2
	public function getTitulo2(){
		return $this->titulo2;
	}

	public function setTitulo2($titulo2){
		$this->titulo2 = $titulo2;
		return $this;
	}

	//cuerpo1
	public function getCuerpo1(){
		return $this->cuerpo1;
	}

	public function setCuerpo1($cuerpo1){
		$this->cuerpo1 = $cuerpo1;
		return $this;
	}

	//cuerpo2
	public function getCuerpo2(){
		return $this->cuerpo2;
	}

	public function setCuerpo2($cuerpo2){
		$this->cuerpo2 = $cuerpo2;
		return $this;
	}


}
?>