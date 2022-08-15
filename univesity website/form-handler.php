<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
 $email_from='info@yourwebsite.com';
$emil_subject='New Form Submission';
$emial_body="User Name: $name.\n". 
            "User Email: $visitor_email.\n". 
            "Subject:$subject.\n".
            "User Message: $message.\n";
$to='avinash6252@gmail.com';
$headers="From: $email_from\r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$emil_subject,$emial_body,$headers)
header("Location: contact.html");
?>