<?php

	require_once('../modelo/coneDB.php');
	require_once('../modelo/PDOcontacto.php');
	

class controladorContacto {

	static function modificar(){

		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 
		
		$unContacto = PDOcontacto::buscarContacto();
		if (isset($_POST["guardarContacto"])) {
			if ($unContacto == false){
				$Correo = "No disponible";
				$Ubicacion = "No disponible";
				$Telefono = "No disponible";
			}else{
				$Correo = $unContacto["Correo"];
				$Ubicacion = $unContacto["Ubicacion"];
				$Telefono = $unContacto["Telefono"];
			}
			if(!empty($_POST["correo"]) and !empty($_POST["ubicacion"]) and !empty($_POST["telefono"])){
				$Correo=$_POST["Correo"];
				$Ubicacion=$_POST["Ubicacion"];
				$Telefono=$_POST["Telefono"];
			
				$Id = $unContacto["Id"];
				
				PDOnoticia::modificar($Correo,$Ubicacion,$Telefono,$Id);
				//Evitar el cargar dos veces una noticia.
				//Anda todo Bien!
				$template = $twig->loadTemplate('contacto.html.twig');
				echo $template->render(array('Correo'=>$Correo,'Ubicacion'=>$Ubicacion,'Telefono'=>$Telefono,'error'=>0));				
			}else{

				$template = $twig->loadTemplate('contacto.html.twig');
				echo $template->render(array('Correo'=>$Correo,'Ubicacion'=>$Ubicacion,'Telefono'=>$Telefono,'error'=>1));
			}
		}else{
			
			$unContacto = PDOcontacto::buscarContacto();
			if ($unContacto == false){
				$Correo = "No disponible";
				$Ubicacion = "No disponible";
				$Telefono = "No disponible";
			}else{
				$Correo = $unContacto["Correo"];
				$Ubicacion = $unContacto["Ubicacion"];
				$Telefono = $unContacto["Telefono"];
			}
			$template = $twig->loadTemplate('contacto.html.twig');
				echo $template->render(array('Correo'=>$Correo,'Ubicacion'=>$Ubicacion,'Telefono'=>$Telefono));

		}
		
	}

}

?>
