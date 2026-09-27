<?php
/**
 * Zylvora Technologies - Contact Form API Handler
 */
header('Content-Type: application/json');

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
    exit;
}

// Honeypot spam protection
if (!empty($_POST['website_hp'])) {
    // Silent drop for bots
    echo json_encode(['status' => 'success', 'message' => 'Thank you for contacting us.']);
    exit;
}

$name = sanitize_input($_POST['full_name'] ?? '');
$email = sanitize_input($_POST['email'] ?? '');
$phone = sanitize_input($_POST['phone'] ?? '');
$service = sanitize_input($_POST['service'] ?? 'General Inquiry');
$message = sanitize_input($_POST['message'] ?? '');

if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields (Name, Email, Message).']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Please provide a valid email address.']);
    exit;
}

// Prepare Email Body
$to = CONTACT_EMAIL;
$subject = "New Inquiry from Zylvora Website: " . $service;
$headers = "From: " . SITE_NAME . " <" . CONTACT_EMAIL . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$emailBody = "
<!DOCTYPE html>
<html>
<body style='font-family: Arial, sans-serif; background-color: #f4f6f8; padding: 20px;'>
    <div style='max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05);'>
        <div style='background: #050b14; padding: 20px; text-align: center;'>
            <h2 style='color: #00d2ff; margin: 0;'>New Enterprise Inquiry</h2>
        </div>
        <div style='padding: 24px; color: #333333;'>
            <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
            <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
            <p><strong>Phone:</strong> " . htmlspecialchars($phone ?: 'N/A') . "</p>
            <p><strong>Selected Service:</strong> " . htmlspecialchars($service) . "</p>
            <p><strong>Message:</strong></p>
            <blockquote style='background: #f8fafc; padding: 12px; border-left: 4px solid #00d2ff; margin: 0; color: #555;'>
                " . nl2br(htmlspecialchars($message)) . "
            </blockquote>
        </div>
        <div style='background: #e2e8f0; padding: 12px; text-align: center; font-size: 12px; color: #64748b;'>
            Submitted via " . SITE_NAME . " Website on " . date('Y-m-d H:i:s') . "
        </div>
    </div>
</body>
</html>
";

// Optional: Try PHP native mailer, or fallback to file logging if SMTP is not configured yet
$mailSent = @mail($to, $subject, $emailBody, $headers);

// Also log to inquiries.log in uploads folder for safety
$logDir = __DIR__ . '/../assets/uploads/';
if (is_dir($logDir) && is_writable($logDir)) {
    $logEntry = date('Y-m-d H:i:s') . " | $name | $email | $phone | $service | " . str_replace("\n", " ", $message) . "\n";
    @file_put_contents($logDir . 'inquiries.log', $logEntry, FILE_APPEND);
}

echo json_encode([
    'status' => 'success',
    'message' => 'Thank you for reaching out! Our enterprise solutions team will contact you within 24 hours.'
]);
