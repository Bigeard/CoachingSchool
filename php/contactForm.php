<?php


if(isset($_POST['submit'])
{
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$objet = $_POST['objet'];
	$message = $_POST['message'];

//    echo $lname;
//    echo $fname;
//    echo $email;
//    echo $tel;
//    echo $objet;
//    echo $message;

	$mailTo = "cronoses.b@gmail.com";
	$headers = "* Site Sophie Roussel * From: ".$email;
	$txt = "Message de ".$lname." ".$fname."\n\n".$message"\n".$tel;

	mail($mailTo, $objet, $txt, $headers);
//    header("Location: contactFrom.php?mailsend");
}