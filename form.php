<?php
if(!empty($_POST["send"])) {
	$email = $_POST["email"];
	$content = $_POST["message"];

	$toEmail = "ivan.filipovic233@gmail.com";
	$mailHeaders = "From: " . $email . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
	else(
		echo("Nije dobro")
	)
}
require_once "contact-view.php";
?>