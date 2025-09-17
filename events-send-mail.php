<?php
// Enable error reporting (for dev only)
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Event configuration array
$events = [
    'saidpet' => [
        'name' => 'Saidpet Event',
        'subject' => 'New Saidpet Event Booking Received',
        'from_name' => 'Saidpet Event Booking',
        // Add event-specific details if needed
        'date' => '',
        'day' => '',
        'time' => '',
        'location' => ''
    ],
    'mahashivratri' => [
        'name' => 'Mahashivratri Ooty Event',
        'subject' => 'New Mahashivratri Ooty Booking Received',
        'from_name' => 'Mahashivratri Ooty Booking',
        // Add event-specific details if needed
        'date' => '',
        'day' => '',
        'time' => '',
        'location' => ''
    ],
    'kerala-onam' => [
        'name' => 'Kerala Onam Event',
        'subject' => 'New Kerala Onam Booking Received',
        'from_name' => 'Kerala Onam Booking',
        // Add event-specific details if needed
        'date' => '',
        'day' => '',
        'time' => '',
        'location' => ''
    ],
    'stranger-events' => [
        'name' => 'Backyard - Adyar, Chennai',
        'subject' => 'New Backyard Booking Received',
        'from_name' => 'Backyard Booking',
        'date' => 'Sep 21, 2025',
        'day' => 'Sunday',
        'time' => '5:30 PM - 8:30 PM',
        'location' => '53/23, 3rd Main Road, Gandhi Nagar, Adyar, Chennai, Tamil Nadu 600020'
    ],
    'default' => [
        'name' => 'Event',
        'subject' => 'New Event Booking Received',
        'from_name' => 'Event Booking',
        // Add event-specific details if needed
        'date' => '',
        'day' => '',
        'time' => '',
        'location' => ''
    ]
];

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $fullName = htmlspecialchars(trim($_POST['full_name'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone_number'] ?? ''));
    $dob = htmlspecialchars(trim($_POST['dob'] ?? ''));
    $quantity = (int)($_POST['selected_quantity'] ?? 1);
    $package = htmlspecialchars($_POST['selected_package'] ?? 'standard-pass');
    $basePricePerUnit = (float)($_POST['calculated_base_price'] ?? 0);
    $tax = (float)($_POST['calculated_tax'] ?? 0); // Default to 0 if not provided
    $total = (float)($_POST['calculated_total'] ?? ($basePricePerUnit * $quantity)); // Calculate if not provided
    $eventType = htmlspecialchars(trim($_POST['event_type'] ?? 'default'));

    // Get event configuration
    $eventConfig = $events[$eventType] ?? $events['default'];

    // Validate required fields
    if (empty($fullName) || empty($phone) || empty($dob)) {
        die('Full name, phone number, and date of birth are required.');
    }

    // Prepare the email
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@roamers.in';
        $mail->Password   = 'iifr konl ctis tphr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('info@roamers.in', $eventConfig['from_name']);
        $mail->addAddress('info@roamers.in', 'Admin');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $eventConfig['subject'];

        // Package display name
        $packageDisplay = str_replace(['standard-pass', 'premium-pass', 'group-pass'], ['Female', 'Male', 'Group Pass'], $package);

        $mail->Body = "
            <div style='font-family:Segoe UI,Roboto,sans-serif;max-width:480px;margin:0 auto;background:#fff;border-radius:10px;padding:32px 28px 24px 28px;box-shadow:0 2px 12px rgba(78,192,219,0.07);color:#4ec0db;'>
                <div style='text-align:center;margin-bottom:24px;'>
                    <img src='https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png' alt='Roamers Logo' style='height:48px;margin-bottom:8px;'>
                    <h2 style='margin:0;font-size:1.5em;color:#4ec0db;font-weight:700;letter-spacing:0.5px;'>New {$eventConfig['name']} Booking</h2>
                </div>
                <table style='width:100%;border-collapse:collapse;font-size:1.07em;margin-bottom:18px;'>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Event</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>{$eventConfig['name']}</td>
                    </tr>";

        // Add event details if available
        if (!empty($eventConfig['date'])) {
            $mail->Body .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Date</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>{$eventConfig['date']}</td>
                    </tr>";
        }
        if (!empty($eventConfig['day'])) {
            $mail->Body .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Day</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>{$eventConfig['day']}</td>
                    </tr>";
        }
        if (!empty($eventConfig['time'])) {
            $mail->Body .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Time</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>{$eventConfig['time']}</td>
                    </tr>";
        }
        if (!empty($eventConfig['location'])) {
            $mail->Body .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Location</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>{$eventConfig['location']}</td>
                    </tr>";
        }

        $mail->Body .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Full Name</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>{$fullName}</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Phone Number</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>{$phone}</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Date of Birth</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>{$dob}</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Package</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;text-transform:capitalize;'>{$packageDisplay}</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Quantity</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>{$quantity}</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'> Price (per unit)</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>₹" . number_format($basePricePerUnit, 2) . "</td>
                    </tr>
                </table>
                <div style='border-top:1px solid #4ec0db;padding-top:10px;text-align:right;'>
                    <span style='font-size:0.98em;color:#4ec0db;'>Event Type: <span style='color:#4ec0db;font-weight:500;'>{$eventType}</span></span>
                </div>
            </div>
        ";

        // Send email
        if ($mail->send()) {
            echo "<div style='
                max-width: 420px;
                margin: 60px auto 0 auto;
                background: #f8fff9;
                border-radius: 14px;
                box-shadow: 0 2px 16px rgba(78,192,219,0.10), 0 1.5px 8px rgba(78,192,219,0.08);
                padding: 38px 30px 30px 30px;
                text-align: center;
                font-family: Segoe UI, Roboto, sans-serif;
                color: #4ec0db;
            '>
                <img src='https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png' alt='Roamers Logo' style='height:54px;margin-bottom:18px;'>
                <h2 style='color:#4ec0db;font-size:1.45em;margin:0 0 10px 0;font-weight:700;letter-spacing:0.5px;'>Booking Confirmed!</h2>
                <p style='font-size:1.08em;color:#4ec0db;margin-bottom:18px;'>Thank you for registering for <span style='color:#4ec0db;font-weight:500;'>{$eventConfig['name']}</span> on {$eventConfig['date']} ({$eventConfig['day']}) from {$eventConfig['time']} at {$eventConfig['location']}.<br>
                We have received your booking details and sent a confirmation to our team.<br>
                <span style='color:#4ec0db;font-weight:600;'>We will contact you soon!</span></p>
                <div style='margin:18px 0 0 0;'>
                    <a href='events-sep-21.php' style='
                        display:inline-block;
                        background:#4ec0db;
                        color:#fff;
                        padding:12px 32px;
                        border-radius:30px;
                        font-size:1.08em;
                        font-weight:600;
                        text-decoration:none;
                        box-shadow:0 2px 8px rgba(78,192,219,0.10);
                        transition:background 0.2s;
                    ' onmouseover=\"this.style.background='#4ec0db'\" onmouseout=\"this.style.background='#4ec0db'\">Back to Events</a>
                </div>
            </div>";
        } else {
            echo "<div style='
                max-width: 420px;
                margin: 60px auto 0 auto;
                background: #fff6f6;
                border-radius: 14px;
                box-shadow: 0 2px 16px rgba(78,192,219,0.10), 0 1.5px 8px rgba(78,192,219,0.08);
                padding: 38px 30px 30px 30px;
                text-align: center;
                font-family: Segoe UI, Roboto, sans-serif;
                color: #4ec0db;
            '>
                <h2 style='color:#4ec0db;font-size:1.3em;margin:0 0 10px 0;font-weight:700;'>Oops! Something went wrong.</h2>
                <p style='font-size:1.08em;color:#4ec0db;margin-bottom:18px;'>We couldn't send your booking at this time.<br>
                Please try again or contact us at <a href='mailto:hello@roamers.in' style='color:#4ec0db;text-decoration:underline;'>hello@roamers.in</a>.</p>
                <div style='margin:18px 0 0 0;'>
                    <a href='events-sep-21.php' style='
                        display:inline-block;
                        background:#4ec0db;
                        color:#fff;
                        padding:12px 32px;
                        border-radius:30px;
                        font-size:1.08em;
                        font-weight:600;
                        text-decoration:none;
                        box-shadow:0 2px 8px rgba(78,192,219,0.10);
                        transition:background 0.2s;
                    ' onmouseover=\"this.style.background='#4ec0db'\" onmouseout=\"this.style.background='#4ec0db'\">Back to Events</a>
                </div>
            </div>";
        }
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If not POST, deny access
    http_response_code(403);
    echo 'Access denied.';
}
