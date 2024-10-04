
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "dvidhyg@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent!";
    } else {
        echo "Failed to send the message.";
    }
} else {
    echo "Invalid request method.";
}
?>
