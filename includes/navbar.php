<?php
/**
 * Zylvora Technologies - Navigation Bar Component
 */
?>
<header class="sticky top-0 z-50 glass-nav transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Brand Logo -->
            <a href="<?= url() ?>" class="flex items-center space-x-3 group">
                <img src="<?= asset('images/logo.png') ?>" alt="<?= SITE_NAME ?> Logo" class="h-10 sm:h-12 w-auto object-contain transition-transform group-hover:scale-105 duration-200">
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center space-x-1 xl:space-x-2 text-sm font-medium">
                <a href="<?= url() ?>" class="px-3 py-2 rounded-lg transition <?= is_active('') ?>">Home</a>
                
                <!-- 1. Services Dropdown -->
                <div class="relative group">
                    <a href="<?= url('services') ?>" class="px-3 py-2 rounded-lg flex items-center space-x-1 text-slate-300 group-hover:text-cyan-400 transition">
                        <span>1. Services</span>
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="dropdown-menu absolute left-0 top-full pt-2 w-64 z-50">
                        <div class="rounded-xl bg-dark-700/95 backdrop-blur-xl border border-white/10 shadow-2xl p-2">
                            <a href="<?= url('services/erp') ?>" class="block px-4 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">1.1 ERP</div>
                                <div class="text-xs text-slate-400">Enterprise Resource Planning</div>
                            </a>
                            <a href="<?= url('services/cloud') ?>" class="block px-4 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">1.2 Cloud</div>
                                <div class="text-xs text-slate-400">Cloud Infrastructure</div>
                            </a>
                            <a href="<?= url('services/security') ?>" class="block px-4 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">1.3 Security</div>
                                <div class="text-xs text-slate-400">Cybersecurity Solutions</div>
                            </a>
                            <a href="<?= url('services/data-solutions') ?>" class="block px-4 py-2.5 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">1.4 Data solutions</div>
                                <div class="text-xs text-slate-400">Data Analytics & Management</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. SAP Practice Dropdown -->
                <div class="relative group">
                    <a href="<?= url('sap') ?>" class="px-3 py-2 rounded-lg flex items-center space-x-1 text-slate-300 group-hover:text-cyan-400 transition">
                        <span class="text-cyan-400 font-semibold">2. SAP</span>
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="dropdown-menu absolute left-0 top-full pt-2 w-72 z-50">
                        <div class="rounded-xl bg-dark-700/95 backdrop-blur-xl border border-white/10 shadow-2xl p-2">
                            <a href="<?= url('sap/consulting') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">2.1 SAP Consulting</div>
                            </a>
                            <a href="<?= url('sap/migration') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">2.2 SAP Migration</div>
                            </a>
                            <a href="<?= url('sap/implementation') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">2.3 SAP Implementation</div>
                            </a>
                            <a href="<?= url('sap/support') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">2.4 SAP Support</div>
                            </a>
                            <a href="<?= url('sap/ewm') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">2.5 SAP EWM</div>
                            </a>
                            <a href="<?= url('sap/hybris') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">2.6 SAP Hybris</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3. Industries Dropdown -->
                <div class="relative group">
                    <a href="<?= url('industries') ?>" class="px-3 py-2 rounded-lg flex items-center space-x-1 text-slate-300 group-hover:text-cyan-400 transition">
                        <span>3. Industries</span>
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="dropdown-menu absolute left-0 top-full pt-2 w-64 z-50">
                        <div class="rounded-xl bg-dark-700/95 backdrop-blur-xl border border-white/10 shadow-2xl p-2">
                            <a href="<?= url('industries/manufacturing') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">3.1 Manufacturing</div>
                            </a>
                            <a href="<?= url('industries/services') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">3.2 Services</div>
                            </a>
                            <a href="<?= url('industries/retail') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">3.3 Retail</div>
                            </a>
                            <a href="<?= url('industries/education') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">3.4 Education</div>
                            </a>
                            <a href="<?= url('industries/public-sector') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">3.5 Public sector</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4. ERP Delivery Dropdown -->
                <div class="relative group">
                    <a href="<?= url('erp-delivery') ?>" class="px-3 py-2 rounded-lg flex items-center space-x-1 text-slate-300 group-hover:text-cyan-400 transition">
                        <span>4. ERP Delivery</span>
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="dropdown-menu absolute left-0 top-full pt-2 w-72 z-50">
                        <div class="rounded-xl bg-dark-700/95 backdrop-blur-xl border border-white/10 shadow-2xl p-2">
                            <a href="<?= url('erp-delivery/odoo') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">4.1 Odoo end to end solutions</div>
                            </a>
                            <a href="<?= url('erp-delivery/zoho') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">4.2 ZOHO ERP</div>
                            </a>
                            <a href="<?= url('erp-delivery/freshdesk') ?>" class="block px-4 py-2 rounded-lg text-slate-300 hover:text-white hover:bg-cyan-500/10 hover:border-l-2 hover:border-cyan-400 transition">
                                <div class="font-semibold text-sm">4.3 Fresh Desk</div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="<?= url('about') ?>" class="px-3 py-2 rounded-lg transition <?= is_active('about') ?>">About Us</a>
                <a href="<?= url('careers') ?>" class="px-3 py-2 rounded-lg transition <?= is_active('careers') ?>">Careers</a>
            </nav>

            <!-- 5. Contact us CTA Button & Theme Switchers -->
            <div class="hidden lg:flex items-center space-x-2">
                <a href="<?= defined('PREVIEW_MODE') ? (defined('PREVIEW_PREFIX') && PREVIEW_PREFIX == '../' ? '../../classic/index.html' : '../classic/index.html') : '/Zylvora/preview/classic/index.html' ?>" class="px-2.5 py-1.5 text-xs font-semibold text-slate-300 hover:text-white bg-white/5 hover:bg-white/10 rounded-lg transition border border-white/10">
                    Classic
                </a>
                <a href="<?= defined('PREVIEW_MODE') ? (defined('PREVIEW_PREFIX') && PREVIEW_PREFIX == '../' ? '../../sleek/index.html' : '../sleek/index.html') : '/Zylvora/preview/sleek/index.html' ?>" class="px-2.5 py-1.5 text-xs font-semibold text-indigo-300 hover:text-white bg-indigo-500/10 hover:bg-indigo-500/20 rounded-lg transition border border-indigo-500/30">
                    ✨ Sleek
                </a>
                <a href="<?= url('contact') ?>" class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-xs font-semibold rounded-full group bg-gradient-to-br from-cyan-400 to-blue-600 group-hover:from-cyan-400 group-hover:to-blue-600 hover:text-white text-white shadow-lg shadow-cyan-500/20 hover:shadow-cyan-500/40 transition">
                    <span class="relative px-4 py-2 transition-all ease-in duration-200 bg-dark-900 rounded-full group-hover:bg-opacity-0">
                        5. Contact us &rarr;
                    </span>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex lg:hidden items-center">
                <button id="mobile-menu-btn" type="button" aria-label="Toggle Menu" class="text-slate-300 hover:text-cyan-400 focus:outline-none p-2 rounded-lg bg-dark-700/80 border border-white/10">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Drawer Navigation (outside header to prevent backdrop-filter containing block trap) -->
<div id="mobile-menu" class="hidden lg:hidden fixed inset-0 z-[9999] bg-[#030712]/98 backdrop-blur-2xl overflow-y-auto px-6 py-6 border-b border-white/10 shadow-2xl">
    <div class="flex items-center justify-between pb-6 border-b border-white/10">
        <a href="<?= url() ?>" class="flex items-center">
            <img src="<?= asset('images/logo.png') ?>" alt="<?= SITE_NAME ?>" class="h-9 w-auto">
        </a>
        <button id="mobile-menu-close" type="button" aria-label="Close Menu" class="p-2 text-slate-400 hover:text-white rounded-lg bg-white/5 border border-white/10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>
    
    <div class="mt-6 space-y-4 pb-12">
        <a href="<?= url() ?>" class="block py-2 text-base font-semibold text-slate-200 hover:text-cyan-400">Home</a>
        
        <div class="py-3 border-t border-white/10">
            <div class="text-xs font-bold text-cyan-400 uppercase tracking-wider mb-2">1. Services</div>
            <div class="space-y-2 pl-3">
                <a href="<?= url('services/erp') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">1.1 ERP</a>
                <a href="<?= url('services/cloud') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">1.2 Cloud</a>
                <a href="<?= url('services/security') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">1.3 Security</a>
                <a href="<?= url('services/data-solutions') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">1.4 Data solutions</a>
            </div>
        </div>

        <div class="py-3 border-t border-white/10">
            <div class="text-xs font-bold text-cyan-400 uppercase tracking-wider mb-2">2. SAP</div>
            <div class="space-y-2 pl-3">
                <a href="<?= url('sap/consulting') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">2.1 SAP Consulting</a>
                <a href="<?= url('sap/migration') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">2.2 SAP Migration</a>
                <a href="<?= url('sap/implementation') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">2.3 SAP Implementation</a>
                <a href="<?= url('sap/support') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">2.4 SAP Support</a>
                <a href="<?= url('sap/ewm') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">2.5 SAP EWM</a>
                <a href="<?= url('sap/hybris') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">2.6 SAP Hybris</a>
            </div>
        </div>

        <div class="py-3 border-t border-white/10">
            <div class="text-xs font-bold text-cyan-400 uppercase tracking-wider mb-2">3. Industries</div>
            <div class="space-y-2 pl-3">
                <a href="<?= url('industries/manufacturing') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">3.1 Manufacturing</a>
                <a href="<?= url('industries/services') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">3.2 Services</a>
                <a href="<?= url('industries/retail') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">3.3 Retail</a>
                <a href="<?= url('industries/education') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">3.4 Education</a>
                <a href="<?= url('industries/public-sector') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">3.5 Public sector</a>
            </div>
        </div>

        <div class="py-3 border-t border-white/10">
            <div class="text-xs font-bold text-cyan-400 uppercase tracking-wider mb-2">4. ERP Delivery</div>
            <div class="space-y-2 pl-3">
                <a href="<?= url('erp-delivery/odoo') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">4.1 Odoo end to end solutions</a>
                <a href="<?= url('erp-delivery/zoho') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">4.2 ZOHO ERP</a>
                <a href="<?= url('erp-delivery/freshdesk') ?>" class="block py-1 text-sm text-slate-300 hover:text-white hover:text-cyan-300">4.3 Fresh Desk</a>
            </div>
        </div>

        <div class="py-3 border-t border-white/10 space-y-2">
            <a href="<?= url('about') ?>" class="block py-2 text-base font-semibold text-slate-200 hover:text-cyan-400">About Us</a>
            <a href="<?= url('careers') ?>" class="block py-2 text-base font-semibold text-slate-200 hover:text-cyan-400">Careers</a>
        </div>

        <div class="pt-4 pb-6">
            <a href="<?= url('contact') ?>" class="w-full text-center block py-3 px-6 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-600 text-dark-900 font-bold shadow-lg shadow-cyan-500/25">
                5. Contact us &rarr;
            </a>
        </div>
    </div>
</div>
