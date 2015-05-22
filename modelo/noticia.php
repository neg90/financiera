<?php

class noticia {
	//Atributos
	private $id;
	private $titulo1;
	private $titulo2;
	private $cuerpo1; 
	private $cuerpo2;
	private $nota1;
	private $nota2;
	private $nota3; 
	private $nota4;	
	private $nota5;		
	

	public function	__construct ($titulo1,$titulo2,$cuerpo1,$cuerpo2,$nota1,$nota2,$nota3,$nota4,$nota5) {

		$this->titulo1 = $titulo1;
		$this->titulo2 = $titulo2;
		$this->cuerpo1 = $cuerpo1;
		$this->cuerpo2 = $cuerpo2;
		$this->nota1 = $nota1;
		$this->nota2 = $nota2;
		$this->nota3 = $nota3;
		$this->nota4 = $nota4;
		$this->nota5 = $nota5;
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

	//Nota1
	public function getNota1(){
		return $this->nota1;
	}

	public function setNota1($nota1){
		$this->nota1 = $nota1;
		return $this;
	}

	//Nota2
	public function getNota2(){
		return $this->nota2;
	}

	public function setNota2($nota2){
		$this->nota2 = $nota2;
		return $this;
	}

	//Nota3
	public function getNota3(){
		return $this->nota3;
	}

	public function setNota3($nota3){
		$this->nota3 = $nota3;
		return $this;
	}

	//Nota4
	public function getNota4(){
		return $this->nota4;
	}

	public function setNota4($nota4){
		$this->nota4 = $nota4;
		return $this;
	}

	//Nota5
	public function getNota5(){
		return $this->nota5;
	}

	public function setNota5($nota5){
		$this->nota5 = $nota5;
		return $this;
	}

}
?>