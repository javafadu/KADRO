<?php


include "config.php";

// DO NOT EDIT BELOW THIS LINE, UNLESS YOU KNOW WHAT YOU ARE DOING
if ($username == "" or $userpass == "" or $useremail == ""){$msg3=true;}

$email = $useremail; 

if (!isset($useremail)) 
echo "Error, Please re-send $username" ; 

$todayis = date("l, F j, Y, g:i a") ;

$subject = $emailSubject;

$message = " $todayis [EST] \n

From: $sendersName ($sendersEmail)\n
Comment: $sendersComment \n
You are now registered as a member you can now login ($serverFolder$loginPage)\n
This email was sent by an auto responder, you cannot reply to this email.

";

$from = "From: $sendersEmail";

if ($email != "") 
mail($email, $subject, $message, $from);

?>