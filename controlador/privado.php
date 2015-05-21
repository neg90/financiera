<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
require_once 'controladorMisDatos.php';
require_once 'controladorNoticias.php';


  	session_start();
	if (!isset($_SESSION['user'])){
		ControladorDeAcceso::principal();
		//No deberias estar aca pero buen intento campeon de la luz.
	}else{
		$controlador=htmlEntities(@$_GET['c']); 
		$accion=htmlEntities(@$_GET['a']); 
		if ((!empty($controlador)) and (!empty($accion))){
			if (($controlador=='misdatos') and ($accion=='render')) {
				controladorMisDatos::render();
			}elseif (($controlador=='misdatos') and ($accion=='modificar')) {
				controladorMisDatos::modificar();
			}elseif (($controlador=='correo') and ($accion=='enviar')) {
				controladorCorreo::enviar();
			}


			elseif ($controlador=='noticias') {
				controladorNoticias::render();
			}elseif ($controlador=='actContacto') {
				controladorContacto::render();
			}	
		}else{
			//Avisar q pifio path
			ControladorDeAcceso::principal();
		}

	}
	
?>