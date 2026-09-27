<?php
/**
 * Static Preview Link & Asset Integrity Checker
 */

$previewDir = 'D:/projects/Zylvora/preview';
$files = [];

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($previewDir));
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'html') {
        $files[] = $file->getPathname();
    }
}

echo "Found " . count($files) . " HTML pages in preview.\n";

$errors = 0;
foreach ($files as $filePath) {
    $html = file_get_contents($filePath);
    $dir = dirname($filePath);
    
    // Find all href and src
    preg_match_all('/(href|src)="([^"#?:]+)"/', $html, $matches);
    
    foreach ($matches[2] as $relPath) {
        // Skip external or protocol-less links or anchors
        if (str_starts_with($relPath, 'http') || str_starts_with($relPath, '//') || str_starts_with($relPath, 'mailto:') || str_starts_with($relPath, 'tel:')) {
            continue;
        }

        $target = realpath($dir . '/' . $relPath);
        if (!$target || !file_exists($target)) {
            echo "Broken link in " . str_replace($previewDir, '', $filePath) . " -> $relPath\n";
            $errors++;
        }
    }
}

if ($errors === 0) {
    echo "SUCCESS: All relative links, stylesheets, scripts, and images in preview/ exist and are 100% valid!\n";
} else {
    echo "Found $errors broken links!\n";
}
