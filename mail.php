<?php
  if(isset( $_POST['name']))
  $name = $_POST['name'];
  if(isset( $_POST['email']))
  $email = $_POST['email'];
  if(isset( $_POST['message']))
  $message = $_POST['message'];
  if(isset( $_POST['phone']))
  $phone = $_POST['phone'];

  $content="From: $name \n Email: $email \n Message: $message \n Phone: $phone ";
  $recipient = "issmaelhassouni@gmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $phone, $content, $mailheader) or die("Error!");
  echo "Email sent!";
  echo('Holabb')
?>