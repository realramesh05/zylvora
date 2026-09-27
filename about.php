<?php
$pageTitle = "About Us";
$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Learn more about Zylvora Technologies.";
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