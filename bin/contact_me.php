<?php
header("Access-Control-Allow-Origin: *");
// check if fields passed are empty
if(empty($_GET['name'])  		||
   empty($_GET['email']) 		||
   empty($_GET['message'])	||
   !filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_GET['name'];
$email_address = $_GET['email'];
$message = $_GET['message'];

// create email body and send it
$to = 'qinanj22@gmail.com'; // put your email
$email_subject = "Contact form submitted by:  $name";
$email_body = "You have received a new message. \n\n".
				  " Here are the details:\n \nName: $name \n ".
				  "Email: $email_address\n Message \n $message";
$headers = "From: hachiko99.github.io\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
