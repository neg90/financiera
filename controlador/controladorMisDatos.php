<?php
	require_once('../modelo/coneDB.php');


class controladorMisDatos {

	static function render(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		
		$template = $twig->loadTemplate('datosUser.html.twig');
		echo $template->render(array());
	}
	static function modificar(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		
		$template = $twig->loadTemplate('datosUser.html.twig');
		echo $template->render(array());
	}	
}
?>