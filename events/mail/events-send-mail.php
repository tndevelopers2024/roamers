<?php
// Enable error reporting (for dev only, comment these lines out in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files if not already loaded
// Include PHPMailer files if not already loaded
require_once '../../PHPMailer/src/Exception.php';
require_once '../../PHPMailer/src/PHPMailer.php';
require_once '../../PHPMailer/src/SMTP.php';

// Event configuration array
$events = [

    'c&c-feb-28' => [
        'name' => 'C&C - Feb 28',
        'subject' => 'New C&C Booking Received',
        'from_name' => 'C&C Booking',
        'date' => 'Feb 28, 2026',
        'day' => 'Sunday',
        'time' => '6:00 PM - 7:00 PM',
        'location' => 'Chennai, Tamil Nadu'
    ],

    'stranger-events-sep-21' => [
        'name' => 'Backyard - Adyar, Chennai',
        'subject' => 'New Backyard Booking Received',
        'from_name' => 'Backyard Booking',
        'date' => 'Sep 21, 2025',
        'day' => 'Sunday',
        'time' => '5:30 PM - 8:30 PM',
        'location' => '53/23, 3rd Main Road, Gandhi Nagar, Adyar, Chennai, Tamil Nadu 600020'
    ],
    'stranger-events-nov-1' => [
        'name' => 'Backyard - Adyar, Chennai',
        'subject' => 'New Backyard Booking Received',
        'from_name' => 'Backyard Booking',
        'date' => 'Nov 1, 2025',
        'day' => 'Saturday',
        'time' => '7:00 PM - 10:00 PM',
        'location' => '53/23, 3rd Main Road, Gandhi Nagar, Adyar, Chennai, Tamil Nadu 600020'
    ],
    'pottery-workshop-edition-nov-26' => [
        'name' => 'Pottery Workshop Edition',
        'subject' => 'Pottery Workshop Edition Booking Received',
        'from_name' => 'Pottery Workshop Edition Booking',
        'date' => 'Nov 26, 2025',
        'day' => 'Wednesday',
        'time' => '6:00 PM - 9:00 PM',
        'location' => '53/23, 3rd Main Road, Gandhi Nagar, Adyar, Chennai, Tamil Nadu 600020'
    ],
    'default' => [
        'name' => 'Event',
        'subject' => 'New Event Booking Received',
        'from_name' => 'Event Booking',
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
    $quantity = isset($_POST['selected_quantity']) ? (int) $_POST['selected_quantity'] : 1;
    $package = htmlspecialchars($_POST['selected_package'] ?? 'standard-pass');
    $basePricePerUnit = isset($_POST['calculated_base_price']) ? (float) $_POST['calculated_base_price'] : 0.0;
    $tax = isset($_POST['calculated_tax']) ? (float) $_POST['calculated_tax'] : 0.0;
    $total = isset($_POST['calculated_total']) ? (float) $_POST['calculated_total'] : ($basePricePerUnit * $quantity);
    $eventTypeRaw = trim($_POST['event_type'] ?? 'default');
    $eventType = htmlspecialchars($eventTypeRaw);
    $redirectUrl = htmlspecialchars(trim($_POST['redirect_url'] ?? 'events-sep-21.php'));

    // Get event configuration
    $eventConfig = $events[$eventTypeRaw] ?? $events['default'];

    // Validate required fields
    if (empty($fullName) || empty($phone) || empty($dob)) {
        http_response_code(400);
        echo "<div style='
            max-width: 420px;
            margin: 60px auto 0 auto;
            background: #fff6f6;
            border-radius: 14px;
            box-shadow: 0 2px 16px rgba(78,192,219,0.10), 0 1.5px 8px rgba(78,192,219,0.08);
            padding: 38px 30px 30px 30px;
            text-align: center;
            color: #4ec0db;
        '>
            <h2 style='color:#4ec0db;font-size:1.3em;margin:0 0 10px 0;font-weight:700;'>Required Information Missing</h2>
            <p style='font-size:1.08em;color:#4ec0db;margin-bottom:18px;'>Full name, phone number, and date of birth are required.<br>
            Please go back and complete all fields.</p>
            <div style='margin:18px 0 0 0;'>
                <a href='" . $redirectUrl . "' style='
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
        exit;
    }

    // Prepare the email
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@roamers.in';
        $mail->Password = 'iifr konl ctis tphr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('info@roamers.in', $eventConfig['from_name']);
        $mail->addAddress('info@roamers.in', 'Admin');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $eventConfig['subject'];

        // Package display name fix
        $packageDisplayMap = [
            'standard-pass' => 'Female',
            'premium-pass' => 'Male',
            'group-pass' => 'Group Pass'
        ];
        $packageDisplay = $packageDisplayMap[$package] ?? htmlspecialchars($package);

        // Build mail body safely
        $mailBody = "
            <div style='max-width:480px;margin:0 auto;background:#fff;border-radius:10px;padding:32px 28px 24px 28px;box-shadow:0 2px 12px rgba(78,192,219,0.07);color:#4ec0db;'>
                <div style='text-align:center;margin-bottom:24px;'>
                    <img src='https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png' alt='Roamers Logo' style='height:48px;margin-bottom:8px;'>
                    <h2 style='margin:0;font-size:1.5em;color:#4ec0db;font-weight:700;letter-spacing:0.5px;'>New " . htmlspecialchars($eventType) . " Booking</h2>
                </div>
                <table style='width:100%;border-collapse:collapse;font-size:1.07em;margin-bottom:18px;'>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Full Name</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>" . htmlspecialchars($fullName) . "</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Event Location</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>" . htmlspecialchars($eventConfig['name']) . "</td>
                    </tr>";
        // Add event details if available
        if (!empty($eventConfig['date'])) {
            $mailBody .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Date</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>" . htmlspecialchars($eventConfig['date']) . "</td>
                    </tr>";
        }
        if (!empty($eventConfig['day'])) {
            $mailBody .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Day</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>" . htmlspecialchars($eventConfig['day']) . "</td>
                    </tr>";
        }
        if (!empty($eventConfig['time'])) {
            $mailBody .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Time</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>" . htmlspecialchars($eventConfig['time']) . "</td>
                    </tr>";
        }
        if (!empty($eventConfig['location'])) {
            $mailBody .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Location</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>" . htmlspecialchars($eventConfig['location']) . "</td>
                    </tr>";
        }
        $mailBody .= "
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Phone Number</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>" . htmlspecialchars($phone) . "</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Date of Birth</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>" . htmlspecialchars($dob) . "</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Package</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;text-transform:capitalize;'>" . htmlspecialchars($packageDisplay) . "</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Quantity</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>" . (int) $quantity . "</td>
                    </tr>
                    <tr>
                        <td style='padding:7px 0;color:#4ec0db;'>Price (per unit)</td>
                        <td style='padding:7px 0;font-weight:500;color:#4ec0db;text-align:right;'>₹" . number_format($basePricePerUnit, 2) . "</td>
                    </tr>
                </table>
                <div style='border-top:1px solid #4ec0db;padding-top:10px;text-align:right;'>
                    <span style='font-size:0.98em;color:#4ec0db;'>Event Type: <span style='color:#4ec0db;font-weight:500;'>" . htmlspecialchars($eventType) . "</span></span>
                </div>
            </div>
        ";
        $mail->Body = $mailBody;

        // Send email
        if ($mail->send()) {
            $eventDateStr = !empty($eventConfig['date']) ? $eventConfig['date'] : '';
            $eventDayStr = !empty($eventConfig['day']) ? " ({$eventConfig['day']})" : '';
            $eventTimeStr = !empty($eventConfig['time']) ? " from {$eventConfig['time']}" : '';
            $eventLocStr = !empty($eventConfig['location']) ? " at {$eventConfig['location']}" : '';
            $displayEvent = htmlspecialchars($eventConfig['name']);
            echo "<div style='
                max-width: 420px;
                margin: 60px auto 0 auto;
                background: #f8fff9;
                border-radius: 14px;
                box-shadow: 0 2px 16px rgba(78,192,219,0.10), 0 1.5px 8px rgba(78,192,219,0.08);
                padding: 38px 30px 30px 30px;
                text-align: center;
                color: #4ec0db;
            '>
                <img src='https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png' alt='Roamers Logo' style='height:54px;margin-bottom:18px;'>
                <h2 style='color:#4ec0db;font-size:1.45em;margin:0 0 10px 0;font-weight:700;letter-spacing:0.5px;'>Booking Confirmed!</h2>
                <p style='font-size:1.08em;color:#4ec0db;margin-bottom:18px;'>
                    Thank you for registering for <span style='color:#4ec0db;font-weight:500;'>{$displayEvent}</span>";
            if ($eventLocStr) {
                echo " on" . ($eventDateStr ? " {$eventDateStr}" : "")
                    . ($eventDayStr ? "{$eventDayStr}" : "")
                    . ($eventTimeStr ? "{$eventTimeStr}" : "")
                    . ($eventLocStr ? "{$eventLocStr}" : "");
            }
            echo ".<br>
                <br>
                <span style='color:#4ec0db;font-weight:600;'>We will contact you soon!</span></p>
                <div style='margin:18px 0 0 0;'>
                    <a href='" . $redirectUrl . "' style='
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
                color: #4ec0db;
            '>
                <h2 style='color:#4ec0db;font-size:1.3em;margin:0 0 10px 0;font-weight:700;'>Oops! Something went wrong.</h2>
                <p style='font-size:1.08em;color:#4ec0db;margin-bottom:18px;'>We couldn't send your booking at this time.<br>
                Please try again or contact us at <a href='mailto:hello@roamers.in' style='color:#4ec0db;text-decoration:underline;'>hello@roamers.in</a>.</p>
                <div style='margin:18px 0 0 0;'>
                    <a href='" . $redirectUrl . "' style='
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
        echo "<div style='
            max-width: 420px;
            margin: 60px auto 0 auto;
            background: #fff6f6;
            border-radius: 14px;
            box-shadow: 0 2px 16px rgba(78,192,219,0.10), 0 1.5px 8px rgba(78,192,219,0.08);
            padding: 38px 30px 30px 30px;
            text-align: center;
            color: #4ec0db;
        '>
            <h2 style='color:#4ec0db;font-size:1.3em;margin:0 0 10px 0;font-weight:700;'>Oops! Something went wrong.</h2>
            <p style='font-size:1.08em;color:#4ec0db;margin-bottom:18px;'>Mailer Error: " . htmlspecialchars($mail->ErrorInfo ?: $e->getMessage()) . "<br>
            Please try again or contact us at <a href='mailto:hello@roamers.in' style='color:#4ec0db;text-decoration:underline;'>hello@roamers.in</a>.</p>
            <div style='margin:18px 0 0 0;'>
                <a href='" . $redirectUrl . "' style='
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
} else {
    // If not POST, deny access
    http_response_code(403);
    echo 'Access denied.';
}
