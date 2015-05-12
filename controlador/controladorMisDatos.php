<?php
	require_once('../modelo/coneDB.php');


class controladorMisDatos {

	static function Modificar(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		//usuario
		//clave
		$template = $twig->loadTemplate('datosUser.html.twig');
		echo $template->render(array());
	}	
}
?>