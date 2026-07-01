<?php
/**
 * Diagnostic tool to check SMTP mail sending.
 */

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

header('Content-Type: text/plain');

echo "=== ROAMERS MAIL DIAGNOSTIC SYSTEM ===\n\n";

global $smtp_configs;

foreach ($smtp_configs as $name => $cfg) {
    echo "--------------------------------------------------\n";
    echo "Testing configuration: '$name'\n";
    echo "Host: {$cfg['host']}\n";
    echo "Port: {$cfg['port']}\n";
    echo "Secure: {$cfg['secure']}\n";
    echo "User: {$cfg['user']}\n";
    echo "Pass: " . substr($cfg['pass'], 0, 4) . " *** " . substr($cfg['pass'], -4) . "\n";
    echo "--------------------------------------------------\n";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $cfg['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $cfg['user'];
        $mail->Password = $cfg['pass'];
        $mail->SMTPSecure = $cfg['secure'];
        $mail->Port = $cfg['port'];

        // Output SMTP transaction logs directly
        $mail->SMTPDebug = 3;
        $mail->Debugoutput = function($str, $level) {
            echo "SMTP: $str\n";
        };

        // Recipient / Sender
        $mail->setFrom($cfg['user'], 'Diagnostics ' . $cfg['from_name']);
        // Send a test email to the user account itself
        $mail->addAddress($cfg['user']);

        $mail->isHTML(true);
        $mail->Subject = 'ROAMERS DIAGNOSTICS TEST EMAIL';
        $mail->Body    = 'This is a test email sent during diagnostics check.';

        echo "Attempting to send mail...\n";
        $mail->send();
        echo "SUCCESS: Email sent successfully for configuration '$name'!\n";

    } catch (Exception $e) {
        echo "\nFAILURE: Could not send mail for configuration '$name'.\n";
        echo "Mailer Error Info: " . $mail->ErrorInfo . "\n";
        echo "Exception Message: " . $e->getMessage() . "\n";
    }
    echo "\n\n";
}
