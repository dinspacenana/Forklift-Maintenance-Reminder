/**
 * assets/js/page-interactive.js
 * Forklift Maintenance Reminder (FMR)
 * Handles smooth page transitions, tactile icon interactions, and micro-animations.
 */
document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // 0. Ensure all modals are appended directly to document.body
    // Prevents CSS stacking context trapping and backdrop overlay issues from containers
    function relocateModalsToBody() {
        document.querySelectorAll('.modal').forEach(function (modal) {
            if (modal.parentElement && modal.parentElement !== document.body) {
                document.body.appendChild(modal);
            }
        });
    }

    relocateModalsToBody();
    document.addEventListener('show.bs.modal', function (e) {
        if (e.target && e.target.parentElement !== document.body) {
            document.body.appendChild(e.target);
        }
    });

    // Clean up container transform/animation once enter animation finishes
    const pageContainer = document.querySelector('.dashboard-container');
    if (pageContainer) {
        pageContainer.addEventListener('animationend', function (e) {
            if (e.animationName === 'fmrPageEnter') {
                pageContainer.style.animation = 'none';
                pageContainer.style.transform = 'none';
            }
        });
    }

    // 1. Icon Click Tactile Bounce Interaction
    document.addEventListener('click', function (e) {
        const iconTarget = e.target.closest('.material-symbols-outlined, .action-icon-btn, .btn-reset-filter, .btn-assign-unit, .btn-add-user, .topbar-user-btn, .fmr-tab-link, button, a');
        if (iconTarget) {
            const icon = iconTarget.classList.contains('material-symbols-outlined')
                ? iconTarget
                : iconTarget.querySelector('.material-symbols-outlined');

            if (icon) {
                icon.classList.remove('icon-bounce');
                // Trigger DOM reflow to restart CSS animation
                void icon.offsetWidth;
                icon.classList.add('icon-bounce');
                setTimeout(() => {
                    icon.classList.remove('icon-bounce');
                }, 350);
            }
        }
    });

    // 2. Smooth Link Navigation Transitions
    const navLinks = document.querySelectorAll('a[href^="index.php"], a[href^="login.php"], a.sidebar-brand-link');
    navLinks.forEach(link => {
        // Skip modals, external links, anchor-only links, or download links
        if (link.getAttribute('data-bs-toggle') ||
            link.getAttribute('target') === '_blank' ||
            link.getAttribute('download')) {
            return;
        }

        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (!href || href === '#' || href.startsWith('javascript:')) return;

            // Check if link points to current full URL to avoid exit animation on self-click
            const currentUrl = window.location.pathname + window.location.search;
            if (href === currentUrl || href === window.location.href) return;

            const container = document.querySelector('.dashboard-container');
            if (container && !document.startViewTransition) {
                e.preventDefault();
                container.classList.add('fmr-page-exit');
                setTimeout(() => {
                    window.location.href = href;
                }, 140);
            }
        });
    });
});
