<?php 

$myemail = 'kwakubondzi6@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) ||
   empty($_POST['subject']) ||  
   empty($_POST['message']))


$name = $_POST['name']; 
$email_address = $_POST['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 



if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "Name: $name.\n".
                    "Email: $email_address.\n".
                    "Subject: $subject.\n".
                    "Message: $message.\n";
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-handler.html');
} 



?>

