<?php
/**
 * Zylvora Technologies - Utility & Helper Functions
 */

if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

/**
 * Sanitize User Input
 */
function sanitize_input($data) {
    if (is_array($data)) {
        return array_map('sanitize_input', $data);
    }
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Active Navigation Link Checker
 */
function is_active($route) {
    $current = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $route = trim($route, '/');
    if (empty($route)) {
        return ($current === '' || $current === '/' || basename($current) === 'index.php') ? 'text-cyan-400 font-semibold active-link' : 'text-slate-300 hover:text-cyan-400';
    }
    if (strpos($current, $route) !== false) {
        return 'text-cyan-400 font-semibold active-link';
    }
    return 'text-slate-300 hover:text-cyan-400';
}

/**
 * Clean URL Breadcrumbs Generator
 */
function render_breadcrumbs($items = []) {
    $html = '<nav aria-label="Breadcrumb" class="flex items-center space-x-2 text-sm text-slate-400 mb-6">';
    $html .= '<a href="' . url() . '" class="hover:text-cyan-400 transition">Home</a>';
    
    foreach ($items as $name => $link) {
        $html .= '<span class="text-slate-600">/</span>';
        if ($link) {
            $html .= '<a href="' . url($link) . '" class="hover:text-cyan-400 transition">' . htmlspecialchars($name) . '</a>';
        } else {
            $html .= '<span class="text-cyan-400 font-medium">' . htmlspecialchars($name) . '</span>';
        }
    }
    $html .= '</nav>';
    return $html;
}
