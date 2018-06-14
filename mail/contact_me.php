<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'comercial@smartbusinessmanagement.com.br'; 
$email_subject = "$name , Entrou em contato pelo site";
$email_body = "Você teve um contato pelo site \n\n"."Segue informações:\n\nNome : $name\n\nE-mail: $email_address\n\nTelefone: $phone\n\nMensagem :\n$message";
$headers = "From: comercial@smartbusinessmanagement.com.br\n"; 
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>