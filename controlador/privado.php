<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';

require_once 'controladorNoticias.php';
require_once 'controladorContacto.php';


  	session_start();
	if (!isset($_SESSION['user'])){
		//si quiere volver para atras aca avisa
		//No deberias estar aca pero buen intento campeon de la luz.
	}else{
		$controlador=htmlEntities(@$_GET['c']); 
		$accion=htmlEntities(@$_GET['a']); 
		if ((!empty($controlador)) and (!empty($accion))){
			if (($controlador=='correo') and ($accion=='enviar')) {
				controladorCorreo::enviar();
			}elseif (($controlador=='noticias') and ($accion=='modificar')){
				controladorNoticias::modificar();
			}elseif (($controlador=='actContacto') and ($accion == 'modificar')){
				controladorContacto::modificar();
			}	
		}else{
			//Avisar q pifio path
			
		}

	}
	
?>