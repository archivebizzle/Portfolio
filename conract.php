<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can customize the recipient email address
    $to = "your.email@example.com";
    $subject = "New Contact Form Submission";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Compose the email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_body, $headers);

    // You can customize the redirect URL after successful submission
    header("Location: thank-you.html");
    exit();
}
?>
