<?php

    $emailTo = "info@shippingcompany.com";

    $subject = $_POST['subject'];

    $from = $_POST['email']; 

    $fullname = $_POST['fullname'];

    $number = $_POST['phone'];

    $message = $_POST['message'];

    $body = "Sender's full name: $fullname, sender's phone number: $number. Message: $message"; 
	
    $headers = "From: $from";

    if (mail($emailTo, $subject, $body, $headers)) {
        
        echo "The email was sent successfully";
        
    } else {
        
        echo "The email could not be sent, if you are trying to send an email from a local version of the website, this will not work, the website needs
		to be hosted on the internet for the email function to work.";
        
    }


?>


