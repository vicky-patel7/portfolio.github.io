<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'https://vicky-patel7.github.io/portfolio.github.io/';

$email_subject = "New Message";

$email_body = "User Name : $name.\n"."User Email : $visitor_email"."User Message : $message.\n";

$to = "vickykumarpatel11@gmail.com";

$headers = "From : $email_from\r\n";

$headers.="Reply-To : $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location : index.html");


?>