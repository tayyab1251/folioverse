<nav class="site-nav fixed-top"
  style="background: var(--bg); border-bottom: 1px solid var(--border); backdrop-filter: blur(10px);">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between" style="height: 64px;">
      <!-- Brand -->
      <a href="{{ route('home') }}" class="brand text-decoration-none d-flex align-items-center gap-2">
        <span class="dot"
          style="width:8px;height:8px;background:var(--brass);display:inline-block;border-radius:50%;"></span>
        <span
          style="font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:18px;color:var(--fg);">TAYYAB</span>
        <span class="mono"
          style="font-size:11px;color:var(--fg-dim);font-weight:400;font-family:'JetBrains Mono',monospace;">.dev</span>
      </a>

      <!-- Desktop Navigation -->
      <div class="d-none d-md-flex align-items-center gap-4">
        <a href="#about" class="nav-link"
          style="color:var(--fg-dim);text-decoration:none;font-size:14px;transition:color .2s;">About</a>
          <a href="#experience" class="nav-link"
          style="color:var(--fg-dim);text-decoration:none;font-size:14px;transition:color .2s;">Experience</a>
        <a href="#skills" class="nav-link"
          style="color:var(--fg-dim);text-decoration:none;font-size:14px;transition:color .2s;">Skills</a>
        <a href="#projects" class="nav-link"
          style="color:var(--fg-dim);text-decoration:none;font-size:14px;transition:color .2s;">Projects</a>
        <a href="#contact" class="nav-link"
          style="color:var(--fg-dim);text-decoration:none;font-size:14px;transition:color .2s;">Contact</a>

        <!-- Two Buttons + Theme Toggle -->
        <div class="d-flex align-items-center gap-2">
          <!-- Resume Button -->
          <a href="{{ asset('files/tayyab-sabir-resume.pdf') }}" class="btn btn-primary btn-sm" download target="_blank"
            style="background:var(--brass);border-color:var(--brass);color:#1A1005;font-weight:600;padding:6px 16px;border-radius:3px;transition:all .2s;     background: var(--color-accent);
    color: #191100;">
            Résumé
          </a>

          <!-- Blogs Button -->
          <a href="" class="btn btn-outline-secondary btn-sm"
            style="border-color:var(--border);color:var(--fg);font-weight:600;padding:6px 16px;border-radius:3px;transition:all .2s;">
            Blogs
          </a>

          <!-- Theme Toggle -->
          {{-- <button class="toggle" id="themeToggle" aria-label="Toggle dark and light theme"
            style="width:44px;height:24px;border-radius:99px;border:1px solid var(--border);background:var(--bg-panel);position:relative;padding:0;cursor:pointer;">
            <span class="knob"
              style="position:absolute;top:2px;left:2px;width:18px;height:18px;border-radius:50%;background:var(--brass);transition:transform .3s ease;"></span>
          </button> --}}
        </div>
      </div>

      <!-- Mobile Menu Toggle -->
      <button class="btn d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav"
        style="border-color:var(--border);color:var(--fg);">
        <i class="lucide lucide-menu">X</i>
      </button>
    </div>

    <!-- Mobile Navigation -->
    <div class="collapse d-md-none" id="mobileNav">
      <div class="d-flex flex-column gap-3 py-3" style="border-top:1px solid var(--border);">
        <a href="#about" class="nav-link" style="color:var(--fg-dim);text-decoration:none;font-size:14px;">About</a>
        <a href="#experience" class="nav-link" style="color:var(--fg-dim);text-decoration:none;font-size:14px;">Experience</a>
        <a href="#skills" class="nav-link" style="color:var(--fg-dim);text-decoration:none;font-size:14px;">Skills</a>
        <a href="#projects" class="nav-link"
          style="color:var(--fg-dim);text-decoration:none;font-size:14px;">Projects</a>
        <a href="#contact" class="nav-link" style="color:var(--fg-dim);text-decoration:none;font-size:14px;">Contact</a>
        <div class="d-flex gap-2">
          <a href="{{ asset('files/tayyab-sabir-resume.pdf') }}" class="btn btn-primary btn-sm flex-grow-1" download
            target="_blank" style="background:var(--brass);border-color:var(--brass);color:#1A1005;font-weight:600;background: var(--color-accent);
    color: #191100;">
            Résumé
          </a>
          <a href="" class="btn btn-outline-secondary btn-sm flex-grow-1"
            style="border-color:var(--border);color:var(--fg);font-weight:600;">
            Blogs
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>