<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
// $to = 'tda.ingenierie@gmail.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
// $email_subject = "Tda ingenierie contact:  $name";
// $email_body = "Vous avez reçu un nouveau message à partir du formulaire de contact de votre site web.\n\n"."Voici le détails:\n\nNom: $name\n\nEmail: $email_address\n\nTelephone: $phone\n\nMessage:\n$message";
// $headers = "From: noreply@tda-ingenierie.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";   
// mail($to,$email_subject,$email_body,$headers);
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "tda-ingenierie.fr";
    $to = "tda.ingenierie@gmail.com";
    $subject = "Essai de PHP Mail";
    $message = "PHP Mail fonctionne parfaitement";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
return true;         
?>

