<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'new Form Submission';

$email_body = "UserName : $name.\n".
"User Email: $visitor_email.\n". 
"Subject: $subject.\n". 
"User Message: $message.\n";

$to = 'prithvitech9098.com'

$headers = "From: $email_form \r\n";
$headers = "Reply-To: $email_form \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>