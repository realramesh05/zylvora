<?php
/**
 * Zylvora Technologies - Global Configuration File
 * Contains company details, paths, meta defaults and SMTP settings.
 */

// Environment settings
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE);

// Base URL Detection
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$scriptDir = str_replace('\\', '/', dirname($scriptName));
$basePath = preg_replace('/(\/services|\/sap|\/industries|\/erp-delivery|\/api)$/i', '', $scriptDir);
$basePath = ($basePath === '/' || $basePath === '\\' || $basePath === '.') ? '' : '/' . trim($basePath, '/');
$baseUrl = rtrim($protocol . $host . $basePath, '/');

define('SITE_URL', $baseUrl);
define('SITE_NAME', 'Zylvora Technologies');
define('SITE_TAGLINE', 'Ideas / Solutions / Global Impact');
define('COMPANY_LEGAL_NAME', 'Zylvora Technologies Pvt Ltd');
define('CONTACT_EMAIL', 'info@zylvora.com');
define('CAREER_EMAIL', 'careers@zylvora.com');
define('CONTACT_PHONE', '+91 98765 43210');
define('OFFICE_ADDRESS', 'Tech Innovation Park, OMR IT Corridor, Chennai, Tamil Nadu - 600096, India');

// Social Media Links
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/zylvora');
define('SOCIAL_TWITTER', 'https://twitter.com/zylvora');
define('SOCIAL_FACEBOOK', 'https://facebook.com/zylvoratech');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/zylvoratech');

// Email Notification Settings (Hostinger / cPanel SMTP)
define('SMTP_HOST', 'smtp.hostinger.com');
define('SMTP_PORT', 465);
define('SMTP_SECURE', 'ssl');
define('SMTP_USER', 'info@zylvora.com');
define('SMTP_PASS', 'YourEmailPasswordHere');

// Helper function to generate proper internal URLs
function url($path = '') {
    if (defined('PREVIEW_MODE') && PREVIEW_MODE === true) {
        $prefix = defined('PREVIEW_PREFIX') ? PREVIEW_PREFIX : './';
        $path = trim($path, '/');
        if (empty($path)) {
            return $prefix . 'index.html';
        }
        if (in_array($path, ['services', 'sap', 'industries', 'erp-delivery'])) {
            return $prefix . $path . '/index.html';
        }
        if (str_ends_with($path, '.xml') || str_ends_with($path, '.txt')) {
            return $prefix . $path;
        }
        return $prefix . $path . '.html';
    }

    $path = trim($path, '/');
    if (empty($path)) {
        return SITE_URL . '/';
    }
    return SITE_URL . '/' . $path;
}

// Helper function to resolve asset paths
function asset($path = '') {
    if (defined('PREVIEW_MODE') && PREVIEW_MODE === true) {
        $prefix = defined('PREVIEW_PREFIX') ? PREVIEW_PREFIX : './';
        return $prefix . 'assets/' . ltrim($path, '/');
    }
    return SITE_URL . '/assets/' . ltrim($path, '/');
}

