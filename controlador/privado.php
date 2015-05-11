<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
require_once 'controladorMisDatos.php';
require_once 'controladorNoticias.php';


 	

  	session_start();
	if (!isset($_SESSION['user'])){
		ControladorDeAcceso::principal();
		//No deberias estar aca pero buen intento campeon
	}else{
		$controlador=htmlEntities(@$_GET['c']);  
		if (!empty($controlador)){
			if ($controlador=='misdatos') {
				controladorMisDatos::Modificar();
			}elseif ($controlador=='noticias') {
				controladorNoticias::Modificar();
			}elseif ($controlador=='actContacto') {
				
			}	
		}else{
			controladorNoticias::Modificar();
		}

	}
	
?>