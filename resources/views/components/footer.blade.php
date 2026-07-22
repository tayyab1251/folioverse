<footer>
    <div class="container">
        <div class="footer-inner">
            <div class="footer-meta">
                <span>© {{ date('Y') }} {{ config('portfolio.name', 'TAYYAB SABIR') }}</span>
                <span>REV. 1.0</span>
                <span>BUILT WITH LARAVEL + TAILWIND</span>
            </div>
            <div class="footer-social">
                <a href="{{ config('portfolio.github', '#') }}" target="_blank" rel="noopener" aria-label="GitHub">
                    <i class="lucide lucide-github"></i>
                </a>
                <a href="{{ config('portfolio.linkedin', '#') }}" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <i class="lucide lucide-linkedin"></i>
                </a>
                <a href="mailto:{{ config('portfolio.email', 'tayyabsabir72@gmail.com') }}" aria-label="Email">
                    <i class="lucide lucide-mail"></i>
                </a>
            </div>
        </div>
    </div>
</footer>