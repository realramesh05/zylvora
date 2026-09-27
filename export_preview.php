<?php
/**
 * Zylvora Technologies - Static HTML Preview Exporter for GitHub Pages
 */

$rootDir = 'D:/projects/Zylvora';
$previewDir = 'D:/projects/Zylvora/preview';
$xamppDir = 'C:/xampp/htdocs/Zylvora';

function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir . "/" . $object) && !is_link($dir . "/" . $object)) {
                    rrmdir($dir . "/" . $object);
                } else {
                    @unlink($dir . "/" . $object);
                }
            }
        }
        @rmdir($dir);
    }
}

// 1. Remove old preview folder and recreate
rrmdir($previewDir);
mkdir($previewDir, 0777, true);
mkdir("$previewDir/services", 0777, true);
mkdir("$previewDir/sap", 0777, true);
mkdir("$previewDir/industries", 0777, true);
mkdir("$previewDir/erp-delivery", 0777, true);
mkdir("$previewDir/assets", 0777, true);
mkdir("$previewDir/assets/css", 0777, true);
mkdir("$previewDir/assets/js", 0777, true);
mkdir("$previewDir/assets/images", 0777, true);
mkdir("$previewDir/assets/videos", 0777, true);

// 2. Copy assets & meta files
copy("$rootDir/assets/css/custom.css", "$previewDir/assets/css/custom.css");
copy("$rootDir/assets/js/main.js", "$previewDir/assets/js/main.js");
foreach (glob("$rootDir/assets/images/*.*") as $img) {
    copy($img, "$previewDir/assets/images/" . basename($img));
}
foreach (glob("$rootDir/assets/videos/*.*") as $vid) {
    copy($vid, "$previewDir/assets/videos/" . basename($vid));
}
if (file_exists("$rootDir/sitemap.xml")) copy("$rootDir/sitemap.xml", "$previewDir/sitemap.xml");
if (file_exists("$rootDir/robots.txt")) copy("$rootDir/robots.txt", "$previewDir/robots.txt");

// 3. Pages list
$pages = [
    // Root pages (depth 0)
    ['src' => 'index.php', 'dest' => 'index.html', 'prefix' => './'],
    ['src' => 'about.php', 'dest' => 'about.html', 'prefix' => './'],
    ['src' => 'contact.php', 'dest' => 'contact.html', 'prefix' => './'],
    ['src' => 'careers.php', 'dest' => 'careers.html', 'prefix' => './'],
    ['src' => 'industries.php', 'dest' => 'industries.html', 'prefix' => './'],

    // 1. Services (depth 1)
    ['src' => 'services/index.php', 'dest' => 'services/index.html', 'prefix' => '../'],
    ['src' => 'services/erp.php', 'dest' => 'services/erp.html', 'prefix' => '../'],
    ['src' => 'services/cloud.php', 'dest' => 'services/cloud.html', 'prefix' => '../'],
    ['src' => 'services/security.php', 'dest' => 'services/security.html', 'prefix' => '../'],
    ['src' => 'services/data-solutions.php', 'dest' => 'services/data-solutions.html', 'prefix' => '../'],

    // 2. SAP (depth 1)
    ['src' => 'sap/index.php', 'dest' => 'sap/index.html', 'prefix' => '../'],
    ['src' => 'sap/consulting.php', 'dest' => 'sap/consulting.html', 'prefix' => '../'],
    ['src' => 'sap/migration.php', 'dest' => 'sap/migration.html', 'prefix' => '../'],
    ['src' => 'sap/implementation.php', 'dest' => 'sap/implementation.html', 'prefix' => '../'],
    ['src' => 'sap/support.php', 'dest' => 'sap/support.html', 'prefix' => '../'],
    ['src' => 'sap/ewm.php', 'dest' => 'sap/ewm.html', 'prefix' => '../'],
    ['src' => 'sap/hybris.php', 'dest' => 'sap/hybris.html', 'prefix' => '../'],

    // 3. Industries (depth 1)
    ['src' => 'industries/index.php', 'dest' => 'industries/index.html', 'prefix' => '../'],
    ['src' => 'industries/manufacturing.php', 'dest' => 'industries/manufacturing.html', 'prefix' => '../'],
    ['src' => 'industries/services.php', 'dest' => 'industries/services.html', 'prefix' => '../'],
    ['src' => 'industries/retail.php', 'dest' => 'industries/retail.html', 'prefix' => '../'],
    ['src' => 'industries/education.php', 'dest' => 'industries/education.html', 'prefix' => '../'],
    ['src' => 'industries/public-sector.php', 'dest' => 'industries/public-sector.html', 'prefix' => '../'],

    // 4. ERP Delivery (depth 1)
    ['src' => 'erp-delivery/index.php', 'dest' => 'erp-delivery/index.html', 'prefix' => '../'],
    ['src' => 'erp-delivery/odoo.php', 'dest' => 'erp-delivery/odoo.html', 'prefix' => '../'],
    ['src' => 'erp-delivery/zoho.php', 'dest' => 'erp-delivery/zoho.html', 'prefix' => '../'],
    ['src' => 'erp-delivery/freshdesk.php', 'dest' => 'erp-delivery/freshdesk.html', 'prefix' => '../'],
];

foreach ($pages as $p) {
    $srcPath = "$rootDir/{$p['src']}";
    $destPath = "$previewDir/{$p['dest']}";
    $prefix = $p['prefix'];

    // Create wrapper script to run in pure preview context
    $code = "<?php
    define('PREVIEW_MODE', true);
    define('PREVIEW_PREFIX', '$prefix');
    \$_SERVER['HTTP_HOST'] = 'zylvora.github.io';
    \$_SERVER['REQUEST_URI'] = '/{$p['dest']}';
    ob_start();
    require '$srcPath';
    \$content = ob_get_clean();
    echo \$content;
    ";

    $tmpFile = "$rootDir/scratch_render.php";
    file_put_contents($tmpFile, $code);

    $cmd = "C:\\xampp\\php\\php.exe -d display_errors=0 \"$tmpFile\"";
    $output = shell_exec($cmd);
    @unlink($tmpFile);

    if ($output) {
        file_put_contents($destPath, $output);
        echo "Rendered {$p['dest']}\n";
    } else {
        echo "Error rendering {$p['src']}\n";
    }
}

// 4. Sync PHP codebase to XAMPP
function sync_dir($src, $dest) {
    if (!is_dir($dest)) mkdir($dest, 0777, true);
    foreach (scandir($src) as $file) {
        if ($file != "." && $file != "..") {
            if (is_dir("$src/$file")) {
                sync_dir("$src/$file", "$dest/$file");
            } else {
                copy("$src/$file", "$dest/$file");
            }
        }
    }
}

sync_dir($rootDir, $xamppDir);
echo "Synced PHP codebase to XAMPP: $xamppDir\n";
echo "Preview export completed successfully!\n";
