<section id="stack">
    <div class="crop tl"></div>
    <div class="crop tr"></div>
    <div class="container">
        <div class="fig-label">FIG. 04 — TOOLING</div>

        @php
            $skillGroups = [
                'Frontend' => ['Blade', 'Alpine.js', 'Tailwind CSS', 'TipTap'],
                'Backend' => ['Laravel', 'Livewire', 'MySQL', 'Redis'],
                'Tools' => ['Meilisearch', 'Docker', 'Git / GitHub', 'Cloudinary']
            ];
        @endphp

        @foreach($skillGroups as $group => $skills)
            <div class="skill-group">
                <h4>{{ $group }}</h4>
                <div class="skill-icons">
                    @foreach($skills as $skill)
                        <div class="skill-chip">
                            <span class="skill-dot"></span>{{ $skill }}
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>