<?php
/**
 * Zylvora Technologies - Superlative Sleek Aurora Glass Edition (Concept C)
 * Builds preview/sleek/ with all 27 pages in ultra-modern Glass & Aurora aesthetic.
 */

$rootDir = 'D:/projects/Zylvora';
$previewDir = 'D:/projects/Zylvora/preview';
$sleekDir = "$previewDir/sleek";

function rrmdir_sleek($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir . "/" . $object) && !is_link($dir . "/" . $object)) {
                    rrmdir_sleek($dir . "/" . $object);
                } else {
                    @unlink($dir . "/" . $object);
                }
            }
        }
        @rmdir($dir);
    }
}

// 1. Create directories
rrmdir_sleek($sleekDir);
mkdir($sleekDir, 0777, true);
mkdir("$sleekDir/services", 0777, true);
mkdir("$sleekDir/sap", 0777, true);
mkdir("$sleekDir/industries", 0777, true);
mkdir("$sleekDir/erp-delivery", 0777, true);
mkdir("$sleekDir/assets", 0777, true);
mkdir("$sleekDir/assets/css", 0777, true);
mkdir("$sleekDir/assets/js", 0777, true);
mkdir("$sleekDir/assets/images", 0777, true);
mkdir("$sleekDir/assets/videos", 0777, true);

// 2. Copy images, video, sitemap & robots
foreach (glob("$rootDir/assets/images/*.*") as $img) {
    copy($img, "$sleekDir/assets/images/" . basename($img));
}
foreach (glob("$rootDir/assets/videos/*.*") as $vid) {
    copy($vid, "$sleekDir/assets/videos/" . basename($vid));
}
if (file_exists("$rootDir/sitemap.xml")) copy("$rootDir/sitemap.xml", "$sleekDir/sitemap.xml");
if (file_exists("$rootDir/robots.txt")) copy("$rootDir/robots.txt", "$sleekDir/robots.txt");

// 3. Create Sleek CSS (preview/sleek/assets/css/sleek.css)
$sleekCss = <<<'CSS'
/* ==============================================================================
   Zylvora Technologies - Superlative Sleek Aurora Glass Edition (Concept C)
   ============================================================================== */

:root {
    --color-bg-base: #080c14;
    --color-bg-card: rgba(15, 23, 42, 0.65);
    --color-border: rgba(255, 255, 255, 0.09);
    --color-accent-violet: #818cf8;
    --color-accent-cyan: #38bdf8;
    --color-accent-emerald: #34d399;
}

body {
    background-color: var(--color-bg-base);
    color: #f8fafc;
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    overflow-x: hidden;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 6px;
}
::-webkit-scrollbar-track {
    background: #080c14;
}
::-webkit-scrollbar-thumb {
    background: #1e293b;
    border-radius: 9999px;
}
::-webkit-scrollbar-thumb:hover {
    background: #6366f1;
}

/* Floating Glass Navbar */
.glass-nav-sleek {
    background: rgba(11, 17, 30, 0.85);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1);
}

/* Superlative Glass Card */
.glass-card-sleek {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.01) 100%), rgba(11, 17, 30, 0.7);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 1.25rem;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
}

.glass-card-sleek:hover {
    border-color: rgba(129, 140, 248, 0.4);
    transform: translateY(-4px);
    box-shadow: 0 25px 50px -12px rgba(99, 102, 241, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.15);
}

/* Prismatic Gradient Text */
.text-prismatic {
    background: linear-gradient(135deg, #a5b4fc 0%, #38bdf8 50%, #34d399 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-gold-prismatic {
    background: linear-gradient(135deg, #fde047 0%, #f59e0b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Aurora Ambient Glow Backgrounds */
.aurora-mesh {
    background-image: 
        radial-gradient(circle at 15% 20%, rgba(99, 102, 241, 0.15) 0%, transparent 40%),
        radial-gradient(circle at 85% 30%, rgba(56, 189, 248, 0.12) 0%, transparent 45%),
        radial-gradient(circle at 50% 80%, rgba(52, 211, 153, 0.08) 0%, transparent 50%);
}

.ambient-blob {
    position: absolute;
    filter: blur(80px);
    opacity: 0.5;
    pointer-events: none;
    border-radius: 9999px;
    z-index: 0;
}

/* Dropdown Menu */
.dropdown-menu-sleek {
    display: none;
    opacity: 0;
    transform: translateY(6px);
    transition: opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1), transform 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.group:hover .dropdown-menu-sleek {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

.dropdown-menu-sleek::before {
    content: '';
    position: absolute;
    top: -14px;
    left: 0;
    right: 0;
    height: 14px;
    display: block;
}

/* Video Glow Frame */
.video-glow-frame {
    box-shadow: 0 0 50px -10px rgba(99, 102, 241, 0.3), 0 20px 40px -15px rgba(0, 0, 0, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.15);
}
CSS;
file_put_contents("$sleekDir/assets/css/sleek.css", $sleekCss);

// 4. Create Sleek JS (preview/sleek/assets/js/sleek.js)
$sleekJs = <<<'JS'
/**
 * Zylvora Technologies - Superlative Sleek JS Engine
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
file_put_contents("$sleekDir/assets/js/sleek.js", $sleekJs);

// 5. Sleek Layout Renderer
function renderSleekLayout($title, $desc, $content, $depth = 0) {
    $prefix = $depth == 0 ? './' : '../';
    $darkSwitch = $depth == 0 ? '../dark/index.html' : '../../dark/index.html';
    $classicSwitch = $depth == 0 ? '../classic/index.html' : '../../classic/index.html';
    $hubSwitch = $depth == 0 ? '../index.html' : '../../index.html';

    $navHtml = <<<NAV
    <!-- Floating Glass Header -->
    <div class="fixed top-3 inset-x-0 z-50 px-4 sm:px-6">
        <header class="max-w-7xl mx-auto glass-nav-sleek rounded-2xl px-4 sm:px-6 py-3 transition-all duration-300">
            <div class="flex items-center justify-between">
                
                <!-- Brand Logo -->
                <a href="{$prefix}index.html" class="flex items-center space-x-3 group">
                    <div class="bg-white/95 px-3 py-1.5 rounded-xl shadow-md transition-transform group-hover:scale-105">
                        <img src="{$prefix}assets/images/logo.png" alt="Zylvora Technologies" class="h-8 sm:h-9 w-auto object-contain">
                    </div>
                    <span class="hidden md:inline-block px-2.5 py-0.5 text-[10px] font-extrabold uppercase rounded-full bg-indigo-500/20 text-indigo-300 border border-indigo-500/30">
                        Sleek
                    </span>
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden lg:flex items-center space-x-1 text-sm font-medium text-slate-300">
                    <a href="{$prefix}index.html" class="px-3 py-2 rounded-xl transition hover:text-white hover:bg-white/5">Home</a>
                    
                    <!-- 1. Services -->
                    <div class="relative group">
                        <a href="{$prefix}services/index.html" class="px-3 py-2 rounded-xl flex items-center space-x-1 transition group-hover:text-cyan-300 group-hover:bg-white/5">
                            <span>1. Services</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="dropdown-menu-sleek absolute left-0 top-full pt-2 w-64 z-50">
                            <div class="rounded-2xl bg-[#0b111e]/95 backdrop-blur-2xl border border-white/10 shadow-2xl p-2 space-y-1">
                                <a href="{$prefix}services/erp.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">1.1 ERP</div>
                                    <div class="text-[11px] text-slate-400">Enterprise Resource Planning</div>
                                </a>
                                <a href="{$prefix}services/cloud.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">1.2 Cloud</div>
                                    <div class="text-[11px] text-slate-400">Cloud Infrastructure</div>
                                </a>
                                <a href="{$prefix}services/security.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">1.3 Security</div>
                                    <div class="text-[11px] text-slate-400">Cybersecurity Solutions</div>
                                </a>
                                <a href="{$prefix}services/data-solutions.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">1.4 Data solutions</div>
                                    <div class="text-[11px] text-slate-400">Data Analytics & Intelligence</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 2. SAP -->
                    <div class="relative group">
                        <a href="{$prefix}sap/index.html" class="px-3 py-2 rounded-xl flex items-center space-x-1 transition group-hover:text-indigo-300 group-hover:bg-white/5">
                            <span class="text-indigo-400 font-bold">2. SAP</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="dropdown-menu-sleek absolute left-0 top-full pt-2 w-72 z-50">
                            <div class="rounded-2xl bg-[#0b111e]/95 backdrop-blur-2xl border border-white/10 shadow-2xl p-2 space-y-1">
                                <a href="{$prefix}sap/consulting.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-indigo-500/10 transition">
                                    <div class="font-bold text-sm">2.1 SAP Consulting</div>
                                </a>
                                <a href="{$prefix}sap/migration.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-indigo-500/10 transition">
                                    <div class="font-bold text-sm">2.2 SAP Migration</div>
                                </a>
                                <a href="{$prefix}sap/implementation.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-indigo-500/10 transition">
                                    <div class="font-bold text-sm">2.3 SAP Implementation</div>
                                </a>
                                <a href="{$prefix}sap/support.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-indigo-500/10 transition">
                                    <div class="font-bold text-sm">2.4 SAP Support</div>
                                </a>
                                <a href="{$prefix}sap/ewm.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-indigo-500/10 transition">
                                    <div class="font-bold text-sm">2.5 SAP EWM</div>
                                </a>
                                <a href="{$prefix}sap/hybris.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-indigo-500/10 transition">
                                    <div class="font-bold text-sm">2.6 SAP Hybris</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Industries -->
                    <div class="relative group">
                        <a href="{$prefix}industries/index.html" class="px-3 py-2 rounded-xl flex items-center space-x-1 transition group-hover:text-emerald-300 group-hover:bg-white/5">
                            <span>3. Industries</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="dropdown-menu-sleek absolute left-0 top-full pt-2 w-64 z-50">
                            <div class="rounded-2xl bg-[#0b111e]/95 backdrop-blur-2xl border border-white/10 shadow-2xl p-2 space-y-1">
                                <a href="{$prefix}industries/manufacturing.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">3.1 Manufacturing</div>
                                </a>
                                <a href="{$prefix}industries/services.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">3.2 Services</div>
                                </a>
                                <a href="{$prefix}industries/retail.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">3.3 Retail</div>
                                </a>
                                <a href="{$prefix}industries/education.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">3.4 Education</div>
                                </a>
                                <a href="{$prefix}industries/public-sector.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">3.5 Public sector</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 4. ERP Delivery -->
                    <div class="relative group">
                        <a href="{$prefix}erp-delivery/index.html" class="px-3 py-2 rounded-xl flex items-center space-x-1 transition group-hover:text-amber-300 group-hover:bg-white/5">
                            <span>4. ERP Delivery</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="dropdown-menu-sleek absolute left-0 top-full pt-2 w-72 z-50">
                            <div class="rounded-2xl bg-[#0b111e]/95 backdrop-blur-2xl border border-white/10 shadow-2xl p-2 space-y-1">
                                <a href="{$prefix}erp-delivery/odoo.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">4.1 Odoo end to end solutions</div>
                                </a>
                                <a href="{$prefix}erp-delivery/zoho.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">4.2 ZOHO ERP</div>
                                </a>
                                <a href="{$prefix}erp-delivery/freshdesk.html" class="block px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 transition">
                                    <div class="font-bold text-sm">4.3 Fresh Desk</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{$prefix}about.html" class="px-3 py-2 rounded-xl transition hover:text-white hover:bg-white/5">About Us</a>
                    <a href="{$prefix}careers.html" class="px-3 py-2 rounded-xl transition hover:text-white hover:bg-white/5">Careers</a>
                </nav>

                <!-- Right Actions & Theme Switchers -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="{$darkSwitch}" class="px-2.5 py-1.5 text-xs font-semibold text-slate-300 hover:text-white rounded-lg bg-white/5 hover:bg-white/10 transition border border-white/10">
                        Dark
                    </a>
                    <a href="{$classicSwitch}" class="px-2.5 py-1.5 text-xs font-semibold text-slate-300 hover:text-white rounded-lg bg-white/5 hover:bg-white/10 transition border border-white/10">
                        Classic
                    </a>
                    <a href="{$prefix}contact.html" class="px-4 py-2 text-xs font-bold text-white rounded-xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:opacity-90 shadow-lg shadow-indigo-500/20 transition">
                        5. Contact us &rarr;
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="flex lg:hidden items-center">
                    <button id="mobile-menu-btn" type="button" aria-label="Toggle Menu" class="text-slate-300 hover:text-white p-2 rounded-xl bg-white/5 border border-white/10">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 z-[9999] bg-[#080c14]/98 backdrop-blur-3xl overflow-y-auto px-6 py-6 border-b border-white/10 shadow-2xl">
        <div class="flex items-center justify-between pb-6 border-b border-white/10">
            <a href="{$prefix}index.html" class="flex items-center space-x-2">
                <div class="bg-white/95 px-3 py-1.5 rounded-xl">
                    <img src="{$prefix}assets/images/logo.png" alt="Zylvora Technologies" class="h-8 w-auto">
                </div>
                <span class="px-2 py-0.5 text-[10px] font-bold uppercase rounded bg-indigo-500/20 text-indigo-300">Sleek</span>
            </a>
            <button id="mobile-menu-close" type="button" aria-label="Close Menu" class="p-2 text-slate-400 hover:text-white rounded-xl bg-white/5 border border-white/10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        
        <div class="mt-6 space-y-4 pb-12">
            <a href="{$prefix}index.html" class="block py-2 text-base font-bold text-white hover:text-indigo-400">Home</a>
            
            <div class="py-3 border-t border-white/10">
                <div class="text-xs font-bold text-cyan-400 uppercase tracking-wider mb-2">1. Services</div>
                <div class="space-y-2 pl-3">
                    <a href="{$prefix}services/erp.html" class="block py-1 text-sm text-slate-300 hover:text-white">1.1 ERP</a>
                    <a href="{$prefix}services/cloud.html" class="block py-1 text-sm text-slate-300 hover:text-white">1.2 Cloud</a>
                    <a href="{$prefix}services/security.html" class="block py-1 text-sm text-slate-300 hover:text-white">1.3 Security</a>
                    <a href="{$prefix}services/data-solutions.html" class="block py-1 text-sm text-slate-300 hover:text-white">1.4 Data solutions</a>
                </div>
            </div>

            <div class="py-3 border-t border-white/10">
                <div class="text-xs font-bold text-indigo-400 uppercase tracking-wider mb-2">2. SAP</div>
                <div class="space-y-2 pl-3">
                    <a href="{$prefix}sap/consulting.html" class="block py-1 text-sm text-slate-300 hover:text-white">2.1 SAP Consulting</a>
                    <a href="{$prefix}sap/migration.html" class="block py-1 text-sm text-slate-300 hover:text-white">2.2 SAP Migration</a>
                    <a href="{$prefix}sap/implementation.html" class="block py-1 text-sm text-slate-300 hover:text-white">2.3 SAP Implementation</a>
                    <a href="{$prefix}sap/support.html" class="block py-1 text-sm text-slate-300 hover:text-white">2.4 SAP Support</a>
                    <a href="{$prefix}sap/ewm.html" class="block py-1 text-sm text-slate-300 hover:text-white">2.5 SAP EWM</a>
                    <a href="{$prefix}sap/hybris.html" class="block py-1 text-sm text-slate-300 hover:text-white">2.6 SAP Hybris</a>
                </div>
            </div>

            <div class="py-3 border-t border-white/10">
                <div class="text-xs font-bold text-emerald-400 uppercase tracking-wider mb-2">3. Industries</div>
                <div class="space-y-2 pl-3">
                    <a href="{$prefix}industries/manufacturing.html" class="block py-1 text-sm text-slate-300 hover:text-white">3.1 Manufacturing</a>
                    <a href="{$prefix}industries/services.html" class="block py-1 text-sm text-slate-300 hover:text-white">3.2 Services</a>
                    <a href="{$prefix}industries/retail.html" class="block py-1 text-sm text-slate-300 hover:text-white">3.3 Retail</a>
                    <a href="{$prefix}industries/education.html" class="block py-1 text-sm text-slate-300 hover:text-white">3.4 Education</a>
                    <a href="{$prefix}industries/public-sector.html" class="block py-1 text-sm text-slate-300 hover:text-white">3.5 Public sector</a>
                </div>
            </div>

            <div class="py-3 border-t border-white/10">
                <div class="text-xs font-bold text-amber-400 uppercase tracking-wider mb-2">4. ERP Delivery</div>
                <div class="space-y-2 pl-3">
                    <a href="{$prefix}erp-delivery/odoo.html" class="block py-1 text-sm text-slate-300 hover:text-white">4.1 Odoo end to end solutions</a>
                    <a href="{$prefix}erp-delivery/zoho.html" class="block py-1 text-sm text-slate-300 hover:text-white">4.2 ZOHO ERP</a>
                    <a href="{$prefix}erp-delivery/freshdesk.html" class="block py-1 text-sm text-slate-300 hover:text-white">4.3 Fresh Desk</a>
                </div>
            </div>

            <div class="py-3 border-t border-white/10 space-y-2">
                <a href="{$prefix}about.html" class="block py-2 text-base font-bold text-white hover:text-indigo-400">About Us</a>
                <a href="{$prefix}careers.html" class="block py-2 text-base font-bold text-white hover:text-indigo-400">Careers</a>
            </div>

            <div class="pt-4 pb-6 space-y-3">
                <a href="{$prefix}contact.html" class="w-full text-center block py-3.5 px-6 rounded-xl bg-gradient-to-r from-indigo-500 to-pink-500 text-white font-bold shadow-lg shadow-indigo-500/20">
                    5. Contact us &rarr;
                </a>
            </div>
        </div>
    </div>
NAV;

    $footerHtml = <<<FOOTER
    <footer class="bg-[#05080e] text-slate-400 border-t border-white/10 pt-20 pb-12 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-white/10">
                <div class="lg:col-span-2 space-y-4">
                    <a href="{$prefix}index.html" class="inline-flex items-center bg-white px-3.5 py-2 rounded-xl shadow-lg border border-white/20 transition-all group">
                        <img src="{$prefix}assets/images/logo.png" alt="Zylvora Technologies" class="h-8 sm:h-9 w-auto object-contain transition-transform group-hover:scale-105">
                    </a>
                    <p class="text-sm text-slate-400 max-w-sm leading-relaxed">
                        Next-generation enterprise digital architecture and high-impact ERP/SAP solutions for forward-thinking global businesses.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">1. Services</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{$prefix}services/erp.html" class="hover:text-cyan-400 transition">1.1 ERP</a></li>
                        <li><a href="{$prefix}services/cloud.html" class="hover:text-cyan-400 transition">1.2 Cloud</a></li>
                        <li><a href="{$prefix}services/security.html" class="hover:text-cyan-400 transition">1.3 Security</a></li>
                        <li><a href="{$prefix}services/data-solutions.html" class="hover:text-cyan-400 transition">1.4 Data solutions</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">2. SAP Practice</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{$prefix}sap/consulting.html" class="hover:text-indigo-400 transition">2.1 SAP Consulting</a></li>
                        <li><a href="{$prefix}sap/migration.html" class="hover:text-indigo-400 transition">2.2 SAP Migration</a></li>
                        <li><a href="{$prefix}sap/implementation.html" class="hover:text-indigo-400 transition">2.3 SAP Implementation</a></li>
                        <li><a href="{$prefix}sap/support.html" class="hover:text-indigo-400 transition">2.4 SAP Support</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">4. ERP Delivery</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{$prefix}erp-delivery/odoo.html" class="hover:text-amber-400 transition">4.1 Odoo Solutions</a></li>
                        <li><a href="{$prefix}erp-delivery/zoho.html" class="hover:text-amber-400 transition">4.2 ZOHO ERP</a></li>
                        <li><a href="{$prefix}erp-delivery/freshdesk.html" class="hover:text-amber-400 transition">4.3 Fresh Desk</a></li>
                        <li class="pt-2"><a href="{$prefix}contact.html" class="text-indigo-400 hover:text-white font-semibold">5. Contact us &rarr;</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500">
                <p>&copy; 2026 Zylvora Technologies. Sleek Glass Edition.</p>
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
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title} | Zylvora Technologies</title>
    <meta name="description" content="{$desc}">
    <link rel="icon" type="image/png" href="{$prefix}assets/images/logo.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{$prefix}assets/css/sleek.css">
</head>
<body class="bg-[#080c14] text-slate-100 min-h-screen flex flex-col pt-24 selection:bg-indigo-500 selection:text-white aurora-mesh">
    {$navHtml}
    
    <main class="flex-grow relative z-10">
        {$content}
    </main>

    {$footerHtml}

    <script src="{$prefix}assets/js/sleek.js"></script>
</body>
</html>
HTML;
}

// 6. Subpage Content Generator for Sleek Version
function generateSleekSubpage($num, $title, $category, $desc, $depth = 1) {
    $prefix = $depth == 0 ? './' : '../';
    return <<<HTML
    <!-- Page Header Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-xs font-bold uppercase tracking-wider mb-6">
                <span class="text-indigo-400">{$category}</span>
                <span class="text-slate-500">/</span>
                <span class="text-cyan-400">{$num}</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white mb-6">
                <span class="text-prismatic">{$title}</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-3xl leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
            </p>
        </div>
    </section>

    <!-- Bento Box Detail Grid -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                
                <div class="glass-card-sleek p-8 space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 font-bold text-xl mb-4">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-white">Discovery & Architecture</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero sed cursus ante dapibus diam.
                    </p>
                    <ul class="space-y-2 pt-2 text-xs font-medium text-slate-300">
                        <li class="flex items-center space-x-2"><span class="text-indigo-400">✓</span><span>Enterprise assessment</span></li>
                        <li class="flex items-center space-x-2"><span class="text-indigo-400">✓</span><span>Process optimization</span></li>
                    </ul>
                </div>

                <div class="glass-card-sleek p-8 space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 font-bold text-xl mb-4">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-white">Agile Execution</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.
                    </p>
                    <ul class="space-y-2 pt-2 text-xs font-medium text-slate-300">
                        <li class="flex items-center space-x-2"><span class="text-cyan-400">✓</span><span>Modular scalability</span></li>
                        <li class="flex items-center space-x-2"><span class="text-cyan-400">✓</span><span>Seamless deployment</span></li>
                    </ul>
                </div>

                <div class="glass-card-sleek p-8 space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 font-bold text-xl mb-4">
                        03
                    </div>
                    <h3 class="text-xl font-bold text-white">Sustained Performance</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam.
                    </p>
                    <ul class="space-y-2 pt-2 text-xs font-medium text-slate-300">
                        <li class="flex items-center space-x-2"><span class="text-emerald-400">✓</span><span>24/7 Monitoring</span></li>
                        <li class="flex items-center space-x-2"><span class="text-emerald-400">✓</span><span>Continuous tuning</span></li>
                    </ul>
                </div>

            </div>

            <!-- CTA Banner -->
            <div class="glass-card-sleek p-10 bg-gradient-to-r from-indigo-950/80 via-purple-950/50 to-slate-950/80 border-indigo-500/30 flex flex-col md:flex-row items-center justify-between">
                <div class="space-y-2 mb-6 md:mb-0 max-w-xl">
                    <h3 class="text-2xl sm:text-3xl font-bold text-white">Transform Your Enterprise With {$title}</h3>
                    <p class="text-slate-400 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur sodales ligula in libero.
                    </p>
                </div>
                <a href="{$prefix}contact.html" class="px-8 py-3.5 bg-gradient-to-r from-indigo-500 to-pink-500 hover:opacity-90 text-white font-bold rounded-xl shadow-lg transition">
                    5. Contact Us &rarr;
                </a>
            </div>
        </div>
    </section>
HTML;
}

// 7. Sleek Homepage Content
$sleekHome = <<<'HTML'
<!-- Hero Section -->
<section class="relative pt-8 pb-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Info -->
            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs font-semibold text-slate-300">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 animate-ping"></span>
                    <span>Enterprise Digital Evolution</span>
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-[1.1]">
                    Next-Generation <span class="text-prismatic">ERP & SAP</span> Architecture
                </h1>
                
                <p class="text-base sm:text-lg text-slate-400 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="./contact.html" class="px-7 py-3.5 rounded-xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:opacity-95 text-white font-bold text-sm shadow-xl shadow-indigo-500/25 transition">
                        5. Contact us &rarr;
                    </a>
                    <a href="./services/index.html" class="px-7 py-3.5 rounded-xl bg-white/5 hover:bg-white/10 text-white font-bold text-sm border border-white/10 transition">
                        Explore 1. Services
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-6 border-t border-white/10">
                    <div>
                        <div class="text-2xl font-bold text-white">100%</div>
                        <div class="text-xs text-slate-400">PDF Compliant</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">27</div>
                        <div class="text-xs text-slate-400">Live Pages</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">24/7</div>
                        <div class="text-xs text-slate-400">Expert Support</div>
                    </div>
                </div>
            </div>

            <!-- Right Video Container -->
            <div class="lg:col-span-6">
                <div class="glass-card-sleek p-2 sm:p-3 video-glow-frame">
                    <div class="relative aspect-video rounded-xl overflow-hidden bg-black">
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
    </div>
</section>

<!-- Bento Grid Capabilities -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-white/5 border border-white/10 text-indigo-400">Modular Architecture</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Comprehensive Enterprise Modules</h2>
            <p class="text-slate-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <a href="./services/index.html" class="glass-card-sleek p-6 block group">
                <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 flex items-center justify-center font-bold text-lg mb-4 group-hover:scale-110 transition">
                    1
                </div>
                <h3 class="text-lg font-bold text-white group-hover:text-cyan-400 transition">1. Services</h3>
                <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet. ERP, Cloud, Security & Data solutions.
                </p>
                <div class="mt-4 text-xs font-bold text-cyan-400 flex items-center space-x-1">
                    <span>View Modules</span>
                    <span>&rarr;</span>
                </div>
            </a>

            <a href="./sap/index.html" class="glass-card-sleek p-6 block group">
                <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 flex items-center justify-center font-bold text-lg mb-4 group-hover:scale-110 transition">
                    2
                </div>
                <h3 class="text-lg font-bold text-white group-hover:text-indigo-400 transition">2. SAP Practice</h3>
                <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet. Consulting, Migration, Implementation, Support.
                </p>
                <div class="mt-4 text-xs font-bold text-indigo-400 flex items-center space-x-1">
                    <span>View Modules</span>
                    <span>&rarr;</span>
                </div>
            </a>

            <a href="./industries/index.html" class="glass-card-sleek p-6 block group">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 flex items-center justify-center font-bold text-lg mb-4 group-hover:scale-110 transition">
                    3
                </div>
                <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition">3. Industries</h3>
                <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet. Manufacturing, Retail, Public Sector, Education.
                </p>
                <div class="mt-4 text-xs font-bold text-emerald-400 flex items-center space-x-1">
                    <span>View Modules</span>
                    <span>&rarr;</span>
                </div>
            </a>

            <a href="./erp-delivery/index.html" class="glass-card-sleek p-6 block group">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 flex items-center justify-center font-bold text-lg mb-4 group-hover:scale-110 transition">
                    4
                </div>
                <h3 class="text-lg font-bold text-white group-hover:text-amber-400 transition">4. ERP Delivery</h3>
                <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                    Lorem ipsum dolor sit amet. Odoo, Zoho ERP, Freshdesk integrations.
                </p>
                <div class="mt-4 text-xs font-bold text-amber-400 flex items-center space-x-1">
                    <span>View Modules</span>
                    <span>&rarr;</span>
                </div>
            </a>

        </div>
    </div>
</section>
HTML;

// 8. Sleek About Page
$sleekAbout = <<<'HTML'
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-xs font-bold uppercase text-indigo-400">
                    About Zylvora
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">
                    Pioneering Digital <span class="text-prismatic">Transformations</span>
                </h1>
                <p class="text-slate-400 text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/10">
                    <div class="glass-card-sleek p-4">
                        <div class="text-2xl font-bold text-indigo-400">10+ Years</div>
                        <div class="text-xs text-slate-400 mt-1 uppercase">Industry Heritage</div>
                    </div>
                    <div class="glass-card-sleek p-4">
                        <div class="text-2xl font-bold text-cyan-400">500+</div>
                        <div class="text-xs text-slate-400 mt-1 uppercase">Deployments</div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6">
                <div class="glass-card-sleek p-2 overflow-hidden shadow-2xl">
                    <img src="./assets/images/about_team.jpg" alt="Zylvora Team" class="w-full h-auto rounded-xl object-cover">
                </div>
            </div>
        </div>
    </div>
</section>
HTML;

// 9. Sleek Careers Page
$sleekCareers = <<<'HTML'
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-16">
            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-xs font-bold uppercase text-pink-400">
                    Careers
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">
                    Build The Future With Us
                </h1>
                <p class="text-slate-400 text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#openings" class="inline-block px-7 py-3.5 bg-gradient-to-r from-indigo-500 to-pink-500 text-white font-bold rounded-xl shadow-lg transition">
                    View Open Roles &darr;
                </a>
            </div>
            <div class="lg:col-span-6">
                <div class="glass-card-sleek p-2 overflow-hidden shadow-2xl">
                    <img src="./assets/images/careers_culture.jpg" alt="Work Culture" class="w-full h-auto rounded-xl object-cover">
                </div>
            </div>
        </div>

        <div id="openings" class="space-y-4 max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold text-white mb-6">Open Positions</h3>
            
            <div class="glass-card-sleek p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h4 class="text-lg font-bold text-white">Senior SAP S/4HANA Architect</h4>
                    <p class="text-xs text-slate-400 mt-1">Full-time • Hybrid (Chennai / Remote)</p>
                </div>
                <a href="./contact.html" class="px-5 py-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs transition self-start sm:self-auto">
                    Apply &rarr;
                </a>
            </div>

            <div class="glass-card-sleek p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h4 class="text-lg font-bold text-white">Cloud Security Specialist</h4>
                    <p class="text-xs text-slate-400 mt-1">Full-time • Chennai OMR</p>
                </div>
                <a href="./contact.html" class="px-5 py-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs transition self-start sm:self-auto">
                    Apply &rarr;
                </a>
            </div>
        </div>
    </div>
</section>
HTML;

// 10. Sleek Contact Page
$sleekContact = <<<'HTML'
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-white/5 border border-white/10 text-indigo-400">5. Contact us</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white">Connect with Our Specialists</h1>
            <p class="text-slate-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-6 glass-card-sleek p-8 sm:p-10 space-y-6">
                <h3 class="text-xl font-bold text-white">Send a Message</h3>
                <form class="space-y-4" onsubmit="event.preventDefault(); alert('Inquiry sent successfully!');">
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase mb-1">Name</label>
                        <input type="text" required placeholder="John Doe" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-indigo-400">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase mb-1">Email</label>
                        <input type="email" required placeholder="john@company.com" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-indigo-400">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase mb-1">Requirement</label>
                        <textarea rows="4" required placeholder="Describe your project..." class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-indigo-400"></textarea>
                    </div>
                    <button type="submit" class="w-full py-3.5 bg-gradient-to-r from-indigo-500 to-pink-500 text-white font-bold rounded-xl shadow-lg transition">
                        Submit &rarr;
                    </button>
                </form>
            </div>

            <div class="lg:col-span-6 space-y-6">
                <div class="glass-card-sleek p-8 space-y-4">
                    <h3 class="text-xl font-bold text-white">Global Headquarters</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        OMR IT Express Highway, Sholinganallur,<br>
                        Chennai, Tamil Nadu 600119, India
                    </p>
                </div>

                <div class="glass-card-sleek p-2 overflow-hidden h-72">
                    <iframe 
                        title="Zylvora Map" 
                        class="w-full h-full rounded-xl border-0" 
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

// 11. Array of all 27 Pages for Sleek Edition
$sleekPages = [
    ['file' => "$sleekDir/index.html", 'title' => 'Enterprise ERP & SAP Solutions', 'desc' => 'Zylvora Technologies Sleek Portal', 'depth' => 0, 'content' => $sleekHome],
    ['file' => "$sleekDir/about.html", 'title' => 'About Us', 'desc' => 'About Zylvora Technologies', 'depth' => 0, 'content' => $sleekAbout],
    ['file' => "$sleekDir/careers.html", 'title' => 'Careers', 'desc' => 'Careers at Zylvora Technologies', 'depth' => 0, 'content' => $sleekCareers],
    ['file' => "$sleekDir/contact.html", 'title' => '5. Contact us', 'desc' => 'Contact Zylvora enterprise specialists', 'depth' => 0, 'content' => $sleekContact],
    ['file' => "$sleekDir/industries.html", 'title' => '3. Industries', 'desc' => 'Industry-specific enterprise solutions', 'depth' => 0, 'content' => generateSleekSubpage('3.', '3. Industries Overview', 'Sector Practices', '', 0)],

    // 1. Services
    ['file' => "$sleekDir/services/index.html", 'title' => '1. Services', 'desc' => 'Enterprise Services Suite', 'depth' => 1, 'content' => generateSleekSubpage('1.0', '1. Services Overview', 'Enterprise Suite', '')],
    ['file' => "$sleekDir/services/erp.html", 'title' => '1.1 ERP', 'desc' => 'Enterprise Resource Planning Solutions', 'depth' => 1, 'content' => generateSleekSubpage('1.1', '1.1 ERP Solutions', 'Services', '')],
    ['file' => "$sleekDir/services/cloud.html", 'title' => '1.2 Cloud', 'desc' => 'Cloud Infrastructure & Migration', 'depth' => 1, 'content' => generateSleekSubpage('1.2', '1.2 Cloud Solutions', 'Services', '')],
    ['file' => "$sleekDir/services/security.html", 'title' => '1.3 Security', 'desc' => 'Enterprise Cybersecurity Architecture', 'depth' => 1, 'content' => generateSleekSubpage('1.3', '1.3 Security Solutions', 'Services', '')],
    ['file' => "$sleekDir/services/data-solutions.html", 'title' => '1.4 Data solutions', 'desc' => 'Enterprise Data Analytics & Intelligence', 'depth' => 1, 'content' => generateSleekSubpage('1.4', '1.4 Data solutions', 'Services', '')],

    // 2. SAP
    ['file' => "$sleekDir/sap/index.html", 'title' => '2. SAP Practice', 'desc' => 'SAP Transformation Suite', 'depth' => 1, 'content' => generateSleekSubpage('2.0', '2. SAP Practice Overview', 'SAP Center of Excellence', '')],
    ['file' => "$sleekDir/sap/consulting.html", 'title' => '2.1 SAP Consulting', 'desc' => 'Strategic SAP Advisory', 'depth' => 1, 'content' => generateSleekSubpage('2.1', '2.1 SAP Consulting', 'SAP Practice', '')],
    ['file' => "$sleekDir/sap/migration.html", 'title' => '2.2 SAP Migration', 'desc' => 'S/4HANA Migration Pathways', 'depth' => 1, 'content' => generateSleekSubpage('2.2', '2.2 SAP Migration', 'SAP Practice', '')],
    ['file' => "$sleekDir/sap/implementation.html", 'title' => '2.3 SAP Implementation', 'desc' => 'Greenfield & Brownfield Deployments', 'depth' => 1, 'content' => generateSleekSubpage('2.3', '2.3 SAP Implementation', 'SAP Practice', '')],
    ['file' => "$sleekDir/sap/support.html", 'title' => '2.4 SAP Support', 'desc' => '24/7 Managed SAP Operations', 'depth' => 1, 'content' => generateSleekSubpage('2.4', '2.4 SAP Support', 'SAP Practice', '')],
    ['file' => "$sleekDir/sap/ewm.html", 'title' => '2.5 SAP EWM', 'desc' => 'Extended Warehouse Management', 'depth' => 1, 'content' => generateSleekSubpage('2.5', '2.5 SAP EWM', 'SAP Practice', '')],
    ['file' => "$sleekDir/sap/hybris.html", 'title' => '2.6 SAP Hybris', 'desc' => 'SAP Commerce Cloud Solutions', 'depth' => 1, 'content' => generateSleekSubpage('2.6', '2.6 SAP Hybris', 'SAP Practice', '')],

    // 3. Industries
    ['file' => "$sleekDir/industries/index.html", 'title' => '3. Industries', 'desc' => 'Industry Verticals', 'depth' => 1, 'content' => generateSleekSubpage('3.0', '3. Industries Overview', 'Vertical Practices', '')],
    ['file' => "$sleekDir/industries/manufacturing.html", 'title' => '3.1 Manufacturing', 'desc' => 'Smart Manufacturing Solutions', 'depth' => 1, 'content' => generateSleekSubpage('3.1', '3.1 Manufacturing', 'Industries', '')],
    ['file' => "$sleekDir/industries/services.html", 'title' => '3.2 Services', 'desc' => 'Professional Services ERP', 'depth' => 1, 'content' => generateSleekSubpage('3.2', '3.2 Services', 'Industries', '')],
    ['file' => "$sleekDir/industries/retail.html", 'title' => '3.3 Retail', 'desc' => 'Omnichannel Retail Intelligence', 'depth' => 1, 'content' => generateSleekSubpage('3.3', '3.3 Retail', 'Industries', '')],
    ['file' => "$sleekDir/industries/education.html", 'title' => '3.4 Education', 'desc' => 'Higher Education Systems', 'depth' => 1, 'content' => generateSleekSubpage('3.4', '3.4 Education', 'Industries', '')],
    ['file' => "$sleekDir/industries/public-sector.html", 'title' => '3.5 Public sector', 'desc' => 'Government & Civic Tech', 'depth' => 1, 'content' => generateSleekSubpage('3.5', '3.5 Public sector', 'Industries', '')],

    // 4. ERP Delivery
    ['file' => "$sleekDir/erp-delivery/index.html", 'title' => '4. ERP Delivery', 'desc' => 'Agile ERP Ecosystem', 'depth' => 1, 'content' => generateSleekSubpage('4.0', '4. ERP Delivery Suite', 'Ecosystem Platforms', '')],
    ['file' => "$sleekDir/erp-delivery/odoo.html", 'title' => '4.1 Odoo end to end solutions', 'desc' => 'Certified Odoo Deployment', 'depth' => 1, 'content' => generateSleekSubpage('4.1', '4.1 Odoo end to end solutions', 'ERP Delivery', '')],
    ['file' => "$sleekDir/erp-delivery/zoho.html", 'title' => '4.2 ZOHO ERP', 'desc' => 'Enterprise Zoho One Stack', 'depth' => 1, 'content' => generateSleekSubpage('4.2', '4.2 ZOHO ERP', 'ERP Delivery', '')],
    ['file' => "$sleekDir/erp-delivery/freshdesk.html", 'title' => '4.3 Fresh Desk', 'desc' => 'Omnichannel Customer Experience', 'depth' => 1, 'content' => generateSleekSubpage('4.3', '4.3 Fresh Desk', 'ERP Delivery', '')],
];

foreach ($sleekPages as $p) {
    $fullHtml = renderSleekLayout($p['title'], $p['desc'], $p['content'], $p['depth']);
    file_put_contents($p['file'], $fullHtml);
    echo "Generated Sleek: " . basename($p['file']) . "\n";
}

echo "Sleek Aurora Glass Edition (Concept C) generated successfully!\n";
