<?php

session_start();
require_once('../Modelo/conexDB.php');
require_once('../Modelo/Clases/PDOusuario.php');
require_once('Error.php');
		
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
					header("Location: index.php");

				} else {
	        		header("Location: index.php?aviso=4");
				}
			}catch(Exception $e){
				//echo $e->getMessage();
				controladorError::ErrorDB();
			}
		}elseif (empty(htmlEntities($_POST['user'])) && !empty(htmlEntities($_POST['clave']))) {
	        header("Location: index.php?aviso=1");
		}elseif (!empty(htmlEntities($_POST['user'])) && empty(htmlEntities($_POST['clave']))){
	        header("Location: index.php?aviso=2");
		}else {
	        header("Location: index.php?aviso=3");
		}
	}elseif (isset($_SESSION['user'])) {
		header("Location: index.php?aviso=3");
	}
	elseif (!isset($_SESSION['user'])) {
		header("Location: index.php?aviso=5");
	}
 
?>