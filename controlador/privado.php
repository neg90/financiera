<?php

require_once '../Twig/Autoloader.php';	
	

try {
 	Twig_Autoloader::register();
  	$loader = new Twig_Loader_Filesystem('../vista');
  	$twig = new Twig_Environment($loader, array(//'cache' => '../cache','
    'debug' => 'false')); 

  	session_start();
	if (!isset($_SESSION['user'])){
		//No deberias estar aca pero buen intento campeon
	}else{
		//Enrrutador
		
	}
?>