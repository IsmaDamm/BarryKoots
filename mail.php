 /*<?php
  $nombre = $_POST['name'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = " Nombre: ".$nombre."\n Email:" .$email. "\n Mensaje:".$_POST['message'];


	if(mail("abel.millan@mataro.epiaedu.cat", $asunto, $mensaje)){
		echo "Correo enviado";
	}
?>*/

<?php
  if(isset( $_POST['name']))
  $name = $_POST['name'];
  if(isset( $_POST['email']))
  $email = $_POST['email'];
  if(isset( $_POST['message']))
  $message = $_POST['message'];

  $content="From: $name \n Email: $email \n Message: $message";
  $recipient = "abel.millan@mataro.epiaedu.cat";
  $mailheader = "From: $email \r\n";
  mail($recipient, $phone, $content, $mailheader) or die("Error!");
  echo "Email sent!";
?>