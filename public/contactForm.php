<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'kaustcubssignup@gmail.com';
    $email_subject = 'New Contact';
    $email_body = "User Name: $name. \n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    
    $to = "kaustcubssignup@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");

?>