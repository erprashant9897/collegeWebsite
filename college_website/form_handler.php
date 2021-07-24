<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from = 'info@domain_name';

$email_subject = 'New Form Submission';

$email_body = "User Name:  $name. \n".
                "User Email: $visitor_email.\n".
                   "Subject: $subject.\n".
                     "User Message: $message.\n";

$to = prashantkhade41@gmail.com;

$headrers = "From: $email_from \r\n";

$headrers .= "Reply-To $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headrers);

header("Location: contact.html");
?>