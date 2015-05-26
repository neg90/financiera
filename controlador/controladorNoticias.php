<?php
	require_once('../modelo/coneDB.php');
	require_once('../modelo/PDOnoticia.php');


class controladorNoticias	 {


	static function modificar(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		
		if (isset($_POST["guardarNoticia"])) {
			if(!empty($_POST["titulo1"]) and !empty($_POST["titulo2"]) and !empty($_POST["editor1"]) and !empty($_POST["editor2"])){
				$titulo1=$_POST["titulo1"];
				$titulo2=$_POST["titulo2"];
				$cuerpo1=$_POST["editor1"];
				$cuerpo2=$_POST["editor2"];
				$unaNoticia = new PDOnoticia ($titulo1,$titulo2,$cuerpo1,$cuerpo2);
				$unaNoticia->insertar();
				//Evitar el cargar dos veces una noticia.
				header('Location:privado.php?c=noticias&a=modificar');
				exit();					
			}
		}
		$template = $twig->loadTemplate('noticia.html.twig');
		echo $template->render(array());
		
	}

}
?>