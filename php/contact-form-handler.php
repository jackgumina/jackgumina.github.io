<?php

    $name = $POST['name'];
    $visitor_email = $POST['email'];
    $message = $POST

    $email_from = 'jackgumina@gmail.com';

    $email_subject = "New Portfolio Contact"

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                      "User Message: $message.\n";

    $to = "jackgumina@gmail.com"
    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>
