<?php

session_start();
require_once('../modelo/coneDB.php');
require_once('../modelo/PDOusuario.php');

	if (!isset($_SESSION['user']) && (htmlEntities(isset($_POST['user'])))) {
		if (!empty(htmlEntities($_POST['user'])) && !empty(htmlEntities($_POST['clave']))){
			$user = filter_var(htmlEntities($_POST['user']), FILTER_SANITIZE_STRING); //FILTER_SANITIZE_STRING -> Elimina etiquetas, opcionalmente elimina o codifica caracteres especiales.
			$clave = filter_var(htmlEntities($_POST['clave']), FILTER_SANITIZE_STRING);

			try {
				$conexion = new conexion;
				$user = htmlEntities($_POST['user']);
				$clave = htmlEntities($_POST['clave']);

				$verificado=PDOusuario::verificarUsuario($user,$clave);

				if ($verificado == 1) {
					$_SESSION['user'] = htmlEntities($_POST['user']);
					header("Location:privado.php?c=noticias&a=modificar");
				} else {
					//aca el usuario no existe por uno u otro campo 
					echo "<script type=\"text/javascript\">alert(\"Usuario o clave incorrecto\");javascript:history.back();</script>";  

				}
			}catch(Exception $e){
				controladorError::ErrorDB();
			}
		}
	}elseif (isset($_SESSION['user'])) {
	//el tipo tien sesion abierta
		header("Location:privado.php?c=noticias&a=modificar");
	}
 
?>