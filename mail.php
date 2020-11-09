<?php
$msg = "Nom:\t $nom \n";
$msg .= "E-Mail:\t $email \n";
$msg .= "Message:\t $message \n\n";
//Pourait continuer ainsi jusqu'à la fin du formulaire

$recipient = "vorniere.paul@gmail.com";
$subject = "Formulaire";

$mailheaders = "From: Mon test de formulaire<> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";
?>
