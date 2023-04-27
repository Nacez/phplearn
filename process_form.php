<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// process the form data here
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	// send an email
	$to = "kyej2005@gmail.com"; // replace with your own email address
	$subject = "New message from $name";
	$body = "You have received a new message from $name ($email):\n\n$message";
	$headers = "From: webmaster@example.com";

	if (mail($to, $subject, $body, $headers)) {
		echo "Thank you for your message, $name! We will get back to you as soon as possible.";
	} else {
		echo "There was a problem sending your message. Please try again later.";
	}
}
?>
