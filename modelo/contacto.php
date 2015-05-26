<?php

class contacto {

	private $id;
	private $correo;
	private $ubicacion;
	private $telefono; 


	public function	__construct ($correo,$ubicacion,$telefono) {

		$this->correo = $correo;
		$this->ubicacion = $ubicacion;
		$this->telefono = $telefono;
		
	}
}

?>