<section id="contact">
    <div class="crop tl"></div>
    <div class="crop tr"></div>
    <div class="container">
        <div class="fig-label">FIG. 07 — CONTACT</div>
        <div class="contact-grid">
            <div>
                <h2 style="font-size:28px;margin:0 0 20px;">Have a project in mind?</h2>
                <p style="color:var(--fg-dim);line-height:1.7;margin-bottom:28px;">
                    Open to freelance work and full-time roles. Usually replies within a day.
                </p>
                <div class="contact-links">
                    <a href="mailto:{{ config('portfolio.email', 'tayyabsabir72@gmail.com') }}">
                        <i class="lucide lucide-mail"></i> {{ config('portfolio.email', 'tayyabsabir72@gmail.com') }}
                    </a>
                    <a href="{{ config('portfolio.linkedin', '#') }}" target="_blank" rel="noopener">
                        <i class="lucide lucide-linkedin"></i> LinkedIn
                    </a>
                    <a href="{{ config('portfolio.github', '#') }}" target="_blank" rel="noopener">
                        <i class="lucide lucide-github"></i> GitHub
                    </a>
                </div>
            </div>
            <form id="contactForm" action="" method="POST">
                @csrf
                <input type="text" name="company" class="honeypot" tabindex="-1" autocomplete="off">
                
                <div>
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" placeholder="Your name" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="you@company.com" required>
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="Tell me about the project" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="justify-content:center;">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>