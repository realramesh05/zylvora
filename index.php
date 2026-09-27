<?php
$pageTitle = "Enterprise ERP, SAP Solutions & Cloud Architecture";
$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enterprise ERP, SAP Solutions, Cloud and Data Architecture.";
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