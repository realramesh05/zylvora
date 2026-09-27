<?php
$pageTitle = "2. SAP";
$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 2. SAP practice overview.";
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