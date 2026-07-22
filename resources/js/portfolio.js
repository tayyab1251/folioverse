(function () {
    "use strict";

    // ----- Theme toggle (replaces Alpine dark/light) -----
    const htmlEl = document.documentElement;
    const toggleBtn = document.getElementById('themeToggle');

    // default: dark
    let dark = true;

    function updateTheme(isDark) {
        dark = isDark;
        if (dark) {
            htmlEl.classList.remove('light');
            htmlEl.classList.add('dark');
        } else {
            htmlEl.classList.remove('dark');
            htmlEl.classList.add('light');
        }
    }

    toggleBtn.addEventListener('click', function () {
        updateTheme(!dark);
    });

    // ----- Blog skeleton loader (replaces x-show/x-cloak) -----
    const blogGrid = document.getElementById('blogGrid');
    const skeletonGrid = document.getElementById('skeletonGrid');

    // Show skeleton, hide real blog initially
    blogGrid.classList.add('hidden');
    skeletonGrid.classList.remove('hidden');

    // After 700ms, show blog, hide skeleton
    setTimeout(function () {
        blogGrid.classList.remove('hidden');
        skeletonGrid.classList.add('hidden');
    }, 700);

    // ----- Contact form handler -----
    const contactForm = document.getElementById('contactForm');
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Functionality to be implemented.');
        // Optionally reset form:
        // this.reset();
    });

})();
