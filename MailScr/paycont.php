<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	echo json_encode(array('error'=>'true'));
	return false;
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$Phone = $_POST['Phone'];
$Adress = $_POST['Adress'];
$CVC = $_POST['CVC'];
$Amount = $_POST['Amount'];
$to = 'admin@anjelamindcare.com';
$email_subject = "Donation Details";
$email_body = "You have received a new message from your website Donation form.\n\n"."Here are the Donation details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $Phone\n\nAdress: $Adress\n\nCVC: $CVC\n\nAmount: $Amount";
$headers = "From: admin@anjelamindcare.com \n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
header('Location: https://www.anjelamindcare.com/');			
?>