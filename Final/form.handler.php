<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message_email = $_POST['message'];

$email_from = 'caloyjimenez12@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
"User Email: $name.\n".
"User Name: $visitor_email.\n".
"User Subject: $subject.\n".
"User Message: $message.\n";

$to = 'caloyjimenez12@gmail.com';

$headers = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")

?>