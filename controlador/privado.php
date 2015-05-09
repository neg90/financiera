<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';

class ControladorPrivado {

	public function Principal(){

		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem('../vista');
	    $twig = new Twig_Environment($loader, array('debug' => 'false'));//'cache' => '../cache',')); 
		
		$template = $twig->loadTemplate('login.html.twig');
		echo $template->render(array());

		

	}		
}

?>