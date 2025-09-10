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
        'from_name' => 'Saidpet Event Booking'
    ],
    'mahashivratri' => [
        'name' => 'Mahashivratri Ooty Event',
        'subject' => 'New Mahashivratri Ooty Booking Received',
        'from_name' => 'Mahashivratri Ooty Booking'
    ],
    'kerala-onam' => [
        'name' => 'Kerala Onam Event',
        'subject' => 'New Kerala Onam Booking Received',
        'from_name' => 'Kerala Onam Booking'
    ],
    'default' => [
        'name' => 'Event',
        'subject' => 'New Event Booking Received',
        'from_name' => 'Event Booking'
    ]
];

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $fullName = htmlspecialchars(trim($_POST['full_name'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone_number'] ?? ''));
    $quantity = htmlspecialchars($_POST['selected_quantity'] ?? '1');
    $package = htmlspecialchars($_POST['selected_package'] ?? 'standard-pass');
    $basePrice = htmlspecialchars($_POST['calculated_base_price'] ?? '0');
    $tax = htmlspecialchars($_POST['calculated_tax'] ?? '0');
    $total = htmlspecialchars($_POST['calculated_total'] ?? '0');
    $eventType = htmlspecialchars(trim($_POST['event_type'] ?? 'default'));

    // Get event configuration
    $eventConfig = $events[$eventType] ?? $events['default'];

    // Validate required fields
    if (empty($fullName) || empty($phone)) {
        die('Full name and phone number are required.');
    }

    // Prepare the email
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                      // Use SMTP
        $mail->Host       = 'smtp.gmail.com';               // Set SMTP server
        $mail->SMTPAuth   = true;                             // Enable SMTP auth
        $mail->Username   = 'info@roamers.in';                // SMTP username
        $mail->Password   = 'iifr konl ctis tphr';            // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Encryption
        $mail->Port       = 587;                              // TCP port

        // Recipients
        $mail->setFrom('info@roamers.in', $eventConfig['from_name']);
        $mail->addAddress('info@roamers.in', 'Admin');      // To email

        // Content
        $mail->isHTML(true);
        $mail->Subject = $eventConfig['subject'];

        $mail->Body = "
            <h2>New {$eventConfig['name']} Booking Details</h2>
            <p><strong>Event:</strong> {$eventConfig['name']}</p>
            <p><strong>Full Name:</strong> {$fullName}</p>
            <p><strong>Phone Number:</strong> {$phone}</p>
            <p><strong>Package:</strong> {$package}</p>
            <p><strong>Quantity:</strong> {$quantity}</p>
            <p><strong>Base Price:</strong> ₹{$basePrice}</p>
            <p><strong>Tax:</strong> ₹{$tax}</p>
            <p><strong>Total:</strong> ₹{$total}</p>
            <hr>
            <p><small>Event Type: {$eventType}</small></p>
        ";

        // Send email
        $mail->send();
        echo 'Success! Booking email has been sent.';
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If not POST, deny access
    http_response_code(403);
    echo 'Access denied.';
}
