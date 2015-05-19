<?php
	require_once('../modelo/coneDB.php');


class controladorNoticias	 {

	static function render(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		//usuario
		//clave
		$template = $twig->loadTemplate('noticia.html.twig');
		echo $template->render(array());
	}	
}
?>