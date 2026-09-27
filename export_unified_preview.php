<?php
/**
 * Zylvora Technologies - Unified Preview Generator
 * Builds:
 *  - preview/index.html (Theme Selection Portal)
 *  - preview/dark/ (Full 27 pages Dark Cyber Edition)
 *  - preview/classic/ (Full 27 pages Corporate Classic Edition)
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

function copy_r($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst, 0777, true);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                copy_r($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// 1. Reset preview directory
rrmdir($previewDir);
mkdir($previewDir, 0777, true);
mkdir("$previewDir/dark", 0777, true);
mkdir("$previewDir/classic", 0777, true);

// 2. Prepare subdirectories for Dark Edition
$darkDir = "$previewDir/dark";
mkdir("$darkDir/services", 0777, true);
mkdir("$darkDir/sap", 0777, true);
mkdir("$darkDir/industries", 0777, true);
mkdir("$darkDir/erp-delivery", 0777, true);
mkdir("$darkDir/assets", 0777, true);
mkdir("$darkDir/assets/css", 0777, true);
mkdir("$darkDir/assets/js", 0777, true);
mkdir("$darkDir/assets/images", 0777, true);
mkdir("$darkDir/assets/videos", 0777, true);

copy("$rootDir/assets/css/custom.css", "$darkDir/assets/css/custom.css");
copy("$rootDir/assets/js/main.js", "$darkDir/assets/js/main.js");
if (file_exists("$rootDir/sitemap.xml")) {
    copy("$rootDir/sitemap.xml", "$previewDir/sitemap.xml");
    copy("$rootDir/sitemap.xml", "$darkDir/sitemap.xml");
}
if (file_exists("$rootDir/robots.txt")) {
    copy("$rootDir/robots.txt", "$previewDir/robots.txt");
    copy("$rootDir/robots.txt", "$darkDir/robots.txt");
}
foreach (glob("$rootDir/assets/images/*.*") as $img) {
    copy($img, "$darkDir/assets/images/" . basename($img));
}
foreach (glob("$rootDir/assets/videos/*.*") as $vid) {
    copy($vid, "$darkDir/assets/videos/" . basename($vid));
}

// 3. Render all 27 pages for Dark Edition
$pages = [
    // Root pages (depth 0)
    ['src' => 'index.php', 'dest' => 'index.html', 'prefix' => './', 'depth' => 0],
    ['src' => 'about.php', 'dest' => 'about.html', 'prefix' => './', 'depth' => 0],
    ['src' => 'contact.php', 'dest' => 'contact.html', 'prefix' => './', 'depth' => 0],
    ['src' => 'careers.php', 'dest' => 'careers.html', 'prefix' => './', 'depth' => 0],
    ['src' => 'industries.php', 'dest' => 'industries.html', 'prefix' => './', 'depth' => 0],

    // 1. Services (depth 1)
    ['src' => 'services/index.php', 'dest' => 'services/index.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'services/erp.php', 'dest' => 'services/erp.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'services/cloud.php', 'dest' => 'services/cloud.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'services/security.php', 'dest' => 'services/security.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'services/data-solutions.php', 'dest' => 'services/data-solutions.html', 'prefix' => '../', 'depth' => 1],

    // 2. SAP (depth 1)
    ['src' => 'sap/index.php', 'dest' => 'sap/index.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'sap/consulting.php', 'dest' => 'sap/consulting.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'sap/migration.php', 'dest' => 'sap/migration.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'sap/implementation.php', 'dest' => 'sap/implementation.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'sap/support.php', 'dest' => 'sap/support.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'sap/ewm.php', 'dest' => 'sap/ewm.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'sap/hybris.php', 'dest' => 'sap/hybris.html', 'prefix' => '../', 'depth' => 1],

    // 3. Industries (depth 1)
    ['src' => 'industries/index.php', 'dest' => 'industries/index.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'industries/manufacturing.php', 'dest' => 'industries/manufacturing.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'industries/services.php', 'dest' => 'industries/services.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'industries/retail.php', 'dest' => 'industries/retail.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'industries/education.php', 'dest' => 'industries/education.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'industries/public-sector.php', 'dest' => 'industries/public-sector.html', 'prefix' => '../', 'depth' => 1],

    // 4. ERP Delivery (depth 1)
    ['src' => 'erp-delivery/index.php', 'dest' => 'erp-delivery/index.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'erp-delivery/odoo.php', 'dest' => 'erp-delivery/odoo.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'erp-delivery/zoho.php', 'dest' => 'erp-delivery/zoho.html', 'prefix' => '../', 'depth' => 1],
    ['src' => 'erp-delivery/freshdesk.php', 'dest' => 'erp-delivery/freshdesk.html', 'prefix' => '../', 'depth' => 1],
];

foreach ($pages as $p) {
    $srcPath = "$rootDir/{$p['src']}";
    $destPath = "$darkDir/{$p['dest']}";
    $prefix = $p['prefix'];

    $code = "<?php
    define('PREVIEW_MODE', true);
    define('PREVIEW_PREFIX', '$prefix');
    \$_SERVER['HTTP_HOST'] = 'zylvora.github.io';
    \$_SERVER['REQUEST_URI'] = '/dark/{$p['dest']}';
    ob_start();
    require '$srcPath';
    \$content = ob_get_clean();
    echo \$content;
    ";

    $tmpFile = "$rootDir/scratch_render_dark.php";
    file_put_contents($tmpFile, $code);
    $cmd = "C:\\xampp\\php\\php.exe -d display_errors=0 \"$tmpFile\"";
    $output = shell_exec($cmd);
    @unlink($tmpFile);

    if ($output) {
        // Fix switcher link inside Dark edition
        $classicSwitch = $p['depth'] == 0 ? '../classic/index.html' : '../../classic/index.html';
        $hubSwitch = $p['depth'] == 0 ? '../index.html' : '../../index.html';
        
        // Ensure switch button points directly to classic
        $output = preg_replace('/href="[^"]*preview2[^"]*"/i', 'href="' . $classicSwitch . '"', $output);
        
        file_put_contents($destPath, $output);
        echo "Rendered Dark: {$p['dest']}\n";
    }
}

// 4. Prepare Classic Edition in preview/classic
$classicDir = "$previewDir/classic";

// Run build_preview2.php to generate classic edition in preview2/
shell_exec("C:\\xampp\\php\\php.exe \"$rootDir/build_preview2.php\"");

// Copy all generated files from preview2 to preview/classic
copy_r("$rootDir/preview2", "$classicDir");

if (file_exists("$rootDir/sitemap.xml")) {
    copy("$rootDir/sitemap.xml", "$classicDir/sitemap.xml");
}
if (file_exists("$rootDir/robots.txt")) {
    copy("$rootDir/robots.txt", "$classicDir/robots.txt");
}

// Fix switch links in classic HTML files to point to ../dark/index.html or ../../dark/index.html
$classicFiles = glob("$classicDir/**/*.html");
$classicFiles = array_merge($classicFiles, glob("$classicDir/*.html"));

foreach ($classicFiles as $cf) {
    $html = file_get_contents($cf);
    $rel = str_replace(str_replace('\\', '/', $classicDir) . '/', '', str_replace('\\', '/', $cf));
    $depth = (strpos($rel, '/') !== false) ? 1 : 0;
    
    $darkSwitch = $depth == 0 ? '../dark/index.html' : '../../dark/index.html';
    $html = preg_replace('/href="[^"]*preview\/index\.html"/i', 'href="' . $darkSwitch . '"', $html);
    $html = preg_replace('/href="\.\.\/\.\.\/preview\/index\.html"/i', 'href="' . $darkSwitch . '"', $html);
    $html = preg_replace('/href="\.\.\/preview\/index\.html"/i', 'href="' . $darkSwitch . '"', $html);
    
    file_put_contents($cf, $html);
}
echo "Rendered and updated Classic Edition inside preview/classic/\n";

// Run build_sleek_version.php to generate sleek edition in preview/sleek/
shell_exec("C:\\xampp\\php\\php.exe \"$rootDir/build_sleek_version.php\"");
echo "Rendered and updated Sleek Edition inside preview/sleek/\n";

// 5. Create the Master Theme Hub (preview/index.html)
$hubHtml = <<<'HTML'
<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zylvora Technologies - Website Design Proposals</title>
    <meta name="description" content="Select a design proposal to preview the complete interactive website mockup for Zylvora Technologies.">
    <link rel="icon" type="image/png" href="./dark/assets/images/logo.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #060911;
            color: #f8fafc;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(99, 102, 241, 0.12) 0%, transparent 40%),
                radial-gradient(circle at 90% 20%, rgba(56, 189, 248, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 50% 90%, rgba(217, 119, 6, 0.08) 0%, transparent 50%);
        }
        .glass-panel {
            background: rgba(11, 17, 30, 0.75);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.09);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glass-panel:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between py-10 px-4 sm:px-6 lg:px-8">
    
    <!-- Top Header -->
    <header class="max-w-7xl mx-auto w-full text-center space-y-4 mb-10">
        <div class="inline-flex items-center justify-center p-2.5 rounded-2xl bg-white shadow-xl border border-white/20 mb-1">
            <img src="./dark/assets/images/logo.png" alt="Zylvora Technologies" class="h-10 sm:h-12 w-auto object-contain">
        </div>
        <div class="inline-block px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-400/30 text-indigo-300 text-xs font-bold uppercase tracking-widest">
            Client Design Proposals
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white max-w-3xl mx-auto">
            Zylvora Technologies <span class="bg-gradient-to-r from-indigo-400 via-cyan-400 to-emerald-400 bg-clip-text text-transparent">Website Concepts</span>
        </h1>
        <p class="text-slate-400 text-sm sm:text-base max-w-2xl mx-auto">
            Please choose a design direction below to preview the complete 27-page interactive website mockup.
        </p>
    </header>

    <!-- Theme Cards Showcase Grid (3 Columns) -->
    <main class="max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-3 gap-6 my-auto">
        
        <!-- Concept A: Modern Dark Theme -->
        <div class="glass-panel rounded-3xl p-6 sm:p-7 flex flex-col justify-between relative overflow-hidden group hover:border-cyan-500/40">
            <div class="space-y-5 relative z-10">
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-cyan-500/20 text-cyan-300 border border-cyan-400/30">
                        Concept A
                    </span>
                    <span class="text-xs text-slate-400 font-medium">Dark Theme</span>
                </div>

                <div class="space-y-2">
                    <h2 class="text-xl sm:text-2xl font-bold text-white group-hover:text-cyan-400 transition">
                        Modern Dark
                    </h2>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Sleek, high-impact dark interface with cyan highlights. Ideal for a technology-forward presentation.
                    </p>
                </div>

                <!-- Feature Highlights -->
                <div class="space-y-2 pt-3 border-t border-white/10 text-xs text-slate-300">
                    <div class="flex items-center space-x-2">
                        <span class="text-cyan-400 font-bold">✓</span>
                        <span>27 Complete Module Pages</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-cyan-400 font-bold">✓</span>
                        <span>Interactive Hero & Media Stream</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-cyan-400 font-bold">✓</span>
                        <span>Responsive Mobile & Desktop</span>
                    </div>
                </div>
            </div>

            <div class="pt-6 relative z-10">
                <a href="./dark/index.html" class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-600 text-slate-950 font-bold text-center text-xs shadow-lg shadow-cyan-500/20 transition-all flex items-center justify-center space-x-1.5 group-hover:scale-[1.02]">
                    <span>Preview Concept A (Dark)</span>
                    <span>&rarr;</span>
                </a>
            </div>
        </div>

        <!-- Concept B: Classic Corporate Theme -->
        <div class="glass-panel rounded-3xl p-6 sm:p-7 flex flex-col justify-between relative overflow-hidden group hover:border-amber-500/40 bg-slate-900/60">
            <div class="space-y-5 relative z-10">
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-amber-500/20 text-amber-300 border border-amber-400/30">
                        Concept B
                    </span>
                    <span class="text-xs text-slate-400 font-medium">Light Theme</span>
                </div>

                <div class="space-y-2">
                    <h2 class="text-xl sm:text-2xl font-bold text-white group-hover:text-amber-400 transition">
                        Classic Corporate
                    </h2>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Clean, professional light interface with royal navy & gold accents. Ideal for traditional enterprise consulting.
                    </p>
                </div>

                <!-- Feature Highlights -->
                <div class="space-y-2 pt-3 border-t border-white/10 text-xs text-slate-300">
                    <div class="flex items-center space-x-2">
                        <span class="text-amber-400 font-bold">✓</span>
                        <span>27 Complete Module Pages</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-amber-400 font-bold">✓</span>
                        <span>Executive Crisp Typography</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-amber-400 font-bold">✓</span>
                        <span>Responsive Mobile & Desktop</span>
                    </div>
                </div>
            </div>

            <div class="pt-6 relative z-10">
                <a href="./classic/index.html" class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-amber-400 to-amber-600 text-slate-950 font-bold text-center text-xs shadow-lg shadow-amber-500/20 transition-all flex items-center justify-center space-x-1.5 group-hover:scale-[1.02]">
                    <span>Preview Concept B (Light)</span>
                    <span>&rarr;</span>
                </a>
            </div>
        </div>

        <!-- Concept C: Sleek Glass Theme (Featured) -->
        <div class="glass-panel rounded-3xl p-6 sm:p-7 flex flex-col justify-between relative overflow-hidden group hover:border-indigo-400/50 bg-gradient-to-b from-[#0e1628] to-[#080c14] border-indigo-500/30 ring-1 ring-indigo-500/20 shadow-2xl">
            <div class="absolute -top-20 -right-20 w-40 h-40 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="space-y-5 relative z-10">
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-gradient-to-r from-indigo-500/30 to-pink-500/30 text-indigo-200 border border-indigo-400/40 flex items-center space-x-1">
                        <span>✨ Concept C</span>
                        <span class="text-[10px] text-pink-300 uppercase font-black">Featured</span>
                    </span>
                    <span class="text-xs text-indigo-300 font-semibold">Sleek Glass</span>
                </div>

                <div class="space-y-2">
                    <h2 class="text-xl sm:text-2xl font-bold text-white group-hover:text-indigo-300 transition">
                        Sleek Glass Theme
                    </h2>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Floating frosted glass navigation, clean ambient glow, and ultra-refined modern bento box cards.
                    </p>
                </div>

                <!-- Feature Highlights -->
                <div class="space-y-2 pt-3 border-t border-white/10 text-xs text-slate-300">
                    <div class="flex items-center space-x-2">
                        <span class="text-indigo-400 font-bold">✓</span>
                        <span>27 Complete Module Pages</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-indigo-400 font-bold">✓</span>
                        <span>Floating Glass Navbar & Glow Video</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-indigo-400 font-bold">✓</span>
                        <span>Superlative Micro-interactions</span>
                    </div>
                </div>
            </div>

            <div class="pt-6 relative z-10">
                <a href="./sleek/index.html" class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white font-bold text-center text-xs shadow-xl shadow-indigo-500/30 hover:shadow-indigo-500/50 transition-all flex items-center justify-center space-x-1.5 group-hover:scale-[1.02]">
                    <span>Preview Concept C (Sleek)</span>
                    <span>&rarr;</span>
                </a>
            </div>
        </div>

    </main>

    <!-- Bottom Footer -->
    <footer class="max-w-7xl mx-auto w-full text-center pt-10 text-xs text-slate-500">
        <p>Zylvora Technologies • Website Design Mockup Proposals</p>
    </footer>

</body>
</html>
HTML;

file_put_contents("$previewDir/index.html", $hubHtml);
echo "Created Master Gateway: preview/index.html\n";

// 6. Clean up temporary preview2 folder if redundant
rrmdir("$rootDir/preview2");
if (is_dir('C:/xampp/htdocs/Zylvora/preview2')) {
    rrmdir('C:/xampp/htdocs/Zylvora/preview2');
}

// 7. Sync unified preview to XAMPP
copy_r($previewDir, "$xamppDir/preview");
echo "Synced unified preview to XAMPP: $xamppDir/preview\n";
echo "UNIFIED EXPORT COMPLETED SUCCESSFULLY!\n";

