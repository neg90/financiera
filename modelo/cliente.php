<?php

class cliente {

	private $id;
	private $nombre;
	private $apellido;
	private $dni; 
	private $direccion;
	private $correo;
	private $banco;
	private $cuilt;
	private $cbu;
	private $provincia;
	private $ciudad;
	private $cp;
	private $clave;
	private $estado;

	public function	__construct ($id,$nombre,$apellido,$dni,$direccion,$correo,$banco,$cuilt,$cbu,$provincia,$ciudad,$cp,$clave,$estado) {

		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->clave = $clave;
		$this->direccion = $direccion;
		$this->dni = $dni;
		$this->correo= $correo;
		$this->banco = $banco;
		$this->cuilt = $cuilt;
		$this->cbu = $cbu;
		$this->provincia = $provincia;
		$this->ciudad = $ciudad;
		$this->cp = $cp;
		$this->estado = $estado;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getClave(){
		return $this->clave;
	}

	public function setClave($clave){
		$this->clave = $clave;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getDni(){
		return $this->dni;
	}

	public function setDni($dni){
		$this->dni = $dni;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getBanco(){
		return $this->banco;
	}

	public function setBanco($banco){
		$this->banco = $banco;
	}

	public function getCuilt(){
		return $this->cuilt;
	}

	public function setCuilt($cuilt){
		$this->cuilt = $cuilt;
	}

	public function getCbu(){
		return $this->cbu;
	}

	public function setCbu($cbu){
		$this->cbu = $cbu;
	}

	public function getProvincia(){
		return $this->provincia;
	}

	public function setProvincia($provincia){
		$this->provincia = $provincia;
	}

	public function getCiudad(){
		return $this->ciudad;
	}

	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
	}

	public function getCp(){
		return $this->cp;
	}

	public function setCp($cp){
		$this->cp = $cp;
	}
}

?>