
Thanks for your message!

<?php
	$to = "c0d3n3rd@gmail.com";
	$subject = "Love's Web Firm Contact Form!";
	$body = "the user typed in: " . $_POST['email'] . '\n' . $_POST['name'] . '\n' . $_POST['subject'] . '\n' . $_POST['message'];
	mail($to, $subject, $body);
?>
