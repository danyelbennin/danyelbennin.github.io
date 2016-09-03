<?php
	  
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
		$phone= $_POST['phone'];
		$message= $_POST['message'];
	// create email body and send it	
	$to = 'danyelbennin@yahoo.com'; // Email will be sent to thsi email Address
	$email_subject = "Email From Website";
	$email_body = "You have received a new message from your website. \n\n".
					  "  \n First Name: $name \n ".
					    "  \n Surname  : $surname \n ".
						  "  \n Phone: $phone \n ".
						    "  \n Message: $Message \n ".
					  "Email: $email  \n";
	$headers = "From: ".$email."\n";
	$headers .= "Reply-To: $email";	
	mail($to,$email_subject,$email_body,$headers);
	$url = explode('?', $_SERVER['HTTP_REFERER']);
            header('Location:' . $url[0]);
	 	
?>