<?php
   $nombre = $_POST['name'];
   $email = $_POST['email'];
   $asunto = 'Formulario Rellenado';
   $mensaje = " Nombre: ".$nombre."\n Email:" .$email. "\n Mensaje:".$_POST['message'];


   mail("nijenhuis.barry@gmail.com", $asunto, $mensaje);
   echo "Correo enviado";
?>	
