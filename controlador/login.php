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
					header("Location:privado.php");
				} else {
					//aca el usuario no existe por uno u otro campo
	        		header("Location:index.php?aviso=4");
				}
			}catch(Exception $e){
				//echo $e->getMessage();
				controladorError::ErrorDB();
			}
		}elseif (empty(htmlEntities($_POST['user'])) && !empty(htmlEntities($_POST['clave']))) {
	        header("Location: index.php?aviso=1");
	        //falla la clave
		}elseif (!empty(htmlEntities($_POST['user'])) && empty(htmlEntities($_POST['clave']))){
	        header("Location: index.php?aviso=2");
	        //falla el usuario
		}else {
	        header("Location: index.php?aviso=3");
	        //quilombo en la franja de gaza
		}
	}elseif (isset($_SESSION['user'])) {
		//el tipo tien sesion abierta
		header("Location: index.php?aviso=4");
	}
 
?>