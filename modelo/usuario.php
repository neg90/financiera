<?php

class usuario {
	//Atributos
	private $id;
	private $user;
	private $email; 
	private $clave;	
	

	public function	__construct ($id,$user,$email,$clave) {

		$this->id = $id;
		$this->user = $user;
		$this->email = $email;
		$this->clave = $clave;
	}

	//id
	public function getId(){
		return $this->id;
	}
	
	//User
	public function getUser(){
		return $this->user;
	}

	public function setUser($user){
		$this->user = $user;
		return $this;
	}

	//Email
	public function getEmail () {
		return $this->email;
	}

	public function setEmail ($email) {
		$this->email = $email;
		return $this;
	}

	//Clave
	public function getClave(){
		return $this->clave;
	}

	public function setClave($clave){
		$this->clave = $clave;
		return $this;
	}
}
?>