<?php
/**
 * Configuration manager for Roamers website
 * Supports environment variables loading from a local .env file.
 */

if (!function_exists('get_config')) {
    function get_config($key, $default = '') {
        // 1. Check system env variables
        $val = getenv($key);
        if ($val !== false) {
            return $val;
        }
        
        // 2. Check $_ENV
        if (isset($_ENV[$key])) {
            return $_ENV[$key];
        }
        
        // 3. Simple custom .env parsing
        static $env = null;
        if ($env === null) {
            $env = [];
            $envFile = __DIR__ . '/.env';
            if (file_exists($envFile)) {
                $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach ($lines as $line) {
                    $line = trim($line);
                    if (empty($line) || strpos($line, '#') === 0) continue;
                    $parts = explode('=', $line, 2);
                    if (count($parts) === 2) {
                        $env[trim($parts[0])] = trim($parts[1], " \t\n\r\0\x0B\"'");
                    }
                }
            }
        }
        
        if (isset($env[$key])) {
            return $env[$key];
        }
        
        return $default;
    }
}

// SMTP credentials mapping
global $smtp_configs;
$smtp_configs = [
    'default' => [
        'host' => get_config('SMTP_HOST', 'smtp.gmail.com'),
        'port' => (int)get_config('SMTP_PORT', 465),
        'secure' => get_config('SMTP_SECURE', 'ssl'),
        'user' => get_config('SMTP_USER', 'info@roamers.in'),
        'pass' => get_config('SMTP_PASS', 'iifr konl ctis tphr'),
        'from_name' => 'contact us details'
    ],
    'alt' => [
        'host' => get_config('ALT_SMTP_HOST', 'smtp.gmail.com'),
        'port' => (int)get_config('ALT_SMTP_PORT', 587),
        'secure' => get_config('ALT_SMTP_SECURE', 'tls'),
        'user' => get_config('ALT_SMTP_USER', 'info@roamers.in'),
        'pass' => get_config('ALT_SMTP_PASS', 'iifr konl ctis tphr'),
        'from_name' => 'Booking Form'
    ],
    'booking' => [
        'host' => get_config('BOOKING_SMTP_HOST', 'smtp.gmail.com'),
        'port' => (int)get_config('BOOKING_SMTP_PORT', 587),
        'secure' => get_config('BOOKING_SMTP_SECURE', 'tls'),
        'user' => get_config('BOOKING_SMTP_USER', 'info@roamers.in'),
        'pass' => get_config('BOOKING_SMTP_PASS', 'iifr konl ctis tphr'),
        'from_name' => 'Contact Form'
    ]
];

// Webhook config
global $webhook_configs;
$webhook_configs = [
    'google_sheets' => get_config('GOOGLE_WEBHOOK_URL', 'https://script.google.com/macros/s/AKfycby3nEnw8ya-450Fm_y_Ynx77TgNPse_g7FaaQyH5dhMZv5-Cf5dQUoLJqb1T7EQ9Ztbpg/exec')
];
