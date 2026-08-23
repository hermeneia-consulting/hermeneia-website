<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method not allowed.");
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $subject === "" || $message === "") {
    exit("Please complete all fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Please enter a valid email address.");
}

$to = "hello@askhermeneia.com";

$email_subject = "Hermeneia Contact: " . $subject;

$email_body =
    "Name: " . $name . "\n" .
    "Email: " . $email . "\n\n" .
    "Message:\n" . $message . "\n";

$headers =
    "From: hello@askhermeneia.com\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $email_subject, $email_body, $headers)) {
    header("Location: contact.html?sent=1");
    exit;
}

http_response_code(500);
echo "Sorry, your message could not be sent.";