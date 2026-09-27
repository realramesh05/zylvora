<?php
$pageTitle = "1. Services";
$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 1. Services overview.";
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