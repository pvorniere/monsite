<?php

use PHPMailer\PHPMailer\PHPMailer ;
if(isset($_POST['name']) && isset($_POST['email'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $sujet=$_POST['sujet'];



require_once "PHPMailer\PHPMailer.php";
require_once "PHPMailer\STMP.php" ;
require_once "PHPMailer\Exception.php"

$mail= new PHPMailer();

//stmp settings
$mail -> isSTMP();
$mail ->Host = "stmp.gmail.com";
$mail -> STMPAuth ="true";
$mail -> Username = "vorniere.paul@gmail.com";
$mail -> Password = "ups3prtm";
$mail -> Port = 465 ;
$mail -> STMPSecure = "ssl"


$mail ->isHTML(true);
$mail ->setFrom($email,$name);
$mail ->Addadress("vorniere.paul@gmail.com");
$mail -> Sujet = ($email($sujet));
$mail ->Message = $message;

if($mail->send()){
  $status= "success";
  $response="Email Envoyé !" ;
}
else
{
  $status= "fail"
  $response= "Il y a un probleme votre mail n'a pas était envoyé". $mail->ErrorInfo;
}
exit(json_encode(array("status" => $status, "response" => $response)));
}

?>
