<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';  // Make sure PHPMailer is installed via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['fname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    // print_r($_POST);die();
    $mail = new PHPMailer(true);

    try {
        // Server settings
        // var_dump("321");die();
        $mail->SMTPDebug = smtp::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';        // Gmail SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'akshay@gmail.com';  // Your Gmail address
        $mail->Password   = '';     // Your app password (if using 2FA)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;                     // SMTP port for TLS

        // Recipients
        $mail->setFrom('your_email@gmail.com', 'Mailer'); // Your email address and name
        $mail->addAddress('recipient@example.com', 'Joe User'); // Recipient's email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New form submission';
        $mail->Body    = "<p><strong>Name:</strong> $name</p>
                          <p><strong>Mobile:</strong> $number</p>
                          <p><strong>Email:</strong> $email</p>";

        // Enable debugging (optional, helps troubleshoot issues)
        // $mail->SMTPDebug = 2;  // Debug level: 2 (detailed)
        // $mail->Debugoutput = 'html';  // Show debug output in HTML format

        // Send the email
        $mail->send();
        echo 'Message has been sent successfully';
    } catch (Exception $e) {
        // Catch errors and display them
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
