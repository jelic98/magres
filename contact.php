<?php
	if(isset($_POST['email']) && isset($_POST['message'])) {
		$email = $_POST['email'];	
		$message = $_POST['message'];	
		
		$receiver = "pedja1989hotmail.com";
		$subject = "[KONTAKT] - Magres";
		$headers = "From: " . $email . "\r\n";
		$headers .= "To: " . $receiver . "\r\n";

		mail($receiver, $subject, $message, $headers);
	}

	header("Location: index.html");
?>
