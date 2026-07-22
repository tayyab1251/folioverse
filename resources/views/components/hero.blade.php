<section class="hero">
    <div class="hero-grid-anim" aria-hidden="true">
        <svg preserveAspectRatio="none">
            <line class="hero-line" x1="0" y1="20%" x2="100%" y2="10%"></line>
            <line class="hero-line" x1="0" y1="55%" x2="100%" y2="70%"></line>
            <line class="hero-line" x1="10%" y1="0" x2="30%" y2="100%"></line>
            <line class="hero-line" x1="80%" y1="0" x2="65%" y2="100%"></line>
        </svg>
    </div>
    <div class="container" style="position:relative;">
        <div class="eyebrow">
            <span class="eyebrow-line"></span>
            <span class="mono" style="font-size:12px;color:var(--fg-dim);">
                FIG. 01 — LARAVEL DEVELOPER · {{ strtoupper(config('app.location', 'KARACHI')) }}
            </span>
        </div>
        <h1>I build <span class="accent">fast, precise</span> web systems, not just websites.</h1>
        <p class="sub">{{ config('portfolio.tagline', 'Full-stack developer working in Laravel, Livewire and Alpine.js — focused on performance, clean architecture, and interfaces that feel considered rather than assembled.') }}</p>
        <div class="hero-actions">
            <a href="#work" class="btn btn-primary">
                <i class="lucide lucide-arrow-down-right"></i> View Work
            </a>
            <a href="#contact" class="btn btn-ghost">Get in Touch</a>
        </div>
    </div>
</section>