<div class="services-grid" style="margin-top:{{ $top ?? '0112px' }};">
    @foreach(array_slice($grid, 0, 3, true) as $slug => $s)
        <a href="/{{ $slug }}" class="service-tile" style="background-image:image-set(url('/media/{{ preg_replace('/\.(jpe?g|png|webp)$/', '.avif', $s['image']) }}') type('image/avif'),url('/media/{{ preg_replace('/\.(jpe?g|png|webp)$/', '.webp', $s['image']) }}') type('image/webp'),url('/media/{{ $s['image'] }}'));">
            <span class="tile-title">{!! $s['tile'] !!}</span>
        </a>
    @endforeach
</div>
<div class="services-grid" style="margin-top:20px;margin-bottom:{{ $bottom ?? '128px' }};">
    @foreach(array_slice($grid, 3, 3, true) as $slug => $s)
        <a href="/{{ $slug }}" class="service-tile" style="background-image:image-set(url('/media/{{ preg_replace('/\.(jpe?g|png|webp)$/', '.avif', $s['image']) }}') type('image/avif'),url('/media/{{ preg_replace('/\.(jpe?g|png|webp)$/', '.webp', $s['image']) }}') type('image/webp'),url('/media/{{ $s['image'] }}'));">
            <span class="tile-title tile-title--sm">{!! $s['tile'] !!}</span>
        </a>
    @endforeach
</div>
