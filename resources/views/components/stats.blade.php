<section>
    <div class="crop tl"></div>
    <div class="crop tr"></div>
    <div class="container">
        <div class="fig-label">FIG. 02 — TRACK RECORD</div>
        <div class="stats-grid">
            @php
                $stats = [
                    ['num' => '3+', 'label' => 'Years building with Laravel'],
                    ['num' => '20+', 'label' => 'Projects shipped'],
                    ['num' => '12', 'label' => 'Clients worked with'],
                    ['num' => '98', 'label' => 'Avg. Lighthouse score'],
                ];
            @endphp
            @foreach($stats as $stat)
                <div class="stat">
                    <div class="num">{{ $stat['num'] }}</div>
                    <div class="label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
        <div class="logos">
            @foreach(['CLIENT A', 'CLIENT B', 'CLIENT C', 'CLIENT D', 'CLIENT E'] as $client)
                <span>{{ $client }}</span>
            @endforeach
        </div>
    </div>
</section>