<?php
//variable setting
$name = $_REQUEST["Name"]
$email = $_REQUEST["Email"]
$message = $_REQUEST["Message"]

//check input fields
if (empty($name)|| empty($email) || empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("iafzalhameed@gmail.com", "Afzal Portfolio", $message, "Form: $name < $email>");
	echo "<script type='text/javascript'>alert('your message has been sent');
	window.history.log(-1);
	</script>";
?>