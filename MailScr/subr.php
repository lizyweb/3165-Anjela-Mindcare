<?php
$subr = $_POST['subr'];
$to = 'admin@anjelamindcare.com';
$email_subject = "Subscription Details";
$email_body = "Here are the Subscription details:\n\nSubscription Email: $subr";
$headers = "From: admin@anjelamindcare.com \n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
header('Location: http://www.anjelamindcare.com');			
?>