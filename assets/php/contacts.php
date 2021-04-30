<?php
//variable setting
$User_name = $_POST['name'];
$phone = $_POST["phone"];
$user_email = $_POST["mail"];
$message = $_POST["message"];

$email_form = 'iafzalhameed@gmail.com';
$email_subject = "New Form Submission";
$email_body = "Name: $User_name. \n".
	"Phone No: $phone. \n".
	"Email Id: $user_email.\n";	;

	$to_email = "iafzalhameed@gmail.com"
		$headers = "From: $email_form \r\n";
		$headers = "Reply-To: $user-email\r\n";

$secretKey = "6LcCh78aAAAAAPTROiAy22r3FOxL_BOyO7A-qrOj";
$responseKey = $_POST['g-recaptcha-response'];
$UserIP = $_SERVER['REMOTE ADDR'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret="$secretKey&Response=$responseKey&remoteip=$UserIP";

$response = file_getcontents($url);
$response = json_decode($response);
if ($response-> success)
{
mail($to_email,$email_subject,$email_body, $headers);
echo "Message Sent Successfully"
}
else
{
echo = "<span> Invalid Captcha, Please Try Again</span>"
}
		
//check input fields
