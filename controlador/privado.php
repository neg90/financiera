<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';


 	Twig_Autoloader::register();
  	$loader = new Twig_Loader_Filesystem('../vista');
  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 

  	session_start();
	if (!isset($_SESSION['user'])){
		//No deberias estar aca pero buen intento campeon
	}else{
		$template = $twig->loadTemplate('noticia.html.twig');
		echo $template->render(array());
		//Enrrutador

	}
?>