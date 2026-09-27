<?php
/**
 * Zylvora Technologies - Global Footer Component
 */
?>
<footer class="bg-dark-900 border-t border-white/10 pt-16 pb-12 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
            
            <!-- Column 1: Brand Info -->
            <div class="lg:col-span-2 space-y-4">
                <a href="<?= url() ?>" class="inline-flex items-center bg-white/95 hover:bg-white px-3.5 py-2 rounded-xl shadow-lg border border-white/20 transition-all group">
                    <img src="<?= asset('images/logo.png') ?>" alt="<?= SITE_NAME ?> Logo" class="h-8 sm:h-9 w-auto object-contain transition-transform group-hover:scale-105">
                </a>
                <p class="text-sm text-slate-400 max-w-sm">
                    Empowering modern enterprises with cutting-edge ERP integrations, strategic SAP practices, resilient Cloud architectures, and intelligent data frameworks.
                </p>
                <div class="flex items-center space-x-4 pt-2">
                    <a href="<?= SOCIAL_LINKEDIN ?>" target="_blank" rel="noopener" aria-label="LinkedIn" class="p-2 rounded-lg bg-white/5 hover:bg-cyan-500/20 text-slate-400 hover:text-cyan-400 transition">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.45a1.6 1.6 0 0 0-1.6 1.6 1.6 1.6 0 0 0 1.6 1.6 1.6 1.6 0 0 0 1.6-1.6 1.6 1.6 0 0 0-1.6-1.6Z"/></svg>
                    </a>
                    <a href="<?= SOCIAL_TWITTER ?>" target="_blank" rel="noopener" aria-label="Twitter" class="p-2 rounded-lg bg-white/5 hover:bg-cyan-500/20 text-slate-400 hover:text-cyan-400 transition">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Services -->
            <div>
                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4 border-l-2 border-cyan-400 pl-2">Services</h3>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li><a href="<?= url('services/erp') ?>" class="hover:text-cyan-400 transition">ERP Solutions</a></li>
                    <li><a href="<?= url('services/cloud') ?>" class="hover:text-cyan-400 transition">Cloud & DevOps</a></li>
                    <li><a href="<?= url('services/security') ?>" class="hover:text-cyan-400 transition">Cybersecurity</a></li>
                    <li><a href="<?= url('services/data-solutions') ?>" class="hover:text-cyan-400 transition">Data & AI Analytics</a></li>
                </ul>
            </div>

            <!-- Column 3: SAP Practices -->
            <div>
                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4 border-l-2 border-cyan-400 pl-2">SAP Practices</h3>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li><a href="<?= url('sap/consulting') ?>" class="hover:text-cyan-400 transition">SAP Consulting</a></li>
                    <li><a href="<?= url('sap/migration') ?>" class="hover:text-cyan-400 transition">SAP S/4HANA Migration</a></li>
                    <li><a href="<?= url('sap/implementation') ?>" class="hover:text-cyan-400 transition">SAP Implementation</a></li>
                    <li><a href="<?= url('sap/support') ?>" class="hover:text-cyan-400 transition">SAP Support & AMS</a></li>
                    <li><a href="<?= url('sap/ewm') ?>" class="hover:text-cyan-400 transition">SAP EWM</a></li>
                    <li><a href="<?= url('sap/hybris') ?>" class="hover:text-cyan-400 transition">SAP Hybris Commerce</a></li>
                </ul>
            </div>

            <!-- Column 4: Quick Links & Contact -->
            <div>
                <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4 border-l-2 border-cyan-400 pl-2">Company</h3>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li><a href="<?= url('about') ?>" class="hover:text-cyan-400 transition">About Zylvora</a></li>
                    <li><a href="<?= url('industries') ?>" class="hover:text-cyan-400 transition">Industries</a></li>
                    <li><a href="<?= url('careers') ?>" class="hover:text-cyan-400 transition">Careers <span class="ml-1 px-1.5 py-0.5 text-[10px] bg-cyan-500/20 text-cyan-400 rounded">Hiring</span></a></li>
                    <li><a href="<?= url('contact') ?>" class="hover:text-cyan-400 transition">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <!-- Sub-footer / Copyright -->
        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between text-xs text-slate-500 space-y-4 md:space-y-0">
            <p>&copy; <?= date('Y') ?> <?= COMPANY_LEGAL_NAME ?>. All rights reserved.</p>
            <div class="flex items-center space-x-6">
                <a href="<?= url('contact') ?>" class="hover:text-cyan-400 transition">Privacy Policy</a>
                <a href="<?= url('contact') ?>" class="hover:text-cyan-400 transition">Terms of Service</a>
                <a href="<?= url('sitemap.xml') ?>" class="hover:text-cyan-400 transition">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<!-- Toast notification container -->
<div id="toast-container"></div>

<!-- Scripts -->
<script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
