<?php
/**
 * Security helper functions for input sanitization and secure file uploads.
 */

// Function to clean input strings
if (!function_exists('clean_input')) {
    function clean_input($data) {
        if (is_array($data)) {
            return array_map('clean_input', $data);
        }
        return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
    }
}

// Function to safely upload resumes
if (!function_exists('secure_upload_resume')) {
    function secure_upload_resume($fileInput, $folder = 'Document') {
        // Check if file was uploaded without errors
        if (!isset($fileInput) || $fileInput['error'] !== UPLOAD_ERR_OK) {
            return false;
        }

        // Limit file size to 10MB
        $max_size = 10 * 1024 * 1024; // 10MB
        if ($fileInput['size'] > $max_size) {
            return false;
        }

        // Whitelist allowed extensions
        $allowed_extensions = ['pdf', 'doc', 'docx'];
        $file_name = $fileInput['name'];
        $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($extension, $allowed_extensions)) {
            return false;
        }

        // Whitelist allowed MIME types
        $allowed_mime_types = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];

        // Retrieve MIME type
        $mime_type = '';
        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime_type = finfo_file($finfo, $fileInput['tmp_name']);
            finfo_close($finfo);
        } else {
            $mime_type = $fileInput['type'];
        }

        if (!in_array($mime_type, $allowed_mime_types)) {
            return false;
        }

        // Create secure folder if it doesn't exist (using 0755 instead of 0777)
        if (!is_dir($folder)) {
            mkdir($folder, 0755, true);
        }

        // Create .htaccess file in the upload directory if it does not exist
        $htaccess_path = $folder . '/.htaccess';
        if (!file_exists($htaccess_path)) {
            $htaccess_content = "# Disable directory listing\n"
                              . "Options -Indexes\n\n"
                              . "# Prevent execution of any scripts\n"
                              . "<FilesMatch \"\.(php|phtml|php3|php4|php5|php7|phps|pl|py|cgi|sh|asp|aspx)$\">\n"
                              . "    Order Deny,Allow\n"
                              . "    Deny from all\n"
                              . "</FilesMatch>\n";
            file_put_contents($htaccess_path, $htaccess_content);
        }

        // Generate a cryptographically random/unique filename
        $safe_filename = bin2hex(random_bytes(16)) . '-' . time() . '.' . $extension;
        $destination = $folder . '/' . $safe_filename;

        if (move_uploaded_file($fileInput['tmp_name'], $destination)) {
            return "https://www.roamers.in/" . $folder . "/" . $safe_filename;
        }

        return false;
    }
}
