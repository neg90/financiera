<?php

require_once 'coneDB.php';
require_once 'cliente.php';

class PDOCliente extends cliente{

	public function __construct ($id,$nombre,$apellido,$dni,$direccion,$correo,$banco,$cuilt,$cbu,$provincia,$ciudad,$cp,$clave,$estado){

		parent::__construct($id,$nombre,$apellido,$dni,$direccion,$correo,$banco,$cuilt,$cbu,$provincia,$ciudad,$cp,$clave,$estado);
	}

	public static function listar(){

   	  try {$conexion = new conexion;}catch (PDOException $e){}
      $consulta = $conexion->prepare('SELECT * FROM cliente');
      $consulta->execute();
      $objeto = $consulta->fetchAll(PDO::FETCH_OBJ);
      
      return $objeto;

    }

}
