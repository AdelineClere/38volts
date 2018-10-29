<?php
error_reporting(E_ALL);

echo "<pre>"; // va m'aider à afficher et surtout à indenter si c'est une variable conséquente 
var_dump($_POST);
echo "</pre>";
die;

$emailFrom = $_POST['email']; 
$emailTo = "a2line8@yahoo.fr";
$prenom = $_POST['prenom'];
$nom = $_POST['nom']; 
$email = $_POST['email'];
$subject = "sujet";
$message = $_POST['message']; 
 
// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}
 
// mise en form mail
$body = "";
$body .= "Prenom: ";
$body .= $Prenom;
$body .= "\n";
$body .= "Nom: ";
$body .= $Nom;
$body .= "\n";
$body .= "Email: ";
$body .= $Email;
$body .= "\n";
$body .= "Sujet: ";
$body .= $Sujet;
$body .= "\n";
$body .= "Message: ";
$body .= $Message;
$body .= "\n";
 
// envoi email 
$success = mail($emailTo, $subject, $body, "From: <$emailFrom>");
 
// message success-error
if ($success){
  echo "Votre message à bien été envoyé.";
}
else{
  echo "Une erreur s'est produite à l'envoi de votre message.";
}

 ?>
 