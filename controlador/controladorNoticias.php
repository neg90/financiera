<?php
	require_once('../modelo/coneDB.php');
	require_once('../modelo/PDOnoticia.php');


class controladorNoticias	 {

	static function render(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		
	
		$template = $twig->loadTemplate('noticia.html.twig');
		echo $template->render(array());
	}	

	static function crear(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		
		if (isset($_POST["guardarNoticia"])) {
			$titulo1=$_POST["titulo1"];
			$titulo2=$_POST["titulo2"];
			$cuerpo1=$_POST["editor1"];
			$cuerpo2=$_POST["editor2"];
			$unaNoticia = new PDOnoticia ($titulo1,$titulo2,$cuerpo1,$cuerpo2);
			$unaNoticia->insertar();
			//Evitar el cargar dos veces una noticia.
			header('Location:privado.php?c=noticias&a=crear');
			exit();

		}

		$template = $twig->loadTemplate('noticia.html.twig');
		echo $template->render(array());
	}

	static function modificar(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 

		
		if (isset($_POST["guardarNoticia"])) {
			$titulo1=$_POST["titulo1"];
			$titulo2=$_POST["titulo2"];
			$cuerpo1=$_POST["editor1"];
			$cuerpo2=$_POST["editor2"];
			
			$unaNoticia = new PDOnoticia ($titulo1,$titulo2,$cuerpo1,$cuerpo2);
			$unaNoticia->insertar();
			//Evitar el cargar dos veces una noticia.
			header('Location:privado.php?c=noticias&a=crear');
			exit();

		}elseif (!isset($_POST["guardarNoticia"])) {
			//Busco la noticia
			$unaNoticia = PDOnoticia::buscarNoticia();
			$titulo1=$unaNoticia["titulo1"];
			$titulo2=$unaNoticia["titulo2"];
			$cuerpo1=$unaNoticia["editor1"];
			$cuerpo2=$unaNoticia["editor2"];

			$template = $twig->loadTemplate('noticia.html.twig');
			echo $template->render(array());
		}

		
	}
}
?>