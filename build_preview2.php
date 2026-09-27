<?php
/**
 * Zylvora Technologies - Corporate Classic Version (Preview 2 Generator)
 * Creates a complete, distinct Light & Executive Navy / Sapphire & Gold corporate edition in /preview2
 */

$rootDir = 'D:/projects/Zylvora';
$preview2Dir = 'D:/projects/Zylvora/preview2';
$xamppDir = 'C:/xampp/htdocs/Zylvora/preview2';

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

// 1. Prepare preview2 directories
rrmdir($preview2Dir);
mkdir($preview2Dir, 0777, true);
mkdir("$preview2Dir/services", 0777, true);
mkdir("$preview2Dir/sap", 0777, true);
mkdir("$preview2Dir/industries", 0777, true);
mkdir("$preview2Dir/erp-delivery", 0777, true);
mkdir("$preview2Dir/assets", 0777, true);
mkdir("$preview2Dir/assets/css", 0777, true);
mkdir("$preview2Dir/assets/js", 0777, true);
mkdir("$preview2Dir/assets/images", 0777, true);
mkdir("$preview2Dir/assets/videos", 0777, true);

// 2. Copy images and videos
foreach (glob("$rootDir/assets/images/*.*") as $img) {
    copy($img, "$preview2Dir/assets/images/" . basename($img));
}
foreach (glob("$rootDir/assets/videos/*.*") as $vid) {
    copy($vid, "$preview2Dir/assets/videos/" . basename($vid));
}

// 3. Create Corporate Classic CSS (preview2/assets/css/classic.css)
$classicCss = <<<'CSS'
/* ==============================================================================
   Zylvora Technologies - Corporate Classic Theme (Version 2)
   Executive Navy, Sapphire Blue, Warm Amber Gold & Crisp Light Aesthetics
   ============================================================================== */

:root {
    --color-bg-base: #f8fafc;
    --color-bg-card: #ffffff;
    --color-primary: #0f172a;
    --color-accent-blue: #2563eb;
    --color-accent-gold: #d97706;
    --color-text-main: #0f172a;
    --color-text-muted: #475569;
}

body {
    background-color: var(--color-bg-base);
    color: var(--color-text-main);
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    overflow-x: hidden;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}
::-webkit-scrollbar-track {
    background: #f1f5f9;
}
::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
}
::-webkit-scrollbar-thumb:hover {
    background: #2563eb;
}

/* Corporate Glass Elements */
.corporate-nav {
    background: rgba(255, 255, 255, 0.96);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border-bottom: 1px solid #e2e8f0;
    box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);
}

.corporate-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 1rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.corporate-card:hover {
    border-color: #93c5fd;
    transform: translateY(-4px);
    box-shadow: 0 20px 25px -5px rgba(37, 99, 235, 0.08), 0 8px 10px -6px rgba(37, 99, 235, 0.04);
}

/* Dropdown styling */
.dropdown-menu {
    display: none;
    opacity: 0;
    transform: translateY(4px);
    transition: opacity 0.2s ease, transform 0.2s ease;
}

.group:hover .dropdown-menu {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

.dropdown-menu::before {
    content: '';
    position: absolute;
    top: -14px;
    left: 0;
    right: 0;
    height: 14px;
    display: block;
}

/* Corporate Grid Pattern */
.corporate-pattern {
    background-image: 
        linear-gradient(to right, rgba(15, 23, 42, 0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(15, 23, 42, 0.03) 1px, transparent 1px);
    background-size: 32px 32px;
}

.radial-blue-glow {
    background: radial-gradient(circle at 50% 20%, rgba(37, 99, 235, 0.08) 0%, rgba(217, 119, 6, 0.03) 50%, transparent 80%);
}
CSS;
file_put_contents("$preview2Dir/assets/css/classic.css", $classicCss);

// 4. Create Corporate JS (preview2/assets/js/classic.js)
$classicJs = <<<'JS'
/**
 * Zylvora Technologies - Corporate Classic JS Engine
 */
document.addEventListener('DOMContentLoaded', () => {
    // Mobile Drawer
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    if (mobileMenuBtn && mobileMenu) {
        const openMenu = () => {
            mobileMenu.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        };
        const closeMenu = () => {
            mobileMenu.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        };

        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (mobileMenu.classList.contains('hidden')) {
                openMenu();
            } else {
                closeMenu();
            }
        });

        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', (e) => {
                e.stopPropagation();
                closeMenu();
            });
        }

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => closeMenu());
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                closeMenu();
            }
        });
    }

    // Video Autoplay enforcer
    const video = document.querySelector('video');
    if (video) {
        video.play().catch(() => {
            video.muted = true;
            video.play();
        });
    }
});
JS;
file_put_contents("$preview2Dir/assets/js/classic.js", $classicJs);

// 5. Template Helper Functions for Version 2
function renderLayout($title, $desc, $content, $depth = 0, $activeSlug = '') {
    $prefix = $depth == 0 ? './' : '../';
    $darkVersionLink = $depth == 0 ? '../dark/index.html' : '../../dark/index.html';
    $sleekVersionLink = $depth == 0 ? '../sleek/index.html' : '../../sleek/index.html';
    
    // Navigation items
    $navHtml = <<<NAV
    <header class="sticky top-0 z-50 corporate-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Logo & Version 2 Badge -->
                <a href="{$prefix}index.html" class="flex items-center space-x-3 group">
                    <img src="{$prefix}assets/images/logo.png" alt="Zylvora Technologies" class="h-10 sm:h-11 w-auto object-contain">
                    <span class="hidden sm:inline-block px-2.5 py-0.5 text-[11px] font-bold tracking-wide uppercase rounded-full bg-blue-50 text-blue-700 border border-blue-200">Classic</span>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center space-x-1 xl:space-x-2 text-sm font-semibold text-slate-700">
                    <a href="{$prefix}index.html" class="px-3 py-2 rounded-lg transition hover:text-blue-600 hover:bg-slate-50">Home</a>
                    
                    <!-- 1. Services Dropdown -->
                    <div class="relative group">
                        <a href="{$prefix}services/index.html" class="px-3 py-2 rounded-lg flex items-center space-x-1 transition group-hover:text-blue-600 group-hover:bg-slate-50">
                            <span>1. Services</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="dropdown-menu absolute left-0 top-full pt-2 w-64 z-50">
                            <div class="rounded-xl bg-white border border-slate-200 shadow-xl p-2">
                                <a href="{$prefix}services/erp.html" class="block px-4 py-2.5 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">1.1 ERP</div>
                                    <div class="text-xs text-slate-500">Enterprise Resource Planning</div>
                                </a>
                                <a href="{$prefix}services/cloud.html" class="block px-4 py-2.5 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">1.2 Cloud</div>
                                    <div class="text-xs text-slate-500">Cloud Infrastructure</div>
                                </a>
                                <a href="{$prefix}services/security.html" class="block px-4 py-2.5 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">1.3 Security</div>
                                    <div class="text-xs text-slate-500">Cybersecurity Solutions</div>
                                </a>
                                <a href="{$prefix}services/data-solutions.html" class="block px-4 py-2.5 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">1.4 Data solutions</div>
                                    <div class="text-xs text-slate-500">Data Analytics & Management</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 2. SAP Practice Dropdown -->
                    <div class="relative group">
                        <a href="{$prefix}sap/index.html" class="px-3 py-2 rounded-lg flex items-center space-x-1 transition group-hover:text-blue-600 group-hover:bg-slate-50">
                            <span class="text-blue-700 font-bold">2. SAP</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="dropdown-menu absolute left-0 top-full pt-2 w-72 z-50">
                            <div class="rounded-xl bg-white border border-slate-200 shadow-xl p-2">
                                <a href="{$prefix}sap/consulting.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">2.1 SAP Consulting</div>
                                </a>
                                <a href="{$prefix}sap/migration.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">2.2 SAP Migration</div>
                                </a>
                                <a href="{$prefix}sap/implementation.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">2.3 SAP Implementation</div>
                                </a>
                                <a href="{$prefix}sap/support.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">2.4 SAP Support</div>
                                </a>
                                <a href="{$prefix}sap/ewm.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">2.5 SAP EWM</div>
                                </a>
                                <a href="{$prefix}sap/hybris.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">2.6 SAP Hybris</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Industries Dropdown -->
                    <div class="relative group">
                        <a href="{$prefix}industries/index.html" class="px-3 py-2 rounded-lg flex items-center space-x-1 transition group-hover:text-blue-600 group-hover:bg-slate-50">
                            <span>3. Industries</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="dropdown-menu absolute left-0 top-full pt-2 w-64 z-50">
                            <div class="rounded-xl bg-white border border-slate-200 shadow-xl p-2">
                                <a href="{$prefix}industries/manufacturing.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">3.1 Manufacturing</div>
                                </a>
                                <a href="{$prefix}industries/services.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">3.2 Services</div>
                                </a>
                                <a href="{$prefix}industries/retail.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">3.3 Retail</div>
                                </a>
                                <a href="{$prefix}industries/education.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">3.4 Education</div>
                                </a>
                                <a href="{$prefix}industries/public-sector.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">3.5 Public sector</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 4. ERP Delivery Dropdown -->
                    <div class="relative group">
                        <a href="{$prefix}erp-delivery/index.html" class="px-3 py-2 rounded-lg flex items-center space-x-1 transition group-hover:text-blue-600 group-hover:bg-slate-50">
                            <span>4. ERP Delivery</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="dropdown-menu absolute left-0 top-full pt-2 w-72 z-50">
                            <div class="rounded-xl bg-white border border-slate-200 shadow-xl p-2">
                                <a href="{$prefix}erp-delivery/odoo.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">4.1 Odoo end to end solutions</div>
                                </a>
                                <a href="{$prefix}erp-delivery/zoho.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">4.2 ZOHO ERP</div>
                                </a>
                                <a href="{$prefix}erp-delivery/freshdesk.html" class="block px-4 py-2 rounded-lg text-slate-700 hover:text-blue-600 hover:bg-blue-50/70 transition">
                                    <div class="font-bold text-sm">4.3 Fresh Desk</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{$prefix}about.html" class="px-3 py-2 rounded-lg transition hover:text-blue-600 hover:bg-slate-50">About Us</a>
                    <a href="{$prefix}careers.html" class="px-3 py-2 rounded-lg transition hover:text-blue-600 hover:bg-slate-50">Careers</a>
                </nav>

                <!-- 5. Contact us Button & Switch Version Button -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="{$darkVersionLink}" class="px-2.5 py-1.5 text-xs font-semibold text-slate-600 hover:text-blue-600 bg-slate-100 hover:bg-slate-200 rounded-lg transition border border-slate-300">
                        Dark
                    </a>
                    <a href="{$sleekVersionLink}" class="px-2.5 py-1.5 text-xs font-semibold text-indigo-700 hover:text-indigo-900 bg-indigo-50 hover:bg-indigo-100 rounded-lg transition border border-indigo-200">
                        ✨ Sleek
                    </a>
                    <a href="{$prefix}contact.html" class="inline-flex items-center justify-center px-4 py-2 text-xs font-bold text-white rounded-lg bg-gradient-to-r from-blue-700 to-indigo-700 hover:from-blue-800 hover:to-indigo-800 shadow-md shadow-blue-500/20 transition">
                        5. Contact us &rarr;
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="flex lg:hidden items-center">
                    <button id="mobile-menu-btn" type="button" aria-label="Toggle Menu" class="text-slate-700 hover:text-blue-600 p-2 rounded-lg bg-slate-100 border border-slate-200">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer Navigation -->
    <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 z-[9999] bg-white/98 backdrop-blur-2xl overflow-y-auto px-6 py-6 border-b border-slate-200 shadow-2xl">
        <div class="flex items-center justify-between pb-6 border-b border-slate-200">
            <a href="{$prefix}index.html" class="flex items-center space-x-2">
                <img src="{$prefix}assets/images/logo.png" alt="Zylvora Technologies" class="h-9 w-auto">
                <span class="px-2 py-0.5 text-[10px] font-bold uppercase rounded bg-blue-100 text-blue-800">Classic</span>
            </a>
            <button id="mobile-menu-close" type="button" aria-label="Close Menu" class="p-2 text-slate-500 hover:text-slate-900 rounded-lg bg-slate-100 border border-slate-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        
        <div class="mt-6 space-y-4 pb-12">
            <a href="{$prefix}index.html" class="block py-2 text-base font-bold text-slate-900 hover:text-blue-600">Home</a>
            
            <div class="py-3 border-t border-slate-200">
                <div class="text-xs font-bold text-blue-700 uppercase tracking-wider mb-2">1. Services</div>
                <div class="space-y-2 pl-3">
                    <a href="{$prefix}services/erp.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">1.1 ERP</a>
                    <a href="{$prefix}services/cloud.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">1.2 Cloud</a>
                    <a href="{$prefix}services/security.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">1.3 Security</a>
                    <a href="{$prefix}services/data-solutions.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">1.4 Data solutions</a>
                </div>
            </div>

            <div class="py-3 border-t border-slate-200">
                <div class="text-xs font-bold text-blue-700 uppercase tracking-wider mb-2">2. SAP</div>
                <div class="space-y-2 pl-3">
                    <a href="{$prefix}sap/consulting.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">2.1 SAP Consulting</a>
                    <a href="{$prefix}sap/migration.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">2.2 SAP Migration</a>
                    <a href="{$prefix}sap/implementation.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">2.3 SAP Implementation</a>
                    <a href="{$prefix}sap/support.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">2.4 SAP Support</a>
                    <a href="{$prefix}sap/ewm.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">2.5 SAP EWM</a>
                    <a href="{$prefix}sap/hybris.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">2.6 SAP Hybris</a>
                </div>
            </div>

            <div class="py-3 border-t border-slate-200">
                <div class="text-xs font-bold text-blue-700 uppercase tracking-wider mb-2">3. Industries</div>
                <div class="space-y-2 pl-3">
                    <a href="{$prefix}industries/manufacturing.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">3.1 Manufacturing</a>
                    <a href="{$prefix}industries/services.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">3.2 Services</a>
                    <a href="{$prefix}industries/retail.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">3.3 Retail</a>
                    <a href="{$prefix}industries/education.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">3.4 Education</a>
                    <a href="{$prefix}industries/public-sector.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">3.5 Public sector</a>
                </div>
            </div>

            <div class="py-3 border-t border-slate-200">
                <div class="text-xs font-bold text-blue-700 uppercase tracking-wider mb-2">4. ERP Delivery</div>
                <div class="space-y-2 pl-3">
                    <a href="{$prefix}erp-delivery/odoo.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">4.1 Odoo end to end solutions</a>
                    <a href="{$prefix}erp-delivery/zoho.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">4.2 ZOHO ERP</a>
                    <a href="{$prefix}erp-delivery/freshdesk.html" class="block py-1 text-sm text-slate-700 hover:text-blue-600 font-medium">4.3 Fresh Desk</a>
                </div>
            </div>

            <div class="py-3 border-t border-slate-200 space-y-2">
                <a href="{$prefix}about.html" class="block py-2 text-base font-bold text-slate-900 hover:text-blue-600">About Us</a>
                <a href="{$prefix}careers.html" class="block py-2 text-base font-bold text-slate-900 hover:text-blue-600">Careers</a>
            </div>

            <div class="pt-4 pb-6 space-y-3">
                <a href="{$prefix}contact.html" class="w-full text-center block py-3 px-6 rounded-xl bg-blue-700 hover:bg-blue-800 text-white font-bold shadow-lg shadow-blue-500/20">
                    5. Contact us &rarr;
                </a>
            </div>
        </div>
    </div>
NAV;

    $footerHtml = <<<FOOTER
    <footer class="bg-slate-900 text-slate-300 border-t border-slate-800 pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800">
                <div class="lg:col-span-2 space-y-4">
                    <a href="{$prefix}index.html" class="inline-flex items-center bg-white px-3.5 py-2 rounded-xl shadow-lg border border-slate-700 hover:border-slate-500 transition-all group">
                        <img src="{$prefix}assets/images/logo.png" alt="Zylvora Technologies" class="h-8 sm:h-9 w-auto object-contain transition-transform group-hover:scale-105">
                    </a>
                    <p class="text-sm text-slate-400 max-w-sm">
                        Global enterprise digital transformation partner specializing in SAP S/4HANA, Next-Gen ERP, Cloud Infrastructure, and Data Intelligence.
                    </p>
                    <div class="flex items-center space-x-3 pt-2">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-900/60 text-blue-300 border border-blue-700">ISO 9001 Certified</span>
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-amber-900/60 text-amber-300 border border-amber-700">SAP Partner</span>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">1. Services</h4>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="{$prefix}services/erp.html" class="hover:text-blue-400 transition">1.1 ERP</a></li>
                        <li><a href="{$prefix}services/cloud.html" class="hover:text-blue-400 transition">1.2 Cloud</a></li>
                        <li><a href="{$prefix}services/security.html" class="hover:text-blue-400 transition">1.3 Security</a></li>
                        <li><a href="{$prefix}services/data-solutions.html" class="hover:text-blue-400 transition">1.4 Data solutions</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">2. SAP Practice</h4>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="{$prefix}sap/consulting.html" class="hover:text-blue-400 transition">2.1 SAP Consulting</a></li>
                        <li><a href="{$prefix}sap/migration.html" class="hover:text-blue-400 transition">2.2 SAP Migration</a></li>
                        <li><a href="{$prefix}sap/implementation.html" class="hover:text-blue-400 transition">2.3 SAP Implementation</a></li>
                        <li><a href="{$prefix}sap/support.html" class="hover:text-blue-400 transition">2.4 SAP Support</a></li>
                        <li><a href="{$prefix}sap/ewm.html" class="hover:text-blue-400 transition">2.5 SAP EWM</a></li>
                        <li><a href="{$prefix}sap/hybris.html" class="hover:text-blue-400 transition">2.6 SAP Hybris</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">4. ERP Delivery</h4>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="{$prefix}erp-delivery/odoo.html" class="hover:text-blue-400 transition">4.1 Odoo Solutions</a></li>
                        <li><a href="{$prefix}erp-delivery/zoho.html" class="hover:text-blue-400 transition">4.2 ZOHO ERP</a></li>
                        <li><a href="{$prefix}erp-delivery/freshdesk.html" class="hover:text-blue-400 transition">4.3 Fresh Desk</a></li>
                        <li class="pt-2"><a href="{$prefix}contact.html" class="text-blue-400 hover:text-white font-semibold">5. Contact us &rarr;</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500">
                <p>&copy; 2026 Zylvora Technologies. All rights reserved. Corporate Classic Edition.</p>
                <div class="flex space-x-6 mt-4 sm:mt-0">
                    <a href="{$prefix}about.html" class="hover:text-slate-400">About</a>
                    <a href="{$prefix}careers.html" class="hover:text-slate-400">Careers</a>
                    <a href="{$prefix}contact.html" class="hover:text-slate-400">Contact</a>
                </div>
            </div>
        </div>
    </footer>
FOOTER;

    return <<<HTML
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title} | Zylvora Technologies</title>
    <meta name="description" content="{$desc}">
    <link rel="icon" type="image/png" href="{$prefix}assets/images/logo.png">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Corporate Classic Styles -->
    <link rel="stylesheet" href="{$prefix}assets/css/classic.css">
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen flex flex-col selection:bg-blue-600 selection:text-white">
    {$navHtml}
    
    <main class="flex-grow">
        {$content}
    </main>

    {$footerHtml}

    <script src="{$prefix}assets/js/classic.js"></script>
</body>
</html>
HTML;
}

// 6. Generate Subpage Content Function
function generateSubpageHtml($num, $title, $category, $desc, $depth = 1) {
    $prefix = $depth == 0 ? './' : '../';
    
    return <<<HTML
    <!-- Page Header Section -->
    <section class="relative bg-white border-b border-slate-200 py-20 overflow-hidden corporate-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-blue-700 mb-4">
                <span>{$category}</span>
                <span>/</span>
                <span class="text-amber-600">{$num}</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-6">
                {$title}
            </h1>
            <p class="text-lg md:text-xl text-slate-600 max-w-3xl leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </p>
        </div>
    </section>

    <!-- Detailed Modules Grid -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                
                <div class="corporate-card p-8 space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-blue-700 font-bold text-xl mb-4">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Strategic Alignment & Discovery</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    </p>
                    <ul class="space-y-2 pt-2 text-xs font-semibold text-slate-700">
                        <li class="flex items-center space-x-2">
                            <span class="text-blue-600 font-bold">✓</span>
                            <span>Comprehensive enterprise assessment</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="text-blue-600 font-bold">✓</span>
                            <span>Standard operating procedure audit</span>
                        </li>
                    </ul>
                </div>

                <div class="corporate-card p-8 space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold text-xl mb-4">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Implementation & Transformation</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
                    </p>
                    <ul class="space-y-2 pt-2 text-xs font-semibold text-slate-700">
                        <li class="flex items-center space-x-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>Scalable modular architecture</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="text-indigo-600 font-bold">✓</span>
                            <span>Zero-downtime data migration</span>
                        </li>
                    </ul>
                </div>

                <div class="corporate-card p-8 space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-xl mb-4">
                        03
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Operational Excellence & Support</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                    </p>
                    <ul class="space-y-2 pt-2 text-xs font-semibold text-slate-700">
                        <li class="flex items-center space-x-2">
                            <span class="text-amber-600 font-bold">✓</span>
                            <span>24/7 SLA-driven monitoring</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="text-amber-600 font-bold">✓</span>
                            <span>Continuous performance tuning</span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Executive Value Banner -->
            <div class="bg-gradient-to-r from-blue-900 to-indigo-900 rounded-2xl p-10 text-white shadow-xl flex flex-col md:flex-row items-center justify-between">
                <div class="space-y-2 mb-6 md:mb-0 max-w-xl">
                    <h3 class="text-2xl font-bold">Ready to accelerate with {$title}?</h3>
                    <p class="text-blue-200 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.
                    </p>
                </div>
                <a href="{$prefix}contact.html" class="px-8 py-3.5 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl shadow-lg transition">
                    5. Contact our Specialists &rarr;
                </a>
            </div>
        </div>
    </section>
HTML;
}

// 7. Render Homepage Content
$homeContent = <<<'HTML'
<!-- Hero Section with Local Video Stream & Corporate Metrics -->
<section class="relative bg-white border-b border-slate-200 pt-12 pb-20 overflow-hidden corporate-pattern radial-blue-glow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Headline & Introduction -->
            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-800 text-xs font-bold uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    <span>Enterprise Digital Architecture</span>
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1]">
                    Next-Generation <span class="text-blue-700">ERP & SAP</span> Transformation
                </h1>
                
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="./contact.html" class="px-7 py-3.5 rounded-xl bg-blue-700 hover:bg-blue-800 text-white font-bold text-sm shadow-lg shadow-blue-500/20 transition flex items-center space-x-2">
                        <span>5. Contact Us</span>
                        <span>&rarr;</span>
                    </a>
                    <a href="./services/index.html" class="px-7 py-3.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-sm border border-slate-300 transition">
                        Explore 1. Services
                    </a>
                </div>

                <!-- Trust Metrics -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-slate-200">
                    <div>
                        <div class="text-2xl font-extrabold text-blue-700">100%</div>
                        <div class="text-xs text-slate-500 font-semibold uppercase">PDF Compliant</div>
                    </div>
                    <div>
                        <div class="text-2xl font-extrabold text-indigo-700">27</div>
                        <div class="text-xs text-slate-500 font-semibold uppercase">Modular Pages</div>
                    </div>
                    <div>
                        <div class="text-2xl font-extrabold text-amber-600">24/7</div>
                        <div class="text-xs text-slate-500 font-semibold uppercase">Global Support</div>
                    </div>
                </div>
            </div>

            <!-- Right Video Container -->
            <div class="lg:col-span-6">
                <div class="rounded-2xl overflow-hidden shadow-2xl border border-slate-200 bg-slate-900 aspect-video">
                    <video 
                        autoplay 
                        loop 
                        muted 
                        playsinline 
                        preload="auto"
                        class="w-full h-full object-cover">
                        <source src="./assets/videos/hero_video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Core Pillars Section -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-blue-100 text-blue-800 border border-blue-200">Our Capabilities</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Comprehensive Solutions Matrix</h2>
            <p class="text-slate-600 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <a href="./services/index.html" class="corporate-card p-6 block group">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center font-bold text-xl mb-4 group-hover:bg-blue-600 group-hover:text-white transition">
                    1
                </div>
                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-700 transition">1. Services</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. ERP, Cloud, Security & Data solutions.
                </p>
                <div class="mt-4 text-xs font-bold text-blue-700 flex items-center space-x-1">
                    <span>View Modules</span>
                    <span>&rarr;</span>
                </div>
            </a>

            <a href="./sap/index.html" class="corporate-card p-6 block group">
                <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-700 flex items-center justify-center font-bold text-xl mb-4 group-hover:bg-indigo-600 group-hover:text-white transition">
                    2
                </div>
                <h3 class="text-lg font-bold text-slate-900 group-hover:text-indigo-700 transition">2. SAP Practice</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consulting, Migration, EWM & Hybris.
                </p>
                <div class="mt-4 text-xs font-bold text-indigo-700 flex items-center space-x-1">
                    <span>View Modules</span>
                    <span>&rarr;</span>
                </div>
            </a>

            <a href="./industries/index.html" class="corporate-card p-6 block group">
                <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-800 flex items-center justify-center font-bold text-xl mb-4 group-hover:bg-slate-800 group-hover:text-white transition">
                    3
                </div>
                <h3 class="text-lg font-bold text-slate-900 group-hover:text-slate-800 transition">3. Industries</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Manufacturing, Retail, Public Sector.
                </p>
                <div class="mt-4 text-xs font-bold text-slate-800 flex items-center space-x-1">
                    <span>View Modules</span>
                    <span>&rarr;</span>
                </div>
            </a>

            <a href="./erp-delivery/index.html" class="corporate-card p-6 block group">
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center font-bold text-xl mb-4 group-hover:bg-amber-600 group-hover:text-white transition">
                    4
                </div>
                <h3 class="text-lg font-bold text-slate-900 group-hover:text-amber-700 transition">4. ERP Delivery</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odoo, Zoho ERP & Freshdesk.
                </p>
                <div class="mt-4 text-xs font-bold text-amber-700 flex items-center space-x-1">
                    <span>View Modules</span>
                    <span>&rarr;</span>
                </div>
            </a>

        </div>
    </div>
</section>
HTML;

// 8. Render About Us Page
$aboutContent = <<<'HTML'
<section class="py-20 bg-white border-b border-slate-200 corporate-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-6">
                <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-blue-50 text-blue-700 border border-blue-200">About Zylvora</span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Engineering Enterprise Excellence
                </h1>
                <p class="text-slate-600 text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-200">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <div class="text-2xl font-bold text-blue-700">10+ Years</div>
                        <div class="text-xs text-slate-500 font-semibold uppercase mt-1">Domain Heritage</div>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <div class="text-2xl font-bold text-amber-600">500+</div>
                        <div class="text-xs text-slate-500 font-semibold uppercase mt-1">Global Deployments</div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6">
                <div class="rounded-2xl overflow-hidden shadow-2xl border border-slate-200">
                    <img src="./assets/images/about_team.jpg" alt="Zylvora Executive Team" class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </div>
</section>
HTML;

// 9. Render Careers Page
$careersContent = <<<'HTML'
<section class="py-20 bg-white border-b border-slate-200 corporate-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-16">
            <div class="lg:col-span-6 space-y-6">
                <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-amber-50 text-amber-800 border border-amber-200">Join Our Team</span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Shape the Future of Enterprise Technology
                </h1>
                <p class="text-slate-600 text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
                <a href="#openings" class="inline-block px-7 py-3.5 bg-blue-700 hover:bg-blue-800 text-white font-bold rounded-xl shadow-lg transition">
                    View Open Roles &darr;
                </a>
            </div>
            <div class="lg:col-span-6">
                <div class="rounded-2xl overflow-hidden shadow-2xl border border-slate-200">
                    <img src="./assets/images/careers_culture.jpg" alt="Work Culture at Zylvora" class="w-full h-auto object-cover">
                </div>
            </div>
        </div>

        <!-- Open Roles List -->
        <div id="openings" class="space-y-4 max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold text-slate-900 mb-6">Current Opportunities</h3>
            
            <div class="corporate-card p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h4 class="text-lg font-bold text-slate-900">Senior SAP S/4HANA Solution Architect</h4>
                    <p class="text-xs text-slate-500 mt-1">Full-time • Hybrid (Chennai / Remote)</p>
                </div>
                <a href="./contact.html" class="px-5 py-2.5 rounded-lg bg-blue-50 text-blue-700 hover:bg-blue-100 font-bold text-xs transition self-start sm:self-auto">
                    Apply Now &rarr;
                </a>
            </div>

            <div class="corporate-card p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h4 class="text-lg font-bold text-slate-900">Lead Cloud Security Engineer</h4>
                    <p class="text-xs text-slate-500 mt-1">Full-time • Chennai OMR IT Corridor</p>
                </div>
                <a href="./contact.html" class="px-5 py-2.5 rounded-lg bg-blue-50 text-blue-700 hover:bg-blue-100 font-bold text-xs transition self-start sm:self-auto">
                    Apply Now &rarr;
                </a>
            </div>

            <div class="corporate-card p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h4 class="text-lg font-bold text-slate-900">Senior Odoo & ERP Consultant</h4>
                    <p class="text-xs text-slate-500 mt-1">Full-time • Remote</p>
                </div>
                <a href="./contact.html" class="px-5 py-2.5 rounded-lg bg-blue-50 text-blue-700 hover:bg-blue-100 font-bold text-xs transition self-start sm:self-auto">
                    Apply Now &rarr;
                </a>
            </div>
        </div>
    </div>
</section>
HTML;

// 10. Render Contact Page
$contactContent = <<<'HTML'
<section class="py-20 bg-white border-b border-slate-200 corporate-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-blue-50 text-blue-700 border border-blue-200">5. Contact us</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900">Get in Touch with Our Experts</h1>
            <p class="text-slate-600 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Contact Form -->
            <div class="lg:col-span-6 corporate-card p-8 sm:p-10 space-y-6">
                <h3 class="text-xl font-bold text-slate-900">Send an Inquiry</h3>
                <form class="space-y-4" onsubmit="event.preventDefault(); alert('Inquiry submitted successfully!');">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Full Name</label>
                        <input type="text" required placeholder="John Doe" class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-300 text-slate-900 text-sm focus:outline-none focus:border-blue-600">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Business Email</label>
                        <input type="email" required placeholder="john@enterprise.com" class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-300 text-slate-900 text-sm focus:outline-none focus:border-blue-600">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Area of Interest</label>
                        <select class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-300 text-slate-900 text-sm focus:outline-none focus:border-blue-600">
                            <option>1. Services (ERP / Cloud / Security)</option>
                            <option>2. SAP (S/4HANA Migration & Implementation)</option>
                            <option>3. Industries Solution</option>
                            <option>4. ERP Delivery (Odoo / Zoho / Freshdesk)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Message</label>
                        <textarea rows="4" required placeholder="Tell us about your project..." class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-300 text-slate-900 text-sm focus:outline-none focus:border-blue-600"></textarea>
                    </div>
                    <button type="submit" class="w-full py-3.5 bg-blue-700 hover:bg-blue-800 text-white font-bold rounded-lg shadow-md transition">
                        Submit Inquiry &rarr;
                    </button>
                </form>
            </div>

            <!-- Map & Office Info -->
            <div class="lg:col-span-6 space-y-6">
                <div class="corporate-card p-8 space-y-4">
                    <h3 class="text-xl font-bold text-slate-900">Headquarters</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        <strong>Zylvora Technologies Pvt Ltd</strong><br>
                        OMR IT Express Highway, Sholinganallur,<br>
                        Chennai, Tamil Nadu 600119, India
                    </p>
                    <div class="pt-2 text-xs space-y-1 text-slate-500">
                        <p><strong>Email:</strong> contact@zylvora.com</p>
                        <p><strong>Phone:</strong> +91 (44) 4000-8800</p>
                    </div>
                </div>

                <!-- Google Maps Frame -->
                <div class="rounded-2xl overflow-hidden shadow-lg border border-slate-200 h-72">
                    <iframe 
                        title="Zylvora Technologies Location Map" 
                        class="w-full h-full border-0" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7513227415174!2d80.2246!3d12.9018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525c7e0c4b2693%3A0x8e8334466b0a80e!2sOMR%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>
HTML;

// 11. Array of all 27 Pages to generate
$pagesToGenerate = [
    // Root Pages
    ['file' => "$preview2Dir/index.html", 'title' => 'Enterprise ERP & SAP Solutions', 'desc' => 'Zylvora Technologies Corporate Classic Portal', 'depth' => 0, 'content' => $homeContent],
    ['file' => "$preview2Dir/about.html", 'title' => 'About Us', 'desc' => 'Corporate heritage and enterprise leadership at Zylvora Technologies', 'depth' => 0, 'content' => $aboutContent],
    ['file' => "$preview2Dir/careers.html", 'title' => 'Careers', 'desc' => 'Join our global enterprise technology team', 'depth' => 0, 'content' => $careersContent],
    ['file' => "$preview2Dir/contact.html", 'title' => '5. Contact us', 'desc' => 'Contact Zylvora enterprise specialists', 'depth' => 0, 'content' => $contactContent],
    ['file' => "$preview2Dir/industries.html", 'title' => '3. Industries', 'desc' => 'Industry-specific enterprise solutions', 'depth' => 0, 'content' => generateSubpageHtml('3.', '3. Industries Overview', 'Sector Practices', '', 0)],

    // 1. Services
    ['file' => "$preview2Dir/services/index.html", 'title' => '1. Services', 'desc' => 'Enterprise Services Suite', 'depth' => 1, 'content' => generateSubpageHtml('1.0', '1. Services Overview', 'Enterprise Suite', '')],
    ['file' => "$preview2Dir/services/erp.html", 'title' => '1.1 ERP', 'desc' => 'Enterprise Resource Planning Solutions', 'depth' => 1, 'content' => generateSubpageHtml('1.1', '1.1 ERP Solutions', 'Services', '')],
    ['file' => "$preview2Dir/services/cloud.html", 'title' => '1.2 Cloud', 'desc' => 'Cloud Infrastructure & Migration', 'depth' => 1, 'content' => generateSubpageHtml('1.2', '1.2 Cloud Solutions', 'Services', '')],
    ['file' => "$preview2Dir/services/security.html", 'title' => '1.3 Security', 'desc' => 'Enterprise Cybersecurity Architecture', 'depth' => 1, 'content' => generateSubpageHtml('1.3', '1.3 Security Solutions', 'Services', '')],
    ['file' => "$preview2Dir/services/data-solutions.html", 'title' => '1.4 Data solutions', 'desc' => 'Enterprise Data Analytics & Intelligence', 'depth' => 1, 'content' => generateSubpageHtml('1.4', '1.4 Data solutions', 'Services', '')],

    // 2. SAP
    ['file' => "$preview2Dir/sap/index.html", 'title' => '2. SAP Practice', 'desc' => 'SAP Transformation Suite', 'depth' => 1, 'content' => generateSubpageHtml('2.0', '2. SAP Practice Overview', 'SAP Center of Excellence', '')],
    ['file' => "$preview2Dir/sap/consulting.html", 'title' => '2.1 SAP Consulting', 'desc' => 'Strategic SAP Advisory', 'depth' => 1, 'content' => generateSubpageHtml('2.1', '2.1 SAP Consulting', 'SAP Practice', '')],
    ['file' => "$preview2Dir/sap/migration.html", 'title' => '2.2 SAP Migration', 'desc' => 'S/4HANA Migration Pathways', 'depth' => 1, 'content' => generateSubpageHtml('2.2', '2.2 SAP Migration', 'SAP Practice', '')],
    ['file' => "$preview2Dir/sap/implementation.html", 'title' => '2.3 SAP Implementation', 'desc' => 'Greenfield & Brownfield Deployments', 'depth' => 1, 'content' => generateSubpageHtml('2.3', '2.3 SAP Implementation', 'SAP Practice', '')],
    ['file' => "$preview2Dir/sap/support.html", 'title' => '2.4 SAP Support', 'desc' => '24/7 Managed SAP Operations', 'depth' => 1, 'content' => generateSubpageHtml('2.4', '2.4 SAP Support', 'SAP Practice', '')],
    ['file' => "$preview2Dir/sap/ewm.html", 'title' => '2.5 SAP EWM', 'desc' => 'Extended Warehouse Management', 'depth' => 1, 'content' => generateSubpageHtml('2.5', '2.5 SAP EWM', 'SAP Practice', '')],
    ['file' => "$preview2Dir/sap/hybris.html", 'title' => '2.6 SAP Hybris', 'desc' => 'SAP Commerce Cloud Solutions', 'depth' => 1, 'content' => generateSubpageHtml('2.6', '2.6 SAP Hybris', 'SAP Practice', '')],

    // 3. Industries
    ['file' => "$preview2Dir/industries/index.html", 'title' => '3. Industries', 'desc' => 'Industry Verticals', 'depth' => 1, 'content' => generateSubpageHtml('3.0', '3. Industries Overview', 'Vertical Practices', '')],
    ['file' => "$preview2Dir/industries/manufacturing.html", 'title' => '3.1 Manufacturing', 'desc' => 'Smart Manufacturing Solutions', 'depth' => 1, 'content' => generateSubpageHtml('3.1', '3.1 Manufacturing', 'Industries', '')],
    ['file' => "$preview2Dir/industries/services.html", 'title' => '3.2 Services', 'desc' => 'Professional Services ERP', 'depth' => 1, 'content' => generateSubpageHtml('3.2', '3.2 Services', 'Industries', '')],
    ['file' => "$preview2Dir/industries/retail.html", 'title' => '3.3 Retail', 'desc' => 'Omnichannel Retail Intelligence', 'depth' => 1, 'content' => generateSubpageHtml('3.3', '3.3 Retail', 'Industries', '')],
    ['file' => "$preview2Dir/industries/education.html", 'title' => '3.4 Education', 'desc' => 'Higher Education Systems', 'depth' => 1, 'content' => generateSubpageHtml('3.4', '3.4 Education', 'Industries', '')],
    ['file' => "$preview2Dir/industries/public-sector.html", 'title' => '3.5 Public sector', 'desc' => 'Government & Civic Tech', 'depth' => 1, 'content' => generateSubpageHtml('3.5', '3.5 Public sector', 'Industries', '')],

    // 4. ERP Delivery
    ['file' => "$preview2Dir/erp-delivery/index.html", 'title' => '4. ERP Delivery', 'desc' => 'Agile ERP Ecosystem', 'depth' => 1, 'content' => generateSubpageHtml('4.0', '4. ERP Delivery Suite', 'Ecosystem Platforms', '')],
    ['file' => "$preview2Dir/erp-delivery/odoo.html", 'title' => '4.1 Odoo end to end solutions', 'desc' => 'Certified Odoo Deployment', 'depth' => 1, 'content' => generateSubpageHtml('4.1', '4.1 Odoo end to end solutions', 'ERP Delivery', '')],
    ['file' => "$preview2Dir/erp-delivery/zoho.html", 'title' => '4.2 ZOHO ERP', 'desc' => 'Enterprise Zoho One Stack', 'depth' => 1, 'content' => generateSubpageHtml('4.2', '4.2 ZOHO ERP', 'ERP Delivery', '')],
    ['file' => "$preview2Dir/erp-delivery/freshdesk.html", 'title' => '4.3 Fresh Desk', 'desc' => 'Omnichannel Customer Experience', 'depth' => 1, 'content' => generateSubpageHtml('4.3', '4.3 Fresh Desk', 'ERP Delivery', '')],
];

foreach ($pagesToGenerate as $p) {
    $fullHtml = renderLayout($p['title'], $p['desc'], $p['content'], $p['depth']);
    file_put_contents($p['file'], $fullHtml);
    echo "Generated Version 2: " . basename($p['file']) . "\n";
}

// 12. Copy preview2 to XAMPP for local testing
if (is_dir('C:/xampp/htdocs/Zylvora')) {
    rrmdir($xamppDir);
    mkdir($xamppDir, 0777, true);
    
    // Recursive copy function
    function copy_r($src, $dst) {
        $dir = opendir($src);
        @mkdir($dst);
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
    copy_r($preview2Dir, $xamppDir);
    echo "Synced preview2 to XAMPP: $xamppDir\n";
}

echo "Version 2 (Corporate Classic) preview created successfully at preview2/!\n";
