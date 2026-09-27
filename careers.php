<?php
$pageTitle = "Careers";
$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Join Zylvora Technologies.";
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