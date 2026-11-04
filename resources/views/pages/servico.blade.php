@extends('layouts.app')

@section('content')
    <section class="section service-hero service-hero--{{ $service['band_top'] }}">
        <div class="service-hero-left">
            <a href="/servicos" class="btn-ghost" style="padding-bottom:20px;">
                <span class="btn-icon"><svg viewBox="0 0 448 512" fill="currentColor"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></span>
                serviços
            </a>
            <h1>{!! $service['h1'] !!}</h1>
            <p class="lead">{{ $service['intro'] }}</p>
            <a href="/contacto" class="btn btn-accent">Solicitar Orçamento
                <span class="btn-icon"><svg viewBox="0 0 512 512" fill="currentColor"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></span>
            </a>
        </div>
        <div class="service-hero-right">
            <picture><source srcset="/media/{{ preg_replace('/\.(jpe?g|png|webp)$/', '.avif', $service['hero_image']) }}" type="image/avif"><source srcset="/media/{{ preg_replace('/\.(jpe?g|png|webp)$/', '.webp', $service['hero_image']) }}" type="image/webp"><img src="/media/{{ $service['hero_image'] }}" alt="{{ $service['title'] }}" loading="eager">
        </div>
    </section>

    @include('partials.counters', ['stats' => $stats])

    <section class="service-band">
        <div class="service-band-img">
            <picture><source srcset="/media/{{ preg_replace('/\.(jpe?g|png|webp)$/', '.avif', $service['band_image']) }}" type="image/avif"><source srcset="/media/{{ preg_replace('/\.(jpe?g|png|webp)$/', '.webp', $service['band_image']) }}" type="image/webp"><img src="/media/{{ $service['band_image'] }}" alt="{{ $service['title'] }}" loading="lazy">
        </div>
        <div class="service-band-text">
            <p class="lead">{{ $service['band_text'] }}</p>
            <a href="/contacto" class="btn btn-accent">Contacte-nos
                <span class="btn-icon"><svg viewBox="0 0 512 512" fill="currentColor"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></span>
            </a>
        </div>
    </section>

    <section class="section" style="margin-top:152px;margin-bottom:40px;">
        <h2 class="h-section" style="width:95%;padding:20px 0;">Os Nossos Serviços</h2>
    </section>
    <section class="section">
        @include('partials.service-grid', ['grid' => $grid])
    </section>
@endsection
