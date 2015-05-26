<?php

require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
require_once 'controladorCorreo.php';
require_once '../modelo/coneDB.php';
require_once '../modelo/PDOnoticia.php';
	
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
		$twig = new Twig_Environment($loader, array('debug' => 'false','cache' => '../cache')); 
		$unaNoticia =	PDOnoticia::buscarNoticia();
		if ($unaNoticia == false){
			$Cuerpo1 = "No se cargaron informacion";
			$Cuerpo2 = "No se cargaron informacion";
			$Titulo1 = "No se cargaron informacion";
			$Titulo2 = "No se cargaron informacion";
			
		}else{
			$Cuerpo1 = $unaNoticia["Cuerpo1"];
			$Cuerpo2 = $unaNoticia["Cuerpo2"];
			$Titulo1 = $unaNoticia["Titulo1"];
			$Titulo2 = $unaNoticia["Titulo2"];
			
		}
		$template = $twig->loadTemplate('home.html.twig');
		echo $template->render(array('enviado'=>0,'Cuerpo1'=>$Cuerpo1,'Titulo1'=>$Titulo1,'Titulo2'=>$Titulo2,'Cuerpo2'=>$Cuerpo2));
	}

?>