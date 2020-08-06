<?php
$to_email = "ranjitmandale176@gmail.com";
$subject = "order details";
$body = "Hi,this is my order ";
$headers = "From:reshmanikam1998@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}


