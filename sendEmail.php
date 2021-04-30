<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($POST['name']) && isset($POST['email'])){
  $name = $_POST ['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();
  
  //SMTP settings

  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "afzalpixel@gmail.com";
  $mail->Password = 'Afzal#@!321';
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  //email settings
  $mail->isHTML(true);
  $mail->setForm($email, $name);
  $mail->addAddress("afzalpixel@gmail.com");
  $mail->phone = ("$email ($phone)");
  $mail->message = $message;

  if($mail->send()){
      $status = "SUCCESS";
      $response = "Email has been sent"
  }
  else
  {
      $status = "Failed";
      $response = "somthing is wrong: <br>" . $mail->ErrorInfo;

  }
  exit(json_encode(array("status" => $status, "response" => $response)))
}
?>
