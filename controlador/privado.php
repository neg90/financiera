<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';


 	Twig_Autoloader::register();
  	$loader = new Twig_Loader_Filesystem('../vista');
  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 

  	session_start();
	if (!isset($_SESSION['user'])){
		ControladorDeAcceso::principal();
		//No deberias estar aca pero buen intento campeon
	}else{
		$controlador=htmlEntities(@$_GET['c']);  
		if (!empty($controlador)){
			if ($controlador=='misdatos') {
				controladorMisDatos::modificar();
			//$template = $twig->loadTemplate('datosUser.html.twig');
			//echo $template->render(array());
			//Enrrutador{
			}elseif ($controlador=='noticias') {
				# code...
			}elseif ($controlador=='actContacto') {
				# code...
			}	
		}

	}
	
?>