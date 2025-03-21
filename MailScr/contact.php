<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	echo json_encode(array('error'=>'true'));
	return false;
}
$name = $_POST['name'];
$name2 = $_POST['name2'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$CVC = $_POST['CVC'];
$to = 'admin@anjelamindcare.com';
$email_subject = "Contact Details";
$email_body = "Here are the Contact details:\n\nName: $name\n\nname2: $name2\n\nEmail: $email_address\n\nsubject: $subject\n\nCVC: $CVC";
$headers = "From: admin@anjelamindcare.com \n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
header('Location: https://www.anjelamindcare.com/');			
?>