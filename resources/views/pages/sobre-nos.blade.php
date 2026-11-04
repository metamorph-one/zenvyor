@extends('layouts.app')

@section('content')
    <section class="section about-hero">
        <div class="about-hero-img"></div>
        <div class="about-hero-text">
            <p class="kicker lead">sobre nós</p>
            <h1>A ZENVYOR</h1>
            <div class="lead">
                <p style="margin-bottom:1em;">A <strong>ZENVYOR</strong> é uma empresa que nasceu do compromisso de oferecer soluções integradas e de alta qualidade nos setores da construção civil, obras públicas, AVAC, energias renováveis, eletricidade e metalomecânica. Atuamos em todo o ciclo de vida dos projetos, desde a conceção e planeamento até à execução e manutenção, procurando sempre superar as expectativas dos nossos clientes.</p>
                <p style="margin-bottom:1em;">Com uma equipa multidisciplinar e em constante formação, combinamos experiência de mercado com inovação tecnológica para garantir eficiência, sustentabilidade e segurança em cada obra. Valorizamos a transparência e a excelência operacional, trabalhando lado a lado com parceiros e fornecedores de confiança. Desta forma, contribuímos para o progresso e para o desenvolvimento socioeconómico das comunidades onde estamos inseridos, sempre pautados por uma atuação ética e responsável.</p>
            </div>
            <a href="/contacto" class="btn btn-accent">Contacte-nos
                <span class="btn-icon"><svg viewBox="0 0 512 512" fill="currentColor"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></span>
            </a>
        </div>
    </section>

    <section class="vmv">
        <div class="section vmv-inner">
            <h2 class="h-section" style="font-size:64px;line-height:84px;">Visão, Missão<br>&amp; Valores</h2>
            <div class="vmv-cols">
                <div>
                    <h3>Visão</h3>
                    <p>Ser reconhecida como referência em soluções industriais e energéticas, promovendo desenvolvimento sustentável, inovação contínua e excelência operacional em cada projeto que realizamos.</p>
                    <h3>Missão</h3>
                    <p>Oferecer serviços completos em construção civil, obras públicas, AVAC, energias renováveis, eletricidade e metalomecânica, garantindo a melhor qualidade e contribuindo para o progresso socioeconómico. Procuramos sempre superar expectativas, entregando soluções confiáveis e eficientes que gerem valor para os nossos clientes e parceiros.</p>
                </div>
                <div>
                    <h3>Valores</h3>
                    <p><strong>Inovação</strong>: Investimos constantemente em pesquisa e desenvolvimento, adotando tecnologias e processos de ponta.</p>
                    <p><strong>Sustentabilidade</strong>: Respeitamos o meio ambiente e promovemos soluções que minimizam impactos e ampliam benefícios para a sociedade.</p>
                    <p><strong>Excelência</strong>: Priorizamos a qualidade e a segurança, garantindo resultados que reforçam a confiança de nossos clientes.</p>
                    <p><strong>Ética</strong>: Atuação íntegra e transparente em todas as relações, fortalecendo nossa credibilidade no mercado.</p>
                    <p><strong>Compromisso</strong>: Honramos prazos, acordos e metas, valorizando as necessidades de cada projeto e cliente.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="margin-top:152px;margin-bottom:64px;">
        <h2 class="h-section">Conheça Os<br>Nossos Serviços</h2>
    </section>
    <section class="section">
        @include('partials.service-grid', ['grid' => $grid])
    </section>
@endsection
