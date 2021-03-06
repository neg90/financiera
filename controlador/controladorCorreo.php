<?php
	require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
	include_once('publico.php');
	require_once '../modelo/PDOnoticia.php';
	require_once '../modelo/PDOcontacto.php';

class controladorCorreo	 {
	//evita la inyeccion de mail
	static function ValidarDatos($campo){
		//Array con las posibles cabeceras a utilizar por un spammer
		$badHeads = array("Content-Type:",
		"MIME-Version:",
		"Content-Transfer-Encoding:",
		"Return-path:",
		"Subject:",
		"From:",
		"Envelope-to:",
		"To:",
		"bcc:",
		"cc:");
		//Comprobamos que entre los datos no se encuentre alguna de
		//las cadenas del array. Si se encuentra alguna cadena se
		//dirige a una página de Forbidden
		foreach($badHeads as $valor){
			if(strpos(strtolower($campo), strtolower($valor)) !== false){
			//header( "HTTP/1.0 403 Forbidden");
			echo "que hacemo";
			exit;
			}
		}
	}

	static function enviar(){
		$fallo = false;
		$seEnvia = true;
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 

	  	controladorCorreo::ValidarDatos(@$_POST['nomyap']);
	  	controladorCorreo::ValidarDatos(@$_POST['tel']);
	  	controladorCorreo::ValidarDatos(@$_POST['email']);
	  	controladorCorreo::ValidarDatos(@$_POST['cc']);
	  	controladorCorreo::ValidarDatos(@$_POST['comentario']);

	  	if  (!empty(@$_POST['nomyap'])){
	  		$nomyap = htmlEntities(@$_POST['nomyap']);
	  	}else{
	  		$seEnvia = false;
	  		$fallo = true;
	  		$avisoNomyApe = "No cargo correctamente su nombre y apellido";
	  	}
	  	if  (!empty(@$_POST['tel'])){
	  		$tel = htmlEntities(@$_POST['tel']);
	  	}else{
	  		$fallo = true;
	  		$seEnvia = false;
	  		$avisoTel = "No cargo correctamente su telefono";
	  	}
	  	if (!empty(@$_POST['email'])){
	  		$correoE = htmlEntities(@$_POST['email']);
	  	}else{
	  		$fallo = true;
	  		$seEnvia = false;
	  		$avisoCorreo = "No cargo correctamente su correo electronico";
	  	}	
	  	if  (!empty(@$_POST['cc'])){
	  		$cc = htmlEntities(@$_POST['cc']);
	  	}else{
	  		$fallo = true;
	  		$seEnvia = false;
	  		$avisoCC = "No cargo correctamente su CUIL/CUIT";
	  	}
	 
	  	$comentario = htmlEntities(@$_POST['comentario']);
	  	
	  	if (!empty(@$_POST['servicio'])) {
	  		$servicio = htmlEntities(@$_POST['servicio']);
	  	}else{
	  		$fallo = true;
	  		$seEnvia = false;
	  		$avisoCC = "No cargo correctamente el servicio";
	  	}
	  	if ($seEnvia){
	  		$mail = new PHPMailer();
			//$mail->SMTPDebug = 2;                              

			$mail->isSMTP();                                      
			$mail->Host = 'smtp.gmail.com';  
			$mail->SMTPAuth = true;                              
			$mail->Username = 'financiera.naveyra@gmail.com';              
			$mail->Password = 'samsung2015';                          
			$mail->SMTPSecure = 'tls';                          
			$mail->Port = 587;  

			$mail->FromName = 'Sistema Financiera Naveyra';
			$mail->addAddress('info@naveyra.com.ar');    

			$mail->Subject = 'Pedido de informacion';
			
			$mensaje = "---------------------------------- \n";
	    	$mensaje.= "    Contacto del Solicitante       \n";
	   	 	$mensaje.= "---------------------------------- \n";
	    	$mensaje.= "Nombre y Apellido:   ".$nomyap ."\n";
	    	$mensaje.= "Telenofo:  ".$tel ."\n";
	    	$mensaje.= "Coreo electronico:    ".$correoE ."\n";
	    	$mensaje.= "CUIT/CUIL: ".$cc ."\n";
	    	$mensaje.= "Comentario: ".$comentario ."\n";
	    	$mensaje.= "Servicio: " .$servicio ."\n";
	    	$mensaje.= "FECHA:    ".date("d/m/Y")."\n";
	    	$mensaje.= "HORA:     ".date("h:i:s a")."\n\n";   	
	    	$mensaje.= "---------------------------------- \n";
	    	$mensaje.= "Enviado desde www.naveyra.com.ar \n";
	    	$mail->Body = $mensaje;

	    	$unaNoticia =	PDOnoticia::buscarNoticia();
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
			if(!$mail->send()) {
				//Ojo atento por q por no tener captch te puede reenviar el formulario!
				//Si aprieta f5 estas frito angelito
				$template = $twig->loadTemplate('home.html.twig');
				echo $template->render(array('enviado'=>2,'Cuerpo1'=>$Cuerpo1,'Titulo1'=>$Titulo1,'Titulo2'=>$Titulo2,'Cuerpo2'=>$Cuerpo2,
				'Correo'=>$Correo,'Ubicacion'=>$Ubicacion,'Telefono'=>$Telefono));
			} else {
				$template = $twig->loadTemplate('home.html.twig');

	    		echo $template->render(array('enviado'=>1,'Cuerpo1'=>$Cuerpo1,'Titulo1'=>$Titulo1,'Titulo2'=>$Titulo2,'Cuerpo2'=>$Cuerpo2,
				'Correo'=>$Correo,'Ubicacion'=>$Ubicacion,'Telefono'=>$Telefono));
				exit();
	        }

	  	}
	  		
	}	
}
?>