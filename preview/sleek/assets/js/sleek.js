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