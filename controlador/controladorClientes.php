<?php

	require_once('../modelo/coneDB.php');
	require_once('../modelo/PDOCliente.php');
	

class controladorCliente {

	public static function listar(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 

	  	$template = $twig->loadTemplate('clientes/verClientes.html.twig');
		echo $template->render(array());
		
	}

}