<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/security.php';
if (!empty($_POST)) { $_POST = clean_input($_POST); }
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name         = $_POST['name'];
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $dob          = $_POST['dob'];
    $gender       = $_POST['gender'];
    $date         = $_POST['date'];
    $sharing      = $_POST['sharing'];
    $person_count = $_POST['person-count'];
    $pickup       = $_POST['pickup'];
    $address1     = $_POST['address1'];
    $address2     = $_POST['address2'];
    $city         = $_POST['city'];
    $postcode     = $_POST['post-code'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $smtp_configs['default']['host'];
        $mail->SMTPAuth   = true;
        $mail->Username = $smtp_configs['default']['user'];
        $mail->Password = $smtp_configs['default']['pass']; // App password
        $mail->SMTPSecure = $smtp_configs['default']['secure'];
        $mail->Port = $smtp_configs['default']['port'];

        $mail->setFrom('info@roamers.in', 'Booking Form');
        $mail->addAddress('info@roamers.in');

        $mail->isHTML(true);
        $mail->Subject = 'New Valley of Flowers Booking Submission';
        $mail->AddEmbeddedImage('assets/img/valley-of-flowers/valley-bg.jpg', 'valleyImage');

        $mail->Body = "
          <h2 style='color: #4ec0db; text-align: center;'>Valley of Flowers <br> $date</h2>

          <center>
            <img src='cid:valleyImage' alt='Valley Image' style='width:400px; max-width:400px; height:auto; margin-bottom:20px;' />
          </center>
            <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>
                <tr><th align='left'>Name</th><td>$name</td></tr>
                <tr><th align='left'>Email</th><td>$email</td></tr>
                <tr><th align='left'>Phone</th><td>$phone</td></tr>
                <tr><th align='left'>Date of Birth</th><td>$dob</td></tr>
                <tr><th align='left'>Gender</th><td>$gender</td></tr>
                <tr><th align='left'>Travel Date</th><td>$date</td></tr>
                <tr><th align='left'>Travel Date</th><td>$sharing</td></tr>
                <tr><th align='left'>No. of Travellers</th><td>$person_count</td></tr>
                <tr><th align='left'>Pickup Location</th><td>$pickup</td></tr>
                <tr><th align='left'>Address 1</th><td>$address1</td></tr>
                <tr><th align='left'>Address 2</th><td>$address2</td></tr>
                <tr><th align='left'>City</th><td>$city</td></tr>
                <tr><th align='left'>Post Code</th><td>$postcode</td></tr>
            </table>
        ";



        $mail->send();
        echo "<script>alert('Booking successful! We will contact you soon.'); window.location.href = 'ooty-booking-form.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Mailer Error: {$mail->ErrorInfo}');</script>";
    }
} else {
    echo "Invalid Request.";
}
?>
