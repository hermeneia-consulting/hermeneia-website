<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/askhpade/phpmailer/src/Exception.php';
require '/home/askhpade/phpmailer/src/PHPMailer.php';
require '/home/askhpade/phpmailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method not allowed.");
}


/* ========================================
   FORM DATA
   ======================================== */

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


/* ========================================
   SMTP
   ======================================== */

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();

    $mail->Host = 'smtp-relay.gmail.com';
    $mail->SMTPAuth = false;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;


    /* Hermeneia is the authenticated sender */

    $mail->setFrom(
        'hello@askhermeneia.com',
        'Hermeneia Website'
    );


    /* Replying to the email goes to the visitor */

    $mail->addReplyTo(
        $email,
        $name
    );


    /* Deliver contact-form messages here */

    $mail->addAddress(
        'hello@askhermeneia.com'
    );


    $mail->Subject = 'Hermeneia Contact: ' . $subject;

    $mail->Body =
        "Name: " . $name . "\n" .
        "Email: " . $email . "\n\n" .
        "Message:\n" . $message;


    $mail->send();

    header("Location: contact.html?sent=1");
    exit;


} catch (Exception $e) {

    http_response_code(500);

    echo "Message could not be sent.<br>";
    echo "Mailer error: " . htmlspecialchars($mail->ErrorInfo);
}