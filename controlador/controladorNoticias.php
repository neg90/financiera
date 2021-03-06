<?php
	require_once('../modelo/coneDB.php');
	require_once('../modelo/PDOnoticia.php');


class controladorNoticias	 {


	static function modificar(){
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		$unaNoticia = PDOnoticia::buscarNoticia();
		if (isset($_POST["guardarNoticia"])) {
			if ($unaNoticia == false){
				$Cuerpo1 = "No disponible";
				$Cuerpo2 = "No disponible";
				$Titulo1 = "No disponible";
				$Titulo2 = "No disponible";
			}else{
				$Cuerpo1 = $unaNoticia["Cuerpo1"];
				$Cuerpo2 = $unaNoticia["Cuerpo2"];
				$Titulo1 = $unaNoticia["Titulo1"];
				$Titulo2 = $unaNoticia["Titulo2"];
			}
			if(!empty($_POST["titulo1"]) and !empty($_POST["titulo2"]) and !empty($_POST["editor1"]) and !empty($_POST["editor2"])){
				$titulo1=$_POST["titulo1"];
				$titulo2=$_POST["titulo2"];
				$cuerpo1=$_POST["editor1"];
				$cuerpo2=$_POST["editor2"];
				
				$Id = $unaNoticia["Id"];

				PDOnoticia::modificar($titulo1,$titulo2,$cuerpo1,$cuerpo2,$Id);
				//Evitar el cargar dos veces una noticia.
				//Anda todo Bien!
				$template = $twig->loadTemplate('noticia.html.twig');
				echo $template->render(array('Cuerpo1'=>$Cuerpo1,'Titulo1'=>$Titulo1,'Titulo2'=>$Titulo2,'Cuerpo2'=>$Cuerpo2,'error'=>0));				
			}else{

				$template = $twig->loadTemplate('noticia.html.twig');
				echo $template->render(array('Cuerpo1'=>$Cuerpo1,'Titulo1'=>$Titulo1,'Titulo2'=>$Titulo2,'Cuerpo2'=>$Cuerpo2,'error'=>1));
			}
		}else{
			$unaNoticia = PDOnoticia::buscarNoticia();
			if ($unaNoticia == false){
				$Cuerpo1 = "No disponible";
				$Cuerpo2 = "No disponible";
				$Titulo1 = "No disponible";
				$Titulo2 = "No disponible";
			}else{
				$Cuerpo1 = $unaNoticia["Cuerpo1"];
				$Cuerpo2 = $unaNoticia["Cuerpo2"];
				$Titulo1 = $unaNoticia["Titulo1"];
				$Titulo2 = $unaNoticia["Titulo2"];
			}
			$template = $twig->loadTemplate('noticia.html.twig');
			echo $template->render(array('Cuerpo1'=>$Cuerpo1,'Titulo1'=>$Titulo1,'Titulo2'=>$Titulo2,'Cuerpo2'=>$Cuerpo2));

		}
		
	}

}
?>