<?php
$name=$_POST['name'];
$visitor=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@maturskirad.com';
$email_subject='nova poruka';
$email_body="user name: $name.\n".
                "user Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                        "user message: $message.\n";
$to='berinamujan@cetvrta-gimnazija.edu.ba';
$headers="From: $email_form\r\n";
$headers .="Reply to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header ("Location: contact.html");

?>