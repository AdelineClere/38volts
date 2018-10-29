<?php
error_reporting(E_ALL);

echo "<pre>"; // va m'aider à afficher et surtout à indenter si c'est une variable conséquente 
var_dump($_POST);
echo "</pre>";
die; // va stoper la suite du script




if($_POST)
{	
  $_POST['email'] = "From: $_POST[email] \n";    
	$_POST['email'] .='Content-Type : text/html; charset="iso-8859-1"'."\n";
	$_POST['email'] .='Content-Transfer-Encoding: 8bit';


    $_POST['message'] = "Nom : " . $_POST['nom'] . "\nPrénom : " . $_POST['prenom'] . "\nemail : " . $_POST['email'] . "\ntel : " . $_POST['tel'] . "\nsujet : " . $_POST['sujet'] . "\n\nMessage : " . $_POST['message'];


	mail('a2line8@yahoo.fr', $_POST['sujet'], $_POST['message']);
	
}

?>
 