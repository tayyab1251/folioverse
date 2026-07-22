{{-- <!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio — PHP Laravel Developer</title>

    <!-- Fonts & Icons (no alpine) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lucide-static/0.376.0/font/lucide.min.css">

    <style>
        /* ============ DESIGN TOKENS ============ */
        :root {
            --ink: #0B2036;
            --ink-2: #12314F;
            --ink-3: #1B4066;
            --line: #7FB2D6;
            --line-dim: #4C7DA0;
            --brass: #C98A3E;
            --brass-2: #E4A85C;
            --paper: #EDEEE9;
            --paper-2: #E1E3DB;
            --text-dark: #0F1B26;
            --radius: 3px;
            --dur: .5s;
        }

        html.dark {
            --bg: var(--ink);
            --bg-panel: var(--ink-2);
            --bg-panel-2: var(--ink-3);
            --fg: #E7EEF3;
            --fg-dim: var(--line);
            --border: rgba(127, 178, 214, .25);
            --grid-line: rgba(127, 178, 214, .08);
        }

        html.light {
            --bg: var(--paper);
            --bg-panel: #F5F6F2;
            --bg-panel-2: var(--paper-2);
            --fg: var(--text-dark);
            --fg-dim: #3E5266;
            --border: rgba(15, 27, 38, .12);
            --grid-line: rgba(15, 27, 38, .06);
        }

        * {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--fg);
            font-family: 'Inter', sans-serif;
            transition: background var(--dur) ease, color var(--dur) ease;
            -webkit-font-smoothing: antialiased;
        }

        ::selection {
            background: var(--brass);
            color: #1A1005;
        }

        h1,
        h2,
        h3,
        .display {
            font-family: 'Space Grotesk', sans-serif;
            letter-spacing: -0.01em;
        }

        .mono {
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: .02em;
        }

        a,
        button {
            cursor: pointer;
        }

        a:focus-visible,
        button:focus-visible,
        input:focus-visible,
        textarea:focus-visible {
            outline: 2px solid var(--brass);
            outline-offset: 3px;
        }

        /* ---- blueprint grid backdrop ---- */
        .grid-bg {
            background-image:
                linear-gradient(var(--grid-line) 1px, transparent 1px),
                linear-gradient(90deg, var(--grid-line) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* ---- title-block style annotation label used throughout (the signature element) ---- */
        .fig-label {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--fg-dim);
            padding-bottom: .5rem;
            margin-bottom: 2rem;
            border-bottom: 1px solid var(--border);
        }

        .fig-label::before {
            content: '';
            width: 6px;
            height: 6px;
            background: var(--brass);
            display: inline-block;
        }

        .container {
            max-width: 1120px;
            margin: 0 auto;
            padding: 0 24px;
        }

        section {
            position: relative;
            padding: 120px 0;
            border-bottom: 1px solid var(--border);
        }

        /* corner crop marks — quiet blueprint reference marks on each section */
        .crop {
            position: absolute;
            width: 14px;
            height: 14px;
            opacity: .5;
        }

        .crop.tl {
            top: 24px;
            left: 24px;
            border-top: 1px solid var(--fg-dim);
            border-left: 1px solid var(--fg-dim);
        }

        .crop.tr {
            top: 24px;
            right: 24px;
            border-top: 1px solid var(--fg-dim);
            border-right: 1px solid var(--fg-dim);
        }

        /* ============ NAV / TITLE BLOCK ============ */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            background: color-mix(in srgb, var(--bg) 88%, transparent);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            max-width: 1120px;
            margin: 0 auto;
            padding: 16px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: var(--fg);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .brand .dot {
            width: 8px;
            height: 8px;
            background: var(--brass);
        }

        .nav-links {
            display: flex;
            gap: 28px;
            align-items: center;
        }

        .nav-links a {
            color: var(--fg-dim);
            text-decoration: none;
            font-size: 14px;
            transition: color .2s;
        }

        .nav-links a:hover {
            color: var(--brass-2);
        }

        .toggle {
            width: 44px;
            height: 24px;
            border-radius: 99px;
            border: 1px solid var(--border);
            background: var(--bg-panel);
            position: relative;
            padding: 0;
            cursor: pointer;
        }

        .toggle .knob {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: var(--brass);
            transition: transform .3s ease;
        }

        html.light .toggle .knob {
            transform: translateX(20px);
        }

        /* ============ HERO ============ */
        .hero {
            min-height: 100svh;
            display: flex;
            align-items: center;
            border-bottom: 1px solid var(--border);
            padding-top: 80px;
        }

        .hero-grid-anim {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .hero-grid-anim svg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
        }

        .hero-line {
            stroke: var(--line-dim);
            stroke-width: 1;
            opacity: .35;
            stroke-dasharray: 6 10;
            animation: dash 26s linear infinite;
        }

        @keyframes dash {
            to {
                stroke-dashoffset: -400;
            }
        }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 24px;
        }

        .eyebrow-line {
            width: 32px;
            height: 1px;
            background: var(--brass);
        }

        .hero h1 {
            font-size: clamp(38px, 6vw, 60px);
            line-height: 1.05;
            font-weight: 700;
            margin: 0 0 20px;
            max-width: 14ch;
        }

        .hero h1 .accent {
            color: var(--brass-2);
        }

        .hero p.sub {
            font-size: 19px;
            color: var(--fg-dim);
            max-width: 44ch;
            margin: 0 0 36px;
            line-height: 1.6;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 26px;
            font-size: 14px;
            font-weight: 600;
            border-radius: var(--radius);
            text-decoration: none;
            transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
            border: 1px solid transparent;
        }

        .btn-primary {
            background: var(--brass);
            color: #1A1005;
        }

        .btn-primary:hover {
            background: var(--brass-2);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px -8px rgba(201, 138, 62, .5);
        }

        .btn-ghost {
            border-color: var(--border);
            color: var(--fg);
        }

        .btn-ghost:hover {
            border-color: var(--brass);
            color: var(--brass-2);
            transform: translateY(-2px);
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        /* ============ STATS ============ */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
        }

        .stat {
            background: var(--bg);
            padding: 36px 28px;
        }

        .stat .num {
            font-family: 'Space Grotesk';
            font-size: 42px;
            font-weight: 700;
            color: var(--brass-2);
        }

        .stat .label {
            font-size: 13px;
            color: var(--fg-dim);
            margin-top: 6px;
        }

        .logos {
            margin-top: 56px;
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            opacity: .7;
        }

        .logos span {
            font-family: 'JetBrains Mono';
            font-size: 13px;
            letter-spacing: .08em;
            color: var(--fg-dim);
        }

        /* ============ WORK ============ */
        .work-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .work-card {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            overflow: hidden;
            background: var(--bg-panel);
            text-decoration: none;
            color: var(--fg);
            display: block;
            transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }

        .work-card:hover {
            transform: translateY(-6px);
            border-color: var(--brass);
            box-shadow: 0 20px 50px -20px rgba(201, 138, 62, .35);
        }

        .work-thumb {
            height: 180px;
            position: relative;
            background:
                repeating-linear-gradient(135deg, var(--bg-panel-2) 0 2px, transparent 2px 14px);
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid var(--border);
        }

        .work-thumb .idx {
            font-family: 'JetBrains Mono';
            font-size: 13px;
            color: var(--fg-dim);
            position: absolute;
            top: 12px;
            left: 14px;
        }

        .work-body {
            padding: 22px;
        }

        .work-body h3 {
            margin: 0 0 8px;
            font-size: 19px;
        }

        .tech-row {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin: 12px 0 16px;
        }

        .tag {
            font-family: 'JetBrains Mono';
            font-size: 11px;
            padding: 3px 8px;
            border: 1px solid var(--border);
            color: var(--fg-dim);
            border-radius: 2px;
        }

        .view-link {
            font-size: 13px;
            color: var(--brass-2);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .work-card:hover .view-link {
            gap: 10px;
        }

        /* ============ SKILLS ============ */
        .skill-group {
            margin-bottom: 40px;
        }

        .skill-group h4 {
            font-family: 'JetBrains Mono';
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .12em;
            color: var(--fg-dim);
            margin-bottom: 16px;
        }

        .skill-icons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .skill-chip {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-size: 13px;
            background: var(--bg-panel);
            transition: border-color .2s, transform .2s;
        }

        .skill-chip:hover {
            border-color: var(--brass);
            transform: translateY(-2px);
        }

        .skill-dot {
            width: 6px;
            height: 6px;
            background: var(--line);
            flex-shrink: 0;
        }

        /* ============ TESTIMONIALS ============ */
        .testi-track {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .testi-card {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 28px;
            background: var(--bg-panel);
        }

        .testi-card p {
            color: var(--fg);
            line-height: 1.7;
            font-size: 15px;
            margin: 0 0 20px;
        }

        .testi-person {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--bg-panel-2);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Space Grotesk';
            font-size: 13px;
            font-weight: 700;
            color: var(--brass-2);
        }

        .testi-person .name {
            font-size: 14px;
            font-weight: 600;
        }

        .testi-person .role {
            font-size: 12px;
            color: var(--fg-dim);
        }

        /* ============ BLOG ============ */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .blog-card {
            text-decoration: none;
            color: var(--fg);
            border-top: 1px solid var(--border);
            padding-top: 20px;
            transition: transform .3s ease;
            display: block;
        }

        .blog-card:hover {
            transform: translateX(4px);
        }

        .blog-meta {
            font-family: 'JetBrains Mono';
            font-size: 11px;
            color: var(--fg-dim);
            display: flex;
            gap: 12px;
            margin-bottom: 10px;
        }

        .blog-card h3 {
            font-size: 17px;
            margin: 0 0 10px;
        }

        .blog-card p {
            font-size: 14px;
            color: var(--fg-dim);
            line-height: 1.6;
            margin: 0;
        }

        .skeleton {
            background: linear-gradient(90deg, var(--bg-panel) 25%, var(--bg-panel-2) 50%, var(--bg-panel) 75%);
            background-size: 200% 100%;
            animation: shimmer 1.4s infinite;
            border-radius: 2px;
        }

        @keyframes shimmer {
            0% {
                background-position: 200% 0
            }

            100% {
                background-position: -200% 0
            }
        }

        /* ============ CONTACT ============ */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 64px;
            align-items: start;
        }

        .contact-links {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .contact-links a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--fg);
            text-decoration: none;
            font-size: 15px;
            padding: 14px 0;
            border-bottom: 1px solid var(--border);
            transition: color .2s, padding-left .2s;
        }

        .contact-links a:hover {
            color: var(--brass-2);
            padding-left: 6px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        label {
            font-family: 'JetBrains Mono';
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: var(--fg-dim);
            margin-bottom: 6px;
            display: block;
        }

        input,
        textarea {
            width: 100%;
            background: var(--bg-panel);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 12px 14px;
            color: var(--fg);
            font-family: 'Inter';
            font-size: 14px;
        }

        input::placeholder,
        textarea::placeholder {
            color: var(--fg-dim);
            opacity: .6;
        }

        .honeypot {
            position: absolute;
            left: -9999px;
            opacity: 0;
            height: 0;
        }

        /* ============ FOOTER (title block, mirrors nav) ============ */
        footer {
            padding: 40px 0;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
        }

        .footer-meta {
            font-family: 'JetBrains Mono';
            font-size: 12px;
            color: var(--fg-dim);
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
        }

        .footer-social {
            display: flex;
            gap: 18px;
        }

        .footer-social a {
            color: var(--fg-dim);
            text-decoration: none;
            transition: color .2s;
        }

        .footer-social a:hover {
            color: var(--brass-2);
        }

        /* utilities */
        .hidden {
            display: none !important;
        }

        @media (prefers-reduced-motion:reduce) {
            .hero-line {
                animation: none;
            }

            * {
                transition-duration: .01ms !important;
                animation-duration: .01ms !important;
            }
        }

        @media (max-width:860px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .work-grid,
            .testi-track,
            .blog-grid {
                grid-template-columns: 1fr;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            section {
                padding: 80px 0;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</head>

<body class="grid-bg">

    <!-- ============ NAV — acts as the drawing's title block ============ -->
    <nav>
        <div class="nav-inner">
            <a href="#" class="brand"><span class="dot"></span>TAYYAB<span class="mono"
                    style="font-size:11px;color:var(--fg-dim);font-weight:400;">.dev</span></a>
            <div class="nav-links">
                <a href="#work">Work</a>
                <a href="#stack">Stack</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <button class="toggle" id="themeToggle" aria-label="Toggle dark and light theme">
                    <span class="knob"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- ============ HERO ============ -->
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
                <span class="mono" style="font-size:12px;color:var(--fg-dim);">FIG. 01 — LARAVEL DEVELOPER ·
                    KARACHI</span>
            </div>
            <h1>I build <span class="accent">fast, precise</span> web systems, not just websites.</h1>
            <p class="sub">Full-stack developer working in Laravel, Livewire and Alpine.js — focused on performance,
                clean architecture, and interfaces that feel considered rather than assembled.</p>
            <div class="hero-actions">
                <a href="#work" class="btn btn-primary"><i class="lucide lucide-arrow-down-right"></i> View Work</a>
                <a href="#contact" class="btn btn-ghost">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- ============ STATS / SOCIAL PROOF ============ -->
    <section>
        <div class="crop tl"></div>
        <div class="crop tr"></div>
        <div class="container">
            <div class="fig-label">FIG. 02 — TRACK RECORD</div>
            <div class="stats-grid">
                <div class="stat">
                    <div class="num">3+</div>
                    <div class="label">Years building with Laravel</div>
                </div>
                <div class="stat">
                    <div class="num">20+</div>
                    <div class="label">Projects shipped</div>
                </div>
                <div class="stat">
                    <div class="num">12</div>
                    <div class="label">Clients worked with</div>
                </div>
                <div class="stat">
                    <div class="num">98</div>
                    <div class="label">Avg. Lighthouse score</div>
                </div>
            </div>
            <div class="logos">
                <span>CLIENT A</span><span>CLIENT B</span><span>CLIENT C</span><span>CLIENT D</span><span>CLIENT
                    E</span>
            </div>
        </div>
    </section>

    <!-- ============ FEATURED WORK ============ -->
    <section id="work">
        <div class="crop tl"></div>
        <div class="crop tr"></div>
        <div class="container">
            <div class="fig-label">FIG. 03 — SELECTED WORK</div>
            <div class="work-grid">
                <a href="#" class="work-card">
                    <div class="work-thumb"><span class="idx mono">01</span></div>
                    <div class="work-body">
                        <h3>Experience Manager CMS</h3>
                        <p style="font-size:14px;color:var(--fg-dim);margin:0;">Headless Laravel CMS with inline
                            contextual editing and a TipTap block editor.</p>
                        <div class="tech-row"><span class="tag">Laravel</span><span class="tag">Livewire</span><span
                                class="tag">TipTap</span></div>
                        <span class="view-link">View Project →</span>
                    </div>
                </a>
                <a href="#" class="work-card">
                    <div class="work-thumb"><span class="idx mono">02</span></div>
                    <div class="work-body">
                        <h3>Real-time Analytics Dashboard</h3>
                        <p style="font-size:14px;color:var(--fg-dim);margin:0;">Cookie-less, privacy-first traffic and
                            scroll-depth tracker.</p>
                        <div class="tech-row"><span class="tag">Laravel</span><span class="tag">Redis</span><span
                                class="tag">Alpine.js</span></div>
                        <span class="view-link">View Project →</span>
                    </div>
                </a>
                <a href="#" class="work-card">
                    <div class="work-thumb"><span class="idx mono">03</span></div>
                    <div class="work-body">
                        <h3>Static-Cache Storefront</h3>
                        <p style="font-size:14px;color:var(--fg-dim);margin:0;">Laravel-powered store that serves flat
                            HTML for sub-100ms loads.</p>
                        <div class="tech-row"><span class="tag">Laravel</span><span class="tag">MySQL</span><span
                                class="tag">Meilisearch</span></div>
                        <span class="view-link">View Project →</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ TECH STACK ============ -->
    <section id="stack">
        <div class="crop tl"></div>
        <div class="crop tr"></div>
        <div class="container">
            <div class="fig-label">FIG. 04 — TOOLING</div>

            <div class="skill-group">
                <h4>Frontend</h4>
                <div class="skill-icons">
                    <div class="skill-chip"><span class="skill-dot"></span>Blade</div>
                    <div class="skill-chip"><span class="skill-dot"></span>Alpine.js</div>
                    <div class="skill-chip"><span class="skill-dot"></span>Tailwind CSS</div>
                    <div class="skill-chip"><span class="skill-dot"></span>TipTap</div>
                </div>
            </div>
            <div class="skill-group">
                <h4>Backend</h4>
                <div class="skill-icons">
                    <div class="skill-chip"><span class="skill-dot"></span>Laravel</div>
                    <div class="skill-chip"><span class="skill-dot"></span>Livewire</div>
                    <div class="skill-chip"><span class="skill-dot"></span>MySQL</div>
                    <div class="skill-chip"><span class="skill-dot"></span>Redis</div>
                </div>
            </div>
            <div class="skill-group">
                <h4>Tools</h4>
                <div class="skill-icons">
                    <div class="skill-chip"><span class="skill-dot"></span>Meilisearch</div>
                    <div class="skill-chip"><span class="skill-dot"></span>Docker</div>
                    <div class="skill-chip"><span class="skill-dot"></span>Git / GitHub</div>
                    <div class="skill-chip"><span class="skill-dot"></span>Cloudinary</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ TESTIMONIALS (static grid) ============ -->
    <section>
        <div class="crop tl"></div>
        <div class="crop tr"></div>
        <div class="container">
            <div class="fig-label">FIG. 05 — CLIENT NOTES</div>
            <div class="testi-track">
                <div class="testi-card">
                    <p>"Delivered ahead of schedule and the admin panel is genuinely easier to use than tools we paid
                        five figures for."</p>
                    <div class="testi-person">
                        <div class="avatar">SA</div>
                        <div>
                            <div class="name">Sara Ahmed</div>
                            <div class="role">Product Lead, Client Co.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card">
                    <p>"Rebuilt our content workflow around inline editing — our marketing team stopped needing a
                        developer for every change."</p>
                    <div class="testi-person">
                        <div class="avatar">HR</div>
                        <div>
                            <div class="name">Hamza Raza</div>
                            <div class="role">Founder, Studio B</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card">
                    <p>"Page speed went from an embarrassment to our best sales pitch. Lighthouse scores in the high 90s
                        across the board."</p>
                    <div class="testi-person">
                        <div class="avatar">ZM</div>
                        <div>
                            <div class="name">Zoya Malik</div>
                            <div class="role">CTO, Company C</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ BLOG ============ -->
    <section id="blog">
        <div class="crop tl"></div>
        <div class="crop tr"></div>
        <div class="container">
            <div class="fig-label">FIG. 06 — WRITING</div>
            <!-- Blog grid: visible when loadingBlog is false -->
            <div class="blog-grid" id="blogGrid">
                <a href="#" class="blog-card">
                    <div class="blog-meta"><span>JUL 2026</span><span>· 6 min read</span></div>
                    <h3>Building an inline content editor with Alpine.js</h3>
                    <p>How contextual editing removes the dashboard entirely, and what that means for non-technical
                        clients.</p>
                </a>
                <a href="#" class="blog-card">
                    <div class="blog-meta"><span>JUN 2026</span><span>· 4 min read</span></div>
                    <h3>Serving static HTML from a dynamic Laravel app</h3>
                    <p>The publish-to-flat-file pattern that got this site under 100ms first paint.</p>
                </a>
                <a href="#" class="blog-card">
                    <div class="blog-meta"><span>MAY 2026</span><span>· 5 min read</span></div>
                    <h3>A privacy-first analytics tracker, from scratch</h3>
                    <p>No cookies, no third-party script — just Laravel events and a lightweight dashboard.</p>
                </a>
            </div>
            <!-- skeleton loading state (hidden by default, shown via JS) -->
            <div class="blog-grid hidden" id="skeletonGrid">
                <div>
                    <div class="skeleton" style="height:12px;width:40%;margin-bottom:14px;"></div>
                    <div class="skeleton" style="height:18px;width:90%;margin-bottom:10px;"></div>
                    <div class="skeleton" style="height:14px;width:70%;"></div>
                </div>
                <div>
                    <div class="skeleton" style="height:12px;width:40%;margin-bottom:14px;"></div>
                    <div class="skeleton" style="height:18px;width:90%;margin-bottom:10px;"></div>
                    <div class="skeleton" style="height:14px;width:70%;"></div>
                </div>
                <div>
                    <div class="skeleton" style="height:12px;width:40%;margin-bottom:14px;"></div>
                    <div class="skeleton" style="height:18px;width:90%;margin-bottom:10px;"></div>
                    <div class="skeleton" style="height:14px;width:70%;"></div>
                </div>
            </div>
            <div style="margin-top:36px;">
                <a href="#" class="btn btn-ghost">View All Posts →</a>
            </div>
        </div>
    </section>

    <!-- ============ CONTACT ============ -->
    <section id="contact">
        <div class="crop tl"></div>
        <div class="crop tr"></div>
        <div class="container">
            <div class="fig-label">FIG. 07 — CONTACT</div>
            <div class="contact-grid">
                <div>
                    <h2 style="font-size:28px;margin:0 0 20px;">Have a project in mind?</h2>
                    <p style="color:var(--fg-dim);line-height:1.7;margin-bottom:28px;">Open to freelance work and
                        full-time roles. Usually replies within a day.</p>
                    <div class="contact-links">
                        <a href="mailto:tayyabsabir72@gmail.com"><i class="lucide lucide-mail"></i> tayyabsabir72@gmail.com</a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener"><i
                                class="lucide lucide-linkedin"></i> LinkedIn</a>
                        <a href="https://github.com" target="_blank" rel="noopener"><i class="lucide lucide-github"></i>
                            GitHub</a>
                    </div>
                </div>
                <form id="contactForm">
                    <!-- honeypot field -->
                    <input type="text" name="company" class="honeypot" tabindex="-1" autocomplete="off">
                    <div>
                        <label for="name">Name</label>
                        <input id="name" type="text" placeholder="Your name" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="you@company.com" required>
                    </div>
                    <div>
                        <label for="message">Message</label>
                        <textarea id="message" rows="4" placeholder="Tell me about the project" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="justify-content:center;">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- ============ FOOTER ============ -->
    <footer>
        <div class="container">
            <div class="footer-inner">
                <div class="footer-meta">
                    <span>© 2026 TAYYAB SABIR</span>
                    <span>REV. 1.0</span>
                    <span>BUILT WITH LARAVEL + TAILWIND</span>
                </div>
                <div class="footer-social">
                    <a href="https://github.com" target="_blank" rel="noopener" aria-label="GitHub"><i
                            class="lucide lucide-github"></i></a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn"><i
                            class="lucide lucide-linkedin"></i></a>
                    <a href="mailto:tayyabsabir72@gmail.com" aria-label="Email"><i class="lucide lucide-mail"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        (function() {
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

            toggleBtn.addEventListener('click', function() {
                updateTheme(!dark);
            });

            // ----- Blog skeleton loader (replaces x-show/x-cloak) -----
            const blogGrid = document.getElementById('blogGrid');
            const skeletonGrid = document.getElementById('skeletonGrid');

            // Show skeleton, hide real blog initially
            blogGrid.classList.add('hidden');
            skeletonGrid.classList.remove('hidden');

            // After 700ms, show blog, hide skeleton
            setTimeout(function() {
                blogGrid.classList.remove('hidden');
                skeletonGrid.classList.add('hidden');
            }, 700);

            // ----- Contact form handler -----
            const contactForm = document.getElementById('contactForm');
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Functionality to be implemented.');
                // Optionally reset form:
                // this.reset();
            });

        })();
    </script>

</body>

</html> --}}