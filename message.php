<?php

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//require 'phpmailer/src/Exception.php';
//require 'phpmailer/src/PHPMailer.php';
//require 'phpmailer/src/SMTP.php';

 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $website = $_POST['website'];
 $message = $_POST['message'];

 //if(isset($_POST["Send message"])){

 //$mail = 'new PHPMailer(true)';

  //$mail->isSMTP();
  //$mail->Host = 'smtp.gmail.com';
  //$mail->SMTPAuth = true;
  //$mail->Username = 'omondianthony02@gmail.com';
  //$mail->password = 'rfln ypwr zryg qdob';
  //$mail->SMTPSecure = 'ssl';
 // $mail->port = 465;
 
 


 if(!empty($email) && !empty($message)){
if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //if user entered email is valid
$receiver = "ochienganthony130@gmail.com";
$subject = "From: $name <$email>";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards, \n$name";
$sender = "From: $email";
if($mail($receiver, $subject, $body, $sender)){
  echo"Your message has been sent";
}
else{
  echo"sorry, failed to send your message";
}
}
else{
  echo"Enter a valid email address!";
}
 }
 else{
  echo"Please fill in all fields!";
 }
?> 