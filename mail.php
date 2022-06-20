<?php
  $nombre = $_POST['name'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['message'];


	if(mail('abel.millan@mataro.epiaedu.cat', $asunto, $mensaje)){
		echo "Correo enviado";
	}
?>