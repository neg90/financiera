<?php

require_once('Privado.php');
require_once('Error.php');
require_once '../Twig/Autoloader.php';
require_once('cargaTwig.php');

class ControladorPublico {
	static function Principal(){

		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem('../vista');
	    $twig = new Twig_Environment($loader, array('debug' => 'false'));//'cache' => '../cache',')); 

		$template = $twig->loadTemplate('home.html.twig');
		echo $template->render(array('errorLoginVista'=>$errorLoginVista));
	  	
			

		
	}		
}

?>