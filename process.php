<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Compose the email message
    $to = "atlanta201626@gmail.com";
    $headers = "From: $email";
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Subject: $subject\n\n";
    $messageBody .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "There was an error sending your message.";
    }
} else {
    echo "Invalid request.";
}
?>
