<?php
$pageTitle = "5. Contact us";
$pageDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 5. Contact us at Zylvora Technologies.";
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