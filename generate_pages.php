<?php
/**
 * Zylvora Technologies - Universal Page Generator & Preview Exporter
 * Enhanced with rich imagery, video showcases, and Google Maps.
 */

$rootDir = 'D:/projects/Zylvora';
$previewDir = 'D:/projects/Zylvora/preview';
$xamppDir = 'C:/xampp/htdocs/Zylvora';

// Helper function to create template for detail pages
function get_subpage_content($title, $parentTitle, $parentSlug, $siblings) {
    $relatedLinks = '';
    foreach ($siblings as $slug => $sib) {
        $activeClass = ($sib['title'] === $title) ? 'text-cyan-400 font-semibold bg-cyan-500/10 border-l-2 border-cyan-400' : 'text-slate-400 hover:text-white hover:bg-white/5';
        $relatedLinks .= <<<HTML
        <a href="<?= url('{$parentSlug}/{$slug}') ?>" class="flex items-center justify-between p-3 rounded-xl transition {$activeClass}">
            <span class="text-sm">{$sib['title']}</span>
            <span class="text-xs text-slate-500">&rarr;</span>
        </a>
HTML;
    }

    return <<<PHP
<?php
\$pageTitle = "{$title}";
\$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. {$title} solutions engineered for global enterprises.";
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Page Header Hero -->
<section class="py-20 relative tech-grid-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <?= render_breadcrumbs(['{$parentTitle}' => '{$parentSlug}', '{$title}' => '']) ?>

        <div class="max-w-3xl mt-6">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">{$parentTitle}</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mt-4 tracking-tight">
                {$title}
            </h1>
            <p class="text-lg text-slate-300 mt-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            </p>
        </div>
    </div>
</section>

<!-- Main Detail Content -->
<section class="py-20 bg-dark-900/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Column: Core Information -->
            <div class="lg:col-span-8 space-y-12">
                
                <!-- Overview Card -->
                <div class="glass-card p-8 sm:p-10 rounded-3xl">
                    <h2 class="text-2xl font-bold text-white mb-4">Lorem Ipsum Dolor Sit Amet</h2>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <p class="text-slate-400 leading-relaxed">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>

                <!-- Feature Grid (4 Cards) -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-6">Consectetur Adipiscing Elit</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        
                        <div class="glass-card p-6 rounded-2xl">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-4 font-bold">01</div>
                            <h4 class="text-lg font-semibold text-white mb-2">Tempor Incididunt</h4>
                            <p class="text-sm text-slate-400 leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>

                        <div class="glass-card p-6 rounded-2xl">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-4 font-bold">02</div>
                            <h4 class="text-lg font-semibold text-white mb-2">Magna Aliqua</h4>
                            <p class="text-sm text-slate-400 leading-relaxed">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="glass-card p-6 rounded-2xl">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-4 font-bold">03</div>
                            <h4 class="text-lg font-semibold text-white mb-2">Ullamco Laboris</h4>
                            <p class="text-sm text-slate-400 leading-relaxed">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>

                        <div class="glass-card p-6 rounded-2xl">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-4 font-bold">04</div>
                            <h4 class="text-lg font-semibold text-white mb-2">Duis Aute Irure</h4>
                            <p class="text-sm text-slate-400 leading-relaxed">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Key Capabilities Checklist -->
                <div class="glass-card p-8 sm:p-10 rounded-3xl">
                    <h3 class="text-xl font-bold text-white mb-6">Excepteur Sint Occaecat</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-slate-300">
                        <div class="flex items-start space-x-3">
                            <span class="text-cyan-400 mt-0.5 font-bold">&#10003;</span>
                            <span>Lorem ipsum dolor sit amet consectetur.</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="text-cyan-400 mt-0.5 font-bold">&#10003;</span>
                            <span>Sed do eiusmod tempor incididunt ut labore.</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="text-cyan-400 mt-0.5 font-bold">&#10003;</span>
                            <span>Ut enim ad minim veniam ullamco laboris.</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="text-cyan-400 mt-0.5 font-bold">&#10003;</span>
                            <span>Duis aute irure dolor in reprehenderit.</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="text-cyan-400 mt-0.5 font-bold">&#10003;</span>
                            <span>Excepteur sint occaecat cupidatat non proident.</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="text-cyan-400 mt-0.5 font-bold">&#10003;</span>
                            <span>Sunt in culpa qui officia deserunt mollit.</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Sidebar & Modules -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Quick Contact Card -->
                <div class="glass-card p-6 rounded-3xl border border-cyan-500/20 bg-gradient-to-b from-dark-700/80 to-dark-800/80">
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest">Requirement</span>
                    <h3 class="text-xl font-bold text-white mt-2 mb-3">{$title}</h3>
                    <p class="text-sm text-slate-400 mb-6 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.
                    </p>
                    <a href="<?= url('contact') ?>" class="w-full text-center block py-3 px-6 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-600 text-dark-900 font-bold shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 transition">
                        5. Contact us &rarr;
                    </a>
                </div>

                <!-- Related Navigation -->
                <div class="glass-card p-6 rounded-3xl">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-cyan-400 pl-2">{$parentTitle} Modules</h4>
                    <div class="space-y-1">
{$relatedLinks}
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/cta.php';
require_once __DIR__ . '/../includes/footer.php';
?>
PHP;
}

// 1. Services subpages
$services = [
    'erp' => ['title' => '1.1 ERP'],
    'cloud' => ['title' => '1.2 Cloud'],
    'security' => ['title' => '1.3 Security'],
    'data-solutions' => ['title' => '1.4 Data solutions']
];
foreach ($services as $slug => $data) {
    file_put_contents("$rootDir/services/{$slug}.php", get_subpage_content($data['title'], '1. Services', 'services', $services));
}

// 2. SAP subpages
$sapPages = [
    'consulting' => ['title' => '2.1 SAP Consulting'],
    'migration' => ['title' => '2.2 SAP Migration'],
    'implementation' => ['title' => '2.3 SAP Implementation'],
    'support' => ['title' => '2.4 SAP Support'],
    'ewm' => ['title' => '2.5 SAP EWM'],
    'hybris' => ['title' => '2.6 SAP Hybris']
];
foreach ($sapPages as $slug => $data) {
    file_put_contents("$rootDir/sap/{$slug}.php", get_subpage_content($data['title'], '2. SAP', 'sap', $sapPages));
}

// 3. Industries subpages
$industryPages = [
    'manufacturing' => ['title' => '3.1 Manufacturing'],
    'services' => ['title' => '3.2 Services'],
    'retail' => ['title' => '3.3 Retail'],
    'education' => ['title' => '3.4 Education'],
    'public-sector' => ['title' => '3.5 Public sector']
];
foreach ($industryPages as $slug => $data) {
    file_put_contents("$rootDir/industries/{$slug}.php", get_subpage_content($data['title'], '3. Industries', 'industries', $industryPages));
}

// 4. ERP Delivery subpages
$erpDeliveryPages = [
    'odoo' => ['title' => '4.1 Odoo end to end solutions'],
    'zoho' => ['title' => '4.2 ZOHO ERP'],
    'freshdesk' => ['title' => '4.3 Fresh Desk']
];
foreach ($erpDeliveryPages as $slug => $data) {
    file_put_contents("$rootDir/erp-delivery/{$slug}.php", get_subpage_content($data['title'], '4. ERP Delivery', 'erp-delivery', $erpDeliveryPages));
}

// 5. Hub Pages
// 1. Services index
$servicesHub = <<<PHP
<?php
\$pageTitle = "1. Services";
\$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 1. Services overview.";
require_once __DIR__ . '/../includes/header.php';
?>

<section class="py-20 relative tech-grid-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <?= render_breadcrumbs(['1. Services' => '']) ?>

        <div class="max-w-3xl mt-6">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Capabilities</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mt-4 tracking-tight">
                1. Services
            </h1>
            <p class="text-lg text-slate-300 mt-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-dark-900/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="glass-card p-10 rounded-3xl border border-white/10 hover:border-cyan-400/40 flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-3">1.1 ERP</h2>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <a href="<?= url('services/erp') ?>" class="inline-flex items-center text-cyan-400 font-semibold hover:text-cyan-300">
                    Explore 1.1 ERP &rarr;
                </a>
            </div>

            <div class="glass-card p-10 rounded-3xl border border-white/10 hover:border-cyan-400/40 flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-3">1.2 Cloud</h2>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <a href="<?= url('services/cloud') ?>" class="inline-flex items-center text-cyan-400 font-semibold hover:text-cyan-300">
                    Explore 1.2 Cloud &rarr;
                </a>
            </div>

            <div class="glass-card p-10 rounded-3xl border border-white/10 hover:border-cyan-400/40 flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-3">1.3 Security</h2>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <a href="<?= url('services/security') ?>" class="inline-flex items-center text-cyan-400 font-semibold hover:text-cyan-300">
                    Explore 1.3 Security &rarr;
                </a>
            </div>

            <div class="glass-card p-10 rounded-3xl border border-white/10 hover:border-cyan-400/40 flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-3">1.4 Data solutions</h2>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <a href="<?= url('services/data-solutions') ?>" class="inline-flex items-center text-cyan-400 font-semibold hover:text-cyan-300">
                    Explore 1.4 Data solutions &rarr;
                </a>
            </div>

        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/cta.php';
require_once __DIR__ . '/../includes/footer.php';
?>
PHP;
file_put_contents("$rootDir/services/index.php", $servicesHub);

// 2. SAP Hub
$sapHub = <<<PHP
<?php
\$pageTitle = "2. SAP";
\$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 2. SAP practice overview.";
require_once __DIR__ . '/../includes/header.php';
?>

<section class="py-20 relative tech-grid-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <?= render_breadcrumbs(['2. SAP' => '']) ?>

        <div class="max-w-3xl mt-6">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Enterprise Practice</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mt-4 tracking-tight">
                2. SAP
            </h1>
            <p class="text-lg text-slate-300 mt-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-dark-900/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">2.1 SAP Consulting</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('sap/consulting') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 2.1 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">2.2 SAP Migration</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('sap/migration') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 2.2 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">2.3 SAP Implementation</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('sap/implementation') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 2.3 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">2.4 SAP Support</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('sap/support') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 2.4 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">2.5 SAP EWM</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('sap/ewm') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 2.5 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">2.6 SAP Hybris</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('sap/hybris') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 2.6 &rarr;
                </a>
            </div>

        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/cta.php';
require_once __DIR__ . '/../includes/footer.php';
?>
PHP;
file_put_contents("$rootDir/sap/index.php", $sapHub);

// 3. Industries Hub
$industriesHub = <<<PHP
<?php
\$pageTitle = "3. Industries";
\$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 3. Industries overview.";
require_once __DIR__ . '/../includes/header.php';
?>

<section class="py-20 relative tech-grid-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <?= render_breadcrumbs(['3. Industries' => '']) ?>

        <div class="max-w-3xl mt-6">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Sector Solutions</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mt-4 tracking-tight">
                3. Industries
            </h1>
            <p class="text-lg text-slate-300 mt-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-dark-900/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">3.1 Manufacturing</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('industries/manufacturing') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 3.1 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">3.2 Services</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('industries/services') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 3.2 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">3.3 Retail</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('industries/retail') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 3.3 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">3.4 Education</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('industries/education') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 3.4 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">3.5 Public sector</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('industries/public-sector') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 3.5 &rarr;
                </a>
            </div>

        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/cta.php';
require_once __DIR__ . '/../includes/footer.php';
?>
PHP;
file_put_contents("$rootDir/industries/index.php", $industriesHub);

$industriesRoot = str_replace('/../includes/', '/includes/', $industriesHub);
file_put_contents("$rootDir/industries.php", $industriesRoot);

// 4. ERP Delivery Hub
$erpDeliveryHub = <<<PHP
<?php
\$pageTitle = "4. ERP Delivery";
\$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 4. ERP Delivery solutions.";
require_once __DIR__ . '/../includes/header.php';
?>

<section class="py-20 relative tech-grid-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <?= render_breadcrumbs(['4. ERP Delivery' => '']) ?>

        <div class="max-w-3xl mt-6">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Targeted Ecosystems</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mt-4 tracking-tight">
                4. ERP Delivery
            </h1>
            <p class="text-lg text-slate-300 mt-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-dark-900/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">4.1 Odoo end to end solutions</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('erp-delivery/odoo') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 4.1 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">4.2 ZOHO ERP</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('erp-delivery/zoho') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 4.2 &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-3xl border border-white/10 flex flex-col justify-between group">
                <div>
                    <h2 class="text-xl font-bold text-white mb-3">4.3 Fresh Desk</h2>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                </div>
                <a href="<?= url('erp-delivery/freshdesk') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Explore 4.3 &rarr;
                </a>
            </div>

        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/cta.php';
require_once __DIR__ . '/../includes/footer.php';
?>
PHP;
file_put_contents("$rootDir/erp-delivery/index.php", $erpDeliveryHub);

// 5. Landing Page (index.php) with video showcase & rich telemetry
$indexContent = <<<PHP
<?php
\$pageTitle = "Enterprise ERP, SAP Solutions & Cloud Architecture";
\$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enterprise ERP, SAP Solutions, Cloud and Data Architecture.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION WITH DYNAMIC AI & ERP CANVAS + VIDEO DASHBOARD -->
<section class="relative min-h-[95vh] flex items-center justify-center tech-grid-pattern overflow-hidden pt-20 pb-28">
    <!-- Interactive Neural Network Canvas Background -->
    <canvas id="hero-canvas"></canvas>

    <!-- Radial Glows -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-cyan-500/15 rounded-full blur-[150px] pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        
        <!-- Startup Tagline Pill -->
        <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-8 hover:border-cyan-400/50 transition shadow-lg shadow-cyan-500/10">
            <span class="flex h-2.5 w-2.5 relative">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-cyan-500"></span>
            </span>
            <span class="text-xs sm:text-sm font-semibold tracking-wider text-cyan-300">IDEAS &bull; SOLUTIONS &bull; GLOBAL IMPACT</span>
        </div>

        <!-- Main Hero Headline -->
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-white tracking-tight leading-tight max-w-5xl mx-auto mb-6">
            Architecting the Future of <span class="bg-gradient-to-r from-cyan-400 via-teal-300 to-blue-500 bg-clip-text text-transparent">Enterprise ERP</span> & AI Data.
        </h1>

        <p class="max-w-3xl mx-auto text-lg sm:text-xl text-slate-300 mb-10 leading-relaxed font-light">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
            <a href="<?= url('contact') ?>" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-600 text-dark-900 font-bold hover:shadow-xl hover:shadow-cyan-500/25 transition transform hover:-translate-y-0.5">
                5. Contact us &rarr;
            </a>
            <a href="<?= url('services') ?>" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-dark-700/80 hover:bg-dark-600 text-slate-200 font-semibold border border-white/10 transition">
                1. Services
            </a>
        </div>

        <!-- CLEAN CINEMATIC HERO VIDEO SHOWCASE -->
        <div class="relative max-w-5xl mx-auto rounded-3xl overflow-hidden glass-card border border-white/15 shadow-2xl p-2 sm:p-3 group">
            
            <div class="relative rounded-2xl overflow-hidden aspect-video bg-dark-900 border border-white/10 shadow-2xl">
                <video id="hero-video-player" autoplay loop muted playsinline preload="auto" class="w-full h-full object-cover" poster="<?= asset('images/hero_dashboard.jpg') ?>">
                    <source src="<?= asset('videos/hero_video.mp4') ?>" type="video/mp4">
                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                </video>
            </div>

        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var v = document.getElementById('hero-video-player');
            if (v) {
                v.muted = true;
                var playPromise = v.play();
                if (playPromise !== undefined) {
                    playPromise.catch(function(err) {
                        console.log('Video autoplay prevented by browser policy, awaiting interaction:', err);
                    });
                }
            }
        });
        </script>

        <!-- Trust Stats Counter -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto pt-16 text-left">
            <div class="glass-card p-4 rounded-xl text-center">
                <div class="text-3xl lg:text-4xl font-extrabold text-cyan-400"><span class="stat-counter" data-target="99">99</span>%</div>
                <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Lorem Ipsum</div>
            </div>
            <div class="glass-card p-4 rounded-xl text-center">
                <div class="text-3xl lg:text-4xl font-extrabold text-cyan-400"><span class="stat-counter" data-target="150">150</span>+</div>
                <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Dolor Sit</div>
            </div>
            <div class="glass-card p-4 rounded-xl text-center">
                <div class="text-3xl lg:text-4xl font-extrabold text-cyan-400"><span class="stat-counter" data-target="24">24</span>/7</div>
                <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Amet Consectetur</div>
            </div>
            <div class="glass-card p-4 rounded-xl text-center">
                <div class="text-3xl lg:text-4xl font-extrabold text-cyan-400">100%</div>
                <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Sed Eiusmod</div>
            </div>
        </div>
    </div>
</section>

<!-- 1. SERVICES SECTION -->
<section class="py-24 bg-dark-900/60 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Section 01</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-4">1. Services</h2>
            <p class="text-slate-400 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">1.1 ERP</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <a href="<?= url('services/erp') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Learn more &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">1.2 Cloud</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <a href="<?= url('services/cloud') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Learn more &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">1.3 Security</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <a href="<?= url('services/security') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Learn more &rarr;
                </a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">1.4 Data solutions</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <a href="<?= url('services/data-solutions') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300 flex items-center">
                    Learn more &rarr;
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 2. SAP SECTION -->
<section class="py-24 bg-dark-800/40 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Section 02</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-4">2. SAP</h2>
            <p class="text-slate-400 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">2.1 SAP Consulting</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('sap/consulting') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">2.2 SAP Migration</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('sap/migration') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">2.3 SAP Implementation</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('sap/implementation') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">2.4 SAP Support</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('sap/support') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">2.5 SAP EWM</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('sap/ewm') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">2.6 SAP Hybris</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('sap/hybris') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- 3. INDUSTRIES SECTION -->
<section class="py-24 bg-dark-900/60 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Section 03</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-4">3. Industries</h2>
            <p class="text-slate-400 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">3.1 Manufacturing</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('industries/manufacturing') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">3.2 Services</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('industries/services') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">3.3 Retail</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('industries/retail') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">3.4 Education</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('industries/education') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">3.5 Public sector</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('industries/public-sector') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- 4. ERP DELIVERY SECTION -->
<section class="py-24 bg-dark-800/40 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Section 04</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-4">4. ERP Delivery</h2>
            <p class="text-slate-400 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">4.1 Odoo end to end solutions</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('erp-delivery/odoo') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">4.2 ZOHO ERP</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('erp-delivery/zoho') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>

            <div class="glass-card p-8 rounded-2xl flex flex-col justify-between group">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">4.3 Fresh Desk</h3>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <a href="<?= url('erp-delivery/freshdesk') ?>" class="text-sm font-semibold text-cyan-400 hover:text-cyan-300">Learn more &rarr;</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/cta.php';
require_once __DIR__ . '/includes/footer.php';
?>
PHP;
file_put_contents("$rootDir/index.php", $indexContent);

// 6. About Us Page with team image & company pillars
$aboutContent = <<<PHP
<?php
\$pageTitle = "About Us";
\$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Learn more about Zylvora Technologies.";
require_once __DIR__ . '/includes/header.php';
?>

<section class="py-20 relative tech-grid-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <?= render_breadcrumbs(['About Us' => '']) ?>

        <div class="max-w-3xl mt-6">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Company Profile</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mt-4 tracking-tight">
                About Zylvora Technologies
            </h1>
            <p class="text-lg text-slate-300 mt-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-dark-900/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Showcase Image & Vision -->
        <div class="glass-card p-4 sm:p-6 rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
            <div class="relative rounded-2xl overflow-hidden aspect-[21/9] bg-dark-900 mb-8">
                <img src="<?= asset('images/about_team.jpg') ?>" alt="Zylvora Technologies Global Engineering Center" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-900 via-transparent to-transparent opacity-70"></div>
                <div class="absolute bottom-6 left-6 sm:bottom-8 sm:left-8">
                    <span class="px-3.5 py-1.5 rounded-full text-xs font-semibold bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 backdrop-blur-md">
                        Global Engineering & Technology Center
                    </span>
                    <h3 class="text-xl sm:text-3xl font-bold text-white mt-2">Ideas &bull; Solutions &bull; Global Impact</h3>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 p-4 sm:p-6">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">Lorem Ipsum Dolor Sit Amet</h2>
                    <p class="text-slate-300 leading-relaxed mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="text-slate-400 leading-relaxed">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="glass-card p-8 rounded-2xl bg-gradient-to-br from-cyan-500/10 to-blue-600/10 border border-cyan-500/20">
                    <h3 class="text-xl font-bold text-white mb-4">Consectetur Adipiscing</h3>
                    <ul class="space-y-3 text-sm text-slate-300">
                        <li class="flex items-center"><span class="text-cyan-400 mr-2">&#10003;</span> Lorem ipsum dolor sit amet</li>
                        <li class="flex items-center"><span class="text-cyan-400 mr-2">&#10003;</span> Consectetur adipiscing elit sed</li>
                        <li class="flex items-center"><span class="text-cyan-400 mr-2">&#10003;</span> Tempor incididunt ut labore</li>
                        <li class="flex items-center"><span class="text-cyan-400 mr-2">&#10003;</span> Magna aliqua enim ad minim</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 4 Core Pillars Grid -->
        <div>
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Our Pillars</span>
                <h3 class="text-2xl sm:text-3xl font-bold text-white mt-4">Enterprise Excellence by Design</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="glass-card p-6 rounded-2xl border border-white/10">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center font-bold mb-4">01</div>
                    <h4 class="text-lg font-bold text-white mb-2">Innovation First</h4>
                    <p class="text-sm text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-white/10">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center font-bold mb-4">02</div>
                    <h4 class="text-lg font-bold text-white mb-2">Scalable Architecture</h4>
                    <p class="text-sm text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-white/10">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center font-bold mb-4">03</div>
                    <h4 class="text-lg font-bold text-white mb-2">Zero-Trust Security</h4>
                    <p class="text-sm text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-white/10">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center font-bold mb-4">04</div>
                    <h4 class="text-lg font-bold text-white mb-2">Global Impact</h4>
                    <p class="text-sm text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
require_once __DIR__ . '/includes/cta.php';
require_once __DIR__ . '/includes/footer.php';
?>
PHP;
file_put_contents("$rootDir/about.php", $aboutContent);

// 7. Contact Us Page with Dark Styled Google Maps
$contactContent = <<<PHP
<?php
\$pageTitle = "5. Contact us";
\$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 5. Contact us at Zylvora Technologies.";
require_once __DIR__ . '/includes/header.php';
?>

<section class="py-20 relative tech-grid-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <?= render_breadcrumbs(['5. Contact us' => '']) ?>

        <div class="max-w-3xl mt-6">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Get In Touch</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mt-4 tracking-tight">
                5. Contact us
            </h1>
            <p class="text-lg text-slate-300 mt-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-dark-900/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Form Column -->
            <div class="lg:col-span-7">
                <div class="glass-card p-8 sm:p-10 rounded-3xl border border-white/10 shadow-2xl">
                    <div class="flex items-center justify-between mb-6 pb-4 border-b border-white/10">
                        <h2 class="text-2xl font-bold text-white">Send an Inquiry</h2>
                        <span class="inline-flex items-center text-xs font-semibold text-cyan-400 bg-cyan-500/10 px-3 py-1 rounded-full">
                            <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse mr-1.5"></span> 2-Hour Response SLA
                        </span>
                    </div>

                    <form id="contact-form" action="<?= url('api/send-contact.php') ?>" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Name *</label>
                                <input type="text" name="name" required placeholder="John Doe" class="w-full px-4 py-3 rounded-xl bg-dark-800/80 border border-white/10 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Email *</label>
                                <input type="email" name="email" required placeholder="john@company.com" class="w-full px-4 py-3 rounded-xl bg-dark-800/80 border border-white/10 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Requirement Subject *</label>
                            <select name="service" class="w-full px-4 py-3 rounded-xl bg-dark-800/80 border border-white/10 text-white focus:outline-none focus:border-cyan-400">
                                <option value="1. Services">1. Services</option>
                                <option value="2. SAP">2. SAP</option>
                                <option value="3. Industries">3. Industries</option>
                                <option value="4. ERP Delivery">4. ERP Delivery</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Message *</label>
                            <textarea name="message" rows="4" required placeholder="Lorem ipsum dolor sit amet..." class="w-full px-4 py-3 rounded-xl bg-dark-800/80 border border-white/10 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400"></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-600 text-dark-900 font-bold shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 transition">
                            Submit Inquiry &rarr;
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right Contact Cards & Interactive Google Map -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Quick Contact Cards -->
                <div class="glass-card p-8 rounded-3xl border border-white/10 space-y-6">
                    <h3 class="text-xl font-bold text-white border-l-2 border-cyan-400 pl-3">Contact Information</h3>
                    
                    <div class="space-y-4 text-sm text-slate-300">
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-cyan-500/10 text-cyan-400 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-slate-500 block uppercase font-semibold">Headquarters</span>
                                <span><?= OFFICE_ADDRESS ?></span>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-cyan-500/10 text-cyan-400 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-slate-500 block uppercase font-semibold">Email</span>
                                <span class="text-cyan-400 font-medium"><?= CONTACT_EMAIL ?></span>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-cyan-500/10 text-cyan-400 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <span class="text-xs text-slate-500 block uppercase font-semibold">Direct Phone</span>
                                <span><?= CONTACT_PHONE ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interactive Embedded Google Map -->
                <div class="glass-card p-3 rounded-3xl border border-white/10 overflow-hidden shadow-2xl">
                    <div class="px-4 py-2 flex items-center justify-between text-xs text-slate-400 border-b border-white/5 mb-2">
                        <span class="font-mono text-cyan-400">&bull; Chennai OMR IT Corridor Location</span>
                        <a href="https://maps.google.com/?q=OMR+IT+Corridor+Chennai" target="_blank" rel="noopener" class="text-cyan-400 hover:underline">Open in Maps &rarr;</a>
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-dark-900 border border-white/10 relative">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62211.751381283625!2d80.20015822606558!3d12.937233827618992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525c5d012484ab%3A0xb3634024b4557ea7!2sOld%20Mahabalipuram%20Rd%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                            width="100%" 
                            height="100%" 
                            style="border:0; filter: invert(90%) hue-rotate(180deg) contrast(1.2);" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
PHP;
file_put_contents("$rootDir/contact.php", $contactContent);

// 8. Careers Page with culture photography & perks
$careersContent = <<<PHP
<?php
\$pageTitle = "Careers";
\$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Join Zylvora Technologies.";
require_once __DIR__ . '/includes/header.php';
?>

<section class="py-20 relative tech-grid-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <?= render_breadcrumbs(['Careers' => '']) ?>

        <div class="max-w-3xl mt-6">
            <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Join Our Team</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mt-4 tracking-tight">
                Careers at Zylvora Technologies
            </h1>
            <p class="text-lg text-slate-300 mt-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-dark-900/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Workplace Culture Image Showcase -->
        <div class="glass-card p-4 sm:p-6 rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
            <div class="relative rounded-2xl overflow-hidden aspect-[21/9] bg-dark-900 mb-8">
                <img src="<?= asset('images/careers_culture.jpg') ?>" alt="Zylvora Agile Engineering Workspace Culture" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-900 via-transparent to-transparent opacity-70"></div>
                <div class="absolute bottom-6 left-6 sm:bottom-8 sm:left-8">
                    <span class="px-3.5 py-1.5 rounded-full text-xs font-semibold bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 backdrop-blur-md">
                        Agile &bull; Autonomous &bull; High Impact
                    </span>
                    <h3 class="text-xl sm:text-3xl font-bold text-white mt-2">Build The Future of Enterprise Systems</h3>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4 sm:p-6">
                <div class="glass-card p-6 rounded-2xl border border-white/10">
                    <div class="text-cyan-400 text-2xl font-bold mb-2">01. Autonomy</div>
                    <p class="text-sm text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-white/10">
                    <div class="text-cyan-400 text-2xl font-bold mb-2">02. Modern Stack</div>
                    <p class="text-sm text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-white/10">
                    <div class="text-cyan-400 text-2xl font-bold mb-2">03. Global Growth</div>
                    <p class="text-sm text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
                </div>
            </div>
        </div>

        <!-- Open Positions List -->
        <div>
            <div class="max-w-2xl mb-8">
                <span class="text-xs font-bold text-cyan-400 uppercase tracking-widest bg-cyan-500/10 px-3.5 py-1.5 rounded-full border border-cyan-500/20">Open Positions</span>
                <h3 class="text-2xl sm:text-3xl font-bold text-white mt-4">Current Opportunities</h3>
            </div>

            <div class="space-y-6">
                <div class="glass-card p-8 rounded-3xl flex flex-col md:flex-row justify-between items-start md:items-center gap-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <div>
                        <div class="flex items-center space-x-3 mb-2">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-cyan-500/10 text-cyan-400 border border-cyan-500/20">Full-Time</span>
                            <span class="text-xs text-slate-400">Engineering &bull; SAP Practice</span>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Senior SAP S/4HANA Architect</h2>
                        <p class="text-sm text-slate-400 mt-2 max-w-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <a href="<?= url('contact') ?>" class="px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-600 text-dark-900 font-bold hover:shadow-lg hover:shadow-cyan-500/25 transition">
                        Apply Now &rarr;
                    </a>
                </div>

                <div class="glass-card p-8 rounded-3xl flex flex-col md:flex-row justify-between items-start md:items-center gap-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <div>
                        <div class="flex items-center space-x-3 mb-2">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-cyan-500/10 text-cyan-400 border border-cyan-500/20">Full-Time</span>
                            <span class="text-xs text-slate-400">Cloud & Security</span>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Lead Cloud & DevOps Solutions Architect</h2>
                        <p class="text-sm text-slate-400 mt-2 max-w-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <a href="<?= url('contact') ?>" class="px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-600 text-dark-900 font-bold hover:shadow-lg hover:shadow-cyan-500/25 transition">
                        Apply Now &rarr;
                    </a>
                </div>

                <div class="glass-card p-8 rounded-3xl flex flex-col md:flex-row justify-between items-start md:items-center gap-6 border border-white/10 hover:border-cyan-400/40 transition">
                    <div>
                        <div class="flex items-center space-x-3 mb-2">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-cyan-500/10 text-cyan-400 border border-cyan-500/20">Full-Time</span>
                            <span class="text-xs text-slate-400">ERP Ecosystems</span>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Odoo & Zoho Senior Technical Consultant</h2>
                        <p class="text-sm text-slate-400 mt-2 max-w-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                    <a href="<?= url('contact') ?>" class="px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-600 text-dark-900 font-bold hover:shadow-lg hover:shadow-cyan-500/25 transition">
                        Apply Now &rarr;
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
require_once __DIR__ . '/includes/cta.php';
require_once __DIR__ . '/includes/footer.php';
?>
PHP;
file_put_contents("$rootDir/careers.php", $careersContent);

echo "All pages regenerated with rich imagery, video showcases, and Google Maps.\n";
