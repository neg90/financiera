<?php
	require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';


class controladorCorreo	 {

	static function enviar(){
		$fallo = false;
		$seEnvia = true;
		Twig_Autoloader::register();
	  	$loader = new Twig_Loader_Filesystem('../vista');
	  	$twig = new Twig_Environment($loader, array('cache' => '../cache','debug' => 'false')); 

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
	  	if  (!empty(@$_POST['cc'])){
	  		$comentario = "El usuario no ingreso comentarios :(";
	  	}else{
	  		$comentario = htmlEntities(@$_POST['comentario']);
	  	}
	  	if ($seEnvia){
	  		$mail = new PHPMailer();
			//$mail->SMTPDebug = 2;                              

			$mail->isSMTP();                                      
			$mail->Host = 'smtp.gmail.com';  
			$mail->SMTPAuth = true;                              
			$mail->Username = 'neg90.ng@gmail.com';              
			$mail->Password = 'kapanga123';                          
			$mail->SMTPSecure = 'tls';                          
			$mail->Port = 587;  

			$mail->FromName = 'Sistema Financiera Naveyra';
			$mail->addAddress('neg90.ng@gmail.com');    

			$mail->Subject = 'Pedido de informacion';
			
			$mensaje = "---------------------------------- \n";
	    	$mensaje.= "    Contacto del Solicitante       \n";
	   	 	$mensaje.= "---------------------------------- \n";
	    	$mensaje.= "Nombre y Apellido:   ".$nomyap ."\n";
	    	$mensaje.= "Telenofo:  ".$tel ."\n";
	    	$mensaje.= "Coreo electronico:    ".$correoE ."\n";
	    	$mensaje.= "CUIT/CUIL: ".$cc ."\n";
	    	$mensaje.= "Comentario: ".$comentario ."\n";
	    	$mensaje.= "FECHA:    ".date("d/m/Y")."\n";
	    	$mensaje.= "HORA:     ".date("h:i:s a")."\n\n";   	
	    	$mensaje.= "---------------------------------- \n";
	    	$mensaje.= "Enviado desde www.naveyra.com.ar \n";
			
	    	$mail->Body = $mensaje;
			if(!$mail->send()) {
	   			 echo 'Message could not be sent.';
	    		 echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
	    		echo 'Message has been sent';
	        }

	  	}else{
	  		//Tratar el error
	  	}
	  		
		//$template = $twig->loadTemplate('confirmacion.html.twig');

		//echo $template->render(array());
	}	
}
?>