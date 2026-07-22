<section id="blog">
    <div class="crop tl"></div>
    <div class="crop tr"></div>
    <div class="container">
        <div class="fig-label">FIG. 06 — WRITING</div>
        
        @php
            $posts = [
                [
                    'date' => 'JUL 2026',
                    'read_time' => '6 min read',
                    'title' => 'Building an inline content editor with Alpine.js',
                    'excerpt' => 'How contextual editing removes the dashboard entirely, and what that means for non-technical clients.',
                    'url' => '#'
                ],
                [
                    'date' => 'JUN 2026',
                    'read_time' => '4 min read',
                    'title' => 'Serving static HTML from a dynamic Laravel app',
                    'excerpt' => 'The publish-to-flat-file pattern that got this site under 100ms first paint.',
                    'url' => '#'
                ],
                [
                    'date' => 'MAY 2026',
                    'read_time' => '5 min read',
                    'title' => 'A privacy-first analytics tracker, from scratch',
                    'excerpt' => 'No cookies, no third-party script — just Laravel events and a lightweight dashboard.',
                    'url' => '#'
                ]
            ];
        @endphp

        <div class="blog-grid" id="blogGrid">
            @foreach($posts as $post)
                <a href="{{ $post['url'] }}" class="blog-card">
                    <div class="blog-meta">
                        <span>{{ $post['date'] }}</span>
                        <span>· {{ $post['read_time'] }}</span>
                    </div>
                    <h3>{{ $post['title'] }}</h3>
                    <p>{{ $post['excerpt'] }}</p>
                </a>
            @endforeach
        </div>

        <!-- Skeleton Loading State -->
        <div class="blog-grid hidden" id="skeletonGrid">
            @for($i = 0; $i < 3; $i++)
                <div>
                    <div class="skeleton" style="height:12px;width:40%;margin-bottom:14px;"></div>
                    <div class="skeleton" style="height:18px;width:90%;margin-bottom:10px;"></div>
                    <div class="skeleton" style="height:14px;width:70%;"></div>
                </div>
            @endfor
        </div>

        <div style="margin-top:36px;">
            <a href="#" class="btn btn-ghost">View All Posts →</a>
        </div>
    </div>
</section>