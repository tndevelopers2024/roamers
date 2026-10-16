<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $date = $_POST['date'] ?? 'Christmas & New Year Special Departure';
    $sharing = $_POST['sharing'] ?? 'Tempo Traveller (7 Adults Group)';
    $person_count = $_POST['person-count'] ?? '7';
    $pickup = $_POST['pickup'] ?? 'Guwahati';
    $address1 = $_POST['address1'] ?? '';
    $address2 = $_POST['address2'] ?? '';
    $city = $_POST['city'] ?? '';
    $postcode = $_POST['post-code'] ?? '';

    // Log to local CSV backup
    $local_file = 'enquiries_local_copy.csv';
    $is_new = !file_exists($local_file) || filesize($local_file) == 0;
    $fp = fopen($local_file, 'a');
    if ($fp) {
        if ($is_new) {
            fputcsv($fp, ['Date', 'Name', 'Email', 'Phone', 'Destination', 'Pax', 'Trip Type', 'Month', 'Message']);
        }
        fputcsv($fp, [
            date('Y-m-d H:i:s'),
            $name,
            $email,
            $phone,
            'Tawang with Sangti Valley (Christmas & New Year Special)',
            $person_count,
            'Festive Departure (₹24,000/person)',
            'December',
            "Pickup: $pickup | Sharing: $sharing | DOB: $dob | Address: $address1, $city"
        ]);
        fclose($fp);
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@roamers.in';
        $mail->Password = 'iifr konl ctis tphr'; // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('info@roamers.in', 'Roamers Booking Form');
        $mail->addAddress('info@roamers.in');

        $mail->isHTML(true);
        $mail->Subject = 'TAWANG WITH SANGTI VALLEY - CHRISTMAS & NEW YEAR BOOKING';

        $mail->Body = "
        <div style='max-width: 600px; margin: 30px auto; background: #fff; border-radius: 18px; box-shadow: 0 6px 32px rgba(0,0,0,0.13); overflow: hidden; border: 1px solid #e0e7ef; font-family: sans-serif;'>
            <div style='background: linear-gradient(90deg, #e63946 0%, #4ec0db 100%); padding: 30px 20px; text-align: center; color: #fff;'>
                <h2 style='margin: 0 0 8px 0; font-size: 24px; font-weight: 700;'>🎅 Tawang with Sangti Valley</h2>
                <p style='margin: 0; font-size: 15px; opacity: 0.95;'>Christmas &amp; New Year Special Booking (7D/6N)</p>
                <div style='margin-top: 10px; font-size: 13px; background: rgba(255,255,255,0.25); display: inline-block; padding: 4px 14px; border-radius: 20px;'>
                    Vehicle: Tempo Traveller &bull; Approx. ₹24,000/- Per Person
                </div>
            </div>
            <div style='padding: 24px; background: #fdfdfd;'>
                <table style='width:100%; border-collapse:collapse; font-size: 14px;'>
                    <tr><td style='padding:10px; font-weight:600; width:35%; border-bottom:1px solid #eee;'>Full Name:</td><td style='padding:10px; border-bottom:1px solid #eee;'>$name</td></tr>
                    <tr><td style='padding:10px; font-weight:600; border-bottom:1px solid #eee;'>Email:</td><td style='padding:10px; border-bottom:1px solid #eee;'>$email</td></tr>
                    <tr><td style='padding:10px; font-weight:600; border-bottom:1px solid #eee;'>Phone:</td><td style='padding:10px; border-bottom:1px solid #eee;'>$phone</td></tr>
                    <tr><td style='padding:10px; font-weight:600; border-bottom:1px solid #eee;'>D.O.B:</td><td style='padding:10px; border-bottom:1px solid #eee;'>$dob</td></tr>
                    <tr><td style='padding:10px; font-weight:600; border-bottom:1px solid #eee;'>Gender:</td><td style='padding:10px; border-bottom:1px solid #eee;'>$gender</td></tr>
                    <tr><td style='padding:10px; font-weight:600; border-bottom:1px solid #eee;'>Travellers Count:</td><td style='padding:10px; border-bottom:1px solid #eee;'>$person_count</td></tr>
                    <tr><td style='padding:10px; font-weight:600; border-bottom:1px solid #eee;'>Pickup Point:</td><td style='padding:10px; border-bottom:1px solid #eee;'>$pickup</td></tr>
                    <tr><td style='padding:10px; font-weight:600; border-bottom:1px solid #eee;'>City / Address:</td><td style='padding:10px; border-bottom:1px solid #eee;'>$address1, $city $postcode</td></tr>
                </table>
            </div>
        </div>";

        $mail->send();
    } catch (Exception $e) {
        // Mail fail silent or logged
    }

    header("Location: payment-page.php");
    exit();
} else {
    header("Location: tawang-christmas&newyear.php");
    exit();
}
?>
