@extends('layouts.app')

@section('content')
    <section class="section intro-row" style="display:flex;justify-content:space-between;margin-top:171px;margin-bottom:112px;flex-wrap:wrap;">
        <div class="intro-main" style="flex:0 0 75%;min-width:280px;">
            <h1 class="animate-on-scroll">Conheça<br>Os Nossos Serviços</h1>
            <p class="lead animate-on-scroll" style="padding-top:30px;">Na ZENVYOR, transformamos desafios em soluções integradas e inovadoras. Com um portfólio abrangente, desenvolvemos projetos que combinam rigor técnico, eficiência e sustentabilidade, adaptando cada solução às necessidades específicas de nossos clientes. Descubra as nossas áreas de atuação:</p>
        </div>
    </section>

    <section class="section">
        @include('partials.service-grid', ['grid' => $grid])
    </section>

    @include('partials.cta', ['text' => 'Tem alguma dúvida, sugestão ou deseja solicitar um orçamento? A nossa equipa está sempre disponível para o ajudar. Entre em contacto connosco por telefone, e-mail ou através do botão de contacto abaixo. Queremos ouvir o que tem a dizer e oferecer-lhe a melhor experiência possível. Conte com a ZENVYOR para esclarecer questões, apresentar soluções personalizadas e concretizar os seus projetos. Esperamos pelo seu contacto!'])
@endsection
