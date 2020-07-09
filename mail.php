
Thanks for your message!

<?php
	$to = "c0d3n3rd@gmail.com";
	$subject = "Love's Web Firm Contact Form!";
	$body = "the user typed in: " . $_POST['email'];
  $body = "The users name is; " . $_POST['name'];
  $body = "The users subject is; " . $_POST['subject'];
  $body = "The users message is; " . $_POST['message'];
	mail($to, $subject, $body);
?>
