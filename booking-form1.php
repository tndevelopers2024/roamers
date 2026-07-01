<?php
session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/security.php';
if (!empty($_POST)) { $_POST = clean_input($_POST); }
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit-btn'])) {
    $fullname = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $sharing = htmlspecialchars($_POST['sharing']);
    $date = htmlspecialchars($_POST['date']);
    $personCount = htmlspecialchars($_POST['person-count']);
    $address1 = htmlspecialchars($_POST['address1']);
    $address2 = htmlspecialchars($_POST['address2']);
    $city = htmlspecialchars($_POST['city']);
    $postCode = htmlspecialchars($_POST['post-code']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "Invalid email address.";
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit(0);
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Server Settings
        $mail->isSMTP();
        $mail->Host = $smtp_configs['booking']['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_configs['booking']['user']; // Use environment variables
        $mail->Password = $smtp_configs['booking']['pass'];   // NEVER expose credentials directly!
        $mail->SMTPSecure = $smtp_configs['booking']['secure'];
        $mail->Port = $smtp_configs['booking']['port'];

        // Email Headers
        $mail->setFrom('info@roamers.in', 'Contact Form');
        $mail->addAddress('info@roamers.in'); // Receiver Email

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <p><strong>Name:</strong> $fullname</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone Number:</strong> $phone</p>
            <p><strong>Date of Birth:</strong> $dob</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Sharing Type:</strong> $sharing</p>
            <p><strong>Date:</strong> $date</p>
            <p><strong>Person Count:</strong> $personCount</p>
            <p><strong>Address:</strong> $address1 ,$address2, $city, $postCode</p>
        ";

        if ($mail->send()) {
            $_SESSION['status'] = "Thank you for contacting us!";
        } else {
            $_SESSION['status'] = "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
        }

        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit(0);

    } catch (Exception $e) {
        $_SESSION['status'] = "Message could not be sent. Error: " . $mail->ErrorInfo;
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit(0);
    }
} else {
    header("Location: booking-form.php");
    exit(0);
}
?>
