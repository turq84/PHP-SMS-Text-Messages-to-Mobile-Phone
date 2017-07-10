<?php
	$to = "5555555555@vtext.com";  //receiver phone number. Example phone number for verizon phone number (vtext)
	$from = "your_email@yourdomain.com";  //established email on webserver
	$message = "This is a text message\nNew line...";  //static message for user
	$headers = "From: $from\n";
	mail($to, '', $message, $headers);
?>