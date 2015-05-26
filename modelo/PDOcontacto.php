<?php

require_once 'coneDB.php';
require_once 'contacto.php';

class PDOnoticia extends contacto{
	

	public function __construct ($correo,$ubicacion,$telefono){

		parent::__construct($correo,$ubicacion,$telefono);
	}