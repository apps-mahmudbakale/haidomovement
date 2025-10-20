document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });

    // Theme Toggle Functionality
    const themeToggle = document.getElementById('theme-toggle');
    const mobileThemeToggle = document.getElementById('mobile-theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const mobileThemeIcon = document.getElementById('mobile-theme-icon');
    const body = document.body;

    // Check for saved theme preference or use user's system preference
    if (localStorage.getItem('theme') === 'dark' ||
        (localStorage.getItem('theme') !== 'light' &&
        window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        body.classList.add('dark');
        body.classList.remove('light');
        if (themeIcon) themeIcon.classList.replace('fa-moon', 'fa-sun');
        if (mobileThemeIcon) mobileThemeIcon.classList.replace('fa-moon', 'fa-sun');
    } else {
        body.classList.remove('dark');
        body.classList.add('light');
        if (themeIcon) themeIcon.classList.replace('fa-sun', 'fa-moon');
        if (mobileThemeIcon) mobileThemeIcon.classList.replace('fa-sun', 'fa-moon');
    }

    // Toggle theme on button click
    function toggleTheme() {
        if (body.classList.contains('dark')) {
            body.classList.remove('dark');
            body.classList.add('light');
            if (themeIcon) themeIcon.classList.replace('fa-sun', 'fa-moon');
            if (mobileThemeIcon) mobileThemeIcon.classList.replace('fa-sun', 'fa-moon');
            localStorage.setItem('theme', 'light');
        } else {
            body.classList.add('dark');
            body.classList.remove('light');
            if (themeIcon) themeIcon.classList.replace('fa-moon', 'fa-sun');
            if (mobileThemeIcon) mobileThemeIcon.classList.replace('fa-moon', 'fa-sun');
            localStorage.setItem('theme', 'dark');
        }
    }

    if (themeToggle) themeToggle.addEventListener('click', toggleTheme);
    if (mobileThemeToggle) mobileThemeToggle.addEventListener('click', toggleTheme);

    // Listen for system theme changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
        if (!localStorage.getItem('theme')) { // Only if user hasn't set a preference
            if (event.matches) {
                body.classList.add('dark');
                body.classList.remove('light');
                if (themeIcon) themeIcon.classList.replace('fa-moon', 'fa-sun');
                if (mobileThemeIcon) mobileThemeIcon.classList.replace('fa-moon', 'fa-sun');
            } else {
                body.classList.remove('dark');
                body.classList.add('light');
                if (themeIcon) themeIcon.classList.replace('fa-sun', 'fa-moon');
                if (mobileThemeIcon) mobileThemeIcon.classList.replace('fa-sun', 'fa-moon');
            }
        }
    });

    // Sticky Header
    const header = document.getElementById('header');
    let lastScrollTop = 0;

    if (header) { // Ensure header exists
        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 50) {
                header.classList.add('sticky-header', 'header-shadow');

                if (scrollTop > lastScrollTop) {
                    // Scrolling down
                    header.style.transform = 'translateY(-100%)';
                } else {
                    // Scrolling up
                    header.style.transform = 'translateY(0)';
                }
            } else {
                header.classList.remove('sticky-header', 'header-shadow');
                header.style.transform = 'translateY(0)';
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
        });
    }

    // Mobile Menu Functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');
    
    if (mobileMenu) { // Ensure mobileMenu exists
        const mobileLinks = mobileMenu.querySelectorAll('a');

        function openMenu() {
            if (mobileMenu) mobileMenu.classList.add('active');
            if (overlay) overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            if (mobileMenu) mobileMenu.classList.remove('active');
            if (overlay) overlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        if (mobileMenuButton) mobileMenuButton.addEventListener('click', openMenu);
        if (closeMenuButton) closeMenuButton.addEventListener('click', closeMenu);
        if (overlay) overlay.addEventListener('click', closeMenu);

        mobileLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    }



    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');

            // Skip smooth scrolling for empty anchors or non-ID hrefs
            if (targetId === '#' || !targetId.startsWith('#')) return;

            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Get the header height for offset
                const headerHeight = header ? header.offsetHeight : 0;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
