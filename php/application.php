<?php

$EmailFrom = "sam@siliconstockholm.com";
$EmailTo = "sam@siliconstockholm.com";
$subject = "Contact from your site";

$name = Trim(stripslashes($_POST['firstname'])); 
$name .= " ";
$name .= Trim(stripslashes($_POST['lastname']));

$email = Trim(stripslashes($_POST['email'])); 

$message = "Three Reasons why you're awesome: ";
$message .=Trim(stripslashes($_POST['app_awesome'])); 
$message .= "\n\n";

$message .= "Any Technology: ";
$message .= Trim(stripslashes($_POST['app_technology'])); 
$message .= "\n\n";

$message .= "Programming Background: ";
$message .= Trim(stripslashes($_POST['app_background'])); 
$message .= "\n\n";

$message .= "Woman : ";
$message .= Trim(stripslashes($_POST['app_woman'])); 

// prepare email body text
$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n";
$body .= "Email: ";
$body .= $email;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";

// send email 
$success = mail($EmailTo, $subject, $body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){	
header("Location: ../success.html");
}
else{
header("Location: ../error.html");
}
?>