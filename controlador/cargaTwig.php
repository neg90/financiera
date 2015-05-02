<?php

	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem('../vista');
	$twig = new Twig_Environment($loader, array('debug' => 'false'));//'cache' => '../cache',')); 

?>