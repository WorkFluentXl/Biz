<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $message =$_POST['message'];
    
    $to = "kshakira556@gmail.com"; //replace with business email
    $subject = "New Training Inquiry Form Website";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Message:\n$message";

    if(mail($to, $subject, $email_body, $headers)) {
        echo "<script>alert('Thank you! Your request has been received.')</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.')</script>"
    }
}
?>