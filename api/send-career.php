<?php
/**
 * Zylvora Technologies - Career Application API Handler
 */
header('Content-Type: application/json');

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
    exit;
}

// Honeypot
if (!empty($_POST['website_hp'])) {
    echo json_encode(['status' => 'success', 'message' => 'Application received.']);
    exit;
}

$name = sanitize_input($_POST['full_name'] ?? '');
$email = sanitize_input($_POST['email'] ?? '');
$phone = sanitize_input($_POST['phone'] ?? '');
$position = sanitize_input($_POST['position'] ?? 'General Application');
$experience = sanitize_input($_POST['experience'] ?? '1-3 Years');
$cover_note = sanitize_input($_POST['cover_note'] ?? '');

if (empty($name) || empty($email) || empty($phone)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Please provide your full name, email, and phone number.']);
    exit;
}

// Handle Resume File Upload
$uploadedFileName = 'None';
if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['resume']['tmp_name'];
    $fileName = $_FILES['resume']['name'];
    $fileSize = $_FILES['resume']['size'];
    $fileType = $_FILES['resume']['type'];
    
    // File validation: Max 5MB
    if ($fileSize > 5 * 1024 * 1024) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Resume file exceeds 5MB limit. Please upload a smaller file.']);
        exit;
    }

    // Allowed extensions
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExtensions = ['pdf', 'doc', 'docx'];

    if (!in_array($fileExtension, $allowedExtensions)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Invalid file format. Please upload a PDF or DOC/DOCX resume.']);
        exit;
    }

    // Secure file rename
    $newFileName = 'CV_' . preg_replace('/[^a-zA-Z0-9_-]/', '_', $name) . '_' . time() . '.' . $fileExtension;
    $uploadFileDir = __DIR__ . '/../assets/uploads/';

    if (!is_dir($uploadFileDir)) {
        mkdir($uploadFileDir, 0755, true);
    }

    $destPath = $uploadFileDir . $newFileName;
    if (move_uploaded_file($fileTmpPath, $destPath)) {
        $uploadedFileName = $newFileName;
    }
}

// Log application to file
$logDir = __DIR__ . '/../assets/uploads/';
if (is_dir($logDir) && is_writable($logDir)) {
    $logEntry = date('Y-m-d H:i:s') . " | $name | $email | $phone | $position | $experience | CV: $uploadedFileName\n";
    @file_put_contents($logDir . 'applications.log', $logEntry, FILE_APPEND);
}

// Email notification
$to = CAREER_EMAIL;
$subject = "Job Application: " . $position . " - " . $name;
$headers = "From: " . SITE_NAME . " Careers <" . CAREER_EMAIL . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$emailBody = "
<h2>New Career Application</h2>
<p><strong>Applicant Name:</strong> " . htmlspecialchars($name) . "</p>
<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
<p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
<p><strong>Position:</strong> " . htmlspecialchars($position) . "</p>
<p><strong>Experience Level:</strong> " . htmlspecialchars($experience) . "</p>
<p><strong>Notes:</strong> " . nl2br(htmlspecialchars($cover_note)) . "</p>
<p><strong>Resume File:</strong> " . htmlspecialchars($uploadedFileName) . "</p>
";

@mail($to, $subject, $emailBody, $headers);

echo json_encode([
    'status' => 'success',
    'message' => 'Your application and resume have been submitted! Our talent acquisition team will review and get in touch.'
]);
