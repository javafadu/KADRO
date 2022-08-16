<?php




$localhost = "localhost"; // YOUR LOCAL HOST, USUALLY localhost
$dbuser = "root"; // YOUR DATABASE USERNAME
$dbpass = ""; // YOUR DATABASE PASSWORD
$dbtable = "kadroyedek";// THE NAME OF YOUR DATABASE , THIS SHOULD HAVE BEEN SET WHEN YOU 


$sendersName = "Yonetici"; // CHANGE THIS TO YOUR OWN NAME
$sendersEmail = "info@thy.com"; // YOUR WEBSITE EMAIL ADDRESS
$sendersComment = "Giris Yaptiniz"; // THE COMMENT TO YOUR NEW SUBCRIBER
$serverFolder = "IDARI"; // THE FOLDER IN WHICH YOU ARE RUNNING THIS SCRIPT
$loginPage = "login.php"; // THE PAGE YOU LINK TO FROM THE NEW USERS EMAIL THAT WAS SENT ON SIGN UP, NORMALLY login.php

$emailSubject = "Email to new member"; // THE EMAIL SUBJECT LINE


$con = mysql_connect("$localhost","$dbuser","$dbpass")

        or die("Error Could not connect");

$db = mysql_select_db("$dbtable", $con)
		or die("Error Could not select database");
?>