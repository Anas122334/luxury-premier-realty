<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values of the form fields
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $agent = $_POST['agent'];
    $address = $_POST['address'];

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "your_email@gmail.com";
        $mail->Password = "your_email_password";
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('anasrasheed161@gmail.com', 'Your Name');
        $mail->addAddress($email); // Use the entered email address as the recipient
        $mail->isHTML(true);
        $mail->Subject = 'Subject';
        $mail->Body = 'First Name: ' . $first_name . '<br>';
        $mail->Body .= 'Last Name: ' . $last_name . '<br>';
        $mail->Body .= 'Email: ' . $email . '<br>';
        $mail->Body .= 'Phone Number: ' . $phone_number . '<br>';
        $mail->Body .= 'Agent: ' . $agent . '<br>';
        $mail->Body .= 'What are you interested in today? ' . $address . '<br>';
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();

        header('Location: index.php');
        exit; // Make sure to exit after redirection

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
        header('Location: index.php');
        exit; // Make sure to exit after redirection
    }
}
