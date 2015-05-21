<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
require_once 'controladorCorreo.php';
	
	session_start();
	$_SESSION['tokensMail'] = 0;
	$controlador=htmlEntities(@$_GET['c']); 
	$accion=htmlEntities(@$_GET['a']); 
	$aviso=htmlEntities(@$_GET['aviso']);
	
	if (($controlador=='correo') and ($accion=='enviar')) {
		controladorCorreo::enviar();
	}else{
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem('../vista');
		$twig = new Twig_Environment($loader, array('debug' => 'false'));//'cache' => '../cache',')); 
			
		$template = $twig->loadTemplate('home.html.twig');
		echo $template->render(array('enviado'=>0));
	}

?>