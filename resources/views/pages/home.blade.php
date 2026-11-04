@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <h1 class="animate-on-scroll">INDUSTRIAL<br>SOLUTIONS</h1>
            <a href="/servicos" class="btn btn-accent btn-lg animate-on-scroll">Saber Mais</a>
        </div>
    </section>

    <div id="scroll-indicator">
        <a href="#sobrenos" class="scroll-down" aria-label="Descer para a secção Sobre Nós">
            <svg viewBox="0 0 448 512" fill="currentColor"><path d="M246.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-160-160c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L224 402.7 361.4 265.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3l-160 160z"/></svg>
        </a>
    </div>

    <section id="sobrenos" class="section intro-row" style="display:flex;justify-content:space-between;gap:40px;margin-top:152px;margin-bottom:76px;flex-wrap:wrap;">
        <div class="intro-main" style="flex:0 0 68%;min-width:280px;">
            <h1 class="animate-on-scroll" style="text-align:left;">Energia Que<br>Move Grandes Projetos</h1>
            <p class="lead animate-on-scroll" style="padding-top:40px;">Na<strong>&nbsp;Zenvyor</strong>, dedicamo-nos a fornecer soluções integradas e inovadoras nas áreas de construção civil, obras públicas, energias renováveis, eletricidade geral, AVAC e metalomecânica. Com uma equipa experiente e comprometida, garantimos a excelência em cada projeto, desde a conceção até à execução. Descubra mais sobre a nossa missão, valores e trajetória.</p>
        </div>
        <div style="display:flex;flex-direction:column;align-items:flex-end;flex:1;min-width:200px;">
            <a href="/sobre-nos" class="btn btn-text animate-on-scroll">Sobre Nós
                <span class="btn-icon"><svg viewBox="0 0 512 512" fill="currentColor"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg></span>
            </a>
        </div>
    </section>

    @include('partials.counters', ['stats' => $stats, 'top' => '120px'])

    <section class="parallax-band" style="min-height:400px;background:image-set(url('/media/industrial.avif') type('image/avif'),url('/media/industrial.webp') type('image/webp')) center/cover no-repeat;background-attachment:fixed;margin:152px 0;" aria-label="Industrial"></section>

    <section class="section" style="display:flex;justify-content:space-between;gap:40px;margin-bottom:112px;flex-wrap:wrap;">
        <div style="flex:1;min-width:280px;">
            <h1 class="h-section animate-on-scroll" style="font-size:64px;line-height:84px;padding-bottom:20px;">Os Nossos Serviços</h1>
            <p class="lead animate-on-scroll" style="padding-top:20px;">Oferecemos soluções completas e personalizadas em <strong>construção civil, energias renováveis, eletricidade, AVAC e metalomecânica.</strong> Com uma equipa experiente e tecnologia de ponta, garantimos qualidade, eficiência e inovação em cada projeto. Descubra como podemos ajudar o seu negócio a crescer.</p>
        </div>
        <div style="display:flex;align-items:flex-end;">
            <a href="/servicos" class="btn btn-text animate-on-scroll">Conhecer Todos os Serviços
                <span class="btn-icon"><svg viewBox="0 0 512 512" fill="currentColor"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg></span>
            </a>
        </div>
    </section>

    <section class="section">
        @include('partials.service-grid', ['grid' => $grid])
    </section>

    <section class="section testimonials" style="min-height:210px;margin-top:152px;margin-bottom:152px;">
        <h2 class="h-section animate-on-scroll" style="line-height:84px;padding-bottom:20px;">O Que Dizem Sobre Nós</h2>
        <p class="lead animate-on-scroll" style="max-width:58.33%;padding:20px 0 80px;">A confiança dos nossos clientes é o nosso maior reconhecimento. Descubra as experiências de quem já trabalhou connosco e veja como fazemos a diferença em cada projeto.</p>
        <div class="t-slider animate-on-scroll">
            <div class="t-track" id="tTrack">
                @foreach($testimonials as $t)
                    <div class="t-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">{{ $t['text'] }}</div>
                            <div class="testimonial-name">{{ $t['name'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="t-dots" id="tDots">
                @foreach($testimonials as $i => $t)
                    <button type="button" class="t-dot{{ $i === 0 ? ' active' : '' }}" data-slide="{{ $i }}" aria-label="Testemunho {{ $i + 1 }}"></button>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.cta', ['text' => 'Se precisa de mais informações, tem dúvidas ou deseja iniciar um projeto, estamos prontos para ajudar!<br>Aguardamos o seu contato para encontrar a solução ideal para você!'])

    <section class="section partners" style="padding-top:5%;padding-bottom:5%;">
        <h2 class="h-section animate-on-scroll" style="line-height:84px;margin-bottom:56px;">Parcerias Que Importam</h2>
        <div class="partners-row" style="margin-top:22px;margin-bottom:56px;">
            <a href="https://itpi.pt/" target="_blank" rel="noopener"><picture><source srcset="/media/itpi.avif" type="image/avif"><source srcset="/media/itpi.webp" type="image/webp"><img src="/media/itpi.png" alt="ITPI" class="logo-parceiro"></picture></a>
            <a href="https://www.orbisource.pt/" target="_blank" rel="noopener"><picture><source srcset="/media/orbisource.avif" type="image/avif"><source srcset="/media/orbisource.webp" type="image/webp"><img src="/media/orbisource.png" alt="Orbisource" class="logo-parceiro"></picture></a>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var track = document.getElementById('tTrack');
        var dots = document.querySelectorAll('#tDots .t-dot');
        if (!track) return;
        var timer;
        function perView() { return window.innerWidth >= 1025 ? 3 : (window.innerWidth >= 768 ? 2 : 1); }
        function slideW() { var s = track.querySelector('.t-slide'); return s ? s.getBoundingClientRect().width + 24 : track.clientWidth; }
        function maxIndex() { return Math.max(0, track.children.length - perView()); }
        function goTo(i) {
            track.scrollTo({ left: i * slideW(), behavior: 'smooth' });
        }
        track.addEventListener('scroll', function () {
            var i = Math.round(track.scrollLeft / slideW());
            dots.forEach(function (d, j) { d.classList.toggle('active', j === i); });
        }, { passive: true });
        dots.forEach(function (d) {
            d.addEventListener('click', function () { goTo(parseInt(d.getAttribute('data-slide'), 10)); });
        });
        timer = setInterval(function () {
            var i = Math.round(track.scrollLeft / slideW());
            goTo(i >= maxIndex() ? 0 : i + 1);
        }, 5000);
        track.addEventListener('pointerdown', function () { clearInterval(timer); }, { once: true });
    });
</script>
@endpush
