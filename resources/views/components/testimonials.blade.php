<section>
    <div class="crop tl"></div>
    <div class="crop tr"></div>
    <div class="container">
        <div class="fig-label">FIG. 05 — CLIENT NOTES</div>
        <div class="testi-track">
            @php
                $testimonials = [
                    [
                        'quote' => 'Delivered ahead of schedule and the admin panel is genuinely easier to use than tools we paid five figures for.',
                        'name' => 'Sara Ahmed',
                        'role' => 'Product Lead, Client Co.',
                        'initials' => 'SA'
                    ],
                    [
                        'quote' => 'Rebuilt our content workflow around inline editing — our marketing team stopped needing a developer for every change.',
                        'name' => 'Hamza Raza',
                        'role' => 'Founder, Studio B',
                        'initials' => 'HR'
                    ],
                    [
                        'quote' => 'Page speed went from an embarrassment to our best sales pitch. Lighthouse scores in the high 90s across the board.',
                        'name' => 'Zoya Malik',
                        'role' => 'CTO, Company C',
                        'initials' => 'ZM'
                    ]
                ];
            @endphp
            @foreach($testimonials as $testimonial)
                <div class="testi-card">
                    <p>"{{ $testimonial['quote'] }}"</p>
                    <div class="testi-person">
                        <div class="avatar">{{ $testimonial['initials'] }}</div>
                        <div>
                            <div class="name">{{ $testimonial['name'] }}</div>
                            <div class="role">{{ $testimonial['role'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>