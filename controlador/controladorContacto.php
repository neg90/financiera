<?php

	require_once('../modelo/coneDB.php');
	

class controladorContacto {

	static function modificar(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		$template = $twig->loadTemplate('contacto.html.twig');
		echo $template->render(array('error'=>0));
	}

}

?>
