<div class="section" style="margin-top:{{ $top ?? '152px' }};margin-bottom:{{ $bottom ?? '152px' }};">
    <div class="counters">
        @foreach($stats as $stat)
            <div class="counter">
                <span class="counter-number" data-counter="{{ $stat['number'] }}">0+</span>
                <span class="counter-title">{{ $stat['label'] }}</span>
            </div>
        @endforeach
    </div>
</div>
