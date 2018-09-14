<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_POST['name'] != "" && $_POST['email'] != "" && $_POST['message'] != "") {
		$name = ucwords($_POST['name']);
		$email = $_POST['email'];
		$message = ucfirst($_POST['message']);
		$subject = "Avatarlife Contact Form:  $name";

		$message = "You have received a new message from your Avatarlife contact form.\n\n" . "Here are the details:\n\n<br>Name: $name\n\n<br>Email: $email\n\n<br>Message:\n$message";

		$to = "info@avatarlife.com";

		$headers = "MIME-Version: 1.0  \r\n";
		$headers .= "Content-type:text/html;charset=UTF-8  \r\n";
		$headers .= "From: <admin@innvoixtech.com> \r\n";
		$headers .= "Reply-To:admin@innvoixtech.com";

		$sendmail = mail($to, $subject, $message, $headers);

		if (!$sendmail) {
			return false;
		} else {
			return true;
		}
	} else {
		return false;
	}
} else {
	return false;
}
?>