<section id="work">
    <div class="crop tl"></div>
    <div class="crop tr"></div>
    <div class="container">
        <div class="fig-label">FIG. 03 — SELECTED WORK</div>
        <div class="work-grid">
            @php
                $projects = [
                    [
                        'title' => 'Experience Manager CMS',
                        'description' => 'Headless Laravel CMS with inline contextual editing and a TipTap block editor.',
                        'tags' => ['Laravel', 'Livewire', 'TipTap'],
                        'url' => '#'
                    ],
                    [
                        'title' => 'Real-time Analytics Dashboard',
                        'description' => 'Cookie-less, privacy-first traffic and scroll-depth tracker.',
                        'tags' => ['Laravel', 'Redis', 'Alpine.js'],
                        'url' => '#'
                    ],
                    [
                        'title' => 'Static-Cache Storefront',
                        'description' => 'Laravel-powered store that serves flat HTML for sub-100ms loads.',
                        'tags' => ['Laravel', 'MySQL', 'Meilisearch'],
                        'url' => '#'
                    ]
                ];
            @endphp
            @foreach($projects as $index => $project)
                <a href="{{ $project['url'] }}" class="work-card">
                    <div class="work-thumb">
                        <span class="idx mono">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <div class="work-body">
                        <h3>{{ $project['title'] }}</h3>
                        <p style="font-size:14px;color:var(--fg-dim);margin:0;">{{ $project['description'] }}</p>
                        <div class="tech-row">
                            @foreach($project['tags'] as $tag)
                                <span class="tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <span class="view-link">View Project →</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>