<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "your.email@example.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you, your message has been sent!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
